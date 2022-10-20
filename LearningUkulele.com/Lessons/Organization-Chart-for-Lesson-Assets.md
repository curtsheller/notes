# Organization Chart for Lesson Assets

What files, images, and related assets go in here and what organization is used.

## Path

### /public/assets/**`lessons`**
- **`images/`** - All images related to lessons. *Specific* images for *specific* lessons have their own direcory. These are the images in addition to the sample PDF file images in the `pdf/images` dir. **IF AN IMAGE HAS ANY CHANCE OF BEING USED ACROSS LESSONS or ANY ASSET OR GENERALY** - Put them in the **`/public/images/lessons/*`** directory of the site.

- **`pdf/`**
    - **`images/`** - PDF file sample images for online viewer and thumbnails.

- **.pdf** files (**2021** - these are all the lessons PDF files. 2022, move to pdf diretory this level.)


**2021** - PDF samples images are served from DigitalOcean Spaces server: 
- **`s3://EDDD6IGSPH7LNTYNO3HG@csp.nyc3.digitaloceanspaces.com/csp/images/lessons/*`**, All other images are served locally. For 2022 moving lesson, songs, books, assets - the non-site and non-general images to DO Spaces server. This will cleanup the code base for the site.
