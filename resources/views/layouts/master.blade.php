<html>
    <head>
        <title>@yield('title')</title>
    </head>
    <body dir="rtl">
        @section('sidebar')
            here is the content of the sidebar
        @show

        <div class="container"> 
            @yield('content')
        </div>
    </body>
</html>