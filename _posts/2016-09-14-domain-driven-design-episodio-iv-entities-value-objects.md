---
id: 1230
title: 'Domain-Driven Design. Entities & Value Objects'
date: '2016-09-14T20:56:34+00:00'
layout: post
permalink: /domain-driven-design-entities-value-objects/
categories:
  - Deep Engineering
tags:
  - DDD
  - domain-model
  - system-design
  - design-patterns
  - software-architecture
  - clean-architecture
  - entities
  - value-objects
  - identity-generation
  - tactical-design
---

Most important elements for domain modeling within the tactical section in DDD-oriented development.

## Entities

We define an entity as a **unique** domain concept/object (it has an associated identifier).
Identifiers are unique and immutable, for that reason it is advisable to store the identifier in a [Value Object](http://martinfowler.com/bliki/ValueObject.html).

Commonly, the trend of modeling entities reflects the data structure, with tools such as [ORM](https://es.wikipedia.org/wiki/Mapeo_objeto-relacional) generating a domain model fully mapped to the data structure through [CRUD](https://es.wikipedia.org/wiki/CRUD). This method is very useful for simple applications or systems with limited or no evolution.
On the other hand, it is not advisable for those applications or systems that require a progressive evolution and increase in their complexity. Being more advisable a modeling decoupled to the data structure, being more faithful to the domain logic of the organization through *ubiquitous language*.

### Identity Generation

**The two most common strategies that allow us to create identifiers are:**
- Through identity creation patterns such as [globally unique identifier (GUID)](https://es.wikipedia.org/wiki/Identificador_%C3%BAnico_global) or [universally unique identifier (UUID)](https://es.wikipedia.org/wiki/Identificador_%C3%BAnico_universal).
- The database or persistence system generates the unique identity by sequence or auto-incrementing the value. Although we need to previously create the record to have the new identifier: something that can be an impediment in certain situations, where we must have the identifier before persisting the entity.

It is recommended to use specific information from the entity instance as part of the identifier, providing valuable information in any context (for example, the creation date).

### Construction

The constructors must be the minimum mandatory and necessary to correctly instantiate the entity. The always necessary parameter for instance initialization should be the identifier *Value Object* of the new instance.
The assignments or *setters* of the entity attributes must be hidden, encapsulating the functionalities in methods that will allow us to validate the incoming parameters ensuring the correct *hydration* of the instance. For more exhaustive elaborations of entity instance we will use the **Factory** methods encapsulating in them the instance construction logics.

### Surrogate Identity

Some [ORM](https://es.wikipedia.org/wiki/Mapeo_objeto-relacional) such as [Hibernate](http://hibernate.org/orm/) need to have an identifier through a native database type, generating a conflict if we want to use a Value Object. *To solve and make the conflict compatible we must create both*.
The *Value Object* identity will conform to the domain requirements and the other to the ORM, known as *Surrogate Identity*.

Since said Surrogate Identity is not part of the domain model, we will hide it through *private* or [Layer Supertype](http://martinfowler.com/eaaCatalog/layerSupertype.html) (creating an abstract class that hides the identifier through *protected*).

### Validation

Following the principle of single responsibility, an entity should not be responsible for performing its validations internally, advising to consider the extraction of the validation functionalities or responsibilities.

- **Attributes/Properties Validation**: Establishing and encapsulating in the property assignment methods the necessary preconditions for its correct initialization.
- **Whole Objects Validation**: That the values of all properties are correct, does not mean that the composition of all of them generate a valid entity. For this we will use patterns such as [Specification pattern](https://en.wikipedia.org/wiki/Specification_pattern). Being advisable to validate the complete entity as late as possible (**Deferred Validation**).
- **Object Compositions Validations**: If the validation of an entity depends on other instances of other entities or aggregates, the use of *Domain Services* is advised to encapsulate the validation logic being able to retrieve said dependent entities through Repositories. Similarly, *Deferred Validation* is advised.

## Value Objects

Vital element in domain modeling oriented to DDD. Concept of the domain model that **does not have an identifier**, but the element itself **is identified by the value of its attributes**. Used to **describe, measure or quantify domain concepts**.
Adding information and describing the entity to which it belongs. In similarity and comparing it with a relational database, they would be the tables related through *Foreign Key*.

*Value Objects* are immutable, their instances are atomic, they are not modified, they are replaced generating new instances, thus avoiding the risk of modification of the same instance shared in different contexts and scenarios with high concurrency ([Side-effect free behavior](https://en.wikipedia.org/wiki/Side_effect_(computer_science))).

To ensure said immutability and atomicity, we will hide its attributes using assignment methods for each property. Each *Value Object* will contain a minimum primary constructor, receiving the minimum parameters necessary to perform the instance through said assignment methods.
Some strategies for managing new instances in memory of *Value Objects* include cloning the object in a new instance and then modifying the attribute that requests it.

To determine the equality of independent instances in memory of *Value Objects*, all the values of the properties of both instances will be checked: if all the values of all its attributes are coincident.

**Recommended readings:**

- [Domain-Driven Design: Entities and Value Objects Webcast at @AtrapaloEng (Spanish)](https://carlosbuenosvinos.com/domain-driven-design-entities-and-value-objects-webcast-at-atrapaloeng-spanish/)
- [Aggregates, Entities and Value Objects in Domain-Driven Design](https://www.infoq.com/news/2015/01/aggregates-value-objects-ddd)