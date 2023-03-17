# DailyTrends
Se pide realizar una pequeña aplicación (DailyTrends) que muestre un feed de noticias. Este feed es un agregador de noticias de diferentes periódicos. DailyTrends es un periódico que une las portadas de los periódicos número uno.

Cuando un usuario abre DailyTrends, se encuentra con las 5 noticias de portada de El Pais y El Mundo del día en el que lo abre, además se pueden añadir noticias a mano desde la aplicación.

## Tareas previas
1. Crear un repositorio de GIT (Bitbucket, GitHub o similar) con acceso público
2. Antes de empezar las tareas envíanos por e-mail el enlace del repositorio.
3. Haz los commits que consideres oportunos conforme vayas desarrollando las diferentes tareas (Mínimo un commit por tarea).

## Tareas a realizar
1. Crea un proyecto con una arquitectura de ficheros básica, gasta un framework si lo consideras oportuno.
2. Crea un modelo Feed que tenga los atributos: title, body, image, source y publisher.
3. Crea un controlador que se encargue de gestionar a los servicios CRUD del modelo.
4. Crea un “servicio de lectura de feeds” que extraiga por técnicas de web scraping (no lectura de fuentes RSS) a cada uno de los periódicos en busca de su noticia de portada y que la guarde en un Feed.
5. Crear un controlador que devuelva los feeds de hoy con su título, descripción, imagen, fuente y el periódico donde se ha publicado.
6. Crea una vista listado de Feeds que consuman las noticias.
7. Crea una vista detalle de Feed que se pueda editar y borrar.
8. Crea una vista de creación de Feed.
