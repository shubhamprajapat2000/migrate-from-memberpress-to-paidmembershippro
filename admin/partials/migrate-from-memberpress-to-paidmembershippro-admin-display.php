<?php

/**
 * Provide a admin area view for the plugin
 *
 * This file is used to markup the admin-facing aspects of the plugin.
 *
 * @link       https://www.expresstechsoftwares.com
 * @since      1.0.0
 *
 * @package    Migrate_From_Memberpress_To_Paidmembershippro
 * @subpackage Migrate_From_Memberpress_To_Paidmembershippro/admin/partials
 */
?>

                <p>
                    <button type="submit" name="migrate-menu" value="migrate-menu" >
                        <?php echo __( 'Migrate Menu', 'migrate-from-memberpress-to-paidmembershippro' ); ?>
                    </button>
                </p>       
	


   <?php 

            $args = array(
                'post_status' => 'publish',
                'post_type' => 'memberpressproduct' 
            );
            $the_query = new WP_Query( $args );
            
            // The Loop
            if ( $the_query->have_posts() ) {
                echo "<table width='100%' height='100' border='1'>";
                echo "<tbody>";
                        echo "<tr>";               
                            echo '<th>ID</th>';
                            echo '<th>Name</th>';
                        echo "</tr>";
                        while ( $the_query->have_posts() ) {
                            $the_query->the_post();
                            echo "<tr>";
                                echo '<td>' . get_the_ID() . '</td>';
                                echo '<td>' . get_the_title() . '</td>';
                            echo "</tr>";
                            $id = get_the_ID();
                            $title = get_the_title();

                            global $wpdb;
            $table_name = $wpdb->prefix . 'pmpro_membership_levels';
            $wpdb->insert($table_name , array("id" => $id, "name" => $title));
                        }
                echo "</tbody>";
                echo "</table>"; 

                
               
            } else {
                echo "No Data";
            }

/* INSERT DATA INTO DATABASE */
// echo $id;
// echo $title;

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

                
             //   INSERT INTO `wp_pmpro_membership_levels`(`id`, `name`, `description`, `confirmation`, `initial_payment`, `billing_amount`, `cycle_number`, `cycle_period`, `billing_limit`, `trial_amount`, `trial_limit`, `allow_signups`, `expiration_number`, `expiration_period`) VALUES ('1','hira','[NULL]','[NULL]','[NULL]','[NULL]','[NULL]','[NULL]','[NULL]','[NULL]','[NULL]','[NULL]','[NULL]','[NULL]') 
            //  $id = 3;
            //  $name = 'coin';
            //  global $wpdb;
            //  $table_name = 'pmpro_membership_levels';                                      
            //  //$table = $wpdb->prefix.'wp_pmpro_membership_levels';
            //  $data = array('id' => $id, 'name' => $name,'description' =>NULL, 'confirmation' =>NULL,'initial_payment' =>NULL,'billing_amount' =>NULL,'cycle_number' =>NULL,'cycle_period' =>NULL,'billing_limit' =>NULL,'trial_amount' =>NULL,'trial_limit' =>NULL,'allow_signups' =>NULL,'expiration_number' =>NULL,'expiration_period' =>NULL);
            //  //$format = array('%s','%d');
            // $result = $wpdb->insert($table_name,$data,$format=null);
            // if($result==1){
            //     echo "pass";
            // }else{
            //     echo "fail";
            // }
            // $my_id = $wpdb->insert_id;

            // global $wpdb;
            // $sql = $wpdb->insert('pmpro_membership_levels',array('id'=>5,'name'=>'Molti'),$format=null);
            // if($sql==1){
            //         echo "pass";
            //     }else{
            //         echo "fail";
            //     }
           
   ?>
                
<!-- This file should primarily consist of HTML with a little bit of PHP. -->
