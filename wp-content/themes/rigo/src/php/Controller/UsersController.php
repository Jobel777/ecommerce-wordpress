<?php
namespace Rigo\Controller;
use \WP_Query;
use \WC_Product_Query;
use \WP_User_Query;
use \StdClass;

class UsersController{
    
    public function putNewUser( $request ){
        $data = $request->get_json_params();
        $userinfo = array('post_status'           => 'draft', 
            'post_type'             => 'post',
            'user_login'            => $data['user_login'], //jcabezas
            'user_pass'             => $data['user_pass'], //$P$B7Wy384PzEZurMRsJyvpc1AWLLD5Zw0
            'user_nicename'         => $data['user_nicename'], //jcabezas
            'user_email'            => $data['user_email'] //jobel.c@gmail.com
                    
            /*'first_name' => $data['first_name'],
            'last_name' => $data['last_name'],
            'user_email' => $data['email'],
            'user_pass' => $data['password']*/
            
            
            );
        
        $result = wp_insert_user ( $userinfo );
        
        if ( is_wp_error( $result ) ) {
            return $result->get_error_message();
        }
        
        return $result;
    }
    
    
    public function getAllUsers(){
        $users = new WP_Query([
            'post_type' => 'post'//,
            ]);

        $args = array(
            'status' => 'publish',
        );
        
        $users = get_users( $args );
        
        print_r($users);
        die;
        //$tempArr = [];
        //foreach($users as $user){
          //  $user_obj = json_decode($users-> __toString());
           // array_push($tempArr, $user_obj);
        //}
        //$tempArr = [];
        //foreach($products as $product){
        //    $product_obj = json_decode($product-> __toString());        
        //$query = new WP_User_Query ( $args );
        /*
        if ( $query->have_posts() ) {
        	while ( $query->have_posts() ) {
        		$query->the_post();
        
        		//Include the Meta Tags and Values
        		$query->post->meta_keys = get_users(get_the_ID($query->post->ID), 'key_1', true);
        		
        		//Include the Featured Image
            		//$query->post->thumbnail = wp_get_attachment_image_src( get_post_thumbnail_id( $query->post->ID ), "large" );
            		//$query = wp_get_attachment_image_src( get_post_thumbnail_id( $loop->post->ID ), 'https' );
        	}
        	// Restore original Post Data 
        	wp_reset_postdata();
        }*/
        return $tempArr;
        //return $users->posts;
    }
    
    
    
    
    /** public function putNewUser( $request ){
        $data = $request->get_json_params();
        $userinfo = array(
            'first_name' => $data['first_name'],
            'last_name' => $data['last_name'],
            'user_email' => $data['email'],
            'user_pass' => $data['password']
            );
        
        $result = wp_insert_user ( $userinfo );
        
        if ( is_wp_error( $result ) ) {
            return $result->get_error_message();
        }
        
        return $result;
    }**/
}

?>