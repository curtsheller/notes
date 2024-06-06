# MeiliSearch: Security and Permissions
## Master Keys and API

### Local

```
curl \
  -X GET 'http://search2.learningukulele.com/version' \
  -H 'Authorization: Bearer mele1-pono-lani-meilisearch-v1' | jq
```
#### Returns:
```
"results": [
   {
  "results": [
    {
      "name": "Default Search API Key",
      "description": "Use it to search from the frontend",
      "key": "079029f2cf83186a13933b3f237d27f3f06399894a07480ae77f3771415316a9",
      "uid": "fdffefd8-1afb-46d5-b26e-1da9ad69599d",
    {
      "name": "Default Admin API Key",
      "description": "Use it for anything that is not a search operation. Caution! Do not expose it on a public frontend",
      "key": "948cbc0bb2bb118aa4f4838fb23d0f913dc947e321f68aa25d8eb8d2c5c50d0b",
      "uid": "24617626-889d-4d36-9bad-2140f7a1f49c",
    }
  ],
}

  ```
----
****Curt Sheller Publications**/**Funky Frets • **CSP**: Pottstown, PA 19464 USA, **FF**: Boyertown, PA 19512 USA • [curt@curtsheller.com](mailto:curt@curtsheller.com) [UPDATED: **2023-06-14**]
