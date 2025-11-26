---
title: 'Saga Pattern (3/3)'
date: '2020-04-26T21:25:27+00:00'
layout: post
permalink: /saga-pattern-3-3/
categories:
  - Deep Engineering
tags:
  - system-design
  - design-patterns
  - software-architecture
  - clean-architecture
  - microservices
  - distributed-systems
---


*The Saga pattern was proposed by Hector Garcia-Molina and Kenneth Salem in 1987. You can download the paper here: [SAGAS](/wp-content/uploads/2020/04/sagapaper1987.pdf).*

Based on event-driven architectures (**[Event Driven Architecture](/domain-driven-design-architecture/))**, sagas will guarantee data consistency in **business transactions that involve multiple local transactions between multiple services or participants** in a given distributed system.

Mainly **manages a sequence of local transactions** that will complete said business transaction: each local transaction of each service will be executed **based on the result of other participants** or services through the communication of domain events.

Each service should be responsible for performing its **possible compensation transaction (rollback)** of a local transaction already successfully performed in the event of an error, reacting to the so-called **compensation events**.

There are two types of saga management: based on **orchestration** or **choreography**.

<br>
## Choreography

The participants **react autonomously**. Each service participates in the distributed transaction **individually**. Being responsible for managing its own local transaction according to the resulting operation of another participant: continue the saga or execute the **compensation transaction** (*undoing changes already made*) triggering the **compensation events**.
Notifying if the transaction has been carried out correctly or not, publishing the corresponding event.


<br><center><img src="/wp-content/uploads/2020/04/image-29-1024x387.png" width="650"/></center><br>


There is no *single point of failure* and the services are completely decoupled. Although (depending on the number of participants or services that collaborate to guarantee the complete execution of the distributed transaction) it can cause an increase in **complexity, making testing, debugging and monitoring tasks difficult**.

<br>
## Orchestration

The **participants are managed from a single point: the saga orchestrator**. Through a first operation, it orchestrates the sequential calls to the set of participants to carry out the distributed business transaction.

<br><center><img src="/wp-content/uploads/2020/04/image-30-1024x721.png" width="650"/></center><br>

If the orchestrator detects an error in any response in the execution of any participant, it will execute the **corresponding compensation actions in each of the participants already executed** up to that moment.

The executions of the participants are carried out asynchronously following the necessary order if required. There may be several implementation possibilities depending on the technological stack, although it is recommended to use the **Remote Procedure Call** (RPC) ***request/async response*** or ***request/replay*** patterns in communications with the participants.

The main advantage is the **visibility provided by having the entire *workflow* centralized in the orchestrator**, making **testing, debugging and monitoring operations easier**. Although we have a single component creating a dependency between the participants*.

So, if what is **truly important in our system are the domain events to maintain the consistency** of the data, also having different strategies and practices that solve different problems at the moment we save said states (writing) and others when we need to consult them (**reading**). The question would be: *Why don't we work only with events?*. Thus approaching [Event Sourcing and CQRS](/domain-driven-design-architecture/#eventsourcing).

From my point of view, the solution to a given problem in a specific situation and context lies in the **balance between the costs and benefits of each decision we make** at each moment. And the decisions (if you have the possibility to collaborate or influence them, of course) better make them based on the data you have and the knowledge/experience of the team. And remember to include the complexity you add as a cost.

So far, for the moment, the ** it easier to implement them (including *cloud* services such as [Durable Orchestrations](https://docs.microsoft.com/en-us/azure/azure-functions/durable/durable-functions-orchestrations?tabs=csharp) from *Azure*) basing ourselves on common patterns and guides, making it easier to explain them and always maintaining order and coherence in our practices.

*Recommended readings and talks:*

- <https://microservices.io/patterns/data/saga.html>
- <https://medium.com/@ijayakantha/microservices-the-saga-pattern-for-distributed-transactions-c489d0ac0247>
- <https://jimmybogard.com/life-beyond-distributed-transactions-sagas/>

<center>
<br><iframe width="560" height="315" src="https://www.youtube.com/embed/kyNL7yCvQQc?si=ZfFjbH2Vi3fpDyMT" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe><br>
<br><iframe width="560" height="315" src="https://www.youtube.com/embed/aHsVsbo_VOE?si=w_TauD8TxF6LisL_" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe><br>
</center>
