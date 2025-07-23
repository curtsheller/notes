# MySQL: LearningUkulele.com Export and Local Import


# 2025 - Not usin MySQL - using SQLite.

- [ ] Change the *export file name* and .*env database name* for all references

- [ ] forge-ALL-lu_2024_11_04_0930.sql

  # Production

- [ ] *Login*, **cd** to learningukulele.com and *dump* db.

```sh
ssh lu
lu
mysqldump -u forge -pMele1-pono-lani-forgedb --no-create-info --skip-add-drop-table --no-tablespaces --lock-all-tables forge  > forge-ALL-lu_2024_11_04_0930.sql
mysqldump -u forge -pMele1-pono-lani-forgedb forge > forge-ALL-lu_2024_11_04_0930.sql

mysqldump  database_name > database_name-$(date +%Y%m%d).sql
# Local

- [] Switch to local computer and copy dump file to local.

```sh
# local
# mysql
scp forge@157.230.220.226:/home/forge/learningukulele.com/forge-ALL-lu_2024_11_04_0930.sql ~/Exports/forge

# sqlite
scp forge@157.230.220.226:/home/forge/learningukulele.com/database/database.sqlite ~/Sites/learningukulele/database/exports/forge/database-lu_2024_11_04_0930.sqlite

# production
# use filezilla
```

## Create New database

### Local

Import tables/data to new database.

#### for MySQL
- [ ] Log in to local an MySQL and create and import to database.
  - mysql -u root -pBenny7JB
  - mysql> CREATE DATABASE lu_2024_11_04_0930;
  - mysql> SHOW DATABASES;
  - mysql> exit

#### for SQLite

- [ ] `php artisan migrate:refresh`, The migrate:refresh command will roll back all of your migrations and then execute the migrate command. This command effectively re-creates your entire database:.
- [ ] Import data from forge.

### Local

```
mysql -u root -pBenny7JB lu_2024_11_04_0930 < ~/Exports/forge/forge-ALL-lu_2024_11_04_0930.sql

sqlite3 ~/Sites/learningukulele/database/database.sqlite < ~/Exports/forge/converted/ALL-lu_2024_11_04_0930.sql
```

## Update local .env file with new "local" db name

- [] Update .env file, TablePlus, DBeaver, etc

- DB_DATABASE=lu_2024_11_04_0930

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
