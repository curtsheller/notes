# Installed Linux Apps

## Apps and CLI Tools

- Apostrophe (flatpak install flathub org.gnome.gitlab.somas.Apostrophe)
- Authenticator (https://flathub.org/apps/details/com.belmoussaoui.Authenticator)

- Beekeeper Studio (https://flathub.org/apps/details/io.beekeeperstudio.Studio)
- Bitwarden (https://flathub.org/apps/details/com.bitwarden.desktop)
- BleachbBit (https://flathub.org/apps/details/org.bleachbit.BleachBit)
- Bottles (https://flathub.org/apps/details/org.bleachbit.BleachBit)
- Boxy (https://flathub.org/apps/details/com.boxy_svg.BoxySVG), Scalable Vector Graphics (SVG) editor
- Brave Browser (https://flathub.org/apps/details/com.usebottles.bottles), Run Windows software.

- Clonezilla
- Converseen
- Converter (https://flathub.org/apps/details/io.gitlab.adhami3310.Converter)
- composer (for php, laravel)
- CPU-X
- Chromium Web Browser (https://flathub.org/apps/details/org.chromium.Chromium)
- Curtail (compress images), https://flathub.org/apps/details/com.github.huluti.Curtail

- DBeaver (Community) (https://flathub.org/apps/details/io.dbeaver.DBeaverCommunity)
- DB Browser for SQLite (https://flathub.org/apps/details/org.sqlitebrowser.sqlitebrowser)
- Discord (https://flathub.org/apps/details/com.discordapp.Discord)

- expose (https://expose.dev/docs/introduction), for Laravel

- [**FFmpeg** &rArr;](https://ffmpeg.org/)
- Filezilla (https://flathub.org/apps/details/org.filezillaproject.Filezilla)
- Filezilla Pro
- Firefox (https://flathub.org/apps/details/org.mozilla.firefox)
- FontManager (flatpak install flathub org.gnome.FontManager)

- Gimp (https://flathub.org/apps/details/org.gimp.GIMP)

- Htop `sudo apt install neofetch`

- Invoker (https://beyondco.de/docs/invoker/welcome), for Laravel
- Inkscape (https://flathub.org/apps/details/org.inkscape.Inkscape)

- Jamulus (https://flathub.org/apps/details/io.jamulus.Jamulus)
- Joplin (https://flathub.org/apps/details/net.cozic.joplin_desktop)
- jq (https://stedolan.github.io/jq/),  `sudo apt install jq`

- Krita (https://flathub.org/apps/details/org.kde.krita)

- LibraOffice (https://flathub.org/apps/details/org.libreoffice.LibreOffice)

- Meld (https://flathub.org/apps/details/org.gnome.meld)
- Metr0nome (https://flathub.org/apps/details/com.adrienplazas.Metronome)
- Musescore (https://flathub.org/apps/details/org.musescore.MuseScore)

- neofetch `sudo apt install neofetch`
- [ngrok &rArr; ](https://ngrok.com/download), (curl -s https://ngrok-agent.s3.amazonaws.com/ngrok.asc | sudo tee /etc/apt/trusted.gpg.d/ngrok.asc >/dev/null && echo "deb https://ngrok-agent.s3.amazonaws.com buster main" | sudo tee /etc/apt/sources.list.d/ngrok.list && sudo apt update && sudo apt install ngrok)
- nodeJs, npm

- OBS Studio (https://flathub.org/apps/details/com.obsproject.Studio)

- PDF Arrange (https://flathub.org/apps/details/com.github.jeromerobert.pdfarranger)
- PDF Tricks (https://flathub.org/apps/details/com.github.muriloventuroso.pdftricks)
- Postman (https://flathub.org/apps/details/com.getpostman.Postman)
- [Psensor &rArr;](https://github.com/chinf/psensor) `sudo apt install psensor` optional `sudo apt install psensor-server`

- [QJackCtl &rArr;](https://jackaudio.org/)

- [Redis &rArr;](https://redis.io/)
	- [Install on Linux &rArr;](https://redis.io/docs/getting-started/installation/install-redis-on-linux/)
    - RedisInsight (https://flathub.org/apps/details/com.redis.RedisInsight)

- Scribus (https://flathub.org/apps/details/net.scribus.Scribus)
- Skype (https://flathub.org/apps/details/com.skype.Client)
- Sequeler (https://flathub.org/apps/details/com.github.alecaddd.sequeler)
- [Starship &rArr;](https://starship.rs/guide/) 
	- `brew install starship`
	- NerdFont

- SublimeMerge (https://flathub.org/apps/details/com.sublimemerge.App)
- SublimeText (https://flathub.org/apps/details/com.sublimetext.three), v3 2019 - Latest is v4
- [Syncthing &rArr;](https://apt.syncthing.net/) `sudo apt install syncthing`
    - Syncthing GTK (https://flathub.org/apps/details/me.kozec.syncthingtk)
    - SyncThingy (https://flathub.org/apps/details/com.github.zocker_160.SyncThingy), Simple tray indicator.

- [Tableplus &rArr;](https://tableplus.com/)
	- [Install on Linux &rArr;](https://tableplus.com/blog/2019/10/tableplus-linux-installation.html)
- Teams for Linux (https://flathub.org/apps/details/com.github.IsmaelMartinez.teams_for_linux)
- Telegram Desktop (https://flathub.org/apps/details/org.telegram.desktop)
- Timeshift

- Visual Studio Code (https://flathub.org/apps/details/com.visualstudio.code)
- VLC (https://flathub.org/apps/details/org.videolan.VLC)

- Yubikey (below)
    - Yubico Authenticator (https://flathub.org/apps/details/com.yubico.yubioath)

- Zoom (https://flathub.org/apps/details/us.zoom.Zoom)

### Flatpak

#### Install

Installed by default on POp!_OS.

```
    sudo apt install flatpak
```

#### Update Apps

```bash
    flatpak update
```


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
    sudo apt-add-repository ppa:yubico/stable
    sudo apt install yubikey-manager
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

License is in Bitwarden.

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

## CLI Commands

```bash
    sudo apt install bat            # For nb: https://github.com/sharkdp/bat
    sudo apt-get install ripgrep    # For nb:  https://github.com/BurntSushi/ripgrep
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

