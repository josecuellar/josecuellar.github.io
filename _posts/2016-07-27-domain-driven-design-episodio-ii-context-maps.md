---
id: 1161
title: 'Domain-Driven Design. Context Maps'
date: '2016-07-27T20:13:01+00:00'
layout: post
permalink: /domain-driven-design-context-maps/
categories:
  - Deep Engineering
tags:
  - DDD
  - ubiquitous-language
  - design-patterns
  - software-architecture
  - system-design
  - context-mapping
  - bounded-contexts
  - integration-patterns
  - strategic-design
  - anti-corruption-layer
  - teams-alignment
---

In the [previous post](/implementing-domain-driven-design-book-vaughn-vernon/) we saw the first strategic steps and how we broke down the complexity of the business into *Domains, Subdomains and Bounded Contexts*.
Each **Bounded Context** contains or has the technology, programming language and minimum architecture necessary to satisfy the business requirements of its context through a **domain model**.

The relationships between *Bounded Contexts* are called **Context Maps** and the rules necessary to *map/translate* a domain model from one context to another:

**Translation Map**. Once the *Bounded Contexts* have been identified, we must establish, according to the needs of each case, the type of relationship between them, marking the direction of *information flow* through ***U**pstream* (exposure of services) and ***D**ownstream* (consumer of services):

<br><center><img src="/wp-content/uploads/contextmap.png" width="300"/></center><br>

## Evans, describes organizational and integration patterns that describe the types of relationship between *Bonded Contexts*

- **Partnership:** Both *Downstream* and *Upstream* teams have a strong and close dependency, making it necessary to jointly plan and synchronize updates to both *Bounded Contexts*. Development must take into account the needs of both contexts through exhaustive coordination between the teams.
- **Shared Kernel:** *Bounded Contexts* that share/reuse part of the domain model, with an interdependence or a shared common area. These shared elements should not be modified without consulting the affected teams:

<br><center><img src="/wp-content/uploads/sharedkernel.png" width="400"/></center><br>
##### Source: [Taming Complex Domains with Domain Driven Design](http://www.slideshare.net/ziobrando/taming-complex-domains-with-domain-driven-design-presentation).</span>

- **Customer-Supplier Development:** A team manages the services of the *Bounded Context* (*Upstream*) providing support on demand according to the needs of the team that manages the *Bounded Context* that requests the resources (*Downstream*). The exposure of services is prioritized and negotiated in advance to avoid dependencies in the evolutionary development of the teams that consume them.
- **Conformist:** The team manages and publishes the services (*Upstream*) in the *Bounded Context* in a way that is misaligned with the evolutionary development of any other context. The team that manages the consumer *Bounded Context* (Downstream) adheres to and conforms to the modeling represented in the services, without the need to make them compatible with the local/own domain modeling.

<br><center><img src="/wp-content/uploads/supplypartner.png" width="400"/></center><br>
##### Source: [Discovering the Domain Architecture](https://www.microsoftpressstore.com/articles/article.aspx?p=2248811&seqNum=3).

- **Separate Ways:** Independent *Bounded Context* without any type of relationship between any other. There are no integrations or relationships of any kind between the development teams.
- **Bif Ball of Mud:** Monolith or [Legacy Code](https://es.wikipedia.org/wiki/C%C3%B3digo_heredado) not disaggregated encapsulated/isolated in a *Bounded Context* sharing its services. Controlling its growth and advising to extract it into new *Bounded Context* generating new *Context Maps* between the existing ones.

## Technical integration patterns between *Bounded Contexts*
- **Open Host Service (OHS):** Defines an access protocol to the system or services for the integration of the requirements. It usually needs a common publication language for interaction between the domain models. For example [RPC](https://en.wikipedia.org/wiki/Remote_procedure_call) or [REST](https://en.wikipedia.org/wiki/Representational_state_transfer) through [API](https://en.wikipedia.org/wiki/Application_programming_interface). Although it can be implemented through a messaging *middleware* such as [RabbitMQ](https://www.rabbitmq.com/).
- **Published Language (PL):** Common language for translation between the models that are going to interact. For example [JSON](https://en.wikipedia.org/wiki/JSON) or [XML](https://en.wikipedia.org/wiki/XML). Normally associated with OHS. The advantage of using REST services is that in each request you can specify the PL by configuring the desired *content type*.
- **Anticorruption Layer (ACL):** Isolated layer that manages the mapping or translations between the domain models of the *Bounded Contexts* to maintain compatibility between them.

<br><center><img src="/wp-content/uploads/acl.jpg" width="400"/></center><br>
##### Source: [Strategic Domain Driven Design with Context Mapping](https://www.infoq.com/articles/ddd-contextmapping).

In this layer, the *interfaces* exposed as *domain services* are implemented.

Both the *Adaptor* and the *Translator* of each entity of the model that we want to translate or make compatible.

Using [Facade](https://en.wikipedia.org/wiki/Facade_pattern) and through *HttpClient*:

<br><center><img src="/wp-content/uploads/acl.png" width="600"/></center>
##### Source: [Domain-Driven Design](https://dzone.com/refcardz/getting-started-domain-driven).

*Adaptor* can be replaced by new Repository implementations using HttpClient for access to the external repository via API.
In the following diagram we see the *Bounded Contexts* and their integration points through **OHS** and **PL** using **ACL** to map and translate the domain model establishing compatibility for each type of entity:

<br><center><img src="/wp-content/uploads/contextmap3.png" /></center><br>

Graphic summary of all the concepts:

<br><center><img src="/wp-content/uploads/contextmappings.PNG" width="650"/></center><br>

So far I cover up to chapter 5 of *Implementing Domain-Driven Design* by Vaughn Vernon.
The rest focuses on the tactical aspects of DDD.

*Do you think there is any important strategic aspect in DDD that I do not mention in both posts*