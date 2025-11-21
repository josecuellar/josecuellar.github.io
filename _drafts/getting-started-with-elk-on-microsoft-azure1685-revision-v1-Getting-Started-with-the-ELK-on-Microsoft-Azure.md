---
id: 1745
title: 'Getting Started with the ELK on Microsoft Azure'
date: '2018-12-06T19:24:04+00:00'
author: Jose
layout: revision
guid: 'http://josecuellar.net/1685-revision-v1/'
permalink: '/?p=1745'
---

Si estás familiarizado con el stack de ELK sabrás lo potente y versátil que resulta monitorizar cualquier tipo de actividad en cualquier infrastructura gracias a su potente motor de búsqueda Elasticsearch y las muchas posibilidades de personalización representando los datos que ofrece Kibana.   
  
 Aunque opcional, la arquitectura recomendada para ELK debe incluir un broker entre los Beats y LogStash (Redis, Kafka o RabbitMQ) para evitar bottlenecks en la recuperación de datos de todos los orígenes que facilitan los beats: [![](http://josecuellar.net/wp-content/uploads/2018/11/elkredis.png)](http://josecuellar.net/wp-content/uploads/2018/11/elkredis.png) [<span aria-label="Sigue leyendo Getting Started with the ELK on Microsoft Azure">(más…)</span>](https://josecuellar.github.io/?p=1745#more-1745)