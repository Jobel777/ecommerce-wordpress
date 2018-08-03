<?php
namespace Rigo\Types;
    
use WPAS\Types\BasePostType;

class Training extends BasePostType{
    
    function initialize(){
        
        add_action('acf/init', array($this, 'add_local_fields'));
    }

    function add_local_fields() {
	
    	acf_add_local_field_group(array(
    		'key' => 'training_video',
    		'title' => 'Training Video',
    		'fields' => array (
    			array (
    				'key' => 'day',
    				'label' => 'Day',
    				'name' => 'day',
    				'type' => 'oembed',
    			),
    			array (
    				'key' => 'time',
    				'label' => 'Time',
    				'name' => 'time',
    				'type' => 'time_picker',
    			)
    		),
    		'location' => array (
    			array (
    				array (
    					'param' => 'post_type',
    					'operator' => '==',
    					'value' => 'training',
    				),
    			),
    		),
    	));
    	
    }
}

?>