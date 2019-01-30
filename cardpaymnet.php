<?php
include 'wp-config.php';
if((!empty($_POST)))
{
   
   $cardnum=$_POST['cardnum'];
   $cvc=$_POST['cvc'];
   $month=$_POST['month'];
   $year=$_POST['year'];
  $total=$_POST['total'];
  
  
  $live = "0";
  $oid = "112";
  $oid = "112020102292999";
  $ttl ="900";
  $tel = "256712375678";
  $eml = "kajuej@gmailo.com";
  $vid = "demo";
  $curr = "KES";
  $p1 = "";
  $p2 = "020102292999";
   $p3 = "";
   $p4 = "900";
  $cbk = $_SERVER["HTTP_HOST"].$_SERVER["REQUEST_URI"];
  $cst = 1;
  $crl = "2";
}
?>

<?php
//check hash
$key = "5d14Gtplreih6eiuf";//use "demo" for testing where vid also is set to "demo"
/*$datastring = $cardnum.$cvc.$month.$year.$total;*/

$datastring = $live.$oid.$inv.$amount.$tel.$eml.$vid.$curr.$p1.$p2.$p3.$p4.$cst.$cbk;

$generated_hash = hash_hmac('sha256',$datastring , $key);
 print_r($generated_hash);
?>