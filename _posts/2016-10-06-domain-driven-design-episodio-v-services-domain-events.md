---
id: 1263
title: 'Domain-Driven Design. Services &#038; Domain Events'
date: '2016-10-06T20:24:37+00:00'
author: Jose
layout: post
guid: 'http://josecuellar.net/?p=1263'
permalink: /domain-driven-design-episodio-v-services-domain-events/
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

## Services

 Podemos definir los servicios como procesos que realizan determinadas tareas. Empleados y evolucionados desde [Service Oriented Architecture](https://es.wikipedia.org/wiki/Arquitectura_orientada_a_servicios) o [Remote Procedure Call](https://es.wikipedia.org/wiki/Llamada_a_procedimiento_remoto). Tareas o acciones genéricas que no se asocian a una única determinada única instancia de objeto, de modo que la tendencia más habitual es crear métodos estáticos sobre la *entidad* o *agregado*. Esta práctica no se considera óptima por no seguir los [principios de desarrollo](http://josecuellar.net/principios-a-seguir-en-el-diseno-de-un-sistema/) y dificultando en gran medida el testeo, además de considerarse mala práctica acceder a *repositorios* dentro de los *agregados* o *entidades* en el modelo de dominio. La necesidad de incluir métodos estáticos en el modelo de dominio es un <u>buen indicador para crear un servicio</u>. [<span aria-label="Sigue leyendo Domain-Driven Design. Services & Domain Events">(más…)</span>](https://josecuellar.net/domain-driven-design-episodio-v-services-domain-events/#more-1263)