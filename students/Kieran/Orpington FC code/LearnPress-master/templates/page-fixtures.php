<?php
/**
 * Template Name: fixtures
 *
 *	This is an example using Skeleton
 *
 */
?>

<?php get_header(); ?>

<div class="container">
<h3>Fixtures</h3>
<p>Find out who we are playing and when</p>

	<?php if (have_posts()) : ?>

		<?php while (have_posts()) : the_post(); ?>

		<?php endwhile; ?>

	<?php else : ?>

		<?php get_template_part('templates/404'); ?>

	<?php endif; ?>
    
    <table>
    
    <?php

        // check if the repeater field has rows of data
        if( have_rows('fixtures') ):

    ?>
        <tr>
            <td>Date</td>
            <td>Time</td>
            <td>Home Team</td>
            <td>    </td>
            <td>Away Team</td>
            
        </tr>
        <?php
            while ( have_rows('fixtures') ) : the_row();
        ?>
            <tr>
                <td><?php the_sub_field('date'); ?></td>
                
                <td><?php the_sub_field('time'); ?></td>
                
                <td><?php the_sub_field('home_team'); ?></td>
                
                <td>Vs</td>
                
                <td><?php the_sub_field('away_team'); ?></td>
                
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