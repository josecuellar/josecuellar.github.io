---
id: 1408
title: 'Domain-Driven Design. Factories & Repositories'
date: '2016-12-09T13:41:20+00:00'
author: Jose
layout: post
guid: 'http://josecuellar.net/?p=1408'
permalink: /domain-driven-design-factories-repositories/
s4_url2s:
    - ''
s4_image2s:
    - ''
s4_ctitle:
    - ''
s4_cdes:
    - ''
categories:
    - General
tags:
    - Arquitectura
    - 'Domain-Driven Design'
---

## Factories

De todos los patrones tácticos usados en *DDD*, las *factories* son probablemente una de las mayormente conocidas y utilizadas. Encargadas de la **creación de instancias de objetos que requieren cierta lógica de construcción** que deseamos ocultar, siendo así un recurso que nos permite **encapsular la complejidad de construcción** de objetos. Conocidas como *factory classes* o *factory methods*. Inicialmente la lógica de construcción de un objeto se realiza en el *contructor*. Cuando éste empieza a incrementar su complejidad mediante diversas lógicas, el objeto en sí no debe ser el responsable de controlarlas para crearse así mismo. Debemos extraerlas y encapsularlas en *factories* permitiéndonos asegurar una **correcta instanciación** de los objetos, **evitando inconsistencias** u objetos incorrectamente inicializados. No deben alojarse las reglas de negocio para la construcción de instancias en las *factories*, para ello disponemos de los *domain services*, aunque pueden incluir [invariants](https://en.wikipedia.org/wiki/Invariant_(computer_science)) facilitadas por los *domain experts* que nos aseguran estados correctos y consistentes. Normalmente se utilizan patrones para adaptar ***abstract factories***. En la que mediante implementaciones de *interfaces* satisfacemos la creación de objetos de nuestro modelo de dominio: <center>![](http://josecuellar.net/wp-content/uploads/abstractfactory.png)</center><span style="font-size: 10px;">Fuente: [C# Abstract Factory Pattern combined with Dependancy Injection andInversion of Control](http://blog.bekijkhet.com/2012/05/c-abstract-factory-pattern-combined.html).</span>Las ***abstract factories*** se alojan en *Domain layer* ya que construyen instancias de objetos asociados al modelado dominio *(entities, value objects o aggregates)*. Deben diseñarse a partir del lenguaje ubicuo de la organización. Los ***factory methods*** son muy habituales en *aggregates* para encapsular las lógicas de construcción del agregado que los contiene. En el siguiente gráfico podemos ver los ejemplos de factory methods según agregado y contexto: <center>![](http://josecuellar.net/wp-content/uploads/factorymethods.png)</center><span style="font-size: 10px;">Fuente: *Implementing Domain-Driven Design*.</span>## Repositories

En enfoque *DDD* forman una capa intermedia entre nuestro modelado de dominio y la persistencia de sus estados en la base de datos. Guardando y recuperando el estado en cada momento mediante abstracciones encargadas de proveer los métodos necesarios de comunicación con la infrastructura de persistencia. *Infrastructure layer* se encargará de alojar las implementaciones necesarias según las tecnologías o mecanismos *(SQL, Redis, MongoDB, In-Memory, ORM)* de persistencia que podamos y nos interese disponer. Mediante mecanismos que nos faciliten la [DI](http://josecuellar.net/domain-driven-design-episodio-iii-arquitectura/) utilizaremos la que nos convenga en cada *contexto*. Hay dos tipos de diseño de repositorios más habituales, orientado a colecciones y orientados a persistencia: Collection-oriented respositories y persistence repository. ***Collection-oriented respositories*** es considerado el diseño principal de repositorios enfocado a *DDD*. Utilizando instancias en memoria como principal uso hasta el momento del *commit* en el que persistirá el estado de la *entidad* o *agregado* mediante *abstracciones de los repositorios* para efectuar la acción necesaria según el estado del elemento en memoria *vs* persistido. Para evitar los problemas que pueden ocasionar la concurrencia de usuarios en la escritura, existen estrategias de *versionado* en persistencia, incrementándola en cada modificación y comprobando posteriormente en subsiguientes escrituras para efectuar la acción necesaria en cada momento. ***Persistence repository*** se relaciona y orienta a los tradicionales métodos *CRUD*, *transaccionando* cada acción de escritura de estado sobre la base de datos. Enfoque con gran influencia en la utilización de *DAO*. Se considera una mala práctica en *DDD* la inyección de cualquier tipo de servicio o repositorio en el modelo de dominio. Debiendo inyectarlos en los servicios de aplicación para que *orqueste* las persistencia y construcción de estado de cada elemento de nuestro modelo de dominio. <u>Te dejo algunos enlaces interesantes para ampliar la información:</u>[What are Factories in Domain Driven Design?](http://culttt.com/2014/12/24/factories-domain-driven-design/)[Repository - Martin Fowler]("http://martinfowler.com/eaaCatalog/repository.html)[Repository pattern](http://deviq.com/repository-pattern/)