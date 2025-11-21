---
id: 2068
title: 'Fail fast, fail cheap, fail well: learn faster'
date: '2025-11-21T21:50:55+00:00'
author: Jose
layout: revision
guid: 'https://josecuellar.net/?p=2068'
permalink: '/?p=2068'
---

[Programa de forma defensiva](https://es.wikipedia.org/wiki/Programaci%C3%B3n_defensiva), estricta y rigurosa. Devuelve excepciones siempre y cuando las condiciones no son las adecuadas en un momento concreto de ejecución.

Una de las prácticas que te ayudarán y que supongo que ya conocerás, son las [guard clauses](https://refactoring.com/catalog/replaceNestedConditionalWithGuardClauses.html). Olvídate de los *else* en los condicionales (harán tu código más sencillo y legible).

<figure class="wp-block-image aligncenter is-resized">![](https://josecuellar.net/wp-content/uploads/2019/10/image-2.png)</figure>> Cuanto más permisivo seas en tus desarrollos, mayores serán las acciones correctivas que deberás hacer posteriormente y más dificultad tendrás de detectar el *root cause* de los bugs e inconsistencias que genere.

Asegúrate de disponer de una buena estrategia **de control de errores**: muestra al usuario *friendly errors* y registra toda la información técnica posible para llegar a ellos de la forma más rápida posible y entender cómo se está interactuando con el *sistema*, actuando en consecuencia para evitarlos o disminuirlos.

Para ciertos casos es útil la implementación de [Notificación pattern](https://www.martinfowler.com/articles/replaceThrowWithNotification.html).

**Lean Startup Model**

Si no te has leído el libro, te lo recomiendo:[ aquí encontrarás una reseña](https://josecuellar.net/the-lean-startup-de-los-imprescindibles/) sobre el libro.

Aprende rápido de tus errores. Mediante un pequeño y barato *MVP*, mide los resultados y confirma las hipótesis de tu idea inicial mediante experimentación como *Test A/B*. ***Pivota o persevera*** en cada caso. Evita el [BDUF ](https://en.m.wikipedia.org/wiki/Big_Design_Up_Front)o [BMUF](http://agilemodeling.com/essays/bmuf.htm) y la [sobreingeniería](https://en.wikipedia.org/wiki/Overengineering).

<figure class="wp-block-image aligncenter is-resized">![](https://josecuellar.net/wp-content/uploads/2019/10/image-1.png)</figure>**Fail fast, fail well**

El fallo es inevitable y forma parte del proceso de perfeccionamiento, aprendizaje y evolución en un determinado contexto. Somos humanos, culparnos por los fallos, sería culparnos por ser lo que somos.

<figure class="wp-block-image aligncenter is-resized">![](https://josecuellar.net/wp-content/uploads/2019/10/image-1024x570.png)</figure>De modo que asegúrate, que ante un fallo, la **capacidad de reacción y aprendizaje sea rápido**. Por ejemplo, si encuentras un fallo importante en la publicación de una nueva versión a producción: deberías disponer de una estrategia de *rollback* y emplear prácticas como *canary releasing* para un bajo impacto en caso de error. Registra toda la información posible para el posterior análisis y aprendizaje de todo lo sucedido.

[Kent Beck en su libro Extremme Programming Explained](https://josecuellar.net/extreme-programming-values/) explica la importancia del coraje como uno de los valores de un equipo. *Ante el miedo: ¡coraje!*

\#tryagain