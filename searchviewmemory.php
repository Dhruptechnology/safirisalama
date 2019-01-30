<?php
include 'wp-config.php';
if((!empty($_POST)))
{
    
   $checkdata=$_POST['checkdata'];
  $order=$_POST['order'];
 
  
}
    if($checkdata == 'dob' && $order == 'desc')  
    {
        ?>
     <?php
                         $msg1 = $wpdb->get_results("SELECT * FROM `wp_tribute` where privacy ='public' order by `fullbirthdate` DESC");
    
                            foreach($msg1 as $val1)
                            {
                                $fullbirthdate= $val1->fullbirthdate;
                                 $orderdate = explode('/', $fullbirthdate);
                                   $year  = $orderdate[2];
                                    $fulldeathdate= $val1->fulldeathdate;
                                     $orderdate1 = explode('/', $fulldeathdate);
                                    $year1  = $orderdate1[2];
                                  
                                    $date=date_create($val1->created_by);
                                    $form= date_format($date,"d.m.y");
                             $themeid=$val1->themeid;
                               
                               
                                ?>
                        <div class="col-lg-3 col-md-4 pad_8">
                            <div class="mem_box">
                                <div class="media">
                                     <?php
                                    $profile= $val1->profileimg;
                                    if(empty($profile))
                                    {
                                    ?>
                                     <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/default-user.png" alt="img" class="mr-3">
                                    <?php
                                    }
                                    else
                                    {
                                   ?>
                                  <img src="<?php echo get_site_url(); ?>/wp-content/uploads/<?php echo $val1->profileimg; ?>" alt="img" class="mr-3">
                                  <?php
                                    }
                                    ?>
                                  <div class="media-body">
                                    <h4><?php echo $val1->fname; ?> <?php echo  $val1->lname; ?></h4>
                                    <p><?php echo $year ; ?>-<?php echo $year1 ; ?></p>
                                  </div>
                                </div>
                                 <a href="<?php echo  $val1->webaddress;  ?>/?id=<?php echo  $val1->id;  ?>" class="memorial_link" onclick="visitor(<?php echo  $val1->id;  ?>,<?php echo  $val1->visitcount;  ?>)">view memorial</a>
                                <!--<a href="#" class="memorial_link">View Memorial</a>-->
                            </div>
                        </div>
                       <?php
                            }
                            ?>
                     <?php                       
                    }
                    else if($checkdata == 'dob' && $order == 'asc')
                    {
   
                         $msg1 = $wpdb->get_results("SELECT * FROM `wp_tribute` where privacy ='public' order by `fullbirthdate` ASC");
    
                            foreach($msg1 as $val1)
                            {
                                $fullbirthdate= $val1->fullbirthdate;
                                 $orderdate = explode('/', $fullbirthdate);
                                   $year  = $orderdate[2];
                                    $fulldeathdate= $val1->fulldeathdate;
                                     $orderdate1 = explode('/', $fulldeathdate);
                                    $year1  = $orderdate1[2];
                                  
                                    $date=date_create($val1->created_by);
                                    $form= date_format($date,"d.m.y");
                             $themeid=$val1->themeid;
                               
                               
                                ?>
                        <div class="col-lg-3 col-md-4 pad_8">
                            <div class="mem_box">
                                <div class="media">
                                     <?php
                                    $profile= $val1->profileimg;
                                    if(empty($profile))
                                    {
                                    ?>
                                     <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/default-user.png" alt="img" class="mr-3">
                                    <?php
                                    }
                                    else
                                    {
                                   ?>
                                  <img src="<?php echo get_site_url(); ?>/wp-content/uploads/<?php echo $val1->profileimg; ?>" alt="img" class="mr-3">
                                  <?php
                                    }
                                    ?>
                                  <div class="media-body">
                                    <h4><?php echo $val1->fname; ?> <?php echo  $val1->lname; ?></h4>
                                    <p><?php echo $year ; ?>-<?php echo $year1 ; ?></p>
                                  </div>
                                </div>
                                 <a href="<?php echo  $val1->webaddress;  ?>/?id=<?php echo  $val1->id;  ?>" class="memorial_link" onclick="visitor(<?php echo  $val1->id;  ?>,<?php echo  $val1->visitcount;  ?>)">view memorial</a>
                                <!--<a href="#" class="memorial_link">View Memorial</a>-->
                            </div>
                        </div>
                       <?php
                            }
                            ?>
                     <?php                       
                    }
                     else if($checkdata == 'gender' && $order == 'f')
                    {
   
                         $msg1 = $wpdb->get_results("SELECT * FROM `wp_tribute` where privacy ='public' and gender = 'female'");
    
                            foreach($msg1 as $val1)
                            {
                                $fullbirthdate= $val1->fullbirthdate;
                                 $orderdate = explode('/', $fullbirthdate);
                                   $year  = $orderdate[2];
                                    $fulldeathdate= $val1->fulldeathdate;
                                     $orderdate1 = explode('/', $fulldeathdate);
                                    $year1  = $orderdate1[2];
                                  
                                    $date=date_create($val1->created_by);
                                    $form= date_format($date,"d.m.y");
                             $themeid=$val1->themeid;
                               
                               
                                ?>
                        <div class="col-lg-3 col-md-4 pad_8">
                            <div class="mem_box">
                                <div class="media">
                                     <?php
                                    $profile= $val1->profileimg;
                                    if(empty($profile))
                                    {
                                    ?>
                                     <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/default-user.png" alt="img" class="mr-3">
                                    <?php
                                    }
                                    else
                                    {
                                   ?>
                                  <img src="<?php echo get_site_url(); ?>/wp-content/uploads/<?php echo $val1->profileimg; ?>" alt="img" class="mr-3">
                                  <?php
                                    }
                                    ?>
                                  <div class="media-body">
                                    <h4><?php echo $val1->fname; ?> <?php echo  $val1->lname; ?></h4>
                                    <p><?php echo $year ; ?>-<?php echo $year1 ; ?></p>
                                  </div>
                                </div>
                                 <a href="<?php echo  $val1->webaddress;  ?>/?id=<?php echo  $val1->id;  ?>" class="memorial_link" onclick="visitor(<?php echo  $val1->id;  ?>,<?php echo  $val1->visitcount;  ?>)">view memorial</a>
                                <!--<a href="#" class="memorial_link">View Memorial</a>-->
                            </div>
                        </div>
                       <?php
                            }
                            ?>
                     <?php                       
                    }
                     else if($checkdata == 'gender' && $order == 'm')
                    {
   
                         $msg1 = $wpdb->get_results("SELECT * FROM `wp_tribute` where privacy ='public' and gender = 'male'");
    
                            foreach($msg1 as $val1)
                            {
                                $fullbirthdate= $val1->fullbirthdate;
                                 $orderdate = explode('/', $fullbirthdate);
                                   $year  = $orderdate[2];
                                    $fulldeathdate= $val1->fulldeathdate;
                                     $orderdate1 = explode('/', $fulldeathdate);
                                    $year1  = $orderdate1[2];
                                  
                                    $date=date_create($val1->created_by);
                                    $form= date_format($date,"d.m.y");
                             $themeid=$val1->themeid;
                               
                               
                                ?>
                        <div class="col-lg-3 col-md-4 pad_8">
                            <div class="mem_box">
                                <div class="media">
                                     <?php
                                    $profile= $val1->profileimg;
                                    if(empty($profile))
                                    {
                                    ?>
                                     <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/default-user.png" alt="img" class="mr-3">
                                    <?php
                                    }
                                    else
                                    {
                                   ?>
                                  <img src="<?php echo get_site_url(); ?>/wp-content/uploads/<?php echo $val1->profileimg; ?>" alt="img" class="mr-3">
                                  <?php
                                    }
                                    ?>
                                  <div class="media-body">
                                    <h4><?php echo $val1->fname; ?> <?php echo  $val1->lname; ?></h4>
                                    <p><?php echo $year ; ?>-<?php echo $year1 ; ?></p>
                                  </div>
                                </div>
                                 <a href="<?php echo  $val1->webaddress;  ?>/?id=<?php echo  $val1->id;  ?>" class="memorial_link" onclick="visitor(<?php echo  $val1->id;  ?>,<?php echo  $val1->visitcount;  ?>)">view memorial</a>
                                <!--<a href="#" class="memorial_link">View Memorial</a>-->
                            </div>
                        </div>
                       <?php
                            }
                            ?>
                             <?php                       
                            }
                            else if($checkdata == 'fname' && $order == 'asc')
                            {
   
                         $msg1 = $wpdb->get_results("SELECT * FROM `wp_tribute` where privacy ='public' order by `fname` ASC");
    
                            foreach($msg1 as $val1)
                            {
                                $fullbirthdate= $val1->fullbirthdate;
                                 $orderdate = explode('/', $fullbirthdate);
                                   $year  = $orderdate[2];
                                    $fulldeathdate= $val1->fulldeathdate;
                                     $orderdate1 = explode('/', $fulldeathdate);
                                    $year1  = $orderdate1[2];
                                  
                                    $date=date_create($val1->created_by);
                                    $form= date_format($date,"d.m.y");
                             $themeid=$val1->themeid;
                               
                               
                                ?>
                        <div class="col-lg-3 col-md-4 pad_8">
                            <div class="mem_box">
                                <div class="media">
                                     <?php
                                    $profile= $val1->profileimg;
                                    if(empty($profile))
                                    {
                                    ?>
                                     <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/default-user.png" alt="img" class="mr-3">
                                    <?php
                                    }
                                    else
                                    {
                                   ?>
                                  <img src="<?php echo get_site_url(); ?>/wp-content/uploads/<?php echo $val1->profileimg; ?>" alt="img" class="mr-3">
                                  <?php
                                    }
                                    ?>
                                  <div class="media-body">
                                    <h4><?php echo $val1->fname; ?> <?php echo  $val1->lname; ?></h4>
                                    <p><?php echo $year ; ?>-<?php echo $year1 ; ?></p>
                                  </div>
                                </div>
                                 <a href="<?php echo  $val1->webaddress;  ?>/?id=<?php echo  $val1->id;  ?>" class="memorial_link" onclick="visitor(<?php echo  $val1->id;  ?>,<?php echo  $val1->visitcount;  ?>)">view memorial</a>
                                <!--<a href="#" class="memorial_link">View Memorial</a>-->
                            </div>
                        </div>
                       <?php
                            }
                            ?>
                             <?php                       
                            }
                             else if($checkdata == 'fname' && $order == 'desc')
                            {
   
                         $msg1 = $wpdb->get_results("SELECT * FROM `wp_tribute` where privacy ='public' order by `fname` desc");
    
                            foreach($msg1 as $val1)
                            {
                                $fullbirthdate= $val1->fullbirthdate;
                                 $orderdate = explode('/', $fullbirthdate);
                                   $year  = $orderdate[2];
                                    $fulldeathdate= $val1->fulldeathdate;
                                     $orderdate1 = explode('/', $fulldeathdate);
                                    $year1  = $orderdate1[2];
                                  
                                    $date=date_create($val1->created_by);
                                    $form= date_format($date,"d.m.y");
                             $themeid=$val1->themeid;
                               
                               
                                ?>
                        <div class="col-lg-3 col-md-4 pad_8">
                            <div class="mem_box">
                                <div class="media">
                                     <?php
                                    $profile= $val1->profileimg;
                                    if(empty($profile))
                                    {
                                    ?>
                                     <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/default-user.png" alt="img" class="mr-3">
                                    <?php
                                    }
                                    else
                                    {
                                   ?>
                                  <img src="<?php echo get_site_url(); ?>/wp-content/uploads/<?php echo $val1->profileimg; ?>" alt="img" class="mr-3">
                                  <?php
                                    }
                                    ?>
                                  <div class="media-body">
                                    <h4><?php echo $val1->fname; ?> <?php echo  $val1->lname; ?></h4>
                                    <p><?php echo $year ; ?>-<?php echo $year1 ; ?></p>
                                  </div>
                                </div>
                                 <a href="<?php echo  $val1->webaddress;  ?>/?id=<?php echo  $val1->id;  ?>" class="memorial_link" onclick="visitor(<?php echo  $val1->id;  ?>,<?php echo  $val1->visitcount;  ?>)">view memorial</a>
                                <!--<a href="#" class="memorial_link">View Memorial</a>-->
                            </div>
                        </div>
                       <?php
                            }
                            ?>
                             <?php                       
                            }
                            else if($checkdata == 'lname' && $order == 'asc')
                            {
   
                         $msg1 = $wpdb->get_results("SELECT * FROM `wp_tribute` where privacy ='public' order by `lname` asc");
    
                            foreach($msg1 as $val1)
                            {
                                $fullbirthdate= $val1->fullbirthdate;
                                 $orderdate = explode('/', $fullbirthdate);
                                   $year  = $orderdate[2];
                                    $fulldeathdate= $val1->fulldeathdate;
                                     $orderdate1 = explode('/', $fulldeathdate);
                                    $year1  = $orderdate1[2];
                                  
                                    $date=date_create($val1->created_by);
                                    $form= date_format($date,"d.m.y");
                             $themeid=$val1->themeid;
                               
                               
                                ?>
                        <div class="col-lg-3 col-md-4 pad_8">
                            <div class="mem_box">
                                <div class="media">
                                     <?php
                                    $profile= $val1->profileimg;
                                    if(empty($profile))
                                    {
                                    ?>
                                     <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/default-user.png" alt="img" class="mr-3">
                                    <?php
                                    }
                                    else
                                    {
                                   ?>
                                  <img src="<?php echo get_site_url(); ?>/wp-content/uploads/<?php echo $val1->profileimg; ?>" alt="img" class="mr-3">
                                  <?php
                                    }
                                    ?>
                                  <div class="media-body">
                                    <h4><?php echo $val1->fname; ?> <?php echo  $val1->lname; ?></h4>
                                    <p><?php echo $year ; ?>-<?php echo $year1 ; ?></p>
                                  </div>
                                </div>
                                 <a href="<?php echo  $val1->webaddress;  ?>/?id=<?php echo  $val1->id;  ?>" class="memorial_link" onclick="visitor(<?php echo  $val1->id;  ?>,<?php echo  $val1->visitcount;  ?>)">view memorial</a>
                                <!--<a href="#" class="memorial_link">View Memorial</a>-->
                            </div>
                        </div>
                       <?php
                            }
                            ?>
                             <?php                       
                            }
                             else if($checkdata == 'lname' && $order == 'desc')
                            {
   
                         $msg1 = $wpdb->get_results("SELECT * FROM `wp_tribute` where privacy ='public' order by `lname` desc");
    
                            foreach($msg1 as $val1)
                            {
                                $fullbirthdate= $val1->fullbirthdate;
                                 $orderdate = explode('/', $fullbirthdate);
                                   $year  = $orderdate[2];
                                    $fulldeathdate= $val1->fulldeathdate;
                                     $orderdate1 = explode('/', $fulldeathdate);
                                    $year1  = $orderdate1[2];
                                  
                                    $date=date_create($val1->created_by);
                                    $form= date_format($date,"d.m.y");
                             $themeid=$val1->themeid;
                               
                               
                                ?>
                        <div class="col-lg-3 col-md-4 pad_8">
                            <div class="mem_box">
                                <div class="media">
                                     <?php
                                    $profile= $val1->profileimg;
                                    if(empty($profile))
                                    {
                                    ?>
                                     <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/default-user.png" alt="img" class="mr-3">
                                    <?php
                                    }
                                    else
                                    {
                                   ?>
                                  <img src="<?php echo get_site_url(); ?>/wp-content/uploads/<?php echo $val1->profileimg; ?>" alt="img" class="mr-3">
                                  <?php
                                    }
                                    ?>
                                  <div class="media-body">
                                    <h4><?php echo $val1->fname; ?> <?php echo  $val1->lname; ?></h4>
                                    <p><?php echo $year ; ?>-<?php echo $year1 ; ?></p>
                                  </div>
                                </div>
                                 <a href="<?php echo  $val1->webaddress;  ?>/?id=<?php echo  $val1->id;  ?>" class="memorial_link" onclick="visitor(<?php echo  $val1->id;  ?>,<?php echo  $val1->visitcount;  ?>)">view memorial</a>
                                <!--<a href="#" class="memorial_link">View Memorial</a>-->
                            </div>
                        </div>
                       <?php
                            }
                            ?>
 <?php                       
}