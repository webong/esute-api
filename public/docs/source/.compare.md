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

#General
<!-- START_d7b7952e7fdddc07c978c9bdaf757acf -->
## Handle a registration request for the application.

> Example request:

```bash
curl -X POST "/api/register" \
    -H "Content-Type: application/json" \
    -d '{"name":"veritatis","email":"corrupti","password":"corporis"}'

```

```javascript
const url = new URL("/api/register");

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
}

let body = {
    "name": "veritatis",
    "email": "corrupti",
    "password": "corporis"
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
$response = $client->post("/api/register", [
    'headers' => [
            "Content-Type" => "application/json",
        ],
    'json' => [
            "name" => "veritatis",
            "email" => "corrupti",
            "password" => "corporis",
        ],
]);
$body = $response->getBody();
print_r(json_decode((string) $body));
```




### HTTP Request
`POST api/register`

#### Body Parameters

Parameter | Type | Status | Description
--------- | ------- | ------- | ------- | -----------
    name | string |  required  | The email of the user.
    email | string |  required  | The email of the user.
    password | string |  optional  | The password of the user.

<!-- END_d7b7952e7fdddc07c978c9bdaf757acf -->

<!-- START_c3fa189a6c95ca36ad6ac4791a873d23 -->
## Handle a login request to the application.

> Example request:

```bash
curl -X POST "/api/login" \
    -H "Content-Type: application/json" \
    -d '{"email":"est","password":"dolores"}'

```

```javascript
const url = new URL("/api/login");

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
}

let body = {
    "email": "est",
    "password": "dolores"
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
$response = $client->post("/api/login", [
    'headers' => [
            "Content-Type" => "application/json",
        ],
    'json' => [
            "email" => "est",
            "password" => "dolores",
        ],
]);
$body = $response->getBody();
print_r(json_decode((string) $body));
```




### HTTP Request
`POST api/login`

#### Body Parameters

Parameter | Type | Status | Description
--------- | ------- | ------- | ------- | -----------
    email | string |  required  | The email of the user.
    password | string |  optional  | The password of the user.

<!-- END_c3fa189a6c95ca36ad6ac4791a873d23 -->

<!-- START_61739f3220a224b34228600649230ad1 -->
## Log the user out of the application.

> Example request:

```bash
curl -X POST "/api/logout" \
    -H "Authorization: Bearer UAs9Bk0uRYQTXuqzrXyYnKrNDAoJQF53iAM5bh11FUPjlz5Jxn60sZ0S5HqU"
```

```javascript
const url = new URL("/api/logout");

let headers = {
    "Authorization": "Bearer UAs9Bk0uRYQTXuqzrXyYnKrNDAoJQF53iAM5bh11FUPjlz5Jxn60sZ0S5HqU",
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
            "Authorization" => "Bearer UAs9Bk0uRYQTXuqzrXyYnKrNDAoJQF53iAM5bh11FUPjlz5Jxn60sZ0S5HqU",
        ],
]);
$body = $response->getBody();
print_r(json_decode((string) $body));
```




### HTTP Request
`POST api/logout`


<!-- END_61739f3220a224b34228600649230ad1 -->

#Group Invitation
<!-- START_3266674e1b0d799355c17f2d42d7be9a -->
## Invite a list of emails to the group.

<br><small style="padding: 1px 9px 2px;font-weight: bold;white-space: nowrap;color: #ffffff;-webkit-border-radius: 9px;-moz-border-radius: 9px;border-radius: 9px;background-color: #3a87ad;">Requires authentication</small>
> Example request:

```bash
curl -X POST "/api/groups/2/invite" \
    -H "Authorization: Bearer UAs9Bk0uRYQTXuqzrXyYnKrNDAoJQF53iAM5bh11FUPjlz5Jxn60sZ0S5HqU" \
    -H "Content-Type: application/json" \
    -d '{"emails":"aut","message":"et"}'

```

```javascript
const url = new URL("/api/groups/2/invite");

let headers = {
    "Authorization": "Bearer UAs9Bk0uRYQTXuqzrXyYnKrNDAoJQF53iAM5bh11FUPjlz5Jxn60sZ0S5HqU",
    "Content-Type": "application/json",
    "Accept": "application/json",
}

let body = {
    "emails": "aut",
    "message": "et"
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
            "Authorization" => "Bearer UAs9Bk0uRYQTXuqzrXyYnKrNDAoJQF53iAM5bh11FUPjlz5Jxn60sZ0S5HqU",
            "Content-Type" => "application/json",
        ],
    'json' => [
            "emails" => "aut",
            "message" => "et",
        ],
]);
$body = $response->getBody();
print_r(json_decode((string) $body));
```



> Example response (200):

```json
{
    "message": [
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

<br><small style="padding: 1px 9px 2px;font-weight: bold;white-space: nowrap;color: #ffffff;-webkit-border-radius: 9px;-moz-border-radius: 9px;border-radius: 9px;background-color: #3a87ad;">Requires authentication</small>
> Example request:

```bash
curl -X GET -G "/api/groups/2/users" \
    -H "Authorization: Bearer UAs9Bk0uRYQTXuqzrXyYnKrNDAoJQF53iAM5bh11FUPjlz5Jxn60sZ0S5HqU"
```

```javascript
const url = new URL("/api/groups/2/users");

    let params = {
            "page": "6",
        };
    Object.keys(params).forEach(key => url.searchParams.append(key, params[key]));

let headers = {
    "Authorization": "Bearer UAs9Bk0uRYQTXuqzrXyYnKrNDAoJQF53iAM5bh11FUPjlz5Jxn60sZ0S5HqU",
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
            "Authorization" => "Bearer UAs9Bk0uRYQTXuqzrXyYnKrNDAoJQF53iAM5bh11FUPjlz5Jxn60sZ0S5HqU",
        ],
    'query' => [
            "page" => "6",
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

#### Query Parameters

Parameter | Status | Description
--------- | ------- | ------- | -----------
    page |  optional  | The page number to return

<!-- END_25cacea309e94199433ca72c489534bc -->

<!-- START_193dc746eafa37d49a04e41e8a28bb43 -->
## Display the specified group member.

> Example request:

```bash
curl -X GET -G "/api/groups/2/users/1" \
    -H "Authorization: Bearer UAs9Bk0uRYQTXuqzrXyYnKrNDAoJQF53iAM5bh11FUPjlz5Jxn60sZ0S5HqU"
```

```javascript
const url = new URL("/api/groups/2/users/1");

let headers = {
    "Authorization": "Bearer UAs9Bk0uRYQTXuqzrXyYnKrNDAoJQF53iAM5bh11FUPjlz5Jxn60sZ0S5HqU",
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
            "Authorization" => "Bearer UAs9Bk0uRYQTXuqzrXyYnKrNDAoJQF53iAM5bh11FUPjlz5Jxn60sZ0S5HqU",
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

#Group Scheduling
<!-- START_291738af5a803fa8d10caab6ab8c683f -->
## Start a Group Saving

<br><small style="padding: 1px 9px 2px;font-weight: bold;white-space: nowrap;color: #ffffff;-webkit-border-radius: 9px;-moz-border-radius: 9px;border-radius: 9px;background-color: #3a87ad;">Requires authentication</small>
> Example request:

```bash
curl -X POST "/api/groups/2/schedule" \
    -H "Authorization: Bearer UAs9Bk0uRYQTXuqzrXyYnKrNDAoJQF53iAM5bh11FUPjlz5Jxn60sZ0S5HqU"
```

```javascript
const url = new URL("/api/groups/2/schedule");

let headers = {
    "Authorization": "Bearer UAs9Bk0uRYQTXuqzrXyYnKrNDAoJQF53iAM5bh11FUPjlz5Jxn60sZ0S5HqU",
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
            "Authorization" => "Bearer UAs9Bk0uRYQTXuqzrXyYnKrNDAoJQF53iAM5bh11FUPjlz5Jxn60sZ0S5HqU",
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

<br><small style="padding: 1px 9px 2px;font-weight: bold;white-space: nowrap;color: #ffffff;-webkit-border-radius: 9px;-moz-border-radius: 9px;border-radius: 9px;background-color: #3a87ad;">Requires authentication</small>
> Example request:

```bash
curl -X PUT "/api/groups/2/schedule" \
    -H "Authorization: Bearer UAs9Bk0uRYQTXuqzrXyYnKrNDAoJQF53iAM5bh11FUPjlz5Jxn60sZ0S5HqU" \
    -H "Content-Type: application/json" \
    -d '{"update_date":"ad"}'

```

```javascript
const url = new URL("/api/groups/2/schedule");

let headers = {
    "Authorization": "Bearer UAs9Bk0uRYQTXuqzrXyYnKrNDAoJQF53iAM5bh11FUPjlz5Jxn60sZ0S5HqU",
    "Content-Type": "application/json",
    "Accept": "application/json",
}

let body = {
    "update_date": "ad"
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
$response = $client->put("/api/groups/2/schedule", [
    'headers' => [
            "Authorization" => "Bearer UAs9Bk0uRYQTXuqzrXyYnKrNDAoJQF53iAM5bh11FUPjlz5Jxn60sZ0S5HqU",
            "Content-Type" => "application/json",
        ],
    'json' => [
            "update_date" => "ad",
        ],
]);
$body = $response->getBody();
print_r(json_decode((string) $body));
```




### HTTP Request
`PUT api/groups/{group}/schedule`

#### Body Parameters

Parameter | Type | Status | Description
--------- | ------- | ------- | ------- | -----------
    update_date | date |  optional  | The date savings would commence for the group

<!-- END_58ec0449df2a33945d8d3ceb1f31b303 -->

#Groups

APIs for interacting and managing saving groups
<!-- START_007018a8a9f15c2d47fcb105431ffeee -->
## Display a listing of the group.

<br><small style="padding: 1px 9px 2px;font-weight: bold;white-space: nowrap;color: #ffffff;-webkit-border-radius: 9px;-moz-border-radius: 9px;border-radius: 9px;background-color: #3a87ad;">Requires authentication</small>
> Example request:

```bash
curl -X GET -G "/api/groups" \
    -H "Authorization: Bearer UAs9Bk0uRYQTXuqzrXyYnKrNDAoJQF53iAM5bh11FUPjlz5Jxn60sZ0S5HqU"
```

```javascript
const url = new URL("/api/groups");

    let params = {
            "page": "1",
        };
    Object.keys(params).forEach(key => url.searchParams.append(key, params[key]));

let headers = {
    "Authorization": "Bearer UAs9Bk0uRYQTXuqzrXyYnKrNDAoJQF53iAM5bh11FUPjlz5Jxn60sZ0S5HqU",
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
            "Authorization" => "Bearer UAs9Bk0uRYQTXuqzrXyYnKrNDAoJQF53iAM5bh11FUPjlz5Jxn60sZ0S5HqU",
        ],
    'query' => [
            "page" => "1",
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
`GET api/groups`

#### Query Parameters

Parameter | Status | Description
--------- | ------- | ------- | -----------
    page |  optional  | The page number to return

<!-- END_007018a8a9f15c2d47fcb105431ffeee -->

<!-- START_15c22564ad248f952405021410fd1d25 -->
## Store a newly created group in database.

<br><small style="padding: 1px 9px 2px;font-weight: bold;white-space: nowrap;color: #ffffff;-webkit-border-radius: 9px;-moz-border-radius: 9px;border-radius: 9px;background-color: #3a87ad;">Requires authentication</small>
> Example request:

```bash
curl -X POST "/api/groups" \
    -H "Authorization: Bearer UAs9Bk0uRYQTXuqzrXyYnKrNDAoJQF53iAM5bh11FUPjlz5Jxn60sZ0S5HqU" \
    -H "Content-Type: application/json" \
    -d '{"name":"ipsum","description":"occaecati","amount":1921.018393373,"max_capacity":12,"start_date":"sed","private":false}'

```

```javascript
const url = new URL("/api/groups");

let headers = {
    "Authorization": "Bearer UAs9Bk0uRYQTXuqzrXyYnKrNDAoJQF53iAM5bh11FUPjlz5Jxn60sZ0S5HqU",
    "Content-Type": "application/json",
    "Accept": "application/json",
}

let body = {
    "name": "ipsum",
    "description": "occaecati",
    "amount": 1921.018393373,
    "max_capacity": 12,
    "start_date": "sed",
    "private": false
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
            "Authorization" => "Bearer UAs9Bk0uRYQTXuqzrXyYnKrNDAoJQF53iAM5bh11FUPjlz5Jxn60sZ0S5HqU",
            "Content-Type" => "application/json",
        ],
    'json' => [
            "name" => "ipsum",
            "description" => "occaecati",
            "amount" => "1921.018393373",
            "max_capacity" => "12",
            "start_date" => "sed",
            "private" => "",
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

<br><small style="padding: 1px 9px 2px;font-weight: bold;white-space: nowrap;color: #ffffff;-webkit-border-radius: 9px;-moz-border-radius: 9px;border-radius: 9px;background-color: #3a87ad;">Requires authentication</small>
> Example request:

```bash
curl -X GET -G "/api/groups/2" \
    -H "Authorization: Bearer UAs9Bk0uRYQTXuqzrXyYnKrNDAoJQF53iAM5bh11FUPjlz5Jxn60sZ0S5HqU"
```

```javascript
const url = new URL("/api/groups/2");

let headers = {
    "Authorization": "Bearer UAs9Bk0uRYQTXuqzrXyYnKrNDAoJQF53iAM5bh11FUPjlz5Jxn60sZ0S5HqU",
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
            "Authorization" => "Bearer UAs9Bk0uRYQTXuqzrXyYnKrNDAoJQF53iAM5bh11FUPjlz5Jxn60sZ0S5HqU",
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

<!-- START_5b84408c838201930093112a7621935c -->
## Update the specified group in storage.

<br><small style="padding: 1px 9px 2px;font-weight: bold;white-space: nowrap;color: #ffffff;-webkit-border-radius: 9px;-moz-border-radius: 9px;border-radius: 9px;background-color: #3a87ad;">Requires authentication</small>
> Example request:

```bash
curl -X PUT "/api/groups/2" \
    -H "Authorization: Bearer UAs9Bk0uRYQTXuqzrXyYnKrNDAoJQF53iAM5bh11FUPjlz5Jxn60sZ0S5HqU" \
    -H "Content-Type: application/json" \
    -d '{"name":"consequatur","description":"magni","amount":6397.6550764,"max_capacity":13,"private":false}'

```

```javascript
const url = new URL("/api/groups/2");

let headers = {
    "Authorization": "Bearer UAs9Bk0uRYQTXuqzrXyYnKrNDAoJQF53iAM5bh11FUPjlz5Jxn60sZ0S5HqU",
    "Content-Type": "application/json",
    "Accept": "application/json",
}

let body = {
    "name": "consequatur",
    "description": "magni",
    "amount": 6397.6550764,
    "max_capacity": 13,
    "private": false
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
            "Authorization" => "Bearer UAs9Bk0uRYQTXuqzrXyYnKrNDAoJQF53iAM5bh11FUPjlz5Jxn60sZ0S5HqU",
            "Content-Type" => "application/json",
        ],
    'json' => [
            "name" => "consequatur",
            "description" => "magni",
            "amount" => "6397.6550764",
            "max_capacity" => "13",
            "private" => "",
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

#Join Group
<!-- START_7f0d3a6203c9b62c8808dbc0c34fd826 -->
## Join a Group

<br><small style="padding: 1px 9px 2px;font-weight: bold;white-space: nowrap;color: #ffffff;-webkit-border-radius: 9px;-moz-border-radius: 9px;border-radius: 9px;background-color: #3a87ad;">Requires authentication</small>
> Example request:

```bash
curl -X POST "/api/groups/2/join" \
    -H "Authorization: Bearer UAs9Bk0uRYQTXuqzrXyYnKrNDAoJQF53iAM5bh11FUPjlz5Jxn60sZ0S5HqU" \
    -H "Content-Type: application/json" \
    -d '{"invite_code":"culpa"}'

```

```javascript
const url = new URL("/api/groups/2/join");

let headers = {
    "Authorization": "Bearer UAs9Bk0uRYQTXuqzrXyYnKrNDAoJQF53iAM5bh11FUPjlz5Jxn60sZ0S5HqU",
    "Content-Type": "application/json",
    "Accept": "application/json",
}

let body = {
    "invite_code": "culpa"
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
            "Authorization" => "Bearer UAs9Bk0uRYQTXuqzrXyYnKrNDAoJQF53iAM5bh11FUPjlz5Jxn60sZ0S5HqU",
            "Content-Type" => "application/json",
        ],
    'json' => [
            "invite_code" => "culpa",
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


