---
id: 118
title: 'Principles of Software Development'
date: '2010-04-07T11:11:30+00:00'
layout: post
permalink: /principles-of-software-development/
categories:
  - Deep Engineering
tags:
  - design-principles
  - solid
  - system-design
  - design-patterns
  - software-architecture
  - clean-architecture
  - technical-debt
  - refactoring
  - software-quality
  - software-complexity
---

When designing and developing software, it is important to keep in mind a series of **fundamental and basic design principles** that every programmer should know and apply to develop clean, quality code.

#### SOLID Principles

- [**Single Responsibility Principle**](http://en.wikipedia.org/wiki/Single_responsibility_principle) *(**S**ingle Responsability Principle)*. A class should have a single responsibility or functionality.

- [**Open/Closed Principle**](http://en.wikipedia.org/wiki/Open/closed_principle) *(**O**pen Close Principle)*. Classes should be extensible without requiring modification to the internal implementation of their methods.

- [**Liskov Substitution Principle**](http://en.wikipedia.org/wiki/Liskov_substitution_principle) *(**L**iskov Substitution principie)*. Subtypes or child classes must be substitutable for their own related base types (base classes). Generating extensibility in the system components for each specific functionality.

- [**Interface Segregation Principle**](http://en.wikipedia.org/wiki/Interface_segregation_principle) *(**I**nterface Segregation Principle)*. Many highly specialized interfaces are preferable to a general interface in which all interfaces are grouped. Consumer-specific interfaces.
- [**Dependency Inversion Principle**](http://en.wikipedia.org/wiki/Dependency_inversion_principle) *(**D**ependency Inversion Principle)*. Direct dependencies between classes should be replaced by abstractions (interfaces, inheritance) to allow top-down designs without first requiring the design of the lower levels. Abstractions should not depend on details, details should depend on abstractions.

#### [**High Cohesion**](http://en.wikipedia.org/wiki/Cohesion_(computer_science))
The design of components should be highly cohesive: Do not overload components by adding mixed or unrelated functionality. Related to the *Single Responsability Priniciple*.

#### [**Low Coupling**](http://en.wikipedia.org/wiki/Coupling_(computer_science))
Low coupling. Minimize the relationships and interconnections between components, minimizing the dependence between them.

#### [**Separation of Concerns**](http://en.wikipedia.org/wiki/Separation_of_concerns)
Minimize connection points between concepts to achieve high cohesion and low coupling.

#### [**DRY - DIE Principle** (**D**on't **R**epeat **Y**ourself - **D**uplication **I**s **E**vil)](http://en.wikipedia.org/wiki/Don't_repeat_yourself)
Avoid duplication through reuse. Functionality should be specified/implemented in a single place in the system (component, module, or class). The same functionality should not be implemented in other components.

#### [**YAGNI Principle** (**Y**ou **A**in´t **G**onna **N**eed **I**t)](http://en.wikipedia.org/wiki/You_ain't_gonna_need_it)
Design only what is necessary to meet current requirements, avoiding unnecessary *over-engineering*.

#### [**KISS Principle** (**K**eep **I**t **S**imple and **S**tupid)](http://en.wikipedia.org/wiki/KISS_principle)
Simplicity should be a key objective in design and unnecessary complexity should be avoided.

#### The Boy Scout Rule
“Always leave the campground cleaner than you found it.” If you find a mess on the trail, you clean it up no matter who might have made the mess. You intentionally improve the environment for the next group of campers. Actually, the original form of the rule, written by Robert Stephenson Smyth Baden-Powell, the father of Scouting, was “Try and leave this world a little better than you found it”.

#### The Hollywood Principle
Based on the typical response given to actors who audition for a movie: "Don't call us, we'll call you." This principle is related to the SOLID dependency inversion principle. An example of the Hollywood principle is inversion of control (IoC), which causes a class to obtain references to objects it needs to function, through an external entity.
