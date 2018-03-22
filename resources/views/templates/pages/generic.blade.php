@include('templates.header')
@include('templates.top')
@include('templates.footer')

<!DOCTYPE html>
<html lang="en">
    <head>
        @yield('header')
    </head>
    <body>
        @yield('top')

        <div class="container">

            <main class="py-4">
                @yield('content')
            </main>

            <footer>
                @yield('footer')
            </footer>

        </div>
    </body>
</html>