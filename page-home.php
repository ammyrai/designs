<?php
/*
 * Template Name: Front Page
 * Template used for home page.
 */
?>
<?php get_header(); 
global $wpdb;
?>

	<section>
		<div class="content_section">
			<h4><span>WELCOME TO</span>INFORMED</h4>
			<p>get informed about the health related properties of the food you eat</p>
			<section id="all_category">
			<?php
			$results = $wpdb->get_results( "SELECT * FROM `wp_posts`" );
			//echo "<pre>"; print_r($results); echo "</pre>";
			?>
			<form role="search" method="get" class="search-form" action="<?php echo esc_url( $action ); ?>">
			<select name="category" class="inner_select_option">
				<option value=''>Select Category</option>
			    <?php foreach($results as $pro_category){ ?>
					<option value="<?php echo $pro_category->id; ?>"><?php echo $pro_category->category_name; ?></option>
			    <?php } ?>
			</select>
				<label>
					<span class="screen-reader-text"><?php esc_html_e( 'Search for:', 'listify' ); ?></span>
					<input type="search" class="search-field" placeholder="<?php esc_attr_e( 'Search', 'listify' ); ?>" value="" name="<?php echo esc_attr( $input_name ); ?>" title="<?php echo esc_attr_e( 'Search for:', 'listify' ); ?>" />
				</label>
					<button type="submit" class="search-submit">Search</button>
				</form>
			</section>
		</div>
	</section>
	<section class="feature-list">
		<h3>FEATURED LISTINGS</h3>
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
		<h3>Advertising</h3>
		<div class="main_honey">
			<div class="inner_image">
				<div class="honey-image">
					<img src="<?php echo get_stylesheet_directory_uri(); ?>/images/Honey.jpg"/>
				</div>
			<h4>Jif</h4>
		</div>
	</div>
	</section>
	<section>
		   <div class="listing">
				<div class="list_detail">
				<div class="tags">
					<i class="fa fa-tag" aria-hidden="true"></i>
				</div>
				<h4>12090</h4>
				<p>Listed Products</p>
			</div>
			<div class="list_detail">
				<div class="tags">
					<i class="fa fa-location-arrow" aria-hidden="true"></i>
				</div>
				<h4>350</h4>
				<p>Locations</p>
			</div>
			<div class="list_detail">
				<div class="tags">
					<i class="fa fa-user-o" aria-hidden="true"></i>
				</div>
				<h4>23453</h4>
				<p>Regular Members</p>
			</div>
			<div class="list_detail">
				<div class="tags">
					<i class="fa fa-address-card-o" aria-hidden="true"></i>
				</div>
			 <h4>150</h4>
			 <p>Product Ads</p>
			</div>
		</div>
	</section>
	<!-- <section>
		<div class="footer">
			<div class="footer_list">
				<h4>About Us</h4>
				<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
			</div>
			<div class="footer_list">
				<h4>Useful Links</h4>
				<ul class="nav_footer">
					<li>Home</li>
					<li>FAQ</li>
					<li>About</li>
					<li>Terms and Conditions</li>
				</ul>
				<ul class="nav_footer">
					<li>Categories</li>
					<li>Pricing Plans</li>
					<li>Contact</li>
					<li>Privacy Policy</li>
				</ul>
			</div>
			<div class="footer_list">
				<h4>Latest News</h4>
				<p>Healthy food<a href="">https://smartingredientinfo.com/</a></p>
				<p>Introducing new super healthy food<a href="">https://smartingredientinfo.com/</a></p>
			</div>
			<div class="footer_list">
				<h4>Random Ads</h4>
				<li><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/Honey.jpg"/></li>
				<li><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/Honey.jpg"/></li>
				<li><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/Honey.jpg"/></li>
				<li><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/Honey.jpg"/></li>
				<li><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/Honey.jpg"/></li>
				<li><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/Honey.jpg"/></li>
			</div>
		</div>
	</section> -->
	<section id="content" style="width: 100%;">
		<div id="post-home" class="page type-page status-publish hentry pmpro-has-access">
			<div class="post-content">
				<ul class="product-display">
				<?php
					$wpdb->flush();
			        $result = $wpdb->get_results( "SELECT * FROM wp_products limit 6" );
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

<?php $src = wp_get_attachment_image_src( get_post_thumbnail_id(11938), 'full' ); ?>

	<!--<form role="search" method="get" action="<?php //echo esc_url( home_url( '/' ) ); ?>">
		<select name="category">
        <!-- Insert here all option tags you want, with category slug as value -->
        <!--<option value="All Categories">All Categories</option>
    	<option value="***cat_slug***">Cat. name</option>
    	<option value="***cat_slug***">Cat. name</option>
    </select>
    <!-- With this hidden input you can define a specific post type. -->
    <!--<input type="hidden" name="post_type" value="your_post_type" />
    <input name="s" type="text" class="s_class"/>
    
    <button type="submit">Search</button>
</form>-->
<style type="text/css">
	/*.logo {
	    padding: 30px 60px;
	}
	.logo a {
    	color: #000;
	}
	#all_category {
	    display: inline-block;
	}
	#content {
	    width: 71.1702128%;
	    float: left;
	    min-height: 1px;
	    margin-bottom: 100px;
	}
	.fusion-main-menu > ul > li > a {
	    color: #000;
	}
	#main {
    padding-top: 0px;
    padding-bottom: 0px;
    background: #fff;
}*/
.content_section {
   	width: 100%;
   	background-image: url(<?php echo $src[0]; ?>);
    background-size: 100%;
    min-height: 450px;
    margin: 0 !important;
    padding: 0 !important;
}
#main .fusion-row, #slidingbar-area .fusion-row, .fusion-footer-copyright-area .fusion-row, .fusion-footer-widget-area .fusion-row, .fusion-page-title-row, .tfs-slider .slide-content-container .slide-content {
    max-width: 100% !important;
}
.fusion-row {
    width: 100% !important;
    margin: 0;
    padding: 0;
}
#main {
    margin: 0;
    width: 100% !important;
    padding: 0 !important;
}
.fusion-page-title-bar {
    display: none;
}
.content_section h4 {
    text-align: center;
    color: #0ade0a;
    font-size: 40px;
    font-weight: 100;
    font-family: sans-serif;
    text-transform: capitalize;
    margin: 0;
    padding-top: 135px;
    letter-spacing: 2px !important;
}
.content_section p {
   	text-align: center;
    color: #fff;
    line-height: 8px;
    letter-spacing: 1px;
    font-family: sans-serif;
    text-transform: capitalize;
}
.content_section h4 span {
    color: #fff;
    letter-spacing: 1px;
    padding: 0 14px;
}
#all_category {
    text-align: center;
    width: 100%;
    margin: 60px auto;
    padding: 18px 30px;
    background-color: rgba(255, 255, 255, 0.5);
    max-width: 850px;
}
.inner_select_option {
    float: left;
    height: 40px;
    width: calc(100% / 3 - 20px);
}
.search-submit {
    width: calc(100% / 3 - 20px);
    height: 40px;
    float: right;
    padding: 9px 10px;
    background: #69e03a;
    color: #fff;
    border: 1px solid #69e13a;
    border-radius: 8px;
}
.search-field {
     height: 40px;
    width: calc(100% / 3 - 20px);
    -webkit-appearance: none;
    border: none;
    padding: 0 10px;
    border-radius: 4px;
}
.main_honey {
    display: flex;
    margin: 0 120px;
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
h3 {
    text-align: left;
    margin: 11px 130px;
    letter-spacing: 2px;
    font-size: 20px;
    font-weight: normal;
}
.listing {
	width: 100%;
    background-image: url(https://smartingredientinfo.com/wp-content/themes/Avada-Child/images/laptop.jpeg);
    background-size: 100%;
    min-height: 390px;
    margin: 0px !important;
    padding: 0 !important;
    display: flex;
}
.tags {
    flex: 1;
    height: 80px;
    color: #fff;
}
.tags i {
    font-size: 45px;
    border: 3px solid #fff;
    padding: 20px;
    border-radius: 50%;
}
.feature-list {
	margin-bottom: 60px;
}
.list_detail {
    text-align: center;
    margin-top: 70px;
    width: calc(100% / 4 - 20px);
}
.list_detail h4 {
    font-size: 20px;
    color: #fff;
    margin: 0;
    padding-top: 24px;
    letter-spacing: 1px;
}
.list_detail p {
    font-size: 15px;
    color: #fff;
    line-height: 0px;
    letter-spacing: 1px;
}
.footer {
    background: #1b1a1a;
    margin: -17px 0;
    padding: 0;
    display: flex;
    
}
.footer_list {
    flex: 1;
    width: calc(100% / 4 - 20px);
    padding: 0px 35px;
}
.footer_list li {
    width: 90px;
    margin: 8px 2px;
    border: 1px solid #fff;
    display: inline-block;
    padding: 10px;
}
ul.nav_footer {
    margin: 0;
    padding: 0;
    width: 40%;
    display: inline-block;
    vertical-align: top;
}
ul.nav_footer li {
    border: none;
    margin: 0;
    color: #fff;
    padding: 3px;
}
.footer_list h4 {
    font-size: 25px;
    color: #fff;
    letter-spacing: 2px;
    text-transform: uppercase;
}
.footer_list p {
    font-size: 13px;
    color: #fff;
}
.footer_list a {
    color: #1675ad;
    padding: 0 5px;
}
</style>

<?php
get_footer();

/* Omit closing PHP tag to avoid "Headers already sent" issues. */
?>
