# Pop!_os Setup Notes, Links, and Guides
&starf; &star; &starf; &star; &starf; &star; &starf; 
&spades; &clubs; &hearts; &diams;
&phone;
&flat; &sharp; &natural; &check; &cross; &amp; &hellip;
&lArr; &uArr; &rArr; &dArr;
&#128279; &bull;

## Install Updates, Upgrades

## Updates and Upgrade
```
sudo apt update
sudo apt upgrade
```

```
sudo apt dist-upgrade
```
### Clean Up
```
sudo apt autoremove
sudo apt autoclean
```
### Firmware
```
sudo fwupdmgr get-devices
sudo fwupdmgr get-updates
sudo fwupdmgr update
```
### Flatpak
```
flatpak update
```
### Recovery Partion
```
sudo pop-upgrade recovery upgrade from-release # this updates the recovery partition
```

### Reboot
```
sudo reboot now
```

## Set hostname
```
hostnamectl set-hostname precision
```

## Keyboard Shortcuts
- IChange “Settings” to “Super+I”
- Add shortcut to open “gnome-system-monitor” with “Super+Backspace”

# Install Apps
A lot of apps can be installed from the Pop!_Shop. However the command-line is faster and the installs can be scripted and automated.
```
sudo apt install \
neofetch \
gnome-tweaks \
chromium-browser \
```

# Security Steps with Yubikey
```
sudo apt install -y yubikey-manager yubikey-personalization # some common packages
```

## Insert the yubikey

```
ykman info # your key should be recognized
```

See for [mutschler.dev &dArr;](https://mutschler.dev/linux/pop-os-post-install/#set-hostname) mote commands and information.


## Apps
## Font Manager

```
flatpak install flathub org.gnome.FontManager
```

## Markdown Editors

### Aposthrope

- [Apostrophe](https://gitlab.gnome.org/World/apostrophe)
```
flatpak install flathub org.gnome.gitlab.somas.Apostrophe
```

### MarkText

```
flatpak install flathub com.github.marktext.marktext
```

# Development

## Z Shell (ZSH)

```
sudo apt install zsh
```

**Oh-My-ZSH** is an excellent tool for managing your ZSH configuration. Install it using the following command:

```
sh -c "$(wget https://raw.githubusercontent.com/robbyrussell/oh-my-zsh/master/tools/
install.sh -O -)"
```

## git Congifuration
```
git config --global user.name "Curt Sheller"
git config --global user.email curt@curtsheller.com
```

## Coding Editors
### SublimeText & Seublime Merge

```

```

### VS Code Option
- [VSCodium &#128279;](https://github.com/VSCodium/vscodium) &bull; Build script.

### NodeJS
```
curl -sL https://deb.nodesource.com/setup_14.x | sudo -E bash -
sudo apt install -y nodejs npm
```

Run `node --version` to see the version.

### Laravel & Composer

### Postman
**Postman** can be installed in one of three ways. The easiest is to open the **Pop!_Shop** and install Postman using the GUI.

```
sudo flatpak remote-add --if-not-exists flathub https://flathub.org/repo/flathub.flatpakrepo
sudo flatpak install flathub com.getpostman.Postman
```

## Other Apps
Skype, ZOOM, VLC, Multimedia Codecs, OBS

```
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

