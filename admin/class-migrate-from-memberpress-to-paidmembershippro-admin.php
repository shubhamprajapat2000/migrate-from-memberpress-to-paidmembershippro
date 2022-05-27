<?php

/**
 * The admin-specific functionality of the plugin.
 *
 * @link       https://www.expresstechsoftwares.com
 * @since      1.0.0
 *
 * @package    Migrate_From_Memberpress_To_Paidmembershippro
 * @subpackage Migrate_From_Memberpress_To_Paidmembershippro/admin
 */

/**
 * The admin-specific functionality of the plugin.
 *
 * Defines the plugin name, version, and two examples hooks for how to
 * enqueue the admin-specific stylesheet and JavaScript.
 *
 * @package    Migrate_From_Memberpress_To_Paidmembershippro
 * @subpackage Migrate_From_Memberpress_To_Paidmembershippro/admin
 * @author     ExpressTech Softwares Solutions Pvt Ltd <contact@expresstechsoftwares.com>
 */
class Migrate_From_Memberpress_To_Paidmembershippro_Admin {

	/**
	 * The ID of this plugin.
	 *
	 * @since    1.0.0
	 * @access   private
	 * @var      string    $plugin_name    The ID of this plugin.
	 */
	private $plugin_name;

	/**
	 * The version of this plugin.
	 *
	 * @since    1.0.0
	 * @access   private
	 * @var      string    $version    The current version of this plugin.
	 */
	private $version;

	/**
	 * Initialize the class and set its properties.
	 *
	 * @since    1.0.0
	 * @param      string    $plugin_name       The name of this plugin.
	 * @param      string    $version    The version of this plugin.
	 */
	public function __construct( $plugin_name, $version ) {

		$this->plugin_name = $plugin_name;
		$this->version = $version;

	}

	/**
	 * Register the stylesheets for the admin area.
	 *
	 * @since    1.0.0
	 */

	public function ets_migrate_add_admin_menu() {
		add_management_page(
			//'tools.php',
			_( 'Migrate Menu' ),
			_( 'Migrate Menu' ),
			'manage_options',
			'migrate-from-memberpress-to-paidmembershippro',
			array( $this, 'ets_pmpro_view' ),
		);
	}

	public function ets_pmpro_view() {
		if ( ! current_user_can( 'administrator' ) ) {
			return;
		}
		require_once MIGRATE_FROM_MEMBERPRESS_PLUGIN_DIR_PATH . 'admin/partials/migrate-from-memberpress-to-paidmembershippro-admin-display.php';
	}


	public function enqueue_styles() {

		/**
		 * This function is provided for demonstration purposes only.
		 *
		 * An instance of this class should be passed to the run() function
		 * defined in Migrate_From_Memberpress_To_Paidmembershippro_Loader as all of the hooks are defined
		 * in that particular class.
		 *
		 * The Migrate_From_Memberpress_To_Paidmembershippro_Loader will then create the relationship
		 * between the defined hooks and the functions defined in this
		 * class.
		 */

		wp_enqueue_style( $this->plugin_name, plugin_dir_url( __FILE__ ) . 'css/migrate-from-memberpress-to-paidmembershippro-admin.css', array(), $this->version, 'all' );

	}

	/**
	 * Register the JavaScript for the admin area.
	 *
	 * @since    1.0.0
	 */
	public function enqueue_scripts() {

		/**
		 * This function is provided for demonstration purposes only.
		 *
		 * An instance of this class should be passed to the run() function
		 * defined in Migrate_From_Memberpress_To_Paidmembershippro_Loader as all of the hooks are defined
		 * in that particular class.
		 *
		 * The Migrate_From_Memberpress_To_Paidmembershippro_Loader will then create the relationship
		 * between the defined hooks and the functions defined in this
		 * class.
		 */

		wp_enqueue_script( $this->plugin_name, plugin_dir_url( __FILE__ ) . 'js/migrate-from-memberpress-to-paidmembershippro-admin.js', array( 'jquery' ), $this->version, false );

	}
    

	// global $wpdb;
// $posts = $wpdb->get_results("SELECT ID, post_title FROM wp_posts WHERE post_status = 'publish'
// AND post_type='memberpressproduct'");

// echo "<pre>";
// print_r($posts);
// echo "<pre>";


// if(!empty($posts))                       
// {    
//     echo "<table width='100%' border='0'>"; // Adding <table> and <tbody> tag outside foreach loop so that it wont create again and again
//     echo "<tbody>";      
//     foreach($posts as $row){   
//         echo "<tr>";
//         echo "<th>ID</th>" . "<td colspan='2'>" . $row->ID . "</td>";
//         echo "<th>Post title</th>" . "<td>" . $row->post_title . "</td>";
//         echo "</tr>";
//     echo "</tbody>";
//     echo "</table>"; 

// }
// }
/* INSERT DATA INTO DATABASE */


                            //$meta = get_post_meta( $id , '_mepr_product_price' );
                            // echo "<pre>";
                            // print_r($meta);
                            // echo "</pre>";
                           // $meta = 50;

                            //update_post_meta( 76, 'key_1', 'Excited', 'Happy' );

            // global $wpdb;
            // $table_name = $wpdb->prefix . 'pmpro_membership_levels';
            // $wpdb->insert($table_name , array("id" => $id, "name" => $title));


 
                // global $wpdb;     
                // $table_name = $wpdb->prefix . 'pmpro_membership_levels';     
                // $id = 52;     
                // $title = 'hira';   
                // $wpdb->query("INSERT INTO $wp_pmpro_membership_levels(id, name,description,confirmation,initial_payment,billing_amount,cycle_number,cycle_period,billing_limit,trial_amount,trial_limit, allow_singnups, expiration_number,expiration_period ) VALUES('$id', '$title')"); 
               

              // if ( isset( $_POST['submit'] ) ){
                
                    // global $wpdb;
                    // $tablename=$wpdb->prefix.'pmpro_membership_levels';
                    // $data=array(
                    //     'id' => 13, 
                    //     'name' => 'hiralal',
                    //     'description' => NULL, 
                    //     'confirmation' => NULL,
                    //     'initial_payment' => NULL, 
                    //     'billing_amount' => NULL, 
                    //     'cycle_number' => NULL,
                    //     'cycle_period' => NULL, 
                    //     'billing_limit' => NULL, 
                    //     'trial_amount' => NULL,
                    //     'trial_limit' => NULL, 
                    //     'allow_singnups' => NULL, 
                    //     'expiration_number' => NULL, 
                    //     'expiration_period' => NULL, );
                
                    //  $wpdb->insert( $pmpro_membership_levels, $data);
                // }else{
                //     echo "Not";
                // }
				
				
				


	
		
			

}
