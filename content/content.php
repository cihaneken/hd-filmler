<article id="post-<?php the_ID(); ?>" <?php post_class('single-article'); ?>>
	<div class="post-single">
	 <div class="entry-header">
		<div class="entry-title">
          <?php the_title( '<h1><i class="fas fa-film"></i> ', '</h1>' ); ?>
        </div>
		<div class="movie-info row">
		<div class="movie-thumb col-md-4">
		<?php if ( has_post_thumbnail() ) { the_post_thumbnail('card-thumbnail' ,array('class' => 'img-fluid entry-thumbnail')); } else { echo '<img class="img-fluid entry-thumbnail" src="' . esc_url( get_template_directory_uri() ). '/img/no-post-thumbnail.jpg" alt="', the_title(),'" />';
					} ?>
		</div>
		<div class="movie-info-text col-md-8 row">
		<div class="movie-year col-md-6">
		<p><span>Yapım Yılı: </span><?php

        $term_list = wp_get_post_terms($post->ID, 'film-yil', array("fields" => "all"));
					foreach($term_list as $term_single) {
						$tax = $term_single->taxonomy;
						$taxslug = $term_single->slug;
						$taxname = $term_single->name;
            $taxlink = get_term_link( $term_single );
						echo '<a href="'.$taxlink.'" title="'.$taxname.'">'.$taxname.'</a>';
				}
			   ?></p>
		</div>
		<div class="movie-imdb col-md-6">
		<p><span>İmdb: </span><?php

        $term_list = wp_get_post_terms($post->ID, 'film-imdb', array("fields" => "all"));
					foreach($term_list as $term_single) {
						$tax = $term_single->taxonomy;
						$taxslug = $term_single->slug;
						$taxname = $term_single->name;
            $taxlink = get_term_link( $term_single );
						echo ''.$taxname.'';
				}
			   ?></p>
		</div>
		<div class="movie-lang col-md-6">
		<p><span>Dil: </span><?php

        $term_list = wp_get_post_terms($post->ID, 'film-dil', array("fields" => "all"));
					foreach($term_list as $term_single) {
						$tax = $term_single->taxonomy;
						$taxslug = $term_single->slug;
						$taxname = $term_single->name;
            $taxlink = get_term_link( $term_single );
						echo '<a href="'.$taxlink.'" title="'.$taxname.'">'.$taxname.'</a>,';
				}
			   ?></p>
		</div>
		<div class="movie-director col-md-6">
		<p><span>Yönetmen: </span><?php

        $term_list = wp_get_post_terms($post->ID, 'film-yonetmen', array("fields" => "all"));
					foreach($term_list as $term_single) {
						$tax = $term_single->taxonomy;
						$taxslug = $term_single->slug;
						$taxname = $term_single->name;
            $taxlink = get_term_link( $term_single );
						echo '<a href="'.$taxlink.'" title="'.$taxname.'">'.$taxname.'</a>';
				}
			   ?></p>
		</div>
		<div class="movie-cat col-md-12">
		<p><span>Tür: </span><?php

        $term_list = wp_get_post_terms($post->ID, 'film-tur', array("fields" => "all"));
					foreach($term_list as $term_single) {
						$tax = $term_single->taxonomy;
						$taxslug = $term_single->slug;
						$taxname = $term_single->name;
            $taxlink = get_term_link( $term_single );
						echo '<a href="'.$taxlink.'" title="'.$taxname.'">'.$taxname.'</a>,';
				}
			   ?></p>
		</div>
		<div class="movie-actors col-md-12">
		<p><span>Oyuncular: </span><?php

        $term_list = wp_get_post_terms($post->ID, 'film-oyuncular', array("fields" => "all"));
					foreach($term_list as $term_single) {
						$tax = $term_single->taxonomy;
						$taxslug = $term_single->slug;
						$taxname = $term_single->name;
            $taxlink = get_term_link( $term_single );
						echo '<a href="'.$taxlink.'" title="'.$taxname.'">'.$taxname.'</a>,';
				}
			   ?></p>
		</div>
		<div class="movie-ozet col-md-12">
		<?php filmkonusutext_meta('Konu', 'filmkonu', ''); ?>
		</div>
		</div>
		</div><!-- .movie-info -->
	 </div><!-- .entry-header -->
			<div class="part-div">
			<?php bilgi_part(); ?>
			<?php if ( wp_link_pages('echo=0') ) : ?>
			<?php if(get_post_meta($post->ID, 'partsistemi', true) == 'Manuel') { ?>
			<?php movie_part_sistemi(''); ?>
			<?php } else { ?>
			<?php $sayfalama = get_option('part_iki'); wp_link_pages('before=&pagelink=<span class="part-item">'. $sayfalama .' %</span>&after=<span class="part-item"><a href="#respond">Yorum yap</a></span>'); ?>
			<?php } ?> 
			<?php endif; ?>
			<!-- Post Views -->
			<span class="part-item"><?php if(function_exists('the_views')) { the_views(); } ?></span>
			<!-- Post Views End -->
			</div>
		<div class="entry-content">
		<?php the_content(); ?>
		</div>
	</div>
</article>