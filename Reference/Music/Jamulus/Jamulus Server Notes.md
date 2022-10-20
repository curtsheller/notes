# Jamulus Server Notes
- **Vultr**: ssh root@207.246.124.187 * Spun up February 24, 2021. Previous server stopped running for some reason.
- **linode**: ssh root@66.228.45.25

## Vultr
`symlink /etc/systemd/system/multi-user.target.wants/jamulus_Funky_Frets.service → /etc/systemd/system/jamulus_Funky_Frets.service`


```
sudo cp jamulus.service /etc/systemd/system/jamulus.service
sudo chmod 644 /etc/systemd/system/jamulus.service
```


```
sudo systemctl disable jamulus_Funky_Frets
sudo systemctl stop jamulus_Funky_Frets
sudo systemctl daemon-reload
sudo systemctl enable jamulus_Funky_Frets
sudo systemctl start jamulus_Funky_Frets

sudo systemctl status jamulus_Funky_Frets
sudo systemctl restart jamulus_Funky_Frets
```

## Jamulus Service File

Every time you edit the service file you’ll need to restart jamulus:

Vultr: `nano /etc/systemd/system/jamulus_Funky_Frets.service`
linode: `nano /etc/systemd/system/jamulus_Funky_Frets.service`

```
systemctl daemon-reload
systemctl restart jamulus_Funky_Frets
sudo systemctl status jamulus_Funky_Frets
```

```
[Unit]
Description=Jamulus-jamulus_Funky_Frets-Server
After=network.target

[Service]
Type=simple
User=jamulus
NoNewPrivileges=true
ProtectSystem=true
ProtectHome=true
Nice=-20
IOSchedulingClass=realtime
IOSchedulingPriority=0
# This line below is what you want to edit according to your preferences
ExecStart=/usr/local/bin/llcon-jamulus/Jamulus --server --nogui --log /var/log/jamulus/jamulus_jamulus_Funky_Frets.log  --serverinfo "Funky Frets Two;New Jersey, USA;225" --centralserver jamulusallgenres.fischvolk.de:22224  --port 22124 --welcomemessage "<h3>Welcome to Funky Frets Jamulus Server</h3><p>The <em>Funky Frets Servers</em> are run by the crew at the Funky Frets Music Store in Boyertown, PA USA (<a href="https://www.funkyfrets.com">www.funkyfrets.com</a>). The home of the Annual Funky Frets Uke Fest and Learning Ukulele with Curt (<a href="https://www.learningukulele.com">www.learningukulele.com</a>)</p><p>Funky Frets is known for the Ukulele expertise and Aloha spirit.</p><h4>Learning Ukulele with Curt</h4><ul><li>700 Lessons</li><li>100+ Songs</li><li>Ukulele Books By Curt Sheller</li><li>Play-along Jam Tracks</li></ul>" --numchannels 20 --multithreading
# end of section you might want to alter
Restart=on-failure
RestartSec=30
StandardOutput=journal
StandardError=inherit
SyslogIdentifier=jamulus

[Install]
WantedBy=multi-user.target
```

### Funky Frewts One (Vultr)

--serverinfo "Funky Frets One;New Jersey, USA;225"

```
--welcomemessage "<h3>Welcome to Funky Frets One Jamulus Server</h3><p>The <em>Funky Frets Servers</em> is run by the crew at the Funky Frets Music Store in Boyertown, PA USA (<a href="https://www.funkyfrets.com">www.funkyfrets.com</a>). The home of the Annual Funky Frets Uke Fest and Learning Ukulele with Curt (<a href="https://www.learningukulele.com">www.learningukulele.com</a>)</p><p>Funky Frets is known for the Ukulele expertise and Aloha spirit.</p><h4>Learning Ukulele with Curt</h4><ul><li>700 Lessons</li><li>100+ Songs</li><li>Ukulele Books By Curt Sheller</li><li>Play-along Jam Tracks</li></ul>"
```
### Funky Frets Two (linode)

--serverinfo "Funky Frets Two;New Jersey, USA;225"

```
--welcomemessage "<h3>Welcome to Funky Frets Two Jamulus Server</h3><p>The <em>Funky Frets Two Servers</em> is run by the crew at the Funky Frets Music Store in Boyertown, PA USA (<a href="https://www.funkyfrets.com">www.funkyfrets.com</a>). The home of the Annual Funky Frets Uke Fest and Learning Ukulele with Curt (<a href="https://www.learningukulele.com">www.learningukulele.com</a>)</p><p>Funky Frets is known for the Ukulele expertise and Aloha spirit.</p><h4>Learning Ukulele with Curt</h4><ul><li>700 Lessons</li><li>100+ Songs</li><li>Ukulele Books By Curt Sheller</li><li>Play-along Jam Tracks</li></ul>"
```

## Misc Helpful Commands

### Reading System Log

This is how I found out that the port can't be 'default' as it asks in the install script. Used 22124.
```
tail /var/log/syslog
```

- Feb 24 18:14:13 guest jamulus[10448]: /usr/local/bin/llcon-jamulus/Jamulus: **'--port' needs a numeric argument between 0 and 65535**
