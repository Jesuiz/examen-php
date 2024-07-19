# En este README se definirán las tareas prácticas solicitadas por el equipo de Grupo Lucky para el Examen de PHP. ¡Gracias por la oportunidad!

## 1. CRUD en PHP y MySQL

### 🛢️ Crear una tabla en MySQL
En el archivo 'table_create' definimos el código SQL que creará la tabla 'users' con las columnas requeridas (id, name, email, created_at), también me tomé la libertad de añadir algunas adicionales (company, document, area). Aquí también ejecutamos una consulta a la DB para verificar si la tabla ha sido creada correctamente.  


### ⚙️ Crear un archivo config.php para la conexión a la base de datos
En el archivo 'config' definimos las variables de conexión a la DB MySQL. Luego creamos un DSN y se configuran las opciones para realizar la conexión mediante PDO dentro de un try-catch para manejar los errores.  


### 👨‍💻 Crear un script PHP para realizar operaciones CRUD
En el archivo 'crud' se define el script requerido en el documento word. Este código define los métodos HTTP que se ejecutarán en la DB para crear, leer, actualizar y eliminar registros. Se modificó el código para incluir las columnas adicionales definidas en la DB. Se programaron las solicitudes por separado, dentro de la carpeta 'comando' encontrarás los archivos relacionados: crear, leer, actualizar, borrar.  


**¿Cómo usar el script para realizar operaciones?**
Podemos realizar las 5 operaciones ejecutando en la terminal un comando y enviando la información requerida (asegúrate de haber creado la base de datos):
- Para crear la tabla 'users' debemos ejecutar **php comando/tabla.php** en la terminal.
- Para crear un nuevo usuario debemos ejecutar **php comando/crear.php** en la terminal y enviamos los datos solicitados.
- Para leer la lista de usuarios debemos ejecutar **php comando/leer.php** en la terminal y recibiremos la lista de todos los usuarios.
- Para actualizar un usuario debemos ejecutar **php comando/actualizar.php** en la terminal y enviamos los datos a medida que se soliciten.
- Para borrar un usuario debemos ejecutar **php comando/borrar.php** en la terminal y enviamos el id del usuario que se debe eliminar.  


## 2. Consulta a una API

### 👨‍💻 Crear un script PHP que realice una solicitud GET a una API pública (por ejemplo, la API de GitHub) y muestre los datos de un usuario específico
Puedes realizar consultas a la API de GitHub ejecutando en la terminal un comando y enviando la información requerida (asegúrate de haber creado la base de datos):
- Para consultar un usuario en GitHub debemos ejecutar **php comando/github.php** en la terminal y enviar el nombre del usuario.