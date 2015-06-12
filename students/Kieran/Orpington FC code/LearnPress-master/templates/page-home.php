<?php
/**
 * Template Name: Home
 *
 *	This is an example using Skeleton
 *
 */
?>

<?php get_header(); ?>

<div class="container">
<p>Welcome to Orpington FC</p>
<p>Click on one of the images below to go to page.</p>
	<?php if (have_posts()) : ?>

		<?php while (have_posts()) : the_post(); ?>
    
        <?php

        // check if the repeater field has rows of data
        if( have_rows('gallery') ):

    ?>
        
        <?php
            while ( have_rows('gallery') ) : the_row();
        ?>
            
                
            <a href="<?php the_sub_field('page_link'); ?>"><img id = "imgthumb" src= "<?php the_sub_field('image'); ?>" /></a>
                
            

        <?php
            endwhile;

        else :

            // no rows found

        endif;

        ?>
        
    
    
    

            <?php 

            $image = get_field('image');

            if( !empty($image) ): ?>

                <img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" />

            <?php endif; ?>

		<?php endwhile; ?>

	<?php else : ?>

		<?php get_template_part('templates/404'); ?>

	<?php endif; ?>
    
    
    

</div>	

<?php get_footer(); ?>