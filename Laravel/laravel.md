# Install on Linux

- [**Install Laravel In Ubuntu 20.04 “LTS”** -->](http://www.linuxandubuntu.com/home/install-laravel-in-ubuntu-20-04-lts) &bull;
- [**How to install Laravel on Ubuntu 20.04? =>**](https://www.osradar.com/install-laravel-ubuntu-2004/)

# Required PHP Extensions

```
 $ sudo apt install php-bcmath
 $ sudo apt install php-ctype
 $ sudo apt install php-json
 $ sudo apt install php-mbstring
 $ sudo apt install php-xml
 $ sudo apt install php-tokenizer
 $ sudo apt install php-zip
```

## Enable PHP fileinfo extension in Ubuntu

```
$ sudo nano /etc/php/7.4/apache2/php.ini
```
-   Press ctrl + w and search for **fileinfo**. Remove the semi-colon to enable the extension.
-   Press ctrl + w and search for **openssl**. Remove the semi-colon to enable the extension.

Follow the rest of the instruction on [**Install Laravel In Ubuntu 20.04 “LTS”** -->](http://www.linuxandubuntu.com/home/install-laravel-in-ubuntu-20-04-lts)
# Deploy Laravel Project On Live Server
- [**Deploy Laravel Project On Live Server - Digital Ocean** =>](https://youtu.be/ww_oVrL9ohA)

## Commands

```
sudo apt install -y nginx

sudo apt install -y php8.0-fpm php8.0-cli php8.0-mcrypt php8.0-gd php8.0-mysql php8.0-pgsql php8.0-imap php8.0-memcached php8.0-mbstring php8.0-xml php8.0-curl php8.0-bcmath php8.0-sqlite3 php8.0-xdebug php8.0-ctype php8.0-zip

php composer-setup.php --filename=composer --install-dir=/usr/bin

sudo adduser laravel
usermod -aG sudo laravel

vi /etc/php/8.0/fpm/pool.d/www.conf
sudo service php8.0-fpm restart

sudo apt install mysql-server -y
sudo mysql_secure_installation
mysql -u root -p

CREATE DATABASE laravel_db;
CREATE USER 'laravel_user'@'localhost' IDENTIFIED BY 'password';
GRANT ALL PRIVILEGES ON laravel_db.* TO 'laravel_user'@'localhost';
FLUSH PRIVILEGES;
```
