# MySQL

#### Links

-   TecAdmin.net: [**MySQL on Ubuntu 20.04** -->](https://tecadmin.net/install-mysql-ubuntu-20-04/)

```
$ sudo apt update
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

Follow the prompts.

#### Manage MySQL Service

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

## Notes:

**phpMyAdmin** can be used to manage databases.

-   TecAdmin.net: [**How to Install Latest phpMyAdmin on Ubuntu 20.04** -->](https://tecadmin.net/install-phpmyadmin-ubuntu-20-04/)
