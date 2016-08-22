	<!-- RESPONSIVE MENU -->
	    <div class="navbar navbar-default" role="navigation">
	        <div class="navbar-header">
				<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target=".navbar-collapse">
					<span class="sr-only">Alternar Navegação</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>
				<div class="navbar-brand" href="home">
					<?php if ( is_front_page() && is_home() ) : ?>
						<h1 class="hide"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
					<?php endif; ?>
						<a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a>
				</div>
	        </div>

	        <nav class="navbar-collapse collapse">
	            <div class="menu-fixed-menu-container">
	            	<h2 class="hide">Menu Principal</h2>
			        <?php if ( has_nav_menu( 'primary' ) ) : ?>
						<?php
							wp_nav_menu( array(
								'theme_location' => 'primary',
								'menu_class'     => 'primary-menu',
							 ) );
						?>
					<?php endif; ?>
	            </div>
	        </nav>
	    </div>