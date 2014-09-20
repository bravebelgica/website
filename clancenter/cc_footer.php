

<!-- Javascript Libraries -->
<!-- jQuery -->
<script src="js/jquery.min.js"></script>
<!-- jQuery Library -->
<script src="js/jquery-ui.min.js"></script>
<!-- jQuery UI -->
<script src="js/jquery.easing.1.3.js"></script>
<!-- jQuery Easing - Requirred for Lightbox + Pie Charts-->

<!-- Bootstrap -->

<script src="js/bootstrap.min.js"></script>



<!-- Charts -->
<script src="js/charts/jquery.flot.js"></script>
<!-- Flot Main -->
<script src="js/charts/jquery.flot.time.js"></script>
<!-- Flot sub -->
<script src="js/charts/jquery.flot.animator.min.js"></script>
<!-- Flot sub -->
<script src="js/charts/jquery.flot.resize.min.js"></script>
<!-- Flot sub - for repaint when resizing the screen -->

<script src="js/sparkline.min.js"></script>
<!-- Sparkline - Tiny charts -->
<script src="js/easypiechart.js"></script>
<!-- EasyPieChart - Animated Pie Charts -->
<script src="js/charts.js"></script>
<!-- All the above chart related functions -->

<!-- angular -->
<script src="js/angular.min.js"></script>
<script src="js/angular-route.min.js"></script>

<!-- app -->
<script src="app/app.js"></script>



<script>







ccApp.controller('LoginController', function ($scope, $rootScope, AUTH_EVENTS, AuthService) {
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
	









ccApp.controller('MainCtrl', function($scope, USER_ROLES,
        AuthService) {
  	$scope.name = 'World';
  	$scope.authorized = true;
  
  	$scope.enter = function() {
  		$scope.authorized = true;
  		//sharedProperties.setListName(item);
	  };
	  $scope.exit = function() {
	  		$scope.authorized = false;
	  		//sharedProperties.setListName(item);
		  };
  
	 $scope.getItem = function() {
	    $scope.msg = sharedProperties.getListName();
  	};

    $scope.currentUser = null;
	  $scope.userRoles = USER_ROLES;
	  $scope.isAuthorized = AuthService.isAuthorized;
	 
	  $scope.setCurrentUser = function (user) {
	    $scope.currentUser = user;
	  };



  	
});
  	

ccApp.controller('simpelCtrl', function ($scope) {
	$scope.waarde = 'initieel';

	$scope.test =  function(){
		alert('test');
	};
});
	

ccApp.controller('reservatieCtrl', function ($scope, $http) {
	$scope.oorlog_id = 1;
	$scope.changeOorlog = function(id){
		//window.alert(id);
		$scope.oorlog_id = id;
		unique = String(new Date().getTime()); //dit is een hachk, zodanig angulr de cache niet gebruikt
		 url = "json/json_oorlog_reservaties.php?oorlog_id=" + $scope.oorlog_id;
		noncache_url = url + "&unique=" + unique;
		//window.alert(id);
		$scope.reservaties=null;
		  $http.get(noncache_url, {cache:false}).success(function(response) {
			  	//window.alert(noncache_url);
			    $scope.reservaties = response;
		  }).error(function (data){ 
			  //window.alert(data)
			  return data});
	};

	$scope.changeReservatie = function(nummer,id){
		//window.alert(nummer);
		nummer = String(nummer);
		oorlogid = String($scope.oorlog_id);
		id = String(id);
		//window.alert(nummer);
		var request_data = {
				nummer : nummer,
				oorlogid : oorlogid,
				playerid : id 
		};
		//alert(request_data);
		url = "json/json_reserveer_tegenstander.php";
		$http.post(url,request_data ).success(function( status) {
			$scope.status = status;
		  	//window.alert(status);
		  	$scope.changeOorlog(oorlogid);
		  }).error(function (data){ return data});
	};
});


	
</script>






<!-- Map -->
<script src="js/maps/jvectormap.min.js"></script>
<!-- jVectorMap main library -->
<script src="js/maps/usa.js"></script>
<!-- USA Map for jVectorMap -->

<!--  Form Related -->
<script src="js/icheck.js"></script>
<!-- Custom Checkbox + Radio -->

<!-- UX -->
<script src="js/scroll.min.js"></script>
<!-- Custom Scrollbar -->

<!-- Other -->
<script src="js/calendar.min.js"></script>
<!-- Calendar -->
<script src="js/feeds.min.js"></script>
<!-- News Feeds -->

<!--  Form Related -->
<script src="js/icheck.js"></script>
<!-- Custom Checkbox + Radio -->

<!-- All JS functions -->
<script src="js/functions.js"></script>

</body>
</html>
