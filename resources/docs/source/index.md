---
title: API Reference

language_tabs:
- bash
- javascript
- php

includes:

search: true

toc_footers:
- <a href='http://github.com/mpociot/documentarian'>Documentation Powered by Documentarian</a>
---
<!-- START_INFO -->
# Info

Welcome to the generated API reference.
[Get Postman Collection](http://127.0.0.1:8000/docs/collection.json)

<!-- END_INFO -->

#Group Invitation


<!-- START_3266674e1b0d799355c17f2d42d7be9a -->
## Invite a list of emails to the group.

<br><small style="padding: 1px 9px 2px;font-weight: bold;white-space: nowrap;color: #ffffff;-webkit-border-radius: 9px;-moz-border-radius: 9px;border-radius: 9px;background-color: #3a87ad;">Requires authentication</small>
> Example request:

```bash
curl -X POST \
    "http://127.0.0.1:8000/api/groups/1/invite" \
    -H "Authorization: Bearer 31cpjnkpUwMmp3N11in7q6eRH7PqcZoDqeRkbcCaDQBEvOeAwmw7ImxCUD9E" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json" \
    -d '{"emails":"minima","message":"ipsum"}'

```

```javascript
const url = new URL(
    "http://127.0.0.1:8000/api/groups/1/invite"
);

let headers = {
    "Authorization": "Bearer 31cpjnkpUwMmp3N11in7q6eRH7PqcZoDqeRkbcCaDQBEvOeAwmw7ImxCUD9E",
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "emails": "minima",
    "message": "ipsum"
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
$response = $client->post(
    'http://127.0.0.1:8000/api/groups/1/invite',
    [
        'headers' => [
            'Authorization' => 'Bearer 31cpjnkpUwMmp3N11in7q6eRH7PqcZoDqeRkbcCaDQBEvOeAwmw7ImxCUD9E',
            'Content-Type' => 'application/json',
            'Accept' => 'application/json',
        ],
        'json' => [
            'emails' => 'minima',
            'message' => 'ipsum',
        ],
    ]
);
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
    `emails` | string |  required  | The list of the emails to be invited to the group. Example example@gmail.com, jon@snow.com
        `message` | string |  optional  | The inivitation message.
    
<!-- END_3266674e1b0d799355c17f2d42d7be9a -->

#Group Members


<!-- START_25cacea309e94199433ca72c489534bc -->
## Display a listing of the group members.

<br><small style="padding: 1px 9px 2px;font-weight: bold;white-space: nowrap;color: #ffffff;-webkit-border-radius: 9px;-moz-border-radius: 9px;border-radius: 9px;background-color: #3a87ad;">Requires authentication</small>
> Example request:

```bash
curl -X GET \
    -G "http://127.0.0.1:8000/api/groups/1/users?page=12" \
    -H "Authorization: Bearer 31cpjnkpUwMmp3N11in7q6eRH7PqcZoDqeRkbcCaDQBEvOeAwmw7ImxCUD9E" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://127.0.0.1:8000/api/groups/1/users"
);

let params = {
    "page": "12",
};
Object.keys(params)
    .forEach(key => url.searchParams.append(key, params[key]));

let headers = {
    "Authorization": "Bearer 31cpjnkpUwMmp3N11in7q6eRH7PqcZoDqeRkbcCaDQBEvOeAwmw7ImxCUD9E",
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```

```php

$client = new \GuzzleHttp\Client();
$response = $client->get(
    'http://127.0.0.1:8000/api/groups/1/users',
    [
        'headers' => [
            'Authorization' => 'Bearer 31cpjnkpUwMmp3N11in7q6eRH7PqcZoDqeRkbcCaDQBEvOeAwmw7ImxCUD9E',
            'Content-Type' => 'application/json',
            'Accept' => 'application/json',
        ],
        'query' => [
            'page'=> '12',
        ],
    ]
);
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
    `page` |  optional  | The page number to return

<!-- END_25cacea309e94199433ca72c489534bc -->

<!-- START_193dc746eafa37d49a04e41e8a28bb43 -->
## Display the specified group member.

> Example request:

```bash
curl -X GET \
    -G "http://127.0.0.1:8000/api/groups/1/users/1" \
    -H "Authorization: Bearer 31cpjnkpUwMmp3N11in7q6eRH7PqcZoDqeRkbcCaDQBEvOeAwmw7ImxCUD9E" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://127.0.0.1:8000/api/groups/1/users/1"
);

let headers = {
    "Authorization": "Bearer 31cpjnkpUwMmp3N11in7q6eRH7PqcZoDqeRkbcCaDQBEvOeAwmw7ImxCUD9E",
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```

```php

$client = new \GuzzleHttp\Client();
$response = $client->get(
    'http://127.0.0.1:8000/api/groups/1/users/1',
    [
        'headers' => [
            'Authorization' => 'Bearer 31cpjnkpUwMmp3N11in7q6eRH7PqcZoDqeRkbcCaDQBEvOeAwmw7ImxCUD9E',
            'Content-Type' => 'application/json',
            'Accept' => 'application/json',
        ],
    ]
);
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
curl -X POST \
    "http://127.0.0.1:8000/api/groups/1/schedule" \
    -H "Authorization: Bearer 31cpjnkpUwMmp3N11in7q6eRH7PqcZoDqeRkbcCaDQBEvOeAwmw7ImxCUD9E" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://127.0.0.1:8000/api/groups/1/schedule"
);

let headers = {
    "Authorization": "Bearer 31cpjnkpUwMmp3N11in7q6eRH7PqcZoDqeRkbcCaDQBEvOeAwmw7ImxCUD9E",
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "POST",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```

```php

$client = new \GuzzleHttp\Client();
$response = $client->post(
    'http://127.0.0.1:8000/api/groups/1/schedule',
    [
        'headers' => [
            'Authorization' => 'Bearer 31cpjnkpUwMmp3N11in7q6eRH7PqcZoDqeRkbcCaDQBEvOeAwmw7ImxCUD9E',
            'Content-Type' => 'application/json',
            'Accept' => 'application/json',
        ],
    ]
);
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
curl -X PUT \
    "http://127.0.0.1:8000/api/groups/1/schedule" \
    -H "Authorization: Bearer 31cpjnkpUwMmp3N11in7q6eRH7PqcZoDqeRkbcCaDQBEvOeAwmw7ImxCUD9E" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json" \
    -d '{"update_date":"omnis"}'

```

```javascript
const url = new URL(
    "http://127.0.0.1:8000/api/groups/1/schedule"
);

let headers = {
    "Authorization": "Bearer 31cpjnkpUwMmp3N11in7q6eRH7PqcZoDqeRkbcCaDQBEvOeAwmw7ImxCUD9E",
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "update_date": "omnis"
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
$response = $client->put(
    'http://127.0.0.1:8000/api/groups/1/schedule',
    [
        'headers' => [
            'Authorization' => 'Bearer 31cpjnkpUwMmp3N11in7q6eRH7PqcZoDqeRkbcCaDQBEvOeAwmw7ImxCUD9E',
            'Content-Type' => 'application/json',
            'Accept' => 'application/json',
        ],
        'json' => [
            'update_date' => 'omnis',
        ],
    ]
);
$body = $response->getBody();
print_r(json_decode((string) $body));
```



### HTTP Request
`PUT api/groups/{group}/schedule`

#### Body Parameters
Parameter | Type | Status | Description
--------- | ------- | ------- | ------- | -----------
    `update_date` | date |  optional  | The date savings would commence for the group
    
<!-- END_58ec0449df2a33945d8d3ceb1f31b303 -->

#Groups


APIs for interacting and managing saving groups
<!-- START_007018a8a9f15c2d47fcb105431ffeee -->
## Display a listing of the group.

<br><small style="padding: 1px 9px 2px;font-weight: bold;white-space: nowrap;color: #ffffff;-webkit-border-radius: 9px;-moz-border-radius: 9px;border-radius: 9px;background-color: #3a87ad;">Requires authentication</small>
> Example request:

```bash
curl -X GET \
    -G "http://127.0.0.1:8000/api/groups?page=10" \
    -H "Authorization: Bearer 31cpjnkpUwMmp3N11in7q6eRH7PqcZoDqeRkbcCaDQBEvOeAwmw7ImxCUD9E" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://127.0.0.1:8000/api/groups"
);

let params = {
    "page": "10",
};
Object.keys(params)
    .forEach(key => url.searchParams.append(key, params[key]));

let headers = {
    "Authorization": "Bearer 31cpjnkpUwMmp3N11in7q6eRH7PqcZoDqeRkbcCaDQBEvOeAwmw7ImxCUD9E",
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```

```php

$client = new \GuzzleHttp\Client();
$response = $client->get(
    'http://127.0.0.1:8000/api/groups',
    [
        'headers' => [
            'Authorization' => 'Bearer 31cpjnkpUwMmp3N11in7q6eRH7PqcZoDqeRkbcCaDQBEvOeAwmw7ImxCUD9E',
            'Content-Type' => 'application/json',
            'Accept' => 'application/json',
        ],
        'query' => [
            'page'=> '10',
        ],
    ]
);
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
    `page` |  optional  | The page number to return

<!-- END_007018a8a9f15c2d47fcb105431ffeee -->

<!-- START_15c22564ad248f952405021410fd1d25 -->
## Store a newly created group in database.

<br><small style="padding: 1px 9px 2px;font-weight: bold;white-space: nowrap;color: #ffffff;-webkit-border-radius: 9px;-moz-border-radius: 9px;border-radius: 9px;background-color: #3a87ad;">Requires authentication</small>
> Example request:

```bash
curl -X POST \
    "http://127.0.0.1:8000/api/groups" \
    -H "Authorization: Bearer 31cpjnkpUwMmp3N11in7q6eRH7PqcZoDqeRkbcCaDQBEvOeAwmw7ImxCUD9E" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json" \
    -d '{"name":"at","description":"voluptas","amount":270276538,"max_capacity":13,"start_date":"reiciendis","private":false}'

```

```javascript
const url = new URL(
    "http://127.0.0.1:8000/api/groups"
);

let headers = {
    "Authorization": "Bearer 31cpjnkpUwMmp3N11in7q6eRH7PqcZoDqeRkbcCaDQBEvOeAwmw7ImxCUD9E",
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "name": "at",
    "description": "voluptas",
    "amount": 270276538,
    "max_capacity": 13,
    "start_date": "reiciendis",
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
$response = $client->post(
    'http://127.0.0.1:8000/api/groups',
    [
        'headers' => [
            'Authorization' => 'Bearer 31cpjnkpUwMmp3N11in7q6eRH7PqcZoDqeRkbcCaDQBEvOeAwmw7ImxCUD9E',
            'Content-Type' => 'application/json',
            'Accept' => 'application/json',
        ],
        'json' => [
            'name' => 'at',
            'description' => 'voluptas',
            'amount' => 270276538.0,
            'max_capacity' => 13,
            'start_date' => 'reiciendis',
            'private' => false,
        ],
    ]
);
$body = $response->getBody();
print_r(json_decode((string) $body));
```



### HTTP Request
`POST api/groups`

#### Body Parameters
Parameter | Type | Status | Description
--------- | ------- | ------- | ------- | -----------
    `name` | string |  required  | The name of the group.
        `description` | string |  optional  | The description of the group.
        `amount` | float |  optional  | The fixed amount for saving contribution.
        `max_capacity` | integer |  optional  | The maximum amount of group members.
        `start_date` | date |  optional  | The date savings would commence for the group
        `private` | boolean |  optional  | The group type if private or public. Defaults to false.
    
<!-- END_15c22564ad248f952405021410fd1d25 -->

<!-- START_a209a43173c7c4aaf7ab070d77fb7f0c -->
## Display the group resource.

<br><small style="padding: 1px 9px 2px;font-weight: bold;white-space: nowrap;color: #ffffff;-webkit-border-radius: 9px;-moz-border-radius: 9px;border-radius: 9px;background-color: #3a87ad;">Requires authentication</small>
> Example request:

```bash
curl -X GET \
    -G "http://127.0.0.1:8000/api/groups/1" \
    -H "Authorization: Bearer 31cpjnkpUwMmp3N11in7q6eRH7PqcZoDqeRkbcCaDQBEvOeAwmw7ImxCUD9E" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://127.0.0.1:8000/api/groups/1"
);

let headers = {
    "Authorization": "Bearer 31cpjnkpUwMmp3N11in7q6eRH7PqcZoDqeRkbcCaDQBEvOeAwmw7ImxCUD9E",
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```

```php

$client = new \GuzzleHttp\Client();
$response = $client->get(
    'http://127.0.0.1:8000/api/groups/1',
    [
        'headers' => [
            'Authorization' => 'Bearer 31cpjnkpUwMmp3N11in7q6eRH7PqcZoDqeRkbcCaDQBEvOeAwmw7ImxCUD9E',
            'Content-Type' => 'application/json',
            'Accept' => 'application/json',
        ],
    ]
);
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
curl -X PUT \
    "http://127.0.0.1:8000/api/groups/1" \
    -H "Authorization: Bearer 31cpjnkpUwMmp3N11in7q6eRH7PqcZoDqeRkbcCaDQBEvOeAwmw7ImxCUD9E" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json" \
    -d '{"name":"repellendus","description":"corporis","amount":4334.712,"max_capacity":20,"private":false}'

```

```javascript
const url = new URL(
    "http://127.0.0.1:8000/api/groups/1"
);

let headers = {
    "Authorization": "Bearer 31cpjnkpUwMmp3N11in7q6eRH7PqcZoDqeRkbcCaDQBEvOeAwmw7ImxCUD9E",
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "name": "repellendus",
    "description": "corporis",
    "amount": 4334.712,
    "max_capacity": 20,
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
$response = $client->put(
    'http://127.0.0.1:8000/api/groups/1',
    [
        'headers' => [
            'Authorization' => 'Bearer 31cpjnkpUwMmp3N11in7q6eRH7PqcZoDqeRkbcCaDQBEvOeAwmw7ImxCUD9E',
            'Content-Type' => 'application/json',
            'Accept' => 'application/json',
        ],
        'json' => [
            'name' => 'repellendus',
            'description' => 'corporis',
            'amount' => 4334.712,
            'max_capacity' => 20,
            'private' => false,
        ],
    ]
);
$body = $response->getBody();
print_r(json_decode((string) $body));
```



### HTTP Request
`PUT api/groups/{group}`

`PATCH api/groups/{group}`

#### Body Parameters
Parameter | Type | Status | Description
--------- | ------- | ------- | ------- | -----------
    `name` | string |  required  | The name of the group.
        `description` | string |  optional  | The description of the group.
        `amount` | float |  optional  | The fixed amount for saving contribution.
        `max_capacity` | integer |  optional  | The maximum amount of group members.
        `private` | boolean |  optional  | The group type if private or public. Defaults to false.
    
<!-- END_5b84408c838201930093112a7621935c -->

#Join Group


<!-- START_7f0d3a6203c9b62c8808dbc0c34fd826 -->
## Join a Group

<br><small style="padding: 1px 9px 2px;font-weight: bold;white-space: nowrap;color: #ffffff;-webkit-border-radius: 9px;-moz-border-radius: 9px;border-radius: 9px;background-color: #3a87ad;">Requires authentication</small>
> Example request:

```bash
curl -X POST \
    "http://127.0.0.1:8000/api/groups/1/join" \
    -H "Authorization: Bearer 31cpjnkpUwMmp3N11in7q6eRH7PqcZoDqeRkbcCaDQBEvOeAwmw7ImxCUD9E" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json" \
    -d '{"invite_code":"molestiae"}'

```

```javascript
const url = new URL(
    "http://127.0.0.1:8000/api/groups/1/join"
);

let headers = {
    "Authorization": "Bearer 31cpjnkpUwMmp3N11in7q6eRH7PqcZoDqeRkbcCaDQBEvOeAwmw7ImxCUD9E",
    "Content-Type": "application/json",
    "Accept": "application/json",
};

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
$response = $client->post(
    'http://127.0.0.1:8000/api/groups/1/join',
    [
        'headers' => [
            'Authorization' => 'Bearer 31cpjnkpUwMmp3N11in7q6eRH7PqcZoDqeRkbcCaDQBEvOeAwmw7ImxCUD9E',
            'Content-Type' => 'application/json',
            'Accept' => 'application/json',
        ],
        'json' => [
            'invite_code' => 'molestiae',
        ],
    ]
);
$body = $response->getBody();
print_r(json_decode((string) $body));
```



### HTTP Request
`POST api/groups/{group}/join`

#### Body Parameters
Parameter | Type | Status | Description
--------- | ------- | ------- | ------- | -----------
    `invite_code` | string |  optional  | nullable The invite_code to join a group.
    
<!-- END_7f0d3a6203c9b62c8808dbc0c34fd826 -->

#general


<!-- START_d7b7952e7fdddc07c978c9bdaf757acf -->
## Handle a registration request for the application.

> Example request:

```bash
curl -X POST \
    "http://127.0.0.1:8000/api/register" \
    -H "Content-Type: application/json" \
    -d '{"name":"iste","email":"placeat","password":"quasi"}'

```

```javascript
const url = new URL(
    "http://127.0.0.1:8000/api/register"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "name": "iste",
    "email": "placeat",
    "password": "quasi"
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
$response = $client->post(
    'http://127.0.0.1:8000/api/register',
    [
        'headers' => [
            'Content-Type' => 'application/json',
        ],
        'json' => [
            'name' => 'iste',
            'email' => 'placeat',
            'password' => 'quasi',
        ],
    ]
);
$body = $response->getBody();
print_r(json_decode((string) $body));
```



### HTTP Request
`POST api/register`

#### Body Parameters
Parameter | Type | Status | Description
--------- | ------- | ------- | ------- | -----------
    `name` | string |  required  | The email of the user.
        `email` | string |  required  | The email of the user.
        `password` | string |  optional  | The password of the user.
    
<!-- END_d7b7952e7fdddc07c978c9bdaf757acf -->

<!-- START_c3fa189a6c95ca36ad6ac4791a873d23 -->
## Handle a login request to the application.

> Example request:

```bash
curl -X POST \
    "http://127.0.0.1:8000/api/login" \
    -H "Content-Type: application/json" \
    -d '{"email":"et","password":"quam"}'

```

```javascript
const url = new URL(
    "http://127.0.0.1:8000/api/login"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "email": "et",
    "password": "quam"
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
$response = $client->post(
    'http://127.0.0.1:8000/api/login',
    [
        'headers' => [
            'Content-Type' => 'application/json',
        ],
        'json' => [
            'email' => 'et',
            'password' => 'quam',
        ],
    ]
);
$body = $response->getBody();
print_r(json_decode((string) $body));
```



### HTTP Request
`POST api/login`

#### Body Parameters
Parameter | Type | Status | Description
--------- | ------- | ------- | ------- | -----------
    `email` | string |  required  | The email of the user.
        `password` | string |  optional  | The password of the user.
    
<!-- END_c3fa189a6c95ca36ad6ac4791a873d23 -->

<!-- START_61739f3220a224b34228600649230ad1 -->
## Log the user out of the application.

> Example request:

```bash
curl -X POST \
    "http://127.0.0.1:8000/api/logout" \
    -H "Authorization: Bearer 31cpjnkpUwMmp3N11in7q6eRH7PqcZoDqeRkbcCaDQBEvOeAwmw7ImxCUD9E" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://127.0.0.1:8000/api/logout"
);

let headers = {
    "Authorization": "Bearer 31cpjnkpUwMmp3N11in7q6eRH7PqcZoDqeRkbcCaDQBEvOeAwmw7ImxCUD9E",
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "POST",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```

```php

$client = new \GuzzleHttp\Client();
$response = $client->post(
    'http://127.0.0.1:8000/api/logout',
    [
        'headers' => [
            'Authorization' => 'Bearer 31cpjnkpUwMmp3N11in7q6eRH7PqcZoDqeRkbcCaDQBEvOeAwmw7ImxCUD9E',
            'Content-Type' => 'application/json',
            'Accept' => 'application/json',
        ],
    ]
);
$body = $response->getBody();
print_r(json_decode((string) $body));
```



### HTTP Request
`POST api/logout`


<!-- END_61739f3220a224b34228600649230ad1 -->


