

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

<script>

function go(waarde){
	alert(waarde);
}

$.ajaxSetup ({
    cache: false
});


var reservatieApp = angular.module('reservatieApp', []);






reservatieApp.controller('MainCtrl', function($scope) {
  	$scope.name = 'World';
  
  	$scope.go = function() {
    	alert('clicked');
  		//sharedProperties.setListName(item);
	  };
  
	 $scope.getItem = function() {
	    $scope.msg = sharedProperties.getListName();
  	};
});
  	

reservatieApp.controller('simpelCtrl', function ($scope) {
	$scope.waarde = 'initieel';

	$scope.test =  function(){
		alert('test');
	};
});
	

reservatieApp.controller('reservatieCtrl', function ($scope, $http) {
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


$(document).on("click", ".clickme", function() {
	  alert("click");
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
<script src="js/icheck.js"></script> <!-- Custom Checkbox + Radio -->

<!-- All JS functions -->
<script src="js/functions.js"></script>
</body>
</html>
