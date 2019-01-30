<?php
include 'wp-config.php';
 $wp_upload_dir = wp_upload_dir();
 
 if($_POST['rec']!='')
{
    $data= $_POST['rec'];
?>
 <img class="img-fluid feature_img" alt="img" src="<?php echo wp_get_attachment_url( get_post_thumbnail_id( $data));  ?>">
<?php
}
?>