---
id: 1335
title: 'Domain-Driven Design. Episodio V. Services &#038; Domain Events'
date: '2016-10-08T20:31:14+00:00'
author: Jose
layout: revision
guid: 'http://josecuellar.net/1263-revision-v1/'
permalink: '/?p=1335'
---

## Services

 Podemos definir los servicios como procesos que realizan determinadas tareas. Empleados y evolucionados desde [Service Oriented Architecture](https://es.wikipedia.org/wiki/Arquitectura_orientada_a_servicios) o [Remote Procedure Call](https://es.wikipedia.org/wiki/Llamada_a_procedimiento_remoto). Tareas o acciones genéricas que no se asocian a una única determinada única instancia de objeto, de modo que la tendencia más habitual es crear métodos estáticos sobre la *entidad* o *agregado*. Esta práctica no se considera óptima por no seguir los [principios de desarrollo](http://josecuellar.net/principios-a-seguir-en-el-diseno-de-un-sistema/) y dificultando en gran medida el testeo, además de considerarse mala práctica acceder a *repositorios* dentro de los *agregados* o *entidades* en el modelo de dominio. La necesidad de incluir métodos estáticos en el modelo de dominio es un <u>buen indicador para crear un servicio</u>. [<span aria-label="Sigue leyendo Domain-Driven Design. Episodio V. Services & Domain Events">(más…)</span>](https://josecuellar.github.io/?p=1335#more-1335)