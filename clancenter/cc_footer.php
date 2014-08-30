

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
	
	var reservatieApp = angular.module('reservatieApp', []);

reservatieApp.controller('reservatieCtrl', function ($scope) {
  $scope.reservaties = [
    {'nummer': '1',
     'player' : "oorlogszuchtig",
     'reservatie' : '20/08/2014 15:01;12',
     'aanval' : '18:00:00'   
     },
     {'nummer': '2',
         'player' : "-",
         'reservatie' : '-',
         'aanval' : '-'   
     },
     {'nummer': '3',
         'player' : "Sir Joske",
         'reservatie' : '20/08/2014 17:20;01',
         'aanval' : '20:00:00'   
     },
     {'nummer': '4',
         'player' : "Tessa",
         'reservatie' : '20/08/2014 12:02:30',
         'aanval' : '19:00:00'   
     },
     {'nummer': '5',
         'player' : "Laurentius",
         'reservatie' : '20/08/2014 17:17;01',
         'aanval' : '20:15:00'   
     },
     {'nummer': '6',
         'player' : "Foxtrot",
         'reservatie' : '20/08/2014 15:42:45',
         'aanval' : '21:00:00'   
     },
     
     {'nummer': '7',
         'player' : "Clan 8",
         'reservatie' : '20/08/2014 17:20;01',
         'aanval' : '18:00:00'   
     }
     




   ];
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


<!-- All JS functions -->
<script src="js/functions.js"></script>
</body>
</html>
