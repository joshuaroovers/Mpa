<!DOCTYPE html>
<html>
    <head></head>
    <body>
        <div>This should have stored a number in the cache/session</div>
        <?php
            Session::put(0, rand(0,100));
        ?>
        @foreach($songs as $song)
            <div>
                <div>{{$song->name}}</div>
                <div>{{$song->duration}}</div>
            </div>
        @endforeach
        @foreach($genres as $genre)
            <div>
                <div>{{$genre->name}}</div>
            </div>
        @endforeach
        @include('components/navigate')
    </body>

</html>