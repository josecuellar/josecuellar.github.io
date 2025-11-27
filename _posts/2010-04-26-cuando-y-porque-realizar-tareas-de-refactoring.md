---
id: 204
title: 'When and why to perform refactoring tasks'
date: '2010-04-26T00:16:40+00:00'
layout: post
permalink: /when-why-perform-refactoring-tasks/
categories:
  - Engineering Culture
tags:
  - project-health
  - team-culture
  - continuous-improvement
  - technical-debt
  - refactoring
  - software-quality
  - time-management
  - software-complexity
---

[Refactoring](http://es.wikipedia.org/wiki/Refactorizaci%C3%B3n) is a software engineering technique to restructure source code, altering its internal structure without changing its external behavior.

In code maintenance, it is one of the most common tasks to improve adaptation, continuous change, new functionalities, and performance improvements of certain components.

The advantages with respect to software quality and refactoring tasks **are presented over time in each phase of the project**:

<br><center><img src="/wp-content/uploads/refactoring/refactoring.png"  width="700"/></center><br>

The cost of change increases exponentially based on ignoring them and the periodicity of refactoring tasks (mainly in the management of technical debt) while we develop the product.
- Not taking into account technical debt and without applying refactorings.
- Progressively periodically at the same time that we build the product.
- Specific annual period.

> As you can see in the graph, the recommended and logical technical debt management is the continuous application of refactorings.
> The team, through certain iterative sessions, will emerge the technical debt to progressively include the related refactoring tasks in the deliveries.

### Generic tasks in refactoring:

- Clean up dead code (code that is never executed).
- Eliminate duplicate functionalities.
- Encapsulate functionalities benefiting code reuse.
- Reorganize and restructure entities/functionalities adapting them to the new [requirements](/arquitectura-de-software/el-diseno-de-la-arquitectura-de-un-sistema/) and [architectural designs](/arquitectura-de-software/estilos-arquitecturales-en-el-diseno-de-un-sistema/).
- Update libraries and code to new available versions of the technologies used.
- Follow the [basic and methodical principles](/principles-of-software-development/).
- Performance optimization.

### Perform refactoring tasks progressively before:

- **New functionalities:** When adding new [requirements](/arquitectura-de-software/el-diseno-de-la-arquitectura-de-un-sistema/) to a specific module/section of the project. Developing on non-optimal and poorly implemented code means continuing to worsen the internal quality of the code, causing the future refactoring task to be more expensive, entering a dynamic and methodology that, little by little, will decrease the overall performance of the application, development times, and its structuring/organization. As far as possible, depending on the time allocated, a small refactoring should be performed on the code where the new functionalities are going to be developed.
- **Repetitive incidents on a specific section:** If unstable, vulnerable (security) and non-optimal code is detected, through testing controls. Causing too continuous incidents on the same section over time, it is recommended to refactor it.
- **Slowness in loading and high CPU consumption**.

> By progressively performing refactoring tasks and respecting a certain methodology that takes into account the correct quality of the code over time and developments, this point should never be reached.
> Otherwise, optimal refactoring solutions must be found to improve performance through an exhaustive analysis.

- **Version update:** The new functionalities and supports on the technologies we are using must be continuously reviewed. Normally, the new versions improve many aspects and we must adapt and refactor the code to squeeze these improvements, thus evolving knowledge with technological evolution. R&D and innovation tasks will guide us on what aspects are improved in the new versions. Not only in the code, but also for the ease of implementing it better and faster (development tools).

### Advantages of refactoring:

- Optimal, maintainable and clearer code. Streamlining development on it.
- Encapsulated code available for reuse. Avoiding developing the same functionality more than once.
- A correct performance of the application.
- Fewer bugs/incidents and vulnerabilities (security).
- Cost reduction.

In 90% of the occasions, it is recommended to analyze and refactor using as much as possible of the code already implemented.
Since the time cost is less than implementing it again.

Exceptionally, if the code quality is complex and obsolete, assessing that the time cost for refactoring is excessive, it is recommended to implement it again. As always, everything depends on the time cost available assigned to the task.
