<?php 

$show_banner = carspa_options('carspa_arcive_banner_toggle', 'show');
  
$banner_url = carspa_options('carspa_archive_banner_upload');

$how_title = carspa_options('carspa_arcive_title', 'show');
$show_breadcrumbs = carspa_options('carspa_archive_banner_breadcrumb', 'show');
$banner_background_url = CARSPA_IMAGES.'/blog/banner/blog_details_img.jpg';

if($banner_url && !empty($banner_url['url'])) {
    $banner_background_url = $banner_url['url'];
}

if(!class_exists('Redux')){
    $banner_background_url = '';
  }

?>

<?php if($banner_background_url != '') :  ?>
<div class="blog_breadcrumbs_area_two parallaxie" data-bg-img="<?php echo esc_url($banner_background_url); ?>">
<div class="overlay_bg"></div>
 <?php else: ?>
<div class="blog_breadcrumbs_area_two banner-with-color">
<?php endif; ?>
    <div class="container">
        <div class="breadcrumb_content text-white text-center">
            <?php if(have_posts() && $how_title == 'show') {
                        the_archive_title( '<h1 class="page-title page_title">', '</h1>' );
                    }
                if($show_breadcrumbs == 'show') {    
                carspa_breadcrumbs(); 
                } ?>
        </div>
    </div>
</div>