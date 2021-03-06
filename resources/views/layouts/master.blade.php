<!doctype html>
<html lang="{{ app()->getLocale() }}">
    	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">

		<title>Laravel</title>

		<!-- Appel des Styles -->
		<link rel="stylesheet" href="{{asset('css/app.css')}}">

		<!-- Importation de SimpleLineIcons -->
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/simple-line-icons/2.4.1/css/simple-line-icons.css">
		<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.2.0/css/all.css">
   	</head>
    	<body>
    		<div id="app">
			<nav>
    				<div class="nav-content">
    					<ul>
    						<li>
    							<a href="/">Accueil</a>
    						</li>
    						<li>
    							<a href="/stage">Stage</a>
    						</li>
    						<li>
    							<a href="/formation">Formation</a>
    						</li>
    						<li>
    							<a href="/contact">Contact</a>
    						</li>
    					</ul>
					@guest
						<!-- <a class="btn btn-blue btn-normal" href="{{ route('login') }}">
							<span><i class="fas fa-sign-in-alt"></i></span>
							{{ __('Connexion') }}
						</a> -->
					@else
					<ul>
						<li class="user-connected">
								<a class="user" href="javascript:;">
									<span><i class="far fa-user"></i></span>
									{{ Auth::user()->name }}
								</a>
								<div class="dropdown">
									<a 	class="link-admin" 
										href="/admin">
										<span><i class="fas fa-table"></i></span>
										Administration
									</a>	
									<hr>
									<a class="link-logout" 
										href="{{ route('logout') }}"
										onclick="event.preventDefault();document.getElementById('logout-form').submit();">
										<span><i class="fas fa-sign-out-alt"></i></span>
										Déconnexion
									</a>
									<form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
										@csrf
									</form>
								</div>
						</li>
					</ul>		
					@endguest
    				</div>
				<div class="nav-responsive">
					<div class="menu-burger">
						<div class="bar-top"></div>
						<div class="bar-middle"></div>
						<div class="bar-bottom"></div>
					</div>
					<div class="menu-content">
						<ul>
							<li>
    								<a href="/">Accueil</a>
    							</li>
    							<li>
    								<a href="/stage">Stage</a>
    							</li>
    							<li>
    								<a href="/formation">Formation</a>
    							</li>
    							<li>
    								<a href="/contact">Contact</a>
    							</li>
						</ul>
						@guest
						<!-- <a class="btn btn-blue btn-normal" href="{{ route('login') }}">
							<span><i class="fas fa-sign-in-alt"></i></span>
							{{ __('Connexion') }}
						</a> -->
						@else
						<ul>
							<li>
    								<a class="link-admin" 
									href="/admin">
									<span><i class="fas fa-table"></i></span>
									Administration
								</a>	
								
							</li>
							<li>
								<a class="link-logout" href="{{ route('logout') }}" onclick="event.preventDefault();document.getElementById('logout-form').submit();">
									<span><i class="fas fa-sign-out-alt"></i></span>
									Déconnexion
								</a>
								<form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
									@csrf
								</form>
							</li>
						</ul>		
						@endguest
					</div>
				</div>
    			</nav>
    			<section class="content">
				@yield('content')
    			</section>
			<footer>
				<div class="footer-content">
    					<ul>
    						<li>
    							<a href="/">Accueil</a>
    						</li>
    						<li>
    							<a href="/stage">Stage</a>
    						</li>
    						<li>
    							<a href="/formation">Formation</a>
    						</li>
    						<li>
    							<a href="/contact">Contact</a>
    						</li>
    					</ul>
    				</div>
			</footer>
		</div>

		<!-- Appels des Scripts -->
		<script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
		<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/2.0.2/TweenMax.min.js"></script>
		<script src="{{ asset('js/main.js') }}" defer></script>
    		<script src="{{asset('js/app.js')}}"></script>
    	</body>
</html>
