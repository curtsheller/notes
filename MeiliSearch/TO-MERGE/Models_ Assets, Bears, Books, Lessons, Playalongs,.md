# Assets Based Models

These are the models that have `AssetBasedTrait`. They share filters, sorts, etc...

The `Bears` model is for testing.

- [ ] Add indexes for all models using [Search: Laravel Scout Commands](../../Dev/MeiliSearch/Search_%20Laravel%20Scout%20Commands.md). This needs to be done in forge leaarningukulele.com directory.
- [ ] Update [MeiliSearch: Settings](../../Dev/MeiliSearch/MeiliSearch_%20Settings.md) for all models using curl. This can be done anywhere.

*These need to be run from **forge** learningukulele.com* or local directory for learningukulele.com site.

# If NOT Indexes
```
php artisan scout:delete-index assets
php artisan scout:index assets
php artisan scout:import "App\Models\Asset"

php artisan scout:delete-index bears
php artisan scout:index bears
php artisan scout:import "App\Models\Bear"

php artisan scout:delete-index books
php artisan scout:index books
php artisan scout:import "App\Models\Book"

php artisan scout:delete-index lessons
php artisan scout:index lessons
php artisan scout:import "App\Models\Lesson"

php artisan scout:delete-index playalongs
php artisan scout:index playalongs
php artisan scout:flush "App\Models\Playalong"

php artisan scout:delete-index series
php artisan scout:index series
php artisan scout:import "App\Models\Series"

php artisan scout:delete-index songs
php artisan scout:index songs
php artisan scout:import "App\Models\Song"

php artisan scout:delete-index videos
php artisan scout:index videos
php artisan scout:import "App\Models\Video"
```

# If HAVE Indexes
```
php artisan scout:flush "App\Models\Asset"
php artisan scout:import "App\Models\Asset"

php artisan scout:flush "App\Models\Bear"
php artisan scout:import "App\Models\Bear"

php artisan scout:flush "App\Models\Book"
php artisan scout:import "App\Models\Book"

php artisan scout:flush "App\Models\Lesson"
php artisan scout:import "App\Models\Lesson"

php artisan scout:flush "App\Models\Playalong"
php artisan scout:import "App\Models\Playalong"

php artisan scout:flush "App\Models\Series"
php artisan scout:import "App\Models\Series"

php artisan scout:flush "App\Models\Song"
php artisan scout:import "App\Models\Song"

php artisan scout:flush "App\Models\Video"
php artisan scout:import "App\Models\Video"
```

# Filters (filterableAttributes)
## Asset Based Models
- [ ] **Assets** "category", "instrument", "status"
- [ ] **Books** - "category", "instrument", "status"
- [ ] **Lessons** - "category", "instrument", "status"
- [ ] **Playalongs** - "category", "instrument", "status"
- [ ] **Series** - "category", "instrument", "status"
- [ ] **Songs** - "category", "instrument", "status"
- [ ] **Videos** - "category", "instrument", "status"
- [ ] **Bears** - "category", "status"


## non-Asset Based Models
- [ ] **Assignments** - none
	- [Models: Assignments](../../Dev/MeiliSearch/Models_%20Listings.md)
- [ ] **Listings** -"category"
	- [Models: Listings](../../Dev/MeiliSearch/Models_%20Listings.md)
- [ ] **Users** - "status"
	- [Models: Users](../../Dev/MeiliSearch/Models_%20Users.md)

# Sort (sortableAttributes)

Dates need to be converted to timestamps for MeiliSearch in `toSearchableArray` method of the `Searchable` trait.

```
    public function toSearchableArray()
    {
        $array = $this->toArray();

        $array['updated_date'] = strtotime($array['updated_date']);

        return $array;
    }
```

## Asset Based

These are the fields that can be sorted.

- [ ] **Assets** - "title", "updated_date
- [ ] **Books** - "title", "updated_date"
- [ ] **Lessons** - "title", "updated_date"
- [ ] **Songs** - "title", "updated_date"
- [ ] **Playalongs** - "title", "updated_date"
- [ ] **Series** - "title", "updated_date"
- [ ] **Videos** - "title", "updated_date"
- [ ] **Bears** - "title"

## non-Asset Based

These are the fields that can be sorted.

- [ ] **Assignments** - "assigned_date"
- [ ] **Listings** - "title", "updated_date
- [ ] **Users** - "last_login"

- [MeiliSearch: Settings](../../Dev/MeiliSearch/MeiliSearch_%20Settings.md)

# Assets, Books, Lessons, Series, Songs, Playalongs, Videos

- [MeiliSearch: curl Snippets](../../Dev/MeiliSearch/MeiliSearch_%20curl%20Command%20and%20Snippets.md)

```
curl \
  -H "Content-Type: application/json" \
  -H "X-Meili-API-Key: 1e2341068cf4d1e35b0dac99de5d889a6e5b1faa74cc0587f61796dbd938345a"  \
  -X POST 'https://search.curtsheller-dev.com/indexes/videos/settings' \
  --data '{
  "displayedAttributes": [
    "*"
  ],
  "searchableAttributes": [
    "*"
  ],
  "filterableAttributes": ["category","instrument","status"],
  "sortableAttributes": ["title","updated_date"],
  "rankingRules": [
    "words",
    "typo",
    "proximity",
    "attribute",
    "sort",
    "exactness"
  ],
  "stopWords": [],
  "synonyms": {
    "ukulele": ["ukelele", "uke"]
  },
  "distinctAttribute": null
}' | jq
```
# Bears
- [MeiliSearch: curl Snippets](../../Dev/MeiliSearch/MeiliSearch_%20curl%20Command%20and%20Snippets.md)
```
curl \
  -H "Content-Type: application/json" \
  -H "X-Meili-API-Key: 1e2341068cf4d1e35b0dac99de5d889a6e5b1faa74cc0587f61796dbd938345a"  \
  -X POST 'https://search.curtsheller-dev.com/indexes/bears/settings' \
  --data '{
  "displayedAttributes": [
    "*"
  ],
  "searchableAttributes": [
    "*"
  ],
  "filterableAttributes": ["category","status"],
  "sortableAttributes": ["title"],
  "rankingRules": [
    "words",
    "typo",
    "proximity",
    "attribute",
    "sort",
    "exactness"
  ],
  "stopWords": [],
  "synonyms": {
    "ukulele": ["ukelele", "uke"]
  },
  "distinctAttribute": null
}' | jq
```
# Listings
No filterableAttributes.
- [MeiliSearch: curl Snippets](../../Dev/MeiliSearch/MeiliSearch_%20curl%20Command%20and%20Snippets.md)
```
curl \
  -H "Content-Type: application/json" \
  -H "X-Meili-API-Key: 1e2341068cf4d1e35b0dac99de5d889a6e5b1faa74cc0587f61796dbd938345a"  \
  -X POST 'https://search.curtsheller-dev.com/indexes/listings/settings' \
  --data '{
    "displayedAttributes": [
      "*"
    ],
    "searchableAttributes": [
       "*"
    ],
    "filterableAttributes": ["category"],
    "sortableAttributes": ["title"],
    "stopWords": [
        "the",
        "a",
        "an"
    ],
    "rankingRules": [
      "words",
      "typo",
      "proximity",
      "attribute",
      "sort",
      "exactness"
    ],
    "synonyms": {
      "ukulele": ["ukelele", "uke"]
    },
    "distinctAttribute": null
  }'
  ```
