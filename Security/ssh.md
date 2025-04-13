# ssh

```
ssh-keygen
```

### ssh login

```
ssh -i /path/to/private/key/file username@hostname
```

## Copying files between client and remote systems

```
scp DIR_PATH_1 DIR_PATH_2
```

## ssh config
```
Host website
        Hostname 275.128.172.46
        User alice
        Port 1500
```

```
# LearningUkulele.com Sites and Services - Laravel Forge
#   https://forge.laravel.com/servers
#
Host lu
    HostName 157.230.220.226
    User forge
    IdentityFile ~/.ssh/id_rsa
```

```
ssh lu
```
#### Links &amp; Resources

# SSH FS

Mounting a remote server/directory as if it is local.

```sh
# LearningUkulele.com
sshfs forge@157.230.220.226:/home/forge/learningukulele.com/ ~/remote-lu
```

### Install if needed
```
    sudo apt install sshfs      # Install
```

### Make local dir and Mount remote dir

TablePlus will recognize the SQLite database as if it's on your local filesystem, simplifying access and navigation.
```sh
    mkdir ~/remote-lu           # Create local dir
    sshfs forge@157.230.220.226:/home/forge/learningukulele.com/database    ~/remote-lu
```

### Unmount when done
```sh

    fusermount -u ~/remote-lu
```
- (Linux Handbook: Getting Started With SSH in Linux &rArr;)[https://linuxhandbook.com/ssh-basics/]
- (Linux Handbook: Use SSH Config File to Manage SSH Connections to Various Remote Servers  &rArr;)[https://linuxhandbook.com/ssh-config-file/]
