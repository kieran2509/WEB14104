<?php
/**
 * Template Name: contact
 *
 *	This is an example using Skeleton
 *
 */
?>

<?php get_header(); ?>

<div class="container">
<h3>Contact Us</h3>
<p>All of the clubs information on how to contact us</p>

	<?php if (have_posts()) : ?>

		<?php while (have_posts()) : the_post(); ?>

		<?php endwhile; ?>

	<?php else : ?>

		<?php get_template_part('templates/404'); ?>

	<?php endif; ?>
    
    <table>
    
    <?php

        // check if the repeater field has rows of data
        if( have_rows('contact') ):

    ?>
        
        <?php
            while ( have_rows('contact') ) : the_row();
        ?>
            <tr>
                <td><?php the_sub_field('name'); ?></td>
                
                <td><?php the_sub_field('position'); ?></td>
                
                <td><?php the_sub_field('email'); ?></td>
                
                <td><?php the_sub_field('mobile'); ?></td>
                
            </tr>

        <?php
            endwhile;

        else :

            // no rows found

        endif;

        ?>
        
    </table>    
<div id="view1">
<?php
$location = get_field('carte_google');
if( ! empty($location) ):
?>
<div id="map" style="width: 100%; height: 350px;"></div>
<script src='http://maps.googleapis.com/maps/api/js?sensor=false' type='text/javascript'></script>

<script type="text/javascript">
  //<![CDATA[
	function load() {
	var lat = <?php echo $location['51.382295']; ?>;
	var lng = <?php echo $location['0.072372']; ?>;
// coordinates to latLng
	var latlng = new google.maps.LatLng(lat, lng);
// map Options
	var myOptions = {
	zoom: 9,
	center: latlng,
	mapTypeId: google.maps.MapTypeId.ROADMAP
   };
//draw a map
	var map = new google.maps.Map(document.getElementById("map"), myOptions);
	var marker = new google.maps.Marker({
	position: map.getCenter(),
	map: map
   });
}
// call the function
   load();
//]]>
</script>
<?php endif; ?> 

</div>
    
</div>	

<?php get_footer(); ?>