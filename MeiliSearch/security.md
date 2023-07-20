# MeiliSearch: Security and Permissions
## Master Keys and API

### Local

```
curl \
  -X GET 'http://localhost:7700/keys' \
  -H 'Authorization: Bearer mele1-pono-lani-meilisearch-v1' | jq
```
#### Returns:
```
"results": [
    {
      "name": "Default Search API Key",
      "description": "Use it to search from the frontend",
      "key": "d0ddfbdc904f575ec79acdb5438c7235efb6bf246e7de323f1eadc7784dfa0b2",
      "uid": "66543093-37e9-4c7e-bb3e-0c2964d78577",
    {
      "name": "Default Admin API Key",
      "description": "Use it for anything that is not a search operation. Caution! Do not expose it on a public frontend",
      "key": "3afdfd08eae7447765d7e33956a20bd5e1f770078e1177449d09a8e446d5d593",
      "uid": "a5edcd4d-1ce3-4bcd-a213-3f424e0fd834",
    }
  ],

  ```
----
****Curt Sheller Publications**/**Funky Frets • **CSP**: Pottstown, PA 19464 USA, **FF**: Boyertown, PA 19512 USA • [curt@curtsheller.com](mailto:curt@curtsheller.com) [UPDATED: **2023-06-14**]
