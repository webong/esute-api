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
    -d '{"name":"beatae","email":"aut","password":"autem"}'

```

```javascript
const url = new URL("/api/register");

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
}

let body = {
    "name": "beatae",
    "email": "aut",
    "password": "autem"
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
            "name" => "beatae",
            "email" => "aut",
            "password" => "autem",
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
    -d '{"email":"cumque","password":"mollitia"}'

```

```javascript
const url = new URL("/api/login");

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
}

let body = {
    "email": "cumque",
    "password": "mollitia"
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
            "email" => "cumque",
            "password" => "mollitia",
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
    -H "Authorization: Bearer 31cpjnkpUwMmp3N11in7q6eRH7PqcZoDqeRkbcCaDQBEvOeAwmw7ImxCUD9E"
```

```javascript
const url = new URL("/api/logout");

let headers = {
    "Authorization": "Bearer 31cpjnkpUwMmp3N11in7q6eRH7PqcZoDqeRkbcCaDQBEvOeAwmw7ImxCUD9E",
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
            "Authorization" => "Bearer 31cpjnkpUwMmp3N11in7q6eRH7PqcZoDqeRkbcCaDQBEvOeAwmw7ImxCUD9E",
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
    -H "Authorization: Bearer 31cpjnkpUwMmp3N11in7q6eRH7PqcZoDqeRkbcCaDQBEvOeAwmw7ImxCUD9E" \
    -H "Content-Type: application/json" \
    -d '{"emails":"aut","message":"sed"}'

```

```javascript
const url = new URL("/api/groups/2/invite");

let headers = {
    "Authorization": "Bearer 31cpjnkpUwMmp3N11in7q6eRH7PqcZoDqeRkbcCaDQBEvOeAwmw7ImxCUD9E",
    "Content-Type": "application/json",
    "Accept": "application/json",
}

let body = {
    "emails": "aut",
    "message": "sed"
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
            "Authorization" => "Bearer 31cpjnkpUwMmp3N11in7q6eRH7PqcZoDqeRkbcCaDQBEvOeAwmw7ImxCUD9E",
            "Content-Type" => "application/json",
        ],
    'json' => [
            "emails" => "aut",
            "message" => "sed",
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
    -H "Authorization: Bearer 31cpjnkpUwMmp3N11in7q6eRH7PqcZoDqeRkbcCaDQBEvOeAwmw7ImxCUD9E"
```

```javascript
const url = new URL("/api/groups/2/users");

    let params = {
            "page": "5",
        };
    Object.keys(params).forEach(key => url.searchParams.append(key, params[key]));

let headers = {
    "Authorization": "Bearer 31cpjnkpUwMmp3N11in7q6eRH7PqcZoDqeRkbcCaDQBEvOeAwmw7ImxCUD9E",
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
            "Authorization" => "Bearer 31cpjnkpUwMmp3N11in7q6eRH7PqcZoDqeRkbcCaDQBEvOeAwmw7ImxCUD9E",
        ],
    'query' => [
            "page" => "5",
        ],
]);
$body = $response->getBody();
print_r(json_decode((string) $body));
```



> Example response (200):

```json
{
    "data": [
        {
            "id": 1,
            "name": "Wisdom Aebong",
            "email": "wisdomjebong@gmail.com",
            "status": "inactive",
            "current_cycle": "0",
            "contributions": 0
        },
        {
            "id": 3,
            "name": "Example",
            "email": "example@mail.com",
            "status": "active",
            "current_cycle": "0",
            "contributions": 0
        }
    ],
    "links": {
        "first": "http:\/\/localhost\/api\/groups\/2\/users?page=1",
        "last": "http:\/\/localhost\/api\/groups\/2\/users?page=1",
        "prev": null,
        "next": null
    },
    "meta": {
        "current_page": 1,
        "from": 1,
        "last_page": 1,
        "path": "http:\/\/localhost\/api\/groups\/2\/users",
        "per_page": 15,
        "to": 2,
        "total": 2
    }
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
    -H "Authorization: Bearer 31cpjnkpUwMmp3N11in7q6eRH7PqcZoDqeRkbcCaDQBEvOeAwmw7ImxCUD9E"
```

```javascript
const url = new URL("/api/groups/2/users/1");

let headers = {
    "Authorization": "Bearer 31cpjnkpUwMmp3N11in7q6eRH7PqcZoDqeRkbcCaDQBEvOeAwmw7ImxCUD9E",
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
            "Authorization" => "Bearer 31cpjnkpUwMmp3N11in7q6eRH7PqcZoDqeRkbcCaDQBEvOeAwmw7ImxCUD9E",
        ],
]);
$body = $response->getBody();
print_r(json_decode((string) $body));
```



> Example response (200):

```json
{
    "data": {
        "id": 1,
        "name": "Wisdom Aebong",
        "email": "wisdomjebong@gmail.com",
        "status": "inactive",
        "current_cycle": "0",
        "contributions": 0
    }
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
    -H "Authorization: Bearer 31cpjnkpUwMmp3N11in7q6eRH7PqcZoDqeRkbcCaDQBEvOeAwmw7ImxCUD9E"
```

```javascript
const url = new URL("/api/groups/2/schedule");

let headers = {
    "Authorization": "Bearer 31cpjnkpUwMmp3N11in7q6eRH7PqcZoDqeRkbcCaDQBEvOeAwmw7ImxCUD9E",
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
            "Authorization" => "Bearer 31cpjnkpUwMmp3N11in7q6eRH7PqcZoDqeRkbcCaDQBEvOeAwmw7ImxCUD9E",
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
    -H "Authorization: Bearer 31cpjnkpUwMmp3N11in7q6eRH7PqcZoDqeRkbcCaDQBEvOeAwmw7ImxCUD9E" \
    -H "Content-Type: application/json" \
    -d '{"update_date":"quo"}'

```

```javascript
const url = new URL("/api/groups/2/schedule");

let headers = {
    "Authorization": "Bearer 31cpjnkpUwMmp3N11in7q6eRH7PqcZoDqeRkbcCaDQBEvOeAwmw7ImxCUD9E",
    "Content-Type": "application/json",
    "Accept": "application/json",
}

let body = {
    "update_date": "quo"
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
            "Authorization" => "Bearer 31cpjnkpUwMmp3N11in7q6eRH7PqcZoDqeRkbcCaDQBEvOeAwmw7ImxCUD9E",
            "Content-Type" => "application/json",
        ],
    'json' => [
            "update_date" => "quo",
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
    -H "Authorization: Bearer 31cpjnkpUwMmp3N11in7q6eRH7PqcZoDqeRkbcCaDQBEvOeAwmw7ImxCUD9E"
```

```javascript
const url = new URL("/api/groups");

    let params = {
            "page": "15",
        };
    Object.keys(params).forEach(key => url.searchParams.append(key, params[key]));

let headers = {
    "Authorization": "Bearer 31cpjnkpUwMmp3N11in7q6eRH7PqcZoDqeRkbcCaDQBEvOeAwmw7ImxCUD9E",
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
            "Authorization" => "Bearer 31cpjnkpUwMmp3N11in7q6eRH7PqcZoDqeRkbcCaDQBEvOeAwmw7ImxCUD9E",
        ],
    'query' => [
            "page" => "15",
        ],
]);
$body = $response->getBody();
print_r(json_decode((string) $body));
```



> Example response (200):

```json
{
    "data": [
        {
            "id": 1,
            "name": "Group One",
            "description": null,
            "amount": 2000,
            "start_date": "2019-12-08 00:00:00",
            "completed_cycle": 0,
            "max_capacity": null,
            "private": false,
            "status": "inactive",
            "created_at": "2019-08-10 13:52:46",
            "updated_at": "2019-08-10 13:52:46",
            "deleted_at": null
        },
        {
            "id": 2,
            "name": "Group Two",
            "description": null,
            "amount": 2000,
            "start_date": "2019-12-08 00:00:00",
            "completed_cycle": 0,
            "max_capacity": null,
            "private": false,
            "status": "inactive",
            "created_at": "2019-08-10 13:56:09",
            "updated_at": "2019-08-10 13:56:09",
            "deleted_at": null
        },
        {
            "id": 4,
            "name": "at",
            "description": "Mock Turtle in a game of croquet she was not otherwise than what it meant till now.' 'If.",
            "amount": 5088,
            "start_date": "1994-03-29 00:00:00",
            "completed_cycle": 0,
            "max_capacity": null,
            "private": false,
            "status": "inactive",
            "created_at": "2019-08-10 14:35:43",
            "updated_at": "2019-08-10 14:35:43",
            "deleted_at": null
        },
        {
            "id": 6,
            "name": "id",
            "description": "Alice; 'I daresay it's a French mouse, come over with diamonds, and walked two and two, as the doubled-up soldiers were always getting up and walking off to other.",
            "amount": 8817,
            "start_date": "1996-12-03 00:00:00",
            "completed_cycle": 0,
            "max_capacity": null,
            "private": false,
            "status": "inactive",
            "created_at": "2019-08-10 14:35:43",
            "updated_at": "2019-08-10 14:35:43",
            "deleted_at": null
        },
        {
            "id": 7,
            "name": "non",
            "description": "Mouse, who was sitting on a crimson velvet cushion; and, last of all her coaxing. Hardly knowing what she was up.",
            "amount": 4935,
            "start_date": "1994-06-03 00:00:00",
            "completed_cycle": 0,
            "max_capacity": null,
            "private": false,
            "status": "inactive",
            "created_at": "2019-08-10 14:35:43",
            "updated_at": "2019-08-10 14:35:43",
            "deleted_at": null
        },
        {
            "id": 9,
            "name": "porro",
            "description": "However, 'jury-men' would have made a dreadfully ugly child: but it puzzled her a good opportunity for making her escape; so she began thinking.",
            "amount": 8828,
            "start_date": "2012-06-04 00:00:00",
            "completed_cycle": 0,
            "max_capacity": null,
            "private": false,
            "status": "inactive",
            "created_at": "2019-08-10 14:35:43",
            "updated_at": "2019-08-10 14:35:43",
            "deleted_at": null
        },
        {
            "id": 11,
            "name": "quos",
            "description": "I will prosecute YOU.--Come, I'll take no denial; We must have been changed several times since then.' 'What do you know about this.",
            "amount": 5595,
            "start_date": "1975-11-01 00:00:00",
            "completed_cycle": 0,
            "max_capacity": null,
            "private": false,
            "status": "inactive",
            "created_at": "2019-08-10 14:35:43",
            "updated_at": "2019-08-10 14:35:43",
            "deleted_at": null
        }
    ],
    "links": {
        "first": "http:\/\/localhost\/api\/groups?page=1",
        "last": "http:\/\/localhost\/api\/groups?page=1",
        "prev": null,
        "next": null
    },
    "meta": {
        "current_page": 1,
        "from": 1,
        "last_page": 1,
        "path": "http:\/\/localhost\/api\/groups",
        "per_page": 15,
        "to": 7,
        "total": 7
    }
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
    -H "Authorization: Bearer 31cpjnkpUwMmp3N11in7q6eRH7PqcZoDqeRkbcCaDQBEvOeAwmw7ImxCUD9E" \
    -H "Content-Type: application/json" \
    -d '{"name":"architecto","description":"eius","amount":25834204.294560947,"max_capacity":3,"start_date":"error","private":false}'

```

```javascript
const url = new URL("/api/groups");

let headers = {
    "Authorization": "Bearer 31cpjnkpUwMmp3N11in7q6eRH7PqcZoDqeRkbcCaDQBEvOeAwmw7ImxCUD9E",
    "Content-Type": "application/json",
    "Accept": "application/json",
}

let body = {
    "name": "architecto",
    "description": "eius",
    "amount": 25834204.294560947,
    "max_capacity": 3,
    "start_date": "error",
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
            "Authorization" => "Bearer 31cpjnkpUwMmp3N11in7q6eRH7PqcZoDqeRkbcCaDQBEvOeAwmw7ImxCUD9E",
            "Content-Type" => "application/json",
        ],
    'json' => [
            "name" => "architecto",
            "description" => "eius",
            "amount" => "25834204.294561",
            "max_capacity" => "3",
            "start_date" => "error",
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
    -H "Authorization: Bearer 31cpjnkpUwMmp3N11in7q6eRH7PqcZoDqeRkbcCaDQBEvOeAwmw7ImxCUD9E"
```

```javascript
const url = new URL("/api/groups/2");

let headers = {
    "Authorization": "Bearer 31cpjnkpUwMmp3N11in7q6eRH7PqcZoDqeRkbcCaDQBEvOeAwmw7ImxCUD9E",
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
            "Authorization" => "Bearer 31cpjnkpUwMmp3N11in7q6eRH7PqcZoDqeRkbcCaDQBEvOeAwmw7ImxCUD9E",
        ],
]);
$body = $response->getBody();
print_r(json_decode((string) $body));
```



> Example response (200):

```json
{
    "data": {
        "id": 2,
        "name": "Group Two",
        "description": null,
        "amount": 2000,
        "start_date": "2019-12-08 00:00:00",
        "completed_cycle": 0,
        "max_capacity": null,
        "private": false,
        "status": "inactive",
        "created_at": "2019-08-10 13:56:09",
        "updated_at": "2019-08-10 13:56:09",
        "deleted_at": null
    }
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
    -H "Authorization: Bearer 31cpjnkpUwMmp3N11in7q6eRH7PqcZoDqeRkbcCaDQBEvOeAwmw7ImxCUD9E" \
    -H "Content-Type: application/json" \
    -d '{"name":"nostrum","description":"suscipit","amount":225.15132724,"max_capacity":3,"private":false}'

```

```javascript
const url = new URL("/api/groups/2");

let headers = {
    "Authorization": "Bearer 31cpjnkpUwMmp3N11in7q6eRH7PqcZoDqeRkbcCaDQBEvOeAwmw7ImxCUD9E",
    "Content-Type": "application/json",
    "Accept": "application/json",
}

let body = {
    "name": "nostrum",
    "description": "suscipit",
    "amount": 225.15132724,
    "max_capacity": 3,
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
            "Authorization" => "Bearer 31cpjnkpUwMmp3N11in7q6eRH7PqcZoDqeRkbcCaDQBEvOeAwmw7ImxCUD9E",
            "Content-Type" => "application/json",
        ],
    'json' => [
            "name" => "nostrum",
            "description" => "suscipit",
            "amount" => "225.15132724",
            "max_capacity" => "3",
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
    -H "Authorization: Bearer 31cpjnkpUwMmp3N11in7q6eRH7PqcZoDqeRkbcCaDQBEvOeAwmw7ImxCUD9E" \
    -H "Content-Type: application/json" \
    -d '{"invite_code":"molestiae"}'

```

```javascript
const url = new URL("/api/groups/2/join");

let headers = {
    "Authorization": "Bearer 31cpjnkpUwMmp3N11in7q6eRH7PqcZoDqeRkbcCaDQBEvOeAwmw7ImxCUD9E",
    "Content-Type": "application/json",
    "Accept": "application/json",
}

let body = {
    "invite_code": "molestiae"
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
            "Authorization" => "Bearer 31cpjnkpUwMmp3N11in7q6eRH7PqcZoDqeRkbcCaDQBEvOeAwmw7ImxCUD9E",
            "Content-Type" => "application/json",
        ],
    'json' => [
            "invite_code" => "molestiae",
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


