<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">


        <style>
            body {
                font-family: 'Nunito', sans-serif;
            }
        </style>
    </head>
    <body>
    {{Session::get(0,'expired!')}}
        <h1 style="font-size: 160px; color: cornflowerblue; width: 50%; margin: auto; margin-top: 200px; text-align: center;">Welcome</h1>
            @include('components/navigate')
    </body>
</html>
