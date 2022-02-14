<!DOCTYPE html>
<html>
    <head>
        <link rel="stylsheet" href="/app.css"></link>
    </head>
    <body>
        <div>This should clear the session/cache</div>
        {{Session::forget(0);}}
        @include('navigate')
    </body>

</html>