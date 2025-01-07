# Composer

PHP **Composer** is used for install required dependencies for the PHP application. Execute the following commands to install and configure Composer on your system.

- [**Download Composer** &#128279;](https://getcomposer.org/download/)

```sh
    php -r "copy('https://getcomposer.org/installer', 'composer-setup.php');"
    php -r "if (hash_file('sha384', 'composer-setup.php') === '55ce33d7678c5a611085589f1f3ddf8b3c52d662cd01d4ba75c0ee0459970c2200a51f492d557530c71c15d8dba01eae') { echo 'Installer verified'; } else { echo 'Installer corrupt'; unlink('composer-setup.php'); } echo PHP_EOL;"
    php composer-setup.php
    php -r "unlink('composer-setup.php');"
```

Move composer for global access
add composer to $PATH variable

```sh
sudo mv composer.phar /usr/local/bin/composer
```

Use Composer
```sh
    composer
```

```sh
    composer clear-cache
    rm -rf vendor/*
    composer install
```

#### Links
-   [**Laravel Sail** &#128279;](https://laravel.com/docs/9.x/sail) &bull; Laravel Sail is a light-weight command-line interface for interacting with Laravel's default Docker development environment. Sail provides a great starting point for building a Laravel application using PHP, MySQL, and Redis without requiring prior Docker experience. **Laravel Sail** is supported on macOS, Linux, and Windows (via WSL2).
