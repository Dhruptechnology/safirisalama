<?php
include 'wp-config.php';
if((!empty($_POST)) || (!empty($_FILES)))
{
   $add=$_POST['nameper'];
 
  $orderdate1 = explode(' ', $add);
    $fname = $orderdate1[0];
    $lname   = $orderdate1[1];
    
    
    
}

      $msg1 = $wpdb->get_results("SELECT * FROM `wp_tribute` WHERE `fname` LIKE '%$fname%' or `lname` LIKE '% $lname%'");
      /*echo $wpdb->last_query;*/
                            foreach($msg1 as $val1)
                            {
                                 $fullbirthdate= $val1->fullbirthdate;
                                 $orderdate = explode('/', $fullbirthdate);
                                   $year  = $orderdate[2];
                                    $fulldeathdate= $val1->fulldeathdate;
                                     $orderdate1 = explode('/', $fulldeathdate);
                                    $year1  = $orderdate1[2];
                                
                               
                          $datefull= $val1->created_by;
                          $date=date_create($datefull);
                          $bir= date_format($date,"d/m/Y");
                          
                          $content = $val1->about_description; 
                           $con=substr($content,0,150);
                                
                                ?>
                                <div class="search_box-new" >
   <div class="row">
                            <div class="col-md-2 col-3">
                                <img class="img-fluid w-100" alt="img" src="<?php echo get_site_url(); ?>/wp-content/uploads/<?php echo $val1->profileimg; ?>">
                            </div>
                            <div class="col-md-10 col-9 pad_mob_left0">
                                <h4><?php echo $val1->fname; ?> <?php echo $val1->lname; ?> (<?php echo $year1 ?>-<?php echo $year ?>)<span class="pull-right d-none d-md-block">Memorial created by <?php echo $val1->accountname; ?> <?php echo $val1->accountlname; ?> on <?php echo $bir; ?></span></h4>
                                <p><a href=""><?php echo $val1->webaddress;  ?></a></p>
                                <span class="pull-right d-block d-md-none">Memorial created by <?php echo $val1->accountname; ?> <?php echo $val1->accountlname; ?> on <?php echo $bir ?></span>
                                <div class="d-none d-md-block">
                                    <p class="new_text-search "><?php echo $con;  ?>...</p>
                                    <a href="<?php echo  $val1->webaddress;  ?>/?id=<?php echo  $val1->id;  ?>" class="red_btn memorial_btn">VIEW MEMORIAL</a>
                                </div>
                            </div>
                            <div class="col-12 d-block d-md-none">
                                <p class="new_text-search"><?php echo $con;  ?>...</p>
                                <a href="<?php echo  $val1->webaddress;  ?>/?id=<?php echo  $val1->id;  ?>" class="red_btn memorial_btn">VIEW MEMORIAL</a>
                            </div>
                        </div>
                        </div>
                        <?php
                            }
                            ?>