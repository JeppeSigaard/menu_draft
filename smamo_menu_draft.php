<?php
/*

Plugin Name: Smamo Menu Draft
Description: Fjern drafts fra menuer
Version:     1.0.1
Author:      SmartMonkey
Author URI:  https://smartmonkey.dk
Text Domain: smamo

*/


add_filter('wp_nav_menu_objects','smamo_remove_menu_draft',10,2);
function smamo_remove_menu_draft($items, $args){
    
    foreach($items as $n => $object){
        
        if ( 'draft' == get_post_status ($object->object_id)) {
            unset ($items[$n]);
        }
        
    }
    return $items;

}
