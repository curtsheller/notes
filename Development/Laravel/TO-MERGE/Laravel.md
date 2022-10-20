# Laravel

## Snippets

Often used code snippets.

```
@includeIf('listings/content/'.$listing->code)
@foreach()
```


## Links to Add to CSP Site

- [**Backup a Laravel Website to DigitalOcean Spaces** =>](https://salfade.com/tutorials/backup-a-laravel-website-to-digitalocean-spaces)
- [**Laravel Breeze**](https://laracasts.com/series/laravel-authentication-options/episodes/1)


# Database

-[**Laravel — Eager Load only one record for one-to-many relationship** =>](https://weihien90.medium.com/laravel-eager-load-only-one-record-for-one-to-many-relationship-1275be6ccfcd)

```
// HasMany
public function statuses()
{
  return $this->hasMany(Status::class);
}// HasOne
public function latestStatus()
{
  return $this->hasOne(Status::class)->latest();
}

// Eager Load array of statuses object
Model::with('statuses')->get();// Eager Load only the latest status
Model::with('latestStatus')->get();

```

# Lazy Loading
- https://youtu.be/213aEudaumk

in boot method

```
oublic function boot {

	Model::preventLazyLoading();
	
	Model::handleLazyLoadyVoliationUsing(function ($model, $relation) {
	
		$class = get_class($model);
		
		info(
			"Attempted to lazy laod [{$relation}] on [{$model}]."
		);
	
	});
}