<!DOCTYPE html>
<html>
    <head>
        <link rel="stylesheet" href="/app.css">
        
    </head>
    <body>
        @include('components/navigate')
        
        <div style="width:75%; margin-left: 12.5%; padding-top: 20px;">
            <div style="position: relative; height: 60px; padding: 20px 0px; margin-bottom: 20px; border-radius: 23px; background-color: {{$title[0]['theme']}}">
                <span class="genreTitle">{{$title[0]['name']}}</span>
            </div>
            @if(count($songs) < 1)
                <div style="padding: 15px 0px; width: 100%; border: 1px solid {{$title[0]['theme'] ?: 'gray'}}; border-radius: 23px;">
                        <div style="width: 100%; text-align: center; display: inline-block">Nothing Here Yet!</div>
                </div>
            @endif
            @foreach($songs as $song)
            <div> 
                <div style="display: inline-block; float: left; width:50px; height:50px; border-radius: 23px 0px 0px 23px; background-color: {{$themes[$song->genre_id -1]->theme}};"></div>
                <div style="height:48px; display: inline-block; margin-bottom: 5px; border: 1px solid {{$themes[$song->genre_id -1]->theme}};">
                    
                    <div style="display: inline-block; padding: 15px 0px; width: 500px">
                        <a href="/songs/{{$song->id}}" style="width: 100%; text-align: center; display: inline-block">{{$song->name}}</a>
                    </div>

                    <div style="display: inline-block; padding: 15px 0px; width: 400px; border-left: 1px solid {{$themes[$song->genre_id -1]->theme}};">
                        <a href="/artists/{{$song->artist_id}}" style="width: 100%; text-align: center; display: inline-block">{{$artists[$song->artist_id -1]->name}}</a>
                    </div>

                    <div style="display: inline-block; padding: 15px 0px; width: 100px; border-left: 1px solid {{$themes[$song->genre_id -1]->theme}};">
                        <span style="width: 100%; text-align: center; display: inline-block">{{floor($song->duration/60) . ':' . str_pad( ($song->duration/60 - floor($song->duration/60) )*60 ,2,'0',STR_PAD_LEFT) }}</span>
                    </div>

                </div>
            </div>
            @endforeach
        </div>
    </body>
</html>