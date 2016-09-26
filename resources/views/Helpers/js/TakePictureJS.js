function saveImage( imageName )
{
	//console.log(imageName);
	var posting = $.post("../resources/views/Helpers/js/HUsaveImagePHP.php", {	  
	            image_name: imageName
	});
}

(function(){
    var video = document.getElementById('video'),
	       canvas = document.getElementById('canvas'),
		   context = canvas.getContext('2d'),
		   photo = document.getElementById('photo'),
	       vendorUrl = window.URL || window.webkitURL;

	navigator.getMedia = navigator.getUserMedia ||
	                                  navigator.webkitGetUserMedia ||
									  navigator.mozGetUserMedia ||
									  navigator.msGetUserMedia;

	navigator.getMedia({
		video: true,
		audio: false
	}, function(stream){
	        video.src = vendorUrl.createObjectURL(stream);
			video.play();
	}, function(error){
		// An Error occured
		//error.code
	});

	document.getElementById('DeletePic').addEventListener('click',function(){
	    photo.style.display="none";
		document.getElementById('KeepOrSend').style.display="none";
		document.getElementById('capture').style.display="flex";
    });

	document.getElementById('SendPic').addEventListener('click',function(){
		console.log( document.getElementById('photo').src )
		saveImage( document.getElementById('photo').src );
		photo.style.display="none";
		document.getElementById('KeepOrSend').style.display="none";
		document.getElementById('capture').style.display="flex";
	});

	document.getElementById('capture').addEventListener('click', function(){
		photo.style.display="inline";
		document.getElementById('KeepOrSend').style.display="flex";
		document.getElementById('capture').style.display="none";
	    context.drawImage(video,0 , 0, 1000, 750);
        photo.setAttribute('src',canvas.toDataURL('image/png'));
	});

})();
