<!-- SLIDER -->
	<div data-cycle-pause-on-hover= "true"
		 class= "cycle-slideshow"
		 data-cycle-fx= "fade"
		 data-cycle-timeout= "2000"
		 data-cycle-slides= "> .display-element"
		 data-cycle-prev= "> .display-prev"
		 data-cycle-next= "> .display-next"
		 data-cycle-pager= "> .display-pager"
         data-cycle-swipe="true"
         data-cycle-swipe-fx="scrollHorz" >

			<?php
			    query_posts( array(
			          'post_type' => 'slider',
			          'posts_per_page' => 5,
			          'orderby'=> 'date&order=ASC',
			          'post__not_in' => array($post_ID)
			     ));
			?>
			<?php 
			    if ( have_posts() ) :
			        while ( have_posts() ) : the_post();
			?>
					    <div class="display-element" style="background:url(<?php the_field('imagem_do_slider'); ?>) center;">
					        <a href="<?php the_field('link'); ?>">
					            <div class="txt">
					                <h2><?php the_title(); ?></h2>
					                <p><?php the_excerpt(); ?></p>
					            </div>
					        </a>
					    </div>
			<?php
			        endwhile;
			        wp_reset_query();
			        // // Previous/next post navigation.
			        // twentyfourteen_paging_nav();
			    else :
			?>
			    <p>Nada foi encontrado</p>
			<?php
			    endif;
			?>

			<!-- Display Nav -->
			<div class="display-prev"> < </div>
			<div class="display-next"> > </div>
			<div class="display-pager"></div>

	</div>


<!-- CAROUSEL -->
