<!DOCTYPE html>
<html>
    <head>
        <link rel="stylesheet" href="/app.css">
        <script src="https://kit.fontawesome.com/89f724c9b8.js" crossorigin="anonymous"></script>
    </head>
    <body>
        @include('components/navigate')
        
        <div style="width:70%; margin-left: 15%; padding-top: 20px;">
            <div style="position: relative; height: 60px; padding: 20px 0px; margin-bottom: 20px; border-radius: 23px; background-color: {{$title[0]['theme']}}">
                <span class="genreTitle">{{$title[0]['name']}}</span>
            </div>
            <i style="color:gray;">//showing {{count($songsOrdAlph)}} songs</i>
            @if(count($songsOrdAlph) < 1)
                <div style="padding: 15px 0px; width: 100%; border: 1px solid {{$title[0]['theme'] ?: 'gray'}}; border-radius: 23px;">
                        <div style="width: 100%; text-align: center; display: inline-block">Nothing Here Yet!</div>
                </div>
            @endif
            <div style="height: 500px; overflow-y: scroll; ">
            @foreach($songsOrdAlph as $song)
            <div style="display:flex; align-items: flex-start;"> 
                <div style="display: inline-block; float: left; width:5%; height:50px; border-radius: 23px 0px 0px 23px; background-color: {{$themes[$song->genre_id -1]->theme}};"></div>
                
                <div style="width: 92%; height:48px; display:flex; align-items: flex-start; margin-bottom: 5px; border: 1px solid {{$themes[$song->genre_id -1]->theme}};">
                    
                    <div style="display: inline-block; padding: 15px 0px; width: 50%">
                        <a href="/songs/{{$song->id}}" style="width: 100%; text-align: center; display: inline-block">{{$song->name}}</a>
                    </div>

                    <div style="display: inline-block; padding: 15px 0px; width: 40%; border-left: 1px solid {{$themes[$song->genre_id -1]->theme}};">
                        <a href="/artists/{{$song->artist_id}}" style="width: 100%; text-align: center; display: inline-block">{{$artists[$song->artist_id -1]->name}}</a>
                    </div>

                    <div style="display: inline-block; padding: 15px 0px; width: 10%; border-left: 1px solid {{$themes[$song->genre_id -1]->theme}};">
                        <span style="width: 100%; text-align: center; display: inline-block">{{floor($song->duration/60) . ':' . str_pad( ($song->duration/60 - floor($song->duration/60) )*60 ,2,'0',STR_PAD_LEFT) }}</span>
                    </div>

                </div>

                <a href='/sessionAdd/{{$song->id}}' style="display: inline-block; padding: 15px 0px; width: 3%; border-radius: 0px 23px 23px 0px; background-color: {{$themes[$song->genre_id -1]->theme}};">
                    <div style="text-align: center; width: 100%; line-height: 20px; border-radius: 10px; color:white; background-color:{{$themes[$song->genre_id -1]->theme}};">+</div>
                </a>
            </div>
            @endforeach
            </div>
        </div>
        @if(Session::get('playlist'))
            @include('components/tempPlaylist')
        @endif
    </body>
</html>