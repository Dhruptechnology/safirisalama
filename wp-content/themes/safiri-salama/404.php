<?php
global $session;
session_start();
/**
 * Template Name: tributecreated
 **/

/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package safiri_salama
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
  <meta charset="<?php bloginfo( 'charset' ); ?>">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="profile" href="https://gmpg.org/xfn/11">
  <meta property="og:title" content="Title Here" />
<meta property="og:type" content="Memorial" />
<meta property="og:url" content="http://www.example.com/" />
<meta property="og:image" content="<?php echo get_site_url(); ?>/wp-content/uploads/2018/11/519216299logo.png" />
<meta property="og:description" content="Safiri Salama Online Memorials offer a number of special features to help you memorialize a loved one. " />
    
    <?php
   if ( is_404() ) {
    ?>
   
    <title>Tribute - safiri-salama</title>
    <?php
    }
    else
    {
    ?>
    <title><?php echo wp_title();?></title>
    <?php
    }
    ?>
  <link rel="stylesheet" type="text/css" href="<?php echo get_stylesheet_directory_uri();?>/css/bootstrap.css">
  <link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/timepicker/1.3.5/jquery.timepicker.min.css">
    <link rel="stylesheet" type="text/css" href="<?php echo get_stylesheet_directory_uri();?>/css/style.css">
    <link href="https://fonts.googleapis.com/css?family=Poppins:400,500,600,700" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css" rel="stylesheet" type="text/css">   
    <link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri();?>/css/owl.carousel.min.css">
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.3.0/css/datepicker.css">
    <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
    <!-- css for slider -->
    

     <!--[if IE 9]>
        <link rel="stylesheet" type="text/css" href="css/ie.css" />
        <![endif]-->
        <!--[if IE]>
            <script src="js/html5shiv.min.js"></script>
    <![endif]-->
    
  <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<section class="prehead d-none d-md-block">

    <div class="container">
        <div class="row">
            <div class="col-md-4">
                <div class="prehead_left">
                    <ul class="list-inline">
                     <li class="list-inline-item"><a href="http://www.facebook.com/sharer.php?u=<?php echo $webaddress;  ?>" target="_blank">
       <i class="fa fa-facebook" aria-hidden="true"></i>
    </a></li>
                          <!--  <li class="list-inline-item"><a href=""><i class="fa fa-facebook" aria-hidden="true"></i></a></li>-->
                            <li class="list-inline-item"><a href="https://www.instagram.com/?hl=en"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
                            
                       
                            <li class="list-inline-item"><a href="https://twitter.com/share?url=<?php echo $webaddress;  ?>&amp;text=<?php echo $about_description;  ?>&amp;hashtags=<?php echo $about_description;  ?>" target="_blank">
        <i class="fa fa-twitter" aria-hidden="true"></i>
    </a></li>
                      <li class="list-inline-item">Share this page</li>
                    </ul>
                    <p><a href="tel:<?php echo get_option("theme_phone_number");?>"><i class="fa fa-phone" aria-hidden="true"></i>CALL US  <?php echo get_option("theme_phone_number");?></a></p>
                </div>
                
            </div>
            <div class="col-md-4">
                <a href="<?php echo get_site_url();?>"><img class="img-fluid" alt="img" src="<?php echo get_option("theme_photo_about");?>"></a>
            </div>
            <div class="col-md-4">
                <div class="prehead_right pull-right">
                    <p><?php // echo get_option("theme_description");?><br>
                    <?php// echo get_option("theme_intro");?></p>
                    <ul class="list-inline pull-right">
                        <?php
                        if(($_SESSION['id']!=''))
                        {
                            $fname = $_SESSION['fname'];
                             $websit = $_SESSION["webaddress"];
                        ?>
                        <li class="list-inline-item"><a href="<?php echo $websit; ?>"><?php echo $fname ?></a></li>
                        <li class="list-inline-item"><a href="<?php echo get_site_url(); ?>/admin">admin</li>
                        <li class="list-inline-item"><a href="<?php echo get_site_url(); ?>/logout">SIGN OUT</a></li>
                        <?php
                        }
                        else if(($_SESSION['email_id']!=''))
                        {
                            $em=$_SESSION['email_id'];
                            $pro1 = $wpdb->get_results("SELECT * FROM `wp_tributeuser` where email_id = '$em'");
                            $fname1=($pro1[0]->fname!='')?$pro1[0]->fname:"";
                        ?>
                        
                        <li class="list-inline-item"><a href="<?php echo $websit; ?>"><?php echo $fname1 ?></a></li>
                        <li class="list-inline-item"><a href="<?php echo get_site_url(); ?>/logout">SIGN OUT</a></li>
                         <?php
                        }
                        else
                        {
                        ?>
                        <li class="list-inline-item"><a href="<?php echo get_site_url(); ?>/login">LOG IN</a></li>
                        <?php
                        }
                        ?>
                        
                    
                      <!--  <li class="list-inline-item"><a href="">SIGN UP</a></li>-->
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="prehead d-block d-md-none">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <a href="<?php echo get_site_url();?>"><img class="img-fluid" alt="img" src="<?php echo get_option("theme_photo_about");?>"></a>
            </div>
        </div>
        <div class="row">
            <div class="col-6">
                <div class="prehead_left">
                    <ul class="list-inline">
                        <li class="list-inline-item"><a href="http://www.facebook.com/sharer.php?u=<?php echo $webaddress;  ?>" target="_blank">
       <i class="fa fa-facebook" aria-hidden="true"></i>
    </a></li>
                          <!--  <li class="list-inline-item"><a href=""><i class="fa fa-facebook" aria-hidden="true"></i></a></li>-->
                            <li class="list-inline-item"><a href="https://www.instagram.com/?hl=en"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
                            
                       
                            <li class="list-inline-item"><a href="https://twitter.com/share?url=<?php echo $webaddress;  ?>&amp;text=<?php echo $about_description;  ?>&amp;hashtags=<?php echo $about_description;  ?>" target="_blank">
        <i class="fa fa-twitter" aria-hidden="true"></i>
    </a></li>
                      <li class="list-inline-item">Share this page</li>
                    </ul>
                    <p><a href="tel:<?php echo get_option("theme_phone_number");?>"><i class="fa fa-phone" aria-hidden="true"></i>CALL US  <?php echo get_option("theme_phone_number");?></a></p>
                </div>
            </div>
            <div class="col-6">
                <div class="prehead_right pull-right">
                    <p><?php// echo get_option("theme_description");?><br>
                    <?php //echo get_option("theme_intro");?></p>
                    <ul class="list-inline pull-right">
                      <?php
                        if(($_SESSION['id']!=''))
                        {
                              $fname = $_SESSION['fname'];
                             $websit = $_SESSION["webaddress"];
                        ?>
                        <li class="list-inline-item"><a href=""><?php echo $fname ?></a></li>
                        <li class="list-inline-item"><a href="<?php echo get_site_url(); ?>/admin">admin</li>
                        <li class="list-inline-item"><a href="<?php echo get_site_url(); ?>/logout">SIGN OUT</a></li>
                        <?php
                        }
                        else if(($_SESSION['email_id']!=''))
                        {
                            $em=$_SESSION['email_id'];
                            $pro1 = $wpdb->get_results("SELECT * FROM `wp_tributeuser` where email_id = '$em'");
                            $fname1=($pro1[0]->fname!='')?$pro1[0]->fname:"";
                        ?>
                        
                        <li class="list-inline-item"><a href="<?php echo $websit; ?>"><?php echo $fname1 ?></a></li>
                        <li class="list-inline-item"><a href="<?php echo get_site_url(); ?>/logout">SIGN OUT</a></li>
                         <?php
                        }
                        else
                        {
                        ?>
                        <li class="list-inline-item"><a href="<?php echo get_site_url(); ?>/login">LOG IN</a></li>
                        <?php
                        }
                        ?>
                      <!--  <li class="list-inline-item"><a href="">SIGN UP</a></li>-->
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>



<?php
    $id=($_SESSION['id']!='')?$_SESSION['id']:"";
    $uname=($_SESSION['fname']!='')?$_SESSION['fname']:"";
    $email=($_SESSION['acountemail']!='')?$_SESSION['acountemail']:"";
     $themeid=($_SESSION['themeid']!='')?$_SESSION['themeid']:"";
       $acountfname=($_SESSION['accountname']!='')?$_SESSION['accountname']:"";
        $acountl=($_SESSION['accountlname']!='')?$_SESSION['accountlname']:"";
         $webaddress=($_SESSION['webaddress']!='')?$_SESSION['webaddress']:"";
   
?>
<?php
if($_GET['id']!='')
{
  $mem_id=$_GET['id'];
  
$protri = $wpdb->get_results("SELECT * FROM `wp_tribute` where id = '$mem_id'");
 $wev=($protri[0]->webaddress!='')?$protri[0]->webaddress:"";
 $wefname=($protri[0]->fname!='')?$protri[0]->fname:"";
}
?>
<?php
if(isset($_REQUEST['subbtn']))
{

    $nid=isset($_POST['nid'])?$_POST['nid']:'';
  $fname=isset($_POST['fname'])?$_POST['fname']:'';
  $lname=isset($_POST['lname'])?$_POST['lname']:'';
 
  $bdate=isset($_POST['bdate'])?$_POST['bdate']:'';
  $bmonth=isset($_POST['bmonth'])?$_POST['bmonth']:'';
  $byear=isset($_POST['byear'])?$_POST['byear']:'';
  $fullbirthdate =$bdate.'/'.$bmonth.'/'.$byear;
  $bplace=isset($_POST['bplace'])?$_POST['bplace']:'';
  $ddate=isset($_POST['ddate'])?$_POST['ddate']:'';
  $dmonth=isset($_POST['dmonth'])?$_POST['dmonth']:'';
  $dyear=isset($_POST['dyear'])?$_POST['dyear']:'';
  $fulldathdate=$ddate.'/'.$dmonth.'/'.$dyear;
  $dplace=isset($_POST['dplace'])?$_POST['dplace']:'';
  $flocation=isset($_POST['flocation'])?$_POST['flocation']:'';
  $ftown=isset($_POST['ftown'])?$_POST['ftown']:'';
  $fdate=isset($_POST['fdate'])?$_POST['fdate']:'';
  $ftime=isset($_POST['ftime'])?$_POST['ftime']:'';
  $fcountry=isset($_POST['fcountry'])?$_POST['fcountry']:'';
  $butown=isset($_POST['butown'])?$_POST['butown']:'';
  $budate=isset($_POST['budate'])?$_POST['budate']:'';
  $butime=isset($_POST['butime'])?$_POST['butime']:'';
  $buarea=isset($_POST['buarea'])?$_POST['buarea']:'';
  $cemetery=isset($_POST['cemetery'])?$_POST['cemetery']:'';
  $cretown=isset($_POST['cretown'])?$_POST['cretown']:'';
  $Crematorium=isset($_POST['Crematorium'])?$_POST['Crematorium']:'';
  $ctime=isset($_POST['ctime'])?$_POST['ctime']:'';
  $fcname=isset($_POST['fcname'])?$_POST['fcname']:'';
  $fcsecname=isset($_POST['fcsecname'])?$_POST['fcsecname']:'';
  $ftelno=isset($_POST['ftelno'])?$_POST['ftelno']:'';
  $fctown=isset($_POST['fctown'])?$_POST['fctown']:'';
  $fclocation=isset($_POST['fclocation'])?$_POST['fclocation']:'';
  $fbuild=isset($_POST['fbuild'])?$_POST['fbuild']:'';
  $fmettingdate=isset($_POST['fmettingdate'])?$_POST['fmettingdate']:'';
  $gloc=isset($_POST['gloc'])?$_POST['gloc']:'';
  $notice=isset($_POST['notice'])?$_POST['notice']:'';
  $postn=isset($_POST['postn'])?$_POST['postn']:'';
  $postby=isset($_POST['postby'])?$_POST['postby']:'';
  $birthcountry=isset($_POST['birthcountry'])?$_POST['birthcountry']:'';
  $deathcountry=isset($_POST['deathcountry'])?$_POST['deathcountry']:'';

  if(!empty($_FILES['proimg']['name']))
  {
      $wp_upload_dir = wp_upload_dir();
     $uploadd= $wp_upload_dir['basedir'];
    $image1=$_FILES['proimg']['name'];
     move_uploaded_file( $_FILES['proimg']['tmp_name'],$uploadd.'/'.$_FILES['proimg']['name']);
  }
  else if($_POST['old_pic']!='')
{
  $image1=$_POST['old_pic'];
}
           
$wpdb->query("UPDATE wp_tribute  SET fname = '$fname',lname='$lname',fullbirthdate='$fullbirthdate',birthplace='$bplace',fulldeathdate='$fulldathdate',deathplace='$dplace',location='$flocation',town='$ftown',fdate='$fdate',ftime='$ftime',burial_country='$fcountry',burial_town='$butown',burial_date='$budate',burial_time='$butime',burial_location='$buarea',burial_cemetery='$cemetery',crematorium_town='$cretown',crematorium='$Crematorium',crematorium_time='$ctime',funeral_com_fname='$fcname',funeral_com_secondname='$fcsecname',funeral_com_telephone='$ftelno',funeral_com_town='$fctown',funeral_com_location='$fclocation', funeral_com_building='$fbuild', funeral_com_mettingdate='$fmettingdate', google_map_location='$gloc', notice='$notice',notice_posted='$postn',notice_posted_date='$postby',birth_country='$birthcountry',death_country='$deathcountry', profileimg='$image1' WHERE id='$id'");
 /*echo $wpdb->last_query;*/
$insert = $wpdb->insert( 'wp_Notification',
  array('userid' => $id,
        'notification' => 'You have Notification Regarding funnel arrangements/ notices', 
        
       ), //data
                array('%s','%s') //data format     
        );
  

 
   

$mailid = $wpdb->get_results("SELECT * FROM `wp_notification_signup` where member_id = '$id'"); 
    
            foreach($mailid as $maildata)
             {
              
               //$to=$maildata->email; 
               $to= ",". $maildata->email;
           }
           ?>
       
       <?php
 $to2='Info@safirisalama.com';
    $subject = 'You have New Notification';
    $messages = '
       <html>
      <head><meta http-equiv="Content-Type" content="text/html; charset=euc-kr">
      <title>You have New Notification</title>
      </head>
      <body>
     <div style="">
    <table width="503" style="background-color:#89cbe3;border: 1px dashed #00adef;font-size: 21px;    border-radius: 1px;">
    <tbody>
    <tr style="background:#89cbe3;color:#ffffff;border-bottom:5px solid #00adef;word-break:break-word;border-collapse:collapse!important;vertical-align:top;padding:0;padding-top:10px;text-align:center;margin-bottom:0px" valign="top">
      
    </tr>
    <tr style="color: white;">
    
    <td align="center" colspan="2">You have New Notification From Safirisalama</td>
    </tr>
    </tbody>
    </table>
    <table width="503" style="background-color: white;    border: 1px dashed;    font-size: 21px;    border-radius: 1px;">
    <tbody> 
    
     <tr>
      <td><b>Name:</b></td>
     <td>'. $fname.'</td>
 
    </tr> 
     <tr>
      <td><b>Date of Birth :</b></td>
      <td>'. $fullbirthdate.'</td>
    </tr>
      <tr>
      <td><b>Birth Place :</b></td>
      <td>'. $bplace.'</td>
    </tr>
    
     <tr>
      <td><b>Date of Death :</b></td>
      <td>'.$fulldathdate.'</td>
    </tr>

    <tr>
      <td><b>Death Place :</b></td>
      <td>'. $dplace.'</td>
    </tr>
    <tr>
      <td><b>Funeral Location:</b></td>
      <td>'. $flocation.'</td>
    </tr>
   <tr>
      <td><b>Funeral Committee Date :</b></td>
      <td>'. $fdate .'</td>
    </tr>
  
   </tbody>
     
 </table>
 </div>
  </body>
  </html>';

$headers2 = "MIME-Version: 1.0" . "\r\n";
$headers2 .= "Content-type:text/html;charset=UTF-8" . "\r\n";

// More headers
$headers2 .= 'From: <'.$to2.'>' . "\r\n";
$mail = mail($to,$subject,$messages,$headers2);
print_r($mail); 

if($mail=='1')
{
$msg2 = '<span style="color:#32CD32; font-size:16px;margin-left: 14px;">Thank you...Your message has been submitted to us. We will be in touch shortly.</span>';
  // send mail end ======================================================
}


 $to1= $email;
    $to3='Info@safirisalama.com';
    $subject1 = 'You have New Notification';
    $messages1 = '
       <html>
      <head><meta http-equiv="Content-Type" content="text/html; charset=euc-kr">
      <title>You have New Notification</title>
      </head>
      <body>
     <div style="">
    <table width="503" style="background-color:#89cbe3;border: 1px dashed #00adef;font-size: 21px;    border-radius: 1px;">
    <tbody>
    <tr style="background:#89cbe3;color:#ffffff;border-bottom:5px solid #00adef;word-break:break-word;border-collapse:collapse!important;vertical-align:top;padding:0;padding-top:10px;text-align:center;margin-bottom:0px" valign="top">
      
    </tr>
    <tr style="color: white;">
    
    <td align="center" colspan="2">You have New Notification From Safirisalama</td>
    </tr>
    </tbody>
    </table>
    <table width="503" style="background-color: white;    border: 1px dashed;    font-size: 21px;    border-radius: 1px;">
    <tbody> 
     <tr>
      <td><b>Name:</b></td>
     <td>'. $fname.'</td>
 
    </tr> 
     <tr>
      <td><b>Date of Birth :</b></td>
      <td>'. $fullbirthdate.'</td>
    </tr>
      <tr>
      <td><b>Birth Place :</b></td>
      <td>'. $bplace.'</td>
    </tr>
    
     <tr>
      <td><b>Date of Death :</b></td>
      <td>'.$fulldathdate.'</td>
    </tr>

    <tr>
      <td><b>Death Place :</b></td>
      <td>'. $dplace.'</td>
    </tr>
    <tr>
      <td><b>Funeral Location:</b></td>
      <td>'. $flocation.'</td>
    </tr>
   <tr>
      <td><b>Funeral Committee Date :</b></td>
      <td>'. $fdate .'</td>
    </tr>
  
  
   </tbody>
     
 </table>
 </div>
  </body>
  </html>
';

$headers3 = "MIME-Version: 1.0" . "\r\n";
$headers3 .= "Content-type:text/html;charset=UTF-8" . "\r\n";

// More headers
$headers3 .= 'From: <'.$to3.'>' . "\r\n";
if(mail($to1,$subject1,$messages1,$headers3))
{
    ?>
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
<script>swal("Thank You!", "Email has been sended on this email Id!", "success");</script>
  <?php
}
      
}
?>


<?php
if($_GET['id']!='')
{
  $id=$_GET['id'];
$pro = $wpdb->get_results("SELECT * FROM `wp_tribute` where id = '$id'");


}
else
{
?>

<?php
$pro = $wpdb->get_results("SELECT * FROM `wp_tribute` where id = '$id'");
}
/*echo $wpdb->last_query;*/
$id=($pro[0]->id!='')?$pro[0]->id:"";
    $fname=($pro[0]->fname!='')?$pro[0]->fname:"";
    $lname=($pro[0]->lname!='')?$pro[0]->lname:"";
    $songname=($pro[0]->songname!='')?$pro[0]->songname:"";
    $birthdate=($pro[0]->birthdate!='')?$pro[0]->birthdate:"";
    $birthmonth=($pro[0]->birthmonth!='')?$pro[0]->birthmonth:"";
    $birthyear=($pro[0]->birthyear!='')?$pro[0]->birthyear:"";
    $birthplace=($pro[0]->birthplace!='')?$pro[0]->birthplace:"";
    $deathdate=($pro[0]->deathdate!='')?$pro[0]->deathdate:"";
    $deathmonth=($pro[0]->deathmonth!='')?$pro[0]->deathmonth:"";
    $deathyear=($pro[0]->deathyear!='')?$pro[0]->deathyear:"";
    $deathplace=($pro[0]->deathplace!='')?$pro[0]->deathplace:"";
    $location=($pro[0]->location!='')?$pro[0]->location:"";
    $town=($pro[0]->town!='')?$pro[0]->town:"";
    $fdate=($pro[0]->fdate!='')?$pro[0]->fdate:"";
    $ftime=($pro[0]->ftime!='')?$pro[0]->ftime:"";
    $burial_country=($pro[0]->burial_country!='')?$pro[0]->burial_country:"";
    $burial_town=($pro[0]->burial_town!='')?$pro[0]->burial_town:"";
    $burial_date=($pro[0]->burial_date!='')?$pro[0]->burial_date:"";
    $burial_time=($pro[0]->burial_time!='')?$pro[0]->burial_time:"";
    $burial_location=($pro[0]->burial_location!='')?$pro[0]->burial_location:"";
    $burial_cemetery=($pro[0]->burial_cemetery!='')?$pro[0]->burial_cemetery:"";
    $crematorium_town=($pro[0]->crematorium_town!='')?$pro[0]->crematorium_town:"";
    $crematorium=($pro[0]->crematorium!='')?$pro[0]->crematorium:"";
    $crematorium_time=($pro[0]->crematorium_time!='')?$pro[0]->crematorium_time:"";
    $funeral_com_fname=($pro[0]->funeral_com_fname!='')?$pro[0]->funeral_com_fname:"";
    $funeral_com_secondname=($pro[0]->funeral_com_secondname!='')?$pro[0]->funeral_com_secondname:"";
    $funeral_com_telephone=($pro[0]->funeral_com_telephone!='')?$pro[0]->funeral_com_telephone:"";
    $funeral_com_town=($pro[0]->funeral_com_town!='')?$pro[0]->funeral_com_town:"";
    $funeral_com_location=($pro[0]->funeral_com_location!='')?$pro[0]->funeral_com_location:"";
    $funeral_com_building=($pro[0]->funeral_com_building!='')?$pro[0]->funeral_com_building:"";
    $funeral_com_mettingdate=($pro[0]->funeral_com_mettingdate!='')?$pro[0]->funeral_com_mettingdate:"";
    $google_map_location=($pro[0]->google_map_location!='')?$pro[0]->google_map_location:"";
    
    
      $webadd=($pro[0]->webaddress!='')?$pro[0]->webaddress:"";
 
    $notice=($pro[0]->notice!='')?$pro[0]->notice:"";
    $notice_posted=($pro[0]->notice_posted!='')?$pro[0]->notice_posted:"";
     $notice_posted_date=($pro[0]->notice_posted_date!='')?$pro[0]->notice_posted_date:"";
     $profileimg=($pro[0]->profileimg!='')?$pro[0]->profileimg:"";
     $about_description=($pro[0]->about_description!='')?$pro[0]->about_description:"";
     $fullbirthdate=($pro[0]->fullbirthdate!='')?$pro[0]->fullbirthdate:"";
     $birthcountry=($pro[0]->birth_country!='')?$pro[0]->birth_country:"";
     $deathcountry=($pro[0]->death_country!='')?$pro[0]->death_country:"";
      $first_memorial_text=($pro[0]->first_memorial_text!='')?$pro[0]->first_memorial_text:"";
     $second_memorial_text=($pro[0]->second_memorial_text!='')?$pro[0]->second_memorial_text:"";
     
     $themeid=($pro[0]->themeid!='')?$pro[0]->themeid:"";
     
    $orderdate = explode('/', $fullbirthdate);
    $day = $orderdate[0];
    $month   = $orderdate[1];
    $year  = $orderdate[2];
    $fulldeathdate=($pro[0]->fulldeathdate!='')?$pro[0]->fulldeathdate:"";
     
    $orderdate1 = explode('/', $fulldeathdate);
    $day1 = $orderdate1[0];
    $month1   = $orderdate1[1];
    $year1  = $orderdate1[2];
    
     $visitorcounter=($pro[0]->visitcount!='')?$pro[0]->visitcount:"";
    
   
?>


<!--start tribute insert-->
<?php
if(isset($_REQUEST['subtribute']))
{
    $tribure=isset($_POST['tribure'])?$_POST['tribure']:'';
  $userid=isset($_POST['userid'])?$_POST['userid']:'';
  $fname=isset($_POST['fname'])?$_POST['fname']:'';
  $lname=isset($_POST['lname'])?$_POST['lname']:'';
  $tribure_type=isset($_POST['tribure_type'])?$_POST['tribure_type']:'';
  $note=isset($_POST['note'])?$_POST['note']:'';
   $note1=isset($_POST['note1'])?$_POST['note1']:'';
    $note2=isset($_POST['note2'])?$_POST['note2']:'';
  
  $insert = $wpdb->insert( 'wp_trubutenote',
  array('tributeaction' => $tribure,
        'userid' => $userid,
        'tribute_type' =>$tribure_type, 
        'note' => $note,
        'tributenote_first' => $note1,
        'tributenote2_second' => $note2,
        'trnfname' => $fname,
        'trlname' => $lname,
        ), //data
                array('%s','%s','%s','%s') //data format     
        );
      /* echo $wpdb->last_query;*/
      ?>
<?php
                        if(($_SESSION['id']!=''))
                        {
                        ?>
                         <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>    
                        <script type="text/javascript">
      swal(" ", "Leaved a Tribute", "success");
  window.location.href='<?php echo $webaddress; ?>/?id=<?php echo $id; ?>';
</script>
   
<?php
}
else
{
?>
              <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>       
      <script type="text/javascript">
      swal(" ", "Leaved a Tribute", "success"); 
  window.location.href='<?php echo $wev; ?>/?id=<?php echo $id; ?>';
</script>
<?php  
}
}
?>
<!--end tribute insert-->

<?php
$postid4 = 238;
$post4 = get_post( $postid4 );
$back4=get_field('template_background_image',$postid4);
if($themeid == $postid4)
{
?>

<style>
.tribute_head {
    background: url(<?php echo $back4['url'];  ?>)no-repeat;
    background-size: cover;
    background-position: center;
}
.tribute_head .nav-tabs .nav-link.active, .tribute_head .nav-tabs .nav-item.show .nav-link,.tribute_ul_new .nav-tabs .nav-link.active, .nav-tabs .nav-item.show .nav-link {
   background-color: <?php echo get_field('active_tab_background_color',$postid4); ?>;
       border-right: 1px solid <?php echo get_field('tab_border_color',$postid4); ?>;
  }
.tribute_head .nav-tabs .nav-item,.tribute_ul_new .nav-tabs .nav-link {
  
    background: <?php echo get_field('tab_background_color',$postid4); ?>;
}
.tribute_head .nav-tabs .nav-link {
  border-right: 1px solid <?php echo get_field('tab_border_color',$postid4); ?>;
  }
  .tribute_head .nav-tabs {
   border: 2px solid <?php echo get_field('tab_border_color',$postid4); ?>;
    }
    .tribute_ul_new .nav-tabs .nav-item {
    border-bottom: 1px solid <?php echo get_field('tab_border_color',$postid4); ?> !important;
    
}
.tribute_ul_new .nav-tabs .nav-link.active{
    border-color: <?php echo get_field('tab_border_color',$postid4); ?>;
}
</style>

<?php
}

?>
<?php
$postid3 = 242;
$post3 = get_post( $postid3 );
$back3=get_field('template_background_image',$postid3);
if($themeid == $postid3)
{
?>

<style>
.tribute_head {
    background: url(<?php echo $back3['url'];  ?>)no-repeat;
    background-size: cover;
    background-position: center;
}
.tribute_head .nav-tabs .nav-link.active, .tribute_head .nav-tabs .nav-item.show .nav-link,.tribute_ul_new .nav-tabs .nav-link.active, .nav-tabs .nav-item.show .nav-link {
   background-color: <?php echo get_field('active_tab_background_color',$postid3); ?>;
       border-right: 1px solid <?php echo get_field('tab_border_color',$postid3); ?>;
  }
.tribute_head .nav-tabs .nav-item,.tribute_ul_new .nav-tabs .nav-link {
    
    background: <?php echo get_field('tab_background_color',$postid3); ?>;
}
.tribute_head .nav-tabs .nav-link {
  border-right: 1px solid <?php echo get_field('tab_border_color',$postid3); ?>;
  }
  .tribute_head .nav-tabs {
   border: 2px solid <?php echo get_field('tab_border_color',$postid3); ?>;
    }
     .tribute_ul_new .nav-tabs .nav-item {
    border-bottom: 1px solid <?php echo get_field('tab_border_color',$postid3); ?> !important;
    
}
.tribute_ul_new .nav-tabs .nav-link.active{
    border-color: <?php echo get_field('tab_border_color',$postid3); ?>;
}
</style>

<?php
}

?>
<?php
$postid2 = 240;
$post2 = get_post( $postid2 );
$back2=get_field('template_background_image',$postid2);
if($themeid == $postid2)
{
?>

<style>
.tribute_head {
    background: url(<?php echo $back2['url'];  ?>)no-repeat;
    background-size: cover;
    background-position: center;
}
.tribute_head .nav-tabs .nav-link.active, .tribute_head .nav-tabs .nav-item.show .nav-link ,.tribute_ul_new .nav-tabs .nav-link.active, .nav-tabs .nav-item.show .nav-link{
   background-color: <?php echo get_field('active_tab_background_color',$postid2); ?>;
       border-right: 1px solid <?php echo get_field('tab_border_color',$postid2); ?>;
  }
.tribute_head .nav-tabs .nav-item,.tribute_ul_new .nav-tabs .nav-link {
    
    background: <?php echo get_field('tab_background_color',$postid2); ?>;
}
.tribute_head .nav-tabs .nav-link {
  border-right: 1px solid <?php echo get_field('tab_border_color',$postid2); ?>;
  }
  .tribute_head .nav-tabs {
   border: 2px solid <?php echo get_field('tab_border_color',$postid2); ?>;
    }
     .tribute_ul_new .nav-tabs .nav-item {
    border-bottom: 1px solid <?php echo get_field('tab_border_color',$postid2); ?> !important;
    
}
.tribute_ul_new .nav-tabs .nav-link.active{
    border-color: <?php echo get_field('tab_border_color',$postid2); ?>;
}
</style>

<?php
}

?>
<?php
$postid1 = 236;
$post1 = get_post( $postid1 );
$back1=get_field('template_background_image',$postid1);
if($themeid == $postid1)
{
?>

<style>
.tribute_head {
   background: url(<?php echo $back1['url'];  ?>)no-repeat;
   background-size: cover;
    background-position: center;
}
.tribute_head .nav-tabs .nav-link.active, .tribute_head .nav-tabs .nav-item.show .nav-link,.tribute_ul_new .nav-tabs .nav-link.active, .nav-tabs .nav-item.show .nav-link {
   background-color: <?php echo get_field('active_tab_background_color',$postid1); ?>;
       border-right: 1px solid <?php echo get_field('tab_border_color',$postid1); ?>;
  }
.tribute_head .nav-tabs .nav-item,.tribute_ul_new .nav-tabs .nav-link {
   
    background: <?php echo get_field('tab_background_color',$postid1); ?>;
}
.tribute_head .nav-tabs .nav-link {
  border-right: 1px solid <?php echo get_field('tab_border_color',$postid1); ?>;
  }
  .tribute_head .nav-tabs {
   border: 2px solid <?php echo get_field('tab_border_color',$postid1); ?>;
    }
     .tribute_ul_new .nav-tabs .nav-item {
    border-bottom: 1px solid <?php echo get_field('tab_border_color',$postid1); ?> !important;
    
}
.tribute_ul_new .nav-tabs .nav-link.active{
    border-color: <?php echo get_field('tab_border_color',$postid1); ?>;
}
</style>

<?php
}

?>
<?php
$postid = 230;
$post = get_post( $postid );
$back=get_field('template_background_image',$postid);
if($themeid == $postid)
{
?>

<style>
.tribute_head {
    background: url(<?php echo $back['url'];  ?>)no-repeat;
        background-size: cover;
    background-position: center;
}
.tribute_head .nav-tabs .nav-link.active, .tribute_head .nav-tabs .nav-item.show .nav-link ,.tribute_ul_new .nav-tabs .nav-link.active, .nav-tabs .nav-item.show .nav-link{
   background-color: <?php echo get_field('active_tab_background_color',$postid); ?>;
       border-right: 1px solid <?php echo get_field('tab_border_color',$postid); ?>;
  }
.tribute_head .nav-tabs .nav-item ,.tribute_ul_new .nav-tabs .nav-link{
   
    background: <?php echo get_field('tab_background_color',$postid); ?>;
}
.tribute_head .nav-tabs .nav-link {
  border-right: 1px solid <?php echo get_field('tab_border_color',$postid); ?>;
  }
  .tribute_head .nav-tabs {
   border: 2px solid <?php echo get_field('tab_border_color',$postid); ?>;
    }
     .tribute_ul_new .nav-tabs .nav-item {
    border-bottom: 1px solid <?php echo get_field('tab_border_color',$postid); ?> !important;
    
}
.tribute_ul_new .nav-tabs .nav-link.active{
    border-color: <?php echo get_field('tab_border_color',$postid); ?>;
}

</style>

<?php
}

?>
<?php
$postid = 443;
$post = get_post( $postid );
$back=get_field('template_background_image',$postid);
if($themeid == $postid)
{
?>

<style>
.tribute_head {
    background: url(<?php echo $back['url'];  ?>)no-repeat;
        background-size: cover;
    background-position: center;
}
.tribute_head .nav-tabs .nav-link.active, .tribute_head .nav-tabs .nav-item.show .nav-link ,.tribute_ul_new .nav-tabs .nav-link.active, .nav-tabs .nav-item.show .nav-link{
   background-color: <?php echo get_field('active_tab_background_color',$postid); ?>;
       border-right: 1px solid <?php echo get_field('tab_border_color',$postid); ?>;
  }
.tribute_head .nav-tabs .nav-item ,.tribute_ul_new .nav-tabs .nav-link{
   
    background: <?php echo get_field('tab_background_color',$postid); ?>;
}
.tribute_head .nav-tabs .nav-link {
  border-right: 1px solid <?php echo get_field('tab_border_color',$postid); ?>;
  }
  .tribute_head .nav-tabs {
   border: 2px solid <?php echo get_field('tab_border_color',$postid); ?>;
    }
     .tribute_ul_new .nav-tabs .nav-item {
    border-bottom: 1px solid <?php echo get_field('tab_border_color',$postid); ?> !important;
    
}
.tribute_ul_new .nav-tabs .nav-link.active{
    border-color: <?php echo get_field('tab_border_color',$postid); ?>;
}

</style>

<?php
}

?>
<?php
$postid = 449;
$post = get_post( $postid );
$back=get_field('template_background_image',$postid);
if($themeid == $postid)
{
?>

<style>
.tribute_head {
    background: url(<?php echo $back['url'];  ?>)no-repeat;
        background-size: cover;
    background-position: center;
}
.tribute_head .nav-tabs .nav-link.active, .tribute_head .nav-tabs .nav-item.show .nav-link ,.tribute_ul_new .nav-tabs .nav-link.active, .nav-tabs .nav-item.show .nav-link{
   background-color: <?php echo get_field('active_tab_background_color',$postid); ?>;
       border-right: 1px solid <?php echo get_field('tab_border_color',$postid); ?>;
  }
.tribute_head .nav-tabs .nav-item ,.tribute_ul_new .nav-tabs .nav-link{
   
    background: <?php echo get_field('tab_background_color',$postid); ?>;
}
.tribute_head .nav-tabs .nav-link {
  border-right: 1px solid <?php echo get_field('tab_border_color',$postid); ?>;
  }
  .tribute_head .nav-tabs {
   border: 2px solid <?php echo get_field('tab_border_color',$postid); ?>;
    }
     .tribute_ul_new .nav-tabs .nav-item {
    border-bottom: 1px solid <?php echo get_field('tab_border_color',$postid); ?> !important;
    
}
.tribute_ul_new .nav-tabs .nav-link.active{
    border-color: <?php echo get_field('tab_border_color',$postid); ?>;
}

</style>

<?php
}

?>
<?php
$postid = 457;
$post = get_post( $postid );
$back=get_field('template_background_image',$postid);
if($themeid == $postid)
{
?>

<style>
.tribute_head {
    background: url(<?php echo $back['url'];  ?>)no-repeat;
        background-size: cover;
    background-position: center;
}
.tribute_head .nav-tabs .nav-link.active, .tribute_head .nav-tabs .nav-item.show .nav-link ,.tribute_ul_new .nav-tabs .nav-link.active, .nav-tabs .nav-item.show .nav-link{
   background-color: <?php echo get_field('active_tab_background_color',$postid); ?>;
       border-right: 1px solid <?php echo get_field('tab_border_color',$postid); ?>;
  }
.tribute_head .nav-tabs .nav-item ,.tribute_ul_new .nav-tabs .nav-link{
   
    background: <?php echo get_field('tab_background_color',$postid); ?>;
}
.tribute_head .nav-tabs .nav-link {
  border-right: 1px solid <?php echo get_field('tab_border_color',$postid); ?>;
  }
  .tribute_head .nav-tabs {
   border: 2px solid <?php echo get_field('tab_border_color',$postid); ?>;
    }
     .tribute_ul_new .nav-tabs .nav-item {
    border-bottom: 1px solid <?php echo get_field('tab_border_color',$postid); ?> !important;
    
}
.tribute_ul_new .nav-tabs .nav-link.active{
    border-color: <?php echo get_field('tab_border_color',$postid); ?>;
}

</style>

<?php
}

?>
<?php
$postid = 461;
$post = get_post( $postid );
$back=get_field('template_background_image',$postid);
if($themeid == $postid)
{
?>

<style>
.tribute_head {
    background: url(<?php echo $back['url'];  ?>)no-repeat;
        background-size: cover;
    background-position: center;
}
.tribute_head .nav-tabs .nav-link.active, .tribute_head .nav-tabs .nav-item.show .nav-link ,.tribute_ul_new .nav-tabs .nav-link.active, .nav-tabs .nav-item.show .nav-link{
   background-color: <?php echo get_field('active_tab_background_color',$postid); ?>;
       border-right: 1px solid <?php echo get_field('tab_border_color',$postid); ?>;
  }
.tribute_head .nav-tabs .nav-item ,.tribute_ul_new .nav-tabs .nav-link{
   
    background: <?php echo get_field('tab_background_color',$postid); ?>;
}
.tribute_head .nav-tabs .nav-link {
  border-right: 1px solid <?php echo get_field('tab_border_color',$postid); ?>;
  }
  .tribute_head .nav-tabs {
   border: 2px solid <?php echo get_field('tab_border_color',$postid); ?>;
    }
     .tribute_ul_new .nav-tabs .nav-item {
    border-bottom: 1px solid <?php echo get_field('tab_border_color',$postid); ?> !important;
    
}
.tribute_ul_new .nav-tabs .nav-link.active{
    border-color: <?php echo get_field('tab_border_color',$postid); ?>;
}

</style>

<?php
}

?>
<?php
$postid = 466;
$post = get_post( $postid );
$back=get_field('template_background_image',$postid);
if($themeid == $postid)
{
?>

<style>
.tribute_head {
    background: url(<?php echo $back['url'];  ?>)no-repeat;
        background-size: cover;
    background-position: center;
}
.tribute_head .nav-tabs .nav-link.active, .tribute_head .nav-tabs .nav-item.show .nav-link ,.tribute_ul_new .nav-tabs .nav-link.active, .nav-tabs .nav-item.show .nav-link{
   background-color: <?php echo get_field('active_tab_background_color',$postid); ?>;
       border-right: 1px solid <?php echo get_field('tab_border_color',$postid); ?>;
  }
.tribute_head .nav-tabs .nav-item ,.tribute_ul_new .nav-tabs .nav-link{
   
    background: <?php echo get_field('tab_background_color',$postid); ?>;
}
.tribute_head .nav-tabs .nav-link {
  border-right: 1px solid <?php echo get_field('tab_border_color',$postid); ?>;
  }
  .tribute_head .nav-tabs {
   border: 2px solid <?php echo get_field('tab_border_color',$postid); ?>;
    }
     .tribute_ul_new .nav-tabs .nav-item {
    border-bottom: 1px solid <?php echo get_field('tab_border_color',$postid); ?> !important;
    
}
.tribute_ul_new .nav-tabs .nav-link.active{
    border-color: <?php echo get_field('tab_border_color',$postid); ?>;
}

</style>

<?php
}

?>
<?php
$postid = 470;
$post = get_post( $postid );
$back=get_field('template_background_image',$postid);
if($themeid == $postid)
{
?>

<style>
.tribute_head {
    background: url(<?php echo $back['url'];  ?>)no-repeat;
        background-size: cover;
    background-position: center;
}
.tribute_head .nav-tabs .nav-link.active, .tribute_head .nav-tabs .nav-item.show .nav-link ,.tribute_ul_new .nav-tabs .nav-link.active, .nav-tabs .nav-item.show .nav-link{
   background-color: <?php echo get_field('active_tab_background_color',$postid); ?>;
       border-right: 1px solid <?php echo get_field('tab_border_color',$postid); ?>;
  }
.tribute_head .nav-tabs .nav-item ,.tribute_ul_new .nav-tabs .nav-link{
   
    background: <?php echo get_field('tab_background_color',$postid); ?>;
}
.tribute_head .nav-tabs .nav-link {
  border-right: 1px solid <?php echo get_field('tab_border_color',$postid); ?>;
  }
  .tribute_head .nav-tabs {
   border: 2px solid <?php echo get_field('tab_border_color',$postid); ?>;
    }
     .tribute_ul_new .nav-tabs .nav-item {
    border-bottom: 1px solid <?php echo get_field('tab_border_color',$postid); ?> !important;
    
}
.tribute_ul_new .nav-tabs .nav-link.active{
    border-color: <?php echo get_field('tab_border_color',$postid); ?>;
}

</style>

<?php
}

?>
<?php
$postid = 474;
$post = get_post( $postid );
$back=get_field('template_background_image',$postid);
if($themeid == $postid)
{
?>

<style>
.tribute_head {
    background: url(<?php echo $back['url'];  ?>)no-repeat;
        background-size: cover;
    background-position: center;
}
.tribute_head .nav-tabs .nav-link.active, .tribute_head .nav-tabs .nav-item.show .nav-link ,.tribute_ul_new .nav-tabs .nav-link.active, .nav-tabs .nav-item.show .nav-link{
   background-color: <?php echo get_field('active_tab_background_color',$postid); ?>;
       border-right: 1px solid <?php echo get_field('tab_border_color',$postid); ?>;
  }
.tribute_head .nav-tabs .nav-item ,.tribute_ul_new .nav-tabs .nav-link{
   
    background: <?php echo get_field('tab_background_color',$postid); ?>;
}
.tribute_head .nav-tabs .nav-link {
  border-right: 1px solid <?php echo get_field('tab_border_color',$postid); ?>;
  }
  .tribute_head .nav-tabs {
   border: 2px solid <?php echo get_field('tab_border_color',$postid); ?>;
    }
     .tribute_ul_new .nav-tabs .nav-item {
    border-bottom: 1px solid <?php echo get_field('tab_border_color',$postid); ?> !important;
    
}
.tribute_ul_new .nav-tabs .nav-link.active{
    border-color: <?php echo get_field('tab_border_color',$postid); ?>;
}

</style>

<?php
}

?>
<?php
$postid = 480;
$post = get_post( $postid );
$back=get_field('template_background_image',$postid);
if($themeid == $postid)
{
?>

<style>
.tribute_head {
    background: url(<?php echo $back['url'];  ?>)no-repeat;
        background-size: cover;
    background-position: center;
}
.tribute_head .nav-tabs .nav-link.active, .tribute_head .nav-tabs .nav-item.show .nav-link ,.tribute_ul_new .nav-tabs .nav-link.active, .nav-tabs .nav-item.show .nav-link{
   background-color: <?php echo get_field('active_tab_background_color',$postid); ?>;
       border-right: 1px solid <?php echo get_field('tab_border_color',$postid); ?>;
  }
.tribute_head .nav-tabs .nav-item ,.tribute_ul_new .nav-tabs .nav-link{
   
    background: <?php echo get_field('tab_background_color',$postid); ?>;
}
.tribute_head .nav-tabs .nav-link {
  border-right: 1px solid <?php echo get_field('tab_border_color',$postid); ?>;
  }
  .tribute_head .nav-tabs {
   border: 2px solid <?php echo get_field('tab_border_color',$postid); ?>;
    }
     .tribute_ul_new .nav-tabs .nav-item {
    border-bottom: 1px solid <?php echo get_field('tab_border_color',$postid); ?> !important;
    
}
.tribute_ul_new .nav-tabs .nav-link.active{
    border-color: <?php echo get_field('tab_border_color',$postid); ?>;
}

</style>

<?php
}

?>
<?php
$postid = 484;
$post = get_post( $postid );
$back=get_field('template_background_image',$postid);
if($themeid == $postid)
{
?>

<style>
.tribute_head {
    background: url(<?php echo $back['url'];  ?>)no-repeat;
        background-size: cover;
    background-position: center;
}
.tribute_head .nav-tabs .nav-link.active, .tribute_head .nav-tabs .nav-item.show .nav-link ,.tribute_ul_new .nav-tabs .nav-link.active, .nav-tabs .nav-item.show .nav-link{
   background-color: <?php echo get_field('active_tab_background_color',$postid); ?>;
       border-right: 1px solid <?php echo get_field('tab_border_color',$postid); ?>;
  }
.tribute_head .nav-tabs .nav-item ,.tribute_ul_new .nav-tabs .nav-link{
   
    background: <?php echo get_field('tab_background_color',$postid); ?>;
}
.tribute_head .nav-tabs .nav-link {
  border-right: 1px solid <?php echo get_field('tab_border_color',$postid); ?>;
  }
  .tribute_head .nav-tabs {
   border: 2px solid <?php echo get_field('tab_border_color',$postid); ?>;
    }
     .tribute_ul_new .nav-tabs .nav-item {
    border-bottom: 1px solid <?php echo get_field('tab_border_color',$postid); ?> !important;
    
}
.tribute_ul_new .nav-tabs .nav-link.active{
    border-color: <?php echo get_field('tab_border_color',$postid); ?>;
}

</style>

<?php
}

?>
<?php
$postid = 488;
$post = get_post( $postid );
$back=get_field('template_background_image',$postid);
if($themeid == $postid)
{
?>

<style>
.tribute_head {
    background: url(<?php echo $back['url'];  ?>)no-repeat;
        background-size: cover;
    background-position: center;
}
.tribute_head .nav-tabs .nav-link.active, .tribute_head .nav-tabs .nav-item.show .nav-link ,.tribute_ul_new .nav-tabs .nav-link.active, .nav-tabs .nav-item.show .nav-link{
   background-color: <?php echo get_field('active_tab_background_color',$postid); ?>;
       border-right: 1px solid <?php echo get_field('tab_border_color',$postid); ?>;
  }
.tribute_head .nav-tabs .nav-item ,.tribute_ul_new .nav-tabs .nav-link{
   
    background: <?php echo get_field('tab_background_color',$postid); ?>;
}
.tribute_head .nav-tabs .nav-link {
  border-right: 1px solid <?php echo get_field('tab_border_color',$postid); ?>;
  }
  .tribute_head .nav-tabs {
   border: 2px solid <?php echo get_field('tab_border_color',$postid); ?>;
    }
     .tribute_ul_new .nav-tabs .nav-item {
    border-bottom: 1px solid <?php echo get_field('tab_border_color',$postid); ?> !important;
    
}
.tribute_ul_new .nav-tabs .nav-link.active{
    border-color: <?php echo get_field('tab_border_color',$postid); ?>;
}

</style>

<?php
}

?>
<?php
$postid = 492;
$post = get_post( $postid );
$back=get_field('template_background_image',$postid);
if($themeid == $postid)
{
?>

<style>
.tribute_head {
    background: url(<?php echo $back['url'];  ?>)no-repeat;
        background-size: cover;
    background-position: center;
}
.tribute_head .nav-tabs .nav-link.active, .tribute_head .nav-tabs .nav-item.show .nav-link ,.tribute_ul_new .nav-tabs .nav-link.active, .nav-tabs .nav-item.show .nav-link{
   background-color: <?php echo get_field('active_tab_background_color',$postid); ?>;
       border-right: 1px solid <?php echo get_field('tab_border_color',$postid); ?>;
  }
.tribute_head .nav-tabs .nav-item ,.tribute_ul_new .nav-tabs .nav-link{
   
    background: <?php echo get_field('tab_background_color',$postid); ?>;
}
.tribute_head .nav-tabs .nav-link {
  border-right: 1px solid <?php echo get_field('tab_border_color',$postid); ?>;
  }
  .tribute_head .nav-tabs {
   border: 2px solid <?php echo get_field('tab_border_color',$postid); ?>;
    }
     .tribute_ul_new .nav-tabs .nav-item {
    border-bottom: 1px solid <?php echo get_field('tab_border_color',$postid); ?> !important;
    
}
.tribute_ul_new .nav-tabs .nav-link.active{
    border-color: <?php echo get_field('tab_border_color',$postid); ?>;
}

</style>

<?php
}

?>
<?php
$postid = 496;
$post = get_post( $postid );
$back=get_field('template_background_image',$postid);
if($themeid == $postid)
{
?>

<style>
.tribute_head {
    background: url(<?php echo $back['url'];  ?>)no-repeat;
        background-size: cover;
    background-position: center;
}
.tribute_head .nav-tabs .nav-link.active, .tribute_head .nav-tabs .nav-item.show .nav-link ,.tribute_ul_new .nav-tabs .nav-link.active, .nav-tabs .nav-item.show .nav-link{
   background-color: <?php echo get_field('active_tab_background_color',$postid); ?>;
       border-right: 1px solid <?php echo get_field('tab_border_color',$postid); ?>;
  }
.tribute_head .nav-tabs .nav-item ,.tribute_ul_new .nav-tabs .nav-link{
   
    background: <?php echo get_field('tab_background_color',$postid); ?>;
}
.tribute_head .nav-tabs .nav-link {
  border-right: 1px solid <?php echo get_field('tab_border_color',$postid); ?>;
  }
  .tribute_head .nav-tabs {
   border: 2px solid <?php echo get_field('tab_border_color',$postid); ?>;
    }
     .tribute_ul_new .nav-tabs .nav-item {
    border-bottom: 1px solid <?php echo get_field('tab_border_color',$postid); ?> !important;
    
}
.tribute_ul_new .nav-tabs .nav-link.active{
    border-color: <?php echo get_field('tab_border_color',$postid); ?>;
}

</style>

<?php
}

?>
<?php
$postid = 501;
$post = get_post( $postid );
$back=get_field('template_background_image',$postid);
if($themeid == $postid)
{
?>

<style>
.tribute_head {
    background: url(<?php echo $back['url'];  ?>)no-repeat;
        background-size: cover;
    background-position: center;
}
.tribute_head .nav-tabs .nav-link.active, .tribute_head .nav-tabs .nav-item.show .nav-link ,.tribute_ul_new .nav-tabs .nav-link.active, .nav-tabs .nav-item.show .nav-link{
   background-color: <?php echo get_field('active_tab_background_color',$postid); ?>;
       border-right: 1px solid <?php echo get_field('tab_border_color',$postid); ?>;
  }
.tribute_head .nav-tabs .nav-item ,.tribute_ul_new .nav-tabs .nav-link{
   
    background: <?php echo get_field('tab_background_color',$postid); ?>;
}
.tribute_head .nav-tabs .nav-link {
  border-right: 1px solid <?php echo get_field('tab_border_color',$postid); ?>;
  }
  .tribute_head .nav-tabs {
   border: 2px solid <?php echo get_field('tab_border_color',$postid); ?>;
    }
     .tribute_ul_new .nav-tabs .nav-item {
    border-bottom: 1px solid <?php echo get_field('tab_border_color',$postid); ?> !important;
    
}
.tribute_ul_new .nav-tabs .nav-link.active{
    border-color: <?php echo get_field('tab_border_color',$postid); ?>;
}

</style>

<?php
}

?>
  
<nav class="navbar navbar-expand-md navbar-light">
   
      
    <div class="container">
        
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span><i class="fa fa-bars" aria-hidden="true"></i></span>
      </button>
    
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <?php
            wp_nav_menu( array(
              'theme_location' => 'menu-1',
              'container_class'=>'nav',
              'container_id'   =>'nav',
              'menu_class'     => 'navbar-nav mr-auto',
              'menu_id'        => 'g1'
            ));
         ?>
        
      </div>
       <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/player_icons.png" class="playvid" onclick="pauseAudio()" >
                            <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/player_icons1.png" class="pushvid"  onclick="playAudio()" style="display:none;">
    </div>
</nav>
<section class="tribute_head"> 
    <div class="container">
        <div class="row">
            <div class="col-md-4 col-4">
                <?php
                
                if(!empty($profileimg))
                {
                ?>
                <img class="img-fluid w-100 img10 pro" alt="img" src="<?php echo get_site_url(); ?>/wp-content/uploads/<?php echo $profileimg;  ?>">
                <?php
                }
                ?>
            </div>
            <div class="col-md-8 col-8">
                <p>In loving memory of...</p>
                <h1><?php echo $fname ?> <?php echo $lname ?></h1>
                <ul class="nav nav-tabs d-none d-md-flex">
                  <li class="nav-item">
                    <a class="nav-link active" data-toggle="tab" href="#home">ABOUT</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" data-toggle="tab" href="#menu1">NOTICES</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" data-toggle="tab" href="#menu2">GALLERY</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" data-toggle="tab" href="#menu3">TRIBUTES</a>
                  </li>
                </ul>
            </div>
        </div>
    </div>
</section>
<style>
    .hovload {
    background: #e9e9e9;
    opacity: 0.5;
}
</style>
<section class="tribute_main">
      
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-12 d-md-none d-block">
              <div class="tribute_ul_new">
                <ul class="nav nav-tabs">
                  <li class="nav-item">
                    <a class="nav-link active" data-toggle="tab" href="#home1">ABOUT</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" data-toggle="tab" href="#menu4">NOTICES</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" data-toggle="tab" href="#menu5">GALLERY</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" data-toggle="tab" href="#menu6">TRIBUTES</a>
                  </li>
                </ul>
              </div>
                <div class="tab-content">
                  <div class="tab-pane tab-pane_class active" id="home1">
                      <div class="tribute_box">
                           <?php
                            if(($_SESSION['id'] == $id))
                            {
                                if( $second_memorial_text == "")
                                {
                            ?>
                             <h3 class="memordesc">“<?php echo $first_memorial_text ?> <?php echo $uname; ?>   last forever in our hearts”</h3>
                            <?php
                                }else
                                {
                                    ?>
                                     <h3 class="memordesc">“<?php echo $first_memorial_text ?> <?php echo $uname; ?>  <?php echo $second_memorial_text ?>”</h3>
                                    <?php
                                }
                                ?>
                       
                         <button class="edit_class memorialtext" onclick="memorialtext(<?php echo $id; ?>)"><i class="fa fa-pencil" aria-hidden="true"></i>Edit</span></button>
                         <div class="memorialdescri" style="display:none;">
                             
                                <form method="post" id="memorial">
                                    <input type="hidden" name="memorialid" value="<?php echo $id ?>">
                                    <input type="hidden" name="memouser" value="<?php echo $uname; ?>">
                                     <div class="borderclass">
                             <div class="row">
                             <div class="col-sm-5"><textarea class="form-control" rows="8" name="firstmemorialdesc"><?php echo $first_memorial_text ?></textarea></div>
                             <div class="col-sm-2"><textarea class="form-control" rows="8" name="username" readonly><?php echo $uname; ?></textarea></div>
                             <?php
                               if( $second_memorial_text == "")
                                {
                            ?>
                              <div class="col-sm-5"><textarea class="form-control" rows="8" name="secondmemorialdesc"> last forever in our hearts</textarea></div>
                              <?php
                                }
                                else
                                {
                                ?>
                                <div class="col-sm-5"><textarea class="form-control" rows="8" name="secondmemorialdesc"><?php echo $second_memorial_text ?></textarea></div>  
                                 <?php
                                }
                                ?>
                               </div>
                               </div>
                            <input type="submit" name="memosave" class="red_btn memorialsave" value="Save">
                            </form>
                            
                            </div>
                        <?php
                            }
                            else
                            {
                            ?>
                             <h3>“<?php echo $first_memorial_text ?> <?php echo $fname; ?>  <?php echo $second_memorial_text ?>”</h3>
                            <?php
                            }
                            ?>
                        <!-- <button class="edit_class memorialtext" onclick="memorialtext(<?php echo $id; ?>)"><i class="fa fa-pencil" aria-hidden="true"></i>Edit</span>-->
                      </div>
                      <div class="tribute_box">
                        <ul class="tri_list_box">
                          <?php
                          $datefull= $fulldeathdate;
                          
                         
                        $date1=date_create("2013-03-15");
                        $date2=date_create("2013-12-12");
                        $diff=date_diff($date1,$date2);
                        
                         $dateOfBirth = $bir6;
                    $today = $bir5;
                    $diff = date_diff(date_create($dateOfBirth), date_create($today));
                   $age=$diff->format('%y');
                        ?> 
                          
                        
                          <li><?php echo $age; ?> Years Old</li>
                          <?php 
                          $datefull= $fulldeathdate;
                          $date=date_create($datefull);
                          $bir= date_format($date,"M d, Y");
                          ?>
                          <?php 
                          $datefull1= $fulldeathdate;
                          $date1=date_create($datefull1);
                          $bir1= date_format($date1,"M d, Y");
                          ?>
                          <li>Born on <?php echo $bir; ?>  in <?php echo $birthplace ?>, <?php echo $birthcountry; ?></li>
                          <li>Passed away on <?php echo $bir1; ?> in <?php echo $deathplace ?>, <?php echo $deathcountry; ?></li>
                        </ul>
                         <?php
                            if(($_SESSION['id'] == $id))
                            {
                            ?>
                        <a class="born"><span class="edit_class"><i class="fa fa-pencil" aria-hidden="true"></i>Edit</span></a>
                        <?php
                            }
                            ?>
                      </div>
                      <div class="tribute_box">
                          <div class="abutsec">
                               <?php echo $about_description; ?>
                              </div>
                              <?php
                            if(($_SESSION['id'] !=""))
                            {
                            ?>
                            <button class="edit_class abt" onclick="get_msg(<?php echo $id; ?>)"><i class="fa fa-pencil" aria-hidden="true"></i>Edit</button>
                            <?php }?>
                              <div class="abtdescription" style="display:none;">
                                  <form method="post" id="foot1">
                                      <input type="hidden" name="abtid" value="<?php echo $id ?>">
                             <textarea class="form-control" rows="8" placeholder="Add your tribute text here" name="dsec"><?php $about_description; ?></textarea>
                            <input type="submit" name="subabt" class="red_btn saveabt" value="Save">
                            </form>
                            </div>
                      </div>
                      <a href="#menu6" data-toggle="tab" class="add_story sto">Add a Tribute</a>
                       <audio controls autoplay loop id="myAudio">
            <source src="<?php echo $songname; ?>" type="audio/ogg">
                                  
       </audio>
                  </div>
                  <div class="tab-pane tab-pane_class fade tab_notice" id="menu4">
                    <div class="notice_main">
                      <div class="form-group">
                        <label for="txt1">Funeral Notice Title</label>
                        <input type="text" class="form-control" id="txt1" placeholder="ie Details for Todd Msekema’s Funeral" value="Details for <?php echo $fname ?> <?php echo $lname ?>" disabled>
                      </div>
                      <div class="form-group">
                        <label for="txt1">Location and Date of Funeral Service</label>
                        <input type="text" class="form-control" id="txt1" placeholder="25 May 2018, Sixtine Chapel" value="<?php echo $location ?>, <?php echo $town ?>, <?php echo $fdate ?>" disabled>
                      </div>
                      <div class="form-group">
                        <label for="txt1">Funeral Date</label>
                        <input type="text" class="form-control" id="txt1" placeholder="25 May 2018" value="<?php echo $fdate ?>" disabled>
                      </div>
                      <div class="form-group">
                        <label for="txt1">Address of Funeral Location</label>
                        <input type="text" class="form-control" id="txt1" placeholder="828 Union Street, Seattle, Washington" value="<?php echo $location ?>" disabled>
                      </div>
                      <div class="form-group">
                        <label for="txt1">Time of Funeral:</label>
                        <input type="text" class="form-control" id="txt1" placeholder="2:00 PM" value="<?php echo $ftime ?>" disabled>
                      </div>
                      <div class="form-group">
                        <label for="txt1">Funeral committee venue (Place Building, Road)</label>
                        <input type="text" class="form-control" id="txt1" placeholder="2:00 PM" value="<?php echo $funeral_com_town ?> , <?php echo $funeral_com_location ?>, <?php echo $funeral_com_building ?>, <?php echo $funeral_com_mettingdate ?>" disabled>
                      </div>
                      <div class="form-group">
                        <label for="txt1">Funeral Committee Contact Person & Tel. Number</label>
                        <input type="text" class="form-control" id="txt1" placeholder="John Malkovic, 822-1125-2813" value="<?php echo $funeral_com_fname ?>, <?php echo $funeral_com_secondname ?>, <?php echo $funeral_com_telephone ?>" disabled>
                      </div>
                      <div class="map_class">
                       <!--  <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d50470.02846874147!2d-122.47261937941492!3d37.75776267828958!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x80859a6d00690021%3A0x4a501367f076adff!2sSan+Francisco%2C+CA%2C+USA!5e0!3m2!1sen!2sin!4v1539413862187" width="600" height="450" frameborder="0" style="border:0" allowfullscreen></iframe> -->
                      </div>
                      <ul class="list-inline notice_list">
                        <li class="list-inline-item">Notice: dawdaoiajdawda</li>
                        <li class="list-inline-item">Posted:  10 hours ago</li>
                        <li class="list-inline-item">Posted by:  admin123</li>
                      </ul>
                    </div>
                    <div class="notice_sub" style="display:none;">
                      <div class="info_new">
                        <h5>PERSONAL INFORMATION</h5>
                        <span>Notices Board For:</span>
                        <form method="post" enctype="multipart/form-data" id="ServiceRequest1">
                        <div class="row">
                          <div class="col-md-6">
                            <div class="form-group">
                                <input type="hidden" class="form-control" name="nid" value="<?php echo $id ?>">
                              <input type="text" class="form-control" id="txt1" placeholder="First Name" name="fname" value="<?php echo $fname ?>">
                            </div>
                          </div>
                          <div class="col-md-6">
                            <div class="form-group">
                              <input type="text" class="form-control" id="txt1" placeholder="Last Name" name="lname" value="<?php echo $lname ?>">
                            </div>
                          </div>
                        </div>
                          
                        <span>Birth Country and Death Country:</span>
                        <div class="row">
                          <div class="col-md-6">
                            <div class="form-group">
                              <input type="text" class="form-control" id="txt1" placeholder="Birth in Country" name="birthcountry" value="<?php echo $birthcountry ?>">
                            </div>
                          </div>
                          <div class="col-md-6">
                            <div class="form-group">
                              <input type="text" class="form-control" id="txt1" placeholder="Death in Country" name="deathcountry" value="<?php echo $deathcountry ?>">
                            </div>
                          </div>
                        </div>
                        <span>Date of Birth:</span>
                        <div class="row">
                          <div class="col-md-3">
                            <div class="form-group">
                              <!--<input type="text" class="form-control" id="days" placeholder="Date" name="bdate" value="<?php echo $day ?>" >-->
                              <select  class="form-control" name="bdate" id="days1">
                                  <option value="<?php echo $day ?>" selected><?php echo $day ?></option>
                              </select>
                            </div>
                          </div>
                          <div class="col-md-3">
                            <div class="form-group">
                             <!-- <input type="text" class="form-control" id="months" placeholder="Month" name="bmonth" value="<?php echo $month ?>">-->
                                <select class="form-control" id="monts1" name="bmonth">
                                  <option value="<?php echo $year ?>" selected><?php echo $year ?></option>
                              </select>
                              
                            </div>
                          </div>
                          <div class="col-md-3">
                            <div class="form-group">
                                  <select class="form-control" id="years1" name="byear">
                                  <option value="<?php echo $year ?>" selected><?php echo $year ?></option>
                              </select>
                             <!-- <input type="text" class="form-control" id="txt1" placeholder="Year" name="byear" value="<?php echo $year ?>">-->
                            </div>
                          </div>
                          <div class="col-md-3">
                            <div class="form-group">
                              <input type="text" class="form-control" id="txt1" placeholder="Place" name="bplace" value="<?php echo $birthplace ?>">
                            </div>
                          </div>
                        </div>
                      
                        <span>Date of Death:</span>
                        <div class="row">
                          <div class="col-md-3">
                            <div class="form-group">
                             <!-- <input type="text" class="form-control" id="dathdate" placeholder="Date" name="ddate" value="<?php echo $day1 ?>">-->
                               <select class="form-control" id="dathdate" name="ddate">
                                  <option value="<?php echo $day1 ?>" selected><?php echo $day1 ?></option>
                              </select>
                              
                            </div>
                          </div>
                          <div class="col-md-3">
                            <div class="form-group">
                              <!--<input type="text" class="form-control" id="dathmonth" placeholder="Month" name="dmonth" value="<?php echo $month1 ?>">-->
                              <select class="form-control" id="dathmonth" name="dmonth">
                                  <option value="<?php echo $month1 ?>" selected><?php echo $month1 ?></option>
                              </select>
                            </div>
                          </div>
                          <div class="col-md-3">
                            <div class="form-group">
                                  <select class="form-control" id="deathyear" name="dyear">
                                  <option value="<?php echo $year1 ?>" selected><?php echo $year1 ?></option>
                              </select>
                              <!--<input type="text" class="form-control" id="deathyear" placeholder="Year" name="dyear" value="<?php echo $year1 ?>">-->
                            </div>
                          </div>
                          <div class="col-md-3">
                            <div class="form-group">
                              <input type="text" class="form-control" id="txt1" placeholder="Place" name="dplace" value="<?php echo $deathplace ?>">
                            </div>
                          </div>
                        </div>
                        
                      </div>
                      <div class="info_new">
                        <h5>FUNERAL SERVICE DETAILS</h5>
                        <span>Church/Mosque/Temple:</span>
                        <div class="row">
                          <div class="col-md-3">
                            <div class="form-group">
                              <input type="text" class="form-control" id="txt1" placeholder="Location" name="flocation" value="<?php echo $location ?>">
                            </div>
                          </div>
                          <div class="col-md-3">
                            <div class="form-group">
                              <input type="text" class="form-control" id="txt1" placeholder="Town" name="ftown" value="<?php echo $town ?>">
                            </div>
                          </div>
                          <div class="col-md-3">
                            <div class="form-group">
                              <input type="text" class="form-control" id="txt1" placeholder="Date" name="fdate" value="<?php echo $fdate ?>">
                            </div>
                          </div>
                          <div class="col-md-3">
                            <div class="form-group">
                              <input type="text" class="form-control timepicker" id="txt1" placeholder="Time" name="ftime" value="<?php echo $ftime ?>">
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="info_new">
                        <h5>BURIAL DETAILS</h5>
                        <span>Location:</span>
                        <div class="row">
                          <div class="col-md-3">
                            <div class="form-group">
                            <input type="text" class="form-control" id="txt1" placeholder="Country" name="fcountry" value="<?php echo $burial_country ?>">
                        <!--      <select class="form-control" id="sel1" name="fcountry">
                            
                                <option value="0">County</option>
                                 <option value="0" <?php// if ($burial_country == '0') echo 'selected="selected"'; ?> >County</option>
                                  <option value="1" <?php //if ($burial_country == '1') echo 'selected="selected"'; ?> >1</option>
                                   <option value="2" <?php //if ($burial_country == '2') echo 'selected="selected"'; ?> >2</option>
                                    <option value="3" <?php// if ($burial_country == '3') echo 'selected="selected"'; ?> >3</option>
                               
                              </select>-->
                            </div>
                          </div>
                          <div class="col-md-3">
                            <div class="form-group">
                              <input type="text" class="form-control" id="txt1" placeholder="Town/Centre" name="butown" value="<?php echo $burial_town ?>">
                            </div>
                          </div>
                          <div class="col-md-3">
                            <div class="form-group">
                              <input type="text" class="form-control" id="txt1" placeholder="Date" name="budate" value="<?php echo $burial_date ?>">
                            </div>
                          </div>
                          <div class="col-md-3">
                            <div class="form-group">
                              <input type="text" class="form-control timepicker" id="txt1" placeholder="Time" name="butime" value="<?php echo $burial_time ?>">
                            </div>
                          </div>
                        </div>
                        <div class="row">
                          <div class="col-md-6">
                            <div class="form-group">
                              <input type="text" class="form-control" id="txt1" placeholder="Area/Location" name="buarea" value="<?php echo $burial_location ?>">
                            </div>
                          </div>
                          <div class="col-md-6">
                            <div class="form-group">
                              <input type="text" class="form-control" id="txt1" placeholder="If Public Cemetery" name="cemetery" value="<?php echo $burial_cemetery ?>">
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="info_new">
                        <h5>CREMATION DETAILS</h5>
                        <div class="row">
                          <div class="col-md-5">
                            <div class="form-group">
                              <input type="text" class="form-control" id="txt1" placeholder="Town" name="cretown" value="<?php echo $crematorium_town ?>">
                            </div>
                          </div>
                          <div class="col-md-5">
                            <div class="form-group">
                              <input type="text" class="form-control" id="txt1" placeholder="Crematorium" name="Crematorium" value="<?php echo $crematorium ?>">
                            </div>
                          </div>
                          <div class="col-md-2">
                            <div class="form-group">
                              <input type="text" class="form-control timepicker" id="txt1" placeholder="Time" name="ctime" value="<?php echo $crematorium_time ?>">
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="info_new">
                        <h5>Funeral Committee Contact Person</h5>
                        <div class="row">
                          <div class="col-md-5">
                            <div class="form-group">
                              <input type="text" class="form-control" id="txt1" placeholder="1st Name" name="fcname" value="<?php echo $funeral_com_fname ?>">
                            </div>
                          </div>
                          <div class="col-md-5">
                            <div class="form-group">
                              <input type="text" class="form-control" id="txt1" placeholder="2nd Name" name="fcsecname" value="<?php echo $funeral_com_secondname ?>">
                            </div>
                          </div>
                          <div class="col-md-2">
                            <div class="form-group">
                              <input type="text" class="form-control" id="txt1" placeholder="Tel No" name="ftelno" value="<?php echo $funeral_com_telephone ?>">
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="info_new">
                        <h5>Funeral Committee Contact Person</h5>
                        <div class="row">
                          <div class="col-md-3">
                            <div class="form-group">
                              <input type="text" class="form-control" id="txt1" placeholder="Town" name="fctown" value="<?php echo $funeral_com_town ?>">
                            </div>
                          </div>
                          <div class="col-md-3">
                            <div class="form-group">
                              <input type="text" class="form-control" id="txt1" placeholder="Location" name="fclocation" value="<?php echo $funeral_com_location ?>">
                            </div>
                          </div>
                          <div class="col-md-3">
                            <div class="form-group">
                              <input type="text" class="form-control" id="txt1" placeholder="Building" name="fbuild" value="<?php echo $funeral_com_building ?>">
                            </div>
                          </div>
                          <div class="col-md-3">
                            <div class="form-group">
                              <input type="text" class="form-control" id="txt1" placeholder="Meeting Dates" name="fmettingdate" value="<?php echo $funeral_com_mettingdate ?>">
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="info_new">
                        <h5>Burial/Funeral/Interment Location Google Map</h5>
                        <div class="row">
                          <div class="col-md-12">
                            <div class="form-group">
                              <input type="text" class="form-control" id="txt1" placeholder="Add Location" name="gloc" value="<?php echo $google_map_location ?>">
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="info_new">
                        <h5>POST FUNERAL NOTICES</h5>
                        <div class="row">
                          <div class="col-md-5">
                            <div class="form-group">
                              <input type="text" class="form-control" id="txt1" placeholder="Notice/Subject" name="notice" value="<?php echo $notice ?>">
                            </div>
                          </div>
                          <div class="col-md-5">
                            <div class="form-group">
                              <input type="text" class="form-control" id="txt1" placeholder="When Notice Was Posted" name="postn" value="<?php echo $notice_posted ?>">
                            </div>
                          </div>
                          <div class="col-md-2">
                            <div class="form-group">
                              <input type="text" class="form-control" id="txt1" placeholder="Posted By" name="postby" value="<?php echo $notice_posted_date ?>">
                            </div>
                          </div>
                        </div>
                      </div>
                      
                       <div class="info_new">
                        <h5>Edit Profile Image</h5>
                        <div class="row">
                          <div class="col-md-5">
                            <div class="form-group">
                                 <input type="file" name="proimg" accept="image/*" id="videoUploadFile" value="<?php echo $profileimg; ?>" onchange="preview_image1(event)">
                              <input type="hidden" name="old_pic" value="<?php echo $profileimg;?>">
                            </div>
                          </div>
                           <div class="col-md-5">
                            <div class="form-group">
                                         <?php
                            
                            if(!empty($profileimg))
                            {
                            ?>
                            <img class="img-fluid" alt="img" src="<?php echo get_site_url(); ?>/wp-content/uploads/<?php echo $profileimg;  ?>" id="profilepre">
                            <?php
                            }
                            ?>
                            </div>
                          </div>
                          
                        </div>
                      </div>
                       <?php
                          if(($_SESSION['id'] == $id))
                           {
                          ?>
                       <div id="map2"></div>
                       <?php
                           }
                           ?>
                      <?php
                        if(($_SESSION['id'] == $id))
                        {
                        ?>
                      <div class="tribute_list1">
                        <a href="" class="add_story ylw_btn">Edit</a>
                        <!--<a href="" class="add_story">POST NOTICES</a>-->
                        <input type="submit" name="subbtn" class="add_story" value="Save">
                      </div>
                      <?php
                        }
                       
                            ?>
                      </form>
                    </div>
                    <!-- <div class="tribute_list1">
                      <a href="" class="add_story ylw_btn">Share</a>
                      <a href="" class="add_story">POST NOTICES</a>
                    </div> -->
                  </div>
                  <div class="tab-pane tab-pane_class gal_img fade" id="menu5">
                    <!-- <div class="gal_main">
                      <div class="row">
                        <div class="col-md-4">
                          <h4>Photos</h4>
                          <img class="img-fluid" alt="img" src="img/img22.png">
                          <img class="img-fluid" alt="img" src="img/img22.png">
                          <div class="add_gal">
                            <span class="red_btn"><i class="fa fa-plus-circle" aria-hidden="true"></i>Add Photos</span>
                            <input id="selectfile" type="file" name=""/>
                          </div>
                        </div>
                        <div class="col-md-4">
                          <h4>Videos</h4>
                          <img class="img-fluid" alt="img" src="img/img22.png">
                          <img class="img-fluid" alt="img" src="img/img22.png">
                          <div class="add_gal">
                            <span class="red_btn"><i class="fa fa-plus-circle" aria-hidden="true"></i>Add Videos</span>
                            <input id="selectfile" type="file" name=""/>
                          </div>
                        </div>
                        <div class="col-md-4">
                          <h4>Audio</h4>
                          <img class="img-fluid" alt="img" src="img/img22.png">
                          <img class="img-fluid" alt="img" src="img/img22.png">
                          <div class="add_gal">
                            <span class="red_btn"><i class="fa fa-plus-circle" aria-hidden="true"></i>Add Audio</span>
                            <input id="selectfile" type="file" name=""/>
                          </div>
                        </div>
                      </div>
                    </div> -->
                    <div class="gal_sub">
                      <ul class="nav nav-tabs">
                        <li class="nav-item">
                          <a class="nav-link active" data-toggle="tab" href="#photoTab1">Photos</a>
                        </li>
                        <li class="nav-item">
                          <a class="nav-link" data-toggle="tab" href="#videoTab1">VIDEOS</a>
                        </li>
                        <li class="nav-item">
                          <a class="nav-link" data-toggle="tab" href="#audioTab1">AUDIO</a>
                        </li>
                      </ul>
                      <!-- Tab panes -->
                      <div class="tab-content">
                        <div class="tab-pane active" id="photoTab1">
                          <div class="gal_box">
                            <div class="row photoapp">
                                <?php
                                 $msg1 = $wpdb->get_results("SELECT * FROM `wp_photo` where userid = $id");
                                    foreach($msg1 as $val1)
                                    {
                                      $pho=$val1->media;
                                        $ext = pathinfo($pho, PATHINFO_EXTENSION);
                                        if($ext == 'PNG' || $ext == 'JPG' || $ext == "gif" || $ext == 'png' || $ext == 'jpg')
                                        {
                                    ?>
                                     <div class="col-md-3">
                                           <?php
                                            if(($_SESSION['id'] == $id))
                                            {
                                            ?>
                                         <img src="https://cdn4.iconfinder.com/data/icons/linecon/512/delete-512.png" class="trash1" onclick="mediadelt(<?php echo $val1->pic_id; ?>)">
                                         <?php
                                            }
                                            ?>
                                   <img class="img-fluid displayimg" alt="img" src="<?php echo get_site_url(); ?>/wp-content/uploads/<?php echo $val1->media;  ?>"/>
                                    </div>
                                   <?php
                                    }
                                    }
                                    ?>
                                <!--<img class="img-fluid" alt="img" src="<?php echo get_stylesheet_directory_uri(); ?>/img/img23.jpg">-->
                            
                              
                              <div class="col-md-3">
                                 <img class="img-fluid" id="output_image1"/>
                              </div>
                            </div>
                          </div>
                        </div>
                        <div class="tab-pane fade" id="videoTab1">
                            <div class="gal_box">
                            <div class="row">
                               <?php
                                 $msg1 = $wpdb->get_results("SELECT * FROM `wp_photo` where userid = $id");
                                    foreach($msg1 as $val1)
                                    {
                                        $pho=$val1->media;
                                        $ext = pathinfo($pho, PATHINFO_EXTENSION);
                                        if($ext == 'mp4' || $ext == 'mov')
                                        {
                                    ?>
                                    <div class="col-md-3">
                                         
                                 <video width="150px" height="150px" controls>
                                  <source src="<?php echo get_site_url(); ?>/wp-content/uploads/<?php echo $val1->media;  ?>" type="video/mp4">
                                 
                                </video>
                                  <?php
                            if(($_SESSION['id'] == $id))
                            {
                            ?>
                                <img src="https://cdn4.iconfinder.com/data/icons/linecon/512/delete-512.png" class="trash2" onclick="mediadelt(<?php echo $val1->pic_id; ?>)">
                          <?php
                                    }
                                    ?>
                               <!--   <iframe src="<?php echo get_site_url(); ?>/wp-content/uploads/<?php echo $val1->media;  ?>" width="150px" height="150px"></iframe>-->
                              </div>
                              <?php
                                        }
                                    }
                                    ?>
                            <div class="col-md-3">
                               <video width="150px" height="150px"   controls class="videota">
                              <source src="" id="video_here1">
                                Your browser does not support HTML5 video.
                            </video>
                                </div>
                            </div>
                          </div>
                        </div>
                        <div class="tab-pane fade" id="audioTab1">
                          <div class="gal_box">
                            <div class="row">
                                 <?php
                                 $msg1 = $wpdb->get_results("SELECT * FROM `wp_photo` where userid = $id");
                                    foreach($msg1 as $val1)
                                    {
                                        $pho=$val1->media;
                                        $ext = pathinfo($pho, PATHINFO_EXTENSION);
                                        if($ext == 'mp3' || $ext == 'mov' || $ext == 'wav' || $ext == 'ogg' || $ext == 'wma')
                                        {
                                    ?>
                              <div class="col-md-12 col-12">
                                  
                                    <audio width="150px" height="150px" controls>
                                  <source src="<?php echo get_site_url(); ?>/wp-content/uploads/<?php echo $val1->media;  ?>" type="audio/ogg">
                                 
                                </audio>
                                  <?php
                            if(($_SESSION['id'] == $id))
                            {
                            ?>
                               <img src="https://cdn4.iconfinder.com/data/icons/linecon/512/delete-512.png" class="trash3" onclick="mediadelt(<?php echo $val1->pic_id; ?>)">
                              <?php
                            }
                            ?>
                              </div>
                              <?php
                                        }
                                    }
                                    ?>
                            <!--   <div class="col-md-3 col-4">
                                 <audio controls width="150px" height="150px" class="audtab" style="display:none">
                                  <source src="" type="audio/ogg" id="audio_here1">
                                  Your browser does not support the audio tag.
                                </audio>
                              </div>
                               -->
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="space20"></div>
                      <?php
                        if(($_SESSION['id'] == $id))
                        {
                        ?>
                       <form method="post" enctype="multipart/form-data" id="imgfrm1">
                      <div class="row">
                        <div class="col-md-6"><img class="loader" src="<?php echo get_stylesheet_directory_uri(); ?>/img/loader.gif" style="height: 167px; display:none;"></div>
                        
                        <div class="col-md-4">
                           <div class="add_gal">
                            <span class="red_btn"><i class="fa fa-plus-circle" aria-hidden="true"></i>Add Media</span>
                            <input type="hidden" name="userid" value="<?php echo $id ?>">
                            <input id="selectfile" class="pho" type="file" accept="image/*" onchange="preview_image(event)" name="fileimg">
                              <!--<input id="selectfile1" class="vide" type="file" accept="video/*" name="fileimg1" style="display:none">
                               <input id="selectfile2" class="audi" type="file" accept="audio/*" name="fileimg2" style="display:none">-->
                          </div>
                          

                        </div>
                        <div class="col-md-2">
                            <input type="submit" class="red_btn tribute_box-btn tribute_box-btn1" name='submitImage' value="Save"/>
                         <!--<a href="" class="red_btn tribute_box-btn tribute_box-btn1">Upload</a>-->
                        </div>
                        
                      </div> 
                      </form>
                      <?php
                        }
                        ?>
                    </div>
                  </div>
                  <div class="tab-pane tab-pane_class fade" id="menu6">
                      <div class="appnot"></div>
                     <div class="main_tri">
                       <?php
                       
                   $msg1 = $wpdb->get_results("SELECT * FROM `wp_trubutenote` join wp_tribute where wp_tribute.id=wp_trubutenote.`userid` and `userid` = $id order by trid desc");
                  foreach($msg1 as $val1)
                            {
                            $tributetype= $val1->tributeaction;
                            $tributty=$val1->tribute_type;
                            $trifname=$val1->trnfname;
                            $trilname=$val1->trlname;
                            $status=$val1->Approval;
                            $date=$val1->created_on;
                         $crd=date('M d,y H:i:s', strtotime($val1->created_on));
                               if( $tributetype == lightcandle)
                               {
                                ?>
                       
                      <div class="featured_box">
                          <?php
                            if(($_SESSION['id'] == $id))
                            {
                            ?>
                           <img src="https://cdn4.iconfinder.com/data/icons/linecon/512/delete-512.png" class="trash" onclick="image(<?php echo  $val1->trid; ?>)">
                           <?php
                            }
                            ?>
                          <div class="media">
                            <img class="" src="<?php echo get_stylesheet_directory_uri(); ?>/img/img12.png" alt="mage">
                            <div class="media-body">
                              <h5><?php echo  $trifname; ?> <?php echo $trilname; ?><i>lit a Candle</i></h5>
                              <h6><?php echo $crd; ?></h6>
                              <img class="img-fluid img13" alt="img" src="<?php echo get_stylesheet_directory_uri(); ?>/img/img13.png">
                            </div>
                          </div>
                      </div>
                     
                      <?php
                               }
                               if( $tributetype == leave_note && $status == 1)
                               {
                               ?>
                      <div class="featured_box">
                           <img src="https://cdn4.iconfinder.com/data/icons/linecon/512/delete-512.png" class="trash" onclick="image(<?php echo  $val1->trid; ?>)">
                          <div class="media">
                            <img class="" src="<?php echo get_stylesheet_directory_uri(); ?>/img/img12.png" alt="mage">
                            <div class="media-body">
                                
                            
                              <h5><?php echo  $trifname; ?> <?php echo $trilname; ?> <i>left a Note</i></h5>
                              <h6><?php echo $crd; ?></h6>
                                <div class="dropdown">
                                    <span class="span_share dropbtn"><i class="fa fa-share-alt" aria-hidden="true"></i>Share</span>

                                  <div class="dropdown-content">
                                    <!-- <a href="<?php echo $webadd; ?>" data-title="left a Note" data-desc="<?php echo  $val1->note; ?>" class="btnShare">Facebook</a>-->
                                    <a href="http://www.facebook.com/sharer.php?s=100&amp;p[title]=left a Note&amp;p[summary]=<?php echo  $val1->note; ?>&amp;p[url]=<?php echo $webadd; ?>&amp;&p[images][0]=<?php echo $image;?>'" target="blank">Facebook</a> 
                                   <a href="https://twitter.com/share?url=<?php echo $webadd;  ?>&amp;text=<?php echo $about_description;  ?>&amp;hashtags=<?php echo  $val1->note; ?>" target="blank">
                                       Twitter</a>
                                  <a href="https://plus.google.com/share?url=<?php echo $webadd;  ?>" data-desc="<?php echo  $val1->note; ?>" target="blank">Google+</a>
                                    <a href="https://www.linkedin.com/shareArticle?mini=true&url=<?php echo $webadd;  ?>&title=left a Note&summary=<?php echo $about_description;  ?>&source=<?php echo  $val1->note; ?>" target="blank">LinkedIn</a>
                                    <a href="https://pinterest.com/pin/create/button/?url=<?php echo $webadd;  ?>&media=gh&description=<?php echo  $val1->note; ?>" target="blank">Pinterest</a>
                                   <!-- <a href="mailto:pujadivedi@dhrup.com?&subject=left a Note&body=<?php echo  $val1->note; ?>">Send Email</a>-->
                                  </div>
                                </div>
                              
                              <p><?php echo  $val1->note; ?></p>
                            </div>
                          </div>
                      </div>
                           <?php
                               }
                               if( $tributetype == tribute && $status == 1 )
                               {
                             ?>
                      
                      <div class="featured_box">
                          <?php
                            if(($_SESSION['id'] == $id))
                            {
                            ?>
                          <img src="https://cdn4.iconfinder.com/data/icons/linecon/512/delete-512.png" class="trash" onclick="image(<?php echo  $val1->trid; ?>)">
                          <?php
                            }
                            ?>
                          <div class="media">
                             
                            <img class="" src="<?php echo get_stylesheet_directory_uri(); ?>/img/img12.png" alt="mage">
                           
                            <div class="media-body">
                              <h5><?php echo  $trifname; ?> <?php echo $trilname; ?><i>left a tribute</i></h5>
                              <h6><?php echo $crd; ?></h6>
                               <?php
                              if($tributty == flower)
                              {
                              ?>
                             <p><?php echo  $val1->tributenote_first; ?></p>
                            <?php
                              }
                              if($tributty == candle)
                               {
                               ?>
                                <p><?php echo  $val1->note; ?></p>
                                <?php
                               }
                                if($tributty == feather)
                               {
                               ?>
                                <p><?php echo  $val1->tributenote2_second; ?></p>
                               <?php
                               }
                               ?>
                              
                             <?php
                              if($tributty == flower)
                              {
                              ?>
                            <img class="img-fluid img14" src="<?php echo get_stylesheet_directory_uri(); ?>/img/flower1.png" alt="mage">
                            <?php
                              }
                              if($tributty == candle)
                               {
                               ?>
                                <img class="img-fluid img14" src="<?php echo get_stylesheet_directory_uri(); ?>/img/christmas-candle.png" alt="mage">
                                <?php
                               }
                                if($tributty == feather)
                               {
                               ?>
                                <img class="img-fluid img14" src="<?php echo get_stylesheet_directory_uri(); ?>/img/feather1.png" alt="mage">
                               <?php
                               }
                               ?>
                            </div>
                          </div>
                      </div>
                      <?php
                               }
                            }
                               ?>
                                <div class="canlig"></div>
                      <ul class="list-inline tribute_list">
                       <?php
                        if(($_SESSION['id']!=''))
                        {
                        ?>
                         
                           <li class="list-inline-item"><a class="red_btn lea_tri">Leave a Tribute</a></li>
                           
                           <li class="list-inline-item"><a class="red_btn" onclick="light(<?php echo $id ?>,'<?php echo $fname; ?>','<?php echo $lname; ?>','lightcandle')">Light a Candle</a></li>
                           <li class="list-inline-item"><a class="red_btn lea_not">Leave a Note</a></li>
                           <?php
                        }
                        else if(($_SESSION['email_id']!=''))
                        {
                            
                            $em=$_SESSION['email_id'];
                        $pro5 = $wpdb->get_results("SELECT * FROM `wp_tributeuser` where email_id = '$em'");
                            $idtr=($pro5[0]->tid!='')?$pro5[0]->tid:"";
                             $tfname=($pro5[0]->fname!='')?$pro5[0]->fname:"";
                             $tlname=($pro5[0]->lname!='')?$pro5[0]->lname:"";
                              $block=($pro5[0]->block!='')?$pro5[0]->block:"";
                             if($block == unblock)
                             {
                        ?>
                        
                         <li class="list-inline-item"><a class="red_btn lea_tri">Leave a Tribute</a></li>
                           
                           <li class="list-inline-item"><a class="red_btn" onclick="light(<?php echo $mem_id;  ?>,'<?php echo $tfname ?>','<?php echo $tlname ?>','lightcandle')">Light a Candle</a></li>
                           <li class="list-inline-item"><a class="red_btn lea_not">Leave a Note</a></li>
                           
                           <?php
                           }
                         }
                           else
                           {
                               ?>
                               
                                 <li class="list-inline-item"><a href="<?php echo get_site_url(); ?>/register/?id=<?php echo  $mem_id;  ?>" class="red_btn lea_tri">Leave a Tribute</a></li>
                           
                           <li class="list-inline-item"><a class="red_btn" href="<?php echo get_site_url(); ?>/register/?id=<?php echo  $mem_id;  ?>">Light a Candle</a></li>
                           <li class="list-inline-item"><a href="<?php echo get_site_url(); ?>/register/?id=<?php echo  $mem_id;  ?>" class="red_btn lea_not">Leave a Note</a></li>
                               <?php
                               
                           }
                           ?>
                      </ul>
                    </div>
                    <div class="note" style="display:none;">
                         <form method="post" class="notedata">
                            <input type="hidden" name="notid" value="<?php echo $id; ?>">
                            <input type="hidden" name="leavenote" value="leave_note">
                            <?php
                            if(($_SESSION['id'] != " "))
                            {
                            ?>
                            <input type="hidden" name="fname" value="<?php echo $fname; ?>">
                             <input type="hidden" name="lname" value="<?php echo $lname; ?>">
                              <?php
                            }
                            else if(($_SESSION['email_id']!=''))
                            {
                                  $em=$_SESSION['email_id'];
                        $pro5 = $wpdb->get_results("SELECT * FROM `wp_tributeuser` where email_id = '$em'");
                            $idtr=($pro5[0]->tid!='')?$pro5[0]->tid:"";
                             $tfname=($pro5[0]->fname!='')?$pro5[0]->fname:"";
                             $tlname=($pro5[0]->lname!='')?$pro5[0]->lname:"";
                             
                            ?>
                             <input type="hidden" name="fname" value="<?php echo $tfname ?>">
                             <input type="hidden" name="lname" value="<?php echo $tlname ?>">
                            <?php
                            }
                            ?>
                        <textarea class="form-control notxt" rows="8" placeholder="Add your tribute text here" name="addnote"></textarea>
                        <button type="submit" name="notesub" class="red_btn lvnot">Leave a Note</button>
                         </form>
                    </div>
                     <div class="leave_tribute">
                    <span class="tri_span"><img class="img-fluid" alt="img" src="<?php echo get_stylesheet_directory_uri(); ?>/img/pencil.png">Leave a Tribute</span>
                        <ul class="nav nav-tabs" role="tablist">
                          <li class="nav-item">
                            <a class="nav-link active" data-toggle="tab" href="#tab4" onclick="tri('tribute','candle')"><img class="img-fluid active_img" alt="img" src="<?php echo get_stylesheet_directory_uri(); ?>/img/christmas-candle.png">
                            <img class="img-fluid default_img" alt="img" src="<?php echo get_stylesheet_directory_uri(); ?>/img/christmas-candle1.png">
                            </a>
                          </li>
                          <li class="nav-item">
                            <a class="nav-link" data-toggle="tab" href="#tab5" onclick="tri('tribute','flower')"><img class="img-fluid default_img" alt="img" src="<?php echo get_stylesheet_directory_uri(); ?>/img/flower.png">
                            <img class="img-fluid active_img" alt="img" src="<?php echo get_stylesheet_directory_uri(); ?>/img/flower1.png">
                            </a>
                          </li>
                          <li class="nav-item">
                            <a class="nav-link" data-toggle="tab" href="#tab6" onclick="tri('tribute','feather')"><img class="img-fluid default_img" alt="img" src="<?php echo get_stylesheet_directory_uri(); ?>/img/feather.png">
                            <img class="img-fluid active_img" alt="img" src="<?php echo get_stylesheet_directory_uri(); ?>/img/feather1.png">
                            </a>
                          </li>
                        </ul>
                        <form method="post">
                        <div class="tab-content">
                            <input type="hidden" name="tribure" value="tribute">
                            <input type="hidden" name="userid" value="<?php echo $id ?>">
                             <?php
                            if(($_SESSION['id'] == $id))
                            {
                            ?>
                            
                             <input type="hidden" name="fname" value="<?php echo $acountfname ?>">
                             <input type="hidden" name="lname" value="<?php echo $acountl ?>">
                             <?php
                            }
                            else if(($_SESSION['email_id']!=''))
                            {
                                  $em=$_SESSION['email_id'];
                        $pro5 = $wpdb->get_results("SELECT * FROM `wp_tributeuser` where email_id = '$em'");
                            $idtr=($pro5[0]->tid!='')?$pro5[0]->tid:"";
                             $tfname=($pro5[0]->fname!='')?$pro5[0]->fname:"";
                             $tlname=($pro5[0]->lname!='')?$pro5[0]->lname:"";
                             
                            ?>
                             <input type="hidden" name="fname" value="<?php echo $tfname ?>">
                             <input type="hidden" name="lname" value="<?php echo $tlname ?>">
                            <?php
                            }
                            ?>
                            <div class="result">
                                 <input type="hidden" name="tribure_type" value="candle">
                            </div>
                            <div id="tab4" class="tab-pane active">
                              <textarea class="form-control" rows="8" id="comment" placeholder="Add your tribute text here" name="note"></textarea>
                            </div>
                            <div id="tab5" class="tab-pane fade">
                              <textarea class="form-control" rows="8" id="comment" placeholder="Add your tribute text here" name="note1"></textarea>
                            </div>
                            <div id="tab6" class="tab-pane fade">
                              <textarea class="form-control" rows="8" id="comment" placeholder="Add your tribute text here" name="note2"></textarea>
                            </div>
                        </div>
                        <ul class="list-inline leave_ul">
                             <?php
                            if(($_SESSION['id'] == $id))
                            {
                            ?>
                            
                          <li class="list-inline-item">by <?php echo  $acountfname; ?> <?php echo $acountl; ?></li>
                          <?php
                            }
                            else if(($_SESSION['email_id']!=''))
                            {
                                  $em=$_SESSION['email_id'];
                        $pro5 = $wpdb->get_results("SELECT * FROM `wp_tributeuser` where email_id = '$em'");
                            $idtr=($pro5[0]->tid!='')?$pro5[0]->tid:"";
                             $tfname=($pro5[0]->fname!='')?$pro5[0]->fname:"";
                             $lfname=($pro5[0]->lname!='')?$pro5[0]->lname:"";
                            ?>
                             <li class="list-inline-item">by <?php echo $tfname; ?> <?php echo $lfname; ?></li>
                             
                            <?php
                            }
                            ?>
                          <li class="list-inline-item pull-right">
                            <input type="submit" name="subtribute" class="red_btn" value="Leave a Tribute">
                          </li>
                        </ul>
                         </form>
                     </div>
                  </div>
                </div>

            </div>
            <div class="col-md-4 col-12">
                <div class="space70"></div>
               <!-- <div class="tribute_box-left">-->
                   <!-- <div class="prehead_left">
                        <a>Background Music(play/push) </a>
                       <div class="space10"></div>-->
                           <!-- <audio controls autoplay loop id="myAudio" class="desktop_audio">
                          <source src="<?php echo $songname; ?>" type="audio/ogg">
                        
                        </audio>-->
                           <!--<img src="<?php echo get_stylesheet_directory_uri(); ?>/img/play.jpg" class="playvid" onclick="pauseAudio()" >
                            <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/push.png" class="pushvid"  onclick="playAudio()" style="display:none;">-->
                        
                   <!-- </div>-->
                <!--</div>-->
                <div class="space30 d-block d-md-none"></div>
                 <?php
                        if(($_SESSION['id'] == $id))
                        {
                        ?>
                <div class="tribute_box-left tribute_box-new">
                    <div class="prehead_left">
                        <a>Invite Family and Friends to this memorial:</a>
                        <a class="red_btn tribute_box-btn" data-toggle="modal" data-target="#myModal5"><span>+</span>Invite Now</a>
                      <!--  <a class="red_btn tribute_box-btn"><span>+</span>Invite Now</a>-->
                    </div>
                </div>
                <?php
                        }
                        ?>
                
                <div class="tribute_box-left">
                    <div class="prehead_left">
                        <a href="#">Share this page</a>
                        <ul class="list-inline">
                             <li class="list-inline-item"><a href="http://www.facebook.com/sharer.php?u=<?php echo $webaddress;  ?>" target="_blank">
       <i class="fa fa-facebook" aria-hidden="true"></i>
    </a></li>
                          <!--  <li class="list-inline-item"><a href=""><i class="fa fa-facebook" aria-hidden="true"></i></a></li>-->
                            <li class="list-inline-item"><a href="https://www.instagram.com/?hl=en"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
                            
                       
                            <li class="list-inline-item"><a href="https://twitter.com/share?url=<?php echo $webaddress;  ?>&amp;text=<?php echo $about_description;  ?>&amp;hashtags=<?php echo $about_description;  ?>" target="_blank">
        <i class="fa fa-twitter" aria-hidden="true"></i>
    </a></li>
                        </ul>
                    </div>
                </div>
                 <?php
                        if(($_SESSION['id'] == $id))
                        {
                        ?>
                <div class="tribute_box-left tribute_box-new1" style="display:none">
                    <div class="prehead_left">
                        <a href="" class="tribute_box-text">Sign up for Notifications</a>
                        <a href="<?php echo get_site_url(); ?>/login/" class="red_btn tribute_box-btn tribute_box-btn1">Sign Up</a>
                        <div class="clearfix"></div>
                    </div>
                </div>
                <?php
                        }
                        else
                        {
                        ?>
                        
                         <div class="tribute_box-left tribute_box-new1" >
                    <div class="prehead_left">
                        <a href="" class="tribute_box-text">Sign up for Notifications</a>
                        <a href="<?php echo get_site_url(); ?>/notification-signup/?id=<?php echo $mem_id; ?>" class="red_btn tribute_box-btn tribute_box-btn1">Sign Up</a>
                        <div class="clearfix"></div>
                    </div>
                </div>
                        <?php
                        }
                        ?>
                
                <div id="accordion">
                  <!--  <div class="card">
                    <div class="card-header">
                        <a class="card-link" data-toggle="collapse" href="#collapseOne">
                            Invite Family and Friends <span><i class="fa fa-plus" aria-hidden="true"></i></span>
                        </a>
                    </div>
                    <div id="collapseOne" class="collapse" data-parent="#accordion">
                          <div class="card-body">
                            Lorem ipsum..
                          </div>
                    </div>
                    </div>-->
                     <?php
                        if(($_SESSION['id'] == $id))
                        {
                        ?>
                    <div class="tribute_box-left tribute_box-new">
                      <div class="prehead_left">
                          <a href="" class="">Add Picture</a>
                          <div class="space10"></div>
                          <a href="#" class="red_btn tribute_box-btn picture_class"><span>+</span>Add Picture</a>
                          <!-- <div class="add-photo_new">
                            <a href="" class="red_btn tribute_box-btn"><span>+</span>Add Picture</a>
                            <input type="file" name="">
                          </div> -->
                      </div>
                    </div>
                    <?php
                        }
                        ?>
                    <?php
                        if(($_SESSION['id'] == $id))
                        {
                        ?>
                    <div class="card">
                        <div class="card-header">
                              <a class="collapsed card-link" data-toggle="collapse" href="#collapseThree">
                                  <?php
                                   $msg6 = $wpdb->get_results("SELECT count(*) as counts FROM `wp_Notification` join wp_tribute where wp_tribute.id=wp_Notification.`userid` and `userid`=$id order by `not_id` desc limit 3");
                  foreach($msg6 as $val6)
                            {
                                ?>
                                  
                                  
                                Your Notifications   (<?php echo $val6->counts; ?> New)<span><i class="fa fa-exclamation" aria-hidden="true"></i></span>
                                <?php
                            }
                            ?>
                              </a>
                        </div>
                        <div id="collapseThree" class="collapse" data-parent="#accordion">
                            <?php
                            
                            $msg5 = $wpdb->get_results("SELECT * FROM `wp_Notification` join wp_tribute where wp_tribute.id=wp_Notification.`userid` and `userid`=$id order by `not_id` desc limit 3");
                  foreach($msg5 as $val5)
                            {
                                ?>
                            <div class="card-body">
                              <?php echo $val5->notification;  ?>
                            </div>
                            <?php
                            }
                            ?>
                        </div>
                    </div>

                    <div class="card card1">
                        <div class="card-header">
                              <a class="collapsed card-link card-link1" data-toggle="collapse" href="#collapseThree1">
                                   <?php
                                   $msg6 = $wpdb->get_results("SELECT count(*) as counts FROM `wp_Notification` join wp_tribute where wp_tribute.id=wp_Notification.`userid` and `userid`=$id order by `not_id` desc limit 3");
                  foreach($msg6 as $val6)
                            {
                                ?>
                                <i class="red_clr"><?php echo $val6->counts; ?> New </i>  Important Notifiactions<span><i class="fa fa-exclamation" aria-hidden="true"></i></span>
                                  <?php
                            }
                            ?>
                              </a>
                        </div>
                        <div id="collapseThree1" class="collapse" data-parent="#accordion">
                             <?php
                            
                            $msg5 = $wpdb->get_results("SELECT * FROM `wp_Notification` join wp_tribute where wp_tribute.id=wp_Notification.`userid` and `userid`=$id order by `not_id` desc limit 3");
                  foreach($msg5 as $val5)
                            {
                                ?>
                            <div class="card-body">
                                 <?php echo $val5->notification;  ?>
                            </div>
                            <?php
                            }
                            
                            ?>
                        </div>
                    </div>
                    <?php
                        }
                        ?>
                    <div class="card">
                        <div class="card-header">
                              <a class="collapsed card-link" data-toggle="collapse" href="#collapseFour">
                                Page Activity<span><i class="fa fa-users" aria-hidden="true"></i></span>
                              </a>
                        </div>
                        <div id="collapseFour" class="collapse show" data-parent="#accordion">
                            <div class="card-body">
                                <ul class="list-unstyled list_page-activity">
                                     <?php
                       
                   $msg1 = $wpdb->get_results("SELECT * FROM `wp_trubutenote` join wp_tribute where wp_tribute.id=wp_trubutenote.`userid` and `userid` = $id order by trid desc limit 10");
                  foreach($msg1 as $val1)
                            {
                            $tributetype= $val1->tributeaction;
                            $tributty=$val1->tribute_type;
                            
                            $triname=$val1->trnfname;
                            
                            $date=$val1->created_on;
                         $crd=date('M d,y', strtotime($val1->created_on));
                               if( $tributetype == lightcandle)
                               {
                                ?>
                                <li><?php echo $triname ?> lit a candle<span><?php echo $crd; ?></span></li>
                                <?php
                               }
                               ?>
                                <?php
                              if($tributty == flower)
                              {
                              ?>
                             <li><?php echo $triname; ?> laid a flower<span><?php echo $crd; ?></span></li>
                            <?php
                              }
                              if($tributty == candle)
                               {
                               ?>
                                <li><?php echo $triname; ?> lit a Candle<span><?php echo $crd; ?></span></li>
                                <?php
                               }
                                if($tributty == feather)
                               {
                               ?>
                                <li><?php echo $triname; ?> laid a Feather<span><?php echo $crd; ?></span></li>
                               <?php
                               }
                               
                              
                               if( $tributetype == leave_note)
                               {
                               ?>
                                  <li><?php echo $triname; ?> left a Note<span><?php echo $crd; ?></span></li>
                                  
                                  <?php
                               }
                            }
                            ?>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-header">
                              <a class="collapsed card-link">
                                Page Views   <span><?php echo $visitorcounter; ?></span><!-- Start of CuterCounter Code -->
                                <!-- Start of CuterCounter Code -->
                                <!--<img src="http://www.cutercounter.com/hit.php?id=gefappp&nd=1&style=34" border="0" alt="visitor counter" class="count">-->
                                <!-- End of CuterCounter Code -->
                                <!--<img src="http://www.cutercounter.com/hit.php?id=guvfappo&nd=1&style=34" border="0" alt="free counter" class="count">-->
                                <!-- End of CuterCounter Code -->
                              </a>
                              <style>
                                  .count {
                                        float: right;
                                        width: 14px;
                                    }
                              </style>
                        </div>
                        <div id="collapseFive" class="collapse" data-parent="#accordion">
                            <div class="card-body">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-8 col-12 d-md-block d-none">
               
                <div class="tab-content">
                    <div class="tab-pane tab-pane_class active" id="home">
                      <div class="tribute_box">
                        <!--<h3>“Let the memory of <?php echo $uname; ?>  be with us forever”</h3>-->
                         <?php
                            if(($_SESSION['id'] == $id))
                            {
                                 if( $second_memorial_text == "")
                                {
                            ?>
                            <h3 class="memordesc">“<?php echo $first_memorial_text ?> <?php echo $uname; ?>   last forever in our hearts”</h3>
                            <?php
                                }
                                else
                                {
                                    ?>
                                      <h3 class="memordesc">“<?php echo $first_memorial_text ?> <?php echo $uname; ?>  <?php echo $second_memorial_text ?>”</h3>
                                      <?php
                                }
                            ?>
                      
                         <button class="edit_class memorialtext" onclick="memorialtext(<?php echo $id; ?>)"><i class="fa fa-pencil" aria-hidden="true"></i>Edit</button>
                         
                          <div class="memorialdescri" style="display:none;">
                               
                                <form method="post" id="memorial1">
                                    <input type="hidden" name="memorialid" value="<?php echo $id ?>">
                                     <input type="hidden" name="memouser" value="<?php echo $uname; ?>">
                                     <div class="borderclass">
                                     <div class="row">
                             <div class="col-sm-5"><textarea class="form-control" rows="8" name="firstmemorialdesc"><?php echo $first_memorial_text ?></textarea></div>
                             <div class="col-sm-2"><textarea class="form-control" rows="8" name="username" readonly><?php echo $uname; ?></textarea></div>
                             <?php
                              if( $second_memorial_text == "")
                                {
                            ?>
                             <div class="col-sm-5"><textarea class="form-control" rows="8" name="secondmemorialdesc"> last forever in our hearts</textarea></div>
                            <?php
                                }
                                else
                                {
                                    ?>
                               
                              <div class="col-sm-5"><textarea class="form-control" rows="8" name="secondmemorialdesc"><?php echo $second_memorial_text ?></textarea></div>
                              <?php
                                }
                                ?>
                               </div>
                               </div>
                            <input type="submit" name="memosave" class="red_btn memorialsave" value="Save">
                            </form>
                           
                            </div>
                        <?php
                            }
                            else
                            {
                            ?>
                             <h3>“<?php echo $first_memorial_text ?> <?php echo $fname; ?>  <?php echo $second_memorial_text ?>”</h3>
                             
                            <?php
                            }
                            ?>
                       <!--<span class="edit_class"><i class="fa fa-pencil" aria-hidden="true"></i>Edit</span>-->
                      </div>
                      <div class="tribute_box">
                        <ul class="tri_list_box">
                              <?php
                                $datefull5= $fulldeathdate;
                                $date5=date_create($datefull5);
                                $bir5= date_format($date5,"d-m-Y");
                                
                                $datefull6= $fullbirthdate;
                                $date6=date_create($datefull6);
                                $bir6= date_format($date6,"d-m-Y");
                                
                                $dateOfBirth = $bir6;
                                $today = $bir5;
                                $diff = date_diff(date_create($dateOfBirth), date_create($today));
                                $age=$diff->format('%y');
                        ?> 
                            
                          <li><?php echo $age ?> Years Old</li>
                          <?php 
                              $datefull= $fulldeathdate;
                              $date=date_create($datefull);
                              $bir= date_format($date,"M d, Y");
                             // echo $bir;
                          ?>
                          <?php 
                              $datefull1= $fulldeathdate;
                              $date1=date_create($datefull1);
                              $bir1= date_format($date1,"M d, Y");
                             // echo $bir1;
                          ?>
                            <li>Born on <?php echo $bir; ?>  in <?php echo $birthplace ?>, <?php echo $birthcountry; ?></li>
                          <li>Passed away on <?php echo $bir1; ?> in <?php echo $deathplace ?>, <?php echo $deathcountry; ?></li>
                        </ul>
                        <?php
                        if(($_SESSION['id'] == $id))
                        {
                        ?>
                       <a class="born"><span class="edit_class"><i class="fa fa-pencil" aria-hidden="true"></i>Edit</span></a> 
                       <?php
                        }
                        ?>
                      </div>
                      <div class="tribute_box ">
                          <div class="abutsec" style="display:block">
                             
                              <?php echo $about_description; ?>
                            </div>
                             <?php
                        if(($_SESSION['id'] == $id))
                        {
                        ?>
                            <button class="edit_class abt" onclick="get_msg(<?php echo $id; ?>)"><i class="fa fa-pencil" aria-hidden="true"></i>Edit</button>
                           <?php
                        }
                        ?>
                            <div class="abtdescription" style="display:none;">
                                <form method="post" id="foot">
                                    <input type="hidden" name="abtid" value="<?php echo $id ?>">
                             <textarea class="form-control" rows="8" placeholder="Add your tribute text here" name="dsec"><?php echo $about_description; ?></textarea>
                            <input type="submit" name="subabt" class="red_btn saveabt" value="Save">
                            </form>
                            </div>
                      </div>
                      <a href="#" data-toggle="tab" class="add_story sto">Add a Tribute</a>
                      
                 
                    </div>
                  <div class="tab-pane fade tab_notice" id="menu1">
                    <div class="notice_main"  style="display:block">
                        
                      <div class="form-group">
                        <label for="txt1">Notice Board For</label>
                        <input type="text" class="form-control" id="txt1" placeholder="First Name, Last Name" value="<?php echo $fname ?>, <?php echo $lname ?>" disabled>
                      </div>
                      <div class="form-group">
                        <label for="txt1">Date of Birth</label>
                        <input type="text" class="form-control" id="txt1" placeholder="Date, Month, Year, Place,Country" value="<?php echo $fullbirthdate ?>, <?php echo $birthplace ?>, <?php echo $birthcountry ?>" disabled>
                      </div>
                      <div class="form-group">
                        <label for="txt1">Date of Death</label>
                        <input type="text" class="form-control" id="txt1" placeholder="Date, Month, Year, Place,Country" value="<?php echo $fulldeathdate ?>, <?php echo $deathplace ?>, <?php echo $deathcountry ?>" disabled>
                      </div>
                      <div class="form-group">
                        <label for="txt1">Church/Mosque/Temple</label>
                        <input type="text" class="form-control" id="txt1" placeholder="Location, Town, Date, Time" value="<?php echo $location ?>, <?php echo $town ?>, <?php echo $fdate ?>, <?php echo $ftime ?>" disabled>
                      </div>
                      <div class="form-group">
                        <label for="txt1">Location</label>
                        <input type="text" class="form-control" id="txt1" placeholder="County, Town/Centre, Area, Public Cemetery, Date, Time" value="<?php echo $burial_country; ?>, <?php echo $burial_town ?>, <?php echo $burial_date ?>, <?php echo $burial_time ?>, <?php echo $burial_location ?>, <?php echo $burial_cemetery ?>" disabled>
                      </div>
                      <div class="form-group">
                        <label for="txt1">Cremation Details</label>
                        <input type="text" class="form-control" id="txt1" placeholder="Location, Crematorium, Time" value="<?php echo $crematorium_town ?>, <?php echo $crematorium ?>, <?php echo $crematorium_time ?>" disabled>
                      </div>
                      <div class="form-group">
                        <label for="txt1">Funeral Committee Contact Person</label>
                        <input type="text" class="form-control" id="txt1" placeholder="1st Name, 2nd Name, Phones" value="<?php echo $funeral_com_fname ?>, <?php echo $funeral_com_secondname ?>, <?php echo $funeral_com_telephone ?>" disabled>
                      </div>
                      <div class="form-group">
                        <label for="txt1">Funeral Committee Meetings Venue</label>
                        <input type="text" class="form-control" id="txt1" placeholder="Town , Location, Buidling, Meeting Dates" value="<?php echo $funeral_com_town ?> , <?php echo $funeral_com_location ?>, <?php echo $funeral_com_building ?>, <?php echo $funeral_com_mettingdate ?>" disabled>
                      </div>
                      <div class="form-group">
                        <label for="txt1">Burial/Funeral/Interment Location Google Map</label>
                        
                        <input type="text" id="address" class="form-control" id="txt1" placeholder="1st Name, 2nd Name, Phones" value="<?php echo $google_map_location ?>" disabled>
                        <?php
                          if(($_SESSION['id'] != $id))
                           {
                          ?>
                         <input id="submit" type="button" value="Click to Get Location">
                         <?php
                           }
                           ?>
                      </div>
                      <div class="form-group">
                        <label for="txt1">POST FUNERAL NOTICES</label>
                        <input type="text" class="form-control" id="txt1" placeholder="1st Name, 2nd Name, Phones" value="<?php echo $notice ?>,<?php echo $notice_posted ?>,<?php echo $notice_posted_date ?>" disabled>
                      </div>
                       <div class="map_class">
                           <?php
                          if(($_SESSION['id'] != $id))
                           {
                          ?>
                        <div id="map"></div>
                        <?php
                           }
                           ?>
                      <!-- <div id="right-panel">
      <p>Total Distance: <span id="total"></span></p>
    </div>-->
                       </div>
                      <ul class="list-inline notice_list">
                        <li class="list-inline-item">Notice: dawdaoiajdawda</li>
                        <li class="list-inline-item">Posted:  10 hours ago</li>
                        <li class="list-inline-item">Posted by:  admin123</li>
                      </ul>
                    </div>
                    <div class="notice_sub" >
                        <div class="showhid" style="display:none;">
                      <div class="info_new" >
                        <h5>PERSONAL INFORMATION</h5>
                        <span>Notices Board For:</span>
                         <form method="post" enctype="multipart/form-data" id="ServiceRequest">
                        <div class="row">
                          <div class="col-md-6">
                            <div class="form-group">
                                 <input type="hidden" class="form-control" name="nid" value="<?php echo $id ?>">
                              <input type="text" class="form-control" id="txt1" placeholder="First Name" name="fname" value="<?php echo $fname ?>">
                            </div>
                          </div>
                          <div class="col-md-6">
                            <div class="form-group">
                              <input type="text" class="form-control" id="txt1" placeholder="Last Name" name="lname" value="<?php echo $lname ?>">
                            </div>
                          </div>
                        </div>
                          <span>Birth Country and Death Country:</span>
                        <div class="row">
                          <div class="col-md-6">
                            <div class="form-group">
                              <input type="text" class="form-control" id="txt1" placeholder="Birth in Country" name="birthcountry" value="<?php echo $birthcountry ?>">
                            </div>
                          </div>
                          <div class="col-md-6">
                            <div class="form-group">
                              <input type="text" class="form-control" id="txt1" placeholder="Death in Country" name="deathcountry" value="<?php echo $deathcountry ?>">
                            </div>
                          </div>
                          
                        
                        </div>
                        <span>Date of Birth:</span>
                        <div class="row">
                          <div class="col-md-3">
                            <div class="form-group">
                             <!-- <input type="text" class="form-control" id="txt1" placeholder="Date" name="bdate" value="<?php echo $day ?>">-->
                              <select class="form-control" id="days" name="bdate">
                                  <option value="<?php echo $day ?>" selected><?php echo $day ?></option>
                              </select>
                            </div>
                          </div>
                          <div class="col-md-3">
                            <div class="form-group">
                             <!-- <input type="text" class="form-control" id="txt1" placeholder="Month" name="bmonth" value="<?php echo $month ?>">-->
                              <select class="form-control" id="monts" name="bmonth">
                                  <option value="<?php echo $month ?>" selected><?php echo $month ?></option>
                              </select>
                            </div>
                          </div>
                          <div class="col-md-3">
                            <div class="form-group">
                                   <select class="form-control" id="years" name="byear">
                                  <option value="<?php echo $year ?>" selected><?php echo $year ?></option>
                              </select>
                              <!--<input type="text" class="form-control" id="txt1" placeholder="Year" name="byear" value="<?php echo $year ?>">-->
                            </div>
                          </div>
                          <div class="col-md-3">
                            <div class="form-group">
                              <input type="text" class="form-control" id="txt1" placeholder="Place" name="bplace" value="<?php echo $birthplace ?>">
                            </div>
                          </div>
                        </div>
                      
                        <span>Date of Death:</span>
                        <div class="row">
                          <div class="col-md-3">
                            <div class="form-group">
                                  <select class="form-control" id="dathdate1" name="ddate">
                                  <option value="<?php echo $day1 ?>" selected><?php echo $day1 ?></option>
                              </select>
                             <!-- <input type="text" class="form-control" id="dathdate1" placeholder="Date" name="ddate" value="<?php echo $day1 ?>">-->
                            </div>
                          </div>
                          <div class="col-md-3">
                            <div class="form-group">
                                 <select class="form-control" id="dathmonth1" name="dmonth">
                                  <option value="<?php echo $month1 ?>" selected><?php echo $month1 ?></option>
                              </select>
                              <!--<input type="text" class="form-control" id="dathmonth1" placeholder="Month" name="dmonth" value="<?php echo $month1 ?>">-->
                            </div>
                          </div>
                          <div class="col-md-3">
                            <div class="form-group">
                                 <select class="form-control" id="deathyear1" name="dyear">
                                  <option value="<?php echo $year1 ?>" selected><?php echo $year1 ?></option>
                              </select>
                              <!--<input type="text" class="form-control" id="deathyear1" placeholder="Year" name="dyear" value="<?php echo $year1 ?>">-->
                            </div>
                          </div>
                          <div class="col-md-3">
                            <div class="form-group">
                              <input type="text" class="form-control" id="txt1" placeholder="Place" name="dplace" value="<?php echo $deathplace ?>">
                            </div>
                          </div>
                        </div>
                        
                      </div>
                      <div class="info_new">
                        <h5>FUNERAL SERVICE DETAILS</h5>
                        <span>Church/Mosque/Temple:</span>
                        <div class="row">
                          <div class="col-md-3">
                            <div class="form-group">
                              <input type="text" class="form-control" id="txt1" placeholder="Location" name="flocation" value="<?php echo $location ?>">
                            </div>
                          </div>
                          <div class="col-md-3">
                            <div class="form-group">
                              <input type="text" class="form-control" id="txt1" placeholder="Town" name="ftown" value="<?php echo $town ?>">
                            </div>
                          </div>
                          <div class="col-md-3">
                            <div class="form-group">
                              <input type="text" class="form-control" id="funaldate" placeholder="Date" name="fdate" value="<?php echo $fdate ?>">
                            </div>
                          </div>
                          <div class="col-md-3">
                            <div class="form-group">
                              <input type="text" class="form-control timepicker" id="txt1" placeholder="Time" name="ftime" value="<?php echo $ftime ?>">
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="info_new">
                        <h5>BURIAL DETAILS</h5>
                        <span>Location:</span>
                        <div class="row">
                          <div class="col-md-3">
                            <div class="form-group">
                                   <input type="text" class="form-control" id="txt1" placeholder="Country" name="fcountry" value="<?php echo $burial_country ?>">
                              <!--<select class="form-control" id="sel1" name="fcountry">
                                <option value="0" <?php// if ($burial_country == '0') echo 'selected="selected"'; ?> >County</option>
                                  <option value="1" <?php //if ($burial_country == '1') echo 'selected="selected"'; ?> >1</option>
                                   <option value="2" <?php //if ($burial_country == '2') echo 'selected="selected"'; ?> >2</option>
                                    <option value="3" <?php //if ($burial_country == '3') echo 'selected="selected"'; ?> >3</option>
                              </select>-->
                            </div>
                          </div>
                          <div class="col-md-3">
                            <div class="form-group">
                              <input type="text" class="form-control" id="txt1" placeholder="Town/Centre" name="butown" value="<?php echo $burial_town ?>">
                            </div>
                          </div>
                          <div class="col-md-3">
                            <div class="form-group">
                              <input type="text" class="form-control" id="burialdate" placeholder="Date" name="budate" value="<?php echo $burial_date ?>">
                            </div>
                          </div>
                          <div class="col-md-3">
                            <div class="form-group">
                              <input type="text" class="form-control timepicker" id="txt1" placeholder="Time" name="butime" value="<?php echo $burial_time ?>">
                            </div>
                          </div>
                        </div>
                        <div class="row">
                          <div class="col-md-6">
                            <div class="form-group">
                              <input type="text" class="form-control" id="txt1" placeholder="Area/Location" name="buarea" value="<?php echo $burial_location ?>">
                            </div>
                          </div>
                          <div class="col-md-6">
                            <div class="form-group">
                              <input type="text" class="form-control" id="txt1" placeholder="If Public Cemetery" name="cemetery" value="<?php echo $burial_cemetery ?>">
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="info_new">
                        <h5>CREMATION DETAILS</h5>
                        <div class="row">
                          <div class="col-md-5">
                            <div class="form-group">
                              <input type="text" class="form-control" id="txt1" placeholder="Town" name="cretown" value="<?php echo $crematorium_town ?>">
                            </div>
                          </div>
                          <div class="col-md-5">
                            <div class="form-group">
                              <input type="text" class="form-control" id="txt1" placeholder="Crematorium" name="Crematorium" value="<?php echo $crematorium ?>">
                            </div>
                          </div>
                          <div class="col-md-2">
                            <div class="form-group">
                              <input type="text" class="form-control timepicker" id="txt1" placeholder="Time" name="ctime" value="<?php echo $crematorium_time ?>">
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="info_new">
                        <h5>Funeral Committee Contact Person</h5>
                        <div class="row">
                          <div class="col-md-5">
                            <div class="form-group">
                              <input type="text" class="form-control" id="txt1" placeholder="1st Name" name="fcname" value="<?php echo $funeral_com_fname ?>">
                            </div>
                          </div>
                          <div class="col-md-5">
                            <div class="form-group">
                              <input type="text" class="form-control" id="txt1" placeholder="2nd Name" name="fcsecname" value="<?php echo $funeral_com_secondname ?>">
                            </div>
                          </div>
                          <div class="col-md-2">
                            <div class="form-group">
                              <input type="text" class="form-control" id="txt1" placeholder="Tel No" name="ftelno" value="<?php echo $funeral_com_telephone ?>">
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="info_new">
                        <h5>Funeral Committee Contact Person</h5>
                        <div class="row">
                          <div class="col-md-3">
                            <div class="form-group">
                              <input type="text" class="form-control" id="txt1" placeholder="Town" name="fctown" value="<?php echo $funeral_com_town ?>">
                            </div>
                          </div>
                          <div class="col-md-3">
                            <div class="form-group">
                              <input type="text" class="form-control" id="txt1" placeholder="Location" name="fclocation" value="<?php echo $funeral_com_location ?>">
                            </div>
                          </div>
                          <div class="col-md-3">
                            <div class="form-group">
                              <input type="text" class="form-control" id="txt1" placeholder="Building" name="fbuild" value="<?php echo $funeral_com_building ?>">
                            </div>
                          </div>
                          <div class="col-md-3">
                            <div class="form-group">
                              <input type="text" class="form-control" id="furmdate" placeholder="Meeting Dates" name="fmettingdate" value="<?php echo $funeral_com_mettingdate ?>">
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="info_new">
                        <h5>Burial/Funeral/Interment Location Google Map</h5>
                        <div class="row">
                          <div class="col-md-12">
                            <div class="form-group">
                              <input type="text" class="form-control" id="addrs" placeholder="Add Location" name="gloc" value="<?php echo $google_map_location ?>">
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="info_new">
                        <h5>POST FUNERAL NOTICES</h5>
                        <div class="row">
                          <div class="col-md-5">
                            <div class="form-group">
                              <input type="text" class="form-control" id="txt1" placeholder="Notice/Subject" name="notice" value="<?php echo $notice ?>">
                            </div>
                          </div>
                          <div class="col-md-5">
                            <div class="form-group">
                              <input type="text" class="form-control" id="txt1" placeholder="When Notice Was Posted" name="postn" value="<?php echo $notice_posted ?>">
                            </div>
                          </div>
                          <div class="col-md-2">
                            <div class="form-group">
                              <input type="text" class="form-control" id="txt1" placeholder="Posted By" name="postby" value="<?php echo $notice_posted_date ?>">
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="info_new">
                        <h5>Edit Profile Image</h5>
                        <div class="row">
                          <div class="col-md-5">
                            <div class="form-group">
                                 <input type="file" name="proimg" accept="image/*" id="videoUploadFile" value="" onchange="preview_image1(event)">
                                 <input type="hidden" name="old_pic" value="<?php echo $profileimg;?>">
                              
                            </div>
                          </div>
                           <div class="col-md-5">
                            <div class="form-group">
                                         <?php
                            
                            if(!empty($profileimg))
                            {
                            ?>
                            <img class="img-fluid" alt="img" src="<?php echo get_site_url(); ?>/wp-content/uploads/<?php echo $profileimg;  ?>" id="profilepre1">
                            <?php
                            }
                            ?>
                            </div>
                          </div>
                          
                        </div>
                      </div>
                      
                       <?php
                          if(($_SESSION['id'] == $id))
                           {
                          ?>
                       <div id="map1"></div>
                       <?php
                           }
                           ?>
                      </div>
                       <?php
                        if(($_SESSION['id'] == $id))
                        {
                        ?>
                      <div class="tribute_list1">
                       <!-- <a href="" class="add_story ylw_btn">Edit</a>-->
                         <input type="button" name="subbtn" class="add_story ylw_btn" value="Edit">
                       <!-- <a href="" class="add_story">POST NOTICES</a>-->
                        <input type="submit" name="subbtn" class="add_story" value="Save">
                      </div>
                      <?php
                        }
                        ?>
                       </form>
                    </div>

                    <!--  -->
                  </div>
                  <div class="tab-pane gal_img fade" id="menu2">
                    <!-- <div class="gal_main">
                      <div class="row">
                        <div class="col-md-4">
                          <h4>Photos</h4>
                          <img class="img-fluid" alt="img" src="img/img22.png">
                          <img class="img-fluid" alt="img" src="img/img22.png">
                          <div class="add_gal">
                            <span class="red_btn"><i class="fa fa-plus-circle" aria-hidden="true"></i>Add Photos</span>
                            <input id="selectfile" type="file" name=""/>
                          </div>
                        </div>
                        <div class="col-md-4">
                          <h4>Videos</h4>
                          <img class="img-fluid" alt="img" src="img/img22.png">
                          <img class="img-fluid" alt="img" src="img/img22.png">
                          <div class="add_gal">
                            <span class="red_btn"><i class="fa fa-plus-circle" aria-hidden="true"></i>Add Videos</span>
                            <input id="selectfile" type="file" name=""/>
                          </div>
                        </div>
                        <div class="col-md-4">
                          <h4>Audio</h4>
                          <img class="img-fluid" alt="img" src="img/img22.png">
                          <img class="img-fluid" alt="img" src="img/img22.png">
                          <div class="add_gal">
                            <span class="red_btn"><i class="fa fa-plus-circle" aria-hidden="true"></i>Add Audio</span>
                            <input id="selectfile" type="file" name=""/>
                          </div>
                        </div>
                      </div>
                    </div> -->
                    <!-- <div class="space30"></div> -->
                    <div class="gal_sub">
                      <ul class="nav nav-tabs">
                        <li class="nav-item">
                          <a class="nav-link active" data-toggle="tab" href="#photoTab">Photos</a>
                        </li>
                        <li class="nav-item">
                          <a class="nav-link" data-toggle="tab" href="#videoTab">VIDEOS</a>
                        </li>
                        <li class="nav-item">
                          <a class="nav-link" data-toggle="tab" href="#audioTab">AUDIO</a>
                        </li>
                      </ul>
                      <!-- Tab panes -->
                      <div class="tab-content">
                        <div class="tab-pane active" id="photoTab">
                          <div class="gal_box">
                            <div class="row photoapp">
                              
                                  
                                   
                                    <?php
                                 $msg1 = $wpdb->get_results("SELECT * FROM `wp_photo` where userid = $id");
                                    foreach($msg1 as $val1)
                                    {
                                        $pho=$val1->media;
                                        $ext = pathinfo($pho, PATHINFO_EXTENSION);
                                        if($ext == 'PNG' || $ext == 'JPG' || $ext == "gif" || $ext == 'png' || $ext == 'jpg')
                                        {
                                    ?>
                                    
                                     <div class="col-md-3">
                                                       <?php
                                        if(($_SESSION['id']!=''))
                                        {
                                        ?>
                                         <img src="https://cdn4.iconfinder.com/data/icons/linecon/512/delete-512.png" class="trash11" onclick="mediadelticon(<?php echo $val1->pic_id; ?>)">
                                         <?php
                                            }
                                            ?>
                                   <img class="img-fluid displayimg" alt="img" src="<?php echo get_site_url(); ?>/wp-content/uploads/<?php echo $val1->media;  ?>"/>
                                    </div>
                                   <?php
                                    }
                                    }
                                    ?>
                                <!--<img class="img-fluid" alt="img" src="<?php echo get_stylesheet_directory_uri(); ?>/img/img23.jpg">-->
                            
                              
                              
                            </div>
                            <div class="row"> 
                            <div class="col-md-3">
                                </div>
                            <div class="col-md-6">
                                 <img class="img-fluid" id="output_image"/>
                              </div>
                              <div class="col-md-3">
                                </div>
                              </div>
                              
                              
                              <div class="space30"></div>
                      <?php
                        if(($_SESSION['id'] == $id))
                        {
                        ?>
                       <form method="post" enctype="multipart/form-data" id="imgfrm">
                      <div class="row">
                        <div class="col-md-6"><img class="loader" src="<?php echo get_stylesheet_directory_uri(); ?>/img/loader.gif" style="height: 167px; display:none;"></div>
                        
                        <div class="col-md-4">
                           <div class="add_gal">
                            <span class="red_btn"><i class="fa fa-plus-circle" aria-hidden="true"></i>Add Media</span>
                            <input type="hidden" name="userid" value="<?php echo $id ?>">
                            <input id="selectfile" multiple class="pho" type="file" accept="image/*" onchange="preview_image(event)" name="fileimg">
                            <!--<input id="selectfile1" class="vide" type="file" accept="video/*" name="fileimg1" style="display:none">
                             <input id="selectfile2" class="audi" type="file" accept="audio/*" name="fileimg2" style="display:none">-->
                          </div>
                          

                        </div>
                        <div class="col-md-2">
                            <input type="submit" class="red_btn tribute_box-btn tribute_box-btn1" name='submitImage' value="Save"/>
                         <!--<a href="" class="red_btn tribute_box-btn tribute_box-btn1">Upload</a>-->
                        </div>
                        
                      </div> 
                      </form>
                      <?php
                        }
                        ?>
                        <div class="space30"></div>
                          </div>
                        </div>
                        <div class="tab-pane fade" id="videoTab">
                            <div class="gal_box">
                            <div class="row videoapp">
                                 <?php
                                 $msg1 = $wpdb->get_results("SELECT * FROM `wp_photo` where userid = $id");
                                    foreach($msg1 as $val1)
                                    {
                                        $pho=$val1->media;
                                        $ext = pathinfo($pho, PATHINFO_EXTENSION);
                                        if($ext == 'mp4' || $ext == 'mov')
                                        {
                                    ?>
                              <div class="col-md-3">
                                 
                                 <video width="150px" height="150px" controls>
                              <source src="<?php echo get_site_url(); ?>/wp-content/uploads/<?php echo $val1->media;  ?>" type="video/mp4">
                             
                            </video>
                              <?php
                            if(($_SESSION['id'] == $id))
                            {
                            ?>
                             <img src="https://cdn4.iconfinder.com/data/icons/linecon/512/delete-512.png" class="trash1" onclick="mediadeltvideo(<?php echo $val1->pic_id; ?>)">
                        <?php
                            }
                            ?>
                                <!--<iframe src="<?php echo get_site_url(); ?>/wp-content/uploads/<?php echo $val1->media;  ?>" width="150px" height="150px"></iframe>-->
                              </div>
                              <?php
                                        }
                                    }
                                    ?>
                         <!--   <div class="col-md-3">
                                
                               <video width="150px" height="150px"   controls class="videota" style="display:none">
                              <source src="" id="video_here">
                                Your browser does not support HTML5 video.
                            </video>
                                </div>-->
                            </div>
                            <div class="space30"></div>
                             <?php
                        if(($_SESSION['id'] == $id))
                        {
                        ?>
                       <form method="post" enctype="multipart/form-data" id="videofrm">
                      <div class="row">
                        <div class="col-md-6"><img class="loader" src="<?php echo get_stylesheet_directory_uri(); ?>/img/loader.gif" style="height: 167px; display:none;"></div>
                        
                        <div class="col-md-4">
                           <div class="add_gal">
                            <span class="red_btn"><i class="fa fa-plus-circle" aria-hidden="true"></i>Add Media</span>
                            <input type="hidden" name="userid" value="<?php echo $id ?>">
                            <input id="selectfile" multiple class="pho" type="file" accept="video/*" name="fileimg">
                            <!--<input id="selectfile1" class="vide" type="file" accept="video/*" name="fileimg1" style="display:none">
                             <input id="selectfile2" class="audi" type="file" accept="audio/*" name="fileimg2" style="display:none">-->
                          </div>
                          

                        </div>
                        <div class="col-md-2">
                            <input type="submit" class="red_btn tribute_box-btn tribute_box-btn1" name='submitImage' value="Save"/>
                         <!--<a href="" class="red_btn tribute_box-btn tribute_box-btn1">Upload</a>-->
                        </div>
                        <div class="space30"></div>
                      </div> 
                      </form>
                      <?php
                        }
                        ?>
                            
                          </div>
                        </div>
                        <div class="tab-pane fade" id="audioTab">
                          <div class="gal_box">
                            <div class="row audioapp">
                                 <?php
                                 $msg1 = $wpdb->get_results("SELECT * FROM `wp_photo` where userid = $id");
                                    foreach($msg1 as $val1)
                                    {
                                        $pho=$val1->media;
                                        $ext = pathinfo($pho, PATHINFO_EXTENSION);
                                        if($ext == 'mp3' || $ext == 'mov' || $ext == 'wav' || $ext == 'ogg' || $ext == 'wma')
                                        {
                                    ?>
                              <div class="col-md-5">
                                
                                            <audio width="150px" height="150px" controls>
                              <source src="<?php echo get_site_url(); ?>/wp-content/uploads/<?php echo $val1->media;  ?>" type="audio/ogg">
                             
                            </audio>
                              <?php
                            if(($_SESSION['id'] == $id))
                            {
                            ?>
                               <img src="https://cdn4.iconfinder.com/data/icons/linecon/512/delete-512.png" class="trash3" onclick="mediadeltaudio(<?php echo $val1->pic_id; ?>)">
                               <?php
                            }
                            ?>
                            <!--    <iframe src="<?php echo get_site_url(); ?>/wp-content/uploads/<?php echo $val1->media;  ?>" width="150px" height="150px"></iframe>-->
                              </div>
                              
                              <?php
                                        }
                                    }
                                    ?>
                            <div class="col-md-5">
                                <audio controls width="150px" height="150px" class="audtab" style="display:none">
                                  <source src="" type="audio/ogg" id="audio_here">
                                  Your browser does not support the audio tag.
                                </audio>
                                <!--<img class="img-fluid" id="videodi1" style="height: 120px;">-->
                                </div>
                            </div>
                               <div class="space30"></div>
                             <?php
                        if(($_SESSION['id'] == $id))
                        {
                        ?>
                       <form method="post" enctype="multipart/form-data" id="audiofrm">
                      <div class="row">
                        <div class="col-md-6"><img class="loader" src="<?php echo get_stylesheet_directory_uri(); ?>/img/loader.gif" style="height: 167px; display:none;"></div>
                        
                        <div class="col-md-4">
                           <div class="add_gal">
                            <span class="red_btn"><i class="fa fa-plus-circle" aria-hidden="true"></i>Add Media</span>
                            <input type="hidden" name="userid" value="<?php echo $id ?>">
                            <input id="selectfile" multiple class="pho" type="file" accept="audio/*" name="fileimg">
                            <!--<input id="selectfile1" class="vide" type="file" accept="video/*" name="fileimg1" style="display:none">
                             <input id="selectfile2" class="audi" type="file" accept="audio/*" name="fileimg2" style="display:none">-->
                          </div>
                          

                        </div>
                        <div class="col-md-2">
                            <input type="submit" class="red_btn tribute_box-btn tribute_box-btn1" name='submitImage' value="Save"/>
                         <!--<a href="" class="red_btn tribute_box-btn tribute_box-btn1">Upload</a>-->
                        </div>
                        <div class="space30"></div>
                      </div> 
                      </form>
                      <?php
                        }
                        ?>
                            
                          </div>
                        </div>
                      </div>
                      
                    </div>
                  </div>
                  <div class="tab-pane fade tribt" id="menu3">
                       <div class="appnot"></div>
                    <div class="main_tri">
                         <?php
                       
                   $msg1 = $wpdb->get_results("SELECT * FROM `wp_trubutenote` join wp_tribute where wp_tribute.id=wp_trubutenote.`userid` and `userid` = $id order by trid desc");
                  foreach($msg1 as $val1)
                            {
                            $tributetype= $val1->tributeaction;
                            $tributty=$val1->tribute_type;
                            $trifname=$val1->trnfname;
                             $trilname=$val1->trlname;
                            $status=$val1->Approval;
                            $date=$val1->created_on;
                         $crd=date('M d,y H:i:s', strtotime($val1->created_on));
                               if( $tributetype == lightcandle)
                               {
                                ?>
                       
                      <div class="featured_box">
                          <?php
                            if(($_SESSION['id'] == $id))
                            {
                            ?>
                        <img src="https://cdn4.iconfinder.com/data/icons/linecon/512/delete-512.png" class="trash" onclick="image(<?php echo  $val1->trid; ?>)">
                        <?php
                            }
                            ?>
                          <div class="media">
                                <img class="img-fluid img13" alt="img" src="<?php echo get_stylesheet_directory_uri(); ?>/img/img13.png">
                            <!--<img class="" src="<?php echo get_stylesheet_directory_uri(); ?>/img/img12.png" alt="mage">-->
                            <div class="media-body">
                              <h5><?php echo  $trifname; ?> <?php echo $trilname; ?> <i>lit a Candle</i></h5>
                              <h6><?php echo $crd; ?></h6>
                              <!--<img class="img-fluid img13" alt="img" src="<?php echo get_stylesheet_directory_uri(); ?>/img/img13.png">-->
                            </div>
                          </div>
                      </div>
                     
                      <?php
                               }
                               if( $tributetype == leave_note && $status == 1 )
                               {
                               ?>
                      <div class="featured_box">
                           <?php
                            if(($_SESSION['id'] == $id))
                            {
                            ?>
                           <img src="https://cdn4.iconfinder.com/data/icons/linecon/512/delete-512.png" class="trash" onclick="image(<?php echo  $val1->trid; ?>)">
                           <?php
                            }
                            ?>
                          <div class="media">
                              
                              <img class="img-fluid img15" src="<?php echo get_stylesheet_directory_uri(); ?>/img/Pin_Note-512.png" alt="mage">
                           <!-- <img class="" src="<?php echo get_stylesheet_directory_uri(); ?>/img/img12.png" alt="mage">-->
                            <div class="media-body">
                                
                            
                              <h5><?php echo  $trifname; ?> <?php echo $trilname; ?> <i>left a Note</i></h5>
                              <h6><?php echo $crd; ?></h6>

                                       <div class="dropdown">
                                    <span class="span_share dropbtn"><a class="btnShare"><i class="fa fa-share-alt" aria-hidden="true"></i>Share</a></span>

                                  <div class="dropdown-content">
                                   <!-- <a href="<?php echo $webadd; ?>" data-title="left a Note" data-desc="<?php echo  $val1->note; ?>" class="btnShare">Facebook</a>-->
                                    <a href="http://www.facebook.com/sharer.php?s=100&amp;p[title]=left a Note&amp;p[summary]=<?php echo  $val1->note; ?>&amp;p[url]=<?php echo $webadd; ?>&amp;&p[images][0]=<?php echo $image;?>'" target="blank">Facebook</a> 
                                   <a href="https://twitter.com/share?url=<?php echo $webadd;  ?>&amp;text=<?php echo $about_description;  ?>&amp;hashtags=<?php echo  $val1->note; ?>" target="blank">
                                       Twitter</a>
                                  <a href="https://plus.google.com/share?url=<?php echo $webadd;  ?>" data-desc="<?php echo  $val1->note; ?>" target="blank">Google+</a>
                                    <a href="https://www.linkedin.com/shareArticle?mini=true&url=<?php echo $webadd;  ?>&title=left a Note&summary=<?php echo $about_description;  ?>&source=<?php echo  $val1->note; ?>" target="blank">LinkedIn</a>
                                    <a href="https://pinterest.com/pin/create/button/?url=<?php echo $webadd;  ?>&media=gh&description=<?php echo  $val1->note; ?>" target="blank">Pinterest</a>
                                   <!-- <a href="mailto:pujadivedi@dhrup.com?&subject=left a Note&body=<?php echo  $val1->note; ?>">Send Email</a>-->
                                  </div>
                                </div>
                              <p><?php echo  $val1->note; ?></p>
                            </div>
                          </div>
                      </div>
                    
                           <?php
                               }
                               if( $tributetype == tribute && $status == 1 )
                               {
                             ?>
                      
                      <div class="featured_box">
                           <?php
                            if(($_SESSION['id'] == $id))
                            {
                            ?>
                          <img src="https://cdn4.iconfinder.com/data/icons/linecon/512/delete-512.png" class="trash" onclick="image(<?php echo  $val1->trid; ?>)">
                          <?php
                            }
                            ?>
                          <div class="media">
                             
                            <?php
                              if($tributty == flower)
                              {
                              ?>
                            <img class="img-fluid img14" src="<?php echo get_stylesheet_directory_uri(); ?>/img/flower1.png" alt="mage">
                            <?php
                              }
                              if($tributty == candle)
                               {
                               ?>
                                <img class="img-fluid img14" src="<?php echo get_stylesheet_directory_uri(); ?>/img/christmas-candle.png" alt="mage">
                                <?php
                               }
                                if($tributty == feather)
                               {
                               ?>
                                <img class="img-fluid img14" src="<?php echo get_stylesheet_directory_uri(); ?>/img/feather1.png" alt="mage">
                               <?php
                               }
                               ?>
                           
                            <div class="media-body">
                              <h5><?php echo  $trifname; ?> <?php echo $trilname; ?> <i>left a tribute</i></h5>
                              <h6><?php echo $crd; ?></h6>
                               <?php
                              if($tributty == flower)
                              {
                              ?>
                             <p><?php echo  $val1->tributenote_first; ?></p>
                            <?php
                              }
                              if($tributty == candle)
                               {
                               ?>
                                <p><?php echo  $val1->note; ?></p>
                                <?php
                               }
                                if($tributty == feather)
                               {
                               ?>
                                <p><?php echo  $val1->tributenote2_second; ?></p>
                               <?php
                               }
                               ?>
                              
                            
                            </div>
                          </div>
                      </div>
                      <?php
                               }
                            }
                               ?>
                                <div class="canlig"></div>
                      <ul class="list-inline tribute_list">
                       
                           <?php
                        if(($_SESSION['id']!=''))
                        {
                        ?>
                         
                           <li class="list-inline-item"><a class="red_btn lea_tri">Leave a Tribute</a></li>
                           
                           <li class="list-inline-item"><a class="red_btn" onclick="light(<?php echo $id ?>,'<?php echo $fname; ?>','<?php echo $lname; ?>','lightcandle')">Light a Candle</a></li>
                           <li class="list-inline-item"><a class="red_btn lea_not">Leave a Note</a></li>
                           <?php
                        }
                        else if(($_SESSION['email_id']!=''))
                        {
                            
                            $em=$_SESSION['email_id'];
                        $pro5 = $wpdb->get_results("SELECT * FROM `wp_tributeuser` where email_id = '$em'");
                            $idtr=($pro5[0]->tid!='')?$pro5[0]->tid:"";
                             $tfname=($pro5[0]->fname!='')?$pro5[0]->fname:"";
                             $tlname=($pro5[0]->lname!='')?$pro5[0]->lname:"";
                              $block=($pro5[0]->block!='')?$pro5[0]->block:"";
                             if($block == unblock)
                             {
                        ?>
                        
                         <li class="list-inline-item"><a class="red_btn lea_tri">Leave a Tribute</a></li>
                           
                           <li class="list-inline-item"><a class="red_btn" onclick="light(<?php echo $mem_id;  ?>,'<?php echo $tfname ?>','<?php echo $tlname ?>','lightcandle')">Light a Candle</a></li>
                           <li class="list-inline-item"><a class="red_btn lea_not">Leave a Note</a></li>
                           
                           <?php
                           }
                         }
                           else
                           {
                               ?>
                               
                                 <li class="list-inline-item"><a href="<?php echo get_site_url(); ?>/register/?id=<?php echo  $mem_id;  ?>" class="red_btn lea_tri">Leave a Tribute</a></li>
                           
                           <li class="list-inline-item"><a class="red_btn" href="<?php echo get_site_url(); ?>/register/?id=<?php echo  $mem_id;  ?>">Light a Candle</a></li>
                           <li class="list-inline-item"><a href="<?php echo get_site_url(); ?>/register/?id=<?php echo  $mem_id;  ?>" class="red_btn lea_not">Leave a Note</a></li>
                               <?php
                               
                           }
                           ?>
                      </ul>
                    </div>
                    <div class="note" style="display:none;">
                        <form method="post" class="notedata">
                            <input type="hidden" name="notid" value="<?php echo $id; ?>">
                            <input type="hidden" name="leavenote" value="leave_note">
                              <?php
                            if(($_SESSION['id'] != ""))
                            {
                            ?>
                             <input type="hidden" name="fname" value="<?php echo $fname; ?>">
                              <input type="hidden" name="lname" value="<?php echo $lname; ?>">
                               <?php
                            }
                            else if(($_SESSION['email_id']!=''))
                            {
                                  $em=$_SESSION['email_id'];
                        $pro5 = $wpdb->get_results("SELECT * FROM `wp_tributeuser` where email_id = '$em'");
                            $idtr=($pro5[0]->tid!='')?$pro5[0]->tid:"";
                             $tfname=($pro5[0]->fname!='')?$pro5[0]->fname:"";
                             $tlname=($pro5[0]->lname!='')?$pro5[0]->lname:"";
                             
                            ?>
                             <input type="hidden" name="fname" value="<?php echo $tfname ?>">
                             <input type="hidden" name="lname" value="<?php echo $tlname ?>">
                            <?php
                            }
                            ?>
                        <textarea class="form-control notxt" rows="8" placeholder="Add your tribute text here" name="addnote"></textarea>
                         <button type="submit" name="notesub" class="red_btn lvnot">Leave a Note</button>
                         </form>
                    </div>
                    <div class="leave_tribute">
                    <span class="tri_span"><img class="img-fluid" alt="img" src="<?php echo get_stylesheet_directory_uri(); ?>/img/pencil.png">Leave a Tribute</span>
                        <ul class="nav nav-tabs" role="tablist">
                          <li class="nav-item">
                            <a class="nav-link active" data-toggle="tab" href="#tab1" onclick="tri('tribute','candle')"><img class="img-fluid active_img" alt="img" src="<?php echo get_stylesheet_directory_uri(); ?>/img/christmas-candle.png">
                            <img class="img-fluid default_img" alt="img" src="<?php echo get_stylesheet_directory_uri(); ?>/img/christmas-candle1.png">
                            </a>
                          </li>
                          <li class="nav-item">
                            <a class="nav-link" data-toggle="tab" href="#tab2" onclick="tri('tribute','flower')"><img class="img-fluid default_img" alt="img" src="<?php echo get_stylesheet_directory_uri(); ?>/img/flower.png">
                            <img class="img-fluid active_img" alt="img" src="<?php echo get_stylesheet_directory_uri(); ?>/img/flower1.png">
                            </a>
                          </li>
                          <li class="nav-item">
                            <a class="nav-link" data-toggle="tab" href="#tab3" onclick="tri('tribute','feather')"><img class="img-fluid default_img" alt="img" src="<?php echo get_stylesheet_directory_uri(); ?>/img/feather.png">
                            <img class="img-fluid active_img" alt="img" src="<?php echo get_stylesheet_directory_uri(); ?>/img/feather1.png">
                            </a>
                          </li>
                        </ul>
                        <form method="post">
                        <div class="tab-content">
                            
                            <input type="hidden" name="tribure" value="tribute">
                            <input type="hidden" name="userid" value="<?php echo $id ?>">
                            <?php
                            if(($_SESSION['id'] == $id))
                            {
                            ?>
                            
                             <input type="hidden" name="fname" value="<?php echo $acountfname ?>">
                             <input type="hidden" name="lname" value="<?php echo $acountl ?>">
                             <?php
                            }
                            else if(($_SESSION['email_id']!=''))
                            {
                                  $em=$_SESSION['email_id'];
                        $pro5 = $wpdb->get_results("SELECT * FROM `wp_tributeuser` where email_id = '$em'");
                            $idtr=($pro5[0]->tid!='')?$pro5[0]->tid:"";
                             $tfname=($pro5[0]->fname!='')?$pro5[0]->fname:"";
                                $tlname=($pro5[0]->lname!='')?$pro5[0]->lname:"";
                            ?>
                             <input type="hidden" name="fname" value="<?php echo $tfname ?>">
                             <input type="hidden" name="lname" value="<?php echo $tlname ?>">
                            <?php
                            }
                            ?>
                            <div class="result">
                                 <input type="hidden" name="tribure_type" value="candle">
                            </div>
                            <div id="tab1" class="tab-pane active"><br>
                           
                              <textarea class="form-control" rows="8" id="comment" placeholder="Add your tribute text here" name="note"></textarea>
                            </div>
                            <div id="tab2" class="tab-pane fade"><br>
                              <textarea class="form-control" rows="8" id="comment" placeholder="Add your tribute text here"  name="note1"></textarea>
                            </div>
                            <div id="tab3" class="tab-pane fade"><br>
                              <textarea class="form-control" rows="8" id="comment" placeholder="Add your tribute text here"  name="note2"></textarea>
                            </div>
                        </div>
                        <ul class="list-inline leave_ul">
                             <?php
                            if(($_SESSION['id'] == $id))
                            {
                            ?>
                          <li class="list-inline-item">by <?php echo  $acountfname; ?> <?php echo $acountl; ?></li>
                            <?php
                            }
                            else if(($_SESSION['email_id']!=''))
                            {
                                  $em=$_SESSION['email_id'];
                        $pro5 = $wpdb->get_results("SELECT * FROM `wp_tributeuser` where email_id = '$em'");
                            $idtr=($pro5[0]->tid!='')?$pro5[0]->tid:"";
                             $tfname=($pro5[0]->fname!='')?$pro5[0]->fname:"";
                             $lfname=($pro5[0]->lname!='')?$pro5[0]->lname:"";
                            ?>
                             <li class="list-inline-item">by <?php echo  $tfname; ?> <?php echo $lfname; ?></li>
                            <?php
                            }
                            ?>
                          <li class="list-inline-item pull-right">
                          <!--  <button type="submit" name="subtribute" class="red_btn" >Leave a Tribute</button>-->
                             <input type="submit" name="subtribute" class="red_btn" value="Leave a Tribute">
                          </li>
                        </ul>
                        </form>
                    </div>
                  </div>
                </div>
                
            </div>
        </div>
    </div>
</section>





<!-- AddToAny BEGIN -->

<script async src="https://static.addtoany.com/menu/page.js"></script>
<!-- AddToAny END -->
<style>
    button.edit_class {
    background: none !important;
    border: none !important;
    color: #582236 !important;
}
button.red_btn.saveabt {
    border: none;
}
.pro {
    height: 455px;
    border-radius: 8px;
    border-bottom: 5px solid #80808030;
    object-fit: initial;
}
input.red_btn {
        float: none;
    /* max-width: 100%; */
    font-size: 17px;
    font-family: 'SF-Pro-Display-Semibold';
    height: 40px;
    line-height: 40px;
    margin-top: 10px;
    border: none;
    color: #ffffff !important;
}
img.img-fluid.displayimg {
    height: 121px;
}
button.red_btn {
    border: none;
}
input.red_btn.tribute_box-btn.tribute_box-btn1 {
    margin-top: 0px;
}
a.red_btn {
    cursor: pointer;
}
.audio_class {
    position: absolute;
    opacity: 0 !important;
    z-index: -9 !important;
}

      /* Always set the map height explicitly to define the size of the div
       * element that contains the map. */
      #map {
           height: 330px;
      }
      #map1 {
           height: 330px;
      }
      input#submit {
       float: right;
    /* margin-left: 23px; */
    margin-right: 7px;
    position: relative;
    margin-top: -49px;
    background: #582236;
    border: none;
    border-radius: 9%;
    color: #fff;
}
      /* Optional: Makes the sample page fill the window. */
      html, body {
        height: 100%;
        margin: 0;
        padding: 0;
      }
      #floating-panel {
        position: absolute;
        top: 10px;
        left: 25%;
        z-index: 5;
        background-color: #fff;
        padding: 5px;
        border: 1px solid #999;
        text-align: center;
        font-family: 'Roboto','sans-serif';
        line-height: 30px;
        padding-left: 10px;
      }
img.trash11 {
    width: 21px;
    margin-top: -22px;
    position: absolute;
}
img.trash1 {
    width: 21px;
    margin-top: 8px;
    position: absolute;
}
img.trash3 {
    width: 21px;
   margin-top: -67px;
    position: absolute;
}
form#memorial textarea.form-control
{
    height: 68px;
    border: none;
    /* padding-left: 0px; */
}
.borderclass {
    border: 1px solid #e0e0e0;
}
form#memorial1 textarea.form-control
{
    height: 68px;
    border: none;
    /* padding-left: 0px; */
}
@media(max-width: 767px){
    .pro {
    height: 120px;
    }
}
</style>

<section class="footer_bg">
  <div class="container">
    <div class="footer_class">
      <div class="row">
        <div class="col-md-2  pad_right0">
            <a href="<?php echo get_site_url();?>"><img class="img-fluid" alt="img" src="<?php echo get_option("theme_photo_about2");?>"></a>
        </div>
        <div class="col-md-7">
          <ul class="list-inline foot_link">
             
              <?php
                 $menuLocations = get_nav_menu_locations(); 
                 $menuID = $menuLocations['my-custom-menu']; 
                 $primaryNav = wp_get_nav_menu_items($menuID);
                 foreach ( $primaryNav as $navItem ) {
                     echo '<li class="list-inline-item"><a href="'.$navItem->url.'">'.$navItem->title.'</a></li>';
                 }  
              ?>
         </ul>
        </div>
        <div class="col-md-3 pad_left0">
          <div class="prehead_left">
              <ul class="list-inline pull-right">
                 <li class="list-inline-item"><a href="http://www.facebook.com/sharer.php?u=<?php echo $webaddress;  ?>" target="_blank">
       <i class="fa fa-facebook" aria-hidden="true"></i>
    </a></li>
                          <!--  <li class="list-inline-item"><a href=""><i class="fa fa-facebook" aria-hidden="true"></i></a></li>-->
                            <li class="list-inline-item"><a href="https://www.instagram.com/?hl=en"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
                            
                       
                            <li class="list-inline-item"><a href="https://twitter.com/share?url=<?php echo $webaddress;  ?>&amp;text=<?php echo $about_description;  ?>&amp;hashtags=<?php echo $about_description;  ?>" target="_blank">
        <i class="fa fa-twitter" aria-hidden="true"></i>
    </a></li>
                  <li class="list-inline-item">Share this page</li>
              </ul>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<footer>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <ul class="list-inline copyright_link">
                    <?php
                     $menuLocations = get_nav_menu_locations(); 
                     $menuID = $menuLocations['my-custom-menu2']; 
                     $primaryNav = wp_get_nav_menu_items($menuID);
                     foreach ( $primaryNav as $navItem ) {
                         echo '<li class="list-inline-item"><a href="'.$navItem->url.'">'.$navItem->title.'</a></li>';
                     }  
                    ?>
                    
                </ul>
            </div>
        </div>
    </div>
</footer>
  <div class="modal purchase_modal" id="myModal5">
  <div class="modal-dialog">
    <div class="modal-content">

      <!-- Modal Header -->
      <div class="modal-header">
        <h4 class="modal-title">How would you like to send invitations?</h4>
      </div>

      <!-- Modal body -->
      <div class="modal-body">
        <!--<p><a href="mailto:?&cc=&bcc=&subject=Invitations&body=You are Ivited by <?php echo $fname ?> please visite Link <?php echo $webadd ?>"><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/Email-PNG-Image-10108.png" height="50px" width="50px">Invite By an Email</a></p>-->
        <p><a target="_blank" href="https://mail.google.com/mail/?view=cm&fs=1&tf=1&to=&body=You are Invited by <?php echo $fname ?> please visite Link <?php echo $webadd ?>"><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/Email-PNG-Image-10108.png" height="50px" width="50px">Invite By an Email</a></p>
        <p><a target="_blank" href="https://www.facebook.com/sharer/sharer.php?u=<?php echo $webadd ?>"><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/240px-Facebook_logo_(square).png" height="30px" width="30px"> Post to Facebook</a></p>
        <br><br>
        <a data-dismiss="modal" class="cancel">Close</a>
        
      </div>

      <!-- Modal footer -->
    </div>
  </div>
</div>
 <div class="modal purchase_modal" id="myModal6">
  <div class="modal-dialog">
    <div class="modal-content">

      <!-- Modal Header -->
      <div class="modal-header">
        <h4 class="modal-title">Tribute Deleted Sucessfully</h4>
      </div>

      <!-- Modal body -->
      <div class="modal-body">
       
        <a data-dismiss="modal" class="cancel">Close</a>
        
      </div>

      <!-- Modal footer -->
    </div>
  </div>
</div>

 <div class="modal purchase_modal" id="myModal7">
  <div class="modal-dialog">
    <div class="modal-content">

      <!-- Modal Header -->
      <div class="modal-header">
        <h4 class="modal-title">Media Deleted Sucessfully</h4>
      </div>

      <!-- Modal body -->
      <div class="modal-body">
       
        <a data-dismiss="modal" class="cancel">Close</a>
        
      </div>

      <!-- Modal footer -->
    </div>
  </div>
</div>
<style>
    .modal-body p a {
    color: #582236 !important;
}
.purchase_modal .modal-body a {
    max-width: 218px;
   
}
audio#myAudio {
    opacity: 0;
}
@media (max-width: 1440px)
{
.navbar-light .navbar-nav .nav-link {
    padding: 10px 38px;
}
}

@media (max-width: 1366px)
{
.navbar-light .navbar-nav .nav-link {
    padding: 10px 38px;
}
}
@media (max-width: 1199px)
{
.navbar-light .navbar-nav .nav-link {
    font-size: 20px;
    padding: 10px 29px;
}
}
@media (max-width: 991px)
{
.navbar-light .navbar-nav .nav-link {
    font-size: 16px;
    padding: 18px 16px 17px;
}
div#audioTab1 audio {
    width: 100%;
}
}
@media (max-width: 768px)
{
.trash1,.trash2,.trash3 {
    width: 21px !important;
   
}

}
</style>
 <?php
      if(($_SESSION['id'] != $id))
       {
      ?>
  <script async defer
    src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAvBOhL9PnQqc6UJ3Q8HIui6At1rgn79zs&callback=initMap">
    </script>
    <?php
       }
       ?>
     <?php
      if(($_SESSION['id'] == $id))
       {
      ?>
 <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAvBOhL9PnQqc6UJ3Q8HIui6At1rgn79zs&sensor=false">
</script>
<?php
}
?>
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js">
</script>
  <script type="text/javascript"> 
    var map;
    var marker;
    var myLatlng = new google.maps.LatLng(0.569525,34.558376);
    var geocoder = new google.maps.Geocoder();
    var infowindow = new google.maps.InfoWindow();
    function initialize(){
    var mapOptions = {
    zoom: 18,
    center: myLatlng,
    mapTypeId: google.maps.MapTypeId.ROADMAP
    };
    
    map = new google.maps.Map(document.getElementById("map1"), mapOptions);
   
    marker = new google.maps.Marker({
    map: map,
    position: myLatlng,
    draggable: true 
    }); 
    
    geocoder.geocode({'latLng': myLatlng }, function(results, status) {
    if (status == google.maps.GeocoderStatus.OK) {
    if (results[0]) {
    $('#latitude,#longitude').show();
    $('#addrs').val(results[0].formatted_address);
    $('#latitude').val(marker.getPosition().lat());
    $('#longitude').val(marker.getPosition().lng());
    infowindow.setContent(results[0].formatted_address);
    infowindow.open(map, marker);
    }
    }
    });
    
    google.maps.event.addListener(marker, 'dragend', function() {
    
    geocoder.geocode({'latLng': marker.getPosition()}, function(results, status) {
    if (status == google.maps.GeocoderStatus.OK) {
    if (results[0]) {
    $('#addrs').val(results[0].formatted_address);
    
    $('#addrs').attr("value", results[0].formatted_address);
    $('#latitude').val(marker.getPosition().lat());
    $('#longitude').val(marker.getPosition().lng());
    infowindow.setContent(results[0].formatted_address);
    infowindow.open(map, marker);
    }
    }
    });
    });
    
    }
    google.maps.event.addDomListener(window, 'load', initialize);
</script>
  <script type="text/javascript"> 
    var map1;
    var marker1;
    var myLatlng1 = new google.maps.LatLng(0.569525,34.558376);
    var geocoder1 = new google.maps.Geocoder();
    var infowindow1= new google.maps.InfoWindow();
    function initialize(){
    var mapOptions1 = {
    zoom: 18,
    center: myLatlng1,
    mapTypeId: google.maps.MapTypeId.ROADMAP
    };
    
    map1 = new google.maps.Map(document.getElementById("map2"), mapOptions);
   
    marker = new google.maps.Marker({
    map: map1,
    position: myLatlng,
    draggable: true 
    }); 
    
    geocoder.geocode({'latLng': myLatlng }, function(results, status) {
    if (status == google.maps.GeocoderStatus.OK) {
    if (results[0]) {
    $('#latitude,#longitude').show();
    $('#addrs').val(results[0].formatted_address);
    $('#latitude').val(marker.getPosition().lat());
    $('#longitude').val(marker.getPosition().lng());
    infowindow.setContent(results[0].formatted_address);
    infowindow.open(map, marker);
    }
    }
    });
    
    google.maps.event.addListener(marker, 'dragend', function() {
    
    geocoder.geocode({'latLng': marker.getPosition()}, function(results, status) {
    if (status == google.maps.GeocoderStatus.OK) {
    if (results[0]) {
    $('#addrs').val(results[0].formatted_address);
    
    $('#addrs').attr("value", results[0].formatted_address);
    $('#latitude').val(marker.getPosition().lat());
    $('#longitude').val(marker.getPosition().lng());
    infowindow.setContent(results[0].formatted_address);
    infowindow.open(map, marker);
    }
    }
    });
    });
    
    }
    google.maps.event.addDomListener(window, 'load', initialize);
</script>

 <script>
      function initMap() {
        var map = new google.maps.Map(document.getElementById('map'), {
          zoom: 8,
          center: {lat: -34.397, lng: 150.644}
        });
        var geocoder = new google.maps.Geocoder();

        document.getElementById('submit').addEventListener('click', function() {
          geocodeAddress(geocoder, map);
        });
      }

      function geocodeAddress(geocoder, resultsMap) {
        var address = document.getElementById('address').value;
        geocoder.geocode({'address': address}, function(results, status) {
          if (status === 'OK') {
            resultsMap.setCenter(results[0].geometry.location);
            var marker = new google.maps.Marker({
              map: resultsMap,
              position: results[0].geometry.location
            });
          } else {
            alert('Geocode was not successful for the following reason: ' + status);
          }
        });
      }
    </script>

<!-- javascript libraries -->

         
<script src="<?php echo get_stylesheet_directory_uri();?>/js/jquery-3.2.1.min.js" type="text/javascript"></script>
<script src="<?php echo get_stylesheet_directory_uri();?>/js/bootstrap.min.js" type="text/javascript"></script>
<script src="<?php echo get_stylesheet_directory_uri();?>/js/owl.carousel.min.js"></script>  
<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
<script type="text/javascript">
  $('.navbar-nav li').addClass('nav-item');
  $('.navbar-nav li a').addClass('nav-link');

  
</script>


 <script>
     $(".ylw_btn").click(function() {
 
  $(".notice_main").css("display", "none");
     $(".showhid").css("display", "block");
  });

  function get_msg(id)
 {
   
  $(".abutsec").css("display", "none");
  $(".abt").css("display", "none");
  $(".abtdescription").css("display", "block");
  $('.abtdescription').append('<input type="hidden" name="id" value="' +  id + '">');   
  }
   $(".saveabt").click(function() {
  $(".abt").css("display", "block");
  $(".abutsec").css("display", "block");
  $(".abtdescription").css("display", "none");
  
     
  });
  
  
  
  function memorialtext(id)
 {
   
$(".memordesc").css("display", "none");
  $(".memorialtext").css("display", "none");
  $(".memorialdescri").css("display", "block");
  $('.memorialdescri').append('<input type="hidden" name="memorialid" value="' +  id + '">');   
  }
   $(".memorialsave").click(function() {
  $(".memordesc").css("display", "block");
  $(".memorialtext").css("display", "block");
  $(".memorialdescri").css("display", "none");
  
     
  });

 </script>
  
<script type="text/javascript">
  
  $( ".lea_tri" ).click(function() {
     $( ".main_tri").hide();
     $( ".leave_tribute").show();
   
  });
  
   $( ".lea_not" ).click(function() {
     $( ".main_tri").hide();
     $( ".note").show();
  });
 $( ".lvnot" ).click(function() {
     $( ".main_tri").show();
     $( ".note").hide();
      
  });
  $( ".picture_class" ).click(function() {
     $(".tribute_main").find(".tab-content").find(".tab-pane_class.active").removeClass("active");
     $(".gal_img").addClass("active show");
  });
  
  $( ".sto" ).click(function() {
     $(".tribute_main").find(".tab-content").find(".tab-pane_class.active").removeClass("active");
     $(".tribt").addClass("active show");
  });
  $( ".born" ).click(function() {
     $(".tribute_main").find(".tab-content").find(".tab-pane_class.active").removeClass("active");
     $(".tab_notice").addClass("active show");
  });
</script>
 <script>
  $('#foot').on('submit', function(e){
var str = $( "#foot" ).serialize();
       e.preventDefault();
         $.ajax({
             url:'<?php echo get_site_url().'/templateabout.php'; ?>',
             type:"post",
             data: str,
              success: function(data){
                 
                 jQuery(".abutsec").html(data);
           }
         });
    });  
    
    
</script>
 <script>
  $('#memorial1').on('submit', function(event){
     
var str = $( "#memorial1" ).serialize();
       event.preventDefault();
         $.ajax({
             url:'<?php echo get_site_url().'/memorialtext.php'; ?>',
             type:"post",
             data: str,
              success: function(data){
                 
                 jQuery(".memordesc").html("");
                 jQuery(".memordesc").html(data);
                
           }
         });
    });  
    
    
</script>
<script>
  $('#memorial').on('submit', function(event){
     
var str = $( "#memorial" ).serialize();
       event.preventDefault();
         $.ajax({
             url:'<?php echo get_site_url().'/memorialtext.php'; ?>',
             type:"post",
             data: str,
              success: function(data){
                 
                 jQuery(".memordesc").html("");
                 jQuery(".memordesc").html(data);
                
           }
         });
    });  
    
    
</script>
 <script>
  $('#foot1').on('submit', function(e){
var str = $( "#foot1" ).serialize();
       e.preventDefault();
         $.ajax({
             url:'<?php echo get_site_url().'/templateabout.php'; ?>',
             type:"post",
             data: str,
            success: function(data){
           jQuery(".abutsec").html(data);
           }
         });
    });  
    
$('.notedata').on('submit', function(e){
var str2 = $( ".notedata" ).serialize();
       e.preventDefault();
         $.ajax({
             url:'<?php echo get_site_url().'/leavenote.php'; ?>',
             type:"post",
             data: str2,
            success: function(data){
                swal(" ", "Leaved a Note", "success");   
               jQuery(".appnot").html(data);
           $('.notxt').val('');
          /* jQuery(".abutsec").html(data);*/
           }
         });
    });
    
</script>
<script>
function tri(tribute,type) {
   $('.result').html('<input type="hidden" name="tribure_type" value="' +  type + '">');
   }
   
function image(id)
{
    
     
        
  swal({
  title: "Are you sure?",
  text: "Once deleted, you will not be able to recover this Tribute again!",
  icon: "warning",
  buttons: true,
  dangerMode: true,
})
.then((willDelete) => {
  if (willDelete) {
     jQuery.ajax({
        type: "POST",
        url: "<?php echo get_site_url().'/deletedtribute.php'; ?>",
        data:{'id': id},
        success: function(data)
        {
       
        
        jQuery(".main_tri").html('');
          jQuery(".main_tri").html(data);
           window.location.reload();
        }
        });
    swal("Poof! Your Tribute has been deleted!", {
      icon: "success",
    });
  } else {
    swal("Your Tribute is safe!");
  }
});       
        
}
function mediadelticon(id)
{
   swal({
  title: "Are you sure?",
  text: "Once deleted, you will not be able to recover this imaginary file!",
  icon: "warning",
  buttons: true,
  dangerMode: true,
})
.then((willDelete) => {
  if (willDelete) {
       jQuery.ajax({
        type: "POST",
        url: "<?php echo get_site_url().'/deletedmedia.php'; ?>",
        data:{'id': id},
        success: function(data)
        {
        
       /* alert('Tribute Deleted Sucessfully')*/
        $(".photoapp").html('');
          $(".photoapp").html(data);
        /* $("#myModal7").modal('show');*/
        /* window.location.reload();*/
        
        }
        }); 
    swal("Poof! Your imaginary file has been deleted!", {
      icon: "success",
    });
  } else {
    swal("Your imaginary file is safe!");
  }
});
}
function mediadeltvideo(id)
{
  swal({
  title: "Are you sure?",
  text: "Once deleted, you will not be able to recover this Video file!",
  icon: "warning",
  buttons: true,
  dangerMode: true,
})
.then((willDelete) => {
  if (willDelete) {
       jQuery.ajax({
        type: "POST",
        url: "<?php echo get_site_url().'/deletedvideo.php'; ?>",
        data:{'id': id},
        success: function(data)
        {
        $(".videoapp").html('');
          $(".videoapp").html(data);
        
        }
        }); 
    swal("Poof! Your Video file has been deleted!", {
      icon: "success",
    });
  } else {
    swal("Your Video file is safe!");
  }
});
}
function mediadeltaudio(id)
{
  swal({
  title: "Are you sure?",
  text: "Once deleted, you will not be able to recover this Audio file!",
  icon: "warning",
  buttons: true,
  dangerMode: true,
})
.then((willDelete) => {
  if (willDelete) {
       jQuery.ajax({
        type: "POST",
        url: "<?php echo get_site_url().'/deletedaudio.php'; ?>",
        data:{'id': id},
        success: function(data)
        {
        $(".audioapp").html('');
          $(".audioapp").html(data);
        
        }
        }); 
    swal("Poof! Your Audio file has been deleted!", {
      icon: "success",
    });
  } else {
    swal("Your Audio file is safe!");
  }
});
}
</script>
<script>
function light(id,name,lname,type) {
    jQuery.ajax({
        type: "POST",
        url: "<?php echo get_site_url().'/addtributecandle.php'; ?>",
        data:{'type': type,'id': id,'name': name,'lname': lname},
        success: function(data)
        {
              swal(" ", "Light a Candle", "success");
           jQuery(".canlig").html(data);
          /* jQuery("#test").html('');
          jQuery("#test").html(data);
           
          jQuery("#testlast").html(data);*/
         /* console.log(data);*/
        }
        });
   
}
</script>
<script>
    window.fbAsyncInit = function(){
FB.init({
    appId: '361647561249013', status: true, cookie: true, xfbml: true }); 
};
(function(d, debug){var js, id = 'facebook-jssdk', ref = d.getElementsByTagName('script')[0];
    if(d.getElementById(id)) {return;}
    js = d.createElement('script'); js.id = id; 
    js.async = true;js.src = "//connect.facebook.net/en_US/all" + (debug ? "/debug" : "") + ".js";
    ref.parentNode.insertBefore(js, ref);}(document, /*debug*/ false));
function postToFeed(title, desc, url){
var obj = {method: 'feed',link: url,name: title,description: desc};
function callback(response){}
FB.ui(obj, callback);
}

$('.btnShare').click(function(){
elem = $(this);
postToFeed(elem.data('title'), elem.data('desc'), elem.prop('href'));

return false;
});
</script>

    <script type='text/javascript'>
function preview_image(event) 
{
 var reader = new FileReader();
 reader.onload = function()
 {
  var output = document.getElementById('output_image');
  output.src = reader.result;
   var output1 = document.getElementById('output_image1');
  output1.src = reader.result;
  
/*   var output2 = document.getElementById('videodi');
  output2.src ='http://www.baltiazadari.com/images/videothumbnail.jpg' ;
   var output3 = document.getElementById('videodi1');
  output3.src ='http://www.baltiazadari.com/images/videothumbnail.jpg' ;*/
 }

 reader.readAsDataURL(event.target.files[0]);
}
</script>

   <script type='text/javascript'>
function preview_image1(event) 
{
 var reader = new FileReader();
 reader.onload = function()
 {
  var output = document.getElementById('profilepre');
  output.src = reader.result;
   var output1 = document.getElementById('profilepre1');
  output1.src = reader.result;
/*   var output2 = document.getElementById('videodi');
  output2.src ='http://www.baltiazadari.com/images/videothumbnail.jpg' ;
   var output3 = document.getElementById('videodi1');
  output3.src ='http://www.baltiazadari.com/images/videothumbnail.jpg' ;*/
 }

 reader.readAsDataURL(event.target.files[0]);
}
</script>

<script>
$("#imgfrm").on('submit',(function(e) {
    e.preventDefault();
    $(".loader").css("display","block");
     $(".tribute_main ").addClass("hovload");
     var formData = new FormData(this);   
   
    $.ajax({
        url: "<?php echo get_site_url().'/upload_images.php'; ?>",
        data: formData, 
        contentType: false,        
        cache: false,             
        processData:false,
        type: 'post',
        success: function(data){
          /* alert(data);*/
             $(".loader").css("display","none");
              $(".photoapp").html('');
          $(".photoapp").html(data);
          $('#output_image').attr('src', '');
          $(".tribute_main ").removeClass("hovload");
      /*location.reload();*/
     /* $('.gal_box').load(document.URL +  ' .gal_box');*/
        }
    });
                        
}));
$("#videofrm").on('submit',(function(e) {
    e.preventDefault();
    $(".loader").css("display","block");
    $(".tribute_main ").addClass("hovload");
     var formData = new FormData(this);   
   
    $.ajax({
        url: "<?php echo get_site_url().'/upload_video.php'; ?>",
        data: formData, 
        contentType: false,        
        cache: false,             
        processData:false,
        type: 'post',
        success: function(data){
          $(".loader").css("display","none");
              $(".videoapp").html('');
          $(".videoapp").html(data);
          $(".tribute_main ").removeClass("hovload");
           
        }
    });
                        
}));
$("#audiofrm").on('submit',(function(e) {
  
    e.preventDefault();
    $(".loader").css("display","block");
     $(".tribute_main ").addClass("hovload");
     var formData = new FormData(this);   
   
    $.ajax({
        url: "<?php echo get_site_url().'/upload_audio.php'; ?>",
        data: formData, 
        contentType: false,        
        cache: false,             
        processData:false,
        type: 'post',
        success: function(data){
           
          $(".loader").css("display","none");
              $(".audioapp").html('');
          $(".audioapp").html(data);
          $(".tribute_main ").removeClass("hovload");
        }
    });
                        
}));
$("#imgfrm1").on('submit',(function(e) {
    e.preventDefault();
    $(".loader").css("display","block");
     var formData = new FormData(this);   
  
    $.ajax({
        url: "<?php echo get_site_url().'/upload_images.php'; ?>",
        data: formData, 
        contentType: false,        
        cache: false,             
        processData:false,
        type: 'post',
        success: function(data){
            $(".loader").css("display","none");
                    $(".photoapp").html('');
          $(".photoapp").html(data);
      /* $( "#menu2" ).load(window.location.href + " #menu2" );*/
        }
    });
                        
}));
</script>
<script>
    $(document).on("change", ".pho", function(evt) {
   var $source = $('#video_here');
   
  $source[0].src = URL.createObjectURL(this.files[0]);
  $source.parent()[0].load();
});

    $(document).on("change", ".pho", function(evt) {
   var $source = $('#video_here1');
   
  $source[0].src = URL.createObjectURL(this.files[0]);
  $source.parent()[0].load();
});

$(document).on("change", ".pho", function(evt) {
   
  var $source = $('#audio_here');
  $source[0].src = URL.createObjectURL(this.files[0]);
  $source.parent()[0].load();
});
$(document).on("change", ".pho", function(evt) {
  var $source = $('#audio_here1');
  $source[0].src = URL.createObjectURL(this.files[0]);
  $source.parent()[0].load();
});
/* $(".nav-link").click(function () {
      var addressValue = $(this).attr("href");
       if(addressValue == '#photoTab')
       {
         $(".pho").attr("accept", "image/*");
          
       }
       if(addressValue == '#videoTab')
       {
           $(".pho").attr("accept", "video/*");
          
       }
       if(addressValue == '#audioTab')
       {
            $(".pho").attr("accept", "audio/*");
         
       }
    });*/
</script>
<script>
/*var x = document.getElementById("myAudio"); 

function playAudio() { 
    x.play(); 
    
    $(".playvid").css("display","block")
    $(".pushvid").css("display","none")
     
} 

function pauseAudio() { 
   
    x.pause(); 
    $(".pushvid").css("display","block")
      $(".playvid").css("display","none")
} */
</script>

  <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
  <script>
  $( function() {
    $( "#funaldate" ).datepicker({
         dateFormat: 'd/m/yy'});
     $( "#furmdate" ).datepicker({
         dateFormat: 'd/m/yy'});
     $( "#burialdate" ).datepicker({
         dateFormat: 'd/m/yy'});
     
    
  } );
  
  </script>
  <script>
    var min = 01,
    max = 31,
    select = document.getElementById('days');

for (var i = min; i<=max; i++){
    var opt = document.createElement('option');
    opt.value = i;
    opt.innerHTML = i;
    select.appendChild(opt);
}

  var min = 01,
    max = 12,
    select = document.getElementById('monts');

for (var i = min; i<=max; i++){
    var opt = document.createElement('option');
    opt.value = i;
    opt.innerHTML = i;
    select.appendChild(opt);
}

  var min = 1960,
    max = 2025,
    select = document.getElementById('years');

for (var i = min; i<=max; i++){
    var opt = document.createElement('option');
    opt.value = i;
    opt.innerHTML = i;
    select.appendChild(opt);
}
select.value = new Date().getFullYear();
</script>
  <script>
    var min = 1,
    max = 31,
    select = document.getElementById('days1');

for (var i = min; i<=max; i++){
    var opt = document.createElement('option');
    opt.value = i;
    opt.innerHTML = i;
    select.appendChild(opt);
}

  var min = 1,
    max = 12,
    select = document.getElementById('monts1');

for (var i = min; i<=max; i++){
    var opt = document.createElement('option');
    opt.value = i;
    opt.innerHTML = i;
    select.appendChild(opt);
}

  var min = 1960,
    max = 2025,
    select = document.getElementById('years1');

for (var i = min; i<=max; i++){
    var opt = document.createElement('option');
    opt.value = i;
    opt.innerHTML = i;
    select.appendChild(opt);
}
select.value = new Date().getFullYear();
</script>
 <script>
    var min = 1,
    max = 31,
    select = document.getElementById('dathdate');

for (var i = min; i<=max; i++){
    var opt = document.createElement('option');
    opt.value = i;
    opt.innerHTML = i;
    select.appendChild(opt);
}

  var min = 1,
    max = 12,
    select = document.getElementById('dathmonth');

for (var i = min; i<=max; i++){
    var opt = document.createElement('option');
    opt.value = i;
    opt.innerHTML = i;
    select.appendChild(opt);
}

  var min = 1960,
    max = 2025,
    select = document.getElementById('deathyear');

for (var i = min; i<=max; i++){
    var opt = document.createElement('option');
    opt.value = i;
    opt.innerHTML = i;
    select.appendChild(opt);
}
select.value = new Date().getFullYear();
</script>
 <script>
    var min = 1,
    max = 31,
    select = document.getElementById('dathdate1');

for (var i = min; i<=max; i++){
    var opt = document.createElement('option');
    opt.value = i;
    opt.innerHTML = i;
    select.appendChild(opt);
}

  var min = 1,
    max = 12,
    select = document.getElementById('dathmonth1');

for (var i = min; i<=max; i++){
    var opt = document.createElement('option');
    opt.value = i;
    opt.innerHTML = i;
    select.appendChild(opt);
}

  var min = 1960,
    max = 2025,
    select = document.getElementById('deathyear1');

for (var i = min; i<=max; i++){
    var opt = document.createElement('option');
    opt.value = i;
    opt.innerHTML = i;
    select.appendChild(opt);
}
select.value = new Date().getFullYear();
</script>
<!--  <script type="text/javascript" src="http://maps.google.com/maps/api/js?sensor=false&key=AIzaSyAvBOhL9PnQqc6UJ3Q8HIui6At1rgn79zs"></script>
<script type="text/javascript">

var geocoder = new google.maps.Geocoder();
var address = "new york";

geocoder.geocode( { 'address': address}, function(results, status) {

if (status == google.maps.GeocoderStatus.OK) {
    var latitude = results[0].geometry.location.latitude;
    var longitude = results[0].geometry.location.longitude;
    alert(latitude);
    } 
}); 
</script>-->
 <script src="//cdnjs.cloudflare.com/ajax/libs/timepicker/1.3.5/jquery.timepicker.min.js"></script>
 <script>
 $(document).ready(function(){
    $('input.timepicker').timepicker({});
});

 $(document).ready(function(){
        if($('#video_here[src=""]'))
        {
             $(".videota").css("display","none");
        }
        if($('#video_here:not([src=""])'))
        {
            $('.videota').show();
        }
    });
</script>
 <script>
var x = document.getElementById("myAudio"); 

function playAudio() { 
    x.play(); 
    
    $(".playvid").css("display","block")
    $(".pushvid").css("display","none")
     
} 

function pauseAudio() { 
   
    x.pause(); 
    $(".pushvid").css("display","block")
      $(".playvid").css("display","none")
} 
</script>
 
</body>
</html>