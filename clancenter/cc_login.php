	<section id="login" ng-hide="authorized">
		<header>
			<h1>Brave Belgica Clan</h1>
			<br>
			<p>U krijgt alleen toegang tot ons clan commando centrum met een geldige account</p>
<p>{{loc}} {{test}}</p>
		</header>

		<div class="clearfix"></div>

		<!-- Login -->
		<!-- ><form  method="post" class="box tile animated active" id="box-login" 
		name="loginForm" ng-controller="LoginController" ng-submit="login(credentials)">-->
		<!-- 
		<form   class="box tile animated active" id="box-login"  >
			<h2 class="m-t-0 m-b-15">Login</h2>
			<input type="text" class="login-control m-b-10" placeholder="Email" > 
			<input type="password" class="login-control"
				placeholder="Password" >
			<div class="checkbox m-b-20">
				<label> <input type="checkbox"> Onthoud mij
				</label>
			</div>
			<button  btn btn-smm-r-5">Inloggen</button>

			<small> <a class="box-switcher" data-switch="box-register" href="">Heb je geen account?</a> of <a class="box-switcher" data-switch="box-reset" href="">Paswoord
					vergeten?</a>
			</small>
		</form>
		-->

		<!-- Login -->
<p>{{loc}} {{test}}</p>
		<ul>
		<li ng-repeat="role in userRoles">{{role}}</li>
		</ul>
		
		
		<div ng-if="currentUser">Welcome, {{ currentUser.name }}</div>
		<div ng-if="isAuthorized(userRoles.Leider)">You're Leider.</div>
		<form class="box tile animated active" id="box-login" ng-controller="LoginController" ng-submit="login(credentials)">
			<h2 class="m-t-0 m-b-15">Login</h2>
			<input type="text" class="login-control m-b-10" placeholder="Email" ng-model="credentials.username"> 
			<input type="password" class="login-control" placeholder="Paswoord"	ng-model="credentials.password">
			<div class="checkbox m-b-20">
				<label> <input type="checkbox" ng-model="persistent"> Onthoud mij
				</label>
			</div>
			<button ng-click="enter()" class="btn btn-alt m-r-5">Inloggen</button>

			<small> <a class="box-switcher" data-switch="box-register" href="">Heb je geen account?</a> of <a class="box-switcher" data-switch="box-reset" href="">Paswoord
					vergeten?</a>
			</small>
		</form>

		<!-- Register -->
		<form class="box animated tile" id="box-register">
			<h2 class="m-t-0 m-b-15">Registreer</h2>
			<input type="text" class="login-control m-b-10" placeholder="Volledige naam"> <input type="text" class="login-control m-b-10" placeholder="Gebrukersnaam"> <input
				type="email" class="login-control m-b-10" placeholder="Email Adres"> <input type="password" class="login-control m-b-10" placeholder="Paswoord"> <input
				type="password" class="login-control m-b-20" placeholder="Valideer Paswoord">

			<button class="btn btn-sm m-r-5">Registreer</button>

			<small><a class="box-switcher" data-switch="box-login" href="">Heb je al een account?</a></small>
		</form>

		<!-- Forgot Password -->
		<form class="box animated tile" id="box-reset">
			<h2 class="m-t-0 m-b-15">Paswoord resetten</h2>
			<p>Indien je uw paswoord vergeten ben, geef hier dan uw email in, wij sturen u de gegevens door voor het resetten van uw account</p>
			<input type="email" class="login-control m-b-20" placeholder="Email Address">

			<button class="btn btn-sm m-r-5">Reset Paswoord</button>

			<small><a class="box-switcher" data-switch="box-login" href="">Heb je al een account?</a></small>
		</form>
	</section>
