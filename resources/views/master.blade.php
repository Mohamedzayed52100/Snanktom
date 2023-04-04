<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>

    <h1>{{ env('APP_NAME') }}</h1>
    <h1>{{ config('app.locale') }}</h1>
    <h1>This is The Header </h1>

    @yield('content')



    <h1>This is The Footer </h1>
</body>
</html>