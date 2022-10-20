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

## MeiliSearch Servers

### Laravel Forge Managed
#### search.learningukulele.com

- DigitalOcean Droplet Name: learningukulele-meilisearch
- Public IP: 161.35.2.20
- Private IP: 10.116.0.3
- Sudo Password: qZ6PvQe4lfYl24SkbYqQ
- MeiliSearch Password: 1iZWk0Jbo7OimxTzJOBQ
- Default Search API Key:
- Default Admin API Key:
- SSL: YES

### Laravel Forge Managed
#### search.curtsheller-dev.com

- DigitalOcean Droplet Name: meilisearch-forge-lu
- Public IP: 167.71.26.1
- Private IP: 10.116.0.2
- Sudo Password: FlhM6a3vbqBUvYRsRZcn
- MeiliSearch Password: nQv0vKLf47VjZNrnRsix
- Default Search API Key: 1e2341068cf4d1e35b0dac99de5d889a6e5b1faa74cc0587f61796dbd938345a
- Default Admin API Key: 9cddd8a166699b3f291f1f71b5a08c826ce29839bc3ec497093f7a615a45ef69
- SSL: YES

### DigitalOcean Managed
#### search2.learningukulele.com

- DigitalOcean Droplet Name: meilisearch-learningukulele-two
- Public IP: 157.230.52.50
- Private IP: 10.136.251.188
- MeiliSearch Password: ZjAyOGM3MzRkZThmNWFjNzIxMThmNTIz
- Default Search API Key: 22dc810f54d75d4b9394a39273d2d753cd47f99a01bc9dbcc1d87dea8c2d64b5
- Default Admin API Key: 71e66151baff35d2bebafbfaa546cf6d8f7bef9605d11479c0481d90cc6cb410
- SSL: YES

#### Links &amp; Resources

- [**Configure Meilisearch at Launch** &#128279;](https://docs.meilisearch.com/learn/configuration/instance_options.html#command-line-options-and-flags)
- [Master key and API keys &#128279;](https://docs.meilisearch.com/learn/security/master_api_keys.html)
- [Keys &#128279;](https://docs.meilisearch.com/reference/api/keys.html)

```sh
./meilisearch --master-key="1iZWk0Jbo7OimxTzJOBQ"
```

<!--
See the LearningUkulele.[text|com] .env file for DNS and API keys.
-->


```
alias lumsssh='ssh root@IP -i ~/.ssh/id_rsa'
```

### Commands (CLI)

```sh
curl \
  -X GET 'http://localhost:7700/keys' \
  -H "Content-Type: application/json" \
  -H 'Authorization: Bearer 1iZWk0Jbo7OimxTzJOBQ' | jq

curl X GET 'http://161.35.2.20/health'

curl \
  -X GET 'http://161.35.2.20/keys' \
  -H "Content-Type: application/json" \
  -H 'Authorization: Bearer 1iZWk0Jbo7OimxTzJOBQ' | jq

curl -k \
  -X GET 'http://161.35.2.20/keys' \
  -H "Content-Type: application/json" \
  -H 'Authorization: Bearer 1iZWk0Jbo7OimxTzJOBQ'

curl -k \
  -X GET 'https://search.learningukulele.com/version' \
  -H "Content-Type: application/json" \
  -H 'Authorization: Bearer 1iZWk0Jbo7OimxTzJOBQ'

curl -k \
  -X GET 'http://161.35.2.20/version' \
  -H "Content-Type: application/json" \
  -H 'Authorization: Bearer 1iZWk0Jbo7OimxTzJOBQ' | jq
```

```sh
curl -X GET 'https://167.99.152.193/version' -H 'Authorization: Bearer MASTER_KEY' | jq
```

curl -X GET 'http://localhost:7700/indexes/users/settings' | jq

curl -H "X-Meili-API-Key: 1e2341068cf4d1e35b0dac99de5d889a6e5b1faa74cc0587f61796dbd938345a"  \
-X GET 'https://search.curtsheller-dev.com/indexes/playlongs/settings' | jq


curl -X GET 'http://localhost:7700/keys' | jq

curl \
  -X GET 'http://localhost:7700/keys' \
  -H 'Authorization: Bearer' | jq

