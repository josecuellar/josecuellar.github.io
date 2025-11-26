---
id: 113
title: 'Basic patterns designing architectures'
date: '2010-04-02T20:28:21+00:00'
layout: post
permalink: /basic-design-architecture-system-patterns/
categories:
  - Deep Engineering
tags:
  - system-design
  - design-patterns
  - software-architecture
  - clean-architecture
  - DDD
  - layered-architecture
---

Set of principles that define an aspect of the application at a high level.
The main aspects are: **Communication, deployment, domain, interaction, relationship and structure**. The normal thing in an architecture is not to be based on a single architectural style, but to combine several to obtain the existing advantages of each one.

### Client/Server
Defines a relationship between two applications in which one of them (client) sends requests to the other (server and data source).

<br><center><img src="/wp-content/uploads/Arquitectura/clienteservidor.png" width="400"/></center><br>

### Component-based
Set of components that expose well-defined interfaces and collaborate with each other to solve the problem. Designed so that they can be reused in different scenarios in different applications, although some components are designed for specific tasks.

<br><center><img src="/wp-content/uploads/Arquitectura/componentes.png" width="500"/></center><br>

### Layered Architecture (N-Layer)
Hierarchical distribution of roles and responsibilities to provide an effective division of the problems to be solved.
The roles indicate the type and form of interaction with other layers and the responsibilities the functionality they implement.

<br><center><img src="/wp-content/uploads/Arquitectura/nlayer.png" width="200"/></center><br>

### Decoupled Presentation
Indicates how user actions, interface manipulation, and application data should be handled.
Separation of interface components from data flow and manipulation.

<br><center><img src="/wp-content/uploads/Arquitectura/desacoplada.png" width="200"/></center><br>

### Layered Architecture (N-Tier)
Conceptually the same as the layered architecture (n-layer), although the separation of functionality into separate physical segments (Tier) is defined.
Normally the physical separation is done in different servers for reasons of scalability, security, or simply necessity.

<br><center><img src="/wp-content/uploads/Arquitectura/ntier.png" width="400"/></center><br>

### Domain Driven Architecture (DDD)
Oriented to design and implement complex business applications where it is essential to define a Domain Model expressed in the language of the experts of the real business domain (called [Ubiquitous](http://es.wikipedia.org/wiki/Computaci%C3%B3n_ubicua) Language).

- N-Layer Architecture.
- Design patterns:
- Repository
- Entity
- Aggregate
- Value-Object
- Unit of Work
- Services
- Decoupling between components belonging to the design.

The entire development team must have contact with the domain experts (functional experts) to correctly model the Domain.
The heart of the software is the Domain Model which is a direct projection of said language agreed upon by all members of the team ([Ubiquitous](http://es.wikipedia.org/wiki/Computaci%C3%B3n_ubicua) language).

<br><center><img src="/wp-content/uploads/Arquitectura/orientadaaldominio.png" width="700"/></center><br>

### Object Oriented (OO)
Set of objects that cooperate with each other instead of as a set of procedures.
Objects are discrete, independent and loosely coupled, communicate through interfaces and allow sending and receiving requests.

<br><center><img src="/wp-content/uploads/Arquitectura/orientadaaobjetos.png" width="400"/></center><br>

### Service Bus (Messages)
Defines a software system that can send and receive messages using one or more channels so that applications can interact without knowing specific details of each other.
Interaction between applications through the passage of messages through a common communication channel (bus).
It is often implemented using a messaging system such as [MSMQ](http://en.wikipedia.org)

<br><center><img src="/wp-content/uploads/Arquitectura/busdeservicios.png"  width="500"/></center><br>