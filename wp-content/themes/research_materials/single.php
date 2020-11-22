<?php get_header(); ?>

<h1><?php the_title(); ?></h1>
<div><?php the_content(); ?></div>

<div>
	Author: <?php the_field('author_name'); ?>
</div>

<div>
	Position: <?php the_field('author_position'); ?>
</div>

<div>
	URL: <a href="<?php the_field('url'); ?>">this is the link you can call it whatever you want</a>
</div>

<br>



<?php if (have_rows('quotes')): ?>
	<div class="quotes">
		<?php while (have_rows('quotes')): the_row(); ?>
			<div><?php the_sub_field('quote_text'); ?></div>
		<?php endwhile; ?>
	</div>
<?php endif; ?>




<?php if (have_rows('media')): ?>
	<div class="media">
		<?php while (have_rows('media')): the_row(); ?>

			<?php 
				$media_type = get_sub_field('media_type');
				$image = get_sub_field('image');
				$file = get_sub_field('file');
				$embed = get_sub_field('embed');
			?>

			<?php if($media_type == 'image'): ?>
				<div>
					<img src="<?php echo $image['sizes']['medium']; ?>"/>
				</div>

			<?php elseif($media_type == 'file'): ?>
				<div>
					<a href="<?php echo $file['url'];?>"><?php echo $file['name']; ?></a>
				</div>
			
			<?php elseif($media_type == 'embed'): ?>
				<div>
					<?php echo $embed; ?>
				</div>

			<?php endif; ?>
			


		<?php endwhile; ?>
	</div>
<?php endif; ?>

<?php get_footer();?>