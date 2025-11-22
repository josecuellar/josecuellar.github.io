---
id: 1635
title: 'Extreme Programming. Corollary Practices'
date: '2017-11-30T21:40:03+00:00'
author: Jose
layout: post
permalink: /extreme-programming-corollary-practices/
categories:
    - General
tags:
    - agile
    - xp
---

This practices are difficult or dangerous to implement before completing the preliminary work of the primary practices. 
If you begin deploying daily, for example, without getting the defect rate down close to zero, you will have a disaster on your hands. 
Trust your nose about what you need to improve next. 

<br><center><img src="/wp-content/uploads/xppractices.JPG"  width="700"/></center><br>

**Real Customer Involvement**

Visionary customers can be part of quarterly and weekly planning. 
The point of customer involvement is to reduce wasted effort by putting the people with the needs in direct contct with the people wwho can fill those needs. When you are ready with accurate estimates and ow defect rates, incuding customers in the development proess fosters trust and encourages continued improvement. 

**Incremental Deployment**

When replacing a legacy system, gradually take over its workload beginninng very early in the project. Big deployments have a high risk and high human and econoic costs. Find a little piece of functionality or a limited data set you can handle right away. Deploy it. You will have to find a way to run both programs in parallel, splitting and merging files or training some users to use both programs. This scaffolding, technical or social, is the price you pay for insurance. 

**Team Continuity**

Keep effective teams together There is a teendecy in large organizations to abstract people to things, plug-compatible programming units. Value in software is created not just by waht people know and do but also by their relationships and what they accomplish together. Small organizations don´t ave this problem. There is only one team. Once you gel, once you earn and offer trust, nothing short of shared calamity can pull the team apart. 
Large organizations often ignore the value iin teams, adopting instead a molecular/fluid metaphor for "programming resources". Once a project is done they go back "into de pool". This strategy maximized micro-efficiency but undermines the efficiency of the organization as a whole, striving for the illusory efficiency of keeping individuals busy typing while ignoring the value of enabling people to work mostly with those they know and trust. 

**Shrinking Teams**

As a team grows in capability, keep its workload constant but gradually reduce its size. This frees people to form more teams. When the tea has too few members, merge it with another too-small team. Thi is a practice used by the Toyota Production System. Try the same in software develoopment. Figure out how many stories the customer needs each week. 
Strive to improve development until some of the team members are idle; then you are ready to shrink the team and continue. 

**Root-Cause Analysis**

Every time a defect is found after development, eliminate the defect and its cause. The goal is not just that this one defect won´t ever recur, but that the team will never make the same king of mistake again.

- Write an automated system-level test that demostrates the defect, including the desired behavior.
- Write a unit test with the smallest possible scope that also reproduces the defect.
- Fix the system so the unit test works. This hould cause the sistem test to pass also. If not, return to 2.
- Figure out why the defect was created and wasn´t caught. Initiate the necessary changes to prevent this kind of defect in the future.

Taiichi Ohno has a simple exercise for this last step, the Five Whys. Ask five times why a problem occurred. 

**Shared Code**

Anyone on the team can improve any part of the system at any time. If something is wrong with the system and fixing it is not out of scope for what i´m doing right now, i should go ahead and fix it. Until the team has developed a sense of collective responsibility, no one is responsible and quality will deteriorate. 

**Code and Tests**

Maintain only the code and the tests as permanent artifacts. Generate other documents from the code and tests. Rely on social mechanisms to keep alive important history of the project. Customers pay for the what the system does today and wht the team can make the system do tomorrow. Any artifats contributing to these two sources of value are themselves valuable. Everything else is waste. 

**Single Code Base**

There is only oe code stream. You can develop in a temporary branch, but never let it live longer tha a few hours. Multiple code streams are an enorous source of wwaste in software development. Improve your process until you no longer need ultple versions of the code. 

**Daily Deployment**

Put new software into production every night. Anygap between what is on a programmer´s desk and what is in production is a risk. A programmer out of sync with the deployed software risks making decisions without getting accurate feedback about those decisions. Daily deployment is a corollary practice because it has so many prerequisites. The defect rate must be at most a handful per year. The build environment must be smoothly automated. The deployment tools must be automated, including the ability to roll out incrementally and roll back in case of failure. 
Most importantly, the trust in the teamm and with customers must be highly developed. There are many barriers to deploying frequently. Some are technical, like having too many defects or needing an enexpensive way to deploy. Some are psychological or social, like a deployment process so stressful that people don´t want to go through it twice as often. Some are business-related, like not having a way of charging for more frequent releases. Whatever the barrier, working to remove it and then letting more frequent deployment come as a natural consequence will help you improve development. 

**Negotiated Scope Contract**

Write contracts for software development that fix time, costs, and quality but call for an ongoing negotiation of the precise scope of the system. Reduce risk by signing a sequence of short contracts instead of one long one. You can move in the direction of negotiated scope. Big, long contracts can be split in half or thrids with the optimal part to be exercised only if both parties agree. Negotiated scope contracts are a piece of software development advice. They are a mechanism for aligning the interests of suppliers and customers to encourage communication and feedback. Moving in the direction of negotiated scope gives you a source of information with which to improve. 

**Pay-Per-Use**

With pay-per-use systems, you charge for every time the system is used. Money is the ultimate feedback. Not only is it concrete, you can also spend it. Connections money flow directly to software development provides accurate, timely information with which to drive improvement. The ultimate form of pay-per-use i´ve seen was in a messaging product. Users were charged per message. Each story in development was deliberatey selected to encourage more messages. Even if you can´t implement pay-per-use, you might be able to go to a subsription model, in which software is purchased monthly or quartly. With the subscription model, the team at least has the retention rates (the number of customers that continue to subscribe) as a source of information about how the team is doing. An een saller change of business model is to weight contracts more towards support fees and less toward up-front revenue. 
The primary and corollary practices are not everything you need to do to successfully develop software. They are, however, what my observations lead me to believe are the core of excellence for software develoopment teams. If you find yourself with a problem not covered by one of the practices, that´s the time to lock back at the values and the principles to come up with an appropriate solution for your team.