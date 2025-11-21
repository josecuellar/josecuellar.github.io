---
id: 2096
title: 'Cuando y porqué realizar tareas de Refactoring.'
date: '2025-11-21T22:26:32+00:00'
author: Jose
layout: revision
guid: 'https://josecuellar.net/?p=2096'
permalink: '/?p=2096'
---

La [refactorización](http://es.wikipedia.org/wiki/Refactorizaci%C3%B3n) (del inglés [*refactoring*](/tag/refactoring/)) es una técnica de la ingeniería de software para reestructurar un código fuente, alterando su estructura interna sin cambiar su comportamiento externo. En el mantenimiento de código, una de las tareas más comunes para mejorar la adaptación, el cambio continuo de [requerimientos](/arquitectura-de-software/el-diseno-de-la-arquitectura-de-un-sistema/), nuevas funcionalidades y mejoras en el [rendimiento](/tag/rendimiento/) de determinados apartados.   
  
Las ventajas con respecto a la calidad del software y tareas de [*refactoring*](/tag/refactoring/), **se presentan a lo largo del tiempo en cada fase del proyecto**:   
  
![Refactoring](/wp-content/uploads/refactoring/refactoring.png)  
  
<u>Las tareas genéricas en el [*refactoring*](/tag/refactoring/):</u>

- Limpiar código muerto (código que nunca se ejecuta).
- Eliminar funcionalidades duplicadas.
- Encapsular funcionalidades beneficiando la reutilización de código.
- Reorganizar y reestructurar entidades/funcionalidades adaptándolas a los nuevos [requerimientos](/arquitectura-de-software/el-diseno-de-la-arquitectura-de-un-sistema/) y [diseños arquitecturales](/arquitectura-de-software/estilos-arquitecturales-en-el-diseno-de-un-sistema/).
- Actualizar librerías y código a nuevas versiones disponibles de las tecnologías utilizadas.
- Seguir los [principios básicos y metódicos](/arquitectura-de-software/principios-a-seguir-en-el-diseno-de-un-sistema/).
- [Optimizar](/tag/optimizacion/) el [rendimiento](/tag/rendimiento/).

   
  
<u>Realizar tareas de [*refactoring*](/tag/refactoring/) progresivamente ante:</u>  
  
- **Nuevas funcionalidades:** A la hora de añadir nuevos [requerimientos](/arquitectura-de-software/el-diseno-de-la-arquitectura-de-un-sistema/) a un determinado módulo/apartado del proyecto. El desarrollo sobre un código no óptimo y mal implementado supone seguir empeorando la calidad interna del código provocando que la tarea de [*refactoring*](/tag/refactoring/) futura sea más costosa, entrando en una dinámica y metodología, que poco a poco, decrementará el [rendimiento](/tag/rendimiento/) general de la aplicación, los tiempos de desarrollo y la estructuración/organización de éste. En la medida de lo posible, según el tiempo asignado, se debería realizar un pequeño [*refactoring*](/tag/refactoring/) sobre el código donde se van a desarrollar las nuevas funcionalidades.
- **Incidencias repetitivas sobre un determinado apartado:** Si se detecta código inestable, vulnerable (seguridad) y poco óptimo, mediante controles de testeo o funcionando directamente en producción. Provocando incidencias demasiado contínuas sobre el mismo apartado a lo largo del tiempo, se recomienda refactorizarlo.
- **Lentitud en la carga y altos consumos de CPU**.   
      
    > Realizando progresivamente tareas de [*refactoring*](/tag/refactoring/) y respetando una cierta metodología que tengan en cuenta la correcta calidad del código a lo largo del tiempo y desarrollos, nunca se debería llegar a este punto.
    
       
      
     En caso contrario, se deben encontrar soluciones óptimas de refactoring que mejoren el [rendimiento](/tag/rendimiento/) mediante un análisis exhaustivo.
- **Actualización de versión:** Contínuamente se deben revisar las nuevas funcionalidades y soportes sobre las tecnologías que estemos utilizando. Normalmente las nuevas versiones mejoran muchísimos aspectos y debemos adaptar y refactorizar el código para exprimir dichas mejoras.   
      
     Las tareas de I+D nos orientará sobre qué aspectos se mejoran en las nuevas versiones. No sólo en el código, sinó también para la facilidad de implementarlo mejor y más rápidamente (herramientas de desarrollo).

  
  
<u>Ventajas de refactorizar:</u>  
  
- Código óptimo, mantenible y más claro. Agilizando el desarrollo sobre él.
- Código encapsulado y disponible para la reutilización. Evitando desarrollar la misma funcionalidad más de una vez.
- Un correcto [rendimiento](/tag/rendimiento/) de la aplicación.
- Menos bugs/incidencias y vulnerabilidades (seguridad).
- Reducción de costes.

  
  
El 90% de las ocasiones se recomienda analizar y refactorizar utilizando lo máximo posible del código ya implementado. Ya que el coste de tiempo es menor que implementando de nuevo. Excepcionalmente, si la calidad de código es compleja, pésima y obsoleta valorando que el coste de tiempo para el [*refactoring*](/tag/refactoring/) es excesivo, se recomienda implementarlo de nuevo. Como siempre, todo depende del coste de tiempo disponible asignado para la tarea. 