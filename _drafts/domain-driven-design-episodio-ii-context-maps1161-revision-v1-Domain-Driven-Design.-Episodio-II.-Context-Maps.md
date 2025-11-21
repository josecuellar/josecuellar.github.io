---
id: 1187
title: 'Domain-Driven Design. Episodio II. Context Maps'
date: '2016-07-27T20:12:18+00:00'
author: Jose
layout: revision
guid: 'http://josecuellar.net/1161-revision-v1/'
permalink: '/?p=1187'
---

En el [post anterior](http://josecuellar.net/domain-driven-design-episodio-i-empezando/) vimos los primeros pasos estratégicos y cómo disgregábamos la complejidad del negocio en *Domains, Subdomains y Bounded Contexts*. Cada **Bounded Context** contiene o dispone de la tecnología, lenguaje de programación y arquitectura mínima necesaria para satisfacer los requerimientos de negocio de su contexto mediante un **modelo de dominio**. Las relaciones existentes entre *Bounded Contexts* se denominan **Context Maps** y las reglas necesarias para *mapear/traducir* un modelo de dominio de un determinado contexto a otro: **Translation Map**. Una vez identificados los *Bounded Contexts*, deberemos establecer según necesidades de cada caso el tipo de relación entre ellos, marcando la dirección de *flujo de información* mediante ***U**pstream* (exposición de servicios) y ***D**ownstream* (consumidor de servicios):

<center>![](http://josecuellar.net/wp-content/uploads/contextmap.png)</center> [<span aria-label="Sigue leyendo Domain-Driven Design. Episodio II. Context Maps">(más…)</span>](https://josecuellar.net/?p=1187#more-1187)