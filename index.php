<!DOCTYPE html>
<html lang="en">
<head>
	<title>Dsc Feedback</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->
	<link rel="icon" type="image/png" href="images/icons/favicon.ico"/>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="res/bootstrap.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="res/animate.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="res/hamburgers.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="res/select2.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="css/util.css">
	<link rel="stylesheet" type="text/css" href="css/main.css">
<!--===============================================================================================-->
<script
  src="https://code.jquery.com/jquery-3.5.1.min.js"
  integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0="
  crossorigin="anonymous"></script>

</head>
<body>

	<div class="bg-contact100" style="background-image: url('images/bg-01.jpg');">
		<div class="container-contact100">
			<div class="wrap-contact100">
				<div class="contact100-pic js-tilt" data-tilt>
					<img src="images/img-01.png" alt="IMG">
				</div>
			<?php if(false){
	//isset($_GET['sname'])
				echo '<form class="contact100-form validate-form" method = "POST" action="rate.php">
					<span class="contact100-form-title" style="alig">
						Feedback
					</span>
					<div  class="wrap-input100 validate-input" >
					<input type = "text" name="sname" value ="'.$_GET["sname"].'" hidden>
					<div class="rating" ><input  type="radio" name="rating" value="5" id="5" ><label style="font-size:50px" for="5">☆</label> <input type="radio" name="rating" value="4" id="4"><label style="font-size:50px" for="4">☆</label> <input type="radio" name="rating" value="3" id="3"><label style="font-size:50px" for="3">☆</label> <input type="radio" name="rating" value="2" id="2"><label style="font-size:50px" for="2">☆</label> <input type="radio" name="rating" value="1" id="1"><label style="font-size:50px" for="1">☆</label>
</div>
<span class="rate" style="display:none; color:red;">Rating is required</span>
</div>
					<div class="wrap-input100 validate-input" data-validate = "Email is required">
						<input class="input100" type="text" name="email" placeholder="Email">
						<span class="focus-input100"></span>
						<span class="symbol-input100">
							<i class="fa fa-envelope" aria-hidden="true"></i>
						</span>
					</div>
					<div class="wrap-input100 validate-input" data-validate = "Name is required">
						<input class="input100" type="text" name="name" placeholder="Name">
						<span class="focus-input100"></span>
						<span class="symbol-input100">
							<i class="fa fa-user" aria-hidden="true"></i>
						</span>
					</div>	

					<div class="wrap-input100 validate-inpu" data-validate = "Message is required">
						<textarea class="input100" name="message" placeholder="Comment"></textarea>
						<span class="focus-input100"></span>
					</div>


					<div class="container-contact100-form-btn">
						<button id="send" class="contact100-form-btn">
							Send
						</button>
					</div>
				</form>';
			
			
			}
			
			else{
				echo'<span class="contact100-form-title" style="alig">
						No Session Found in this time
					</span>';
			}
			?>
			</div>
		</div>
	</div>




<!--===============================================================================================-->
	<script src="res/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
	<script src="res/popper.js"></script>
	<script src="res/bootstrap.min.js"></script>
<!--===============================================================================================-->
	<script src="res/select2.min.js"></script>
<!--===============================================================================================-->
	<script src="res/tilt.jquery.min.js"></script>
	<script >
		$('.js-tilt').tilt({
			scale: 1.1
		})
	</script>
<!--===============================================================================================-->
	<script src="js/main.js"></script>

<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-23581568-13"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());
  gtag('config', 'UA-23581568-13');
  $('#send').click(function(){
   if(!$("input[name='rating']").is(':checked')) {
   $(".rate").show(); }
   if($("input[name='rating']").is(':checked')) {
   $(".rate").hide(); }
   
});
       
</script>

</body>
</html>
