# Docker

## Installing Docker Desktop on Pop_OS! 22.04

Install the Docker GPG key.

```
curl -fsSL https://download.docker.com/linux/ubuntu/gpg | sudo gpg --dearmor -o /usr/share/keyrings/docker-archive-keyring.gpg
```

Add the repository, using the GPG key.

```
echo "deb [arch=$(dpkg --print-architecture) signed-by=/usr/share/keyrings/docker-archive-keyring.gpg]
https://download.docker.com/linux/ubuntu   $(lsb_release -cs) stable" | sudo tee /etc/apt/sources.list.d/docker.list > /dev/null
```

Update packages lists.

```
sudo apt update
```

## Install Docker Desktop on Linux (Ubuntu)
- [Install Docker Desktop on Linux &#128279;](https://docs.docker.com/desktop/install/linux-install/)
	- [Install Docker Desktop on Ubuntu &#128279](https://docs.docker.com/desktop/install/ubuntu/)

```
sudo apt remove docker-desktop
```

For a complete cleanup, remove configuration and data files at $HOME/.docker/desktop, the symlink at /usr/local/bin/com.docker.cli, and purge the remaining systemd service files.

```
 rm -r $HOME/.docker/desktop
 sudo rm /usr/local/bin/com.docker.cli
 sudo apt purge docker-desktop
```

### Uninstall Old Versions
```
 sudo apt-get remove docker docker-engine docker.io containerd runc
```

### Install

- [Install Docker Engine on Ubuntu](https://docs.docker.com/engine/install/ubuntu/#set-up-the-repository)
- In testing and development environments, some users choose to use automated [convenience scripts &#128279;](https://docs.docker.com/engine/install/ubuntu/#install-using-the-convenience-script) to install Docker.


- Set up Docker’s package repository.

```
sudo apt update
sudo apt install \
    ca-certificates \
    curl \
    gnupg \
    lsb-release
```
- Add GPG key
```
 sudo mkdir -p /etc/apt/keyrings

 curl -fsSL https://download.docker.com/linux/ubuntu/gpg | sudo gpg --dearmor -o /etc/apt/keyrings/docker.gpg
```

```
 echo \
  "deb [arch=$(dpkg --print-architecture) signed-by=/etc/apt/keyrings/docker.gpg] https://download.docker.com/linux/ubuntu \
  $(lsb_release -cs) stable" | sudo tee /etc/apt/sources.list.d/docker.list > /dev/null
```

2. Download latest DEB package.
3. Install the package with apt as follows:

```
	udo apt update

 	sudo apt install ./docker-desktop-<version>-<arch>.deb
```

#### Reference & Links
- [Installing Docker Desktop on Pop_OS! 22.04
&#128279;](https://www.bgoewert.com/installing-docker-desktop-on-pop_os-22-04/)
- [Docker for local development &arrar;](https://blog.codito.dev/2023/01/docker-for-local-development/) - (2023-01-23), Developing with Docker
