---
id: 1408
title: 'Domain-Driven Design. Factories &#038; Repositories'
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

 De todos los patrones tácticos usados en *DDD*, las *factories* son probablemente una de las mayormente conocidas y utilizadas. Encargadas de la **creación de instancias de objetos que requieren cierta lógica de construcción** que deseamos ocultar, siendo así un recurso que nos permite **encapsular la complejidad de construcción** de objetos. Conocidas como *factory classes* o *factory methods*. Inicialmente la lógica de construcción de un objeto se realiza en el *contructor*. Cuando éste empieza a incrementar su complejidad mediante diversas lógicas, el objeto en sí no debe ser el responsable de controlarlas para crearse así mismo. Debemos extraerlas y encapsularlas en *factories* permitiéndonos asegurar una **correcta instanciación** de los objetos, **evitando inconsistencias** u objetos incorrectamente inicializados. [<span aria-label="Sigue leyendo Domain-Driven Design. Factories & Repositories">(más…)</span>](https://josecuellar.net/domain-driven-design-factories-repositories/#more-1408)