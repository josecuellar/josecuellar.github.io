---
id: 1337
title: 'Domain-Driven Design. Modules & Aggregates'
date: '2016-10-31T21:09:42+00:00'
layout: post
permalink: /domain-driven-design-modules-aggregates/
categories:
  - Deep Engineering
tags:
  - DDD
  - design-patterns
  - system-design
  - software-architecture
  - clean-architecture
  - modules
  - aggregates
  - tactical-design
  - entities
  - value-objects
  - law-of-demeter
---

## Modules

Modules are containers of elements that allow us to organize our domain.
Technically referred to as *packages* or *namespaces*. The main objective is to decouple and organize the elements depending on the context to which they belong. Always following the *ubiquitous language*.

### Module naming conventions for the model and submodules

Normally, and if the company has a domain name on *internet*, the main module will start with *com*. Followed by the name of the organization. The next module name segment identifies the local *Bounded Context* where the module or element container is hosted. It is not recommended to use the commercial names of the organization's products in the names of modules or submodules since these may change over time and sometimes do not directly relate to the responsibility of the *Bounded Context* to which it belongs.

It is preferable to [identify the name of each *Bounded Context*](/implementing-domain-driven-design-book-vaughn-vernon/) according to its responsibility at the team's choice. The objective is to reflect the ubiquitous language of the organization. The following segments should identify where in the system it is located. In systems with layered architectures, it would be advisable to use the specific names according to each layer.

## Aggregates

The *clustering* or **grouping of *entities* and *value objects*** forms an *aggregate*. Encapsulating and hosting the relationships that are established between them, acting as a **single set**.

Each aggregate has a root entity (*aggregate root*) from which the rest of the *entities* and *value objects* *hang*. Whenever you want to modify any internal component of the aggregate, it must be done from **accessible methods in said root entity**, maintaining the integrity and state of the set in memory.

<center><img src="/wp-content/uploads/GroupAggregate.png" width="500"/></center>
##### Source: [Implementing Domain Driven Design](http://www.lavinski.me/implementing-domain-driven-design/).

In an *Event-Driven* approach, these accessible methods will be responsible for *triggering* the events, facilitating the integration of aggregates. You can take a look at [Domain-Driven Design. Services &amp; Domain Events](/domain-driven-design-services-domain-events/). If the related *entities* or *value objects* need to be persisted, it must be done through the *root entity* through application services and repositories that will orchestrate the actions of reconstruction and persistence of the aggregate according to the use case. Since it is considered a bad practice to use repositories from methods in the domain model.

Given the **transaction rule per aggregate instance** and to satisfy [optimistic concurrency](https://es.wikipedia.org/wiki/Control_de_concurrencia_optimista) and avoid record locking, there is the possibility of *versioning* the modifications of the aggregates to avoid updating a version prior to the one already existing in the database.

### Design Small Aggregates

It is not recommended to design large aggregates. Dividing them as much as possible into smaller ones. Allowing us to be more scalable by working with lighter and more isolated transactions and logics, also favoring [eventual consistency](https://en.wikipedia.org/wiki/Eventual_consistency) through [Domain Events](/domain-driven-design-services-domain-events/) in [distributed systems](https://en.wikipedia.org/wiki/Distributed_computing).

By keeping small aggregates, we will avoid reconstructing and persisting large amounts of data that may penalize *performance*. It is advisable to use techniques such as [lazy loading](https://es.wikipedia.org/wiki/Lazy_loading) that allow us to defer loading of their dependencies. It is not always possible to separate aggregates, due to **possible business rules that must be immediate and atomic** (in the same transaction) through *transactional consistency* related to a single aggregate (called **invariants**).

Each case should be discussed with the *domain experts*. Always taking into account the rule of **generating a single transaction per aggregate instance**.

### Reference other Aggregates by Identity

Aggregates can only be related to each other through the identifiers of their *root entity*:

<center><img src="/wp-content/uploads/Aggregates.png" width="500"/></center>
##### Source: [Modeling Aggregates with DDD and Entity Framework](https://vaughnvernon.co/?p=879).

We must avoid associative properties containing the instance of the *root* entity of the other aggregate. We will make this reference through its identifier stored in a *value object*.

### Model navigation

Maintaining small aggregates and relating them through identifiers helps us to use *Model navigation*: a technique also known as a disconnected domain model. We use the repositories or domain services to *orchestrate* the loading of the objects dependent on the aggregates through the application services thanks to the identifiers that compose it.

### Law of Demeter and tell, don´t ask

Both are design principles that must be followed to design the aggregates. Clients that consume the aggregate should not know the implementation details, nor navigate between internal references. The attributes, properties, elements and internal behaviors of the aggregate should not be accessible by the client.

The [Law of Demeter](https://es.wikipedia.org/wiki/Ley_de_Demeter) does not allow navigation between internal references of an aggregate.

On the other hand, [Tell, don´t Ask](http://martinfowler.com/bliki/TellDontAsk.html) allows navigation through the aggregate, but we must encapsulate/hide the implementation details.

You can take a look at [some laws in software development](/algunas-leyes-en-el-desarrollo-de-software/) and the [basic principles in software development](/principles-of-software-development/).

### Example

We can summarize in a very graphic way one of the examples that *Vaughn Vernon* explains in *Implementing Domain-Driven Design*. Given the following aggregate, the first thing we must question is the size and type of elements with the intention of always separating it into several, applying and developing it according to recommendations:

<br><center><img src="/wp-content/uploads/LargeAggregate.png" width="500"/></center><br>

Its representation in code:

<br><center><img src="/wp-content/uploads/LargeAggregateCode.png" width="500"/></center><br>

Although it may be attractive to create large aggregates, we must divide it to obtain all the benefits we have discussed. Keeping the relationship with their identifiers, thus creating new related aggregates:

<br><center><img src="/wp-content/uploads/SeparateAggregates.png" width="400"/></center><br>

Taking as an example one of the new aggregates created and doing *zoom*, we can see its internal elements:

<br><center><img src="/wp-content/uploads/SeparateAggregates2.png" width="400"/></center><br>

Similarly, any of the relationships of the new aggregates that we create by performing the separation will be through their identifiers stored in *value objects*:

<br><center><img src="/wp-content/uploads/SeparateAggregates3.png" width="400"/></center><br>

The complexity in the implementation of aggregates as well as other fundamental aspects such as performance, consistency and integration, will depend to a large extent on how they are designed/modeled.

So far what I think is most relevant in modules and aggregate design.

As always, I invite you to comment on any type of contribution :)

*I leave you some interesting links to expand the information:*

- [DDD Aggregate](http://martinfowler.com/bliki/DDD_Aggregate.html)
- [Effective Aggregate Design](http://vaughnvernon.co/?p=838)
- [Implementing Domain-Driven Design: Aggregates](http://www.informit.com/articles/article.aspx?p=2020371)
- [Domain-Driven Design: Aggregates Webcast at @AtrapaloEng (Spanish)](https://carlosbuenosvinos.com/domain-driven-design-aggregates-webcast-at-atrapaloeng-spanish/)