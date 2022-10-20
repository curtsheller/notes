# LearningUkulele.com 2021 Packages and Components

These are the packages used for the CSP Sites: CurtSheller.com, CurtShellerPublications.com. LEarningUkulele.com, LearningUkulele-dev.com, CurtSheller-dev.com, and more.

# Composer
## require
- [x] "php": "^7.3|^8.0",
- [ ] "anhskohbo/no-captcha": "^3.3",
- [ ] "beyondcode/laravel-self-diagnosis": "dev-master",

### Blade-UI (This has been a pain in the butt for EasyMDE)
- [ ] "blade-ui-kit/blade-heroicons": "^1.2",
- [x] "[**blade-ui-kit/blade-icons**](https://blade-ui-kit.com/blade-icons)": "^1.1.0", &bull; Using for @svg()
- [x] "[**blade-ui-kit/blade-ui-kit**"](https://blade-ui-kit.com/docs/0.x/introduction): "^0.3.0", Using for EasyMDE and maybe some other later.

- [ ] "[creativeorange/gravatar": "~1.0", NOT USING ANYMORE. Coded locally as of 23 Dec 2021
- [x] "[**cyrildewit/eloquent-viewable**](https://github.com/cyrildewit/eloquent-viewable)": "^6.0", &bull; For tracking visits to asset based models: lessons, songs, listing, etc...
- [ ] "doctrine/dbal": "^2.11",
- [x] "facade/ignition": "^2.3.6",
- [x] "fideloper/proxy": "^4.2",
- [ ] "fruitcake/laravel-cors": "^2.0",
- [x] "garygreen/pretty-routes": "^1.0",
- [ ] "http-interop/http-factory-guzzle": "^1.0",
- [ ] "intervention/image": "^2.5",
- [x] "jaybizzle/laravel-crawler-detect": "1.2",
- [x] "laravel/cashier": "~12.4",
- [x] "laravel/framework": "^8.0",
- [x] "laravel/horizon": "^5.7",
- [x] "laravel/nova": "*",
- [x] "laravel/scout": "^9.0",
- [x] "laravel/spark-stripe": "^1.0",
- [x] "laravel/tinker": "^2.0",
- [x] "laravel/ui": "^3.0",
- [x] "laravelcollective/html": "^6.2",
- [x] "league/commonmark": "^1.6",
- [x] "league/flysystem-aws-s3-v3": "^1.0",
- [x] "league/fractal": "^0.19.2",
- [x] "livewire/livewire": "^2.0",
- [x] "maatwebsite/excel": "^3.1.19",
- [x] "martbock/laravel-diceware": "^1.0",
- [x] "meilisearch/meilisearch-php": "^0.19.0",
- [x] "michelf/php-markdown": "1.9.*",
- [x] "michelf/php-smartypants": "1.8.*",
- [x] "nunomaduro/termwind": "^1.1",
- [x] "predis/predis": "^1.1",
- [x] "prettus/l5-repository": "^2.7",
- [x] "rap2hpoutre/laravel-log-viewer": "^1.7",
- [x] "rtconner/laravel-tagging": "~4.1",
- [x] "sbine/route-viewer": "^0.0.6", USED with Nova
- [x] "sidis405/nova-installed-packages": "^0.1.8",
- [ ] "spatie/laravel-flash": "^1.7",
- [x] "spatie/laravel-honeypot": "^4.0",
- [x] "[**spatie/laravel-permission**](https://spatie.be/docs/laravel-permission/v5/introduction)": "^5.0",
- [x] "spatie/laravel-ray": "^1.9",
- [ ] "spatie/once": "^3.0",
- [x] "wulfheart/pretty_routes": "^0.3.0"


## require-dev
- [ ] "barryvdh/laravel-debugbar": "^3.5",
- [x] "facade/ignition": "^2.5",
- [x] "fakerphp/faker": "^1.9.1",
- [x] "filp/whoops": "^2.7",
- [x] "laravel/telescope": "^4.0",
- [x] "mockery/mockery": "^1.4.2",
- [x] "nunomaduro/collision": "^5.0",
- [x] "pestphp/pest": "^1.20",
- [x] "pestphp/pest-plugin-laravel": "^1.1",
- [x] "phpstan/phpstan": "^0.12.90",
- [x] "phpunit/phpunit": "^9.5.10"


# Markdown
        
- [ ] "easymde": "^2.13.0", **FOR BLAD-UI Kit: easy-mde component.**

- [ ] "[michelf/php-markdown](https://github.com/michelf/php-markdown)": "1.9.*", **REPLACING WITH Blade-UI Kit Components**
- [ ] 
- [ ] "[michelf/php-smartypants](https://github.com/michelf/php-smartypants)": "1.8.*", **MIGHT NOT REALLT BE USING THIS**



# JavaScript
- Highslide for Book, Lesson, etc. samples.

# Laravel NEW App: composer.json
These are the packages that are used in a clean new Laravel v8

```
    "require": {
        "php": "^7.3|^8.0",
        "fruitcake/laravel-cors": "^2.0",
        "guzzlehttp/guzzle": "^7.0.1",
        "laravel/framework": "^8.65",
        "laravel/sanctum": "^2.11",
        "laravel/tinker": "^2.5"
    },
    "require-dev": {
        "barryvdh/laravel-debugbar": "^3.6",
        "facade/ignition": "^2.5",
        "fakerphp/faker": "^1.9.1",
        "laravel/breeze": "^1.5",
        "laravel/sail": "^1.0.1",
        "mockery/mockery": "^1.4.4",
        "nunomaduro/collision": "^5.10",
        "phpunit/phpunit": "^9.5.10"
    },

```


# npm Packages
These are the [**npm packages** =>>](https://www.npmjs.com/) that are used on the LearningUkulele.com site and basically the other CSP, and Funky Frets stites.

- [**npm** =>>](https://www.npmjs.com/)

## dependencies

### Search Related & Used in teh Vue MeiliSearch Components
- [x] "**@meilisearch/instant-meilisearch**": "^0.5.5" * This library is a plugin to establish the communication between your MeiliSearch instance and the open-source InstantSearch tools (powered by Algolia) for your front-end application.
- [x] "meilisearch": "^0.22.0"
- [x] "algoliasearch": "^4.10.5"
- [x] "instantsearch.css": "7.4.2"
- [x] "vue-instantsearch": "^3.8.1"
- [x] "vue-gravatar": "^1.3.1"

- [x] "animate.css": "^4.1.1" &bull; USing for Diceware dice in the aside. 
- [ ] "babel-runtime": "^6.26.0"
- [ ] "cross-env": "^7.0"


- [ ] "jquery": "^3.5.1" **Might not need anymore**
- [ ] "laravel-mix-purgecss": "^6.0.0"
- [ ] "moment": "^2.22.2"
- [ ] "moment-timezone": "^0.5.32"

- [x] "sweetalert2": "^7.33.1" 
	- * Used for Favorites, Completed, and Assignments vue components
	- * for Site Alerts and messages

## Blade-UI
These might not be need here as [Blade-UI](https://blade-ui-kit.com/docs/0.x/easy-mde) pulls thm in its self.
- [ ] "easymde": "^2.15.0" * [easymde =>>](https://easy-markdown-editor.tk/) is a fork of [SimpleMDE =>>](https://simplemde.com/), Blade-UI uses easymded for it's markdown editor component.
- [ ] "**simplemde**": "^1.11.2"


### Vue
- [x] "vue": "^2.6.12"
- [ ] "vue-agile": "^0.3.7" * carousel component inspired by Slick.
- [x] "**vue-loader**": "^15.9.5"
- [x] "**vue-modaltor**": "^1.3.4" * NEED a modal for CAD chord images. Waiting to use AplineJS component.
- [ ] "vue-server-renderer": "^2.6.12"
- [ ] "vue-stripe": "^0.1.52"
- [ ] "vue-stripe-checkout": "^1.0.7"
- [x] "vue-sweetalert2": "^1.2.4"
- [x] "vue-template-compiler": "^2.5.17" 
	- *pre-compile Vue 2.0 templates. Used with vue-loader (above)
- [x] "vue2-collapse": "^1.0.11"
- [x] "vue2-gravatar": "^1.3.1",
- [x] "vue-instantsearch": "^4.0.0",

### Admin
- [x] "select2": "^4.0.13"

## devDependencies
### tailwindcss
- [x] "[tailwindcss](https://github.com/tailwindlabs/tailwindcss)": "^2.2.19"
- [ ] "[@tailwindcss/jit](https://github.com/tailwindlabs/tailwindcss-jit)":" **NOT NEEDED for tailwind v3**
- [x] "[@tailwindcss/aspect-ratio](https://github.com/tailwindlabs/tailwindcss-aspect-ratio): "^0.4.0"
- [x] "[@tailwindcss/forms](https://github.com/tailwindlabs/tailwindcss-forms)": "^0.3.2"
- [x] "[@tailwindcss/line-clamp](https://github.com/tailwindlabs/tailwindcss-line-clamp)": "^0.3.0"
- [ ] "@tailwindcss/postcss7-compat": "^2.0.2" * NOT NEEDED with tailwindcss v3
- [x] "[@tailwindcss/typography](https://github.com/tailwindlabs/tailwindcss-typography)": "^0.5.0"

- [x] "**alpinejs**": "^3.5.0"
- [x] "**axios**": "^0.21.1" * Used for Favorites, Completed, and Assignments vue components

### Webpack, Laravel Mix, PostCSS

- [x] "[**laravel-mix**](https://laravel-mix.com/)": "^6.0.12"
- [ ] "lodash": "^4.17.19" **Might Not Be Using or Needed**
- [x] "**resolve-url-loader**": "^3.1.2" * Chack and see if any url() are using relative paths

- [x] "**autoprefixer**": "^10.2.5"

#### PostCSS [postcss.org =>>](https://postcss.org/)
- [x] "**postcss**": "^8.3.5"
- [x] "**postcss-import**": "^14.0.1"
- [x] "**postcss-each**": "^1.10.0" * Using for flags.
- [x] "**postcss-nested**": "^5.0.0"


# Laravel NEW App: package.json
These are the packages that are used in a clean new Laravel v8

```
    "devDependencies": {
        "@tailwindcss/aspect-ratio": "^0.4.0",
        "@tailwindcss/forms": "^0.4.0",
        "@tailwindcss/line-clamp": "^0.3.0",
        "@tailwindcss/typography": "^0.5.0",
        "alpinejs": "^3.4.2",
        "autoprefixer": "^10.4.0",
        "axios": "^0.21",
        "laravel-mix": "^6.0.6",
        "lodash": "^4.17.19",
        "postcss": "^8.4.5",
        "postcss-import": "^12.0.1",
        "tailwindcss": "^3.0.1",
        "vue-loader": "^17.0.0"
    },
    "dependencies": {
        "vue": "^3.2.26"
    }

```