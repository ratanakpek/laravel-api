https://laravel.com/docs/5.4/passport

# Install Laravel Passport
```
composer require laravel/passport
```

# Register service provider : config/app.php
```
Laravel\Passport\PassportServiceProvider::class,
```

# Configure database and Migrate data
```
mysql -uravuthz -p -e "create database laravel_api";

php artisan migrate

php artisan passport:install
```

# Test Passport
```
php artisan migrate:refresh --seed

php artisan passport:install
```

```
Personal access client created successfully.
Client ID: 1
Client Secret: CThqzAa4t95dZrLuFLv0YyZTV7bMiLAg2lGceHf9

Password grant client created successfully.
Client ID: 2
Client Secret: Qt8Xd2IjMjp5FOzB63TzQ3rIgOxRlahcQmqQVoU3
```

# Run by CURL
```
curl -X POST \
  https://laravel54-ravuthz.c9users.io/oauth/token \
  -H 'accept: application/json' \
  -H 'cache-control: no-cache' \
  -H 'content-type: application/x-www-form-urlencoded' \
  -d 'grant_type=password&client_id=2&client_secret=Qt8Xd2IjMjp5FOzB63TzQ3rIgOxRlahcQmqQVoU3&username=client1%40gm.com&password=123123'
```

# Run by Postman
```
--------------------------------------------------------
POST | https://laravel54-ravuthz.c9users.io/oauth/token
--------------------------------------------------------
Body : x-www-form-urlencoded
--------------------------------------------------------
grant_type : password
client_id : 2
client_secret : Qt8Xd2IjMjp5FOzB63TzQ3rIgOxRlahcQmqQVoU3
username : client1@gm.com
password : 123123
--------------------------------------------------------

```