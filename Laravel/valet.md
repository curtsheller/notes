# valet

- [Valet Linux](https://cpriego.github.io/valet-linux/)

## Install
### Requirements
#### Ubuntu (and derivates)

```
sudo apt install network-manager libnss3-tools jq xsel          # OS packages

php*-sqlite3 php*-mysql php*-pgsql                                  # Optional

sudo add-apt-repository -y ppa:nginx/stable                         # For `valet secure`
```


- Apache2 conflicts with valet Nginx. [Shows only default page in ubuntu using valet-linux](https://stackoverflow.com/questions/54489642/shows-only-default-page-in-ubuntu-using-valet-linux)

## Kill `sudo service apache2 stop`

```
sudo service apache2 stop
```

Trying to install **phpMyAdmin** local was not a good idea - it really screwed things. Better to just learn using the terminal for mysql.
