<!DOCTYPE html>
<html lang="{{ config('app.locale') }}">
    <head>
        <meta charset="UTF-8">
        <title>New Hope Dasboard</title>
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <link rel="shortcut icon" href="/images/favicon.ico" />
        {!! Html::style('css/app.css') !!}
    <body>
        <div id="app">
            <router-view> </router-view>
        </div>
        {!! Html::script('js/app.js') !!}
    </body>
</html>
