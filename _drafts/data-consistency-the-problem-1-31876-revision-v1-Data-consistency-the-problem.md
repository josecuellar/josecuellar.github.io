---
id: 1883
title: 'Data consistency: the problem'
date: '2020-04-21T21:34:57+00:00'
author: Jose
layout: revision
guid: 'https://josecuellar.net/1876-revision-v1/'
permalink: '/?p=1883'
---

Medimos y basar nuestras decisiones en base a los datos que almacenamos en la interacción de usuarios sobre nuestro producto. Guardamos toda la información necesaria para dar respuestas y elaborar predicciones en base a históricos de datos. Adaptándonos y anticipándonos a las necesidades de nuestros usuarios.

**¿Te has preguntado si dichos datos son consistentes?**

*En este post hablaremos de consistencia: en qué consiste y cómo ha evolucionado a lo largo de las diferentes arquitecturas y tecnologías.*

**Interpretamos que nuestros datos son consistentes si:**

- Los datos **se relacionan correctamente** sin generar incongruencias. Existiendo una integridad referencial.

- Mantener **estados válidos** y concretos (la cantidad de unidades de un producto para un pedido no coincide con el registro de salida de stock).

- **Disponibles para la lectura** una vez se complete la transacción (acción u operación sobre la base de datos).

Los sistemas de gestión de bases de datos relacionales o **SGBDR** *(SQL Server, Oracle, MariaDB, MySQL, etc.)* nos garantizan la consistencia de los datos almacenados mediante **ACID** en sus transacciones:

- **Atomicy**: La transacción se ejecuta completamente, o no se ejecuta.

- **Consistency**: Sólo ejecutará la transacción si respeta las directrices de integridad referencial y reglas definidas, manteniendo en todo momento estados válidos y exactos.

- **Isolated**: Una transacción no puede afectar a otra garantizando que el estado final de ejecuciones concurrentes será el mismo que ejecutadas de forma secuencial mediante un control de concurrencia.

- **Durability**: Garantiza la persistencia de los datos una vez se haya ejecutada la transacción, aunque el sistema falle.

 La principal e inicial arquitectura de alto nivel más común, extendida y que todos conocemos:

<figure class="wp-block-image is-resized">![](/wp-content/uploads/2020/04/image.png)</figure>Disponemos de un componente principal que **gestiona las transacciones realizadas a una única base de datos** por cada caso de uso de la aplicación. Como veis en este ejemplo, ejecutamos una transacción (todas las fases necesarias para completar correctamente un nuevo pedido). Efectivamente, la base de datos relacional **nos garantiza ACID ofreciéndonos consistencia, pero unos muy pobres resultados a nivel de eficiencia, escalabilidad y disponibilidad** manejando grandes cantidades de datos.

En 1998, *Carlos Strozzi* introduce el concepto de **NoSQL** para su base de datos relacional de código abierto, ya que no utiliza SQL como interfaz de consulta. *Eric Evans* y *Johan Oskarsson* (last.fm) reintroducen el concepto **NoSQL/NoREL** refiriéndose a base de datos no relacionales (denormalización o desestructuración de los datos dando una mejor eficiencia).

Compañías como *Twitter, Facebook, Amazon y Google* lideran la adopción de las bases de datos no relacionales dada la necesidad de un procesado más eficiente de grandes volúmenes de información en un clúster distribuido de datos, permitiendo así un escalado horizontal. El concepto Big Data es oficial en 2005.

Empezamos a evolucionar las arquitecturas. Unos de los siguientes pasos más comunes a la arquitectura sería el siguiente:

<figure class="wp-block-image">![](/wp-content/uploads/2020/04/image-1.png)<figcaption>  
</figcaption></figure>Se empiezan a **integrar nuevas bases de datos NoSQL** (Apache Solr, ElasticSearch, Redis, etc.) incrementando la velocidad de consulta de forma exponencial. Mantenemos una réplica de los datos desde la base de datos transaccional de escritura, hacia la base de datos no relacional de lectura mediante **eventos de forma incremental** una vez suceden los cambios o mediante **tareas programadas de sincronización** (o ambas, dependiendo del caso).

En este escenario se empiezan a dividir responsabilidades en modelos de lectura y escritura, **patrones como CQS o CQRS empiezan a ser muy útiles**.

La consistencia de los datos entre ambas bases de datos se realiza de forma eventual (existe un delay en la recuperación de los datos): aunque **manteniendo siempre un origen de datos fiable que garantiza ACID en sus transacciones de escritura** (podíamos realizar en cualquier momento una **sincronización total para “reparar” los datos incongruentes del repositorio de lectura** si los hubiese).

En este contexto y teniendo una solución equilibrada, empezamos a ser conscientes de la **complejidad adyacente que ocasiona disponer de un único componente (monolito)** para gestionar todas las transacciones generando una gran cantidad de deficiencias en la calidad del código y de la escalabilidad de la infraestructura.

En 2001, *Eric Evans* publica Domain-Driven Design: Tackling Complexity in the Heart of Software, aportando una **visión estratégica de división del dominio** mediante *subdominios* y *bounded contexts*. Así como técnicas de comunicación entre los *bounded contexts* según sus tipos de colaboración: *context mappings*.

Reconocidas las ventajas y sufriendo los inconvenientes, empezamos a dar pasos a los siguientes tipos de arquitecturas con objetivo de dividir el monolito:

<div class="wp-block-image"><figure class="aligncenter">![](/wp-content/uploads/2020/04/image-2.png)</figure></div>Con tal de desacoplar totalmente los contextos, necesitábamos dividir la base de datos:

<div class="wp-block-image"><figure class="aligncenter">![](/wp-content/uploads/2020/04/image-3.png)</figure></div>En este momento disponemos de un **sistema distribuido aumentando la flexibilidad, escalabilidad y disponibilidad. Aunque, hemos dividido el ámbito transaccional (el sistema ya no garantiza ACID)**. Ahora simplemente disponemos de transacciones individuales, locales e independientes: hemos resuelto infinidad de problemas, pagando con la moneda de la consistencia de datos.

*Los números y los datos empiezan a ser incongruentes: ¿Cómo puede ser que haya menos stock del que nos reflejan los informes? ¿Cómo es posible que existe un pago si el pedido fue cancelado?, ¿Cómo podemos tener un pedido enviado si esta pending? etc.*

Es un buen momento para recordar el **teorema CAP (presentada por Eric Brewer en el año 2000)** en el que explica que ante un sistema distribuido es **imposible garantizar simultáneamente más de dos** de las siguientes características: **Consistency, Availability** (recibe una respuesta no errónea pero sin garantías de que se recuperen datos consistentes) y **Partition Tolerance** (el sistema sigue funcionando incluso si alguno de sus nodos cae).

Por aquel momento, siguiendo la dinámica de visión y ya habiéndonos decantado por Partition Tolerance &amp; Availability, seguimos aumentando nuestro sistema distribuido centrándonos únicamente en continuar la división a favor de seguir aumentando los beneficios que estamos conseguiendo.

Sam Newman publica *Building Microservices* en 2014 convirtiéndose en un libro de referencia en la comunidad. Empezamos a orientar nuestras arquitecturas hacia los microservicios:

<figure class="wp-block-image">![](/wp-content/uploads/2020/04/image-4.png)<figcaption> </figcaption></figure><figure class="wp-block-image">![](/wp-content/uploads/2020/04/image-5.png)</figure>> El *bounded context* se convierte en una agrupación cohesionada de *microservicios*. Ahora ya no tenemos una única transacción que garantice ACID. Ni cuatro transacciones locales, sino doce: una por microservicio. Convirtiéndose en una transacción distribuida. El riesgo de inconsistencias de datos aumenta.

Mi intención principal en este post fue plantear y resumir el problema actual en la consistencia de los datos a lo largo del tiempo. Ya que parece que aún no somos conscientes del problema real y la falta de prácticas que nos ayuden a mitigarlo. Al fin y al cabo, la tecnología está al servicio del producto y la mejora del producto, de los datos que genera.

En los próximos posts compartiré **diferentes patrones que ayudarán a gestionar correctamente las transacciones distribuidas y generar así un sistema más consistente sin sacrificar Availability y Partition Tolerance**: Principalmente *Outbox Pattern* y *Sagas*.

Feedback is always welcome