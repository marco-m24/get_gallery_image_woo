$product_id = '1834';
$product = new WC_product($product_id);
$attachment_ids = $product->get_gallery_image_ids();

foreach( $attachment_ids as $attachment_id ) 
    {
      // Display the image URL
      echo $Original_image_url = wp_get_attachment_url( $attachment_id );

      // Display Image instead of URL
      echo wp_get_attachment_image($attachment_id, 'full');

}
