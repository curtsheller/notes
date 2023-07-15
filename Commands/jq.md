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

----
****Curt Sheller Publications**/**Funky Frets • **CSP**: Pottstown, PA 19464 USA, **FF**: Boyertown, PA 19512 USA • [curt@curtsheller.com](mailto:curt@curtsheller.com) [UPDATED: **2023-07-15**]
