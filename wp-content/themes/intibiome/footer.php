<?php wp_footer(); ?>
<?php global $info; ?>
<footer>
	<div class="container">
		<div class="row top-footer">
			<div class="col-12 navegacao">
				<ul>
					<li>
						<a href="<?php echo WP_URL ?>/contact">
							contact us
						</a>
					</li>
					<li>
						<a href="#">
							faq
						</a>
					</li>
					<li>
						<a href="#">
							site map
						</a>
					</li>
					<li>
						<a href="#">
							privacy policy
						</a>
					</li>
					<li>
						<a href="#">
							cookies policy
						</a>
					</li>
					<li>
						<a href="#">
							legal notice
						</a>
					</li>
				</ul>
			</div>
		</div>
		<div class="row bottom-footer">
			<div class="col-12 bottom">
				<a href="<?php echo WP_URL;?>">
					<img src="<?php echo WP_TEMPLATE; ?>/image/logo-ulabs.png" alt="U labs">
				</a>
				<a class="instagram" target="_blank" href="<?php echo $info['instagram'] ?>">
					<i class="fab fa-instagram"></i>
				</a>
			</div>
		</div>
	</div>
</footer>
<div class="script">
	<script type="text/javascript" src="<?php echo WP_TEMPLATE; ?>/bower_components/jquery/dist/jquery.min.js"></script>
	<script type="text/javascript" src="<?php echo WP_TEMPLATE; ?>/bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
	<script type="text/javascript" src="<?php echo WP_TEMPLATE; ?>/bower_components/font-awesome/js/fontawesome.min.js"></script>
	<script type="text/javascript" src="<?php echo WP_TEMPLATE; ?>/bower_components/lightgallery/dist/js/lightgallery.min.js"></script>
	<script type="text/javascript" src="<?php echo WP_TEMPLATE; ?>/bower_components/jquery-mask-plugin/dist/jquery.mask.min.js"></script>
	<script type="text/javascript" src="<?php echo WP_TEMPLATE; ?>/bower_components/slick-carousel/slick/slick.min.js"></script>
	<script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCxZR4RVhKHJjgslQJN5sBZJWe9DdcdOT0&libraries=places"></script>
	<script src="https://developers.google.com/maps/documentation/javascript/examples/markerclusterer/markerclusterer.js"></script>
	<script type="text/javascript" src="<?php echo WP_TEMPLATE; ?>/script.min.js"></script>
</div>
</div>
</body>
</html>