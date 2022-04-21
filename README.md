## Introducción

Esta API es desarrollada par ala clínica de las Américas como parte del proceso de estandarización de recursos gráficos necesarios para las tareas de marketing y publicidad.

## Tecnologías utilizadas

### Backend
- Laravel versión 9.9.0 (PHP)
- MySQL versión 5.1.1 (SQL)

## Instalación de dependencias y ejecución del proyecto
- composer install (instalar las dependencias de composer dentro de la carpeta vendor).

- crear un archivo .env (en caso de clonar desde GIT).
- generar clave de encriptación: php artisan key:generate (en caso de clonar desde GIT).

- php artisan serve (ejecutar el servidor local en el puerto 8000 - http://127.0.0.1:8000).

## Producción
<a href="http://sebastian-trujillo.me/colores-back">Backend Laravel</a>

## Documentación
### Endpoints

* /api/colors 
    **Tipo de solicitud:** GET
    **Parámetros:** ninguno
    **Respuesta:** lista paginada de colores en formato JSON

* /api/colors/:id 
    **Tipo de solicitud:** GET
    **Parámetros:** id -> es un entero que representa el id del color a consultar
    **Respuesta:** datos del color consultado

* /api/colors 
    **Tipo de solicitud:** POST
    **Parámetros:** body en formato JSON con los parámetros del color (name, color, year, pantone)
    **Respuesta:** datos del color insertado

* /api/colors/:id 
    **Tipo de solicitud:** PUT
    **Parámetros:** id -> es un entero que representa el id del color a actualizar; body en formato JSON con los parámetros que se quieren actualizar del color (name, color, year, pantone)
    **Respuesta:** booleano dependiendo de si el recurso se actualizó o no

* /api/colors:id
    **Tipo de solicitud:** DELETE
    **Parámetros:** id -> es un entero que representa el id del color a borrar
    **Respuesta:** booleano dependiendo de si el recurso se eliminó o no