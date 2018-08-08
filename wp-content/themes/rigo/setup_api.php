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


/**
 * Then you can start adding each endpoint one by one
*/
/**$api->get([ 
    'path' => '/courses', 
    'controller' => 'SampleController:getDraftCourses' 
    ]); 
**/

$api->get([ 
    'path' => '/trainings', 
    'controller' => 'TrainingController:getTraining', 
    'capability' => 'activate_plugins'  
    ]); 

/** ADDING PRODUCTS AND USERS ENTITIES BELOW **/
<<<<<<< HEAD
/**    
=======


$api->get([ 
    'path' => '/products', 
    'controller' => 'ProductController:getProduct' 
    ]); 
/** 
>>>>>>> bcdf36610d808c2803fe494ccdbf0c1af00f13b0
    $api->get([ 
    'path' => '/users', 
    'controller' => 'UsersController:getUser' 
    ]); 
**/