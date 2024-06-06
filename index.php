<?php get_header();

while(have_posts(  )) {

    the_post(  ); ?>

<div class="page-banner">
      <div class="page-banner__bg-image" style="background-image: url(<?php echo get_theme_file_uri('/images/waterfrontpark.jpg') ?>);"></div>
      <div class="page-banner__content container t-center c-white">
        <h1 class="headline headline--large">Welcome to the</h1>
        <h2 class="headline headline--medium">County of San Diego</h2>
        <h3 class="headline headline--small">Interested in our</h3>
        <a href="#" class="btn btn--large btn--blue">Services</a>
      </div>
    </div>
        
<?php }

get_footer();

?>