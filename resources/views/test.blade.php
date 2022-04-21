<!DOCTYPE html>
<html>
    <head>
        <link rel="stylesheet" href="/app.css">
    </head>
    <body>
        @include('components/navigate')
        <div>This should clear the session/cache</div>
        {{Session::forget(0);}}
        
    </body>
</html>