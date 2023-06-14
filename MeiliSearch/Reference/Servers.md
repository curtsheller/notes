# MeiliSearch Servers
UPDATED: 2023-06-14

# Keys

By default, Meilisearch's API is unprotected. This means all routes are publicly accessible, and require no authorization to access.

The **`/keys`** route allows you to create, manage, and delete API keys. To use these endpoints, you must first set the master key. Once a master key is set, you can access these endpoints by supplying it in the header of the request, or using API keys that have access to the keys.get, keys.create, keys.update, or keys.delete actions.

```shell
./meilisearch --master-key="mele1-pono-lani-meilisearch-v1"
```

**NOTE:** Using the same master-key for LOCAL development as in PRODUCTION.

### Once you launch Meilisearch with a **Master Key**, all API endpoints _except the health_ endpoint are automatically protected from unauthorized requests.

### From that point on, API requests must include the Authorization header to be successful. Read on to learn more

# MeiliSearch Servers

## keys, version

Anything other than `health` needs authorization.

#### Local Development
#### http://llocalhost:7700, Meilisearch v1.2

- MeiliSearch Key: mele1-pono-lani-meilisearch-v1
- Default Search API Key: 41a60f0193a624ae56609df1442351b78c35c1a8c621d3ffcc045c6432e9bc75
- Default Admin API Key: e2f80e823081d184bd3d034d65bec4d8ce435059fbee065d68942eae39bfd9a5
- SSL: NO

```shell
curl \
 -X GET 'http://localhost:7700/keys' \
 -H "Content-Type: application/json" \
 -H 'Authorization: Bearer mele1-pono-lani-meilisearch-v1' | jq
```

#### Production

```shell
curl \
  -X GET 'https://157.230.52.50/version' \
  -H "Content-Type: application/json" \
  -H 'Authorization: Bearer ZjAyOGM3MzRkZThmNWFjNzIxMThmNTIz' | jq
```

### health

```shell
curl -X GET 'http://68.183.17.56/health'
```

### DititalOcean Managed Servers

#### search.learningukulele.com

### DigitalOcean Managed
#### search.learningukulele.com, Meilisearch v1.1

- DigitalOcean Droplet Name: search.learningukulele.com
- Public IP: 68.183.17.56
- Private IP: 10.136.251.188
- MeiliSearch Key: mele1-pono-lani-meilisearch-v1
- Default Search API Key: 079029f2cf83186a13933b3f237d27f3f06399894a07480ae77f3771415316a9
- Default Admin API Key: 948cbc0bb2bb118aa4f4838fb23d0f913dc947e321f68aa25d8eb8d2c5c50d0b
- SSL: YES

### DigitalOcean Managed
#### search2.learningukulele.com (v)

- DigitalOcean Droplet Name: search2.learningukulele.com
- Public IP: 157.230.52.50
- Private IP: 10.136.251.188
- MeiliSearch Key: ZjAyOGM3MzRkZThmNWFjNzIxMThmNTIz
- Default Search API Key: 22dc810f54d75d4b9394a39273d2d753cd47f99a01bc9dbcc1d87dea8c2d64b5
- Default Admin API Key: 71e66151baff35d2bebafbfaa546cf6d8f7bef9605d11479c0481d90cc6cb410
- SSL: YES

#### Links & Resources

- [**Configure Meilisearch at Launch** &#128279;](https://docs.meilisearch.com/learn/configuration/instance_options.html#command-line-options-and-flags)
- [Master key and API keys &#128279;](https://docs.meilisearch.com/learn/security/master_api_keys.html)
- [Keys &#128279;](https://docs.meilisearch.com/reference/api/keys.html)

```shell
./meilisearch --master-key="1iZWk0Jbo7OimxTzJOBQ"
```

## API Keys

- Default **SEARCH** API Key (public): Use it to _search from the frontend_
- Default **ADMIN** API Key (private): Use it for anything that is **NOT** _a search operation_. Caution! Do not expose it on a public frontend

# search.curtsheller-dev.com

- (&check; 3 OCT 2022) - [search.curtsheller-dev.com](https://search.learningukulele.com)
- (&check; 3 OCT 2022) - [search.curtsheller-dev.com (https)](https://search.learningukulele.com/health) &bull;

## Specs &#9881;

- MeiliSearch Version: **v0.23**
- Forge Managed: YES
- DigitalOcean Droplet Name: **meilisearch-forge-lu**
- Public IP: 167.71.26.1
- Private IP: 10.116.0.2
- Sudo Password: FlhM6a3vbqBUvYRsRZcn
- MEILISEARCH_KEY='nQv0vKLf47VjZNrnRsix'
- MEILISEARCH_SEARCH_KEY='1e2341068cf4d1e35b0dac99de5d889a6e5b1faa74cc0587f61796dbd938345a'
- MEILISEARCH_ADMIN_KEY='9cddd8a166699b3f291f1f71b5a08c826ce29839bc3ec497093f7a615a45ef69'
- SSL: YES

# search.learningukulele.com

- (&check; 3 OCT 2022) - [search.learningukulele.com](https://search.learningukulele.com) &bull;  (**WORKED: 3 Oct 2022**)
- (&check; 3 OCT 2022) - [search.learningukulele.com/health (https)](https://search.learningukulele.com/health) &bull; (**WORKED: 3 Oct 2022**)

## Specs &#9881;

- MeiliSearch Version: **v0.28**
- Forge Managed: YES
- DigitalOcean Droplet Name: **learningukulele-meilisearch**
- Public IP: 161.35.2.20
- Private IP: 10.116.0.3
- Sudo Password: qZ6PvQe4lfYl24SkbYqQ
- MEILISEARCH_KEY='1iZWk0Jbo7OimxTzJOBQ
- MEILISEARCH_SEARCH_KEY='8e10c7c2b55e61b0939f60506b44b5e4281f13ee49207c1e8a800805dbf212c2
- MEILISEARCH_ADMIN_KEY='eae65f98245e495c1f127bf875a28471ff073b322b89d6254d8026dd37d57f77
- SSL: YES

# search2.learningukulele.com

- (&check; 3 OCT 2022) - [search2.learningukulele.com](https://search2.learningukulele.com) &bull;
- (&check; 3 OCT 2022) - [search2.learningukulele.com/health (https)](https://search2.learningukulele.com/health) &bull;

## Specs &#9881;

- MeiliSearch Version: **v0.28**
- Forge Managed: NO
- DigitalOcean Droplet Name: **meilisearch-learningukulele-two**
- Public IP: 157.230.52.50
- Private IP: 10.136.251.188
- MEILISEARCH_KEY='ZjAyOGM3MzRkZThmNWFjNzIxMThmNTIz'
- MEILISEARCH_SEARCH_KEY='22dc810f54d75d4b9394a39273d2d753cd47f99a01bc9dbcc1d87dea8c2d64b5'
- MEILISEARCH_ADMIN_KEY='71e66151baff35d2bebafbfaa546cf6d8f7bef9605d11479c0481d90cc6cb410'
- SSL: YES

## Running Local

```sh
./meilisearch --master-key="ZjAyOGM3MzRkZThmNWFjNzIxMThmNTIz"
```

## Testing Production

- (&check; 3 OCT 2022) - [search.learningukulele.com](https://search.learningukulele.com/health) &bull; (**WORKED: 3 Oct 2022**)
- (&check; 3 OCT 2022) - [search2.learningukulele.com](https://search2.learningukulele.com) &bull;

## Commands (CLI)

### Keys

```sh
curl \
  -X GET 'http://localhost:7700/keys' \
  -H "Content-Type: application/json" \
  -H 'Authorization: Bearer ZjAyOGM3MzRkZThmNWFjNzIxMThmNTIz' | jq

curl \
  -X GET 'https://search.learningukulele.com/keys' \
  -H "Content-Type: application/json" \
  -H 'Authorization: Bearer eae65f98245e495c1f127bf875a28471ff073b322b89d6254d8026dd37d57f77' | jq

curl \
  -X GET 'https://search2.learningukulele.com/keys' \
  -H "Content-Type: application/json" \
  -H 'Authorization: Bearer 71e66151baff35d2bebafbfaa546cf6d8f7bef9605d11479c0481d90cc6cb410' | jq
```

### Version

```sh
curl \
  -X GET 'https://search.learningukulele.com/version' \
  -H "Content-Type: application/json" \
  -H 'Authorization: Bearer eae65f98245e495c1f127bf875a28471ff073b322b89d6254d8026dd37d57f77' | jq

curl \
  -X GET 'https://search2.learningukulele.com/version' \
  -H "Content-Type: application/json" \
  -H 'Authorization: Bearer 71e66151baff35d2bebafbfaa546cf6d8f7bef9605d11479c0481d90cc6cb410' | jq
```

#### Links &amp; Resources

- [**Configure Meilisearch at Launch** &#128279;](https://docs.meilisearch.com/learn/configuration/instance_options.html#command-line-options-and-flags)
- [Master key and API keys &#128279;](https://docs.meilisearch.com/learn/security/master_api_keys.html)
- [Keys &#128279;](https://docs.meilisearch.com/reference/api/keys.html)

```sh
curl \
  -X GET 'http://localhost:7700/version'  | jq

curl \
  -X GET 'https://167.99.152.193/version' -H 'Authorization: Bearer MASTER_KEY' | jq
```

----
****Curt Sheller Publications**/**Funky Frets • **CSP**: Pottstown, PA 19464 USA, **FF**: Boyertown, PA 19512 USA • [curt@curtsheller.com](mailto:curt@curtsheller.com) [UPDATED: **2023-06-14**]
