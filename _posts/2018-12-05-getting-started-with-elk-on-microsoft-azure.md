---
id: 1685
title: 'Getting Started with ELK on Microsoft Azure'
date: '2018-12-05T21:18:41+00:00'
author: Jose
layout: post
guid: 'http://josecuellar.net/?p=1685'
permalink: /getting-started-with-elk-on-microsoft-azure/
s4_url2s:
    - ''
s4_image2s:
    - ''
s4_ctitle:
    - ''
s4_cdes:
    - ''
categories:
    - General
tags:
    - Azure
    - ELK
    - Monitoring
---

Si estás familiarizado con el stack de ELK sabrás lo potente y versátil que resulta monitorizar cualquier tipo de actividad en cualquier infrastructura gracias a su potente motor de búsqueda Elasticsearch y las muchas posibilidades de personalización representando los datos que ofrece Kibana. Aunque opcional, la arquitectura recomendada para ELK debe incluir un broker entre los Beats y LogStash (Redis, Kafka o RabbitMQ) para evitar bottlenecks en la recuperación de datos de todos los orígenes que facilitan los beats: [![](/wp-content/uploads/2018/11/elkredis.png)](/wp-content/uploads/2018/11/elkredis.png)Aunque en entornos cloud disponemos de servicios que nos permiten monitorizar toda la infrastructura, ELK puede aportarnos la flexibilidad necesaria *out of the box* dependiendo de la estrategia que queramos seguir. En mi caso, quiero centralizar en una única solución toda la infrastructura PaaS de Azure (inicialmente la información crítica de salud) ya que actualmente la información se distribuye en demasiados servicios independientes ofreciendo diferentes tipos de informaciones (Application Insights, Log Analytics, Azure Monitor, etc). LogStash dispone de plugins para habilitar la extracción de datos de los principales orígenes en Azure. Te dejo este enlace donde, además de los plugins, encontrarás varios recursos sobre el tema: <https://github.com/Azure/azure-diagnostics-tools><https://www.elastic.co/es/blog/azure-cloud-monitoring-with-the-elastic-stack>Puedes montar ELK mediante contenedores Docker. Yo inicialmente prefiero empezar por una VM utilizando un Azure Template para contruir una imagen, aunque no descarto que pase a Docker en el futuro. Te dejo un link interesante donde explican como montar ELK mediante Docker y enviar las trazas con [Serilog](http://serilog.net) (mediante una implentación específica de ILoggerFactory) y .NET Core a Event Hub para poder aprovechar la infrastructura y monitorizar desde ELK. <https://medium.com/@marcodesanctis2/monitor-asp-net-core-in-elk-through-docker-and-azure-event-hubs-6e519249af61>Como punto de partida configuraré LogStash con el plugin de Azure Event Hubs (será nuestro broker), capaz de absorber streamings de millones de eventos por segundo. También puedes añadir los plugins para añadir los inputs de Azure Service Bus y Azure Storage en el pipeline de LogStash.

#### Crea una imagen certificada por Bitnami en un nuevo Grupo de Recursos

Imagen de Bitnami: <https://ms.portal.azure.com/#create/bitnami.elk4-6>Una vez creada, accede al menú **Boot Diagnostics-&gt;Serial Log** y busca en él: *"Setting Bitnami application password to"* para conseguir los credenciales de acceso a Kibana. Conéctate mediante SSH al servidor `````````
ssh user@ip
```

``#### Inicializa y configura ELK

 `````````
sudo /opt/bitnami/use_elk
```

```````````
sudo /opt/bitnami/ctlscript.sh stop logstash
```

```````````
logstash-plugin install logstash-input-azureeventhub
```

``*Aquí puedes aprovechar para instalar más plugins a LogStash:<u>Input Azure Service Bus</u><https://github.com/Azure/azure-diagnostics-tools/tree/master/Logstash/logstash-input-azuretopic><u>Input Azure Event Hub</u><https://github.com/Azure/azure-diagnostics-tools/tree/master/Logstash/logstash-input-azureeventhub>Aquí los tienes todos listados: <https://github.com/Azure/azure-diagnostics-tools/tree/master/Logstash>**Crea el pipeline de LogStash creando o modificando el archivo mediante nano (puedes utilizar cualquier editor)**````*```
sudo nano /opt/bitnami/logstash/conf/access-log.conf
```

``*`` `````````
input
{
    azureeventhub
    {
        key => ""
        username => ""
        namespace => ""
        eventhub => ""
        partitions => 4
    }
}

output {
     elasticsearch {
         hosts => [ "127.0.0.1:9200" ]
     }
 }

```

``*Ctrl+O para guardar y Enter para confirmar. Ctrl+X para cerrar el editor.*Puedes crear tantos nodos input como entidades en Event Hub quieras configurar y añadir tantos inputs como necesites en tu configuración. **Establece la configuración del pipeline a LogStash y arranca el servicio con los siguientes comandos:**`````````
/opt/bitnami/logstash/bin/logstash -f /opt/bitnami/logstash/conf/ --config.test_and_exit
```

```````````
sudo /opt/bitnami/ctlscript.sh start logstash
```

``Puedes comprobar si se están moviendon los datos desde Event Hub a ElasticSearch: `````````
curl 'localhost:9200/_cat/indices?v'
```

``Ya sólo queda acceder a Kibana desde el browser mediante el user y password comentado en el inicio, configurar el índice *logstash-\** y a jugar :) *http://\[ip -server\]:5601*Enjoy!