var ccApp = angular.module('ccApp', ['ngRoute'])
 .config(function ($routeProvider) {
  $routeProvider
    .when('/', {
      templateUrl: 'views/cc_warroom.php',
      controller: 'MainCtrl'
    })
    .when('/test', {
      templateUrl: 'views/cc_test.php',
      controller: 'MainCtrl'
	})   
	.when('/warroom', {
	      templateUrl: 'views/cc_warroom.php',
	      controller: 'MainCtrl'
		})
	.otherwise({
	  redirectTo: '/'
	});
});
 
