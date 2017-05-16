<!doctype html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>@yield('title') &mdash; Philosophy Blog</title>

        <link rel="stylesheet" href="{{ theme('css/main.css') }}">
        <script src="{{ theme('js/all.js') }}"></script>
    </head>
    <body>

        <!-- Sidebar -->
          <div id="sidebar">
            <div class="inner">

              <!-- Search -->
                <div id="" class="alt">
                <div style="float:left;"><h2>Admin Panel</h2></div>

                <div style="float:right; margin:0; margin-left:auto"><h2 style="float:right; margin:0;" class="navbar-text">Hello, {{ $admin->name }}</h2></div>
              </div>

              <!-- Menu -->
                <nav id="menu">
                  <ul>
                    <li><a href="/">Homepage</a></li>
                    <li><a href="{{ route('backend.dashboard') }}">Dashboard</a></li>
                    <li><a href="{{ route('backend.users.index') }}">Users</a></li>
                    <li><a href="{{ route('backend.pages.index') }}">Pages</a></li>
                    <li><a href="{{ route('backend.blog.index') }}">Blog Posts</a></li>
                    <br/><br/>
                    <li><a href="{{ route('auth.logout') }}">Logout</a></li>
                  </ul>
                </nav>


            </div>
          </div>


          <!-- Wrapper -->
      			<div id="wrapper">

      				<!-- Main -->
      					<div id="main">
      						<div class="inner">
                    <section style="padding-top:1.5em;padding-right:1.5em;">

                      <h1>@yield('title')</h1>

                    @if($errors->any())
                        <div class="alert alert-danger">
                            <strong>We found some errors!</strong>

                            <ul>
                                @foreach($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif

                    @if($status)
                        <div class="alert alert-info">
                            {{ $status }}
                        </div>
                    @endif

                    @yield('content')
                  </section>
                </div>
              </div>
            </div>


    </body>
</html>
