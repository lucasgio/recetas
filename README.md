<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400"></a></p>

<a href="https://ibb.co/xgP9GhV"><img src="https://i.ibb.co/qgXq9Bb/recetas.png" alt="recetas" border="0"></a>

<a href="https://ibb.co/D4NsbRX"><img src="https://i.ibb.co/VVdrNqy/recetas1.png" alt="recetas1" border="0"></a>

<a href="https://ibb.co/jZJZ1Kz"><img src="https://i.ibb.co/wrcrxH7/rectas2.png" alt="rectas2" border="0"></a>
<a href="https://ibb.co/p4BTKmG"><img src="https://i.ibb.co/dkwvph1/rectas3.png" alt="rectas3" border="0"></a>

<h3>Recetas</h3>
<h6>Repositorio de recetas</h6>
<p>
  Recetas es una aplicacion construida con Laravel MVC. 
  La estructura de la aplicacion se basa en el Front-End con Blade y componentes Vuejs   que estan asociados con la Vistas.
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
    
    1.Instalar composer
      - composer install
    2. Instalar las dependencias de Node
   	  - npm install
	3. Cambiar el nombre de .env.example a .env
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

    4. Generar migraciones 
	   - php artisan migrate --seed Categoria
	5. Dar permiso al local storage
   	   - php artisan storage:link 
	6. Limpiar Cache
       - php artisan config:cache
    7. Generar llave 
		- php artisan key:generate
	8. Correr app servidor
		- php artisan serve
