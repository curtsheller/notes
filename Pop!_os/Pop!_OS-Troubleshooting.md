Fix Package Manager Issues in Pop!_OS

http://support.system76.com/articles/package-manager-pop/
apt Cheat Sheet - https://blog.packagecloud.io/eng/2015/03/30/apt-cheat-sheet/

If your system complains about a failed upgrade, package manager conflicts, broken upgrades, or other package-related issues, there are several common fixes to these problems. Some package manager issues can be resolved with the graphical update program, but many require the command line. If you get the red circle in the status bar, run these commands to fix your package manager:

```
sudo apt clean
sudo apt update -m
sudo dpkg --configure -a
sudo apt install -f
sudo apt dist-upgrade
sudo apt autoremove --purge
```

Important: Please pay attention when using a purge
command.  If the command looks like it will remove several additional
packages besides the one you are trying to fix, don’t run it!  If it’s
only a few packages, most likely it’s safe.  If additional packages are
removed, make sure to install them again before restarting the computer.

This command will make sure the core Pop!_OS components are installed
after any purge commands:

```
sudo apt install pop-desktop
```
