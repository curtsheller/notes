
# System Package Management
- repoman

# Terminal
Using ZShell and Star*.

- exa
- duf
- neofetch
- htop
- inotify-tools
- jq, json formatting
- ffmpeg

# Webcam
guvcview/jammy,now 2.0.7-2-1 amd64 [installed]

hardinfo/jammy,now 0.5.1+git20180227-2.1build1 amd64 [installed]

inotify-tools/jammy,now 3.22.1.0-2 amd64 [installed]

jackd2/jammy,now 1.9.20~dfsg-1 amd64 [installed]
jackd/jammy,jammy,now 5+nmu1 all [installed]
jamulus/jammy,now 3.8.1+dfsg1-1 amd64 [installed]
jackeq/now 0.5.9-3 amd64 [installed,local]
jq/jammy,now 1.6-2.1ubuntu3 amd64 [installed]


nordvpn-release/now 1.0.0 all [installed,local]
nordvpn/now 3.12.5 amd64 [installed,local]

# Fonts
- [curtsheller/fonts](//github.com/curtsheller/fonts)
- Operator Mono
- MBType Fonts
- fonts-powerline

# Dev (Languages and Tools)
- [Composer Install](https://learningukulele-dev.com/dev#Languages)
### Composer

- [Composer Install](https://learningukulele-dev.com/dev#Languages)

## PHP
Part of base system install
    - Additional libraries need for Laravel development.

### MeiliSearch
```
# Add Meilisearch package
sudo echo "deb [trusted=yes] https://apt.fury.io/meilisearch/ /" > /etc/apt/sources.list.d/fury.list

# Update APT and install Meilisearch
sudo apt update && sudo apt install meilisearch-http

# Launch Meilisearch
meilisearch
```

### Nginx
Installed with Valet
 ```
```
### Node
    - nodejs
### Redis
    - **redis**
### SQLite
    - **sqlite3**

### Apps (Pop!_shop)
    - **DB Browser for SQLite**
		- **Sequeler**

### MySQL
### Valet
### Yarn
The preferred way to manage Yarn is through [Corepack](https://nodejs.org/dist/latest/docs/api/corepack.html), a new binary shipped with all Node.js releases starting from 16.10. 

Corepack is included by default with all Node.js installs, but is currently opt-in. To enable it, run the following command:

```
```
- [Package Manager for dev projects](https://yarnpkg.com/)
# Images

### converseen
Image conversion app
- Pop!_shop
## gThumb 
Image viewer and organizer. Supports webp.
- Pop!_shop


### WebP Support

#### 22.04 LTS
```
sudo add-apt-repository ppa:helkaluin/webp-pixbuf-loader
sudo apt install webp-pixbuf-loader
```

#### 22.10
Now included in the Ubuntu archive for 22.10, meaning no PPA are required to get it.
```
sudo apt install webp-pixbuf-loader
```
Restart Nautilus, Eye of GNOME, and other GTK apps.

#### Resources & Links
- [How to See .WebP Images in Nautilus & Other GTK Apps](//www.omglinux.com/see-webp-images-in-nautilus-and-other-gtk-apps/)

# Backup and File Syncing

## Syncthing
    - Pop!_shop
### TimeShift
    - Pop!_shop

# Apps
### FileZilla** (_paid_)
   - Pop!_shop
### OBS
    - Pop!_shop
### TablePLus (_paid_)
  ```
# Add TablePlus gpg key
wget -qO - https://deb.tableplus.com/apt.tableplus.com.gpg.key | sudo apt-key add -

# Add TablePlus repo
sudo add-apt-repository "deb [arch=amd64] https://deb.tableplus.com/debian/22 tableplus main"

# Install
sudo apt update
sudo apt install tableplus
```

### Skype
    - Pop!_shop
### Sublime Text, Sublime Merge (_paid_)
sublime-merge/now 2071 amd64 [installed,local]
sublime-text/now 4126 amd64 [installed,local]

### VLC
    - Pop!_shop
### *Zoom**
   - Pop!_shop
# Troubleshooting

- **lm-sensors**
- **psensor**
- **memtester**
- **nvme-cli**
- **s-tui**
- **smartmontools**