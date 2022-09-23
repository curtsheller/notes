ssh root@23.239.14.11

nextcloud.curtsheller.com

----

ip a
sudo apt update && upgrade
sudo apt install nextcloud

sudo nextcloud.occ config:system:set trusted_domains 1 --value=nextcloud.curtsheller.com
sudo ufw allow 80,443/tcp
sudo nextcloud.enable-https lets-encrypt

cd /var/www/nextcloud
cd /var/www/nextcloud/config

Nextcloud: /var/www/nextcloud/config
'trusted_domains' =>
  array (
    0 => 'localhost',
    1 => '45.79.158.242',
    2 => 'nextcloud.curtsheller.com',
    3 => 'nextcloud-curtsheller.com',
  ),

'dbuser' => 'nextcloud',
'dbpassword' => 'mele-pono-lani',

----

How To Install Nextcloud On TrueNAS And Obtain SSL Certificate from Let’s Encrypt with Certbot - https://youtu.be/TENMMSbtJY4

 obtain SSL Certificate for your Nextcloud plugin on TrueNAS using Certbot.

 ----

  The Linux Experiment

Secure NEXTCLOUD with HTTPS - Domain name, DNS, and certificate
https://youtu.be/g0mS1z8Hmhw


# Using the occ command

Nextcloud’s occ command (origins from “ownCloud Console”) is Nextcloud’s command-line interface. You can perform many common server operations with occ, such as installing and upgrading Nextcloud, manage users, encryption, passwords, LDAP setting, and more.

occ is in the nextcloud/ directory; for example /var/www/nextcloud on Ubuntu Linux. occ is a PHP script. You must run it as your HTTP user to ensure that the correct permissions are maintained on your Nextcloud files and directories.

https://docs.nextcloud.com/server/20/admin_manual/configuration_server/occ_command.html


# SSL


- sudo nextcloud.occ config:system:set trusted_domains 1 --value=YOURDOMAIN
- sudo ufw allow 80,443/tcp
- sudo nextcloud.enable-https lets-encrypt
