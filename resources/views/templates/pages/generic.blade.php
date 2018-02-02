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
        <header class="index">
            <div class="logo">
                <a href="/">
                    <img src="https://lh3.googleusercontent.com/oKsgcsHtHu_nIkpNd-mNCAyzUD8xo68laRPOfvFuO0hqv6nDXVNNjEMmoiv9tIDgTj8=w170" alt="logo">
                </a>
            </div>
        </header>

            <main>
                @yield('content')
            </main>

            <footer>
                @yield('footer')
            </footer>
        </div>
    </body>
</html>