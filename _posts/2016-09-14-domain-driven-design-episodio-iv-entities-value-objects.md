---
id: 1230
title: 'Domain-Driven Design. Entities & Value Objects'
date: '2016-09-14T20:56:34+00:00'
author: Jose
layout: post
permalink: /domain-driven-design-episodio-iv-entities-value-objects/
categories:
    - General
tags:
    - Arquitectura
    - DDD
---

Elementos más importantes para el modelado de dominio dentro del apartado táctico en el desarrollo orientado a DDD.

## Entities

Definimos entidad como un concepto/objeto de dominio **único** (dispone de un identificador asociado). 
Los identificadores son únicos e inmutables, por ese motivo es aconsejable almacenar el identificador en un [Value Object](http://martinfowler.com/bliki/ValueObject.html). 

Comúnmente la tendencia de modelado de entidades refleja la estructura de datos, existiendo herramientas como los [ORM](https://es.wikipedia.org/wiki/Mapeo_objeto-relacional) generando un modelo de dominio totalmente mapeado a la estructura de datos mediante [CRUD](https://es.wikipedia.org/wiki/CRUD). Este método es muy útil para sencillas aplicaciones o sistemas con evolución limitada o nula. 
En cambio, no aconsejable para aquellas aplicaciones o sistemas que requieran una evolución y aumento progresivo en su complejidad. Siendo más aconsejable un modelado desacoplado a la estructura de datos, siendo más fiel a la lógica de dominio de la organización mediante *lenguaje obicuo*. 

### Identity Generation

**Las dos estrategias más comunes que nos permiten crear identificadores son:**
- Mediante patrones de creación de identidad como [globally unique identifier (GUID)](https://es.wikipedia.org/wiki/Identificador_%C3%BAnico_global) o [universally unique identifier (UUID)](https://es.wikipedia.org/wiki/Identificador_%C3%BAnico_universal).
- La base de datos o sistema de persistencia genera la identidad única por secuencia o auto incrementando el valor. Aunque necesitamos previamente crear el registro para disponer del nuevo identificador: algo que puede ser un impedimento en según qué situaciones, donde debamos disponer del identificador antes de persistir la entidad.

Es recomendable utilizar información específica de la instancia de entidad como parte del identificador, aportándonos información valiosa en cualquier contexto (por ejemplo, la fecha de creación). 

### Construction

Los constructores deben ser los mínimos obligatorios y necesarios para instanciar correctamente la entidad. El parámetro siempre necesario de inicialización de instancia deberá ser el *Value Object* identificador de la nueva instancia. 
Las asignaciones o *setters* de los atributos de entidad deben estar ocultos, encapsulando las funcionalidades en métodos que nos permitirán validar los parámetros entrantes asegurando la correcta *hidratación* de la instancia. Para elaboraciones más exhaustivas de instancia de entidad utilizaremos los **Factory** methods encapsulando en ellos las lógicas de construcción de instancia. 

### Surrogate Identity

Algunos [ORM](https://es.wikipedia.org/wiki/Mapeo_objeto-relacional) como [Hibernate](http://hibernate.org/orm/) necesitan disponer de un identificador mediante un tipo nativo de base de datos, generando un conflicto si queremos utilizar un Value Object. *Para solucionar y compatibilizar el conflicto debemos crear ambos*. 
La identidad *Value Object* se ajustará a los requerimientos del dominio y la otra al ORM conociéndose como *Surrogate Identity*. 

Dado que dicho Surrogate Identity no forma parte del modelo de dominio, lo ocultaremos mediante *private* o [Layer Supertype](http://martinfowler.com/eaaCatalog/layerSupertype.html) (creando una clase abstracta que oculte el identificador mediante *protected*). 

### Validation

Siguiendo el principio de single responsability, una entidad no debe ser responsable de realizar internamente sus validaciones aconsejando considerar la extracción de las funcionalidades o responsabilidades de validación. 

- **Attributes/Properties Validation**: Estableciendo y encapsulando en los métodos de asignación de propiedades las precondiciones necesarias para su correcta inicialización. 
- **Whole Objects Validation**: Que los valores de todas las propiedades sean correctos, no significa que la composición de todos ellos generen una entidad válida. Para ello utilizaremos patrones como [Specification pattern](https://en.wikipedia.org/wiki/Specification_pattern). Siendo recomendable validar la entidad completa lo más tarde posible (**Deferred Validation**). 
- **Object Compositions Validations**: Si la validación de una entidad depende de otras instancias de otras entidades o agregados, se aconseja el uso de *Domain Services* para encapsular la lógica de validación pudiendo recuperar dichas entidades dependientes mediante Repositorios. De igual modo se aconseja *Deferred Validation* . 

## Value Objects

Elemento vital en el modelado de dominio orientado a DDD. Concepto del modelo de dominio que **no dispone de un identificador**, sino que el propio elemento **se identifica por el valor de sus atributos**. Utilizados para **describir, medir o cuantificar conceptos del dominio**. 
Añadiendo información y describiendo la entidad a la que pertenece. En similitud y comparándolo con una base de datos relacional, serían las tablas relacionadas mediante *Foreign Key*. 

Los *Value Objects* son inmutables, sus instancias son atómicas, no se modifican, se reemplazan generando instancias nuevas, evitando así el riesgo de modificación de la misma instancia compartida en diferentes contextos y escenarios con alta concurrencia ([Side-effect free behavior](https://en.wikipedia.org/wiki/Side_effect_(computer_science))). 

Para asegurar dicha inmutabilidad y atomicidad, ocultaremos sus atributos utilizando métodos de asignación por cada propiedad. Cada *Value Object* contendrá un constructor mínimo primario, recibiendo los parámetros mínimos necesarios para realizar la instancia mediante dichos métodos de asignación. 
Algunas estrategias de gestión de nuevas instancias en memoria de *Value Objects* incluyen la clonación del objeto en una nueva instancia realizando posteriormente la modificación del atributo que solicita. 

Para determinad la igualdad de instancias independientes en memoria de *Value Objects* se comprobarán todos los valores de las propiedades de ambas instancias: si todos los valores de todos sus atributos son coincidentes. 

**Lecturas recomendadas:**
- [Domain-Driven Design: Entities and Value Objects Webcast at @AtrapaloEng (Spanish)](https://carlosbuenosvinos.com/domain-driven-design-entities-and-value-objects-webcast-at-atrapaloeng-spanish/)
- [Aggregates, Entities and Value Objects in Domain-Driven Design](https://www.infoq.com/news/2015/01/aggregates-value-objects-ddd)