# Zero Downtime Laravel Forge Deploys

-  [https://timleland.com/zero-downtime-laravel-forge-deploys/?utm_content=buffer2f9c0&utm_medium=social&utm_source=twitter.com&utm_campaign=buffer](https://timleland.com/zero-downtime-laravel-forge-deploys/?utm_content=buffer2f9c0&utm_medium=social&utm_source=twitter.com&utm_campaign=buffer) 

# stop script on error signal
`set -e`

# remove old deployment folders

`if [ -d “/home/forge/weather-deploy” ]; then`
` rm -R /home/forge/weather-deploy`
`fi`
`if [ -d “/home/forge/weather-backup” ]; then`
` rm -R /home/forge/weather-backup`
`fi`

cp -R /home/forge/weather.timleland.com /home/forge/weather-deploy

# Update

`cd /home/forge/weather-deploy`
`git pull origin master`
`composer dump-autoload`
`composer install —no-dev —no-interaction —prefer-dist —optimize-autoloader`
`php artisan cache:clear`
`php artisan route:cache`
`php artisan view:clear `
`php artisan migrate —force`

# Switch (downtime for microseconds)

`mv /home/forge/weather.timleland.com /home/forge/weather-backup`
`mv /home/forge/weather-deploy /home/forge/weather.timleland.com`
