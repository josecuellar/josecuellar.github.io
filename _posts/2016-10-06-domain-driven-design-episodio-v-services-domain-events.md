---
id: 1263
title: 'Domain-Driven Design. Services & Domain Events'
date: '2016-10-06T20:24:37+00:00'
layout: post
permalink: /domain-driven-design-services-domain-events/
categories:
  - Deep Engineering
tags:
  - DDD
  - design-patterns
  - system-design
  - software-architecture
  - clean-architecture
  - domain-events
  - event-sourcing
  - cqrs
  - tactical-design
  - infrastructure-services
  - domain-services
  - application-services
---

## Services

We can define services as processes that perform specific tasks. Employed and evolved from [Service Oriented Architecture](https://es.wikipedia.org/wiki/Arquitectura_orientada_a_servicios) or [Remote Procedure Call](https://es.wikipedia.org/wiki/Llamada_a_procedimiento_remoto).

Generic tasks or actions that are not associated with a single specific object instance, so the most common trend is to create static methods on the *entity* or *aggregate*. This practice is not considered optimal because it does not follow the [development principles](/principios-a-seguir-en-el-diseno-de-un-sistema/) and greatly hinders testing, in addition to being considered bad practice to access *repositories* within the *aggregates* or *entities* in the domain model.

The need to include static methods in the domain model is a *good indicator to create a service*.

### Application Services

- Direct client of Domain Services and domain model.
- Application use cases that coordinate and orchestrate requests to business logic and repositories.
- **Coordinates the responsibilities** of the domain model and domain services.
- Hosted in [Application Layer](/domain-driven-design-architecture/).

### Domain Services

- Contains the **logic/business rules**.
- Transforms a domain object to another.
- Calculates the value by entering objects from the domain model.
- Can access repositories.
- Hosted in [Domain Layer](/domain-driven-design-architecture/).

With the aim of following the [development principles](/principios-a-seguir-en-el-diseno-de-un-sistema/), we will declare interfaces for each Service. Services are not a *silver bullet*, if we use them excessively extracting all the application or domain logic into services, we can cause an [Anemic Domain Model](http://www.martinfowler.com/bliki/AnemicDomainModel.html).

It must be determined and decided correctly whether to include a method of *entity/aggregate* in the domain model or create a service, always following [Single Responsability Principle](https://en.wikipedia.org/wiki/Single_responsibility_principle).

In general, the implementations of the services are hosted in the *infrastructure* layer, although sometimes and when we have a single implementation they can be hosted in the same layer where the interface is declared.

## Domain Events

Normally [ *batch* processes](https://es.wikipedia.org/wiki/Procesamiento_por_lotes) are used that try to detect state changes that have occurred in a certain period of time in the domain model, through large *queries* in the database, to later perform the pertinent actions through heavy transactions and data modifications.
Normally long and expensive night processes.

*Domain Events* capture and notify a specific event within the domain model through information represented in an object. So that we can perform the pertinent actions or apply a certain result at the same moment that the state change occurs, avoiding accumulating them over time waiting to detect them through said heavy and long night processes.
The events that have occurred or state changes of entities or events can be stored as they occur to have a history of events, thus applying [Event Sourcing](/domain-driven-design-architecture/).
In addition, they facilitate the integration of [Bounded Contexts](/domain-driven-design-context-maps/) decoupling structures or systems within an organization.

Not all events should be considered as events to be notified in the domain model, advising to speak carefully with domain experts to identify them correctly. Events must be part of the *ubiquitous language*.

The objects that store the information of an event must be verbs in the past with the minimum recommended property of **OccurrenceOn** with the exact date/time of when it happens and notifies.
In addition, we will need the necessary information related to the event, such as the identifiers of the entities that make up the aggregate. Events are normally designed as immutable in the same way as a [Value Object](/domain-driven-design-entities-value-objects/).
Although they are immutable, in some cases it is necessary to establish an identifier for the event.

*Command Operation: BacklogItem -> CommitTo*
*Event outcome: BacklogItemCommitted*.

*Command Operation: BacklogItem -> PlanTo*
*Event outcome: BacklogItemPlanned*.

<br><center><img src="/wp-content/uploads/DomainEvent2.PNG"  width="600"/></center><br>
##### Source: [Modeling Aggregates with DDD and Entity Framework](https://vaughnvernon.co/?p=879).

We must have one or more [middleware](https://es.wikipedia.org/wiki/Middleware) that manages the events, either through messaging following [publish-subscribe pattern](https://en.wikipedia.org/wiki/Publish%E2%80%93subscribe_pattern) or through *API REST* (through an *endpoint* the *GET* is performed by packages according to status to list the notifications of the clients that publish the events in the same *API*).

There are several messaging tools that will allow us to work with events easily, adopting *eventual consistency*: [RabbitMQ, ](https://www.rabbitmq.com/)[Akka](http://getakka.net/), [NServiceBus](https://particular.net/nservicebus), [MassTransit](https://github.com/MassTransit/MassTransit).

The fundamental rule on which to base ourselves to avoid making several transactions in the same event is **to modify a single aggregate by a single transaction made**.

In said aggregate transaction, the states of all associated entities can be modified through their identifiers informed in the event. Since it is an eventual and not immediate consistency, we assume a *delay* in the result of the transaction. Although there are various techniques to prevent it from influencing the user experience.

Normally the events **are published in the aggregate methods** or entities in the domain model **or in domain services**, saving them if necessary in the **Event Store** that corresponds. All this through the *messaging infrastructure* according to the *middleware* that we use in each case. On the other hand, the **event subscription is carried out and recommended in the application services**, who will handle the transaction to be carried out since it is an application concept as long as it does not concern other *Bounded Context*.

<br><center><img src="/wp-content/uploads/DomainEvent1.PNG"  width="600"/></center><br>
##### Source: [Event sourcing the past and today](http://simon-says-architecture.com/2013/01/16/event-sourcing-past-and-today/).

Domain Events can be used for integration between Bounded Contexts, moving away from the application concept in the local Bounded Context. In this way, it would be necessary to register subscriptions to events generated in other Bounded Contexts in the domain services instead of subscribing them in the application services.

### Event Store / Event Sourcing

By keeping all domain events stored, we will enjoy the following advantages:
- The possibility of having a *feed* through a *REST API* for notification to clients
- Examine and have a history of state changes that can help us with *debugging* and control/monitoring of *incidents*.
- Analyze the data to determine the behavior and activity of our users or other relevant aspects that will help us in decision making.
- Produce *screenshots* for each state change, which will allow us to reconstruct aggregates or an instance at a specific moment in time. Being able to force new events and state changes to solve *bugs* within our *Event Stream*.

The serialization of the event is the recommended and most used technique for storing all the information of the event in its corresponding *Event Store*.

### Event de-duplication

In certain scenarios it may be necessary to check for duplication in the reception of published messages, as they could be sent and processed more than once. To prevent the consequences, given this scenario/context, it is necessary that the transactions are carried out through [idempotence operation](https://en.wikipedia.org/wiki/Idempotence) being able to be executed more than once times with identical results.

Events can be identified and detected by a specific field or detect event duplications by versioning.

**Recommended readings:**

- [Rendimiento con Domain Events, Proyecciones y principios de CQRS](https://carlosbuenosvinos.com/rendimiento-con-domain-events-proyecciones-y-principios-de-cqrs/)
- [Domain Events and Eventual Consistency](https://www.infoq.com/news/2015/09/domain-events-consistency)
- [Domain Events - Domain Events allow you to segregate the models of different systems](http://verraes.net/2014/11/domain-events/)
- [Domain Event - Martin Fowler](http://martinfowler.com/eaaDev/DomainEvent.html)
- [Vaughn Vernon on Microservices and Domain-Driven Design](https://www.infoq.com/news/2016/07/microservices-ddd-vernon)

- [Domain-Driven Design. Episodio I.   **Empezando…**](/implementing-domain-driven-design-book-vaughn-vernon/)
- [Domain-Driven Design. Episodio II.  **Context Maps**](/domain-driven-design-context-maps/)
- [Domain-Driven Design. Episodio III. **Arquitectura**](/domain-driven-design-architecture/)
- [Domain-Driven Design. Episodio IV.  **Entities** &amp; **Value Objects**](/domain-driven-design-entities-value-objects/)