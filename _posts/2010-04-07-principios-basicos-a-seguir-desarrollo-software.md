---
id: 118
title: 'Principios básicos en el desarrollo de software'
date: '2010-04-07T11:11:30+00:00'
author: Jose
layout: post
permalink: /principios-a-seguir-en-el-desarrollo-software/
categories:
    - General
tags:
    - Arquitectura
    - principios
    - solid
---

A la hora de diseñar y desarrollar software, es importante tener presente una serie de **principios de diseño fundamentales y básicos** que todo programador debería conocer y aplicar para desarrollar código limpio y de calidad.

#### Principios SOLID

- [**Principio de única responsabilidad**](http://en.wikipedia.org/wiki/Single_responsibility_principle) *(**S**ingle Responsability Principle)*. Una clase debe tener una única responsabilidad o funcionalidad.

- [**Principio abierto cerrado**](http://en.wikipedia.org/wiki/Open/closed_principle) *(**O**pen Close Principle)*. Las clases deben ser extensibles sin requerir modificación en la implementación interna de sus métodos.

- [**Principio de Sustitución de Liskov**](http://en.wikipedia.org/wiki/Liskov_substitution_principle) *(**L**iskov Substitution principie)*. Los subtipos o clases hijas deben ser sustituibles por sus propios tipos base relacionados (clases base). Generando una extensibilidad en los componentes del sistema por cada funcionalidad específica.

- [**Principio de Segregación de Interfaces**](http://en.wikipedia.org/wiki/Interface_segregation_principle) *(**I**nterface Segregation Principle)*. Muchas interfaces muy especializadas son preferibles a una interfaz general en la que se agrupen todas las interfaces. Interfaces específicas al consumidor.
- [**Principio de Inversión de Dependencias**](http://en.wikipedia.org/wiki/Dependency_inversion_principle) *(**D**ependency Inversion Principle)*. Las dependencias directas entre clases deben ser reemplazadas por abstracciones (interfaces, herencia) para permitir diseños top-down sin requerir primero el diseño de los niveles inferiores. Las abstracciones no deben depender de los detalles, los detalles deben depender de las abstracciones.

#### [**Alta cohesión (High Cohesion)**](http://en.wikipedia.org/wiki/Cohesion_(computer_science)) 
El diseño de componentes debe ser altamente cohesivo: No sobrecargar los componentes añadiendo funcionalidad mezclada o no relacionada. Relacionado con el principio *Single Responsability Priniciple*.

#### [**Bajo acoplamiento (Low Coupling)**](http://en.wikipedia.org/wiki/Coupling_(computer_science))
Bajo acoplamiento. Minimizar las relaciones e interconexiones entre componentes minimizando la dependencia entre ellos.

#### [**Separación/abstracción de conceptos/lógicas/funcionalidades de la aplicación (Separation of Concerns)**](http://en.wikipedia.org/wiki/Separation_of_concerns)
Minimizar puntos de conexión entre conceptos para conseguir una alta cohesión y un bajo acoplamiento.

#### [**Principio DRY - DIE** (**D**on't **R**epeat **Y**ourself - **D**uplication **I**s **E**vil)](http://en.wikipedia.org/wiki/Don't_repeat_yourself)
Evitar la duplicidad mediante la reutilización. Se debe especificar/implementar la funcionalidad en un único sitio en el sistema (componente, módulo o clase). Una misma funcionalidad no debe estar implementada en otros componentes.

#### [**Principio YAGNI** (**Y**ou **A**in´t **G**onna **N**eed **I**t)](http://en.wikipedia.org/wiki/You_ain't_gonna_need_it)
Diseñar solamente lo que es necesario para cubrir los requisitos actuales, no realizando *sobre-ingenierías* innecesarias.

#### [**Principio KISS** (**K**eep **I**t **S**imple and **S**tupid)](http://en.wikipedia.org/wiki/KISS_principle)
La sencillez debe ser un objetivo clave en el diseño y la complejidad innecesaria debe ser evitada.

#### La regla del Boy Scout
“Siempre deja el lugar de acampamento más limpio que como lo encontraste”. Si encuentras un desastre en el camino, lo limpias sin importar quién pudo haber hecho el desastre. Mejoras intencionalmente el ambiente para el siguiente grupo de campistas. En realidad, la forma original de la regla, escrita por Robert Stephenson Smyth Baden-Powell, el padre del Scoutismo, era “Intenta y deja el mundo un poco mejor que como lo encontraste”.

#### El principio de Hollywood
Basado en la típica respuesta que se les da a los actores que hacen una prueba para una película: "No nos llame, nosotros le llamaremos". Este principio está relacionado con el principio de inversión de dependencias de SOLID. Un ejemplo del principio de Hollywood es la inversión de control (IoC), que hace que una clase obtenga las referencias a objetos que necesita para funcionar, a través de una entidad externa.