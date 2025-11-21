---
id: 1803
title: 'Getting Started with ELK on Microsoft Azure'
date: '2019-09-24T18:18:07+00:00'
author: Jose
layout: revision
guid: 'https://josecuellar.net/1685-revision-v1/'
permalink: '/?p=1803'
---

Si estás familiarizado con el stack de ELK sabrás lo potente y versátil que resulta monitorizar cualquier tipo de actividad en cualquier infrastructura gracias a su potente motor de búsqueda Elasticsearch y las muchas posibilidades de personalización representando los datos que ofrece Kibana. Aunque opcional, la arquitectura recomendada para ELK debe incluir un broker entre los Beats y LogStash (Redis, Kafka o RabbitMQ) para evitar bottlenecks en la recuperación de datos de todos los orígenes que facilitan los beats: [![](https://josecuellar.net/wp-content/uploads/2018/11/elkredis.png)](https://josecuellar.net/wp-content/uploads/2018/11/elkredis.png) [<span aria-label="Sigue leyendo Getting Started with ELK on Microsoft Azure">(más…)</span>](https://josecuellar.net/?p=1803#more-1803)