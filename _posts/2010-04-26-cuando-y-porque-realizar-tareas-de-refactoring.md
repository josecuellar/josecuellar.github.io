---
id: 204
title: 'Cuando y porqué realizar tareas de Refactoring'
date: '2010-04-26T00:16:40+00:00'
author: Jose
layout: post
permalink: /cuando-y-porque-realizar-tareas-de-refactoring/
categories:
    - General
tags:
    - Arquitectura
---

La [refactorización](http://es.wikipedia.org/wiki/Refactorizaci%C3%B3n) es una técnica de la ingeniería de software para reestructurar un código fuente, alterando su estructura interna sin cambiar su comportamiento externo. 

En el mantenimiento de código, una de las tareas más comunes para mejorar la adaptación, el cambio continuo , nuevas funcionalidades y mejoras en el rendimiento de determinados componentes.   
  
Las ventajas con respecto a la calidad del software y tareas de refactoring, **se presentan a lo largo del tiempo en cada fase del proyecto**:   

<br><center><img src="/wp-content/uploads/refactoring/refactoring.png"  width="700"/></center><br>

El coste del cambio aumenta exponencialmente en base a ignorarlas y periodicidad de tareas de refactoring (principalmente en la gestión de la deuda técnica) mientras desarrollamos el producto.
- No tener en cuenta la deuda técnica y sin aplicar refactorings.
- Periódicamente de forma progresiva en el mismo momento que construimos producto.
- Periodo concreto anual.

> Como veis en la gráfica la gestión de deuda técnica recomendada y lógica es la aplicación continuada de refactorings.
> El equipo mediante determinadas sesiones iterativas emergerá la deuda técnica para incluir progresivamente en las entregas las tareas de refactoring relacionadas.

### Las tareas genéricas en el refactoring:

- Limpiar código muerto (código que nunca se ejecuta).
- Eliminar funcionalidades duplicadas.
- Encapsular funcionalidades beneficiando la reutilización de código.
- Reorganizar y reestructurar entidades/funcionalidades adaptándolas a los nuevos [requerimientos](http://www.josecuellar.net/arquitectura-de-software/el-diseno-de-la-arquitectura-de-un-sistema/) y [diseños arquitecturales](http://www.josecuellar.net/arquitectura-de-software/estilos-arquitecturales-en-el-diseno-de-un-sistema/).
- Actualizar librerías y código a nuevas versiones disponibles de las tecnologías utilizadas.
- Seguir los [principios básicos y metódicos](/arquitectura-de-software/principios-a-seguir-en-el-diseno-de-un-sistema/).
- Optimización del rendimiento/performance.

   
### Realizar tareas de refactoring progresivamente ante:
  
- **Nuevas funcionalidades:** A la hora de añadir nuevos [requerimientos](/arquitectura-de-software/el-diseno-de-la-arquitectura-de-un-sistema/) a un determinado módulo/apartado del proyecto. El desarrollo sobre un código no óptimo y mal implementado supone seguir empeorando la calidad interna del código provocando que la tarea de refactoring futura sea más costosa, entrando en una dinámica y metodología, que poco a poco, decrementará el rendimiento general de la aplicación, los tiempos de desarrollo y la estructuración/organización de éste. En la medida de lo posible, según el tiempo asignado, se debería realizar un pequeño refactoring sobre el código donde se van a desarrollar las nuevas funcionalidades.
- **Incidencias repetitivas sobre un determinado apartado:** Si se detecta código inestable, vulnerable (seguridad) y poco óptimo, mediante controles de testeo. Provocando incidencias demasiado contínuas sobre el mismo apartado a lo largo del tiempo, se recomienda refactorizarlo.
- **Lentitud en la carga y altos consumos de CPU**.   
      
> Realizando progresivamente tareas de refactoring y respetando una cierta metodología que tengan en cuenta la correcta calidad del código a lo largo del tiempo y desarrollos, nunca se debería llegar a este punto.
> En caso contrario, se deben encontrar soluciones óptimas de refactoring que mejoren el rendimiento mediante un análisis exhaustivo.

- **Actualización de versión:** Contínuamente se deben revisar las nuevas funcionalidades y soportes sobre las tecnologías que estemos utilizando. Normalmente las nuevas versiones mejoran muchísimos aspectos y debemos adaptar y refactorizar el código para exprimir dichas mejoras evolucionando así el conococimiento con la evolución tecnológica. Las tareas de I+D e innovación nos orientará sobre qué aspectos se mejoran en las nuevas versiones. No sólo en el código, sinó también para la facilidad de implementarlo mejor y más rápidamente (herramientas de desarrollo).

### Ventajas de refactorizar:
  
- Código óptimo, mantenible y más claro. Agilizando el desarrollo sobre él.
- Código encapsulado y disponible para la reutilización. Evitando desarrollar la misma funcionalidad más de una vez.
- Un correcto rendimiento de la aplicación.
- Menos bugs/incidencias y vulnerabilidades (seguridad).
- Reducción de costes.

El 90% de las ocasiones se recomienda analizar y refactorizar utilizando lo máximo posible del código ya implementado. 
Ya que el coste de tiempo es menor que implementando de nuevo. 

Excepcionalmente, si la calidad de código es compleja, pésima y obsoleta valorando que el coste de tiempo para el refactoring es excesivo, se recomienda implementarlo de nuevo. Como siempre, todo depende del coste de tiempo disponible asignado para la tarea. 

