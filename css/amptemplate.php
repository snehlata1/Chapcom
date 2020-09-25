<?php 
/*
* Template Name: Amp template
*/
?>
<!doctype html>
<html amp lang="en-US">
<head>
	<meta charset="utf-8">
<script async src="https://cdn.ampproject.org/v0.js"></script>
  <!-- ## Setup -->
  <!-- Import the carousel component in the header. -->
  <script async custom-element="amp-carousel" src="https://cdn.ampproject.org/v0/amp-carousel-0.1.js"></script>
  <script async custom-element="amp-sidebar" src="https://cdn.ampproject.org/v0/amp-sidebar-0.1.js"></script>
  <script async custom-element="amp-lightbox" src="https://cdn.ampproject.org/v0/amp-lightbox-0.1.js"></script>
<style>
body{margin:0}
body a{color:#ad0b15}
amp-carousel{height:270px}
header{background:#fff;position:fixed;width:100%;z-index:99;height:50px;box-shadow:0 0 32px rgba(0,0,0,.15)}
.headerlogo{margin:0 auto;width:80%;text-align:center}
amp-sidebar{background:#131313;width:280px}
.featured_title{position:absolute;z-index:110;bottom:0}
.featured_time{font-size:12px;color:#fff;opacity:.8;padding-left:20px}
.amp-logo .amp-img{margin:0 auto;position:relative;top:10px;margin-top:5px;max-width:230px;width:230px;height:auto}
.amp-featured-wrapper{background:#333;padding-top:50px;}
.amp-featured-area{margin:0 auto;max-width:450px;max-height:270px}
.hamburger{padding-left:20px;height:50px;width:49px;position:relative;display:block;float:left;padding-right:15px;text-align:center;padding-top:5px;font-size:23px}
.sidebar ul{padding:0;margin:0}
.sidebar li{list-style:none;margin-bottom:0;position:relative;display:block}
.sidebar li a{padding:10px 15px 10px 20px;display:inline-block;font-size:14px;color:#eee;width:100%}
.contentinner{max-width:1000px;margin:0 auto}
.clear{display:block;clear:both}
.maincontent{margin-top:52px}
.postwrap{font-size:18px;line-height:29px;color:#111;position:relative;border-bottom:1px solid #ededed;padding:25px 15px;height:225px}
.home-post_image img{object-fit:cover;width:100%}
.home-post_image{float:left;width:33%;padding-right:2%;overflow:hidden;max-height:225px}
#pagination .next{margin:0 6% 10px}
#pagination .next a{opacity:.9;background:#ad0b15;width:100%;color:#fff;display:inline-block;text-align:center;font-size:16px;line-height:1;padding:18px 0;border-radius:4px}
#pagination .prev{margin:0 6% 10px}
#pagination .prev a{opacity:.9;background:#ad0b15;width:100%;color:#fff;display:inline-block;text-align:center;font-size:16px;line-height:1;padding:18px 0;border-radius:4px}
.categorylist{display:inline;background:#f6f6f6;color:#9e9e9e;border-radius:50px;padding:8px 18px;font-size:12px;margin-right:8px;position:relative}
.categorylist a{color:#9e9e9e}
.featured_timelist{color:#b3b3b3;padding-left:0;font-size:12px;opacity:.8}
.footer{background:#151515;color:#eee;font-size:13px;text-align:center;letter-spacing:.2px;padding:35px 0;margin-top:30px}
.footer_menu ul{list-style-type:none;padding:0;text-align:center;margin:0 20px 25px;line-height:27px;font-size:13px}
.footer_menu ul li:first-child{margin-left:0}
.footer_menu ul li{display:inline;margin:0 10px}
.footer a{color:#fff}
a{text-decoration:none}
h2{font-weight:700;font-size:20px;margin-bottom:7px;line-height:1.3}
h2 a{color:#000}
.pexcerpt{color:grey;line-height:1.5;font-size:14px;word-wrap:break-word;margin:8px 0 10px}
footer .so_i{margin:0 20px 25px;border-bottom:1px solid #3c3c3c;padding-bottom:25px;font-size:15px;display:inline-block}
.so_i ul{list-style-type:none;padding:0;margin:0;text-align:center}
.so_i li{box-sizing:initial;display:inline-block;margin:5px}
.navigation_heading{padding:20px 20px 15px;color:#aaa;font-size:10px;text-transform:uppercase;letter-spacing:1px;border-bottom:1px solid #555;display:inline-block;width:85%}
.navigation_heading span{font-size:12px;color:#aaa;float:right;font-weight:700}
.headersi{margin-top:25px;border-top:1px solid #555;padding:25px 0;color:#fff;width:100%}
.crtitle{font-size: 30px;margin: 0;font-weight: normal;line-height: 38px;color: #fff;	padding: 10px 20px 20px 20px;}
[class^="feather-"]{font-family:feather!important;font-style:normal;font-weight:400;font-variant:normal;text-transform:none;line-height:1}
.feather-search::before{content:"\e9c8"}
.header-search-wrapper .search-btn i{display:block;line-height:inherit}
.search-toggle .toggle-icon, .search-toggle svg {	height: 16px;	width:34px;}
.search-toggle{ float:right; background:none; border:none;}
.lightbox {
      background: rgba(0,0,0,0.8);
      width: 100%;
      height: 100%;
      position: absolute;
      display: flex;
      align-items: center;
      justify-content: center;
    }
    .lightbox h1 {
      color: white;
    }
    .searchform input {
	background: transparent;
	border: 1px solid #666;
	color: #f7f7f7;
	font-size: 14px;
	font-weight: 400;
	line-height: 1;
	letter-spacing: .3px;
	text-transform: capitalize;
	padding: 20px 0px 20px 30px;
	margin-top: 15px;
	width: 100%;
}
.closebutton {
	background: transparent;
	border: 0;
	border: 1px solid rgba(255,255,255,.7);
	color: rgba(255,255,255,.7);
	border-radius: 30px;
	width: 32px;
	height: 32px;
	font-size: 12px;
	text-align: center;
	position: absolute;
	top: 12px;
	right: 20px;
	outline: none;
}
.hide
{
  display:none;
}
.searchform label {
	color: #f7f7f7;
	font-size: 10px;
	letter-spacing: .3px;
	line-height: 0;
	opacity: .6;
}
#searchsubmit {
	opacity: 0;
}
/************22-09-2020*************/
.amp-featured-area i-amphtml-sizer::after {
	z-index: 9;
	bottom: 0;
	content: "";
	display: block;
	height: 100%;
	position: absolute;
	width: 100%;
	background: -o-linear-gradient(rgba(0,0,0,0),#000 75%) repeat scroll 0 0 rgba(0,0,0,0);
	background: linear-gradient(rgba(0,0,0,0),#000 75%) repeat scroll 0 0 rgba(0,0,0,0);
}
</style>
</head>
<body>
  <header class="headerbar">
  <div role="button" on="tap:sidebar1.toggle" tabindex="0" class="hamburger">☰</div>
  <div class="site-name headerlogo amp-logo">
     <a href="<?php echo get_site_url() ; ?>" rel="home">                    
        <img  class="amp-img" src="https://i0.wp.com/www.blogformen.com/wp-content/uploads/2020/08/Logo-x-1536x114-1.png?fit=1536%2C114&amp;ssl=1" class="main-img-logo jetpack-lazy-image jetpack-lazy-image--handled" alt="" loading="lazy" srcset="https://i0.wp.com/www.blogformen.com/wp-content/uploads/2020/08/Logo-x-1536x114-1.png?w=1536&amp;ssl=1 1536w, https://i0.wp.com/www.blogformen.com/wp-content/uploads/2020/08/Logo-x-1536x114-1.png?resize=300%2C22&amp;ssl=1 300w, https://i0.wp.com/www.blogformen.com/wp-content/uploads/2020/08/Logo-x-1536x114-1.png?resize=1024%2C76&amp;ssl=1 1024w, https://i0.wp.com/www.blogformen.com/wp-content/uploads/2020/08/Logo-x-1536x114-1.png?resize=768%2C57&amp;ssl=1 768w, https://i0.wp.com/www.blogformen.com/wp-content/uploads/2020/08/Logo-x-1536x114-1.png?resize=480%2C36&amp;ssl=1 480w" data-lazy-loaded="1" sizes="(max-width: 1536px) 100vw, 1536px" width="1536" height="114">                    
     </a>  
  </div>
  <div class="toggle-wrapper search-toggle-wrapper">

<button on="tap:my-lightbox" class="toggle search-toggle desktop-search-toggle" data-toggle-target=".search-modal" data-toggle-body-class="showing-search-modal" data-set-focus=".search-modal .search-field" aria-expanded="false">
  <span class="toggle-inner">
    <svg class="svg-icon" aria-hidden="true" role="img" focusable="false" xmlns="http://www.w3.org/2000/svg" width="23" height="23" viewBox="0 0 23 23"><path d="M38.710696,48.0601792 L43,52.3494831 L41.3494831,54 L37.0601792,49.710696 C35.2632422,51.1481185 32.9839107,52.0076499 30.5038249,52.0076499 C24.7027226,52.0076499 20,47.3049272 20,41.5038249 C20,35.7027226 24.7027226,31 30.5038249,31 C36.3049272,31 41.0076499,35.7027226 41.0076499,41.5038249 C41.0076499,43.9839107 40.1481185,46.2632422 38.710696,48.0601792 Z M36.3875844,47.1716785 C37.8030221,45.7026647 38.6734666,43.7048964 38.6734666,41.5038249 C38.6734666,36.9918565 35.0157934,33.3341833 30.5038249,33.3341833 C25.9918565,33.3341833 22.3341833,36.9918565 22.3341833,41.5038249 C22.3341833,46.0157934 25.9918565,49.6734666 30.5038249,49.6734666 C32.7048964,49.6734666 34.7026647,48.8030221 36.1716785,47.3875844 C36.2023931,47.347638 36.2360451,47.3092237 36.2726343,47.2726343 C36.3092237,47.2360451 36.347638,47.2023931 36.3875844,47.1716785 Z" transform="translate(-20 -31)"></path></svg>
  </span>
</button><!-- .search-toggle -->

</div>
</header>

<amp-sidebar id="sidebar1" layout="nodisplay" side="left">
  <div role="button" aria-label="close sidebar" on="tap:sidebar1.toggle" tabindex="0" class="close-sidebar"><div class="navigation_heading">Navigate<span>✕</sapn></div></div>
  <div class="sidebar">
  <?php wp_nav_menu(array('menu' => 'ampmenu')); ?>
  </div>
  <div class="so_i headersi"> <ul> <li class="icon-twitter"><a title="twitter profile" href="https://twitter.com/blog_formen" target="_blank"><img src="<?php echo get_stylesheet_directory_uri(); ?>/siimg/Twitter.png"/></a></li>
   <li class="icon-facebook"><a title="facebook profile" href="https://www.facebook.com/blogformenfashion" target="_blank"><img src="<?php echo get_stylesheet_directory_uri(); ?>/siimg/Facebook.png"/></a>
   </li> <li class="icon-pinterest"><a title="pinterest profile" href="https://www.pinterest.com/blogformenfashion/" target="_blank"><img src="<?php echo get_stylesheet_directory_uri(); ?>/siimg/Pinterest.png"/></a></li> 
   <li class="icon-instagram"><a title="instagram profile" href="https://www.instagram.com/blog.formen/" target="_blank"><img src="<?php echo get_stylesheet_directory_uri(); ?>/siimg/Instagram.png"/></a> </li> </ul> </div>
</amp-sidebar>

<div class="amp-featured-wrapper"> 
    <div class="amp-featured-area">
        <amp-carousel width="450"  height="300"  layout="responsive"  type="slides"  autoplay  delay="10000"  role="region"  aria-label="Carousel with autoplay">
           <?php
              $arg = array( 'post_type'  => 'post',  'posts_per_page'=>4);
               $the_query = new WP_Query( $arg );
               if ( $the_query->have_posts() ) {
                   while ( $the_query->have_posts() ) {
                     $the_query->the_post();
            ?>
            <?php  $featured_img_url1 = get_the_post_thumbnail_url($post->ID, 'full'); 
      ?> 
<a href="<?php the_permalink();?>">           <amp-img src="<?php echo $featured_img_url1; ?>"  width="450"  height="300"    layout="responsive" alt="and another sample image"></amp-img>
           <div class="featured_title"> 
               <div class="featured_time"> <?php $post_date1 = get_the_date( 'F j, Y' ); echo $post_date1; ?></div> 
               <h2 class="crtitle"><?php the_title(); ?></h2> 
            </div>
                   </a>
      <?php   }
         }

       wp_reset_postdata();

          ?>
              </amp-carousel>
        </div>
        </div>       
<div class="clear"></div>
<div class="maincontent">
     <div class="contentinner">
<?php
$paged = ( get_query_var( 'paged' ) ) ? absint( get_query_var( 'paged' ) ) : 1;

              $arg1 = array( 'post_type'  => 'post',  'posts_per_page'=>10, 'orderby'  => 'date', 'paged'  => $paged, 'post_status'=> 'publish');
               $the_query1 = new WP_Query( $arg1 );
               if ( $the_query1->have_posts() ) {
                   while ( $the_query1->have_posts() ) {
                     $the_query1->the_post();
                     $categories = get_the_category( $post->ID );
            ?>
            <?php  $featured_img_url11 = get_the_post_thumbnail_url($post->ID, 'full'); 
      ?> 
      <div class="postwrap">
             <div class="home-post_image">
             <a href="<?php the_permalink();?>">
               <img src="<?php echo $featured_img_url11; ?>">
            </a>
          </div>
            <div class="homepostconttent">
                 <div class="categorylist"><?php  $category_link = get_category_link( $categories[0] );?>
                 <a href='<?php echo  $category_link;?>'><?php echo  $categories[0]->name; ?></a></div>
                <h2> <a href="<?php the_permalink();?>"> <?php the_title(); ?></a></h2>
                <p class="pexcerpt"><?php echo wp_trim_words( get_the_content(), 15, '...' ); ?></p>
                <div class="featured_timelist"> <?php $post_date = get_the_date( 'F j, Y' ); echo $post_date;?></div>
            </div>

  </div>
      <?php   }?>
      <div id="pagination">
            <?php
          
            if ( get_next_posts_link( 'Next', $the_query1->max_num_pages ) ){ ?><div class="next"><?php   echo get_next_posts_link( 'Next &raquo;', $the_query1->max_num_pages );; ?></div><?php }?>
        	<?php if ( get_previous_posts_link() ){ ?><div class="prev"><?php echo get_previous_posts_link("&laquo; Previous"); ?></div><?php }?>
			<div class="clear"></div>
		</div>
      <?php 
         }

       wp_reset_postdata();

          ?>
</div>
        </div>

<footer class="footer_wrapper"> 
   <div class="footer">
   <div class="footer_menu"> <nav> <div class="menu-footer-container"><ul id="menu-footer" class="menu"><li id="menu-item-3304" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-3304"><a href="<?php echo get_site_url(); ?>/about/" itemprop="url"><span>About Blog For Men</span></a></li> <li id="menu-item-3302" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-3302"><a href="<?php echo get_site_url(); ?>/terms-of-use/" itemprop="url"><span>Terms of Use</span></a></li> <li id="menu-item-3305" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-privacy-policy menu-item-3305"><a href="<?php echo get_site_url(); ?>/privacy-policy/" itemprop="url"><span>Privacy Policy</span></a></li> <li id="menu-item-3303" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-3303"><a href="<?php echo get_site_url(); ?>/contact/" itemprop="url"><span>Contact</span></a></li> </ul></div> </nav> </div>
   <div class="so_i"> <ul> 
   <li class="icon-twitter"><a title="twitter profile" href="https://twitter.com/blog_formen" target="_blank"><img src="<?php echo get_stylesheet_directory_uri(); ?>/siimg/Twitter.png"/></a></li>
   <li class="icon-facebook"><a title="facebook profile" href="https://www.facebook.com/blogformenfashion" target="_blank"><img src="<?php echo get_stylesheet_directory_uri(); ?>/siimg/Facebook.png"/></a>
   </li> <li class="icon-pinterest"><a title="pinterest profile" href="https://www.pinterest.com/blogformenfashion/" target="_blank"><img src="<?php echo get_stylesheet_directory_uri(); ?>/siimg/Pinterest.png"/></a></li> 
   <li class="icon-instagram"><a title="instagram profile" href="https://www.instagram.com/blog.formen/" target="_blank"><img src="<?php echo get_stylesheet_directory_uri(); ?>/siimg/Instagram.png"/></a> </li>    </ul> </div>
   </div> 
</footer>
<amp-lightbox id="my-lightbox"
  layout="nodisplay">
  <div class="lightbox">
  <button  on="tap:my-lightbox.close"  role="button" tabindex="0"   class="closebutton">X</button>
    <div class="lginner">
    <form role="search" method="get" id="searchform" class="searchform i-amphtml-form" target="_top" action="<?php echo get_site_url() ; ?>" novalidate=""> <div> <label aria-label="Type your query" class="screen-reader-text" for="s">Type your search query and hit enter: </label> <input type="text" placeholder="AMP" value="1" name="amp" class="hide" id="ampforwp_search_query_item"> <input type="text" placeholder="Type Here" value="" name="s" id="s" class="user-valid valid"> <label aria-label="Submit amp search" for="amp-search-submit"> <input type="submit" id="searchsubmit" value="Search"> </label> </div> </form>  </div>
   </div>
</amp-lightbox>
        </body>
        </html>