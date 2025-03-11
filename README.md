# Concesionario
Práctica 4

### Cómo Ejecutar la Aplicación
- Iniciamos el servidor web (XAMPP/LAMP/WAMP).
- Copiamos los archivos en la carpeta htdocs (XAMPP) o en el directorio del servidor web.
- Importamos el script SQL en MySQL.
- Accedemos a http://localhost/car_dealership/index.php desde el navegador.

## Códigos
### bdsql.sql
En este archivo creamos la base de datos con sus tablas y campos.
### index.php
Este archivo es la base web para administrar los clientes, coches y compras dentro del concesionario Redirigiendo mediante enlaces a cada página php especifica.
### cars.php
Este archivo es un script en PHP que permite registrar un coche con todas sus características en la base de datos creada.
### config.php
Este archivo indica las credenciales y realiza una conexión con la base de datos.
### customers.php
Este archivo es un script en PHP que permite registrar un cliente conn sus datos en la base de datos.
### purchases.php
Este archivo es un script en PHP que permite registrar una commpra en la base de datos mediante el id del coche y el id del cliente.
