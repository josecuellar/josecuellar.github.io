---
id: 1122
title: 'Domain-Driven Design. Empezando&#8230;'
date: '2016-07-21T22:26:20+00:00'
author: Jose
layout: post
guid: 'http://josecuellar.net/?p=1122'
permalink: /domain-driven-design-episodio-i-empezando/
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

Estoy inmerso en la lectura de "*Implementing Domain-Driven Design*" de Vaughn Vernon. Llevo algunos pocos capítulos y he decidido, a modo de seguimiento y aprendizaje, empezar a escribir una serie de post para compartir con la comunidad algunas reseñas de lo que creo interesante. Siéntete libre de hacer tus comentarios :)

<center>![](http://josecuellar.net/wp-content/uploads/ddd.jpg)</center>> El diseño no es sólo cómo se ve o cómo se siente. El Diseño es cómo funciona. Steve Jobs

 DDD fue acuñado e introducido por **Eric Evans** en su publicación de "Domain-Driven Design - Tackling Complexity in the Heart of Software" en 2003. Se trata de un conjunto de **prácticas, técnicas, herramientas y enfoques para dar respuesta a las necesidades complejas** en el desarrollo de software, orientadas al core del negocio, su evolución y sus objetivos. La importante necesidad de entender el negocio y su complejidad con una **comunicación intensa y directa con los expertos de dominio** mediante un único tipo común de lenguaje llamado **lenguaje ubicuo**. Fomentando así un código de calidad centrado en soluciones específicas de problemas bien entendidos de negocio y reflejado en el comportamiento del software que generamos. DDD se divide en dos grandes grupos en los que cada cual existen pautas a seguir para el buen desempeño: el **estratégico y el táctico**. En el libro utiliza la metáfora de la escalada para definir ambas agrupaciones: antes de escalar una montaña, analízala, piensa qué camino de ascenso es el más seguro y correcto (estratégica), ejecutando posteriormente las técnicas necesarias para alcanzar la cima (táctica) con éxito. <u>La parte superior pertenece a los conceptos tácticos y la inferior a los estratégicos:</u>![](http://josecuellar.net/wp-content/uploads/ddd.PNG)**La parte estratégica es la parte inicial vital para el buen desempeño de DDD**. Ambos grupos están ligados estrechamente y el éxito de la parte táctica depende de forma directa de la estratégica, si ésta es incorrecta, también lo será la ejecución táctica a pesar de seguir las buenas prácticas. > Nunca utilices DDD para complicar tu solución, sino para simplificarla.

## Primeros pasos estratégicos

Definir el lenguaje común que todos los involucrados en el proyecto van a utilizar, tanto expertos de dominio como desarrolladores: **estableciendo así el lenguaje ubicuo que todos deberán emplear para codificar o discutir reglas de negocio**. Mediante dicha comunicación intensa y evolutiva con los **domain experts** se dividirá estratégicamente la complejidad en áreas o ámbitos que aporten valor de forma independiente. Dividiéndose en los siguientes tipos: **domain, subdomain y bounded context**. ![](http://josecuellar.net/wp-content/uploads/boundedcontext.PNG)Disgregar adecuadamente nos aportará una visión más amplia y simple en cada ámbito o bounded context. Enfocando así un correcto y mejor modelado de dominio (Entities, Value Objects, Aggregates, Domain Events) disminuyendo la complejidad global del dominio principal. Separando conceptos y encapsulando responsabilidades. Mejorando así la comunicación y el entendimiento de los objetivos y evolución de negocio en cada agrupación. **Favoreciendo comportamientos diferentes para una misma entidad dependiendo del bounded context al que pertenezcan.** Relacionándose entre ellos mediante **context mappings**. De momento, es todo :) He creado un repositorio público en GitHub donde voy reflejando los aspectos principales y mejores prácticas a través de DDD mediante onion architecture. Puedes acceder a él [aquí](https://github.com/josecuellar/ddd-onion-architecture-net). **¡Dame tu punto de vista y... *fork &amp; contribute* :)!**Os dejo también el enlace del perfil en GitHub de *Vaughn Vernon* [aquí](https://github.com/VaughnVernon).