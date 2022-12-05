DATABASE REMOTE (forge) Settings

Connect to a remote database using an SSH tunnel in Laravel: https://barryvanveen.nl/blog/66-connect-to-a-remote-database-using-an-ssh-tunnel-in-laravel

## Start an SSH Tunnel

```bash
lussh
ssh -i ~/.ssh/id_rsa -N -L 13306:157.245.82.:3306 forge@157.245.82.239
```

### LearningUkulele.com Production .evn#

```
REMOTE_DB_HOST=157.245.82.239
REMOTE_DB_PORT=3306
REMOTE_DB_DATABASE=forge
REMOTE_DB_USERNAME=forge
REMOTE_DB_PASSWORD=password
```
