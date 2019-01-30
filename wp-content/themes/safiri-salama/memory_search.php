<?php
/**
 * Template Name: search_memory
 **/
get_header();

if(isset($_POST['btnsub']))
{
$serlname=$_POST['serlname'];
}
?>
<?php
    if ( have_posts() ) : while ( have_posts() ) : the_post(); 
    $banner =get_field('banner_image');
?>
<style>
    .package_sec1 {
    background: url(<?php echo $banner['url']; ?>)no-repeat;
    }
</style>
<section class="package_sec1 package_sec1-new">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h1><?php echo get_field('banner_text'); ?></h1>
            </div>
        </div>
    </div>
</section>
<section class="search_margin">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="search_box search_ylw-new">
                    <div class="search_ylw-new1">
                        <div class="row">
                            <div class="col-md-12">
                                <form class="form-inline" id="foot" method="post">
                                    <label for="sel1" class="lab_text">View tributes in memory of:</label>
                                    <input type="text" class="form-control form-control-new" placeholder="Name" name="nameper">
                                  <!--  <select class="form-control form-control-new" id="sel1" name="nameper">
                                        <option>All Memorials</option>
                                          <?php
                                          
                                         
                               $msg1 = $wpdb->get_results("SELECT * FROM `wp_tribute`");
     
                                foreach($msg1 as $val1)
                                {
                                ?>
                                 <option value="<?php echo $val1->fname; ?> <?php echo $val1->lname; ?>"><?php echo $val1->fname; ?> <?php echo $val1->lname; ?></option>
                                 <?php
                                    }
                                    ?>
                                    </select>-->
                                    <input type="submit" class="red_btn red_btn-new" value="SEARCH">
                                   <!-- <a href="" class="red_btn red_btn-new">SEARCH</a>-->
                                    <a href="" class="advance_Search">Advanced Search ›</a>
                                </form>
                            </div>
                        </div>
                    </div>
                     <div class="search_ylw-new2" style="display:none;">
                        <div class="row">
                            <div class="col-md-12">
                                <form method="post" id="advance">
                                    <p>*Fill in any field to narrow your search criteria.</p>
                                    <div class="row">
                                      <div class="col-md-6">
                                          <input type="text" class="form-control" placeholder="First Name" name="adfname">
                                          <input type="text" class="form-control" placeholder="Last Name" name="adlname">
                                      </div>
                                      <div class="col-md-6">
                                          <select class="form-control" id="sel1" name="birth">
                                               <option selected="selected" value="">Year Born</option>
                                                
                                               
                                          </select>
                                          <select class="form-control" id="sel2" name="death">
                                                <option selected="selected" value="">Year Passed Away</option>
                                                 
                                          </select>
                                      </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="row">
                                                <div class="col-md-3 col-lg-2 pad_right0">
                                                    <span class="span_text-new1">Gender</span>
                                                </div>
                                                <div class="col-md-9 col-lg-10 pad_left0">
                                                    <div class="radio_class">
                                                        <div class="radio radio-inline radio-inline-new">
                                                            <input type="radio" id="inlineRadio1" value="male" name="gender">
                                                            <label for="inlineRadio1"> Male </label>
                                                        </div>
                                                        <div class="radio radio-inline">
                                                            <input type="radio" id="inlineRadio2" value="female" name="gender">
                                                            <label for="inlineRadio2"> Female </label>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <ul class="list-inline reset_list">
                                                <li class="list-inline-item"><a id="reset">Reset</a></li>
                                                <li class="list-inline-item"><button name="advancesearchbtn" type="submit" class="red_btn">Apply FIlters</button></li>
                                            </ul>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<?php
if(empty($serlname))
{
?>

<section class="search_main">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                
                <div class="searchcount">
                    <?php
                $msg2 = $wpdb->get_results("SELECT count(*) as countred FROM `wp_tribute`");
                 foreach($msg2 as $val2)
                                {
                                ?>
                <h3 class="results_class">Your search has returned  <span> <?php echo $val2->countred; ?> </span>  results</h3>
                <?php
                                }
                                ?>
                </div>
                <div class="search_block-new" id="searchresult">
                    <?php
                   $msg1 = $wpdb->get_results("SELECT * FROM `wp_tribute`");
     
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
                                <?php
                                $pro=$val1->profileimg;
                                if(!empty($pro))
                                {
                                ?>
                                <img class="img-fluid w-100" alt="img" src="<?php echo get_site_url(); ?>/wp-content/uploads/<?php echo $pro; ?>">
                                <?php
                                }
                                ?>
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
                </div>
                <!--<a href="" class="setting_btn setting_btn1">Show More Memorials</a>-->
            </div>
        </div>
    </div>
</section>
<?php
}
else
{
?>
<section class="search_main">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                
                <div class="searchcount">
                    <?php
                $msg2 = $wpdb->get_results("SELECT count(*) as countred FROM `wp_tribute` where lname = '$serlname'");
                 foreach($msg2 as $val2)
                                {
                                ?>
                <h3 class="results_class">Your search has returned  <span> <?php echo $val2->countred; ?> </span>  results</h3>
                <?php
                                }
                                ?>
                </div>
                <div class="search_block-new" id="searchresult">
                    <?php
                   $msg1 = $wpdb->get_results("SELECT * FROM `wp_tribute` where lname = '$serlname'");
     
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
                                <?php
                                $pro=$val1->profileimg;
                                if(!empty($pro))
                                {
                                ?>
                                <img class="img-fluid w-100" alt="img" src="<?php echo get_site_url(); ?>/wp-content/uploads/<?php echo $val1->profileimg; ?>">
                                <?php
                                }
                                ?>
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
                </div>
               <!-- <a href="" class="setting_btn setting_btn1">Show More Memorials</a>-->
            </div>
        </div>
    </div>
</section>
<?php
}
?>
<style>
    input.red_btn.red_btn-new {
    border: none;
}
button.red_btn {
    border: none;
    width: 175px;
    height: 47px;
    line-height: 47px;
    margin-left: 10px;
}
a#reset {
    cursor: pointer;
}
</style>
<?php
endwhile;
endif;
get_footer();
?>
<script>
  $('#foot').on('submit', function(e){
var str = $( "#foot" ).serialize();
       e.preventDefault();
         $.ajax({
             url:'<?php echo get_site_url().'/singlememorysearch.php'; ?>',
             type:"post",
             data: str,
            
              success: function(data){
                
                  jQuery("#searchresult").html('');
                  jQuery("#searchresult").html(data);
                   var rowCount = $('#searchresult').html(data).find('.search_box-new').length;
                   $(".searchcount").html('');
                   $('.searchcount').html('<h3 class="results_class">Your search has returned  <span> '+ rowCount + '</span>  results</h3>');   
                   
           }
         });
    });  
    
    
</script>
<script>
   
$(document).ready(function(){
    $(".advance_Search").click(function(e){
        e.preventDefault()
      $(".search_ylw-new2").css("display", "block");
        
    });
   });
</script>
<script>
  $('#advance').on('submit', function(e){
var str1 = $( "#advance" ).serialize();
       e.preventDefault();
         $.ajax({
             url:'<?php echo get_site_url().'/advancememorysearch.php'; ?>',
             type:"post",
             data: str1,
            
              success: function(data){
                /*alert(data);*/
                  jQuery("#searchresult").html('');
                  jQuery("#searchresult").html(data);
                   var rowCount = $('#searchresult').html(data).find('.search_box-new').length;
                   $(".searchcount").html('');
                   $('.searchcount').html('<h3 class="results_class">Your search has returned  <span> '+ rowCount + '</span>  results</h3>');   
                   
           }
         });
    });  
    
    
</script>
<script>

$("#reset").on("click", function () {
   
    $(this).closest('form').find("input[type=text], textarea").val("");
    $('#sel1 option').prop('selected', function() {
        return this.defaultSelected;
    });
     $('#sel2 option').prop('selected', function() {
        return this.defaultSelected;
    });
    $( 'input[type="radio"]' ).prop('checked', false);
     alert("Value Reset");
});

</script>
<script>
    var min = 1990,
    max = 2021,
    select = document.getElementById('sel1');

for (var i = min; i<=max; i++){
    var opt = document.createElement('option');
    opt.value = i;
    opt.innerHTML = i;
    select.appendChild(opt);
}

select.value = new Date().getFullYear();
</script>
<script>
    var min = 1990,
    max = 2021,
    select = document.getElementById('sel2');

for (var i = min; i<=max; i++){
    var opt = document.createElement('option');
    opt.value = i;
    opt.innerHTML = i;
    select.appendChild(opt);
}

select.value = new Date().getFullYear();
</script>
