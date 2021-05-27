$image = wp_get_attachment_image_src( get_post_thumbnail_id( 1834 ), 'single-post-thumbnail' );


    echo '<img src="'.$image[0].'">';
