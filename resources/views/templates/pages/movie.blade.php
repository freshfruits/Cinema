@include('templates.header')
<!DOCTYPE html>
<html lang="en">
    <head>
        @yield('header')
    </head>
    <body>
        @yield('top')

        <div class="container">
            <main>
                @yield('content')
            </main>

            <footer>
                @yield('footer')
            </footer>
        </div>
    </body>
</html>