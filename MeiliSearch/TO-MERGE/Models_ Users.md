# Users

- [ ] Add indexes for all models using [Search: Laravel Scout Commands](../../Dev/MeiliSearch/Search_%20Laravel%20Scout%20Commands.md). This needs to be done in forge leaarningukulele.com directory.
- [ ] Update [MeiliSearch: Settings](../../Dev/MeiliSearch/MeiliSearch_%20Settings.md) for all models using curl. This can be done anywhere.

# IF NO Index
```
php artisan scout:delete-index users
php artisan scout:index users
php artisan scout:import "App\Models\User"
```

# IF HAVE Index
```
php artisan scout:index users
php artisan scout:import "App\Models\User"
php artisan scout:flush "App\Models\User"
```

# Filters (filterableAttributes)
This can be run from anywhere. (*JSON below*)

- [ ] **Users** - none

# Sort (sortableAttributes)
This can be run from anywhere. (*JSON below*)

- [ ] **Users** - "status"

- [MeiliSearch: Settings](../../Dev/MeiliSearch/MeiliSearch_%20Settings.md)

# Users
- [MeiliSearch: curl Snippets](../../Dev/MeiliSearch/MeiliSearch_%20curl%20Command%20and%20Snippets.md)

## GET

## GET Settings
```
curl -X GET 'http://localhost:7700/indexes/users/settings' | jq

curl -H "X-Meili-API-Key: 1e2341068cf4d1e35b0dac99de5d889a6e5b1faa74cc0587f61796dbd938345a"  \
-X GET 'https://search.curtsheller-dev.com/indexes/users/settings' | jq
```

## POST Settings
```
curl \
  -H "Content-Type: application/json" \
  -H "X-Meili-API-Key: 1e2341068cf4d1e35b0dac99de5d889a6e5b1faa74cc0587f61796dbd938345a"  \
  -X POST 'https://search.curtsheller-dev.com/indexes/users/settings' \
  --data '{
  "displayedAttributes": [
    "*"
  ],
  "searchableAttributes": [
    "*"
  ],
  "filterableAttributes": ["status"],
  "sortableAttributes": ["id",name","last_login","created_at"],
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
