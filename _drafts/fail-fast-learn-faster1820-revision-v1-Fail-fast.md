---
id: 1836
title: Fail-fast
date: '2019-10-09T20:24:29+00:00'
author: Jose
layout: revision
guid: 'https://josecuellar.net/1820-revision-v1/'
permalink: '/?p=1836'
---

**Como principio de desarrollo de software**

[Programa de forma defensiva](https://es.wikipedia.org/wiki/Programaci%C3%B3n_defensiva), estricta y rigurosa. Devuelve excepciones siempre y cuando las condiciones no son las adecuadas en un momento concreto de ejecución.

Implementaciones con objetivo de devolver los menos errores posibles al usuario, es el error más habitual que me encuentro cuando realizo tareas de refactoring en legacy (siendo una de las principales causa raíz por las que los hago).

No intentes ocultarlos. A la larga es totalmente contraproducente. Quizás en algunos casos sientas tentación de simplemente trazar el error *(fail-silent)* y continuar la ejecución. Desde mi punta de vista, deberían ser una minoría de casos y probablemente te recomendaría lanzar una excepción: seguro que existe la manera correcta y elegante de no trazar nada.

Una de las prácticas que te ayudarán y que supongo que ya conocerás, son las [guard clauses](https://refactoring.com/catalog/replaceNestedConditionalWithGuardClauses.html). Olvídate de los *else* en los condicionales (harán tu código más sencillo y legible).

<div class="wp-block-image"><figure class="aligncenter is-resized">![](https://josecuellar.net/wp-content/uploads/2019/10/image-2.png)</figure></div> [<span aria-label="Sigue leyendo Fail-fast">(más…)</span>](https://josecuellar.net/?p=1836#more-1836)