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