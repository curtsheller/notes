# MeiliSearch
## Get Version Info

### Local
```
curl -X GET 'http://localhost:7700/version' | jq
```

#### Response
```
{
  "commitSha": "928930ddd552596f51280a17c143cf38079cdea9",
  "commitDate": "2021-09-13T10:17:10+00:00",
  "pkgVersion": "0.22.0"
}
```

### Production: search.learningukulele.com

Use private key to access
- Use private key

```
curl \
-H "X-Meili-API-Key: 1e2341068cf4d1e35b0dac99de5d889a6e5b1faa74cc0587f61796dbd938345a" \
-X GET 'https://search.curtsheller-dev.com/version' | jq
```

```
{
    "commitSha":"928930ddd552596f51280a17c143cf38079cdea9",
    "commitDate":"2021-09-13T10:17:10+00:00",
    "pkgVersion":"0.22.0"
}
```

### Production: search.curtsheller-dev.com
- Use private key
```
curl \
    -H "X-Meili-API-Key: 1e2341068cf4d1e35b0dac99de5d889a6e5b1faa74cc0587f61796dbd938345a" \
    -X GET 'https://search.curtsheller-dev.com/version'
```

```
{
  "commitSha": "2e2eeb0a424408e27f4223e58afec303c53e1419",
  "commitDate": "2021-10-12T14:47:06+00:00",
  "pkgVersion": "0.23.1"
}
```
