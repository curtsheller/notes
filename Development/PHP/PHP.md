# PHP
- [How to install PHP extensions on Linux](https://www.hostzealot.com/blog/how-to/how-to-install-php-extensions-on-linux)

Install the latest version of PHP 8.1.

```
sudo apt install zip unzip software-properties-common
sudo add-apt-repository ppa:ondrej/php
sudo apt install -y php8.1 php8.1-gd php8.1-mbstring php8.1-xml php-zip
sudo apt install php-curl
```
```
sudo apt install php-[extname]

sudo apt install \
php-curl \
php-gd \
php-json \
php-mbstring \
php-mbstring \
php-mysql \
php-tokenizer \
php-xml \
php-zip

sudo apt install php8.1-soap
```


Was able to install valet after this.
