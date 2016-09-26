<!DOCTYPE html>
<html lang="en">
    <head>
	    <meta charset="UTF-8">
		<title>Take Picture</title>

		<link rel="stylesheet" href="../resources/views/Helpers/css/TakePictureCSS.css">
		<script src="../resources/views/Helpers/js/jquery-1.11.3.js"></script>
	</head>
	<body>

	    <div class = "booth">
            <video id="video" width ="1000" height="800"></video>
			<a href="#" id="capture" class="booth-capture-button"><img src="../resources/views/Helpers/pics/HUbutton.png" height="125px" width="125px" /></a>
			<div id="KeepOrSend">
			    <a href="#" id="DeletePic" class="booth-ex-button"><img src="../resources/views/Helpers/pics/HUex.png" height="125px" width="125px" /></a>
				<div id="captured" class="booth-capture-button-off"><img src="../resources/views/Helpers/pics/HUbutton.png" height="125px" width="125px" /></div>
				<a href="#" id="SendPic" class="booth-check-button"><img src="../resources/views/Helpers/pics/HUcheck.png" height="125px" width="125px" /></a>
			</div>
			<canvas id="canvas" width="1000" height="750"></canvas>
			<img id="photo" src="http://placekitten.com/g/1000/750" alt="Your Photo"/>
		</div>

		<script src="../resources/views/Helpers/js/TakePictureJS.js"></script>

	</body>
</html>
