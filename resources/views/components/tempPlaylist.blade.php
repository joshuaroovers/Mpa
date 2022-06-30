<div style="position:fixed; bottom: 0; right: 0; width: 14%; border:gray 1px solid; border-radius: 10px 0px 0px 0px;">
    <div style="display:flex; background-color: gray; border-radius: 10px 0px 0px 0px; height: 20px; padding: 10px;">
        <div style="width: 30%; display:inline-block;">{{count($session)}}</div>
        @php
            $totalDuration = 0;
            $indexById = array();                                            //fix #2 (current)
            foreach($songsOrdId as $song){                                   //redo the array so that index and id do match (-1 cuz I don't wanna change the code)
                $indexById[$song->id -1] = $song;                            //
            }                                                                //don't think this is the best solution but oh well.
            foreach($session as $item){
                /* foreach($songsOrdId as $song){                            //fix #1
                    if($song->id = $item){                                   //another foreach to compare the id
                        $totalDuration = $totalDuration + $song->duration;   //works but only practical for duration
                    }                                                        //can't really use it for the other atributes
                } */
                
                $totalDuration = $totalDuration + $indexById[$item -1]->duration;
            }
            
        @endphp              
        <a href="/sessionSave" style="width: 40%; text-align: center; background-color: lightskyblue; display: inline-block;  padding: 5px 0px 5px 0px; margin-top: -5px; height: 20px; border-radius: 7px;">save</a>
        <div title='{{$totalDuration}} seconds' style="width: 30%; text-align: end; display:inline-block;">@if($totalDuration > 3599){{floor($totalDuration/3600) . ':' . str_pad(floor( ($totalDuration - floor($totalDuration/3600)*3600)/60 ) ,2,'0',STR_PAD_LEFT)}}@else{{floor($totalDuration/60)}}@endif{{':' . str_pad( $totalDuration - (floor($totalDuration/60)*60) ,2,'0',STR_PAD_LEFT)}}</div>
    </div>
    <div style="max-height: 600px; overflow-y: scroll; overflow-x: hidden;">
        @php($loopStep = 0)
        @foreach($session as $item)
        
            <div class="playlistItem" style="display:flex; position:relative; padding: 10px 5px 10px 10px;">
                <div style="display: inline-block; text-overflow: ellipsis; overflow-x: hidden; white-space: nowrap; width: 70%; height: 20px" >{{$indexById[$item -1]->name}}</div>
                <div style="display: inline-block; width: 30%; text-align: center;">{{floor($indexById[$item -1]->duration/60) . ':' . str_pad( $indexById[$item -1]->duration - (floor($indexById[$item -1]->duration/60)*60) ,2,'0',STR_PAD_LEFT) }}</div>
                <div title="{{$indexById[$item -1]->name}}" style="width: calc(100% - 10px); height: 20px; position: absolute; background-color: rgba(200,200,200,0.4); margin: -10px 0px 0px -10px;  padding: 10px 5px 10px 10px;">
                    <a href='/sessionDeleteItem/{{$loopStep}}' style="width: 30%; margin-top: -7px; margin-left: calc(35% - 12px); border-radius: 7px; padding: 7px; background-color: rgb(250,0,0); text-align: center;">delete</a>
                </div>
            </div>
            @php($loopStep++)
        @endforeach

    </div>
</div>