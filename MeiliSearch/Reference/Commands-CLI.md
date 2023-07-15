# Meilisearch: Commands (CLI)

## Authorization

By providing **Meilisearch** with a master key at launch, you protect your instance from unauthorized requests. The provided master key must be at least 16 bytes. From then on, you must include the Authorization header along with a valid API key to access protected routes (all routes except /health.)

The /keys route can only be accessed using the master key. For security reasons, we recommend using regular API keys for all other routes.

- [**API reference** &rArr;](https://www.meilisearch.com/docs/reference/api/overview)

```sh
curl \
  -X GET 'http://localhost:7700/keys' \
  -H "Content-Type: application/json" \
  -H 'Authorization: Bearer mele1-pono-lani-meilisearch-v1' | jq

curl X GET 'http://161.35.2.20/health'

# search.learningukulele.com, Meilisearch v1.1
curl \
  -X GET 'http://68.183.17.56/keys' \
  -H "Content-Type: application/json" \
  -H 'Authorization: Bearer e2f80e823081d184bd3d034d65bec4d8ce435059fbee065d68942eae39bfd9a5' | jq

curl \
  -X GET 'http://68.183.17.56/version' \
  -H "Content-Type: application/json" \
  -H 'Authorization: Bearer e2f80e823081d184bd3d034d65bec4d8ce435059fbee065d68942eae39bfd9a5' | jq

curl -X GET 'http://localhost:7700/indexes/users/settings' \
  -H "Content-Type: application/json" \
  -H 'Authorization: Bearer e2f80e823081d184bd3d034d65bec4d8ce435059fbee065d68942eae39bfd9a5' | jq
```

----
****Curt Sheller Publications**/**Funky Frets • **CSP**: Pottstown, PA 19464 USA, **FF**: Boyertown, PA 19512 USA • [curt@curtsheller.com](mailto:curt@curtsheller.com) [UPDATED: **2023-06-15**]
