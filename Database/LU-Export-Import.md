# MySQL: LearningUkulele.com Export and Local Import

Change the *export file name* and .*env database name* for all references

- forge-ALL-25-MAR-2023-1540.sql
- lu_2023_03_25_1540

## Production

*Login*, **cd** to learningukulele.com and *dump* db.

```sh
lussh
lu
mysqldump -u forge -pBenny7JB-forge-db forge > forge-ALL-25-MAR-2023-1540.sql
```

## Local

   Switch to local computer and copy dump file to local.

```sh
scp forge@157.245.82.239:/home/forge/learningukulele.com/forge-ALL-25-MAR-2023-1540.sql ~/Exports/forge
```

#### Create New database

Log in to local an MySQL and create and impor to database.
   - mysql -u root -pBenny7JB
   - mysql> CREATE DATABASE lu_2023_03_25_1540;
   - mysql> SHOW DATABASES;

#### Drop Previous Databases (Optional)
- mysql> DROP DATABASE lu_2023_01_25_1515;

#### Exit MySql
```
mysgl> exit
```

- exit

## Import tables/data to new database

```sh
mysql -u root -pBenny7JB lu_2023_03_25_1540 < ~/Exports/forge/forge-ALL-25-MAR-2023-1540.sql
```
### Update .env file with new local db name
- DB_DATABASE=lu_2023_03_25_1540

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

- Clean up local databases, and export files.
- Update dBeaver and TablePlus for new database.

# Resources & Links

## Backup and Restore

- [How to Backup MySQL Database (3 Simple Methods)](https://serverguy.com/servers/how-to-backup-mysql-database/)

## How to Backup MySQL Database from Command line

- Update the `.env` files for the site using the database.
- Run <strong>scout import script</strong>, 'lu-refresh' to update ALL the MeiliSearch indexes.

# Resources & Links

- [How to Backup MySQL Database (3 Simple Methods)](https://serverguy.com/servers/how-to-backup-mysql-database/)
- [MySQL Tutorial](https://www.mysqltutorial.org/mysql-show-databases/)
- [Mysqldump with Modern MySQL](https://serversforhackers.com/c/mysqldump-with-modern-mysql)
- TecAdmin.net: [**MySQL on Ubuntu 20.04** -->](https://tecadmin.net/install-mysql-ubuntu-20-04/)
