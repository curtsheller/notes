# jq

- [./jq](https://stedolan.github.io/jq/) &bull; **jq** is a lightweight and flexible command-line JSON processor.

JSON is a text-based data format which is widely used for storing or exchanging data between systems. The **jq** is a command line based JSON processor that allows to transform, filter, slice, map, or perform other operations on JSON data.

## Install and Test

Note: Valet Linux install this.

```zsh
sudo apt install -y jq
jq --version
```


```zsh
echo '{"status":"success","data":[{"name":"John","age":25},{"name":"James","age":29}]}' > test.json
````
jq '.' ~/Ducuments/Testing/test.json
```

#### Response
```
{
  "status": "success",
  "data": [
    {
      "name": "John",
      "age": 25
    },
    {
      "name": "James",
      "age": 29
    }
  ]
}
```
