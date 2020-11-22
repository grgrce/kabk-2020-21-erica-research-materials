
<?php get_header();?>

<?php 
	$sources_query = new WP_Query([
		'post_type' => 'source',
		'post_per_page' => -1,
	]);
?>

<?php if ($sources_query->have_posts()): ?>
	<div class="sources">
		<?php while($sources_query->have_posts()): $sources_query->the_post(); ?>
			
			<div class="source">
				<div class='date'><?php echo get_the_date(); ?></div>
				<h1><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h1>

				<div>
					<?php $type_terms = wp_get_post_terms ($post->ID, 'source_type'); ?>
					<?php foreach($type_terms as $term): ?>
						<span class="tag"><?php echo $term->name; ?></span>
					<?php endforeach; ?>
				</div>

				<div>
					<?php the_field('author_name'); ?>
				</div>

			</div>

			<hr />

		<?php endwhile ?>
	</div>

<?php endif; ?>

<?php get_footer(); ?>