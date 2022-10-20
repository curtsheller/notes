# MeiliSearch

An open source, blazingly fast and hyper relevant search-engine that will improve your search experience.

- [**MeiliSearch** &#128279;](https://meilisearch.com/)
- [**MeiliSearch Documentation** &#128279;](https://docs.meilisearch.com/)
- **LearningUkulele.com Models**
	- [Models: **Assets, Bears, Books, Lessons, Playalongs, Series, Songs, Videos** &#128279;](../../Dev/MeiliSearch/Models_%20Assets,%20Bears,%20Books,%20Lessons,%20Playalongs,.md)
	- [Models: **Listings** &#128279;](../../Dev/MeiliSearch/Models_%20Listings.md)
	- [Models: **Assignments** &#128279;](../../Dev/MeiliSearch/Models_%20Assignments.md)
	- [Models: **Users** &#128279;](../../Dev/MeiliSearch/Models_%20Users.md)

# Install
## Composer Repros
- [ ] **Laravel Scout** , [**laravel/scout** &#128279;](https://github.com/laravel/scout), [Search: Laravel Scout Commands &#128279;](../../Dev/MeiliSearch/Search_%20Laravel%20Scout%20Commands.md)
	- [ ] **MeiliSearch PHP**, [meilisearch/meilisearch-ph &128279;](https://github.com/meilisearch/meilisearch-php)
	- [ ] **Algolia PHP API Client**, [algolia/algoliasearch-client-php ⇒](https://github.com/algolia/algoliasearch-client-php)

## Packages
- [ ] "meilisearch": "^0.22.0" •
- [ ] ["@meilisearch/instant-meilisearch" &#128279;](https://github.com/meilisearch/instant-meilisearch)
- [ ] ["instantsearch.css": "7.4.2" &#128279;](https://github.com/algolia/instantsearch-specs)
- [ ] ["vue-instantsearch": "^3.8.1" &#128279;](https://github.com/algolia/vue-instantsearch)

# Joplin Links
Link to other notes and information right here in Joplin
- [Search: **LearningUkulele.com** &#128279;](../../Dev/MeiliSearch/Search_%20Scout,%20LearningUkulele.com.md) •
- [MeiliSearch: **Settings** &#128279;](../../Dev/MeiliSearch/MeiliSearch_%20Settings.md) •
- [MeiliSearch: **Commands** &#128279;](:/4b726f8d18964877a2cdd32530ea280b) •
- [MeiliSearch: **Facets and Filtering** &#128279;](../../Dev/MeiliSearch/MeiliSearch_%20Facets%20and%20Filtering.md) •
- [Search: **Laravel Scout Commands** &#128279;](../../Dev/MeiliSearch/Search_%20Laravel%20Scout%20Commands.md) •
- [MeiliSearch: **Ranking Rules** &#128279;](../../Dev/MeiliSearch/MeiliSearch_%20Ranking%20Rules.md) •

# MeiliSearch Servers
The Production `meilisearch` server is on **DigitalOcean** droplet:
- Forge Manages Digitial Ocean server:
	- **meilisearch-forge-lu**: 167.71.26.1 * MeiliSearch Keys in Bitwarven vault. (19 Oct 2021: **search.curtsheller-dev.com**), TODO: point search.learningukulele.com to this server.

Local server is: `https://localhost:7700`.

## IP Access
- Use Private IP address.

# Running and Configuring MeiliSearch
```
Run it:
    $ meilisearch
Usage:
    $ meilisearch --help
```
## Get Version Info

### Local
```
curl -X GET 'http://localhost:7700/version'
```

### Production: search.learningukulele.com

Use private key to access
- Use private key
```
curl \
-H "X-Meili-API-Key: 1e2341068cf4d1e35b0dac99de5d889a6e5b1faa74cc0587f61796dbd938345a" \
-X GET 'https://search.curtsheller-dev.com/version' | jq
```

```
{
	"commitSha":"928930ddd552596f51280a17c143cf38079cdea9",
	"commitDate":"2021-09-13T10:17:10+00:00",
	"pkgVersion":"0.22.0"
}
```

### Production: search.curtsheller-dev.com
- Use private key
```
curl \
	-H "X-Meili-API-Key: 1e2341068cf4d1e35b0dac99de5d889a6e5b1faa74cc0587f61796dbd938345a" \
	-X GET 'https://search.curtsheller-dev.com/version'
```

```
{
  "commitSha": "2e2eeb0a424408e27f4223e58afec303c53e1419",
  "commitDate": "2021-10-12T14:47:06+00:00",
  "pkgVersion": "0.23.1"
}
```

### Steps
1. Create *indexes*
2. Add *documents* (Data)
3. Add custom settings for a more relevant search