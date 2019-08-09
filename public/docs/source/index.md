---
title: API Reference

language_tabs:
- bash
- javascript

includes:

search: true

toc_footers:
- <a href='http://github.com/mpociot/documentarian'>Documentation Powered by Documentarian</a>
---
<!-- START_INFO -->
# Info

Welcome to the generated API reference.
[Get Postman Collection](http://localhost/docs/collection.json)

<!-- END_INFO -->

#general
<!-- START_d7b7952e7fdddc07c978c9bdaf757acf -->
## Handle a registration request for the application.

> Example request:

```bash
curl -X POST "/api/register" 
```

```javascript
const url = new URL("/api/register");

let headers = {
    "Accept": "application/json",
    "Content-Type": "application/json",
}

fetch(url, {
    method: "POST",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```

```php

$client = new \GuzzleHttp\Client();
$response = $client->post("/api/register", [
]);
$body = $response->getBody();
print_r(json_decode((string) $body));
```




### HTTP Request
`POST api/register`


<!-- END_d7b7952e7fdddc07c978c9bdaf757acf -->

<!-- START_c3fa189a6c95ca36ad6ac4791a873d23 -->
## Handle a login request to the application.

> Example request:

```bash
curl -X POST "/api/login" 
```

```javascript
const url = new URL("/api/login");

let headers = {
    "Accept": "application/json",
    "Content-Type": "application/json",
}

fetch(url, {
    method: "POST",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```

```php

$client = new \GuzzleHttp\Client();
$response = $client->post("/api/login", [
]);
$body = $response->getBody();
print_r(json_decode((string) $body));
```




### HTTP Request
`POST api/login`


<!-- END_c3fa189a6c95ca36ad6ac4791a873d23 -->

<!-- START_61739f3220a224b34228600649230ad1 -->
## Log the user out of the application.

> Example request:

```bash
curl -X POST "/api/logout" \
    -H "Authorization: Bearer UnuNu9fiai5fe8kZTTUwEYK0hpQz5giWym4usm7qq7PBfVNoOchXnVr7jw4P"
```

```javascript
const url = new URL("/api/logout");

let headers = {
    "Authorization": "Bearer UnuNu9fiai5fe8kZTTUwEYK0hpQz5giWym4usm7qq7PBfVNoOchXnVr7jw4P",
    "Accept": "application/json",
    "Content-Type": "application/json",
}

fetch(url, {
    method: "POST",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```

```php

$client = new \GuzzleHttp\Client();
$response = $client->post("/api/logout", [
    'headers' => [
            "Authorization" => "Bearer UnuNu9fiai5fe8kZTTUwEYK0hpQz5giWym4usm7qq7PBfVNoOchXnVr7jw4P",
        ],
]);
$body = $response->getBody();
print_r(json_decode((string) $body));
```




### HTTP Request
`POST api/logout`


<!-- END_61739f3220a224b34228600649230ad1 -->

<!-- START_a209a43173c7c4aaf7ab070d77fb7f0c -->
## Display the specified resource.

> Example request:

```bash
curl -X GET -G "/api/groups/2" \
    -H "Authorization: Bearer UnuNu9fiai5fe8kZTTUwEYK0hpQz5giWym4usm7qq7PBfVNoOchXnVr7jw4P"
```

```javascript
const url = new URL("/api/groups/2");

let headers = {
    "Authorization": "Bearer UnuNu9fiai5fe8kZTTUwEYK0hpQz5giWym4usm7qq7PBfVNoOchXnVr7jw4P",
    "Accept": "application/json",
    "Content-Type": "application/json",
}

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```

```php

$client = new \GuzzleHttp\Client();
$response = $client->get("/api/groups/2", [
    'headers' => [
            "Authorization" => "Bearer UnuNu9fiai5fe8kZTTUwEYK0hpQz5giWym4usm7qq7PBfVNoOchXnVr7jw4P",
        ],
]);
$body = $response->getBody();
print_r(json_decode((string) $body));
```



> Example response (401):

```json
{
    "message": "Unauthenticated."
}
```

### HTTP Request
`GET api/groups/{group}`


<!-- END_a209a43173c7c4aaf7ab070d77fb7f0c -->

<!-- START_15a6d20e1062b1b1e09e0282c204010d -->
## Update the specified resource in storage.

> Example request:

```bash
curl -X PUT "/api/groups/2" \
    -H "Authorization: Bearer UnuNu9fiai5fe8kZTTUwEYK0hpQz5giWym4usm7qq7PBfVNoOchXnVr7jw4P"
```

```javascript
const url = new URL("/api/groups/2");

let headers = {
    "Authorization": "Bearer UnuNu9fiai5fe8kZTTUwEYK0hpQz5giWym4usm7qq7PBfVNoOchXnVr7jw4P",
    "Accept": "application/json",
    "Content-Type": "application/json",
}

fetch(url, {
    method: "PUT",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```

```php

$client = new \GuzzleHttp\Client();
$response = $client->put("/api/groups/2", [
    'headers' => [
            "Authorization" => "Bearer UnuNu9fiai5fe8kZTTUwEYK0hpQz5giWym4usm7qq7PBfVNoOchXnVr7jw4P",
        ],
]);
$body = $response->getBody();
print_r(json_decode((string) $body));
```




### HTTP Request
`PUT api/groups/{group}`


<!-- END_15a6d20e1062b1b1e09e0282c204010d -->

<!-- START_291738af5a803fa8d10caab6ab8c683f -->
## api/groups/{group}/schedule
> Example request:

```bash
curl -X POST "/api/groups/2/schedule" \
    -H "Authorization: Bearer UnuNu9fiai5fe8kZTTUwEYK0hpQz5giWym4usm7qq7PBfVNoOchXnVr7jw4P"
```

```javascript
const url = new URL("/api/groups/2/schedule");

let headers = {
    "Authorization": "Bearer UnuNu9fiai5fe8kZTTUwEYK0hpQz5giWym4usm7qq7PBfVNoOchXnVr7jw4P",
    "Accept": "application/json",
    "Content-Type": "application/json",
}

fetch(url, {
    method: "POST",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```

```php

$client = new \GuzzleHttp\Client();
$response = $client->post("/api/groups/2/schedule", [
    'headers' => [
            "Authorization" => "Bearer UnuNu9fiai5fe8kZTTUwEYK0hpQz5giWym4usm7qq7PBfVNoOchXnVr7jw4P",
        ],
]);
$body = $response->getBody();
print_r(json_decode((string) $body));
```




### HTTP Request
`POST api/groups/{group}/schedule`


<!-- END_291738af5a803fa8d10caab6ab8c683f -->

<!-- START_58ec0449df2a33945d8d3ceb1f31b303 -->
## api/groups/{group}/schedule
> Example request:

```bash
curl -X PUT "/api/groups/2/schedule" \
    -H "Authorization: Bearer UnuNu9fiai5fe8kZTTUwEYK0hpQz5giWym4usm7qq7PBfVNoOchXnVr7jw4P"
```

```javascript
const url = new URL("/api/groups/2/schedule");

let headers = {
    "Authorization": "Bearer UnuNu9fiai5fe8kZTTUwEYK0hpQz5giWym4usm7qq7PBfVNoOchXnVr7jw4P",
    "Accept": "application/json",
    "Content-Type": "application/json",
}

fetch(url, {
    method: "PUT",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```

```php

$client = new \GuzzleHttp\Client();
$response = $client->put("/api/groups/2/schedule", [
    'headers' => [
            "Authorization" => "Bearer UnuNu9fiai5fe8kZTTUwEYK0hpQz5giWym4usm7qq7PBfVNoOchXnVr7jw4P",
        ],
]);
$body = $response->getBody();
print_r(json_decode((string) $body));
```




### HTTP Request
`PUT api/groups/{group}/schedule`


<!-- END_58ec0449df2a33945d8d3ceb1f31b303 -->

<!-- START_3266674e1b0d799355c17f2d42d7be9a -->
## api/groups/{group}/invite
> Example request:

```bash
curl -X POST "/api/groups/2/invite" \
    -H "Authorization: Bearer UnuNu9fiai5fe8kZTTUwEYK0hpQz5giWym4usm7qq7PBfVNoOchXnVr7jw4P"
```

```javascript
const url = new URL("/api/groups/2/invite");

let headers = {
    "Authorization": "Bearer UnuNu9fiai5fe8kZTTUwEYK0hpQz5giWym4usm7qq7PBfVNoOchXnVr7jw4P",
    "Accept": "application/json",
    "Content-Type": "application/json",
}

fetch(url, {
    method: "POST",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```

```php

$client = new \GuzzleHttp\Client();
$response = $client->post("/api/groups/2/invite", [
    'headers' => [
            "Authorization" => "Bearer UnuNu9fiai5fe8kZTTUwEYK0hpQz5giWym4usm7qq7PBfVNoOchXnVr7jw4P",
        ],
]);
$body = $response->getBody();
print_r(json_decode((string) $body));
```




### HTTP Request
`POST api/groups/{group}/invite`


<!-- END_3266674e1b0d799355c17f2d42d7be9a -->

<!-- START_7f0d3a6203c9b62c8808dbc0c34fd826 -->
## api/groups/{group}/join
> Example request:

```bash
curl -X POST "/api/groups/2/join" \
    -H "Authorization: Bearer UnuNu9fiai5fe8kZTTUwEYK0hpQz5giWym4usm7qq7PBfVNoOchXnVr7jw4P"
```

```javascript
const url = new URL("/api/groups/2/join");

let headers = {
    "Authorization": "Bearer UnuNu9fiai5fe8kZTTUwEYK0hpQz5giWym4usm7qq7PBfVNoOchXnVr7jw4P",
    "Accept": "application/json",
    "Content-Type": "application/json",
}

fetch(url, {
    method: "POST",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```

```php

$client = new \GuzzleHttp\Client();
$response = $client->post("/api/groups/2/join", [
    'headers' => [
            "Authorization" => "Bearer UnuNu9fiai5fe8kZTTUwEYK0hpQz5giWym4usm7qq7PBfVNoOchXnVr7jw4P",
        ],
]);
$body = $response->getBody();
print_r(json_decode((string) $body));
```




### HTTP Request
`POST api/groups/{group}/join`


<!-- END_7f0d3a6203c9b62c8808dbc0c34fd826 -->

<!-- START_25cacea309e94199433ca72c489534bc -->
## Display a listing of the group members.

> Example request:

```bash
curl -X GET -G "/api/groups/2/users" \
    -H "Authorization: Bearer UnuNu9fiai5fe8kZTTUwEYK0hpQz5giWym4usm7qq7PBfVNoOchXnVr7jw4P"
```

```javascript
const url = new URL("/api/groups/2/users");

let headers = {
    "Authorization": "Bearer UnuNu9fiai5fe8kZTTUwEYK0hpQz5giWym4usm7qq7PBfVNoOchXnVr7jw4P",
    "Accept": "application/json",
    "Content-Type": "application/json",
}

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```

```php

$client = new \GuzzleHttp\Client();
$response = $client->get("/api/groups/2/users", [
    'headers' => [
            "Authorization" => "Bearer UnuNu9fiai5fe8kZTTUwEYK0hpQz5giWym4usm7qq7PBfVNoOchXnVr7jw4P",
        ],
]);
$body = $response->getBody();
print_r(json_decode((string) $body));
```



> Example response (401):

```json
{
    "message": "Unauthenticated."
}
```

### HTTP Request
`GET api/groups/{group}/users`


<!-- END_25cacea309e94199433ca72c489534bc -->

<!-- START_193dc746eafa37d49a04e41e8a28bb43 -->
## Display the specified group member.

> Example request:

```bash
curl -X GET -G "/api/groups/2/users/1" \
    -H "Authorization: Bearer UnuNu9fiai5fe8kZTTUwEYK0hpQz5giWym4usm7qq7PBfVNoOchXnVr7jw4P"
```

```javascript
const url = new URL("/api/groups/2/users/1");

let headers = {
    "Authorization": "Bearer UnuNu9fiai5fe8kZTTUwEYK0hpQz5giWym4usm7qq7PBfVNoOchXnVr7jw4P",
    "Accept": "application/json",
    "Content-Type": "application/json",
}

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```

```php

$client = new \GuzzleHttp\Client();
$response = $client->get("/api/groups/2/users/1", [
    'headers' => [
            "Authorization" => "Bearer UnuNu9fiai5fe8kZTTUwEYK0hpQz5giWym4usm7qq7PBfVNoOchXnVr7jw4P",
        ],
]);
$body = $response->getBody();
print_r(json_decode((string) $body));
```



> Example response (401):

```json
{
    "message": "Unauthenticated."
}
```

### HTTP Request
`GET api/groups/{group}/users/{user}`


<!-- END_193dc746eafa37d49a04e41e8a28bb43 -->


