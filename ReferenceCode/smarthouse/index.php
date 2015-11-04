	<?php

if (($_GET['id'] == 1) and ($_GET['dv'] == 'tv') )
{exec("sudo python /home/pi/scripts/xbret1.py");


}
if (($_GET['id'] == 0) and ($_GET['dv'] == 'tv') )
{ exec("sudo python /home/pi/scripts/xbret2.py");


}

if (($_GET['id'] == 1) and ($_GET['dv'] == 'la') )
{exec("sudo python /home/pi/scripts/xbre1.py");


}
if (($_GET['id'] == 0) and ($_GET['dv'] == 'la') )
{ exec("sudo python /home/pi/scripts/xbre2.py");


}
if ($_GET['id'] == 3) 
{ exec("sudo python /home/pi/scripts/both.py");


}
if ($_GET['id'] == 4) 
{ exec("sudo python /home/pi/scripts/oboth.py");


}


?>


<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8" />
		<title>Dashboard</title>

		<meta name="description" content="overview &amp; stats" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0" />

		<!--basic styles-->

		<link href="assets/css/bootstrap.min.css" rel="stylesheet" />
		<link href="assets/css/bootstrap-responsive.min.css" rel="stylesheet" />
		<link rel="stylesheet" href="assets/css/font-awesome.min.css" />

		<!--[if IE 7]>
		  <link rel="stylesheet" href="assets/css/font-awesome-ie7.min.css" />
		<![endif]-->

		<!--page specific plugin styles-->

		<!--fonts-->

		<link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Open+Sans:400,300" />

		<!--ace styles-->
<script src="jBeep/jBeep.min.js" type="text/javascript"></script>
		<link rel="stylesheet" href="assets/css/ace.min.css" />
		<link rel="stylesheet" href="assets/css/ace-responsive.min.css" />
		<link rel="stylesheet" href="assets/css/ace-skins.min.css" />

		<!--[if lte IE 8]>
		  <link rel="stylesheet" href="assets/css/ace-ie.min.css" />
		<![endif]-->

		<!--inline styles if any-->
		<script>
function formSubmit1()
{
document.getElementById("frm1").submit();
}
function formSubmit2()
{
document.getElementById("frm2").submit();
}
function formSubmit3()
{
document.getElementById("frm3").submit();
}
function formSubmit4()
{
document.getElementById("frm4").submit();
}
function formSubmit5()
{
document.getElementById("frm5").submit();
}
function formSubmit6()
{
document.getElementById("frm6").submit();
}
</script>
	</head>

	<body>
<?php
if (isset($_GET['id']))
{
echo '<audio autoplay>
  <source src="sound.mp3" type="audio/mp3">
  
Your browser does not support the audio element.
</audio>';
}
?>
		<div class="navbar navbar-inverse">
			<div class="navbar-inner">
				<div class="container-fluid">
					<a href="#" class="brand">
						<small>
							<i class="icon-leaf"></i>
							Smart House
						</small>
					</a><!--/.brand-->

					<ul class="nav ace-nav pull-right">
						<li class="grey">
							<a data-toggle="dropdown" class="dropdown-toggle" href="#">
								<i class="icon-tasks"></i>
								<span class="badge badge-grey">4</span>
							</a>

							<ul class="pull-right dropdown-navbar dropdown-menu dropdown-caret dropdown-closer">
								<li class="nav-header">
									<i class="icon-ok"></i>
									
								</li>

								<li>
									<a href="#">
										<div class="clearfix">
											<span class="pull-left">Software Update</span>
											<span class="pull-right">65%</span>
										</div>

										<div class="progress progress-mini ">
											<div style="width:65%" class="bar"></div>
										</div>
									</a>
								</li>

								<li>
									<a href="#">
										<div class="clearfix">
											<span class="pull-left">Hardware Upgrade</span>
											<span class="pull-right">35%</span>
										</div>

										<div class="progress progress-mini progress-danger">
											<div style="width:35%" class="bar"></div>
										</div>
									</a>
								</li>

								<li>
									<a href="#">
										<div class="clearfix">
											<span class="pull-left">Unit Testing</span>
											<span class="pull-right">15%</span>
										</div>

										<div class="progress progress-mini progress-warning">
											<div style="width:15%" class="bar"></div>
										</div>
									</a>
								</li>

								<li>
									<a href="#">
										<div class="clearfix">
											<span class="pull-left">Bug Fixes</span>
											<span class="pull-right">90%</span>
										</div>

										<div class="progress progress-mini progress-success progress-striped active">
											<div style="width:90%" class="bar"></div>
										</div>
									</a>
								</li>

								<li>
									<a href="#">
										See tasks with details
										<i class="icon-arrow-right"></i>
									</a>
								</li>
							</ul>
						</li>

						<li class="purple">
							<a data-toggle="dropdown" class="dropdown-toggle" href="#">
								<i class="icon-bell-alt icon-only icon-animated-bell"></i>
								<span class="badge badge-important">8</span>
							</a>

							<ul class="pull-right dropdown-navbar navbar-pink dropdown-menu dropdown-caret dropdown-closer">
								<li class="nav-header">
									<i class="icon-warning-sign"></i>
									8 Notifications
								</li>

								<li>
									<a href="#">
										<div class="clearfix">
											<span class="pull-left">
												<i class="btn btn-mini no-hover btn-pink icon-comment"></i>
												New Comments
											</span>
											<span class="pull-right badge badge-info">+12</span>
										</div>
									</a>
								</li>

								<li>
									<a href="#">
										<i class="btn btn-mini btn-primary icon-user"></i>
										Bob just signed up as an editor ...
									</a>
								</li>

								<li>
									<a href="#">
										<div class="clearfix">
											<span class="pull-left">
												<i class="btn btn-mini no-hover btn-success icon-shopping-cart"></i>
												New Orders
											</span>
											<span class="pull-right badge badge-success">+8</span>
										</div>
									</a>
								</li>

								<li>
									<a href="#">
										<div class="clearfix">
											<span class="pull-left">
												<i class="btn btn-mini no-hover btn-info icon-twitter"></i>
												Followers
											</span>
											<span class="pull-right badge badge-info">+11</span>
										</div>
									</a>
								</li>

								<li>
									<a href="#">
										See all notifications
										<i class="icon-arrow-right"></i>
									</a>
								</li>
							</ul>
						</li>

						<li class="green">
							<a data-toggle="dropdown" class="dropdown-toggle" href="#">
								<i class="icon-envelope-alt icon-only icon-animated-vertical"></i>
								<span class="badge badge-success">5</span>
							</a>

							<ul class="pull-right dropdown-navbar dropdown-menu dropdown-caret dropdown-closer">
								<li class="nav-header">
									<i class="icon-envelope"></i>
									5 Messages
								</li>

								<li>
									<a href="#">
										<img src="assets/avatars/avatar.png" class="msg-photo" alt="Alex's Avatar" />
										<span class="msg-body">
											<span class="msg-title">
												<span class="blue">Alex:</span>
												Ciao sociis natoque penatibus et auctor ...
											</span>

											<span class="msg-time">
												<i class="icon-time"></i>
												<span>a moment ago</span>
											</span>
										</span>
									</a>
								</li>

								<li>
									<a href="#">
										<img src="assets/avatars/avatar3.png" class="msg-photo" alt="Susan's Avatar" />
										<span class="msg-body">
											<span class="msg-title">
												<span class="blue">Susan:</span>
												Vestibulum id ligula porta felis euismod ...
											</span>

											<span class="msg-time">
												<i class="icon-time"></i>
												<span>20 minutes ago</span>
											</span>
										</span>
									</a>
								</li>

								<li>
									<a href="#">
										<img src="assets/avatars/avatar4.png" class="msg-photo" alt="Bob's Avatar" />
										<span class="msg-body">
											<span class="msg-title">
												<span class="blue">Bob:</span>
												Nullam quis risus eget urna mollis ornare ...
											</span>

											<span class="msg-time">
												<i class="icon-time"></i>
												<span>3:15 pm</span>
											</span>
										</span>
									</a>
								</li>

								<li>
									<a href="#">
										See all messages
										<i class="icon-arrow-right"></i>
									</a>
								</li>
							</ul>
						</li>

						<li class="light-blue user-profile">
							<a data-toggle="dropdown" href="#" class="user-menu dropdown-toggle">
								<img class="nav-user-photo" src="" alt="Jason's Photo" />
								<span id="user_info">
									<small>Welcome,</small>
									Daniel
								</span>

								<i class="icon-caret-down"></i>
							</a>

							<ul class="pull-right dropdown-menu dropdown-yellow dropdown-caret dropdown-closer" id="user_menu">
								<li>
									<a href="#">
										<i class="icon-cog"></i>
										Settings
									</a>
								</li>

								<li>
									<a href="#">
										<i class="icon-user"></i>
										Profile
									</a>
								</li>

								<li class="divider"></li>

								<li>
									<a href="#">
										<i class="icon-off"></i>
										Logout
									</a>
								</li>
							</ul>
						</li>
					</ul><!--/.ace-nav-->
				</div><!--/.container-fluid-->
			</div><!--/.navbar-inner-->
		</div>

		<div class="container-fluid" id="main-container">
			<a id="menu-toggler" href="#">
				<span></span>
			</a>

			<div id="sidebar">
				<div id="sidebar-shortcuts">
					<div id="sidebar-shortcuts-large">
						<button class="btn btn-small btn-success">
							<i class="icon-signal"></i>
						</button>

						<button class="btn btn-small btn-info">
							<i class="icon-pencil"></i>
						</button>

						<button class="btn btn-small btn-warning">
							<i class="icon-group"></i>
						</button>

						<button class="btn btn-small btn-danger">
							<i class="icon-cogs"></i>
						</button>
					</div>

					<div id="sidebar-shortcuts-mini">
						<span class="btn btn-success"></span>

						<span class="btn btn-info"></span>

						<span class="btn btn-warning"></span>

						<span class="btn btn-danger"></span>
					</div>
				</div><!--#sidebar-shortcuts-->

				<ul class="nav nav-list">
					<li class="active">
						<a href="index.html">
							<i class="icon-dashboard"></i>
							<span>Dashboard</span>
						</a>
					</li>

					<li>
						<a href="typography.html">
							<i class="icon-text-width"></i>
							<span>Device</span>
						</a>
					</li>

					<li>
						<a href="#" class="dropdown-toggle">
							<i class="icon-desktop"></i>
							<span>Webcam</span>

							<b class="arrow icon-angle-down"></b>
						</a>

						<ul class="submenu">
							<li>
								<a href="elements.html">
									<i class="icon-double-angle-right"></i>
									Elements
								</a>
							</li>

							<li>
								<a href="buttons.html">
									<i class="icon-double-angle-right"></i>
									Buttons &amp; Icons
								</a>
							</li>

							<li>
								<a href="treeview.html">
									<i class="icon-double-angle-right"></i>
									Treeview
								</a>
							</li>
						</ul>
					</li>

					<li>
						<a href="tables.html">
							<i class="icon-list"></i>
							<span>Status</span>
						</a>
					</li>

					<li>
						<a href="#" class="dropdown-toggle">
							<i class="icon-edit"></i>
							<span>Messeage</span>

							<b class="arrow icon-angle-down"></b>
						</a>

						<ul class="submenu">
							<li>
								<a href="form-elements.html">
									<i class="icon-double-angle-right"></i>
									
								</a>
							</li>

							<li>
								<a href="form-wizard.html">
									<i class="icon-double-angle-right"></i>
									
								</a>
							</li>

							<li>
								<a href="wysiwyg.html">
									<i class="icon-double-angle-right"></i>
									
								</a>
							</li>
						</ul>
					</li>

					<li>
						<a href="widgets.html">
							<i class="icon-list-alt"></i>
							<span></span>
						</a>
					</li>

					<li>
						<a href="calendar.html">
							<i class="icon-calendar"></i>
							<span>Set time </span>
						</a>
					</li>

					<li>
						<a href="gallery.html">
							<i class="icon-picture"></i>
							<span>Gallery</span>
						</a>
					</li>

					<li>
						<a href="grid.html">
							<i class="icon-th"></i>
							<span></span>
						</a>
					</li>

					<li>
						<a href="#" class="dropdown-toggle">
							<i class="icon-file"></i>
							<span></span>

							<b class="arrow icon-angle-down"></b>
						</a>

						<ul class="submenu">
							<li>
								<a href="pricing.html">
									<i class="icon-double-angle-right"></i>
									
								</a>
							</li>

							<li>
								<a href="invoice.html">
									<i class="icon-double-angle-right"></i>
									
								</a>
							</li>

							<li>
								<a href="login.html">
									<i class="icon-double-angle-right"></i>
									
								</a>
							</li>

							<li>
								<a href="error-404.html">
									<i class="icon-double-angle-right"></i>
									
								</a>
							</li>

							<li>
								<a href="error-500.html">
									<i class="icon-double-angle-right"></i>
									
								</a>
							</li>

							<li>
								<a href="blank.html">
									<i class="icon-double-angle-right"></i>
									
								</a>
							</li>
						</ul>
					</li>
				</ul><!--/.nav-list-->

				<div id="sidebar-collapse">
					<i class="icon-double-angle-left"></i>
				</div>
			</div>

			<div id="main-content" class="clearfix">
				<div id="breadcrumbs">
					<ul class="breadcrumb">
						<li>
							<i class="icon-home"></i>
							<a href="#">Home</a>

							<span class="divider">
								<i class="icon-angle-right"></i>
							</span>
						</li>
						<li class="active">Dashboard</li>
					</ul><!--.breadcrumb-->

					<div id="nav-search">
						<form class="form-search">
							<span class="input-icon">
								<input type="text" placeholder="Search ..." class="input-small search-query" id="nav-search-input" autocomplete="off" />
								<i class="icon-search" id="nav-search-icon"></i>
							</span>
						</form>
					</div><!--#nav-search-->
				</div>

				<div id="page-content" class="clearfix">
					<div class="page-header position-relative">
						<h1>
							Dashboard
							<small>
								<i class="icon-double-angle-right"></i>
								overview &amp; stats
							</small>
						</h1>
					</div><!--/.page-header-->

					<div class="row-fluid">
						<!--PAGE CONTENT BEGINS HERE-->

						<div class="alert alert-block alert-success">
							<button type="button" class="close" data-dismiss="alert">
								<i class="icon-remove"></i>
							</button>

							<i class="icon-ok green"></i>

							Welcome to
							<strong class="green">
								Ace
								<small>(v1.1)</small></strong>, the lightweight, feature-rich, easy to use and well-documented admin template.
						</div>

						<div class="space-6"></div>

						<div class="row-fluid">
							<div class="span7 infobox-container">
								<div class="infobox infobox-green  ">
									<div class="infobox-icon">
										<i class="icon-comments"></i>
									</div>

									<div class="infobox-data">
										<span class="infobox-data-number">Television <form id="frm1" action='index.php?id=1&dv=tv' method="post">
<input type="button" onclick="formSubmit1()" value="turn on" style="width: 100px;">
	</form>
	<form id="frm2" action='index.php?id=0&dv=tv' method="post">
<input type="button" onclick="formSubmit2()" value="turn off" style="width: 100px;">
	</form></span>
										<div class="infobox-content">
										
										
					
										
										</div>
									</div>
									
								</div>

								<div class="infobox infobox-blue  ">
									<div class="infobox-icon">
										<i class="icon-twitter"></i>
									</div>

									<div class="infobox-data">
										<span class="infobox-data-number">Lamp <form id="frm3" action='index.php?id=1&dv=la' method="post">
<input type="button" onclick="formSubmit3()" value="turn on" style="width: 100px;">

	</form>
	
	<form id="frm4" action='index.php?id=0&dv=la' method="post">
<input type="button" onclick="formSubmit4()" value="turn off" style="width: 100px;">
	</form></span>
										
					
					
					
										
									</div>

								
								</div>
<form id="frm5" action='index.php?id=3' method="post">
<input type="button" onclick="formSubmit5()" value="turn on both" style="width: 150px;">
	</form>
	
		<form id="frm6" action='index.php?id=4' method="post">
<input type="button" onclick="formSubmit6()" value="turn off both" style="width: 150px;">
	</form>
								

								

								


								
							</div>

							<div class="vspace"></div>

							<div class="span5">
								<div class="widget-box">
									<div class="widget-header widget-header-flat widget-header-small">
										<h5>
											<i class="icon-signal"></i>
											Traffic Sources
										</h5>

										<div class="widget-toolbar no-border">
											<button class="btn btn-minier btn-primary dropdown-toggle" data-toggle="dropdown">
												This Week
												<i class="icon-angle-down icon-on-right"></i>
											</button>

											<ul class="dropdown-menu dropdown-info pull-right dropdown-caret">
												<li class="active">
													<a href="#">This Week</a>
												</li>

												<li>
													<a href="#">Last Week</a>
												</li>

												<li>
													<a href="#">This Month</a>
												</li>

												<li>
													<a href="#">Last Month</a>
												</li>
											</ul>
										</div>
									</div>

									<div class="widget-body">
										<div class="widget-main">
											<div id="piechart-placeholder"></div>

											<div class="hr hr8 hr-double"></div>

											<div class="clearfix">
												<div class="grid3">
													<span class="grey">
														<i class="icon-facebook-sign icon-2x blue"></i>
														&nbsp; likes
													</span>
													<h4 class="bigger pull-right">1,255</h4>
												</div>

												<div class="grid3">
													<span class="grey">
														<i class="icon-twitter-sign icon-2x purple"></i>
														&nbsp; tweets
													</span>
													<h4 class="bigger pull-right">941</h4>
												</div>

												<div class="grid3">
													<span class="grey">
														<i class="icon-pinterest-sign icon-2x red"></i>
														&nbsp; pins
													</span>
													<h4 class="bigger pull-right">1,050</h4>
												</div>
											</div>
										</div><!--/widget-main-->
									</div><!--/widget-body-->
								</div><!--/widget-box-->
							</div><!--/span-->
						</div><!--/row-->

						<div class="hr hr32 hr-dotted"></div>

						<div class="row-fluid">
							<div class="span5">
								<div class="widget-box transparent">
									

									
									</div><!--/widget-body-->
								</div><!--/widget-box-->
							</div>

							<div class="span7">
								
							</div>
						</div>

						<div class="hr hr32 hr-dotted"></div>

						<div class="row-fluid">
							<div class="span6">
								<div class="widget-box transparent" id="recent-box">
									
									

								</div><!--/widget-box-->
							</div><!--/span-->

							<div class="span6">
								<div class="widget-box ">
									<div class="widget-header">
										<h4 class="lighter smaller">
											<i class="icon-comment blue"></i>
											Conversation
										</h4>
									</div>

									<div class="widget-body">
										<div class="widget-main no-padding">
											<div class="dialogs">
												<div class="itemdiv dialogdiv">
													<div class="user">
														<img alt="Alexa's Avatar" src="assets/avatars/avatar1.png" />
													</div>

													<div class="body">
														<div class="time">
															<i class="icon-time"></i>
															<span class="green">4 sec</span>
														</div>

														<div class="name">
															<a href="#">Alexa</a>
														</div>
														<div class="text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque commodo massa sed ipsum porttitor facilisis.</div>

														<div class="tools">
															<a href="#" class="btn btn-minier btn-info">
																<i class="icon-only icon-share-alt"></i>
															</a>
														</div>
													</div>
												</div>

												<div class="itemdiv dialogdiv">
													<div class="user">
														<img alt="John's Avatar" src="assets/avatars/avatar.png" />
													</div>

													<div class="body">
														<div class="time">
															<i class="icon-time"></i>
															<span class="blue">38 sec</span>
														</div>

														<div class="name">
															<a href="#">John</a>
														</div>
														<div class="text">Raw denim you probably haven&#39;t heard of them jean shorts Austin.</div>

														<div class="tools">
															<a href="#" class="btn btn-minier btn-info">
																<i class="icon-only icon-share-alt"></i>
															</a>
														</div>
													</div>
												</div>

												<div class="itemdiv dialogdiv">
													<div class="user">
														<img alt="Bob's Avatar" src="assets/avatars/user.jpg" />
													</div>

													<div class="body">
														<div class="time">
															<i class="icon-time"></i>
															<span class="orange">2 min</span>
														</div>

														<div class="name">
															<a href="#">Bob</a>
															<span class="label label-info arrowed arrowed-in-right">admin</span>
														</div>
														<div class="text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque commodo massa sed ipsum porttitor facilisis.</div>

														<div class="tools">
															<a href="#" class="btn btn-minier btn-info">
																<i class="icon-only icon-share-alt"></i>
															</a>
														</div>
													</div>
												</div>

												<div class="itemdiv dialogdiv">
													<div class="user">
														<img alt="Jim's Avatar" src="assets/avatars/avatar4.png" />
													</div>

													<div class="body">
														<div class="time">
															<i class="icon-time"></i>
															<span class="grey">3 min</span>
														</div>

														<div class="name">
															<a href="#">Jim</a>
														</div>
														<div class="text">Raw denim you probably haven&#39;t heard of them jean shorts Austin.</div>

														<div class="tools">
															<a href="#" class="btn btn-minier btn-info">
																<i class="icon-only icon-share-alt"></i>
															</a>
														</div>
													</div>
												</div>

												<div class="itemdiv dialogdiv">
													<div class="user">
														<img alt="Alexa's Avatar" src="assets/avatars/avatar1.png" />
													</div>

													<div class="body">
														<div class="time">
															<i class="icon-time"></i>
															<span class="green">4 min</span>
														</div>

														<div class="name">
															<a href="#">Alexa</a>
														</div>
														<div class="text">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</div>

														<div class="tools">
															<a href="#" class="btn btn-minier btn-info">
																<i class="icon-only icon-share-alt"></i>
															</a>
														</div>
													</div>
												</div>
											</div>

											<form>
												<div class="form-actions input-append">
													<input placeholder="Type your message here ..." type="text" class="width-75" name="message" />
													<button class="btn btn-small btn-info no-radius" onclick="return false;">
														<i class="icon-share-alt"></i>
														<span class="hidden-phone">Send</span>
													</button>
												</div>
											</form>
										</div><!--/widget-main-->
									</div><!--/widget-body-->
								</div><!--/widget-box-->
							</div><!--/span-->
						</div><!--/row-->

						<!--PAGE CONTENT ENDS HERE-->
					</div><!--/row-->
				</div><!--/#page-content-->

				<div id="ace-settings-container">
					<div class="btn btn-app btn-mini btn-warning" id="ace-settings-btn">
						<i class="icon-cog"></i>
					</div>

					<div id="ace-settings-box">
						<div>
							<div class="pull-left">
								<select id="skin-colorpicker" class="hidden">
									<option data-class="default" value="#438EB9">#438EB9</option>
									<option data-class="skin-1" value="#222A2D">#222A2D</option>
									<option data-class="skin-2" value="#C6487E">#C6487E</option>
									<option data-class="skin-3" value="#D0D0D0">#D0D0D0</option>
								</select>
							</div>
							<span>&nbsp; Choose Skin</span>
						</div>

						<div>
							<input type="checkbox" class="ace-checkbox-2" id="ace-settings-header" />
							<label class="lbl" for="ace-settings-header"> Fixed Header</label>
						</div>

						<div>
							<input type="checkbox" class="ace-checkbox-2" id="ace-settings-sidebar" />
							<label class="lbl" for="ace-settings-sidebar"> Fixed Sidebar</label>
						</div>
					</div>
				</div><!--/#ace-settings-container-->
			</div><!--/#main-content-->
		</div><!--/.fluid-container#main-container-->

		<a href="#" id="btn-scroll-up" class="btn btn-small btn-inverse">
			<i class="icon-double-angle-up icon-only bigger-110"></i>
		</a>

		<!--basic scripts-->

		<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
		<script type="text/javascript">
			window.jQuery || document.write("<script src='assets/js/jquery-1.9.1.min.js'>"+"<"+"/script>");
		</script>
		<script src="assets/js/bootstrap.min.js"></script>

		<!--page specific plugin scripts-->

		<!--[if lte IE 8]>
		  <script src="/js/"></script>
		<![endif]-->

		<script src="assets/js/jquery-ui-1.10.3.custom.min.js"></script>
		<script src="assets/js/jquery.ui.touch-punch.min.js"></script>
		<script src="assets/js/jquery.slimscroll.min.js"></script>
		<script src="assets/js/jquery.easy-pie-chart.min.js"></script>
		<script src="assets/js/jquery.sparkline.min.js"></script>
		<script src="assets/js/flot/jquery.flot.min.js"></script>
		<script src="assets/js/flot/jquery.flot.pie.min.js"></script>
		<script src="assets/js/flot/jquery.flot.resize.min.js"></script>

		<!--ace scripts-->

		<script src="assets/js/ace-elements.min.js"></script>
		<script src="assets/js/ace.min.js"></script>

		<!--inline scripts related to this page-->

		<script type="text/javascript">
			$(function() {
			
				$('.dialogs,.comments').slimScroll({
			        height: '300px'
			    });
				
				$('#tasks').sortable();
				$('#tasks').disableSelection();
				$('#tasks input:checkbox').removeAttr('checked').on('click', function(){
					if(this.checked) $(this).closest('li').addClass('selected');
					else $(this).closest('li').removeClass('selected');
				});
			
				var oldie = $.browser.msie && $.browser.version < 9;
				$('.easy-pie-chart.percentage').each(function(){
					var $box = $(this).closest('.infobox');
					var barColor = $(this).data('color') || (!$box.hasClass('infobox-dark') ? $box.css('color') : 'rgba(255,255,255,0.95)');
					var trackColor = barColor == 'rgba(255,255,255,0.95)' ? 'rgba(255,255,255,0.25)' : '#E2E2E2';
					var size = parseInt($(this).data('size')) || 50;
					$(this).easyPieChart({
						barColor: barColor,
						trackColor: trackColor,
						scaleColor: false,
						lineCap: 'butt',
						lineWidth: parseInt(size/10),
						animate: oldie ? false : 1000,
						size: size
					});
				})
			
				$('.sparkline').each(function(){
					var $box = $(this).closest('.infobox');
					var barColor = !$box.hasClass('infobox-dark') ? $box.css('color') : '#FFF';
					$(this).sparkline('html', {tagValuesAttribute:'data-values', type: 'bar', barColor: barColor , chartRangeMin:$(this).data('min') || 0} );
				});
			
			
			
			
			  var data = [
				{ label: "social networks",  data: 38.7, color: "#68BC31"},
				{ label: "search engines",  data: 24.5, color: "#2091CF"},
				{ label: "ad campaings",  data: 8.2, color: "#AF4E96"},
				{ label: "direct traffic",  data: 18.6, color: "#DA5430"},
				{ label: "other",  data: 10, color: "#FEE074"}
			  ];
			
			  var placeholder = $('#piechart-placeholder').css({'width':'90%' , 'min-height':'150px'});
			  $.plot(placeholder, data, {
				
				series: {
			        pie: {
			            show: true,
						tilt:0.8,
						highlight: {
							opacity: 0.25
						},
						stroke: {
							color: '#fff',
							width: 2
						},
						startAngle: 2
						
			        }
			    },
			    legend: {
			        show: true,
					position: "ne", 
				    labelBoxBorderColor: null,
					margin:[-30,15]
			    }
				,
				grid: {
					hoverable: true,
					clickable: true
				},
				tooltip: true, //activate tooltip
				tooltipOpts: {
					content: "%s : %y.1",
					shifts: {
						x: -30,
						y: -50
					}
				}
				
			 });
			
			 
			  var $tooltip = $("<div class='tooltip top in' style='display:none;'><div class='tooltip-inner'></div></div>").appendTo('body');
			  placeholder.data('tooltip', $tooltip);
			  var previousPoint = null;
			
			  placeholder.on('plothover', function (event, pos, item) {
				if(item) {
					if (previousPoint != item.seriesIndex) {
						previousPoint = item.seriesIndex;
						var tip = item.series['label'] + " : " + item.series['percent']+'%';
						$(this).data('tooltip').show().children(0).text(tip);
					}
					$(this).data('tooltip').css({top:pos.pageY + 10, left:pos.pageX + 10});
				} else {
					$(this).data('tooltip').hide();
					previousPoint = null;
				}
				
			 });
			
			
			
			
			
			
				var d1 = [];
				for (var i = 0; i < Math.PI * 2; i += 0.5) {
					d1.push([i, Math.sin(i)]);
				}
			
				var d2 = [];
				for (var i = 0; i < Math.PI * 2; i += 0.5) {
					d2.push([i, Math.cos(i)]);
				}
			
				var d3 = [];
				for (var i = 0; i < Math.PI * 2; i += 0.2) {
					d3.push([i, Math.tan(i)]);
				}
				
			
				var sales_charts = $('#sales-charts').css({'width':'100%' , 'height':'220px'});
				$.plot("#sales-charts", [
					{ label: "Domains", data: d1 },
					{ label: "Hosting", data: d2 },
					{ label: "Services", data: d3 }
				], {
					hoverable: true,
					shadowSize: 0,
					series: {
						lines: { show: true },
						points: { show: true }
					},
					xaxis: {
						tickLength: 0
					},
					yaxis: {
						ticks: 10,
						min: -2,
						max: 2,
						tickDecimals: 3
					},
					grid: {
						backgroundColor: { colors: [ "#fff", "#fff" ] },
						borderWidth: 1,
						borderColor:'#555'
					}
				});
			
			
				$('#recent-box [data-rel="tooltip"]').tooltip({placement: tooltip_placement});
				function tooltip_placement(context, source) {
					var $source = $(source);
					var $parent = $source.closest('.tab-content')
					var off1 = $parent.offset();
					var w1 = $parent.width();
			
					var off2 = $source.offset();
					var w2 = $source.width();
			
					if( parseInt(off2.left) < parseInt(off1.left) + parseInt(w1 / 2) ) return 'right';
					return 'left';
				}
			})
		</script>
	</body>
</html>
