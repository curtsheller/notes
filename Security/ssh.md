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


- (Linux Handbook: Getting Started With SSH in Linux &rArr;)[https://linuxhandbook.com/ssh-basics/]
- (Linux Handbook: Use SSH Config File to Manage SSH Connections to Various Remote Servers  &rArr;)[https://linuxhandbook.com/ssh-config-file/]
