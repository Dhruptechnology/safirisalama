<?php
/**
 * Implement a custom header for Twenty Thirteen 
 *
 * @link http://codex.wordpress.org/Custom_Headers 
 *
 * @package WordPress
 * @subpackage Twenty_Thirteen
 * @since Twenty Thirteen 1.0
 */

/**
 * Set up the WordPress core custom header arguments and settings.
 *
 * @uses add_theme_support() to register support for 3.4 and up.
 * @uses theme_header_style() to style front-end.
 * @uses theme_admin_header_style() to style wp-admin form.
 * @uses theme_admin_header_image() to add custom markup to wp-admin form.
 * @uses register_default_headers() to set up the bundled header images.
 *
 * @since Twenty Thirteen 1.0
 *
 * @return void
 */
 
function include_core_jqueryfile()
{
?>
	<script src="//ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
	<script type="text/javascript">
	
		$(document).ready( function($){
			
			 // postbox click start
			 $(".menudiv").click(function(){
				 
				var rowid = $(this).parent('.postbox').attr("rowid");
				if($(this).parent('.postbox').hasClass("closed"))
				{
					$(this).parent('.postbox').removeClass("closed");
					$("#theme_admin_last_open_tab_no").val(rowid);
				}
				else
				{
					$(this).parent('.postbox').addClass("closed");
					$("#theme_admin_last_open_tab_no").val("");
				}				
				
			 });
			 // postbox click end

			 
			 
		}); // ready end here
	
    </script>
    
<?php
}

//======================= code for home page edit start

function setup_theme_admin_menus() {  
    add_submenu_page('themes.php', 'Front Page Elements', 'theme Settings', 'manage_options',  'theme-settings', 'theme_home_page_settings');   
}  
add_action("admin_menu", "setup_theme_admin_menus");


function theme_home_page_settings() {
	include_core_jqueryfile();
	
	
	
	if(isset($_POST["update_settings"])) {
    // Do the saving

//one page website start ===========================================================================================


	// about me Section 
		$theme_photo_end_image = esc_attr($_POST['theme_photo_hidden']);
		if($_FILES['theme_photo_end_image']['error'] <= 0)
		{
			$types = array("image/png","image/gif","image/jpeg","image/jpg","image/pjpeg","image/x-png","image/png","image/xbm","image/jp2","image/tiff","image/bmp");
			if(in_array($_FILES["theme_photo_end_image"]["type"],$types))
			{
				$tmp_name = $_FILES["theme_photo_end_image"]["tmp_name"];
				$imagename = rand(1,9999999999).str_replace(' ','_',$_FILES["theme_photo_end_image"]["name"]);
				$upload_dir = wp_upload_dir();
				$uplodepath = $upload_dir['path']."/".$imagename;
				move_uploaded_file($tmp_name, $uplodepath);
				$theme_photo_end_image = $upload_dir['url']."/".$imagename;
			}
		}  
		update_option("theme_photo_about", $theme_photo_end_image);


$theme_photo_end_image1 = esc_attr($_POST['theme_photo_hidden1']);
		if($_FILES['theme_photo_end_image1']['error'] <= 0)
		{
			$types = array("image/png","image/gif","image/jpeg","image/jpg","image/pjpeg","image/x-png","image/png","image/xbm","image/jp2","image/tiff","image/bmp");
			if(in_array($_FILES["theme_photo_end_image1"]["type"],$types))
			{
				$tmp_name = $_FILES["theme_photo_end_image1"]["tmp_name"];
				$imagename = rand(1,9999999999).str_replace(' ','_',$_FILES["theme_photo_end_image1"]["name"]);
				$upload_dir = wp_upload_dir();
				$uplodepath = $upload_dir['path']."/".$imagename;
				move_uploaded_file($tmp_name, $uplodepath);
				$theme_photo_end_image1 = $upload_dir['url']."/".$imagename;
			}
		}  
		update_option("theme_photo_banner", $theme_photo_end_image1);
		



		$theme_about_me_title = esc_attr($_POST["theme_about_me_title"]);   
		update_option("theme_about_me_title", $theme_about_me_title);

		$theme_name = esc_attr($_POST["theme_name"]);   
		update_option("theme_name", $theme_name);
				
		$theme_designation = esc_attr($_POST["theme_designation"]);   
		update_option("theme_designation", $theme_designation);
				
		$theme_intro = esc_attr($_POST["theme_intro"]);   
		update_option("theme_intro", $theme_intro);
		
		$theme_description = esc_attr($_POST["theme_description"]);   
		update_option("theme_description", $theme_description);
		
		$theme_birthday = esc_attr($_POST["theme_birthday"]);   
		update_option("theme_birthday", $theme_birthday);
		
		$theme_phone_number = esc_attr($_POST["theme_phone_number"]);   
		update_option("theme_phone_number", $theme_phone_number);
		
		$theme_website = esc_attr($_POST["theme_website"]);   
		update_option("theme_website", $theme_website);
		
		$theme_e_mail = esc_attr($_POST["theme_e_mail"]);   
		update_option("theme_e_mail", $theme_e_mail);
	// about me section end
		
	// Portfolio Category Start	
		$portfolio_homepage_setting = esc_attr($_POST["portfolio_homepage_setting"]);   
		update_option("portfolio_homepage_setting", $portfolio_homepage_setting);
	// Portfolio Category end
	
	
	// Contact US start
	
	$theme_photo_end_image2 = esc_attr($_POST['theme_photo_hidden2']);
        if($_FILES['theme_photo_end_image2']['error'] <= 0)
        {
            $types = array("image/png","image/gif","image/jpeg","image/jpg","image/pjpeg","image/x-png","image/png","image/xbm","image/jp2","image/tiff","image/bmp");
            if(in_array($_FILES["theme_photo_end_image2"]["type"],$types))
            {
                $tmp_name = $_FILES["theme_photo_end_image2"]["tmp_name"];
                $imagename = rand(1,9999999999).str_replace(' ','_',$_FILES["theme_photo_end_image2"]["name"]);
                $upload_dir = wp_upload_dir();
                $uplodepath = $upload_dir['path']."/".$imagename;
                move_uploaded_file($tmp_name, $uplodepath);
                $theme_photo_end_image2 = $upload_dir['url']."/".$imagename;
            }
        }  
        update_option("theme_photo_about2", $theme_photo_end_image2);
        
        
        $theme_photo_end_imagelogo = esc_attr($_POST['theme_photo_hiddenlogo']);
        if($_FILES['theme_photo_end_imagelogo']['error'] <= 0)
        {
            $types = array("image/png","image/gif","image/jpeg","image/jpg","image/pjpeg","image/x-png","image/png","image/xbm","image/jp2","image/tiff","image/bmp");
            if(in_array($_FILES["theme_photo_end_imagelogo"]["type"],$types))
            {
                $tmp_name = $_FILES["theme_photo_end_imagelogo"]["tmp_name"];
                $imagename = rand(1,9999999999).str_replace(' ','_',$_FILES["theme_photo_end_imagelogo"]["name"]);
                $upload_dir = wp_upload_dir();
                $uplodepath = $upload_dir['path']."/".$imagename;
                move_uploaded_file($tmp_name, $uplodepath);
                $theme_photo_end_imagelogo = $upload_dir['url']."/".$imagename;
            }
        }  
        update_option("theme_photo_logo", $theme_photo_end_imagelogo);
        
        
		$theme_contact_title = esc_attr($_POST["theme_contact_title"]);   
		update_option("theme_contact_title", $theme_contact_title);

		$theme_contact_address = esc_attr($_POST["theme_contact_address"]);   
		update_option("theme_contact_address", $theme_contact_address);

		$theme_contact_phone_number	= esc_attr($_POST["theme_contact_phone_number"]);   
		update_option("theme_contact_phone_number", $theme_contact_phone_number	);

		$theme_contact_website = esc_attr($_POST["theme_contact_website"]);   
		update_option("theme_contact_website", $theme_contact_website);
	// Contact US End

	//Footer Copyright text
		$theme_footer_copyright = esc_attr($_POST["theme_footer_copyright"]);   
		update_option("theme_footer_copyright", $theme_footer_copyright);
		
		$theme_foote_social_link_facebook = esc_attr($_POST["theme_foote_social_link_facebook"]);   
		update_option("theme_foote_social_link_facebook", $theme_foote_social_link_facebook);
		
		$theme_footer_social_link_twitter = esc_attr($_POST["theme_footer_social_link_twitter"]);   
		update_option("theme_footer_social_link_twitter", $theme_footer_social_link_twitter);
		
		$theme_footer_social_link_instagram = esc_attr($_POST["theme_footer_social_link_instagram"]);   
		update_option("theme_footer_social_link_instagram", $theme_footer_social_link_instagram);
		
		$theme_social_link_share = esc_attr($_POST["theme_social_link_share"]);   
		update_option("theme_social_link_share", $theme_social_link_share);
	//Footer Copyright text end

		//echo $theme_content_image;
		//$msg = '<div id="message" class="updated  below-h2"><p><strong>Theme Settings updated.</strong></p></div>';
		$msg = '<div class="updated below-h2" id="message"><p>Theme Settings updated.</p></div>';
	} // form saving end
?>
<style>
	
	.form-table img{
		background:  #F7F7F7;
		border: 1px solid #BDBDBD;
		border-radius: 3px;
		padding: 10px;
	}

</style>
  <link href="<?php echo esc_url(home_url('/'));?>wp-admin/load-styles.php?c=1&dir=ltr&load=dashicons,admin-bar,buttons,media-views,wp-admin,wp-auth-check&ver=3.8.3" rel="stylesheet">
  <link href="<?php echo esc_url(home_url('/'));?>wp-admin/css/colors.min.css?ver=3.8.3" rel="stylesheet">

<?php

include('insertimages.php');
$categories = get_categories();
?>

    
    <div class="wrap">
        <?php screen_icon('themes'); ?> 
 		<h2>theme Theme Setting</h2>
        <?php echo $msg;?>
        <form method="POST" action="" enctype="multipart/form-data">
        <input type="hidden" name="update_settings" value="Y" />
        <input type="hidden" name="theme_admin_last_open_tab_no" id="theme_admin_last_open_tab_no" value="<?php echo get_option('theme_admin_last_open_tab_no'); ?>" />
        
        
        <div id="dashboard-widgets-wrap">
        	<div id="dashboard-widgets" class="metabox-holder">
                <div id="postbox-container-1" class="postbox-container" style="width: 95%;">
                	<div id="normal-sortables" class="meta-box-sortables ui-sortable">
                    
                    <span style="font-size: 12px;color: #cc181e;">Note :</span>
                    <p class="description" style="margin-left: 30px;">Please, Select Primary Menu in Menu Settings for menu in this theme.<br>
                    Please use Text Widgets for footer section.<br>
                    Please refer `Screenshot 4 Hint` in Contact us section.<br>
                    &nbsp;
                    </p>
<!-- web site start ------------------------------------------------------------------------------------------------->
                    
            <div id="dashboard_right_now" rowid="row11" class="postbox  <?php if(get_option('theme_admin_last_open_tab_no') != "row11") { echo 'closed'; } ?>"> <!-- closed -->
            <div class="handlediv menudiv" title="Click to toggle"><br></div>
            <h3 class="hndle menudiv " style="cursor: pointer !important;">
            <span>Header Setting</span>&nbsp;
            </h3>
            <div class="inside">
            <div class="main">
            
                <table class="form-table">
                    <tbody>
                    
                      <tr class="form-field form-required">
                        <th scope="row"><h4>Header logo :</h4></th>
                        <td>
                            <input type="hidden" name="theme_photo_hidden" value="<?php echo get_option("theme_photo_about");?>" />
                            <input type="file" name="theme_photo_end_image"  />
                            <div <?php if(get_option("theme_photo_about") == "") { echo 'style="display:none";';}?>>
                                <a href="<?php echo get_option("theme_photo_about");?>" target="_blank">
                                    <img src="<?php echo get_option("theme_photo_about");?>" height="100" width="150">
                                </a>
                            </div>
                        </td>
                    </tr>
                    
                     <tr class="form-field form-required">
                        <th scope="row"><h4>Phone-Number :</h4></th>
                        <td>
                        <input type="text" name="theme_phone_number" value="<?php echo get_option("theme_phone_number");?>" size="60" />
                        </td>
                    </tr>
                    
                    <tr class="form-field form-required">
                        <th scope="row"><h4>Address :</h4></th>
                        <td>
                            <input type="text" name="theme_description" value="<?php echo get_option("theme_description");?>" size="60" />
                        </td>
                    </tr>
                    
                    <tr class="form-field form-required">
                        <th scope="row"><h4>Address2 :</h4></th>
                        <td>
                            <input type="text" name="theme_intro" value="<?php echo get_option("theme_intro");?>" size="60" />
                        </td>
                    </tr>
                     
                    <tr class="form-field form-required">
                        <th scope="row"><h4>E-mail :</h4></th>
                        <td>
                        <input type="text" name="theme_e_mail" value="<?php echo get_option("theme_e_mail");?>" size="60" />
                        </td>
                    </tr>
                    
                    </tbody>
                </table>
            </div>
            </div>
            </div>
            
            
            <!--<div id="dashboard_right_now" rowid="row13" class="postbox  <?php if(get_option('theme_admin_last_open_tab_no') != "row13") { echo 'closed'; } ?>"> -->
            <!--<div class="handlediv menudiv" title="Click to toggle"><br></div>-->
            <!--<h3 class="hndle menudiv " style="cursor: pointer !important;">-->
            <!--<span>Contact Setting</span>&nbsp;-->
            <!--</h3>-->
            <!--<div class="inside">-->
            <!--<div class="main">-->
            
            <!--    <table class="form-table">-->
            <!--        <tbody>-->
                    
                    
            <!--        <tr class="form-field form-required">-->
            <!--            <th scope="row"><h4>Contact Title :</h4></th>-->
            <!--            <td><input type="text" name="theme_contact_title" value="<?php echo get_option("theme_contact_title");?>" size="60" />-->
                          
            <!--        </tr>-->
                    
            <!--         <tr class="form-field form-required">-->
            <!--            <th scope="row"><h4>Contact logo :</h4></th>-->
            <!--             <td>-->
            <!--                <input type="hidden" name="theme_photo_hiddenlogo" value="<?php echo get_option("theme_photo_logo");?>" />-->
            <!--                <input type="file" name="theme_photo_end_imagelogo"  />-->
            <!--                <div <?php if(get_option("theme_photo_logo") == "") { echo 'style="display:none";';}?>>-->
            <!--                    <a href="<?php echo get_option("theme_photo_logo");?>" target="_blank">-->
            <!--                        <img src="<?php echo get_option("theme_photo_logo");?>" height="100" width="150">-->
            <!--                    </a>-->
            <!--                </div>-->
            <!--            </td>-->
                          
            <!--        </tr>-->

                       
                   
            <!--       <tr class="form-field form-required">-->
            <!--            <th scope="row"><h4>Address :</h4></th>-->
            <!--            <td>-->
            <!--            <input type="text" name="theme_contact_address" value="<?php echo get_option("theme_contact_address");?>" size="60" />-->
            <!--            </td>-->
            <!--        </tr>-->
                   
            <!--       <tr class="form-field form-required">-->
            <!--            <th scope="row"><h4>Phone Number :</h4></th>-->
            <!--            <td>-->
            <!--            <input type="text" name="theme_contact_phone_number" value="<?php echo get_option("theme_contact_phone_number");?>" size="60" />-->
            <!--            </td>-->
            <!--        </tr>-->
                    
            <!--         <tr class="form-field form-required">-->
            <!--            <th scope="row"><h4>Website :</h4></th>-->
            <!--            <td>-->
            <!--            <input type="text" name="theme_contact_website" value="<?php echo get_option("theme_contact_website");?>" size="60" />-->
            <!--            </td>-->
            <!--        </tr>-->
                    
            <!--        </tbody>-->
            <!--    </table>-->
            <!--</div>-->
            <!--</div>-->
            <!--</div>-->
            
            <div id="dashboard_right_now" rowid="row14" class="postbox <?php if(get_option('theme_admin_last_open_tab_no') != "row14") { echo 'closed'; } ?>"> <!-- closed -->
            <div class="handlediv menudiv" title="Click to toggle"><br></div>
            <h3 class="hndle menudiv " style="cursor: pointer !important;">
            <span>Footer Setting </span>&nbsp;
            </h3>
            <div class="inside">
            <div class="main">
            <span style="font-size: 12px;color: #cc181e;">Note : Please, Leave blank for hide.</span><p class="description">Use your full social url.</p>
                <table class="form-table">
                   <tbody>
                    
                    <tr class="form-field form-required">
                        <th scope="row"><h4>Footer photo :</h4></th>
                         <td>
                            <input type="hidden" name="theme_photo_hidden2" value="<?php echo get_option("theme_photo_about2");?>" />
                            <input type="file" name="theme_photo_end_image2"  />
                            <div <?php if(get_option("theme_photo_about2") == "") { echo 'style="display:none";';}?>>
                                <a href="<?php echo get_option("theme_photo_about2");?>" target="_blank">
                                    <img src="<?php echo get_option("theme_photo_about2");?>" height="100" width="150">
                                </a>
                            </div>
                        </td>
                          
                    </tr>
                    
                   <!--<tr class="form-field">-->
                   <!--     <th scope="row"><h4>Footer Copyright Text :</h4></th>-->
                   <!--     <td><input type="text" name="theme_footer_copyright" value="<?php echo get_option("theme_footer_copyright");?>" /></td>-->
                   <!-- </tr>-->
                   
                   <tr class="form-field">
                        <th scope="row"><h4> Facebook :</h4></th>
                        <td><input type="text" name="theme_foote_social_link_facebook" value="<?php echo get_option("theme_foote_social_link_facebook");?>" /></td>
                    </tr>
                   
                    <tr class="form-field">
                        <th scope="row"><h4> Twitter :</h4></th>
                        <td><input type="text" name="theme_footer_social_link_twitter" value="<?php echo get_option("theme_footer_social_link_twitter");?>" /></td>
                    </tr>
                    
                    <tr class="form-field">
                        <th scope="row"><h4> Instagram :</h4></th>
                        <td><input type="text" name="theme_footer_social_link_instagram" value="<?php echo get_option("theme_footer_social_link_instagram");?>" /></td>
                    </tr>
                   
                    <tr class="form-field">
                        <th scope="row"><h4> Dribble :</h4></th>
                        <td> <input type="text" name="theme_social_link_share" value="<?php echo get_option("theme_social_link_share");?>" /></td>
                    </tr>
                    </tbody>
                </table>
            </div>
            </div>
            </div> <!-- Social -->
            
                    </div>
                </div>	
            </div>
        </div>
		<p class="submit"><input type="submit" value="Update settings" class="button button-primary" id="createusersub" name="createuser"></p>
		</form>
    </div>
    <?php 
}
?>