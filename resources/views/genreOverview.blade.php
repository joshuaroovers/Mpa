<!DOCTYPE html>
<html>
    <head>
        <link rel="stylesheet" href="/app.css">
        
    </head>
    <body>
        @include('components/navigate')

        <div style="width:75%; margin-left: 12.5%; padding-top: 20px;">
            @foreach($genres as $genre)
                <a href="genreOverview/{{$genre->name}}"  class="genreButton" style="background-color: {{$genre->theme}}">
                    <div class="genreTitle">{{$genre->name}}</div>
                </a>
            @endforeach
        </div>
    </body>
</html>