---
id: 108
title: 'Diseñando la arquitectura'
date: '2010-04-06T19:29:37+00:00'
author: Jose
layout: post
guid: 'http://www.josecuellar.net/?p=108'
permalink: /el-diseno-de-la-arquitectura-de-un-sistema/
description:
    - 'El diseño de la arquitectura de un sistema. Resumen de los aspectos más importantes a la hora de diseñar la arquitectura de un sistema de software. Tipos de requisitos y valoraciones generales.'
keywords:
    - 'Arquitectura, diseño, software, requerimientos, requisitos, agentes, claves'
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
---

Proceso, análisis y estudio por el cual se define una solución estructural interna para solventar los diferentes tipos de requisitos:

- [**Funcionales**](http://es.wikipedia.org/wiki/Requisito_funcional): Requerimientos de negocio y marketing. Normalmente un departamento independiente que desarrolla análisis funcionales acordes a la estrategia de negocio de la empresa o cliente.
- [**No funcionales**](http://es.wikipedia.org/wiki/Requisito_no_funcional): Requisitos de calidad en el software, seguridad, disponibilidad, eficiencia, usabilidad. Óptimo rendimiento. Tratándose de una aplicación Web: compatible con todos los navegadores, etc.

El diseño debe ser la estructura base que pueda solucionar todos los requerimientos actuales y pueda soportar la evolución de éstos en el transcurso del tiempo de forma satisfactoria. Diseñar los [componentes](http://es.wikipedia.org/wiki/Componentes_de_software) y [módulos](http://es.wikipedia.org/wiki/M%C3%B3dulo_(inform%C3%A1tica)) que formarán el sistema/estructura, su relación e interacción llevarán a cabo los requisitos funcionales y no funciones. La selección de un tipo de aplicación y tecnologías determina en cierta medida al [estilo arquitectural](http://www.josecuellar.net/arquitectura-de-software/estilos-arquitecturales-en-el-diseno-de-un-sistema/) que se va a emplear. Para diseñar la arquitectura de un sistema es importante tener en cuenta los intereses de los distintos **agentes** que participan: - **Los usuarios del sistema**. Normalmente representados sobre los [diagramas de casos de uso](http://es.wikipedia.org/wiki/Caso_de_uso).
- **El propio sistema** (tecnología, [patrón de diseño](http://es.wikipedia.org/wiki/Patr%C3%B3n_de_dise%C3%B1o), contexto). Reflejando los requisitos no funcionales.
- Objetivos y requisitos funcionales del **área/departamento de negocio/marketing**.
- [Metodología](http://es.wikipedia.org/wiki/Metodolog%C3%ADa) y requerimientos aplicados por el **jefe de proyecto**.

La comunicación del arquitecto entre los agentes que participan es vital para la adaptación correcta en el diseño del sistema. Cada uno de ellos impone requisitos y restricciones que deben ser tenidos en cuenta en el diseño de la arquitectura y que pueden llegar a entrar en conflicto, por lo que se debe alcanzar un compromiso y equilibrio de soluciones entre los intereses de cada participante. Se asume que el sistema cambiará con el paso del tiempo y que no podemos saber futuros requisitos funcionales. El sistema tendrá que evolucionar a medida que se prueba la arquitectura contra los requisitos del mundo real. Por eso, no hay que tratar de formalizar absolutamente todo a la hora de definir la arquitectura. La arquitectura debe soportar los cambios futuros del software, del hardware y de funcionalidad demandada por los agentes. <u>Claves a la hora de diseñar un sistema:</u>- Construir *hasta el cambio* más que *hasta el final*.
- Dividir en partes/[componentes](http://es.wikipedia.org/wiki/Componentes_de_software) el sistema y estudiar cómo deben interactuar entre ellas.
- La comunicación con todos los agentes que intervienen para recopilar requisitos, tanto funcionales, como no funcionales y la correcta coordinación entre agentes para definirlos de la forma más precisa posible.
- Utilizar herramientas de modelado para comunicar, analizar y reducir riesgos (generalmente [UML](http://es.wikipedia.org/wiki/Lenguaje_Unificado_de_Modelado)).
- Detectar que partes de la arquitectura son más susceptibles al cambio.
- Tener visión de futuro para intuir imprevistos o cambios de requerimientos, diseñando un sistema que absorba en la mayor parte posible dichos cambios/evolución.
- Capacidad de [abstracción](http://es.wikipedia.org/wiki/Abstracci%C3%B3n_(inform%C3%A1tica))/[encapsulación](http://es.wikipedia.org/wiki/Encapsulamiento_(inform%C3%A1tica)) de conceptos y funcionalidades para aumentar la [usabilidad](http://es.wikipedia.org/wiki/Usabilidad) de [componentes](http://es.wikipedia.org/wiki/Componentes_de_software) y [módulos](http://es.wikipedia.org/wiki/M%C3%B3dulo_(inform%C3%A1tica)) de la estructura.
- Analizar los [estilos arquitecturales](http://www.josecuellar.net/arquitectura-de-software/estilos-arquitecturales-en-el-diseno-de-un-sistema/).
- [Seguir los principios reconocidos por la industria del software para diseñar el sistema](http://www.josecuellar.net/arquitectura-de-software/principios-a-seguir-en-el-diseno-de-un-sistema/).

Los procesos modernos de arquitectura se basan en adaptarse a los cambios en los requisitos del sistema y en ir desarrollando la funcionalidad poco a poco, esto se traduce en que vamos a ir definiendo la arquitectura del sistema final poco a poco. *Podemos entenderlo como un proceso de maduración, como el de un ser vivo.*