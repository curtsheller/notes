apt is the command that is being recommended by the Linux distributions.

- apt is a subset of apt-get and apt-cache commands providing necessary commands for package management
- apt-get (high level package handling utility)
- apt-cache (high level package query utility)
- dpkg (low level package manager for Debian)
- Difference Between **apt** and **apt-get** Explained: https://itsfoss.com/apt-vs-apt-get-difference/
while apt-get won’t be deprecated, as a regular user, you should start using apt more often
Difference between apt and apt-get commands
- apt command       the command it replaces     function of the command
- apt install       apt-get install             Installs a package
- apt remove        apt-get remove              Removes a package
- apt purge         apt-get purge               Removes package with configuration
- apt update        apt-get update              Refreshes repository index
- apt upgrade       apt-get upgrade             Upgrades all upgradable packages
- apt autoremove    apt-get autoremove          Removes unwanted packages
- apt full-upgrade  apt-get dist-upgrade        Upgrades packages with auto-handling of dependencies
- apt search        apt-cache search            Searches for the program
- apt show          apt-cache show              Shows package details

apt has a few commands of its own as well.

```
new apt command     # function of the command
apt list            # Lists packages with criteria (installed, upgradable etc)
apt edit-sources    # Edits sources list
```
Links
- apt man page: http://manpages.ubuntu.com/manpages/groovy/man8/apt.8.html
- APT Cheat Sheet - https://blog.packagecloud.io/eng/2015/03/30/apt-cheat-sheet/
- Using apt Commands in Linux: https://itsfoss.com/apt-command-guide/
- Using apt Commands in Linux [Complete Guide] - https://itsfoss.com/apt-command-guide/
- https://linuxize.com/post/how-to-use-apt-command/

```
apt-get update --allow-unauthenticated
```

As the man page entry for `--allow-unauthenticated` explains:

Ignore if packages can't be authenticated and don't prompt about it. This can be useful while working with local repositories, but is a huge security risk if data authenticity isn't ensured in another way by the user itself. The usage of the Trusted option for sources.list(5) entries should usually be preferred over this global override. Configuration Item: APT::Get::AllowUnauthenticated.

And if that doesn’t work, try run-in it with --allow-insecure-repositories like this:

```
apt-get update --allow-insecure-repositories
```

E: The repository 'http://ppa.launchpad.net/nginx/stable/ubuntu groovy Release' does not have a Release file.
N: Updating from such a repository can't be done securely, and is therefore disabled by default.
N: See apt-secure(8) manpage for repository creation and user configuration details.


https://itsfoss.com/repository-does-not-have-release-file-error-ubuntu/

