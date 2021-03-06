<!DOCTYPE html>
<html lang="ja">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>memoapp</title>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    </head>
    <body>
        <header class="nav navbar-light bg-light">
            <div class="container">
                <a class="navbar-brand" href="{{route('top')}}">
                    Hacksレビュー
                </a>
            </div>
        </header>
        <main>
            @yield('content')
        </main>
        <footer class="footer bg-dark">
            <div class="container">
                <p class="text-white text-right">
                    @kyohei-yamamoto All right reserved
                </p>
            </div>
        </footer>
    </body>
</html>
