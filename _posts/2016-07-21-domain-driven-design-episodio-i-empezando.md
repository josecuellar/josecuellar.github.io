---
id: 1122
title: 'Implementing Domain-Driven Design | Vaughn Vernon'
date: '2016-07-21T22:26:20+00:00'
layout: post
permalink: /implementing-domain-driven-design-book-vaughn-vernon/
categories:
  - Deep Engineering
tags:
  - DDD
  - system-design
  - domain-model
  - ubiquitous-language
  - design-patterns
  - software-architecture
  - context-mapping
  - bounded-contexts
  - strategic-design
  - tactical-design
  - teams-alignment
  - book-reviews
  - lifelong-learning
---

I am immersed in reading "*Implementing Domain-Driven Design*" by Vaughn Vernon. I've read a few chapters and have decided, as a way of tracking and learning, to start writing a series of posts to share with the community some reviews of what I think is interesting.

<br><center><img src="/wp-content/uploads/ddd.jpg"  width="300"/></center><br>
> Design is not just what it looks like and feels like. Design is how it works. Steve Jobs

DDD was coined and introduced by **Eric Evans** in his publication of "Domain-Driven Design - Tackling Complexity in the Heart of Software" in 2003.

It is a set of **practices, techniques, tools and approaches to respond to complex needs** in software development, oriented to the core of the business, its evolution and its objectives. The important need to understand the business and its complexity with **intense and direct communication with domain experts** through a single common type of language called **ubiquitous language**.

Thus fostering a quality code focused on specific solutions to well-understood business problems and reflected in the behavior of the software we generate.

DDD is divided into two large groups in which each has guidelines to follow for good performance: **strategic and tactical**.

In the book he uses the metaphor of climbing to define both groupings: before climbing a mountain, analyze it, think about which ascent path is the safest and correct (strategic), subsequently executing the necessary techniques to reach the top (tactical) successfully.

The top belongs to the tactical concepts and the bottom to the strategic ones:

<br><center><img src="/wp-content/uploads/ddd.PNG"  width="750"/></center><br>

**The strategic part is the vital initial part for the good performance of DDD**.

Both groups are closely linked and the success of the tactical part depends directly on the strategic one, if this is incorrect, so will the tactical execution despite following good practices.

> Never use DDD to complicate your solution, but to simplify it.

## First strategic steps

Define the common language that everyone involved in the project will use, both domain experts and developers: **thus establishing the ubiquitous language that everyone should use to encode or discuss business rules**.
Through this intense and evolutionary communication with the **domain experts**, complexity will be strategically divided into areas or scopes that provide value independently.

Dividing into the following types: **domain, subdomain and bounded context**.

<br><center><img src="/wp-content/uploads/boundedcontext.PNG"  width="400"/></center><br>

Disaggregating adequately will give us a broader and simpler vision in each area or bounded context. Thus focusing on a correct and better domain modeling (Entities, Value Objects, Aggregates, Domain Events) reducing the overall complexity of the main domain.
Separating concepts and encapsulating responsibilities. Thus improving communication and understanding of the objectives and business evolution in each group. **Favoring different behaviors for the same entity depending on the bounded context to which they belong.**
Relating to each other through **context mappings**.

I have created a public repository on GitHub where I am reflecting the main aspects and best practices through DDD using onion architecture.
You can access it [here](https://github.com/josecuellar/ddd-onion-architecture-net).

I also leave you the link to the **GitHub** profile of **Vaughn Vernon** [here](https://github.com/VaughnVernon).
