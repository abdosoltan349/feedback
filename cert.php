<?php

function maker($title,$desce,$dsc,$tempv) {
	require("funcations/values.php");
    header('content-type:image/jpeg');
	$value = new values($tempv);
	$title = trim($title," ");
	$title =  strtoupper($title);
	$image=imagecreatefromjpeg($value->template());


	$name = $value -> name();
	//$X = $name["x"];
	$namefont = $name["font"];
	if(strlen($title) > 35){
		$namefont = abs($namefont - (strlen($title)+50));
	}
	if(strlen($title) > 29 and strlen($title) <= 35){
		$namefont = $namefont - (strlen($title)+40);
	
	}
	if(strlen($title) > 27 and strlen($title) <= 29){
		$namefont = $namefont - (strlen($title)+35);
	}
	
	if(strlen($title) > 24 and strlen($title) <= 27){
		$namefont = $namefont - (strlen($title)+30);
		
	}
	
	if(strlen($title) > 17 and strlen($title) <=24 ){
		$namefont = $namefont - (strlen($title)+20);
	}
	//$X = $X - (strlen($title)*70);
	//$X = "x".strlen($title);
	$image_width = imagesx($image);
	$text_box = imagettfbbox($namefont,0,$name["font-type"],$title);
	$text_width = $text_box[2]-$text_box[0];
	$xname = ($image_width/2) - ($text_width/2);
	imagettftext($image,$namefont,0,$xname,$name["y"],imagecolorallocate($image,$name["red"], $name["green"], $name["blue"]),$name["font-type"],$title);
	//End Name
	
	//Start descreption
	
	$desc = $value -> descreption();
	$text_box = imagettfbbox($desc["font"],0,$desc["font-type"],$desce);
	$text_width = $text_box[2]-$text_box[0];
	$xd = ($image_width/2) - ($text_width/2);
	imagettftext($image,$desc["font"],0,$xd,$desc["y"],imagecolorallocate($image,$desc["red"], $desc["green"], $desc["blue"]),$desc["font-type"],$desce);
	//End descreption


	//Start DSC
	$dscv = $value -> dsc();
	$dscS= $dscv["font"];
	if(strlen($dsc) > 23){
		$dscS = 57 - (strlen($dsc)-15);
	}
	imagettftext($image,$dscS,0,$dscv["x"],$dscv["y"],imagecolorallocate($image,$dscv["red"], $dscv["green"], $dscv["blue"]),$dscv["font-type"],$dsc);
	//End DSC
	
	
	
	//End Date and Time
	$file = time();
	//imagepng($image);
	 header ("Content-Disposition: attachment; filename=".$file.".jpg");
	
	readfile(imagejpeg($image));
	imagedestroy($image);
	
	//imagedestroy($image);
	
 
	//echo $image;
	//imagejpeg($image);
	//echo $img["path"];
	//imagedestroy($image);
	//header("Location: index.php");
	    
	
}
?>
