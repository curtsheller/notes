# Assignments, Listings

- [ ] Add indexes for all models using [Search: Laravel Scout Commands](../../Dev/MeiliSearch/Search_%20Laravel%20Scout%20Commands.md). This needs to be done in forge leaarningukulele.com directory.
- [ ] Update [MeiliSearch: Settings](../../Dev/MeiliSearch/MeiliSearch_%20Settings.md) for all models using curl. This can be done anywhere.

*These need to be run from **forge** learningukulele.com* or local directory for learningukulele.com site.

# IF NO Indexes
```
php artisan scout:delete-index assignments
php artisan scout:index assignments
php artisan scout:import "App\Models\Assignment"
```

# IF HAVE Indexes
```
php artisan scout:flush "App\Models\Assignment"
php artisan scout:import "App\Models\Assignment"
```


# Filters (filterableAttributes)
This can be run from anywhere. (*JSON below*)

- [ ] **Assignments** - none

# Sort (sortableAttributes)
This can be run from anywhere. (*JSON below*)

- [ ] **Assignments** - "assigned_date"

- [MeiliSearch: Settings](../../Dev/MeiliSearch/MeiliSearch_%20Settings.md)


## Assignments
- [MeiliSearch: curl Snippets](../../Dev/MeiliSearch/MeiliSearch_%20curl%20Command%20and%20Snippets.md)

No filterableAttributes.

```
curl \
  -H "Content-Type: application/json" \
  -H "X-Meili-API-Key: 1e2341068cf4d1e35b0dac99de5d889a6e5b1faa74cc0587f61796dbd938345a"  \
  -X POST 'http://127.0.0.1:7700/indexes/assignments/settings' \
  -X POST 'https://search.learningukulele.com/indexes/assignments/settings' \
  --data '{
    "displayedAttributes": [
      "*"
    ],
    "searchableAttributes": [
       "*"
    ],
    "filterableAttributes": [],
  	"sortableAttributes": ["assigned_date"],
    "rankingRules": [
      "words",
      "typo",
      "proximity",
      "attribute",
      "sort",
      "exactness"
    ],
    "distinctAttribute": null
  }' | jq
  ```
