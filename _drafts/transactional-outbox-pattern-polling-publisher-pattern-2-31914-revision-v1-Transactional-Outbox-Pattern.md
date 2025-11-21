---
id: 1922
title: 'Transactional Outbox Pattern'
date: '2020-04-23T23:43:56+00:00'
author: Jose
layout: revision
guid: 'https://josecuellar.net/1914-revision-v1/'
permalink: '/?p=1922'
---

Dado que las bases de datos NoSQL evolucionan, han ido apareciendo diferentes opciones muy interesantes que te permitirán ACID según el tipo (Single Row, Single Shard o Distrituded):

![](/wp-content/uploads/2020/04/image-7.png)<figcaption>*Modern databases offer distributed ACID, Sid Choudhury*</figcaption>
*Con objetivo de simplificar la infraestructura y con este tipo de opciones: podríamos unificar el repositorio de lectura y escritura (adaptándolo y configurando las características en cada caso y según necesidades) mediante un único servicio de base de datos.*

**El problema principal, no radica en que una determinada base de datos garantice o no ACID** en sus transacciones locales (lógicamente, muy recomendable para minimizar el riesgo de inconsistencias de datos), sino **dividir las operaciones de un mismo workflow** (creación completa del pedido con todas sus operaciones) **en varias transacciones locales independientes entre los diferentes contextos y bases de datos**, sean las que sean.

De modo que garantizar las comunicaciones entre los contextos son vitales para garantizar las ejecuciones distribuidas entre ellos. Normalmente debemos **notificar el evento una vez realizada la transacción local**, para ello, ejecutamos la transacción y a continuación publicamos el evento a nuestro *message-broker*:

<div class="wp-block-image is-style-default">![](/wp-content/uploads/2020/04/image-11.png)
</div>**La transacción y el envío del evento, no son atómicos: se ejecutan independientemente.** Quizás falle alguno o ambos. Provocando una inconsistencia de datos.

Un patrón que nos permitirá una única transacción atómica garantizando una entrega **At-Least-Once**, y dándonos la posibilidad de **reprocesarlos** en cualquier momento, es el **Transactional Outbox Pattern**:

Tanto la operación que deseemos realizar sobre la base de datos (que garantice *ACID*), como los eventos que pueda generar, **se ejecutarán en la misma transacción**. Los eventos quedarán registrados en la base de datos:

<div class="wp-block-image is-style-default">![](/wp-content/uploads/2020/04/image-12.png)
</div>Mediante **Polling Publisher Pattern** publicaríamos los eventos a nuestro *message-broker* manteniendo el estado de los eventos del *outbox* comprobando *ACK* en el momento de la publicación del envío, asegurando así la recepción del evento. O incluso, el consumidor podría actualizar el estado a procesado correctamente mediante un *CorrelationId*.

Aseguraremos **At-least-one** o **Once-or-more** (los mensajes no se perderán, aunque podrían duplicarse) y por ese motivo, nuestros consumidores deberían ser **idempotentes** (la ejecución de una o varias veces tendrá el mismo resultado).

Existen herramientas interesantes ya desarrolladas que nos permitirán adaptar outbox pattern de forma sencilla:

<figure class="wp-block-embed"><div class="wp-block-embed__wrapper">https://docs.particular.net/nservicebus/outbox </div>
<figure class="wp-block-embed"><div class="wp-block-embed__wrapper">https://github.com/dotnetcore/CAP </div>
