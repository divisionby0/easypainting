<footer id="colophon" class="rsrc-footer" role="contentinfo">
	<div class="container">  
		<div class="row rsrc-author-credits">
			<?php if ( get_theme_mod( 'eleganto_socials', 0 ) == 1 ) : ?>
				<div class="footer-socials text-center">
					<?php
					if ( get_theme_mod( 'eleganto_socials', 0 ) == 1 ) {
						eleganto_social_links();
					}
					?>                 
				</div>
			<?php endif; ?>
			<p class="text-center">
				<a href="http://themes4wp.com/theme/eleganto" title="Free Business WordPress Theme">Eleganto</a>
				<span class="sep"> | </span>
				<a href="http://wp-templates.ru/" title="Шаблоны WordPress">WordPress</a> <span class="sep"> | </span> <a href="https://rastenievod.com/" title="Комнатные цветы и растения, садовые цветы и их названия" target="_blank">Rastenievod.com</a>
			</p> 
		</div>
	</div>       
</footer> 
<p id="back-top">
	<a href="#top"><span></span></a>
</p>
<!-- end main container -->
</div>
<?php wp_footer(); ?>
</body>
</html>