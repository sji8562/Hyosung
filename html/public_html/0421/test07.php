<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title></title>
<style>
	*{
		margin:0;padding:0;
	}
	#square1{width:150px;height:150px; margin-left:20px;
			 display:inline-block;}
	.bar1{position: absolute;
		width: 150px;height:20px;
		background-color: green;}
	.bar2{position: relative;
		width: 20px;height:150px;left:130px;
		background-color: green;}

	#square2{width:150px;height:150px; margin-left:20px;
			 display:inline-block;}
	.bar3{position: relative;
		width: 20px;height:150px;
		background-color: green;}
	.bar4{position: relative;
		width: 150px;height:20px;bottom:20px;

		background-color: green;}
	#square3{width:150px;height:150px; margin-left:20px;
			 display:inline-block;}
	.bar5{position: absolute;
		width: 20px;height:150px;
		background-color: green;}
	.bar6{position: relative;
		width: 150px;height:20px;
		background-color: green;}

	#square4{width:150px;height:150px; margin-left:20px;
			 display:inline-block;}
	.bar7{position: relative;
		width: 20px;height:45px;
		background-color: green;}
	.bar8{position: relative;
		width: 150px;height:20px;
		background-color: green;}

	#square5{width:150px;height:150px; margin-left:20px;
			 display:inline-block;
			position: relative;}
	.bar9{position: absolute;
		width: 20px;height:150px;
		background-color: green;}
	.bar10{position: absolute;
		width: 150px;height:20px;
		background-color: green;}

	#square6{width:150px;height:150px; margin-left:20px;
			 display:inline-block;
			position: relative;}
	.bar11{position: absolute;
		width: 20px;height:150px;
		background-color: green;}
	.bar12{position: absolute;
		width: 150px;height:20px;
		background-color: green;}

	#square7{width:150px;height:150px; margin-left:20px;
			 display:inline-block;
			position: relative;}
	.bar13{position: absolute;
		width: 20px;height:110px;
		background-color: green;
		transform: rotate(-45deg);}
	.bar14{position: absolute;
		width: 20px;height:110px;
		background-color: green;
		transform: rotate(45deg);}

	#square8{width:150px;height:150px; margin-left:20px;
			 display:inline-block;
			position: relative;}
	.bar15{position: absolute;
		width: 150px;height:150px;
		background-color: green;
		border-radius: 100%;}
	.bar16{position: absolute;
		width: 100px;height:100px;
		background-color: white;
		border-radius: 100%;}
	
	#square9{width:150px;height:150px; margin-left:20px;
			 display:inline-block;
			position: relative;}
	.bar17{position: absolute;
		width:150px;height:20px;
		background-color: green;}
	.bar18{position: absolute;
		width: 20px;height:110px;
		background-color: green;
		transform: rotate(-45deg);}
	.bar19{position: absolute;
		width: 20px;height:110px;
		background-color: green;
		transform: rotate(45deg);}
	
	#square10{width:150px;height:150px; margin-left:20px;
			 display:inline-block;
			position: relative;}
	.bar20{position: absolute;
		width:50px;height:20px;
		background-color: green;}
	.bar21{position: absolute;
		width:150px;height:20px;
		background-color: green;}
	.bar22{position: absolute;
		width: 20px;height:110px;
		background-color: green;
		transform: rotate(-45deg);}
	.bar23{position: absolute;
		width: 20px;height:110px;
		background-color: green;
		transform: rotate(45deg);}

	#square11{width:150px;height:150px; margin-left:20px;
			 display:inline-block;
			position: relative;}
	.bar24{position: absolute;
		width: 150px;height:20px;
		background-color: green;}
	.bar25{position: absolute;
		width: 20px;height:150px;
		background-color: green;}

	#square12{width:150px;height:150px; margin-left:20px;
			 display:inline-block;
			position: relative;}
	.bar26{position: absolute;
		width: 20px;height:150px;
		background-color: green;}
	.bar27{position: absolute;
		width: 150px;height:20px;
		background-color: green;}

	#square13{width:150px;height:150px; margin-left:20px;
			 display:inline-block;
			position: relative;}
	.bar28{position: absolute;
		width: 20px;height:150px;
		background-color: green;}
	.bar29{position: absolute;
		width: 150px;height:20px;
		background-color: green;}

	#square14{width:150px;height:150px; margin-left:20px;
			 display:inline-block;
			position: relative;}
	.bar30{position: absolute;
		width: 150px;height:110px;
		background-color: green;
		border-radius: 100%;}
	.bar31{position: absolute;
		width: 100px;height:60px;
		background-color: white;
		border-radius: 100%;}
	.bar32{position: absolute;
			width:50px;height:15px;
			background-color:green;}
	.bar33{position: absolute;
			width:150px;height:15px;
			background-color:green;}



</style>
</head>
<body>
	<div id="square1">
		<div class="bar1"></div>
		<div class="bar2"></div></div>
	<div id="square2">
		<div class="bar3"></div>
		<div class="bar4"></div></div>
	<div id="square3">
		<div class="bar5"></div>
		<div class="bar6"></div>
		<div class="bar6" style="top:110px"></div>
	</div>
	<div id="square4">
		<div class="bar8"></div>
		<div class="bar7" style="left:130px"></div>
		<div class="bar8"></div>
		<div class="bar7"></div>
		<div class="bar8"></div>
	</div>
	<div id="square5">
		<div class="bar10"></div>
		<div class="bar9"></div>
	<div class="bar9" style="left:130px"></div>
		<div class="bar10" style="top:130px"></div>
	</div>
	<div id="square6">
		<div class="bar11" style="left:130px"></div>
		<div class="bar11"></div>
		<div class="bar12" style="top:60px"></div>
		<div class="bar12" style="top:130px"></div>
	</div>
	<div id="square7">
		<div class="bar13" style="left:100px;top:30px"></div>
		<div class="bar14" style="left:30px;top:30px"></div>
	</div>
	<div id="square8">
		<div class="bar15"></div>
		<div class="bar16" style="left:25px;top:25px"></div>
	</div>
	<div id="square9">
		<div class="bar17" style="top:40px"></div>
		<div class="bar18" style="left:100px; top:40px"></div>
		<div class="bar19" style="left:30px; top:40px"></div>
	</div>
	<div id="square10">
		<div class="bar20" style="left:50px"></div>
		<div class="bar21" style="top:40px"></div>
		<div class="bar22" style="left:100px; top:40px"></div>
		<div class="bar23" style="left:30px; top:40px"></div>
	</div>
	<div id="square11">
		<div class="bar24"></div>
		<div class="bar24" style="top:70px"></div>
		<div class="bar25" style="right:0px"></div>
	</div>
	<div id="square12">
		<div class="bar27"></div>
		<div class="bar26"></div>
		<div class="bar27" style="top:70px"></div>
		<div class="bar27" style="bottom:0px"></div>
	</div>
	<div id="square13">
		<div class="bar29"></div>
		<div class="bar28"	style="left:30px"></div>
	<div class="bar28" style="left:100px"></div>
		<div class="bar29" style="top:130px"></div>
	</div>
	<div id="square14">
		<div class="bar32" style="left:50px"></div>
		<div class="bar33" style="top:20px"></div>
		<div class="bar30" style="top:40px"></div>
		<div class="bar31" style="left:25px;top:65px"></div>
	</div>
</body>
</html>