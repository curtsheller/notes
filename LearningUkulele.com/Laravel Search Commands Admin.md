# Laravel Search Commands Admin

Updated **27 Sept 2021**
- [x] Make `.sh` script to automate update and total rebuild.
- [x] Add **Asset** model to MeiliSearch server(s)
- [ ] Upgrade server to lastest version. Going to wait for v1.0.


LearningUkulele.com and related sites are using MeiliSerach.

## MeiliSearch (PROD: v.0.22, LOCAL: v.0.20)

**29 Sept 2021**: This is the search server. This is a DigiatalOcean server.

### Domain Names
- local dev (curl -X GET 'http://localhost:7700/version')
- search.curtsheller-dev.com (IN USE) (v.0.16.0)
- search.learningukulele.com

#### Get Version: productiona and local
```
  curl -H "X-Meili-API-Key: API_KEY" -X GET 'https://search.curtsheller-dev.com/version'
  curl -X GET 'http://localhost:7700/version'

```

----
## Commands

- [Attributes for Searching, Faceting](https://docs.meilisearch.com/reference/api/attributes_for_faceting.html)

### GET Attributes for Searching, Faceting, etc.
```
``
curl -H "X-Meili-API-Key: API_KEY" -X GET 'https://search.curtsheller-dev.com/indexes/users/settings/attributes-for-faceting'
curl -H "X-Meili-API-Key: API_KEY" -X GET 'https://search.curtsheller-dev.com/indexes/books/settings/searchable-attributes'
```

### Misc Commands
- Server address above.
```
  curl -H "X-Meili-API-Key: API_KEY" -X DELETE 'https://search.curtsheller-dev.com/indexes/users/settings/attributes-for-faceting'
```

```
	curl -H "X-Meili-API-Key: API_KEY" -X GET 'https://search.curtsheller-dev.com/indexes'
	curl -H "X-Meili-API-Key: API_KEY" -X GET 'https://search.curtsheller-dev.com/health'
	curl -H "X-Meili-API-Key: API_KEY" -X GET 'https://search.curtsheller-dev.com/stats'
	curl -H "X-Meili-API-Key: API_KEY" -X GET 'https://search.curtsheller-dev.com/version'
```

----
# Models: User
27 Spet 2021: Don;t have the ordering by `assigned_date` figured out yet.

```
php artisan scout:index -d users
php artisan scout:index users
php artisan scout:flush "App\Models\User"
php artisan scout:import "App\Models\User"
```
```
curl -H "X-Meili-API-Key: API_KEY" \
-X POST 'https://search.curtsheller-dev.com/indexes/users/settings/ranking-rules' \
  --data '[
    "typo",
    "words",
    "proximity",
    "attribute",
    "wordsPosition",
    "exactness",
    "desc(assigned_date)"
]'
```

```
curl -H "X-Meili-API-Key: API_KEY" \
   -X POST 'https://search.curtsheller-dev.com/indexes/users/settings' \
    --data '{
     "attributesForFaceting": [
        "roles.name",  "status"
     ]
  }'
```

To restore your searchable attributes list to this default behavior, simply set searchableAttributes to an empty array [] or use the reset searchable attributes endpoint.
 
```
curl -H "X-Meili-API-Key: API_KEY" \
-X POST 'https://search.curtsheller-dev.com/indexes/users/settings' \
--data '{"attributesForFaceting": []}'
```

### Scout Commands
```
php artisan scout:flush "App\User"
php artisan scout:delete-index users
php artisan scout:index users
php artisan scout:import "App\User"
```

### User/Student Assignments
```
php artisan scout:delete-index assignments
php artisan scout:index assignments
php artisan scout:flush "App\Models\Assignment"
php artisan scout:import "App\Models\Assignment"
```

```
curl -H "X-Meili-API-Key: API_KEY" \
-X GET 'https://search.curtsheller-dev.com/indexes/assignments/settings/ranking-rules'

curl -H "X-Meili-API-Key: API_KEY" \
-X POST 'https://search.curtsheller-dev.com/indexes/assignments/settings/ranking-rules' \
  --data '[
    "desc(assigned_date)",
    "typo",
    "words",
    "proximity",
    "attribute",
    "wordsPosition",
    "exactness"
]'
```

# Asset Based Models
Assets, Books, Lessons, Songs, Series, Playalongs, Videos, Bears (for testing).

All Asset based models get 'status' and 'category'. Other models might get instrument as well. All depends on the search and table fields.


```
php artisan scout:delete-index -d assets
php artisan scout:index assets
php artisan scout:flush "App\Models\Asset"
php artisan scout:import "App\Models\Asset"
```

All Asset based models get category. Other models might get instrument as well.


## Faceting and Stop Words
```
curl \
   -H "X-Meili-API-Key: API_KEY" \
   -X POST 'https://search.curtsheller-dev.com/indexes/assets/settings' \
    --data '{
     "attributesForFaceting": [
      "category", "status"
     ],
    "stopWords": [
        "the",
        "a",
        "an"
      ]
  }'

```

```
curl \
  -H "X-Meili-API-Key: API_KEY" \
  -X POST 'https://search.curtsheller-dev.com/indexes/users/settings/ranking-rules' \
  --data '[
      "typo",
      "words",
      "proximity",
      "attribute",
      "wordsPosition",
      "exactness",
      "asc(updated_date)",
```

# Laravel Scout Commands

- [laravel/scout ==>](https://github.com/laravel/scout/tree/9.x/src)

```
php artisan scout:delete-index assets
php artisan scout:index assets
php artisan scout:flush "App\Models\Asset"
php artisan scout:import "App\Models\Asset"

php artisan scout:delete-index books
php artisan scout:index books
php artisan scout:flush "App\Models\Book"
php artisan scout:import "App\Models\Book"

php artisan scout:delete-index lessons
php artisan scout:index lessons
php artisan scout:flush "App\Models\Lesson"
php artisan scout:import "App\Models\Lesson"

php artisan scout:delete-index listings
php artisan scout:index listings
php artisan scout:flush "App\Models\Listing"
php artisan scout:import "App\Models\Listing"

php artisan scout:delete-index playalongs
php artisan scout:index playalongs
php artisan scout:flush "App\Models\Playalong"
php artisan scout:import "App\Models\Playalong"


php artisan scout:delete-index series
php artisan scout:index series
php artisan scout:flush "App\Models\Series"
php artisan scout:import "App\Models\Series"

php artisan scout:delete-index songs
php artisan scout:index songs
php artisan scout:flush "App\Models\Song"
php artisan scout:import "App\Models\Song"


php artisan scout:index -d videos
php artisan scout:index videos
php artisan scout:flush "App\Models\Video"
php artisan scout:import "App\Models\Video"
```

# Users
```
php artisan scout:delete-index users
php artisan scout:index users
php artisan scout:flush "App\User"
php artisan scout:import "App\User"
```

# Bears
Bears are used for testing.
```
php artisan scout:delete-index bears
php artisan scout:index bears
php artisan scout:flush "App\Models\Bear"
php artisan scout:import "App\Models\Bear"
```

# Vue Components

- [**Vue InstantSearch Widgets** =>](https://www.algolia.com/doc/api-reference/widgets/vue/)

Some assets have their components: **Assets**, **Bears**, **Listings**

For 'Assets' based models/component the 'instrument' prop slot is false.
```
<search-component assets="lessons" :instrument=true images="/assets/lessons/pdf/images/"></search-component>
```