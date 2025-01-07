# Commands

## Export

Open the source:
```sh
sqlite3 /home/curtsheller/Sites/learningukulele/database/database.sqlite
.output /home/curtsheller/Sites/learningukulele/database/exports/local/workshops.sqlite

.dump workshops
.exit

# or ALL tables

.output /home/curtsheller/Sites/learningukulele/database/exports/local/database-ALL-2024-11-12.sql
.dump
.exit
```

## Import

```sh
sqlite3 /home/curtsheller/Sites/learningukulele/database/exports/forge/database-24-11-12-1400.sqlite
.read /home/curtsheller/Sites/learningukulele/database/exports/local/workshops.sql
.exit
```
