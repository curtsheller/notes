# Syncthing
- [**Syncthing**](https://syncthing.net)

**TrueNAS mount point:** ``/mnt/Sync`

## Syncing

1. Create folder from local computer in Sync GUI.
2. Add Remote Device, the TrueNAS server if not already there.
3. Add device to TrueNAS server, might be an invite to accept device.
	1. in local Sync GUI and the folder add the device 
5. In TrueNAS Remote Device


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

/mnt/(your folders name)


