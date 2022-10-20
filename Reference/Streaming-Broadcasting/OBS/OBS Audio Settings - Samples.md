# OBS Audio Settings - Samples

# Awall Digital

Guideline is set Gain to -12db to -6db range.[OBS Studio](../../../Reference/Streaming%20_%20Broadcasting/OBS/OBS%20Home.md): Ultimate Microphone Guide (OBS Studio Tutorial for Mics, Filters and Audio Settings) https://youtu.be/gNUwAwrNiV0

*Awall Digital* is using a [RODECaster](../../../Reference/Streaming%20_%20Broadcasting/Streaming%20Topics/RODECaster.md).

- Audio Input at 44 and Stereo
- Use Audio Input Capture from the Sources panel.
- Noise Gate for noisy environments.
- Noise Suppression for NOT so noisy environments.
- Compressor -
- Gain - Keep peak right below peaking (red area)
- Limiter - Threshold : -3db

# Epoxvox

***TODO ???? Need to get some missing settings.***

### [OBS Studio](../../../Reference/Streaming%20_%20Broadcasting/OBS/OBS%20Home.md) Audio Ducking

- Keep your Stream Sound BALANCED with OBS Audio Ducking - OBS Studio Side-Chain & Ducking Guide [ https://youtu.be/1Te2JERlInQ ]
The side chain filter allows you to automatically lower and raise background sounds (game sound, music, etc.) based on another sound source, usually your microphone.

Apply a **Compressor** filter and name it "Ducking" to the sound/track you want to lower when your mic goes and your are talking. Ducking your audio under a source.

#### Aggressive, Loud Music*

- Ratio: **10.0:1**
- Threshold: **-30dB**, Level of source before it triggers the compressor. Lower and the compressor will activate sooner. **-30dB** or louder and the compressor triggers.
- Attack: ????ms, You want it to engage fast.
- Release: **650ms**, A longer release means it won't come back on fast.
- Output Gain: **0.00dB**
- Sidechain/Ducking Source: Set to Your **Primary Audio/Mic Source**

#### Aggressive, Loud Music
- Ratio: **5.0:1**
- Threshold: **-30dB**, Level of source before it triggers the compressor. Lower and the compressor will activate sooner. **-30dB** or louder and the compressor triggers.
- Attack: ????ms, You want it to engage fast.
- Release: **650ms**, A longer release means it won't come back on fast.
- Output Gain: **0.00dB**


There’s an extra processor that can be extremely useful when podcasting called “Ducking”. When switched on, it will turn down all other channels on the [RODECaster](../../../Reference/Streaming%20_%20Broadcasting/Streaming%20Topics/RODECaster.md) whenever the host on Channel 1 is speaking. This is handy for making sure that the host can be heard over all other sound sources in a busy podcast. To turn this on, go to ‘Settings’ > ‘Advanced’ > ‘Audio’ > ‘Processing’ and tap on ‘Ducking’.


# Sound Better: Bandrew Says Podcast

bandrewsays.com

- Practice, Record, Practice, Record [ https://youtu.be/hpGLIQLF8X0 ]
- What Makes for a Good Voice Recording [ https://youtu.be/KqNqfOBSwEg ]
	- Clarity
	- Consistent Levels
	- Processing Subtle
			- Subtle Gate
			- Subtle Compression, Multiple Compressors in series for natural compression.
			- EQ - Do not change the tonal vocal quality. Only reductive or additive. EQ to repair NOT change the sound.
			- Reverb - Slight room reverb is OK.
			- Easy to listen to and unoffensive.
			- Accept Your Voice.

## Gear
 * ProBoom® Ultima® Gen2 Ultra Low Profile Adjustable Mic Boom with a 12” Fixed Horizontal Arm and Machined Table Bushing ($379) https://www.ocwhite.com/product/ultima-gen2-ultra-low-profile-adjustable-mic-boom-with-a-12-fixed-horizontal-arm-and-machined-table-bushing/
# Alpha Gaming

https://www.youtube.com/watch?v=zad44bK9cMg

 * **Noise Suppression**  (Suppression Level: -20db)
 * **Noise Gate** (Close Threshold: -32dB, Open Threshold: -26dB)
 * **Compressor** (Ratio: 4.00:1, Threshold: -20dB, Attack: 6ms, Release: 20ms, Output Gain: 6db)
 * **EQ** to adjust the tone. If dull, boost 1K and above. If thin voice cut 500Hz. Low roll-off.
 * **Mic Placement** - Talk in the right end. Dynamic mics you need to be closer, real close.
 * 
## Harris Heller - Alpha Gaming
 * OBS FILTERS MADE PERFECT!! -- Live Tip,  https://youtu.be/ELwy7q5-M5s

# Gaming Careers
 * **OBS Studio - Advanced Mic Settings** (Noise Removal, Compressor, Noise Gate), https://youtu.be/noqKxopwp74 * How to set up your Microphone professionally in OBS Studio for your Twitch or YouTube Gaming Livestreams. In this video we go into detail looking at the OBS Microphone Filters: Noise Suppression, Compressor, Noise Gate and Gain Filter
 * **Noise Suppression**  (Suppression Level: -20db)
 * **Noise Gate** (Close Threshold: -32dB, Open Threshold: -26dB)
 * **Compressor** (Ratio: 2.50:1, Threshold: -33dB, Attack: 1ms, Release: 100ms, Output Gain: 18db)


# JHow Tech
 * **OBS Audio Settings And Filters Setup** (Noise Suppression, Gate, Compressor, and More) https://youtu.be/O4DjmH0I5zs 
 * **Noise Suppression**  (Suppression Level: -20db)
 * **Noise Gate** (Close Threshold: -32dB, Open Threshold: -26dB)
 * **Expander**, A Smoother Noise Gate Alternate (Close Threshold: -32dB, Open Threshold: -26dB)
 * **Compressor** (Ratio: 2.50:1, Threshold: -33dB, Attack: 1ms, Release: 100ms, Output Gain: 18db)
 * **Limiter** (Ratio: 2.50:1, Threshold: -33dB, Attack: 1ms, Release: 100ms, Output Gain: 18db)