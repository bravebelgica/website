<!DOCTYPE html>
<html  ng-app="ccApp">
<!--[if IE 9 ]><html class="ie9"><![endif]-->
<head>
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0" />
<meta name="format-detection" content="telephone=no">
<meta charset="UTF-8">

<meta name="description" content="Brave Belgica Clan , War Room">
<meta name="keywords" content="Clash of clans, Bootstrap, Brave , Belgica">

<title>Brave Belgica Clan- Inloggen</title>

<!-- CSS -->
<link href="css/bootstrap.min.css" rel="stylesheet">
<link href="css/form.css" rel="stylesheet">
<link href="css/style.css" rel="stylesheet">
<link href="css/animate.css" rel="stylesheet">
<link href="css/generics.css" rel="stylesheet">
</head>

<body  ng-controller="ApplicationController" id="skin-blur-greenish">

	<section id="login">
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
			<button class="btn btn-alt m-r-5">Inloggen</button>

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

	<!-- Javascript Libraries -->
	<!-- jQuery -->
	<script src="js/jquery.min.js"></script>
	<!-- jQuery Library -->

	<!-- Bootstrap -->
	<script src="js/bootstrap.min.js"></script>

	<!-- angular -->
	<script src="js/angular.min.js"></script>


	<!--  Form Related -->
	<script src="js/icheck.js"></script>
	<!-- Custom Checkbox + Radio -->

	<!-- All JS functions -->
	<script src="js/functions.js"></script>



	<script>
       
        var ccApp = angular.module('ccApp', []);

	 ccApp.controller('ApplicationController', function ($location, $scope, $rootScope) {
		$scope.test = "test" ;	
		$scope.loc = $location.host() ;	   
        });
        
        ccApp.controller('LoginController', function ($location, $scope, $rootScope, AUTH_EVENTS, AuthService) {
$scope.loc = $location.host() ;	   	
$scope.credentials = {
		    username: '',
		    password: ''
		  };
		  $scope.login = function (credentials) {
			  console.log(credentials);
		    AuthService.login(credentials).then(function (user) {
		      $rootScope.$broadcast(AUTH_EVENTS.loginSuccess);
		      $scope.setCurrentUser(user);
		    }, function () {
		      $rootScope.$broadcast(AUTH_EVENTS.loginFailed);
		    });
		  };
		});

        ccApp.constant('AUTH_EVENTS', {
        	  loginSuccess: 'auth-login-success',
        	  loginFailed: 'auth-login-failed',
        	  logoutSuccess: 'auth-logout-success',
        	  sessionTimeout: 'auth-session-timeout',
        	  notAuthenticated: 'auth-not-authenticated',
        	  notAuthorized: 'auth-not-authorized'
        	}); 
        
        ccApp.constant('USER_ROLES', {
		  all: '*',
		  Leider: 'Leider',
		  Coleider: 'Co-leider',
		  Oudste: 'Oudste',
		  Nieuw: 'Nieuw',
		  Toeschouwer : 'Toeschouwer'  
		});
		
        ccApp.factory('AuthService', function ($http, Session) {
        	  var authService = {};
        	 
        	  authService.login = function (credentials) {
            	var url = 'cc_verify_login.php';
            	console.log(url);
        	    return $http
        	      .post(url, credentials)
        	      .then(function (resp) {
            	    var res = resp.data;  
            	    console.log(res);
            	    console.log(res.user);
        	        Session.create(res.id, res.user.id, res.user.role);
        	        console.log("Session created for : " + res.user.id + "/" + res.user.role);
        	        return res.user;
        	      });
        	  };
        	 
        	  authService.isAuthenticated = function () {
        	    return !!Session.userId;
        	  };
        	 
        	  authService.isAuthorized = function (authorizedRoles) {
        	    if (!angular.isArray(authorizedRoles)) {
        	      authorizedRoles = [authorizedRoles];
        	    }
        	    return (authService.isAuthenticated() &&
        	      authorizedRoles.indexOf(Session.userRole) !== -1);
        	  };
        	 
        	  return authService;
        	});

        ccApp.service('Session', function () {
        	  this.create = function (sessionId, userId, userRole) {
        	    this.id = sessionId;
        	    this.userId = userId;
        	    this.userRole = userRole;
        	  };
        	  this.destroy = function () {
        	    this.id = null;
        	    this.userId = null;
        	    this.userRole = null;
        	  };
        	  return this;
        	})
		
		ccApp.controller('ApplicationController', function ($scope,
                                               USER_ROLES,
                                               AuthService) {
		  $scope.currentUser = null;
		  $scope.userRoles = USER_ROLES;
		  $scope.isAuthorized = AuthService.isAuthorized;
		 
		  $scope.setCurrentUser = function (user) {
		    $scope.currentUser = user;
		  };
		})
		
	
     </script>

</body>
</html>
