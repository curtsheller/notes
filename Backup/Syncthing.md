# Syncthing &lrarr; 

- [Syncthing &#128279;](https://syncthing.net/)
	- [Usage &#128279;](https://docs.syncthing.net/users/index.html)
	- [Configuration &#128279;](https://docs.syncthing.net/users/config.html)
- [Debian/Ubuntu Packages &#128279;](https://apt.syncthing.net/) &bull Add PGP keys and APT sources then.

## TO DO

- [x] Keep loosing connection to TrueNAS server.

```
sudo apt update
sudo apt install syncthing
```

## Auto Startup (Linux)

```
systemctl enable syncthing@curtsheller.service
systemctl start syncthing@curtsheller.service

systemctl status syncthing@curtsheller.service
```

# Device Identification

- **Kelly's Macbook** &rarr; **LA6T4YY-P4HB7ZK-H6R7YOO-Z4OEP3C-EWBLIXJ-BLOQV3Z-5IJGA6B-4S6SMQ6**
- **iMac** &rarr; **YQNLUOL-UU4Z7WF-2LWIQEW-ZYJ3DFZ-32QL4TL-WW6KSBM-MTMUZP6-VCRMYAW**
    - 10.1.10.214:22000
- **Thelio** &rarr; **NGTFGR2-V5RAAEY-KYUIGCS-JNNPUY4-UQXX3TR-SWR3GXW-UUCST3M-TYQTUAK**
    - 10.1.10.144:22000
- **TrueNAS** &rarr; **4B2XEPH-B5INDZV-P3T4LO4-HBP5N5K-JMF7GGF-Y4I347U-TA2WZ57-PFIOZA7**
    - 10.1.10.251:22000

# Paths
- See `Backup/SyncthingPaths.md` note.

## TrueNAS Server

- /mnt/Sync/CSP/\<dir\>
- /mnt/Sync/FunkyFrets/<dir\>

## Thelio Pop!_os Drives
- Linux uses '/media/\<user\>/\<drive\>/\<dir\>
- macOS: '/Volumes/\<drive\>/\<dir\>

On macOS create symlink **CSP** to the CSP drive and **FunkyFrets** drive in '$HOME/'

### CSP Drive
    Curt-Sheller-Publications, Clients, Personal,

- /media/curtsheller/**CSP**
- /media/curtsheller/**CSP**/<**dir**>
	- /media/curtsheller/CSP/**Clients**
    - - /media/curtsheller/**CSP**
	- /media/curtsheller/CSP/**Documents**
	- /media/curtsheller/CSP/**dev**
    - /media/curtsheller/CSP/**Fonts**
    - /media/curtsheller/CSP/**iMovie-Projects**
    - /media/curtsheller/CSP/**Lesson-Handouts**
    - /media/curtsheller/CSP/**OBS**
    - /media/curtsheller/CSP/**Personal**
    - /media/curtsheller/CSP/**Reference**
    - /media/curtsheller/CSP/**Songs**
    - /media/curtsheller/CSP/**Sounds**
    - /media/curtsheller/CSP/**Students**
    - /media/curtsheller/CSP/**TO-FILE**
    - /media/curtsheller/CSP/**Videos**


### Curt Sheller Publications
- /media/curtsheller/CSP/**Curt-Sheller-Publications**

#### Move To Somewhere Else
- /media/curtsheller/CSP/**Sites**

### Funky Fret Drive
- /media/curtsheller/**FunkyFrets**
	- /media/curtsheller/FunkyFrets/<**DIR**>
	- /media/curtsheller/FunkyFrets/**Funky-Frets-Music-Store**
    - /media/curtsheller/FunkyFrets/**Funky-Frets-TV**
    - /media/curtsheller/FunkyFrets/**Funky-Frets-Uke-Fest**
    - /media/curtsheller/FunkyFrets/**Funky-Frets-Ukulele-Academy**
    - /media/curtsheller/FunkyFrets/**Performers-Artists**
	- /media/curtsheller/FunkyFrets/**_Archived**
	- /media/curtsheller/FunkyFrets/**Art**
	- /media/curtsheller/FunkyFrets/**Kelly**
 	- /media/curtsheller/FunkyFrets/**Photos**
    - /media/curtsheller/FunkyFrets/**Vendors**

    For transferring files with Kelly
    - /media/curtsheller/FunkyFrets/**Transfer-Kelly**


## Links &amp; Resources

- [Debian/Ubuntu Packages &#128279;](https://apt.syncthing.net/) &bull; Add PGP keys and APT sources then.
