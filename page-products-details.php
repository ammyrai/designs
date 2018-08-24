<?php
/*
 * Template Name: Product Details
 * Template used for home page.
 */
?>
<?php get_header(); 
global $wpdb;
?>
<section>
	<div class="list_detail">
	<div class="product_list">
		<img src="<?php echo get_stylesheet_directory_uri(); ?>/images/Honey.jpg" class="product-image"/>
	</div>
	<div class="product_list">
		<div class="inner_list">
			<h3><i class="fa fa-bars" aria-hidden="true"></i>product detail</h3>
			<ul>
				<li><i class="fa fa-info" aria-hidden="true"></i></i><span>Jiff Natural Honey</span></li>
				<li><i class="fa fa-cutlery" aria-hidden="true"></i><span>Spread</span></li>
				<li><i class="fa fa-thumbs-up" aria-hidden="true"></i><span>1200 likes</span><span class="btn"><i class="fa fa-thumbs-up" aria-hidden="true"></i>likes</span></li>
				<li>
					<i class="fas fa-star"></i>
					<i class="fas fa-star"></i>
					<i class="fas fa-star"></i>
					<i class="fas fa-star"></i>
					<i class="fas fa-star"></i>
				</li>
			</ul>
		</div>
	</div>
	<div class="product_list">
		<div class="inner_list">
			<h3><i class="fa fa-bars" aria-hidden="true"></i>product detail</h3>
			<ul>
				<li><i class="fa fa-info" aria-hidden="true"></i></i><span>Jiff</span></li>
				<li><i class="fa fa-cutlery" aria-hidden="true"></i><span>23 Main St.Colarado,USA</span></li>
				<li><i class="fa fa-phone" aria-hidden="true"></i></i><span>+1234233443334</span></li>
				<li><i class="fa fa-globe" aria-hidden="true"></i><span>www.jiff.com</span></li>
				<li><i class="fa fa-envelope" aria-hidden="true"></i><span>jiff@.jiff.com</span></li>
				

			</ul>
		</div>
	</div>
</div>
</section>
<section>
	<div class="tab">
	  <button class="tablinks" onclick="openCity(event, 'London')">
	  	<i class="fa fa-list" aria-hidden="true"></i></br>
	  Health Attributs</button>
	  <button class="tablinks" onclick="openCity(event, 'Paris')"><i class="fa fa-exclamation-triangle" aria-hidden="true"></i></br>Allergies</button>
	  <button class="tablinks" onclick="openCity(event, 'Tokyo')"><i class="fa fa-plus-circle" aria-hidden="true"></i></br>Ingredients & Claims</button>
	  <button class="tablinks" onclick="openCity(event, 'Tokyo')"><i class="fa fa-certificate" aria-hidden="true"></i></br>Certificates</button>
	   <button class="tablinks" onclick="openCity(event, 'Paris')"><i class="fa fa-info" aria-hidden="true"></i></br>Other Info</button>
  
</div>

<div id="London" class="tabcontent">
  <h3>London</h3>
  <p>London is the capital city of England.</p>
</div>

<div id="Paris" class="tabcontent">
  <h3>Paris</h3>
  <p>Paris is the capital of France.</p> 
</div>

<div id="Tokyo" class="tabcontent">
  <h3>Tokyo</h3>
  <p>Tokyo is the capital of Japan.</p>
</div>
</section>
<style type="text/css">
	.fusion-page-title-bar{
		display: none;
	}
	.tab {
	    overflow: hidden;
	    margin-top: 40px;
	}

/* Style the buttons inside the tab */
	.tab button {
	    background-color: #f4f4f4;
	    color: #74777b;
	    float: left;
	    border: none;
	    outline: none;
	    margin: 5px;
	    cursor: pointer;
	    padding: 14px 43px;
	    transition: 0.3s;
	    font-size: 20px;
	    border-bottom: none;
	}

/* Change background color of buttons on hover */
.tab button:hover {
   	background-color: #fff;
    color: #5bc58d;
    border-top: 3px solid;
}

/* Create an active/current tablink class */
.tab button.active {
    background-color: #fff;
    color: #5bc58d;
    border-top: 3px solid;
}

/* Style the tab content */
.tabcontent {
    display: none;
   	padding: 6px 12px;
    border-top: none;
    background: #e7ecea;
    margin-top:-5px;
}
.tabcontent p {
    border-top: 1px solid #e1e3e2;
    padding-top: 16px;
}
.product_list {
    flex: 1;
    width: calc(100% / 3 - 20px);
}
.list_detail {
    display: flex;
}
.inner_list {
    border: 2px solid #f9f9f9;
    margin: 0 20px;
}
.inner_list ul {
    padding: 0;
    margin: 0;
}
.inner_list ul li {
    list-style: none;
    border-bottom: 2px solid #f9f9f9;
    margin: 10px 30px;
    padding: 10px 0px;
}
.inner_list ul li:last-child {
    border-bottom: none;
}
i.fa.fa-bars {
    padding: 0 10px;
    cursor: pointer;
}
.product_list img {
    width: 280px;
    height: 280px;
}
.inner_list span {
    font-size: 15px;
    padding: 0 20px;
}
.inner_list h3 {
    font-size: 18px;
    text-transform: uppercase;
    margin: 24px;
    border-bottom: 2px solid #f9f9f9;
    padding-bottom: 10px;
}
span.btn {
    float: right;
    background: #3379b7;
    border-radius: 7px;
    color: #fff;
    margin: -6px 14px;
    padding: 7px 15px 7px 10px;
    cursor: pointer;
}
i.fa.fa-phone {
    transform: rotate(90deg);
}
.btn i {
    color: #fff;
    padding: 0 5px;
}
.tab button i {
    font-size: 30px;
    padding: 10px 0px;
}
</style>
<script>
function openCity(evt, cityName) {
    var i, tabcontent, tablinks;
    tabcontent = document.getElementsByClassName("tabcontent");
    for (i = 0; i < tabcontent.length; i++) {
        tabcontent[i].style.display = "none";
    }
    tablinks = document.getElementsByClassName("tablinks");
    for (i = 0; i < tablinks.length; i++) {
        tablinks[i].className = tablinks[i].className.replace(" active", "");
    }
    document.getElementById(cityName).style.display = "block";
    evt.currentTarget.className += " active";
}
</script>
<?php
get_footer();

/* Omit closing PHP tag to avoid "Headers already sent" issues. */
?>