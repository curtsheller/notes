# MeiliSearch

- [**Setup and installation** &#128279;](https://docs.meilisearch.com/learn/getting_started/quick_start.html)

```
# Install &amp; Launch Meilisearch

## curl

```sh
# Install Meilisearch
curl -L https://install.meilisearch.com | sh

# Launch Meilisearch
./meilisearch
```

## apt

```sh
# Add Meilisearch package
sudo echo "deb [trusted=yes] https://apt.fury.io/meilisearch/ /" > /etc/apt/sources.list.d/fury.list

# Update APT and install Meilisearch
sudo apt update && sudo apt install meilisearch-http

# Launch Meilisearch
meilisearch
```
