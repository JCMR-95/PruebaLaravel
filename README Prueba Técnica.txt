//Migraciones

php artisan make:migration create_files_table

//Seeders

php artisan make:seeder FileSeeder
php artisan make:seeder UserSeeder
php artisan db:seed --class=FileSeeder
php artisan db:seed --class=UserSeeder