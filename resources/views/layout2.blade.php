<!DOCTYPE html>
<html lang="en">
<head>
    <title>GROW Distance Learning Registration</title>


    <script src="https://code.jquery.com/jquery-3.5.1.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
            integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo"
            crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"
            integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6"
            crossorigin="anonymous"></script>
    <script src="{{ asset('/js/app.js') }}"></script>

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"
          integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh"
          crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.13.0/css/all.css">
    <link rel="stylesheet" href="{{ asset('/css/app.css') }}">

</head>

<body>
<!-- Top nav bar -->
<nav class="navbar navbar-expand-md navbar-dark fixed-top bg-dark">
    <a href="{{ route('dashboard') }}" class="navbar-brand">GROW Distance Learning Registration</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse"
            aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarCollapse">
        <ul class="navbar-nav mr-auto">
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle {{ strpos( $_SERVER['REQUEST_URI'], 'forms') != false ? ' active' : ''}}" data-toggle="dropdown" href="#" role="button"
                       aria-haspopup="true" aria-expanded="false">Forms
                    </a>
                    {{--                        <div class="dropdown-menu dropdown-menu-right">--}}
                    {{--                            <a href="{{route('forms.create')}}" class="dropdown-item">Create</a>--}}
                    {{--                            <a href="{{ route('forms.index') }}" class="dropdown-item">Manage</a>--}}
                    {{--                        </div>--}}
                </li>
        </ul>
        <ul class="navbar-nav justify-content-end">
            <li><a href="/signin" class="nav-link">Staff Login</a></li>
        </ul>
    </div>
</nav>

<div class="wrapper">
    <!-- Page Content -->
    <main role="main" class="container">
        @if(session('error'))
            <div class="alert alert-danger alert-dismissible alert-dismissible fade show" role="alert">
                <p class="mb-3">{{ session('error') }}</p>
                @if(session('errorDetail'))
                    <pre class="alert-pre border bg-light p-2"><code>{{ session('errorDetail') }}</code></pre>
                @endif
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
        @endif

        @if ($errors->any())
            <div class="alert alert-danger alert-dismissible alert-dismissible fade show" role="alert">
                <p>Check below to  fix errors in your submission</p>
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
        @endif

        @if(session()->has('message'))
            <div class="alert alert-success alert-dismissible alert-dismissible fade show" role="alert">
                {{ session()->get('message') }}
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
        @endif

        @yield('content')
    </main>
</div>
</body>
</html>
