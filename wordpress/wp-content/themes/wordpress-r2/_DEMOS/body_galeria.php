<!-- LISTAGEM GALERIA -->
	<!-- First Image -->
	<?php 
		$images = get_field('imagens');
	 ?>
	<!-- Post Title -->
	<header class="entry-header">
		<h2 class="entry-title"><?php the_title(); ?></h2>
	</header>
	<div class="thumb">
		<a href="<?php the_permalink(); ?>">
    		<div style="background:url(<?php echo $images[0]['url']; ?>) center;"></div>
    		<img src="<?php echo $images[0]['url']; ?>" alt="<?php the_title(); ?>" class="hide">
		</a>
	</div>

<!-- LEITURA GALERIA -->
    <div class="galerias-content-page galeria-lists">
		<?php 
			$gallery_slug = $post->post_name;
			$images = get_field('imagens');
			// echo $images[0]['url'];
			if( $images ): ?>

				<?php foreach( $images as $image ): ?>
					<div class="col-md-3">
						<a href="<?php echo $image['url']; ?>" data-lightbox="<?php echo $gallery_slug; ?>" data-title="<?php echo $image['caption']; ?>">
							<div style="background:url(<?php echo $image['sizes']['medium']; ?>) center;"></div>
							<img src="<?php echo $image['url']; ?>" alt="<?php the_title(); ?>" class="hide">
						</a>
					</div>
				<?php endforeach; ?>
	        
		<?php endif; ?>
    </div>