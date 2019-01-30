<?php
/**
 * Template Name: tribute
 **/
get_header();
?>
<?php
if(isset($_REQUEST['subbtn']))
{
  $fname=isset($_POST['fname'])?$_POST['fname']:'';
  $lname=isset($_POST['lname'])?$_POST['lname']:'';
  $bdate=isset($_POST['bdate'])?$_POST['bdate']:'';
  $bmonth=isset($_POST['bmonth'])?$_POST['bmonth']:'';
  $byear=isset($_POST['byear'])?$_POST['byear']:'';
  $bplace=isset($_POST['bplace'])?$_POST['bplace']:'';
  $ddate=isset($_POST['ddate'])?$_POST['ddate']:'';
  $dmonth=isset($_POST['dmonth'])?$_POST['dmonth']:'';
  $dyear=isset($_POST['dyear'])?$_POST['dyear']:'';
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
           

$insert = $wpdb->insert( 'wp_tribute',
  array('fname' => $fname,
        'lname' => $lname,
        'birthdate' =>$bdate, 
        'birthmonth' => $bmonth,
        'birthyear' =>$byear,
        'birthplace' => $bplace,
        'deathdate' => $ddate,
        'deathmonth' =>$dmonth,
        'deathyear' =>$dyear,
        'deathplace' =>$dplace,
        'location' => $flocation,
        'town' => $ftown,
        'fdate' => $fdate,
        'ftime' => $ftime,
        'burial_country' => $fcountry,
        'burial_town' =>$butown,
        'burial_date' =>$budate,
        'burial_time'=>$butime,
        'burial_location'=>$buarea,
        'burial_cemetery'=>$cemetery,
        'crematorium_town'=>$cretown,
        'crematorium'=>$Crematorium,
        
        'crematorium_time' =>$ctime,
        'funeral_com_fname' =>$fcname,
        'funeral_com_secondname' =>$fcsecname,
        'funeral_com_telephone' =>$ftelno,
        'funeral_com_town' =>$fctown,
        'funeral_com_location' =>$fclocation,
        'funeral_com_building' =>$fbuild,
        'funeral_com_mettingdate' =>$fmettingdate,
        'google_map_location' =>$gloc,
        'notice' =>$notice,
        'notice_posted' =>$postn,
        'notice_posted_date' =>$postby,
       
        
        ), //data
                array('%s','%s','%s','%s','%s','%s','%s','%s','%s','%s','%s','%s','%s','%s','%s','%s','%s','%s','%s','%s','%s','%s','%s','%s','%s','%s','%s','%s','%s','%s','%s','%s','%s','%s') //data format     
        );
      /* echo $wpdb->last_query;*/
}
?>
<?php
$pro = $wpdb->get_results("SELECT * FROM `wp_tribute` order by `id` desc limit 1;");
/*echo $wpdb->last_query;*/
$id=($pro[0]->id!='')?$pro[0]->id:"";
    $fname=($pro[0]->fname!='')?$pro[0]->fname:"";
    $lname=($pro[0]->lname!='')?$pro[0]->lname:"";
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
    $notice=($pro[0]->notice!='')?$pro[0]->notice:"";
    $notice_posted=($pro[0]->notice_posted!='')?$pro[0]->notice_posted:"";
     $notice_posted_date=($pro[0]->notice_posted_date!='')?$pro[0]->notice_posted_date:"";
?>

<section class="tribute_head"> 
    <div class="container">
        <div class="row">
            <div class="col-md-4 col-4">
                <img class="img-fluid w-100 img10" alt="img" src="<?php echo get_stylesheet_directory_uri(); ?>/img/img10.png">
            </div>
            <div class="col-md-8 col-8">
                <p>In loving memory of...</p>
                <h1>Kofi Annan</h1>
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
                  <div class="tab-pane active" id="home1">
                      <div class="tribute_box">
                        <h3>“Let the memory of  be with us forever”</h3>
                        <span class="edit_class"><i class="fa fa-pencil" aria-hidden="true"></i>Edit</span>
                      </div>
                      <div class="tribute_box">
                        <ul class="tri_list_box">
                          <li>56 Years Old</li>
                          <li>Born on March 3, 1962 in Nairoby, Kenya</li>
                          <li>Passed a way on June 22, 2018 in Nakuru, Kenya</li>
                        </ul>
                        <span class="edit_class"><i class="fa fa-pencil" aria-hidden="true"></i>Edit</span>
                      </div>
                      <div class="tribute_box">
                          <div class="abutsec">
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. </p>

                            <p>Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum. Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. </p>

                            <p>Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem.</p>
                            <button class="edit_class abt" onclick="get_msg(<?php echo $id; ?>)"><i class="fa fa-pencil" aria-hidden="true"></i>Edit</button>
                            </div>
                              <div class="abtdescription" style="display:none;">
                             <textarea class="form-control" rows="8" placeholder="Add your tribute text here"></textarea>
                            <button type="submit" name="subabt" class="red_btn saveabt">Save</button>
                            </div>
                      </div>
                      <a href="" class="add_story">Add a story</a>
                  </div>
                  <div class="tab-pane fade tab_notice" id="menu4">
                    <div class="notice_main">
                      <div class="form-group">
                        <label for="txt1">Funeral Notice Title</label>
                        <input type="text" class="form-control" id="txt1" placeholder="ie Details for Todd Msekema’s Funeral">
                      </div>
                      <div class="form-group">
                        <label for="txt1">Location and Date of Funeral Service</label>
                        <input type="text" class="form-control" id="txt1" placeholder="25 May 2018, Sixtine Chapel">
                      </div>
                      <div class="form-group">
                        <label for="txt1">Funeral Date</label>
                        <input type="text" class="form-control" id="txt1" placeholder="25 May 2018">
                      </div>
                      <div class="form-group">
                        <label for="txt1">Address of Funeral Location</label>
                        <input type="text" class="form-control" id="txt1" placeholder="828 Union Street, Seattle, Washington">
                      </div>
                      <div class="form-group">
                        <label for="txt1">Time of Funeral:</label>
                        <input type="text" class="form-control" id="txt1" placeholder="2:00 PM">
                      </div>
                      <div class="form-group">
                        <label for="txt1">Funeral committee venue (Place Building, Road)</label>
                        <input type="text" class="form-control" id="txt1" placeholder="2:00 PM">
                      </div>
                      <div class="form-group">
                        <label for="txt1">Funeral Committee Contact Person & Tel. Number</label>
                        <input type="text" class="form-control" id="txt1" placeholder="John Malkovic, 822-1125-2813">
                      </div>
                      <div class="map_class">
                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d50470.02846874147!2d-122.47261937941492!3d37.75776267828958!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x80859a6d00690021%3A0x4a501367f076adff!2sSan+Francisco%2C+CA%2C+USA!5e0!3m2!1sen!2sin!4v1539413862187" width="600" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
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
                        <form method="post" enctype="multipart/form-data">
                        <div class="row">
                          <div class="col-md-6">
                            <div class="form-group">
                              <input type="text" class="form-control" id="txt1" placeholder="First Name" name="fname" value="<?php echo $fname ?>">
                            </div>
                          </div>
                          <div class="col-md-6">
                            <div class="form-group">
                              <input type="text" class="form-control" id="txt1" placeholder="Last Name" name="lname" value="<?php echo $lname ?>">
                            </div>
                          </div>
                        </div>
                        <span>Date of Birth:</span>
                        <div class="row">
                          <div class="col-md-3">
                            <div class="form-group">
                              <input type="text" class="form-control" id="txt1" placeholder="Date" name="bdate" value="<?php echo $birthdate ?>" >
                            </div>
                          </div>
                          <div class="col-md-3">
                            <div class="form-group">
                              <input type="text" class="form-control" id="txt1" placeholder="Month" name="bmonth" value="<?php echo $birthmonth ?>">
                            </div>
                          </div>
                          <div class="col-md-3">
                            <div class="form-group">
                              <input type="text" class="form-control" id="txt1" placeholder="Year" name="byear" value="<?php echo $birthyear ?>">
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
                              <input type="text" class="form-control" id="txt1" placeholder="Date" name="ddate" value="<?php echo $deathdate ?>">
                            </div>
                          </div>
                          <div class="col-md-3">
                            <div class="form-group">
                              <input type="text" class="form-control" id="txt1" placeholder="Month" name="dmonth" value="<?php echo $deathmonth ?>">
                            </div>
                          </div>
                          <div class="col-md-3">
                            <div class="form-group">
                              <input type="text" class="form-control" id="txt1" placeholder="Year" name="dyear" value="<?php echo $deathyear ?>">
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
                              <input type="text" class="form-control" id="txt1" placeholder="Time" name="ftime" value="<?php echo $ftime ?>">
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
                              <select class="form-control" id="sel1" name="fcountry">
                                <option value="0">County</option>
                                 <option value="0" <?php if ($burial_country == '0') echo 'selected="selected"'; ?> >County</option>
                                  <option value="1" <?php if ($burial_country == '1') echo 'selected="selected"'; ?> >1</option>
                                   <option value="2" <?php if ($burial_country == '2') echo 'selected="selected"'; ?> >2</option>
                                    <option value="3" <?php if ($burial_country == '3') echo 'selected="selected"'; ?> >3</option>
                               
                              </select>
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
                              <input type="text" class="form-control" id="txt1" placeholder="Time" name="butime" value="<?php echo $burial_time ?>">
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
                              <input type="text" class="form-control" id="txt1" placeholder="Time" name="ctime" value="<?php echo $crematorium_time ?>">
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
                      <div class="tribute_list1">
                        <a href="" class="add_story ylw_btn">Edit</a>
                        <!--<a href="" class="add_story">POST NOTICES</a>-->
                        <input type="submit" name="subbtn" class="add_story" value="Save">
                      </div>
                      </form>
                    </div>
                    <!-- <div class="tribute_list1">
                      <a href="" class="add_story ylw_btn">Share</a>
                      <a href="" class="add_story">POST NOTICES</a>
                    </div> -->
                  </div>
                  <div class="tab-pane gal_img fade" id="menu5">
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
                            <div class="row">
                              <div class="col-md-3 col-4">
                                <img class="img-fluid" alt="img" src="<?php echo get_stylesheet_directory_uri(); ?>/img/img23.jpg">
                              </div>
                              <div class="col-md-3 col-4">
                                <img class="img-fluid" alt="img" src="<?php echo get_stylesheet_directory_uri(); ?>/img/img23.jpg">
                              </div>
                              <div class="col-md-3 col-4">
                                <img class="img-fluid" alt="img" src="<?php echo get_stylesheet_directory_uri(); ?>/img/img23.jpg">
                              </div>
                              <div class="col-md-3 col-4">
                                <img class="img-fluid" alt="img" src="<?php echo get_stylesheet_directory_uri(); ?>/img/img23.jpg">
                              </div>
                              <div class="col-md-3 col-4">
                                <img class="img-fluid" alt="img" src="<?php echo get_stylesheet_directory_uri(); ?>/img/img23.jpg">
                              </div>
                              <div class="col-md-3 col-4">
                                <img class="img-fluid" alt="img" src="<?php echo get_stylesheet_directory_uri(); ?>/img/img23.jpg">
                              </div>
                              <div class="col-md-3 col-4">
                                <img class="img-fluid" alt="img" src="<?php echo get_stylesheet_directory_uri(); ?>/img/img23.jpg">
                              </div>
                              <div class="col-md-3 col-4">
                                <img class="img-fluid" alt="img" src="<?php echo get_stylesheet_directory_uri(); ?>/img/img23.jpg">
                              </div>
                              <div class="col-md-3 col-4">
                                <img class="img-fluid" alt="img" src="<?php echo get_stylesheet_directory_uri(); ?>/img/img23.jpg">
                              </div>
                              <div class="col-md-3 col-4">
                                <img class="img-fluid" alt="img" src="<?php echo get_stylesheet_directory_uri(); ?>/img/img23.jpg">
                              </div>
                              <div class="col-md-3 col-4">
                                <img class="img-fluid" alt="img" src="<?php echo get_stylesheet_directory_uri(); ?>/img/img23.jpg">
                              </div>
                              <div class="col-md-3 col-4">
                                <img class="img-fluid" alt="img" src="<?php echo get_stylesheet_directory_uri(); ?>/img/img23.jpg">
                              </div>
                            </div>
                          </div>
                        </div>
                        <div class="tab-pane fade" id="videoTab1">
                            <div class="gal_box">
                            <div class="row">
                              <div class="col-md-3 col-4">
                                <img class="img-fluid" alt="img" src="<?php echo get_stylesheet_directory_uri(); ?>/img/img23.jpg">
                              </div>
                              <div class="col-md-3 col-4">
                                <img class="img-fluid" alt="img" src="<?php echo get_stylesheet_directory_uri(); ?>/img/img23.jpg">
                              </div>
                              <div class="col-md-3 col-4">
                                <img class="img-fluid" alt="img" src="<?php echo get_stylesheet_directory_uri(); ?>/img/img23.jpg">
                              </div>
                              <div class="col-md-3 col-4">
                                <img class="img-fluid" alt="img" src="<?php echo get_stylesheet_directory_uri(); ?>/img/img23.jpg">
                              </div>
                              <div class="col-md-3 col-4">
                                <img class="img-fluid" alt="img" src="<?php echo get_stylesheet_directory_uri(); ?>/img/img23.jpg">
                              </div>
                              <div class="col-md-3 col-4">
                                <img class="img-fluid" alt="img" src="<?php echo get_stylesheet_directory_uri(); ?>/img/img23.jpg">
                              </div>
                              <div class="col-md-3 col-4">
                                <img class="img-fluid" alt="img" src="<?php echo get_stylesheet_directory_uri(); ?>/img/img23.jpg">
                              </div>
                              <div class="col-md-3 col-4">
                                <img class="img-fluid" alt="img" src="<?php echo get_stylesheet_directory_uri(); ?>/img/img23.jpg">
                              </div>
                              <div class="col-md-3 col-4">
                                <img class="img-fluid" alt="img" src="<?php echo get_stylesheet_directory_uri(); ?>/img/img23.jpg">
                              </div>
                              <div class="col-md-3 col-4">
                                <img class="img-fluid" alt="img" src="<?php echo get_stylesheet_directory_uri(); ?>/img/img23.jpg">
                              </div>
                              <div class="col-md-3 col-4">
                                <img class="img-fluid" alt="img" src="<?php echo get_stylesheet_directory_uri(); ?>/img/img23.jpg">
                              </div>
                              <div class="col-md-3 col-4">
                                <img class="img-fluid" alt="img" src="<?php echo get_stylesheet_directory_uri(); ?>/img/img23.jpg">
                              </div>
                            </div>
                          </div>
                        </div>
                        <div class="tab-pane fade" id="audioTab1">
                          <div class="gal_box">
                            <div class="row">
                              <div class="col-md-3 col-4">
                                <img class="img-fluid" alt="img" src="<?php echo get_stylesheet_directory_uri(); ?>/img/img23.jpg">
                              </div>
                              <div class="col-md-3 col-4">
                                <img class="img-fluid" alt="img" src="<?php echo get_stylesheet_directory_uri(); ?>/img/img23.jpg">
                              </div>
                              <div class="col-md-3 col-4">
                                <img class="img-fluid" alt="img" src="<?php echo get_stylesheet_directory_uri(); ?>/img/img23.jpg">
                              </div>
                              <div class="col-md-3 col-4">
                                <img class="img-fluid" alt="img" src="<?php echo get_stylesheet_directory_uri(); ?>/img/img23.jpg">
                              </div>
                              <div class="col-md-3 col-4">
                                <img class="img-fluid" alt="img" src="<?php echo get_stylesheet_directory_uri(); ?>/img/img23.jpg">
                              </div>
                              <div class="col-md-3 col-4">
                                <img class="img-fluid" alt="img" src="<?php echo get_stylesheet_directory_uri(); ?>/img/img23.jpg">
                              </div>
                              <div class="col-md-3 col-4">
                                <img class="img-fluid" alt="img" src="<?php echo get_stylesheet_directory_uri(); ?>/img/img23.jpg">
                              </div>
                              <div class="col-md-3 col-4">
                                <img class="img-fluid" alt="img" src="<?php echo get_stylesheet_directory_uri(); ?>/img/img23.jpg">
                              </div>
                              <div class="col-md-3 col-4">
                                <img class="img-fluid" alt="img" src="<?php echo get_stylesheet_directory_uri(); ?>/img/img23.jpg">
                              </div>
                              <div class="col-md-3 col-4">
                                <img class="img-fluid" alt="img" src="<?php echo get_stylesheet_directory_uri(); ?>/img/img23.jpg">
                              </div>
                              <div class="col-md-3 col-4">
                                <img class="img-fluid" alt="img" src="<?php echo get_stylesheet_directory_uri(); ?>/img/img23.jpg">
                              </div>
                              <div class="col-md-3 col-4">
                                <img class="img-fluid" alt="img" src="<?php echo get_stylesheet_directory_uri(); ?>/img/img23.jpg">
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="space20"></div>
                      <div class="row">
                        <div class="col-md-4"></div>
                        <div class="col-md-4"></div>
                        <div class="col-md-4">
                          <div class="add_gal">
                            <span class="red_btn"><i class="fa fa-plus-circle" aria-hidden="true"></i>Add Photos</span>
                            <input id="selectfile" type="file" name="">
                          </div>
                        </div>
                      </div> 
                    </div>
                  </div>
                  <div class="tab-pane fade" id="menu6">
                     <div class="main_tri">
                      <div class="featured_box">
                          <div class="media">
                            <img class="" src="<?php echo get_stylesheet_directory_uri(); ?>/img/img12.png" alt="mage">
                            <div class="media-body">
                              <h5>Audrey <i>lit a Candle</i></h5>
                              <h6>July 1, 2018, 01.11 pm</h6>
                              <img class="img-fluid img13" alt="img" src="<?php echo get_stylesheet_directory_uri(); ?>/img/img13.png">
                            </div>
                          </div>
                      </div>
                      <div class="featured_box">
                          <div class="media">
                            <img class="" src="<?php echo get_stylesheet_directory_uri(); ?>/img/img12.png" alt="mage">
                            <div class="media-body">
                              <h5>Audrey <i>left a Tribute</i></h5>
                              <h6>July 1, 2018, 01.11 pm</h6>
                              <span class="span_share"><i class="fa fa-share-alt" aria-hidden="true"></i>Share</span>
                              <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat</p>
                            </div>
                          </div>
                      </div>
                      <div class="featured_box">
                          <div class="media">
                            <img class="" src="<?php echo get_stylesheet_directory_uri(); ?>/img/img12.png" alt="mage">
                            <div class="media-body">
                              <h5>Audrey <i>lit a Candle</i></h5>
                              <h6>July 1, 2018, 01.11 pm</h6>
                              <span class="span_share">View</span>
                            </div>
                          </div>
                      </div>
                      <ul class="list-inline tribute_list">
                           <li class="list-inline-item"><a class="red_btn lea_tri">Leave a Tribute</a></li>
                           <li class="list-inline-item"><a href="" class="red_btn">Light a Candle</a></li>
                           <li class="list-inline-item"><a href="" class="red_btn">Leave a Note</a></li>
                      </ul>
                    </div>
                     <div class="leave_tribute">
                        <span class="tri_span"><img class="img-fluid" alt="img" src="<?php echo get_stylesheet_directory_uri(); ?>/img/pencil.png">Leave a Tribute</span>
                        <ul class="nav nav-tabs" role="tablist">
                          <li class="nav-item">
                            <a class="nav-link active" data-toggle="tab" href="#tab4"><img class="img-fluid active_img" alt="img" src="<?php echo get_stylesheet_directory_uri(); ?>/img/christmas-candle.png">
                            <img class="img-fluid default_img" alt="img" src="<?php echo get_stylesheet_directory_uri(); ?>/img/christmas-candle1.png">
                            </a>
                          </li>
                          <li class="nav-item">
                            <a class="nav-link" data-toggle="tab" href="#tab5"><img class="img-fluid default_img" alt="img" src="<?php echo get_stylesheet_directory_uri(); ?>/img/flower.png">
                            <img class="img-fluid active_img" alt="img" src="<?php echo get_stylesheet_directory_uri(); ?>/img/flower1.png">
                            </a>
                          </li>
                          <li class="nav-item">
                            <a class="nav-link" data-toggle="tab" href="#tab6"><img class="img-fluid default_img" alt="img" src="<?php echo get_stylesheet_directory_uri(); ?>/img/feather.png">
                            <img class="img-fluid active_img" alt="img" src="<?php echo get_stylesheet_directory_uri(); ?>/img/feather1.png">
                            </a>
                          </li>
                        </ul>
                        <div class="tab-content">
                            <div id="tab4" class="tab-pane active">
                              <textarea class="form-control" rows="8" id="comment" placeholder="Add your tribute text here"></textarea>
                            </div>
                            <div id="tab5" class="tab-pane fade">
                              <textarea class="form-control" rows="8" id="comment" placeholder="Add your tribute text here"></textarea>
                            </div>
                            <div id="tab6" class="tab-pane fade">
                              <textarea class="form-control" rows="8" id="comment" placeholder="Add your tribute text here"></textarea>
                            </div>
                        </div>
                        <ul class="list-inline leave_ul">
                          <li class="list-inline-item">by John Nyongessa</li>
                          <li class="list-inline-item pull-right">
                            <a href="" class="red_btn">Leave a Tribute</a>
                          </li>
                        </ul>
                     </div>
                  </div>
                </div>

            </div>
            <div class="col-md-4 col-12">
                <div class="space70"></div>
                <div class="space30 d-block d-md-none"></div>
                <div class="tribute_box-left tribute_box-new">
                    <div class="prehead_left">
                        <a href="" class="">Invite Family and Friends to this memorial:</a>
                        <a href="" class="red_btn tribute_box-btn"><span>+</span>Invite Now</a>
                    </div>
                </div>
                <div class="tribute_box-left">
                    <div class="prehead_left">
                        <a href="">Share this page</a>
                        <ul class="list-inline">
                            <li class="list-inline-item"><a href=""><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                            <li class="list-inline-item"><a href=""><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
                            <li class="list-inline-item"><a href=""><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                        </ul>
                    </div>
                </div>
                <div class="tribute_box-left tribute_box-new1">
                    <div class="prehead_left">
                        <a href="" class="tribute_box-text">Sign up for Notifications</a>
                        <a href="" class="red_btn tribute_box-btn tribute_box-btn1">Sign Up</a>
                        <div class="clearfix"></div>
                    </div>
                </div>
                
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
                    <div class="tribute_box-left tribute_box-new">
                      <div class="prehead_left">
                          <a href="" class="">Add Picture</a>
                          <div class="space100"></div>
                          <div class="add-photo_new">
                            <a href="" class="red_btn tribute_box-btn"><span>+</span>Add Picture</a>
                            <input type="file" name="">
                          </div>
                      </div>
                    </div>
                    
                    <div class="card">
                        <div class="card-header">
                              <a class="collapsed card-link" data-toggle="collapse" href="#collapseThree">
                                Your Notifications   (2 New)<span><i class="fa fa-exclamation" aria-hidden="true"></i></span>
                              </a>
                        </div>
                        <div id="collapseThree" class="collapse" data-parent="#accordion">
                            <div class="card-body">
                                Lorem ipsum..
                            </div>
                        </div>
                    </div>

                    <div class="card card1">
                        <div class="card-header">
                              <a class="collapsed card-link card-link1" data-toggle="collapse" href="#collapseThree1">
                                <i class="red_clr">2 New </i>  Important Notifiactions<span><i class="fa fa-exclamation" aria-hidden="true"></i></span>
                              </a>
                        </div>
                        <div id="collapseThree1" class="collapse" data-parent="#accordion">
                            <div class="card-body">
                                Lorem ipsum..
                            </div>
                        </div>
                    </div>

                    <div class="card">
                        <div class="card-header">
                              <a class="collapsed card-link" data-toggle="collapse" href="#collapseFour">
                                Page Activity<span><i class="fa fa-users" aria-hidden="true"></i></span>
                              </a>
                        </div>
                        <div id="collapseFour" class="collapse show" data-parent="#accordion">
                            <div class="card-body">
                                <ul class="list-unstyled list_page-activity">
                                  <li>Marcela laid a flower<span>2 hours ago</span></li>
                                  <li>Angel left a note<span>2 hours ago</span></li>
                                  <li>Michael lit a candle<span>3 hours ago</span></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-header">
                              <a class="collapsed card-link" data-toggle="collapse" href="#collapseFive">
                                Page Views   <span>85</span>
                              </a>
                        </div>
                        <div id="collapseFive" class="collapse" data-parent="#accordion">
                            <div class="card-body">
                                Lorem ipsum..
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-8 col-12 d-md-block d-none">
               
                <div class="tab-content">
                    <div class="tab-pane active" id="home">
                      <div class="tribute_box">
                        <h3>“Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt."</h3>
                        <span class="edit_class"><i class="fa fa-pencil" aria-hidden="true"></i>Edit</span>
                      </div>
                      <div class="tribute_box">
                        <ul class="tri_list_box">
                          <li>56 Years Old</li>
                          <li>Born on March 3, 1962 in Nairoby, Kenya</li>
                          <li>Passed a way on June 22, 2018 in Nakuru, Kenya</li>
                        </ul>
                        <span class="edit_class"><i class="fa fa-pencil" aria-hidden="true"></i>Edit</span>
                      </div>
                      <div class="tribute_box ">
                          <div class="abutsec" style="display:block">
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. </p>

                            <p>Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum. Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. </p>

                            <p>Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem.</p>
                           
                            <button class="edit_class abt" onclick="get_msg(<?php echo $id; ?>)"><i class="fa fa-pencil" aria-hidden="true"></i>Edit</button>
                            </div>
                            <div class="abtdescription" style="display:none;">
                             <textarea class="form-control" rows="8" placeholder="Add your tribute text here"></textarea>
                            <button type="submit" name="subabt" class="red_btn saveabt">Save</button>
                            </div>
                      </div>
                      <a href="" class="add_story">Add a story</a>
                    </div>
                  <div class="tab-pane fade tab_notice" id="menu1">
                    <div class="notice_main"  style="display:block">
                        
                      <div class="form-group">
                        <label for="txt1">Notice Board For</label>
                        <input type="text" class="form-control" id="txt1" value="<?php echo $fname ?>, <?php echo $lname ?>">
                      </div>
                      <div class="form-group">
                        <label for="txt1">Date of Birth</label>
                        <input type="text" class="form-control" id="txt1" value="<?php echo $birthdate ?>, <?php echo $birthmonth ?>, <?php echo $birthyear ?>, <?php echo $birthplace ?>">
                      </div>
                      <div class="form-group">
                        <label for="txt1">Date of Death</label>
                        <input type="text" class="form-control" id="txt1" value="<?php echo $deathdate ?>, <?php echo $deathmonth ?>, <?php echo $deathyear ?>, <?php echo $deathplace ?>">
                      </div>
                      <div class="form-group">
                        <label for="txt1">Church/Mosque/Temple</label>
                        <input type="text" class="form-control" id="txt1" value="<?php echo $location ?>, <?php echo $town ?>, <?php echo $fdate ?>, <?php echo $ftime ?>">
                      </div>
                      <div class="form-group">
                        <label for="txt1">Location</label>
                        <input type="text" class="form-control" id="txt1" placeholder="County, Town/Centre, Area, Public Cemetery, Date, Time" value="<?php echo $burial_country; ?>, <?php echo $burial_town ?>, <?php echo $burial_date ?>, <?php echo $burial_time ?>, <?php echo $burial_location ?>, <?php echo $burial_cemetery ?>">
                      </div>
                      <div class="form-group">
                        <label for="txt1">Cremation Details</label>
                        <input type="text" class="form-control" id="txt1" value="<?php echo $crematorium_town ?>, <?php echo $crematorium ?>, <?php echo $crematorium_time ?>">
                      </div>
                      <div class="form-group">
                        <label for="txt1">Funeral Committee Contact Person</label>
                        <input type="text" class="form-control" id="txt1" value="<?php echo $funeral_com_fname ?>, <?php echo $funeral_com_secondname ?>, <?php echo $funeral_com_telephone ?>">
                      </div>
                      <div class="form-group">
                        <label for="txt1">Funeral Committee Meetings Venue</label>
                        <input type="text" class="form-control" id="txt1" value="<?php echo $funeral_com_town ?> , <?php echo $funeral_com_location ?>, <?php echo $funeral_com_building ?>, <?php echo $funeral_com_mettingdate ?>">
                      </div>
                      <div class="form-group">
                        <label for="txt1">Burial/Funeral/Interment Location Google Map</label>
                        <input type="text" class="form-control" id="txt1" placeholder="1st Name, 2nd Name, Phones" value="<?php echo $google_map_location ?>">
                      </div>
                      <div class="form-group">
                        <label for="txt1">POST FUNERAL NOTICES</label>
                        <input type="text" class="form-control" id="txt1" placeholder="1st Name, 2nd Name, Phones" value="<?php echo $notice ?>,<?php echo $notice_posted ?>,<?php echo $notice_posted_date ?>">
                      </div>
                      <div class="map_class">
                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d50470.02846874147!2d-122.47261937941492!3d37.75776267828958!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x80859a6d00690021%3A0x4a501367f076adff!2sSan+Francisco%2C+CA%2C+USA!5e0!3m2!1sen!2sin!4v1539413862187" width="600" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
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
                         <form method="post" enctype="multipart/form-data">
                        <div class="row">
                          <div class="col-md-6">
                            <div class="form-group">
                              <input type="text" class="form-control" id="txt1" placeholder="First Name" name="fname" value="<?php echo $fname ?>">
                            </div>
                          </div>
                          <div class="col-md-6">
                            <div class="form-group">
                              <input type="text" class="form-control" id="txt1" placeholder="Last Name" name="lname" value="<?php echo $lname ?>">
                            </div>
                          </div>
                        </div>
                        <span>Date of Birth:</span>
                        <div class="row">
                          <div class="col-md-3">
                            <div class="form-group">
                              <input type="text" class="form-control" id="txt1" placeholder="Date" name="bdate" value="<?php echo $birthdate ?>">
                            </div>
                          </div>
                          <div class="col-md-3">
                            <div class="form-group">
                              <input type="text" class="form-control" id="txt1" placeholder="Month" name="bmonth" value="<?php echo $birthmonth ?>">
                            </div>
                          </div>
                          <div class="col-md-3">
                            <div class="form-group">
                              <input type="text" class="form-control" id="txt1" placeholder="Year" name="byear" value="<?php echo $birthyear ?>">
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
                              <input type="text" class="form-control" id="txt1" placeholder="Date" name="ddate" value="<?php echo $deathdate ?>">
                            </div>
                          </div>
                          <div class="col-md-3">
                            <div class="form-group">
                              <input type="text" class="form-control" id="txt1" placeholder="Month" name="dmonth" value="<?php echo $deathmonth ?>">
                            </div>
                          </div>
                          <div class="col-md-3">
                            <div class="form-group">
                              <input type="text" class="form-control" id="txt1" placeholder="Year" name="dyear" value="<?php echo $deathyear ?>">
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
                              <input type="text" class="form-control" id="txt1" placeholder="Time" name="ftime" value="<?php echo $ftime ?>">
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
                              <select class="form-control" id="sel1" name="fcountry">
                                <option value="0" <?php if ($burial_country == '0') echo 'selected="selected"'; ?> >County</option>
                                  <option value="1" <?php if ($burial_country == '1') echo 'selected="selected"'; ?> >1</option>
                                   <option value="2" <?php if ($burial_country == '2') echo 'selected="selected"'; ?> >2</option>
                                    <option value="3" <?php if ($burial_country == '3') echo 'selected="selected"'; ?> >3</option>
                              </select>
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
                              <input type="text" class="form-control" id="txt1" placeholder="Time" name="butime" value="<?php echo $burial_time ?>">
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
                              <input type="text" class="form-control" id="txt1" placeholder="Time" name="ctime" value="<?php echo $crematorium_time ?>">
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
                      </div>
                      <div class="tribute_list1">
                       <!-- <a href="" class="add_story ylw_btn">Edit</a>-->
                         <input type="button" name="subbtn" class="add_story ylw_btn" value="Edit">
                       <!-- <a href="" class="add_story">POST NOTICES</a>-->
                        <input type="submit" name="subbtn" class="add_story" value="Save">
                      </div>
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
                            <div class="row">
                              <div class="col-md-3">
                                <img class="img-fluid" alt="img" src="<?php echo get_stylesheet_directory_uri(); ?>/img/img23.jpg">
                              </div>
                              <div class="col-md-3">
                                <img class="img-fluid" alt="img" src="<?php echo get_stylesheet_directory_uri(); ?>/img/img23.jpg">
                              </div>
                              <div class="col-md-3">
                                <img class="img-fluid" alt="img" src="<?php echo get_stylesheet_directory_uri(); ?>/img/img23.jpg">
                              </div>
                              <div class="col-md-3">
                                <img class="img-fluid" alt="img" src="<?php echo get_stylesheet_directory_uri(); ?>/img/img23.jpg">
                              </div>
                              <div class="col-md-3">
                                <img class="img-fluid" alt="img" src="<?php echo get_stylesheet_directory_uri(); ?>/img/img23.jpg">
                              </div>
                              <div class="col-md-3">
                                <img class="img-fluid" alt="img" src="<?php echo get_stylesheet_directory_uri(); ?>/img/img23.jpg">
                              </div>
                              <div class="col-md-3">
                                <img class="img-fluid" alt="img" src="<?php echo get_stylesheet_directory_uri(); ?>/img/img23.jpg">
                              </div>
                              <div class="col-md-3">
                                <img class="img-fluid" alt="img" src="<?php echo get_stylesheet_directory_uri(); ?>/img/img23.jpg">
                              </div>
                              <div class="col-md-3">
                                <img class="img-fluid" alt="img" src="<?php echo get_stylesheet_directory_uri(); ?>/img/img23.jpg">
                              </div>
                              <div class="col-md-3">
                                <img class="img-fluid" alt="img" src="<?php echo get_stylesheet_directory_uri(); ?>/img/img23.jpg">
                              </div>
                              <div class="col-md-3">
                                <img class="img-fluid" alt="img" src="<?php echo get_stylesheet_directory_uri(); ?>/img/img23.jpg">
                              </div>
                              <div class="col-md-3">
                                <img class="img-fluid" alt="img" src="<?php echo get_stylesheet_directory_uri(); ?>/img/img23.jpg">
                              </div>
                            </div>
                          </div>
                        </div>
                        <div class="tab-pane fade" id="videoTab">
                            <div class="gal_box">
                            <div class="row">
                              <div class="col-md-3">
                                <img class="img-fluid" alt="img" src="<?php echo get_stylesheet_directory_uri(); ?>/img/img23.jpg">
                              </div>
                              <div class="col-md-3">
                                <img class="img-fluid" alt="img" src="<?php echo get_stylesheet_directory_uri(); ?>/img/img23.jpg">
                              </div>
                              <div class="col-md-3">
                                <img class="img-fluid" alt="img" src="<?php echo get_stylesheet_directory_uri(); ?>/img/img23.jpg">
                              </div>
                              <div class="col-md-3">
                                <img class="img-fluid" alt="img" src="<?php echo get_stylesheet_directory_uri(); ?>/img/img23.jpg">
                              </div>
                              <div class="col-md-3">
                                <img class="img-fluid" alt="img" src="<?php echo get_stylesheet_directory_uri(); ?>/img/img23.jpg">
                              </div>
                              <div class="col-md-3">
                                <img class="img-fluid" alt="img" src="<?php echo get_stylesheet_directory_uri(); ?>/img/img23.jpg">
                              </div>
                              <div class="col-md-3">
                                <img class="img-fluid" alt="img" src="<?php echo get_stylesheet_directory_uri(); ?>/img/img23.jpg">
                              </div>
                              <div class="col-md-3">
                                <img class="img-fluid" alt="img" src="<?php echo get_stylesheet_directory_uri(); ?>/img/img23.jpg">
                              </div>
                              <div class="col-md-3">
                                <img class="img-fluid" alt="img" src="<?php echo get_stylesheet_directory_uri(); ?>/img/img23.jpg">
                              </div>
                              <div class="col-md-3">
                                <img class="img-fluid" alt="img" src="<?php echo get_stylesheet_directory_uri(); ?>/img/img23.jpg">
                              </div>
                              <div class="col-md-3">
                                <img class="img-fluid" alt="img" src="<?php echo get_stylesheet_directory_uri(); ?>/img/img23.jpg">
                              </div>
                              <div class="col-md-3">
                                <img class="img-fluid" alt="img" src="<?php echo get_stylesheet_directory_uri(); ?>/img/img23.jpg">
                              </div>
                            </div>
                          </div>
                        </div>
                        <div class="tab-pane fade" id="audioTab">
                          <div class="gal_box">
                            <div class="row">
                              <div class="col-md-3">
                                <img class="img-fluid" alt="img" src="<?php echo get_stylesheet_directory_uri(); ?>/img/img23.jpg">
                              </div>
                              <div class="col-md-3">
                                <img class="img-fluid" alt="img" src="<?php echo get_stylesheet_directory_uri(); ?>/img/img23.jpg">
                              </div>
                              <div class="col-md-3">
                                <img class="img-fluid" alt="img" src="<?php echo get_stylesheet_directory_uri(); ?>/img/img23.jpg">
                              </div>
                              <div class="col-md-3">
                                <img class="img-fluid" alt="img" src="<?php echo get_stylesheet_directory_uri(); ?>/img/img23.jpg">
                              </div>
                              <div class="col-md-3">
                                <img class="img-fluid" alt="img" src="<?php echo get_stylesheet_directory_uri(); ?>/img/img23.jpg">
                              </div>
                              <div class="col-md-3">
                                <img class="img-fluid" alt="img" src="<?php echo get_stylesheet_directory_uri(); ?>/img/img23.jpg">
                              </div>
                              <div class="col-md-3">
                                <img class="img-fluid" alt="img" src="<?php echo get_stylesheet_directory_uri(); ?>/img/img23.jpg">
                              </div>
                              <div class="col-md-3">
                                <img class="img-fluid" alt="img" src="<?php echo get_stylesheet_directory_uri(); ?>/img/img23.jpg">
                              </div>
                              <div class="col-md-3">
                                <img class="img-fluid" alt="img" src="<?php echo get_stylesheet_directory_uri(); ?>/img/img23.jpg">
                              </div>
                              <div class="col-md-3">
                                <img class="img-fluid" alt="img" src="<?php echo get_stylesheet_directory_uri(); ?>/img/img23.jpg">
                              </div>
                              <div class="col-md-3">
                                <img class="img-fluid" alt="img" src="<?php echo get_stylesheet_directory_uri(); ?>/img/img23.jpg">
                              </div>
                              <div class="col-md-3">
                                <img class="img-fluid" alt="img" src="<?php echo get_stylesheet_directory_uri(); ?>/img/img23.jpg">
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="space20"></div>
                      <div class="row">
                        <div class="col-md-4"></div>
                        <div class="col-md-4"></div>
                        <div class="col-md-4">
                          <div class="add_gal">
                            <span class="red_btn"><i class="fa fa-plus-circle" aria-hidden="true"></i>Add Photos</span>
                            <input id="selectfile" type="file" name="">
                          </div>
                        </div>
                      </div> 
                    </div>
                  </div>
                  <div class="tab-pane fade" id="menu3">
                    <div class="main_tri">
                      <div class="featured_box">
                          <div class="media">
                            <img class="" src="<?php echo get_stylesheet_directory_uri(); ?>/img/img12.png" alt="mage">
                            <div class="media-body">
                              <h5>Audrey <i>lit a Candle</i></h5>
                              <h6>July 1, 2018, 01.11 pm</h6>
                              <img class="img-fluid img13" alt="img" src="<?php echo get_stylesheet_directory_uri(); ?>/img/img13.png">
                            </div>
                          </div>
                      </div>
                      <div class="featured_box">
                          <div class="media">
                            <img class="" src="<?php echo get_stylesheet_directory_uri(); ?>/img/img12.png" alt="mage">
                            <div class="media-body">
                              <h5>Audrey <i>left a Tribute</i></h5>
                              <h6>July 1, 2018, 01.11 pm</h6>
                              <span class="span_share"><i class="fa fa-share-alt" aria-hidden="true"></i>Share</span>
                              <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat</p>
                            </div>
                          </div>
                      </div>
                      <div class="featured_box">
                          <div class="media">
                            <img class="" src="<?php echo get_stylesheet_directory_uri(); ?>/img/img12.png" alt="mage">
                            <div class="media-body">
                              <h5>Audrey <i>lit a Candle</i></h5>
                              <h6>July 1, 2018, 01.11 pm</h6>
                              <span class="span_share">View</span>
                            </div>
                          </div>
                      </div>
                      <ul class="list-inline tribute_list">
                           <li class="list-inline-item"><a class="red_btn lea_tri">Leave a Tribute</a></li>
                           <li class="list-inline-item"><a href="" class="red_btn">Light a Candle</a></li>
                           <li class="list-inline-item"><a href="" class="red_btn">Leave a Note</a></li>
                      </ul>
                    </div>
                    <div class="leave_tribute">
                        <span class="tri_span"><img class="img-fluid" alt="img" src="<?php echo get_stylesheet_directory_uri(); ?>/img/pencil.png">Leave a Tribute</span>
                        <ul class="nav nav-tabs" role="tablist">
                          <li class="nav-item">
                            <a class="nav-link active" data-toggle="tab" href="#tab1"><img class="img-fluid active_img" alt="img" src="<?php echo get_stylesheet_directory_uri(); ?>/img/christmas-candle.png">
                            <img class="img-fluid default_img" alt="img" src="<?php echo get_stylesheet_directory_uri(); ?>/img/christmas-candle1.png">
                            </a>
                          </li>
                          <li class="nav-item">
                            <a class="nav-link" data-toggle="tab" href="#tab2"><img class="img-fluid default_img" alt="img" src="<?php echo get_stylesheet_directory_uri(); ?>/img/flower.png">
                            <img class="img-fluid active_img" alt="img" src="<?php echo get_stylesheet_directory_uri(); ?>/img/flower1.png">
                            </a>
                          </li>
                          <li class="nav-item">
                            <a class="nav-link" data-toggle="tab" href="#tab3"><img class="img-fluid default_img" alt="img" src="<?php echo get_stylesheet_directory_uri(); ?>/img/feather.png">
                            <img class="img-fluid active_img" alt="img" src="<?php echo get_stylesheet_directory_uri(); ?>/img/feather1.png">
                            </a>
                          </li>
                        </ul>
                        <div class="tab-content">
                            <div id="tab1" class="tab-pane active"><br>
                              <textarea class="form-control" rows="8" id="comment" placeholder="Add your tribute text here"></textarea>
                            </div>
                            <div id="tab2" class="tab-pane fade"><br>
                              <textarea class="form-control" rows="8" id="comment" placeholder="Add your tribute text here"></textarea>
                            </div>
                            <div id="tab3" class="tab-pane fade"><br>
                              <textarea class="form-control" rows="8" id="comment" placeholder="Add your tribute text here"></textarea>
                            </div>
                        </div>
                        <ul class="list-inline leave_ul">
                          <li class="list-inline-item">by John Nyongessa</li>
                          <li class="list-inline-item pull-right">
                            <a href="" class="red_btn">Leave a Tribute</a>
                          </li>
                        </ul>
                    </div>
                  </div>
                </div>
                
            </div>
        </div>
    </div>
</section>
<style>
    button.edit_class {
    background: none !important;
    border: none !important;
    color: #582236 !important;
}
</style>
<?php
get_footer();
?>
 <script>
     $(".ylw_btn").click(function() {
 
  $(".notice_main").css("display", "none");
     $(".showhid").css("display", "block");
  });

  function get_msg(id)
 {
   
  $(".abutsec").css("display", "none");
  $(".abtdescription").css("display", "block");
  $('.abtdescription').append('<input type="hidden" name="id" value="' +  id + '">');   
  }
   $(".saveabt").click(function() {
 
  $(".abutsec").css("display", "block");
  $(".abtdescription").css("display", "none");
     
  });
 </script>
  
<script type="text/javascript">
  
  $( ".lea_tri" ).click(function() {
     $( ".main_tri").hide();
     $( ".leave_tribute").show();
  });
</script>


</body>
</html>