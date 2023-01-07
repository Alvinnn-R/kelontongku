# Mini Project : Laravel 8 Web Programming CAMP404

My name Alvin Rama Saputra, ID : C4221137283.

This is my Project Kelontongku (mini supermarket), make with laravel 8 and bootstrap

## How to use
#### Git Clone or Download this Repository and Change Directory
- **Clone**
```
git clone https://github.com/Alvinnn-R/kelontongku.git
```
- **Change Directory**
```
cd kelontongku
```

#### Install Composer
```
composer install
```
#### Npm 
```
npm install && npm run dev
```

#### Create a copy of your .env file
```
cp .env.example .env
```
#### Generate an app encryption key
```
php artisan key:generate
```
#### Set up Database
- **setup database**
open file .env change everythings do you need
```
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=db_kelontongku
DB_USERNAME=root
DB_PASSWORD=
```
- **make a database, the name is db_kelontongku or somethings else,**
make sure the name of database same as DB_DATABASE=

#### Migrate Database and Load the Seeder
```
php artisan migrate --seed
```

#### Run Serve
```
php artisan serve
```

## Available user for test
- **admin**
- - > admin@gmail.com
- - > password123
- **user**
- - > ahmad@gmail.com
- - > password123
