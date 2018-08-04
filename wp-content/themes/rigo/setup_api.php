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
    'controller' => 'TrainingController:getTraining' 
    ]); 

/** ADDING PRODUCTS AND USERS ENTITIES BELOW **/

/** 
$api->get([ 
    'path' => '/products', 
    'controller' => 'ProductController:getProduct' 
    ]); 
    
    $api->get([ 
    'path' => '/users', 
    'controller' => 'UsersController:getUser' 
    ]); 
    **/