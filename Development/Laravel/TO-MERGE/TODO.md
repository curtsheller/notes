# TODO

# User
Need to figure out what determines what files are available when an Eloquent Model object is cretad.

## Listners and Events

The **App\Providers\EventServiceProvider** included with your Laravel application provides a convenient place to register all of your application's event listeners * [Laravel 9 docs](https://laravel.com/docs/9.x/events#registering-events-and-listeners)

- App\Listeners\**UserSubscriptionUpdated**

## Observers
- App\Observers/**UserObserver** ([larvel 9 docs](https://laravel.com/docs/9.x/eloquent#observers))

# PHP
- [ ] Test php **8.1** local then production

# Additions and Changes

- [ ] **Webhooks**: Need to respond to webhooks from stripe, beyond spark. 
- [ ] Clean up controllers
- [ ] **Tests** - Shift has the feature for writing test for an existing application.

# Admin

## Customers
- [ ]  Need to check if the webhook is responded to for this to reset the role to bronze. At some point this can be automated.

# Additions

- **Forever** membership success needs to automatically be set up add the forever role to the user. Might have to add gold as well.
- Finding and Fixing Buzzes and Rattles on Your Ukulele by by Aaron Kiem * https://www.ukulelemag.com/lessons/finding-and-fixing-buzzes-and-rattles-on-your-ukulele (add to: https://learningukulele.com/ukulele/care)