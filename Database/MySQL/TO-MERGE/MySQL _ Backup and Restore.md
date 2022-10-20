# MySQL * Backup and Restore

## Backup and Restore

- [How to Backup MySQL Database (3 Simple Methods)](https://serverguy.com/servers/how-to-backup-mysql-database/)

### How to Backup MySQL Database from Commandline

1. Connect.
````
  mysql -username -p
````

2. Take a backup of the database.

````
	mysqldump mysql-database > ABC-database-backup.sql
````
To get the name of the database ot back up `show databases` or backup all databases 

```
	mysqldump --all-databases > all_databases.sql
```

###