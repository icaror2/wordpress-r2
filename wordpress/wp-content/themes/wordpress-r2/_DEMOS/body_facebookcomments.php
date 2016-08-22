<!-- FACEBOOK COMMENTS -->
	<!-- Header -->
		<div id="fb-root"></div>
		<script>(function(d, s, id) {
		  var js, fjs = d.getElementsByTagName(s)[0];
		  if (d.getElementById(id)) return;
		  js = d.createElement(s); js.id = id;
		  js.src = "//connect.facebook.net/pt_BR/sdk.js#xfbml=1&version=v2.5";
		  fjs.parentNode.insertBefore(js, fjs);
		}(document, 'script', 'facebook-jssdk'));</script>

	<!-- Content -->
		<section id="comments">
		    <div class="facebook-cmt">
		        <h2>Deixe seu comentário:</h2>
		        <div class="fb-comments" data-href="<?php the_permalink(); ?>" data-numposts="5"></div>
		    </div>
		</section>
		

<!-- SHARER -->
    <div class="share-this">
        <p>
            <span>Compartilhe:</span>
            <div class="social-media">
                <ul>
                    <li><a href="https://www.facebook.com/sharer/sharer.php?&u=<?php echo get_permalink(); ?>&display=popup&ref=plugin&src=share_button" target="_blank" class="ico-face"><i class="fa fa-facebook"></i></a></li>
                    <li><a href="https://twitter.com/home?status=<?php echo get_the_title()." ".get_permalink(); ?>" target="_blank" class="ico-twitter"><i class="fa fa-twitter"></i></a></li>
                    <li><a href="https://plus.google.com/share?url=<?php echo get_permalink(); ?>" target="_blank" class="ico-gplus"><i class="fa fa-google-plus"></i></a></li>
                    <li><a href='mailto:?subject=<?php echo get_the_title(); ?>&amp;body=<?php the_excerpt(); ?> <?php echo get_permalink(); ?>' class='ico-email'><i class='fa fa-envelope'></i></a></li>
                </ul>
            </div>
        </p>
    </div>