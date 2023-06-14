# MeiliSearch

Check [Meilisearch &#128279;](https://docs.meilisearch.com) docs for latest API.

Production API_KEY is `1e2341068cf4d1e35b0dac99de5d889a6e5b1faa74cc0587f61796dbd938345a`

**NOTE:** For version **v0.24** and below use `X-MEILI-API-KEY: apiKey`, whereas v0.25 and above use `Authorization: Bearer apiKey`

## Updating

Updating Meilisearch: [Updating Meilisearch &#128279;](https://docs.meilisearch.com/learn/advanced/updating.html)

1. Verify database
2. Set ALL fields as displayed attributes. Or not all will be exported in the dump.
	- Verify all attributes are included in the displayed attributes list

```
curl \
    -X GET 'http://localhost:7700/indexes/lessons/settings/displayed-attributes' \
    -H 'Authorization: Bearer: API_KEY' | jq

```
A response of "["*"]" is all attributes.

3. Create the dump

1. Located where the Meilisearch directory is located:

```
which meilisearch
```

Response on Pop!_os is:

```
/usr/bin/meilisearch
```

On local Lerningukulele the dumps went into the site folder. 
```
curl \
  -X POST 'http://localhost:7700/dumps' \
  -H 'Authorization: Bearer API_KEY'
```


----
****Curt Sheller Publications**/**Funky Frets • **CSP**: Pottstown, PA 19464 USA, **FF**: Boyertown, PA 19512 USA • [curt@curtsheller.com](mailto:curt@curtsheller.com) [UPDATED: **2023-06-14**]
