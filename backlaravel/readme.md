- composer update
- npm install
- make a copy of .env.example and rename it to .env
- php artisan key:generate => creates an APP_KEY
- create a local mysql database , and fill .env with DB variables

> DB_CONNECTION=mysql
> DB_HOST=127.0.0.1
> DB_PORT=3306
> DB_DATABASE=XXX (??)
> DB_USERNAME=XXX (root ?)
> DB_PASSWORD=XXX (root ?)

- php artisan make:migration --seed => creates tables and seeds them

