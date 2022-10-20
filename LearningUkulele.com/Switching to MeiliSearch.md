# Switching to MeiliSearch

- [ ] Upload all MeiliSearch indexes, documents, Filters and Stop Word Attributes to `production`
- [ ] Put Site into [Maintenance Mode](https://laravel.com/docs/8.x/configuration#maintenance-mode) - [ ] Update and commit site which deploys.

## Maintenance Mode in Laravel 8

Bypassing [Maintenance Mode](https://laravel.com/docs/8.x/configuration#maintenance-mode)

Even while in maintenance mode, you may use the secret option to specify a maintenance mode bypass token:


```
php artisan down --secret="1630542a-246b-4b66-afa1-dd72a4c43515"
```

After placing the application in maintenance mode, you may navigate to the application URL matching this token and Laravel will issue a maintenance mode bypass cookie to your browser:

```
https://example.com/1630542a-246b-4b66-afa1-dd72a4c43515
```

## Don't Forget to `artisan up` When Done

```
php artisan up
```