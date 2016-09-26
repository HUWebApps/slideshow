<?php

  if(isset($_POST['image_name']))
  {
	  $imageName = ($_POST['image_name']);
  }

  $imageName_uri = substr($imageName,strpos($imageName,",")+1);
  $imageName_decoded= base64_decode($imageName_uri);
  file_put_contents("savedPics/image.png", $imageName_decoded);

  ?>
