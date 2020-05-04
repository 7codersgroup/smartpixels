# For image lisitng


```
'headers' => [

    'Accept' => 'application/json',

    'Authorization' => 'Bearer '.$accessToken,

]
```


Register API
TYPE: POST

URL: http://localhost:8000/api/register
Required Parameters: 
```
* firstname
* lastname
* email
* password
* c_password
* country
* phone

```

Login API: Verb:POST, URL:http://localhost:8000/api/login
```
* email
* password

```
Images List API: Verb:GET, URL:http://localhost:8000/api/images

Images Create API: Verb:POST, URL:http://localhost:8000/api/images

Images Show API: Verb:GET, URL:http://localhost:8000/api/images/{id}

Images Update API: Verb:PUT, URL:http://localhost:8000/api/images/{id}

Images Delete API: Verb:DELETE, URL:http://localhost:8000/api/images/{id}