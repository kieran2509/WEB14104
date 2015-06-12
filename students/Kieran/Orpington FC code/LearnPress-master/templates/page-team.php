<?php
/**
 * Template Name: Team
 *
 *	This is an example using Skeleton
 *
 */
?>

<?php get_header(); ?>

<div class="container">

<h3>First Team</h3>
<p>Here you will find a list of the first team players</p>
    
	<?php if (have_posts()) : ?>

		<?php while (have_posts()) : the_post(); ?>

		<?php endwhile; ?>

	<?php else : ?>

		<?php get_template_part('templates/404'); ?>

	<?php endif; ?>

    <table align = "center">
    
    <?php

        // check if the repeater field has rows of data
        if( have_rows('team') ):

    ?>
        <tr>
            <th>Number</th>
            <th>Name</th>
            <th>Position</th>
            <th>Photo</th>
        </tr>
        
        <?php
            while ( have_rows('team') ) : the_row();
        ?>
            <tr>
                <td><?php the_sub_field('number'); ?></td>
                
                <td><?php the_sub_field('name'); ?></td>
                
                <td><?php the_sub_field('position'); ?></td>
                
                <td><img id = "imgthumb" src= "<?php the_sub_field('image'); ?>" /></td>
                
            </tr>

        <?php
            endwhile;

        else :

            // no rows found

        endif;

        ?>
        
    </table>       
    
    
</div>	

<?php get_footer(); ?>