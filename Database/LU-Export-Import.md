# MySQL: LearningUkulele.com Export and Local Import

- [ ] Change the *export file name* and .*env database name* for all references

- [ ] forge-ALL-lu_2024_10_09_1845.sql

  # Production

- [ ] *Login*, **cd** to learningukulele.com and *dump* db.

```sh
ssh lu
lu
mysqldump -u forge -pMele1-pono-lani-forgedb forge > forge-ALL-lu_2024_10_09_1845.sql
```

# Local

- [] Switch to local computer and copy dump file to local.

```sh
# local
scp forge@157.230.220.226:/home/forge/learningukulele.com/forge-ALL-lu_2024_10_09_1845.sql ~/Exports/forge

# production
# use filezilla
```

## Create New database

### Local

- [ ] Log in to local an MySQL and create and import to database.
  - mysql -u root -pBenny7JB
  - mysql> CREATE DATABASE lu_2024_10_09_1845;
  - mysql> SHOW DATABASES;
  - mysql> exit

### Production

- mysql -u forge -pMele1-pono-lani-forgedb
- mysql> CREATE DATABASE lu_2024_10_09_1845;
- mysql> SHOW DATABASES;
- mysql> exit

## Drop Previous Databases (Optional)

- mysql> DROP DATABASE lu_2024_03_04_1600;
- mysql> DROP DATABASE lu_2024_08_14_2230;

## Import tables/data to new database

### Local

```
mysql -u root -pBenny7JB lu_2024_10_09_1845 < ~/Exports/forge/forge-ALL-lu_2024_10_09_1845.sql
```

### Production

```
mysql -u forge -pMele1-pono-lani-forgedb forge < /home/forge/learningukulele.com/database/exports/forge-ALL-lu_2024_10_09_1845.sql
```

Production server path for exports:

```shell
sftp://forge@157.230.220.226/home/forge/learningukulele.com/database/exports/forge-ALL-lu_2024_10_09_1845.sql
```

## Update local .env file with new "local" db name

- [] Update .env file, TablePlus, DBeaver, etc

- DB_DATABASE=lu_2024_10_09_1845

## cd in to learningukulele.com local site

- [] Import/Update Meilisearch (Laravel Scout)

- Run `lu-refresh` script or the  Laravel `php artisan learningukulele:import` (TODO: this is not really working), command for all tables to have Meilisearch create search indexes for lessons only.

- Clear caches.

## Cleanup Production

```bash
lussh
lu
rm [dumped-file]
```

# Optional

- Clean up local databases, and export files.
- Update **dBeaver** and **TablePlus** for new database.

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

----

**Curt Sheller Publications**&bull; **Funky Frets** • **CSP**: Pottstown, PA 19464 USA, **FF**: Boyertown, PA 19512 USA • [curt@curtsheller.com](mailto:curt@curtsheller.com) [UPDATED: **2024-05-31**]
