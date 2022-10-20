# TrueNAS web 

- Server in closet: 10.1.10.251

Name: ix1, IPv4 Address 10.1.10.251/24

Default route:  10.1.10.1

Run a web browser on another computer on the same network. Open the TrueNAS web interface by typing
`truenas.local` or the IP address of the TrueNAS Mini system into the browser address bar and pressing Enter.


The *TrueNAS web interface* uses default credentials for first-time logins:

- Username: `root`
- Password: `Benny7JB`

After logging in, you can change the root account password in *Account > Users* to increase system security.

When more than one TrueNAS device is connected to the network, mDNS can experience name conflicts. Give each
TrueNAS device a unique hostname like truenas1.local and truenas2.local to avoid this problem. The host-
name is changed in *Network > Global Configuration > Hostname* in the TrueNAS web interface.

# PHP

`ee /usr/local/etc/php/php.truenas.ini`
