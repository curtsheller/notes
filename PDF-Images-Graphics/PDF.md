# PDF

## Combine to Single PDF

```
pdftk file1.pdf file2.pdf file3.pdf cat output newfile.pdf

pdftk /media/curtsheller/CSP/Curt-Sheller-Publications/Books/Ukulele/QS-Series-Ukulele/QS1UKES-Scales/QS1UKES-Individual-Scales/Common-Chapters-1-2-3-6-7/PDF/
```


pdftk /media/curtsheller/CSP/Curt-Sheller-Publications/Books/Ukulele/QS-Series-Ukulele/QS1UKES-Scales/QS1UKES-Individual-Scales/QS1UKES-Ionian/Chapters/PDF/Ch-Inside-Cover-Legal.pdf
/media/curtsheller/CSP/Curt-Sheller-Publications/Books/Ukulele/QS-Series-Ukulele/QS1UKES-Scales/QS1UKES-Individual-Scales/QS1UKES-Ionian/Chapters/PDF/Ch-Contents.pdf

/media/curtsheller/CSP/Curt-Sheller-Publications/Books/Ukulele/QS-Series-Ukulele/QS1UKES-Scales/QS1UKES-Individual-Scales/Common-Chapters-1-2-3-6-7/PDF/Ch-1-Foreword.pdf
/media/curtsheller/CSP/Curt-Sheller-Publications/Books/Ukulele/QS-Series-Ukulele/QS1UKES-Scales/QS1UKES-Individual-Scales/Common-Chapters-1-2-3-6-7/PDF/Ch-2-Introduction.pdf
/media/curtsheller/CSP/Curt-Sheller-Publications/Books/Ukulele/QS-Series-Ukulele/QS1UKES-Scales/QS1UKES-Individual-Scales/Common-Chapters-1-2-3-6-7/PDF/Ch-3-Getting-Beyond-Shapes.pdf

/media/curtsheller/CSP/Curt-Sheller-Publications/Books/Ukulele/QS-Series-Ukulele/QS1UKES-Scales/QS1UKES-Individual-Scales/QS1UKES-Ionian/Chapters/PDF/Ch-4-Every-Finger-Every-String.pdf
/media/curtsheller/CSP/Curt-Sheller-Publications/Books/Ukulele/QS-Series-Ukulele/QS1UKES-Scales/QS1UKES-Individual-Scales/QS1UKES-Ionian/Chapters/PDF/Ch-5-Progressions.pdf

/media/curtsheller/CSP/Curt-Sheller-Publications/Books/Ukulele/QS-Series-Ukulele/QS1UKES-Scales/QS1UKES-Individual-Scales/Common-Chapters-1-2-3-6-7/PDF/Ch-6-Practice.pdf
/media/curtsheller/CSP/Curt-Sheller-Publications/Books/Ukulele/QS-Series-Ukulele/QS1UKES-Scales/QS1UKES-Individual-Scales/Common-Chapters-1-2-3-6-7/PDF/Ch-7-Final-Thougths.pdf

cat
## Export PDF as Images

This is replacing Automator on the iMac.

## pdftoppm

**Pdftoppm** converts PDF pages to images with a DPI of 150 by default

- [**How to Convert PDF to Image in Linux Command Line** ⇒](https://www.tecmint.com/convert-pdf-to-image-in-linux-commandline/)

## Command
```
pdftoppm -png ~/dev/convert/{input.pdf) {output.file}
```

### Example
```
pdftoppm -png /media/curtsheller/CSP/Curt-Sheller-Publications/Lessons/Songs/UL454-Moanin/PDF/Latest/UL454-Moanin-LS-Fm.pdf /media/curtsheller/CSP/Curt-Sheller-Publications/Lessons/Songs/UL454-Moanin/PDF/Samples/UL454-Fm
```

`pdftoppm -png ~/dev/convert/{input.pdf) {output.file}`

### Watching for PDF files to extract to images.

**TODO:** [**How to Perform a Task When a New File is Added to a Directory in Linux**⇒](https://www.howtogeek.com/405468/how-to-perform-a-task-when-a-new-file-is-added-to-a-directory-in-linux/)

```
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

chmod u+x watch-incoming.sh
./watch-incoming.sh

----
****Curt Sheller Publications** • Pottstown, PA 19464 USA • [curt@curtsheller.com](mailto:curt@curtsheller.com) [updated: **2023-05-05**]
