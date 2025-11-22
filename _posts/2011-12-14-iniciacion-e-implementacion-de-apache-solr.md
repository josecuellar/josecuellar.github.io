---
id: 514
title: 'Implementación de Apache Solr'
date: '2011-12-14T14:50:12+00:00'
author: Jose
layout: post
permalink: /iniciacion-e-implementacion-de-apache-solr/
categories:
    - General
tags:
    - Arquitectura
    - NoSQL
    - Rendimiento
---

Desde hace algunos meses he tenido la oportunidad de realizar tareas de implementación, configuración, adaptación y transicion de consultas SQL sobre una aplicación web de alto rendimiento mediante Apache Solr.

<br><center><img src="/wp-content/uploads/solr.jpg"  width="300"/></center><br>

Este hecho me ha permitido acercarme a la tecnología y dar mis primeros pasos en esta magnífica herramienta de búsqueda en la que cada día aprendo algo nuevo. 

**Apache Solr es un motor de búsquedas de código abierto basado en Apache Lucene.**

Internamente Apache Solr utiliza documentos indexados, organizados en *cores*, permitiéndonos consumirlos mediante su librería específica de Solr para la tecnología que estemos utilizando. 

Realizando consultas y consumiendo formatos estándares como XML o JSON. 

Puedes descargar la librería Solr para *.NET* [aquí](http://code.google.com/p/solrnet/). 

Por defecto Apache Solr utiliza el servidor [Jetty](http://wiki.apache.org/solr/SolrJetty). Aunque no es recomendable en entornos de producción ([Tomcat](http://wiki.apache.org/solr/SolrTomcat) sería la opción ideal por su alto grado de fiabilidad y rendimiento). 
Su interfaz principal de administración se realiza vía Web:

<br><center><img src="/wp-content/uploads/solradmin.png"  width="700"/></center><br>

**Permite la replicación y sincronización de índices con cualquier base de datos utilizando estándares bajo el protocolo HTTP consiguiendo una alta disponibilidad, compatibilidad y escalabilidad. Pudiendo instalarlo en cualquier tipo de servidor sobre cualquier sistema operativo.**

> Las expectativas previas con respecto a la mejora de rendimiento, después de la adaptación, implementación y medición iniciales, se están cumpliendo. Mejorando tiempos en gran medida y en todos los casos. Aún quedando muchísimo trabajo de mejora y optimización.

En vista de su potencial, me doy cuenta que se trata de una herramienta imprescindible a utilizar en entornos y arquitecturas de alto rendimiento. 

**Así lo hacen hoy en día innumerables portales punteros en Internet:**

**Twitter** migró su sistema de búsquedas.
Puedes leer la noticia relacionada aquí: [New Twitter Gets New Search Engine](http://mashable.com/2010/10/06/twitter-lucene/). 

**Trovit** publicó un documento con interesante información de su arquitectura con Apache Solr: 
[Usage of Solr at Trovit A search Engine For Classified Ads](http://www.slideshare.net/sturlese/use-ofsolrattrovitclassifiedads-marcsturlese). 

Algunos recursos imprescindibles:
- [Documentación Lucene Apache Solr](http://lucene.apache.org/solr/)[Wiki Apache Solr](http://wiki.apache.org/solr/)
- [Solrnet](http://code.google.com/p/solrnet/)

**Getting Started with Apache Solr**

<center><iframe allowfullscreen="" frameborder="0" height="415" src="http://www.youtube.com/embed/eRQeYiuPgMA" width="640"></iframe></center>
<br>

Poco a poco iré añadiendo nuevas sugerencias o ideas que puedan solucionar contratiempos en mi andadura con Solr que puedan orientaros o ayudaros. 
De igual modo os animo a que comentéis haciendo lo mismo. 

De momento, es todo. Paciencia y suerte.