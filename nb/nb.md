# nb

`nb` is a command line and local web note‑taking, bookmarking, archiving, and knowledge base application with:

- [nb &rarr;](https://github.com/xwmx/nb)
  
`nb` creates notes in text-based formats like Markdown, Org, LaTeX, and AsciiDoc, can work with files in any format, can import and export notes to many document formats, and can create private, password-protected encrypted notes and bookmarks.


## Notebooks

 - [Notebooks &rarr;](https://github.com/xwmx/nb#-notebooks)

 Notebooks have their own `git` version history.

```sh
nb ls
```

## Folders

- [Folders &rarr;](https://github.com/xwmx/nb#-folders)   
Items can be organized in folders. To add a note to a folder, call nb add with the folder's relative path within the notebook followed by a slash:

```sh
    # add a new note in the folder named "example"
    nb add example/

    # add a new note in the folder named "demo" in "example"
    nb add example/demo/
```

```sh
    # create a new folder named "sample"
    nb add folder sample

    # create a new folder named "sample", alternative
    nb folders add sample

    # create a new folder named "demo"
    nb add demo --type folder

    # create a folder named "example" containing a folder named "test"
    nb add example/test --type folder
```
