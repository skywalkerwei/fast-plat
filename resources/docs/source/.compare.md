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


<!-- START_6b761fde7166aca675e449a990c866d9 -->
## api/goods
> Example request:

```bash
curl -X GET \
    -G "http://base.dev.com/api/goods" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json" \
    -H "Authorization: Bearer {token}"
```

```javascript
const url = new URL(
    "http://base.dev.com/api/goods"
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
    "data": {
        "current_page": 1,
        "data": [
            {
                "id": 1006002,
                "goods_sn": "1006002",
                "name": "轻奢纯棉刺绣水洗四件套",
                "category_id": 1008009,
                "gallery": "[\"http:\/\/yanxuan.nosdn.127.net\/4eb09e08ac9de543d2291d27a6be0b54.jpg\", \"http:\/\/yanxuan.nosdn.127.net\/0c9eb81c7594dbe42802ff1ebbece51a.jpg\", \"http:\/\/yanxuan.nosdn.127.net\/8cfc7b6bfd28687ab3399da08e5ba61b.jpg\", \"http:\/\/yanxuan.nosdn.127.net\/b98cfd7f197b62abd1679321eae253a6.jpg\"]",
                "keywords": "",
                "brief": "设计师原款，精致绣花",
                "is_on_sale": 1,
                "sort_order": 23,
                "pic_url": "http:\/\/yanxuan.nosdn.127.net\/8ab2d3287af0cefa2cc539e40600621d.png",
                "share_url": "",
                "is_new": 0,
                "is_hot": 0,
                "unit": "件",
                "counter_price": "919.00",
                "retail_price": "899.00",
                "detail": "<p><img src=\"http:\/\/yanxuan.nosdn.127.net\/2597f9e2e41093f50761837eb4c2e6be.jpg\" _src=\"http:\/\/yanxuan.nosdn.127.net\/2597f9e2e41093f50761837eb4c2e6be.jpg\" style=\"\"\/><\/p><p><img src=\"http:\/\/yanxuan.nosdn.127.net\/4377adc892bf9d16f9d0fd78f88a6986.jpg\" _src=\"http:\/\/yanxuan.nosdn.127.net\/4377adc892bf9d16f9d0fd78f88a6986.jpg\" style=\"\"\/><\/p><p><img src=\"http:\/\/yanxuan.nosdn.127.net\/986bd3a7517a356265049443cbb747d9.jpg\" _src=\"http:\/\/yanxuan.nosdn.127.net\/986bd3a7517a356265049443cbb747d9.jpg\" style=\"\"\/><\/p><p><img src=\"http:\/\/yanxuan.nosdn.127.net\/5cdf3958b3a8d9982b879e3fea1fd616.jpg\" _src=\"http:\/\/yanxuan.nosdn.127.net\/5cdf3958b3a8d9982b879e3fea1fd616.jpg\" style=\"\"\/><\/p><p><img src=\"http:\/\/yanxuan.nosdn.127.net\/47e5be34ef476258f44f307982c705d4.jpg\" _src=\"http:\/\/yanxuan.nosdn.127.net\/47e5be34ef476258f44f307982c705d4.jpg\" style=\"\"\/><\/p><p><img src=\"http:\/\/yanxuan.nosdn.127.net\/a2220e4cbb5ebc49e9cecb64176983d9.jpg\" _src=\"http:\/\/yanxuan.nosdn.127.net\/a2220e4cbb5ebc49e9cecb64176983d9.jpg\" style=\"\"\/><\/p><p><img src=\"http:\/\/yanxuan.nosdn.127.net\/dee62e466465b370c349e37fccd3b596.jpg\" _src=\"http:\/\/yanxuan.nosdn.127.net\/dee62e466465b370c349e37fccd3b596.jpg\" style=\"\"\/><\/p><p><img src=\"http:\/\/yanxuan.nosdn.127.net\/c021b91f965ac022182eb03b2780e5de.jpg\" _src=\"http:\/\/yanxuan.nosdn.127.net\/c021b91f965ac022182eb03b2780e5de.jpg\" style=\"\"\/><\/p><p><img src=\"http:\/\/yanxuan.nosdn.127.net\/b9f7afd9441928d7f670fd7879ba869d.jpg\" _src=\"http:\/\/yanxuan.nosdn.127.net\/b9f7afd9441928d7f670fd7879ba869d.jpg\" style=\"\"\/><\/p><p><img src=\"http:\/\/yanxuan.nosdn.127.net\/8a73b69a2fefbd154a2a6ad45102b565.jpg\" _src=\"http:\/\/yanxuan.nosdn.127.net\/8a73b69a2fefbd154a2a6ad45102b565.jpg\" style=\"\"\/><\/p><p><img src=\"http:\/\/yanxuan.nosdn.127.net\/5836d918faa9b11eb8d9f97f9787cda9.jpg\" _src=\"http:\/\/yanxuan.nosdn.127.net\/5836d918faa9b11eb8d9f97f9787cda9.jpg\" style=\"\"\/><\/p><p><img src=\"http:\/\/yanxuan.nosdn.127.net\/8216a8addae2f02a5a570ef45d5ecffc.jpg\" _src=\"http:\/\/yanxuan.nosdn.127.net\/8216a8addae2f02a5a570ef45d5ecffc.jpg\" style=\"\"\/><\/p><p><img src=\"http:\/\/yanxuan.nosdn.127.net\/da382973dcb0e524a36519baab880204.jpg\" _src=\"http:\/\/yanxuan.nosdn.127.net\/da382973dcb0e524a36519baab880204.jpg\" style=\"\"\/><\/p><p><img src=\"http:\/\/yanxuan.nosdn.127.net\/f1c6e84d49f74e228bc57934ec7b7500.jpg\" _src=\"http:\/\/yanxuan.nosdn.127.net\/f1c6e84d49f74e228bc57934ec7b7500.jpg\" style=\"\"\/><\/p><p><img src=\"http:\/\/yanxuan.nosdn.127.net\/2f1d0a20e54d3e2e59a44ffe44ebe405.jpg\" _src=\"http:\/\/yanxuan.nosdn.127.net\/2f1d0a20e54d3e2e59a44ffe44ebe405.jpg\" style=\"\"\/><\/p><p><img src=\"http:\/\/yanxuan.nosdn.127.net\/a39f2c7580ce5cadc62e8b39d58aca71.jpg\" _src=\"http:\/\/yanxuan.nosdn.127.net\/a39f2c7580ce5cadc62e8b39d58aca71.jpg\" style=\"\"\/><\/p><p><img src=\"http:\/\/yanxuan.nosdn.127.net\/c71dc416f04615b634d2b6cd0c4215ee.jpg\" _src=\"http:\/\/yanxuan.nosdn.127.net\/c71dc416f04615b634d2b6cd0c4215ee.jpg\" style=\"\"\/><\/p><p><img src=\"http:\/\/yanxuan.nosdn.127.net\/06ac26ed7d870c5c6f0ce3e07c629471.jpg\" _src=\"http:\/\/yanxuan.nosdn.127.net\/06ac26ed7d870c5c6f0ce3e07c629471.jpg\" style=\"\"\/><\/p><p><img src=\"http:\/\/yanxuan.nosdn.127.net\/99b180d02726e0213e54dddf4b9b32fd.jpg\" _src=\"http:\/\/yanxuan.nosdn.127.net\/99b180d02726e0213e54dddf4b9b32fd.jpg\" style=\"\"\/><\/p><p><img src=\"http:\/\/yanxuan.nosdn.127.net\/97de8d2687052976e51fff40d04af2ce.jpg\" _src=\"http:\/\/yanxuan.nosdn.127.net\/97de8d2687052976e51fff40d04af2ce.jpg\" style=\"\"\/><\/p><p><img src=\"http:\/\/yanxuan.nosdn.127.net\/3f527003599be237095995c98039ef87.jpg\" _src=\"http:\/\/yanxuan.nosdn.127.net\/3f527003599be237095995c98039ef87.jpg\" style=\"\"\/><\/p><p><img src=\"http:\/\/yanxuan.nosdn.127.net\/ec30289dc1b2beb4b84a08c02a97ef6e.jpg\" _src=\"http:\/\/yanxuan.nosdn.127.net\/ec30289dc1b2beb4b84a08c02a97ef6e.jpg\" style=\"\"\/><\/p><p><img src=\"http:\/\/yanxuan.nosdn.127.net\/685da1eaddcd26e8e2a1ff4d5d83f29f.jpg\" _src=\"http:\/\/yanxuan.nosdn.127.net\/685da1eaddcd26e8e2a1ff4d5d83f29f.jpg\" style=\"\"\/><\/p><p><img src=\"http:\/\/yanxuan.nosdn.127.net\/2610f487a733a88973d101dcd1766ee1.jpg\" _src=\"http:\/\/yanxuan.nosdn.127.net\/2610f487a733a88973d101dcd1766ee1.jpg\" style=\"\"\/><\/p><p><img src=\"http:\/\/yanxuan.nosdn.127.net\/eab3633e648ab2e8412c6801feb6231e.jpg\" _src=\"http:\/\/yanxuan.nosdn.127.net\/eab3633e648ab2e8412c6801feb6231e.jpg\" style=\"\"\/><\/p><p><img src=\"http:\/\/yanxuan.nosdn.127.net\/7b6c4f220592ea7d5af0072a816fe946.jpg\" _src=\"http:\/\/yanxuan.nosdn.127.net\/7b6c4f220592ea7d5af0072a816fe946.jpg\" style=\"\"\/><\/p><p><img src=\"http:\/\/yanxuan.nosdn.127.net\/310a777685204ece08592a6e2716c6c9.jpg\" _src=\"http:\/\/yanxuan.nosdn.127.net\/310a777685204ece08592a6e2716c6c9.jpg\" style=\"\"\/><\/p><p><img src=\"http:\/\/yanxuan.nosdn.127.net\/198239985c74597717e639089ffae25f.jpg\" _src=\"http:\/\/yanxuan.nosdn.127.net\/198239985c74597717e639089ffae25f.jpg\" style=\"\"\/><\/p><p><img src=\"http:\/\/yanxuan.nosdn.127.net\/dec6b498c899351fe94d99a6dde0ee79.jpg\" _src=\"http:\/\/yanxuan.nosdn.127.net\/dec6b498c899351fe94d99a6dde0ee79.jpg\" style=\"\"\/><\/p><p><img src=\"http:\/\/yanxuan.nosdn.127.net\/516a17ca73846bc871902b298ce38a97.jpg\" _src=\"http:\/\/yanxuan.nosdn.127.net\/516a17ca73846bc871902b298ce38a97.jpg\" style=\"\"\/><\/p><p><img src=\"http:\/\/yanxuan.nosdn.127.net\/d8231b81b5ba0e1c244074598c19f003.jpg\" _src=\"http:\/\/yanxuan.nosdn.127.net\/d8231b81b5ba0e1c244074598c19f003.jpg\" style=\"\"\/><\/p><p><img src=\"http:\/\/yanxuan.nosdn.127.net\/92c704dcf169e9a177a3c762a6a54a46.jpg\" _src=\"http:\/\/yanxuan.nosdn.127.net\/92c704dcf169e9a177a3c762a6a54a46.jpg\" style=\"\"\/><\/p><p><img src=\"http:\/\/yanxuan.nosdn.127.net\/5b9294ad5f78d890453d4a225feed518.jpg\" _src=\"http:\/\/yanxuan.nosdn.127.net\/5b9294ad5f78d890453d4a225feed518.jpg\" style=\"\"\/><\/p><p><img src=\"http:\/\/yanxuan.nosdn.127.net\/9bb1b8fdfaa7f895bdd7d5c65c42a59b.jpg\" _src=\"http:\/\/yanxuan.nosdn.127.net\/9bb1b8fdfaa7f895bdd7d5c65c42a59b.jpg\" style=\"\"\/><\/p><p><img src=\"http:\/\/yanxuan.nosdn.127.net\/f342e6d6b75dc1f80972feb415fd4e75.jpg\" _src=\"http:\/\/yanxuan.nosdn.127.net\/f342e6d6b75dc1f80972feb415fd4e75.jpg\" style=\"\"\/><\/p><p><img src=\"http:\/\/yanxuan.nosdn.127.net\/6c9597cf206066861b3244f634c98e32.jpg\" _src=\"http:\/\/yanxuan.nosdn.127.net\/6c9597cf206066861b3244f634c98e32.jpg\" style=\"\"\/><\/p><p><img src=\"http:\/\/yanxuan.nosdn.127.net\/970d4dad7d958293fd41ec1f444684f1.jpg\" _src=\"http:\/\/yanxuan.nosdn.127.net\/970d4dad7d958293fd41ec1f444684f1.jpg\" style=\"\"\/><\/p><p><img src=\"http:\/\/yanxuan.nosdn.127.net\/6f93819b03de07abef8b2d94f1d5c84b.jpg\" _src=\"http:\/\/yanxuan.nosdn.127.net\/6f93819b03de07abef8b2d94f1d5c84b.jpg\" style=\"\"\/><\/p><p><img src=\"http:\/\/yanxuan.nosdn.127.net\/58c8c56aac61da4ee9fcf34930b76e4e.jpg\" _src=\"http:\/\/yanxuan.nosdn.127.net\/58c8c56aac61da4ee9fcf34930b76e4e.jpg\" style=\"\"\/><\/p><p><img src=\"http:\/\/yanxuan.nosdn.127.net\/fb6435ec714189d6ad5053bf12d41db7.jpg\" _src=\"http:\/\/yanxuan.nosdn.127.net\/fb6435ec714189d6ad5053bf12d41db7.jpg\" style=\"\"\/><\/p><p><img src=\"http:\/\/yanxuan.nosdn.127.net\/19cc85ae097247d5d868df993de64e7b.jpg\" _src=\"http:\/\/yanxuan.nosdn.127.net\/19cc85ae097247d5d868df993de64e7b.jpg\" style=\"\"\/><\/p><p><img src=\"http:\/\/yanxuan.nosdn.127.net\/0ab8e27757cabd39fccdb5fd8ef7b013.jpg\" _src=\"http:\/\/yanxuan.nosdn.127.net\/0ab8e27757cabd39fccdb5fd8ef7b013.jpg\" style=\"\"\/><\/p><p><img src=\"http:\/\/yanxuan.nosdn.127.net\/03e6f02f8f77b71a82a05dd1a9705057.jpg\" _src=\"http:\/\/yanxuan.nosdn.127.net\/03e6f02f8f77b71a82a05dd1a9705057.jpg\" style=\"\"\/><\/p><p><br\/><\/p>",
                "created_at": "2018-02-01 00:00:00",
                "updated_at": "2018-02-01 00:00:00",
                "deleted_at": null
            },
            {
                "id": 1006007,
                "goods_sn": "1006007",
                "name": "秋冬保暖加厚澳洲羊毛被",
                "category_id": 1008008,
                "gallery": "[\"http:\/\/yanxuan.nosdn.127.net\/b7e3438c473a296a7e9feecbd4139af5.jpg\", \"http:\/\/yanxuan.nosdn.127.net\/70422011e5a9855a0723c9c08d0cbbb0.jpg\", \"http:\/\/yanxuan.nosdn.127.net\/f65dbb00aff8b43be02f2c8104208877.jpg\", \"http:\/\/yanxuan.nosdn.127.net\/85e8575c8e473a2f71054e9e36b1211c.jpg\"]",
                "keywords": "",
                "brief": "臻品级澳洲进口羊毛",
                "is_on_sale": 1,
                "sort_order": 17,
                "pic_url": "http:\/\/yanxuan.nosdn.127.net\/66425d1ed50b3968fed27c822fdd32e0.png",
                "share_url": "",
                "is_new": 0,
                "is_hot": 0,
                "unit": "件",
                "counter_price": "479.00",
                "retail_price": "459.00",
                "detail": "<p><img src=\"http:\/\/yanxuan.nosdn.127.net\/c78ec6e16d8477525c0a59e3c9d847b8.jpg\" _src=\"http:\/\/yanxuan.nosdn.127.net\/c78ec6e16d8477525c0a59e3c9d847b8.jpg\" style=\"\"\/><\/p><p><img src=\"http:\/\/yanxuan.nosdn.127.net\/294185760b75f364f6ed42784877e59c.jpg\" _src=\"http:\/\/yanxuan.nosdn.127.net\/294185760b75f364f6ed42784877e59c.jpg\" style=\"\"\/><\/p><p><img src=\"http:\/\/yanxuan.nosdn.127.net\/2468d1851e29930cc3802f125da5d6e8.jpg\" _src=\"http:\/\/yanxuan.nosdn.127.net\/2468d1851e29930cc3802f125da5d6e8.jpg\" style=\"\"\/><\/p><p><img src=\"http:\/\/yanxuan.nosdn.127.net\/0794791277945c1577776724778124f8.jpg\" _src=\"http:\/\/yanxuan.nosdn.127.net\/0794791277945c1577776724778124f8.jpg\" style=\"\"\/><\/p><p><img src=\"http:\/\/yanxuan.nosdn.127.net\/6973ca1e6f264620d5d25e581a0d623d.jpg\" _src=\"http:\/\/yanxuan.nosdn.127.net\/6973ca1e6f264620d5d25e581a0d623d.jpg\" style=\"\"\/><\/p><p><img src=\"http:\/\/yanxuan.nosdn.127.net\/26f01273c833c2ae75177a5c8d9310ef.jpg\" _src=\"http:\/\/yanxuan.nosdn.127.net\/26f01273c833c2ae75177a5c8d9310ef.jpg\" style=\"\"\/><\/p><p><img src=\"http:\/\/yanxuan.nosdn.127.net\/bf0207da5160588acf58d0f02ea9d360.jpg\" _src=\"http:\/\/yanxuan.nosdn.127.net\/bf0207da5160588acf58d0f02ea9d360.jpg\" style=\"\"\/><\/p><p><img src=\"http:\/\/yanxuan.nosdn.127.net\/dbd5d5171a309344d05663952930441f.jpg\" _src=\"http:\/\/yanxuan.nosdn.127.net\/dbd5d5171a309344d05663952930441f.jpg\" style=\"\"\/><\/p><p><img src=\"http:\/\/yanxuan.nosdn.127.net\/e7a65ac0824fc1584c2f1943ed1eaed0.jpg\" _src=\"http:\/\/yanxuan.nosdn.127.net\/e7a65ac0824fc1584c2f1943ed1eaed0.jpg\" style=\"\"\/><\/p><p><img src=\"http:\/\/yanxuan.nosdn.127.net\/88871ed9eccf7fbdfccf7912bb8f9d21.jpg\" _src=\"http:\/\/yanxuan.nosdn.127.net\/88871ed9eccf7fbdfccf7912bb8f9d21.jpg\" style=\"\"\/><\/p><p><img src=\"http:\/\/yanxuan.nosdn.127.net\/7aa0e4c0abeb157e231b17e91cfa8f02.jpg\" _src=\"http:\/\/yanxuan.nosdn.127.net\/7aa0e4c0abeb157e231b17e91cfa8f02.jpg\" style=\"\"\/><\/p><p><img src=\"http:\/\/yanxuan.nosdn.127.net\/a38f897200e305e7b23d62431b9c4d18.jpg\" _src=\"http:\/\/yanxuan.nosdn.127.net\/a38f897200e305e7b23d62431b9c4d18.jpg\" style=\"\"\/><\/p><p><img src=\"http:\/\/yanxuan.nosdn.127.net\/bb147c0e96cdac2d77ab4eef1785e99d.jpg\" _src=\"http:\/\/yanxuan.nosdn.127.net\/bb147c0e96cdac2d77ab4eef1785e99d.jpg\" style=\"\"\/><\/p><p><img src=\"http:\/\/yanxuan.nosdn.127.net\/c6a270f7aed68cfe74e66d720c776fca.jpg\" _src=\"http:\/\/yanxuan.nosdn.127.net\/c6a270f7aed68cfe74e66d720c776fca.jpg\" style=\"\"\/><\/p><p><img src=\"http:\/\/yanxuan.nosdn.127.net\/c2c0b548be17f620db8afbe039a99452.jpg\" _src=\"http:\/\/yanxuan.nosdn.127.net\/c2c0b548be17f620db8afbe039a99452.jpg\" style=\"\"\/><\/p><p><img src=\"http:\/\/yanxuan.nosdn.127.net\/155fe0023e17bac4af486a6c1c098537.jpg\" _src=\"http:\/\/yanxuan.nosdn.127.net\/155fe0023e17bac4af486a6c1c098537.jpg\" style=\"\"\/><\/p><p><img src=\"http:\/\/yanxuan.nosdn.127.net\/8f1f120ca7e362595fd986ea6de8814f.jpg\" _src=\"http:\/\/yanxuan.nosdn.127.net\/8f1f120ca7e362595fd986ea6de8814f.jpg\" style=\"\"\/><\/p><p><img src=\"http:\/\/yanxuan.nosdn.127.net\/6971f0333e0eeef7d9951edad068d4ec.jpg\" _src=\"http:\/\/yanxuan.nosdn.127.net\/6971f0333e0eeef7d9951edad068d4ec.jpg\" style=\"\"\/><\/p><p><img src=\"http:\/\/yanxuan.nosdn.127.net\/c307630edf971e408938f1007169fa53.jpg\" _src=\"http:\/\/yanxuan.nosdn.127.net\/c307630edf971e408938f1007169fa53.jpg\" style=\"\"\/><\/p><p><img src=\"http:\/\/yanxuan.nosdn.127.net\/4ea2ba74fb518a298ef825c43ed634f4.jpg\" _src=\"http:\/\/yanxuan.nosdn.127.net\/4ea2ba74fb518a298ef825c43ed634f4.jpg\" style=\"\"\/><\/p><p><br\/><\/p>",
                "created_at": "2018-02-01 00:00:00",
                "updated_at": "2018-02-01 00:00:00",
                "deleted_at": null
            },
            {
                "id": 1006010,
                "goods_sn": "1006010",
                "name": "秋冬保暖加厚细羊毛被",
                "category_id": 1008008,
                "gallery": "[\"http:\/\/yanxuan.nosdn.127.net\/9b40ba300851af1b84ca0749bae70718.jpg\", \"http:\/\/yanxuan.nosdn.127.net\/fd7465ba32e23fd107161306d6b580cc.jpg\", \"http:\/\/yanxuan.nosdn.127.net\/288dc3fe3238962519f3abd5201e411e.jpg\", \"http:\/\/yanxuan.nosdn.127.net\/06cb7ac0991cb4ea236c826e8e6f0a9c.jpg\"]",
                "keywords": "ddd",
                "brief": "细腻绵羊毛，保暖性增加一倍",
                "is_on_sale": 0,
                "sort_order": 16,
                "pic_url": "http:\/\/yanxuan.nosdn.127.net\/8fe022126a2789d970f82853be13a5e6.png",
                "share_url": "",
                "is_new": 0,
                "is_hot": 0,
                "unit": "件",
                "counter_price": "679.00",
                "retail_price": "659.00",
                "detail": "<p><img src=\"http:\/\/yanxuan.nosdn.127.net\/01c77e998005297e0fad16b25433409f.jpg\" _src=\"http:\/\/yanxuan.nosdn.127.net\/01c77e998005297e0fad16b25433409f.jpg\" style=\"\"\/><\/p><p><img src=\"http:\/\/yanxuan.nosdn.127.net\/36bffed3bd139e0135f35e1c30dfab01.jpg\" _src=\"http:\/\/yanxuan.nosdn.127.net\/36bffed3bd139e0135f35e1c30dfab01.jpg\" style=\"\"\/><\/p><p><img src=\"http:\/\/yanxuan.nosdn.127.net\/400b9395fb6947977a27da56baf07fcb.jpg\" _src=\"http:\/\/yanxuan.nosdn.127.net\/400b9395fb6947977a27da56baf07fcb.jpg\" style=\"\"\/><\/p><p><img src=\"http:\/\/yanxuan.nosdn.127.net\/7d6aef8e60f6bf2a438774ae114a9206.jpg\" _src=\"http:\/\/yanxuan.nosdn.127.net\/7d6aef8e60f6bf2a438774ae114a9206.jpg\" style=\"\"\/><\/p><p><img src=\"http:\/\/yanxuan.nosdn.127.net\/13521752a26971ad793d5e3e7061305b.jpg\" _src=\"http:\/\/yanxuan.nosdn.127.net\/13521752a26971ad793d5e3e7061305b.jpg\" style=\"\"\/><\/p><p><img src=\"http:\/\/yanxuan.nosdn.127.net\/8e4beb6669d9a83e19540727c01ced37.jpg\" _src=\"http:\/\/yanxuan.nosdn.127.net\/8e4beb6669d9a83e19540727c01ced37.jpg\" style=\"\"\/><\/p><p><img src=\"http:\/\/yanxuan.nosdn.127.net\/9c2e31cb55507bcb4653181f64a069a4.jpg\" _src=\"http:\/\/yanxuan.nosdn.127.net\/9c2e31cb55507bcb4653181f64a069a4.jpg\" style=\"\"\/><\/p><p><img src=\"http:\/\/yanxuan.nosdn.127.net\/2a65159336d1e2991ef93ed2aab15b7f.jpg\" _src=\"http:\/\/yanxuan.nosdn.127.net\/2a65159336d1e2991ef93ed2aab15b7f.jpg\" style=\"\"\/><\/p><p><img src=\"http:\/\/yanxuan.nosdn.127.net\/4bade2a9a72c78749f2a0126a43f5943.jpg\" _src=\"http:\/\/yanxuan.nosdn.127.net\/4bade2a9a72c78749f2a0126a43f5943.jpg\" style=\"\"\/><\/p><p><img src=\"http:\/\/yanxuan.nosdn.127.net\/15cf85dc65d2d857bfd1e45516775944.jpg\" _src=\"http:\/\/yanxuan.nosdn.127.net\/15cf85dc65d2d857bfd1e45516775944.jpg\" style=\"\"\/><\/p><p><img src=\"http:\/\/yanxuan.nosdn.127.net\/dffc49e67aa11308b8e408d7539ddf84.jpg\" _src=\"http:\/\/yanxuan.nosdn.127.net\/dffc49e67aa11308b8e408d7539ddf84.jpg\" style=\"\"\/><\/p><p><img src=\"http:\/\/yanxuan.nosdn.127.net\/0826118b3dbd1a123419d1f7f46784de.jpg\" _src=\"http:\/\/yanxuan.nosdn.127.net\/0826118b3dbd1a123419d1f7f46784de.jpg\" style=\"\"\/><\/p><p><img src=\"http:\/\/yanxuan.nosdn.127.net\/2cc7573ddb418a0f9fc0483367fce877.jpg\" _src=\"http:\/\/yanxuan.nosdn.127.net\/2cc7573ddb418a0f9fc0483367fce877.jpg\" style=\"\"\/><\/p><p><img src=\"http:\/\/yanxuan.nosdn.127.net\/62b67fcc05f65b26be987e2576ac1b97.jpg\" _src=\"http:\/\/yanxuan.nosdn.127.net\/62b67fcc05f65b26be987e2576ac1b97.jpg\" style=\"\"\/><\/p><p><img src=\"http:\/\/yanxuan.nosdn.127.net\/61a604a7f4ec39a7383265d4fb4ba1fe.jpg\" _src=\"http:\/\/yanxuan.nosdn.127.net\/61a604a7f4ec39a7383265d4fb4ba1fe.jpg\" style=\"\"\/><\/p><p><img src=\"http:\/\/yanxuan.nosdn.127.net\/5b04ba442e1d859cce4a945b5fee0ec2.jpg\" _src=\"http:\/\/yanxuan.nosdn.127.net\/5b04ba442e1d859cce4a945b5fee0ec2.jpg\" style=\"\"\/><\/p><p><img src=\"http:\/\/yanxuan.nosdn.127.net\/0aae1850fdc689eb42103b43709a3de9.jpg\" _src=\"http:\/\/yanxuan.nosdn.127.net\/0aae1850fdc689eb42103b43709a3de9.jpg\" style=\"\"\/><\/p><p><img src=\"http:\/\/yanxuan.nosdn.127.net\/9a82fdc70b5da5c802dca76410c80dac.jpg\" _src=\"http:\/\/yanxuan.nosdn.127.net\/9a82fdc70b5da5c802dca76410c80dac.jpg\" style=\"\"\/><\/p><p><img src=\"http:\/\/yanxuan.nosdn.127.net\/41fff402bc16cd45614bdfa7b612849f.jpg\" _src=\"http:\/\/yanxuan.nosdn.127.net\/41fff402bc16cd45614bdfa7b612849f.jpg\" style=\"\"\/><\/p><p><img src=\"http:\/\/yanxuan.nosdn.127.net\/d357f7ec1ced66c8865ed1029cbcc562.jpg\" _src=\"http:\/\/yanxuan.nosdn.127.net\/d357f7ec1ced66c8865ed1029cbcc562.jpg\" style=\"\"\/><\/p><p><img src=\"http:\/\/yanxuan.nosdn.127.net\/ad18d0bdad9a571bbf03ebe013a422d9.jpg\" _src=\"http:\/\/yanxuan.nosdn.127.net\/ad18d0bdad9a571bbf03ebe013a422d9.jpg\" style=\"\"\/><\/p><p><img src=\"http:\/\/yanxuan.nosdn.127.net\/5e0e6c2c77f1627b79037b76ba37adf9.jpg\" _src=\"http:\/\/yanxuan.nosdn.127.net\/5e0e6c2c77f1627b79037b76ba37adf9.jpg\" style=\"\"\/><\/p><p><img src=\"http:\/\/yanxuan.nosdn.127.net\/b71de5aaafd05a730cfe421f9e16053d.jpg\" _src=\"http:\/\/yanxuan.nosdn.127.net\/b71de5aaafd05a730cfe421f9e16053d.jpg\" style=\"\"\/><\/p><p><img src=\"http:\/\/yanxuan.nosdn.127.net\/aeca9234db5622edfe465c3f7732d203.jpg\" _src=\"http:\/\/yanxuan.nosdn.127.net\/aeca9234db5622edfe465c3f7732d203.jpg\" style=\"\"\/><\/p><p><img src=\"http:\/\/yanxuan.nosdn.127.net\/678124d2002655e05588a9484f8e5c14.jpg\" _src=\"http:\/\/yanxuan.nosdn.127.net\/678124d2002655e05588a9484f8e5c14.jpg\" style=\"\"\/><\/p><p><img src=\"http:\/\/yanxuan.nosdn.127.net\/3909a0aa66fbdc59c99d0666aef34286.jpg\" _src=\"http:\/\/yanxuan.nosdn.127.net\/3909a0aa66fbdc59c99d0666aef34286.jpg\" style=\"\"\/><\/p><p><img src=\"http:\/\/yanxuan.nosdn.127.net\/4ec01a83f6f6cd2d282ec0be98daeb3a.jpg\" _src=\"http:\/\/yanxuan.nosdn.127.net\/4ec01a83f6f6cd2d282ec0be98daeb3a.jpg\" style=\"\"\/><\/p><p><img src=\"http:\/\/yanxuan.nosdn.127.net\/d8716853b4b08223e886ee8d882e2d58.jpg\" _src=\"http:\/\/yanxuan.nosdn.127.net\/d8716853b4b08223e886ee8d882e2d58.jpg\" style=\"\"\/><\/p><p><img src=\"http:\/\/yanxuan.nosdn.127.net\/b8188de7819424845707f3f79a1f80d6.jpg\" _src=\"http:\/\/yanxuan.nosdn.127.net\/b8188de7819424845707f3f79a1f80d6.jpg\" style=\"\"\/><\/p><p><img src=\"http:\/\/yanxuan.nosdn.127.net\/30298def5edcdd62d0c4a20cfdfef66c.jpg\" _src=\"http:\/\/yanxuan.nosdn.127.net\/30298def5edcdd62d0c4a20cfdfef66c.jpg\" style=\"\"\/><\/p><p><img src=\"http:\/\/yanxuan.nosdn.127.net\/3437687b19a26469212a1e2c485c557d.jpg\" _src=\"http:\/\/yanxuan.nosdn.127.net\/3437687b19a26469212a1e2c485c557d.jpg\" style=\"\"\/><\/p><p><img src=\"http:\/\/yanxuan.nosdn.127.net\/2450afdd3b9f3cc7fc27bbde33ae0e86.jpg\" _src=\"http:\/\/yanxuan.nosdn.127.net\/2450afdd3b9f3cc7fc27bbde33ae0e86.jpg\" style=\"\"\/><\/p><p><img src=\"http:\/\/yanxuan.nosdn.127.net\/434d004c435b62a9505c5ffdf6d362d5.jpg\" _src=\"http:\/\/yanxuan.nosdn.127.net\/434d004c435b62a9505c5ffdf6d362d5.jpg\" style=\"\"\/><\/p><p><img src=\"http:\/\/yanxuan.nosdn.127.net\/41b6db4ce14bc2d3ff6526d43f52fb46.jpg\" _src=\"http:\/\/yanxuan.nosdn.127.net\/41b6db4ce14bc2d3ff6526d43f52fb46.jpg\" style=\"\"\/><\/p><p><img src=\"http:\/\/yanxuan.nosdn.127.net\/cec4d2d62eccc86b409465e1344f1d24.jpg\" _src=\"http:\/\/yanxuan.nosdn.127.net\/cec4d2d62eccc86b409465e1344f1d24.jpg\" style=\"\"\/><\/p><p><img src=\"http:\/\/yanxuan.nosdn.127.net\/09b9868d054ffcdbba3166882fbc8f38.jpg\" _src=\"http:\/\/yanxuan.nosdn.127.net\/09b9868d054ffcdbba3166882fbc8f38.jpg\" style=\"\"\/><\/p><p><img src=\"http:\/\/yanxuan.nosdn.127.net\/9d8027527ac4af59cc2172a7c3dce64e.jpg\" _src=\"http:\/\/yanxuan.nosdn.127.net\/9d8027527ac4af59cc2172a7c3dce64e.jpg\" style=\"\"\/><\/p><p><img src=\"http:\/\/yanxuan.nosdn.127.net\/59deea242718d6610f445776833f9afa.jpg\" _src=\"http:\/\/yanxuan.nosdn.127.net\/59deea242718d6610f445776833f9afa.jpg\" style=\"\"\/><\/p><p><img src=\"http:\/\/yanxuan.nosdn.127.net\/13f4b4c5dc11e4f5d2767254d2a5c777.jpg\" _src=\"http:\/\/yanxuan.nosdn.127.net\/13f4b4c5dc11e4f5d2767254d2a5c777.jpg\" style=\"\"\/><\/p><p><img src=\"http:\/\/yanxuan.nosdn.127.net\/f0d22f9c380873ddca23e6f187d6b6aa.jpg\" _src=\"http:\/\/yanxuan.nosdn.127.net\/f0d22f9c380873ddca23e6f187d6b6aa.jpg\" style=\"\"\/><\/p><p><img src=\"http:\/\/yanxuan.nosdn.127.net\/1821334ad83bfaa64ac4d212be9dd953.jpg\" _src=\"http:\/\/yanxuan.nosdn.127.net\/1821334ad83bfaa64ac4d212be9dd953.jpg\" style=\"\"\/><\/p><p><img src=\"http:\/\/yanxuan.nosdn.127.net\/72e6119d0329faa952d036173cf2f7fc.jpg\" _src=\"http:\/\/yanxuan.nosdn.127.net\/72e6119d0329faa952d036173cf2f7fc.jpg\" style=\"\"\/><\/p><p><img src=\"http:\/\/yanxuan.nosdn.127.net\/f69081555848f7d3af16cefb9f661c64.jpg\" _src=\"http:\/\/yanxuan.nosdn.127.net\/f69081555848f7d3af16cefb9f661c64.jpg\" style=\"\"\/><\/p><p><img src=\"http:\/\/yanxuan.nosdn.127.net\/cbb30819e21854491e0a5c8cf933b59a.jpg\" _src=\"http:\/\/yanxuan.nosdn.127.net\/cbb30819e21854491e0a5c8cf933b59a.jpg\" style=\"\"\/><\/p><p><img src=\"http:\/\/yanxuan.nosdn.127.net\/16f564772fc2f1d0030629b42be12211.jpg\" _src=\"http:\/\/yanxuan.nosdn.127.net\/16f564772fc2f1d0030629b42be12211.jpg\" style=\"\"\/><\/p><p><img src=\"http:\/\/yanxuan.nosdn.127.net\/a74dc5e969fc0896537be54155e11cd8.jpg\" _src=\"http:\/\/yanxuan.nosdn.127.net\/a74dc5e969fc0896537be54155e11cd8.jpg\" style=\"\"\/><\/p><p><img src=\"http:\/\/yanxuan.nosdn.127.net\/7c9702f8ffa6e3ebfcb5e1c14161a493.jpg\" _src=\"http:\/\/yanxuan.nosdn.127.net\/7c9702f8ffa6e3ebfcb5e1c14161a493.jpg\" style=\"\"\/><\/p><p><img src=\"http:\/\/yanxuan.nosdn.127.net\/f4e3b23eacbc419baa748525bc71ac3f.jpg\" _src=\"http:\/\/yanxuan.nosdn.127.net\/f4e3b23eacbc419baa748525bc71ac3f.jpg\" style=\"\"\/><\/p><p><img src=\"http:\/\/yanxuan.nosdn.127.net\/fb9520c1bc8e63e480bd61cfbcb6d18c.jpg\" _src=\"http:\/\/yanxuan.nosdn.127.net\/fb9520c1bc8e63e480bd61cfbcb6d18c.jpg\" style=\"\"\/><\/p><p><br\/><\/p>",
                "created_at": "2018-02-01 00:00:00",
                "updated_at": "2018-02-01 00:00:00",
                "deleted_at": null
            },
            {
                "id": 1006013,
                "goods_sn": "1006013",
                "name": "双宫茧桑蚕丝被 空调被",
                "category_id": 1036000,
                "gallery": "[\"http:\/\/yanxuan.nosdn.127.net\/d83cbd9ec177276ba2582ee393eff3db.jpg\", \"http:\/\/yanxuan.nosdn.127.net\/b73852cf22939c4995a5bc8996a4afdd.jpg\", \"http:\/\/yanxuan.nosdn.127.net\/d2fe16d259e0187d6b53eef028e843d1.jpg\", \"http:\/\/yanxuan.nosdn.127.net\/4e8f5c09ae9dd03b5ae5b1287b598cc5.jpg\"]",
                "keywords": "",
                "brief": "一级桑蚕丝，吸湿透气柔软",
                "is_on_sale": 1,
                "sort_order": 7,
                "pic_url": "http:\/\/yanxuan.nosdn.127.net\/583812520c68ca7995b6fac4c67ae2c7.png",
                "share_url": "",
                "is_new": 0,
                "is_hot": 1,
                "unit": "件",
                "counter_price": "719.00",
                "retail_price": "699.00",
                "detail": "<p><img src=\"http:\/\/yanxuan.nosdn.127.net\/72d71d3ef34d9c63521e6ede2fd468e0.jpg\" _src=\"http:\/\/yanxuan.nosdn.127.net\/72d71d3ef34d9c63521e6ede2fd468e0.jpg\" style=\"\"\/><\/p><p><img src=\"http:\/\/yanxuan.nosdn.127.net\/454d60ad184bea35d73258716dd8eff2.jpg\" _src=\"http:\/\/yanxuan.nosdn.127.net\/454d60ad184bea35d73258716dd8eff2.jpg\" style=\"\"\/><\/p><p><img src=\"http:\/\/yanxuan.nosdn.127.net\/6af1ec459a8ed93abccb436c2424277f.jpg\" _src=\"http:\/\/yanxuan.nosdn.127.net\/6af1ec459a8ed93abccb436c2424277f.jpg\" style=\"\"\/><\/p><p><img src=\"http:\/\/yanxuan.nosdn.127.net\/91b0e9d5f4bc57ec07702b9152ed9b46.jpg\" _src=\"http:\/\/yanxuan.nosdn.127.net\/91b0e9d5f4bc57ec07702b9152ed9b46.jpg\" style=\"\"\/><\/p><p><img src=\"http:\/\/yanxuan.nosdn.127.net\/da9743a2abce3752e186928fd8028167.jpg\" _src=\"http:\/\/yanxuan.nosdn.127.net\/da9743a2abce3752e186928fd8028167.jpg\" style=\"\"\/><\/p><p><img src=\"http:\/\/yanxuan.nosdn.127.net\/e48f4b067e0890f15c9f3fae5a94ae73.jpg\" _src=\"http:\/\/yanxuan.nosdn.127.net\/e48f4b067e0890f15c9f3fae5a94ae73.jpg\" style=\"\"\/><\/p><p><img src=\"http:\/\/yanxuan.nosdn.127.net\/51009cc464b77780fda27d0f0d7aff62.jpg\" _src=\"http:\/\/yanxuan.nosdn.127.net\/51009cc464b77780fda27d0f0d7aff62.jpg\" style=\"\"\/><\/p><p><img src=\"http:\/\/yanxuan.nosdn.127.net\/557905b15620c59926fc3e655e676e1d.jpg\" _src=\"http:\/\/yanxuan.nosdn.127.net\/557905b15620c59926fc3e655e676e1d.jpg\" style=\"\"\/><\/p><p><img src=\"http:\/\/yanxuan.nosdn.127.net\/fb249f4ccaa07940b40215883902af7e.jpg\" _src=\"http:\/\/yanxuan.nosdn.127.net\/fb249f4ccaa07940b40215883902af7e.jpg\" style=\"\"\/><\/p><p><img src=\"http:\/\/yanxuan.nosdn.127.net\/c763f877079e495ef67dc8db49369044.jpg\" _src=\"http:\/\/yanxuan.nosdn.127.net\/c763f877079e495ef67dc8db49369044.jpg\" style=\"\"\/><\/p><p><img src=\"http:\/\/yanxuan.nosdn.127.net\/fffbf8c9990f40d4d63f84a2ecd8e84d.jpg\" _src=\"http:\/\/yanxuan.nosdn.127.net\/fffbf8c9990f40d4d63f84a2ecd8e84d.jpg\" style=\"\"\/><\/p><p><img src=\"http:\/\/yanxuan.nosdn.127.net\/62dd5aa7c9f64936dcd86f1592eb38b3.jpg\" _src=\"http:\/\/yanxuan.nosdn.127.net\/62dd5aa7c9f64936dcd86f1592eb38b3.jpg\" style=\"\"\/><\/p><p><img src=\"http:\/\/yanxuan.nosdn.127.net\/c1f1914c7be28f6800372d878aaf5de1.jpg\" _src=\"http:\/\/yanxuan.nosdn.127.net\/c1f1914c7be28f6800372d878aaf5de1.jpg\" style=\"\"\/><\/p><p><img src=\"http:\/\/yanxuan.nosdn.127.net\/fb23c66040b18fb5b5ba6dfeeb9a4b1e.jpg\" _src=\"http:\/\/yanxuan.nosdn.127.net\/fb23c66040b18fb5b5ba6dfeeb9a4b1e.jpg\" style=\"\"\/><\/p><p><img src=\"http:\/\/yanxuan.nosdn.127.net\/d49ac2656061fff48a6244dfdde01c41.jpg\" _src=\"http:\/\/yanxuan.nosdn.127.net\/d49ac2656061fff48a6244dfdde01c41.jpg\" style=\"\"\/><\/p><p><img src=\"http:\/\/yanxuan.nosdn.127.net\/947ca15f1e253634456e1bcb93c8172f.jpg\" _src=\"http:\/\/yanxuan.nosdn.127.net\/947ca15f1e253634456e1bcb93c8172f.jpg\" style=\"\"\/><\/p><p><img src=\"http:\/\/yanxuan.nosdn.127.net\/80ea5528f9a679f24d1240c9e519d693.jpg\" _src=\"http:\/\/yanxuan.nosdn.127.net\/80ea5528f9a679f24d1240c9e519d693.jpg\" style=\"\"\/><\/p><p><img src=\"http:\/\/yanxuan.nosdn.127.net\/150a3223e5bfdde9442c0bcab62ca711.jpg\" _src=\"http:\/\/yanxuan.nosdn.127.net\/150a3223e5bfdde9442c0bcab62ca711.jpg\" style=\"\"\/><\/p><p><img src=\"http:\/\/yanxuan.nosdn.127.net\/769f510f743022e38ded0e4a2f2023c7.jpg\" _src=\"http:\/\/yanxuan.nosdn.127.net\/769f510f743022e38ded0e4a2f2023c7.jpg\" style=\"\"\/><\/p><p><img src=\"http:\/\/yanxuan.nosdn.127.net\/91cc7ea8833b03cc9fd7b567a4e2569f.jpg\" _src=\"http:\/\/yanxuan.nosdn.127.net\/91cc7ea8833b03cc9fd7b567a4e2569f.jpg\" style=\"\"\/><\/p><p><img src=\"http:\/\/yanxuan.nosdn.127.net\/0982d37e3442540723b17a66493bf849.jpg\" _src=\"http:\/\/yanxuan.nosdn.127.net\/0982d37e3442540723b17a66493bf849.jpg\" style=\"\"\/><\/p><p><img src=\"http:\/\/yanxuan.nosdn.127.net\/449a379cf9a8664a52cc0ef9582fe063.jpg\" _src=\"http:\/\/yanxuan.nosdn.127.net\/449a379cf9a8664a52cc0ef9582fe063.jpg\" style=\"\"\/><\/p><p><img src=\"http:\/\/yanxuan.nosdn.127.net\/80d2959fe04d9a283ee1e9b180fd30be.jpg\" _src=\"http:\/\/yanxuan.nosdn.127.net\/80d2959fe04d9a283ee1e9b180fd30be.jpg\" style=\"\"\/><\/p><p><img src=\"http:\/\/yanxuan.nosdn.127.net\/cc878d8a7b7386f5503b327fd444a12d.jpg\" _src=\"http:\/\/yanxuan.nosdn.127.net\/cc878d8a7b7386f5503b327fd444a12d.jpg\" style=\"\"\/><\/p><p><img src=\"http:\/\/yanxuan.nosdn.127.net\/f6137ff63496de30117774c7be09d8f1.jpg\" _src=\"http:\/\/yanxuan.nosdn.127.net\/f6137ff63496de30117774c7be09d8f1.jpg\" style=\"\"\/><\/p><p><img src=\"http:\/\/yanxuan.nosdn.127.net\/ddfbc82ef6ede49231463b8d09465dbb.jpg\" _src=\"http:\/\/yanxuan.nosdn.127.net\/ddfbc82ef6ede49231463b8d09465dbb.jpg\" style=\"\"\/><\/p><p><img src=\"http:\/\/yanxuan.nosdn.127.net\/07a0a19039d8e98ffad6895b438545ab.jpg\" _src=\"http:\/\/yanxuan.nosdn.127.net\/07a0a19039d8e98ffad6895b438545ab.jpg\" style=\"\"\/><\/p><p><img src=\"http:\/\/yanxuan.nosdn.127.net\/0f4c47f5d8c1c390fd6efd5b757924c2.jpg\" _src=\"http:\/\/yanxuan.nosdn.127.net\/0f4c47f5d8c1c390fd6efd5b757924c2.jpg\" style=\"\"\/><\/p><p><img src=\"http:\/\/yanxuan.nosdn.127.net\/dee8166ae7bed6d509af9925a350b405.jpg\" _src=\"http:\/\/yanxuan.nosdn.127.net\/dee8166ae7bed6d509af9925a350b405.jpg\" style=\"\"\/><\/p><p><img src=\"http:\/\/yanxuan.nosdn.127.net\/f07dc7e541fd4c0c71d21679a3afbd06.jpg\" _src=\"http:\/\/yanxuan.nosdn.127.net\/f07dc7e541fd4c0c71d21679a3afbd06.jpg\" style=\"\"\/><\/p><p><img src=\"http:\/\/yanxuan.nosdn.127.net\/9deb210e7cdbb18bb42e37b0640fbba9.jpg\" _src=\"http:\/\/yanxuan.nosdn.127.net\/9deb210e7cdbb18bb42e37b0640fbba9.jpg\" style=\"\"\/><\/p><p><img src=\"http:\/\/yanxuan.nosdn.127.net\/286eed28f2cb51d76fafdb1a112aaa91.jpg\" _src=\"http:\/\/yanxuan.nosdn.127.net\/286eed28f2cb51d76fafdb1a112aaa91.jpg\" style=\"\"\/><\/p><p><img src=\"http:\/\/yanxuan.nosdn.127.net\/b7d0251276ab00b200a153515d69dec7.jpg\" _src=\"http:\/\/yanxuan.nosdn.127.net\/b7d0251276ab00b200a153515d69dec7.jpg\" style=\"\"\/><\/p><p><img src=\"http:\/\/yanxuan.nosdn.127.net\/3a908235021c994fb2d5a029f27bf520.jpg\" _src=\"http:\/\/yanxuan.nosdn.127.net\/3a908235021c994fb2d5a029f27bf520.jpg\" style=\"\"\/><\/p><p><img src=\"http:\/\/yanxuan.nosdn.127.net\/98b1fdb1029b1a585871574f7f8bf104.jpg\" _src=\"http:\/\/yanxuan.nosdn.127.net\/98b1fdb1029b1a585871574f7f8bf104.jpg\" style=\"\"\/><\/p><p><img src=\"http:\/\/yanxuan.nosdn.127.net\/b67aa253cacf03bd0d5a3be8743d15b9.jpg\" _src=\"http:\/\/yanxuan.nosdn.127.net\/b67aa253cacf03bd0d5a3be8743d15b9.jpg\" style=\"\"\/><\/p><p><img src=\"http:\/\/yanxuan.nosdn.127.net\/b9689e05a06746a6f00be0b6f1dd80ba.jpg\" _src=\"http:\/\/yanxuan.nosdn.127.net\/b9689e05a06746a6f00be0b6f1dd80ba.jpg\" style=\"\"\/><\/p><p><img src=\"http:\/\/yanxuan.nosdn.127.net\/1a494d87239c3a84819f54d5e1e430ad.jpg\" _src=\"http:\/\/yanxuan.nosdn.127.net\/1a494d87239c3a84819f54d5e1e430ad.jpg\" style=\"\"\/><\/p><p><img src=\"http:\/\/yanxuan.nosdn.127.net\/e0187f5be624e13ed5eac7f00c13bde0.jpg\" _src=\"http:\/\/yanxuan.nosdn.127.net\/e0187f5be624e13ed5eac7f00c13bde0.jpg\" style=\"\"\/><\/p><p><img src=\"http:\/\/yanxuan.nosdn.127.net\/dec5144859fb414c2181e0bf15185cf2.jpg\" _src=\"http:\/\/yanxuan.nosdn.127.net\/dec5144859fb414c2181e0bf15185cf2.jpg\" style=\"\"\/><\/p><p><img src=\"http:\/\/yanxuan.nosdn.127.net\/f06282b15ffbed67f115b436ca6975ab.jpg\" _src=\"http:\/\/yanxuan.nosdn.127.net\/f06282b15ffbed67f115b436ca6975ab.jpg\" style=\"\"\/><\/p><p><img src=\"http:\/\/yanxuan.nosdn.127.net\/3c159080beb18d634929c6543392d655.jpg\" _src=\"http:\/\/yanxuan.nosdn.127.net\/3c159080beb18d634929c6543392d655.jpg\" style=\"\"\/><\/p><p><img src=\"http:\/\/yanxuan.nosdn.127.net\/94bea38417d6f74a823b0407e3871709.jpg\" _src=\"http:\/\/yanxuan.nosdn.127.net\/94bea38417d6f74a823b0407e3871709.jpg\" style=\"\"\/><\/p><p><img src=\"http:\/\/yanxuan.nosdn.127.net\/f204613bd50eb71265ca0dc28bc91df0.jpg\" _src=\"http:\/\/yanxuan.nosdn.127.net\/f204613bd50eb71265ca0dc28bc91df0.jpg\" style=\"\"\/><\/p><p><img src=\"http:\/\/yanxuan.nosdn.127.net\/36e9a86f175472e70708511a51276e33.jpg\" _src=\"http:\/\/yanxuan.nosdn.127.net\/36e9a86f175472e70708511a51276e33.jpg\" style=\"\"\/><\/p><p><img src=\"http:\/\/yanxuan.nosdn.127.net\/293a0997d7f9dd51211225ceb8073a04.jpg\" _src=\"http:\/\/yanxuan.nosdn.127.net\/293a0997d7f9dd51211225ceb8073a04.jpg\" style=\"\"\/><\/p><p><img src=\"http:\/\/yanxuan.nosdn.127.net\/a3c451b65fd6e8215f4609696f9699d8.jpg\" _src=\"http:\/\/yanxuan.nosdn.127.net\/a3c451b65fd6e8215f4609696f9699d8.jpg\" style=\"\"\/><\/p><p><img src=\"http:\/\/yanxuan.nosdn.127.net\/54ad136164b7066bda8c3f5b418eb6c5.jpg\" _src=\"http:\/\/yanxuan.nosdn.127.net\/54ad136164b7066bda8c3f5b418eb6c5.jpg\" style=\"\"\/><\/p><p><img src=\"http:\/\/yanxuan.nosdn.127.net\/e17a55eea9daa90ad3e5490a8ade2060.jpg\" _src=\"http:\/\/yanxuan.nosdn.127.net\/e17a55eea9daa90ad3e5490a8ade2060.jpg\" style=\"\"\/><\/p><p><img src=\"http:\/\/yanxuan.nosdn.127.net\/c898af2ddd8754fa42ae09d341c255ab.jpg\" _src=\"http:\/\/yanxuan.nosdn.127.net\/c898af2ddd8754fa42ae09d341c255ab.jpg\" style=\"\"\/><\/p><p><img src=\"http:\/\/yanxuan.nosdn.127.net\/ad2b42dfa9ed7a3b0b7d832482592aea.jpg\" _src=\"http:\/\/yanxuan.nosdn.127.net\/ad2b42dfa9ed7a3b0b7d832482592aea.jpg\" style=\"\"\/><\/p><p><img src=\"http:\/\/yanxuan.nosdn.127.net\/314cb766b281d9d69ca7d0e177326e3a.jpg\" _src=\"http:\/\/yanxuan.nosdn.127.net\/314cb766b281d9d69ca7d0e177326e3a.jpg\" style=\"\"\/><\/p><p><img src=\"http:\/\/yanxuan.nosdn.127.net\/42bcc536dc84355531fa657a450b5daa.jpg\" _src=\"http:\/\/yanxuan.nosdn.127.net\/42bcc536dc84355531fa657a450b5daa.jpg\" style=\"\"\/><\/p><p><img src=\"http:\/\/yanxuan.nosdn.127.net\/a7f140d9e49eb84d504719b7a04541e9.jpg\" _src=\"http:\/\/yanxuan.nosdn.127.net\/a7f140d9e49eb84d504719b7a04541e9.jpg\" style=\"\"\/><\/p><p><img src=\"http:\/\/yanxuan.nosdn.127.net\/693aa30f123d122d58507ec0df194f96.jpg\" _src=\"http:\/\/yanxuan.nosdn.127.net\/693aa30f123d122d58507ec0df194f96.jpg\" style=\"\"\/><\/p><p><img src=\"http:\/\/yanxuan.nosdn.127.net\/7193b8192cb6345f6f2503febd2b86ed.jpg\" _src=\"http:\/\/yanxuan.nosdn.127.net\/7193b8192cb6345f6f2503febd2b86ed.jpg\" style=\"\"\/><\/p><p><img src=\"http:\/\/yanxuan.nosdn.127.net\/5f997dbe72e525fcc68663fe50b5c825.jpg\" _src=\"http:\/\/yanxuan.nosdn.127.net\/5f997dbe72e525fcc68663fe50b5c825.jpg\" style=\"\"\/><\/p><p><img src=\"http:\/\/yanxuan.nosdn.127.net\/6771f59b904f91d296c115de01f0b7f3.jpg\" _src=\"http:\/\/yanxuan.nosdn.127.net\/6771f59b904f91d296c115de01f0b7f3.jpg\" style=\"\"\/><\/p><p><br\/><\/p>",
                "created_at": "2018-02-01 00:00:00",
                "updated_at": "2018-02-01 00:00:00",
                "deleted_at": null
            },
            {
                "id": 1006014,
                "goods_sn": "1006014",
                "name": "双宫茧桑蚕丝被 子母被",
                "category_id": 1008008,
                "gallery": "[\"http:\/\/yanxuan.nosdn.127.net\/22535d179b6796fbd45a83d6ecea3b50.jpg\",\"http:\/\/yanxuan.nosdn.127.net\/6e93d7d868d918bef0138748ffbd9458.jpg\",\"http:\/\/yanxuan.nosdn.127.net\/ccc21b29557929ec99067a445fc74ea3.jpg\",\"http:\/\/yanxuan.nosdn.127.net\/1479bec93b57855889d93a9f4eef0b72.jpg\"]",
                "keywords": "",
                "brief": "双层子母被，四季皆可使用",
                "is_on_sale": 1,
                "sort_order": 15,
                "pic_url": "http:\/\/yanxuan.nosdn.127.net\/2b537159f0f789034bf8c4b339c43750.png",
                "share_url": "",
                "is_new": 0,
                "is_hot": 1,
                "unit": "件",
                "counter_price": "14199.00",
                "retail_price": "1399.00",
                "detail": "<p><img src=\"http:\/\/yanxuan.nosdn.127.net\/3b5ee089edb2b5d3361bf60e208ec474.jpg\" _src=\"http:\/\/yanxuan.nosdn.127.net\/3b5ee089edb2b5d3361bf60e208ec474.jpg\" style=\"\"\/><\/p><p><img src=\"http:\/\/yanxuan.nosdn.127.net\/737260dd5cfae7ef72c713af861e8774.jpg\" _src=\"http:\/\/yanxuan.nosdn.127.net\/737260dd5cfae7ef72c713af861e8774.jpg\" style=\"\"\/><\/p><p><img src=\"http:\/\/yanxuan.nosdn.127.net\/62a70427f9d6bf81bc19203e6f401e2e.jpg\" _src=\"http:\/\/yanxuan.nosdn.127.net\/62a70427f9d6bf81bc19203e6f401e2e.jpg\" style=\"\"\/><\/p><p><img src=\"http:\/\/yanxuan.nosdn.127.net\/051aa6ea1ef13b32240a34e0d2d5ca97.jpg\" _src=\"http:\/\/yanxuan.nosdn.127.net\/051aa6ea1ef13b32240a34e0d2d5ca97.jpg\" style=\"\"\/><\/p><p><img src=\"http:\/\/yanxuan.nosdn.127.net\/41b19060447843186366c221130ee4de.jpg\" _src=\"http:\/\/yanxuan.nosdn.127.net\/41b19060447843186366c221130ee4de.jpg\" style=\"\"\/><\/p><p><img src=\"http:\/\/yanxuan.nosdn.127.net\/ae757922d72e6c4357d10f1d78bd7a8b.jpg\" _src=\"http:\/\/yanxuan.nosdn.127.net\/ae757922d72e6c4357d10f1d78bd7a8b.jpg\" style=\"\"\/><\/p><p><img src=\"http:\/\/yanxuan.nosdn.127.net\/58bcf7d0ce99f4f2b5cf11b9511319e7.jpg\" _src=\"http:\/\/yanxuan.nosdn.127.net\/58bcf7d0ce99f4f2b5cf11b9511319e7.jpg\" style=\"\"\/><\/p><p><img src=\"http:\/\/yanxuan.nosdn.127.net\/54496c73ebda2680aa2b9d8c375a82e3.jpg\" _src=\"http:\/\/yanxuan.nosdn.127.net\/54496c73ebda2680aa2b9d8c375a82e3.jpg\" style=\"\"\/><\/p><p><img src=\"http:\/\/yanxuan.nosdn.127.net\/6caae81b0956de612ce57b1419382813.jpg\" _src=\"http:\/\/yanxuan.nosdn.127.net\/6caae81b0956de612ce57b1419382813.jpg\" style=\"\"\/><\/p><p><img src=\"http:\/\/yanxuan.nosdn.127.net\/2fbf34bb5b36ba708dfc3facc6551d1b.jpg\" _src=\"http:\/\/yanxuan.nosdn.127.net\/2fbf34bb5b36ba708dfc3facc6551d1b.jpg\" style=\"\"\/><\/p><p><img src=\"http:\/\/yanxuan.nosdn.127.net\/741663a8fb8f5a17442951d7ed670952.jpg\" _src=\"http:\/\/yanxuan.nosdn.127.net\/741663a8fb8f5a17442951d7ed670952.jpg\" style=\"\"\/><\/p><p><img src=\"http:\/\/yanxuan.nosdn.127.net\/7055264e97783cc669a003e3e857de8f.jpg\" _src=\"http:\/\/yanxuan.nosdn.127.net\/7055264e97783cc669a003e3e857de8f.jpg\" style=\"\"\/><\/p><p><img src=\"http:\/\/yanxuan.nosdn.127.net\/59983cf72d63181eff723b7d6ec2a57d.jpg\" _src=\"http:\/\/yanxuan.nosdn.127.net\/59983cf72d63181eff723b7d6ec2a57d.jpg\" style=\"\"\/><\/p><p><img src=\"http:\/\/yanxuan.nosdn.127.net\/6046cb49c22b635a84d490e8f0ab9f8f.jpg\" _src=\"http:\/\/yanxuan.nosdn.127.net\/6046cb49c22b635a84d490e8f0ab9f8f.jpg\" style=\"\"\/><\/p><p><img src=\"http:\/\/yanxuan.nosdn.127.net\/01d18fcb6e8019798a630c9abb01580a.jpg\" _src=\"http:\/\/yanxuan.nosdn.127.net\/01d18fcb6e8019798a630c9abb01580a.jpg\" style=\"\"\/><\/p><p><img src=\"http:\/\/yanxuan.nosdn.127.net\/4093967aedc279e3c4ee3e672fbebbff.jpg\" _src=\"http:\/\/yanxuan.nosdn.127.net\/4093967aedc279e3c4ee3e672fbebbff.jpg\" style=\"\"\/><\/p><p><img src=\"http:\/\/yanxuan.nosdn.127.net\/994d3bcf0b40fc9c31f51a9accd0b88c.jpg\" _src=\"http:\/\/yanxuan.nosdn.127.net\/994d3bcf0b40fc9c31f51a9accd0b88c.jpg\" style=\"\"\/><\/p><p><img src=\"http:\/\/yanxuan.nosdn.127.net\/72fd621d3b567cb6d963a9b554c58ee5.jpg\" _src=\"http:\/\/yanxuan.nosdn.127.net\/72fd621d3b567cb6d963a9b554c58ee5.jpg\" style=\"\"\/><\/p><p><img src=\"http:\/\/yanxuan.nosdn.127.net\/c1704b2d57d8ce5a30b371f702b80e23.jpg\" _src=\"http:\/\/yanxuan.nosdn.127.net\/c1704b2d57d8ce5a30b371f702b80e23.jpg\" style=\"\"\/><\/p><p><img src=\"http:\/\/yanxuan.nosdn.127.net\/a0cd8614de4c7bc709158dcf9b7e9ada.jpg\" _src=\"http:\/\/yanxuan.nosdn.127.net\/a0cd8614de4c7bc709158dcf9b7e9ada.jpg\" style=\"\"\/><\/p><p><img src=\"http:\/\/yanxuan.nosdn.127.net\/290ecc11a85a18b87825fe57caa81bd3.jpg\" _src=\"http:\/\/yanxuan.nosdn.127.net\/290ecc11a85a18b87825fe57caa81bd3.jpg\" style=\"\"\/><\/p><p><img src=\"http:\/\/yanxuan.nosdn.127.net\/3467f0eb4f5a3feb30df257b1dd1a80a.jpg\" _src=\"http:\/\/yanxuan.nosdn.127.net\/3467f0eb4f5a3feb30df257b1dd1a80a.jpg\" style=\"\"\/><\/p><p><img src=\"http:\/\/yanxuan.nosdn.127.net\/406defa7a54f5626e050d9eee2a3a7f4.jpg\" _src=\"http:\/\/yanxuan.nosdn.127.net\/406defa7a54f5626e050d9eee2a3a7f4.jpg\" style=\"\"\/><\/p><p><img src=\"http:\/\/yanxuan.nosdn.127.net\/14f1fa09e672955a8afad3e35eae3798.jpg\" _src=\"http:\/\/yanxuan.nosdn.127.net\/14f1fa09e672955a8afad3e35eae3798.jpg\" style=\"\"\/><\/p><p><img src=\"http:\/\/yanxuan.nosdn.127.net\/df344f04a06d62cb15c48a220fb18e34.jpg\" _src=\"http:\/\/yanxuan.nosdn.127.net\/df344f04a06d62cb15c48a220fb18e34.jpg\" style=\"\"\/><\/p><p><img src=\"http:\/\/yanxuan.nosdn.127.net\/b468781d6f234e0107b7ed7c44492da5.jpg\" _src=\"http:\/\/yanxuan.nosdn.127.net\/b468781d6f234e0107b7ed7c44492da5.jpg\" style=\"\"\/><\/p><p><img src=\"http:\/\/yanxuan.nosdn.127.net\/d91c856cbb29826afbc4d3e2bbf63e27.jpg\" _src=\"http:\/\/yanxuan.nosdn.127.net\/d91c856cbb29826afbc4d3e2bbf63e27.jpg\" style=\"\"\/><\/p><p><img src=\"http:\/\/yanxuan.nosdn.127.net\/f08409269a24bc60c51c97e56b279ddc.jpg\" _src=\"http:\/\/yanxuan.nosdn.127.net\/f08409269a24bc60c51c97e56b279ddc.jpg\" style=\"\"\/><\/p><p><img src=\"http:\/\/yanxuan.nosdn.127.net\/3809897fdc8a9db7bd447d7ec1116a17.jpg\" _src=\"http:\/\/yanxuan.nosdn.127.net\/3809897fdc8a9db7bd447d7ec1116a17.jpg\" style=\"\"\/><\/p><p><img src=\"http:\/\/yanxuan.nosdn.127.net\/fd024467887854c0f9540d9cfef2e6dc.jpg\" _src=\"http:\/\/yanxuan.nosdn.127.net\/fd024467887854c0f9540d9cfef2e6dc.jpg\" style=\"\"\/><\/p><p><img src=\"http:\/\/yanxuan.nosdn.127.net\/da5afa55ec02ac1e430ecb985c7aef83.jpg\" _src=\"http:\/\/yanxuan.nosdn.127.net\/da5afa55ec02ac1e430ecb985c7aef83.jpg\" style=\"\"\/><\/p><p><img src=\"http:\/\/yanxuan.nosdn.127.net\/f522e5f98ccab9311de8b15a2c6951ae.jpg\" _src=\"http:\/\/yanxuan.nosdn.127.net\/f522e5f98ccab9311de8b15a2c6951ae.jpg\" style=\"\"\/><\/p><p><img src=\"http:\/\/yanxuan.nosdn.127.net\/a4d5ef81a10211b7a8d3b7134b3adccb.jpg\" _src=\"http:\/\/yanxuan.nosdn.127.net\/a4d5ef81a10211b7a8d3b7134b3adccb.jpg\" style=\"\"\/><\/p><p><img src=\"http:\/\/yanxuan.nosdn.127.net\/1c241ff5f9c267fbd27c2e0bf346dc00.jpg\" _src=\"http:\/\/yanxuan.nosdn.127.net\/1c241ff5f9c267fbd27c2e0bf346dc00.jpg\" style=\"\"\/><\/p><p><img src=\"http:\/\/yanxuan.nosdn.127.net\/9db75fb0766730ee2f2afcf8b8b33659.jpg\" _src=\"http:\/\/yanxuan.nosdn.127.net\/9db75fb0766730ee2f2afcf8b8b33659.jpg\" style=\"\"\/><\/p><p><img src=\"http:\/\/yanxuan.nosdn.127.net\/5f4f42fad5ace718567c9aa68ada22a1.jpg\" _src=\"http:\/\/yanxuan.nosdn.127.net\/5f4f42fad5ace718567c9aa68ada22a1.jpg\" style=\"\"\/><\/p><p><img src=\"http:\/\/yanxuan.nosdn.127.net\/fc0152f7a1a5a31603a59bdfdc4e987f.jpg\" _src=\"http:\/\/yanxuan.nosdn.127.net\/fc0152f7a1a5a31603a59bdfdc4e987f.jpg\" style=\"\"\/><\/p><p><img src=\"http:\/\/yanxuan.nosdn.127.net\/c2929041a7abc890965d4b399f3b6278.jpg\" _src=\"http:\/\/yanxuan.nosdn.127.net\/c2929041a7abc890965d4b399f3b6278.jpg\" style=\"\"\/><\/p><p><img src=\"http:\/\/yanxuan.nosdn.127.net\/8e12a5accd62e0b29ace162ca64fe5ac.jpg\" _src=\"http:\/\/yanxuan.nosdn.127.net\/8e12a5accd62e0b29ace162ca64fe5ac.jpg\" style=\"\"\/><\/p><p><img src=\"http:\/\/yanxuan.nosdn.127.net\/924c7f4ce0af0fdefd04164508648885.jpg\" _src=\"http:\/\/yanxuan.nosdn.127.net\/924c7f4ce0af0fdefd04164508648885.jpg\" style=\"\"\/><\/p><p><img src=\"http:\/\/yanxuan.nosdn.127.net\/55f049536b6471804546d55b8f4fb88c.jpg\" _src=\"http:\/\/yanxuan.nosdn.127.net\/55f049536b6471804546d55b8f4fb88c.jpg\" style=\"\"\/><\/p><p><img src=\"http:\/\/yanxuan.nosdn.127.net\/cd99f9a6f3d60a1d07ac3428b974f65d.jpg\" _src=\"http:\/\/yanxuan.nosdn.127.net\/cd99f9a6f3d60a1d07ac3428b974f65d.jpg\" style=\"\"\/><\/p><p><img src=\"http:\/\/yanxuan.nosdn.127.net\/0444882d13667f002b4eeeaa02bf0498.jpg\" _src=\"http:\/\/yanxuan.nosdn.127.net\/0444882d13667f002b4eeeaa02bf0498.jpg\" style=\"\"\/><\/p><p><img src=\"http:\/\/yanxuan.nosdn.127.net\/9491237b070c4eff99dff34d528b4b65.jpg\" _src=\"http:\/\/yanxuan.nosdn.127.net\/9491237b070c4eff99dff34d528b4b65.jpg\" style=\"\"\/><\/p><p><img src=\"http:\/\/yanxuan.nosdn.127.net\/18bbcf7de0dfe9df10fdccffa328a54d.jpg\" _src=\"http:\/\/yanxuan.nosdn.127.net\/18bbcf7de0dfe9df10fdccffa328a54d.jpg\" style=\"\"\/><\/p><p><img src=\"http:\/\/yanxuan.nosdn.127.net\/b396a6ce48ebd3297384d8deea6f06e9.jpg\" _src=\"http:\/\/yanxuan.nosdn.127.net\/b396a6ce48ebd3297384d8deea6f06e9.jpg\" style=\"\"\/><\/p><p><img src=\"http:\/\/yanxuan.nosdn.127.net\/2234040e3bcd7d6b7954b34afc9592a6.jpg\" _src=\"http:\/\/yanxuan.nosdn.127.net\/2234040e3bcd7d6b7954b34afc9592a6.jpg\" style=\"\"\/><\/p><p><img src=\"http:\/\/yanxuan.nosdn.127.net\/8b2015e0c984e01a2ec6e971f3b3c855.jpg\" _src=\"http:\/\/yanxuan.nosdn.127.net\/8b2015e0c984e01a2ec6e971f3b3c855.jpg\" style=\"\"\/><\/p><p><img src=\"http:\/\/yanxuan.nosdn.127.net\/1cfd381db37cea6b62856d0bcceaa4e0.jpg\" _src=\"http:\/\/yanxuan.nosdn.127.net\/1cfd381db37cea6b62856d0bcceaa4e0.jpg\" style=\"\"\/><\/p><p><img src=\"http:\/\/yanxuan.nosdn.127.net\/61c867e69ce18b47ba5e8b4dc35d45a3.jpg\" _src=\"http:\/\/yanxuan.nosdn.127.net\/61c867e69ce18b47ba5e8b4dc35d45a3.jpg\" style=\"\"\/><\/p><p><img src=\"http:\/\/yanxuan.nosdn.127.net\/efbb973c5e5b9bf58e764957f64402b2.jpg\" _src=\"http:\/\/yanxuan.nosdn.127.net\/efbb973c5e5b9bf58e764957f64402b2.jpg\" style=\"\"\/><\/p><p><img src=\"http:\/\/yanxuan.nosdn.127.net\/66eb58f7818e87a8cc67923a2effaeee.jpg\" _src=\"http:\/\/yanxuan.nosdn.127.net\/66eb58f7818e87a8cc67923a2effaeee.jpg\" style=\"\"\/><\/p><p><br\/><\/p>",
                "created_at": "2018-02-01 00:00:00",
                "updated_at": "2018-02-01 00:00:00",
                "deleted_at": null
            },
            {
                "id": 1006051,
                "goods_sn": "1006051",
                "name": "皇室御用超柔毛巾",
                "category_id": 1008001,
                "gallery": "[\"http:\/\/yanxuan.nosdn.127.net\/de30c41b94ce203985a228dc787fdcfa.jpg\", \"http:\/\/yanxuan.nosdn.127.net\/de30c41b94ce203985a228dc787fdcfa.jpg\", \"http:\/\/yanxuan.nosdn.127.net\/de30c41b94ce203985a228dc787fdcfa.jpg\", \"http:\/\/yanxuan.nosdn.127.net\/de30c41b94ce203985a228dc787fdcfa.jpg\", \"http:\/\/yanxuan.nosdn.127.net\/de30c41b94ce203985a228dc787fdcfa.jpg\"]",
                "keywords": "",
                "brief": "至柔至软，热销50万条",
                "is_on_sale": 1,
                "sort_order": 1,
                "pic_url": "http:\/\/yanxuan.nosdn.127.net\/ad5a317216f9da495b144070ecf1f957.png",
                "share_url": "",
                "is_new": 0,
                "is_hot": 0,
                "unit": "条",
                "counter_price": "79.00",
                "retail_price": "59.00",
                "detail": "",
                "created_at": "2018-02-01 00:00:00",
                "updated_at": "2018-02-01 00:00:00",
                "deleted_at": null
            },
            {
                "id": 1009009,
                "goods_sn": "1009009",
                "name": "白鹅绒秋冬加厚羽绒被",
                "category_id": 1008008,
                "gallery": "[\"http:\/\/yanxuan.nosdn.127.net\/33a04714bc15a43d0ce87d71d1d9694a.jpg\", \"http:\/\/yanxuan.nosdn.127.net\/e0999e26962b6e88b05fdfe9ba8ff644.jpg\", \"http:\/\/yanxuan.nosdn.127.net\/dd2aff7f4edb26f5e0f691e94a51c66a.jpg\", \"http:\/\/yanxuan.nosdn.127.net\/78059fd78b649d395f8e5740ba8eb99e.jpg\"]",
                "keywords": "",
                "brief": "热销5万条，一条被子过冬",
                "is_on_sale": 1,
                "sort_order": 19,
                "pic_url": "http:\/\/yanxuan.nosdn.127.net\/9791006f25e26b2d7c81f41f87ce8619.png",
                "share_url": "",
                "is_new": 0,
                "is_hot": 0,
                "unit": "件",
                "counter_price": "2019.00",
                "retail_price": "1999.00",
                "detail": "<p><img src=\"http:\/\/yanxuan.nosdn.127.net\/79ae82326ba86985035215ca9bebd137.jpg\" _src=\"http:\/\/yanxuan.nosdn.127.net\/79ae82326ba86985035215ca9bebd137.jpg\" style=\"\"\/><\/p><p><img src=\"http:\/\/yanxuan.nosdn.127.net\/e7aadf2c5fd0942dc9bceb5a0738d969.jpg\" _src=\"http:\/\/yanxuan.nosdn.127.net\/e7aadf2c5fd0942dc9bceb5a0738d969.jpg\" style=\"\"\/><\/p><p><img src=\"http:\/\/yanxuan.nosdn.127.net\/6ccf2486677aafef68048894317b6e96.jpg\" _src=\"http:\/\/yanxuan.nosdn.127.net\/6ccf2486677aafef68048894317b6e96.jpg\" style=\"\"\/><\/p><p><img src=\"http:\/\/yanxuan.nosdn.127.net\/b3ce70df9905a810c60220d9d24ebb2c.jpg\" _src=\"http:\/\/yanxuan.nosdn.127.net\/b3ce70df9905a810c60220d9d24ebb2c.jpg\" style=\"\"\/><\/p><p><img src=\"http:\/\/yanxuan.nosdn.127.net\/d51b1e4f61cb563b09dae46ee282e220.jpg\" _src=\"http:\/\/yanxuan.nosdn.127.net\/d51b1e4f61cb563b09dae46ee282e220.jpg\" style=\"\"\/><\/p><p><img src=\"http:\/\/yanxuan.nosdn.127.net\/e2791ef7173866f12be3341ca7202336.jpg\" _src=\"http:\/\/yanxuan.nosdn.127.net\/e2791ef7173866f12be3341ca7202336.jpg\" style=\"\"\/><\/p><p><img src=\"http:\/\/yanxuan.nosdn.127.net\/6cda9c3d9f044310f49afc5bbdb3533d.jpg\" _src=\"http:\/\/yanxuan.nosdn.127.net\/6cda9c3d9f044310f49afc5bbdb3533d.jpg\" style=\"\"\/><\/p><p><img src=\"http:\/\/yanxuan.nosdn.127.net\/68e9be17108a9c6a0e6b786176a4b4c6.jpg\" _src=\"http:\/\/yanxuan.nosdn.127.net\/68e9be17108a9c6a0e6b786176a4b4c6.jpg\" style=\"\"\/><\/p><p><img src=\"http:\/\/yanxuan.nosdn.127.net\/3974579c71cdf946088d339e9e5c865d.jpg\" _src=\"http:\/\/yanxuan.nosdn.127.net\/3974579c71cdf946088d339e9e5c865d.jpg\" style=\"\"\/><\/p><p><img src=\"http:\/\/yanxuan.nosdn.127.net\/d95a8520e3e3dfec063fc484e1d57207.jpg\" _src=\"http:\/\/yanxuan.nosdn.127.net\/d95a8520e3e3dfec063fc484e1d57207.jpg\" style=\"\"\/><\/p><p><img src=\"http:\/\/yanxuan.nosdn.127.net\/ce8b29a61396dced0f89ea3bfdf1f45d.jpg\" _src=\"http:\/\/yanxuan.nosdn.127.net\/ce8b29a61396dced0f89ea3bfdf1f45d.jpg\" style=\"\"\/><\/p><p><img src=\"http:\/\/yanxuan.nosdn.127.net\/129cba9ef941b367e56dad47aeb7fd96.jpg\" _src=\"http:\/\/yanxuan.nosdn.127.net\/129cba9ef941b367e56dad47aeb7fd96.jpg\" style=\"\"\/><\/p><p><img src=\"http:\/\/yanxuan.nosdn.127.net\/f566abb0c978093647aa1742725129ae.jpg\" _src=\"http:\/\/yanxuan.nosdn.127.net\/f566abb0c978093647aa1742725129ae.jpg\" style=\"\"\/><\/p><p><img src=\"http:\/\/yanxuan.nosdn.127.net\/f7c7c153400895b5d690f1eba9b3c315.jpg\" _src=\"http:\/\/yanxuan.nosdn.127.net\/f7c7c153400895b5d690f1eba9b3c315.jpg\" style=\"\"\/><\/p><p><img src=\"http:\/\/yanxuan.nosdn.127.net\/be750a41eef4db163a29e2326a65660f.jpg\" _src=\"http:\/\/yanxuan.nosdn.127.net\/be750a41eef4db163a29e2326a65660f.jpg\" style=\"\"\/><\/p><p><img src=\"http:\/\/yanxuan.nosdn.127.net\/6ea11ee2e846b3536acb599b93b7d2e9.jpg\" _src=\"http:\/\/yanxuan.nosdn.127.net\/6ea11ee2e846b3536acb599b93b7d2e9.jpg\" style=\"\"\/><\/p><p><img src=\"http:\/\/yanxuan.nosdn.127.net\/5814d4e02b3fd0b94d04ca262b201385.jpg\" _src=\"http:\/\/yanxuan.nosdn.127.net\/5814d4e02b3fd0b94d04ca262b201385.jpg\" style=\"\"\/><\/p><p><img src=\"http:\/\/yanxuan.nosdn.127.net\/7959e1d91576bf0d21e7bd042e2210bd.jpg\" _src=\"http:\/\/yanxuan.nosdn.127.net\/7959e1d91576bf0d21e7bd042e2210bd.jpg\" style=\"\"\/><\/p><p><img src=\"http:\/\/yanxuan.nosdn.127.net\/4268cc5be26539ed427927e4e6d8e18e.jpg\" _src=\"http:\/\/yanxuan.nosdn.127.net\/4268cc5be26539ed427927e4e6d8e18e.jpg\" style=\"\"\/><\/p><p><img src=\"http:\/\/yanxuan.nosdn.127.net\/5667dee42adfce79988974d96ddd8b09.jpg\" _src=\"http:\/\/yanxuan.nosdn.127.net\/5667dee42adfce79988974d96ddd8b09.jpg\" style=\"\"\/><\/p><p><img src=\"http:\/\/yanxuan.nosdn.127.net\/d6c9f0a1a51cd0166844d3694cc92a1e.jpg\" _src=\"http:\/\/yanxuan.nosdn.127.net\/d6c9f0a1a51cd0166844d3694cc92a1e.jpg\" style=\"\"\/><\/p><p><img src=\"http:\/\/yanxuan.nosdn.127.net\/ce43457f50492c355ff1f7577685c004.jpg\" _src=\"http:\/\/yanxuan.nosdn.127.net\/ce43457f50492c355ff1f7577685c004.jpg\" style=\"\"\/><\/p><p><img src=\"http:\/\/yanxuan.nosdn.127.net\/9c2ff68fede235b1b9f249cd5dabce0d.jpg\" _src=\"http:\/\/yanxuan.nosdn.127.net\/9c2ff68fede235b1b9f249cd5dabce0d.jpg\" style=\"\"\/><\/p><p><img src=\"http:\/\/yanxuan.nosdn.127.net\/785952cd32deedc2bfd90826e89ddc2a.jpg\" _src=\"http:\/\/yanxuan.nosdn.127.net\/785952cd32deedc2bfd90826e89ddc2a.jpg\" style=\"\"\/><\/p><p><img src=\"http:\/\/yanxuan.nosdn.127.net\/b544624dcc990b966e6c6d20ee608b7c.jpg\" _src=\"http:\/\/yanxuan.nosdn.127.net\/b544624dcc990b966e6c6d20ee608b7c.jpg\" style=\"\"\/><\/p><p><img src=\"http:\/\/yanxuan.nosdn.127.net\/761a606123be84d0c6eaa2e5eb9f4f81.jpg\" _src=\"http:\/\/yanxuan.nosdn.127.net\/761a606123be84d0c6eaa2e5eb9f4f81.jpg\" style=\"\"\/><\/p><p><img src=\"http:\/\/yanxuan.nosdn.127.net\/0cce548176f68f7e00de503d4d146629.jpg\" _src=\"http:\/\/yanxuan.nosdn.127.net\/0cce548176f68f7e00de503d4d146629.jpg\" style=\"\"\/><\/p><p><img src=\"http:\/\/yanxuan.nosdn.127.net\/30cb73b7917af99d4ccbdbca9042d566.jpg\" _src=\"http:\/\/yanxuan.nosdn.127.net\/30cb73b7917af99d4ccbdbca9042d566.jpg\" style=\"\"\/><\/p><p><img src=\"http:\/\/yanxuan.nosdn.127.net\/1a27c57bb90e145df10d633dcfdbe26b.jpg\" _src=\"http:\/\/yanxuan.nosdn.127.net\/1a27c57bb90e145df10d633dcfdbe26b.jpg\" style=\"\"\/><\/p><p><img src=\"http:\/\/yanxuan.nosdn.127.net\/8df76b01f83dd4d4a7f58014d8977067.jpg\" _src=\"http:\/\/yanxuan.nosdn.127.net\/8df76b01f83dd4d4a7f58014d8977067.jpg\" style=\"\"\/><\/p><p><img src=\"http:\/\/yanxuan.nosdn.127.net\/ea47ed85b1334e2da9672ee3e9ad66a4.jpg\" _src=\"http:\/\/yanxuan.nosdn.127.net\/ea47ed85b1334e2da9672ee3e9ad66a4.jpg\" style=\"\"\/><\/p><p><img src=\"http:\/\/yanxuan.nosdn.127.net\/750caeba2fa63dec64d598e8299f2122.jpg\" _src=\"http:\/\/yanxuan.nosdn.127.net\/750caeba2fa63dec64d598e8299f2122.jpg\" style=\"\"\/><\/p><p><img src=\"http:\/\/yanxuan.nosdn.127.net\/14bd429f1d48be5d9a8240c1fb4c494b.jpg\" _src=\"http:\/\/yanxuan.nosdn.127.net\/14bd429f1d48be5d9a8240c1fb4c494b.jpg\" style=\"\"\/><\/p><p><img src=\"http:\/\/yanxuan.nosdn.127.net\/02ee506d1f4ba045d7408a0b1e719c8e.jpg\" _src=\"http:\/\/yanxuan.nosdn.127.net\/02ee506d1f4ba045d7408a0b1e719c8e.jpg\" style=\"\"\/><\/p><p><img src=\"http:\/\/yanxuan.nosdn.127.net\/82443ff0a437048729b35fbdb85b0c3a.jpg\" _src=\"http:\/\/yanxuan.nosdn.127.net\/82443ff0a437048729b35fbdb85b0c3a.jpg\" style=\"\"\/><\/p><p><img src=\"http:\/\/yanxuan.nosdn.127.net\/d3f39a87baa66fe50f3b141d148645b5.jpg\" _src=\"http:\/\/yanxuan.nosdn.127.net\/d3f39a87baa66fe50f3b141d148645b5.jpg\" style=\"\"\/><\/p><p><img src=\"http:\/\/yanxuan.nosdn.127.net\/814e549460f206dccb8889165ef69ea2.jpg\" _src=\"http:\/\/yanxuan.nosdn.127.net\/814e549460f206dccb8889165ef69ea2.jpg\" style=\"\"\/><\/p><p><img src=\"http:\/\/yanxuan.nosdn.127.net\/43c21522533725d57ff893f9d080f6cd.jpg\" _src=\"http:\/\/yanxuan.nosdn.127.net\/43c21522533725d57ff893f9d080f6cd.jpg\" style=\"\"\/><\/p><p><img src=\"http:\/\/yanxuan.nosdn.127.net\/dfc0d18fa3b2ba721fd7614af7962cbe.jpg\" _src=\"http:\/\/yanxuan.nosdn.127.net\/dfc0d18fa3b2ba721fd7614af7962cbe.jpg\" style=\"\"\/><\/p><p><img src=\"http:\/\/yanxuan.nosdn.127.net\/1b58ac36c4781edd6d09dfeb2fbb6112.jpg\" _src=\"http:\/\/yanxuan.nosdn.127.net\/1b58ac36c4781edd6d09dfeb2fbb6112.jpg\" style=\"\"\/><\/p><p><img src=\"http:\/\/yanxuan.nosdn.127.net\/aadb34b1fe47217989e46eefb2fcef2c.jpg\" _src=\"http:\/\/yanxuan.nosdn.127.net\/aadb34b1fe47217989e46eefb2fcef2c.jpg\" style=\"\"\/><\/p><p><img src=\"http:\/\/yanxuan.nosdn.127.net\/558aa961eb6b51692e50c5801d74adeb.jpg\" _src=\"http:\/\/yanxuan.nosdn.127.net\/558aa961eb6b51692e50c5801d74adeb.jpg\" style=\"\"\/><\/p><p><img src=\"http:\/\/yanxuan.nosdn.127.net\/af3a0c3d829d015c0850befa9aa7f05c.jpg\" _src=\"http:\/\/yanxuan.nosdn.127.net\/af3a0c3d829d015c0850befa9aa7f05c.jpg\" style=\"\"\/><\/p><p><img src=\"http:\/\/yanxuan.nosdn.127.net\/23c02d5a325df4c87eb339e694489339.jpg\" _src=\"http:\/\/yanxuan.nosdn.127.net\/23c02d5a325df4c87eb339e694489339.jpg\" style=\"\"\/><\/p><p><img src=\"http:\/\/yanxuan.nosdn.127.net\/c51160264c2344feb8a2580d0c47a655.jpg\" _src=\"http:\/\/yanxuan.nosdn.127.net\/c51160264c2344feb8a2580d0c47a655.jpg\" style=\"\"\/><\/p><p><img src=\"http:\/\/yanxuan.nosdn.127.net\/ea8ecd877fdd3c0b30f7d7b961fdf8ee.jpg\" _src=\"http:\/\/yanxuan.nosdn.127.net\/ea8ecd877fdd3c0b30f7d7b961fdf8ee.jpg\" style=\"\"\/><\/p><p><img src=\"http:\/\/yanxuan.nosdn.127.net\/5976f583518689c566c94ce65ac8fcb2.jpg\" _src=\"http:\/\/yanxuan.nosdn.127.net\/5976f583518689c566c94ce65ac8fcb2.jpg\" style=\"\"\/><\/p><p><img src=\"http:\/\/yanxuan.nosdn.127.net\/494dc60b71027177448188093c5eb072.jpg\" _src=\"http:\/\/yanxuan.nosdn.127.net\/494dc60b71027177448188093c5eb072.jpg\" style=\"\"\/><\/p><p><img src=\"http:\/\/yanxuan.nosdn.127.net\/9c0fc3b0727795fe696579e6b3a1f817.jpg\" _src=\"http:\/\/yanxuan.nosdn.127.net\/9c0fc3b0727795fe696579e6b3a1f817.jpg\" style=\"\"\/><\/p><p><img src=\"http:\/\/yanxuan.nosdn.127.net\/7ab7aa0de0e90b5a8768d25155e6c475.jpg\" _src=\"http:\/\/yanxuan.nosdn.127.net\/7ab7aa0de0e90b5a8768d25155e6c475.jpg\" style=\"\"\/><\/p><p><img src=\"http:\/\/yanxuan.nosdn.127.net\/839ffe5bf65befd4ec353fbed7730b2c.jpg\" _src=\"http:\/\/yanxuan.nosdn.127.net\/839ffe5bf65befd4ec353fbed7730b2c.jpg\" style=\"\"\/><\/p><p><img src=\"http:\/\/yanxuan.nosdn.127.net\/313df862cf6181ef199b782969be4607.jpg\" _src=\"http:\/\/yanxuan.nosdn.127.net\/313df862cf6181ef199b782969be4607.jpg\" style=\"\"\/><\/p><p><img src=\"http:\/\/yanxuan.nosdn.127.net\/e39bfc4343d8968879ec66cc67db8987.jpg\" _src=\"http:\/\/yanxuan.nosdn.127.net\/e39bfc4343d8968879ec66cc67db8987.jpg\" style=\"\"\/><\/p><p><img src=\"http:\/\/yanxuan.nosdn.127.net\/d0c74814f38aba0c40a405ece465d554.jpg\" _src=\"http:\/\/yanxuan.nosdn.127.net\/d0c74814f38aba0c40a405ece465d554.jpg\" style=\"\"\/><\/p><p><br\/><\/p>",
                "created_at": "2018-02-01 00:00:00",
                "updated_at": "2018-02-01 00:00:00",
                "deleted_at": null
            },
            {
                "id": 1009012,
                "goods_sn": "1009012",
                "name": "可水洗舒柔丝羽绒枕",
                "category_id": 1008008,
                "gallery": "[\"http:\/\/yanxuan.nosdn.127.net\/c2f88baff6d3d9c954bf437649d26954.jpg\", \"http:\/\/yanxuan.nosdn.127.net\/36176eb5337c5048cf4403b145f43bc4.jpg\", \"http:\/\/yanxuan.nosdn.127.net\/13aae0f61d87198867c088aa50c00043.jpg\", \"http:\/\/yanxuan.nosdn.127.net\/40e881087eae3ef541aa13f6b4e9d356.jpg\"]",
                "keywords": "",
                "brief": "超细纤维，蓬松轻盈回弹",
                "is_on_sale": 1,
                "sort_order": 2,
                "pic_url": "http:\/\/yanxuan.nosdn.127.net\/a196b367f23ccfd8205b6da647c62b84.png",
                "share_url": "",
                "is_new": 0,
                "is_hot": 1,
                "unit": "件",
                "counter_price": "79.00",
                "retail_price": "59.00",
                "detail": "<p><img src=\"http:\/\/yanxuan.nosdn.127.net\/1a5e9ace280a27c810e67bf3aab66a75.jpg\" _src=\"http:\/\/yanxuan.nosdn.127.net\/1a5e9ace280a27c810e67bf3aab66a75.jpg\" style=\"\"\/><\/p><p><img src=\"http:\/\/yanxuan.nosdn.127.net\/40c88e440f866d761e72fff850edafc1.jpg\" _src=\"http:\/\/yanxuan.nosdn.127.net\/40c88e440f866d761e72fff850edafc1.jpg\" style=\"\"\/><\/p><p><img src=\"http:\/\/yanxuan.nosdn.127.net\/e26e6ab169ea6cd025558eecd8c9cd5c.jpg\" _src=\"http:\/\/yanxuan.nosdn.127.net\/e26e6ab169ea6cd025558eecd8c9cd5c.jpg\" style=\"\"\/><\/p><p><img src=\"http:\/\/yanxuan.nosdn.127.net\/7a44f6c9ce44db0c10453632a295849b.jpg\" _src=\"http:\/\/yanxuan.nosdn.127.net\/7a44f6c9ce44db0c10453632a295849b.jpg\" style=\"\"\/><\/p><p><img src=\"http:\/\/yanxuan.nosdn.127.net\/df9d87e60d06169417fa9460f81537d4.jpg\" _src=\"http:\/\/yanxuan.nosdn.127.net\/df9d87e60d06169417fa9460f81537d4.jpg\" style=\"\"\/><\/p><p><img src=\"http:\/\/yanxuan.nosdn.127.net\/c2cf5687c311b0dda7931a15532be0fd.jpg\" _src=\"http:\/\/yanxuan.nosdn.127.net\/c2cf5687c311b0dda7931a15532be0fd.jpg\" style=\"\"\/><\/p><p><img src=\"http:\/\/yanxuan.nosdn.127.net\/8acf04b68de689304e5cb69ff6bb07d0.jpg\" _src=\"http:\/\/yanxuan.nosdn.127.net\/8acf04b68de689304e5cb69ff6bb07d0.jpg\" style=\"\"\/><\/p><p><img src=\"http:\/\/yanxuan.nosdn.127.net\/65d20babc642c3dcf86e543344e9ed52.jpg\" _src=\"http:\/\/yanxuan.nosdn.127.net\/65d20babc642c3dcf86e543344e9ed52.jpg\" style=\"\"\/><\/p><p><img src=\"http:\/\/yanxuan.nosdn.127.net\/92efc7c36a8be774dffa2c6e64d80501.jpg\" _src=\"http:\/\/yanxuan.nosdn.127.net\/92efc7c36a8be774dffa2c6e64d80501.jpg\" style=\"\"\/><\/p><p><img src=\"http:\/\/yanxuan.nosdn.127.net\/70be97c7a2fb95b45260c3debf6c2688.jpg\" _src=\"http:\/\/yanxuan.nosdn.127.net\/70be97c7a2fb95b45260c3debf6c2688.jpg\" style=\"\"\/><\/p><p><img src=\"http:\/\/yanxuan.nosdn.127.net\/01f3285234fb3e7a005511985b21f79f.jpg\" _src=\"http:\/\/yanxuan.nosdn.127.net\/01f3285234fb3e7a005511985b21f79f.jpg\" style=\"\"\/><\/p><p><img src=\"http:\/\/yanxuan.nosdn.127.net\/a4b7e5b867f5b248d28a16116eac5633.jpg\" _src=\"http:\/\/yanxuan.nosdn.127.net\/a4b7e5b867f5b248d28a16116eac5633.jpg\" style=\"\"\/><\/p><p><img src=\"http:\/\/yanxuan.nosdn.127.net\/0c7402aa957e5a25db3fbfefdfb0af96.jpg\" _src=\"http:\/\/yanxuan.nosdn.127.net\/0c7402aa957e5a25db3fbfefdfb0af96.jpg\" style=\"\"\/><\/p><p><img src=\"http:\/\/yanxuan.nosdn.127.net\/39d0f3ba2eb421945a81fa52414dbca5.jpg\" _src=\"http:\/\/yanxuan.nosdn.127.net\/39d0f3ba2eb421945a81fa52414dbca5.jpg\" style=\"\"\/><\/p><p><img src=\"http:\/\/yanxuan.nosdn.127.net\/000eb7d7bf5587215df305676533e5c2.jpg\" _src=\"http:\/\/yanxuan.nosdn.127.net\/000eb7d7bf5587215df305676533e5c2.jpg\" style=\"\"\/><\/p><p><img src=\"http:\/\/yanxuan.nosdn.127.net\/557a98e73aa9d1d15721b7e4e26e487f.jpg\" _src=\"http:\/\/yanxuan.nosdn.127.net\/557a98e73aa9d1d15721b7e4e26e487f.jpg\" style=\"\"\/><\/p><p><img src=\"http:\/\/yanxuan.nosdn.127.net\/70b33a53ab55bdc711021ae5c9494f03.jpg\" _src=\"http:\/\/yanxuan.nosdn.127.net\/70b33a53ab55bdc711021ae5c9494f03.jpg\" style=\"\"\/><\/p><p><img src=\"http:\/\/yanxuan.nosdn.127.net\/f3d135a3e7c8f550a46cbdcc973d7ad7.jpg\" _src=\"http:\/\/yanxuan.nosdn.127.net\/f3d135a3e7c8f550a46cbdcc973d7ad7.jpg\" style=\"\"\/><\/p><p><img src=\"http:\/\/yanxuan.nosdn.127.net\/87eedde73e8c0b357ca1295a201ffbe0.jpg\" _src=\"http:\/\/yanxuan.nosdn.127.net\/87eedde73e8c0b357ca1295a201ffbe0.jpg\" style=\"\"\/><\/p><p><br\/><\/p>",
                "created_at": "2018-02-01 00:00:00",
                "updated_at": "2018-02-01 00:00:00",
                "deleted_at": null
            },
            {
                "id": 1009013,
                "goods_sn": "1009013",
                "name": "可水洗抗菌防螨丝羽绒枕",
                "category_id": 1008008,
                "gallery": "[\"http:\/\/yanxuan.nosdn.127.net\/34bb2ff0358432c3f15e6afa0d5d2104.jpg\", \"http:\/\/yanxuan.nosdn.127.net\/5114eb391397033eca305055e21d9cb3.jpg\", \"http:\/\/yanxuan.nosdn.127.net\/73a866b532183dec74232b0cc1b36428.jpg\", \"http:\/\/yanxuan.nosdn.127.net\/331a2954f81d0cfe764cbdf2e5b6b328.jpg\"]",
                "keywords": "",
                "brief": "进口防螨布，热销50万件",
                "is_on_sale": 1,
                "sort_order": 3,
                "pic_url": "http:\/\/yanxuan.nosdn.127.net\/da56fda947d0f430d5f4cf4aba14e679.png",
                "share_url": "",
                "is_new": 0,
                "is_hot": 0,
                "unit": "件",
                "counter_price": "119.00",
                "retail_price": "99.00",
                "detail": "<p><img src=\"http:\/\/yanxuan.nosdn.127.net\/b2576e9567e5de643a02f3a5fc26ee17.jpg\" _src=\"http:\/\/yanxuan.nosdn.127.net\/b2576e9567e5de643a02f3a5fc26ee17.jpg\" style=\"\"\/><\/p><p><img src=\"http:\/\/yanxuan.nosdn.127.net\/029b577be403335de4c2a37b9d83a31d.jpg\" _src=\"http:\/\/yanxuan.nosdn.127.net\/029b577be403335de4c2a37b9d83a31d.jpg\" style=\"\"\/><\/p><p><img src=\"http:\/\/yanxuan.nosdn.127.net\/779f04eac136c934fe9a17d2d26137ae.jpg\" _src=\"http:\/\/yanxuan.nosdn.127.net\/779f04eac136c934fe9a17d2d26137ae.jpg\" style=\"\"\/><\/p><p><img src=\"http:\/\/yanxuan.nosdn.127.net\/5d641ff16c4b2502442616f3e194d575.jpg\" _src=\"http:\/\/yanxuan.nosdn.127.net\/5d641ff16c4b2502442616f3e194d575.jpg\" style=\"\"\/><\/p><p><img src=\"http:\/\/yanxuan.nosdn.127.net\/ec14832d8c947f4dbe716eabfaa7029a.jpg\" _src=\"http:\/\/yanxuan.nosdn.127.net\/ec14832d8c947f4dbe716eabfaa7029a.jpg\" style=\"\"\/><\/p><p><img src=\"http:\/\/yanxuan.nosdn.127.net\/645db2317426b5a852d331231e258c02.jpg\" _src=\"http:\/\/yanxuan.nosdn.127.net\/645db2317426b5a852d331231e258c02.jpg\" style=\"\"\/><\/p><p><img src=\"http:\/\/yanxuan.nosdn.127.net\/ac6055481565438d5fee342c3ccec155.jpg\" _src=\"http:\/\/yanxuan.nosdn.127.net\/ac6055481565438d5fee342c3ccec155.jpg\" style=\"\"\/><\/p><p><img src=\"http:\/\/yanxuan.nosdn.127.net\/8382f534cf2acac06551df87e136c4f0.jpg\" _src=\"http:\/\/yanxuan.nosdn.127.net\/8382f534cf2acac06551df87e136c4f0.jpg\" style=\"\"\/><\/p><p><img src=\"http:\/\/yanxuan.nosdn.127.net\/ce4cf3fdb7230634c72fbf6c97bd3c16.jpg\" _src=\"http:\/\/yanxuan.nosdn.127.net\/ce4cf3fdb7230634c72fbf6c97bd3c16.jpg\" style=\"\"\/><\/p><p><img src=\"http:\/\/yanxuan.nosdn.127.net\/5d78a9f815043b0ed880d0ba90b08dbc.jpg\" _src=\"http:\/\/yanxuan.nosdn.127.net\/5d78a9f815043b0ed880d0ba90b08dbc.jpg\" style=\"\"\/><\/p><p><img src=\"http:\/\/yanxuan.nosdn.127.net\/3aa34184510cbdd8df6ba4440af6e37e.jpg\" _src=\"http:\/\/yanxuan.nosdn.127.net\/3aa34184510cbdd8df6ba4440af6e37e.jpg\" style=\"\"\/><\/p><p><img src=\"http:\/\/yanxuan.nosdn.127.net\/bbb48af3056fd3dcffa9968a076753f2.jpg\" _src=\"http:\/\/yanxuan.nosdn.127.net\/bbb48af3056fd3dcffa9968a076753f2.jpg\" style=\"\"\/><\/p><p><img src=\"http:\/\/yanxuan.nosdn.127.net\/dc72b5750827b7d222d972888fb9831b.jpg\" _src=\"http:\/\/yanxuan.nosdn.127.net\/dc72b5750827b7d222d972888fb9831b.jpg\" style=\"\"\/><\/p><p><img src=\"http:\/\/yanxuan.nosdn.127.net\/b24b9b12b891be546263e2cd3f0b704c.jpg\" _src=\"http:\/\/yanxuan.nosdn.127.net\/b24b9b12b891be546263e2cd3f0b704c.jpg\" style=\"\"\/><\/p><p><img src=\"http:\/\/yanxuan.nosdn.127.net\/631996fac12032dbdc17ffd721fb7087.jpg\" _src=\"http:\/\/yanxuan.nosdn.127.net\/631996fac12032dbdc17ffd721fb7087.jpg\" style=\"\"\/><\/p><p><img src=\"http:\/\/yanxuan.nosdn.127.net\/ecc5a8793e18aad9bf3d5f0a89bff12f.jpg\" _src=\"http:\/\/yanxuan.nosdn.127.net\/ecc5a8793e18aad9bf3d5f0a89bff12f.jpg\" style=\"\"\/><\/p><p><img src=\"http:\/\/yanxuan.nosdn.127.net\/943a4bc41ad6e80051c5cfacd102cfde.jpg\" _src=\"http:\/\/yanxuan.nosdn.127.net\/943a4bc41ad6e80051c5cfacd102cfde.jpg\" style=\"\"\/><\/p><p><img src=\"http:\/\/yanxuan.nosdn.127.net\/c0a13678fdef5e56d53de783e8e01350.jpg\" _src=\"http:\/\/yanxuan.nosdn.127.net\/c0a13678fdef5e56d53de783e8e01350.jpg\" style=\"\"\/><\/p><p><img src=\"http:\/\/yanxuan.nosdn.127.net\/220ef8d778bdfc198fcb53f0f01289a2.jpg\" _src=\"http:\/\/yanxuan.nosdn.127.net\/220ef8d778bdfc198fcb53f0f01289a2.jpg\" style=\"\"\/><\/p><p><img src=\"http:\/\/yanxuan.nosdn.127.net\/573acbc397778453b21aba05e5a397f6.jpg\" _src=\"http:\/\/yanxuan.nosdn.127.net\/573acbc397778453b21aba05e5a397f6.jpg\" style=\"\"\/><\/p><p><br\/><\/p>",
                "created_at": "2018-02-01 00:00:00",
                "updated_at": "2018-02-01 00:00:00",
                "deleted_at": null
            },
            {
                "id": 1009024,
                "goods_sn": "1009024",
                "name": "日式和风懒人沙发",
                "category_id": 1008002,
                "gallery": "[\"http:\/\/yanxuan.nosdn.127.net\/9460f6b30661548c4a864607bfcdf4ca.jpg\", \"http:\/\/yanxuan.nosdn.127.net\/acbdb480bcad193fad77ef6c4f52192e.jpg\", \"http:\/\/yanxuan.nosdn.127.net\/e6feb5f4a0989d212bce068d4907657d.jpg\", \"http:\/\/yanxuan.nosdn.127.net\/6059ab6e106d97c29d5723c1d6f1a11f.jpg\"]",
                "keywords": "",
                "brief": "优质莱卡纯棉，和风家居新体验",
                "is_on_sale": 1,
                "sort_order": 1,
                "pic_url": "http:\/\/yanxuan.nosdn.127.net\/149dfa87a7324e184c5526ead81de9ad.png",
                "share_url": "",
                "is_new": 0,
                "is_hot": 0,
                "unit": "件",
                "counter_price": "619.00",
                "retail_price": "599.00",
                "detail": "<p><br\/><\/p><p><img src=\"http:\/\/yanxuan.nosdn.127.net\/34a6a0daa3f7a397a38aad14cb9e90fa.jpg\" _src=\"http:\/\/yanxuan.nosdn.127.net\/34a6a0daa3f7a397a38aad14cb9e90fa.jpg\"\/><br\/><\/p><p><img src=\"http:\/\/yanxuan.nosdn.127.net\/76637af0eec246b318cb129b768de637.jpg\" _src=\"http:\/\/yanxuan.nosdn.127.net\/76637af0eec246b318cb129b768de637.jpg\" style=\"\"\/><\/p><p><img src=\"http:\/\/yanxuan.nosdn.127.net\/18fee22626e61fc1d1a01916914016ba.jpg\" _src=\"http:\/\/yanxuan.nosdn.127.net\/18fee22626e61fc1d1a01916914016ba.jpg\" style=\"\"\/><\/p><p><img src=\"http:\/\/yanxuan.nosdn.127.net\/91f57a9bb142e1c1e2ff0bbea6f9af96.jpg\" _src=\"http:\/\/yanxuan.nosdn.127.net\/91f57a9bb142e1c1e2ff0bbea6f9af96.jpg\" style=\"\"\/><\/p><p><img src=\"http:\/\/yanxuan.nosdn.127.net\/252d80fd75eb1254d746d0b57c267650.jpg\" _src=\"http:\/\/yanxuan.nosdn.127.net\/252d80fd75eb1254d746d0b57c267650.jpg\" style=\"\"\/><\/p><p><img src=\"http:\/\/yanxuan.nosdn.127.net\/4b07697992a2b14de6fd0a5811936d71.jpg\" _src=\"http:\/\/yanxuan.nosdn.127.net\/4b07697992a2b14de6fd0a5811936d71.jpg\" style=\"\"\/><\/p><p><img src=\"http:\/\/yanxuan.nosdn.127.net\/c499439d6081bb4e836955b7514c1b96.jpg\" _src=\"http:\/\/yanxuan.nosdn.127.net\/c499439d6081bb4e836955b7514c1b96.jpg\" style=\"\"\/><\/p><p><img src=\"http:\/\/yanxuan.nosdn.127.net\/bed437fdc091d020a8f805bcc8830bd8.jpg\" _src=\"http:\/\/yanxuan.nosdn.127.net\/bed437fdc091d020a8f805bcc8830bd8.jpg\" style=\"\"\/><\/p><p><img src=\"http:\/\/yanxuan.nosdn.127.net\/0fc5febdb817abd7a1040bab03f048b7.jpg\" _src=\"http:\/\/yanxuan.nosdn.127.net\/0fc5febdb817abd7a1040bab03f048b7.jpg\" style=\"\"\/><\/p><p><img src=\"http:\/\/yanxuan.nosdn.127.net\/a0417b3986c9dc082124fcc360390021.jpg\" _src=\"http:\/\/yanxuan.nosdn.127.net\/a0417b3986c9dc082124fcc360390021.jpg\" style=\"\"\/><\/p><p><img src=\"http:\/\/yanxuan.nosdn.127.net\/a5c9d24c652d4dee7946ef925105f3f2.jpg\" _src=\"http:\/\/yanxuan.nosdn.127.net\/a5c9d24c652d4dee7946ef925105f3f2.jpg\" style=\"\"\/><\/p><p><img src=\"http:\/\/yanxuan.nosdn.127.net\/b10272c58f95dd6737ce1cd41452a21d.jpg\" _src=\"http:\/\/yanxuan.nosdn.127.net\/b10272c58f95dd6737ce1cd41452a21d.jpg\" style=\"\"\/><\/p><p><img src=\"http:\/\/yanxuan.nosdn.127.net\/510c6ef36760238b38ed59cd6e47a21f.png\" _src=\"http:\/\/yanxuan.nosdn.127.net\/510c6ef36760238b38ed59cd6e47a21f.png\" style=\"\"\/><\/p><p><img src=\"http:\/\/yanxuan.nosdn.127.net\/6371348b917c021c55dc393fc59d4d28.png\" _src=\"http:\/\/yanxuan.nosdn.127.net\/6371348b917c021c55dc393fc59d4d28.png\" style=\"\"\/><\/p><p><img src=\"http:\/\/yanxuan.nosdn.127.net\/de4079b128e57c5c0fa8a8177e9bc6e7.png\" _src=\"http:\/\/yanxuan.nosdn.127.net\/de4079b128e57c5c0fa8a8177e9bc6e7.png\" style=\"\"\/><\/p><p><img src=\"http:\/\/yanxuan.nosdn.127.net\/160966fbc772787f824dc1dbd5afb16d.png\" _src=\"http:\/\/yanxuan.nosdn.127.net\/160966fbc772787f824dc1dbd5afb16d.png\" style=\"\"\/><\/p><p><img src=\"http:\/\/yanxuan.nosdn.127.net\/bb3c8d3f10f2aca0908871c8e598aa0e.jpg\" _src=\"http:\/\/yanxuan.nosdn.127.net\/bb3c8d3f10f2aca0908871c8e598aa0e.jpg\"\/><\/p><p><br\/><\/p>",
                "created_at": "2018-02-01 00:00:00",
                "updated_at": "2018-02-01 00:00:00",
                "deleted_at": null
            },
            {
                "id": 1009027,
                "goods_sn": "1009027",
                "name": "皇室御用超柔毛巾80s",
                "category_id": 1008001,
                "gallery": "[\"http:\/\/yanxuan.nosdn.127.net\/35ad21679dbd30a23a8308287ffd4673.jpg\", \"http:\/\/yanxuan.nosdn.127.net\/35ad21679dbd30a23a8308287ffd4673.jpg\", \"http:\/\/yanxuan.nosdn.127.net\/35ad21679dbd30a23a8308287ffd4673.jpg\", \"http:\/\/yanxuan.nosdn.127.net\/35ad21679dbd30a23a8308287ffd4673.jpg\", \"http:\/\/yanxuan.nosdn.127.net\/35ad21679dbd30a23a8308287ffd4673.jpg\"]",
                "keywords": "",
                "brief": "轻柔舒适不掉毛",
                "is_on_sale": 1,
                "sort_order": 2,
                "pic_url": "http:\/\/yanxuan.nosdn.127.net\/71cfd849335c498dee3c54d1eb823c17.png",
                "share_url": "",
                "is_new": 0,
                "is_hot": 0,
                "unit": "条",
                "counter_price": "99.00",
                "retail_price": "79.00",
                "detail": "",
                "created_at": "2018-02-01 00:00:00",
                "updated_at": "2018-02-01 00:00:00",
                "deleted_at": null
            },
            {
                "id": 1010000,
                "goods_sn": "1010000",
                "name": "澳洲纯羊毛盖毯 加厚款",
                "category_id": 1008009,
                "gallery": "[\"http:\/\/yanxuan.nosdn.127.net\/57779dbcd9cbb95241123d798f4693c2.jpg\", \"http:\/\/yanxuan.nosdn.127.net\/64c52113e0c5ca42cd363d5854280119.jpg\", \"http:\/\/yanxuan.nosdn.127.net\/b578539da6f0e39eb74991e9a0b74a90.jpg\", \"http:\/\/yanxuan.nosdn.127.net\/b544dee2401c02e95c0a7bc70960eadf.jpg\"]",
                "keywords": "",
                "brief": "温暖加厚设计",
                "is_on_sale": 1,
                "sort_order": 36,
                "pic_url": "http:\/\/yanxuan.nosdn.127.net\/3bec70b85337c3eec182e54380ef7370.png",
                "share_url": "",
                "is_new": 0,
                "is_hot": 0,
                "unit": "件",
                "counter_price": "419.00",
                "retail_price": "399.00",
                "detail": "<p><img src=\"http:\/\/yanxuan.nosdn.127.net\/ff86010e7277e9fe194e393fb1ad2ba9.jpg\" _src=\"http:\/\/yanxuan.nosdn.127.net\/ff86010e7277e9fe194e393fb1ad2ba9.jpg\" style=\"\"\/><\/p><p><img src=\"http:\/\/yanxuan.nosdn.127.net\/217045fdde1eef8a8f37cd162bed12dc.jpg\" _src=\"http:\/\/yanxuan.nosdn.127.net\/217045fdde1eef8a8f37cd162bed12dc.jpg\" style=\"\"\/><\/p><p><img src=\"http:\/\/yanxuan.nosdn.127.net\/128cd8aebeb3ace9e00ab1f06ef52d69.jpg\" _src=\"http:\/\/yanxuan.nosdn.127.net\/128cd8aebeb3ace9e00ab1f06ef52d69.jpg\" style=\"\"\/><\/p><p><img src=\"http:\/\/yanxuan.nosdn.127.net\/648886df63abe5211271ab1187f9c763.jpg\" _src=\"http:\/\/yanxuan.nosdn.127.net\/648886df63abe5211271ab1187f9c763.jpg\" style=\"\"\/><\/p><p><img src=\"http:\/\/yanxuan.nosdn.127.net\/820a1f82b97a9f28b449bcdb2f72a631.jpg\" _src=\"http:\/\/yanxuan.nosdn.127.net\/820a1f82b97a9f28b449bcdb2f72a631.jpg\" style=\"\"\/><\/p><p><img src=\"http:\/\/yanxuan.nosdn.127.net\/f4f0e12ff92d2d3056290c94aa512f43.jpg\" _src=\"http:\/\/yanxuan.nosdn.127.net\/f4f0e12ff92d2d3056290c94aa512f43.jpg\" style=\"\"\/><\/p><p><img src=\"http:\/\/yanxuan.nosdn.127.net\/d4b8bb95cba61f7c6ec36af3312a3a68.jpg\" _src=\"http:\/\/yanxuan.nosdn.127.net\/d4b8bb95cba61f7c6ec36af3312a3a68.jpg\" style=\"\"\/><\/p><p><img src=\"http:\/\/yanxuan.nosdn.127.net\/e15a76573c7ba9d0a077eec5b914321b.jpg\" _src=\"http:\/\/yanxuan.nosdn.127.net\/e15a76573c7ba9d0a077eec5b914321b.jpg\" style=\"\"\/><\/p><p><img src=\"http:\/\/yanxuan.nosdn.127.net\/8833d04e7f87b7a8d324c315df763726.jpg\" _src=\"http:\/\/yanxuan.nosdn.127.net\/8833d04e7f87b7a8d324c315df763726.jpg\"\/><\/p><p><img src=\"http:\/\/yanxuan.nosdn.127.net\/aa8ad5312cb4a8d129528e37a6ac64bd.jpg\" _src=\"http:\/\/yanxuan.nosdn.127.net\/aa8ad5312cb4a8d129528e37a6ac64bd.jpg\" style=\"\"\/><\/p><p><img src=\"http:\/\/yanxuan.nosdn.127.net\/e5d26e28d938e9a33a2c729283f2cc82.jpg\" _src=\"http:\/\/yanxuan.nosdn.127.net\/e5d26e28d938e9a33a2c729283f2cc82.jpg\" style=\"\"\/><\/p><p><img src=\"http:\/\/yanxuan.nosdn.127.net\/d27a1a92b24adfdf0e6578ddbcd1b572.jpg\" _src=\"http:\/\/yanxuan.nosdn.127.net\/d27a1a92b24adfdf0e6578ddbcd1b572.jpg\" style=\"\"\/><\/p><p><img src=\"http:\/\/yanxuan.nosdn.127.net\/38eb737cc02e5b383911867ed48a004b.jpg\" _src=\"http:\/\/yanxuan.nosdn.127.net\/38eb737cc02e5b383911867ed48a004b.jpg\" style=\"\"\/><\/p><p><img src=\"http:\/\/yanxuan.nosdn.127.net\/82d5a1d5e587b9e8e781f485fb9f73bf.jpg\" _src=\"http:\/\/yanxuan.nosdn.127.net\/82d5a1d5e587b9e8e781f485fb9f73bf.jpg\" style=\"\"\/><\/p><p><img src=\"http:\/\/yanxuan.nosdn.127.net\/728d11809778d6de50f7274a384952e6.jpg\" _src=\"http:\/\/yanxuan.nosdn.127.net\/728d11809778d6de50f7274a384952e6.jpg\" style=\"\"\/><\/p><p><img src=\"http:\/\/yanxuan.nosdn.127.net\/046d49ddc7c9e7031a354129a05e72e8.jpg\" _src=\"http:\/\/yanxuan.nosdn.127.net\/046d49ddc7c9e7031a354129a05e72e8.jpg\" style=\"\"\/><\/p><p><img src=\"http:\/\/yanxuan.nosdn.127.net\/8144e45974188424d576bc16fdfc5842.jpg\" _src=\"http:\/\/yanxuan.nosdn.127.net\/8144e45974188424d576bc16fdfc5842.jpg\" style=\"\"\/><\/p><p><img src=\"http:\/\/yanxuan.nosdn.127.net\/8bd138f32ee0930250aec8578d740a12.jpg\" _src=\"http:\/\/yanxuan.nosdn.127.net\/8bd138f32ee0930250aec8578d740a12.jpg\" style=\"\"\/><\/p><p><img src=\"http:\/\/yanxuan.nosdn.127.net\/71b7da3908ca5d8bb96c690d0c069a5a.jpg\" _src=\"http:\/\/yanxuan.nosdn.127.net\/71b7da3908ca5d8bb96c690d0c069a5a.jpg\" style=\"\"\/><\/p><p><img src=\"http:\/\/yanxuan.nosdn.127.net\/c3a9174f7ca98df4489fa0f1cacc289f.jpg\" _src=\"http:\/\/yanxuan.nosdn.127.net\/c3a9174f7ca98df4489fa0f1cacc289f.jpg\" style=\"\"\/><\/p><p><img src=\"http:\/\/yanxuan.nosdn.127.net\/1b4adaa15075af3218bb54b556db6a70.jpg\" _src=\"http:\/\/yanxuan.nosdn.127.net\/1b4adaa15075af3218bb54b556db6a70.jpg\" style=\"\"\/><\/p><p><br\/><\/p><p><img src=\"http:\/\/yanxuan.nosdn.127.net\/b7e346ce58ad1400c14a11a515c37ab0.jpg\" _src=\"http:\/\/yanxuan.nosdn.127.net\/b7e346ce58ad1400c14a11a515c37ab0.jpg\" style=\"\"\/><\/p><p><img src=\"http:\/\/yanxuan.nosdn.127.net\/2f3df0b2855589a41c66d35945dbf792.jpg\" _src=\"http:\/\/yanxuan.nosdn.127.net\/2f3df0b2855589a41c66d35945dbf792.jpg\" style=\"\"\/><\/p><p><img src=\"http:\/\/yanxuan.nosdn.127.net\/8d5b71b357fc979d0e65968c6697a0df.jpg\" _src=\"http:\/\/yanxuan.nosdn.127.net\/8d5b71b357fc979d0e65968c6697a0df.jpg\"\/><\/p>",
                "created_at": "2018-02-01 00:00:00",
                "updated_at": "2018-02-01 00:00:00",
                "deleted_at": null
            },
            {
                "id": 1010001,
                "goods_sn": "1010001",
                "name": "澳洲纯羊毛盖毯 舒适款",
                "category_id": 1008009,
                "gallery": "[\"http:\/\/yanxuan.nosdn.127.net\/5abc565d5b01e8de15fa16acf58ed40e.jpg\", \"http:\/\/yanxuan.nosdn.127.net\/36cb5783a102c30b818adb7bf5dfde5b.jpg\", \"http:\/\/yanxuan.nosdn.127.net\/057bee2ec4c883077f4dc710c4076369.jpg\", \"http:\/\/yanxuan.nosdn.127.net\/01a2844b480d2456d2e764c0ea2f8201.jpg\"]",
                "keywords": "",
                "brief": "100%澳洲美利奴羊毛",
                "is_on_sale": 1,
                "sort_order": 33,
                "pic_url": "http:\/\/yanxuan.nosdn.127.net\/a8b0a5def7d64e411dd98bdfb1fc989b.png",
                "share_url": "",
                "is_new": 0,
                "is_hot": 0,
                "unit": "件",
                "counter_price": "319.00",
                "retail_price": "299.00",
                "detail": "<p><img src=\"http:\/\/yanxuan.nosdn.127.net\/b23db0608cd8bfde4be5d90124483b36.jpg\" _src=\"http:\/\/yanxuan.nosdn.127.net\/b23db0608cd8bfde4be5d90124483b36.jpg\" style=\"\"\/><\/p><p><img src=\"http:\/\/yanxuan.nosdn.127.net\/f77c27a2e5d5f9d61eeaffc364d6415d.jpg\" _src=\"http:\/\/yanxuan.nosdn.127.net\/f77c27a2e5d5f9d61eeaffc364d6415d.jpg\" style=\"\"\/><\/p><p><img src=\"http:\/\/yanxuan.nosdn.127.net\/5841dfb7a94c4b849abbe42b2a00434e.jpg\" _src=\"http:\/\/yanxuan.nosdn.127.net\/5841dfb7a94c4b849abbe42b2a00434e.jpg\"\/><\/p><p><img src=\"http:\/\/yanxuan.nosdn.127.net\/656ebc04bee2462793db2b8bf1813aa9.jpg\" _src=\"http:\/\/yanxuan.nosdn.127.net\/656ebc04bee2462793db2b8bf1813aa9.jpg\" style=\"\"\/><\/p><p><img src=\"http:\/\/yanxuan.nosdn.127.net\/c55350f193eaf1204a25932fa469586f.jpg\" _src=\"http:\/\/yanxuan.nosdn.127.net\/c55350f193eaf1204a25932fa469586f.jpg\" style=\"\"\/><\/p><p><img src=\"http:\/\/yanxuan.nosdn.127.net\/ca5c07a9abb58032f2d12e257ccbf367.jpg\" _src=\"http:\/\/yanxuan.nosdn.127.net\/ca5c07a9abb58032f2d12e257ccbf367.jpg\" style=\"\"\/><\/p><p><img src=\"http:\/\/yanxuan.nosdn.127.net\/549b0e32a35f85fc0c1f34d03c336bcb.jpg\" _src=\"http:\/\/yanxuan.nosdn.127.net\/549b0e32a35f85fc0c1f34d03c336bcb.jpg\" style=\"\"\/><\/p><p><img src=\"http:\/\/yanxuan.nosdn.127.net\/fb29db817a6ae1cd6619260023099369.jpg\" _src=\"http:\/\/yanxuan.nosdn.127.net\/fb29db817a6ae1cd6619260023099369.jpg\" style=\"\"\/><\/p><p><img src=\"http:\/\/yanxuan.nosdn.127.net\/68ec1234fec67d7ba4737ea6129601fd.jpg\" _src=\"http:\/\/yanxuan.nosdn.127.net\/68ec1234fec67d7ba4737ea6129601fd.jpg\"\/><\/p><p><img src=\"http:\/\/yanxuan.nosdn.127.net\/d7eaba1187a93d93031e52662d7e9012.jpg\" _src=\"http:\/\/yanxuan.nosdn.127.net\/d7eaba1187a93d93031e52662d7e9012.jpg\" style=\"\"\/><\/p><p><img src=\"http:\/\/yanxuan.nosdn.127.net\/a9fb5698bdfde2ae6fa8c49b743e113b.jpg\" _src=\"http:\/\/yanxuan.nosdn.127.net\/a9fb5698bdfde2ae6fa8c49b743e113b.jpg\" style=\"\"\/><\/p><p><img src=\"http:\/\/yanxuan.nosdn.127.net\/c8c4352aed20fc8e381e61b75a0df423.jpg\" _src=\"http:\/\/yanxuan.nosdn.127.net\/c8c4352aed20fc8e381e61b75a0df423.jpg\" style=\"\"\/><\/p><p><img src=\"http:\/\/yanxuan.nosdn.127.net\/bda69e3e6128f1ae2aef1d6b6c2a32a9.jpg\" _src=\"http:\/\/yanxuan.nosdn.127.net\/bda69e3e6128f1ae2aef1d6b6c2a32a9.jpg\" style=\"\"\/><\/p><p><img src=\"http:\/\/yanxuan.nosdn.127.net\/607a6bd73635d670d3c0efd5db4494a2.jpg\" _src=\"http:\/\/yanxuan.nosdn.127.net\/607a6bd73635d670d3c0efd5db4494a2.jpg\" style=\"\"\/><\/p><p><img src=\"http:\/\/yanxuan.nosdn.127.net\/bfe7e30663d3d8a2deba97eeb6a9dd33.jpg\" _src=\"http:\/\/yanxuan.nosdn.127.net\/bfe7e30663d3d8a2deba97eeb6a9dd33.jpg\" style=\"\"\/><\/p><p><img src=\"http:\/\/yanxuan.nosdn.127.net\/79991d473d14b4c64054ac43c62acedc.jpg\" _src=\"http:\/\/yanxuan.nosdn.127.net\/79991d473d14b4c64054ac43c62acedc.jpg\" style=\"\"\/><\/p><p><img src=\"http:\/\/yanxuan.nosdn.127.net\/c1f4016c887fb7ec699fb8ac5336625d.jpg\" _src=\"http:\/\/yanxuan.nosdn.127.net\/c1f4016c887fb7ec699fb8ac5336625d.jpg\" style=\"\"\/><\/p><p><img src=\"http:\/\/yanxuan.nosdn.127.net\/3ed3f9a90c5b8b3a20190068aaeaa069.jpg\" _src=\"http:\/\/yanxuan.nosdn.127.net\/3ed3f9a90c5b8b3a20190068aaeaa069.jpg\" style=\"\"\/><\/p><p><img src=\"http:\/\/yanxuan.nosdn.127.net\/ccafa9bae7e5aad763ef6ac20830d1a8.jpg\" _src=\"http:\/\/yanxuan.nosdn.127.net\/ccafa9bae7e5aad763ef6ac20830d1a8.jpg\" style=\"\"\/><\/p><p><img src=\"http:\/\/yanxuan.nosdn.127.net\/9bcb97f02f51d545eff2d186e6480728.jpg\" _src=\"http:\/\/yanxuan.nosdn.127.net\/9bcb97f02f51d545eff2d186e6480728.jpg\" style=\"\"\/><\/p><p><img src=\"http:\/\/yanxuan.nosdn.127.net\/7e7cdbc72ac2358f7243baf320f8db9b.jpg\" _src=\"http:\/\/yanxuan.nosdn.127.net\/7e7cdbc72ac2358f7243baf320f8db9b.jpg\" style=\"\"\/><\/p><p><img src=\"http:\/\/yanxuan.nosdn.127.net\/d4c6ba6d38e2beae0ad248d799021a23.jpg\" _src=\"http:\/\/yanxuan.nosdn.127.net\/d4c6ba6d38e2beae0ad248d799021a23.jpg\" style=\"\"\/><\/p><p><img src=\"http:\/\/yanxuan.nosdn.127.net\/10afa0d6db391623eecaf87fa004dc6d.jpg\" _src=\"http:\/\/yanxuan.nosdn.127.net\/10afa0d6db391623eecaf87fa004dc6d.jpg\" style=\"\"\/><\/p><p><br\/><\/p><p><img src=\"http:\/\/yanxuan.nosdn.127.net\/427865bf514f70b9d3eeca7929a9b754.jpg\" _src=\"http:\/\/yanxuan.nosdn.127.net\/427865bf514f70b9d3eeca7929a9b754.jpg\" style=\"\"\/><\/p><p><img src=\"http:\/\/yanxuan.nosdn.127.net\/6841486484cd3163b8d84856b6090f50.jpg\" _src=\"http:\/\/yanxuan.nosdn.127.net\/6841486484cd3163b8d84856b6090f50.jpg\"\/><\/p>",
                "created_at": "2018-02-01 00:00:00",
                "updated_at": "2018-02-01 00:00:00",
                "deleted_at": null
            },
            {
                "id": 1011004,
                "goods_sn": "1011004",
                "name": "色织精梳AB纱格纹空调被",
                "category_id": 1036000,
                "gallery": "[\"http:\/\/yanxuan.nosdn.127.net\/f7e77331229098060bbacf2fc6c1708b.jpg\", \"http:\/\/yanxuan.nosdn.127.net\/2720383ea168872acc8d492de9573cc6.jpg\", \"http:\/\/yanxuan.nosdn.127.net\/45e4c14029626178419c82f2837f51ca.jpg\", \"http:\/\/yanxuan.nosdn.127.net\/bb6c28d502704d5c1645d066f79bf61d.jpg\"]",
                "keywords": "",
                "brief": "加大加厚，双色精彩",
                "is_on_sale": 1,
                "sort_order": 2,
                "pic_url": "http:\/\/yanxuan.nosdn.127.net\/0984c9388a2c3fd2335779da904be393.png",
                "share_url": "",
                "is_new": 0,
                "is_hot": 1,
                "unit": "件",
                "counter_price": "219.00",
                "retail_price": "199.00",
                "detail": "<p><img src=\"http:\/\/yanxuan.nosdn.127.net\/28680639193b939b5d93cd77b3272a1e.jpg\" _src=\"http:\/\/yanxuan.nosdn.127.net\/28680639193b939b5d93cd77b3272a1e.jpg\" style=\"\"\/><\/p><p><img src=\"http:\/\/yanxuan.nosdn.127.net\/990c9a7781a8ae2b2a08c65c9af7afc7.jpg\" _src=\"http:\/\/yanxuan.nosdn.127.net\/990c9a7781a8ae2b2a08c65c9af7afc7.jpg\" style=\"\"\/><\/p><p><img src=\"http:\/\/yanxuan.nosdn.127.net\/b7ccc07b50f491e94b6187bf49b48820.jpg\" _src=\"http:\/\/yanxuan.nosdn.127.net\/b7ccc07b50f491e94b6187bf49b48820.jpg\" style=\"\"\/><\/p><p><img src=\"http:\/\/yanxuan.nosdn.127.net\/69eb85fd08c9ebce511d13d899d96659.jpg\" _src=\"http:\/\/yanxuan.nosdn.127.net\/69eb85fd08c9ebce511d13d899d96659.jpg\" style=\"\"\/><\/p><p><img src=\"http:\/\/yanxuan.nosdn.127.net\/a96f2f48217b913dc012671ed511d223.jpg\" _src=\"http:\/\/yanxuan.nosdn.127.net\/a96f2f48217b913dc012671ed511d223.jpg\" style=\"\"\/><\/p><p><img src=\"http:\/\/yanxuan.nosdn.127.net\/c94a22b8644fafec3ff27f87dd12771b.jpg\" _src=\"http:\/\/yanxuan.nosdn.127.net\/c94a22b8644fafec3ff27f87dd12771b.jpg\" style=\"\"\/><\/p><p><img src=\"http:\/\/yanxuan.nosdn.127.net\/721b4749caada515bb5e616f41a410d1.jpg\" _src=\"http:\/\/yanxuan.nosdn.127.net\/721b4749caada515bb5e616f41a410d1.jpg\" style=\"\"\/><\/p><p><img src=\"http:\/\/yanxuan.nosdn.127.net\/1215d6badb5a922efaeadd36911a4a3e.jpg\" _src=\"http:\/\/yanxuan.nosdn.127.net\/1215d6badb5a922efaeadd36911a4a3e.jpg\" style=\"\"\/><\/p><p><img src=\"http:\/\/yanxuan.nosdn.127.net\/749a3c6e9228d304806a06e478644ca1.jpg\" _src=\"http:\/\/yanxuan.nosdn.127.net\/749a3c6e9228d304806a06e478644ca1.jpg\" style=\"\"\/><\/p><p><img src=\"http:\/\/yanxuan.nosdn.127.net\/2cc7fd2eadbef5ab061fdf3550962d4e.jpg\" _src=\"http:\/\/yanxuan.nosdn.127.net\/2cc7fd2eadbef5ab061fdf3550962d4e.jpg\" style=\"\"\/><\/p><p><img src=\"http:\/\/yanxuan.nosdn.127.net\/710b9318f02863fe79209e7e6c822a5a.jpg\" _src=\"http:\/\/yanxuan.nosdn.127.net\/710b9318f02863fe79209e7e6c822a5a.jpg\" style=\"\"\/><\/p><p><img src=\"http:\/\/yanxuan.nosdn.127.net\/aaf8500212ec5bf783cb2bc63afbf7f8.jpg\" _src=\"http:\/\/yanxuan.nosdn.127.net\/aaf8500212ec5bf783cb2bc63afbf7f8.jpg\" style=\"\"\/><\/p><p><img src=\"http:\/\/yanxuan.nosdn.127.net\/f9e03dfb8cacda0f8fbbcf0ef20f8a62.jpg\" _src=\"http:\/\/yanxuan.nosdn.127.net\/f9e03dfb8cacda0f8fbbcf0ef20f8a62.jpg\" style=\"\"\/><\/p><p><img src=\"http:\/\/yanxuan.nosdn.127.net\/3fa109d21bda840ac7040b196c13a871.jpg\" _src=\"http:\/\/yanxuan.nosdn.127.net\/3fa109d21bda840ac7040b196c13a871.jpg\" style=\"\"\/><\/p><p><img src=\"http:\/\/yanxuan.nosdn.127.net\/76bfa90446c129fa3eb9f05104e9e778.jpg\" _src=\"http:\/\/yanxuan.nosdn.127.net\/76bfa90446c129fa3eb9f05104e9e778.jpg\" style=\"\"\/><\/p><p><img src=\"http:\/\/yanxuan.nosdn.127.net\/a3b94053478ceb6912a28597c51a3bcb.jpg\" _src=\"http:\/\/yanxuan.nosdn.127.net\/a3b94053478ceb6912a28597c51a3bcb.jpg\" style=\"\"\/><\/p><p><img src=\"http:\/\/yanxuan.nosdn.127.net\/a25bca01f9ad835cd79b1c11ffdb400e.jpg\" _src=\"http:\/\/yanxuan.nosdn.127.net\/a25bca01f9ad835cd79b1c11ffdb400e.jpg\" style=\"\"\/><\/p><p><br\/><\/p>",
                "created_at": "2018-02-01 00:00:00",
                "updated_at": "2018-02-01 00:00:00",
                "deleted_at": null
            },
            {
                "id": 1015007,
                "goods_sn": "1015007",
                "name": "典雅美式全棉刺绣抱枕",
                "category_id": 1008002,
                "gallery": "[\"http:\/\/yanxuan.nosdn.127.net\/013657a5a5faf8a9a7e3f39b5bba4eac.jpg\", \"http:\/\/yanxuan.nosdn.127.net\/d46ba997e163430e43735e4ad1caeff0.jpg\", \"http:\/\/yanxuan.nosdn.127.net\/a90e545295d22de031b10aee631e48fe.jpg\", \"http:\/\/yanxuan.nosdn.127.net\/f7188ec871d1f721f64cbe04860a4fe2.jpg\"]",
                "keywords": "",
                "brief": "典雅毛线绣，精致工艺",
                "is_on_sale": 1,
                "sort_order": 4,
                "pic_url": "http:\/\/yanxuan.nosdn.127.net\/a2045004de8a6225289376ad54317fc8.png",
                "share_url": "",
                "is_new": 0,
                "is_hot": 0,
                "unit": "件",
                "counter_price": "79.00",
                "retail_price": "59.00",
                "detail": "<p><img src=\"http:\/\/yanxuan.nosdn.127.net\/66640f55aeb668ac9df6e26b6b30adb5.jpg\" _src=\"http:\/\/yanxuan.nosdn.127.net\/66640f55aeb668ac9df6e26b6b30adb5.jpg\"\/><\/p><p><img src=\"http:\/\/yanxuan.nosdn.127.net\/42852faba5623c6dc5be451d80e5df03.jpg\" _src=\"http:\/\/yanxuan.nosdn.127.net\/42852faba5623c6dc5be451d80e5df03.jpg\" style=\"\"\/><\/p><p><img src=\"http:\/\/yanxuan.nosdn.127.net\/48ce93c6f6a731778c505442f163b09e.jpg\" _src=\"http:\/\/yanxuan.nosdn.127.net\/48ce93c6f6a731778c505442f163b09e.jpg\" style=\"\"\/><\/p><p><img src=\"http:\/\/yanxuan.nosdn.127.net\/02a3abee9bb3e22f27781ced8774d1ab.jpg\" _src=\"http:\/\/yanxuan.nosdn.127.net\/02a3abee9bb3e22f27781ced8774d1ab.jpg\"\/><\/p><p><img src=\"http:\/\/yanxuan.nosdn.127.net\/c62a27145e1045879e3f2b97b9f86b4d.jpg\" _src=\"http:\/\/yanxuan.nosdn.127.net\/c62a27145e1045879e3f2b97b9f86b4d.jpg\" style=\"\"\/><\/p><p><img src=\"http:\/\/yanxuan.nosdn.127.net\/48baaafe4ea4c32242c57e58ce8e139f.jpg\" _src=\"http:\/\/yanxuan.nosdn.127.net\/48baaafe4ea4c32242c57e58ce8e139f.jpg\"\/><\/p><p><img src=\"http:\/\/yanxuan.nosdn.127.net\/99549f0375b108240866a09a0a2527d7.jpg\" _src=\"http:\/\/yanxuan.nosdn.127.net\/99549f0375b108240866a09a0a2527d7.jpg\" style=\"\"\/><\/p><p><img src=\"http:\/\/yanxuan.nosdn.127.net\/341529ba80d91c5304680be8f524a626.jpg\" _src=\"http:\/\/yanxuan.nosdn.127.net\/341529ba80d91c5304680be8f524a626.jpg\" style=\"\"\/><\/p><p><img src=\"http:\/\/yanxuan.nosdn.127.net\/b15e35e9d8c04288dfb7546b1f743c17.jpg\" _src=\"http:\/\/yanxuan.nosdn.127.net\/b15e35e9d8c04288dfb7546b1f743c17.jpg\" style=\"\"\/><\/p><p><img src=\"http:\/\/yanxuan.nosdn.127.net\/2c0ebf7949133cb382b6bf18c8a5a1c0.jpg\" _src=\"http:\/\/yanxuan.nosdn.127.net\/2c0ebf7949133cb382b6bf18c8a5a1c0.jpg\" style=\"\"\/><\/p><p><img src=\"http:\/\/yanxuan.nosdn.127.net\/bfd25d0fa6dc13a335877360e3dab8d1.jpg\" _src=\"http:\/\/yanxuan.nosdn.127.net\/bfd25d0fa6dc13a335877360e3dab8d1.jpg\" style=\"\"\/><\/p><p><img src=\"http:\/\/yanxuan.nosdn.127.net\/dbcc420cef18e4a43589198ebfcc4fd1.jpg\" _src=\"http:\/\/yanxuan.nosdn.127.net\/dbcc420cef18e4a43589198ebfcc4fd1.jpg\" style=\"\"\/><\/p><p><img src=\"http:\/\/yanxuan.nosdn.127.net\/15aa3e3ed45714d29ca062499db930ea.jpg\" _src=\"http:\/\/yanxuan.nosdn.127.net\/15aa3e3ed45714d29ca062499db930ea.jpg\" style=\"\"\/><\/p><p><img src=\"http:\/\/yanxuan.nosdn.127.net\/ab6963b4e529810577f3e428c9d10af6.jpg\" _src=\"http:\/\/yanxuan.nosdn.127.net\/ab6963b4e529810577f3e428c9d10af6.jpg\" style=\"\"\/><\/p><p><br\/><\/p>",
                "created_at": "2018-02-01 00:00:00",
                "updated_at": "2018-02-01 00:00:00",
                "deleted_at": null
            }
        ],
        "first_page_url": "http:\/\/localhost\/api\/goods?page=1",
        "from": 1,
        "last_page": 16,
        "last_page_url": "http:\/\/localhost\/api\/goods?page=16",
        "next_page_url": "http:\/\/localhost\/api\/goods?page=2",
        "path": "http:\/\/localhost\/api\/goods",
        "per_page": 15,
        "prev_page_url": null,
        "to": 15,
        "total": 239
    },
    "code": 200,
    "msg": "OK"
}
```

### HTTP Request
`GET api/goods`


<!-- END_6b761fde7166aca675e449a990c866d9 -->

<!-- START_c52a2f079537f7888c3ad4d360d99442 -->
## api/goods/{id}
> Example request:

```bash
curl -X GET \
    -G "http://base.dev.com/api/goods/1" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json" \
    -H "Authorization: Bearer {token}"
```

```javascript
const url = new URL(
    "http://base.dev.com/api/goods/1"
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
    "code": 0,
    "msg": "No query results for model [App\\Repository\\Models\\Goods] 1"
}
```

### HTTP Request
`GET api/goods/{id}`


<!-- END_c52a2f079537f7888c3ad4d360d99442 -->

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
    "code": 0,
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
    -G "http://base.dev.com/api/t1?location_id=dolorum&user_id=me&page=4" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json" \
    -H "Authorization: Bearer {token}" \
    -d '{"user_id":9,"room_id":"neque","forever":false}'

```

```javascript
const url = new URL(
    "http://base.dev.com/api/t1"
);

let params = {
    "location_id": "dolorum",
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
    "room_id": "neque",
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
    "code": 0,
    "msg": "Target class [App\\Services\\User\\UserService] does not exist."
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
    "code": 0,
    "msg": "Target class [App\\Services\\User\\UserService] does not exist."
}
```

### HTTP Request
`GET api/logout`


<!-- END_00e7e21641f05de650dbe13f242c6f2c -->


