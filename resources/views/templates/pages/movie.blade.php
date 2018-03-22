@include('templates.header')
<!DOCTYPE html>
<html lang="en">
    <head>
        @yield('header')
    </head>
    <body>
        @yield('top')

        <main class="py-4">
            <main>
                @yield('content')
            </main>

            <footer>
                @yield('footer')
            </footer>
        </div>
    </body>
</html>