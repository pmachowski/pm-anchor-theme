<?php theme_include('header'); ?>

<section id="mesh" class="container">
	<div id="output" class="container"></div>
</section>

<section class="content">

	<?php if(has_posts()): ?>
		<ul class="items">
			<?php while(posts()): ?>
			<li>
				<article class="wrap">
					<h1>
						<a href="<?php echo article_url(); ?>" title="<?php echo article_title(); ?>"><?php echo article_title(); ?></a>
					</h1>

					<div class="content">
						<?php echo article_description(); ?>
					</div>

					<a class="readmore" href="<?php echo article_url(); ?>" title="<?php echo article_title(); ?>">Read more...</a>
					<footer>
					<?php echo ceil(count_words(article_markdown())/120); ?> min read.
					</footer>
				</article>
			</li>
			<?php endwhile; ?>
		</ul>

		<?php if(has_pagination()): ?>
		<nav class="pagination">
			<div class="wrap">
				<?php echo posts_prev(); ?>
				<?php echo posts_next(); ?>
			</div>
		</nav>
		<?php endif; ?>

	<?php else: ?>
		<p>Looks like you have some writing to do!</p>
	<?php endif; ?>

</section>

<?php theme_include('footer'); ?>
