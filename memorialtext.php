<?php
include 'wp-config.php';

$firstmemorialdesc=isset($_POST['firstmemorialdesc'])?$_POST['firstmemorialdesc']:'';
  $secondmemorialdesc=isset($_POST['secondmemorialdesc'])?$_POST['secondmemorialdesc']:'';
  $memorialid=isset($_POST['memorialid'])?$_POST['memorialid']:'';
   $memorialuser=isset($_POST['memouser'])?$_POST['memouser']:'';
 $wpdb->query("UPDATE wp_tribute  SET first_memorial_text = '$firstmemorialdesc',second_memorial_text='$secondmemorialdesc' WHERE id='$memorialid'");
?>

 “<?php echo $firstmemorialdesc ?> <?php echo $memorialuser; ?>  <?php echo $secondmemorialdesc ?>”