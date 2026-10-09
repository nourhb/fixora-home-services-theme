<?php
/**
 * Title: Booking CTA
 * Slug: fixora/cta-booking
 * Categories: fixora
 * Description: Bold booking call-to-action over a service van photo.
 *
 * @package Fixora
 */
?>
<!-- wp:cover {"url":"<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/service-van.jpg","dimRatio":70,"overlayColor":"navy","minHeight":420,"contentPosition":"center center","align":"full","style":{"spacing":{"padding":{"top":"var:preset|spacing|60","bottom":"var:preset|spacing|60"}}}} -->
<div class="wp-block-cover alignfull" style="padding-top:var(--wp--preset--spacing--60);padding-bottom:var(--wp--preset--spacing--60);min-height:420px"><span aria-hidden="true" class="wp-block-cover__background has-navy-background-color has-background-dim-70 has-background-dim"></span><img class="wp-block-cover__image-background" alt="Fixora service van" src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/service-van.jpg" data-object-fit="cover"/>
	<div class="wp-block-cover__inner-container">
		<!-- wp:group {"layout":{"type":"constrained"}} -->
		<div class="wp-block-group">
			<!-- wp:heading {"textAlign":"center","level":2,"style":{"typography":{"fontFamily":"var:preset|font-family|display","fontSize":"var:preset|font-size|xx-large"},"color":{"text":"#ffffff"}}} -->
			<h2 class="wp-block-heading has-text-align-center has-text-color" style="color:#ffffff">A tech can be at your door today</h2>
			<!-- /wp:heading -->
			<!-- wp:paragraph {"align":"center","style":{"typography":{"fontSize":"1.125rem"},"color":{"text":"#dfe6ec"}}} -->
			<p class="has-text-align-center has-text-color" style="color:#dfe6ec;font-size:1.125rem">Book online in 60 seconds or call now — same-day windows available across the GTA.</p>
			<!-- /wp:paragraph -->
			<!-- wp:buttons {"layout":{"type":"flex","justifyContent":"center"}} -->
			<div class="wp-block-buttons">
				<!-- wp:button {"style":{"typography":{"fontSize":"1.125rem"}}} -->
				<div class="wp-block-button" style="font-size:1.125rem"><a class="wp-block-button__link wp-element-button" href="/contact">Book My Visit</a></div>
				<!-- /wp:button -->
				<!-- wp:button {"className":"is-style-outline"} -->
				<div class="wp-block-button is-style-outline"><a class="wp-block-button__link wp-element-button" href="tel:+14165550199" style="color:#ffffff;border-color:#ffffff">📞 (416) 555-0199</a></div>
				<!-- /wp:button -->
			</div>
			<!-- /wp:buttons -->
		</div>
		<!-- /wp:group -->
	</div>
</div>
<!-- /wp:cover -->
