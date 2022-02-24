<!DOCTYPE html>
<html>
    <head>
        <link rel="stylesheet" href="/app.css">
        
    </head>
    <body>
        @include('components/navigate')

        @foreach($genres as $genre)
            <a href="#"  class="genreButton" style="background-color: {{$genre->theme}}">
                <div class="genreTitle">{{$genre->name}}</div>
            </a>
        @endforeach
       
    </body>
</html>