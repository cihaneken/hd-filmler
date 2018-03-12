<!DOCTYPE html>
<html lang="tr">
<head>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="theme-color" content="#66ACFF">
  <link href="https://use.fontawesome.com/releases/v5.0.8/css/all.css" rel="stylesheet">
  <script src="https://cihaneken.com.tr/blog/wp-content/themes/ceblogyeni/js/jquery.min.js"></script>
  <script src="https://cihaneken.com.tr/blog/wp-content/themes/ceblogyeni/js/popper.min.js"></script>
  <!--script defer src="https://cihaneken.com.tr/blog/wp-content/themes/ceblogyeni/js/all.js"></script-->
<?php wp_head(); ?>
</head>
<body>
<div id="site-content" class="container">
<div class="row">
<div class="col-sm-12">
<header>
    <nav class="navbar navbar-expand-lg mx-auto">
      <a class="navbar-brand text-light" href="<?php bloginfo( 'url' ); ?>"><?php bloginfo( 'name' ); ?></a>
		<button class="navbar-toggler btn-outline-light" type="button" data-toggle="collapse" data-target="#navbardegistir01" aria-controls="navbardegistir01" aria-expanded="false" aria-label="Gezinmeyi aç / kapat">
        <i class="fas fa-align-justify"></i>
		</button>

      <div class="collapse navbar-collapse" id="navbardegistir01">
									<?php
										// Primary navigation menu.
										wp_nav_menu( array(
											'container' => false,
											'depth'				=> 2, // 1 = with dropdowns, 0 = no dropdowns.
											'container_class' => 'collapse navbar-collapse',
											'menu_class'     => 'navbar-nav mr-auto mt-2 mt-lg-0',
											'theme_location' => 'enustmenu',
											'fallback_cb'    => false,
											'walker'			=> new WP_Bootstrap_Navwalker()
										) );
									?>					
		<form class="form-inline my-2 my-lg-0" role="search" method="get" action="<?php echo home_url( '/' ); ?>">
		<input class="form-control mr-sm-2" type="search"  placeholder="Aramak istermisin?" name="s">
        <button class="btn btn-outline-light my-2 my-sm-0" type="submit">Bul</button>
        </form>
      </div>
    </nav>
</header>
</div><!-- .col-sm-12 -->