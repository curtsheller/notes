# Docker


## Prerequisites
Uninstall and remove any tech previews or beta version os Docker Desktop for Linux.

```
sudo apt remove docker-desktop
```

## Install Docker Desktop🔗

- [Install Docker Engine on Ubuntu](https://docs.docker.com/engine/install/ubuntu/#set-up-the-repository)


## Install using the repository

Before you install Docker Engine for the first time on a new host machine, you need to set up the Docker repository. Afterward, you can install and update Docker from the repository.

#### install packages to allow apt to use a repository over HTTPS
```
sudo apt update
sudo apt install \
    ca-certificates \
    curl \
    gnupg \
    lsb-release
```
### Add GPG Key
```
sudo mkdir -p /etc/apt/keyrings
curl -fsSL https://download.docker.com/linux/ubuntu/gpg | sudo gpg --dearmor -o /etc/apt/keyrings/docker.gpg
```

### Set Up Repository
```
echo "deb [arch=$(dpkg --print-architecture) signed-by=/etc/apt/keyrings/docker.gpg] https://download.docker.com/linux/ubuntu \
  $(lsb_release -cs) stable" | sudo tee /etc/apt/sources.list.d/docker.list > /dev/null

```

## Install Docker Engine
```
sudo apt update
sudo apt install docker-ce docker-ce-cli containerd.io docker-compose-plugin
```
### List Versions Available
```
apt-cache madison docker-ce
```
### List Versions Available
Install a specific version using the version string from the second column, for example, `5:20.10.16~3-0~ubuntu-jammy`
```
 sudo apt-get install docker-ce=<VERSION_STRING> docker-ce-cli=<VERSION_STRING> containerd.io docker-compose-plugin
 ```

```
sudo apt-get install docker-ce=5:20.10.18~3-0~ubuntu-jammy docker-ce-cli=5:20.10.18~3-0~ubuntu-jammy containerd.io docker-compose-plugin
```

#### Verify It All Worked

```
 sudo service docker start

 sudo docker run hello-world
```

# Configure Docker to Start on Boot

Most current Linux distributions (RHEL, CentOS, Fedora, Debian, Ubuntu 16.04 and higher) use systemd to manage which services start when the system boots. On Debian and Ubuntu, the Docker service is configured to start on boot by default. To automatically start Docker and Containerd on boot for other distros, use the commands below:

```
sudo systemctl enable docker.service
sudo systemctl enable containerd.service
```

TO Disable
```
 sudo systemctl disable docker.service
 sudo systemctl disable containerd.service
```

#### Links &amp; Resources

- [**Install Docker Engine** &#128279;](https://docs.docker.com/engine/install/)
    - [Install Docker Desktop on Linux &#128279;](https://docs.docker.com/desktop/install/linux-install/)

https://docs.docker.com/engine/install/linux-postinstall/


