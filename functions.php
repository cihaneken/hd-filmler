<?php
function hdfilmler_setup() {

	/*
	 * Make theme available for translation.
	 * Translations can be filed at WordPress.org. See: https://translate.wordpress.org/projects/wp-themes/twentyfifteen
	 * If you're building a theme based on twentyfifteen, use a find and replace
	 * to change 'twentyfifteen' to the name of your theme in all the template files
	 */
	load_theme_textdomain( 'hdfilmler' );
	// Add default posts and comments RSS feed links to head.
	add_theme_support( 'automatic-feed-links' );

	/*
	 * Let WordPress manage the document title.
	 * By adding theme support, we declare that this theme does not use a
	 * hard-coded <title> tag in the document head, and expect WordPress to
	 * provide it for us.
	 */
	add_theme_support( 'title-tag' );

	/*
	 * Enable support for Post Thumbnails on posts and pages.
	 *
	 * See: https://codex.wordpress.org/Function_Reference/add_theme_support#Post_Thumbnails
	 */
	add_theme_support( 'post-thumbnails' );
	set_post_thumbnail_size( 220, 293, true );
	add_image_size( 'card-thumbnail', 220, 293, true );
	add_image_size( 'slide-thumbnail', 154, 205, true );

	// This theme uses wp_nav_menu() in two locations.
	register_nav_menus( array(
		'enustmenu' => __( 'En Üst Menü', 'hdfilmler' ),
		'ustmenu'  => __( 'Üst Menü', 'hdfilmler' ),
		'socialmenu'  => __( 'Sosyal Menü', 'hdfilmler' ),
	) );
	register_sidebar( array(
		'name'          => __( 'Sidebar' ),
		'id'            => 'sidebar-1',
		'description'   => __( 'Add widgets here to appear in your sidebar.', 'ceblog' ),
		'before_widget' => '<div id="%1$s" class="widget %2$s">',
		'after_widget'  => '</div></div>',
		'before_title'  => '<div class="widget-title"><h3>',
		'after_title'   => '</h3></div><div class="widget-content">',
	) );
	/*
	 * Switch default core markup for search form, comment form, and comments
	 * to output valid HTML5.
	 */
	add_theme_support( 'html5', array(
		'search-form', 'comment-form', 'comment-list', 'gallery', 'caption'
	) );

	/*
	 * This theme styles the visual editor to resemble the theme style,
	 * specifically font, colors, icons, and column width.
	 */
	add_editor_style( array( 'assets/editor-style.css', ) );
	

}
add_action( 'after_setup_theme', 'hdfilmler_setup' );






/**
 * Enqueue scripts and styles.
 */
function hdfilmler_scripts() {
	wp_enqueue_style( 'hdfilmler-style', get_stylesheet_uri() );
	wp_enqueue_style( 'bootstrap-css', get_theme_file_uri ('/assets/css/bootstrap.min.css') );
	wp_enqueue_script( 'bootstrap-bundlemin', get_theme_file_uri( '/assets/js/bootstrap.bundle.min.js' ) );
	wp_enqueue_script( 'bootstrap-min', get_theme_file_uri( '/assets/js/bootstrap.min.js' ) );
}
add_action( 'wp_enqueue_scripts', 'hdfilmler_scripts' );


/* Menu <li> class ekle */
add_filter ( 'nav_menu_css_class', 'so_37823371_menu_item_class', 10, 4 );

function so_37823371_menu_item_class ( $classes, $item, $args, $depth ){
  $classes[] = 'nav-item';
  return $classes;
}




/** İNCLUDE **/

// Register Custom Navigation Walker
require_once get_template_directory() . '/class-wp-bootstrap-navwalker.php';

// Taxonomy include
include_once ('inc/taxonomy-register.php');

// Meta box include
include_once ('meta-kutusu.php');


// WP Admin bar remove
add_action('get_header', 'remove_admin_login_header');
function remove_admin_login_header() {
	remove_action('wp_head', '_admin_bar_bump_cb');
}


/** META FİLM KONU **/
function filmkonusutext_meta( $isim, $alan, $sonra )
{
    global $post;
    $ozel = get_post_meta( $post->ID, "".$alan."", true );
		if($alan == "filmkonu"){
			
			echo "<p><span>".$isim."</span>: ".$ozel."</p>"; 
			
		}else{
			
			echo "<p><span>".$isim."</span>: ".$ozel."</p>";
			
		}
        
   
}

/** PART SİSTEMİ **/

function bilgi_part( $args = "" )
{
    global $post;
    $bilgi = get_post_meta( $post->ID, "partbilgi", true );
    if ( $bilgi != "" )
    {
        echo "<span class=\"part-item part-item-bilgi\">( ".$bilgi." )</span>";
    }
    else
    {
        echo "<span class=\"part-item\">HD Film izle:</span>";
    }
}

function movie_part_sistemi( $args = "" )
{
    $defaults = array( "before" => "".__( "".$bilgi."" ), "after" => "<span class=\"part-item\"><a href=\"#respond\">Yorum yap</a></span>", "link_before" => "<span class=\"part-item\">", "link_after" => "</span>", "echo" => 1 );
    $r = wp_parse_args( $args, $defaults );
    extract( $r, EXTR_SKIP );
    global $page;
    global $numpages;
    global $multipage;
    global $more;
    global $pagenow;
    global $pages;
    $bilgi_bir = get_option( "part_bir" );
    $output = "";
    if ( $multipage )
    {
        $output .= $before;
        $i = 1;
        while ( $i < $numpages + 1 )
        {
            $part_content = $pages[$i - 1];
            $has_part_title = strpos( $part_content, "<!--baslik:" );
            if ( 0 === $has_part_title )
            {
                $end = strpos( $part_content, "-->" );
                $title = trim( str_replace( "<!--baslik:", "", substr( $part_content, 0, $end ) ) );
            }
            $output .= " ";
            if ( $i != $page || !$more && $page == 1 )
            {
                $output .= _wp_link_page( $i );
            }

            $output .= $link_before.$title.$link_after;
            if ( $i != $page || !$more && $page == 1 )
            {
                $output .= "</a>";
            }
            $i = $i + 1;
        }
        $output .= $after;
    }
    if ( $echo )
    {
        echo $output;
    }
    return $output;
}



 function _woca_add_quicktags() { 
        echo '        <script type="text/javascript"> 
                QTags.addButton( \'nextpage\', \'Sonraki Parça\', \'<!--nextpage-->\' ); 
            QTags.addButton( \'custom_title\', \'Özel Parça İsmi\',\'<!--baslik:\', \'-->\'); 
        </script> 
    '; 
    } 
	
    add_action( 'admin_print_footer_scripts', '_woca_add_quicktags' );

	
	/** Toplam film sayısı **/
	function toplamfilm( $ilk = "Sitemizde şuan toplam", $son = "film bulunmaktadır." )
{
    $toplam_film = wp_count_posts( "post" );
    $toplam_film = $toplam_film->publish;
    $b = " ";
    echo "<div class=\"toplamfilm\"><i>".$ilk.$b.$toplam_film.$b.$son."</i></div>";
}


/** KATEGORİ ARAMA ÖZELLİĞİ **/
function buildSelect($tax){ 
$terms = get_terms($tax);
$x = '<select class="liste-'. $tax .'" multiple="multiple" name="'. $tax .'">';
$x .= '<option value="">Select '. ucfirst($tax) .'</option>';
foreach ($terms as $term) {
   $x .= '<option value="' . $term->slug . '">' . $term->name . '</option>';    
}
$x .= '</select>';
return $x;
}

