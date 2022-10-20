# Assignments, Listings

- [ ] Add indexes for all models using [Search: Laravel Scout Commands](../../Dev/MeiliSearch/Search_%20Laravel%20Scout%20Commands.md). This needs to be done in forge leaarningukulele.com directory.
- [ ] Update [MeiliSearch: Settings](../../Dev/MeiliSearch/MeiliSearch_%20Settings.md) for all models using curl. This can be done anywhere.

*These need to be run from **forge** learningukulele.com* or local directory for learningukulele.com site.

# IF NO Indexes
```
php artisan scout:delete-index listings
php artisan scout:index listings
php artisan scout:import "App\Models\Listing"

```

# IF HAVE Indexes
```
php artisan scout:index listings
php artisan scout:import "App\Models\Listing"
```


# Filters (filterableAttributes)
This can be run from anywhere. (*JSON below*)

- [ ] **Assignments** - none
- [ ] **Listings** -"category"

# Sort (sortableAttributes)
This can be run from anywhere. (*JSON below*)

- [ ] **Assignments** - none
- [ ] **Listings** - "title"

- [MeiliSearch: Settings](../../Dev/MeiliSearch/MeiliSearch_%20Settings.md)



## Listings
- [MeiliSearch: curl Snippets](../../Dev/MeiliSearch/MeiliSearch_%20curl%20Command%20and%20Snippets.md)
```
curl \
	-H "X-Meili-API-Key: a8957ab32d0cb35d5b4aee06e97b2a8f7dec89a97b7a953e3c6ae489b01d171e"  \
  -X POST 'https://search.learningukulele.com/indexes/indexes/listings/settings' \
  --data '{
    "displayedAttributes": [
      "*"
    ],
    "searchableAttributes": [
       "*"
    ],
  	"filterableAttributes": ["category","instrument","status"],
  	"sortableAttributes": ["title","updated_date"],
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