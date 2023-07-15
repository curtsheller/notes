# List,Start, Stop Services

- [**How To List Services on Linux** &#128279;](https://devconnected.com/how-to-list-services-on-linux/)

```bash
systemctl list-units --type=service
```

```bash
sudo systemctl status apache2
sudo systemctl start apache2
sudo systemctl stop apache2 && systemctl status apache2
```

```
sudo systemctl status nginx
sudo systemctl start nginx
sudo systemctl stop nginx && systemctl status nginx
```


----
****Curt Sheller Publications**/**Funky Frets • **CSP**: Pottstown, PA 19464 USA, **FF**: Boyertown, PA 19512 USA • [curt@curtsheller.com](mailto:curt@curtsheller.com) [UPDATED: **2023-07-15**]
