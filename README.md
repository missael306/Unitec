# Prueba Unitec

Proyecto desarrollado en el proceso de selección Unitec

## Consideraciones

* Se asume localhost como servidor de BD local con el usuario root
* Tome en cuenta que el proyecto emplea CDN en las librerías Jquery y Jquery confirm, por tanto deberá contar con una conexión a internet para el optimo funcionamiento del proyecto
* No olvide correr la migraciones de BD junto con la siembra de datos, emplee el comando

```bash
php artisan migrate --seed 
```

## Observaciones en Base de datos 

* Se solicito el almacenamiento de "Apellido Paterno" y "Apellido Materno" en la base de datos sin embargo estos han sido sustituidos por "Primer" y "Segundo" apellido tomando en cuenta que algunos países no emplean la denominación Paterno y Materno 

* El campo edad se sustituye por fecha de nacimiento considerando que guardar la edad como tal representa un campo calculado complicando la actualización del sistema.

* Los campos Genero, Estado Civil, Grado de interés y Licenciaturas se trasladan a sus propias tablas tomando en cuenta las formas normales de una base de datos 
