# Keyboards

## System76 Launch

[**Launch Configurable Keyboard** =>](https://system76.com/accessories/launch) &bull; customizable, and make your workflow more efficient.
-  [Layout =>](http://www.keyboard-layout-editor.com/#/gists/8ec5e9026d616ebad6b2c7e9d943e7c0)
- High-speed USB Hub
- Works on Linux, Windows and macOS
- 100% Open Source
- Made in Colorado
- Kailh MX Hotswap Sockets
- Kailh Box Jade (clicky) or Royal Switches
- XDA profile, Jades (clicky), Royal switches
- PBT
- Dye Sublimated

## Keychron

```
file under /etc/modprob.d/hid_apple.conf and my contents of that file are:

options hid_apple fnmode=3
options hid_apple swap_opt_cmd=1

However, these options do not take effect on startup. I found running the below 2 commands gives me what I want:

sudo echo 1 | sudo tee /sys/module/hid\_apple/parameters/swap_opt_cmd
sudo echo 3 | sudo tee /sys/module/hid\_apple/parameters/fnmode
```