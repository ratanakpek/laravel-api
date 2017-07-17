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

```
# Personal access client created successfully.
Client ID: 1
Client Secret: d0LL0zmcga2jijvCfKmhYJE4ZTVChkmMKhxrmBUj

# Password grant client created successfully.
Client ID: 2
Client Secret: sSB3UHu9t9tEfCAPwgLJBuI3unQhPDGUjp6xdE3B
```