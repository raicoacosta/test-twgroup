¡Hola!



Espero que te encuentres muy bien.



Te escribo para acusar recibo de tu CV y continuar el proceso de postulación de nuevos programadores a nuestra empresa. Lo que buscamos es que sean proactivos y no tengan miedo a tomar riesgos. Para ello, el siguiente paso del proceso se inicia respondiendo el desafío que está a continuación en un plazo máximo de 48 horas continuas a contar de ahora. Una vez completado, y si todo resulta bien, agendamos una entrevista. Ojo que, si bien establecemos un plazo máximo, tu velocidad de respuesta puede ser un factor para considerar. Si todo es exitoso, tendrás un lugar para emprender nuevos desafíos con nosotros.



Quedo desde ya atenta a tus respuestas para el desafío que comienza ahora.



Desafío 1:



Al momento de iniciar un nuevo proyecto en Laravel debemos realizar una serie de pasos para configurar el proyecto dependiendo de sus requerimientos. Imagina que necesitamos una plataforma sobre Laravel que utilizará un motor de base de datos MySQL/MariaDB, un servidor de correos SMTP y un servidor Redis.



¿Cuáles son los pasos que consideras necesarios para dejar la aplicación funcionando en modo de desarrollo? (Describe los comandos necesarios que ejecutarías y que archivos modificarías en base a los requerimientos mencionados).



Desafío 2:



Laravel cuenta con un ORM llamado Eloquent, este ORM nos permite simplificar las consultas a la base de datos, imagina los siguientes modelos con los siguientes atributos.



Publication (id, title, content, user_id)
Comment (id, publication_id, content, status)


Imagina que existe la relación "Una publicación puede tener 0 o más comentarios", ¿Cómo definirías las funciones de relación en ambos modelos?



Desafío 3:



Imaginando los modelos anteriormente mencionados, crea una Query en Eloquent (Obligatorio) que obtenga: Todas las publicaciones que contengan comentarios con la palabra "Hola" en su contenido, y que además posean status "APROBADO".



Desafío 4:





En Laravel existen las migraciones, en base a tu experiencia ¿Cuáles son las ventajas que nos entrega el uso de migraciones en una aplicación Laravel funcionando en un servidor de producción?



Desafío 5:



En base a lo anterior, realiza una pequeña aplicación en Laravel que conste de las siguientes tablas:



Tablas de la Base de Datos:

users
publications
comments


La petición es:

Realiza un CRUD, utiliza Bootstrap y en las vistas el uso de Layouts en Blade.



El CRUD debe consistir en un formulario, en la cual se puedan realizar publicaciones.

Para ingresar a esta vista, es necesario estar autenticado en el sistema, no se puede acceder a las rutas de este si no esta autenticado.
Se debe desplegar una lista de las publicaciones ya existentes.
Al momento de entrar a visualizar una publicación, debe existir la posibilidad de poder visualizar todos los comentarios y además ingresar un comentario en la publicación, en caso de que el usuario ya haya comentado la publicación, este no podrá volver a realizar dicha acción.
Al momento de que se genere un nuevo comentario, es necesario que se envíe un correo electrónico al autor de la publicación (Puedes utilizar Mailtrap para Testing, aunque lo importante no es la evidencia del envío, sino el código).
Recuerda usar bootstrap en el diseño, y que puedes ingresar todas las publicaciones que quieras, insertando campos en la tabla publications.
