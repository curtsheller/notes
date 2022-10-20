# MySQL

## Step 1:Install
```
sudo apt install mysql-server
sudo systemctl start mysql.service
```

## Step 2: Configuring MySQL

**Warning:* As of July 2022, an error will occur when you run the mysql_secure_installation script without some further configuration. The reason is that this script will attempt to set a password for the installation’s root MySQL account but, by default on Ubuntu installations, this account is not configured to connect using a password.

```
sudo mysql
ALTER USER 'root'@'localhost' IDENTIFIED WITH mysql_native_password BY 'password';
exit
```

Following that, you can run the `mysql_secure_installation` script without issue.

```
sudo mysql_secure_installation
```

Once the security script completes, you can then reopen MySQL and change the root user’s authentication method back to the default, `auth_socket`. To authenticate as the root MySQL user using a password, run this command:

This will mean that you can once again connect to MySQL as your root user using the sudo mysql command.

```
mysql -u root -p
```

```
```

#### Links
- [How To Install MySQL](https://www.digitalocean.com/community/tutorial_collections/how-to-install-mysql)
    - [How To Install MySQL on Ubuntu 22.04](https://www.digitalocean.com/community/tutorials/how-to-install-mysql-on-ubuntu-22-04) &bull; This is the best tutorial so far. Deals with the

- [*Laravel Sail** &#128279;](https://laravel.com/docs/9.x/sail) &bull; Laravel Sail is a light-weight command-line interface for interacting with Laravel's default Docker development environment. Sail provides a great starting point for building a Laravel application using PHP, MySQL, and Redis without requiring prior Docker experience. **Laravel Sail** is supported on macOS, Linux, and Windows (via WSL2).



