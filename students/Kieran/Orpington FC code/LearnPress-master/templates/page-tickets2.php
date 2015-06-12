<?php
/**
 * Template Name: tickets2
 *
 *	This is an example using Skeleton
 *
 */
?>

<?php get_header(); ?>

<div class="container">
<h3>Tickets</h3>
<p>Want to know the prices for match day tickets? Or buy a season ticket and then go to all the games free of charge!</p>

	<?php if (have_posts()) : ?>

		<?php while (have_posts()) : the_post(); ?>

		<?php endwhile; ?>

	<?php else : ?>

		<?php get_template_part('templates/404'); ?>

	<?php endif; ?>
    
    <table>
    
    <?php

        // check if the repeater field has rows of data
        if( have_rows('prices') ):

    ?>
        <tr>
            <th>Name</th>
            <th>Info</th>
            <th>Price</th>
        </tr>
        
        <?php
            while ( have_rows('prices') ) : the_row();
        ?>
            <tr>
                <td><?php the_sub_field('ticket_name'); ?></td>
                
                <td><?php the_sub_field('ticket_info'); ?></td>
                
                <td>£<?php the_sub_field('ticket_price'); ?></td>
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