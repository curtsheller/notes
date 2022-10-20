# Database

## Steps

Basic steps. See **Database/MySQL/lu-export-import.md** for complete steps.

1. DUMP forge database
2. Copy or move from forge to local
4. IMPORT
	1. Create NEW database locally
	2. IMPORT
5. Run MeilliSearch laravel script to re-index and imports tables

## BACK-DUMP from forge

```
$ mysqldump -u forge -p forge > forge-ALL-BU-$(date +%F-%T).sql
```
Note: Ingore the *[Warning] Using a password on the command line interface can be insecure.* return from the command. The file is written to the current terminal.

## COPY FROM forge

```
$ scp forge@157.245.82.239:/home/forge/learningukulele.com/forge-ALL-BU-2021-05-20-19:46:15.sql /home/curtsheller/Exports/
```

This (above) might not work. If not just FileZilla. Launch `filezilla` on the command line.

## IMPORT

```
$ sudo mysql -u root -pBenny7JB@12345 curtshel_csp_test < /home/curtsheller/.dev/db-exports/forge-ALL-BU-2021-03-29.sql
```
