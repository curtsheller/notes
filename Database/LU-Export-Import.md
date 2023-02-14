# MySQL: LearningUkulele.com Export and Local Import

Change the *export file name* and .*env database name* for all references

- [ ] forge-ALL-10-FEB-2023-1930.sql
- [ ] lu_2023_02_10_1930

## Production

*Login*, *cd* to learningukulele.com and *dump* db.

```sh
lussh
lu
mysqldump -u forge -pBenny7JB-forge-db forge > forge-ALL-10-FEB-2023-1930.sql
```

## Local

### Copy to local computer

   Switch to local computer

```
scp forge@157.245.82.239:/home/forge/learningukulele.com/forge-ALL-10-FEB-2023-1930.sql ~/Exports/forge
```

    ### Create New database

    - mysql -u root -pBenny7JB
    - mysql> CREATE DATABASE lu_2023_02_10_1930;
    - mysql> SHOW DATABASES;

    #### Drop Previous Databases (OPtional)
    - mysql> DROP DATABASE lu_2023_01_25_1515;

    ### Exit MySql
    ```
    mysgl> exit
    ```
    ### Import tables/data to new database

    - mysql -u root -pBenny7JB lu_2023_02_10_1930 < ~/Exports/forge/forge-ALL-10-FEB-2023-1930.sql

    ### Update .env file with new local db name

    #### cd in to learningukulele.com local site

    - Run `lu-refresh` for all tables (*except assignments*) or `srl` script to have Meilisearch create search indexes for lessons only.
    - Clear caches.


## Cleanup Production

```bash
lussh
lu
rm [dumped-file]
```

## Optional

Clean up local databases, and export files.

# Resources & Links

## Backup and Restore

- [How to Backup MySQL Database (3 Simple Methods)](https://serverguy.com/servers/how-to-backup-mysql-database/)

## How to Backup MySQL Database from Command line

### Export from forge

1. SSH into the learningukulele.com forge server `LUSSH` and run the following command:

```bash
mysqldump -u forge -pBenny7JB-forge-db forge > forge-ALL-10-FEB-2023-1930.sql
```

This creates a database dump in the current directory.

### Copy to local

This is done from a `local` computer.

```bash
# 19-AUG-2022 Worked from local

scp forge@157.245.82.239:/home/forge/learningukulele.com/forge-ALL-10-FEB-2023-1930.sql ~/Exports/forge
```

## Importing to Local

Log in to `mysql` and create database.

```bash
mysql -u root -pBenny7JB@12345
mysql> CREATE DATABASE lu_2023_02_10_1930;
```

- `SHOW DATABASES;` to verify that the database was created/

`Exit mysql` and running command:

### Import database dumped from forge:

```bash
mysql -u root -pBenny7JB@12345 lu_2023_02_10_1930 < ~/Exports/forge/forge-ALL-10-FEB-2023-1930.sql
```

## After Importing

- Update the `.env` files for the site using the database.
- Run <strong>scout import script</strong>, 'lu-refresh' to update ALL the MeiliSearch indexes.

# Resources & Links

- [How to Backup MySQL Database (3 Simple Methods)](https://serverguy.com/servers/how-to-backup-mysql-database/)
- [MySQL Tutorial](https://www.mysqltutorial.org/mysql-show-databases/)
- [Mysqldump with Modern MySQL](https://serversforhackers.com/c/mysqldump-with-modern-mysql)
- TecAdmin.net: [**MySQL on Ubuntu 20.04** -->](https://tecadmin.net/install-mysql-ubuntu-20-04/)
