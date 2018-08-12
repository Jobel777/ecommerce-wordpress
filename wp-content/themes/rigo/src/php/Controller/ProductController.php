<?php
namespace Rigo\Controller;

use \WP_Query;
use \WC_Product_Query;

class ProductController{
  
    public function getAllProducts(){
        $args = array(
            'post_type' => 'product',
            'posts_per_page' => 6
        );

        $query = new WP_Query( $args );
        
        if ( $query->have_posts() ) {
        	while ( $query->have_posts() ) {
        		$query->the_post();
        
        		//Include the Meta Tags and Values
        		$query->post->meta_keys = get_post_meta($query->post->ID);
        		
        		//Include the Featured Image
            		$query->post->thumbnail = wp_get_attachment_image_src( get_post_thumbnail_id( $query->post->ID ), "large" );
        	}
        	/* Restore original Post Data */
        	wp_reset_postdata();
        }
    
        return $query->posts;
    }
    
    public function getProducts( $request ){
        //print_r($request["id"]);
        //die;
        
        $args = array(
    'status' => 'publish',
);
$products = wc_get_products( $args );
        /*$query = new WC_Product_Query( array(
            'limit' => 10,
            'orderby' => 'date',
            'order' => 'DESC',
            'return' => 'ids',
        ) );
        $products = $query->get_products();*/
        //$products = WC_Product_Query( $args );
        //$products = wp_post_image( $args );
        //$loop = new WP_Query( $args );
        //print_r($products);
        //die;
        //return $loop->posts;
        $tempArr = [];
        foreach($products as $product){
            array_push($tempArr, json_decode($product-> __toString()));
        }

        return $tempArr;
    }    
    
    
}
?>