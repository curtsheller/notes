# MeiliSearch

An open source, blazingly fast and hyper relevant search-engine that will improve your search experience.

Current version is **v0.28** (_as of 20 Sept 2022_). Might jsut wait for first release of v1.0 before upgrading fully.

- [**MeiliSearch** &#128279;](https://meilisearch.com/)
- [**MeiliSearch Documentation** &#128279;](https://docs.meilisearch.com/)
- **LearningUkulele.com Models**
    - [Models: **Assets, Bears, Books, Lessons, Playalongs, Series, Songs, Videos** &#128279;](:/15d5578e301b46cc9a4396bfd441faa2)
    - [Models: **Listings** &#128279;](:/a1abe1ec95a843619cfc57fbe5d712aa)
    - [Models: **Assignments** &#128279;](:/381ed8cfab304bc8b1c4aab9f3bad2be)
    - [Models: **Users** &#128279;](:/37c25dd95d174d94a6e5fa71c64b6886)

# Install
## Composer Repros
- [ ] **Laravel Scout** , [**laravel/scout** &#128279;](https://github.com/laravel/scout), [Search: Laravel Scout Commands &#128279;](:/dbaaa9fac14648e5bb7097a469c33902)
    - [ ] **MeiliSearch PHP**, [meilisearch/meilisearch-ph &128279;](https://github.com/meilisearch/meilisearch-php)
    - [ ] **Algolia PHP API Client**, [algolia/algoliasearch-client-php ⇒](https://github.com/algolia/algoliasearch-client-php)

## Packages
- [ ] "meilisearch": "^0.22.0", local: v.022, production: v0.23
- [ ] ["@meilisearch/instant-meilisearch" &#128279;](https://github.com/meilisearch/instant-meilisearch)
- [ ] ["instantsearch.css": "7.4.2" &#128279;](https://github.com/algolia/instantsearch-specs)
- [ ] ["vue-instantsearch": "^3.8.1" &#128279;](https://github.com/algolia/vue-instantsearch)

# Joplin Links
Link to other notes and information right here in Joplin
- [Search: **Laravel Scout Commands** &#128279;](:/dbaaa9fac14648e5bb7097a469c33902) •
- [Search: **LearningUkulele.com** &#128279;](:/120db7d50ee944cdb36a2136c33effb5) •
- [MeiliSearch: **Settings** &#128279;](:/23cf8d7a66064f0685423520ec94b7d8) •
- [MeiliSearch: **Commands** &#128279;](:/4b726f8d18964877a2cdd32530ea280b) •
- [MeiliSearch: **Facets and Filtering** &#128279;](:/b6f1f9515fbf436a9b3de1a8c2e66008) •
- [MeiliSearch: **Ranking Rules** &#128279;](:/558f3ae4211f45bf883a8265a49be5b4) •

# MeiliSearch Servers
The Production `meilisearch` server is on **DigitalOcean** droplet:
- Forge Manages Digital Ocean server:
    - **meilisearch-forge-lu**: 167.71.26.1 * MeiliSearch Keys in Bitwarden vault. (19 Oct 2021: **search.curtsheller-dev.com**), TODO: point search.learningukulele.com to this server.

Local server is: [localhost:7700  &#128279;](https://localhost:7700). 

## IP Access
- Use Private IP address.

# Running and Configuring MeiliSearch
```
Run it:
    $ meilisearch
Usage:
    $ meilisearch --help
```

### Steps

There is a script in .dotfiles for this.

1. Create *indexes*
2. Add *documents* (Data)
3. Add custom settings for a more relevant search
