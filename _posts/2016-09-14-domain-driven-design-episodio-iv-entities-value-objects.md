---
id: 1230
title: 'Domain-Driven Design. Entities &#038; Value Objects'
date: '2016-09-14T20:56:34+00:00'
author: Jose
layout: post
guid: 'http://josecuellar.net/?p=1230'
permalink: /domain-driven-design-episodio-iv-entities-value-objects/
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

Elementos más importantes para el modelado de dominio dentro del apartado táctico en el desarrollo orientado a DDD.

## Entities

 Definimos entidad como un concepto/objeto de dominio **único** (dispone de un identificador asociado). Los identificadores son únicos e inmutables, por ese motivo es aconsejable almacenar el identificador en un [Value Object](http://martinfowler.com/bliki/ValueObject.html). Comúnmente la tendencia de modelado de entidades refleja la estructura de datos, existiendo herramientas como los [ORM](https://es.wikipedia.org/wiki/Mapeo_objeto-relacional) generando un modelo de dominio totalmente mapeado a la estructura de datos mediante [CRUD](https://es.wikipedia.org/wiki/CRUD). Este método es muy útil para sencillas aplicaciones o sistemas con evolución limitada o nula. En cambio, no aconsejable para aquellas aplicaciones o sistemas que requieran una evolución y aumento progresivo en su complejidad. Siendo más aconsejable un modelado desacoplado a la estructura de datos, siendo más fiel a la lógica de dominio de la organización mediante *lenguaje obicuo*. [<span aria-label="Sigue leyendo Domain-Driven Design. Entities & Value Objects">(más…)</span>](https://josecuellar.net/domain-driven-design-episodio-iv-entities-value-objects/#more-1230)