<!DOCTYPE html>
<html>
    <head>
        <link rel="stylesheet" href="/app.css">
    </head>
    <body>
        @include('components/navigate')
        <div>This should have stored a number in the cache/session</div>
        <?php
            
            /* $testVar = array(rand(1,17),rand(1,17),rand(1,17),rand(1,17)); */
            $testVar = array();
            foreach($songs as $song)
            {
                $x = $song->id;
                array_push($testVar, $x);
            }
            Session::put('playlist',$testVar);
            Session::save();
            $anotherTestVar = implode(',',$testVar);
            echo('added ' . $anotherTestVar . ' to the session');
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
        
    </body>
</html>