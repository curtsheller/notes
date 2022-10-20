# MySQL


`mysql -u root -p`


* All MySQL commands end with a semicolon; if the phrase does not end with a semicolon, the command will not execute.
* Also, although it is not required, MySQL commands are usually written in uppercase and databases, tables, usernames, or text are in lowercase to make them easier to distinguish. However, the MySQL command line is not case sensitive.


# Commands


## Version


```
$ mysqld --version
$ mysqladmin -V
```


## Start MySQL


`$ MySQL`


## Create / Show
```
$ SHOW DATABASES;
$ CREATE DATABASE database name;
```


## Connect to Remote Server
`$ mysqladmin  -h 172.16.25.126 -u root -p`


## Password Policies


```
SET GLOBAL validate_password.policy = 0;   // For LOW
SET GLOBAL validate_password.policy = 1;   // For MEDIUM
SET GLOBAL validate_password.policy = 2;   // For HIGH
```


# Links
* MySQL on Linux (Beginners Tutorial) - https://likegeeks.com/mysql-on-linux-beginners-tutorial/
* Accessing MySQL Databases from Linux - https://docs.cs.cf.ac.uk/notes/accessing-mysql-from-linux/
* https://www.digitalocean.com/community/tutorials/a-basic-mysql-tutorial
* https://www.sumitbera.com/how-to-import-and-export-database-in-mysql-using-terminal/
* https://linuxize.com/post/how-to-check-mysql-version/
* How to Connect to MySQL Without Root Password on Terminal - https://www.tecmint.com/connect-to-mysql-without-root-password/
* 20 MySQL (Mysqladmin) Commands for Database Administration in Linux - https://www.tecmint.com/mysqladmin-commands-for-database-administration-in-linux/
* Improve your database knowledge with this MariaDB and MySQL cheat sheet - https://opensource.com/article/20/10/mariadb-mysql-cheat-sheet

## MySQL Backup and Restore Commands for Database Administration
* https://www.tecmint.com/mysql-backup-and-restore-commands-for-database-administration/

