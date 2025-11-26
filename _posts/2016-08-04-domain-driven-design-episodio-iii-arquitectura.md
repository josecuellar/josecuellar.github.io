---
id: 1190
title: 'Domain-Driven Design. Architecture'
date: '2016-08-04T22:18:17+00:00'
layout: post
permalink: /domain-driven-design-architecture/
categories:
  - Deep Engineering
tags:
  - DDD
  - system-design
  - design-patterns
  - software-architecture
  - clean-architecture
  - onion-architecture
  - hexagonal-architecture
  - cqrs
  - domain-events
  - layered-architecture
  - event-driven-architecture
  - event-sourcing
  - tactical-design
---

In this post, I will introduce more interesting and recommended architectural styles and patterns that you can apply with DDD mentioned by Vaughn Vernon in [*"Implementing Domain-Driven Design"*](/implementing-domain-driven-design-book-vaughn-vernon/). This is not a closed list, since the tactical approach of *Domain-Driven Design* does not require the specific use of any type of pattern or architecture: the true importance of each *Bounded Context* lies in its *Core Domain* or domain model, regardless of how it communicates with the rest of the application components, as long as the [good practices and appropriate quality principles are met](/principios-a-seguir-en-el-desarrollo-software/).

## Layers - N-Tier Architecture

Most common architecture. Separation of responsibilities in layers, partitioning complexity according to its responsibility. Following the principles [SoC](/principios-a-seguir-en-el-desarrollo-software/) and [SRP](/principios-a-seguir-en-el-desarrollo-software/).
The upper layers depend on the lower layer or layers:

- **Strict Layers Architecture:** Only allows dependency with the directly lower layer.
- **Relaxed Layers Architecture:** Allows dependency with any of the lower layers.

### Dependency Inversion Principle (Robert C. Martin)

High-level modules should not depend on low-level modules. Both should depend on abstractions. Abstractions should not depend on details, details should depend on abstractions.

In the following diagram, we can see the layered architecture using *Relaxed Layers Architecture* and applying *Dependency Inversion Principle*:

<br><center><img src="/wp-content/uploads/layeredddd.png"  width="300"/></center>
##### Source: [DDD Architectures](http://www.papagrigoriou.com/blog/2015/architectures.html).

- **Infractructure Layer**: Top layer that implements/provides all low-level services, which depends on the abstractions or interfaces defined/located in the high-level components (*UI Layer, Application Layer, Domain Layer*).
- **User Interface Layer**: Layer of graphic presentation to the user, housing the components necessary for data visualization. It does not contain business logic, being the direct client of the application layer.
- **Application Layer**: Application logic (not business logic) through services (*Application Services*). Oriented to user use cases, receiving the parameters from the UI layer. Direct client of the domain layer.
- **Domain Layer**: Contains the business logic through services (*Domain Services*) and domain modeling (*Domain Model*). Hosting the necessary abstractions or interfaces for data access (repositories) and publication of domain events (*Domain Events*).

### Onion Architecture

Following the layered architecture and although *Vernon* does not mention it in his book: I think it is interesting to highlight the architectural style [Onion Architecture](http://jeffreypalermo.com/blog/the-onion-architecture-part-1/) proposed by [Jeffrey Palermo](http://jeffreypalermo.com/).

<br><center><img src="/wp-content/uploads/onionarchitecture.png"  width="500"/></center>
##### Source: [The Onion Architecture](http://blog.mirkosertic.de/architecturedesign/onionarchitecture).

As Jeffrey Palermo comments, the main advantage or difference with the usual layered architecture is to decouple/extract the database, treating it as an external resource. The infrastructure layer is responsible for implementing the data access interfaces located in the domain through [Repository Pattern](http://deviq.com/repository-pattern/).

*I leave you my Github repository with example code: [DDD - Onion Architecture Example with C#](https://github.com/josecuellar/ddd-onion-architecture-net)*

### Hexagonal Architecture (Ports and Adapters)

<br><center><img src="/wp-content/uploads/hexagonalarchitecture.PNG"  width="500"/></center><br>

Another style of layered architecture that shares with *Onion Architecture* the main premise of favoring isolation and decoupling, but in this case through independent *ports (abstractions or interfaces) and adapters (implementations)* that manage the *input and output flow of the system*.

*Recommended reading:*[Hexagonal architecture - Alistair Cockburn](http://alistair.cockburn.us/Hexagonal+architecture)

## Event-Driven Architecture (EDA)

Architecture oriented to sending and receiving events (*Domain Events*). Any state change in the *entities* or *aggregates* of any system will issue notifications. Other systems, services or internal or external components will treat all the notified eventualities applying the required actions according to their context, issuing new events if necessary. Thus generating a type of communication and interaction that enables scalability through *eventual transactions*.

The architecture focused on events through the sending and receiving of events allows us to decouple responsibilities by applying the necessary actions in each system, facilitating communication/integration between them:

<br><center><img src="/wp-content/uploads/eda.PNG"  width="400"/></center><br>

In the image we see three systems focused on *Event-Driven Architecture* with *Hexagonal Architecture*.

*EDA* decouples all dependencies between them through events. The architectures applied in each system are independent of each other and any type of architecture can be used.

### Event Sourcing

Applying [Event Sourcing](http://martinfowler.com/eaaDev/EventSourcing.html) will allow us to save all domain events of state changes in each entity or aggregate of the model in an *Event Store* in the same order that they happen and saving a *snapshot* of the state of the entity at the exact moment of the event notification (this allows us to recover the state of the entity or aggregate at any moment in time or event).

The subscribed services will receive the notification for each event, being responsible for carrying out the actions of modification and synchronization of data necessary in each case ([Eventual consistency](https://en.wikipedia.org/wiki/Eventual_consistency)):

<br><center><img src="/wp-content/uploads/eda2.PNG"  width="600"/></center><br>

Tools like [RabbitMQ](https://www.rabbitmq.com/) or [Akka](http://getakka.net/) will facilitate the application of *Event-Driven Architecture*.

*Recommended readings:*
- [Focusing on Events](http://martinfowler.com/eaaDev/EventNarrative.html)
- [Vaughn Vernon on the Actor Model and Domain-Driven Design](https://www.infoq.com/news/2013/06/actor-model-ddd)
- [Vaughn Vernon: Reactive Domain-Driven Design](https://www.infoq.com/news/2013/11/vernon-reactive-ddd)

## Command-Query Responsability Segregation (CQRS)

Separation of the model into *Command* (persistence) and *Query* (retrieval) creating independent persistence (*Command Model*) and query (*Query Model*) models.

If the method modifies the state of the object it is a *command*, and the method should not return any value. On the other hand, if it returns any value, it will be *query* and should not, directly or indirectly, cause the modification of the state of the object.

In most cases we do not need all the information of a certain entity to show it to the user: separating the models will help us to optimize the queries to the database recovering only the necessary ones. In addition, it allows us to have an independent database with denormalized data (usually [NoSql](https://es.wikipedia.org/wiki/NoSQL) databases), thus avoiding performing JOINS between tables, greatly improving performance.

We need to ensure a system of updating the database and *query* model given the modifications by the *command* services to the main database. This update can be done *synchronously* or *asynchronously* depending on the need and technique used in each case.

The update of the changes can be done by creating synchronization processes or configuring [triggers](https://es.wikipedia.org/wiki/Trigger_(base_de_datos)) for this purpose:

<br><center><img src="/wp-content/uploads/cqrs2.PNG"  width="500"/></center><br>

Focused on *Event-Driven Architecture*:

<br><center><img src="/wp-content/uploads/cqrs1.PNG"  width="500"/></center><br>

We must decide in each case if the use of *CQRS* is really necessary, as it can increase the risk of causing complexity in the architecture.

*Recommended readings:*
- [CQRS, Fowler](http://martinfowler.com/bliki/CQRS.html)
- [Clarified CQRS, Dahan](http://udidahan.com/2009/12/09/clarified-cqrs/)

As we can see, we have a wide range of possibilities when it comes to addressing the tactical part of DDD. Although any style or pattern that we want to apply, must be reasonably justified in order to avoid *accidental complexity*.
Always trying to have the minimum necessary architecture and patterns to meet the needs of each *Bounded Context* over time.
