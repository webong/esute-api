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

#Group Invitation
<!-- START_3266674e1b0d799355c17f2d42d7be9a -->
## Invite a list of emails to the group.

> Example request:

```bash
curl -X POST "/api/groups/2/invite" \
    -H "Authorization: Bearer UnuNu9fiai5fe8kZTTUwEYK0hpQz5giWym4usm7qq7PBfVNoOchXnVr7jw4P" \
    -H "Content-Type: application/json" \
    -d '{"emails":"neque","message":"quasi"}'

```

```javascript
const url = new URL("/api/groups/2/invite");

let headers = {
    "Authorization": "Bearer UnuNu9fiai5fe8kZTTUwEYK0hpQz5giWym4usm7qq7PBfVNoOchXnVr7jw4P",
    "Content-Type": "application/json",
    "Accept": "application/json",
}

let body = {
    "emails": "neque",
    "message": "quasi"
}

fetch(url, {
    method: "POST",
    headers: headers,
    body: body
})
    .then(response => response.json())
    .then(json => console.log(json));
```

```php

$client = new \GuzzleHttp\Client();
$response = $client->post("/api/groups/2/invite", [
    'headers' => [
            "Authorization" => "Bearer UnuNu9fiai5fe8kZTTUwEYK0hpQz5giWym4usm7qq7PBfVNoOchXnVr7jw4P",
            "Content-Type" => "application/json",
        ],
    'json' => [
            "emails" => "neque",
            "message" => "quasi",
        ],
]);
$body = $response->getBody();
print_r(json_decode((string) $body));
```



> Example response (200):

```json
{
    "data": [
        "Group invite is being processed"
    ]
}
```

### HTTP Request
`POST api/groups/{group}/invite`

#### Body Parameters

Parameter | Type | Status | Description
--------- | ------- | ------- | ------- | -----------
    emails | string |  required  | The list of the emails to be invited to the group. Example example@gmail.com, jon@snow.com
    message | string |  optional  | The inivitation message.

<!-- END_3266674e1b0d799355c17f2d42d7be9a -->

#Group Members
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



> Example response (400):

```json
{
    "status": false,
    "error": "Unauthenticated."
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



> Example response (400):

```json
{
    "status": false,
    "error": "Unauthenticated."
}
```

### HTTP Request
`GET api/groups/{group}/users/{user}`


<!-- END_193dc746eafa37d49a04e41e8a28bb43 -->

#Group Scheduling
<!-- START_291738af5a803fa8d10caab6ab8c683f -->
## Start a Group Saving

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
## Update Group Start Date if not already started

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

#Groups
<!-- START_007018a8a9f15c2d47fcb105431ffeee -->
## Display a listing of the group.

> Example request:

```bash
curl -X GET -G "/api/groups" \
    -H "Authorization: Bearer UnuNu9fiai5fe8kZTTUwEYK0hpQz5giWym4usm7qq7PBfVNoOchXnVr7jw4P"
```

```javascript
const url = new URL("/api/groups");

    let params = {
            "page": "5",
        };
    Object.keys(params).forEach(key => url.searchParams.append(key, params[key]));

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
$response = $client->get("/api/groups", [
    'headers' => [
            "Authorization" => "Bearer UnuNu9fiai5fe8kZTTUwEYK0hpQz5giWym4usm7qq7PBfVNoOchXnVr7jw4P",
        ],
    'query' => [
            "page" => "5",
        ],
]);
$body = $response->getBody();
print_r(json_decode((string) $body));
```



> Example response (400):

```json
{
    "status": false,
    "error": "Unauthenticated."
}
```

### HTTP Request
`GET api/groups`

#### Query Parameters

Parameter | Status | Description
--------- | ------- | ------- | -----------
    page |  optional  | The page number to return

<!-- END_007018a8a9f15c2d47fcb105431ffeee -->

<!-- START_15c22564ad248f952405021410fd1d25 -->
## Store a newly created group in database.

> Example request:

```bash
curl -X POST "/api/groups" \
    -H "Authorization: Bearer UnuNu9fiai5fe8kZTTUwEYK0hpQz5giWym4usm7qq7PBfVNoOchXnVr7jw4P" \
    -H "Content-Type: application/json" \
    -d '{"name":"voluptatem","description":"corrupti","amount":0,"max_capacity":16,"start_date":"distinctio","private":true}'

```

```javascript
const url = new URL("/api/groups");

let headers = {
    "Authorization": "Bearer UnuNu9fiai5fe8kZTTUwEYK0hpQz5giWym4usm7qq7PBfVNoOchXnVr7jw4P",
    "Content-Type": "application/json",
    "Accept": "application/json",
}

let body = {
    "name": "voluptatem",
    "description": "corrupti",
    "amount": 0,
    "max_capacity": 16,
    "start_date": "distinctio",
    "private": true
}

fetch(url, {
    method: "POST",
    headers: headers,
    body: body
})
    .then(response => response.json())
    .then(json => console.log(json));
```

```php

$client = new \GuzzleHttp\Client();
$response = $client->post("/api/groups", [
    'headers' => [
            "Authorization" => "Bearer UnuNu9fiai5fe8kZTTUwEYK0hpQz5giWym4usm7qq7PBfVNoOchXnVr7jw4P",
            "Content-Type" => "application/json",
        ],
    'json' => [
            "name" => "voluptatem",
            "description" => "corrupti",
            "amount" => "0",
            "max_capacity" => "16",
            "start_date" => "distinctio",
            "private" => "1",
        ],
]);
$body = $response->getBody();
print_r(json_decode((string) $body));
```




### HTTP Request
`POST api/groups`

#### Body Parameters

Parameter | Type | Status | Description
--------- | ------- | ------- | ------- | -----------
    name | string |  required  | The name of the group.
    description | string |  optional  | The description of the group.
    amount | float |  optional  | The fixed amount for saving contribution.
    max_capacity | integer |  optional  | The maximum amount of group members.
    start_date | date |  optional  | The date savings would commence for the group
    private | boolean |  optional  | The group type if private or public. Defaults to false.

<!-- END_15c22564ad248f952405021410fd1d25 -->

<!-- START_a209a43173c7c4aaf7ab070d77fb7f0c -->
## Display the group resource.

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



> Example response (400):

```json
{
    "status": false,
    "error": "Unauthenticated."
}
```

### HTTP Request
`GET api/groups/{group}`


<!-- END_a209a43173c7c4aaf7ab070d77fb7f0c -->

<!-- START_5b84408c838201930093112a7621935c -->
## Update the specified group in storage.

> Example request:

```bash
curl -X PUT "/api/groups/2" \
    -H "Authorization: Bearer UnuNu9fiai5fe8kZTTUwEYK0hpQz5giWym4usm7qq7PBfVNoOchXnVr7jw4P" \
    -H "Content-Type: application/json" \
    -d '{"name":"id","description":"voluptatem","amount":74231.84190268,"max_capacity":13,"private":true}'

```

```javascript
const url = new URL("/api/groups/2");

let headers = {
    "Authorization": "Bearer UnuNu9fiai5fe8kZTTUwEYK0hpQz5giWym4usm7qq7PBfVNoOchXnVr7jw4P",
    "Content-Type": "application/json",
    "Accept": "application/json",
}

let body = {
    "name": "id",
    "description": "voluptatem",
    "amount": 74231.84190268,
    "max_capacity": 13,
    "private": true
}

fetch(url, {
    method: "PUT",
    headers: headers,
    body: body
})
    .then(response => response.json())
    .then(json => console.log(json));
```

```php

$client = new \GuzzleHttp\Client();
$response = $client->put("/api/groups/2", [
    'headers' => [
            "Authorization" => "Bearer UnuNu9fiai5fe8kZTTUwEYK0hpQz5giWym4usm7qq7PBfVNoOchXnVr7jw4P",
            "Content-Type" => "application/json",
        ],
    'json' => [
            "name" => "id",
            "description" => "voluptatem",
            "amount" => "74231.84190268",
            "max_capacity" => "13",
            "private" => "1",
        ],
]);
$body = $response->getBody();
print_r(json_decode((string) $body));
```




### HTTP Request
`PUT api/groups/{group}`

`PATCH api/groups/{group}`

#### Body Parameters

Parameter | Type | Status | Description
--------- | ------- | ------- | ------- | -----------
    name | string |  required  | The name of the group.
    description | string |  optional  | The description of the group.
    amount | float |  optional  | The fixed amount for saving contribution.
    max_capacity | integer |  optional  | The maximum amount of group members.
    private | boolean |  optional  | The group type if private or public. Defaults to false.

<!-- END_5b84408c838201930093112a7621935c -->

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

<!-- START_7f0d3a6203c9b62c8808dbc0c34fd826 -->
## api/groups/{group}/join
> Example request:

```bash
curl -X POST "/api/groups/2/join" \
    -H "Authorization: Bearer UnuNu9fiai5fe8kZTTUwEYK0hpQz5giWym4usm7qq7PBfVNoOchXnVr7jw4P" \
    -H "Content-Type: application/json" \
    -d '{"invite_code":"enim"}'

```

```javascript
const url = new URL("/api/groups/2/join");

let headers = {
    "Authorization": "Bearer UnuNu9fiai5fe8kZTTUwEYK0hpQz5giWym4usm7qq7PBfVNoOchXnVr7jw4P",
    "Content-Type": "application/json",
    "Accept": "application/json",
}

let body = {
    "invite_code": "enim"
}

fetch(url, {
    method: "POST",
    headers: headers,
    body: body
})
    .then(response => response.json())
    .then(json => console.log(json));
```

```php

$client = new \GuzzleHttp\Client();
$response = $client->post("/api/groups/2/join", [
    'headers' => [
            "Authorization" => "Bearer UnuNu9fiai5fe8kZTTUwEYK0hpQz5giWym4usm7qq7PBfVNoOchXnVr7jw4P",
            "Content-Type" => "application/json",
        ],
    'json' => [
            "invite_code" => "enim",
        ],
]);
$body = $response->getBody();
print_r(json_decode((string) $body));
```




### HTTP Request
`POST api/groups/{group}/join`

#### Body Parameters

Parameter | Type | Status | Description
--------- | ------- | ------- | ------- | -----------
    invite_code | string |  optional  | nullable The invite_code to join a group.

<!-- END_7f0d3a6203c9b62c8808dbc0c34fd826 -->


