<?php get_header(); ?>
	<div id="banner">&nbsp;</div>

	<div id="content">

	<?php if (have_posts()) : ?>

		<?php while (have_posts()) : the_post(); ?>

			<div class="post" id="post-<?php the_ID(); ?>">
				<h2 class="title"><a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title_attribute(); ?>"><?php the_title(); ?></a></h2>
				<div class="entry">
					<?php the_content('Читать далее &raquo;'); ?>
				</div>
				<p class="meta">Опубликовано <?php the_author() ?> <?php the_time('d.m.Y') ?> в категории <?php the_category(', ') ?><?php the_tags('Метки: ', ', ', ''); ?>&nbsp;&bull;&nbsp;<?php edit_post_link('Правка', '', '&nbsp;&bull;&nbsp;'); ?><?php comments_popup_link('Нет комментариев', '1 комментарий', '% комментариев'); ?></p>
			</div>

		<?php endwhile; ?>

		<div class="navigation">
			<div class="alignleft"><?php next_posts_link('&laquo; Старые записи') ?></div>
			<div class="alignright"><?php previous_posts_link('Новые записи &raquo;') ?></div>
		</div>

	<?php else : ?>

		<h2>Not Found</h2>
		<p>Sorry, but you are looking for something that isn't here.</p>

	<?php endif; ?>

	</div>
	<!-- end #content -->

<?php get_sidebar(); ?>

<?php get_footer(); ?>
