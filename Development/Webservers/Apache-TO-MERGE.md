# Apache

## Start, Stop and Restart Apache on Ubuntu and Debian
- [**linuxize.com** =>>](https://linuxize.com/post/start-stop-restart-apache/)

### Start, Stop, Restart

To **start** the Apache service, execute the following command:

```
sudo systemctl start apache2
```

To **stop** the Apache service, execute the following command:

```
sudo systemctl stop apache2
```

Whenever you make changes to the Apache configuration, you need to **restart** the server processes. To restart the Apache service, run:

```
sudo systemctl restart apache2
```


### Status

```
sudo systemctl status apache2
```