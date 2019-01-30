<?php
include 'wp-config.php';
if((!empty($_POST)) || (!empty($_FILES)))
{
   $type=$_POST['type'];
   $id=$_POST['id'];
   $name=$_POST['name'];
   $lname=$_POST['lname'];

}
$insert = $wpdb->insert( 'wp_trubutenote',
  array('userid' =>$id,'tributeaction' =>$type,'trnfname' =>$name,'trlname' =>$lname
        
       ), //data
                array('%s','%s') //data format     
        );
       /*echo $wpdb->last_query;*/
      ?>
      
      <?php
                       
                   $msg1 = $wpdb->get_results("SELECT * FROM `wp_trubutenote` join wp_tribute where wp_tribute.id=wp_trubutenote.`userid` and `userid` = $id ORDER BY trid DESC limit 1");
                  foreach($msg1 as $val1)
                            {
                            $tributetype= $val1->tributeaction;
                            $tributty=$val1->tribute_type;
                            $trifname=$val1->trnfname;
                            $trilname=$val1->trlname;
                            $date=$val1->created_on;
                         $crd=date('M d,y H:i:s', strtotime($val1->created_on));
                               if( $tributetype == lightcandle)
                               {
                                ?>
                       
                      <div class="featured_box">
                           <img src="https://cdn4.iconfinder.com/data/icons/linecon/512/delete-512.png" class="trash" onclick="image(<?php echo  $val1->trid; ?>)">
                          <div class="media">
                               <img class="img-fluid img13" alt="img" src="<?php echo get_stylesheet_directory_uri(); ?>/img/img13.png">
                            <!--<img class="" src="<?php echo get_stylesheet_directory_uri(); ?>/img/img12.png" alt="mage">-->
                            <div class="media-body">
                              <h5><?php echo  $trifname; ?> <?php echo $trilname; ?> <i>lit a Candle</i></h5>
                              <h6><?php echo $crd; ?></h6>
                            <!--  <img class="img-fluid img13" alt="img" src="<?php echo get_stylesheet_directory_uri(); ?>/img/img13.png">-->
                            </div>
                          </div>
                      </div>
                      <?php
                               }
                            }
                               ?>