---
id: 1489
title: 'Recent reads i recommend in tech'
date: '2017-03-31T20:38:52+00:00'
layout: post
permalink: /cleancode-microservices-architecture-craftsmanship-books-recommended/
categories:
    - Career & Growth
tags:
    - book-reviews
    - lifelong-learning
    - software-craftsmanship
    - architecture
    - clean-code
    - microservices
    - DDD
---

We cannot afford to fall into technical monotony and get carried away by the same ways of doing things over and over again and in the way we already know.
We need to make an effort to **keep learning and stay updated** whenever possible according to your context and circumstances.

Continuous learning or [lifelong learning](https://en.wikipedia.org/wiki/Lifelong_learning). Among so many interesting books, the important thing is to choose well which ones to read and which of them will become our advisors.
I would like to share some comments on the books I have read in recent months and that I recommend you read.

<br><center><img src="/wp-content/uploads/building-microservices.jpg"  width="300"/></center>

##### 2015 - Author: [Sam Newman](http://www.oreilly.com/pub/au/6132)
<br>

Over time, and if not enough attention is paid, it is easy to generate a [monolithic architecture](https://en.wikipedia.org/wiki/Monolithic_application) or arrive at a monolithic architecture converted into a large coupled system or [Big ball of mud](https://en.wikipedia.org/wiki/Big_ball_of_mud).
The principles can be followed: [Single Responsability Principle, Separation of Concerns, Low Coupling &amp; High cohesion](/principios-a-seguir-en-el-diseno-de-un-sistema/) using a monolithic architecture although you will be limited to a single joint system with all the coupled functionalities. As far as possible and necessary, we must go a step further and divide the system according to its responsibilities.

The *Domain Driven Design* approach and its strategic patterns already introduced the division of the domain into the so-called [Bounded Context](/implementing-domain-driven-design-book-vaughn-vernon/) and how they collaborate with each other through the [Context Mappings](/domain-driven-design-episodio-ii-context-maps/). The proposal of a *microservices* architecture is based on the greater division of responsibilities and developing a set of small microservices that will support a distributed system.
The book advises us on the best strategies to *disaggregate* the *unique* database of our *monolithic system* into several databases that support the various *microservices* according to the responsibility of each one and how to manage the relationships of the tables in the division. As well as automation strategies and tools for *deploy/deployment* to deploy them in an isolated, autonomous and transparent way for the whole system, such as [Docker](https://www.docker.com/).

This *granularity* in the *microservices* allows us to choose the ideal programming language depending on its responsibility, scale and track errors more efficiently. [API REST](https://es.wikipedia.org/wiki/Transferencia_de_Estado_Representacional) as the main protocol for access, collaboration and consumption. *Tracing* tools that allow the *monitoring* of all activity between *microservices*, such as [ELK (ElasticSearch, Logstash y Kibana)](https://www.elastic.co/webinars/introduction-elk-stack).

I was struck by a comment in which we should prioritize the non-compliance of *DRY* (duplicating code in *microservices*) in order to favor [Single Responsability Principle, Separation of Concerns, Low Coupling &amp; High cohesion](/principios-a-seguir-en-el-diseno-de-un-sistema/). Given that the inconveniences generated in the coupling that occurs in the reuse of code between independent components can be worse.
It recommends some strategies in the *UI* layer to generate them through requests to several microservices that return HTML content or the information necessary to perform the *rendering* on the client. Also called [Composed UI](http://microservices.io/patterns/ui/client-side-ui-composition.html)*You can buy it [here](https:// information here:**
- [Introduction to Microservices](https://www.nginx.com/blog/introduction-to-microservices/?utm_source=refactoring-a-monolith-into-microservices&utm_medium=blog&utm_campaign=Microservices)
- [Microservices and Front-End](https://technologyconversations.com/2015/08/09/including-front-end-web-components-into-microservices/)
- [The Monolithic Frontend In The Microservices Architecture](http://blog.xebia.com/the-monolithic-frontend-in-the-microservices-architecture/)

<br><center><img src="/wp-content/uploads/pattern-practices-ddd.jpg"  width="300"/></center>

##### 2015 - Author: [Scott Millett](http://www. I solved many of the interpretation doubts I had pending.

In the first part of the book, it focuses on explaining the strategic patterns of DDD to deepen in later chapters on more tactical topics such as [CQRS](/domain-driven-design-architecture/), patterns that will help us in the development such as [Command (processor) pattern](https://en.wikipedia.org/wiki/Command_pattern), [Double Dispatch pattern](https://en.wikipedia.org/wiki/Double_dispatch), [Memento pattern](https://es.wikipedia.org/wiki/Memento_(patr%C3event-store/), reconstruction of aggregates.

As well as other design patterns such as the [Repository pattern](http://deviq.com/repository-pattern/), [Unit of Work pattern](https://lostechies.com/derekgreer/2015/11/01/survey-of-entity-framework-unit-of-work-patterns/), [Table Module pattern](https://martinfowler.com/eaaCatalog/tableModule.html), [Data Driven programming](https://en.wikipedia.org/wiki/Data-driven_programming), [Model Driven](https://en.wikipedia.org/wiki/Model-driven_engineering), [Active Record pattern](https://es.wikipedia.org/wiki/Active_record), [Transaction Script pattern](https://martinfowler.com/eaaCatalog/transactionScript.html) or [Mediator/Visitor pattern](https://en.wikipedia.org/wiki/Mediator_pattern).
All of them explained with graphics and examples. It also names some *antipatterns* such as [God Object](https://es.wikipedia.org/wiki/Objeto_todopoderoso) or [Anemic Domain model](https://en.wikipedia.org/wiki/Anemic_domain_model).

It is a highly recommended book due to the large number of code examples where it reflects much of the theory of the tactical patterns of the *DDD* approach, as well as some of the most used design patterns. The book solved many doubts regarding [CQRS](https://martinfowler.com/bliki/CQRS.html)/[ES](https://martinfowler.com/eaaDev/EventSourcing.html) and reconstruction of aggregates through the [Event Stream](https://en.wikipedia.org/wiki/Event_stream_processing) and the management of projections or *snapshots* that help to reconstruct the aggregate in a more efficient way. [RPC](https://es.wikipedia.org/wiki/RPC), [SOA](https://es.wikipedia.org/wiki/Arquitectura_orientada_a_servicios), [EDA](https://es.wikipedia.org/wiki/Arquitectura_dirigida_por_eventos), [eventual consistency](https://en.wikipedia.org/wiki/Eventual_consistency) and other interesting concepts with code examples. It also dedicates certain chapters to explain the main tools and most useful techniques that will make it easier for us to follow the recommended patterns and practices such as: [Fluent API](https://en.wikipedia.org/wiki/Fluent_interface), [MassTransit](http://masstransit-project.com/), [NServiceBus](https://particular.net/nservicebus), [RabbitMQ](https://www.rabbitmq.com/).
I am sure that it will be a book that I will consult on many occasions.

You can buy it [here](https://www.amazon.es/Patterns-Principles-Practices-Domain-Driven-Design/dp/1118714709).

<br><center><img src="/wp-content/uploads/cleancode.png"  width="300"/></center>

##### 2008 - Author: [Robert Cecil Martin](https://en.wikipedia.org/wiki/Robert_Cecil_Martin).

It teaches us good practices that will help us improve the readability and maintainability of the code we generate over time.
Guidelines and recommended guides to create well-structured quality code. With code examples in each case. In the first part of the book, it explains what clean code is and what benefits we will obtain to then make us understand the best practices through examples of code *refactoring*. Coding with the intention that anyone can understand the code, whether they know how to program or not.

The importance of the order of declaration of the elements, as well as the descriptive names of the variables, properties, methods, classes, modules, etc. The great benefits of test coverage and the recommendation to always perform TDD whenever possible following the principles of the correct generation of unit tests through [F.I.R.S.T](https://github.com/ghsukumar/SFDC_Best_Practices/wiki/F.I.R.S.T-Principles-of-Unit-Testing).

Finally, it provides us with information to be able to detect code fragments that need to be refactored or [code smell](https://en.wikipedia.org/wiki/Code_smell). I'm sure the same thing will happen to you as it did to me: as soon as you've read it, you'll regret not having done it before :)

You can buy it [here](https://www.amazon.es/dp/0132350882/ref=pd_lpo_sbs_dp_ss_1?pf_rd_p=556244407&pf_rd_s=lpo-top-stripe&pf_rd_t=201&pf_rd_i=0134052501&pf_rd_m=A1AT7YVPFBWXBL&pf_rd_r=YD5S5F3VGYF6F8H67EBR).

<br><center><img src="/wp-content/uploads/sandromancuso.png"  width="300"/></center>

##### 2014 - Author: [Sandro Mancuso](https://codurance.com/blog/author/sandro-mancuso/).

Understand and give the necessary importance to the technical quality of the product we deliver. Giving importance to knowledge and constant practice to be better professionals day by day. Paying attention to the entire process in the delivery of product value, getting involved in the solutions from beginning to end. [Sandro Mancuso](https://codurance.com/blog/author/sandro-mancuso/) tells about his beginnings and how he evolves in the various stages of his professional career.
Highlighting the importance of taking the correct steps, guiding and deciding at all times what is best for our professional future without leaving it to chance or that others can decide for us.

Keep our knowledge and skills updated through continuous learning and training, sharing it with the community. There are [meetups](https://www.meetup.com/es-ES/) groups in various cities where they perform [Katas](https://en.wikipedia.org/wiki/Kata_(programming)) or development practices where to train our skills: [Software Craftsmanship Barcelona](https://www.meetup.com/es-ES/Barcelona-Software-Craftsmanship/)
The book dedicates several chapters to giving advice and explaining good practices to *attract talent and passion to the organization*. Since traditional personnel selection processes are not refined enough to attract true talent to the company.

Using comparisons of traditional job offers with a new recommended model where an attempt is made to capture the passion for technology, giving an important role to quality in the development of its products.
Reflecting a company culture that is committed to continuous internal knowledge and with active collective collaboration for the continuous improvement of its products.

The great benefits of using [eXtreme Programming](https://es.wikipedia.org/wiki/Programaci%C3%B3n_extrema) techniques: [TDD](https://es.wikipedia.org/wiki/Desarrollo_guiado_por_pruebas), [BDD](https://es.wikipedia.org/wiki/Desarrollo_guiado_por_comportamiento), [Code review](https://es.wikipedia.org/wiki/Revisi%C3%B3n_de_c%C3%B3digo), [Pair programming](https://es.wikipedia.org/wiki/Programaci%C3%B3n_en_pareja), [Mob programming](https://en.wikipedia.org/wiki/Mob_programming) and other techniques that are committed to technical *robustness*, improving the final result of the product, customer satisfaction and its good evolution over time.
Despite focusing on the importance of quality, the book advises us to be *pragmatic* and not fall into the excessive theory of all the topics that can become an obstacle in decision-making and in the *agile* development of solutions focused on the delivery of product value. *You can buy it [here](https://www.amazon.es/Software-Craftsman-Professionalism-Pragmatism-Robert/dp/0134052501).*
