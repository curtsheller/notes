# Terminal

## Zsh

- [**Oh My Zsh** &#128279;](https://github.com/ohmyzsh/ohmyzsh) &bull; open source, community-driven framework for managing your zsh configuration

### Install

```sh
sudo apt install zsh
sudo apt install zsh git fonts-font-awesome
```

### Make the Default

```sh
chsh -s $(which zsh)        # Don't need it for root user.
sudo chsh -s $(which zsh)
```

# Check If Worked

```sh
echo $SHELL
$SHELL --version
``

## Install Oh My Zsh

```sh
sh -c "$(curl -fsSL https://raw.githubusercontent.com/ohmyzsh/ohmyzsh/master/tools/install.sh)"
``

#### Links &amp; Resources

- [**Install and Setup Zsh on Ubuntu** &#128279;](https://learnubuntu.com/install-setup-zsh/) &bull Envy the beautiful Z shell? Learn how to install zsh on Ubuntu and customize it with Oh My Zash. *by Sagar Sharma Sep 12, 2022*
