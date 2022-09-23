# vue-instantsearch

- https://vuejscode.com/vue-instantsearch-not-working-in-my-vuejs-30-project
- https://github.com/algolia/vue-instantsearch
- https://www.algolia.com/doc/guides/building-search-ui/upgrade-guides/vue/


```
"devDependencies": {
     ...
    "@vue/compiler-sfc": "^3.2.20"
   }
```

https://github.com/meilisearch/instant-meilisearch
https://github.com/meilisearch/meilisearch-vue/


Since vue instantsearch 4 is released it now supports Vue3.

Related comment: meilisearch/meilisearch-vue#18 (comment)

"Vue InstantSearch v4.0.0 has been released and now it supports Vue 3 tada"

algolia/vue-instantsearch#890

I had the same problem. I solved it by importing InstantSearch from the vue3 directory.
import InstantSearch from "vue-instantsearch/vue3/es/src/components/InstantSearch";

https://github.com/meilisearch/meilisearch-vue/issues/18
