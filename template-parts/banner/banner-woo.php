
<?php 
    $banner_background_url = CARSPA_IMAGES.'/blog/banner/blog_details_img.jpg';
?>
<div class="blog_breadcrumbs_area_two" data-bg-img="<?php echo esc_url($banner_background_url); ?>">
<div class="overlay_bg"></div>
        <div class="container">
            <div class="breadcrumb_content text-center">
                <h1 class="page-title page_title">
                    <?php
                        if( is_product_category() ) { 
                           the_archive_title();
                        } else { single_post_title(); } ?></h1>
               <?php 
                if(!is_product_category() ) {  carspa_breadcrumbs(); }
                ?> 
            </div>
        </div>
</div>
