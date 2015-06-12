<?php
/**
 * Template Name: news
 *
 *	This is an example using Skeleton
 *
 */
?>

<?php get_header(); ?>

<div class="container">
<h3>News</h3>
<p>Read the latest news on Orpington Football Club</p>

	<?php if (have_posts()) : ?>

		<?php while (have_posts()) : the_post(); ?>

		<?php endwhile; ?>

	<?php else : ?>

		<?php get_template_part('templates/404'); ?>

	<?php endif; ?>
    
    <table>
    
    <?php

        // check if the repeater field has rows of data
        if( have_rows('news') ):

    ?>
        
        <?php
            while ( have_rows('news') ) : the_row();
        ?>
            <tr>
                <td><?php the_sub_field('date'); ?></td>
                
                <td><?php the_sub_field('news_story'); ?></td>
                
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