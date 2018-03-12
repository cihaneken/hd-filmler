<?php /* Template Name: category-search.php */ ?>
<?php get_header(); ?>
<div class="col-sm-9">
<div class="row">
<form  method="post" action="<?php bloginfo('url');?>/listing-search-results/"> 
<?php  
$object = 'post';
$taxonomies = get_object_taxonomies( $object );
    foreach($taxonomies as $tax){
        echo buildSelect($tax);
    }
?>
<input type="submit"/>  
</form>

</div>
</div><!-- .col-sm-9 -->
<div class="col-sm-3">
<?php get_sidebar(); ?>
</div><!-- .col-sm-3 -->
<?php get_footer(); ?>