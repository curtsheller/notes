# Flatpak

sudo flatpak repair; flatpak repair --user
sudo apt update && flatpak update


# Install Apps
sudo apt install repoman


# List,Start, Stop Services
- [**How To List Services on Linux** &#128279;](https://devconnected.com/how-to-list-services-on-linux/)
```
systemctl list-units --type=service
```

```
sudo systemctl status apache2
sudo systemctl start apache2
sudo systemctl stop apache2 && systemctl status apache2
```
