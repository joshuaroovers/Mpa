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
                    <div style="width: 100%; text-align: center; display: inline-block">by {{$artist[0]->name}}</div>
            </div>
            
            
            <div> 
                <div style="height:48px; display: inline-block; margin-bottom: 5px; border: 1px solid {{$genre[0]->theme}};">
                    
                    <div style="display: inline-block; padding: 15px 0px; width: 500px">

                    </div>

                </div>
            </div>
            
        </div>
    </body>
</html>