<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link http://codex.wordpress.org/Template_Hierarchy
 *
 * @package WordPress
 * @subpackage None Plate
 * @since None Plate 1.0
 */

get_header(); ?>

<meta property="og:image" content="<?php echo get_template_directory_uri(); ?>/assets/img/meta/thumbnail.jpg">

<div id="content" class="home-content">
	<!-- SLIDER -->
	<section id="slider">
		<h2 class="hide">Destaques</h2>
		<div class="slider-container">
			<div data-cycle-pause-on-hover= "true"
				 class= "cycle-slideshow"
				 data-cycle-fx= "fade"
				 data-cycle-timeout= "2000"
				 data-cycle-slides= "> .display-element"
				 data-cycle-prev= "#slider .display-prev"
				 data-cycle-next= "#slider .display-next"
				 data-cycle-pager= "#slider .display-pager"
		         data-cycle-swipe="true"
		         data-cycle-swipe-fx="scrollHorz" >

					<?php
					    query_posts( array(
					          'post_type' => 'slider',
					          'posts_per_page' => -1,
					          'orderby'=> 'date&order=ASC',
					          'post__not_in' => array($post_ID)
					     ));
					?>
					<?php 
					    if ( have_posts() ) :
					        while ( have_posts() ) : the_post();
					?>

						    <div class="display-element" style="background:url(<?php the_field('imagem'); ?>) center;">
						    	<div class="display-container">
							        <a href="<?php the_field('link'); ?>" target="<?php the_field('alvo'); ?>">
						    			<img src="<?php the_field('imagem_mobile'); ?>" alt="<?php the_title(); ?>" class="tablet">
							            <div class="txt">
							                <h3><?php the_title(); ?></h3>
							                <p><?php the_field('texto'); ?></p>
							            </div>
							        </a>
						    	</div>
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
			</div>
			<!-- Display Nav -->
			<div class="display-prev"> <i class="fa fa-angle-left" aria-hidden="true"></i> </div>
			<div class="display-next"> <i class="fa fa-angle-right" aria-hidden="true"></i> </div>
			<div class="display-pager"></div>
		</div>
	</section>


	<!-- INSTAFEED -->
	<section id="instafeed">
		<h2 class="hide">Siga o nosso instagram</h2>
		<div class="instafeed-container">
			<?php echo do_shortcode( '[instagram-feed]' ); ?>
		</div>
	</section>


	<!-- BLOG ROLL -->
	<section id="blog-roll">
		<div class="blog-roll-container">
			<div class="container">
				<div class="row">
					<div class="col-md-12">
						<header class="page-header">
							<div class="the-title">
								<h2>Blog Roll</h2>
							</div>
						</header>

						<?php 
							// WP QUERY
							$paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
						    query_posts( array(
						          'post_type' => 'post',
						          'posts_per_page' => 6,
						          'posts_per_rss' => 6,
						          'paged' => $paged,
						          'orderby'=> 'date&order=ASC',
						          'post__not_in' => array($post_ID)
						     )); 

						?>
						<?php 
							// LOOP
						    if ( have_posts() ) :
						        while ( have_posts() ) : the_post();
						?>
							<?php
								$categoryclass = '';
								$categories = get_the_category();
								foreach ( $categories as $category ) { 
								    $categoryclass .= ' ct-'.esc_attr( $category->slug ); 
								}
							?>

							<article id="post-<?php echo $post->ID; ?>" class="post post-excerpt post-<?php echo $post->ID; ?><?php echo $categoryclass; ?>">
								<div class="container-fluid nopadding">
									<div class="row">
										<div class="col-md-3">
											<!-- Post Thumbnail -->
											<?php
												// Sizes Example: thumbnail, medium, large, full
									            $post_thumbnail_id = get_post_thumbnail_id($post->ID);
									            $post_thumbnail_url = wp_get_attachment_image_src( $post_thumbnail_id, $size='large')[0];

									    	?>
									    	<div class="thumb">
									    		<a href="<?php the_permalink(); ?>" rel="bookmark">
										    		<span class="thumb-img" style="background:url(<?php echo $post_thumbnail_url; ?>);"></span>
										    		<img src="<?php echo $post_thumbnail_url; ?>" alt="<?php the_title(); ?>" class="hide">
										    	</a>
									    	</div>
										</div>
										<div class="col-md-9">
											<!-- Post Title -->
											<header class="excerpt-header">
												<div class="the-title">
													<h2><a href="<?php the_permalink(); ?>" rel="bookmark"><?php the_title(); ?></a></h2>
												</div>
												<div class="the-date">
													<p>Publicado em <?php echo get_the_date(); ?></p>
												</div>
												<div class="the-categories">
													<?php echo get_the_category_list(); ?>
												</div>
											</header>
											<!-- Post Excerpt -->
											<div class="the-content">
												<a href="<?php the_permalink(); ?>" rel="bookmark">
													<?php has_excerpt() ? the_excerpt() : false; ?>
												</a>
											</div>
										</div>
									</div>
								</div>
							</article>

						<?php
						        endwhile;
						    else :
						?>
						    <p>Nada foi encontrado</p>
						<?php
						    endif;
						?>

				        <div class="pagenate">
							<?php echo paginate_links( $args ); ?>
				        </div>

				        <?php wp_reset_query(); ?>

					</div> <!-- col-md-12 -->
				</div> <!-- row -->
			</div> <!-- container -->
		</div> <!-- blog-roll-container -->
	</section>

	<section id="newsletter">
		<div class="newsletter-container">
			<div class="container">
				<div class="row">
					<div class="col-md-12">
						<h2>Newsletter</h2>
		                <form id="mc4wp-form-1" class="mc4wp-form mc4wp-form-710231 clear-fix" method="post" data-id="710231" data-name="Cadastro Site">
	                        <?php echo do_shortcode( '[mc4wp_form id="79"]' ); ?>
		                </form>
					</div>
				</div>
			</div>
		</div>
	</section>
</div>
<?php get_footer(); ?>
