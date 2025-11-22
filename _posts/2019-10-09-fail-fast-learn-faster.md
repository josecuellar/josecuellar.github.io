---
id: 1820
title: 'Fail fast, fail cheap, fail well: learn faster'
date: '2019-10-09T19:55:03+00:00'
author: Jose
layout: post
permalink: /fail-fast-learn-faster/
categories:
    - General
tags:
    - fail-fast
    - principios
    - xp
---

[Programa de forma defensiva](https://es.wikipedia.org/wiki/Programaci%C3%B3n_defensiva), estricta y rigurosa. Devuelve excepciones siempre y cuando las condiciones no son las adecuadas en un momento concreto de ejecución.

Una de las prácticas que te ayudarán y que supongo que ya conocerás, son las [guard clauses](https://refactoring.com/catalog/replaceNestedConditionalWithGuardClauses.html). Olvídate de los *else* en los condicionales (harán tu código más sencillo y legible).

<br><center><img src="/wp-content/uploads/2019/10/image-2.png"  width="400"/></center><br>

Cuanto más permisivo seas en tus desarrollos, mayores serán las acciones correctivas que deberás hacer posteriormente y más dificultad tendrás de detectar el *root cause* de los bugs e inconsistencias que genere.

Asegúrate de disponer de una buena estrategia **de control de errores**: muestra al usuario *friendly errors* y registra toda la información técnica posible para llegar a ellos de la forma más rápida posible y entender cómo se está interactuando con el *sistema*, actuando en consecuencia para evitarlos o disminuirlos.

**Lean Startup Model**

Si no te has leído el libro, te lo resumo [aquí](/the-lean-startup-de-los-imprescindibles/).

Aprende rápido de tus errores. Mediante un pequeño y barato *MVP*, mide los resultados y confirma las hipótesis de tu idea inicial mediante experimentación como *Test A/B*. ***Pivota o persevera*** en cada caso. 
Extrapólalo a todos los ámbitos. En el técnico, evita el [BDUF ](https://en.m.wikipedia.org/wiki/Big_Design_Up_Front)o [BMUF](http://agilemodeling.com/essays/bmuf.htm) y la [sobreingeniería](https://en.wikipedia.org/wiki/Overengineering).

<br><center><img src="/wp-content/uploads/2019/10/image-1.png"  width="400"/></center><br>

**Fail fast, fail well**

El fallo es inevitable y forma parte del proceso de perfeccionamiento, aprendizaje y evolución en un determinado contexto. Somos humanos, culparnos por los fallos, sería culparnos por ser lo que somos.

<br><center><img src="/wp-content/uploads/2019/10/image-1024x570.png"  width="400"/></center><br>

De modo que asegúrate, que ante un fallo, la **capacidad de reacción y aprendizaje sea lo más rápido que el contexto te permita** (extrapólalo también en cualquier ámbito). 
Por ejemplo, en el que nos compete: si encuentras un fallo importante en la publicación de una nueva versión a producción: deberías disponer de una estrategia de *rollback* y emplear prácticas como *canary releasing* para un bajo impacto en caso de error. Registra toda la información posible para el posterior análisis y aprendizaje de todo lo sucedido.

[Kent Beck en su libro Extremme Programming Explained](/extreme-programming-values/) explica la importancia del coraje como uno de los valores de un equipo. *Ante el miedo: ¡coraje!*

#tryagain