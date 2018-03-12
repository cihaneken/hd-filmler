<article id="post-<?php the_ID(); ?>" <?php post_class('single-article w-100'); ?>>
<div class="post-single">
<div class="entry-header">
<div class="entry-title">
    <?php the_title( '<h1><i class="fas fa-film"></i> ', '</h1>' ); ?>
</div>
</div><!-- .entry-header -->
<div class="entry-content">
	<?php the_content (); ?>
</div>
</div><!-- .post-single -->
</article>