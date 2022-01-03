<?php 

/**
  * Display page banner 
  */
  $show_banner = carspa_options('carspa_blog_banner_toggle', 'show');
  
  $banner_url = carspa_options('carspa_blog_banner_upload');
  
  $how_title = carspa_options('carspa_blog_banner_title', 'show');
  $title = carspa_options('carspa_blog_title', get_bloginfo('name'));
  $show_breadcrumbs = carspa_options('carspa_blog_banner_breadcrumb', 'show');
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
                <?php if($how_title == 'show') : ?>
                    <h1 class="page_title banne-blog"><?php echo esc_html( $title ); ?></h1>
                <?php endif;
                if($show_breadcrumbs  == 'show') : 
                    carspa_breadcrumbs(); 
                endif; ?> 
            </div>
        </div>
</div>