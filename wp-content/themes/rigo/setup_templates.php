<?php
/**
 * To add new monolytic templates you have to start by instanciating the WPASController
*/
$controller = new \WPAS\Controller\WPASController([ 'namespace' => 'Rigo\\Controller\\' ]);


/**
 * Then you can start adding the routes one by one
*/
/** changed controller from 'SampleController:getHomeData' to 'TrainingController:getHomeData'**/
$controller->route([ 'slug' => 'home', 'controller' => 'TrainingController:getHomeData' ]);  