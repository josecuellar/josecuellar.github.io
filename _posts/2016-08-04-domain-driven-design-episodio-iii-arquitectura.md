---
id: 1190
title: 'Domain-Driven Design. Arquitectura'
date: '2016-08-04T22:18:17+00:00'
author: Jose
layout: post
permalink: /domain-driven-design-episodio-iii-arquitectura/
categories:
    - General
tags:
    - Arquitectura
    - DDD
---

En este post introduciré estilos y patrones de arquitectura más interesantes y recomendables que puedes aplicar con DDD mencionados por Vaughn Vernon en [*"Implementing Domain-Driven Design”*](http://josecuellar.net/domain-driven-design-episodio-i-empezando/). No se trata de una lista cerrada, ya que el enfoque táctico de *Domain-Driven Design* no requiere la utilización específica de ningún tipo de patrón o arquitectura: la verdadera importancia de cada *Bounded Context* reside en su *Core Domain* o modelo de dominio, independientemente de como se comunique con el resto de componentes de la aplicación, siempre y cuando se cumplan las [buenas prácticas y los principios de calidad apropiados](http://josecuellar.net/principios-a-seguir-en-el-diseno-de-un-sistema/).

## Layers - N-Tier Architecture

Arquitectura más habitual. Separación de responsabilidades en capas particionando la complejidad según su responsabilidad. Siguiendo los principios [SoC](http://josecuellar.net/principios-a-seguir-en-el-diseno-de-un-sistema/) y [SRP](http://josecuellar.net/principios-a-seguir-en-el-diseno-de-un-sistema/). 
Las capas superiores dependen de la inferior o inferiores: 

- **Strict Layers Architecture:** Únicamente permite la dependencia con la capa directamente inferior. 
- **Relaxed Layers Architecture:** Permite la dependencia con cualquiera de las capas inferiores. 

### Dependency Inversion Principle (Robert C. Martin)**

Los módulos de alto nivel no deben depender de módulos de bajo nivel. Ambos deben depender de abstracciones. Las abstracciones no deben depender de detalles, los detalles deben depender de las abstracciones. 

En el siguiente diagrama podemos ver la arquitectura por capas mediante *Relaxed Layers Architecture* y aplicando *Dependency Inversion Principle*: 

<br><center><img src="/wp-content/uploads/layeredddd.png"  width="300"/></center>
##### Fuente: [DDD Architectures](http://www.papagrigoriou.com/blog/2015/architectures.html).

- **Infractructure Layer**: Capa superior que implementa/provee todos los servicios de bajo nivel, que depende de las abstracciones o interfaces definidas/ubicadas en los componentes de alto nivel (*UI Layer, Application Layer, Domain Layer*). 
- **User Interface Layer**: Capa de presentación gráfica al usuario, alojando los componentes necesarios para la visualización de datos. No contiene lógica de negocio siendo el cliente directo de la capa de aplicación. 
- **Application Layer**: Lógica de aplicación (no de negocio) mediante servicios (*Application Services*). Orientada a casos de uso de los usuarios, recibiendo los parámetros desde la capa de UI. Cliente directo de la capa de dominio. 
- **Domain Layer**: Contiene la lógica de negocio mediante servicios (*Domain Services*) y modelado de dominio (*Domain Model*). Alojando las abstracciones o interfaces necesarias de acceso a datos (respositorios) y publicación de eventos de dominio (*Domain Events*). 

### Onion Architecture

Siguiendo con la arquitectura por capas y aunque *Vernon* no lo mencione en su libro: creo interesante destacar el estilo arquitectónico [Onion Architecture](http://jeffreypalermo.com/blog/the-onion-architecture-part-1/) que propone [Jeffrey Palermo](http://jeffreypalermo.com/). 

<br><center><img src="/wp-content/uploads/onionarchitecture.png"  width="500"/></center>
##### Fuente: [The Onion Architecture](http://blog.mirkosertic.de/architecturedesign/onionarchitecture).

Tal y como comenta Jeffrey Palermo, la principal ventaja o diferencia con la arquitectura por capas habitual se encuentra en desacoplar/extraer la base de datos tratándola como un recurso externo. Siendo encargada la capa de infrastructura en implementar las interfaces de acceso a datos ubicadas en el dominio mediante [Repository Pattern](http://deviq.com/repository-pattern/). 

*Te dejo mi repositorio de Github con código de ejemplo: [DDD - Onion Architecture Example with C#](https://github.com/josecuellar/ddd-onion-architecture-net)*

### Arquitectura Hexagonal (Ports and Adapters)

<br><center><img src="/wp-content/uploads/hexagonalarchitecture.PNG"  width="500"/></center><br>

Otro estilo de arquitectura por capas que comparte con *Onion Architecture* la premisa principal de favorecer el aislamiento y desacoplado, pero en este caso a través de *puertos (abstracciones o interfaces) y adaptadores (implementaciones)* independientes que gestionan el *flujo de entrada y salida del sistema*. 

*Lectura recomendada:*[Hexagonal architecture - Alistair Cockburn](http://alistair.cockburn.us/Hexagonal+architecture)

## Event-Driven Architecture (EDA)

Arquitectura orientada al envío y recepción de eventos (*Domain Events*). Cualquier cambio de estado en las *entidades* o *agregados* de cualquier sistema emitirán notificaciones. Otros sistemas, servicios o componentes internos o externos tratarán todas las eventualidades notificadas aplicando las acciones requeridas según su contexto, emitiendo nuevos eventos si fuese necesario. Generando así un tipo de comunicación e interacción que posibilita la escalabilidad mediante las *transacciones eventuales*. 

La arquitectura enfocada a eventos mediante el envío y recepción de eventos nos permite desacoplar responsabilidades aplicando las acciones necesarias en cada sistema, facilitándonos la comunicación/integración entre ellos: 

<br><center><img src="/wp-content/uploads/eda.PNG"  width="400"/></center><br>

En la imagen vemos tres sistemas enfocados a *Event-Driven Architecture* con *Hexagonal Architecture*. 

*EDA* desacopla todas las dependencias entre ellos mediante eventos. Las arquitecturas aplicadas en cada sistema son independientes entre sí pudiéndose utilizar cualquier tipo de arquitectura. 

### Event Sourcing

Aplicar [Event Sourcing](http://martinfowler.com/eaaDev/EventSourcing.html) nos permitirá guardar todos los eventos de dominio de cambios de estado en cada entidad o agregado del modelo en un *Event Store* en el mismo orden que suceden y guardando un *snapshot* del estado de la entidad en el momento exacto de la notificación del evento (esto nos permite recuperar el estado de la entidad o agregado en cualquier momento en el tiempo o suceso). 

Los servicios subscritos recibirán la notificación por cada evento encargándose de efectuar las acciones de modificación y sincronización de datos necesarias en cada caso ([Eventual consistency](https://en.wikipedia.org/wiki/Eventual_consistency)): 

<br><center><img src="/wp-content/uploads/eda2.PNG"  width="600"/></center><br>

Herramientas como [RabbitMQ](https://www.rabbitmq.com/) o [Akka](http://getakka.net/) nos facilitarán la aplicación de *Event-Driven Architecture*. 

*Lecturas recomendadas:*
- [Focusing on Events](http://martinfowler.com/eaaDev/EventNarrative.html)
- [Vaughn Vernon on the Actor Model and Domain-Driven Design](https://www.infoq.com/news/2013/06/actor-model-ddd)
- [Vaughn Vernon: Reactive Domain-Driven Design](https://www.infoq.com/news/2013/11/vernon-reactive-ddd)

## Command-Query Responsability Segregation (CQRS)

Separación del modelo en *Command* (persistencia) y *Query* (recuperación) creando modelos de persistencia (*Command Model*) y consulta (*Query Model*) independientes. 

Si el método modifica el estado del objeto se trata de un *command*, y el método no debe retornar ningún valor. En cambio si retorna ulgún valor, será *query* y no debe, directa o indirectamente, causar la modificación del estado del objeto. 

En la mayoría de los casos no necesitamos toda la información de una determinada entidad para mostrarla al usuario: separar los modelos nos ayudará a optimizar las consultas a la base de datos recuperando únicamente los necesarios. Además, nos permite disponer de una base datos independiente con datos desnormalizados (habitualmente bases de datos [NoSql](https://es.wikipedia.org/wiki/NoSQL)), evitando así realizar JOINS entre tablas, mejorando en gran medida el rendimiento. 

Necesitamos asegurarnos un sistema de actualización de la base de datos y modelo *query* dadas las modificaciones por los servicios *command* a la base de datos principal. Dicha actualización puede realizarse de forma *síncrona* o *asíncrona* dependiendo de la necesidad y técnica empleada en cada caso. 

La actualización de los cambios pueden realizarse mediante la creación de procesos de sincronización o configurando [triggers](https://es.wikipedia.org/wiki/Trigger_(base_de_datos)) para tal fin: 

<br><center><img src="/wp-content/uploads/cqrs2.PNG"  width="500"/></center><br>

Enfocado a *Event-Driven Architecture*: 

<br><center><img src="/wp-content/uploads/cqrs1.PNG"  width="500"/></center><br>

Debemos decidir en cada caso si realmente es necesario el uso de *CQRS*, ya que puede aumentar el riesgo de ocasionar complejidad en la arquitectura. 

*Lecturas recomendadas:* 
- [CQRS, Fowler](http://martinfowler.com/bliki/CQRS.html)
- [Clarified CQRS, Dahan](http://udidahan.com/2009/12/09/clarified-cqrs/)


Como vemos tenemos un amplio abanico de posibilidades a la hora de abordar la parte táctica de DDD. Aunque cualquier estilo o patrón que deseemos aplicar, deberá ser razonablemente justificado con tal de evitar la *complejidad accidental*. 
Intentando siempre disponer de la arquitectura y patrones mínimos necesarios para satisfacer las necesidades de cada *Bounded Context* a lo largo del tiempo.