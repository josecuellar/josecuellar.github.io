---
title: 'No Silver Bullet for Technical Debt'
date: '2026-09-25T19:00:00+02:00'
layout: post
permalink: /no-silver-bullet-for-technical-debt/
categories:
  - Situational Awareness Management Model
tags:
  - situational-awareness
  - technical-debt
  - refactoring
  - software-engineering
  - continuous-improvement
  - lean
  - systems-thinking
  - SAMM
---

*Managing Technical Debt means knowing when to pay it, when to take it on, and when to analyze it.*

In the first part of this series, I introduced the **Golden Triangle —People, Process, and Technology—** as one of the foundations of SAMM. In this article, I want to focus on Technology and on something that, in my experience, has a major impact on how teams evolve over time: **Technical Debt management and continuous technical improvement**.

I have always considered this one of the roots we need to take care of. Technology can [**drain a team's motivation or fuel it**](https://leadingdepth.com/the-energy-behind-every-human-system/). It can turn every change into frustration and slowly kill the passion for what we do, but it can also create learning, energy, and the desire to keep improving.

Managing Technical Debt is therefore not only about taking care of software. **It is also about taking care of the people who will continue building it.**

Throughout my career, I have worked with different strategies. In some teams, we incorporated refactoring and technical improvements progressively. In others, we used periods of lower product pressure to slow down delivery and pay accumulated debt.

Both can work. The real question is not which one is better, but **which one makes sense for the situation we are in**.

I like to compare it with maintaining a car. We can perform small maintenance tasks regularly, or we can keep driving and carry out a deeper service when needed. The problem begins when we ignore the signs of wear until they prevent us from moving forward.

Software is similar, with one important difference: **there are still people behind technology —at least for now—**. Even as AI changes how we build software, its quality, complexity, and debt will still affect those who need to understand it, evolve it, or take responsibility for it.

Working for many years with both people and software has taught me to **identify and anticipate the impact of technical decisions on teams, systems, and their evolution over time**.

---

**## Technology, Debt, and Motivation**

When I talk about **Technology** in SAMM, I mean more than technologies, versions, or tools. For me, one of its foundations is **how we manage Technical Debt and continuous improvement according to the situation of the system**.

Code that is difficult to change, fragile tests, oversized architectures, or obsolete technologies can progressively drain motivation. On the other hand, improving a system, removing friction, and facing the right technical challenges can bring back learning, energy, and passion for what we build.

From this relationship between **Situation, Technology, and People** comes a new concept within SAMM.

---

**## Situational Technical Debt Behavior**

Technical Debt has always been part of the [**Situational Map**](https://leadingdepth.com/the-situational-map/), as one of the signals we use to observe the technological state of a system. What we have not explored yet is **how the way we manage it should change depending on the situation**.

I call this **Situational Technical Debt Behavior**: how our behavior towards Technical Debt changes according to the Situation, while also considering the team's **Challenge, Knowledge, and Motivation**.

It is not intended to define an acceptable amount of debt. Instead, it helps us recognize three different moments:

> **Pay Debt Moment → Ask for Debt Moment → Analyze Debt Moment**

---

<br><center><img src="/wp-content/uploads/samm-situational-technical-debt-behavior.jpg" width="700"/></center><br>

---

**## Pay Debt Moment**

During **Cruising Speed**, we have good conditions to invest in technology: refactoring, improving tests, updating dependencies, sharing knowledge, or evolving architecture and infrastructure.

During **Fluctuation**, incidents, quality issues, or increasing development effort may indicate that we are starting to pay too much interest on accumulated debt. During **Indirection**, we may also discover that technical decisions that worked in the past no longer support the direction of the product.

These are situations where a **Pay Debt Moment** can emerge: not to pursue technical perfection, but to reduce what is starting to limit our ability to evolve.

This connects with something I wrote about back in 2010 in [When and Why to Perform Refactoring Tasks](https://leadingdepth.com/when-why-perform-refactoring-tasks/): **the cost of change increases when we accumulate debt and continuously postpone refactoring**.

Whenever possible, I prefer some of this work to evolve alongside product development, especially before continuing to build on an area we already know has problems.

**## Ask for Debt Moment**

With **Pressure**, the scenario changes.

A critical delivery, an incident, or a product need may make reaching the immediate goal more valuable than building the technically ideal solution at that moment.

We can consciously accept a shortcut, postpone a refactoring, or introduce some complexity if we understand why we are doing it and what we are getting in return.

This is the **Ask for Debt Moment**.

> **Pressure may justify taking on debt. It should not justify losing awareness of it.**

The state of the team also matters. Motivation, Knowledge, and Challenge influence how much temporary strain we can absorb.

The problem is not necessarily going through a period of Pressure. It begins when **Pressure stops being temporary** and continuously consumes both technical capacity and people's motivation.

---

**## Analyze Debt Moment**

After Pressure comes **Stabilization**. This is the moment to review what we have left behind: shortcuts, complexity, architectural decisions, or security, performance, and scalability concerns. But also what we have learned and how all of this has affected people.

This is the **Analyze Debt Moment**.

Over the years, I have learned that analyzing debt is not only about deciding what we should refactor. It is also about asking **what we can simplify or remove**.

In *No Silver Bullet*, Fred Brooks distinguished between **essential complexity**, inherent to the problem we are trying to solve, and **accidental complexity**, introduced around the way we build the solution. I find this distinction particularly useful when analyzing Technical Debt: **we cannot remove all complexity, but we can question the complexity we have introduced ourselves and that no longer provides enough value**.

This is also where I connect **Pareto and Lean**: identify where the real value is and remove *muda*, overengineering, unnecessary components, dependencies, or abstractions. For me, one of the best technical challenges is precisely this: **solving the same problem more simply, using fewer resources and reducing costs**.

The same principle applies to the product.

Being **Data Driven** should not only help us decide which new feature to add. Data can also show us which features concentrate most of the usage, value, or revenue, and which ones we continue maintaining without a real need.

Removing a feature can also remove code, infrastructure, tests, maintenance, support, and cognitive load.

> **Data should not only help us decide what to build. It should also help us decide what we can remove.**

Sometimes, the best way to reduce Technical Debt **is not to refactor more, but to need less**.

---

**## Not All Technical Debt Is the Same**

Besides knowing when to intervene, we need to understand **what kind of debt we are dealing with**.

Martin Fowler's **Technical Debt Quadrant** distinguishes between two dimensions:

**Deliberate ↔ Inadvertent**

**Prudent ↔ Reckless**

---

<br><center><img src="/wp-content/uploads/technical-debt-quadrant.jpg" width="700"/></center><br>

---

We may consciously accept an imperfect solution because we need to achieve a goal and understand its consequences: **Deliberate / Prudent**. We may also take shortcuts without properly considering their consequences: **Deliberate / Reckless**.

But some debt appears simply because we learn. A solution that once seemed right may stop being right as the product evolves and our understanding of the problem improves.

> **Sometimes Technical Debt does not mean we made a bad decision. It means we learned.**

Fowler helps us understand **the nature of the debt**. SAMM adds **the situation in which it appears and the moment in which we may need to intervene**.

---

**## Technical Debt Across SAMM Situations**

We can now bring both perspectives together: **the nature of the debt and the situation of the system**.

---

<br><center><img src="/wp-content/uploads/samm-situation-technical-debt-matrix.jpg" width="700"/></center><br>

---

The matrix does not mean that a situation automatically produces a particular kind of debt. **Pressure does not necessarily mean Reckless Debt**, just as Cruising Speed does not guarantee prudent technical decisions.

Its purpose is to help us observe which behaviors may emerge and which kind of intervention may make more sense.

The situation changes our relationship with debt: we may be in a moment to **pay it, consciously take it on, or analyze it**. And that decision should also consider the people who will have to live with its consequences.

---

**## Managing Debt According to the Situation**

After working with different strategies over the years, I do not believe there is a single correct way to manage Technical Debt.

Continuous refactoring works. Dedicated periods for paying debt can also work. And consciously taking on debt during Pressure can be perfectly reasonable.

The key is **knowing when each strategy makes sense**.

Going back to the car: sometimes we maintain it while we keep driving; sometimes we need to finish the journey before going to the workshop. And after a demanding journey, it may be time to inspect what has worn out before setting off again.

This is what I try to capture with **Situational Technical Debt Behavior**:

> **Pay Debt → Ask for Debt → Analyze Debt**

The goal is not to eliminate Technical Debt, but to **keep it visible, understand its cost, and manage it according to the situation**, without forgetting the people who will have to live with it.

There is no Silver Bullet for Technical Debt.

**There is awareness, context, and the right intervention for the situation.**