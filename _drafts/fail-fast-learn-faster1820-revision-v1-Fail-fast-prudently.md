---
id: 1826
title: 'Fail-fast prudently'
date: '2019-10-09T19:41:47+00:00'
author: Jose
layout: revision
guid: 'https://josecuellar.net/1820-revision-v1/'
permalink: '/?p=1826'
---

Podemos encontrar varias aplicaciones a *falla rápido*.

**Como principio de desarrollo de software**

[Programa de forma defensiva](https://es.wikipedia.org/wiki/Programaci%C3%B3n_defensiva), estricta y rigurosa. Devolver excepciones siempre cuando las condiciones no son las adecuadas en un momento en concreto de ejecución.

Código permisivo con objetivo de devolver los menos errores posibles al usuario, es el error más habitual y peligroso que me encuentro cuando realizo tareas de refactoring en legacy (siendo una de las principales causas raíz por las que los hago).

No intentes hacer el código más permisivo por el hecho de disminuir la respuesta de errores y ni mucho menos intentes ocultarlo. A la larga es totalmente contraproducente. Quizás en algunos casos sientas tentación de simplemente trazar el error *(fail-silent)* y continuar la ejecución. Desde mi punta de vista, deberían ser una minoría de casos y probablemente te recomendaría lanzar una excepción siempre.

Desde mi punta de vista, deberían ser una minoría de casos y probablemente te recomendaría lanzar una excepción siempre.

> Cuanto más permisivo seas en tus desarrollos, mayores serán las acciones correctivas que deberás hacer posteriormente y más dificultad tendrás de detectar el *root cause*.

Una de las prácticas que te ayudarán y que supongo que ya conocerás, son las [guard clauses](https://refactoring.com/catalog/replaceNestedConditionalWithGuardClauses.html). Olvídate de los *else* en los condicionales (harán tu código más sencillo y legible).

Asegúrate de disponer de una buena estrategia de control de errores. Mostrando al usuario *friendly errors* y registra la información detallada y necesaria para llegar a ellos de la forma más rápida posible.

**Fail-fast. Lean Startup, Eric Ries**

Si no te has leído el libro, te lo recomiendo. [Aquí](/the-lean-startup-de-los-imprescindibles/)encontrarás una reseña sobre el libro.

La necesidad de fallar rápido para aprender rápido. Mediante un pequeño y barato MVP, mide los resultados y confirma las hipótesis de tu idea inicial mediante experimentación como Test A/B. Pivota o persevera a medida que confirmas dichas hipótesis. Evita el [BDUF](http://agilemodeling.com/essays/bmuf.htm) o [BMUF](http://agilemodeling.com/essays/bmuf.htm) la [sobreingeniería](https://en.wikipedia.org/wiki/Overengineering).

<div class="wp-block-image">![](/wp-content/uploads/2019/10/image-1.png)
</div>**Celebra y pierde el miedo al fallo**

El fallo forma parte del proceso de perfeccionamiento, aprendizaje y evolución en un determinado contexto. Sin el fallo, no aprenderíamos. Así que intentemos no fallar, pero si fallamos, celebrémoslo, ya nos queda un paso menos para el éxito. Somos humanos, culparnos por los fallos, sería culparnos por ser lo que somos.

<div class="wp-block-image">![](/wp-content/uploads/2019/10/image-1024x570.png)
</div>Asegúrate que ante un fallo, la capacidad de reacción sea inminente. Por ejemplo, si encuentras un fallo importante en la publicación de una nueva versión a producción. Deberías disponer de una estrategia de rollback inmediata. Promueve prácticas como [canary releasing](https://martinfowler.com/bliki/CanaryRelease.html) para un bajo impacto en caso de error y defiende en tu empresa una cultura que abrace el error como algo positivo y mecanismo de aprendizaje, en vez de castigarlo, generando miedo al riesgo y al cambio.

[Kent Beck en su libro Extremme Programming Explained](/extreme-programming-values/) explica la importancia del coraje como uno de los valores de un equipo.

> Recuerda que si el fallo es humano, la pérdida de confianza que puede generar alrededor, también. Arriesga cuando sea necesario y en el momento oportuno. Más importante que ganar una batalla, es decidir cual luchar y en qué momento. Falla prudentemente.