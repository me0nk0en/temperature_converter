<html>
<head> 
 <title>Convert Temperature</title> 
 <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/css/bootstrap.min.css" integrity="sha384-/Y6pD6FV/Vv2HJnA6t+vslU6fwYXjCFtcEpHbNJ0lyAFsXTsjBbfaDjzALeQsN6M" crossorigin="anonymous">
 </head> 
 <body> 
 <div class="container">
<div class="row">
 <h2 class="mx-auto mt-5 mb-5">Temperature Conversion</h2> 
</div>
</div>


<!-- <select class="form-control">
  <option>Default select</option>
</select> -->
<div class="container">
<div class="row">
 <form class="form-inline mx-auto" action = "<?php echo $_SERVER['PHP_SELF']; ?>" method = "GET"> 

	 	

  <div class="form-group">
    <label>Degree:</label>
	 <input class="form-control mx-sm-3"type = "text" name = "degree" size=6 placeholder="Degree"> 
  </div>

  <div class="form-group">
    <label class="">Scale in:</label>
		 <select class="form-control mx-sm-3" name="scale_in">
		 	<option value="celcius">Celsius</option>
		 	<option value="fahrenheit">Fahrenheit</option>
		 	<option value="kelvin">Kelvin</option>
	 <!-- <input class="form-control"type = "text" name = "degree" size=4 placeholder="Degree">  -->
		</select> 
  </div>

	  
<!-- 	 	<div class="form-group">
		</div> -->

  <div class="form-group">
    <label>Scale out:</label>
		 <select class="form-control mx-sm-3" name="scale_out">
		 	<option value="celcius">Celsius</option>
		 	<option value="fahrenheit">Fahrenheit</option>
		 	<option value="kelvin">Kelvin</option>
		</select>
	 <!-- <input class="form-control"type = "text" name = "degree" size=4 placeholder="Degree">  -->
  </div>

<!-- 		<div class="form-group"></div>
		<div class="form-group"> 
		</div>  -->
	 <br/> 
	 <!-- <input type = "submit" name = "Converter"/> -->
	 <button type="submit" class="btn btn-primary">Confirm identity</button> 
 </form>  
</div>
</div>
<?php 

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

require_once('Converter.php');

if (array_key_exists('degree',$_GET)){
	$scale_in = $_GET['scale_in'];
	$scale_out = $_GET['scale_out'];
	$degree = $_GET['degree'];

	$output = Converter::calculation(
		new Degree($degree),
		new Scale_in($scale_in),
		new Scale_out($scale_out)
	);
	echo '<div class="container"><div class="row">';
	echo ' <h4 class="mx-auto">'.$degree .' '. $scale_in .' = '. $output .' '. $scale_out.'</div>' ;
	echo '</div></div>';
}
?>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/js/bootstrap.min.js" integrity="sha384-h0AbiXch4ZDo7tp9hKZ4TsHbi047NrKGLO3SEJAg45jXxnGIfYzk4Si90RDIqNm1" crossorigin="anonymous"></script>
</body>
</html>