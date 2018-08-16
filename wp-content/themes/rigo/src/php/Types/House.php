<?php
namespace Rigo\Types;
    
use WPAS\Types\BasePostType;

class House extends BasePostType{
    
    function initialize(){
        
        add_action('acf/init', array($this, 'add_local_fields'));
    }

    function add_local_fields() {
	
    	acf_add_local_field_group(array(
    		'key' => 'home_field',
    		'title' => 'Home Video',
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
                    			),            
                    			array(
                                			'key'           => 'field_image',
                                			'label'         => 'Image',
                                			'name'          => 'image',
                                			'type'          => 'image',
                                			),
                                array (
                                            'key' => 'field_to_import',
                                            'label' => 'Repeatable image with optional link',
                                            'name' => 'repeatable_imgs',
                                            'type' => 'image',
                                            'parent' => 'subfields', //parent
                                            'sub_fields' => array (
                                                                   array (
                                        'key' => 'field_5237950f6c6e4',
                                        'label' => 'url',
                                        'name' => 'img_link_url',
                                        'type' => 'text',
                                        'instructions' => 'leave blank if link is not required',
                                        'formatting' => 'html',
                                    ),
                                ),
                                ),
                        
                                ),
      'location' => array (
    			array (
    				array (
    					'param' => 'post_type',
    					'operator' => '==',
    					'value' => 'house',
    				),
    			),
    		),	
    	));
    	
    	
    }
}

?>