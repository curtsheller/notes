# Facets and Filtering

In MeiliSearch, **facets** are a specific use-case of *filters*. The question of whether something is a filter or a facet is mostly one pertaining to UX and UI design

**Faceted** search is a feature provided out-of-the-box by MeiliSearch. Faceting allows classifying search results into categories that are called facets.

Facets must be added to the filterableAttributes list in the index's settings before they can be used.

Once they have been configured, you can search for facets with the filter search parameter.


- **Filters** exclude some results based on criteria. They allow users to narrow down a set of documents to only those matching these chosen criteria. In other words, filtering is used to filter the returned results by adding constraints.

- **Facets**, on the other hand, are used to categorize the data into subsets that will be searched upon: they reduce the number of documents to process.

Faceting and filtering aim at being complementary; facets narrows down the set of documents to be searched upon, while filters reduce the number of documents coming out of a search.

**MeiliSearch filters can be used to build faceted search interfaces**. This type of interface allows users to refine search results based on broad categories or facets.


## curl
```
curl \
  -X POST 'http://localhost:7700/indexes/videos/settings' \
  --data '{
      "filterableAttributes": [
          "category",
          "status"
      ]
  }'
```

### Links

- [Filtering and Faceted Search ⇒](https://docs.meilisearch.com/reference/features/filtering_and_faceted_search.html)
