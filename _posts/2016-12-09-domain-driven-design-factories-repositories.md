---
id: 1408
title: 'Domain-Driven Design. Factories & Repositories'
date: '2016-12-09T13:41:20+00:00'
layout: post
permalink: /domain-driven-design-factories-repositories/
categories:
  - Deep Engineering
tags:
  - DDD
  - design-patterns
  - system-design
  - software-architecture
  - clean-architecture
  - factory-pattern
  - repository-pattern
  - tactical-design
---

## Factories

Of all the tactical patterns used in *DDD*, *factories* are probably one of the most well-known and used.
In charge of the **creation of object instances that require certain construction logic** that we want to hide, thus being a resource that allows us to **encapsulate the construction complexity** of objects.

Known as *factory classes* or *factory methods*. Initially, the construction logic of an object is performed in the *constructor*.

When it begins to increase its complexity through various logics, the object itself should not be responsible for controlling them to create itself. We must extract and encapsulate them in *factories*, allowing us to ensure a **correct instantiation** of the objects, **avoiding inconsistencies** or incorrectly initialized objects.

Business rules for the construction of instances should not be housed in the *factories*; for this, we have *domain services*, although they may include [invariants](https://en.wikipedia.org/wiki/Invariant_(computer_science)) provided by the *domain experts* that ensure correct and consistent states. Patterns are usually used to adapt ***abstract factories***.

In which, through implementations of *interfaces*, we satisfy the creation of objects of our domain model:

<center><img src="/wp-content/uploads/abstractfactory.png" width="600"/></center>
##### Source: [C# Abstract Factory Pattern combined with Dependancy Injection andInversion of Control](http://blog.bekijkhet.com/2012/05/c-abstract-factory-pattern-combined.html).

- The ***abstract factories*** are housed in the *Domain layer* since they build instances of objects associated with domain modeling *(entities, value objects or aggregates)*. They must be designed from the ubiquitous language of the organization.

- The ***factory methods*** are very common in *aggregates* to encapsulate the construction logics of the aggregate that contains them.

In the following graph, we can see examples of factory methods according to aggregate and context:

<center><img src="/wp-content/uploads/factorymethods.png" width="600"/></center>
##### Source: *Implementing Domain-Driven Design*.</span>

## Repositories

In the *DDD* approach, they form an intermediate layer between our domain modeling and the persistence of its states in the database. Saving and retrieving the state at each moment through abstractions in charge of providing the necessary methods of communication with the persistence infrastructure.
*Infrastructure layer* will be in charge of housing the necessary implementations according to the technologies or mechanisms *(SQL, Redis, MongoDB, In-Memory, ORM)* of persistence that we can and are interested in having.

Through mechanisms that facilitate [DI](/domain-driven-design-architecture/), we will use the one that suits us in each *context*.

There are two types of repository design that are more common, collection-oriented and persistence-oriented: Collection-oriented respositories and persistence repository.

- ***Collection-oriented respositories*** is considered the main repository design focused on *DDD*. Using instances in memory as the main use until the moment of the *commit* in which the state of the *entity* or *aggregate* will persist through *abstractions of the repositories* to carry out the necessary action according to the state of the element in memory *vs* persisted.
  To avoid the problems that user concurrency can cause in writing, there are *versioning* strategies in persistence, increasing it in each modification and subsequently checking in subsequent writings to carry out the necessary action at each moment.

- ***Persistence repository*** is related to and oriented to the traditional *CRUD* methods, *transacting* each state writing action on the database. Approach with great influence on the use of *DAO*.

It is considered a bad practice in *DDD* to inject any type of service or repository into the domain model. They should be injected into the application services to *orchestrate* the persistence and state construction of each element of our domain model.

*I leave you some interesting links to expand the information*

- [What are Factories in Domain Driven Design?](http://culttt.com/2014/12/24/factories-domain-driven-design/)
- [Repository - Martin Fowler]("http://martinfowler.com/eaaCatalog/repository.html)
- [Repository pattern](http://deviq.com/repository-pattern/)