# FlapPak Issues

```
$ flatpak update
```

```
$ flatpak repair --user
```

## Bring in the Big Guns:

```
flatpak update --appstream && flatpak update -y

flatpak uninstall --unused -y

flatpak update -y
```

# Upgrading Pop!_OS 

## Upgrading the Recovery Partition
- pop-upgrade recovery upgrade from-release