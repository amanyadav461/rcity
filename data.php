<?php

error_reporting(0);
date_default_timezone_set('Asia/Kolkata');

$name = $_GET["name"];
$mobile = $_GET["phone"];
$quan = $_GET["quan"];
$time = date("d-M-Y H:i:s");

$data = $time.",".$mobile.",".$name.",".$quan;
$file = "people.csv";

if(file_put_contents($file, $data . PHP_EOL, FILE_APPEND)){
echo "
<!DOCTYPE html>
<html>
<head>
	<title>Rcity</title>
	<link rel='stylesheet' type='text/css' href='/rcity/css/style.css'>
<script type = 'text/javascript' >  
    function preventBack() { window.history.forward(); }  
    setTimeout('preventBack()', 0);  
    window.onunload = function () { null };  
</script> 
</head>
<body>
	<div class='confpagcont'>
		<div class='confirmation_msg'>
			<p>Congratulations!! Your Appointment Is Successfully Accepted</p>
		</div>
		<div class='doneimgcont'>
			<img src='/rcity/image/done.png' class='doneimage'>
		</div>
	</div>
</body>
</html>
";
}
?>
