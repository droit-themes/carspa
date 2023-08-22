
<?php 
    $banner_url       = carspa_options('carspa_shop_banner_upload');
    $shop_title       = carspa_options('carspa_shop_title');
    $show_breadcrumbs = carspa_options('carspa_shop_breadcrumbs', 'yes');

      $banner_background_url = CARSPA_IMAGES.'/blog/banner/blog_details_img.jpg';
      if($banner_url && !empty($banner_url['url'])) {
           $banner_background_url = $banner_url['url'];
       }
     
       if(!class_exists('Redux')){
         $banner_background_url = '';
       }
?>
<?php if($banner_background_url != '') :  ?>
    <div class="blog-breadcrumbs-area-two shop_page parallaxie" data-bg-img="<?php echo esc_url($banner_background_url); ?>">
    <div class="overlay_bg"></div>
<?php else: ?>
<div class="blog-breadcrumbs-area-two shop_page banner-with-color">
<?php endif; ?>
        <div class="container">
            <div class="breadcrumb_content text-center">
                <h1 class="page-title page_title">
                    <?php
                       
                        if( is_product_category() ) { 
                           the_archive_title();
                        } else { 
                            if(!empty($shop_title) && is_shop() ){
                              echo $shop_title;  
                            }else{
                            single_post_title();
                            } 
                        }
                         ?>
                </h1>
               <?php 
                 if($show_breadcrumbs =='yes'):
                    if(!is_product_category() ) {  carspa_breadcrumbs(); }
                 endif;
                ?> 
            </div>
        </div>
</div>
