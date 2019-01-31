<?php
/*
Plugin Name: Memories
Description: Memories
Plugin URI: 
Author URI: 
Author: 
License: 
Version: 
*/
global $custom_table_example_db_version;
$custom_table_example_db_version = '1.1'; // version changed from 1.0 to 1.1


if(($_REQUEST['page']=='property_form') )
{
 add_action( 'admin_enqueue_scripts', 'load_admin_styles' );
      function load_admin_styles() {
        wp_enqueue_style( 'admin_css_foo', 'https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css' , false, '1.0.0' );
          wp_enqueue_style( 'admin_css_foo', 'https://code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css',false, '1.0.0' );
     
      } 

function pw_loading_scripts_wrong() {
  echo '<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js"></script>';
echo  '<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>';
}

add_action('admin_head', 'my_custom_fonts');

}
 

add_action('admin_head', 'pw_loading_scripts_wrong');
if(($_REQUEST['page']=='property_detail_form') )
{
 add_action( 'admin_enqueue_scripts', 'load_admin_styles' );
      function load_admin_styles() {
        wp_enqueue_style( 'admin_css_foo', 'https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css' , false, '1.0.0' );
     
      } 

function pw_loading_scripts_wrong() {
  echo '<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js"></script>';
}

add_action('admin_head', 'my_custom_fonts');

}
 

add_action('admin_head', 'pw_loading_scripts_wrong');
function custom_table_example_install()
{
    global $wpdb;
    global $custom_table_example_db_version;

    $table_name = $wpdb->prefix . 'tribute'; // do not forget about tables prefix

    $sql = "CREATE TABLE " . $table_name . " (
  id int(11) NOT NULL AUTO_INCREMENT,
  fname varchar(200) DEFAULT NULL,
  lname varchar(200) NOT NULL,
  birth_country varchar(200) NOT NULL,
  death_country varchar(200) NOT NULL,
  middname varchar(200) NOT NULL,
  nickname varchar(200) NOT NULL,
  gender varchar(200) NOT NULL,
  fulldeathdate varchar(200) NOT NULL,
  fullbirthdate varchar(200) NOT NULL,
  webaddress varchar(300) NOT NULL,
  relationname varchar(200) NOT NULL,
  rphone varchar(200) NOT NULL,
  rfname varchar(200) NOT NULL,
  rsurname varchar(200) NOT NULL,
  radd varchar(300) NOT NULL,
  remailadd varchar(300) NOT NULL,
  florida varchar(300) NOT NULL,
  accountname varchar(300) NOT NULL,
  accountlname varchar(300) NOT NULL,
  acountemail varchar(300) NOT NULL,
  accountpassword varchar(300) NOT NULL,
  privacy varchar(100) NOT NULL,
  birthplace varchar(200) NOT NULL,
  deathplace varchar(200) NOT NULL,
  location varchar(200) NOT NULL,
  town varchar(200) NOT NULL,
  fdate varchar(200) NOT NULL,
  ftime varchar(200) NOT NULL,
  burial_country varchar(200) NOT NULL,
  burial_town varchar(200) NOT NULL,
  burial_date varchar(200) NOT NULL,
  burial_time varchar(200) NOT NULL,
  burial_location varchar(200) NOT NULL,
  burial_cemetery varchar(200) NOT NULL,
  crematorium_town varchar(100) NOT NULL,
  crematorium varchar(200) NOT NULL,
  crematorium_time varchar(200) NOT NULL,
  funeral_com_fname varchar(200) NOT NULL,
  funeral_com_secondname varchar(200) NOT NULL,
  funeral_com_telephone varchar(100) NOT NULL,
  funeral_com_town varchar(100) NOT NULL,
  funeral_com_location varchar(100) NOT NULL,
  funeral_com_building varchar(100) NOT NULL,
  funeral_com_mettingdate varchar(200) NOT NULL,
  google_map_location varchar(200) NOT NULL,
  notice varchar(200) NOT NULL,
  notice_posted varchar(200) NOT NULL,
  notice_posted_date varchar(200) NOT NULL,
  about_description text NOT NULL,
  songname varchar(300) NOT NULL,
  profileimg varchar(300) NOT NULL,
  PRIMARY KEY (id)    );";

    require_once(ABSPATH . 'wp-admin/includes/upgrade.php');
    dbDelta($sql);

    add_option('custom_table_example_db_version', $custom_table_example_db_version);

    $installed_ver = get_option('custom_table_example_db_version');
    if ($installed_ver != $custom_table_example_db_version) {
        $sql = "CREATE TABLE " . $table_name . " (
      id int(11) NOT NULL AUTO_INCREMENT,
  fname varchar(200) DEFAULT NULL,
  lname varchar(200) NOT NULL,
  birth_country varchar(200) NOT NULL,
  death_country varchar(200) NOT NULL,
  middname varchar(200) NOT NULL,
  nickname varchar(200) NOT NULL,
  gender varchar(200) NOT NULL,
  fulldeathdate varchar(200) NOT NULL,
  fullbirthdate varchar(200) NOT NULL,
  webaddress varchar(300) NOT NULL,
  relationname varchar(200) NOT NULL,
  rphone varchar(200) NOT NULL,
  rfname varchar(200) NOT NULL,
  rsurname varchar(200) NOT NULL,
  radd varchar(300) NOT NULL,
  remailadd varchar(300) NOT NULL,
  florida varchar(300) NOT NULL,
  accountname varchar(300) NOT NULL,
  accountlname varchar(300) NOT NULL,
  acountemail varchar(300) NOT NULL,
  accountpassword varchar(300) NOT NULL,
  privacy varchar(100) NOT NULL,
  birthplace varchar(200) NOT NULL,
  deathplace varchar(200) NOT NULL,
  location varchar(200) NOT NULL,
  town varchar(200) NOT NULL,
  fdate varchar(200) NOT NULL,
  ftime varchar(200) NOT NULL,
  burial_country varchar(200) NOT NULL,
  burial_town varchar(200) NOT NULL,
  burial_date varchar(200) NOT NULL,
  burial_time varchar(200) NOT NULL,
  burial_location varchar(200) NOT NULL,
  burial_cemetery varchar(200) NOT NULL,
  crematorium_town varchar(100) NOT NULL,
  crematorium varchar(200) NOT NULL,
  crematorium_time varchar(200) NOT NULL,
  funeral_com_fname varchar(200) NOT NULL,
  funeral_com_secondname varchar(200) NOT NULL,
  funeral_com_telephone varchar(100) NOT NULL,
  funeral_com_town varchar(100) NOT NULL,
  funeral_com_location varchar(100) NOT NULL,
  funeral_com_building varchar(100) NOT NULL,
  funeral_com_mettingdate varchar(200) NOT NULL,
  google_map_location varchar(200) NOT NULL,
  notice varchar(200) NOT NULL,
  notice_posted varchar(200) NOT NULL,
  notice_posted_date varchar(200) NOT NULL,
  about_description text NOT NULL,
  songname varchar(300) NOT NULL,
  profileimg varchar(300) NOT NULL,
  
  PRIMARY KEY (id)    
  );";


        require_once(ABSPATH . 'wp-admin/includes/upgrade.php');
        dbDelta($sql);

        // notice that we are updating option, rather than adding it
        update_option('custom_table_example_db_version', $custom_table_example_db_version);
    }
}

register_activation_hook(__FILE__, 'custom_table_example_install');


function custom_table_example_install_data()
{
    global $wpdb;

    $table_name = $wpdb->prefix . 'tribute'; // do not forget about tables prefix

 
}

register_activation_hook(__FILE__, 'custom_table_example_install_data');


function custom_table_example_update_db_check()
{
    global $custom_table_example_db_version;
    if (get_site_option('custom_table_example_db_version') != $custom_table_example_db_version) {
        custom_table_example_install();
    }
}

add_action('plugins_loaded', 'custom_table_example_update_db_check');


if (!class_exists('WP_List_Table')) {
    require_once(ABSPATH . 'wp-admin/includes/class-wp-list-table.php');
}

class Custom_Table_Example_List_Table extends WP_List_Table
{
   
    function __construct()
    {
        global $status, $page;

        parent::__construct(array(
            'singular' => 'Memories',
            'plural' => 'Memories',
        ));
    }

    function column_default($item, $column_name)
    {
        return $item[$column_name];
    }

    
    function column_fname($item)
    {
        return '<em>' . $item['fname'] . '</em>';
    }

    
    function column_id($item)
    {
            $actions = array(
              'view'=>sprintf('<a href="?page=property_detail_form&id=%s">%s</a>', $item['id'], __('View', 'custom_table_example')),
            'edit' => sprintf('<a href="?page=property_form&id=%s">%s</a>', $item['id'], __('Edit', 'custom_table_example')),
            'delete' => sprintf('<a href="?page=%s&action=delete&id=%s">%s</a>', $_REQUEST['page'], $item['id'], __('Delete', 'custom_table_example')),
        );

        return sprintf('%s %s',
            $item['id'],
            $this->row_actions($actions)
        );
    }

  
    function column_cb($item)
    {
        return sprintf(
            '<input type="checkbox" name="id[]" value="%s" />',
            $item['id']
        );
    }

 
    function get_columns()
    {
        $columns = array(
             'cb' => '<input type="checkbox" />', //Render a checkbox instead of text
           'id'=> __('Memories', 'custom_table_example'),
             'fname'=> __('FName', 'custom_table_example'),
             'lname'=> __('Lname', 'custom_table_example'),
            'birth_country' => __('Birth Country', 'custom_table_example'),
              'death_country' => __('Death Country', 'custom_table_example'),
             
              'gender'=>__('Gender', 'custom_table_example'),
              'fulldeathdate'=>__('Death Date', 'custom_table_example'),
              'fullbirthdate'=>__('Birth Date', 'custom_table_example'),
              'webaddress'=>__('Webaddress', 'custom_table_example'),
              
           
        );
        return $columns;
    }

  
    function get_sortable_columns()
    {
        $sortable_columns = array(
             'id' => array('id', true),
            'fname'=>array('fname',false),
            'lname' => array('lname', false),
            'birth_country'=>array('birth_country',true),
            'death_country' => array('death_country', false),
            'middname'=>array('middname', false),
            'nickname' => array('nickname', false),
            'gender'=>array('gender', false),
            
            'fulldeathdate' => array('fulldeathdate', false),
            'fullbirthdate'=>array('fullbirthdate', false),
            'webaddress' => array('webaddress', false),
            'relationname'=>array('relationname', false),
            'rphone' => array('rphone', false),
            'rfname'=>array('rfname', false),
            'rsurname' => array('rsurname', false),
            'radd'=>array('radd', false),
            'remailadd' => array('remailadd', false),
            'accountname'=>array('accountname', false),
            'accountlname' => array('accountlname', false),
            'acountemail' => array('acountemail', false),
            'accountpassword'=>array('accountpassword', false),
            'privacy' => array('privacy', false),
            'birthplace'=>array('birthplace', false),
            'deathplace' => array('deathplace', false),
            'location'=>array('location', false),
            'town' => array('town', false),
            'fdate'=>array('fdate', false),
            'ftime' => array('ftime', false),
            'burial_country'=>array('burial_country', false),
            'burial_town' => array('burial_town', false),
            'burial_date'=>array('burial_date', false),
            'burial_time' => array('burial_time', false),
            'burial_location'=>array('burial_location', false),
            
             'burial_cemetery' => array('burial_cemetery', false),
            'crematorium_town'=>array('crematorium_town', false),
            'crematorium' => array('crematorium', false),
            'crematorium_time'=>array('crematorium_time', false),
            'funeral_com_fname' => array('funeral_com_fname', false),
            'funeral_com_secondname'=>array('funeral_com_secondname', false),
            'funeral_com_telephone' => array('funeral_com_telephone', false),
            'funeral_com_town'=>array('funeral_com_town', false),
            'funeral_com_location' => array('funeral_com_location', false),
            'funeral_com_building'=>array('funeral_com_building', false),
            'funeral_com_mettingdate' => array('funeral_com_mettingdate', false),
            'google_map_location'=>array('google_map_location', false),
            'notice' => array('notice', false),
            'notice_posted'=>array('notice_posted', false),
            'notice_posted_date'=>array('notice_posted_date', false),
            'about_description'=>array('about_description', false),
            'songname'=>array('songname', false),
            'themeid'=>array('themeid', false),
            'profileimg'=>array('profileimg', false),
          );
        return $sortable_columns;
    }

    function get_bulk_actions()
    {
        $actions = array(
            'delete' => 'Delete'
        );
        return $actions;
    }

    
    function process_bulk_action()
    {
        global $wpdb;
        $table_name = $wpdb->prefix . 'tribute'; // do not forget about tables prefix

        if ('delete' === $this->current_action()) {
            $ids = isset($_REQUEST['id']) ? $_REQUEST['id'] : array();
            if (is_array($ids)) $ids = implode(',', $ids);

            if (!empty($ids)) {
                $wpdb->query("DELETE FROM $table_name WHERE id IN($ids)");
            }
        }
    }

  
    function prepare_items()
    {
        global $wpdb;
        $table_name = $wpdb->prefix . 'tribute'; // do not forget about tables prefix

        $per_page = 10; // constant, how much records will be shown per page

        $columns = $this->get_columns();
        $hidden = array();
        $sortable = $this->get_sortable_columns();

        $this->_column_headers = array($columns, $hidden, $sortable);
        $this->process_bulk_action();

        $total_items = $wpdb->get_var("SELECT COUNT(id) FROM $table_name");

        $paged = isset($_REQUEST['paged']) ? max(0, intval($_REQUEST['paged']) - 1) : 0;
        $orderby = (isset($_REQUEST['orderby']) && in_array($_REQUEST['orderby'], array_keys($this->get_sortable_columns()))) ? $_REQUEST['orderby'] : 'id';
        $order = (isset($_REQUEST['order']) && in_array($_REQUEST['order'], array('asc', 'desc'))) ? $_REQUEST['order'] : 'asc';
          $se=isset($_REQUEST['s'])?$_REQUEST['s']:'';
       //$this->items = $wpdb->get_results($wpdb->prepare("SELECT * FROM $table_name ORDER BY $orderby $order LIMIT %d OFFSET %d", $per_page, $paged), ARRAY_A);
     $this->items = $wpdb->get_results($wpdb->prepare("SELECT * from $table_name WHERE id LIKE %s OR fname  LIKE %s OR lname LIKE %s OR fulldeathdate LIKE %s OR fullbirthdate LIKE %s ORDER BY $orderby $order LIMIT %d OFFSET %d", '%' . $wpdb->esc_like($se) . '%', '%' . $wpdb->esc_like($se) . '%','%' . $wpdb->esc_like($se) . '%','%' . $wpdb->esc_like($se) . '%','%' . $wpdb->esc_like($se) . '%', $per_page, $paged), ARRAY_A);
    $total_items = $wpdb->get_var("SELECT COUNT(id) FROM $table_name");
        $this->set_pagination_args(array(
            'total_items' => count($this->items), // total items defined above
            'per_page' => $per_page, // per page constant defined at top of method
            'total_pages' => ceil($total_items / $per_page) // calculate pages count
        ));
    }
}


function custom_table_example_admin_menu()
{
    add_menu_page(__('property', 'custom_table_example'), __('Memories', 'custom_table_example'), 'activate_plugins', 'property', 'custom_table_example_propertys_page_handler');
    add_submenu_page('property', __('Memories', 'custom_table_example'), __('Memories', 'custom_table_example'), 'activate_plugins', 'property', 'custom_table_example_propertys_page_handler');
    add_submenu_page('property', __('Add new', 'custom_table_example'), __('Add new', 'custom_table_example'), 'activate_plugins', 'property_form', 'custom_table_example_property_form_page_handler');
    add_submenu_page('Property details', __('propert details', 'custom_table_example'), __('Property detail', 'custom_table_example'), 'activate_plugins', 'property_detail_form', 'custom_table_example_property_detail_form_page_handler');

}

add_action('admin_menu', 'custom_table_example_admin_menu');


function custom_table_example_propertys_page_handler()
{
    global $wpdb;
    $table = new Custom_Table_Example_List_Table();
    $table->prepare_items();
    $message = '';
    if ('delete' === $table->current_action()) {
        $message = '<div class="updated below-h2" id="message"><p>' . sprintf(__('Property deleted: %d', 'custom_table_example'), count($_REQUEST['id'])) . '</p></div>';
    }
    ?>
<div class="wrap">
    <div class="icon32 icon32-posts-post" id="icon-edit"><br></div>
    <h2><?php _e('Memories', 'custom_table_example')?> <!--<a class="add-new-h2"
     href="<?php echo get_admin_url(get_current_blog_id(), 'admin.php?page=property_form');?>"><?php _e('Add new Property', 'custom_table_example')?></a>-->
<a class="add-new-h2" href="http://dhruphost.com/wordpress/dhjune2016_131/wp-admin/admin.php?page=property">Reset search                             
                                 </a>
    </h2>
    <?php echo $message; ?>
<form id="propertys-search" method="GET" >

<p class="search-box">
        <input type="hidden" name="page" value="<?php echo $_REQUEST['page'] ?>"/>
  <label class="screen-reader-text" for="post-search-input">Search:</label>
  <input type="search" id="post-search-input" name="s" value="">
  <input type="submit" id="search-submit" class="button" value="<?php _e('Search', 'custom_table_example')?>"></p>
</form>
    <form id="propertys-table" method="GET" class="form-horizontal" enctype="multipart/form-data">
        <input type="hidden" name="page" value="<?php echo $_REQUEST['page'] ?>"/>
     <div class="table-responsive">
        <?php $table->display() ?>
        </div>>
    </form>

</div>
<?php
}
function custom_table_example_property_form_page_handler()
{
    global $wpdb;
    $table_name = $wpdb->prefix . 'tribute'; 
    $message = '';
    $notice = '';


$wp_upload_dir = wp_upload_dir();
   $uploadd= $wp_upload_dir['basedir'];
   
  $upimages=$_FILES['userfile']['name'];
   move_uploaded_file( $_FILES['userfile']['tmp_name'],$uploadd.'/'.$_FILES['userfile']['name']);

if($upimages!='')
  {
  $pimages=$upimages;
  }else
  {
  $pimages=$_POST['uphoto'];
  } 
 


$pimage=$fileName;
    $default = array(
       'id' => 0,
         'fname' => '',
         'lname' => '',
        'birth_country' => '',
        'death_country' =>'',
       'middname' =>'',
       'nickname'=>'',
              'gender'=>'',
              'fulldeathdate'=>'',
              'fullbirthdate'=>'',
              'webaddress'=>'',
              'relationname'=>'',
              'rphone'=>'',
              'rfname'=>'',
              'rsurname'=>'',
              'radd'=>'',
              'remailadd'=>'',
              'accountname'=>'',
              'accountlname'=>'',
              'acountemail'=>'',
              'accountpassword'=>'',
              'privacy'=>'',
              'birthplace'=>'',
              'deathplace'=>'',
              'location'=>'',
              'town'=>'',
              'fdate'=>'',
              'ftime'=>'',
              'burial_country'=>'',
              'burial_town'=>'',
              'burial_date'=>'',
              'burial_time'=>'',
              'burial_location'=>'',
              'burial_cemetery'=>'',
              'crematorium_town'=>'',
              'crematorium'=>'',
              'crematorium_time'=>'',
              'funeral_com_fname'=>'',
              'funeral_com_secondname'=>'',
              'funeral_com_telephone'=>'',
              'funeral_com_town'=>'',
              'funeral_com_location'=>'',
              'funeral_com_building'=>'',
              'funeral_com_mettingdate'=>'',
              'google_map_location'=>'',
              'notice'=>'',
              'notice_posted'=>'',
              'notice_posted_date'=>'',
              'about_description'=>'',
              'songname'=>'',
              'themeid'=>'',
        'profileimg' => $pimages,
          

    );

    if (wp_verify_nonce($_REQUEST['nonce'], basename(__FILE__))) {
        $item = shortcode_atts($default, $_REQUEST);
      
       
                $result = $wpdb->update($table_name, $item, array('id' => $item['id']));

                
                if ($result) {
                    $message = __('Property was successfully updated', 'custom_table_example');
                } else {
                    $notice = __('There was an error while updating Property', 'custom_table_example');
                }
            
       
    }
    else {
        $item = $default;
        if (isset($_REQUEST['id'])) {
            $item = $wpdb->get_row($wpdb->prepare("SELECT * FROM $table_name WHERE id = %d", $_REQUEST['id']), ARRAY_A);
            if (!$item) {
                $item = $default;
                $notice = __('Property not found', 'custom_table_example');
            }
        }
    }

  add_meta_box('property_details_form_meta_box','Memories Details','custom_table_example_property_details_form_meta_box_handler','property_details');
    add_meta_box('property_form_meta_box', 'Memories data', 'custom_table_example_property_form_meta_box_handler', 'property', 'normal', 'default');

    ?>
<div class="wrap">
    <div class="icon32 icon32-posts-post" id="icon-edit"><br></div>
    <h2><?php _e('Property', 'custom_table_example')?> <a class="add-new-h2"
                                href="<?php echo get_admin_url(get_current_blog_id(), 'admin.php?page=property');?>"><?php _e('back to list', 'custom_table_example')?></a>
    </h2>

    <?php if (!empty($notice)): ?>
    <div id="notice" class="error"><p><?php echo $notice ?></p></div>
    <?php endif;?>
    <?php if (!empty($message)): ?>
    <div id="message" class="updated"><p><?php echo $message ?></p></div>
    <?php endif;?>

    <form id="form" method="POST" class="form-horizontal" enctype="multipart/form-data">
        <input type="hidden" name="nonce" value="<?php echo wp_create_nonce(basename(__FILE__))?>"/>
        <?php /* NOTICE: here we storing id to determine will be item added or updated */ ?>
        <input type="hidden" name="id" value="<?php echo $item['id'] ?>"/>

        <div class="metabox-holder" id="poststuff">
            <div id="post-body">
                <div id="post-body-content">
                    <?php /* And here we call our custom meta box */ ?>
                    <?php do_meta_boxes('Property', 'normal', $item); ?>
                    <input type="submit" value="<?php _e('Save', 'custom_table_example')?>" id="submit" class="button-primary" name="submit">
                </div>
            </div>
        </div>
    </form>
</div>
<?php
}
function custom_table_example_property_detail_form_page_handler($item)
{
   global $wpdb;
    $table_name = $wpdb->prefix . 'tribute'; // do not forget about tables prefix

    $message = '';
    $notice = '';
     $item = $default;
      if (isset($_REQUEST['id'])) {
    $item = $wpdb->get_row($wpdb->prepare("SELECT * FROM $table_name WHERE id = %d", $_REQUEST['id']), ARRAY_A);
  }
 ?>
  <div class="wrap">
   <div id="normal-sortables" class="meta-box-sortables">
    <div id="property_form_meta_box" class="postbox ">
        <h2 class="hndle" style="background: #eee;padding: 10px;margin: 0px;">Property Detail
        <a class="add-new-h2" align='right' href="<?php echo get_site_url(); ?>/wp-admin/admin.php?page=property">All Property</a> </h2>
        <div class="inside" style="border: 2px solid #eee; margin: 0px !important;">
            <div class="row">
                        <div class="col-md-6">
                            <table class="table">
                                <tr>
                    <td>First name:</td>
                    <td><?php echo esc_attr($item['fname'])?></td>
                  </tr>
                 
                  <tr>
                    <td>Last Name:</td>
                    <td><?php echo esc_attr($item['lname'])?></td>
                  </tr>

                  <tr>
                    <td>Birth Country:</td>
                    <td><?php echo esc_attr($item['birth_country'])?></td>
                  </tr>

                  <tr>
                    <td>Death Country:</td>
                    <td><?php echo esc_attr($item['death_country'])?></td>
                  </tr>
                 
                  <tr>
                    <td>Middle Name:</td>
                    <td><?php echo esc_attr($item['middname'])?></td>
                  </tr>

                  <tr>
                    <td>Nickname:</td>
                    <td><?php echo esc_attr($item['nickname'])?></td>
                  </tr>

                  <tr>
                    <td>Gender:</td>
                    <td><?php echo esc_attr($item['gender'])?></td>
                  </tr>
                 
                  <tr>
                    <td>Death date:</td>
                    <td><?php echo esc_attr($item['fulldeathdate'])?></td>
                  </tr>

                     <tr>
                    <td>Birth date:</td>
                    <td><?php echo esc_attr($item['fullbirthdate'])?></td>
                  </tr>
                  
                   <tr>
                    <td>Webaddress:</td>
                    <td><?php echo esc_attr($item['webaddress'])?></td>
                  </tr>
                   <tr>
                    <td>Relation:</td>
                    <td><?php echo esc_attr($item['relationname'])?></td>
                  </tr>
                  
                  <tr>
                    <td>Relative Phone No:</td>
                    <td><?php echo esc_attr($item['rphone'])?></td>
                  </tr>
                  
                  <tr>
                    <td>Relative First name:</td>
                    <td><?php echo esc_attr($item['rfname'])?></td>
                  </tr>
                  <tr>
                    <td>Relative Surname:</td>
                    <td><?php echo esc_attr($item['rsurname'])?></td>
                  </tr>
                   <tr>
                    <td>Relative Address:</td>
                    <td><?php echo esc_attr($item['radd'])?></td>
                  </tr>
                  
                    <tr>
                    <td>Relative Email ID:</td>
                    <td><?php echo esc_attr($item['remailadd'])?></td>
                  </tr>
                  
                   <tr>
                    <td>Admin name:</td>
                    <td><?php echo esc_attr($item['accountname'])?></td>
                  </tr>
                   <tr>
                    <td>Admin Last name:</td>
                    <td><?php echo esc_attr($item['accountlname'])?></td>
                  </tr>
                  
                    <tr>
                    <td>Admin Email id:</td>
                    <td><?php echo esc_attr($item['acountemail'])?></td>
                  </tr>
                  
                   <tr>
                    <td>Admin password:</td>
                    <td><?php echo esc_attr($item['accountpassword'])?></td>
                  </tr>
                  
                   <tr>
                    <td>privacy:</td>
                    <td><?php echo esc_attr($item['privacy'])?></td>
                  </tr>
                  
                    <tr>
                    <td>Birth place:</td>
                    <td><?php echo esc_attr($item['birthplace'])?></td>
                  </tr>
                    <tr>
                    <td>Death place:</td>
                    <td><?php echo esc_attr($item['deathplace'])?></td>
                  </tr>
                  
                    <tr>
                    <td>Location:</td>
                    <td><?php echo esc_attr($item['location'])?></td>
                  </tr>
                   <tr>
                    <td>Town:</td>
                    <td><?php echo esc_attr($item['town'])?></td>
                  </tr>
                  <tr>
                    <td>Funeral Date:</td>
                    <td><?php echo esc_attr($item['fdate'])?></td>
                  </tr>
                  <tr>
                    <td>Funeral Time:</td>
                    <td><?php echo esc_attr($item['ftime'])?></td>
                  </tr>
                   <tr>
                    <td>Burial Country:</td>
                    <td><?php echo esc_attr($item['burial_country'])?></td>
                  </tr>
                   <tr>
                    <td>Burial Town:</td>
                    <td><?php echo esc_attr($item['burial_town'])?></td>
                  </tr>
                  
                   <tr>
                    <td>Burial Date:</td>
                    <td><?php echo esc_attr($item['burial_date'])?></td>
                  </tr>
                  
                  <tr>
                    <td>Burial Time:</td>
                    <td><?php echo esc_attr($item['burial_time'])?></td>
                  </tr>
                  <tr>
                    <td>Burial Location:</td>
                    <td><?php echo esc_attr($item['burial_date'])?></td>
                  </tr>
                  
                   <tr>
                    <td>Burial Cemetery:</td>
                    <td><?php echo esc_attr($item['burial_cemetery'])?></td>
                  </tr>
                  
                  <tr>
                    <td>crematorium Town:</td>
                    <td><?php echo esc_attr($item['crematorium_town'])?></td>
                  </tr>
                  
                   <tr>
                    <td>Crematorium:</td>
                    <td><?php echo esc_attr($item['crematorium'])?></td>
                  </tr>
                  
                    <tr>
                    <td>Crematorium:</td>
                    <td><?php echo esc_attr($item['crematorium'])?></td>
                  </tr>
                  
                    <tr>
                    <td>Crematorium Time:</td>
                    <td><?php echo esc_attr($item['crematorium_time'])?></td>
                  </tr>
                  
                    <tr>
                    <td>Funeral Committee Fname:</td>
                    <td><?php echo esc_attr($item['funeral_com_fname'])?></td>
                  </tr>
                  
                    <tr>
                    <td>Funeral Committee Sname:</td>
                    <td><?php echo esc_attr($item['funeral_com_secondname'])?></td>
                  </tr>
                  
                   <tr>
                    <td>Funeral Committee Phone:</td>
                    <td><?php echo esc_attr($item['funeral_com_telephone'])?></td>
                  </tr>
                   <tr>
                    <td>Funeral Committee Town:</td>
                    <td><?php echo esc_attr($item['funeral_com_town'])?></td>
                  </tr>
                  
                   <tr>
                    <td>Funeral Committee Location:</td>
                    <td><?php echo esc_attr($item['funeral_com_location'])?></td>
                  </tr>
                  
                   <tr>
                    <td>Funeral Committee Building:</td>
                    <td><?php echo esc_attr($item['funeral_com_building'])?></td>
                  </tr>
                   <tr>
                    <td>Funeral Committee Metting Date:</td>
                    <td><?php echo esc_attr($item['funeral_com_mettingdate'])?></td>
                  </tr>
                  
                   <tr>
                    <td>Burial Location:</td>
                    <td><?php echo esc_attr($item['google_map_location'])?></td>
                  </tr>
                  
                    <tr>
                    <td>Notice:</td>
                    <td><?php echo esc_attr($item['notice'])?></td>
                  </tr>
                  
                    <tr>
                    <td>Notice Posted:</td>
                    <td><?php echo esc_attr($item['notice_posted'])?></td>
                  </tr>
                  
                   <tr>
                    <td>Notice Posted Date:</td>
                    <td><?php echo esc_attr($item['notice_posted_date'])?></td>
                  </tr>
                  
                    <tr>
                    <td>About Description:</td>
                    <td><?php echo esc_attr($item['about_description'])?></td>
                  </tr>
                  
                  <tr>
                    <td>Picture</td>
                    <td><img src="<?php echo get_site_url().'/wp-content/uploads/'.$item['profileimg']; ?>" class="imgproject img-responsive" width="100px" height="50px"></td>
                  </tr>
                            </table>
                    
                        </div>
                       
                </div>
        </div>
      </div>
    </div>
   </div>
         

  <?php

}

function custom_table_example_property_form_meta_box_handler($item)
{
    ?>
<div class="row">
<div class="col-md-12">
<div class="col-md-6">
 
 <div class="form-group">
        <div class="row">
      <label class="control-label col-sm-4" for="email">First name:</label>
      <div class="col-sm-6">
        <input id="fname" name="fname" type="text" value="<?php echo esc_attr($item['fname'])?>"
                   size="50" class="code form-control" placeholder="<?php _e('Enter First name', 'custom_table_example')?>">
      </div>
  </div>
    </div>
    <div class="form-group">
        <div class="row">
      <label class="control-label col-sm-4" for="email">Last Name:</label>
      <div class="col-sm-6">
        <input id="lname" name="lname" type="text" value="<?php echo esc_attr($item['lname'])?>"
                   size="50" class="code form-control" placeholder="<?php _e('Enter Price From', 'custom_table_example')?>">
      </div>
  </div>
    </div>
     <div class="form-group">
        <div class="row">
      <label class="control-label col-sm-4" for="email">Birth Country:</label>
      <div class="col-sm-6">
        <input id="birth_country" name="birth_country" type="text" value="<?php echo esc_attr($item['birth_country'])?>"
                   size="50" class="code form-control" placeholder="<?php _e('Enter Birth Country', 'custom_table_example')?>">
      </div>
  </div>
    </div>
    <div class="form-group">
        <div class="row">
      <label class="control-label col-sm-4" for="email">Death Country:</label>
      <div class="col-sm-6">
        <input id="death_country" name="death_country" type="text"  value="<?php echo esc_attr($item['death_country'])?>"
                   size="50" class="code form-control" placeholder="<?php _e('Enter Death Country', 'custom_table_example')?>">
      </div>
    </div>
</div>
    
   
    <div class="form-group">
        <div class="row">
      <label class="control-label col-sm-4" for="office">Middle Name:</label>
      <div class="col-sm-6">
          <input id="middname" name="middname" type="text"  value="<?php echo esc_attr($item['middname'])?>"
                   size="50" class="code form-control" placeholder="<?php _e('Enter Middle Name', 'custom_table_example')?>">
      
      </div>
  </div>
    </div>
     
    <div class="form-group">
        <div class="row">
      <label class="control-label col-sm-4" for="office">Nickname:</label>
      <div class="col-sm-6">
          <input id="nickname" name="nickname" type="text"  value="<?php echo esc_attr($item['nickname'])?>"
                   size="50" class="code form-control" placeholder="<?php _e('Enter Nickname', 'custom_table_example')?>">
      
      </div>
  </div>
    </div>
   
      <div class="form-group">
        <div class="row">
      <label class="control-label col-sm-4" for="office">Gender:</label>
      <div class="col-sm-6">
          <input id="gender" name="gender" type="text"  value="<?php echo esc_attr($item['gender'])?>"
                   size="50" class="code form-control" placeholder="<?php _e('Enter Gender', 'custom_table_example')?>">
      
      </div>
  </div>
    </div>

    <div class="form-group">
        <div class="row">
      <label class="control-label col-sm-4" for="office">Death date:</label>
      <div class="col-sm-6">
          <input id="fulldeathdate" name="fulldeathdate" type="text"  value="<?php echo esc_attr($item['fulldeathdate'])?>"
                   size="50" class="code form-control" placeholder="<?php _e('Enter Death date', 'custom_table_example')?>">
      
      </div>
  </div>
    </div>
  
     <div class="form-group">
        <div class="row">
      <label class="control-label col-sm-4" for="office">Birth date:</label>
      <div class="col-sm-6">
          <input id="fullbirthdate" name="fullbirthdate" type="text"  value="<?php echo esc_attr($item['fullbirthdate'])?>"
                   size="50" class="code form-control" placeholder="<?php _e('Enter Birth date', 'custom_table_example')?>">
      
      </div>
  </div>
    </div>
     
      <div class="form-group">
        <div class="row">
      <label class="control-label col-sm-4" for="office">Webaddress:</label>
      <div class="col-sm-6">
          <input id="webaddress" name="webaddress" type="text"  value="<?php echo esc_attr($item['webaddress'])?>"
                   size="50" class="code form-control" placeholder="<?php _e('Enter Webaddress', 'custom_table_example')?>">
      
      </div>
  </div>
    </div>
     
      <div class="form-group">
        <div class="row">
      <label class="control-label col-sm-4" for="office">Relation:</label>
      <div class="col-sm-6">
          <input id="relationname" name="relationname" type="text"  value="<?php echo esc_attr($item['relationname'])?>"
                   size="50" class="code form-control" placeholder="<?php _e('Enter relationname', 'custom_table_example')?>">
      
      </div>
  </div>
    </div>
     
      
      <div class="form-group">
        <div class="row">
      <label class="control-label col-sm-4" for="office">Relative Phone No:</label>
      <div class="col-sm-6">
          <input id="rphone" name="rphone" type="text"  value="<?php echo esc_attr($item['rphone'])?>"
                   size="50" class="code form-control" placeholder="<?php _e('Enter Relative Phone No', 'custom_table_example')?>">
      
      </div>
  </div>
    </div>
    
     <div class="form-group">
        <div class="row">
      <label class="control-label col-sm-4" for="office">Relative First name:</label>
      <div class="col-sm-6">
          <input id="rfname" name="rfname" type="text"  value="<?php echo esc_attr($item['rfname'])?>"
                   size="50" class="code form-control" placeholder="<?php _e('Enter Relative First name', 'custom_table_example')?>">
      
      </div>
  </div>
    </div>
    
     <div class="form-group">
        <div class="row">
      <label class="control-label col-sm-4" for="office">Relative Surname:</label>
      <div class="col-sm-6">
          <input id="rsurname" name="rsurname" type="text"  value="<?php echo esc_attr($item['rsurname'])?>"
                   size="50" class="code form-control" placeholder="<?php _e('Enter Relative Surname', 'custom_table_example')?>">
      
      </div>
  </div>
    </div>
    
    <div class="form-group">
        <div class="row">
      <label class="control-label col-sm-4" for="office">Relative Address:</label>
      <div class="col-sm-6">
          <input id="radd" name="radd" type="text"  value="<?php echo esc_attr($item['radd'])?>"
                   size="50" class="code form-control" placeholder="<?php _e('Enter Relative Address', 'custom_table_example')?>">
      
      </div>
  </div>
    </div>
    
       <div class="form-group">
        <div class="row">
      <label class="control-label col-sm-4" for="office">Relative Email ID:</label>
      <div class="col-sm-6">
          <input id="remailadd" name="remailadd" type="text"  value="<?php echo esc_attr($item['remailadd'])?>"
                   size="50" class="code form-control" placeholder="<?php _e('Enter Relative Email ID', 'custom_table_example')?>">
      
      </div>
  </div>
    </div>
    
    <div class="form-group">
        <div class="row">
      <label class="control-label col-sm-4" for="office">Admin name:</label>
      <div class="col-sm-6">
          <input id="accountname" name="accountname" type="text"  value="<?php echo esc_attr($item['accountname'])?>"
                   size="50" class="code form-control" placeholder="<?php _e('Enter Admin name', 'custom_table_example')?>">
      
      </div>
  </div>
    </div>
    
     <div class="form-group">
        <div class="row">
      <label class="control-label col-sm-4" for="office">Admin Last name:</label>
      <div class="col-sm-6">
          <input id="accountlname" name="accountlname" type="text"  value="<?php echo esc_attr($item['accountlname'])?>"
                   size="50" class="code form-control" placeholder="<?php _e('Enter Admin Last name', 'custom_table_example')?>">
      
      </div>
  </div>
    </div>
    
    <div class="form-group">
        <div class="row">
      <label class="control-label col-sm-4" for="office">Admin Email id:</label>
      <div class="col-sm-6">
          <input id="acountemail" name="acountemail" type="text"  value="<?php echo esc_attr($item['acountemail'])?>"
                   size="50" class="code form-control" placeholder="<?php _e('Enter Admin Email id', 'custom_table_example')?>">
      
      </div>
  </div>
    </div>
    
    <div class="form-group">
        <div class="row">
      <label class="control-label col-sm-4" for="office">Admin password:</label>
      <div class="col-sm-6">
          <input id="accountpassword" name="accountpassword" type="text"  value="<?php echo esc_attr($item['accountpassword'])?>"
                   size="50" class="code form-control" placeholder="<?php _e('Enter Admin password', 'custom_table_example')?>">
      
      </div>
  </div>
    </div>
    
      <div class="form-group">
        <div class="row">
      <label class="control-label col-sm-4" for="office">Admin password:</label>
      <div class="col-sm-6">
          <input id="accountpassword" name="accountpassword" type="text"  value="<?php echo esc_attr($item['accountpassword'])?>"
                   size="50" class="code form-control" placeholder="<?php _e('Enter Admin password', 'custom_table_example')?>">
      
      </div>
  </div>
    </div>
     
   <div class="form-group">
    <div class="row">
      <label class="control-label col-sm-4" for="photo">Floorplan Image:</label>
      <div class="col-sm-6">
 <input id="uphoto" name="uphoto" type="hidden" value="<?php echo esc_attr($item['profileimg'])?>" >
  <input id="userfile" name="userfile" type="file" accept="image/*" value="<?php echo esc_attr($item['profileimg'])?>" size="50" class="code">
      
        
   <?php
  if(!empty($item['profileimg']))
   {
?>
              <img src="<?php echo get_site_url().'/wp-content/uploads/'.$item['profileimg']; ?>" width='50' height="50">

       <?php
   }
?>
      </div>
    </div>
</div>
   
   
 

   
</div>
 <div class="col-md-6">
       <div class="form-group">
        <div class="row">
      <label class="control-label col-sm-4" for="office">privacy:</label>
      <div class="col-sm-6">
          <input id="privacy" name="privacy" type="text"  value="<?php echo esc_attr($item['privacy'])?>"
                   size="50" class="code form-control" placeholder="<?php _e('Enter privacy', 'custom_table_example')?>">
      
      </div>
  </div>
    </div>
    
    <div class="form-group">
        <div class="row">
      <label class="control-label col-sm-4" for="office">Birth place:</label>
      <div class="col-sm-6">
          <input id="birthplace" name="birthplace" type="text"  value="<?php echo esc_attr($item['birthplace'])?>"
                   size="50" class="code form-control" placeholder="<?php _e('Enter Birth place', 'custom_table_example')?>">
      
      </div>
  </div>
    </div>
    
      <div class="form-group">
        <div class="row">
      <label class="control-label col-sm-4" for="office">Beath place:</label>
      <div class="col-sm-6">
          <input id="deathplace" name="deathplace" type="text"  value="<?php echo esc_attr($item['deathplace'])?>"
                   size="50" class="code form-control" placeholder="<?php _e('Enter Death Place', 'custom_table_example')?>">
      
      </div>
  </div>
    </div>
    
    
      <div class="form-group">
        <div class="row">
      <label class="control-label col-sm-4" for="office">Location:</label>
      <div class="col-sm-6">
          <input id="location" name="location" type="text"  value="<?php echo esc_attr($item['location'])?>"
                   size="50" class="code form-control" placeholder="<?php _e('Enter Location', 'custom_table_example')?>">
      
      </div>
  </div>
    </div>
    
     <div class="form-group">
        <div class="row">
      <label class="control-label col-sm-4" for="office">Town:</label>
      <div class="col-sm-6">
          <input id="town" name="town" type="text"  value="<?php echo esc_attr($item['town'])?>"
                   size="50" class="code form-control" placeholder="<?php _e('Enter Town', 'custom_table_example')?>">
      
      </div>
  </div>
    </div>
    
      <div class="form-group">
        <div class="row">
      <label class="control-label col-sm-4" for="office">Funeral Date:</label>
      <div class="col-sm-6">
          <input id="fdate" name="fdate" type="text"  value="<?php echo esc_attr($item['fdate'])?>"
                   size="50" class="code form-control" placeholder="<?php _e('Enter Funeral Date', 'custom_table_example')?>">
      
      </div>
  </div>
    </div>
    
     <div class="form-group">
        <div class="row">
      <label class="control-label col-sm-4" for="office">Funeral Time:</label>
      <div class="col-sm-6">
          <input id="ftime" name="ftime" type="text"  value="<?php echo esc_attr($item['ftime'])?>"
                   size="50" class="code form-control" placeholder="<?php _e('Enter Funeral Date', 'custom_table_example')?>">
      
      </div>
  </div>
    </div>
    
    
     <div class="form-group">
        <div class="row">
      <label class="control-label col-sm-4" for="office">Burial Country:</label>
      <div class="col-sm-6">
          <input id="burial_country" name="burial_country" type="text"  value="<?php echo esc_attr($item['burial_country'])?>"
                   size="50" class="code form-control" placeholder="<?php _e('Enter Burial Country', 'custom_table_example')?>">
      
      </div>
  </div>
    </div>
     
       <div class="form-group">
        <div class="row">
      <label class="control-label col-sm-4" for="office">Burial Town:</label>
      <div class="col-sm-6">
          <input id="burial_town" name="burial_town" type="text"  value="<?php echo esc_attr($item['burial_town'])?>"
                   size="50" class="code form-control" placeholder="<?php _e('Enter Burial Town', 'custom_table_example')?>">
      
      </div>
  </div>
    </div>
    
     <div class="form-group">
        <div class="row">
      <label class="control-label col-sm-4" for="office">Burial Date:</label>
      <div class="col-sm-6">
          <input id="burial_date" name="burial_date" type="text"  value="<?php echo esc_attr($item['burial_date'])?>"
                   size="50" class="code form-control" placeholder="<?php _e('Enter Burial Date', 'custom_table_example')?>">
      
      </div>
  </div>
    </div>
     <div class="form-group">
        <div class="row">
      <label class="control-label col-sm-4" for="office">Burial Time:</label>
      <div class="col-sm-6">
          <input id="burial_time" name="burial_time" type="text"  value="<?php echo esc_attr($item['burial_time'])?>"
                   size="50" class="code form-control" placeholder="<?php _e('Enter Burial Time', 'custom_table_example')?>">
      
      </div>
  </div>
    </div>
     <div class="form-group">
        <div class="row">
      <label class="control-label col-sm-4" for="office">Burial Location:</label>
      <div class="col-sm-6">
          <input id="burial_location" name="burial_date" type="text"  value="<?php echo esc_attr($item['burial_date'])?>"
                   size="50" class="code form-control" placeholder="<?php _e('Enter Burial Location', 'custom_table_example')?>">
      
      </div>
  </div>
    </div>
     <div class="form-group">
        <div class="row">
      <label class="control-label col-sm-4" for="office">Burial Cemetery:</label>
      <div class="col-sm-6">
          <input id="burial_cemetery" name="burial_cemetery" type="text"  value="<?php echo esc_attr($item['burial_cemetery'])?>"
                   size="50" class="code form-control" placeholder="<?php _e('Enter Burial Cemetery', 'custom_table_example')?>">
      
      </div>
  </div>
    </div>
     <div class="form-group">
        <div class="row">
      <label class="control-label col-sm-4" for="office">crematorium Town:</label>
      <div class="col-sm-6">
          <input id="crematorium_town" name="crematorium_town" type="text"  value="<?php echo esc_attr($item['crematorium_town'])?>"
                   size="50" class="code form-control" placeholder="<?php _e('Enter crematorium Town', 'custom_table_example')?>">
      
      </div>
  </div>
    </div>
    
    <div class="form-group">
        <div class="row">
      <label class="control-label col-sm-4" for="office">Crematorium:</label>
      <div class="col-sm-6">
          <input id="crematorium" name="crematorium" type="text"  value="<?php echo esc_attr($item['crematorium'])?>"
                   size="50" class="code form-control" placeholder="<?php _e('Enter Crematorium', 'custom_table_example')?>">
      
      </div>
  </div>
    </div>
    
     <div class="form-group">
        <div class="row">
      <label class="control-label col-sm-4" for="office">Crematorium Time:</label>
      <div class="col-sm-6">
          <input id="crematorium_time" name="crematorium_time" type="text"  value="<?php echo esc_attr($item['crematorium_time'])?>"
                   size="50" class="code form-control" placeholder="<?php _e('Enter Crematorium Time', 'custom_table_example')?>">
      
      </div>
  </div>
    </div>
    
     <div class="form-group">
        <div class="row">
      <label class="control-label col-sm-4" for="office">Funeral Committee Fname:</label>
      <div class="col-sm-6">
          <input id="funeral_com_fname" name="funeral_com_fname" type="text"  value="<?php echo esc_attr($item['funeral_com_fname'])?>"
                   size="50" class="code form-control" placeholder="<?php _e('Enter Funeral Committee Fname', 'custom_table_example')?>">
      
      </div>
  </div>
    </div>
     
       <div class="form-group">
        <div class="row">
      <label class="control-label col-sm-4" for="office">Funeral Committee Sname:</label>
      <div class="col-sm-6">
          <input id="funeral_com_secondname" name="funeral_com_secondname" type="text"  value="<?php echo esc_attr($item['funeral_com_secondname'])?>"
                   size="50" class="code form-control" placeholder="<?php _e('Enter Funeral Committee Sname', 'custom_table_example')?>">
      
      </div>
  </div>
    </div>
    
    <div class="form-group">
        <div class="row">
      <label class="control-label col-sm-4" for="office">Funeral Committee Phone:</label>
      <div class="col-sm-6">
          <input id="funeral_com_telephone" name="funeral_com_telephone" type="text"  value="<?php echo esc_attr($item['funeral_com_telephone'])?>"
                   size="50" class="code form-control" placeholder="<?php _e('Enter Funeral Committee Phone', 'custom_table_example')?>">
      
      </div>
  </div>
    </div>
    
      <div class="form-group">
        <div class="row">
      <label class="control-label col-sm-4" for="office">Funeral Committee Town:</label>
      <div class="col-sm-6">
          <input id="funeral_com_town" name="funeral_com_town" type="text"  value="<?php echo esc_attr($item['funeral_com_town'])?>"
                   size="50" class="code form-control" placeholder="<?php _e('Funeral Committee Town', 'custom_table_example')?>">
      
      </div>
  </div>
    </div>
    
     <div class="form-group">
        <div class="row">
      <label class="control-label col-sm-4" for="office">Funeral Committee Location:</label>
      <div class="col-sm-6">
          <input id="funeral_com_location" name="funeral_com_location" type="text"  value="<?php echo esc_attr($item['funeral_com_location'])?>"
                   size="50" class="code form-control" placeholder="<?php _e('Funeral Committee Location', 'custom_table_example')?>">
      
      </div>
  </div>
    </div>
    
     <div class="form-group">
        <div class="row">
      <label class="control-label col-sm-4" for="office">Funeral Committee Building:</label>
      <div class="col-sm-6">
          <input id="funeral_com_building" name="funeral_com_building" type="text"  value="<?php echo esc_attr($item['funeral_com_building'])?>"
                   size="50" class="code form-control" placeholder="<?php _e('Funeral Committee Location', 'custom_table_example')?>">
      
      </div>
  </div>
    </div>
      <div class="form-group">
        <div class="row">
      <label class="control-label col-sm-4" for="office">Funeral Committee Metting Date:</label>
      <div class="col-sm-6">
          <input id="funeral_com_mettingdate" name="funeral_com_mettingdate" type="text"  value="<?php echo esc_attr($item['funeral_com_mettingdate'])?>"
                   size="50" class="code form-control" placeholder="<?php _e('Funeral Committee Metting Date', 'custom_table_example')?>">
      
      </div>
  </div>
    </div>
    
     <div class="form-group">
        <div class="row">
      <label class="control-label col-sm-4" for="office">Burial Location:</label>
      <div class="col-sm-6">
          <input id="google_map_location" name="google_map_location" type="text"  value="<?php echo esc_attr($item['google_map_location'])?>"
                   size="50" class="code form-control" placeholder="<?php _e('Burial Location', 'custom_table_example')?>">
      
      </div>
  </div>
    </div>
    
    
     <div class="form-group">
        <div class="row">
      <label class="control-label col-sm-4" for="office">Notice:</label>
      <div class="col-sm-6">
          <input id="notice" name="notice" type="text"  value="<?php echo esc_attr($item['notice'])?>"
                   size="50" class="code form-control" placeholder="<?php _e('Notice', 'custom_table_example')?>">
      
      </div>
  </div>
    </div>
    
    
     <div class="form-group">
        <div class="row">
      <label class="control-label col-sm-4" for="office">Notice Posted:</label>
      <div class="col-sm-6">
          <input id="notice_posted" name="notice_posted" type="text"  value="<?php echo esc_attr($item['notice_posted'])?>"
                   size="50" class="code form-control" placeholder="<?php _e('Notice Posted', 'custom_table_example')?>">
      
      </div>
  </div>
    </div>
    
    
     <div class="form-group">
        <div class="row">
      <label class="control-label col-sm-4" for="office">Notice Posted Date:</label>
      <div class="col-sm-6">
          <input id="notice_posted_date" name="notice_posted_date" type="text"  value="<?php echo esc_attr($item['notice_posted_date'])?>"
                   size="50" class="code form-control" placeholder="<?php _e('Notice Posted Date', 'custom_table_example')?>">
      
      </div>
  </div>
    </div>
    
    
     <div class="form-group">
        <div class="row">
      <label class="control-label col-sm-4" for="office">About Description:</label>
      <div class="col-sm-6">
          <input id="about_description" name="about_description" type="text"  value="<?php echo esc_attr($item['about_description'])?>"
                   size="50" class="code form-control" placeholder="<?php _e('About Description', 'custom_table_example')?>">
      
      </div>
  </div>
    </div>
    
      <div class="form-group">
        <div class="row">
      <label class="control-label col-sm-4" for="office">Song name:</label>
      <div class="col-sm-6">
          <input id="songname" name="songname" type="text"  value="<?php echo esc_attr($item['songname'])?>"
                   size="50" class="code form-control" placeholder="<?php _e('Song name', 'custom_table_example')?>">
      
      </div>
  </div>
    </div>
    
     <!--<div class="form-group">
        <div class="row">
      <label class="control-label col-sm-4" for="office">Theme:</label>
      <div class="col-sm-6">
          <input id="themeid" name="themeid" type="text"  value="<?php echo esc_attr($item['themeid'])?>"
                   size="50" class="code form-control" placeholder="<?php _e('Theme', 'custom_table_example')?>">
      
      </div>
  </div>
    </div>-->
     </div>
</div>
<?php
}


function custom_table_example_languagesp()
{
    load_plugin_textdomain('custom_table_example', false, dirname(plugin_basename(__FILE__)));
}

add_action('init', 'custom_table_example_languagesp');

