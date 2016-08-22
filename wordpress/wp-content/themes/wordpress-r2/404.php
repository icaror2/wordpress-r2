<?php
/**
 * The template for displaying all single posts and attachments
 *
 * @package WordPress
 * @subpackage None Plate
 * @since None Plate 1.0
 */

get_header(); ?>

<meta property='og:image' content='<?php echo get_template_directory_uri(); ?>/assets/img/meta/thumbnail.jpg'/>

<div id="content">
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
	<article id="page" class="page page-404">
		<main class="page-container">
			<div class="container">
				<div class="row">
					<div class="col-md-12">
						<header class="page-header">
							<div class="the-title">
								<h1>404</h1>
							</div>
						</header>
						<div class="the-content">
							<p>Opa! A página não pode ser encontrada!</p>
							<p><?php //get_search_form(); ?></p>
						</div>
					</div>
				</div>
			</div>
		</main>
	</article>
</div>

<?php get_footer(); ?>
