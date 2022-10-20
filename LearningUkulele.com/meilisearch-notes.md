# MeiliSearch Servers

- DigitalOcean MeiliSearch Droplet: **meilisearch-learningukulele-two**
- MASTER_KEY: ZjAyOGM3MzRkZThmNWFjNzIxMThmNTIz
- Public IP: 157.230.52.50
- **search2.learningukulele.com** points to above IP.

Use it to search from the frontend.
- Default Search API Key: 22dc810f54d75d4b9394a39273d2d753cd47f99a01bc9dbcc1d87dea8c2d64b5
 
Use it for anything that is not a search operation. Caution! Do not expose it on a public frontend.
- Default Admin API Key: 71e66151baff35d2bebafbfaa546cf6d8f7bef9605d11479c0481d90cc6cb410
 
DigitalOcean uses certbot to provide SSL certificates. Certbot is based on Letsencrypt, which doesn't support SSL for bare IP address, so they require to use a domain name.

```
curl http://157.230.52.50/health
curl https://search2.learningukulele.com/health

curl \
  -X GET 'https://search2.learningukulele.com/keys' \
  -H 'Authorization: Bearer ZjAyOGM3MzRkZThmNWFjNzIxMThmNTIz'

```

```
curl -v https://search2.learningukulele.com
```

```
curl \
  -X GET 'https://search2.learningukulele.com \
  -H 'Authorization: Bearer \ ZjAyOGM3MzRkZThmNWFjNzIxMThmNTIz' | jq
```