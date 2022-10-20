# LearningUkulele.com 2021 Packages

Using `learningukulele-dev` and `csp-dev.test` for developing 2021 sites.

# Major Components to implment and/or move over.

- [ ] TailwindCSS 2.0
	- [ ] Update tailwind.config.js file with LearningUkulele settings 
- [ ] Laravel Mix 6
- [ ] Highslide for Book, Lesson, etc. samples.
- [ ] Fonts
- [ ] Logos
- [ ] Resources


# Packages
- [x] "@**meilisearch/instant-meilisearch**": "^0.2.4" * Trying tro replace Algolia
- [x] "instantsearch.css": "7.4.2" - Used with the Vue search components for MeiliSearch
- [ ] "algoliasearch": "^4.8.3" - See if needed for MeiliSearch 
- [x] "vue-instantsearch": "^3.4.3"


## Misc
- [ ] "@shopify/draggable": "^1.0.0-beta.8" - Future possibility - low probility
- [x] "alpinejs": "^2.7.0"
- [ ] "resolve-url-loader": "^2.3.1" - ????


## Ajax
- [x] "axios": "^0.19" - NEEDED for Vue components: Favorite, Completed, and Assignments. These might be able to be replaced with Livewire and Alpine. If easy OK, if not ...


## Babel
- [x] "[babel-runtime](https://github.com/babel/babel)": "^6.26.0"- ???? Jan 2021 version: (v7.12.12)
	- [ ] `yarn add @babel/runtime`


- [x] "cross-env": "^7.0" - Laravel Mix

## Laravel
- [x] "laravel-mix": "^5.0.1" - Trying to upgrade to Laravel 6.*
- [ ] "laravel-mix-alias": "^1.0.1"- ????
- [ ] "laravel-mix-purgecss": "^3.0.0" - ????

- [ ] "laravel-vue-pagination": "^1.2.0" - ???? APPEARS TO NO BEING USED


## Date and Time
- [ ] "[moment](https://github.com/moment/moment)": "^2.22.2" - ???? - *Moment.js is a legacy project, now in maintenance mode. In most cases, you should choose a different library.*
- [ ] "[pikaday](https://github.com/Pikaday/Pikaday)": "^1.8.0" - ???? - Might be using native browser date picker

## postcss for css, javascript

Used for Laravel Mix and tailwindCSS.

- [ ] "autoprefixer": "^9.8.6" - ????
- [x] "postcss": "^7.0.35"
- [x] "postcss-each": "^0.10.0"
- [x] "postcss-import": "^12.0.1"
- [x] "postcss-nested": "^4.1.2"


## LU Components
- [x] "[select2](https://select2.org/)": "^4.0.4" - Used for Admin
- [x] "[simplemde](https://simplemde.com/)": "^1.11.2" - Used for Admin
- [x] "[sweetalert2](https://sweetalert2.github.io/)": "^7.33.1" - Used for Favorites, Completed, and Assigned components and feature.


## TailwindCSS
- [x] "tailwindcss": "^1.8.0"
- [ ] "tailwindcss-tables": "^0.4.0" - ???? - This implements Bootstrap like tables. I think I used it with the spm tables on the racewalking page.
- [ ] "@tailwindcss/custom-forms": "^0.2.1" - Admin: *See if really needed*
- [ ] "@tailwindcss/typography": "^0.2.0" - *See if really being used*


### Vue
- [x] "vue": "^2.6.12"
- [ ] "vue-agile": "^0.3.7" - ????
- [ ] "vue-date-pick": "^1.2.1"
- [ ] "[vue-gravatar](https://github.com/JiriChara/vue-gravatar)": "^1.2.1" - ????
- [x] "vue-modaltor": "^1.3.4"
- [ ] "vue-server-renderer": "^2.6.12" - ????


- [x] "vue-sweetalert2": "^1.2.4" - Used for memberships and checkout
- [x] "vue-template-compiler": "^2.5.17"
- [x] "vue2-collapse": "^1.0.11" - APPEARS TO NOT BEING USED

### Stripe

Need to figure out which one of these or both are being used.

- [ ] "[vue-stripe](https://github.com/matfish2/vue-stripe)": "^0.1.52" - ????
- [x] "[vue-stripe-checkout](https://github.com/jofftiquez/vue-stripe-checkout)": "^1.0.7" - Used for memberships and checkout

## Vue Components

Some current Vue components might be able to be moved to Livewire

- [ ] Explore moving **Favorites**, **Completed** and **Assignments** from Vue to Livewire. Might be a simpler and cleaner solution.
- [ ] [MeiliSearch](../Dev/MeiliSearch/MeiliSearch.md) - Using curtsheller-dev.com (csp-dev.test) to MeiliSearch and using VueInstantSearch.
