<!DOCTYPE html>
<html>
    <head>
        <title>Architecture Demo</title>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
        <style media="screen">
            .status-btn{
                width: 100px;
            }
            .main-container {
                margin-top: 30px;
            }
        </style>
    </head>
    <body>

        <div id="app" class="container main-container">
            @yield('templates')
            @yield('content')
        </div>

        <script type="text/javascript" src="https://code.jquery.com/jquery-2.1.4.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>

        <!-- for mvvm demo -->
        <script src="http://cdnjs.cloudflare.com/ajax/libs/vue/1.0.13/vue.js" type="text/javascript"></script>
        @yield('after-scripts')
    </body>
</html>
