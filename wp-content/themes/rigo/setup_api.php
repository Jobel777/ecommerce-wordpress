<?php

/**
 * To create new API calls, you have to instanciate the API controller and start adding endpoints
*/
$api = new \WPAS\Controller\WPASAPIController([ 
    'version' => '1', 
    'application_name' => 'sample_api', 
    'namespace' => 'Rigo\\Controller\\',
    'allow-origin' => '*',
    'allow-methods' => ' GET, POST, PUT'
]);


/** SAMPLE COURSE BELOW 
 ** Then you can start adding each endpoint one by one
$api->get([ 
    'path' => '/courses', 
    'controller' => 'SampleController:getDraftCourses' 
    ]); 
**/


/** TRAINING BELOW **/

$api->get([ 'path' => '/trainings', 
            'controller' => 'TrainingController:getTraining' //,    'capability' => 'activate_plugins'  
    ]); 
    
/** END TRAINING **/

/** HOME LIKE HOUSE BELOW **/
$api->get([ 'path' => '/house', 
            'controller' => 'HouseController:getHouse' //,    'capability' => 'activate_plugins'  
    ]); 
/** END HOME **/


/** PRODUCTS BELOW **/

$api->get([ 'path' => '/products', 
            'controller' => 'ProductController:getAllProducts']);

////$api->get([ 'path' => '/products/(?P<id>[\d]+)','controller' => 'ProductController:getProducts']);   

/** END PRODUCTS **/



/** USERS ENTITIES BELOW **/

//$api->put([ 'path' => '/products', 'controller' => 'UsersController:createUser']);**/    

$api->put([ 'path' => '/cuser', 
            'controller' => 'UsersController:putNewUser']); 
            
$api->get([ 'path' => '/gusers', 
            'controller' => 'UsersController:getAllUsers']);             

/** END PRODUCTS **/




