<?php get_header(); ?>
<?php if ( is_home ) : ?>
<?php include_once ('slide.php'); ?>
<?php endif; ?>

<div class="col-md-9">
<div class="row">
<?php
if ( have_posts() ) :
while ( have_posts() ) : the_post();
get_template_part( 'content/content', 'home' );
endwhile;
else :
get_template_part( 'content/content', 'none' );
endif;
?>
</div>
<div class="col-md-12 text-center">
<?php if ( is_home () || is_archive ()  ) : ?>
<?php wp_pagenavi(); ?>
<?php endif; ?>
</div>
</div><!-- .col-sm-9 -->
<div class="col-md-3">
<?php get_sidebar(); ?>
</div><!-- .col-sm-3 -->
<?php get_footer(); ?>