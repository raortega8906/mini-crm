<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400"></a></p>

# Mini-CRM

Es un proyecto para gestionar empresas y sus empleados a través de un panel de administración. Este proyecto es basado en una publicación del blog de Laravel Daily, [How to Test Junior Laravel Developer Skills: Sample Project](http://laraveldaily.com/test-junior-laravel-developer-sample-project), es un proyecto de muestra para desarrolladores junior en Laravel.

### Objetivos
* [x] Autenticación básica de Laravel: capacidad de iniciar sesión como administrador.
* [x] Use semillas de base de datos (seed) para crear el primer usuario con el correo electrónico `admin@admin.com` y la contraseña `password`.
* [x] Funcionalidad CRUD (Create / Read / Update / Delete) para los dos elementos: Empresas y Empleados.
* [x] La tabla de BD de Empresas consta de estos campos:: Nombre (obligatorio), email, logotipo (mínimo 100×100), sitio web.
* [x] La tabla de BD de Empleados consta de estos campos: Nombre (obligatorio), apellido (obligatorio), empresa (llave foránea para empresas), email, teléfono.
* [x] Utilice migraciones de BD para crear los esquemas anteriores.
* [x] Almacene los logotipos de las. Empresas en la carpeta `storage/app/public` y hágalo accesible desde el público.
* [x] Use controladores de recursos (resource) básicos de Laravel con métodos predeterminados: index,  create, store, etc.
* [x] Usa la función de validación de Laravel, usando clases de solicitud (request).
* [x] Use la paginación de Laravel para mostrar. La lista de Empresas/Empleados, 10 entradas por página.
* [x] Use Laravel/UI como tema de diseño predeterminado basado en Bootstrap, pero elimine la capacidad de registro.

#### Objetivos adicionales
* [ ] Use la biblioteca Datatables.net para mostrar la tabla, sin representación del lado del servidor.
* [ ] Utilice un tema front-end más complicado como AdminLTE.
* [ ] Notificación por email: envíe un email cada vez que agregue una nueva empresa (use Mailgun or Mailtrap).
* [ ] Haga que el proyecto sea Multi-lenguaje (usando la carpeta `resources/lang`)
* [ ] Pruebas básicas con phpunit.

## Como instalar
Para ejecutar este demo es necesario que tenga instalado PHP, MySQL, Apache o Nginx. Para mas información, consulte las recomendaciones de [Laravel](https://laravel.com/docs/8.x).

### Pasos:
1. Clonar el repositorio : `git clone https://github.com/raortega8906/mini-crm.git`
2. `$ cd Mini-CRM`
3. `$ composer install`
4. `$ cp .env.example .env`
5. `$ php artisan key:generate`
6. Crear **BD en MySQL** o **SQLite**
7. **Credenciales de BD** en el archivo `.env`
8. `$ php artisan migrate --seed`
9. `$ php artisan serve`
10. Iniciar sesión con:
    - email : `admin@admin.com`
    - password : `password`

## Licencia
El proyecto es de código abierto.
