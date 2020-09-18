<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>



    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <style media="screen">
  .check {
    margin-left: 11px;
    margin-right: 10px;
  }
  </style>
    @yield('styles')
</head>
<body>
    <div id="app">

        @include('partials.menu')
        <main class="py-4">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-md-12">

                                @if ($errors->any())
                                  <div class="alert alert-danger alert-dismissible fade show" role="alert">
                                         @foreach ($errors->all() as $error )
                                            {{ $error }} <br>
                                        @endforeach
                                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div>

                                @endif
                                @if (session('status'))
                                    <div class="alert alert-success" role="alert">
                                        {{ session('status') }}
                                    </div>
                                @endif
                                 @if (session('info'))
                                    <div class="alert alert-success alert-dismissible fade show" role="alert">
                                         {{ session('info') }}
                                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div>
                                @endif

                                 @yield('content')

                    </div>
                </div>
            </div>

        </main>
    </div>
    @include('partials.footer')
     <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" ></script>
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>

    @yield('scripts')
</body>
</html>
