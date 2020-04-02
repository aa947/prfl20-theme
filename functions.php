<?php 

require_once( get_template_directory().'/templates/admin.php');


function wpa_90820() {
    wp_enqueue_style('style', get_stylesheet_directory_uri() .'/style.css', array() );
    wp_enqueue_style('bootstrap', 'https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css', array() );
    // wp_enqueue_style('bootstrap', get_stylesheet_directory_uri() .'/vendor/fontawesome-free/css/all.min.css', array() );
    wp_enqueue_style('style','https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i', array() );
    wp_enqueue_style('bootstrap', get_stylesheet_directory_uri() .'/css/sb-admin-2.min.css', array() );
    wp_enqueue_script('bootstrap', get_stylesheet_directory_uri() .'/vendor/jquery/jquery.min.js', array() );
    wp_enqueue_script('bootstrap', get_stylesheet_directory_uri() .'/vendor/bootstrap/js/bootstrap.bundle.min.js', array() );
    wp_enqueue_script('bootstrap', get_stylesheet_directory_uri() .'/vendor/jquery-easing/jquery.easing.min.js', array() );
    wp_enqueue_script('bootstrap', get_stylesheet_directory_uri() .'/vendor/js/sb-admin-2.min.js', array() );
    wp_enqueue_script('fontAwesome', " https://kit.fontawesome.com/1c03bf9151.js", array() );


   
      
}

add_action('wp_enqueue_scripts', 'wpa_90820');

// function bootstrapstarter_enqueue_styles() {
//     wp_register_style('bootstrap', get_template_directory_uri() . '/bootstrap/css/bootstrap.min.css' );
//     $dependencies = array('bootstrap');
//     wp_enqueue_style( 'bootstrapstarter-style', get_stylesheet_uri(), $dependencies ); 
// }

// function bootstrapstarter_enqueue_scripts() {
//     $dependencies = array('jquery');
//     wp_enqueue_script('bootstrap', get_template_directory_uri().'/bootstrap/js/bootstrap.min.js', $dependencies, '3.3.6', true );
// }

// add_action( 'wp_enqueue_scripts', 'bootstrapstarter_enqueue_styles' );
// add_action( 'wp_enqueue_scripts', 'bootstrapstarter_enqueue_scripts' );




// function calling_menus() {
//     add_theme_support('menus');
//     register_nav_menu('primary', 'very Top of your page');

// }

//add_action('init', 'calling_menus');


// function show_msgs_to_admin() {
//     include_once(ABSPATH."wp-admin/includes/plugin.php");
//     if( !is_plugin_active('easing-slider/easing-slider.php') ) {
//         echo '<div id="allert"  class="error">';
//         echo '<p>This theme requires you to install <a href="https://wordpress.org/plugins/easing-slider/"> easing-slider</a> plug-in</p>';
//         echo '</div>';
//     }
// }



//add_action('admin_notices', "show_msgs_to_admin");
add_action('after_setup_theme', 'prfl20_setup');


// function prfl20_setup() {

//     create_projects_table();
//     create_certificates_table();
//     create_skills_table();
//     create_subscribers_table();
//     create_reviews_table();
//     create_education_table();
//     create_messages_table();
//     creat_homePage_default();
//     creat_projects_page();
//     creat_project_page();
//     creat_certificates_page();
//     creat_certificate_page();
//     creat_contact_page();

// }



if ( ! function_exists( 'prfl20_setup' ) ) {
    /**
    * Sets up theme defaults and registers support for various WordPress features
    *
    *  It is important to set up these functions before the init hook so that none of these
    *  features are lost.
    *
    *  @since prfl20 1.0
    */
    function prfl20_setup() {

        create_projects_table();
        create_certificates_table();
        create_skills_table();
        create_subscribers_table();
        create_reviews_table();
        create_education_table();
        creat_homePage_default();
        creat_projects_page();
        creat_project_page();
        creat_certificates_page();
        creat_certificate_page();
        creat_contact_page();

    }

}

function create_projects_table(){
    global $wpdb;
   
    $table_name =$wpdb->prefix."projects";
    $charset_collate = $wpdb->get_charset_collate();
 
    $sql = "CREATE TABLE $table_name(
        id mediumint(9) NOT NULL AUTO_INCREMENT,
        time datetime DEFAULT '0000-00-00 00:00:00' NOT NULL,
        name text DEFAULT '' NOT NULL,
        summary text DEFAULT '' NOT NULL,
        url varchar(55) DEFAULT '' NOT NULL,
        github text DEFAULT '' NOT NULL,
        video text DEFAULT '' NOT NULL,
        languages text DEFAULT '' NOT NULL,
        date text DEFAULT '' NOT NULL,
        fontAwesome text DEFAULT '' NOT NULL,

 
        PRIMARY KEY (id) 
    )$charset_collate; ";
 
     require_once(ABSPATH.'wp-admin/includes/upgrade.php');
     dbDelta($sql);
}


function create_certificates_table(){
    global $wpdb;
   
    $table_name =$wpdb->prefix."certificates";
    $charset_collate = $wpdb->get_charset_collate();
 
    $sql = "CREATE TABLE $table_name(
        id mediumint(9) NOT NULL AUTO_INCREMENT,
        time datetime DEFAULT '0000-00-00 00:00:00' NOT NULL,
        name text DEFAULT '' NOT NULL,
        provider text DEFAULT '' NOT NULL,
        url varchar(55) DEFAULT '' NOT NULL,
        host text DEFAULT '' NOT NULL,
        photo text DEFAULT '' NOT NULL,
     

 
        PRIMARY KEY (id) 
    )$charset_collate; ";
 
     require_once(ABSPATH.'wp-admin/includes/upgrade.php');
     dbDelta($sql);
}


function create_education_table(){
    global $wpdb;
   
    $table_name =$wpdb->prefix."education";
    $charset_collate = $wpdb->get_charset_collate();
 
    $sql = "CREATE TABLE $table_name(
        id mediumint(9) NOT NULL AUTO_INCREMENT,
        time datetime DEFAULT '0000-00-00 00:00:00' NOT NULL,
        start text DEFAULT '' NOT NULL,
        end text DEFAULT '' NOT NULL,
        degree text DEFAULT '' NOT NULL,
        university text DEFAULT '' NOT NULL,
        country text DEFAULT '' NOT NULL,
     

 
        PRIMARY KEY (id) 
    )$charset_collate; ";
 
     require_once(ABSPATH.'wp-admin/includes/upgrade.php');
     dbDelta($sql);
}


function create_reviews_table(){
    global $wpdb;
   
    $table_name =$wpdb->prefix."reviews";
    $charset_collate = $wpdb->get_charset_collate();
 
    $sql = "CREATE TABLE $table_name(
        id mediumint(9) NOT NULL AUTO_INCREMENT,
        time datetime DEFAULT '0000-00-00 00:00:00' NOT NULL,
        name text DEFAULT '' NOT NULL,
        rel text DEFAULT '' NOT NULL,  
        text text DEFAULT '' NOT NULL,
     
 
        PRIMARY KEY (id) 
    )$charset_collate; ";
 
     require_once(ABSPATH.'wp-admin/includes/upgrade.php');
     dbDelta($sql);
}

function create_messages_table() {
    global $wpdb;
   
    $table_name =$wpdb->prefix."reviews";
    $charset_collate = $wpdb->get_charset_collate();
 
    $sql = "CREATE TABLE $table_name(
        id mediumint(9) NOT NULL AUTO_INCREMENT,
        time datetime DEFAULT '0000-00-00 00:00:00' NOT NULL,
        name text DEFAULT '' NOT NULL,
        email text DEFAULT '' NOT NULL,  
        message text DEFAULT '' NOT NULL,
     
 
        PRIMARY KEY (id) 
    )$charset_collate; ";
 
     require_once(ABSPATH.'wp-admin/includes/upgrade.php');
     dbDelta($sql);
}


function create_skills_table(){
    global $wpdb;
   
    $table_name =$wpdb->prefix."skills";
    $charset_collate = $wpdb->get_charset_collate();
 
    $sql = "CREATE TABLE $table_name(
        id mediumint(9) NOT NULL AUTO_INCREMENT,
        time datetime DEFAULT '0000-00-00 00:00:00' NOT NULL,
        value text DEFAULT '' NOT NULL,
        skill text DEFAULT '' NOT NULL,
        fontAwesome text DEFAULT '' NOT NULL,

 
        PRIMARY KEY (id) 
    )$charset_collate; ";
 
     require_once(ABSPATH.'wp-admin/includes/upgrade.php');
     dbDelta($sql);
}


function create_subscribers_table(){
    global $wpdb;
   
    $table_name =$wpdb->prefix."subscribers";
    $charset_collate = $wpdb->get_charset_collate();
 
    $sql = "CREATE TABLE $table_name(
        id mediumint(9) NOT NULL AUTO_INCREMENT,
        time datetime DEFAULT '0000-00-00 00:00:00' NOT NULL,
        email text DEFAULT '' NOT NULL,

 
        PRIMARY KEY (id) 
    )$charset_collate; ";
 
     require_once(ABSPATH.'wp-admin/includes/upgrade.php');
     dbDelta($sql);
}


function creat_homePage_default(){

    if(get_option('page_on_front')=='0' && get_option('show_on_front')=='posts'){
           // Create homepage
           $homepage = array(
               'post_type'    => 'page',
               'post_title'    => 'Home',
               'post_content'  => '',
               'post_status'   => 'publish',
               'post_author'   => 1
           ); 
           // Insert the post into the database
           $homepage_id =  wp_insert_post( $homepage );
           // set this page as homepage
           update_option('show_on_front', 'page');
           if( $homepage_id ){

           update_option('page_on_front', $homepage_id);
           }
       }
   
   }


   function creat_projects_page(){

    if(post_exists('projects')){
        return false;
    }

           // Create homepage
           $page = array(
               'post_type'    => 'page',
               'post_title'    => 'projects',
               'post_content'  => '',
               'post_status'   => 'publish',
               'post_author'   => 1
           ); 
           // Insert the post into the database
           $page_id =  wp_insert_post( $page );
           if( $page_id ){

           update_post_meta($page_id, '_wp_page_template', 'page-projects.php');
           }
       
   
   }

   
   function creat_project_page(){
    if(post_exists('project')){
        return false;
    }


           // Create homepage
           $page = array(
               'post_type'    => 'page',
               'post_title'    => 'project',
               'post_content'  => '',
               'post_status'   => 'publish',
               'post_author'   => 1
           ); 
           // Insert the post into the database
           wp_insert_post( $page );
           $page_id =  wp_insert_post( $page );
           if( $page_id ){
           update_post_meta($page_id, '_wp_page_template', 'page-project.php');
           }
       
   
   }


   function creat_certificates_page(){
    if(post_exists('certificates')){
        return false;
    }

           // Create homepage
           $page = array(
               'post_type'    => 'page',
               'post_title'    => 'certificates',
               'post_content'  => '',
               'post_status'   => 'publish',
               'post_author'   => 1
           ); 
           // Insert the post into the database
           wp_insert_post( $page );
           $page_id =  wp_insert_post( $page );
           if( $page_id ){
           update_post_meta($page_id, '_wp_page_template', 'page-certificates.php');
           }
       
   
   }


   function creat_certificate_page(){
    if(post_exists('certificate')){
        return false;
    }

           // Create homepage
           $page = array(
               'post_type'    => 'page',
               'post_title'    => 'certificate',
               'post_content'  => '',
               'post_status'   => 'publish',
               'post_author'   => 1
           ); 
           // Insert the post into the database
           wp_insert_post( $page );
           $page_id =  wp_insert_post( $page );
           if( $page_id ){
           update_post_meta($page_id, '_wp_page_template', 'page-certificate.php');
           }
       
   
   }


   function creat_contact_page(){
    if(post_exists('contact')){
        return false;
    }

           // Create homepage
           $page = array(
               'post_type'    => 'page',
               'post_title'    => 'contact',
               'post_content'  => '',
               'post_status'   => 'publish',
               'post_author'   => 1
           ); 
           // Insert the post into the database
           wp_insert_post( $page );
           $page_id =  wp_insert_post( $page );
           if( $page_id ){
           update_post_meta($page_id, '_wp_page_template', 'page-contact.php');
           }
       
   
   }