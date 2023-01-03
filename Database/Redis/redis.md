# Redis

Redis is an open source (BSD licensed), in-memory **data structure store** used as a database, cache, message broker, and streaming engine.

#### Resources &amp; Links

- redis
  - [Installing Redis](https://redis.io/docs/getting-started/installation/)
  - [DigitalOcean: **How To Install and Secure Redis on Ubuntu 22.04** &#128279;](https://www.digitalocean.com/community/tutorials/how-to-install-and-secure-redis-on-ubuntu-22-04)
  - [**How to Install and Configure Redis on Ubuntu 22.04** &#128279;](https://itslinuxfoss.com/install-configure-redis-ubuntu-22-04/)

## Install &amp; Running

- [Redis command line interface - CLI]([Redis CLI | Redis](https://redis.io/docs/manual/cli/))

```
sudo apt install redis-server
sudo systemctl status redis
```

## Check If Running

```
redis-cli ping
```

Returns: `PONG`

## Laravel / PHP

```
sudo apt-get install php-redis
```
