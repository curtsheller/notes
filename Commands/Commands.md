# Links
- https://linuxize.com/post/basic-linux-commands/

# System Info
## How to find the Linux kernel version
- uname -srm
- uname --kernel-name --kernel-release --machine

## How to find the Linux distribution
- cat /etc/os-release


## Host Name Information
```
$ hostnamectl
   Static hostname: pop-os
         Icon name: computer-desktop
           Chassis: desktop
        Machine ID: bf9f9fb5d403dbd673ffd8735f76118b
           Boot ID: 0df8836c7c9f4442bc82a00df604f9b9
  Operating System: Pop!_OS 20.10
            Kernel: Linux 5.11.0-7614-generic
      Architecture: x86-64
```

## Date and Time
- https://linuxize.com/post/how-to-set-or-change-timezone-in-linux/

- **timedatectl**
```
Local time: Thu 2021-06-24 19:55:48 EDT  
           Universal time: Thu 2021-06-24 23:55:48 UTC  
                 RTC time: Thu 2021-06-24 23:55:48      
                Time zone: America/New_York (EDT, -0400)
System clock synchronized: yes                          
              NTP service: active                       
          RTC in local TZ: no        
```

- **ls** -l /etc/localtime
```
lrwxrwxrwx 36 root  2 Feb 15:30 /etc/localtime -> /usr/share/zoneinfo/America/New_York
```

All available time zones, use the timedatectl command or list the files in the /usr/share/zoneinfo directory:
- `timedatectl list-timezones`

Change your time zone:
- `sudo timedatectl set-timezone <your_time_zone>`

----
****Curt Sheller Publications**/**Funky Frets • **CSP**: Pottstown, PA 19464 USA, **FF**: Boyertown, PA 19512 USA • [curt@curtsheller.com](mailto:curt@curtsheller.com) [UPDATED: **2023-07-15**]
