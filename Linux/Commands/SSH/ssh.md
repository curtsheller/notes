# SSH Key Generation

Secure Shell (SSH) is a network protocol for creating a secure connection between a client and a server. With SSH, you can run commands on remote machines, create tunnels, forward ports, and more.

```sh
ls -l ~/.ssh/*.pub
```
## Generate a New SSH Key
``
ssh-keygen -t rsa -b 4096 -C "curt@curtsheller.com"

```

## SSh Config File

Adding entires to `config`

- (Server for Hackers)[https://serversforhackers.com]
