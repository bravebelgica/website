
<h4 class="page-title ">Brave Belgica Command Center</h4>

<!-- Shortcuts -->
<hr class="whiter" />


<hr class="whiter" />

<!-- Main Widgets -->

<div ng-app="reservatieApp" class="block-area">
	<div class="row">
		<!-- Linker Flap-->
		<div class="col-md-4">
			<!--  Player/Clan Selection selection  -->
			<div class="row">
				<div class="col-md-6">
					<div class="tile">
						<h2 class="tile-title">Selecteer Clan</h2>
						<div class="tile-config dropdown">
							<a data-toggle="dropdown" href="" class="tile-menu"></a>
							<ul class="dropdown-menu pull-right text-right">
								<li><a class="tile-info-toggle" href="">Informatie</a></li>
								<li><a href="">Refresh</a></li>
								<li><a href="">Instellingen</a></li>
							</ul>
						</div>
						<div class="table-responsive overflow">
							<table class="tile table table-bordered table-hover ">
								<tbody>
									<tr>
										<td>player</td>
										<td>clan</td>
										<td><button class="btn btn-s ">Selecteer</button></td>
									</tr>
								</tbody>
							</table>
						</div>
					</div>
				</div>

				<!-- War selection -->
				<div class="col-md-6">
					<div class="tile">
						<h2 class="tile-title">Selecteer Oorlog</h2>
						<div class="tile-config dropdown">
							<a data-toggle="dropdown" href="" class="tile-menu"></a>
							<ul class="dropdown-menu pull-right text-right">
								<li><a class="tile-info-toggle" href="">Informatie</a></li>
								<li><a href="">Refresh</a></li>
								<li><a href="">Instellingen</a></li>
							</ul>
						</div>

						<div class="table-responsive overflow">
							<table class="tile table table-bordered table-hover ">
								<tbody>
									<tr>
										<td>een andere clan</td>
										<td><button class="btn btn-s ">Selecteer</button></td>
									</tr>
								</tbody>
							</table>
						</div>
					</div>
				</div>
			</div>
			<div class="table-responsive overflow">
				<table class="tile table table-bordered table-striped">
					<thead>
						<tr>
							<th>No.</th>
							<th>Level</th>
							<th>ClanLid</th>
							<th>Datum Reservatie</th>
							<th>Aanval</th>
							<th>Actie</th>

						</tr>
					</thead>

					<tbody>
						<tr>
							<td>{{reservatie.nummer}}</td>
							<td>{{reservatie.level}}</td>
							<td>{{reservatie.alias}}</td>
							<td>{{reservatie.reservatie}}</td>
							<td>{{reservatie.aanval}}</td>
							<!--  <td><a id="myLink" href="#" onclick="go('test');">Reserveer</a></td>-->
							<td><button class="btn btn-xs ">Reserveer</button></td>
						</tr>
					</tbody>
				</table>
			</div>




		</div>

		<!-- midden Flap-->
		<div class="col-md-4" -controller="MainCtrl">
			<!-- !!!!! PUT HERE A TEST FOR NG-CLICK !!!!!!! -->
			<!-- 
		<a href='javascript:go("test")' >Refresh </a>
		-->
			<!-- 
		<a id="myLink" href="#" onclick="go('test');">link text</a>
		-->
			<!-- -->


			<!-- -->
			<!-- Main Chart -->
			<div class="tile">
				<h2 class="tile-title">Huidige Oorlog</h2>
				<div class="tile-config dropdown">
					<a data-toggle="dropdown" href="" class="tile-menu"></a>
					<ul class="dropdown-menu pull-right text-right">
						<li><a class="tile-info-toggle" href="">Informatie</a></li>
						<li><a href="">Refresh</a></li>
						<li><a href="">Instellingen</a></li>
					</ul>
				</div>
				<!-- Row mid flap -->
				<div class="row">
					<div class="col-md-6">
						<h2 class="text-left">Brave Belgica</h2>
						<div class="tile text-center">
							<div class="tile-dark p-10">
								<div class="pie-chart-tiny" data-percent="23">
									<span class="percent"></span> <span class="pie-title">Oorlogssterren <i class="m-l-5 fa fa-retweet"></i></span>
								</div>
							</div>
						</div>

					</div>

					<div class="col-md-6">
						<h2 class="text-right">VillageKillers</h2>
						<div class="tile text-center">
							<div class="tile-dark p-10">
								<div class="pie-chart-tiny" data-percent="34">
									<span class="percent"></span> <span class="pie-title">Oorlogssterren <i class="m-l-5 fa fa-retweet"></i></span>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-md-12">
						<div class="side-border">
							<small>Brave Belgica</small>
							<div class="progress progress-medium">
								<a href="#" data-toggle="tooltip" title="" class="progress-bar tooltips progress-bar-danger" style="width: 60%;" data-original-title="60%"> <span
									class="sr-only">16 uren</span>
								</a>
							</div>
						</div>
						<div class="side-border">
							<small>Brave Lil' Belg</small>
							<div class="progress progress-medium">
								<a href="#" data-toggle="tooltip" title="" class="tooltips progress-bar progress-bar-info" style="width: 43%;" data-original-title="43%"> <span
									class="sr-only">O Uren</span>
								</a>
							</div>
						</div>
					</div>
				</div>


				<div class="tile">
					<h2 class="tile-title">Bar Chart</h2>
					<div class="tile-config dropdown">
						<a data-toggle="dropdown" href="" class="tooltips tile-menu" title="Options"></a>
						<ul class="dropdown-menu pull-right text-right">
							<li><a href="">Refresh</a></li>
							<li><a href="">Settings</a></li>
						</ul>
					</div>
					<div class="p-10">
						<div id="bar-chart" class="main-chart" style="height: 250px"></div>
					</div>
				</div>







			</div>

			<!-- End Row mid flap -->





			<!--  Recent Postings -->
			<div class="row"></div>
			<div class="clearfix"></div>
		</div>




		<!-- rechter flap -->
		<div class="col-md-4">
			<!-- Dynamic Chart -->
			<div class="tile" ng-controller="reservatieCtrl">
				<h2 class="tile-title">Oorlogs Reservaties</h2>
				<div class="tile-config dropdown">

					<a data-toggle="dropdown" href="" class="tile-menu"></a>
					<ul class="dropdown-menu pull-right text-right">
						<li><a ng-click='changeOorlog(1)'>Refresh {{waarde}}</a></li>
					</ul>
				</div>
				<!--  OPGEPAST !!!! zet die class= "block-area" daar niet in want dit blokker alle links.bvb met ng-click  -->
				<!-- Table Striped    class="block-area"-->
				<div>

					<!-{{reservaties}}-->
					<div class="table-responsive overflow">
						<table class="tile table table-bordered table-striped">
							<thead>
								<tr>
									<th>No.</th>
									<th>Level</th>
									<th>ClanLid</th>
									<th>Datum Reservatie</th>
									<th>Aanval</th>
									<th>Actie</th>

								</tr>
							</thead>

							<tbody>
								<tr ng-repeat="reservatie in reservaties" ng-click="changeReservatie(reservatie.nummer, 1)">
									<td>{{reservatie.nummer}}</td>
									<td>{{reservatie.level}}</td>
									<td>{{reservatie.alias}}</td>
									<td>{{reservatie.reservatie}}</td>
									<td>{{reservatie.aanval}}</td>
									<!--  <td><a id="myLink" href="#" onclick="go('test');">Reserveer</a></td>-->
									<td><button class="btn btn-xs ">Reserveer</button></td>
								</tr>
							</tbody>
						</table>
					</div>
				</div>




			</div>

			<!-- Activity -->
			<div class="tile">
				<h2 class="tile-title">Social Media activities</h2>
				<div class="tile-config dropdown">
					<a data-toggle="dropdown" href="" class="tile-menu"></a>
					<ul class="dropdown-menu pull-right text-right">
						<li><a href="">Refresh</a></li>
						<li><a href="">Settings</a></li>
					</ul>
				</div>

				<div class="listview narrow">

					<div class="media">
						<div class="pull-right">
							<div class="counts">367892</div>
						</div>
						<div class="media-body">
							<h6>FACEBOOK LIKES</h6>
						</div>
					</div>

					<div class="media">
						<div class="pull-right">
							<div class="counts">2012</div>
						</div>
						<div class="media-body">
							<h6>GOOGLE +1s</h6>
						</div>
					</div>

					<div class="media">
						<div class="pull-right">
							<div class="counts">56312</div>
						</div>
						<div class="media-body">
							<h6>YOUTUBE VIEWS</h6>
						</div>
					</div>

					<div class="media">
						<div class="pull-right">
							<div class="counts">785879</div>
						</div>
						<div class="media-body">
							<h6>TWITTER FOLLOWERS</h6>
						</div>
					</div>
					<div class="media">
						<div class="pull-right">
							<div class="counts">68</div>
						</div>
						<div class="media-body">
							<h6>WEBSITE COMMENTS</h6>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="clearfix"></div>
	</div>
</div>

<!-- Chat -->
<div class="chat">

	<!-- Chat List -->
	<div class="pull-left chat-list">
		<div class="listview narrow">
			<div class="media">
				<img class="pull-left" src="img/profile-pics/1.jpg" width="30" alt="">
				<div class="media-body p-t-5">Sir Joske</div>
			</div>
			<div class="media">
				<img class="pull-left" src="img/profile-pics/2.jpg" width="30" alt="">
				<div class="media-body">
					<span class="t-overflow p-t-5">Foxtrot</span>
				</div>
			</div>
			<div class="media">
				<img class="pull-left" src="img/profile-pics/3.jpg" width="30" alt="">
				<div class="media-body">
					<span class="t-overflow p-t-5">Laurentius</span>
				</div>
			</div>
			<div class="media">
				<img class="pull-left" src="img/profile-pics/4.jpg" width="30" alt="">
				<div class="media-body">
					<span class="t-overflow p-t-5">Clan-8</span>
				</div>
			</div>
			<div class="media">
				<img class="pull-left" src="img/profile-pics/5.jpg" width="30" alt="">
				<div class="media-body">
					<span class="t-overflow p-t-5">Kay</span>
				</div>
			</div>
			<div class="media">
				<img class="pull-left" src="img/profile-pics/6.jpg" width="30" alt="">
				<div class="media-body">
					<span class="t-overflow p-t-5">Tessa</span>
				</div>
			</div>

		</div>
	</div>

	<!-- Chat Area -->
	<div class="media-body">
		<div class="chat-header">
			<a class="btn btn-sm" href=""> <i class="fa fa-circle-o status m-r-5"></i> Oorlogs Chat
			</a>
		</div>

		<div class="chat-body">
			<div class="media">
				<img class="pull-right" src="img/profile-pics/1.jpg" width="30" alt="" />
				<div class="media-body pull-right">
					Hey Foxie, wanneer val jij aan ???<small>Sir Joske - 10 min</small>
				</div>
			</div>

			<div class="media pull-left">
				<img class="pull-left" src="img/profile-pics/2.jpg" width="30" alt="" />
				<div class="media-body">
					Ik kan niet...heb geen pampers meer <br />Heb jij er nf ? <small>Foxtrot - 9 min</small>
				</div>
			</div>

			<div class="media pull-right">
				<img class="pull-right" src="img/profile-pics/2.jpg" width="30" alt="" />
				<div class="media-body">
					Zal eens vragen aan Lorre...die heeft normaal grote voorraad <br /> <small>Foxtrot - 8 min</small>
				</div>
			</div>

			<div class="media pull-right">
				<img class="pull-right" src="img/profile-pics/3.jpg" width="30" alt="" />
				<div class="media-body">
					En wat nog....moet je soms mijn draak ook niet hebben ...!!! <small>Laurentius - 8 Mins ago</small>
				</div>
			</div>
			<div class="media pull-left">
				<img class="pull-left" src="img/profile-pics/4.jpg" width="30" alt="" />
				<div class="media-body">
					Gastjes....hou de chat proper he<br />Grrrrr... <small>Clan 8 - 8 min</small>
				</div>
			</div>

			<div class="media pull-right">
				<img class="pull-right" src="img/profile-pics/6.jpg" width="30" alt="" />
				<div class="media-body">
					Ja he...wij kunnen daar niet zo goed tegen<small>Tessa - 7 min</small>
				</div>
			</div>

			<div class="media pull-right">
				<img class="pull-right" src="img/profile-pics/3.jpg" width="30" alt="" />
				<div class="media-body">
					Amai..de jeugd van heden <small>Laurentius - 4 Mins ago</small>
				</div>
			</div>

		</div>

		<div class="chat-footer media">
			<i class="chat-list-toggle pull-left fa fa-bars"></i> <i class="pull-right fa fa-picture-o"></i>
			<div class="media-body">
				<textarea class="form-control" placeholder="Typ hier uw bericht..."></textarea>
			</div>
		</div>
	</div>
</div>
</section>