# OBS Sample Settings
## Matt Stauffer
- [MattStauffer.com](https://mattstauffer.com/)

### Audio
- **Sample rate**: 44.1 Khz
- **Channels**: Mono
- **Devices**: all disabled except Mic/Auxiliary Audio, which is set to my main mic

### Output: Streaming
- **Encoder:** x264
- **Enforce streaming service encoder settings**: checked
- **Rate control**: CBR
- **Bitrate**: 2000 Kbps
- **Keyframe interval**: 0
- **CPU Usage Preset**: veryfast
- **Profile**: main
- **Tune**: (None)

### Video
- **Base (Canvas) Resolution**: 1920x1080
- **Output (Scaled) Resolution**: 1920x1080
- ***Downscale Filter**: Bicubic
- **Common FPS Values**: 30

### Links

- [How to get started live streaming on Twitch and YouTube | MattStauffer.com](https://mattstauffer.com/blog/how-to-get-started-live-streaming-on-twitch-and-youtube/)
- [How I use my Stream Deck for streaming on Twitch and YouTube | MattStauffer.com](https://mattstauffer.com/blog/how-i-use-my-stream-deck-for-streaming-on-twitch-and-youtube/)

## Suz Hinton
 [My Twitch Live Coding Setup. This article is an updated review of… | by Suz Hinton | Medium](https://medium.com/@suzhinton/my-twitch-live-coding-setup-b2516672fb21)

### Video settings
- **Base (Canvas) Resolution**: 2560x1440
- **Output (Scaled) Resolution**: 1280x720
- **Downscale Filter**: Bicubic (16 samples)
- **Common FPS Values**: 30

### Output settings
- **Encoder**: x264 (but checked ‘enforce streaming service encoder settings’)
- Do not rescale output
- **Rate Control**: CBR (Twitch performs better with consistent vs. variable)
- **Bitrate**: 2000
- **Keyframe** interval: 0
- **CPU usage**: veryfast
- **Profile**: main
- **Tune**: (none)
