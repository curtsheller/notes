# JACK Audio Connection Kit (or JACK; a recursive acronym)

**JACK** is a low-latency audio server, written for any operating system that is reasonably POSIX compliant. It currently exists for Linux, OS X, Solaris, FreeBSD and Windows. It can connect several client applications to an audio device, and allow them to share audio with each other. Clients can run as separate processes like normal applications, or within the JACK server as "plugins".

**JACK** was designed from the ground up for professional audio work, and its design focuses on two key areas: synchronous execution of all clients, and low latency operation. 

#### LINKS
- https://en.wikipedia.org/wiki/JACK_Audio_Connection_Kit
- https://jackaudio.org/
- https://github.com/jackaudio/jack2
- [What is Jack? =>](https://help.ubuntu.com/community/What%20is%20JACK)


## JACK Sync: A Primer For Linux Users

	https://www.linuxjournal.com/content/jack-sync-primer-linux-users


## Start JACK

### CLI


	<code>jackd -R -P4 -dalsa -r44100 -p512 -n4 -D -Chw:0 -Phw:0</code>

### QjackCtl JACK Audio Connection Kit - Qt GUI Interface
	 
QjackCtl is a simple Qt application to control the JACK sound server jackd daemon, specific for the Linux Audio Desktop infrastructure.

# LinuxAudio.org

Linuxaudio.org is a not-for-profit consortium of libre software projects and artists, companies, institutions, organizations, and hardware vendors using Linux kernel-based systems and allied libre software for audio-related work, with an emphasis on professional tools for the music, production, recording, and broadcast industries. 

- [Linuxaudio.org =>](https://linuxaudio.org/) &bull; **Linuxaudio.org** is a not-for-profit consortium of libre software projects and artists, companies, institutions, organizations, and hardware vendors using Linux kernel-based systems and allied libre software for audio-related work, with an emphasis on professional tools for the music, production, recording, and broadcast industries.

- [Planet =>](http://planet.linuxaudio.org/)