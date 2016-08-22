<!-- POST LOOP -->
    <main id="main" class="site-main" >
		<?php 
		    if ( have_posts() ) :
		        while ( have_posts() ) : the_post();
		?>
			<?php
				$categories = get_the_category();
				foreach ( $categories as $category ) { 
				    $categoryclass .= ' ct-'.esc_attr( $category->slug ); 
				}
			?>
			<article id="post-<?php echo $post->ID; ?>" class="post post-<?php echo $post->ID; ?><?php echo $categoryclass; ?>">
				<!-- Post Title -->
				<header class="entry-header">
					<h2 class="entry-title"><a href="<?php the_permalink(); ?>" rel="bookmark"><?php the_title(); ?></a></h2>
				</header>
				<!-- Post Excerpt -->
				<div class="entry-content">
					<p><?php the_excerpt(); ?></p>
				</div>

				<!-- Post Thumbnail -->
				<?php
		            $post_thumbnail_id = get_post_thumbnail_id($post->ID);
					$post_thumbnail_url = wp_get_attachment_url( $post_thumbnail_id );
		    	?>
		    	<div class="thumb">
		    		<div style="background:url(<?php echo $post_thumbnail_url; ?>);"></div>
		    	</div>
				<!-- Post Date -->
				<footer class="entry-footer">
					<span class="posted-on">
						<span class="screen-reader-text">Publicado em </span>
						<a href="<?php the_permalink(); ?>" rel="bookmark">
							<time class="entry-date published updated" datetime="2016-04-28T15:05:47+00:00"><?php echo get_the_date(); ?></time>
						</a>
					</span>
				</footer>
			</article>


			<!-- Title -->
			<?php the_title(); ?>

			<!-- URL -->
			<?php the_permalink(); ?>

			<!-- Thumbnail -->
			<?php
	            $post_thumbnail_id = get_post_thumbnail_id($post->ID);
				$post_thumbnail_url = wp_get_attachment_url( $post_thumbnail_id );
	    	?>
	    	<?php echo $post_thumbnail_url; ?>

			<!-- Categories -->
			<?php
				$categories = get_the_category();
				foreach ( $categories as $category ) { 
				    echo '<span class="categorie">'.esc_attr( $category->name )."</span>"; 
				}
			?>

			<!-- Date -->
			<?php echo get_the_date(); ?>

			<!-- Excerpt -->
			<?php the_excerpt(); ?>


		<?php
		        endwhile;
		        // // Previous/next post navigation.
		        // twentyfourteen_paging_nav();
		    else :
		?>
		    <p>Nada foi encontrado</p>
		<?php
		    endif;
		?>

        <div class="pagenate">
			<?php echo paginate_links( $args ); ?>
        </div>
        
        <?php 
            wp_reset_query();
         ?>
    </main>

<!-- QUERIES -->
	<!-- Specific Post Type -->
        <?php
            $paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
            query_posts( array(
                  'post_type' => 'trabalhos',
                  'paged' => $paged,
                  'orderby'=> 'date&order=ASC',
                  'post__not_in' => array($post_ID)
             ));
        ?>

    <!-- Archives -->
		<?php 
	    	$paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
	        query_posts( array(
	              'cat' => $cat,
	              'posts_per_page' => 6,
	              'paged' => $paged,
	              'orderby'=> 'date&order=ASC',
	              'post__not_in' => array($post_ID)
	         ));
		 ?>

	<!-- Search -->
		<?php 
        	$paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
            query_posts( array(
                  'posts_per_page' => 6,
                  'post_type' => 'post',
                  'paged' => $paged,
                  'orderby'=> 'date&order=ASC',
                  's' => $s,
                  'exclude_from_search' => true,
                  'post__not_in' => array($post_ID)
             )); 
		 ?>

	<!-- Specific Post -->
	<?php echo get_post_field('post_content', 19); ?>
	
<!-- REPEATER -->
    <?php 
        $rows = get_field('slider');
        if($rows) { 
                foreach($rows as $row) {
    ?>
		    <article class="display-element" style="background:url(<?php echo $row['imagem']; ?>) center;">
		        <a href="<?php echo $row['url']; ?>">
		            <div class="txt">
		                <h2 class="hide"><?php echo $row['titulo']; ?></h2>
		            </div>
		        </a>
		    </article>

	<?php 
                }

        }
     ?>

<!-- GALERIA -->
	<?php 
		$gallery_slug = $post->post_name;
		$images = get_field('imagens');
		// echo $images[0]['url'];
		if( $images ):
	?>
	        <?php foreach( $images as $image ): ?>
	        	<div class="col-md-3">
		    		<a href="<?php echo $image['url']; ?>" data-lightbox="<?php echo $gallery_slug; ?>" data-title="<?php echo $image['caption']; ?>">
			    		<div style="background:url(<?php echo $image['sizes']['medium']; ?>) center;"></div>
			    		<img src="<?php echo $image['url']; ?>" alt="<?php the_title(); ?>" class="hide">
		    		</a>
	        	</div>
	        <?php endforeach; ?>
	<?php
		endif;
	?>