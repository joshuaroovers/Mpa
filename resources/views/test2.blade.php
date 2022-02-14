<!DOCTYPE html>
<html>
    <head></head>
    <body>
        <div>This should have stored a number in the cache/session</div>
        <?php
            Session::put(0, rand(0,100));
        ?>
        @include('navigate')
    </body>

</html>