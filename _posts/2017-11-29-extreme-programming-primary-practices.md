---
id: 1627
title: 'Extreme programming. Primary practices'
date: '2017-11-29T23:19:51+00:00'
author: Jose
layout: post
permalink: /extreme-programming-primary-practices/
categories:
    - General
tags:
    - agile
    - practices
    - xp
---

The XP practices do not represent some kind of pinnacle in the evolution of software development. They are a common way station on the road to improvement. The primary practices are useful independent of what else you are doing. They each can give you immediate improvement. You can start safely with any of them. The corollary practices are likely to be difficult without first mastering the primary practices. 
The amplification effect of using the practices together means there is an advantage to adding practices as quickly as you can. 

<br><center><img src="/wp-content/uploads/xpPrimaryPractices.png"  width="700"/></center><br>

**Sit Together**

Develop in an open space big enough for the whole team. A team that knows that physical proximity enhances communication and that has learned the value of communication will open up their own space, given the chance. Meet the need for privacy and "owned" space by having sall private spaces nearby or by limiting work hours so team members can get their privacy needs met elsewhere. 

**Whole Team**

Include on the team people with all the skills and perspectives necessary for the project to succeed. This is really nothing more than the old idea of cross-functional teams. The name reflects the purpose of the practices, a sense of wholeness on the team, the ready availability of all the resources necessary to succeed. People need a sense of "team":

- We belong
- We are in this together
- We support each others work, growth, and learning

If a set of skills or attitudes becomes important, bring a person with these skills on the team. If someone is o longer necessary, he can go elsewhere. For larger projects, finding ways to fracture the problem so it can be solved by a team of teams allows XP to scale up. The team respons to the customers needs. The customer receives the benefit of the experts of the whole team as needed. 

**Informative Workspace**

Make your workspace about your work. An interested observer should be able to walk into the team space and get a general idea of how the project is going in fifteen seconds. He should be able to get more information about real or potential problems by looking more closely. 

**Energized Work**

Where is the scientific evidence that members of a software team produce more value in eighty hour weeks than in forty hour weeks? Software development is a game of insight, and insight comes to the prepared, rested, relaxed mind. You can´t control how the whole project is going; You can´t control whether the product sells; but you can always stay later. With enough caffeine and sugar, you can keep typing long past the point where you have started removing value from the project. It´s easy to remove value from a software project; but when you are tired, it´s hard to recognize that you are removing value. When you are sick, respect yourself and the rest of your team by resting and getting well. 
Taking care of yourself is the quickest way back to energized work. You also protect the team from losing more productivity because of illness. Coming in sick doesn´t show commitment to work, because when you do you aren´t helping the team. 

**Pair Programming**

Write all production programs with two people sitting at one machine. Set up the machine so the partners can sit comfortably side-by-side. Move the keyboard and mouse back and forth so you are comfortable while you are typing. Pair programming is a dialog between two people simultaneously progrmming and trying to program better. 

**Stories**

Plan using units of customer-visible functionality. "Handle five times the traffic with the same response time". "Provide a two-click way for users to dial frequently used numbers". As soon as a story is written, try to estimate the development effort necessary to implment it. Software development has been steered worng by the word "requirement": something mandatory or obligatory. The word carries a connotation of absolutism and permanence, inhibitors to empbracing change. 

**Weekly Cycle**

Plan work a week at a time. Have a meeting at the beginning of every week. During this meeting: 
- Review progress to date, including how actual progress for the previous week matched expected progress.
- Have the customers pick a week´s worth of stories to implement this week.
- Break the stories into tasks. Team members sign up for tasks and estimate them.

Start the week by writing automated tests that will run when the stores are completed. Then spend the rest of the week completing the stories and getting the tests to pass. Ownership of tasks goes a long way towards satisfying the human need for ownership. Improving it you can write small stories that eliminate the need for separate tasks. The cost of this approach is more work for the customer. You can also eliminate sign-up by keeping a stack of tasks. 

**Quarterly Cycle**

Plan work a quarter at a time. Once a quarter reflect on the team, the project, its progress, and its alignment with larger goals. <u>During quarterly planning</u>
- Identify bottlenecks, especially those controlled outside the team
- Initiate repairs
- Plan the theme or themes for the quarter
- Pick a quarter´s worth of stories to address those themes
- Focus on the big picture, where the project fits within the organization

The separation of "themes" from "stories" as intended to address the tendency of the team to get focused and excited about the details of what they are doing without reflecting on how this week´s stories fit into the bigger picture. Themes also fit well into larger-scale planning such as drawing marketing roadmaps. Quarters are also a good interval for team reflection. 

**Ten-Minute Build**

Automatically build the whole system and run all of the tests in ten minutes. A build that takes longer than ten minutes will be used much less often, missing the opportunity for feedback. Automatically build the whole system and run all of the tests in ten minutes. If your process isn´t automated, that´s the first place to start. Then you may be able to build only the part of the system you have changed. Finally, you may be able to run only tests voering the part of the system at risk because of the changes you made. 

**Continous Integration**

Integrate and test changes after no more than a couple of hours. Team programming isn´t a divide and conquer problem. It is a divide, conquer, and integrate problem. Integrate and build a complete product. If the goal is to burn a CD, burn a CD. If the goal is to deploy a web site, deploy a web site, even if it is to a test environment. Continuous integration should be complete enough that the eventual first deployment of the system is no big deal.

**Test-First Programming**

- Scope creep. It´s easy to get arried away programming and put in code "just in case." By stating explicitly and objectively what the program is supposed to do, you give yourself a focus for your coding. If you really want to put that other code in, write another test after you have made this one work.
- Coupling and cohesion. If it´s hard to write a test, it´s a signal that you have a design problem, not a testing problem. Loosely coupled, hightly cohesive code is easy to test.
- Trust. It´s hard to trust the author of code that doesn´t work. By writing clean code that works and demostrating your intentions with automated tests, you give your teammates a reason to trust you.
- Rhythm. It´s easy to get lost for hours when you are coding. When programming test-first, it´s clearer what to do next: either write another test or make the broken test work. Soon this develops into a natural and efficient rhythm, test, code, refactor, test, code, refactor.

**Incremental Design**

The cost of large-scale design changes should rise dramatically over time. In that case, the most economical cost design strategy is to make big design decisions early and defer all small-scale decisions until later. XP teams are confident in their ability to adapt the design to future requirements. 

The advice to XP teams is not to minimize design investment over the short run, but to keep the design investment in proportion to the needs of the system so far. The question is not wheter or not to design, the question is when to design. Incremental design suggests that the most effective time to design is in the light of experience. Eliminate duplication. 
If you have the same login in two places you must work with design to understand how you can have only one copy. 

The big payoff of XP comes once these pratices are firmlly in place. Then comes the big step forward: business relationships that directly support further perfection of software development.