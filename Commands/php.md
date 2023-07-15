# php

## Commands

```
php -v		# php version 
php -v		# Usage options. 
php -m 	# List modules
which php	# Current php being used

```
- [Install PHP with Apache on Ubuntu &rArr;](https://phoenixnap.com/kb/install-php-on-ubuntu)

## Install PHP with Apache on Ubuntu
```
sudo apt update && sudo apt upgrade
sudo apt install software-properties-common
sudo add-apt-repository ppa:ondrej/php # see below for variants
sudo apt update

sudo apt -y install php8.1	# if fails `sudo apt -y install libapache2-mod-php<version>`

php -v
```
## Install PHP with Nginx on Ubuntu

If using `valet`, no need for the `nginx` install as `nginx` is valet's server.

```
sudo apt update && sudo apt upgrade
sudo add-apt-repository ppa:ondrej/php
sudo apt install php8.1-fpm -y
sudo systemctl restart nginx

sudo systemctl restart nginx

php -v
```

## PHP `ini` File

## MySQL &amp; SQLite

```
sudo apt-get install -y php8.1-mysql
sudo apt install php8.1-sqlite3
```
## curl

```zsh
    sudo apt-get install php8.1-curl
    # or
    sudo apt-get install php-curl
```

#### Links &amp; Resources

- [php &rarr;](https://)

----
****Curt Sheller Publications**/**Funky Frets • **CSP**: Pottstown, PA 19464 USA, **FF**: Boyertown, PA 19512 USA • [curt@curtsheller.com](mailto:curt@curtsheller.com) [UPDATED: **2023-07-15**]
