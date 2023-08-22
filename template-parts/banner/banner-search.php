<?php 
  
$banner_url = carspa_options('carspa_search_banner_upload');

$banner_background_url = CARSPA_IMAGES.'/blog/banner/blog_details_img.jpg';

if($banner_url && !empty($banner_url['url'])) {
    $banner_background_url = $banner_url['url'];
}
if(!class_exists('Redux')){
    $banner_background_url = '';
  }
?>

<?php if($banner_background_url != '') :  ?>
<div class="blog-breadcrumbs-area-two banner_search parallaxie" data-bg-img="<?php echo esc_url($banner_background_url); ?>">
<div class="overlay_bg"></div>
<?php else: ?>
<div class="blog-breadcrumbs-area-two banner_search banner-with-color">
<?php endif; ?> 
        <div class="container">
            <div class="breadcrumb_content text-white text-center">
                <h1 class="page-title">
                    <?php
                    /* translators: %s: search query. */
                    printf( esc_html__( 'Search Results for: %s', 'carspa' ), '<span>' . get_search_query() . '</span>' );
                    ?>
                </h1>
               <?php carspa_breadcrumbs(); ?>
            </div>
        </div>
</div>