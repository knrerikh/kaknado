<div id="sidebar">
	<ul>
		<?php 	/* Widgetized sidebar, if you have the plugin installed. */
				if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar() ) : ?>

		<!-- Author information is disabled per default. Uncomment and fill in your details if you want to use it.
		<li><h2>Author</h2>
		<p>A little something about you, the author. Nothing lengthy, just an overview.</p>
		</li>
		-->

		<?php if ( is_404() || is_category() || is_day() || is_month() ||
					is_year() || is_search() || is_paged() ) {
		?> <li>

		<?php /* If this is a 404 page */ if (is_404()) { ?>
		<?php /* If this is a category archive */ } elseif (is_category()) { ?>
		<p>You are currently browsing the archives for the <?php single_cat_title(''); ?> category.</p>

		<?php /* If this is a yearly archive */ } elseif (is_day()) { ?>
		<p>You are currently browsing the <a href="<?php bloginfo('url'); ?>/"><?php echo bloginfo('name'); ?></a> blog archives
		for the day <?php the_time('l, F jS, Y'); ?>.</p>

		<?php /* If this is a monthly archive */ } elseif (is_month()) { ?>
		<p>You are currently browsing the <a href="<?php bloginfo('url'); ?>/"><?php echo bloginfo('name'); ?></a> blog archives
		for <?php the_time('F, Y'); ?>.</p>

		<?php /* If this is a yearly archive */ } elseif (is_year()) { ?>
		<p>You are currently browsing the <a href="<?php bloginfo('url'); ?>/"><?php echo bloginfo('name'); ?></a> blog archives
		for the year <?php the_time('Y'); ?>.</p>

		<?php /* If this is a monthly archive */ } elseif (is_search()) { ?>
		<p>You have searched the <a href="<?php echo bloginfo('url'); ?>/"><?php echo bloginfo('name'); ?></a> blog archives
		for <strong>'<?php the_search_query(); ?>'</strong>. If you are unable to find anything in these search results, you can try one of these links.</p>

		<?php /* If this is a monthly archive */ } elseif (isset($_GET['paged']) && !empty($_GET['paged'])) { ?>
		<p>You are currently browsing the <a href="<?php echo bloginfo('url'); ?>/"><?php echo bloginfo('name'); ?></a> blog archives.</p>

		<?php } ?>

		</li> <?php }?>

		<li><h2>Archives</h2>
			<ul>
			<?php wp_get_archives('type=monthly'); ?>
			</ul>
		</li>

		<?php wp_list_categories('show_count=1&title_li=<h2>Categories</h2>'); ?>

		<?php /* If this is the frontpage */ if ( is_home() || is_page() ) { ?>
			<?php wp_list_bookmarks(); ?>

			<li><h2>Meta</h2>
			<ul>
				<?php wp_register(); ?>
				<li><?php wp_loginout(); ?></li>
				<li><a href="http://validator.w3.org/check/referer" title="This page validates as XHTML 1.0 Transitional">Valid <abbr title="eXtensible HyperText Markup Language">XHTML</abbr></a></li>
				<li><a href="http://gmpg.org/xfn/"><abbr title="XHTML Friends Network">XFN</abbr></a></li>
				<li><a href="http://wordpress.org/" title="Powered by WordPress, state-of-the-art semantic personal publishing platform.">WordPress</a></li>
				<?php wp_meta(); ?>
			</ul>
			</li>
		<?php } ?>

		<?php endif; ?>
	</ul>

<script type="text/javascript"><!--
google_ad_client = "ca-pub-7874481570501015";
/* Графические и мультимедийные */
google_ad_slot = "9687520388";
google_ad_width = 200;
google_ad_height = 200;
//-->
</script>
<script type="text/javascript"
src="http://pagead2.googlesyndication.com/pagead/show_ads.js">
</script>


<script type="text/javascript"><!--
google_ad_client = "pub-7874481570501015";
/* 180x150, создано 15.03.11 */
google_ad_slot = "5789956964";
google_ad_width = 180;
google_ad_height = 150;
//-->
</script>
<script type="text/javascript"
src="http://pagead2.googlesyndication.com/pagead/show_ads.js">
</script>

<?php
$googleads = <<<EOT
<script type="text/javascript"><!--
google_ad_client = "pub-7874481570501015";
/* 180x150, создано 15.06.11 */
google_ad_slot = "5679275281";
google_ad_width = 180;
google_ad_height = 150;
//-->
</script>
<script type="text/javascript"
src="http://pagead2.googlesyndication.com/pagead/show_ads.js">
</script>

<script type="text/javascript"><!--
google_ad_client = "ca-pub-7874481570501015";
/* 200x200 */
google_ad_slot = "4614510554";
google_ad_width = 200;
google_ad_height = 200;
//-->
</script>
<script type="text/javascript"
src="http://pagead2.googlesyndication.com/pagead/show_ads.js">
</script>
EOT;
?>

</div>
<!-- end #sidebar -->