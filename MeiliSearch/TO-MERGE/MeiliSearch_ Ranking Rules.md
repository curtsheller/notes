# MeiliSearch: Ranking Rules

```
curl -H "X-Meili-API-Key: YmQzNGVlMjQ2NjYwOTlhYTg2MWEzMTA4" \
-X GET 'https://search.curtsheller-dev.com/indexes/lessons/settings/ranking-rules'

curl -H "X-Meili-API-Key: YmQzNGVlMjQ2NjYwOTlhYTg2MWEzMTA4" \
-X POST 'https://search.curtsheller-dev.com/indexes/assignments/settings/ranking-rules' \
  --data '[
    "desc(assigned_date)",
    "typo",
    "words",
    "proximity",
    "attribute",
    "wordsPosition",
    "exactness"
]'
```

#### Links

- [Settins: Ranking Rules](https://docs.meilisearch.com/reference/api/ranking_rules.html#get-ranking-rules)