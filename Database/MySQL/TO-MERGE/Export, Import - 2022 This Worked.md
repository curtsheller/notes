## Export

- **6 Jan 2022** \- This finally worked. No more need to importing and exporting from a GUI.
    - Exported from forge, learningukulele.com

```
    mysqldump -u forge -p forge > forge-ALL-BU-$(date +%F-%T).sql
```

## Import

- **6 Jan 2022** \- This finally worked. No more need to importing and exporting from a GUI.
    - Imported from home `Exports` to local db.

```
    mysql -u root -p [database] < /home/curtsheller/Exports/Backups/forge-ALL-BU-today.sql
```

## After Importing

- Run **scout import script**, 'sr' to update the MeiliSearch indexes.

# TODO

## cp

- https://linuxconfig.org/cp

## Examples

1.  cp \[OPTION\] Source Destination
2.  cp \[OPTION\] Source Directory
3.  cp \[OPTION\] Source-1 Source-2 Source-3 Source-n Directory

First and second syntax is used to copy Source file to Destination file or Directory.
Third syntax is used to copy multiple Sources(files) to Directory.

## scp

Copy files over ssh connections

- https://linuxiac.com/scp-command-in-linux/

```
   scp [OPTION] [user@]SRC_HOST:]file1 [user@]DEST_HOST:]file2
```

## Transfer Local File to Remote Server

Copy file.txt from current directory of local system to remote server’s /tmp directory.

```
scp file.txt user@remotehost:/tmp/
```

## Transfer File from Remote Server to Local Machine

Following command will copy /tmp/file.txt from remote server to local machine under the user’s home directory.

```
scp user@remotehost:/tmp/file.txt /home/user
```