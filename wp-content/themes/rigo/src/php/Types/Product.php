<?php
namespace Rigo\Types;
    
use WPAS\Types\BasePostType;

class Product extends BasePostType{
    
}
    function initialize(){
        
        add_action('acf/init', array($this, 'add_local_fields'));
    }
    			),
    		),
    	));
    	
    }
}

?>