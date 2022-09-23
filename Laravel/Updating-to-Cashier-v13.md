# Updating to Cashier 13.x

- [Updating to Cashier 13 =>](https://github.com/laravel/cashier-stripe/blob/13.x/UPGRADE.md)

Create new **webhook**. This disables he current one. Be sure to turn it on after upgrade.

- php artisan cashier:webhook --disabled

## Update database tables column names.

Doing these by hand as the migration per upgrade guide did not work.

```
Schema::table('subscriptions', function (Blueprint $table) {
    $table->renameColumn('stripe_plan', 'stripe_price');
});

Schema::table('subscription_items', function (Blueprint $table) {
    $table->renameColumn('stripe_plan', 'stripe_price');
});
Schema::table('users', function (Blueprint $table) {
    $table->renameColumn('card_brand', 'pm_type');
    $table->renameColumn('card_last_four', 'pm_last_four');
});
```
## Stripe Product Support
Schema::table('subscription_items', function (Blueprint $table) {
    $table->string('stripe_product')->nullable()->after('stripe_id');
});
