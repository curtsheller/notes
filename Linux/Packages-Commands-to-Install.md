# Setting Up Dev Computer

( *As of 2020* ) **Using Pop!\_OS on System76 Thelio Computer for all web development.**

These are all the pagkages and application that need to be on the dev computer. Some are available on **Pop!\_Shop**. Hopefully, ALL can be scripted to install with a script.

Lot of notes are at: [**curtsheller-dev.com** &Rarr;](https://curtsheller-dev.com/audio)

## Packages to Install

- [x] **jq** • JSON processor.
- [x] **neofetch** • A command-line system information tool written in bash 3.2+ [gihub page  &Rarr;](https://github.com/dylanaraps/neofetch)
- [x] **pdftoppm** • Part of the **poppler** / **poppler-utils** / **poppler-tools** package.
	- [Images: Export, Conversion](../../Commands/Linux/PDF,%20Images,%20Graphics/Images_%20Export,%20Conversion.md)
- [ ] [**xclip**  &Rarr;](https://github.com/astrand/xclip/blob/master/INSTALL) &bull; Install from source.
- [ ] [**ffmpeg**  &Rarr;](https://ffmpeg.org/) &bull;
- [ ] [**v4l2loopback-utils** &Rarr;](https://github.com/umlaeute/v4l2loopback) &bull; 
	- **v4l2loopback-dkms**
- [**qjackctl** &Rarr;](https://curtsheller-dev.com/audio#Jack)
	- [**pulseaudio-module-jack** &Rarr;](https://curtsheller-dev.com/audio#Jack)

### sudo Commands for above installs
```
  sudo apt-get install jq
  sudo apt install poppler-utils
  sudo apt install neofetch
  sudo apt install ffmpeg
  sudo apt install v4l2loopback-dkms
  sudo apt install v4l2loopback-utils
  sudo apt install qjackctl
  sudo apt install pulseaudio-module-jack
```

## Applications to Install

### MegaSync
- **megacmd**
	- megasync

Download the package and, in a terminal, install it with:
1. [Download MEGA CMD &Rarr;](https://mega.nz/cmd)
2. `sudo apt install /home/curtsheller/Downloads/megacmd-xUbuntu_21.04_amd64.deb`

TODO: Figure out how to doad load using command line.
- https://mega.nz/linux/MEGAsync/

### NordVPN
- [**NordVPN** &Rarr;](https://nordvpn.com)
```
 sh <(curl -sSf https://downloads.nordcdn.com/apps/linux/install.sh)
```
- **OBS**
	- obs-studio
	- [**obs-ndi** &Rarr;](https://github.com/Palakis/obs-ndi/releases)

## Dev Tools
- **Sublime Text**, **Sublime Merge** &bull; These can be installed from the **Pop\!_shop** or [**CLI** &Rarr;](http://www.sublimetext.com/docs/linux_repositories.html#apt)
```
  wget -qO - https://download.sublimetext.com/sublimehq-pub.gpg |   sudo apt-key add -
  sudo apt-get install apt-transport-https
  # Stable
  echo "deb https://download.sublimetext.com/ apt/stable/" | sudo tee /etc/apt/sources.list.d/sublime-text.list
  # Dev
  echo "deb https://download.sublimetext.com/ apt/dev/" | sudo tee /etc/apt/sources.list.d/sublime-text.list

  sudo apt install sublime-text
  sudo apt install sublime-merge
```

**Note:** *Licenses are in Bitwarden*

### Database Tools

#### TablePlus
````
# Add TablePlus gpg key
wget -qO - http://deb.tableplus.com/apt.tableplus.com.gpg.key | sudo apt-key add -

# Add TablePlus repo
sudo add-apt-repository "deb [arch=amd64] https://deb.tableplus.com/debian tableplus main"

# Install
sudo apt update
sudo apt install tableplus
````

- dbBeaver
- Beekeper Studio


## Terminal

### Starship
- [ ]  [**starship - Cross-shell Prompt** &Rarr;](https://starship.rs/) • The minimal, blazing-fast, and infinitely customizable prompt for any shell!
- [ ]  
#### Prerequisites

A [**Nerd Font** &Rarr;](https://www.nerdfonts.com/)  installed and enabled in your terminal (for example, try the [**Fira Code Nerd Font**  &Rarr;](https://www.nerdfonts.com/font-downloads)

#### Install & Update
```
  sh -c "$(curl -fsSL https://starship.rs/install.sh)"
```
Update will no touch config
## Cameras, Audio
- [ ] [**v4l-utils** ⇒](https://git.linuxtv.org/v4l-utils.git/)
- [ ] [**guvcview** ⇒](http://guvcview.sourceforge.net/) • GTK+ UVC Viewer, in guvcview

## Languages
- **php 8** • 

## Laravel
- [ ] PHP [**How to Install PHP on Any Server** (Linux, macOS, Windows) &Rarr;](https://kinsta.com/blog/install-php/) &bull; brew can install php. Valet can switch php versions.
- [ ] composer


```
  # Install composer
  # https://getcomposer.org
  echo "Installing php composer..."

  php -r "copy('https://getcomposer.org/installer', 'composer-setup.php');"
  php -r "if (hash_file('sha384', 'composer-setup.php') === '906a84df04cea2aa72f40b5f787e49f22d4c2f19492ac310e8cba5b96ac8b64115ac402c8cd292b8a03482574915d1a8') { echo 'Installer verified'; } else { echo 'Installer corrupt'; unlink('composer-setup.php'); } echo PHP_EOL;"
  php composer-setup.php
  php -r "unlink('composer-setup.php');"

  # Move composer for global access
  # add composer to $PATH variable

  sudo mv composer.phar /usr/local/bin/composer


```


- [ ] npm/node
- [ ] yarn

- [ ] [**Valet** ⇒](https://curtsheller-dev.com/laravel) • Getting Laravel Valet Working on Linux.

### Database Tools Specific for Laravel [Curtshelelr-dev.com Notes &Rarr;](https://curtsheller-dev.com/laravel)
- [ ] Invoker
- [ ] Ray

### Databases and Search
for local. Production is handled by Laravel forge.
- [ ] **MeiliSearch** &bull; For best performance, compile MeiliSearch on the machine you intend to run it on. This way, the binary is optimized for your specific architecture.

- [ ] **MySQL**
- [ ] **sqlite3**
- [ ] **Redis**

### Terminal Commands
```
  # Install node Using Ubuntu
  echo "Installig node.js..."
  sudo apt install nodejs

  # Yarn
  echo "Installig yarn..."
  npm install --global yarn

  # PHP: Install the latest version of PHP 
  #      along with several extensions
  echo "Installing PHP..."
  sudo apt install php
  
  # Install PHP using ppa 
  #sudo add-apt-repository ppa:ondrej/php
  #sudo apt install php7.4
  #sudo apt install php8

  # Valet Specific Dependencies
  sudo apt-get install xsel
  sudo apt-get install libnss3-tools
  
  # nginx server
  sudo apt install nginx

  # Install MeiliSearch
  curl -L https://install.meilisearch.com | sh

  # Install sqlite3
  sudo apt install sqlite3
  
  # Install MySQL Server
  sudo apt install mysql-server
  sudo mysql_secure_installation

  # Install Redis from source
  wget http://download.redis.io/redis-stable.tar.gz
  tar xvzf redis-stable.tar.gz
  cd redis-stable
  make

  # Move REdis
  sudo cp src/redis-server /usr/local/bin/
  sudo cp src/redis-cli /usr/local/bin/

```


# Starting Things up After Installs

```
  # Launch MeiliSearch
  ./meilisearch

  # Fire up Redis
  redis-server
```
