# PHP &amp; MySQL Support

### php.ini File Information

```
Configuration File (php.ini) Path => /etc/php/8.2/cli
Loaded Configuration File => /etc/php/8.2/cli/php.ini
Scan this dir for additional .ini files => /etc/php/8.2/cli/conf.d
Additional .ini files parsed => /etc/php/8.2/cli/conf.d/10-mysqlnd.ini,
```

### List All Available Modules (Extensions)

```
php -m
```

## Laravel 11 Server Requirements

- [Server Requirements &rArr;](https://laravel.com/docs/11.x/deployment#server-requirements) &bull; The Laravel framework has a few system requirements. You should ensure that your web server has the following minimum PHP version and extensions...
- [Install PHP and extensions for deploying a Laravel web application &rArr;](https://ejmastnak.com/tutorials/deploy-laravel/php/)

- PHP >= 8.2


- **Ctype** (_installed by default_)
- **Fileinfo** (_installed by default_)
- **PDO** (_installed by default_)
- **Tokenizer** (_installed by default_)


### Install using `apt`

```
# Show all PHP extensions available from apt.
# (Replace 8.1 with your PHP version if necessary (check with `php --version`)).
apt list | grep ^php8.2
```

- **cURL**
- **Mbstring**
- **XML**
- **DOM**
- **Filter**
- **Hash**
- **OpenSSL**
- **PCRE**
- **Session**

```
# Show ALL PHP extensions 
apt list | grep ^php8.2
```
```
# Show install PHP extensions 
apt list | grep ^php8.2.*installed
```


```
sudo apt-get install php-openssl php-pdo php-mbstring php-tokenizer php-xml

```
and depending on the installed composer packages there might be more.

- 

