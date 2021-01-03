
<?php get_header();?>

<?php 
	
	$maps_query = new WP_Query([
		'post_type' => 'map_layer',
		'order' => 'ASC',
		'post_per_page' => -1,
	]);

	// SELECT all the timeline posts from start to end (ascending)
	$timeline_query = new WP_Query([
		'post_type' => 'timeline',
		'order' => 'ASC',
		'post_per_page' => -1,
	]);

	$maps_timeline_query = new WP_Query([
		'post_type' => ['timleine', 'map_layer'],
		'order' => 'ASC',
		'post_per_page' => -1,
		'meta_key' => 'date',
		'orderby' => 'meta_value_num',
		'order' => 'ASC'
	]);


	// get the first and last timeline entries
	$first_entry = $maps_timeline_query->posts[0];
	$num_entries = count($maps_timeline_query->posts);
	$last_entry = $maps_timeline_query->posts[$num_entries-1];


	// Here, we get the first and last timestamps so that we know the range for the slider
	// we are going to use UNIX timestamps, which you can read about here! https://en.wikipedia.org/wiki/Unix_time
	$first_timestamp = strtotime(get_field('date', $first_entry->ID));
	$last_timestamp = strtotime(get_field('date', $last_entry->ID));

	// calculate the duration of the timeline
	$difference = $last_timestamp - $first_timestamp;
?>

<main>
	<section id="maps">

		<?php if ($maps_query->have_posts()): ?>
			<?php while($maps_query->have_posts()): $maps_query->the_post(); ?>
				<?php

					$classes = array('map-layer');
					$type_terms = wp_get_post_terms ($post->ID, 'country');
					foreach($type_terms as $term){
						$classes[]=$term->slug;
					}							
				?>
				<div class="<?php echo implode(' ', $classes);?>" data-timelinepost="<?php echo $post->ID;?>">
					<div>
						<img src="<?php echo get_field('map_image')['sizes']['large'];?>"/>
					</div>
				</div>
			<?php endwhile ?>
		<?php endif; ?>


	</section>
	
	<section id="articles">
		
		<!-- Loop over all the timeline posts and put them in the article section -->
		<?php if ($timeline_query->have_posts()): ?>

			<?php while($timeline_query->have_posts()): $timeline_query->the_post(); ?>
				
				<div class="source" data-timelinepost="<?php echo $post->ID;?>">

				<div class="header-source">

					<div class='date'><?php echo get_field('date'); ?></div>

					<div class="country-tag">
						<?php $type_terms = wp_get_post_terms ($post->ID, 'country'); ?>
						<?php foreach($type_terms as $term): ?>						
							<span class="tag <?php echo $term->slug;?>"><?php echo $term->name; ?></span>
						<?php endforeach; ?>
					</div>

					
				</div>

					<div class="preview">
						<h1><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h1>
						<?php the_content();?>
					</div>

				</div>

			<?php endwhile ?>


		<?php endif; ?>
	</section>



<div id="timeline">

	<!-- Loop over all the timeline posts AGAIN and put them in the timeline section -->
	<input id="range-slider" type="range" start="<?php echo $first_timestamp;?>" end="<?php echo $last_timestamp;?>" name="">
	<div class="bars">
		<?php if ($timeline_query->have_posts()): ?>
			<?php while($timeline_query->have_posts()): $timeline_query->the_post(); ?>	
				<?php 

					// calculate the x position of the bar as a percentage

					$timestamp = strtotime(get_field('date'));

					$entry_difference = $timestamp - $first_timestamp;
					$percentage = ($entry_difference / $difference) * 100;

					// Add the country categories as a class to each bar
					$classes = ['bar', 'article-bar'];
					$type_terms = wp_get_post_terms ($post->ID, 'country');
					foreach($type_terms as $term):					
						$classes[]=$term->slug;
					endforeach;

				?>			
				<div class="<?php echo implode(' ', $classes);?>" style="left: <?php echo $percentage;?>%" data-type="article" data-timelinepost="<?php echo $post->ID;?>" data-percentage="<?php echo $percentage; ?>"></div>
			<?php endwhile ?>
		<?php endif; ?>	

		<?php if ($maps_query->have_posts()): ?>
		
			<?php while($maps_query->have_posts()): $maps_query->the_post(); ?>	
				<?php 

					// calculate the x position of the bar as a percentage

					$timestamp = strtotime(get_field('date'));
					$entry_difference = $timestamp - $first_timestamp;
					$percentage = ($entry_difference / $difference) * 100;

					// Add the country categories as a class to each bar
					$classes = ['bar', 'maplayer-bar'];
					$type_terms = wp_get_post_terms ($post->ID, 'country');
					foreach($type_terms as $term):					
						$classes[]=$term->slug;
					endforeach;

				?>			
				<div class="<?php echo implode(' ', $classes);?>" style="left: <?php echo $percentage;?>%" data-type="maplayer" data-timelinepost="<?php echo $post->ID;?>" data-percentage="<?php echo $percentage; ?>"></div>
			<?php endwhile ?>
			
		<?php endif; ?>	
	</div>
</div>

</main>	

<?php get_footer(); ?>