# MySQL

#### Links

- [DigitalOcean: **How To Install MySQL on Ubuntu 22.04** &#128279;](https://www.digitalocean.com/community/tutorials/how-to-install-mysql-on-ubuntu-22-04)

## Install MySQL
```
$ sudo apt update
$ sudo apt install mysql-server
```

## Check Status

After finishing the installation, the MySQL service will start automatically. To check the service status.

```
$ sudo systemctl status mysql
```

Check version.
```
mysql --version
```
#### Response on Pop!_os
```
Ver 8.0.30-0ubuntu0.22.04.1 for Linux on x86_64 ((Ubuntu))
```
## Configure MySQL

### Secure MySQL Server

Before running `mysql_secure_installation` do the following:

```
sudo mysql
ALTER USER 'root'@'localhost' IDENTIFIED WITH mysql_native_password BY 'password';
exit
```
Now run:
```
$ sudo mysql_secure_installation
```

```
mysql -u root -p
ALTER USER 'root'@'localhost' IDENTIFIED WITH auth_socket;
```

Follow the prompts.

## Manage MySQL Service

```
$ sudo systemctl stop mysql
$ sudo systemctl start mysql
$ sudo systemctl restart mysql
$ sudo systemctl status mysql
```

#### Connect MySQL Server

You have successfully installed and secured the MySQL database server on your Ubuntu 20.04 system. Now connect to your database server on command line with the following command.

```
$ mysql -u root -p
```

#### Create MySQL User and Database

```
CREATE DATABASE mydb;

CREATE USER 'myuser'@'localhost' IDENTIFIED by 'Pa$$w0rd';

GRANT ALL on mydb.* to 'myuser'@'localhost';

FLUSH PRIVILEGES;
```

## REsoruces, Notes &amp; Links

-   TecAdmin.net: [**How to Install Latest phpMyAdmin on Ubuntu 20.04** -->](https://tecadmin.net/install-phpmyadmin-ubuntu-20-04/)

* https://www.digitalocean.com/community/tutorials/a-basic-mysql-tutorial
* https://www.sumitbera.com/how-to-import-and-export-database-in-mysql-using-terminal/
* https://linuxize.com/post/how-to-check-mysql-version/
* How to Connect to MySQL Without Root Password on Terminal - https://www.tecmint.com/connect-to-mysql-without-root-password/
* 20 MySQL (Mysqladmin) Commands for Database Administration in Linux - https://www.tecmint.com/mysqladmin-commands-for-database-administration-in-linux/
* Improve your database knowledge with this MariaDB and MySQL cheat sheet - https://opensource.com/article/20/10/mariadb-mysql-cheat-sheet
*
MySQL Backup and Restore Commands for Database Administration
* https://www.tecmint.com/mysql-backup-and-restore-commands-for-database-administration/
