 <nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm">
            <div class="container">
                <a class="navbar-brand" href="{{ url('/') }}">
                    {{-- {{ config('app.name', 'Laravel') }} --}}
                    <img src="{{ url('images/new/logoipduv.png') }}" style="width: 50%" />
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    {{-- <ul class="navbar-nav mr-auto">
                        <li class="nav-item">
                                 <a class="nav-link" href="{{ url('/') }}">Blog</a>
                        </li>
                    </ul> --}}

                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ml-auto">
                        <!-- Authentication Links -->
                        @guest
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                            </li>
                            @if (Route::has('register'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                                </li>
                            @endif
                        @else
                            @can('personas.index')
                                    <li class="nav-item {{ request()->is('personas')? 'active':'' }}">
                                        <a class="nav-link {{ request()->is('personas')? 'btn btn-outline-success':'' }}" href="{{ route('personas.index') }}">Personas</a>
                                    </li>
                                @endcan
                                @can('users.index')
                                <li class="nav-item  {{ request()->is('admin/users')? 'active':'' }}">
                                    <a class="nav-link {{ request()->is('admin/users')? 'btn btn-outline-success':'' }}" href="{{ route('users.index') }}">Usuarios</a>
                                </li>
                               @endcan
                                @can('roles.index')
                                    <li class="nav-item  {{ request()->is('admin/roles')? 'active':'' }}">
                                        <a class="nav-link {{ request()->is('admin/roles')? 'btn btn-outline-success':'' }}" href="{{ route('roles.index') }}">Roles</a>
                                    </li>
                                @endcan



                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }} <span class="caret"></span>
                                </a>

                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                        @endguest
                    </ul>
                </div>
            </div>
        </nav>
