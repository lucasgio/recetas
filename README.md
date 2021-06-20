<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400"></a></p>

<a href="https://ibb.co/xgP9GhV"><img src="https://i.ibb.co/qgXq9Bb/recetas.png" alt="recetas" border="0"></a>

<a href="https://ibb.co/D4NsbRX"><img src="https://i.ibb.co/VVdrNqy/recetas1.png" alt="recetas1" border="0"></a>

<a href="https://ibb.co/jZJZ1Kz"><img src="https://i.ibb.co/wrcrxH7/rectas2.png" alt="rectas2" border="0"></a>
<a href="https://ibb.co/p4BTKmG"><img src="https://i.ibb.co/dkwvph1/rectas3.png" alt="rectas3" border="0"></a>

<h3>Recetas</h3>
<h6>Repositorio de recetas</h6>
<p>
  Recetas es una aplicación construida con Laravel MVC.
  Tipo repositorio de recetas donde un usuario puede crearse una cuenta y añadir y editar nuevas recetas, las misma puede ser votadas por otros usuarios.  
</p>

<h6>Directorio de la aplicacion</h6>
<ul>
    <li>/resource [Vistas - Archivos js - scss - Componentes de Vuejs]</li>
    <li>/app  [Controllers - Model - Providers ]</li>
    <li>/database [Migrations - Seeders]</li>
</ul>

<h6>Proceso de Instalación</h6>
<p>Descargar el proyecto para tu pc local https://github.com/lucasgio/recetas.git</p>




    1. Generar migraciones 
        - php artisan migrate --seed Categoria
    2. Dar permiso al local storage
   	    - php artisan storage:link 
    3. Limpiar Cache
        - php artisan config:cache
    4. Generar llave 
        - php artisan key:generate
    5. Correr app servidor
        - php artisan serve
