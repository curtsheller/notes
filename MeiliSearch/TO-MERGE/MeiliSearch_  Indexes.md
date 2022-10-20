# Indexes

```
curl \
  -H "Content-Type: application/json" \
  -X GET 'http://localhost:7700/indexes/users' | jq
```

## Examples Response User Index/Model
```
{
  "uid": "users",
  "name": "users",
  "createdAt": "2021-10-20T00:29:58.817586996Z",
  "updatedAt": "2021-10-20T13:45:54.167166654Z",
  "primaryKey": "id"
}
```