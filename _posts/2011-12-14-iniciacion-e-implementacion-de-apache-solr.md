---
id: 514
title: 'Getting started Apache Solr'
date: '2011-12-14T14:50:12+00:00'
layout: post
permalink: /getting-started-apache-solr/
categories:
  - Deep Engineering
tags:
  - apache-solr
  - apache-lucene
  - search-engine
  - distributed-systems
  - full-text-search
---

For the past few months, I've had the opportunity to perform implementation, configuration, adaptation, and transition tasks for SQL queries on a high-performance web application using Apache Solr.

<br><center><img src="/wp-content/uploads/solr.jpg"  width="300"/></center><br>

This has allowed me to get closer to the technology and take my first steps in this magnificent search tool, where I learn something new every day.

**Apache Solr is an open-source search engine based on Apache Lucene.**

Internally, Apache Solr uses indexed documents, organized in *cores*, allowing us to consume them through its specific Solr library for the technology we are using.

Performing queries and consuming standard formats such as XML or JSON.

You can download the Solr library for *.NET* [here](http://code.google.com/p/solrnet/).

By default, Apache Solr uses the [Jetty](http://wiki.apache.org/solr/SolrJetty) server. Although it is not recommended in production environments ([Tomcat](http://wiki.apache.org/solr/SolrTomcat) would be the ideal option due to its high degree of reliability and performance). Its main administration interface is done via Web:

<br><center><img src="/wp-content/uploads/solradmin.png"  width="700"/></center><br>

**It allows the replication and synchronization of indexes with any database using standards under the HTTP protocol, achieving high availability, compatibility, and scalability. Being able to install it on any type of server on any operating system.**

> The previous expectations regarding performance improvement, after the initial adaptation, implementation, and measurement, are being met. Improving times greatly and in all cases. Still, there is a lot of work to be done on improvement and optimization.

In view of its potential, I realize that it is an essential tool to use in high-performance environments and architectures.

**This is how countless leading portals on the Internet do it today:**

**Twitter** migrated its search system.
You can read the related news here: [New Twitter Gets New Search Engine](http://mashable.com/2010/10/06/twitter-lucene/).

**Trovit** published a document with interesting information about its architecture with Apache Solr:
[Usage of Solr at Trovit A search Engine For Classified Ads](http://www.slideshare.net/sturlese/use-ofsolrattrovitclassifiedads-marcsturlese).

Some essential resources:
- [Lucene Apache Solr Documentation](http://lucene.apache.org/solr/)
- [Apache Solr Wiki](http://wiki.apache.org/solr/)
- [Solrnet](http://code.google.com/p/solrnet/)

**Getting Started with Apache Solr**

<center><iframe allowfullscreen="" frameborder="0" height="415" src="http://www.youtube.com/embed/eRQeYiuPgMA" width="640"></iframe></center>
<br>

Little by little, I will be adding new suggestions or ideas that can solve setbacks in my journey with Solr that can guide or help you.
Similarly, I encourage you to comment by doing the same.

For now, that's all. Patience and good luck.
