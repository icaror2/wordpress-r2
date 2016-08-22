<?php
/**
 * The template for displaying all single posts and attachments
 *
 * @package WordPress
 * @subpackage None Plate
 * @since None Plate 1.0
 */

get_header(); ?>

<?php
	// Recebe o Thumbnail da Imagem Destacada
	// Sizes Example: thumbnail, medium, large, full
    $post_thumbnail_id = get_post_thumbnail_id($post->ID);
    $post_thumbnail_url = wp_get_attachment_image_src( $post_thumbnail_id, $size='large')[0];

?>

<meta property='og:image' content='<?php echo $post_thumbnail_url; ?>'/>

<div id="content" class="reading reading-single reading-single-galerias">
	<!-- BREADCRUMB -->
	<div class="bread-crumb" typeof="BreadcrumbList" vocab="http://schema.org/">
	    <div class="container">
	        <div class="row">
	            <div class="col-md-12">
	                <?php
	                    if(function_exists('bcn_display')) {
	                        bcn_display();
	                    }
	                ?>
	            </div>
	        </div>
	    </div>
	</div>

	<!-- ARTICLE -->
	<article id="page" class="single-galerias-<?php echo $post->ID; ?>">
		<main class="page-container">
			<div class="container">
				<div class="row">
					<div class="col-md-12">
						<header class="page-header">
							<div class="the-title">
								<h1><?php the_title(); ?></h1>
							</div>
						</header>
						<div class="the-content galerias-content">
							<div class="container-fluid nopadding">
								<div class="row">
									<div class="col-md-12">
										<p><?php the_field('texto'); ?></p>
									</div>
								
									<?php 
										$gallery_slug = $post->post_name;
										$images = get_field('imagens');
										// echo $images[0]['url'];
										if( $images ):
									?>
									        <?php foreach( $images as $image ): ?>

							                	<div class="col-md-3">
							                		<div class="galerias-element">
												    	<div class="thumb">
												    		<a href="<?php echo $image['url']; ?>" data-lightbox="<?php echo $gallery_slug; ?>" data-title="<?php the_title(); ?>">
													    		<span class="thumb-img" style="background:url(<?php echo $image['sizes']['large']; ?>);"></span>
													    		<img src="<?php echo $post_thumbnail_url; ?>" alt="<?php the_title(); ?>" class="hide">
													    	</a>
												    	</div>

							                		</div>
							                	</div>

									        <?php endforeach; ?>
										<?php endif; ?>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</main>
	</article>
</div>
<?php get_footer(); ?>
