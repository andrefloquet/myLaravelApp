<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
        <title>My Laravel App - Andre Floquet</title>
    </head>
    <body>
        <header>
            @include("inc.navbar")
        </header>
        <section class="content">
            <div class="container">
                @include("inc.messages")
                @yield("content")
            </div>
        </section>
        <br /><br />
        <!--footer style="color: #343A40; text-align: center; "-->
        <footer style="text-align: center;">
            &copy; Copyrigth Andre Floquet
        </footer>     
    </body>
</html>
