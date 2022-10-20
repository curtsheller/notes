# OBS Cameras

- [ ] 1 Oct 2021 - **C922 Web Camera** is not showing up in POBS 27.\*. Can use NDI for now

## Linux Installion Notes

- **v4l-utils**
- **guvcview** (see above C922 Now on not working in OBS.

#### Links
- [UBUNTU 20.04, OBS Studio (25.0.3), and the Logitech c920 webcam =>>](https://youtu.be/mV0bhO57gPo)
- [OBS Studio Settings for your WEBCAM - Logitech c920](https://youtu.be/mw0gIDYn1eE)
- [How To IMPROVE Your Webcam Quality: ULTIMATE GUIDE =>>](https://youtu.be/8WSB2OtXysU)

## Finding Your Webcam
```
	v4l2-ctl --list-devices
```

On Thelio it returns:
```
	C922 Pro Stream Webcam (usb-0000:0b:00.3-4):
		/dev/video0
		/dev/video1
```

NOte: `video0` is typically the one to use.

The following command will list th controls the camera has available:
```
	v4l2-ctl -d /dev/video0 --list-ctrls
````