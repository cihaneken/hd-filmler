<div class="col-md-4">
<a href="<?php echo esc_url( get_permalink());?>" rel="bookmark">
<article id="post-<?php the_ID(); ?>" <?php post_class('article-home'); ?>>
	<div class="post-home  bg-white card my-3 mx-auto">
	<div class="post-thumbnail card-img-top">
          <?php if ( has_post_thumbnail() ) { the_post_thumbnail('card-thumbnail' ,array('class' => 'img-fluid entry-thumbnail')); } else { echo '';
					} ?>
        </div>
		<div class="card-cover">
		<div class="card-imdb position-absolute">
		<h6><i class="fab fa-imdb"></i> <?php

        $term_list = get_the_terms( $post->ID, 'film-imdb' );
	if ( ! empty( $term_list ) ) {
    echo esc_html( $term_list[0]->name ) ;
}
			   ?></h6>		
		</div>
		<div class="card-lang position-absolute">
		<h6><i class="far fa-closed-captioning"></i> <?php

        $term_list = get_the_terms( $post->ID, 'film-dil' );
	if ( ! empty( $term_list ) ) {
    echo esc_html( $term_list[0]->name ) ;
}
			   ?></h6>
		</div>
		<div class="card-size position-absolute">
		<h6><i class="fas fa-expand"></i> <?php

        $term_list = get_the_terms( $post->ID, 'film-size' );
	if ( ! empty( $term_list ) ) {
    echo esc_html( $term_list[0]->name ) ;
}
			   ?></h6>
		</div>
		<div class="entry-title entry-title-home card-title position-absolute">
          <?php
			if ( is_single() ) :
				the_title( '<h1>', '</h1>' );
			else :
				the_title( '<h2>', '</h2>' );
			endif;
		?>
        </div>
		</div>
		<div class="card-hover position-absolute text-center"><i class="far fa-play-circle"></i></div>
</article>
</a>
</div>