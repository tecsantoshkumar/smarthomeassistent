<?php 
include('dbcon.php');
include('indexjs.php');
include('indexcs.php');
 ?>
<!DOCTYPE html>
<html>
<head>
	<title>office</title>

	<meta name="viewport" content="width=device-width, height=device-height, initial-scale=1.0, user-scalable=0, minimum-scale=1.0, maximum-scale=1.0">
	<link rel="icon" type="image/png" href="img/office.png">
	<!--link rel="stylesheet" href="bin/libcss/wether.css"-->
	<link rel="stylesheet" href="bin/libcss/body.css">
	<script src="bin/libcss/skycons.js"></script>
	<!-- Import lib -->
	<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.3/Chart.min.css">
	<link rel="stylesheet" type="text/css" href="at-pro-admin-template/fontawesome-free/css/all.min.css">
	<link href="https://fonts.googleapis.com/css2?family=Roboto&display=swap" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="at-pro-admin-template/style.css">
	<!-- End import lib -->
	<!-- import script -->
	<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.3/Chart.min.js"></script>
	<script src="at-pro-admin-template/index.js"></script>
	<script src="bin/libjs/light-no-off.js"></script>
	
	<style>
h1
{
    font-size:3em;
    text-align:Center;
    color:#000;
    font-weight:300;
    font-family:sans-serif;
}
.main
{
    padding:6em 0 0 ;
}
.main-info
{
    width:100%;
    margin:0em auto;
    background:#32457c;
    padding:2em;
    border-radius:5px;
}
.weather-grids
{
    float:left;
    width:33%;
}
.weather-grids.weather-mdl
{
    text-align:center;
}
.weather-grids:nth-child(3)
{
    text-align:right;
}
.weather-grids h3
{
    font-size:1.5em;
    color:#fff;
}
.weather-grids h3.fri
{
    font-weight:900;
    color:#FFD700;
    margin-top:0.7em;
}
.weather-grids h2
{
    font-size:3em;
    font-weight:300;
    color:#fff;
}
.weather-grids h4
{
    font-size:1em;
    color:#fff;
}
.clear
{
    clear : both;
}
.weather-bottom
{
    text-align:center;
    margin-top:2em;
}
.weather-bottom ul li
{
    display:inline-block;
    padding:1em 0;
    float:left;
    width:14.1%;
}
.weather-bottom ul li.bg
{
    background:#314277;
}
.weather-bottom h4
{
    font-size:1em;
    color:#fff;
    font-weight:100;
}
figure .icons
{
    margin:0.5em 0;
}
.weather-bottom h5
{
    font-size:1.2em;
    color:#fff;
    font-weight:600;
}
.weather-bottom h6
{
    font-size:1em;
    color:#FFD700;
    margin-top:0.5em;
}

@media(max-width:1440px)
{
    .main
    {
        padding:5em 0 0;
    }
}
@media (max-width:1336px)
{
    .main-info
    {
        width:37%;
    }
}
@media(max-width:1280px)
{
    .main-info
    {
        width:39%;
    }
}
@media(max-width:1080px)
{
    .main-info
    {
        width:46%;
    }
}
@media(max-width:1024px)
{
    .main-info
    {
        width:47%;
    }
}
@media(max-width:900px)
{
    .main-info
    {
        width:50%;
    }
}
@media(max-width:800px)
{
    .main
    {
        padding:4em 0 0;
    }
    .main-info
    {
        margin:4em auto;
    }
    h1
    {
        font-size:2.8em;
    }
    .main-info
    {
        width:58%;
    }
}
@media(max-width:640px)
{
    h1 
    {
        font-size:2.6em;
    }
    .main-info
    {
        width:70%;
        padding:1.5em;
    }
    .weather-grids h2
    {
        font-size:2.8em;
    }
}
@media(max-width:480px)
{
    h1
    {
        font-size:2.2em;
    }
    .main-info
    {
        width:82%;
        margin:3em auto;
    }
    .weather-grids h3
    {
        font-size:1.3em;
    }
    .weather-grids h2
    {
        font-size:2.5em;
    }
    .weather-grids h4
    {
        font-size:0.8em;
    }
    .weather-bottom h5
    {
        font-size:1.1em;
    }
    .weather-bottom h6
    {
        font-size:1.1em;
    }
    .main
    {
        padding:3em 0 0;
    }
}
@media(max-width:414px)
{
    .main-info
    {
        padding:1.5em 1em;
    }
    .weather-bottom h4
    {
        font-size:0.9em
    }
    canvas#clear-day
    {
        width:60px;
        height:60px;
    }
    .weather-bottom canvas
    {
        width:30px;
        height:30px;
    }
    .weather-bottom
    {
        margin-top:1.5em;
    }
}
@media(max-width:375px)
{
    h1 
    {
        font-size:1em;
    }
    .main
    {
        padding:2em 0 0;
    }
}
@media(max-width:320px)
{
    h1
    {
        font-size:1.6em;
    }
    .main-info
    {
        width:82%;
        margin:1.5em auto;
        padding:1em;
    }
    .weather-grids h2
    {
        font-size:2em;
    }
    .weather-grids h4
    {
        font-size:0.7em;
    }
    .weather-grids h3
    {
        font-size:1.1em;
    }
    canvas#clear-day
    {
        width:55px;
        height:55px;
    }
    .weather-bottom canvas
    {
        width:20px;
        height:20px;
    }
    .weather-bottom ul li
    {
        width:14.2%;
        padding:0.5em 0;
    }
    .weather-bottom h5
    {
        font-size:0.9em;
    }
    .weather-bottom h6
    {
        font-size:0.8em;
    }
    
}
	</style>
</head>
<body class="overlay-scrollbar">
	<!-- navbar -->
	<div class="navbar">
		<!-- nav left -->
		<ul class="navbar-nav">
			<li class="nav-item">
				<a class="nav-link">
					<i class="fas fa-bars" onclick="collapseSidebar()"></i>
				</a>
			</li>
			<li class="nav-item">
				<img src="img/manu.png" alt="ATPro logo" class="logo logo-light">
				<img src="img/manu.png" alt="ATPro logo" class="logo logo-dark">
			</li>
		</ul>
		<!-- end nav left -->
		<!-- form -->
		<form class="navbar-search">
			<input type="text" name="Search" class="navbar-search-input" placeholder="What you looking for...">
			<i class="fas fa-search"></i>
		</form>
		<!-- end form -->
		<!-- nav right -->
		<ul class="navbar-nav nav-right">
			<li class="nav-item mode">
				<a class="nav-link" href="#" onclick="switchTheme()">
					<i class="fas fa-moon dark-icon"></i>
					<i class="fas fa-sun light-icon"></i>
				</a>
			</li>
			<li class="nav-item dropdown">
				<a class="nav-link">
					<i class="fas fa-bell dropdown-toggle" data-toggle="notification-menu"></i>
					<span class="navbar-badge">15</span>
				</a>
				<ul id="notification-menu" class="dropdown-menu notification-menu">
					<div class="dropdown-menu-header">
						<span>
							Notifications
						</span>
					</div>
					<div class="dropdown-menu-content overlay-scrollbar scrollbar-hover">
						<li class="dropdown-menu-item">
							<a href="#" class="dropdown-menu-link">
								<div>
									<i class="fas fa-gift"></i>
								</div>
								<span>
									Lorem ipsum dolor sit amet, consectetuer adipiscing elit.
									<br>
									<span>
										15/07/2020
									</span>
								</span>
							</a>
						</li>
						<li class="dropdown-menu-item">
							<a href="#" class="dropdown-menu-link">
								<div>
									<i class="fas fa-tasks"></i>
								</div>
								<span>
									Lorem ipsum dolor sit amet, consectetuer adipiscing elit.
									<br>
									<span>
										15/07/2020
									</span>
								</span>
							</a>
						</li>
						<li class="dropdown-menu-item">
							<a href="#" class="dropdown-menu-link">
								<div>
									<i class="fas fa-gift"></i>
								</div>
								<span>
									Lorem ipsum dolor sit amet, consectetuer adipiscing elit.
									<br>
									<span>
										15/07/2020
									</span>
								</span>
							</a>
						</li>
						<li class="dropdown-menu-item">
							<a href="#" class="dropdown-menu-link">
								<div>
									<i class="fas fa-tasks"></i>
								</div>
								<span>
									Lorem ipsum dolor sit amet, consectetuer adipiscing elit.
									<br>
									<span>
										15/07/2020
									</span>
								</span>
							</a>
						</li>
						<li class="dropdown-menu-item">
							<a href="#" class="dropdown-menu-link">
								<div>
									<i class="fas fa-gift"></i>
								</div>
								<span>
									Lorem ipsum dolor sit amet, consectetuer adipiscing elit.
									<br>
									<span>
										15/07/2020
									</span>
								</span>
							</a>
						</li>
						<li class="dropdown-menu-item">
							<a href="#" class="dropdown-menu-link">
								<div>
									<i class="fas fa-tasks"></i>
								</div>
								<span>
									Lorem ipsum dolor sit amet, consectetuer adipiscing elit.
									<br>
									<span>
										15/07/2020
									</span>
								</span>
							</a>
						</li>
						<li class="dropdown-menu-item">
							<a href="#" class="dropdown-menu-link">
								<div>
									<i class="fas fa-gift"></i>
								</div>
								<span>
									Lorem ipsum dolor sit amet, consectetuer adipiscing elit.
									<br>
									<span>
										15/07/2020
									</span>
								</span>
							</a>
						</li>
						<li class="dropdown-menu-item">
							<a href="#" class="dropdown-menu-link">
								<div>
									<i class="fas fa-tasks"></i>
								</div>
								<span>
									Lorem ipsum dolor sit amet, consectetuer adipiscing elit.
									<br>
									<span>
										15/07/2020
									</span>
								</span>
							</a>
						</li>
						<li class="dropdown-menu-item">
							<a href="#" class="dropdown-menu-link">
								<div>
									<i class="fas fa-gift"></i>
								</div>
								<span>
									Lorem ipsum dolor sit amet, consectetuer adipiscing elit.
									<br>
									<span>
										15/07/2020
									</span>
								</span>
							</a>
						</li>
						<li class="dropdown-menu-item">
							<a href="#" class="dropdown-menu-link">
								<div>
									<i class="fas fa-tasks"></i>
								</div>
								<span>
									Lorem ipsum dolor sit amet, consectetuer adipiscing elit.
									<br>
									<span>
										15/07/2020
									</span>
								</span>
							</a>
						</li>
						<li class="dropdown-menu-item">
							<a href="#" class="dropdown-menu-link">
								<div>
									<i class="fas fa-gift"></i>
								</div>
								<span>
									Lorem ipsum dolor sit amet, consectetuer adipiscing elit.
									<br>
									<span>
										15/07/2020
									</span>
								</span>
							</a>
						</li>
						<li class="dropdown-menu-item">
							<a href="#" class="dropdown-menu-link">
								<div>
									<i class="fas fa-tasks"></i>
								</div>
								<span>
									Lorem ipsum dolor sit amet, consectetuer adipiscing elit.
									<br>
									<span>
										15/07/2020
									</span>
								</span>
							</a>
						</li>
					</div>
					<div class="dropdown-menu-footer">
						<span>
							View all notifications
						</span>
					</div>
				</ul>
			</li>
			<li class="nav-item avt-wrapper">
				<div class="avt dropdown">
					<img src="img/login.png" alt="User image" class="dropdown-toggle" data-toggle="user-menu">
					<ul id="user-menu" class="dropdown-menu">
						<li  class="dropdown-menu-item">
							<a class="dropdown-menu-link">
								<div>
									<i class="fas fa-user-tie"></i>
								</div>
								<span>Profile</span>
							</a>
						</li>
						<li class="dropdown-menu-item">
							<a href="#" class="dropdown-menu-link">
								<div>
									<i class="fas fa-cog"></i>
								</div>
								<span>Settings</span>
							</a>
						</li>
						<li  class="dropdown-menu-item">
							<a href="#" class="dropdown-menu-link">
								<div>
									<i class="far fa-credit-card"></i>
								</div>
								<span>Payments</span>
							</a>
						</li>
						<li  class="dropdown-menu-item">
							<a href="#" class="dropdown-menu-link">
								<div>
									<i class="fas fa-spinner"></i>
								</div>
								<span>Projects</span>
							</a>
						</li>
						<li  class="dropdown-menu-item">
							<a href="#" class="dropdown-menu-link">
								<div>
									<i class="fas fa-sign-out-alt"></i>
								</div>
								<span>Logout</span>
							</a>
						</li>
					</ul>
				</div>
			</li>
		</ul>
		<!-- end nav right -->
	</div>
	<!-- end navbar -->
	<!-- sidebar -->
	<div class="sidebar">
		<ul class="sidebar-nav">
			<li class="sidebar-nav-item">
				<a href="#" class="sidebar-nav-link">
					<div>
						<i class="fas fa-tachometer-alt"></i>
					</div>
					<span>
						Dashboard
					</span>
				</a>
			</li>
			<li class="sidebar-nav-item">
				  <a href="home.php" class="sidebar-nav-link">
				  <div>
						<img src="img/home.png" width="30px" height="30px">
					</div>
			<span>Home</span>
		  </a>
			</li>
			<li  class="sidebar-nav-item">
				<a href="rooms.php" class="sidebar-nav-link">
				<div>
					<img src="img/room.png" width="30px" height="30px">
				</div>
			<span>Rooms</span>
		  </a>
			</li>
			<li  class="sidebar-nav-item">
				<a href="live.php" class="sidebar-nav-link">
			<div>
<i class="fas fa-bell dropdown-toggle"></i>				
			</div>
			<span>Lives</span>
		  </a>
			</li>
			<li  class="sidebar-nav-item">
				<a href="#" class="sidebar-nav-link" onclick="openNav()">
			<div >
				<i class="fas fa-bell dropdown-toggle"></i>
			</div>
			<span>Notifications</span>
		  </a>
			</li>
			<li  class="sidebar-nav-item">
				<a href="#" class="sidebar-nav-link" onclick="openNav0()">
			<div>
				<img src="img/setting.png" width="30px" height="30px">
			</div>
			<span>Settings</span>
		  </a>
			</li>
			<li  class="sidebar-nav-item">
				<a href="#" class="sidebar-nav-link">
					<div>
						<i class="fas fa-chart-line"></i>
					</div>
					<span>Praesent</span>
				</a>
			</li>
			<li  class="sidebar-nav-item">
				<a href="#" class="sidebar-nav-link">
					<div>
						<i class="fas fa-book-open"></i>
					</div>
					<span>Pellentesque</span>
				</a>
			</li>
			<li  class="sidebar-nav-item">
				<a href="#" class="sidebar-nav-link">
					<div>
						<i class="fas fa-adjust"></i>
					</div>
					<span>Morbi</span>
				</a>
			</li>
			<li  class="sidebar-nav-item">
				<a href="#" class="sidebar-nav-link">
					<div>
						<i class="fab fa-algolia"></i>
					</div>
					<span>Praesent</span>
				</a>
			</li>
			<li  class="sidebar-nav-item">
				<a href="#" class="sidebar-nav-link">
					<div>
						<i class="fas fa-audio-description"></i>
					</div>
					<span>Pellentesque</span>
				</a>
			</li>
		</ul>
	</div>
	<!-- end sidebar -->
	<!-- main content -->
<div class="wrapper">
	<div class="container-fluid text-center bg-grey">
	<h1 class="m-0">Smart Home Assist</h1>
		<!--Start box1 -->
		<div class="row">
			<div class="col-4 col-m-12 col-sm-12">
				<div class="card">
					<div class="card-content">
						<div class="progress-wrapper">
							<div id="container">
								<video autoplay="true" id="videoElement"></video>
							</div>
						</div>
						<a href="office.php">Office</a>
					</div>
				</div>
			</div>
			
			<div class="col-4 col-m-12 col-sm-12">
				<div class="card">
					<div class="card-content">
					   <div class="main-info">
					   <h1> Weather</h1>
						<div class="weather-top">
							<div class="weather-grids">
								<h3 class="fri">FRIDAY</h3>
									<h3>Weather</h3>
							</div>
							<div class="weather-grids weather-mdl">
								<canvas id="clear-day" width="70" height="70"></canvas>
							</div>
							<div class="weather-grids">
								<h4>Max 27°</h4>
								<h2>21°C</h2>
								<h4>Min 10°</h4>
							</div>
							<div class="clear"></div>
						</div>
						   <div class="weather-bottom">
							   <ul>
									<li class="bg"><h4>FRI</h4>
										<figure class="icons">
											<canvas id="clear-night" width="40" height="40"></canvas>
										</figure>
										<h5>27°</h5>
										<h6>17°C</h6>
									</li>
									<li><h4>SAT</h4>
										<figure class="icons">
											<canvas id="partly-cloudy-day" width="40" height="40"></canvas>
										</figure>
										<h5>27°C</h5>
										<h6>17°C</h6>
									</li>
									<li class="bg"><h4>SUN</h4>
										<figure class="icons">
											<canvas id="cloudy" width="40" height="40"></canvas>
										</figure>
										<h5>18°C</h5>
										<h6>12°C</h6>
									</li>
									<li><h4>MON</h4>
										<figure class="icons">
											<canvas id="sleet" width="40" height="40"></canvas>
										</figure>
										<h5>17°C</h5>
										<h6>12°C</h6>
									</li>
									<li class="bg"><h4>TUE</h4>
										<figure class="icons">
											<canvas id="rain" width="40" height="40"></canvas>
										</figure>
										<h5>17°C</h5>
										<h6>10°C</h6>
									</li>
									<li><h4>WED</h4>
										<figure class="icons">
											<canvas id="snow" width="40" height="40"></canvas>
										</figure>
										<h5>24°C</h5>
										<h6>10°C</h6>
									</li>
									<li class="bg"><h4>THR</h4>
										<figure class="icons">
											<canvas id="wind" width="40" height="40"></canvas>
										</figure>
										<h5>25°C</h5>
										<h6>15°C</h6>
									</li>
								</ul>
							   <div class="clear"></div>
						</div>
					</div>
				   </div>
				</div>
			</div>
		
			<div class="col-4 col-m-12 col-sm-12">
				<div class="card">
					<form method="post" id="form1">
						 <table >
						  <tr>
							<td></dt>
							<td><img id="blb" src="img/lightoff.png" alt="not found" width="30" height="50"></dt>
							<td><label class="switch"><input type="checkbox"><span class="slider round"></span></label></td>
						  </tr>
							<tr>
								<td><img id="blb1" src="<?php echo $ch[0]=='checked'?'img/lighton.png':'img/lightoff.png' ?>" alt="not found" width="30" height="50"></td>
								<td>Light</td>
								<td><label class="switch"><input  id="ch1" onchange="fun1(1,'L1')" <?php echo $ch[0]; ?> onclick="vibrate(100)" type="checkbox"><span class="slider round"></span></label></td>
							</tr>
							<tr>
								<td><img id="blb2" src="<?php echo $ch[1]=='checked'?'img/lighton.png':'img/lightoff.png' ?>" alt="not found" width="30" height="50"></td>
								<td>Fan</td>
								<td><label class="switch"><input id="ch2" onchange="fun1(2,'L2')" <?php echo $ch[1]; ?> onclick="vibrate(100)" type="checkbox"><span class="slider round"></span></label></td>
							</tr>
							<tr>
								<td><img id="blb3" src="<?php echo $ch[2]=='checked'?'img/lighton.png':'img/lightoff.png' ?>" alt="not found" width="30" height="50"></td>
								<td>AC</td>
								<td><label class="switch"><input id="ch3" onchange="fun1(3,'L3')" <?php echo $ch[2]; ?> onclick="vibrate(100)" type="checkbox"><span class="slider round"></span></label></td>
							</tr>
							<tr>
								<td><img id="blb4" src="<?php echo $ch[3]=='checked'?'img/lighton.png':'img/lightoff.png' ?>" alt="not found" width="30" height="50"></td>
								<td>Projecter</td>
								<td><label class="switch"><input id="ch4" onchange="fun1(4,'L4')" <?php echo $ch[3]; ?> onclick="vibrate(100)" type="checkbox"><span class="slider round"></span></label></td>
							</tr>
						</table>
					</from>
				</div>
			</div>
			<div class="col-4 col-m-12 col-sm-12">
				<div class="card">
					<div class="card-content">
						<h2> Weather Station</h2>
						<table>
						  <tr>
							<th>SENSOR</th>
							<th>MEASUREMENT</th>
							<th>VALUE</th>
						 </tr>
						  <tr>
							<td><span class="sensor">DHT</span></td>
							<td>Min Temp.</td>
							<td><span class="reading">...</span> *C</td>
						  </tr>
						  <tr>
							<td><span class="sensor">DHT</span></td>
							<td>Temp.</td>
							<td><span class="reading">...</span> *C</td>
						  </tr>
						  <tr>
							<td><span class="sensor">DHT</span></td>
							<td> Max Temp.</td>
							<td><span class="reading">...</span> *C</td>
						  </tr>
						  <tr>
							<td><span class="sensor">DHT</span></td>
							<td>Humidity</td>
							<td><span class="reading">...</span> %</td>
						  </tr>
						  <tr>
							<td><span class="sensor">BMP180</span></td>
							<td>Pressure</td>
							<td><span class="reading">...</span> Pa</td>
						  </tr>
						</table>
						</div>
				</div>
			</div>
			<div class="col-4 col-m-12 col-sm-12">
				<div class="card">
					<div class="card-content">
						<h2>Seven Days Weather Station</h2>
						<table>
						  <tr>
							<th>Date</th>
							<th>Day</th>
							<th></th>
						 </tr>
						  <tr>
							<td><span class="sensor">3/7/2021</span></td>
							<td>Sunday</td>
							<td><span class="reading">...</span> *C</td>
						  </tr>
						  <tr>
							<td><span class="sensor">4/7/2021</span></td>
							<td>Monday</td>
							<td><span class="reading">...</span> *C</td>
						  </tr>
						  <tr>
							<td><span class="sensor">5/7/2021</span></td>
							<td>Tuseday</td>
							<td><span class="reading">...</span> *C</td>
						  </tr>
						  <tr>
							<td><span class="sensor">6/7/2021</span></td>
							<td>Wenesday</td>
							<td><span class="reading">...</span> *C</td>
						  </tr>
						  <tr>
							<td><span class="sensor">7/7/2021</span></td>
							<td>Tharsday</td>
							<td><span class="reading">...</span> *C</td>
						  </tr>
						  <tr>
							<td><span class="sensor">8/7/2021</span></td>
							<td>Friday</td>
							<td><span class="reading">...</span> *C</td>
						  </tr>
						  <tr>
							<td><span class="sensor">9/7/2021</span></td>
							<td>Seterday</td>
							<td><span class="reading">...</span> *C</td>
						  </tr>
						</table>
					</div>
				</div>
			</div>
			<div class="col-4 col-m-12 col-sm-12">
				<div class="card">
					<div class="card-content">
						<h2>Temperature Graph</h2>
						<table>
						  <tr>
							<th>Date</th>
							<th>Day</th>
							<th></th>
						 </tr>
						  <tr>
							<td><span class="sensor">3/7/2021</span></td>
							<td>Sunday</td>
							<td><span class="reading">...</span> *C</td>
						  </tr>
						</table>	
					</div>
				</div>
			</div>
			<div class="col-4 col-m-12 col-sm-12">
				<div class="card">
					<div class="card-content">
						<h2>Humidity Graph</h2>
						<table>
						  <tr>
							<th>Date</th>
							<th>Day</th>
							<th></th>
						 </tr>
						  <tr>
							<td><span class="sensor">3/7/2021</span></td>
							<td>Sunday</td>
							<td><span class="reading">...</span> *C</td>
						  </tr>
						</table>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- end main content -->
	
	<script>
		var video = document.querySelector("#videoElement");
		var videoa = document.querySelector("#videoElementa");
		var video3 = document.querySelector("#videoElement3");
		var video4 = document.querySelector("#videoElement4");
		var video5 = document.querySelector("#videoElement5");
		var video6 = document.querySelector("#videoElement6");
		var video7 = document.querySelector("#videoElement7");
		var video8 = document.querySelector("#videoElement8");
		var video9 = document.querySelector("#videoElement9");

		if (navigator.mediaDevices.getUserMedia) {
		  navigator.mediaDevices.getUserMedia({ video: true })
			.then(function (stream) {
			  video.srcObject = stream;
			})
			.catch(function (err0r) {
			  console.log("Something went wrong!");
			});
		}
		
		if (navigator.mediaDevices.getUserMedia) {
		  navigator.mediaDevices.getUserMedia({ videoa: true })
			.then(function (stream) {
			  video.srcObject = stream;
			})
			.catch(function (err0r) {
			  console.log("Something went wrong!");
			});
		}
	</script>
	
	<script>
                   var icons = new Skycons({"color": "#FFD700"}),
                   list = [
                       "clear-day"
                   ],
                   i;

                   for(i=list.length; i--;)
                    icons.set(list[i], list[i]);

                    icons.play();
               </script>
               <script>
                   var icons = new Skycons({"color": "#F5F5F5"}),
                        list = [
                            "clear-night", "partly-cloudy-day", "cloudy","rain","sleet","snow","wind"
                        ],
                        i;

                        for(i = list.length; i--;)
                            icons.set(list[i], list[i]);

                            icons.play();
               </script>
			   
	<!-- end import script -->
</body>
</html>