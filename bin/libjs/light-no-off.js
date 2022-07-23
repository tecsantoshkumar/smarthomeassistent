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
	
	function fun2(){
	var ch=document.getElementById("ch").checked==true?"on":"off";
	    document.getElementById("blb").src=(ch=="on"?"lighton.png":"lightoff.png");
	}