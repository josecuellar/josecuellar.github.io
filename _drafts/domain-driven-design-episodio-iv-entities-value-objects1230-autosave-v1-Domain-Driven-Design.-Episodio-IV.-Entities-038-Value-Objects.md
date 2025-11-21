---
id: 1260
title: 'Domain-Driven Design. Episodio IV. Entities &#038; Value Objects'
date: '2016-09-15T07:10:29+00:00'
author: Jose
layout: revision
guid: 'http://josecuellar.net/1230-autosave-v1/'
permalink: '/?p=1260'
---

## Entities

Definimos entidad como un concepto/objeto de dominio **único** (dispone de un identificador asociado). Los identificadores son únicos e inmutables, por ese motivo es aconsejable almacenar el identificador en un [Value Object](http://martinfowler.com/bliki/ValueObject.html). Comúnmente la tendencia de modelado de entidades refleja la estructura de datos, existiendo herramientas como los [ORM](https://es.wikipedia.org/wiki/Mapeo_objeto-relacional) generando un modelo de dominio totalmente mapeado a la estructura de datos mediante [CRUD](https://es.wikipedia.org/wiki/CRUD). Este método es muy útil para sencillas aplicaciones o sistemas con evolución limitada o nula. En cambio, no aconsejable para aquellas aplicaciones o sistemas que requieran una evolución y aumento progresivo en su complejidad. Siendo más aconsejable un modelado desacoplado a la estructura de datos, siendo más fiel a la lógica de dominio de la organización mediante *lenguaje obicuo*. [<span aria-label="Sigue leyendo Domain-Driven Design. Episodio IV. Entities & Value Objects">(más…)</span>](https://josecuellar.net/?p=1260#more-1260)