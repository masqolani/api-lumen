# api-lumen
Create queue in lumen
# How to created
- install lumen 
- Create APP_KEY in http://www.unit-conversion.info/texttools/random-string-generator/ 
- Composer install / update
- Add env file QUEUE_DRIVER=database
- Create migration table jobs | php artisan make:migration jobs_table
- Migrate table | php artisan migrate
- Install composer require mpclarkson/freshdesk-laravel
- Uncomment withfacades in boostrap app
- Add provider class_alias('Mpclarkson\Laravel\Freshdesk\FreshdeskFacade', 'Freshdesk'); in boostrap app
- Call provider with $app->register(Mpclarkson\Laravel\Freshdesk\FreshdeskServiceProvider::class); in boostrap app
- Create ApiController
- Create model Tickets in app
- Create jobs CreateTicketFromTask
- run | php artisan queue:work

***Dont forget to create table ticket
