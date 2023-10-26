<!DOCTYPE html>
<html>
<head>
	<title>@stack('title')</title>
	<link rel="stylesheet" type="text/css" href="{{asset('assets/css/style.css')}}">
	<link href="https://fonts.googleapis.com/css?family=Bowlby+One+SC|Catamaran&display=swap" rel="stylesheet">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>
	<!--main-div starts here-->
	<div class="main-div">
		<!--head-div starts here-->
		<div class="head-div">
			<!--main starts here-->
			<div class="main">
				<!--head starts here-->
				<div class="head">
					<span>EVEST</span>
					<p>THE BIGGEST CHOICE OF THE WEB</p>
				</div>
				<!--head ends here-->

				<!--btn starts here-->
				<div class="btn">
					@if (!Auth::guard('signup')->check())
                        <!-- Show the "Login First" button when the user is not authenticated -->
                        <a href="{{ url('/') }}">
                            <input type="button" name="login" value="Log In">
                        </a>
                    @else
						<a href="{{ route('logout') }}">
							<input type="button" name="logout" value="Log Out :{{Auth::guard('signup')->user()->fullname}}">
						</a>
                        @endif

					{{-- @if (!Auth::login($data)->check())
                        <!-- Show the "Login First" button when the user is not authenticated -->
                        <a href="{{ url('/') }}">
                            <input type="button" name="login" value="Log In">
                        </a>
                    @else
						<a href="{{ route('logout') }}">
							<input type="button" name="logout" value="Log Out :{{Auth::guard('signup')->user()->fullname}}">
						</a>
                        @endif --}}
				</div>
				<!--btn ends here-->
			</div>
			<!--main ends here-->
		</div>
		<!--head-div ends here-->

		<!--home-page starts here-->
		<div class="home-page">
			<!--pagination starts here-->
		 	<div class="pagnation">
				<!--list starts here-->
				<div class="list">
					<ul>
						<li>HOME</li>
						<li>NEW PROJECT</li>
						<li>SPECIAL</li>
						<li>ALL PRODUCTS</li>
						<li>REVIEWS</li>
						<li>CONTACT</li>
						<li>FAQS</li>
					</ul>
				</div>
				<!--list ends here-->

				<!--search starts here-->
				<div class="search">
					<!--search-1 starts here-->
					<div class="search-1">
						<!--input starts here-->
						<div class="input">
							<input type="text" name="">
						</div>
						<!--input ends here-->

						<!--btnn starts here-->
						<div class="btnn">
							<input type="button" name="" value="Search">
						</div>
						<!--btnn ends here-->
					</div>
					<!--search-1 ends here-->
				</div>
				<!--search ends here-->
			</div>
			<!--pagination ends here-->
		</div>
		<!--home-page starts here-->

		<!--null starts here-->
		<div class="null">
			
		</div>
		<!--null ends here-->