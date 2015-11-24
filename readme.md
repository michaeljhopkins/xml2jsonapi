## Xml2JsonAPI

Because XML is hard and webdev shouldn\'t be

## Why?

I needed to parse several different namespaced XML returns from an external API for a project I was working on. The most ideal method would be to instead parse JSON. Upon the path of "how best could I manage to get JSON to work with instead of XML". One method I thought of was a simple xml2json external service I could call. I found several sites that did this, but non in a way that catered to API's.

This API is designed to be as simple as possible. I hope you find it to be helpful!

## How?

Below is the exported json from the Postman application for Google Chrome. I have also attached an example curl request

Don't want to use Postman? Simply make a POST request to the endpoint [xml2jsonapi.com](http://xml2jsonapi.com) with two form fields. A pre created xml file as a *File* input type with name *xml*, and a *comma seperated (no spaced) string* as a *text* input with name *namespaces*.

## Examples

### Using Curl

```shell
curl -X POST -H "Content-Type: multipart/form-data" \
    -F "xml=\full\path\to\xmlFile.xml" \
    -F "namespaces=namespace1,namespace2,name3" \
    'http://xml2jsonapi.com'
```

### Using Postman
```json
{
    "id": "0d05343f-b0a7-a021-04c7-a390a930ff9f",
    "name": "xml2josnapi",
    "description": "",
    "order": [""],
    "folders": [],
    "timestamp": 1448154413564,
    "owner": "",
    "remoteLink": "",
    "public": false,
    "requests": [
        {
            "id": "683b06e8-845d-4fdc-9cf2-b1f45a053d1b",
            "headers": "",
            "url": "http://xml2jsonapi.com",
            "preRequestScript": "",
            "pathVariables": {},
            "method": "POST",
            "data": [
                {
                    "key": "xml",
                    "value": "xmlFile.xml",
                    "type": "file",
                    "enabled": true
                },{
                    "key": "namespaces",
                    "value": "namespace1,namespace2,name3",
                    "type": "text",
                    "enabled": true
                }
            ],
            "dataMode": "params",
            "version": 2,
            "tests": "",
            "currentHelper": "normal",
            "helperAttributes": {},
            "time": 1448329837783,
            "name": "http://xml2jsonapi.com",
            "description": "Example of how to use Xml2jsonapi.com via Postman request",
            "collectionId": "0d05343f-b0a7-a021-04c7-a390a930ff9f"
        }
    ]
}
```

## Contributing

I am very open to any commits that aim to achieve the above in a more efficient way than currently implemented

### License

Xml2jsonapi is open-sourced software licensed under the [DBAD](https://github.com/philsturgeon/dbad/blob/master/LICENSE-en.md) license
