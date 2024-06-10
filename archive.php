<?php get_header();

the_archive_title();

while(have_posts(  )) {
    the_post(  );
?> 
    <div>
        <h2><?php the_title( ); ?></h2>
        <div class="metabox">
        <p>Posted by <?php the_author_posts_link(); ?> on <?php the_time('n.j.y'); ?> in <?php echo get_the_category_list(', '); ?></p>
      </div>
        <?php the_content(); 
        ?>
    </div>
<?php
 }
get_footer();

?>