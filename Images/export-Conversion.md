# Images: Export, Conversion

Slowly on my way to doing a lot more on Linux and my System76 Thelio. Only, need to the Affinity Suite to complete the picture.

# Convert Image Formats

- [**FFmpeg** ⇒](https://www.ffmpeg.org/) * A complete, cross-platform solution to record, convert and stream audio and video.

```sh
ffmpeg -i input_file.webp output_file.jpg
```


```sh
ffmpeg -i DavidsonUkuleles.jpg DavidsonUkuleles.png
```

## Convert Entire Directory

```sh
for i in *.webp; do ffmpeg -i "$i" "${i%.*}.png"; done
```

```sh
for i in *.webp;
    do name=`echo "$i" | cut -d'.' -f1`
    echo "$name"
    ffmpeg -i "$i" "${name}.mov"
    done
```

# Export PDF as Images

This is replacing Automator on the iMac.

## pdftoppm

**Pdftoppm** converts PDF pages to images with a DPI of 150 by default

- [**How to Convert PDF to Image in Linux Command Line** ⇒](https://www.tecmint.com/convert-pdf-to-image-in-linux-commandline/)

## Command
```sh
pdftoppm -png ~/dev/convert/{input.pdf) {output.file}

```

### Example

```sh
pdftoppm -png '/home/curtsheller/Curt-Sheller-Publications/Lessons/Songs/UL402 Autumn Leaves/PDF/UL402-LS-Am-Autumn-Leaves.pdf' '/home/curtsheller/Curt-Sheller-Publications/Lessons/Songs/UL402 Autumn Leaves/PDF/Samples/UL402-LS-Am'
```

`pdftoppm -png ~/dev/convert/{input.pdf) {output.file}`

### Watching for PDF files to extract to images.

**TODO:** [**How to Perform a Task When a New File is Added to a Directory in Linux**⇒](https://www.howtogeek.com/405468/how-to-perform-a-task-when-a-new-file-is-added-to-a-directory-in-linux/)

```sh
#!/bin/bash

  TARGET=~/incoming/
  PROCESSED=~/processed/

  inotifywait -m -e create -e moved_to --format "%f" $TARGET \
    | while read FILENAME
      do
        echo Detected $FILENAME, moving and zipping
        mv "$TARGET/$FILENAME" "$PROCESSED/$FILENAME"
        gzip "$PROCESSED/$FILENAME"
      done
    done
```

# ???
chmod u+x watch-incoming.sh
./watch-incoming.sh
