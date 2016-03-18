<?php
/**
 * The template for displaying all single posts.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package Benhurl
 */
get_header(); ?>

<div class="mina-blog-page">
    <div class="blog-h">
                    <?php
	$args = array(
			'delimiter' => '/',
	);
?>
<?php woocommerce_breadcrumb(); ?>
<?php 
$urlstra = substr($_SERVER["REQUEST_URI"], -5);
$urlstra = str_replace("/","",$urlstra); ?>
		<div class="mina-page-title"><h3><?php the_title(); ?></h3></div>
    </div>
<div class="col-xs-9">		
	<div id="primary" class="content-area">
<?php $paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
$posts = query_posts('posts_per_page=3&tag=' . $urlstra . '&paged=' . $paged); 
?>
<?php if ($posts) : ?>
<?php foreach ($posts as $post) : setup_postdata ($post); ?>
<?php echo '<div class="post">'; ?>

<?php the_post_thumbnail('medium'); ?>
<div class='text-p'>
                      <a href="<?php the_permalink() ?>" rel="bookmark"><h4><?php the_title(); ?></h4></a> 
<p>
<?php global $more; $more = FALSE; ?>
<?php the_excerpt('<span style="display:none;">&nbsp;</span>'); ?>
<?php $more = TRUE; ?>
</p>
            <div class="meta">
<span class="date"><?php echo get_the_date(); ?></span>
                <!-- <span class="more_but"><a href="<?php /* the_permalink() */ ?>" rel="bookmark" class="more">more...</a></span> -->
				</div>
</div>
				<?php echo '</div>'; ?>
				<div style="clear: both;"></div>
<?php endforeach; 
wp_reset_postdata();
?>

<?php wp_pagenavi(); ?>

<?php endif; ?>
	</div><!-- #primary -->
</div>
				<div class="col-xs-2 archive">
<div id="sidebar">
<?php if ( is_active_sidebar( 'blog' ) ) { ?>
    <ul id="sidebar">
        <?php dynamic_sidebar( 'blog' ); ?>
    </ul>
<?php } ?>					
					    
    <div class="cleaner"></div>
</div>
				    
				</div>
</div>
<script>
(function($){
$( ".mina-blog-page #woocommerce_product_search-3 input[type='search']" ).attr( "placeholder", 'חפש מוצר או מק"ט' ); 
$( ".mina-blog-page #recent-posts-3 ul>li:first-child>*:not(:first-child)" ).wrapAll( "<div class='rec-p-blog'></div>" );
$( ".mina-blog-page #recent-posts-3 ul>li:last-child>*:not(:first-child)" ).wrapAll( "<div class='rec-p-blog'></div>" );
$( ".comment-form .comment-form-url" ).insertAfter( $( ".comment-form .comment-notes" ) );
$( ".comment-form .comment-form-email" ).insertAfter( $( ".comment-form .comment-notes" ) );
$( ".comment-form .comment-form-author" ).insertAfter( $( ".comment-form .comment-notes" ) );
$( ".comment-form input#author" ).attr("placeholder", "שם *");
$( ".comment-form input#email" ).attr("placeholder", "אימייל *");
$( ".comment-form input#url" ).attr("placeholder", "אתר");
$( ".comment-form textarea" ).attr("placeholder", "התגובה שלך");
})(jQuery)
</script>
<?php get_footer(); ?>
