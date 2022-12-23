# MySQL

The database is completely separate from the site. So, site can be deleted and re-installed if needed and all info in database is not touched.

Change the export file name for all references
    - forge-ALL-14-DEC-2022-1830.sql
    - lu_2022_12_14_1830

## Production
        lussh
        lu
        mysqldump -u forge -pBenny7JB-forge-db forge > forge-ALL-14-DEC-2022-1830.sql

## Local

   ### Copy to local computer

   Switch to local computer
    - scp forge@157.245.82.239:/home/forge/learningukulele.com/forge-ALL-14-DEC-2022-1830.sql ~/Exports/forge

    ### Create New database
    - mysql -u root -pBenny7JB
    - mysql> CREATE DATABASE lu_2022_12_14_1830;
    - mysql> SHOW DATABASES;

    ### Exit MySql
    ```
    mysgl> exit
    ```
    ### Import tables/data to new database

    - mysql -u root -pBenny7JB lu_2022_12_14_1830 < ~/Exports/forge/forge-ALL-14-DEC-2022-1830.sql

    ### Update .env file with new local db name

    - Run `lu-refresh` to have Meilisearch create search indexes for lessons only.
    - Clear caches.

## Cleanup Production
    lussh
    lu
    rm [dumped-file]

## Optional
    - Clean up local databases, and export files.

## Backup and Restore

- [How to Backup MySQL Database (3 Simple Methods)](https://serverguy.com/servers/how-to-backup-mysql-database/)

## How to Backup MySQL Database from Command line

### Export from forge

1. SSH into the learningukulele.com forge server `LUSSH` and run the following command:

```
    $ mysqldump -u forge -pBenny7JB-forge-db forge > forge-ALL-14-DEC-2022-1830.sql
```
This creates a database dump in the current directory.

### Copy to local

This is done from a `local` computer.

```
    # 19-AUG-2022 Worked from local
    $ scp forge@157.245.82.239:/home/forge/learningukulele.com/forge-ALL-14-DEC-2022-1830.sql ~/Exports/forge
```

## Importing to Local

Log in to `mysql` and create database.

```
    $ mysql -u root -pBenny7JB
    $ mysql> CREATE DATABASE lu_2022_12_14_1830;
```

- `SHOW DATABASES;` to verify that the database was created/

`Exit mysql` and running command:

### Import database dumped from forge:

```
    $ mysql -u root -pBenny7JB lu_2022_12_14_1830 < ~/Exports/forge/forge-ALL-14-DEC-2022-1830.sql
```

## After Importing

- Update the `.env` files for the site using the database.
- Run <strong>scout import script</strong>, 'sr' for ALL (except assignments) or 'srl' for lessons only to update the MeiliSearch indexes.

# Resources & Links

- [How to Backup MySQL Database (3 Simple Methods)](https://serverguy.com/servers/how-to-backup-mysql-database/)
- [MySQL Tutorial](https://www.mysqltutorial.org/mysql-show-databases/)
- [Mysqldump with Modern MySQL](https://serversforhackers.com/c/mysqldump-with-modern-mysql)


