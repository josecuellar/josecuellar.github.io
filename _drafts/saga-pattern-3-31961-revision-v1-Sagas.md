---
id: 1980
title: Sagas
date: '2020-04-26T21:16:18+00:00'
author: Jose
layout: revision
guid: 'https://josecuellar.net/1961-revision-v1/'
permalink: '/?p=1980'
---

El patrón Saga fue propuesto por *Hector Garcia-Molina* y *Kenneth Salem* en 1987. Puedes descargarte el paper aquí: [SAGAS](/wp-content/uploads/2020/04/sagapaper1987.pdf).

Basada en arquitecturas guiadas por eventos (**[Event Driven Architecture](/domain-driven-design-episodio-iii-arquitectura/))**, las sagas nos garantizarán la consistencia de datos en las **transacciones de negocio que involucren varias transacciones locales entre varios servicios o participantes** en un determinado sistema distribuido.

Básicamente **gestiona una secuencia de transacciones locales** que completarán una transacción de negocio distribuida: cada transacción local de cada servicio se ejecutará **basándose en el resultado de otros participantes** o servicios mediante la comunicación de eventos de dominio.

Cada servicio deberá ser responsable de realizar su **posible transacción de compensación (rollback)** de una transacción local ya realizada correctamente en el caso de algún error reaccionando a los llamados **eventos de compensación**.

Existen dos tipos de gestión de sagas: basada en **orquestación** o **coreografía**.

## Choreography

Los participantes **reaccionan de forma autónoma**. Cada servicio participa en la transacción distribuida de forma **individual**. Siendo responsable de gestionar su propia transacción local según la operación resultante de otro participante: continuar la saga o ejecutar la **transacción de compensación** (*deshaciendo cambios ya realizados*) desencadenando los eventos de compensación. Notificando si la transacción ha sido realizada correctamente o no, publicando el evento correspondiente.

![](/wp-content/uploads/2020/04/image-29-1024x387.png)

No existe un *single point of failure* y los servicios se encuentran totalmente desacoplados. Aunque (dependiendo del número de participantes o servicios que colaboren para garantizar la ejecución completa de la transacción distribuida) puede ocasionar un aumento en la **complejidad dificultando las tareas de testing, debug y monitoring**.

## Orchestration

Los **participantes son gestionados desde un único punto: el orquestador de la saga**. Mediante una primera operación orquesta las llamadas secuenciales al conjunto de participantes para llevar a cabo la transacción de negocio distribuida.

![](/wp-content/uploads/2020/04/image-30-1024x721.png)
Si el orquestador detecta un error en alguna respuesta en la ejecución de algún participante ejecutará las **acciones correspondientes de compensación en cada uno de los participantes ya ejecutados** hasta el momento.

Las ejecuciones de los participantes se realizan asíncronamente. Pueden existir varias posibilidades de implementación dependiendo del stack tecnológico, aunque recomendable usar los patrones **Remote Procedure Call** (RPC) ***request/async response*** o ***request/replay*** en las comunicaciones con los participantes.

La ventaja principal es la **visibilidad que aporta tener todo el *workflow* centralizado en el orquestador** resultando **más sencillas las operaciones de testing, debug y monitoring**. Aunque disponemos de un único componente creando una dependencia entre los participantes*.*

Entonces, si realmente y lo **verdaderamente importante en nuestro sistema son los eventos de dominio para mantener la consistencia** de los datos disponiendo además de diferentes **estrategias** y prácticas **que solventan diferentes problemas** en el momento que guardamos dichos estados (**escritura**) y otros cuando necesitamos consultarlos (**lectura**). La pregunta sería: *¿Porque no trabajamos únicamente con eventos?*. Todas las reflexiones nos acercarán a [Event Sourcing y CQRS](/domain-driven-design-episodio-iii-arquitectura/#eventsourcing). Todo dependerá, como siempre del ***coste vs valor* según cada contexto** **y situación**.

Hasta aquí, de momento, los principales patrones que nos permitirán garantizar una consistencia de los datos.

Como siempre y bajo mi punto de vista, la solución ante un problema dado en una situación y contexto concretos, se encuentra en el **equilibrio entre los costes y beneficios de cada decisión tomada** en cada momento. Y las decisiones las tomarás en base a los datos que dispongas.

*Lecturas recomendadas:*

- <https://microservices.io/patterns/data/saga.html>
- <https://medium.com/@ijayakantha/microservices-the-saga-pattern-for-distributed-transactions-c489d0ac0247>
- <https://jimmybogard.com/life-beyond-distributed-transactions-sagas/>