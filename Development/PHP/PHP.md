# PHP

- [How to install PHP extensions on Linux &#128279;](https://www.hostzealot.com/blog/how-to/how-to-install-php-extensions-on-linux)

## Install the latest version of **PHP**.

```
sudo apt install zip unzip software-properties-common
sudo add-apt-repository ppa:ondrej/php
sudo apt install -y php8.1 php8.1-gd php8.1-mbstring php8.1-xml php-zip
```

CAVEATS:
1. If you are using php-gearman, you need to add ppa:ondrej/pkg-gearman
2. If you are using apache2, you are advised to add ppa:ondrej/apache2
3. If you are using nginx, you are advised to add ppa:ondrej/nginx-mainline or ppa:ondrej/nginx


## PHP Commands

```sh
php --ini`      #- See what extension are running.
`php -i`        #- See what php.ini file is loaded.
`php -m`        #- See what PHP Modules are installed.
`conposer show -p`
```

`sudo apt install php8.2-curl`
```sh
sudo apt install php-[extname]

sudo apt install \
php-curl \
php-gd \
php-json \
php-mbstring \
php-mbstring \
php-mysql \
php-tokenizer \
php-xml \
php-zip

sudo apt install php8.1-soap     # Needed for some Laravel packages.
```

#### Links

- [*Laravel Sail** &#128279;](https://laravel.com/docs/9.x/sail) &bull; Laravel Sail is a light-weight command-line interface for interacting with Laravel's default Docker development environment. Sail provides a great starting point for building a Laravel application using PHP, MySQL, and Redis without requiring prior Docker experience. **Laravel Sail** is supported on macOS, Linux, and Windows (via WSL2).
