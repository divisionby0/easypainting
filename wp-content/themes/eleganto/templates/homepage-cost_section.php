<?php if ( get_theme_mod( 'cost_intro_enable', '0' ) != '0' ) : ?>
	<div class="intro parascroll">
		<?php $bg = get_theme_mod( 'cost_intro_img_image', '' ); ?>
		<div class="prlx <?php if ( $bg ) { echo 'img-holder'; } ?>" data-image="<?php echo esc_url( $bg ); ?>"></div>
		<?php if ( get_theme_mod( 'cost_intro_title', '' ) != '' ) : ?>
			<h2 class="text-center"><?php echo esc_html( get_theme_mod( 'cost_intro_title', '' ) ); ?></h2>
		<?php endif; ?>
		<?php if ( get_theme_mod( 'cost_intro_desc', '' ) != '' ) : ?>
			<h3 class="text-center"><?php echo esc_html( get_theme_mod( 'cost_intro_desc', '' ) ); ?></h3>
		<?php endif; ?>
	</div>
<?php endif; ?>
<div class="border-top"></div>
<div class="section">
	<div class="container">
		<div class="container-heading text-center">
			<?php if ( get_theme_mod( 'cost_section_title', '' ) != '' ) : ?>
			<h4><?php echo esc_html( get_theme_mod( 'cost_section_title', '' ) ); ?></h3>
				<?php endif; ?>
				<?php if ( get_theme_mod( 'cost_section_desc', '' ) != '' ) : ?>
					<div class="sub-title"><span><?php echo esc_html( get_theme_mod( 'cost_section_desc', '' ) ); ?></span></div>
				<?php endif; ?>
		</div>
		<div class="row">
			<?php
			get_template_part( 'template-parts/coststable');
			?>
		</div>
	</div>
</div>
<div class="border-bottom"></div>
