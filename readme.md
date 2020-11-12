## API RestFul

[![Latest Stable Version](https://poser.pugx.org/queopius/marketplace/v)](//packagist.org/packages/queopius/marketplace) [![Total Downloads](https://poser.pugx.org/queopius/marketplace/downloads)](//packagist.org/packages/queopius/marketplace) [![Latest Unstable Version](https://poser.pugx.org/queopius/marketplace/v/unstable)](//packagist.org/packages/queopius/marketplace) [![License](https://poser.pugx.org/queopius/marketplace/license)](//packagist.org/packages/queopius/marketplace)

## Introducción

>Esta ApiRestful es el resultado de un estudo del Framework Laravel y muchos de sus paquetes. Una aplicación bastante completa que dejo a la disposición de todos los que quieran empezar un proyecto con un recogido ya realizado. 

## Fragmento


>Un pequeño fragmento del Policies en UserController;

       $this->middleware('can:view,user')->only('show');
       $this->middleware('can:update,user')->only('update');
       $this->middleware('can:delete,user')->only('destroy'); 



## Instalación

>#Recomendaciones*:
- Utilización del Laragon como servidor local (link de la página oficial https://laragon.org/download/), pero también pueden utilizar servidores como Xampp o Wamp.

1. **Proyecto**; Copie el proyecto con Git o descarga lo en tu ordenador y en el caso de que estés utilizando Laragon, llevártelo a la carpeta c:\laragon\wwww\'aqui' y click en **Recargar**, que está en el panel de control de Laragon. Hecho esto Laragon se encargará de preparar una url.

2. **Composer**;
> composer install

3. **Assets**;
>npm install      
npm run dev

 Si vas hacer una frecuente modificación en el css puedes dejar en la escucha continua con:
>npm run watch

4. **Base de datos**;
Es necesario *copia*r el contenido del archivo **.env.example**, abrir un nuevo archivo con nombre **.env** y *pegar* dentro. Luego rellenar los datos de la base de datos como DB_DATABASE, DB_USERNAME y DB_PASSWORD, lo mismo harás en el archivo de la carpeta *config/database*, los datos que pusiste en phpMyAdmin o cualquier base de datos los pondrá en los dos casos anteriores (.env y database).

5. **Migration**;
>php artisan migrate

6. **Seeders**;
>php artisan db:seed

7. **Key**;
Para realizar el login es mister que la Api contenga la KEY proporcionada de forma aleatoria y encriptada por el framework.
>php artisan key:generate 

## A disfrutar

## Credits
 - Laravel Framework - Taylor Otwell  
 
## License
 - GNU General Public License v3.0
