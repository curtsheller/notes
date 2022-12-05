# FlapPak Issues

```bash
$ flatpak update
```

```bash
$ flatpak repair --user
```

## Bring in the Big Guns:

```bash
flatpak update --appstream && flatpak update -y

flatpak uninstall --unused -y

flatpak update -y
```

# Upgrading Pop!_OS 

## Upgrading the Recovery Partition
- pop-upgrade recovery upgrade from-release
