SQLite is a server-less database and is self-contained. This is also referred to as an embedded database which means the DB engine runs as a part of the app. On the other hand, MySQL requires a server to run. MySQL will require a client and server architecture to interact over a network.


SQLite vs MySQL


SQLite, as well as MySQL, are open source Relational Database Management System (RDBMS).


SQLite supports BLOB, NULL, INTEGER, TEXT, REAL.
MySQL supports NUMERIC, DATE, DATETIME, TIMESTAMP, NTINYTEXT, BLOB, TEXT, MEDIUMBLOB, MEDIUMTEXT,TIME, YEAR, CHAR, VARCHAR, TINYBLOB, TINYINT, SMALLINT, MEDIUMINT, INT or INTEGER, BIGINT, FLOAT, DOUBLE, DOUBLE DECIMAL, LONGBLOB, LONGTEXT, PRECISION, REAL, ENUM, and SET. Both the SQLite and MYSQL have certain advantages.
SQLite is file-based — the database consists of a single file on the disk, which makes it extremely portable and reliable. Although it might appear like a “simple” DB implementation, SQL is used in SQLite. SQLite is meant to be great for both developing and testing and offers more than what is needed for development.
MySQL is very easy to work with. For instance, it can be easily installed, third-party tools make it a simple database to get started with, and it's enriched with features. It supports a lot of SQL functionality that is expected from an RDBMS. MySQL is secured, which makes it highly advanced, too. It can even handle a good amount of data and hence can be used at-scale.


When to Use SQLite?
All applications that require portability and don’t require expansion.
In cases where applications need to read or write files to disk directly.
When to Use MySQL?
Where high-security features are required for data access.
For websites that work on MySQL despite some constraints. It's a scalable tool that is easy to manage.


How to install SQLite on Ubuntu 20.04 / 18.04? - https://www.osradar.com/install-sqlite-ubuntu-20-04/
How to install SQLite for PHP on my Apache/nginx server? - https://www.getastra.com/kb/knowledgebase/how-to-install-sqlite-for-php-on-my-apache-nginx-server/
How to Install and Basic SQLite Use on Linux - https://linoxide.com/linux-how-to/install-use-sqlite-linux/
$ sudo apt update
$ sudo apt install sqlite3

.help command list all the meta commands and their descriptions. These meta commands are also called "dot" commands because they are preceded by a dot.


*For more Laravel notes see link below.*

## Links &amp; Resources

- [**SQLite** ](https://learningukulele-dev.test/database/sqlite)

----
****Curt Sheller Publications**/**Funky Frets • **CSP**: Pottstown, PA 19464 USA, **FF**: Boyertown, PA 19512 USA • [curt@curtsheller.com](mailto:curt@curtsheller.com) [UPDATED: **2023-07-15**]
