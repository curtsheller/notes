- [ ] Get Listeners to respond to Spark event so I can set to role to GOLD. Actually might not bee need moving ahead - but the Bronze, Silver, and Gold are good for roles and ar already all over the site.
- [ ] See if **SubscriptionsController** is needed. Might not be need when using Laravel Spark.
- [ ] Getting 'User is already a Stripe customer with ID ' error when trying to get a use that is already exsisting to subscribe to a subscription. `'Laravel\Cashier\Exceptions\CustomerAlreadyCreated'`
```
public function createAsStripeCustomer(array $options = [])
    {
        if ($this->hasStripeId()) {
            throw CustomerAlreadyCreated::exists($this);
        }
```

- [ ] 