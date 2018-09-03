<?php 

if($post->post_type === "page") {
    get_template_part( 'controllers/controller', $post->post_name );
} else {
    get_template_part( 'controllers/controller', $post->post_type );
}