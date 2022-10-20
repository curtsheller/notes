# Syncthing

## Syncthing Device IDs

- **TrueNAS Device ID:** 6JGOBSC-IK4RLIE-JGP77T3-INA45UU-KXPIZDA-HDL55N5-H654NWR-IGDRDQY
- **iMac Device ID:** YQNLUOL-UU4Z7WF-2LWIQEW-ZYJ3DFZ-32QL4TL-WW6KSBM-MTMUZP6-VCRMYAW
- **Thelio Device ID:** NEED New ID

## Settings

### Enable NAT traversal

### Global Discovery

### Local Discovery

### Enable Relaying
Relaying is enabled by default but will only be used if two devices are unable to communicate directly with each other. The advantage is that it makes a connection possible where it would otherwise not be; the downside is that the transfer rate is much lower than a direct connection would allow.

## Send Only Folders

For transfer only from on device to other(s).

**truenas** receives from **pop-os** and sends to **iMac**
pop-os send to truenas
iMac sends to true

```
	┌─────────────┐
	│   truenas   │
	└─────────────┘
	┌─────────────┐
	│   pop-os    │
	└─────────────┘
	┌─────────────┐
	│    imac     │
	└─────────────┘
```

_from Jakob Borg_, Syncthing Maintainer &bull; Jan 2020*

I use lots of one way syncing to what are essentially backup devices. That’s with “send only” and I think that’s the correct solution for almost all one-way setups.

In a few places there are one-way sync relationships that pass multiple levels. Like this:

```
                ┌───────┐
                │   A   │
                └───────┘
                    │
         ┌──────────┴──────────┐
         ▼                     ▼
     ┌───────┐             ┌───────┐
     │   B   │◀───────────▶│   C   │
     └───────┘             └───────┘
         │                     │
    ┌────┴────┐           ┌────┴────┐
    ▼         ▼           ▼         ▼
┌───────┐ ┌───────┐   ┌───────┐ ┌───────┐
│   D   │ │   E   │   │   F   │ │   G   │
└───────┘ └───────┘   └───────┘ └───────┘
```

I want changes from A on all of D-G, but I don’t want changes from D to propagate to neither E nor F nor G. A can be send-only, but B and C must be send-receive (or potentially receive-only). That leaves receive-only as the option for D-G.

*(We assume D-G aren’t malicious, just that stuff might happen there that we don’t want to propagate.)*

---

