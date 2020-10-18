<?php
class values{
  private $temp;

  function __construct($temp) {
    $this->temp = $temp;
  }
  function template(){
	  $path = "";
	  if($this->temp == 1){
		  $path = "http://dscfeedback.herokuapp.com/templates/cert1.jpg";
	  }
	  
	 return $path;
  }
  function name2() {
	  if($this ->temp == 1){
	  $name = array(
		"font" => 120,
		"x1" => 1940,
		"x2" => 1860,
		"x3" => 1820,
		"x4" => 1770,
		"x5" => 1700,
		"x6" => 1650,
		"x7" => 1600,
		"y" => 1220,
		"red" => 29,
		"green" => 39,
		"blue" => 80,
		"font-type" => "http://dscfeedback.herokuapp.com/fonts/bold.ttf"
	);
	  }
	 
    return $name;
  }
  
  function name() {
	  if($this ->temp == 1){
	  $name = array(
		"font" => 150,
		"x" => 2000,
		"y" => 1220,
		"red" => 29,
		"green" => 39,
		"blue" => 80,
		"font-type" => "http://dscfeedback.herokuapp.com/fonts/bold.ttf"
	);
	  }
	 
    return $name;
  }
   function descreption() {
	  if($this ->temp == 1){
	  $descreption = array(
		"font" => 40,
		"y" => 1400,
		"red" => 0,
		"green" => 0 ,
		"blue" =>0,
		"font-type" => "http://dscfeedback.herokuapp.com/fonts/regular.ttf"
	);
	  }
	 
    return $descreption;
  }

  function dsc() {
	  if($this ->temp == 1){
	  $dsc = array(
		"font" => 52,
		"x" => 1720,
		"y" => 2130,
		"red" => 0,
		"green" => 0 ,
		"blue" =>0,
		"font-type" => "http://dscfeedback.herokuapp.com/fonts/regular.ttf"
	);
	  }
	 
    return $dsc;
  }
}
?>