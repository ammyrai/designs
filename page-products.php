<?php
/*
 * Template Name: Product Template
 * Template used for pages.
 *
 * @package Avada
 * @subpackage Templates
 */

// Do not allow directly accessing this file.
if ( ! defined( 'ABSPATH' ) ) {
	exit( 'Direct script access denied.' );
}
?>
<?php get_header(); ?>
<section class="feature-list">
		<h3>PRODUCTS</h3>
		<div class="main_honey">
			<div class="inner_image">
				<div class="honey-image">
					<img src="<?php echo get_stylesheet_directory_uri(); ?>/images/Honey.jpg"/>
				</div>
			<h4>Jif</h4>
		</div>
		<div class="inner_image">
			<div class="honey-image">
				<img src="<?php echo get_stylesheet_directory_uri(); ?>/images/Honey.jpg"/>
			</div>
			<h4>Jif Honey</h4>
		</div>
		<div class="inner_image">
			<div class="honey-image">
				<img src="<?php echo get_stylesheet_directory_uri(); ?>/images/Honey.jpg"/>
			</div>
			<h4>Natural Spread</h4>
		</div>
		<div class="inner_image">
			<div class="honey-image">
				<img src="<?php echo get_stylesheet_directory_uri(); ?>/images/Honey.jpg"/>
			</div>
			<h4>Jif</h4>
		</div>
		<div class="inner_image">
			<div class="honey-image">
				<img src="<?php echo get_stylesheet_directory_uri(); ?>/images/Honey.jpg"/>
			</div>
			<h4>Honey</h4>
		</div>
	</div>
	</section>
	<section class="feature-list">
		<div class="main_honey">
			<div class="inner_image">
				<div class="honey-image">
					<img src="<?php echo get_stylesheet_directory_uri(); ?>/images/Honey.jpg"/>
				</div>
			<h4>Jif</h4>
		</div>
		<div class="inner_image">
			<div class="honey-image">
				<img src="<?php echo get_stylesheet_directory_uri(); ?>/images/Honey.jpg"/>
			</div>
			<h4>Jif Honey</h4>
		</div>
		<div class="inner_image">
			<div class="honey-image">
				<img src="<?php echo get_stylesheet_directory_uri(); ?>/images/Honey.jpg"/>
			</div>
			<h4>Natural Spread</h4>
		</div>
		<div class="inner_image">
			<div class="honey-image">
				<img src="<?php echo get_stylesheet_directory_uri(); ?>/images/Honey.jpg"/>
			</div>
			<h4>Jif</h4>
		</div>
		<div class="inner_image">
			<div class="honey-image">
				<img src="<?php echo get_stylesheet_directory_uri(); ?>/images/Honey.jpg"/>
			</div>
			<h4>Honey</h4>
		</div>
	</div>
	</section>
<section id="content" style="width: 100%;">
	<div id="post-home" class="page type-page status-publish hentry pmpro-has-access">
		<div class="post-content">
			<ul class="product-display">
			<?php
		        global $wpdb;
		        $result = $wpdb->get_results( "SELECT * FROM wp_products" );
		        foreach ( $result as $product )   
		        { ?>
		        	
		        		<li class="product-list">
		        				<img src="<?php echo $product->product_image; ?>" class="product-image"/>
		        				<a href=""><h4><?php echo $product->product_name; ?></h4></a>
		        		</li>
		        <?php }
		      ?>
			</ul>
		</div>
	</div>
</section>
<style type="text/css">
	.fusion-page-title-bar {
		display: none;
	}
	.feature-list {
		margin-bottom: 60px;
	}
	.main_honey {
	    display: flex;  
	}
	.honey-image {
	    flex: 1;
	    border: 1px solid #ccc;
	    margin: 5px;
	    padding: 30px;
	}
	.inner_image h4 {
	    font-size: 12px;
	    text-align: center;
	}
</style>
<?php
get_footer();

/* Omit closing PHP tag to avoid "Headers already sent" issues. */
?>