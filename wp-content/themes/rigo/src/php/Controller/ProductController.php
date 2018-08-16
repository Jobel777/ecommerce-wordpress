<?php
namespace Rigo\Controller;

use \WP_Query;
use \WC_Product_Query;
use \StdClass;

class ProductController{
  
    public function getAllProducts( $request ){
        
        $products = new WP_Query([
            'post_type' => 'post'//,
                //'show_product_on_only_premium' => 'yes',
            ]);

        $args = array(
            'status' => 'publish',
        );
        $products = wc_get_products( $args );
        $tempArr = [];
        foreach($products as $product){
            $product_obj = json_decode($product-> __toString());
            $product_obj->img_src = wp_get_attachment_image_src($product_obj->image_id)[0];
            $images_ids = $product-> get_gallery_image_ids();
            
            $images_arr = [];
            for($i = 0, $j = count($images_ids); $i < $j;$i++ ){
                $image_query = wp_get_attachment_image_src($images_ids[$i], 'shop_catalog');
                $img = new StdClass;
                $img->src = $image_query[0];
                array_push($images_arr, $img);
            }
            $product_obj->gallery = $images_arr;
            array_push($tempArr, $product_obj);
        }
        return $tempArr;
    } 



  
  
  
  
  
    /*public function getAllProducts(){
        $args = array(
            'post_type' => 'product',
            'posts_per_page' => 6
        );

        $query = new WP_Query( $args );
        
        if ( $query->have_posts() ) {
        	while ( $query->have_posts() ) {
        		$query->the_post();
        
        		//Include the Meta Tags and Values
        		$query->post->meta_keys = get_post_meta(get_the_ID($query->post->ID), 'key_1', true);
        		
        		//Include the Featured Image
            		//$query->post->thumbnail = wp_get_attachment_image_src( get_post_thumbnail_id( $query->post->ID ), "large" );
            		$query = wp_get_attachment_image_src( get_post_thumbnail_id( $loop->post->ID ), 'https' );
        	}
        	/* Restore original Post Data 
        	wp_reset_postdata();
        }
    
        return $query->posts;
    }*/
    
}

?>