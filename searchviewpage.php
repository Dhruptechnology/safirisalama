<?php
include 'wp-config.php';
if((!empty($_POST)))
{
    
   $value=$_POST['value'];

 
  
}
    if($value == 'dob')  
    {
         
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
                                               
                    }
                    else if($value == 'gender')
                    {
                        

                         $msg1 = $wpdb->get_results("SELECT * FROM `wp_tribute` where privacy ='public' order by `gender` DESC");
    
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

                            }
                            else if($value == 'fname')
                            {
                           
                            $msg1 = $wpdb->get_results("SELECT * FROM `wp_tribute` where privacy ='public' order by `fname` DESC");
    
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
                           
                            }
                             else if($value == 'lname')
                            {
                           
                            $msg1 = $wpdb->get_results("SELECT * FROM `wp_tribute` where privacy ='public' order by `lname` DESC");
    
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
                            }
                            
                            ?>