# Syncthing

#Backup #Syncing

## Links & Resources
- [Syncthing &#128279;](https://syncthing.net/)
  - [Usage &#128279;](https://docs.syncthing.net/users/index.html)
  - [Configuration &#128279;](https://docs.syncthing.net/users/config.html)
- [Debian/Ubuntu Packages &#128279;](https://apt.syncthing.net/) &bull; Add PGP keys and APT sources then.

## TO DO

- [x] Keep loosing Synthing connection to TrueNAS server (Plugin).

## Installation

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

- [x] (2023-01-13) - _Need to add new ID for Apple Studio computer and check on iMac._

- **Kelly's Macbook** &rarr; **LA6T4YY-P4HB7ZK-H6R7YOO-Z4OEP3C-EWBLIXJ-BLOQV3Z-5IJGA6B-4S6SMQ6**
- **CSP Apple Studio Mac** &rarr; **YQNLUOL-UU4Z7WF-2LWIQEW-ZYJ3DFZ-32QL4TL-WW6KSBM-MTMUZP6-VCRMYAW**
- **Thelio** &rarr; **NGTFGR2-V5RAAEY-KYUIGCS-JNNPUY4-UQXX3TR-SWR3GXW-UUCST3M-TYQTUAK**
  - 10.1.10.144:22000
- **TrueNAS** &rarr; **4B2XEPH-B5INDZV-P3T4LO4-HBP5N5K-JMF7GGF-Y4I347U-TA2WZ57-PFIOZA7**
  - 10.1.10.251:22000

#### Old Computers
- **iMac** &rarr; **YQNLUOL-UU4Z7WF-2LWIQEW-ZYJ3DFZ-32QL4TL-WW6KSBM-MTMUZP6-VCRMYAW**
  - 10.1.10.214:22000

# Paths

- See `Backup/SyncthingPaths.md` note.

## TrueNAS Server Paths

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

### Curt Sheller Publications

- /media/curtsheller/CSP/**Curt-Sheller-Publications**

#### Moved To Somewhere Else

- /media/curtsheller/CSP/**Sites**

### Funky Fret Drive

- /media/curtsheller/**FunkyFrets**
  
  - /media/curtsheller/FunkyFrets/<**DIR**>
  
### For transferring files with Kelly
  
  - /media/curtsheller/FunkyFrets/**Transfer-Kelly**

## Ignore Patterns

These are files that are created by macOS and not needed.

- [Ignoring Files¶ &rarr;](https://docs.syncthing.net/users/ignoring.html)

```
Icon
.DS_Store

.Spotlight-V100
.Trashes
Thumbs.db
```

## Additional Links &amp; Resources

- [Debian/Ubuntu Packages &#128279;](https://apt.syncthing.net/) &bull; Add PGP keys and APT sources then.

----
****Curt Sheller Publications** • Pottstown, PA 19464 USA • [curt@curtsheller.com](mailto:curt@curtsheller.com) [updated: **2023-01-11**]
