# MEGA

2022 - Not being used anymore.

## Install MegaCMD

Download (the package)[https://mega.nz/cmd] and, in a terminal, install it with:
```
sudo apt install /home/curtsheller/Downloads/megacmd-xUbuntu_21.10_amd64.deb
```
## User Guide
    - https://github.com/meganz/MEGAcmd/blob/master/UserGuide.md

    sync /path/to/local/folder /folder/in/mega


    |# MEGAsync (mega.nz/)

## MEGAcmd

A command line tool to work with your [MEGA](https://mega.nz/) account and files. The intent is to offer all the MEGA account functionality via command line. You can run it in [interactive](https://github.com/meganz/MEGAcmd/blob/master/UserGuide.md#interactive) mode where it processes all commands directly, or you can run its [scriptable](https://github.com/meganz/MEGAcmd/blob/master/UserGuide.md#scriptable) commands from your favourite Linux or Mac shell such as bash, or you can even run its commands in a Windows command prompt. And of course you can write scripts using those scriptable commands.

## Commands

### `mega-cmd`

`mega-cmd` starts the interactive shell.

A lot of the commands that one typically used for working in the terminal are alos used in the shell to works with MEGAsync. Suchs as `cd`, `rm`, `mkdir`, `ls`, `pwd` for remote and `lpwd` for local.

### 'login'

You can log in either with email and password, with session ID, or into a folder (an exported/public folder).
If logging into a folder indicate url#key

`login [email [passwd]] | exportedfolderurl#key | session` and at the end `logout`

When you log in with your email and MEGA account password, that creates a session. The session exists until you log out of it or kill it from another client. In MEGAcmd, use whoami -l to see all your open sessions across all devices, and use killsession to close them.

### `sync`

Set up a synchronisation between a folder on your local machine and a folder in your MEGA account, using the [**MEGACmd** - `sync`](https://github.com/meganz/MEGAcmd/blob/master/UserGuide.md#sync) command.

```
sync /path/to/local/folder /folder/in/mega
EXAMPLE: sync /home/curtsheller/CSP/Reference /Reference
```

If no argument is provided, `sync` lists current configured synchronizations

# Current Syncs
-  [**MEGACmd** - `sync`](https://github.com/meganz/MEGAcmd/blob/master/UserGuide.md#sync)

## syncs - Thelio (Linux)

Using Symbolic Links.
```
sync /home/curtsheller/MEGAsync /MEGAsync

sync /home/curtsheller/CSP /CSP
sync /home/curtsheller/FunkyFrets /FF
```

## syncs - Mac
Made Symbolic Links to somewhat match Thelio(Linkux)

NOTE: Seems the App syncs aren;t working. Need to figure this out. Mopefully the mega-cmd works.

```
sync /Users/curtsheller/MEGAsync /MEGAsync

sync /Users/curtsheller/CSP /CSP
sync /Users/curtsheller/FF /FF
```

Additional information about synchronizing folders is available in our Help Center: https://mega.nz/help/client/megasync/syncing

#### Links and Resources

- [MEGAcmd User Guide User Guide](https://github.com/meganz/MEGAcmd/blob/master/UserGuide.md)
