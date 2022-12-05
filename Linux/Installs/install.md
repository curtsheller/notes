# Pop!_os Setup Notes, Links, and Guides

## Install Updates, Upgrades

A lot of programs/apps can be install from the Pop!_Shop when needed.

Command Line (CLI) only packages are installed using, the CLI. Web Development, PHP, Meilisearch, SQLites, MySQL, Redis, etc&helipp; can be installed using `apt`.

## Updates and Upgrade
```bash
    sudo apt update
    sudo apt upgrade -y
```

```bash
    sudo apt dist-upgrade
```
### Clean Up

```bash
    sudo apt autoremove
    sudo apt autoclean
```
### Firmware
```bash
    sudo fwupdmgr get-devices
    sudo fwupdmgr get-updates
    sudo fwupdmgr update
```

### Flatpak

```bash
    flatpak update
```

### Recovery Partition

```bash
    sudo pop-upgrade recovery upgrade from-release # this updates the recovery partition
```

### Reboot

```bash
    sudo reboot now
```

## Set hostname

```bash
    hostnamectl set-hostname precision
```

## Keyboard Shortcuts

- IChange “Settings” to “Super+I”
- Add shortcut to open “gnome-system-monitor” with “Super+Backspace”

# Install Apps

A lot of apps can be installed from the Pop!_Shop. However the command-line is faster and the installs can be scripted and automated.

```bash
    sudo apt install neofetch
```

# Security Steps with Yubikey
```bash
    sudo apt install -y yubikey-manager yubikey-personalization # some common packages
```

## Insert the yubikey

```bash
    ykman info # your key should be recognized
```

See for [mutschler.dev &dArr;](https://mutschler.dev/linux/pop-os-post-install/#set-hostname) mote commands and information.


## Apps
## Font Manager

```bash
    flatpak install flathub org.gnome.FontManager
```

## Markdown Editors

### Aposthrope

- [Apostrophe](https://gitlab.gnome.org/World/apostrophe)
```bash
    flatpak install flathub org.gnome.gitlab.somas.Apostrophe
```

### MarkText

```bash
    flatpak install flathub com.github.marktext.marktext
```

# Development
## Terminal
### Z Shell (ZSH)
**Z Shell (ZSH)** does not differ very much from bash when it comes to scripting. It runs scripts the same way that bash does. This is to be expected, as zsh is intended to be a drop-in replacement for bash in most cases.

Default shell on mac OS.

```bash
    sudo apt install zsh
```
### Oh-My-ZSH
[**Oh-My-ZSH** &#128279;](https://ohmyz.sh/) is an excellent tool for managing your ZSH configuration. Install it using the following command:

```bash
    sh -c "$(curl -fsSL https://raw.github.com/ohmyzsh/ohmyzsh/master/tools/install.sh)"
```


#### Resources &amp; Links
- [CSP Notes: **Terminal** &#128279;](https://learningukulele-dev.com/terminal#Zsh)
- [**Starship** &ndash; CROSS-SHELL PROMPT &#128279;](https://starship.rs/) &bull; The minimal, blazing-fast, and infinitely customizable prompt for any shell!
- [**Nerd Font**  &#128279;](https://www.nerdfonts.com/)

## git Configuration
```bash
    git config --global user.name "Curt Sheller"
    git config --global user.email curt@curtsheller.com
```

## Coding Editors
### Sublime Text & Sublime Merge

#### Install Text
```bash
    wget -qO - https://download.sublimetext.com/sublimehq-pub.gpg | \
    gpg --dearmor | sudo tee /etc/apt/trusted.gpg.d/sublimehq-archive.gpg
    # Stable
    echo "deb https://download.sublimetext.com/ apt/stable/" | \
    sudo tee /etc/apt/sources.list.d/sublime-text.list

    sudo apt update
    sudo apt install sublime-text
```
#### Install Merge
```bash
    wget -qO - https://download.sublimetext.com/sublimehq-pub.gpg | \
    sudo apt-key add -
    sudo apt-get install apt-transport-http
    # Stable
    echo "deb https://download.sublimetext.com/ apt/stable/" | \
    sudo tee /etc/apt/sources.list.d/sublime-text.list

    sudo apt apdate
    sudo apt install sublime-merge
```

License in in Bitwarden.

#### Resources &amp; Links
- [Sublime Text &#128279;](https://www.sublimetext.com/) &bull; Text editor
- [Sublime Merge  &#128279;](https://www.sublimemerge.com//) &bull; git client.

### VS Code Option
- [VSCodium &#128279;](https://github.com/VSCodium/vscodium) &bull; Build script.

### NodeJS
```bash
    curl -sL https://deb.nodesource.com/setup_14.x | sudo -E bash -
    sudo apt install -y nodejs npm
```

Run `node --version` to see the version.

### Laravel & Composer

#### Composer Install
- ~/Documents/Notes/Development/PHP/Composer.md

### Postman
**Postman** can be installed in one of three ways. The easiest is to open the **Pop!_Shop** and install Postman using the GUI.

```bash
    sudo flatpak remote-add --if-not-exists flathub https://flathub.org/repo/flathub.flatpakrepo
    sudo flatpak install flathub com.getpostman.Postman
```

## Other Apps
Skype, ZOOM, VLC, Multimedia Codecs, OBS

```bash
    flatpak install -y skype
    flatpak install -y zoom
    sudo apt install -y vlc
    sudo apt install -y libavcodec-extra libdvd-pkg; sudo dpkg-reconfigure libdvd-pkg
    sudo apt install -y obs-studio
```

## Pop!_os Setup Guides

- [flamedfury.com &#128279;
;](https://flamedfury.com/guides/pop-os-setup/)
- [mutschler.dev &#128279;](https://mutschler.dev/linux/pop-os-post-install/#set-hostname)
- &starf; [Pop!_OS 20.04 Setup for Web Developers &#128279;](https://github.com/erik1066/pop-os-setup)
- [Pop!_OS Setup Script &#128279;](https://github.com/TechnologyMan101/pop-os-setup-script) &bull; Bash script to set up a fresh install of Pop!_OS.

