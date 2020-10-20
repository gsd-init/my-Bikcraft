<?php $contact = get_page_by_title('contact'); ?>

<style type="text/css">
.quebra {
    background: url("<?php the_field('background_footer', $contact); ?>") no-repeat center;
    background-size: cover;
}
</style>

<div class="quebra">
			<blockquote class="quote-externo container">
				<?php the_field('phrase_footer', $contact); ?>
				<cite><?php the_field('author_footer', $contact); ?></cite>
			</blockquote>
		</div>

<footer>
			<div class="footer">
				<div class="container">

					<div class="grid-8 footer_historia">
						<h3>Our History</h3>
						<?php the_field('summary_history', $contact); ?>
					</div>

					<div class="grid-4 footer_contato">
						<h3>Contact</h3>
						<ul>
							<li><?php the_field('phone_number', $contact);?></li>
							<li><?php the_field('email', $contact);?></li>
							<li><?php the_field('address1', $contact);?></li>
						</ul>
					</div>

					<div class="grid-4 footer_redes">
						<h3>Social Media</h3>
						<?php include(TEMPLATEPATH . "/inc/social-media.php"); ?>
					</div>

				</div>
			</div>

			<div class="copy">
				<div class="container">
					<p class="grid-16"><?php bloginfo('name'); ?> <?php echo date("Y"); ?> - All rights reserved.</p>
				</div>
			</div>
		</footer>


	<script>
	  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
	  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
	  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
	  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

	  ga('create', 'UA-60088262-1', 'auto');
	  ga('send', 'pageview');

    </script>
    
    <!-- Start Wordpress Footer -->
    <?php wp_footer(); ?>
        <!-- End Wordpress Footer -->
	</body>
</html>