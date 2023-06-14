# Install &amp; Configuration

Use the same Master Key for local and production.

- [How to Deploy MeiliSearch on Laravel Forge](https://postsrc.com/posts/how-to-deploy-meilisearch-on-laravel-forge)

1. Create Server

2. Retrieve API Keys

3. Update Server Network  (MeiliSearch-Server)
Allow MeiliSearch server (learningukulele-meilisearch) to be accessible by other Laravel Forge app server. Add learningukulele.com in Server Network tab.

4. Update the Server Network (Laravel App Server)
Allow LearningUkulele.com server to be accessible by other Laravel Forge app server. Add learningukulele.com in Server Network tab.

5. Update .env files and scripts.

# Keys

The /keys route allows you to create, manage, and delete API keys. To use these endpoints, you must first set the master key. Once a master key is set, you can access these endpoints by supplying it in the header of the request, or using API keys that have access to the keys.get, keys.create, keys.update, or keys.delete actions.

- Default **Search** API Key: Use it to _search from the frontend_
- Default **Search** API Key: Use it for anything that is **NOT** _a search operation_. Caution! Do not expose it on a public frontend


<!--
See the LearningUkulele.[text|com] .env file for DNS and API keys.
-->


```
alias lumsssh='ssh root@68.183.17.56'
```

### Commands (CLI)

```sh
curl \
  -X GET 'http://localhost:7700/keys' \
  -H "Content-Type: application/json" \
  -H 'Authorization: Bearer mele1-pono-lani-meilssearch-v1' | jq

curl X GET 'http://161.35.2.20/health'

# search.learningukulele.com, Meilisearch v1.1
curl \
  -X GET 'http://68.183.17.56/keys' \
  -H "Content-Type: application/json" \
  -H 'Authorization: Bearer mele1-pono-lani-meilisearch-v1' | jq

curl \
  -X GET 'http://68.183.17.56/version' \
  -H "Content-Type: application/json" \
  -H 'Authorization: Bearer mele1-pono-lani-meilisearch-v1' | jq
```


curl -X GET 'http://localhost:7700/indexes/users/settings' | jq

curl -X GET 'http://localhost:7700/keys' | jq
curl \
  -X GET 'http://localhost:7700/keys' \
  -H "Content-Type: application/json" \
  -H 'Authorization: Bearer' | jq

curl -H "X-Meili-API-Key: 1e2341068cf4d1e35b0dac99de5d889a6e5b1faa74cc0587f61796dbd938345a"  \
-X GET 'https://search.curtsheller-dev.com/indexes/playlongs/settings' | jq

----
****Curt Sheller Publications**/**Funky Frets • **CSP**: Pottstown, PA 19464 USA, **FF**: Boyertown, PA 19512 USA • [curt@curtsheller.com](mailto:curt@curtsheller.com) [UPDATED: **2023-06-14**]
