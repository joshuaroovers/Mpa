<!DOCTYPE html>
<html>
    <head>
        <link rel="stylesheet" href="/app.css">
        
    </head>
    <body>
        @include('components/navigate')
        
        <div style="width:75%; margin-left: 12.5%; padding-top: 20px;">
            @foreach($songs as $song)
            <div> 
                <div style="display: inline-block; float: left; width:50px; height:50px; border-radius: 23px 0px 0px 23px; background-color: {{$themes[$song->genre_id -1]->theme}};"></div>
                <div style="height:48px; display: inline-block; margin-bottom: 5px; border: 1px solid {{$themes[$song->genre_id -1]->theme}};">
                    
                    <div style="display: inline-block; padding: 15px 0px; width: 500px">
                        <a href="songs/{{$song->name}}" style="width: 100%; text-align: center; display: inline-block">{{$song->name}}</a>
                    </div>

                    <div style="display: inline-block; padding: 15px 0px; width: 500px; border-left: 1px solid {{$themes[$song->genre_id -1]->theme}};">
                        <a href="songs/{{$song->artist}}" style="width: 100%; text-align: center; display: inline-block">{{$artists[$song->artist_id -1]->name}}</a>
                    </div>

                </div>
            </div>
            @endforeach
        </div>
    </body>
</html>