@include('layouts.website.head')

<!--preloading-->
<div id="preloader">
    <img class="logo" src="{{ asset('website/images/logo1.png') }}" alt="" width="119" height="58">
    <div id="status">
        <span></span>
        <span></span>
    </div>
</div>
<!--end of preloading-->
@include('auth.login')
@include('auth.register')



<!-- BEGIN | Header -->
<header class="ht-header">
	<div class="container">
		<nav class="navbar navbar-default navbar-custom">
				<!-- Brand and toggle get grouped for better mobile display -->
				<div class="navbar-header logo">
				    <div class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
					    <span class="sr-only">Toggle navigation</span>
					    <div id="nav-icon1">
							<span></span>
							<span></span>
							<span></span>
						</div>
				    </div>
				    <a href="{{ route('home') }}"><img class="logo" src="{{ asset('website/images/logo1.png') }}" alt="" width="119" height="58"></a>
			    </div>
				<!-- Collect the nav links, forms, and other content for toggling -->
				<div class="collapse navbar-collapse flex-parent" id="bs-example-navbar-collapse-1">
					<ul class="nav navbar-nav flex-child-menu menu-left">
						<li class="hidden">
							<a href="#page-top"></a>
						</li>
						<li class="dropdown first">
							<a class="btn btn-default lv1" href="{{ route('home') }}">
							Home
							</a>
						</li>
						<li class="dropdown first">
							<a class="btn btn-default lv1" href="{{ route('movies') }}">
							movies
							</a>
						</li>
						<li><a href="#">Contact Us</a></li>
					</ul>
					<ul class="nav navbar-nav flex-child-menu menu-right">
						<li><a href="{{ route('feedback.index') }}">feedback</a></li>
                        @auth
                        <li class="btn btn-primary"><a href="{{ route('dashboard.dashboard') }}">dashboard</a></li>
                        @else
                        <li class="loginLink"><a href="#">LOG In</a></li>
						<li class="btn signupLink"><a href="#">sign up</a></li>
                        @endauth
					</ul>
				</div>
			<!-- /.navbar-collapse -->
	    </nav>
	    
	    <!-- top search form -->
	    <div class="top-search">
	    	<select>
				<option value="united">TV show</option>
			</select>
			<input type="text" placeholder="Search for a movies">
	    </div>
	</div>
</header>
<!-- END | Header -->

@yield('content')

@include('layouts.website.footer')