# Bash Tips

## Adding indents to output of commands

### Using sed for Adding Indentation
```sh
    your_command | sed 's/^/    /'
```

### Using awk for Adding Indentation
```
    your_command | awk '{print "    " $0}'
```
