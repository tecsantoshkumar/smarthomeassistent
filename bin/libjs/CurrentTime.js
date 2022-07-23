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