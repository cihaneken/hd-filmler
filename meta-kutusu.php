<?php
add_action( 'admin_menu', 'tj_create_meta_box' );
add_action( 'save_post', 'tj_save_meta_data' );
function tj_create_meta_box() {
	add_meta_box( 'post-meta-boxes', __('Film Bilgileri Paneli'), 'post_meta_boxes', 'post', 'normal', 'high' );
}
function tj_post_meta_boxes() {
	
	$meta_boxes = array(
		'partsistemi' => array( 'name' => 'partsistemi', 'title' => __('Part Sistemi:'), 'type' => 'select', 'options' => array('Otomatik', 'Manuel') ),
		'partbilgi' => array( 'name' => 'partbilgi', 'title' => __('Kalite:'), 'type' => 'select', 'options' => array('Yüksek Kalite', 'HD Kalite', 'Kota Dostu') ),
		'filmkonu' => array( 'name' => 'filmkonu', 'title' => __('Konu:'), 'type' => 'textarea'),
	);
	return apply_filters( 'tj_post_meta_boxes', $meta_boxes );
}

function post_meta_boxes() {
	global $post;
	$meta_boxes = tj_post_meta_boxes(); 
?>
	<table class="form-table">
	<?php foreach ( $meta_boxes as $meta ) :

		$value = get_post_meta( $post->ID, $meta['name'], true );

		if ( $meta['type'] == 'select' )
			get_meta_select( $meta, $value );
		elseif ( $meta['type'] == 'textarea' )
			get_meta_textarea( $meta, $value );

	endforeach; ?>
	</table>
<?php
}
function get_meta_select( $args = array(), $value = false ) {
	extract( $args ); ?>
	<tr>
		<th style="width:20%;">
			<label for="<?php echo $name; ?>"><?php echo $title; ?></label>
		</th>
		<td>
			<select style="width:372px;" name="<?php echo $name; ?>" id="<?php echo $name; ?>">
			<?php foreach ( $options as $option ) : ?>
				<option <?php if ( htmlentities( $value, ENT_QUOTES ) == $option ) echo ' selected="selected"'; ?>>
					<?php echo $option; ?>
				</option>
			<?php endforeach; ?>
			</select>
			<input type="hidden" name="<?php echo $name; ?>_noncename" id="<?php echo $name; ?>_noncename" value="<?php echo wp_create_nonce( plugin_basename( __FILE__ ) ); ?>" />
		</td>
	</tr>
	<?php
}
function get_meta_textarea( $args = array(), $value = false ) {
	extract( $args ); ?>
	<tr>
		<th style="width:20%;">
			<label for="<?php echo $name; ?>"><?php echo $title; ?></label>
		</th>
		<td>
			<textarea name="<?php echo $name; ?>" id="<?php echo $name; ?>" cols="60" rows="4" tabindex="30" style="width: 97%;margin-top:-3px;"><?php echo wp_specialchars( $value, 1 ); ?></textarea>
			<input type="hidden" name="<?php echo $name; ?>_noncename" id="<?php echo $name; ?>_noncename" value="<?php echo wp_create_nonce( plugin_basename( __FILE__ ) ); ?>" />
			<p class="description"><?php echo $desc; ?></p>
		</td>
	</tr>
	<?php
}
function tj_save_meta_data( $post_id ) {
	global $post;
	if ( 'page' == $_POST['post_type'] )
		$meta_boxes = array_merge( tj_post_meta_boxes() );
	else
		$meta_boxes = array_merge( tj_post_meta_boxes() );
	foreach ( $meta_boxes as $meta_box ) :
		if ( !wp_verify_nonce( $_POST[$meta_box['name'] . '_noncename'], plugin_basename( __FILE__ ) ) )
			return $post_id;
		if ( 'page' == $_POST['post_type'] && !current_user_can( 'edit_page', $post_id ) )
			return $post_id;
		elseif ( 'post' == $_POST['post_type'] && !current_user_can( 'edit_post', $post_id ) )
			return $post_id;
		$data = stripslashes( $_POST[$meta_box['name']] );
		if ( get_post_meta( $post_id, $meta_box['name'] ) == '' )
			add_post_meta( $post_id, $meta_box['name'], $data, true );
		elseif ( $data != get_post_meta( $post_id, $meta_box['name'], true ) )
			update_post_meta( $post_id, $meta_box['name'], $data );
		elseif ( $data == '' )
			delete_post_meta( $post_id, $meta_box['name'], get_post_meta( $post_id, $meta_box['name'], true ) );
	endforeach;
}
?>