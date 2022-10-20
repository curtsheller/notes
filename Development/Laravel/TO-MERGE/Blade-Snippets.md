## Feature Toogle

For turning different features on and off. [Feature Toggle](https://laravel-tricks.com/tricks/feature-toggle-in-laravel)

## Blade Snippet

Can use this **for Chord a Day** videos. #LearningUkulele.com/CAD#

```
use Carbon\Carbon;
use Illuminate\Support\Facades\Blade;

Blade::if('dated', static function ($date) {
    return Carbon::now()->gte(Carbon::parse($date));
});

// USAGE

/*
@dated('11/27/2019')
    <div>This will only show on/after 11/27/2019</div>
@enddated
*/
```