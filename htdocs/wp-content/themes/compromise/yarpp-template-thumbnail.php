<?php /*
Example template for use with post thumbnails
Requires WordPress 2.9 and a theme which supports post thumbnails
Author: mitcho (Michael Yoshitaka Erlewine)
*/ ?>

<div style="text-align: center;">
<script type="text/javascript"><!--
google_ad_client = "pub-7874481570501015";
/* 468x60, создано 16.06.11 */
google_ad_slot = "9778435104";
google_ad_width = 468;
google_ad_height = 60;
//-->
</script>
<script type="text/javascript"
src="http://pagead2.googlesyndication.com/pagead/show_ads.js">
</script>
</div>

<?php if ($related_query->have_posts()):?>
<h3>Что еще почитать:</h3>
<ol class="related">
	<?php $i = 0; while ($related_query->have_posts()) : $related_query->the_post(); ?>
		<?php if (function_exists('has_post_thumbnail')): if (has_post_thumbnail()):?>
		<li <?php if ($i % 3 == 0) { echo 'style="clear: left;"'; } ?>><a href="<?php the_permalink() ?>" rel="bookmark" title="<?php the_title_attribute(); ?>"><?php the_post_thumbnail('thumbnail'); ?><br/><?php echo get_the_title(); ?></a></li>
		<?php endif; endif; ?>
	<?php $i++; endwhile; ?>
</ol>

<?php endif; ?>
