<!DOCTYPE html>
<html>
    <head>
        <link rel="stylesheet" href="/app.css">
        
    </head>
    <body>
        @include('components/navigate')
        
        <div style="width:75%; margin-left: 12.5%; padding-top: 20px;">                                  <!-- why do I now need an index while using where()  -->
            <div style="position: relative; height: 60px; padding: 20px 0px; margin-bottom: 20px; border-radius: 23px; background-color: {{$genre[0]->theme}}">
                <span class="genreTitle">{{$song[0]->name}}</span>
            </div>
            
            <div style="padding: 15px 0px; width: 100%; border: 1px solid {{$genre[0]->theme}}; border-radius: 23px;">
                <div style="width: 50%; margin-left:25%; display: inline-block; margin-bottom: 5px; border: 1px solid {{$genre[0]->theme}};">
                
                    <div style="text-align: center; display: inline-block; padding: 15px 0px; width: 100%;">
                        by {{$artist[0]->name}}
                    </div>
                    <div style="text-align: center; display: inline-block; padding: 15px 0px; width: 100%;">
                        duration: {{floor($song[0]->duration/60) . ':' . str_pad( ($song[0]->duration/60 - floor($song[0]->duration/60) )*60 ,2,'0',STR_PAD_LEFT) }}
                    </div>
                
                </div>
            </div>
            
            
            <div> 
                
            </div>
            
        </div>
    </body>
</html>