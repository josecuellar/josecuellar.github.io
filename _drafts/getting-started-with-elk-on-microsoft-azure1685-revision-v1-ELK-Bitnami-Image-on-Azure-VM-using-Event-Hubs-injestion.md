---
id: 1691
title: 'ELK Bitnami Image on Azure VM using Event Hubs injestion'
date: '2018-11-18T21:33:02+00:00'
author: Jose
layout: revision
guid: 'http://josecuellar.net/1685-revision-v1/'
permalink: '/?p=1691'
---

Si estás familiarizado con el stack de ELK sabrás lo potente y versátil que resulta monitorizar cualquier tipo de actividad en cualquier infrastructura. Aunque opcional, la arquitectura recomendada para ELK debe incluir un broker entre los Beats y LogStash (Redis, Kafka o RabbitMQ) para evitar bottlenecks en la injesta de los datos: Aunque en entornos Cloud disponemos de servicios PaaS que nos permiten monitorizar toda la infrastructura, ELK puede aportarnos la flexibilidad necesaria *out of the box* dependiendo de la estrategia que queramos seguir. En mi caso, quiero centralizar en una única solución toda la infrastructura PaaS de Azure (inicialmente la información crítica de salud de todos los microservicios que vamos desarrollando), ya que actualmente la información se distribuye en demasiados servicios independientes ofreciendo diferentes informaciones en: Application Insights, Log Analytics, Azure Monitor, etc. LogStash dispone de muchísimos plugins para injestar desde casi cualquier servicio de Azure. Te dejo este enlace donde, además de los plugins, encontrarás varios recursos sobre el tema: <https://github.com/Azure/azure-diagnostics-tools> <https://www.elastic.co/es/blog/azure-cloud-monitoring-with-the-elastic-stack>   
  
 Puedes montar ELK mediante Docker. Yo inicialmente prefiero empezar por una VM utilizando un Azure Template para contruir una imagen, aunque no descarto que pase a Docker en el futuro.   
  
 Como punto de partida configuraré LogStash con el plugin de injesta en Azure Event Hubs (será nuestro broker), capaz de injestar millones de eventos por segundo. En siguientes pasos, injestaré eventos de Azure Service Bus y Azure Storage.

#### Crea una imagen certificada por Bitnami en un nuevo Grupo de Recursos

   
  
 Imagen de Bitnami: <https://ms.portal.azure.com/#create/bitnami.elk4-6> Una vez creada, accede al menú **Boot Diagnostics-&gt;Serial Log** y busca en él:   
 *"Setting Bitnami application password to"* para conseguir los credenciales de acceso a Kibana.   
  
 Conéctate mediante SSH al servidor  
 `<pre>ssh user@ip</pre>`   
#### Inicializa y configura ELK

   
 `<pre>sudo /opt/bitnami/use_elk</pre>`  
  
 `<pre>sudo /opt/bitnami/ctlscript.sh stop logstash</pre>`  
  
 `<pre>logstash-plugin install logstash-input-azureeventhub</pre>`  
  
 *Aquí puedes aprovechar para instalar más plugins a LogStash. Crea el pipeline de LogStash creando o modificando el archivo mediante nano (puedes utilizar cualquier editor)   
  
 `<pre>sudo nano /opt/bitnami/logstash/conf/access-log.conf</pre>` Puedes ver la configuración del plugin que vamos a utilizar aquí:   
 <https://github.com/Azure/azure-diagnostics-tools/tree/master/Logstash/logstash-input-azureeventhub>*  
  
 `<pre>input{    azureeventhub    {        key => "<policy key="">"        username => "</policy><policy name="">"        namespace => "<event hub="" namespace="">"        eventhub => "</event><event entity="" hub="">"        partitions => 4    }}output {     elasticsearch {         hosts => [ "127.0.0.1:9200" ]     } }</event></policy></pre>`   
  
 Ctrl+O para guardar y Enter para confirmar. Ctrl+X para cerrar el editor.  
  
 Establece la configuración del pipeline a LogStash y arranca el servicio con los siguientes comandos:  
  
 `<pre>/opt/bitnami/logstash/bin/logstash -f /opt/bitnami/logstash/conf/ --config.test_and_exit</pre>`  
  
 `<pre>sudo /opt/bitnami/ctlscript.sh start logstash</pre>`   
  
 Done :)!   
  
 Puedes comprobar si se están injestando los datos desde Event Hub a ElasticSearch:  
 `<pre>curl 'localhost:9200/_cat/indices?v'</pre>`   
  
 Accede a Kibana desde el browser, como ya sabes:  
 *http://<ip>:5601</ip>* https://medium.com/@marcodesanctis2/monitor-asp-net-core-in-elk-through-docker-and-azure-event-hubs-6e519249af61 