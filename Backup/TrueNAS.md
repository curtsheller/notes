# Syncthing
- [**Syncthing**](https://syncthing.net)

**TrueNAS mount point:** `/mnt/Sync`

http://10.1.10.251:8384/syncthing/

## Syncing

1. Create folder from local computer in Sync GUI.
2. Add Remote Device, the TrueNAS server if not already there.
3. Add device to TrueNAS server, might be an invite to accept device.
    1. in local Sync GUI and the folder add the device
5. In TrueNAS Remote Device

## Device Identification & IP Addresses

- **TrueNAS** &rarr; 4B2XEPH-B5INDZV-P3T4LO4-HBP5N5K-JMF7GGF-Y4I347U-TA2WZ57-PFIOZA7
    - 10.1.10.251:22000
- **Kelly's Macbook** &rarr; **LA6T4YY-P4HB7ZK-H6R7YOO-Z4OEP3C-EWBLIXJ-BLOQV3Z-5IJGA6B-4S6SMQ6**
- **iMac**  &rarr; YQNLUOL-UU4Z7WF-2LWIQEW-ZYJ3DFZ-32QL4TL-WW6KSBM-MTMUZP6-VCRMYAW
    - 10.1.10.214:22000
- **Thelio**  &rarr; NGTFGR2-V5RAAEY-KYUIGCS-JNNPUY4-UQXX3TR-SWR3GXW-UUCST3M-TYQTUAK
    - 10.1.10.144:22000

## Tutorials

- [**Lo-Res DIY**: **SyncThing Plug-in on TrueNAS**](https://youtu.be/xBWb-174BLg) - Plug-in, Jails, Datasets.
    - go to plugins and install syncthing
    - once installed shut it down
    - enter the shell
    - id syncthing
    - created the user and use the UID you got from the last step
    - create the dataset and change the mounts permission to sync
    - connect a mount point to syncthing
    - start it back up and hit the manage button
    - create a username and password for the GUI
    - connect two devices and share a folder

```
/mnt/(your folders name)
```
