<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400"></a></p>

<h3>Recetas</h3>
<h6>Repositorio de recetas</h6>
<p>
  Recetas es una aplicacion construida con Laravel MVC. 
  La estructura de la aplicacion se basa en el Front-End con Blade y componentes que estan asociados con la Vistas.
  Tiene un Routing compuesto por Resource Web Route con protocolo HTTP (GET-PUT-DELETE-PUT-POST).
  Base de Datos MYSQL 
</p>

<h6>Directorio de la aplicacion</h6>
<ul>
    <li>/resource [Vistas - Archivos js - scss - Componentes de Vuejs]</li>
    <li>/app  [Controllers - Model - Providers ]</li>
    <li>/database [Migrations - Seeders]</li>
</ul>

<h6>Proceso de Instalación</h6>
<p>Descargar el proyecto para tu pc local https://github.com/lucasgio/recetas.git</p>
<ul>
    <li>Instalar composer </li>
    """
    composer install
    """
    <li>Instalar las dependencias de Node</li>
    """
    npm install
    """
    <li>Cambiar el nombre de .env.example a .env</li>
    <p>Introducir estos datos</p>
    """
     APP_NAME=Recetas
     APP_ENV=local
     APP_KEY= LLave que se generaras par atu env local
     APP_DEBUG=true
     APP_URL=http://localhost
     
     LOG_CHANNEL=stack
     LOG_LEVEL=debug
     
     DB_CONNECTION=mysql
     DB_HOST=127.0.0.1
     DB_PORT=3306
     DB_DATABASE=recetasdb
     DB_USERNAME=root 
     DB_PASSWORD=root
     
     BROADCAST_DRIVER=log
     CACHE_DRIVER=file
     QUEUE_CONNECTION=sync
     SESSION_DRIVER=file
     SESSION_LIFETIME=120
     
     MEMCACHED_HOST=127.0.0.1
     
     REDIS_HOST=127.0.0.1
     REDIS_PASSWORD=null
     REDIS_PORT=6379
     
     MAIL_MAILER=smtp
     MAIL_HOST=mailhog
     MAIL_PORT=1025
     MAIL_USERNAME=null
     MAIL_PASSWORD=null
     MAIL_ENCRYPTION=null
     MAIL_FROM_ADDRESS=null
     MAIL_FROM_NAME="${APP_NAME}"
     
     AWS_ACCESS_KEY_ID=
     AWS_SECRET_ACCESS_KEY=
     AWS_DEFAULT_REGION=us-east-1
     AWS_BUCKET=
     
     PUSHER_APP_ID=
     PUSHER_APP_KEY=
     PUSHER_APP_SECRET=
     PUSHER_APP_CLUSTER=mt1
     
     MIX_PUSHER_APP_KEY="${PUSHER_APP_KEY}"
     MIX_PUSHER_APP_CLUSTER="${PUSHER_APP_CLUSTER}"
     
    """ 
    <li> Generar migraciones </li>
    """
    php artisan migrate --seed Categoria
    """
    <li> Dar permiso al local storage</li>
    """
    php artisan storage:link 
    """
    <li> Limpiar Cache </li>
    """
    php artisan config:cache
    """
    <li> Generar llave </li>
    """
    php artisan key:generate
    """
    <li> Correr app servidor </li>
    """
    php artisan serve
    """
</ul>
