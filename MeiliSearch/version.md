# MeiliSearch
## Get Version Info

### Local
```
curl \
  -X GET 'http://localhost:7700/version' \
  -H 'Authorization: Bearer mele1-pono-lani-meilisearch-v1'  | jq
```

### Production: search.learningukulele.com

Use private key to access
- Use private key

```
  curl \
  -H "X-Meili-API-Key: 948cbc0bb2bb118aa4f4838fb23d0f913dc947e321f68aa25d8eb8d2c5c50d0b" \
  'https://search.learningukulele.com/version' \
  -H 'Authorization: Bearer mele1-pono-lani-meilisearch-v1'  | jq
```

----
****Curt Sheller Publications**/**Funky Frets • **CSP**: Pottstown, PA 19464 USA • [curt@curtsheller.com](mailto:curt@curtsheller.com) [UPDATED: **2025-02-17**]

