<code>
curl -X POST -H "Content-Type: multipart/form-data" \
    -F "xml=\full\path\to\xmlFile.xml" \
    -F "namespaces=namespace1,namespace2,name3" \
    'http://xml2jsonapi.com'
</code>