<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
    </head>
    <body>
        <div><a href = "{{ url('/createview') }}">新規登録</a></div>
        @foreach ($jsons as $json)
        <div>
            <div>{{ $json->id }}</div>
            <div><a href="{{ url('/editview', $json->id) }}">{{ $json->name }}</a></div>
            <div>{{ $json->response }}</div>
        </div>
        @endforeach
    </body>
</html>
