# En este README se definirán las tareas prácticas solicitadas por el equipo de Grupo Lucky para el Examen de PHP. ¡Gracias por la oportunidad!  

## 1. CRUD en PHP y MySQL

### 🛢️ Crear una tabla en MySQL:
<p><strong>En el archivo 'table_create' definimos el código SQL que creará la tabla 'users' con las columnas requeridas</strong> (id, name, email, created_at), también me tomé la libertad de añadir algunas adicionales (company, document, area). Aquí también ejecutamos una consulta a la DB para verificar si la tabla ha sido creada correctamente.</p>

### ⚙️ Crear un archivo config.php para la conexión a la base de datos:
<p><strong>En el archivo 'config' definimos las variables de conexión a la DB MySQL.</strong> Luego creamos un DSN y se configuran las opciones para realizar la conexión mediante PDO dentro de un try-catch para manejar los errores.</p>

### 👨‍💻 Crear un script PHP para realizar operaciones CRUD:
<p><strong>En el archivo 'crud' se define el script requerido en el documento word.</strong> Este código define los métodos HTTP que se ejecutarán en la DB para crear, leer, actualizar y eliminar registros. Se modificó el código para incluir las columnas adicionales definidas en la DB.</p>

<p><strong>¿Cómo usar el script para realizar operaciones CRUD?</strong></p>
<p>Podemos realizar las 4 operaciones básicas de todo CRUD ejecutando en la terminal el archivo que corresponda y enviando la información requerida en cada input dependiendo del método:</p>
<ul>
    <li><strong>Para crear un nuevo usuario,</strong> debemos ejecutar <strong>php crear.php</strong> en la terminal y enviamos los datos a medida que se soliciten.</li>
    <li><strong>Para leer la lista de usuarios,</strong> debemos ejecutar <strong>php leer.php</strong> en la terminal y recibiremos la lista de todos los usuarios.</li>
    <li><strong>Para actualizar un usuario,</strong> debemos ejecutar <strong>php actualizar.php</strong> en la terminal y enviamos los datos a medida que se soliciten.</li>
    <li><strong>Para borrar un usuario,</strong> debemos ejecutar <strong>php borrar.php</strong> en la terminal y enviamos el id del usuario que se debe eliminar.</li>
</ul>

## 2. Consulta a una API

### 👨‍💻 Crear un script PHP que realice una solicitud GET a una API pública (por ejemplo, la API de GitHub) y muestre los datos de un usuario específico:
<p>//TODO</p>
