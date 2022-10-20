# Search: LearningUkulele.com

*These need to be run from **forge** learningukulele.com* or local directory for learningukulele.com site.

```
php artisan scout:delete-index assignments
php artisan scout:index assignments
php artisan scout:import "App\Models\Assignment"

php artisan scout:delete-index assets
php artisan scout:index assets
php artisan scout:import "App\Models\Asset"

php artisan scout:delete-index bears
php artisan scout:index bears
php artisan scout:import "App\Models\Bear"

php artisan scout:delete-index books
php artisan scout:index books
php artisan scout:import "App\Models\Book"

php artisan scout:delete-index lessons
php artisan scout:index lessons
php artisan scout:import "App\Models\Lesson"

php artisan scout:delete-index listings
php artisan scout:index listings
php artisan scout:import "App\Models\Listing"

php artisan scout:delete-index playalongs
php artisan scout:index playalongs
php artisan scout:import "App\Models\Playalong"

php artisan scout:delete-index series
php artisan scout:index series
php artisan scout:import "App\Models\Series"

php artisan scout:delete-index songs
php artisan scout:index songs
php artisan scout:import "App\Models\Song"

php artisan scout:delete-index videos
php artisan scout:index videos
php artisan scout:import "App\Models\Video"

php artisan scout:delete-index users
php artisan scout:index users
php artisan scout:import "App\Models\User"
```

## All Laravel Artisan Commands
```
php artisan scout:delete-index bears
php artisan scout:index bears
php artisan scout:import "App\Models\Bear"
php artisan scout:flush "App\Models\Bear"
```
