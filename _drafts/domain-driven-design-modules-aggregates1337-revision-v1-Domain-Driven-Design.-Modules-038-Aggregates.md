---
id: 1450
title: 'Domain-Driven Design. Modules &#038; Aggregates'
date: '2016-11-02T15:51:15+00:00'
author: Jose
layout: revision
guid: 'http://josecuellar.net/1337-revision-v1/'
permalink: '/?p=1450'
---

## Modules

 Los módulos son contenedores de elementos que nos permiten la organización de nuestro dominio. Denominados técnicamente como *packages* o *namespaces*. El objetivo principal es desacoplar y organizar los elementos dependiendo del contexto al que pertenecen. Siguiendo en todo momento el *lenguaje obicuo*. ### Module naming conventions for the model and submodules

 Normalmente y si la compañía dispone de un nombre de dominio en *internet*, el módulo principal empezará con *com*. Seguido del nombre de la organización. El siguiente segmento de nombre de módulo identifica el *Bounded Context* local donde se aloja el módulo o contenedor de elementos. No se recomienda utilizar los nombres comerciales de los productos de la organización en los nombres de módulos o submódulos ya que éstos pueden cambiar a lo largo del tiempo y en ocasiones no guarda relación directa con la responsabilidad del *Bounded Context* al que pertenece. Es preferible [identificar el nombre de cada *Bounded Context*](http://josecuellar.net/domain-driven-design-episodio-i-empezando/) según su responsabilidad a elección del equipo. El objetivo es reflejar el lenguaje obicuo de la organización. Los siguientes segmentos deben identificar en qué parte del sistema se encuentra. En sistemas con arquitecturas por capas sería recomendable utilizar los nombres específicos según cada capa. [<span aria-label="Sigue leyendo Domain-Driven Design. Modules & Aggregates">(más…)</span>](https://josecuellar.net/?p=1450#more-1450)