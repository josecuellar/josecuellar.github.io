---
id: 2065
title: 'Transactional Outbox &#038; Polling Publisher Patterns (2/3)'
date: '2025-11-21T21:49:18+00:00'
author: Jose
layout: revision
guid: 'https://josecuellar.net/?p=2065'
permalink: '/?p=2065'
---

A lo largo del tiempo las bases de datos *NoSQL* han ido mejorado sus características para ofrecernos *ACID* según el tipo (**Single Row, Single Shard o Distrituded**):

<figure class="wp-block-image size-large is-resized">![](https://josecuellar.net/wp-content/uploads/2020/04/image-21-1024x312.png)<figcaption class="wp-element-caption">*Modern databases offer distributed ACID, Sid Choudhury*</figcaption></figure>El problema principal, no radica en que **una determinada base de datos garantice o no ACID** en sus transacciones (lógicamente, debería serlo para minimizar el riesgo de inconsistencias), sino **dividir las operaciones de un mismo** ***workflow*** (creación completa del pedido con todas sus operaciones) **en varias transacciones locales independientes** entre los diferentes contextos y bases de datos, sean las que sean.

De modo que garantizar las comunicaciones entre los contextos es vital para permitir las ejecuciones distribuidas entre ellos manteniendo la consistencia de los datos.

Normalmente debemos **notificar el evento una vez realizada la transacción local**. Para ello, ejecutamos la transacción y a continuación publicamos el evento a nuestro *message-broker*:

<figure class="wp-block-image aligncenter size-large is-resized is-style-default">![](https://josecuellar.net/wp-content/uploads/2020/04/image-25.png)</figure>El problema es que **la transacción y el envío del evento, no son atómicos: se ejecutan independientemente** pudiendo provocar posibles inconsistencias de datos si alguno de ambos falla:

<figure class="wp-block-image aligncenter size-large is-resized is-style-default">![](https://josecuellar.net/wp-content/uploads/2020/04/image-23.png)</figure><figure class="wp-block-image aligncenter size-large is-resized is-style-default">![](https://josecuellar.net/wp-content/uploads/2020/04/image-24.png)</figure>El patrón **Transactional Outbox** nos permitirá una **única transacción atómica garantizando una entrega [At-Least-Once](https://www.cloudcomputingpatterns.org/at_least_once_delivery/)** y dándonos la posibilidad de **reprocesarlos** en cualquier momento.

Lo aplicaremos **guardando en la misma transacción tanto la operación que deseemos realizar (que garantice *ACID*), como los eventos** que pueda generar. Los eventos quedarán persistidos en la base de datos:

<figure class="wp-block-image aligncenter size-large is-style-default">![](https://josecuellar.net/wp-content/uploads/2020/04/image-26-1024x445.png)</figure>Mediante **[Polling Publisher](https://microservices.io/patterns/data/polling-publisher.html)** publicaríamos los eventos a nuestro *message-broker*. Manteniendo el estado de los eventos en el *outbox* comprobando el *[ACK ](https://en.wikipedia.org/wiki/Acknowledgement_(data_networks))*en el momento de la publicación (asegurando así la recepción del evento). O incluso, el consumidor podría actualizar el evento a procesado correctamente mediante un [*CorrelationId* ](https://medium.com/@scokmen/debugging-microservices-part-ii-the-correlation-identifier-552f9016afcd)o *MessageId*.

Aseguraremos **At-least-once**/Once-or-more (los mensajes no se perderán, aunque podrían duplicarse). Por ese motivo, nuestros consumidores deberían ser **[idempotentes ](http://shuttle.github.io/shuttle-esb/concepts-idempotence)**(la ejecución de una o varias veces tendrá el mismo resultado).

*Existen herramientas interesantes ya desarrolladas que nos permitirán adaptar outbox pattern de forma sencilla:*

- <https://docs.particular.net/nservicebus/outbox/>
- <https://github.com/dotnetcore/CAP>

*Como he comentado, existen motores de bases de datos distribuidas que nos permiten consistencia de datos en sus transacciones (con ciertas penalizaciones de rendimiento):*

> [Azure Cosmos Db](https://azure.microsoft.com/es-es/services/cosmos-db/) nos da la opción de *[strong consistency](https://docs.microsoft.com/es-es/azure/cosmos-db/consistency-levels)* (*single region/single operation*) y garantizando *ACID* mediante [TransactionalBatch](https://devblogs.microsoft.com/cosmosdb/introducing-transactionalbatch-in-the-net-sdk/). Ofreciéndonos las [Change Feed Functions](https://docs.microsoft.com/es-es/azure/cosmos-db/change-feed-functions) en el que nos notificará de cualquier inserción o actualización de un contenedor específico. Para ello, necesitaremos una colección donde guardaremos el estado de procesado de las notificaciones ([lease containers](https://docs.microsoft.com/bs-latn-ba/azure/cosmos-db/how-to-create-multiple-cosmos-db-triggers)).

De este modo (con algunos matices) podemos acercarnos al patrón *outbox* de forma sencilla (aunque, idealmente deberíamos crear una colección específica de *eventos* generados y disponer de un *polling publisher*):

<figure class="wp-block-image size-large is-resized is-style-default">![](https://josecuellar.net/wp-content/uploads/2020/05/image-7.png)</figure>Para **evitar dicha penalización de rendimiento y garantizar la consistencia**: podríamos *escuchar* los eventos generados creando los datos específicos de consulta en alguna otra base de datos o tecnología. **Notificando así además a otros servicios** (dada la importancia en la consistencia de datos en transacciones de negocio distribuidas como veremos en el [siguiente post](https://josecuellar.net/saga-pattern-3-3/)):

<figure class="wp-block-image size-large is-style-default">![](https://josecuellar.net/wp-content/uploads/2020/05/image-6.png)</figure>Hasta aquí uno de los patrones **más recomendados habitualmente** para garantizar el envío de eventos correspondientes a transacciones locales de cada servicio.

*Lecturas recomendadas:*

<div class="wp-block-group"><div class="wp-block-group">- <https://docs.microsoft.com/en-us/dotnet/architecture/microservices/multi-container-microservice-net-applications/subscribe-events>
- <https://docs.microsoft.com/bs-latn-ba/azure/cosmos-db/how-to-create-multiple-cosmos-db-triggers>
- <https://docs.microsoft.com/es-es/azure/cosmos-db/consistency-levels>
- <https://microservices.io/patterns/data/transactional-outbox.html>
- <https://jimmybogard.com/life-beyond-distributed-transactions-an-apostates-implementation-relational-resources/>
- <https://www.kamilgrzybek.com/design/the-outbox-pattern/>

</div></div><figure class="wp-block-embed-wordpress aligncenter wp-block-embed is-type-wp-embed is-provider-jose-cuellar-net"><div class="wp-block-embed__wrapper">https://josecuellar.net/saga-pattern-3-3/ </div></figure>