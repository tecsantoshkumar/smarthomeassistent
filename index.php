<!DOCTYPE html>
<html>
<head>
	<title>home</title>

	<meta name="viewport" content="width=device-width, height=device-height, initial-scale=1.0, user-scalable=0, minimum-scale=1.0, maximum-scale=1.0">
	<link rel="icon" type="image/png" href="img/home.png"/>

	<!-- Import lib -->
	<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.3/Chart.min.css">
	<link rel="stylesheet" type="text/css" href="at-pro-admin-template/fontawesome-free/css/all.min.css">
	<link href="https://fonts.googleapis.com/css2?family=Roboto&display=swap" rel="stylesheet">
	<!-- End import lib -->
	<link rel="stylesheet" href="style.css">
	<link rel="stylesheet" href="bin/libcss/body.css">
	<link rel="stylesheet" href="style/style.css">
    <script src="index.js"></script>
	<link rel="stylesheet" type="text/css" href="at-pro-admin-template/style.css">
	<style>
	.wrapper{
		height: 100%;
	background: linear-gradient(to top right, #80cbc4, #e1bee7, #80ddea, #d1c4e9);

	}
	
div.scrollmenu {
  overflow: auto;
  white-space: nowrap;
  background: var(--main-bg-color);
	color: var(--main-color);
	border-radius: 10px;
	margin-bottom: 10px;
	box-shadow: 0 4px 8px 0 rgba(0,0,0,0.2);
}

div.scrollmenu a {
  display: inline-block;
  color: black;
  text-align: center;
  padding: 14px;
  text-decoration: none;
}

div.scrollmenu a:hover {
  background-color: #333;
}
</style>

<style>
#container {
	margin: 0px auto;
	width: 355px;
	height: 267px;
	border: 6px #333 solid;
}

.video {
	width: 343px;
	height: 254px;
	background-color: #666;
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
				<a href="rob.php" class="sidebar-nav-link">
				<div>
					<img src="img/bot_avatar.png" width="30px" height="30px">
				</div>
			<span>AI</span>
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
								<video autoplay="true" class="video" id="videoElement"></video>
							</div>
						</div>
						<a href="office.php">Office</a>
					</div>
				</div>
			</div>
			<div class="col-4 col-m-12 col-sm-12">
				<div class="card">
					<div class="card-content">
						<div class="progress-wrapper">
							<div id="container">
								<video autoplay="true" class="video" id="videoElement1"></video>
							</div>
						</div>
						<a href="livingroom.php">Living Room</a>
					</div>
				</div>
			</div>
			<div class="col-4 col-m-12 col-sm-12">
				<div class="card">
					<div class="card-content">
						<div class="progress-wrapper">
							<div id="container">
								<video autoplay="true" class="video" id="videoElement2"></video>
							</div>
						</div>
						<a href="bedroom.php">Bed Room</a>
					</div>
				</div>
			</div>
			<div class="col-4 col-m-12 col-sm-12">
				<div class="card">
					<div class="card-content">
						<div class="progress-wrapper">
							<div id="container">
								<video autoplay="true" class="video" id="videoElement3"></video>
							</div>
						</div>
						<a href="bathroom.php">Bath Room</a>
					</div>
				</div>
			</div>
			<div class="col-4 col-m-12 col-sm-12">
				<div class="card">
					<div class="card-content">
						<div class="progress-wrapper">
							<div id="container">
								<video autoplay="true" class="video" id="videoElement4"></video>
							</div>
						</div>
						<a href="kitchen.php">Bath Room</a>
					</div>
				</div>
			</div>
			<div class="col-4 col-m-12 col-sm-12">
				<div class="card">
					<div class="card-content">
						<div class="progress-wrapper">
							<div id="container">
								<video autoplay="true" class="video" id="videoElement5"></video>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="col-4 col-m-12 col-sm-12">
				<div class="card">
					<div class="card-content">
						<div class="progress-wrapper">
							<div id="container">
								<video autoplay="true" class="video" id="videoElement6"></video>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="col-4 col-m-12 col-sm-12">
				<div class="card">
					<div class="card-content">
						<div class="progress-wrapper">
							<div id="container">
								<video autoplay="true" class="video" id="videoElement7"></video>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="col-4 col-m-12 col-sm-12">
				<div class="card">
					<div class="card-content">
						<div class="progress-wrapper">
							<div id="container">
								<video autoplay="true" class="video" id="videoElement8"></video>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- end main content -->
	<!-- import script -->
	<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.3/Chart.min.js"></script>
	<script src="at-pro-admin-template/index.js"></script>
	<script src="bin/libjs/camera.js"></script>
	<!-- end import script -->
</body>
</html>