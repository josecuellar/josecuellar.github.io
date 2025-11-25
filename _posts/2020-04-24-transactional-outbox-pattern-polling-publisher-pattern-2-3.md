---
id: 1914
title: 'Transactional Outbox & Polling Publisher Patterns (2/3)'
date: '2020-04-24T00:02:05+00:00'
layout: post
permalink: /transactional-outbox-pattern-polling-publisher-pattern-2-3/
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

Over time, *NoSQL* databases have improved their features to offer us *ACID* according to the type (**Single Row, Single Shard or Distributed**):

<br><center><img src="/wp-content/uploads/2020/04/image-21-1024x312.png" width="700"/></center><br>

The main problem is not whether **a certain database guarantees ACID or not** in its transactions (logically, it should to minimize the risk of inconsistencies), but **dividing the operations of the same** ***workflow*** (complete creation of the order with all its operations) **into several independent local transactions** between the different contexts and databases, whatever they may be.

So guaranteeing communications between contexts is vital to allow distributed executions between them while maintaining data consistency.

Normally we must **notify the event once the local transaction is completed**. To do this, we execute the transaction and then publish the event to our *message-broker*:

<br><center><img src="/wp-content/uploads/2020/04/image-25.png"  width="500"/></center><br>

The problem is that **the transaction and the sending of the event are not atomic: they are executed independently**, which can cause possible data inconsistencies if either fails:

<br><center><img src="/wp-content/uploads/2020/04/image-23.png"  width="500"/></center><br>

<center><img src="/wp-content/uploads/2020/04/image-24.png"  width="500"/></center><br>

The **Transactional Outbox** pattern will allow us a **single atomic transaction guaranteeing an [At-Least-Once](https://www.cloudcomputingpatterns.org/at_least_once_delivery/) delivery** and giving us the possibility to **reprocess them** at any time.

We will apply it by **saving in the same transaction both the operation we want to perform (which guarantees *ACID*), and the events** it may generate. The events will be persisted in the database:

<br><center><img src="/wp-content/uploads/2020/04/image-26-1024x445.png" width="600"/></center><br>

Through **[Polling Publisher](https://microservices.io/patterns/data/polling-publisher.html)** we would publish the events to our *message-broker*. Maintaining the status of the events in the *outbox* checking the *[ACK ](https://en.wikipedia.org/wiki/Acknowledgement_(data_networks))* at the time of publication (thus ensuring the reception of the event). Or even, the consumer could update the event to processed correctly using a [*CorrelationId* ](https://medium.com/@scokmen/debugging-microservices-part-ii-the-correlation-identifier-552f9016afcd) or *MessageId*.

We will ensure **At-least-once**/Once-or-more (messages will not be lost, although they could be duplicated). For that reason, our consumers should be **[idempotent ](http://shuttle.github.io/shuttle-esb/concepts-idempotence)** (the execution of one or more times will have the same result).

*There are interesting tools already developed that will allow us to adapt the outbox pattern easily:*

- <https://docs.particular.net/nservicebus/outbox/>
- <https://github.com/dotnetcore/CAP>

*As I mentioned, there are distributed database engines that allow us data consistency in their transactions (with certain performance penalties):*

> [Azure Cosmos Db](https://azure.microsoft.com/es-es/services/cosmos-db/) gives us the option of *[strong consistency](https://docs.microsoft.com/es-es/azure/cosmos-db/consistency-levels)* (*single region/single operation*) and guaranteeing *ACID* through [TransactionalBatch](https://devblogs.microsoft.com/cosmosdb/introducing-transactionalbatch-in-the-net-sdk/). Offering us the [Change Feed Functions](https://docs.microsoft.com/es-es/azure/cosmos-db/change-feed-functions) in which it will notify us of any insertion or update of a specific container. For this, we will need a collection where we will save the processed state of the notifications ([lease containers](https://docs.microsoft.com/bs-latn-ba/azure/cosmos-db/how-to-create-multiple-cosmos-db-triggers)).

In this way (with some nuances) we can approach the *outbox* pattern easily (although, ideally we should create a specific collection of *events* generated and have a *polling publisher*):

<br><center><img src="/wp-content/uploads/2020/05/image-7.png"/></center><br>

To **avoid this performance penalty and guarantee consistency**: we could *listen* to the events generated creating the specific query data in some other database or technology. **Also notifying other services** (given the importance in the consistency of data in distributed business transactions as we will see in the [next post](/saga-pattern-3-3/)):

<br><center><img src="/wp-content/uploads/2020/05/image-6.png"/></center><br>

So far one of the **most commonly recommended** patterns to guarantee the sending of events corresponding to local transactions of each service.

*Recommended readings:*

- <https://leadingdepth.com/saga-pattern-3-3/>
- <https://docs.microsoft.com/en-us/dotnet/architecture/microservices/multi-container-microservice-net-applications/subscribe-events>
- <https://docs.microsoft.com/bs-latn-ba/azure/cosmos-db/how-to-create-multiple-cosmos-db-triggers>
- <https://docs.microsoft.com/es-es/azure/cosmos-db/consistency-levels>
- <https://microservices.io/patterns/data/transactional-outbox.html>
- <https://jimmybogard.com/life-beyond-distributed-transactions-an-apostates-implementation-relational-resources/>
- <https://www.kamilgrzybek.com/design/the-outbox-pattern/>
