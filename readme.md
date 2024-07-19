# En este README se definirán las tareas prácticas solicitadas por el equipo de Grupo Lucky para el Examen de PHP.  
# ¡Gracias por la oportunidad!


## 1. CRUD en PHP y MySQL

### 🛢️ Crear una tabla en MySQL:
    **En el archivo 'table_create' definimos el código SQL que creará la tabla 'users' con las columnas requeridas** (id, name, email, created_at), también me tomé la libertad de añadir algunas adicionales (company, document, area). Aquí también ejecutamos una consulta a la DB para verificar si la tabla ha sido creada correctamente.

### ⚙️ Crear un archivo config.php para la conexión a la base de datos:
    **En el archivo 'config' definimos las variables de conexión a la DB MySQL.** Luego creamos un DSN y se configuran las opciones para realizar la conexión mediante PDO dentro de un try-catch para manejar los errores.

### 👨‍💻 Crear un script PHP para realizar operaciones CRUD:
    **En el archivo 'crud' se define el script requerido en el documento word.** Este código define los métodos HTTP que se ejecutarán en la DB para crear, leer, actualizar y eliminar registros. Se modificó el código para incluir las columnas adicionales definidas en la DB.

    **¿Cómo usar el script para realizar operaciones CRUD?**
    Podemos realizar las 4 operaciones básicas de todo CRUD ejecutando en la terminal el archivo que corresponda y enviando la información requerida en cada input dependiendo del método:
        **- Para crear un nuevo usuario,** debemos ejecutar **php crear.php** en la terminal y enviamos los datos a medida que se soliciten.
        **- Para leer la lista de usuarios,** debemos ejecutar **php leer.php** en la terminal y recibiremos la lista de todos los usuarios.
        **- Para actualizar un usuario,** debemos ejecutar **php actualizar.php** en la terminal y enviamos los datos a medida que se soliciten.
        **- Para borrar un usuario,** debemos ejecutar **php borrar.php** en la terminal y enviamos el id del usuario que se debe eliminar.  


# 2. Consulta a una API

### 👨‍💻 Crear un script PHP que realice una solicitud GET a una API pública (por ejemplo, la API de GitHub) y muestre los datos de un usuario específico:
    //TODO
