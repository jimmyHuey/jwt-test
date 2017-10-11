after you clone the project, just follow the step to start it.
1.composer install
2.npm install
3.cp .env.example .env
4.php artisan key:generate
5.php artisan migrate
6.php artisan db:seed --class=UserTableSeeder

ps.don’t forget to modify DB_DATABASE,DB_USERNAME,DB_PASSWORD on .env
