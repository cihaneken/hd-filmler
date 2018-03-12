<div class="col-sm-12 d-none d-lg-block">
<div class="row slidecontent">
<div class="slidecontent-title"><h3>Editörün Seçimi</h3></div>
      <?php
	  // The Query
	  query_posts( array ( 'posts_per_page' => 6 ) );
	  // The Loop
	 while ( have_posts() ) : the_post();

	 get_template_part( 'content/content', 'slide' );
	 ?>

	  <?php endwhile;

	  // Reset Query
	  wp_reset_query();

	?>
</div>

</div>