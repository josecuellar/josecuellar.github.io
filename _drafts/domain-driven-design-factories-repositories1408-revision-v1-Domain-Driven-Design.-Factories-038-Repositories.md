---
id: 1485
title: 'Domain-Driven Design. Factories &#038; Repositories'
date: '2016-12-09T13:41:41+00:00'
author: Jose
layout: revision
guid: 'http://josecuellar.net/1408-revision-v1/'
permalink: '/?p=1485'
---

## Factories

 De todos los patrones tácticos usados en *DDD*, las *factories* son probablemente una de las mayormente conocidas y utilizadas. Encargadas de la **creación de instancias de objetos que requieren cierta lógica de construcción** que deseamos ocultar, siendo así un recurso que nos permite **encapsular la complejidad de construcción** de objetos. Conocidas como *factory classes* o *factory methods*. Inicialmente la lógica de construcción de un objeto se realiza en el *contructor*. Cuando éste empieza a incrementar su complejidad mediante diversas lógicas, el objeto en sí no debe ser el responsable de controlarlas para crearse así mismo. Debemos extraerlas y encapsularlas en *factories* permitiéndonos asegurar una **correcta instanciación** de los objetos, **evitando inconsistencias** u objetos incorrectamente inicializados. [<span aria-label="Sigue leyendo Domain-Driven Design. Factories & Repositories">(más…)</span>](https://josecuellar.net/?p=1485#more-1485)