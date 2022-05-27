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
                            echo '<th>Description</th>';
                           // echo '<th>Confirmation</th>';
                            echo '<th>Billing Price</th>';
                            echo '<th>cycle_number</th>';
                            echo '<th>cycle_period</th>';
                            echo '<th>trial_amount</th>';
                            echo '<th>trial_limit</th>';
                            echo '<th>expiration_number</th>';
                            echo '<th>expiration_period</th>';
                        echo "</tr>";

                        while ( $the_query->have_posts() ) {
                            $the_query->the_post();
                    /*
                            fetch data from get_post_meta
                    */
                            $Payment = get_post_meta( get_the_ID() , '_mepr_product_price', true );
                            $cycle_number = get_post_meta( get_the_ID() , '_mepr_product_limit_cycles_num', true );
                            $cycle_period = get_post_meta( get_the_ID() , '_mepr_product_limit_cycles_expires_type', true );
                            $trial_amount = get_post_meta( get_the_ID() , '_mepr_product_trial_amount', true );
                            $trial_limit = get_post_meta( get_the_ID() , '_mepr_product_trial_days', true );
                            $expiration_number = get_post_meta( get_the_ID() , '_mepr_product_limit_cycles_expires_after', true );
                            $expiration_period = get_post_meta( get_the_ID() , '_mepr_product_limit_cycles_expires_type', true );

                            //$trial_amount = get_post_meta( get_the_ID() , '_mepr_product_trial_amount', true );

                            echo "<tr>";
                            
                                echo '<td>' . get_the_ID() . '</td>';
                                echo '<td>' . get_the_title() . '</td>';
                                echo '<td>' . get_the_content() . '</td>';
                               //echo '<td>' . get_the_confirmation() . '</td>';
                                echo "<td>$Payment</td>";
                                echo "<td>$cycle_number</td>";
                                echo "<td>$cycle_period</td>";
                                echo "<td>$trial_amount</td>";
                                echo "<td>$trial_limit</td>";
                                echo "<td>$expiration_number</td>";
                                echo "<td>$expiration_period</td>";

                            echo "</tr>";

                            $id = get_the_ID();
                            $title = get_the_title();
                            $description = get_the_content();
                            echo $id."</br>";
                            echo $title."</br>";
                            echo $description."</br>";
                            echo $Payment."</br>";
                            echo $cycle_number."<br>";
                            echo $cycle_period."<br>";
                            echo $trial_amount."<br>";
                            echo $trial_limit."<br>";
                            echo $expiration_number."<br>";


                             global $wpdb;
                             $table = $wpdb->prefix.'pmpro_membership_levels';
                            // $data = array('id' => $id, 'name' => $title, 'description' => $description, 'confirmation' => NULL  ,'initial_payment' => $Payment );
                            // $format = array('%d','%s','%s','%s','%d');
                            // $wpdb->insert($table,$data,$format);
                            // $my_id = $wpdb->insert_id;
                          
                           $sql = $wpdb->prepare("INSERT INTO `$table` (`id`, `name`, `description`, `initial_payment`, `cycle_number`,`cycle_period`, `trial_amount`,`trial_limit`,`expiration_number` ) 
                           values (%d, %s, %s, %s, %d, %s, %s, %d, %d )", $id,  $title, $description, $Payment, $cycle_number, $cycle_period, $trial_amount, $trial_limit, $expiration_number, $expiration_period  );
                           $wpdb->query($sql);
                
                }
                echo "</tbody>";
                echo "</table>"; 

            } else {
                echo "No Data";
            }
      
           
   ?>
                
<!-- This file should primarily consist of HTML with a little bit of PHP. -->
