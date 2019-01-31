<?php
/*
Plugin Name: Users
Description: Describe glossary
Plugin URI: 
Author URI: 
Author: Dhrup Technology
License: Public Domain
Version: 1.1
*/

/**
 * PART 1. Defining Custom Database Table
 * ============================================================================
 *
 * In this part you are going to define custom database table,
 * create it, update, and fill with some dummy data
 *
 * http://codex.wordpress.org/Creating_Tables_with_Plugins
 *
 * In case your are developing and want to check plugin use:
 *
 * DROP TABLE IF EXISTS wp_trubutenote;
 * DELETE FROM wp_options WHERE option_name = 'custom_table_example_install_data33';
 *
 * to drop table and option
 */

/**
 * $custom_table_example_db_version36 - holds current database version
 * and used on plugin update to sync database tables
 */
global $custom_table_example_db_version93;
$custom_table_example_db_version40 = '1.1'; // version changed from 1.0 to 1.1

/**
 * register_activation_hook implementation
 *
 * will be called when user activates plugin first time
 * must create needed database tables
 */
function custom_table_example_install93()
{
    global $wpdb;
    global $custom_table_example_db_version93;

    $table_name = $wpdb->prefix . 'tributeuser'; // do not forget about tables prefix

      $sql = "CREATE TABLE " . $table_name . " (
   tid int(11) NOT NULL AUTO_INCREMENT,
  admin_id int(11) NOT NULL,
  fname varchar(200) NOT NULL,
  lname varchar(200) NOT NULL,
  email_id varchar(200) NOT NULL,
  password varchar(200) NOT NULL,
  login_type varchar(100) NOT NULL,
  block varchar(20) NOT NULL
      PRIMARY KEY  (tid)
    );";


      require_once(ABSPATH . 'wp-admin/includes/upgrade.php');
    dbDelta($sql);

    // save current database version for later use (on upgrade)
    add_option('custom_table_example_db_version93', $custom_table_example_db_version93);

    /**
     * [OPTIONAL] Example of updating to 1.1 version
     *
     * If you develop new version of plugin
     * just increment $custom_table_example_db_version36 variable
     * and add following block of code
     *
     * must be repeated for each new version
     * in version 1.1 we change email field
     * to contain 200 chars rather 100 in version 1.0
     * and again we are not executing sql
     * we are using dbDelta to migrate table changes
     */
    $installed_ver = get_option('custom_table_example_db_version93');
    if ($installed_ver != $custom_table_example_db_version93) {
        $sql = "CREATE TABLE " . $table_name . " (
      tid int(11) NOT NULL AUTO_INCREMENT,
  admin_id int(11) NOT NULL,
  fname varchar(200) NOT NULL,
  lname varchar(200) NOT NULL,
  email_id varchar(200) NOT NULL,
  password varchar(200) NOT NULL,
  login_type varchar(100) NOT NULL,
  block varchar(20) NOT NULL
      PRIMARY KEY  (tid)
        );";

        require_once(ABSPATH . 'wp-admin/includes/upgrade.php');
        dbDelta($sql);

        // notice that we are updating option, rather than adding it
        update_option('custom_table_example_db_version93', $custom_table_example_db_version93);
    }
}

register_activation_hook(__FILE__, 'custom_table_example_install93');

/**
 * register_activation_hook implementation
 *
 * [OPTIONAL]
 * additional implementation of register_activation_hook
 * to insert some dummy data
 */
function custom_table_example_install_data93()
{
    global $wpdb;

    $table_name = $wpdb->prefix . 'tributeuser'; // do not forget about tables prefix

   
}

register_activation_hook(__FILE__, 'custom_table_example_install_data93');

/**
 * Trick to update plugin database, see docs
 */
function custom_table_example_update_db_check93()
{
    global $custom_table_example_db_version93;
    if (get_site_option('custom_table_example_db_version93') != $custom_table_example_db_version93) {
        custom_table_example_install93();
    }
}

add_action('plugins_loaded', 'custom_table_example_update_db_check93');

/**
 * PART 2. Defining Custom Table List
 * ============================================================================
 *
 * In this part you are going to define custom table list class,
 * that will display your database records in nice looking table
 *
 * http://codex.wordpress.org/Class_Reference/WP_List_Table
 * http://wordpress.org/extend/plugins/custom-list-table-example/
 */

if (!class_exists('WP_List_Table')) {
    require_once(ABSPATH . 'wp-admin/includes/class-wp-list-table.php');
}

/**
 * custom_table_example_db_version39 class that will display our custom table
 * records in nice table
 */
class custom_table_example_db_version93 extends WP_List_Table
{
    /**
     * [REQUIRED] You must declare constructor and give some basic params
     */
    function __construct()
    {
        global $status, $page;

        parent::__construct(array(
            'singular' => 'Tributes Users',
            'plural' => 'Tributes Users',
        ));
    }

    /**
     * [REQUIRED] this is a default column renderer
     *
     * @param $item - row (key, value array)
     * @param $column_name - string (key)
     * @return HTML
     */
    function column_default($item, $column_name)
    {
        return $item[$column_name];
    }

    /**
     * [OPTIONAL] this is example, how to render specific column
     *
     * method name must be like this: "column_[column_name]"
     *
     * @param $item - row (key, value array)
     * @return HTML
     */
    function column_glossary($item)
    {
        return '<em>' . $item['tid'] . '</em>';
    }

    /**
     * [OPTIONAL] this is example, how to render column with actions,
     * when you hover row "Edit | Delete" links showed
     *
     * @param $item - row (key, value array)
     * @return HTML
     */
    function column_fname($item)
    {
        // links going to /admin.php?page=[your_plugin_page][&other_params]
        // notice how we used $_REQUEST['page'], so action will be done on curren page
        // also notice how we use $this->_args['singular'] so in this example it will
        // be something like &glossary=2
        $actions = array(
            'edit' => sprintf('<a href="?page=users_form&tid=%s">%s</a>', $item['tid'], __('Edit', 'custom_table_example')),
            'delete' => sprintf('<a href="?page=%s&action=delete&tid=%s">%s</a>', $_REQUEST['page'], $item['tid'], __('Delete', 'custom_table_example')),
        );

        return sprintf('%s %s',
            $item['fname'],
            $this->row_actions($actions)
        );
    }

    /**
     * [REQUIRED] this is how checkbox column renders
     *
     * @param $item - row (key, value array)
     * @return HTML
     */
    function column_cb($item)
    {
        return sprintf(
            '<input type="checkbox" name="tid[]" value="%s" />',
            $item['tid']
        );
    }

    /**
     * [REQUIRED] This method return columns to display in table
     * you can skip columns that you do not want to show
     * like content, or description
     *
     * @return array
     */
    function get_columns()
    {
        $columns = array(
            'cb' => '<input type="checkbox" />', //Render a checkbox instead of text
            'fname' => __('First Name', 'custom_table_example'),
             'lname' => __('Last Name', 'custom_table_example'),
            'email_id' => __('Email id', 'custom_table_example'),
            'password' => __('Password', 'custom_table_example'),
            
            'block' => __('Status( block,unblock )', 'custom_table_example')


           
        );
        return $columns;
    }

    /**
     * [OPTIONAL] This method return columns that may be used to sort table
     * all strings in array - is column names
     * notice that true on name column means that its default sort
     *
     * @return array
     */
    function get_sortable_columns()
    {
        $sortable_columns = array(
            'fname' => array('fname', true),
            
        );
        return $sortable_columns;
    }

    /**
     * [OPTIONAL] Return array of bult actions if has any
     *
     * @return array
     */
    function get_bulk_actions()
    {
        $actions = array(
            'delete' => 'Delete'
        );
        return $actions;
    }

    /**
     * [OPTIONAL] This method processes bulk actions
     * it can be outside of class
     * it can not use wp_redirect coz there is output already
     * in this example we are processing delete action
     * message about successful deletion will be shown on page in next part
     */
    function process_bulk_action()
    {
        global $wpdb;
        $table_name = $wpdb->prefix . 'tributeuser'; // do not forget about tables prefix

        if ('delete' === $this->current_action()) {
            $ids = isset($_REQUEST['tid']) ? $_REQUEST['tid'] : array();
            if (is_array($ids)) $ids = implode(',', $ids);

            if (!empty($ids)) {
                $wpdb->query("DELETE FROM $table_name WHERE tid IN($ids)");
            }
        }
    }

    /**
     * [REQUIRED] This is the most important method
     *
     * It will get rows from database and prepare them to be showed in table
     */

    
   function prepare_items()
    {
        global $wpdb;
        $table_name = $wpdb->prefix . 'tributeuser'; // do not forget about tables prefix

        $per_page = 20; // constant, how much records will be shown per page

        $columns = $this->get_columns();
        $hidden = array();
        $sortable = $this->get_sortable_columns();

        // here we configure table headers, defined in our methods
        $this->_column_headers = array($columns, $hidden, $sortable);

        // [OPTIONAL] process bulk action if any
        $this->process_bulk_action();

        $total_items = $wpdb->get_var("SELECT COUNT(tid) FROM $table_name");

        $paged = isset($_REQUEST['paged']) ? max(0, intval($_REQUEST['paged']) - 1) : 0;
        $orderby = (isset($_REQUEST['orderby']) && in_array($_REQUEST['orderby'], array_keys($this->get_sortable_columns()))) ? $_REQUEST['orderby'] : 'tid';
        $order = (isset($_REQUEST['order']) && in_array($_REQUEST['order'], array('asc', 'desc'))) ? $_REQUEST['order'] : 'asc';

       $this->items = $wpdb->get_results($wpdb->prepare("SELECT * FROM wp_tributeuser ORDER BY $orderby $order LIMIT %d OFFSET %d", $per_page, $paged), ARRAY_A);
        echo $wpdb->last_query;
        $this->set_pagination_args(array(
            'total_items' => $total_items, // total items defined above
            'per_page' => $per_page, // per page constant defined at top of method
            'total_pages' => ceil($total_items / $per_page) // calculate pages count
        ));
    }
}
/**
 * PART 3. Admin page
 * ============================================================================
 *
 * In this part you are going to add admin page for custom table
 *
 * http://codex.wordpress.org/Administration_Menus
 */

/**
 * admin_menu hook implementation, will add pages to list glossarys and to add new one
 */
function custom_table_example_admin_menu93()
{
     add_menu_page(__('users', 'custom_table_example'), __('Tribute Users', 'custom_table_example'), 'activate_plugins', 'users', 'custom_table_example_users_page_handler');

    add_submenu_page('users', __('users', 'custom_table_example'), __('Users List', 'custom_table_example'), 'activate_plugins', 'users', 'custom_table_example_users_page_handler');
    // add new will be described in next part
    add_submenu_page('users', __('Add new users', 'custom_table_example'), __('Add new users', 'custom_table_example'), 'activate_plugins', 'users_form', 'custom_table_example_users_form_page_handler');
}

add_action('admin_menu', 'custom_table_example_admin_menu93');

/**
 * List page handler
 *
 * This function renders our custom table
 * Notice how we display message about successfull deletion
 * Actualy this is very easy, and you can add as many features
 * as you want.
 *
 * Look into /wp-admin/includes/class-wp-*-list-table.php for examples
 */
function custom_table_example_users_page_handler()
{
    global $wpdb;

    $table = new custom_table_example_db_version93();
    $table->prepare_items();

    $message = '';
    if ('delete' === $table->current_action()) {
        $message = '<div class="updated below-h2" id="message"><p>' . sprintf(__('users  deleted: %d', 'custom_table_example'), count($_REQUEST['tid'])) . '</p></div>';
    }
    ?>
<div class="wrap">

    <div class="icon32 icon32-posts-post" id="icon-edit"><br></div>
    <h2><?php _e('Users List', 'custom_table_example')?> <a class="add-new-h2"
                                 href="<?php echo get_admin_url(get_current_blog_id(), 'admin.php?page=users_form');?>"><?php _e('Add new', 'custom_table_example')?></a>
    </h2>
    <?php echo $message; ?>

    <form id="glossarys-table" method="GET">
        <input type="hidden" name="page" value="<?php echo $_REQUEST['page'] ?>"/>
        <?php $table->display() ?>
    </form>

</div>
<?php
}

/**
 * PART 4. Form for adding andor editing row
 * ============================================================================
 *
 * In this part you are going to add admin page for adding andor editing items
 * You cant put all form into this function, but in this example form will
 * be placed into meta box, and if you want you can split your form into
 * as many meta boxes as you want
 *
 * http://codex.wordpress.org/Data_Validation
 * http://codex.wordpress.org/Function_Reference/seleglossaryd
 */

/**
 * Form page handler checks is there some data posted and tries to save it
 * Also it renders basic wrapper in which we are callin meta box render
 */
function custom_table_example_users_form_page_handler()
{
    global $wpdb;
    $table_name = $wpdb->prefix . 'tributeuser'; // do not forget about tables prefix

    $message = '';
    $notice = '';

    // this is default $item which will be used for new records
    $default = array(
        'tid' => 0,
         'block' =>''
       );

    // here we are verifying does this request is post back and have correct nonce
    if (wp_verify_nonce($_REQUEST['nonce'], basename(__FILE__))) {
        // combine our default item with request params
        $item = shortcode_atts($default, $_REQUEST);
        // validate data, and if all ok save item to database
        // if id is zero insert otherwise update
        $item_valid = custom_table_example_validate_users($item);
       
                $result = $wpdb->update($table_name, $item, array('tid' => $item['tid']));
               /* echo $wpdb->last_query;*/
                if ($result) {
                    $message = __('users  was successfully updated', 'custom_table_example');
                } else {
                    $notice = __('There was an error while updating users ', 'custom_table_example');
                }
           
       
    }
    else {
        // if this is not post back we load item to edit or give new one to create
        $item = $default;
        if (isset($_REQUEST['tid'])) {
            $item = $wpdb->get_row($wpdb->prepare("SELECT * FROM $table_name WHERE tid = %d", $_REQUEST['tid']), ARRAY_A);
            if (!$item) {
                $item = $default;
                $notice = __('users  not found', 'custom_table_example');
            }
        }
    }

    // here we adding our custom meta box
    add_meta_box('users_form_meta_box', 'users data', 'custom_table_example_users_form_meta_box_handler', 'users', 'normal', 'default');

    ?>
<div class="wrap">
    <div class="icon32 icon32-posts-post" id="icon-edit"><br></div>
    <h2><?php _e('Add New users', 'custom_table_example')?> <a class="add-new-h2"
                                href="<?php echo get_admin_url(get_current_blog_id(), 'admin.php?page=users');?>"><?php _e('back to list', 'custom_table_example')?></a>
    </h2>

    <?php if (!empty($notice)): ?>
    <div id="notice" class="error"><p><?php echo $notice ?></p></div>
    <?php endif;?>
    <?php if (!empty($message)): ?>
    <div id="message" class="updated"><p><?php echo $message ?></p></div>
    <?php endif;?>

    <form id="form" method="POST">
        <input type="hidden" name="nonce" value="<?php echo wp_create_nonce(basename(__FILE__))?>"/>
        <?php /* NOTICE: here we storing id to determine will be item added or updated */ ?>
        <input type="hidden" name="tid" value="<?php echo $item['tid'] ?>"/>

        <div class="metabox-holder" id="poststuff">
            <div id="post-body">
                <div id="post-body-content">
                    <?php /* And here we call our custom meta box */ ?>
                    <?php do_meta_boxes('users', 'normal', $item); ?>
                    <input type="submit" value="<?php _e('Save', 'custom_table_example')?>" id="submit" class="button-primary" name="submit">
                </div>
            </div>
        </div>
    </form>
</div>
<?php
}

/**
 * This function renders our custom meta box
 * $item is row
 *
 * @param $item
 */
function custom_table_example_users_form_meta_box_handler($item)
{
    ?>

<table cellspacing="2" cellpadding="5" style="width: 100%;" class="form-table">
    <tbody>
    <tr class="form-field">
        <th valign="top" scope="row">
            <label for="name"><?php _e('Block', 'custom_table_example')?></label>
        </th>
        <td>
            <input id="name" name="block" type="text" style="width: 95%" value="<?php echo esc_attr($item['block'])?>"
                   size="50" class="code" placeholder="<?php _e('Enter Status', 'custom_table_example')?>" required>
        </td>
    </tr>
      
  
   

    </tbody>
</table>
<?php
}

/**
 * Simple function that validates data and retrieve bool on success
 * and error message(s) on error
 *
 * @param $item
 * @return bool|string
 */
function custom_table_example_validate_users($item)
{
    $messages = array();

    if (empty($item['block'])) $messages[] = __('This Field is required', 'custom_table_example');
     //if(!empty($item['age']) && !absint(intval($item['age'])))  $messages[] = __('Age can not be less than zero');
    //if(!empty($item['age']) && !preg_match('/[0-9]+/', $item['age'])) $messages[] = __('Age must be number');
    //...

    if (empty($messages)) return true;
    return implode('<br />', $messages);
}

/**
 * Do not forget about translating your plugin, use __('english string', 'your_uniq_plugin_name') to retrieve translated string
 * and _e('english string', 'your_uniq_plugin_name') to echo it
 * in this example plugin your_uniq_plugin_name == custom_table_example
 *
 * to create translation file, use poedit FileNew catalog...
 * Fill name of project, add "." to path (ENSURE that it was added - must be in list)
 * and on last tab add "__" and "_e"
 *
 * Name your file like this: [my_plugin]-[ru_RU].po
 *
 * http://codex.wordpress.org/Writing_a_Plugin#Internationalizing_Your_Plugin
 * http://codex.wordpress.org/I18n_for_WordPress_glossarys
 */
function custom_table_example_languages93()
{
    load_plugin_textdomain('custom_table_example', false, dirname(plugin_basename(__FILE__)));
}

add_action('init', 'custom_table_example_languages93');