<?php
/** TAXONOMY REGİSTER **/

if ( ! function_exists( 'film_tur_taxonomy' ) ) {

// Register Custom Taxonomy
function film_tur_taxonomy() {

	$labels = array(
		'name'                       => 'Film Türleri',
		'singular_name'              => 'Film Tür',
		'menu_name'                  => 'Film Tür',
		'all_items'                  => 'Tüm Film Türleri',
		'parent_item'                => 'Ebeveyn Film Tür',
		'parent_item_colon'          => 'Ebeveyn Film Tür:',
		'new_item_name'              => 'Yeni Film Tür Adı',
		'add_new_item'               => 'Yeni Film Türü Ekle',
		'edit_item'                  => 'Film Türü Düzenle',
		'update_item'                => 'Film Türü Güncelle',
		'view_item'                  => 'Öğeyi Görüntüle',
		'separate_items_with_commas' => 'Virgülle ayrı film tür',
		'add_or_remove_items'        => 'Film türü ekle veya kaldır',
		'choose_from_most_used'      => 'En çok kullanılan film türlerinden birini seçin',
		'popular_items'              => 'Popüler öğeler',
		'search_items'               => 'Film türleri arama',
		'not_found'                  => 'Bulunamadı',
		'no_terms'                   => 'Öğe yok',
		'items_list'                 => 'Öğe listesi',
		'items_list_navigation'      => 'Öğeler listesi navigasyon',
	);
	$args = array(
		'labels'                     => $labels,
		'hierarchical'               => true,
		'public'                     => true,
		'show_ui'                    => true,
		'show_admin_column'          => true,
		'show_in_nav_menus'          => true,
		'show_tagcloud'              => true,
	);
	register_taxonomy( 'film-tur', array( 'post' ), $args );

}
add_action( 'init', 'film_tur_taxonomy', 0 );

}

if ( ! function_exists( 'film_dil_taxonomy' ) ) {

// Register Custom Taxonomy
function film_dil_taxonomy() {

	$labels = array(
		'name'                       => 'Film Dili',
		'singular_name'              => 'Film Dil',
		'menu_name'                  => 'Film Dil',
		'all_items'                  => 'Tüm Film Dilleri',
		'parent_item'                => 'Ebeveyn Film Dil',
		'parent_item_colon'          => 'Ebeveyn Film Dil:',
		'new_item_name'              => 'Yeni Film Dil Adı',
		'add_new_item'               => 'Yeni Film Dil Ekle',
		'edit_item'                  => 'Film Dil Düzenle',
		'update_item'                => 'Film Dil Güncelle',
		'view_item'                  => 'Öğeyi Görüntüle',
		'separate_items_with_commas' => 'Virgülle ayrı film dil',
		'add_or_remove_items'        => 'Film dil ekle veya kaldır',
		'choose_from_most_used'      => 'En çok kullanılan film dillerinden birini seçin',
		'popular_items'              => 'Popüler öğeler',
		'search_items'               => 'Film dilleri arama',
		'not_found'                  => 'Bulunamadı',
		'no_terms'                   => 'Öğe yok',
		'items_list'                 => 'Öğe listesi',
		'items_list_navigation'      => 'Öğeler listesi navigasyon',
	);
	$args = array(
		'labels'                     => $labels,
		'hierarchical'               => true,
		'public'                     => true,
		'show_ui'                    => true,
		'show_admin_column'          => true,
		'show_in_nav_menus'          => true,
		'show_tagcloud'              => true,
	);
	register_taxonomy( 'film-dil', array( 'post' ), $args );

}
add_action( 'init', 'film_dil_taxonomy', 0 );

}

if ( ! function_exists( 'film_yil_taxonomy' ) ) {

// Register Custom Taxonomy
function film_yil_taxonomy() {

	$labels = array(
		'name'                       => 'Film Yılı',
		'singular_name'              => 'Film Yıl',
		'menu_name'                  => 'Film Yıl',
		'all_items'                  => 'Tüm Film Yılları',
		'parent_item'                => 'Ebeveyn Film Yıl',
		'parent_item_colon'          => 'Ebeveyn Film Yıl:',
		'new_item_name'              => 'Yeni Film Yıl Adı',
		'add_new_item'               => 'Yeni Film Yıl Ekle',
		'edit_item'                  => 'Film Yıl Düzenle',
		'update_item'                => 'Film Yıl Güncelle',
		'view_item'                  => 'Öğeyi Görüntüle',
		'separate_items_with_commas' => 'Virgülle ayrı film yıl',
		'add_or_remove_items'        => 'Film yıl ekle veya kaldır',
		'choose_from_most_used'      => 'En çok kullanılan film yıllarından birini seçin',
		'popular_items'              => 'Popüler öğeler',
		'search_items'               => 'Film yılları arama',
		'not_found'                  => 'Bulunamadı',
		'no_terms'                   => 'Öğe yok',
		'items_list'                 => 'Öğe listesi',
		'items_list_navigation'      => 'Öğeler listesi navigasyon',
	);
	$args = array(
		'labels'                     => $labels,
		'hierarchical'               => false,
		'public'                     => true,
		'show_ui'                    => true,
		'show_admin_column'          => true,
		'show_in_nav_menus'          => true,
		'show_tagcloud'              => true,
	);
	register_taxonomy( 'film-yil', array( 'post' ), $args );

}
add_action( 'init', 'film_yil_taxonomy', 0 );

}

if ( ! function_exists( 'film_imdb_taxonomy' ) ) {

// Register Custom Taxonomy
function film_imdb_taxonomy() {

	$labels = array(
		'name'                       => 'Film İMDB',
		'singular_name'              => 'Film İMDB',
		'menu_name'                  => 'Film İMDB',
		'all_items'                  => 'Tüm Film İMDB',
		'parent_item'                => 'Ebeveyn Film İMDB',
		'parent_item_colon'          => 'Ebeveyn Film İMDB:',
		'new_item_name'              => 'Yeni Film İMDB Adı',
		'add_new_item'               => 'Yeni Film İMDB Ekle',
		'edit_item'                  => 'Film İMDB Düzenle',
		'update_item'                => 'Film İMDB Güncelle',
		'view_item'                  => 'Öğeyi Görüntüle',
		'separate_items_with_commas' => 'Virgülle ayrı film İMDB',
		'add_or_remove_items'        => 'Film İMDB ekle veya kaldır',
		'choose_from_most_used'      => 'En çok kullanılan film İMDBlerinden birini seçin',
		'popular_items'              => 'Popüler öğeler',
		'search_items'               => 'Film İMDB arama',
		'not_found'                  => 'Bulunamadı',
		'no_terms'                   => 'Öğe yok',
		'items_list'                 => 'Öğe listesi',
		'items_list_navigation'      => 'Öğeler listesi navigasyon',
	);
	$args = array(
		'labels'                     => $labels,
		'hierarchical'               => false,
		'public'                     => true,
		'show_ui'                    => true,
		'show_admin_column'          => true,
		'show_in_nav_menus'          => true,
		'show_tagcloud'              => true,
		'rewrite'                    => false,
	);
	register_taxonomy( 'film-imdb', array( 'post' ), $args );

}
add_action( 'init', 'film_imdb_taxonomy', 0 );

}

if ( ! function_exists( 'film_yonetmen_taxonomy' ) ) {

// Register Custom Taxonomy
function film_yonetmen_taxonomy() {

	$labels = array(
		'name'                       => 'Film Yönetmen',
		'singular_name'              => 'Film Yönetmen',
		'menu_name'                  => 'Film Yönetmen',
		'all_items'                  => 'Tüm Film Yönetmen',
		'parent_item'                => 'Ebeveyn Film Yönetmen',
		'parent_item_colon'          => 'Ebeveyn Film Yönetmen:',
		'new_item_name'              => 'Yeni Film Yönetmen Adı',
		'add_new_item'               => 'Yeni Film Yönetmen Ekle',
		'edit_item'                  => 'Film Yönetmen Düzenle',
		'update_item'                => 'Film Yönetmen Güncelle',
		'view_item'                  => 'Öğeyi Görüntüle',
		'separate_items_with_commas' => 'Virgülle ayrı film Yönetmen',
		'add_or_remove_items'        => 'Film Yönetmen ekle veya kaldır',
		'choose_from_most_used'      => 'En çok kullanılan film Yönetmenlerinden birini seçin',
		'popular_items'              => 'Popüler öğeler',
		'search_items'               => 'Film Yönetmen arama',
		'not_found'                  => 'Bulunamadı',
		'no_terms'                   => 'Öğe yok',
		'items_list'                 => 'Öğe listesi',
		'items_list_navigation'      => 'Öğeler listesi navigasyon',
	);
	$args = array(
		'labels'                     => $labels,
		'hierarchical'               => true,
		'public'                     => true,
		'show_ui'                    => true,
		'show_admin_column'          => true,
		'show_in_nav_menus'          => true,
		'show_tagcloud'              => true,
	);
	register_taxonomy( 'film-yonetmen', array( 'post' ), $args );

}
add_action( 'init', 'film_yonetmen_taxonomy', 0 );

}

if ( ! function_exists( 'film_oyuncular_taxonomy' ) ) {

// Register Custom Taxonomy
function film_oyuncular_taxonomy() {

	$labels = array(
		'name'                       => 'Film Oyuncular',
		'singular_name'              => 'Film Oyuncular',
		'menu_name'                  => 'Film Oyuncular',
		'all_items'                  => 'Tüm Film Oyuncular',
		'parent_item'                => 'Ebeveyn Film Oyuncular',
		'parent_item_colon'          => 'Ebeveyn Film Oyuncular:',
		'new_item_name'              => 'Yeni Film Oyuncular Adı',
		'add_new_item'               => 'Yeni Film Oyuncular Ekle',
		'edit_item'                  => 'Film Oyuncular Düzenle',
		'update_item'                => 'Film Oyuncular Güncelle',
		'view_item'                  => 'Öğeyi Görüntüle',
		'separate_items_with_commas' => 'Virgülle ayrı film Oyuncular',
		'add_or_remove_items'        => 'Film Oyuncular ekle veya kaldır',
		'choose_from_most_used'      => 'En çok kullanılan film Oyuncularınden birini seçin',
		'popular_items'              => 'Popüler öğeler',
		'search_items'               => 'Film Oyuncular arama',
		'not_found'                  => 'Bulunamadı',
		'no_terms'                   => 'Öğe yok',
		'items_list'                 => 'Öğe listesi',
		'items_list_navigation'      => 'Öğeler listesi navigasyon',
	);
	$args = array(
		'labels'                     => $labels,
		'hierarchical'               => false,
		'public'                     => true,
		'show_ui'                    => true,
		'show_admin_column'          => true,
		'show_in_nav_menus'          => true,
		'show_tagcloud'              => true,
	);
	register_taxonomy( 'film-oyuncular', array( 'post' ), $args );

}
add_action( 'init', 'film_oyuncular_taxonomy', 0 );

}

if ( ! function_exists( 'film_size_taxonomy' ) ) {

// Register Custom Taxonomy
function film_size_taxonomy() {

	$labels = array(
		'name'                       => 'Film Çözünürlük',
		'singular_name'              => 'Film Çözünürlük',
		'menu_name'                  => 'Film Çözünürlük',
		'all_items'                  => 'Tüm Film Çözünürlük',
		'parent_item'                => 'Ebeveyn Film Çözünürlük',
		'parent_item_colon'          => 'Ebeveyn Film Çözünürlük:',
		'new_item_name'              => 'Yeni Film Çözünürlük Adı',
		'add_new_item'               => 'Yeni Film Çözünürlük Ekle',
		'edit_item'                  => 'Film Çözünürlük Düzenle',
		'update_item'                => 'Film Çözünürlük Güncelle',
		'view_item'                  => 'Öğeyi Görüntüle',
		'separate_items_with_commas' => 'Virgülle ayrı film Çözünürlük',
		'add_or_remove_items'        => 'Film Çözünürlük ekle veya kaldır',
		'choose_from_most_used'      => 'En çok kullanılan film Çözünürlükden birini seçin',
		'popular_items'              => 'Popüler öğeler',
		'search_items'               => 'Film Çözünürlük arama',
		'not_found'                  => 'Bulunamadı',
		'no_terms'                   => 'Öğe yok',
		'items_list'                 => 'Öğe listesi',
		'items_list_navigation'      => 'Öğeler listesi navigasyon',
	);
	$args = array(
		'labels'                     => $labels,
		'hierarchical'               => true,
		'public'                     => true,
		'show_ui'                    => true,
		'show_admin_column'          => true,
		'show_in_nav_menus'          => true,
		'show_tagcloud'              => true,
	);
	register_taxonomy( 'film-size', array( 'post' ), $args );

}
add_action( 'init', 'film_size_taxonomy', 0 );

}

?>