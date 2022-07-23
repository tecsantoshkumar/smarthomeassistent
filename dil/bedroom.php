
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
    <script src="Miusic/js/app.js"></script>
    <link rel="stylesheet" href="style.css">
	<link rel="stylesheet" href="style/style.css">
    <script src="index.js"></script>
	<title>office</title>
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
	
	
	    <script>
	function vibrate (ms){
		navigator.vibrate(ms);
	}   
	function fun1(x,y)
	{
	    var ch=document.getElementById("ch"+x).checked==true?"on":"off";
	    
	            document.getElementById("blb"+x).src=(ch=="on"?"img/lighton.png":"img/lightoff.png");
		
	    var t=Math.random();
	    var r=new XMLHttpRequest();
	    r.onreadystatechange=function()
	    {
	        if(r.responseText==4)
	        {
	            alert(r.responseText);
	        }
	        
	    }
	    r.open("post","dbst.php?s="+t+"&ch="+ch+"&load="+y);
	    r.send();
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
      <a href="guestroom.php" class="nav-link text-dark">
                <i class="fa fa-cubes mr-3 text-primary fa-fw"></i>
                Guest Room
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
  <h2>Bed Room</h2><br>
    <h3>Last update: <span id="currentTime"></span></h3>
</div>
     <div class="pt-5 pb-5">
    <div class="container">
      <div class="row">
    <div class="col-lg-4 col-sm-6">
     <div class="item"> <span class="icon feature_box_col_two"><i class="fa"></i></span>
     <form method="post" id="form1">
         <table >
      <tr>
        <td></dt>
		<td><img id="blb" src="img/lightoff.png" alt="not found" width="30" height="50"></dt>
        <td><label class="switch"><input type="checkbox"><span class="slider round"></span></label></td>
      </tr>
		<tr>
			<td><img id="blb10" src="<?php echo $ch[9]=='checked'?'img/lighton.png':'img/lightoff.png' ?>" alt="not found" width="30" height="50"></td>
			<td>Light</td>
			<td><label class="switch"><input  id="ch10" onchange="fun1(10,'L10')" <?php echo $ch[9]; ?> type="checkbox"><span class="slider round"></span></label></td>
		</tr>
		<tr>
			<td><img id="blb11" src="<?php echo $ch[10]=='checked'?'img/lighton.png':'img/lightoff.png' ?>" alt="not found" width="30" height="50"></td>
			<td>Night Lamp</td>
			<td><label class="switch"><input id="ch11" onchange="fun1(11,'L11')" <?php echo $ch[10]; ?> type="checkbox"><span class="slider round"></span></label></td>
		</tr>
		<tr>
			<td><img id="blb12" src="<?php echo $ch[11]=='checked'?'img/lighton.png':'img/lightoff.png' ?>" alt="not found" width="30" height="50"></td>
			<td>Fan</td>
			<td><label class="switch"><input id="ch12" onchange="fun1(12,'L12')" <?php echo $ch[11]; ?> type="checkbox"><span class="slider round"></span></label></td>
		</tr>
		<tr>
			<td><img id="blb13" src="<?php echo $ch[12]=='checked'?'img/lighton.png':'img/lightoff.png' ?>" alt="not found" width="30" height="50"></td>
			<td>AC</td>
			<td><label class="switch"><input id="ch13" onchange="fun1(13,'L13')" <?php echo $ch[12]; ?> type="checkbox"><span class="slider round"></span></label></td>
		</tr>
		<tr>
			<td><img id="blb14" src="<?php echo $ch[13]=='checked'?'img/lighton.png':'img/lightoff.png' ?>" alt="not found" width="30" height="50"></td>
			<td>TV</td></td>
			<td><label class="switch"><input  id="ch14" onchange="fun1(14,'L14')" <?php echo $ch[13]; ?> type="checkbox"><span class="slider round"></span></label></td>
		</tr>
	</table>
</from>
	</div>
  </div>
    <div class="col-lg-4 col-sm-6">
     <div class="item"> <span class="icon feature_box_col_two"><i class="fa"></i></span>
            <h2>ESP32 Weather Station</h2>
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
         <div class="col-lg-4 col-sm-6">
          <div class="item"> <span class="icon feature_box_col_four"><i class="fa"></i></span>
            <h6>Business Growth</h6>
            <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor Aenean massa.</p>
          </div>
        </div>
        <div class="col-lg-4 col-sm-6">
          <div class="item"> <span class="icon feature_box_col_four"><i class="fa"></i></span>
            <h6>Business Growth</h6>
            <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor Aenean massa.</p>
          </div>
        </div>
        <div class="col-lg-4 col-sm-6">
          <div class="item"> <span class="icon feature_box_col_five"><i class="fa"></i></span>
            <h6>Market Strategy</h6>
            <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor Aenean massa.</p>
          </div>
        </div>
        <div class="col-lg-4 col-sm-6">
          <div class="item"> <span class="icon feature_box_col_six"><i class="fa"></i></span>
            <h6>Retina Ready</h6>
            <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor Aenean massa.</p>
          </div>
        </div>
      </div>
    </div>
</div>
  </div>

</div>
<!-- End demo content -->
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
<script src="index.js"></script>
</body>
</html>
