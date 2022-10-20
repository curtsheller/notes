# Redis

## Install Redis on Ubuntu

- https://thelinuxgurus.com/how-to-install-redis-on-ubuntu/

**Redis** server packages are available on default Ubuntu repositories, so we are not required to install any official or 3rd party repos on the system. So just perform a repos update,

```
$ sudo apt update
```
& then install redis on ubuntu with the following command,

```
$ sudo apt install redis
```
Once the redis has been installed on server, we can start the server with the following command,

```
$ sudo systemctl start redis
```
Testing Redis installation

We can now check if the redis has been installed by running the following command,

```
$ redis-cli --version
```

We can also connect to the installed redis server with the following command,

```
$ redis-cli
```

then check the response to ping command for redis,

```
redis > PING
```

In response, we should get PONG as output.


```
sudo systemctl restart redis
```