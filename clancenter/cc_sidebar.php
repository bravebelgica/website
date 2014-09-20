
	<section id="main" class="p-relative" role="main" ng-show="authorized">

		<!-- Sidebar -->
		<aside id="sidebar">

			<!-- Sidbar Widgets -->
			<div class="side-widgets overflow">
				<!-- Profile Menu -->
				<div class="text-center s-widget m-b-25 dropdown" id="profile-menu">
					<a href="" data-toggle="dropdown"> <img class="profile-pic animated" src="img/profile-pic.jpg" alt="">
					</a>
					<ul class="dropdown-menu profile-menu">
						<li><a href="">Mijn Profiel</a> <i class="icon left">&#61903;</i><i class="icon right">&#61815;</i></li>
						<li><a href="">Berichten</a> <i class="icon left">&#61903;</i><i class="icon right">&#61815;</i></li>
						<li><a href="">Instelingen</a> <i class="icon left">&#61903;</i><i class="icon right">&#61815;</i></li>
						<li><a ng-click="exit()" href="">Uitloggen</a> <i class="icon left">&#61903;</i><i class="icon right">&#61815;</i></li>
					</ul>
					<h4 class="m-0">[Naam Speler]</h4>
					[eventueel tweet tag]
				</div>

				<!-- Calendar -->
				<div class="s-widget m-b-25">
					<div id="sidebar-calendar"></div>
				</div>

				<!-- Feeds -->
				<div class="s-widget m-b-25" ng-show="false">
					<h2 class="tile-title">Nieuws Feeds</h2>

					<div class="s-widget-body">
						<div id="news-feed"></div>
					</div>
				</div>

				<!-- oorlogen -->
				<div class="s-widget m-b-25">
					<h2 class="tile-title">Oorlogen </h2>

					<div class="s-widget-body">

						<div class="side-border">
							<small>Brave Belgica</small>
							<div class="progress progress-small">
								<a href="#" data-toggle="tooltip" title="" class="progress-bar tooltips progress-bar-danger" style="width: 60%;" data-original-title="60%"> <span
									class="sr-only">16 uren</span>
								</a>
							</div>
						</div>
						<div class="side-border">
							<small>Brave Lil' Belg</small>
							<div class="progress progress-small">
								<a href="#" data-toggle="tooltip" title="" class="tooltips progress-bar progress-bar-info" style="width: 43%;" data-original-title="43%"> <span
									class="sr-only">O Uren</span>
								</a>
							</div>
						</div>


					</div>
				</div>
			</div>

			<!-- Side Menu -->
			<ul class="list-unstyled side-menu">
				<li class="active"><a class="sa-side-home" href="#/warroom"> <span class="menu-item">Commando Center</span>
				</a></li>
				<li><a class="sa-side-typography" href="#/test"> <span class="menu-item">Clan Info</span>
				</a></li>
				<li><a class="sa-side-widget" href=""> <span class="menu-item">Planning</span>
				</a></li>
				<li><a class="sa-side-table" href="#/planning"> <span class="menu-item">Tables</span>
				</a></li>
				<li class="dropdown"><a class="sa-side-form" href=""> <span class="menu-item">Form</span>
				</a>
					<ul class="list-unstyled menu-item">
						<li><a href="form-elements.html">Basic Form Elements</a></li>
						<li><a href="form-components.html">Form Components</a></li>
						<li><a href="form-examples.html">Form Examples</a></li>
						<li><a href="form-validation.html">Form Validation</a></li>
					</ul></li>
				<li class="dropdown"><a class="sa-side-ui" href=""> <span class="menu-item">User Interface</span>
				</a>
					<ul class="list-unstyled menu-item">
						<li><a href="buttons.html">Buttons</a></li>
						<li><a href="labels.html">Labels</a></li>
						<li><a href="images-icons.html">Images &amp; Icons</a></li>
						<li><a href="alerts.html">Alerts</a></li>
						<li><a href="index.php?content=media">Media</a></li>
						<li><a href="components.html">Components</a></li>
						<li><a href="other-components.html">Others</a></li>
					</ul></li>
				<li class="dropdown"><a class="sa-side-photos" href=""> <span class="menu-item">PHOTO GALLERY</span>
				</a>
					<ul class="list-unstyled menu-item">
						<li><a href="photo-gallery.html">Google Images like</a></li>
						<li><a href="photo-gallery-alt.html">Photo Gallery - 2</a></li>
					</ul></li>
				<li><a class="sa-side-chart" href="charts.html"> <span class="menu-item">Charts</span>
				</a></li>
				<li><a class="sa-side-folder" href="file-manager.html"> <span class="menu-item">File Manager</span>
				</a></li>
				<li><a class="sa-side-calendar" href="index.php?content=calendar"> <span class="menu-item">Calendar</span>
				</a></li>
				<li class="dropdown"><a class="sa-side-page" href=""> <span class="menu-item">Pages</span>
				</a>
					<ul class="list-unstyled menu-item">
						<li><a href="list-view.html">List View</a></li>
						<li><a href="profile-page.html">Profile Page</a></li>
						<li><a href="messages.html">Messages</a></li>
						<li><a href="login.html">Login</a></li>
						<li><a href="404.html">404 Error</a></li>
					</ul></li>
			</ul>

		</aside>

		
		<!-- Content -->
		<section id="content" class="container">

			<!-- Messages Drawer -->
			<div id="messages" class="tile drawer animated">
				<div class="listview narrow">
					<div class="media">
						<a href="">Zend een Nieuw Bericht</a> <span class="drawer-close">&times;</span>

					</div>
					<div class="overflow" style="height: 254px">
						<div class="media">
							<div class="pull-left">
								<img width="40" src="img/profile-pics/1.jpg" alt="">
							</div>
							<div class="media-body">
								<small class="text-muted">Sir Joske - 2 uren geleden</small><br> <a class="t-overflow" href="">Joske feliciteert iedereen met zijn overwinning</a>
							</div>
						</div>
						<div class="media">
							<div class="pull-left">
								<img width="40" src="img/profile-pics/2.jpg" alt="">
							</div>
							<div class="media-body">
								<small class="text-muted">Foxtrot - 5 uren geleden</small><br> <a class="t-overflow" href="">Ben blij dat mijn Android image werkt op mijn PC
									!!!!</a>
							</div>
						</div>
						<div class="media">
							<div class="pull-left">
								<img width="40" src="img/profile-pics/3.jpg" alt="">
							</div>
							<div class="media-body">
								<small class="text-muted">Laurentius - op 15/18/2014</small><br> <a class="t-overflow" href="">Alea jacta est !!! </a>
							</div>
						</div>

					</div>
					<div class="media text-center whiter l-100">
						<a href=""><small>Toon Alles</small></a>
					</div>
				</div>
			</div>

			<!-- Notification Drawer -->
			<div id="notifications" class="tile drawer animated">
				<div class="listview narrow">
					<div class="media">
						<a href="">Notification Settings</a> <span class="drawer-close">&times;</span>
					</div>
					<div class="overflow" style="height: 254px">
						<div class="media">
							<div class="pull-left">
								<img width="40" src="img/profile-pics/1.jpg" alt="">
							</div>
							<div class="media-body">
								<small class="text-muted">Nadin Jackson - 2 Hours ago</small><br> <a class="t-overflow" href="">Mauris consectetur urna nec tempor adipiscing.
									Proin sit amet nisi ligula. Sed eu adipiscing lectus</a>
							</div>
						</div>
						<div class="media">
							<div class="pull-left">
								<img width="40" src="img/profile-pics/2.jpg" alt="">
							</div>
							<div class="media-body">
								<small class="text-muted">David Villa - 5 Hours ago</small><br> <a class="t-overflow" href="">Suspendisse in purus ut nibh placerat Cras
									pulvinar euismod nunc quis gravida. Suspendisse pharetra</a>
							</div>
						</div>
						<div class="media">
							<div class="pull-left">
								<img width="40" src="img/profile-pics/3.jpg" alt="">
							</div>
							<div class="media-body">
								<small class="text-muted">Harris worgon - On 15/12/2013</small><br> <a class="t-overflow" href="">Maecenas venenatis enim condimentum ultrices
									fringilla. Nulla eget libero rhoncus, bibendum diam eleifend, vulputate mi. Fusce non nibh pulvinar, ornare turpis id</a>
							</div>
						</div>
						<div class="media">
							<div class="pull-left">
								<img width="40" src="img/profile-pics/4.jpg" alt="">
							</div>
							<div class="media-body">
								<small class="text-muted">Mitch Bradberry - On 14/12/2013</small><br> <a class="t-overflow" href="">Phasellus interdum felis enim, eu bibendum
									ipsum tristique vitae. Phasellus feugiat massa orci, sed viverra felis aliquet quis. Curabitur vel blandit odio. Vestibulum sagittis quis sem sit amet
									tristique.</a>
							</div>
						</div>
						<div class="media">
							<div class="pull-left">
								<img width="40" src="img/profile-pics/1.jpg" alt="">
							</div>
							<div class="media-body">
								<small class="text-muted">Nadin Jackson - On 15/12/2013</small><br> <a class="t-overflow" href="">Ipsum wintoo consectetur urna nec tempor
									adipiscing. Proin sit amet nisi ligula. Sed eu adipiscing lectus</a>
							</div>
						</div>
						<div class="media">
							<div class="pull-left">
								<img width="40" src="img/profile-pics/2.jpg" alt="">
							</div>
							<div class="media-body">
								<small class="text-muted">David Villa - On 16/12/2013</small><br> <a class="t-overflow" href="">Suspendisse in purus ut nibh placerat Cras
									pulvinar euismod nunc quis gravida. Suspendisse pharetra</a>
							</div>
						</div>
					</div>
					<div class="media text-center whiter l-100">
						<a href=""><small>VIEW ALL</small></a>
					</div>
				</div>
			</div>

			<!-- 
			<ol class="breadcrumb hidden-xs">
				<li><a href="#">Home</a></li>
				<li><a href="#">Library</a></li>
				<li class="active">Data</li>
			</ol>
			Breadcrumb -->
		
		
		
		
		