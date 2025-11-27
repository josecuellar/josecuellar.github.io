---
id: 788
title: 'Making software architecture more agile'
date: '2015-10-23T20:49:33+00:00'
layout: post
permalink: /making-software-architecture-agile/
categories:
  - Engineering Culture
tags:
  - agile
  - agile-principles
  - waterfall
  - software-architecture
  - system-design
  - lifelong-learning
  - lean
  - scrum
  - continuous-improvement
---

For many years, I have designed and developed architectures using [traditional methodologies](https://es.wikipedia.org/wiki/Desarrollo_en_cascada), in which exhaustive initial analysis was paramount and necessary.
The resulting global architecture was very specific to the initial product requirements, without taking into account all the future changes that could appear over time, thus generating a rigid architecture and increasing resistance to any future changes.
Considering that the larger the product to be developed without prior validation by the consumer or client, the greater the probability that there will be changes.
Adding to this the problems in dependencies, communication, collaboration and coordination between responsible roles in the process by progressive temporal phases.

<br><center><img src="/wp-content/uploads/waterfall.png"  width="700"/></center><br>

As soon as I had the opportunity to learn about and discover the agile world, lean method and kaizen a few years ago, I became a defender of its principles, as they were the solutions to so many problems I experienced in more than eleven years working in traditional methodologies.

Change no longer represented a problem, but an opportunity to continue growing and learning.

<br><center><img src="/wp-content/uploads/agile.png"  width="700"/></center><br>

Essentially, and from a product point of view, we must establish the [minimum viable product (MVP)](https://es.wikipedia.org/wiki/Producto_viable_m%C3%ADnimo), which allows us to experiment iteratively through split testing and enter the Create-Measure-Learn circuit as quickly as possible, to know whether to pivot the strategy or persevere in it.

All this in small increments of product through sprints or iterations with close collaboration with business and the end customer.
Avoiding as much as possible the waste of time and resources.

Thus following the [Lean Startup](/the-lean-startup/) method and adapting to the agile project methodology.

<br><center><img src="/wp-content/uploads/leanstartup.png"  width="500"/></center><br>

With respect to architecture, this type of product development method is vital to foster [emergent architectures](https://es.wikipedia.org/wiki/Arquitectura_emergente) in the team through [minimal viable architecture (MVA)](http://www.kavistechnology.com/blog/minimal-viable-architecture/) .
Keeping in mind the [YAGNI (You Ain't Gonna Need It)](https://es.wikipedia.org/wiki/YAGNI) principle. Thus making any kind of change of direction or unforeseen event much simpler and more flexible.

<br><center><img src="/wp-content/uploads/mva.png"  width="500"/></center><br>

> The vision of architecture in agile methodologies changes: the figure of the traditional software architect as such no longer exists in a Scrum team. Since the architecture emerges progressively based on the iterations of the team itself.
> However, as [Charlie Alfred](https://charliealfred.wordpress.com) comments, in his post [SCRUM and Architecture – Partners or Adversaries?](https://charliealfred.wordpress.com/scrum-and-architecture-partners-or-adversaries/)**: "architecture is the oil and filter that properly lubricates Scrum"**.

It is essential to pay progressive attention to the growth of the architecture over time. Ensuring that the principles of quality/performance/reuse are met and avoiding the possible complexity that could arise to reduce the possibility of generating technical debt or incidents, planning/executing [periodic refactoring](/when-why-perform-refactoring-tasks/).

The most experienced profiles in architecture should guide, advise, warn and advise on possible unforeseen events, observing the growth/complexity of the architecture, taking into account all their experience.
Just as the most specialized profiles in search engine optimization (SEO) will guide us in the development following the correct strategy and other profiles with other skills in the construction of the product, through techniques such as [pair programming](https://es.wikipedia.org/wiki/Programaci%C3%B3n_en_pareja) or [mob programming](https://en.wikipedia.org/wiki/Mob_programming). Thus promoting team learning.

> In the world of knowledge, as Einstein said: **"we are all ignorant, it's just that we are not all ignorant of the same things"**.

The difficulty then for a correct Scrum engagement lies in disaggregating:
What is my MVP? What MVA do we apply?

> We are often carried away by the thought that something minimal is little. But you don't have to think in quantities, but in the value we are contributing, both at the product and technical level.

**Recommended reading**:

[Architecture Abstract](http://www.scaledagileframework.com/agile-architecture/)