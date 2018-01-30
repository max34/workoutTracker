<html>
    <head>
        <title>@yield('title')</title>
        <!-- Latest compiled and minified CSS -->
        <link rel="stylesheet" href="{{asset('css/bootstrap.min.css')}}">
        <link rel="stylesheet" href="{{asset('css/main.css')}}">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
    </head>
    <body>
    <nav class="navbar navbar-dark navbar-expand-lg bg-dark fixed-bottom">

            <div class="navbar-header">
                <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#expanded-menu" aria-expanded="false" aria-controls="expanded-menu">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <a class="navbar-brand" href="home">Get Fit</a>
            </div>

            <div class="collapse navbar-collapse navbar-left"  id="expanded-menu">
                <ul class="nav navbar-nav">
                    <li class="nav-item active">
                        <a class="nav-link" href="home">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="about">About</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="contact">Contact</a>
                    </li>
                    <li class="nav-item dropup">
                        <a class="nav-link dropdown-toggle" role="button" href="" id="navbarDropdown" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Members</a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item" href="login">Login</a>
                            <a class="dropdown-item" href="register">Register</a>
                        </div>
                    </li>
                </ul>
            </div>
    </nav>
        @yield('content')
    <script src="http://code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script>
        <script src="{{asset('js/bootstrap.min.js')}}"></script>
        <script src="{{asset('js/main.js')}}"></script>
    </body>
</html>