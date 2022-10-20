# Settings

The `/settings` route allows you to customize search settings for the given index. You can either modify all of an index's settings at once using the update settings endpoint, or modify each one individually using the child routes.

- [ **All Settings** &#128279;](https://docs.meilisearch.com/reference/api/settings.html)

Use **GET** &amp; **PATCH** to get and update settings.

## Default Settings

```json
{
  "displayedAttributes": [
    "*"
  ],
  "searchableAttributes": [
    "*"
  ],
  "filterableAttributes": [],
  "sortableAttributes": [],
  "rankingRules":
  [
    "words","typo","proximity","attribute","sort","exactness"
  ],
  "stopWords": [],
  "synonyms": {},
  "distinctAttribute": null,
  "typoTolerance": {
    "enabled": true,
    "minWordSizeForTypos": {
      "oneTypo": 5,
      "twoTypos": 9
    },
    "disableOnWords": [],
    "disableOnAttributes": []
  },
  "faceting": {
    "maxValuesPerFacet": 100
  },
  "pagination": {
    "maxTotalHits": 1000
  }
}
```


## Update

Updates for teh settings, etc. Anything that deals with the MeiliSearch instance and not Laravel can be done on any computer. Laravel model updated, the imports,etc needs to be done LOCAL or in PRODUCTION.
```sh

    curl  \
        -X PATCH "https://search2.learningukulele.com/indexes/bears/settings" \
        -H "Content-Type: application/json" \
        -H "Authorization: Bearer 71e66151baff35d2bebafbfaa546cf6d8f7bef9605d11479c0481d90cc6cb410" \
        --data-binary '{
            "filterableAttributes": ["category","instrument","status"],
            "sortableAttributes": ["title"]
        }'
```


