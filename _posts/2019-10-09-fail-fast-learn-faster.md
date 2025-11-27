---
id: 1820
title: 'Fail fast, fail cheap, fail well: learn faster'
date: '2019-10-09T19:55:03+00:00'
layout: post
permalink: /fail-fast-learn-faster/
categories:
  - Engineering Culture
tags:
  - fail-fast
  - agile
  - agile-principles
  - lean
  - learning-mindset
  - error-handling
  - rollback-strategy
---

[Program defensively](https://es.wikipedia.org/wiki/Programaci%C3%B3n_defensiva), strictly and rigorously. Return exceptions whenever the conditions are not adequate at a specific moment of execution.

One of the practices that will help you and that I assume you already know, are [guard clauses](https://refactoring.com/catalog/replaceNestedConditionalWithGuardClauses.html). Forget about *else* in conditionals (they will make your code simpler and more readable).

<br><center><img src="/wp-content/uploads/2019/10/image-2.png"  width="400"/></center><br>

The more permissive you are in your developments, the greater the corrective actions you will have to take later and the more difficult it will be to detect the *root cause* of the bugs and inconsistencies that it generates.

Make sure you have a good **error control strategy**: show the user *friendly errors* and record all the technical information possible to reach them as quickly as possible and understand how you are interacting with the *system*, acting accordingly to avoid or reduce them.

**Lean Startup Model**

If you haven't read the book, I'll summarize it [here](/the-lean-startup/).

Learn quickly from your mistakes. Through a small and cheap *MVP*, measure the results and confirm the hypotheses of your initial idea through experimentation such as *A/B Testing*. ***Pivot or persevere*** in each case.
Extrapolate it to all areas. In the technical field, avoid [BDUF ](https://en.m.wikipedia.org/wiki/Big_Design_Up_Front) or [BMUF](http://agilemodeling.com/essays/bmuf.htm) and [overengineering](https://en.wikipedia.org/wiki/Overengineering).

<br><center><img src="/wp-content/uploads/2019/10/image-1.png"  width="400"/></center><br>

**Fail fast, fail well**

Failure is inevitable and is part of the process of improvement, learning and evolution in a given context. We are human, blaming ourselves for failures would be blaming ourselves for being what we are.

<br><center><img src="/wp-content/uploads/2019/10/image-1024x570.png"  width="400"/></center><br>

So make sure that, in the event of a failure, the **capacity for reaction and learning is as fast as the context allows** (extrapolate it also in any field).
For example, in the one that concerns us: if you find an important failure in the publication of a new version to production: you should have a *rollback* strategy and use practices such as *canary releasing* for a low impact in case of error. Record all possible information for subsequent analysis and learning from everything that happened.

[Kent Beck in his book Extreme Programming Explained](/extreme-programming-values/) explains the importance of courage as one of the values ​​of a team. *Faced with fear: courage!*

#tryagain
