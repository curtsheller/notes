# Settings
## -X POST

## Local 127.0.0.1:7700 Development
```
  -H "Content-Type: application/json" \
  -X POST 'http://127.0.0.1:7700/indexes/users/settings' \
```

## Production: search.learningukulele.com
```
  -H "Content-Type: application/json" \
	-H "X-Meili-API-Key: a8957ab32d0cb35d5b4aee06e97b2a8f7dec89a97b7a953e3c6ae489b01d171e"  \
  -X POST 'https://search.learningukulele.com/indexes/users/settings' \
```


# Keys

## search.learningukulele.com
```
curl \
  -H "Content-Type: application/json" \
  -H "X-Meili-API-Key: 9x1qclIt3wvcykNyEmel" \
  -X GET 'https://search.learningukulele.com/keys'
```

# Version
a8957ab32d0cb35d5b4aee06e97b2a8f7dec89a97b7a953e3c6ae489b01d171e
374180dbc25e5a3b9f95231f1ba8d990c51aea6de8df46a6d492d63076b80ed2
167.71.22.231
```
curl   -H "Content-Type: application/json" \
-X GET 'http://localhost:7700/version'

curl   -H "Content-Type: application/json" \
-H "X-Meili-API-Key: a8957ab32d0cb35d5b4aee06e97b2a8f7dec89a97b7a953e3c6ae489b01d171e" -X GET 'http://search.learningukulele.com/version'
```

Response will be:
<small>
```
{
  "commitSha": "928930ddd552596f51280a17c143cf38079cdea9",
  "commitDate": "2021-09-13T10:17:10+00:00",
  "pkgVersion": "0.22.0"
}
```
</small>

# Health
Health doesn't need a key for access.
```
curl -X GET 'https://search.learningukulele.com/health'
curl -X GET 'https://search.curtsheller-dev.com/health'
curl -X GET 'http://localhost:7700/health'
```

# Stats
### Production: search.learningukulele.com
```
curl -H "X-Meili-API-Key: a8957ab32d0cb35d5b4aee06e97b2a8f7dec89a97b7a953e3c6ae489b01d171e" -X GET 'http://167.71.22.231/stats' | jq
```
### Local Testing 120.0.0.1:7700
```
curl -H "X-Meili-API-Key: 64f402a7357132448e539aad7dd37509f04b9a514d48bfe45388fe7888160e91" -X GET 'https://search.learningukulele.com/stats'
```

# Search
```
curl \
  -X POST 'http://localhost:7700/indexes/lessons/search' \
  -H 'Content-Type: application/json' \
  --data-binary '{ "q": "Flintstone" }' | jq
```

# DELETE

```
curl \
-H "X-Meili-API-Key: 1e2341068cf4d1e35b0dac99de5d889a6e5b1faa74cc0587f61796dbd938345a"
\
  -X DELETE 'https://search.curtsheller-dev.com/indexes/songs'
```

### search.curtsheller-dev.com key
```
curl -H "X-Meili-API-Key: 1e2341068cf4d1e35b0dac99de5d889a6e5b1faa74cc0587f61796dbd938345a"
```

# Indexes
(8 Oct 2021) - Use private keys with curl
```
curl -H "X-Meili-API-Key: 1e2341068cf4d1e35b0dac99de5d889a6e5b1faa74cc0587f61796dbd938345a" -X GET 'https://search.curtsheller-dev.com/indexes'
```

## Response
```
  % Total ...
[
  {
    "uid": "assets",
    "name": "assets",
    "createdAt": "2021-10-15T15:12:37.787227513Z",
    "updatedAt": "2021-10-15T15:30:17.905031364Z",
    "primaryKey": "id"
  },
  {
    "uid": "assignments",
    "name": "assignments",
    "createdAt": "2021-10-15T15:14:20.260447608Z",
    "updatedAt": "2021-10-15T15:14:20.260447608Z",
    "primaryKey": null
  },
  {
    "uid": "bears",
    "name": "bears",
    "createdAt": "2021-10-15T15:12:39.207629546Z",
    "updatedAt": "2021-10-15T15:32:59.006285418Z",
    "primaryKey": "id"
  },
  ... All the indexes will be returned.
]
```
### Local Testing 120.0.0.1:7700
```
curl GET 'https://120.0.0.1:7700/indexes'
```


