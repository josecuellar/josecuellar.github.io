---
id: 1685
title: 'Getting Started with ELK on Microsoft Azure'
date: '2018-12-05T21:18:41+00:00'
layout: post
permalink: /getting-started-with-elk-on-microsoft-azure/
categories:
  - Deep Engineering
tags:
  - cloud-logging
  - observability
  - infrastructure
  - azure
  - elk
  - logstash
  - kibana
  - elasticsearch
---

If you are familiar with the [ELK](https://www.elastic.co/es/elastic-stack) stack, you will know how powerful and versatile it is to monitor any type of activity in any infrastructure thanks to its powerful Elasticsearch search engine and the many customization possibilities offered by Kibana in representing the data.
Although optional, the recommended architecture for ELK should include a broker between Beats and LogStash (Redis, Kafka or RabbitMQ) to avoid bottlenecks in data retrieval from all the sources facilitated by the beats:

<br><center><img src="/wp-content/uploads/2018/11/elkredis.png"/></center><br>

Although in cloud environments we have services that allow us to monitor the entire infrastructure, ELK can provide the necessary flexibility *out of the box* depending on the strategy we want to follow.
In my case, I want to centralize all the Azure PaaS infrastructure in a single solution (initially the critical health information) since currently the information is distributed in too many independent services offering different types of information (Application Insights, Log Analytics, Azure Monitor, etc.).
LogStash has plugins to enable data extraction from the main sources in Azure.

You can mount ELK using Docker containers. In this case we will use a VM through Azure Template to build the image.
I leave you an interesting link where they explain how to mount ELK using Docker and send the traces with [Serilog](http://serilog.net) (through a specific implementation of ILoggerFactory) and .NET Core to Event Hub to take advantage of the infrastructure and monitor from ELK.
- <https://medium.com/@marcodesanctis2/monitor-asp-net-core-in-elk-through-docker-and-azure-event-hubs-6e519249af61>

As a starting point, I will configure LogStash with the Azure Event Hubs plugin (it will be our broker), capable of absorbing streamings of millions of events per second. You can also add the plugins to add the inputs of Azure Service Bus and Azure Storage in the LogStash pipeline.

### Create a Bitnami certified image in a new Resource Group
Bitnami Image: <https://ms.portal.azure.com/#create/bitnami.elk4-6>

Once created, access the **Boot Diagnostics -> Serial Log** menu and search for: *"Setting Bitnami application password to"* to get the access credentials to Kibana. 

Connect via SSH to the server 
```
ssh user@ip
```

### Initialize and configure ELK

```
sudo /opt/bitnami/use_elk
sudo /opt/bitnami/ctlscript.sh stop logstash
logstash-plugin install logstash-input-azureeventhub
```

**Here you can take the opportunity to install more plugins to LogStash:**
- Azure Service <https://github.com/Azure/azure-diagnostics-tools/tree/master/Logstash/logstash-input-azuretopic>
- Azure Event Hub</u><https://github.com/Azure/azure-diagnostics-tools/tree/master/Logstash/logstash-input-azureeventhub>
- Here you have them all listed: <https://github.com/Azure/azure-diagnostics-tools/tree/master/Logstash>

### Create the LogStash pipeline by creating or modifying the file using nano (you can use any editor)

```
sudo nano /opt/bitnami/logstash/conf/access-log.conf
```

```
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

*Ctrl+O* to save and Enter to confirm.
*Ctrl+X* to close the editor.

You can create as many input nodes as entities in Event Hub you want to configure and add as many inputs as you need in your configuration.

### Set the pipeline configuration to LogStash and start the service with the following commands

```
/opt/bitnami/logstash/bin/logstash -f /opt/bitnami/logstash/conf/ --config.test_and_exit
sudo /opt/bitnami/ctlscript.sh start logstash
```

You can check if the data is moving from Event Hub to ElasticSearch:

```
curl 'localhost:9200/_cat/indices?v'
```

Now you just have to access Kibana from the browser using the user and password commented at the beginning, configure the *logstash* index and play :) 

*http://\[ip -server]:5601*

Enjoy!
