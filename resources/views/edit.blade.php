<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
        <script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
        <script>
        $(function() {
            var response = $('#response').val();
            var response = response.slice( 0, -1 );
            $("#response").text(response);
        });
        
        </script>
    </head>
    <body>
        <div><a href="{{ url('/') }}"> 一覧 </a></div>
        <form action="/edit/{{ $json->id }}" method="post">
        @csrf
            <label for="name">名前</label>
            <input id="name" name = "name" value="{{ $json->name }}">
            <label for="response">レスポンス</label>
            <textarea row="50" col="50" id="response" name = "response">{{ $json->response }}"</textarea>
            <input type="submit" value="button">
        </form>
    </body>
</html>
