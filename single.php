<?php get_header(); ?>
<div class="col-md-9">
<div class="row">
<?php
if ( have_posts() ) :
while ( have_posts() ) : the_post();
get_template_part( 'content/content');
endwhile;
else :
get_template_part( 'content/content', 'none' );
endif;
?>
</div>
</div><!-- .col-sm-9 -->
<div class="col-md-3">
<?php get_sidebar(); ?>
</div><!-- .col-sm-3 -->
<?php get_footer(); ?>