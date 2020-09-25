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
[Get Postman Collection](http://base.dev.com/docs/collection.json)

<!-- END_INFO -->

#general


<!-- START_a1fe71e3f81c678ff1c5de944a883135 -->
## api/notify/ali
> Example request:

```bash
curl -X GET \
    -G "http://base.dev.com/api/notify/ali" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json" \
    -H "Authorization: Bearer {token}"
```

```javascript
const url = new URL(
    "http://base.dev.com/api/notify/ali"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
    "Authorization": "Bearer {token}",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (200):

```json
{
    "success": true,
    "data": "ali tt",
    "code": 200,
    "msg": "success"
}
```

### HTTP Request
`GET api/notify/ali`

`POST api/notify/ali`

`PUT api/notify/ali`

`PATCH api/notify/ali`

`DELETE api/notify/ali`

`OPTIONS api/notify/ali`


<!-- END_a1fe71e3f81c678ff1c5de944a883135 -->

<!-- START_6cf6d990559dd99ab46be9cc608c0354 -->
## api/notify/wx
> Example request:

```bash
curl -X GET \
    -G "http://base.dev.com/api/notify/wx" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json" \
    -H "Authorization: Bearer {token}"
```

```javascript
const url = new URL(
    "http://base.dev.com/api/notify/wx"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
    "Authorization": "Bearer {token}",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (200):

```json
{
    "success": false,
    "data": {},
    "code": 500,
    "msg": "wx tt"
}
```

### HTTP Request
`GET api/notify/wx`

`POST api/notify/wx`

`PUT api/notify/wx`

`PATCH api/notify/wx`

`DELETE api/notify/wx`

`OPTIONS api/notify/wx`


<!-- END_6cf6d990559dd99ab46be9cc608c0354 -->

#测试


APIs for managing users
<!-- START_121fbd4baaa7fe23fddc16c32137d7ec -->
## 测试-tt

测试内容

> Example request:

```bash
curl -X GET \
    -G "http://base.dev.com/api/t1?location_id=distinctio&user_id=me&page=4" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json" \
    -H "Authorization: Bearer {token}" \
    -d '{"user_id":9,"room_id":"est","forever":false}'

```

```javascript
const url = new URL(
    "http://base.dev.com/api/t1"
);

let params = {
    "location_id": "distinctio",
    "user_id": "me",
    "page": "4",
};
Object.keys(params)
    .forEach(key => url.searchParams.append(key, params[key]));

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
    "Authorization": "Bearer {token}",
};

let body = {
    "user_id": 9,
    "room_id": "est",
    "forever": false
}

fetch(url, {
    method: "GET",
    headers: headers,
    body: body
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (200):

```json
{
    "success": true,
    "data": "\/www\/base\/resources\/views",
    "code": 200,
    "msg": "OK"
}
```

### HTTP Request
`GET api/t1`

#### URL Parameters

Parameter | Status | Description
--------- | ------- | ------- | -------
    `id` |  required  | The ID of the post.
    `lang` |  optional  | The language.
#### Query Parameters

Parameter | Status | Description
--------- | ------- | ------- | -----------
    `location_id` |  required  | The id of the location.
    `user_id` |  required  | The id of the user.
    `page` |  required  | The page number.
#### Body Parameters
Parameter | Type | Status | Description
--------- | ------- | ------- | ------- | -----------
    `user_id` | integer |  required  | The id of the user.
        `room_id` | string |  optional  | The id of the room.
        `forever` | boolean |  optional  | Whether to ban the user forever.
    
<!-- END_121fbd4baaa7fe23fddc16c32137d7ec -->

<!-- START_780bfd6704d357d2ee9759342647181c -->
## api/t2
> Example request:

```bash
curl -X GET \
    -G "http://base.dev.com/api/t2" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json" \
    -H "Authorization: Bearer {token}"
```

```javascript
const url = new URL(
    "http://base.dev.com/api/t2"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
    "Authorization": "Bearer {token}",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (200):

```json
{
    "id": 4,
    "name": "Jessica Jones",
    "roles": [
        "admin"
    ]
}
```

### HTTP Request
`GET api/t2`


<!-- END_780bfd6704d357d2ee9759342647181c -->

#用户Auth


APIs for managing users
<!-- START_c3fa189a6c95ca36ad6ac4791a873d23 -->
## 登陆

登陆

> Example request:

```bash
curl -X POST \
    "http://base.dev.com/api/login" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json" \
    -H "Authorization: Bearer {token}"
```

```javascript
const url = new URL(
    "http://base.dev.com/api/login"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
    "Authorization": "Bearer {token}",
};

fetch(url, {
    method: "POST",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`POST api/login`


<!-- END_c3fa189a6c95ca36ad6ac4791a873d23 -->

<!-- START_0bc3cbbb9a32a0f56613fecfe7ec61e9 -->
## 注册

@param App\Http\Requests\RegPost $request

> Example request:

```bash
curl -X POST \
    "http://base.dev.com/api/reg" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json" \
    -H "Authorization: Bearer {token}" \
    -d '{"name":"demo","password":"123456"}'

```

```javascript
const url = new URL(
    "http://base.dev.com/api/reg"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
    "Authorization": "Bearer {token}",
};

let body = {
    "name": "demo",
    "password": "123456"
}

fetch(url, {
    method: "POST",
    headers: headers,
    body: body
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`POST api/reg`

#### Body Parameters
Parameter | Type | Status | Description
--------- | ------- | ------- | ------- | -----------
    `name` | string |  required  | 用户名
        `password` | string |  required  | 密码
    
<!-- END_0bc3cbbb9a32a0f56613fecfe7ec61e9 -->

<!-- START_3c520b0ccdbf5100b6f6994368e1b344 -->
## 获取个人信息

获取个人信息

> Example request:

```bash
curl -X GET \
    -G "http://base.dev.com/api/profile" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json" \
    -H "Authorization: Bearer {token}"
```

```javascript
const url = new URL(
    "http://base.dev.com/api/profile"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
    "Authorization": "Bearer {token}",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (200):

```json
{
    "success": false,
    "code": 10003,
    "msg": "token无效"
}
```

### HTTP Request
`GET api/profile`


<!-- END_3c520b0ccdbf5100b6f6994368e1b344 -->

<!-- START_00e7e21641f05de650dbe13f242c6f2c -->
## 退出

退出

> Example request:

```bash
curl -X GET \
    -G "http://base.dev.com/api/logout" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json" \
    -H "Authorization: Bearer {token}"
```

```javascript
const url = new URL(
    "http://base.dev.com/api/logout"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
    "Authorization": "Bearer {token}",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (200):

```json
{
    "success": false,
    "code": 10003,
    "msg": "token无效"
}
```

### HTTP Request
`GET api/logout`


<!-- END_00e7e21641f05de650dbe13f242c6f2c -->


