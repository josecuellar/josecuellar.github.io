---
id: 2093
title: 'Estilos y patrones básicos en arquitectura de software'
date: '2025-11-21T22:25:38+00:00'
author: Jose
layout: revision
guid: 'https://josecuellar.net/?p=2093'
permalink: '/?p=2093'
---

Conjunto de principios que definen a alto nivel un aspecto de la aplicación.  
Los principales aspectos son: **Comunicación, despliegue, dominio, interacción, relación y estructura**. Lo normal en una arquitectura es no basarse en un solo estilo arquitectural, sino que combine varios para obtener las ventajas existentes de cada uno.

- **Cliente/Servidor**: Define una relación entre dos aplicaciones en las cuales una de ellas (cliente) envía peticiones a la otra (servidor y fuente de datos).   
      
    <center>![Cliente/Servidor](http://www.josecuellar.net/wp-content/uploads/Arquitectura/clienteservidor.png)</center>
- **Basado en componentes**: Conjunto de componentes que exponen interfaces bien definidas y que colaboran entre sí para resolver el problema. Diseñado de forma que puedan ser reutilizados en distintos escenarios en distintas aplicaciones aunque algunos componentes son diseñados para tareas específicas.   
      
    <center>![Basado en componentes](http://www.josecuellar.net/wp-content/uploads/Arquitectura/componentes.png)</center>
- **Arquitectura en capas (N-Layer)**: Distribución jerárquica de los roles y las responsabilidades para proporcionar una división afectiva de los problemas a resolver. Los roles indican el tipo y forma de interacción con otras capas y las responsabilidades la funcionalidad que implementan.   
      
    <center>![Arquitectura en capas (N-Layer)](http://www.josecuellar.net/wp-content/uploads/Arquitectura/nlayer.png)</center>
- **Presentación desacoplada**: Indica cómo debe realizarse el manejo de las acciones del usuario, la manipulación de la interfaz y los datos de la aplicación. Separación de componentes de la interfaz del flujo de datos y de la manipulación.   
      
    <center>![Presentación desacoplada](http://www.josecuellar.net/wp-content/uploads/Arquitectura/desacoplada.png)</center>
- **Arquitectura en capas (N-Tier)**: Conceptualmente igual que la arquitectura en capas (n-layer), aunque se define la separación de la funcionalidad en segmentos físicos separados (Tier). Normalmente la separación física se realiza en servidores diferenciados por razones de escalabilidad, seguridad, o simplemente necesidad.   
      
    <center>![Arquitectura en capas (N-Tier)](http://www.josecuellar.net/wp-content/uploads/Arquitectura/ntier.png)</center>
- **Arquitectura Orientada al Dominio (DDD)**: Orientado para diseñar e implementar aplicaciones empresariales complejas donde es fundamental definir un Modelo de Dominio expresado en el propio lenguaje de los expertos del dominio de negocio real (llamado Lenguaje [Ubicuo](http://es.wikipedia.org/wiki/Computaci%C3%B3n_ubicua)). 
    - Arquitectura N-Layer.
    - Patrones de diseño: 
        - Repository
        - Entity
        - Aggregate
        - Value-Object
        - Unit of Work
        - Services
    - Desacoplamiento entre componentes pertenecientes al diseño.
    
    Todo el equipo de desarrollo deben tener contacto con los expertos del dominio (expertos funcionales) para modelar correctamente el Dominio. El corazón del software es el Modelo del Dominio el cual es una proyección directa de dicho lenguaje acordado entre todos los miembros del equipo (lenguaje [Ubicuo](http://es.wikipedia.org/wiki/Computaci%C3%B3n_ubicua)).   
      
    <center>![Arquitectura Orientada al Dominio (DDD)](http://www.josecuellar.net/wp-content/uploads/Arquitectura/orientadaaldominio.png)</center>
- **Orientado a Objetos (OO)**: Conjunto de objetos que cooperan entre sí en lugar de cómo un conjunto de procedimientos. Los objetos son discretos, independientes y poco acoplados, se comunican mediante interfaces y permiten enviar y recibir peticiones.   
      
    <center>![Orientado a Objetos (OO)](http://www.josecuellar.net/wp-content/uploads/Arquitectura/orientadaaobjetos.png)</center>
- **Bus de Servicios(Mensajes)**: Define un sistema de software que puede enviar y recibir mensajes usando uno o más canales de forma que las aplicaciones pueden interactuar sin conocer detalles específicos la una de la otra. Interacción entre aplicaciones a través del paso de mensajes por un canal de comunicación común (bus). Se implementa a menudo usando un sistema de mensajes como [MSMQ](http://en.wikipedia.org/wiki/Microsoft_Message_Queuing).   
      
    <center>![Bus de Servicios(Mensajes)](http://www.josecuellar.net/wp-content/uploads/Arquitectura/busdeservicios.png)</center>
 