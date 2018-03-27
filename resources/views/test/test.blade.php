<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="It's for Wepeiyang Management">
    <meta name="author" content="TAKOOCTOPUS">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>
    <link href="/css/app.css" rel="stylesheet">
</head>
<body>
Test
<div id="app" class="container">
<!-- let people make clients -->
<passport-clients></passport-clients>

<!-- list of clients people have authorized to access our account -->
<passport-authorized-clients></passport-authorized-clients>

<!-- make it simple to generate a token right in the UI to play with -->
<passport-personal-access-tokens></passport-personal-access-tokens>
</div>
<script src="/js/app.js"></script>
</body>
<script>
    var config = {
        headers: {'Authorization': 'Bearer eyJ0eXAiOiJKV1QiLCJhbGciOiJSUzI1NiIsImp0aSI6IjNjOTI3ZWJmMTk0NTRkZmNmZjZjNGFhYWJkMjdhNGRlNTk2Y2JhMTNiMmJhYTZkYzU4YjhlZGEwM2Q4ZWIzMjA5Yzk4NDJjODNhZjg5MTE1In0.eyJhdWQiOiIxIiwianRpIjoiM2M5MjdlYmYxOTQ1NGRmY2ZmNmM0YWFhYmQyN2E0ZGU1OTZjYmExM2IyYmFhNmRjNThiOGVkYTAzZDhlYjMyMDljOTg0MmM4M2FmODkxMTUiLCJpYXQiOjE0OTA4Nzc4NTAsIm5iZiI6MTQ5MDg3Nzg1MCwiZXhwIjoxNTIyNDEzODQ5LCJzdWIiOiIxIiwic2NvcGVzIjpbXX0.eSdUCP482_xzUEzUJA53h7UEeWoGbVy2nQfeLtJEZg5M1kUFIRB5CPF4x1vZnvgOjQYZWWK2ots6UIEqyJ9JpnwJTZnR9XtI3roMvcCVLJ-SDSZDsM3PeOBDKsinq87dWdSUyrj4459hYmZFtEqJlUnfAyqmDDgxtHJOVU8jqPa3DZm9hoAtAee-Dd5-F8Sia8MZ-PDBoZYwYmqSJZlWPZgsM8_LI9hb6sFmmx_YkF4usEBYt_3XUkw2lXweAKmHR73VZPUk0ftETcrCCzJ-1kmVU9QXEu-2RbwvBrBvi5LGSTAy1nicT331yFAfi6iulsgYTlMnpxX-xjNoY3_dqQNYZBru6xCQSw6nqcRKKLiRkyHJ-BCyUj9lfKzpyE_OlPcPSMlHAcFhNSA8dNPTr_i42TBzlbjiLwW_IiXmj7Duk_bdlv3BOUXI3se8m3Jsx4drr2YsCWw4VHhGed2f92ZOgMEPrd4O79KsqTcQTk4Sckv3shk6SpFam95q44e666H_qJZr3h9WV3JslQWvpt8rnfMdQ05YcWTC44nejnvXlBj23GiyRQmKgGrubzw3QdwxCIUeNG9579p-_SJVKEH_QfqW6VaqZu5um6n5kam9WcXJjGgI6pJLrAwkcWilzhc93-VJWgA0fYYEewjpTR9XVUUv7xTZ2Ad8YtJ49hY'}
    };
    axios.get('/api/user',config)
        .then(response => {
        console.log(response.data);
    });
</script>
</html>