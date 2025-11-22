---
id: 788
title: 'Agilizando la arquitectura de software'
date: '2015-10-23T20:49:33+00:00'
author: Jose
layout: post
permalink: /agilizando-arquitectura-software/
categories:
    - General
tags:
    - Arquitectura
    - Lean
    - SCRUM
---

Durante muchos años he diseñado y desarrollado arquitecturas mediante [metodologías tradicionales](https://es.wikipedia.org/wiki/Desarrollo_en_cascada), en los que el análisis exhaustivo inicial era primordial y necesario. 
La arquitectura global resultante era muy específica a los requerimientos iniciales de producto, sin tener en cuenta todos los cambios futuros que pudiesen aparecer a lo largo del tiempo, generando así una arquitectura rígida e incrementando la resistencia a cualquier cambio futuro.
Teniendo en cuenta que cuanto mayor es el producto a desarrollar sin previas validaciones por parte del consumidor o cliente, mayor será la probabilidad de que los haya.
Añadiendo además los problemas en las dependencias, comunicación, colaboración y coordinación entre roles responsables en el proceso por fases temporales progresivas.

<br><center><img src="/wp-content/uploads/waterfall.png"  width="700"/></center><br>

En cuanto tuve oportunidad de conocer y descubrir el mundo ágil, método lean y kaizen hace unos años, me convertí en un defensor de sus principios, ya que eran las soluciones a tantos problemas que experimenté en más de once años trabajando en metodologías tradicionales. 

El cambio, ya no representaba un problema, sino una oportunidad de seguir creciendo y aprendiendo. 

<br><center><img src="/wp-content/uploads/agile.png"  width="700"/></center><br>

Esencialmente y desde el punto de vista de producto, debemos establecer el [producto mínimo viable (MVP)](https://es.wikipedia.org/wiki/Producto_viable_m%C3%ADnimo), que nos permita experimentar iterativamente mediante split testing y entrar en el circuito de Crear-Medir-Aprender lo más rápido posible, para saber si pivotar la estrategia o perseverar en ella. 

Todo ello en pequeños incrementos de producto mediante sprints o iteraciones con estrecha colaboración a negocio y el cliente final. 
Evitando en mayor medida el despilfarro de tiempo y recursos. 

Siguiendo así el método [Lean Startup](http://josecuellar.net/the-lean-startup-de-los-imprescindibles/) y adaptándose a la metodología ágil de proyectos. 

<br><center><img src="/wp-content/uploads/leanstartup.png"  width="500"/></center><br>

Con respecto a la arquitectura, este tipo de método de desarrollo de producto es vital para fomentar las [arquitecturas emergentes](https://es.wikipedia.org/wiki/Arquitectura_emergente) en el equipo mediante la [arquitectura mínima viable (MVA)](http://www.kavistechnology.com/blog/minimal-viable-architecture/) . 
Teniendo muy presente el principio [YAGNI (You Ain't Gonna Need It)](https://es.wikipedia.org/wiki/YAGNI). Siendo así muchísimo más sencillo y flexible cualquier tipo de cambio de dirección o imprevisto.

<br><center><img src="/wp-content/uploads/mva.png"  width="500"/></center><br>

> La visión de la arquitectura en las metodologías ágiles cambia: ya no existe la figura de arquitecto de software tradicional como tal en un equipo de Scrum. Ya que la arquitectura emerge progresivamente en base a las iteraciones del propio equipo.
> Sin embargo, como comenta [Charlie Alfred](https://charliealfred.wordpress.com), en su post [SCRUM and Architecture – Partners or Adversaries?](https://charliealfred.wordpress.com/scrum-and-architecture-partners-or-adversaries/)**: “la arquitectura es el aceite y el filtro que lubrica adecuadamente a Scrum”**. 

Es básico prestar atención progresiva al crecimiento de la arquitectura a lo largo del tiempo. Asegurando que se cumplan los principios de calidad/rendimiento/reutilización y evitar la posible complejidad que pudiese surgir para disminuir la posibilidad de generar deuda técnica o incidencias, planificando/ejecutando [refactoring periódicos](http://www.josecuellar.net/cuando-y-porque-realizar-tareas-de-refactoring/). 

Los perfiles más experimentados en arquitectura deben orientar, guiar, advertir y aconsejar sobre posibles imprevistos, observando el crecimiento/complejidad de la arquitectura, teniendo en cuenta toda su experiencia. 
Así como los perfiles más especializados en optimización de buscadores (SEO) nos guiarán en el desarrollo siguiendo la estrategia correcta y otros perfiles con otras habilidades en la construcción del producto, mediante técnicas como el [pair programming](https://es.wikipedia.org/wiki/Programaci%C3%B3n_en_pareja) o el [mob programming](https://en.wikipedia.org/wiki/Mob_programming). Fomentando así el aprendizaje del equipo. 

> En el mundo del conocimiento, como dijo Einstein: **"todos somos ignorantes, lo que ocurre es que no todos ignoramos las mismas cosas"**.

La dificultad entonces para un correcto engranaje de Scrum reside en disgregar: 
¿Cual es mi MVP? ¿Qué MVA aplicamos? 

> A menudo nos dejamos llevar por el pensamiento que algo mínimo, es poco. Pero no hay que pensar en cantidades, sino en el valor que estamos aportando, tanto a nivel de producto como técnico.


**Lectura recomendada**: 

[Architecture Abstract](http://www.scaledagileframework.com/agile-architecture/)