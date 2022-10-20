# Audio Terms, Resources, Links

Definitions from Wikipedia and various other sources collected for a summary of the terms used in audio engineering.

As I any endeavor it helps to understand the terms used by professionals.

# Compression
**Dynamic range compression** (**DRC**) or simply **compression** is an audio signal processing)  operation that reduces the volume of loud sounds  or amplifies quiet sounds thus reducing or *compressing* an  audio signal ’s  dynamic range. Compression is commonly used in sound recording and reproduction ,  broadcasting,  live sound reinforcement and in some instrument amplifiers.

### Links
- [**Audio Compression** - Wikipedia](https://en.wikipedia.org/wiki/Audio_compression)
- [**Dynamic Range Compression** - Wikipedia](https://en.wikipedia.org/wiki/Dynamic_range_compression)
- [**Loudness compensation** - Wikipedia](https://en.wikipedia.org/wiki/Loudness_compensation)

# Gain
In **audio** engineering, a **gain** stage is a point during an **audio** signal flow that the engineer can make adjustments to the level, such as a fader on a mixing.

   * Increases the Input
     * Gain (dB) - negative Values will lower your Audio Input while positive Values will increase it
   * Do some tests by recording your Audio Input and checking the video to make sure no clipping occurs because of too audio high volumes.

### Links
- [Gain stage - Wikipedia](https://en.wikipedia.org/wiki/Gain_stage)

# Noise Gate
A **noise** **gate** or **gate** is an electronic device or software that is used to control the volume of an audio signal. Comparable to a compressor, which attenuates signals *above* a threshold, such as loud attacks from the start of musical notes, noise gates attenuate signals that register *below* the threshold.

* Turn the Microphone OFF if no one is talking
* **Close Threshold**
	* When the mic drops below this volume, the noise gate will turn off the microphone
* **Open Threshold**
	* When the mic goes above this volume, the noise gate will turn on the microphone
* **Attack time**
	* How long it takes for the mic to go from off to on, as a fade in.
* **Hold time**
	* How long the mic should stay on after the volume has dropped below the close threshold.
* **Release time**
	* How long it takes for the mic to go from on to off, as a fade out

### Links
- [**Noise gate** - Wikipedia](https://en.wikipedia.org/wiki/Noise_gate)

# Noise Suppression
**Active noise control** (**ANC**), also known as **Noise Cancellation**, or **Active Noise Reduction** (**ANR**), is a method for reducing unwanted  sound by the addition of a second sound specifically designed to cancel the first.

   * Remove background noise
   * Suppress Level (dB) - lower dB Value=more suppression
   * Start on -10 and go down up to -60 until the background noise is gone

### Links
- [Active noise control - Wikipedia](https://en.wikipedia.org/wiki/Active_noise_control)

# Equalization
**Equalization** (with “z”) or equalization (with “s”) is the process of adjusting the balance between frequency components within an electronic signal. The most well known use of equalization is in sound recording and reproduction but there are many other applications in electronics and telecommunications. The circuit or equipment used to achieve equalization is called an equalizer. These devices strengthen or weaken the energy of specific frequency bands or “frequency ranges”.

In sound recording and reproduction, equalization is the  process commonly used to alter the  frequency response of an audio system using  linear filters. Most  hi-fi  equipment uses relatively simple filters to make  bass and  treble adjustments. Graphic and parametric equalizers have much more flexibility in tailoring the frequency content of an audio signal. Since equalizers “adjust the amplitude of audio signals at particular frequencies,” they are, “in other words, frequency-specific  volume knobs.”

### Links
- [**Equalization** (audio) - Wikipedia](https://en.wikipedia.org/wiki/Equalization_(audio))

# Links

 * 10 Tips for Better Sounding Vocal Recordings for Beginners (FAQ Series) https://youtu.be/Ty8YLqOmbV4
 * How to Set Your Gain https://youtu.be/1l86SOlxyps
   * Guideline is set Gain to -12db to -6db range.OBS Studio: Ultimate Microphone Guide (OBS Studio Tutorial for Mics, Filters and Audio Settings) https://youtu.be/gNUwAwrNiV0
 * How To Get Better Mic Quality on Livestreams - OBS Studio Filters [2020]  https://youtu.be/dtYqEfrUkF0
 * OBS-Studio: High quality recording and multiple Audio Tracks - https://obsproject.com/forum/resources/obs-studio-high-quality-recording-and-multiple-audio-tracks.221/
 
# Room Setup
 * Soften hard surfaces.
 * Change direction. Parallel hard wall create echo.
 * Handle "clipping" with gain, limiter. Barely touch the red. Keep in the yellow.
 * Compression: Ratio 4:1