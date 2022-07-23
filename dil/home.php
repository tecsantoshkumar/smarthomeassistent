
<?php 
include('dbcon.php');
 ?>
<!DOCTYPE html>
<html>
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="style.css">
	<link rel="stylesheet" href="style/style.css">
    <script src="index.js"></script>
	<title>home</title>
    <link rel="icon" href="data:,">
    <style>
    
.bulb-off{
    width: 5px;
    height: 10px;
    background: url('lightoff.png') no-repeat;
    margin: auto;
}

.bulb-on{
    width: 5px;
    height: 10px;
    background: url('lighton.png') no-repeat;;
    margin: auto;
}
    </style>
<style>
	body {
    margin: 0 0 55px 0;
}

.navtop{
    position: fixed;
    top: 0;
    width: 100%;
    height: 55px;
    box-shadow: 0 0 3px rgba(0, 0, 0, 0.2);
    background-color: #ffffff;
    display: flex;
    overflow-x: auto;
}

.navbottom {
    position: fixed;
    bottom: 0;
    width: 100%;
    height: 55px;
    box-shadow: 0 0 3px rgba(0, 0, 0, 0.2);
    background-color: #ffffff;
    display: flex;
    overflow-x: auto;
}

.nav__link {
    display: flex;
    flex-direction: column;
    align-items: center;
    justify-content: center;
    flex-grow: 1;
    min-width: 50px;
    overflow: hidden;
    white-space: nowrap;
    font-family: sans-serif;
    font-size: 13px;
    color: #444444;
    text-decoration: none;
    -webkit-tap-highlight-color: transparent;
    transition: background-color 0.1s ease-in-out;
}

.nav__link:hover {
    background-color: #eeeeee;
}

.nav__link--active {
    color: #009578;
}

.nav__icon {
    font-size: 18px;
}

	</style>
	<style>
	a,
a:hover,
a:focus{
    color:inherit;
    text-decoration: none;
    transition: all 0.3s;
}
.navbar{
    padding:15px 10px;
    background: #fff;
    border:none;
    border-radius: 0;
    margin-bottom: 40px;
    box-shadow: 1px 1px 3px rgba(0,0,0,0.1);
	
}
.navbar-btn{
    box-shadow: none;
    outline:none !important;
    border:none;
}
.line{
    width:100%;
    height:1px;
    border-bottom: 1px dashed #ddd;
}
.wrapper{
    display: flex;
    width:100%;
    align-items:stretch; 
}
	</style>
	<style>
	*{
  margin:0;
  padding:0;
  box-sizing: border-box;
}
span{
  display: inline-block;
  text-decoration: none;
  color: inherit;
}
.section-head{
  margin-bottom: 60px;
}
.section-head h4{
  position: relative;
  padding: 0;
  color:#f91942;
  line-height: 1;
  letter-spacing: 0.3px;
  font-size:34px;
  font-weight:700;
  text-align: center;
  text-transform: none;
  margin-bottom: 30px;
}
.section-head h4::before{
  content:'';
  width:60px;
  height:3px;
  background:#f91942;
  position:absolute;
  bottom:-10px;
  left:0;
  right:0;
  margin:0 auto;
}
.section-head h4 span{
  font-weight: 700;
  padding-bottom: 5px;
  color:#2f2f2f;
} 
.section-head p{
  color:#818181;
  font-size: 16px;
  line-height: 28px;
  text-align: center;
}
.item{
  background:#fff;
  text-align: center;
  padding:30px 25px;
  box-shadow: 0 0 25px rgba(0,0,0,0.07);
  border-radius: 20px;
  margin-bottom: 30px;
  border:5px solid rgba(0,0,0,0.07);
  -webkit-transition:all 0.5s ease 0s;
  transition:all 0.5s ease 0s;
}

.item:hover .item,
.item:hover span.icon{
  background:#fff;
  border-radius: 10px;
  -webkit-transition:all 0.5s ease 0s;
  transition:all 0.5s ease 0s;
}
.item:hover h6,
.item:hover p{
  color:#fff;
  -webkit-transition:all 0.5s ease 0s;
  transition:all 0.5s ease 0s;
}

.item .feature_box_col_one{
  background:rgba(247,198,5,0.2);
  color:#f91942;
}
.item .feature_box_col_two{
  background: rgba(255, 77, 28, 0.15);
  color:#f91942;
}
.item .feature_box_col_three{
  background:rgba(0,147,38,0.15);
  color:#f91942;
}
.item .feature_box_col_four{
  background:rgba(0,108,255,0.15);
  color:#f91942;
}
.item .feature_box_col_five{
  background:rgba(146,39,255,0.15);
  color:#f91942;
}
.item .feature_box_col_six{
  background:rgba(23,39,246,0.15);
  color:#f91942;
}
.item p{
  font-size: 15px;
  line-height: 26px;
}
.item h6{
  margin-bottom: 20px;
  color:#2f2f2f;
}
</style>
<style>
.overlay {
  height: 100%;
  width: 0;
  position: fixed;
  z-index: 1;
  top: 0;
  left: 0;
  background-color: rgb(256,256,256);
  background-color: rgba(256,256,256);
  overflow-x: hidden;
  transition: 0.5s;
}

.overlay-content {
  position: relative;
  top: 25%;
  width: 100%;
  margin-top: 30px;
}

.overlay a {
  padding: 8px;
  text-decoration: none;
  font-size: 36px;
  color: #818181;
  display: block;
  transition: 0.3s;
}

.overlay a:hover, .overlay a:focus {
  color: #f1f1f1;
}

.overlay .closebtn {
  position: absolute;
  top: 3px;
  left: 5px;
  font-size: 60px;
}
.sett
{
  text-align: center;
  color: #000000;
}
.appname
{
  text-align: center;
  color: #000000;
}
@media screen and (max-height: 450px) {
  .overlay a {font-size: 20px}
  .overlay .closebtn {
  font-size: 40px;
  top: 15px;
  right: 35px;
  }
  .action
	{
		position: fixed;
		top: 20px;
		right; 30px;
	}
	.action .profile
	{
		position: relative;
		width: 60px;
		hight; 60px;
		border-radius: 50%;
		overflow: hidden;
	}
  .action .menu
	{
		position: absolute;
		top: 80px;
		left: 500px;
		padding: 10px 20px;
		background: #fff;
		width: 500px;
		box-sizing: 0 5px 25px rgba(0,0,0,0,1);
		border-radius:15px:
	}
}
</style>

<style>
div.scrollmenu {
  background-color: #fff;
  overflow: auto;
  white-space: nowrap;
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

	</style>
	    <script>
	function fun1()
	{
		document.getElementById("form1").submit();
	

	}
	
      function DisplayCurrentTime() {
          var date = new Date();
          var hours = date.getHours() < 10 ? "0" + date.getHours() : date.getHours();
          var minutes = date.getMinutes() < 10 ? "0" + date.getMinutes() : date.getMinutes();
          var seconds = date.getSeconds() < 10 ? "0" + date.getSeconds() : date.getSeconds();
          time = hours + ":" + minutes + ":" + seconds;
          var currentTime = document.getElementById("currentTime");
          currentTime.innerHTML = time;
      };
      function GetReadings() {
      	nocache = "&nocache";
      	var request = new XMLHttpRequest();
      	request.onreadystatechange = function() {
    			if (this.status == 200) {
    				if (this.responseXML != null) {
    					// XML file received - contains sensor readings
    					var count;
    					var num_an = this.responseXML.getElementsByTagName('reading').length;
    					for (count = 0; count < num_an; count++) {
    						document.getElementsByClassName("reading")[count].innerHTML =
    					  this.responseXML.getElementsByTagName('reading')[count].childNodes[0].nodeValue;
    					}
    				}
    			}
      	}
      	// Send HTTP GET request to get the latest sensor readings
      	request.open("GET", "?update_readings" + nocache, true);
      	request.send(null);
        DisplayCurrentTime();
        setTimeout('GetReadings()', 10000);
      }
      document.addEventListener('DOMContentLoaded', function() {
        DisplayCurrentTime();
        GetReadings();
      }, false);
    </script>

</head>
<body>
 
<!-- Vertical navbar -->
<div class="vertical-nav bg-white" id="sidebar">
  <div class="py-4 px-3 mb-4 bg-light">
    <div class="media d-flex align-items-center">
      <img loading="lazy" src="img/logo.png" alt="..." width="80" height="80" class="mr-3 rounded-circle img-thumbnail shadow-sm">
      <div class="media-body">
        <h4 class="m-0">Smart Home Automation</h4>
      </div>
    </div>
  </div>

  <p class="text-gray font-weight-bold text-uppercase px-3 small pb-4 mb-0">Dashboard</p>

  <ul class="nav flex-column bg-white mb-0">
    <li class="nav-item">
      <a href="home.php" class="nav-link text-dark bg-light">
                <i class="fa fa-th-large mr-3 text-primary fa-fw"></i>
                home
            </a>
    </li>
    <li class="nav-item">
      <a href="office.php" class="nav-link text-dark">
                <i class="fa fa-address-card mr-3 text-primary fa-fw"></i>
                Office
            </a>
    </li>
    <li class="nav-item">
      <a href="livingroom.php" class="nav-link text-dark">
                <i class="fa fa-cubes mr-3 text-primary fa-fw"></i>
                Living Room
            </a>
    </li>
    <li class="nav-item">
      <a href="bedroom.php" class="nav-link text-dark">
                <i class="fa fa-cubes mr-3 text-primary fa-fw"></i>
                Bed Room
            </a>
    </li>
    <li class="nav-item">
      <a href="bathroom.php" class="nav-link text-dark">
                <i class="fa fa-picture-o mr-3 text-primary fa-fw"></i>
                Bath Room
            </a>
    </li>
	<li class="nav-item">
      <a href="kitchen.php" class="nav-link text-dark">
                <i class="fa fa-picture-o mr-3 text-primary fa-fw"></i>
                Kitchen
            </a>
    </li>
  </ul>

  <p class="text-gray font-weight-bold text-uppercase px-3 small py-4 mb-0">Charts</p>

  <ul class="nav flex-column bg-white mb-0">
    <li class="nav-item">
      <a href="#" class="nav-link text-dark">
                <i class="fa fa-area-chart mr-3 text-primary fa-fw"></i>
                area charts
            </a>
    </li>
    <li class="nav-item">
      <a href="#" class="nav-link text-dark">
                <i class="fa fa-bar-chart mr-3 text-primary fa-fw"></i>
                bar charts
            </a>
    </li>
    <li class="nav-item">
      <a href="#" class="nav-link text-dark">
                <i class="fa fa-pie-chart mr-3 text-primary fa-fw"></i>
                pie charts
            </a>
    </li>
    <li class="nav-item">
      <a href="#" class="nav-link text-dark">
                <i class="fa fa-line-chart mr-3 text-primary fa-fw"></i>
                line charts
            </a>
    </li>
  </ul>
</div>

<!-- End vertical navbar -->


<!-- Page content holder -->
<div class="page-content" id="content">
  <!-- End vertical navbar -->
<div class="content">
		<nav class="navbar navbar-expand-lg navbar-light bg-light">
			<svg  width="16" height="16" id="sidebarCollapse" class="three-dots">
				<path d="M9.5 13a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0zm0-5a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0zm0-5a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0z"/>
			</svg>
			
			<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
				<span class="navbar-toggler-icon"></span>
			</button>
			 <div class="collapse navbar-collapse" id="navbarNav">
				 <ul class="navbar-nav ml-auto">
				     <li class="nav-item active">
					 <a class="nav-link" href="logout.php">logout <span class="sr-only">(current)</span></a>
				   </li>
				   <li class="nav-item">
					 <a class="nav-link" href="#">
      <img loading="lazy" src="img/login.png" alt="..." width="30" height="30" class="mr-3 rounded-circle img-thumbnail shadow-sm"></a>
				   </li>
				 </ul>
			 </div>
		 </nav>
 </div>
<div class="container-fluid text-center bg-grey">
  <h2>Smart Home Automation</h2><br>
</div>
     <div class="pt-5 pb-5">
    <div class="container">
      <div class="row">

	<div class="col-lg-4 col-sm-6">
      <div class="item"> <span class="icon feature_box_col_one"><i class="fa"></i></span>
        <img src="img/camera.png" alt="Paris" width="205" height="200">
        <p><a href="office.php"><strong>Office</strong></a></p>
	  </div>
	</div>
	<div class="col-lg-4 col-sm-6">
      <div class="item"> <span class="icon feature_box_col_one"><i class="fa"></i></span>
        <img src="img/camera.png" alt="New York" width="205" height="200">
        <p><a href="guestroom.php"><strong>Guest Room</strong></a></p>
      </div>
    </div>
	<div class="col-lg-4 col-sm-6">
      <div class="item"> <span class="icon feature_box_col_one"><i class="fa"></i></span>
        <img src="img/camera.png" alt="Paris" width="205" height="200">
        <p><a href="bedroom.php"><strong>Bedroom</strong></a></p>
      </div>
    </div>
	<div class="col-lg-4 col-sm-6">
      <div class="item"> <span class="icon feature_box_col_one"><i class="fa"></i></span>
        <img src="img/camera.png" alt="Paris" width="205" height="200">
        <p><a href="kitchen.php"><strong>Kitchen</strong></a></p>
	   </div>
	 </div>
	<div class="col-lg-4 col-sm-6">
      <div class="item"> <span class="icon feature_box_col_one"><i class="fa"></i></span>
        <img src="img/camera.png" alt="New York" width="205" height="200">
        <p><a href="bath.php"><strong>Bath Room</strong></a></p>
      </div>
    </div>
	<div class="col-lg-4 col-sm-6">
      <div class="item"> <span class="icon feature_box_col_one"><i class="fa"></i></span>
        <img src="img/camera.png" alt="Paris" width="205" height="200">
        <p><a href="garden.php"><strong>Garden</strong></a></p>
      </div>
    </div>
  </div>
 </div>
</div>
<div class="content">
		<nav class="navbar navbar-expand-lg navbar-light bg-light">
            <input type="text" name="text" value="Type input text ">
			 <div class="collapse navbar-collapse" id="navbarNav">
				 <ul class="navbar-nav ml-auto">
				 </ul>
			 </div>
		 </nav>
 </div>
</div><nav class="navbottom">
		  <a href="home.php" class="nav__link">
			<img src="img/home.png" width="30px" height="30px">
			<span class="nav__text">Home</span>
		  </a>
		  <a href="rooms.php" class="nav__link nav__link--active">
			<img src="img/room.png" width="30px" height="30px">
			<span class="nav__text">Rooms</span>
		  </a>
		  <a href="live.php" class="nav__link">
			<img src="img/live.png" width="30px" height="40px">
			<span class="nav__text">Lives</span>
		  </a>
		  <a href="#" class="nav__link" onclick="openNav()">
		  <img src="img/notification.png" width="30px" height="30px">
			<span class="nav__text">Notifications</span>
		  </a>
		  <a href="#" class="nav__link" onclick="openNav0()">
			<img src="img/setting.png" width="30px" height="30px">
			<span class="nav__text" >Settings</span>
		  </a>
		</nav>
</div>
<div id="myNav0" class="overlay">
  <a href="javascript:void(0)" class="closebtn" onclick="closeNav0()">&times;</a>
  	<h1 class="sett">Settings<h1>
	<img src="img/line.png" alt="line" width="100%">
	<input type="text" id="mySearch" onkeyup="myFunction()" placeholder="Search.." title="Type in a category">
  <div class="overlay-content">
    <a href="#" onclick="openNav1()"><img src="img/privacy.png" height="30px" width="30px">  Privacy</a>
    <a href="#" onclick="openNav2()"><img src="img/security.png" height="30px" width="30px">  Security</a>
    <a href="#" onclick="openNav3()"><img src="img/account.png" height="30px" width="30px">  Account</a>
    <a href="#" onclick="openNav4()"><img src="img/help.png" height="30px" width="30px">  Help</a>
    <a href="#" onclick="openNav5()"><img src="img/about.png" height="30px" width="30px">  About</a>
    <a href="#" onclick="openNav6()"><img src="img/theme.png" height="30px" width="30px">  Theme</a>
  </div>
  <div id="myNav1" class="overlay">
  <a href="javascript:void(0)" class="closebtn" onclick="closeNav1()">&times;</a>
  	<h1 class="sett">Privacy<h1>
	<img src="img/line.png" alt="line" width="100%">
	<input type="text" id="mySearch" onkeyup="myFunction()" placeholder="Search.." title="Type in a category">
  <div class="overlay-content">
    <a href="#" onclick="openNav2()"><img src="img/privacy.png" height="30px" width="30px">  Privacy</a>
    <a href="#" onclick="openNav3()"><img src="img/security.png" height="30px" width="30px">  Security</a>
    <a href="#" onclick="openNav4()"><img src="img/account.png" height="30px" width="30px">  Account</a>
    <a href="#" onclick="openNav5()"><img src="img/help.png" height="30px" width="30px">  Help</a>
    <a href="#" onclick="openNav6()"><img src="img/about.png" height="30px" width="30px">  About</a>
    <a href="#" onclick="openNav7()"><img src="img/theme.png" height="30px" width="30px">  Theme</a>
  </div>
  <div id="myNav2" class="overlay">
  <a href="javascript:void(0)" class="closebtn" onclick="closeNav2()">&times;</a>
  	<h1 class="sett">Security<h1>
	<img src="img/line.png" alt="line" width="100%">
	<input type="text" id="mySearch" onkeyup="myFunction()" placeholder="Search.." title="Type in a category">
  <div class="overlay-content">
    <a href="#" onclick="openNav2()"><img src="img/privacy.png" height="30px" width="30px">  Privacy</a>
    <a href="#" onclick="openNav3()"><img src="img/security.png" height="30px" width="30px">  Security</a>
    <a href="#" onclick="openNav4()"><img src="img/account.png" height="30px" width="30px">  Account</a>
    <a href="#" onclick="openNav5()"><img src="img/help.png" height="30px" width="30px">  Help</a>
    <a href="#" onclick="openNav6()"><img src="img/about.png" height="30px" width="30px">  About</a>
    <a href="#" onclick="openNav7()"><img src="img/theme.png" height="30px" width="30px">  Theme</a>
  </div>
  <div id="myNav3" class="overlay">
  <a href="javascript:void(0)" class="closebtn" onclick="closeNav3()">&times;</a>
  	<h1 class="sett">Account<h1>
	<img src="img/line.png" alt="line" width="100%">
	<input type="text" id="mySearch" onkeyup="myFunction()" placeholder="Search.." title="Type in a category">
  <div class="overlay-content">
    <a href="#" onclick="openNav2()"><img src="img/privacy.png" height="30px" width="30px">  Privacy</a>
    <a href="#" onclick="openNav3()"><img src="img/security.png" height="30px" width="30px">  Security</a>
    <a href="#" onclick="openNav4()"><img src="img/account.png" height="30px" width="30px">  Account</a>
    <a href="#" onclick="openNav5()"><img src="img/help.png" height="30px" width="30px">  Help</a>
    <a href="#" onclick="openNav6()"><img src="img/about.png" height="30px" width="30px">  About</a>
    <a href="#" onclick="openNav7()"><img src="img/theme.png" height="30px" width="30px">  Theme</a>
  </div>
  <div id="myNav4" class="overlay">
  <a href="javascript:void(0)" class="closebtn" onclick="closeNav4()">&times;</a>
  	<h1 class="sett">Help<h1>
	<img src="img/line.png" alt="line" width="100%">
	<input type="text" id="mySearch" onkeyup="myFunction()" placeholder="Search.." title="Type in a category">
  <div class="overlay-content">
    <a href="#" onclick="openNav2()"><img src="img/privacy.png" height="30px" width="30px">  Privacy</a>
    <a href="#" onclick="openNav3()"><img src="img/security.png" height="30px" width="30px">  Security</a>
    <a href="#" onclick="openNav4()"><img src="img/account.png" height="30px" width="30px">  Account</a>
    <a href="#" onclick="openNav5()"><img src="img/help.png" height="30px" width="30px">  Help</a>
    <a href="#" onclick="openNav6()"><img src="img/about.png" height="30px" width="30px">  About</a>
    <a href="#" onclick="openNav7()"><img src="img/theme.png" height="30px" width="30px">  Theme</a>
  </div>
  <div id="myNav5" class="overlay">
  <a href="javascript:void(0)" class="closebtn" onclick="closeNav5()">&times;</a>
  	<h1 class="sett">About<h1>
	<img src="img/line.png" alt="line" width="100%">
	<input type="text" id="mySearch" onkeyup="myFunction()" placeholder="Search.." title="Type in a category">
  <div class="overlay-content">
    <a href="#" onclick="openNav2()"><img src="img/privacy.png" height="30px" width="30px">  Privacy</a>
    <a href="#" onclick="openNav3()"><img src="img/security.png" height="30px" width="30px">  Security</a>
    <a href="#" onclick="openNav4()"><img src="img/account.png" height="30px" width="30px">  Account</a>
    <a href="#" onclick="openNav5()"><img src="img/help.png" height="30px" width="30px">  Help</a>
    <a href="#" onclick="openNav6()"><img src="img/about.png" height="30px" width="30px">  About</a>
    <a href="#" onclick="openNav7()"><img src="img/theme.png" height="30px" width="30px">  Theme</a>
  </div>
  <div id="myNav6" class="overlay">
  <a href="javascript:void(0)" class="closebtn" onclick="closeNav6()">&times;</a>
  	<h1 class="sett">About<h1>
	<img src="img/line.png" alt="line" width="100%">
	<input type="text" id="mySearch" onkeyup="myFunction()" placeholder="Search.." title="Type in a category">
  <div class="overlay-content">
    <a href="#" onclick="openNav2()"><img src="img/privacy.png" height="30px" width="30px">  Privacy</a>
    <a href="#" onclick="openNav3()"><img src="img/security.png" height="30px" width="30px">  Security</a>
    <a href="#" onclick="openNav4()"><img src="img/account.png" height="30px" width="30px">  Account</a>
    <a href="#" onclick="openNav5()"><img src="img/help.png" height="30px" width="30px">  Help</a>
    <a href="#" onclick="openNav6()"><img src="img/about.png" height="30px" width="30px">  About</a>
    <a href="#" onclick="openNav7()"><img src="img/theme.png" height="30px" width="30px">  Theme</a>
  </div>
  
	    <script>
	function fun1()
	{
		document.getElementById("form1").submit();
	

	}
	
      function DisplayCurrentTime() {
          var date = new Date();
          var hours = date.getHours() < 10 ? "0" + date.getHours() : date.getHours();
          var minutes = date.getMinutes() < 10 ? "0" + date.getMinutes() : date.getMinutes();
          var seconds = date.getSeconds() < 10 ? "0" + date.getSeconds() : date.getSeconds();
          time = hours + ":" + minutes + ":" + seconds;
          var currentTime = document.getElementById("currentTime");
          currentTime.innerHTML = time;
      };
      function GetReadings() {
      	nocache = "&nocache";
      	var request = new XMLHttpRequest();
      	request.onreadystatechange = function() {
    			if (this.status == 200) {
    				if (this.responseXML != null) {
    					// XML file received - contains sensor readings
    					var count;
    					var num_an = this.responseXML.getElementsByTagName('reading').length;
    					for (count = 0; count < num_an; count++) {
    						document.getElementsByClassName("reading")[count].innerHTML =
    					  this.responseXML.getElementsByTagName('reading')[count].childNodes[0].nodeValue;
    					}
    				}
    			}
      	}
      	// Send HTTP GET request to get the latest sensor readings
      	request.open("GET", "?update_readings" + nocache, true);
      	request.send(null);
        DisplayCurrentTime();
        setTimeout('GetReadings()', 10000);
      }
      document.addEventListener('DOMContentLoaded', function() {
        DisplayCurrentTime();
        GetReadings();
      }, false);
    </script>

  <script>
function openNav0() {
  document.getElementById("myNav0").style.width = "100%";
}

function closeNav0() {
  document.getElementById("myNav0").style.width = "0%";
}
function openNav1() {
  document.getElementById("myNav1").style.width = "100%";
}

function closeNav1() {
  document.getElementById("myNav1").style.width = "0%";
}

function openNav2() {
  document.getElementById("myNav2").style.width = "100%";
}

function closeNav2() {
  document.getElementById("myNav2").style.width = "0%";
}

function openNav3() {
  document.getElementById("myNav3").style.width = "100%";
}

function closeNav3() {
  document.getElementById("myNav3").style.width = "0%";
}

function openNav4() {
  document.getElementById("myNav4").style.width = "100%";
}

function closeNav4() {
  document.getElementById("myNav4").style.width = "0%";
}

function openNav5() {
  document.getElementById("myNav5").style.width = "100%";
}

function closeNav5() {
  document.getElementById("myNav5").style.width = "0%";
}

function openNav6() {
  document.getElementById("myNav6").style.width = "100%";
}

function closeNav6() {
  document.getElementById("myNav6").style.width = "0%";
}

</script>
<!-- End demo content -->
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
<script src="index.js"></script>
</body>
</html>
