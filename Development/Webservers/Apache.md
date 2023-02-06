# Apache

- [How to Restart Apache in Ubuntu](https://linuxhandbook.com/restart-apache-ubuntu/)

**NOTE:** Apache conflict with Valet. Stop Apache and restart Valet.

#### Commands

```
sudo service apache2 reload

# Start
sudo systemctl start apache2.service

# Stop
sudo systemctl stop apache2.service

# Restart
sudo systemctl restart apache2.service

# Status
systemctl status apache2.service

# Status
sudo service apache2 reload
```
