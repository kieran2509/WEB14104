<?php
/**
 * Template Name: Club
 *
 *	This is an example using Skeleton
 *
 */
?>

<?php get_header(); ?>

<div class="container">
<button onclick="window.location.href='http://kbailey.raveweb.net/test/team/'">The Team</button>
<!---<button type="button" value="http://kbailey.raveweb.net/test/team/">The Team</button>--->
    
<h3>The Club</h3>
	<?php if (have_posts()) : ?>

		<?php while (have_posts()) : the_post(); ?>

		<?php endwhile; ?>

	<?php else : ?>

		<?php get_template_part('templates/404'); ?>

	<?php endif; ?>
    
    <table>
    
    <?php

        // check if the repeater field has rows of data
        if( have_rows('club') ):

    ?>
        
        <?php
            while ( have_rows('club') ) : the_row();
        ?>
            <tr>
                <td><?php the_sub_field('heading'); ?></td>
                
                <td><?php the_sub_field('paragraph'); ?></td>
                
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