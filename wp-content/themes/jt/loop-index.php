<?php if (have_posts()) : ?>
	<?php while (have_posts()) : the_post(); ?>

		<div class="post">
			<div class="header">
				<div class="title-wrapper">
					<a class="title" href="<?php the_permalink() ?>" rel="bookmark"><?php the_title(); ?></a>
					<?php if (!is_page()) : ?>
						<div><span class="date">posted on <?php the_date('F j, Y'); ?>, as <?php the_category(', ') ?></span></div>
					<?php endif; ?>
					<hr />
				</div>
				<div style="clear: both"></div>
				
			</div>

			<div class="content">
				<?php the_content('Read the rest of this entry &raquo;'); ?>
			</div>
		
			<div class="meta">
				<?php if ('closed' == $post->comment_status) : ?>
					<div class="comments closed">
			 	<?php else : ?>
					<div class="comments">
				<?php endif; ?>
				<?php comments_popup_link('leave a comment', '1 comment', '% comments', '', 'comments closed'); ?>
				</div>
			</div>
		</div>
	<?php endwhile; ?>

	<div class="pageNav">
		<div class="prev"><?php next_posts_link('&laquo; Older') ?></div>
		<div class="next"><?php previous_posts_link('Newer &raquo;') ?></div>
	</div>

<?php else : ?>

	<h2>Not Found</h2>
	<p>Sorry, but you are looking for something that isn't here.</p>

<?php endif; ?>