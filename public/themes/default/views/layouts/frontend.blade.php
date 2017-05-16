<!doctype html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>@yield('title') &mdash; The Sunday Sim</title>

        <link rel="stylesheet" type="text/css" href="{{ theme('css/main.css') }}">
        <script src="{{ theme('js/all.js') }}"></script>

    </head>
    <body>

        <!-- Wrapper -->
    			<div id="wrapper">

    				<!-- Main -->
    					<div id="main">
    						<div class="inner">

    							<!-- Header -->
    								<header id="header">
    									<h3 class="logo"><strong>Philosophy Commentary</strong> by Jake Kemple</h3>
                      <ul class="icons"><a href="{{ route('backend.dashboard') }}"><h3 style="margin:0;">Admin</h3></a></ul>
                    </header>
                    <br/>

                    @yield('content')

    						</div>
    					</div>

    				<!-- Sidebar -->
    					<div id="sidebar">
    						<div class="inner">

    							<!-- Menu -->
    								<nav id="menu">
    									<header class="major">
    										<h2>Menu</h2>
    									</header>
    									<ul>
                        @include('partials.navigation')
    									</ul>
    								</nav>

    						</div>
    					</div>

    			</div>


    </body>
</html>
