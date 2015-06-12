<?php
/**
 * Template Name: Tickets
 *
 *	This is an example using Skeleton
 *
 */
?>

<?php get_header(); ?>

<div class="container">

	<?php if (have_posts()) : ?>

		<?php while (have_posts()) : the_post(); ?>

		<div class="row">	

			 <div class="container">
    <div class="row">
      <div class="one-half column" style="margin-top: 25%">
        <h4>Tickets Page</h4>
        <p>This is the Tickets page</p>
      </div>
    </div>
  </div>
 
<?php endif; ?>


            
<footer>

		</div>

		<?php endwhile; ?>

	<?php else : ?>

		<?php get_template_part('templates/404'); ?>

	<?php endif; ?>
            
            <?php

// check if the repeater field has rows of data
if( have_rows('membership') ):

 	// loop through the rows of data
    while ( have_rows('membership') ) : the_row();

        // display a sub field value
        the_sub_field('membership_info');

        // display a sub field value
        the_sub_field('price');

    endwhile;

else :

    // no rows found

endif;

?>

</div>	

<?php get_footer(); ?>
    
    

    
    
    
    
    
    
            <?php

        // check if the repeater field has rows of data
        if( have_rows('gallery') ):

    ?>
        
        <?php
            while ( have_rows('gallery') ) : the_row();
        ?>
            
                <?php the_sub_field('image_name'); ?>
                
                <?php the_sub_field('image'); ?>
                
            

        <?php
            endwhile;

        else :

            // no rows found

        endif;

        ?>