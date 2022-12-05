# Linux

## Laravel

### Links and Reference

-   [TechAdmin.net: **How to Install Laravel on Ubuntu 20.04** -->](https://tecadmin.net/install-laravel-ubuntu-20-04/)
-   [OSRadar: **How to install Laravel on Ubuntu 20.04?** -->](https://www.osradar.com/install-laravel-ubuntu-2004/)

## Installing the LAMP Stack

First update system to latest goodies and fixes.

```
$ sudo apt update
```

### Install PHP

Install the lastest version of PHP 7.4.

```
$ sudo apt install zip unzip software-properties-common
$ sudo add-apt-repository ppa:ondrej/php
$ sudo apt install -y php7.4 php7.4-gd php7.4-mbstring php7.4-xml php-zip
```

### Install Apache 2

```
$ sudo apt install apache2 libapache2-mod-php7.4
```

### Install MySQL

```
$ sudo apt install mysql-server
```

#### Check Status

After finishing the installation, the MySQL service will start automatically. To check the service status.

```
$ sudo systemctl status mysql
```

#### Secure MySQL Server

```
$ sudo mysql_secure_installation
```

### Install Composer

PHP **Composer** is used for install required dependencies for the PHP application. Execute the following commands to install and configure Composer on your system.

```
$ curl -sS https://getcomposer.org/installer | php
$ sudo mv composer.phar /usr/local/bin/composer
$ sudo chmod +x /usr/local/bin/composer
```
