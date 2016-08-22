
<!-- Nav tabs -->
<ul class="nav nav-tabs" role="tablist">
    <?php
        query_posts( array(
              'post_type' => 'planos',
              'orderby'=> 'date&order=ASC',
              'post__not_in' => array($post_ID)
         ));
    ?>

	<?php 
		$i = 0;
	    if ( have_posts() ) :
	        while ( have_posts() ) : the_post();

	?>
		<?php
			$categories = get_the_category();
			
			foreach ( $categories as $category ) { 
			    $categoryclass .= ' ct-'.esc_attr( $category->slug ); 
			}
		?>
		
        <li role="presentation" class="<?php if($i == 0){ echo 'active'; } ?>">
        	<a href="#<?php echo $post->post_name; ?>" aria-controls="<?php echo $post->post_name; ?>" role="tab" data-toggle="tab">
        		<?php the_title(); ?>
        	</a>
        </li>
		
		

	<?php
			$i++;
	        endwhile;
	        // // Previous/next post navigation.
	        // twentyfourteen_paging_nav();
	    else :
	?>
	    <p>Nada foi encontrado</p>
	<?php
	    endif;
	?>

    <?php 
        wp_reset_query();
     ?>
</ul>

<!-- Tab panes -->
<div class="tab-content">
    <?php
        query_posts( array(
              'post_type' => 'planos',
              'orderby'=> 'date&order=ASC',
              'post__not_in' => array($post_ID)
         ));
    ?>

	<?php 
		$i = 0;
	    if ( have_posts() ) :
	        while ( have_posts() ) : the_post();
	?>
		<?php
			$categories = get_the_category();
			foreach ( $categories as $category ) { 
			    $categoryclass .= ' ct-'.esc_attr( $category->slug ); 
			}
		?>
            <div role="tabpanel" class="tab-pane <?php if($i == 0){ echo 'active'; } ?>" id="<?php echo $post->post_name; ?>">
				<?php the_field('texto'); ?>
            </div>

	<?php
			$i++;
	        endwhile;
	        // // Previous/next post navigation.
	        // twentyfourteen_paging_nav();
	    else :
	?>
	    <p>Nada foi encontrado</p>
	<?php
	    endif;
	?>

    <?php 
        wp_reset_query();
     ?>
</div>