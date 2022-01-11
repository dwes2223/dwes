Uno de los framworks más utilizados.
Características:
    - Blade: sistema de plantillas que permite crear vistas
    - Eloquent: sistema de laravel para tratar con la BD. Transforma a SQL
    - Routing: para organizar las rutas de la aplicacion
    - Middlewares: controladores que se ejecutan antes o después de una petición
                    ejemplo:controlar los permisos de un usuario antes de acceder a un recurso
    - Documentación y cominidad: existen muchos paquetes ya hechos

Cómo desarrollar un proyecto:
    - Es necesario tener instalado el gestor de dependecias composer
    - Comando para crear un proyecto:
        composer create-project laravel/laravel nombre_proyecto

    - .env: contiene la configuración de la aplicación
        datos del proyecto, datos de conexión
    
    - artisan: interfaz de línea de comandos de laravel
