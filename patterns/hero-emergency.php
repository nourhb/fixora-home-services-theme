<?php
/**
 * Title: Hero with emergency CTA
 * Slug: fixora/hero-emergency
 * Categories: fixora
 * Description: Full-width hero with emergency badge, headline and call-to-action buttons.
 *
 * @package Fixora
 */
?>
<!-- wp:cover {"url":"<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/hero-plumber.jpg","dimRatio":65,"overlayColor":"navy","minHeight":640,"contentPosition":"center center","align":"full","style":{"spacing":{"padding":{"top":"var:preset|spacing|70","bottom":"var:preset|spacing|70"}}}} -->
<div class="wp-block-cover alignfull" style="padding-top:var(--wp--preset--spacing--70);padding-bottom:var(--wp--preset--spacing--70);min-height:640px"><span aria-hidden="true" class="wp-block-cover__background has-navy-background-color has-background-dim-65 has-background-dim"></span><img class="wp-block-cover__image-background" alt="Fixora plumber repairing a kitchen sink" src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/hero-plumber.jpg" data-object-fit="cover"/>
	<div class="wp-block-cover__inner-container">
		<!-- wp:group {"layout":{"type":"constrained"}} -->
		<div class="wp-block-group">
			<!-- wp:paragraph {"align":"center"} -->
			<p class="has-text-align-center"><span class="fixora-badge fixora-badge--emergency fixora-pulse">⚡ 24/7 Emergency Service</span></p>
			<!-- /wp:paragraph -->
			<!-- wp:heading {"textAlign":"center","level":1,"style":{"typography":{"fontFamily":"var:preset|font-family|display","fontSize":"var:preset|font-size|display"},"color":{"text":"#ffffff"}}} -->
			<h1 class="wp-block-heading has-text-align-center has-text-color" style="color:#ffffff">Fixed right. The first time.</h1>
			<!-- /wp:heading -->
			<!-- wp:paragraph {"align":"center","style":{"typography":{"fontSize":"1.25rem"},"color":{"text":"#dfe6ec"}}} -->
			<p class="has-text-align-center has-text-color" style="color:#dfe6ec;font-size:1.25rem">Plumbing, heating, cooling &amp; electrical — licensed pros at your door in 90 minutes or less.</p>
			<!-- /wp:paragraph -->
			<!-- wp:buttons {"layout":{"type":"flex","justifyContent":"center"}} -->
			<div class="wp-block-buttons">
				<!-- wp:button {"style":{"typography":{"fontSize":"1.125rem"}}} -->
				<div class="wp-block-button" style="font-size:1.125rem"><a class="wp-block-button__link wp-element-button" href="tel:+14165550199">📞 Call (416) 555-0199</a></div>
				<!-- /wp:button -->
				<!-- wp:button {"className":"is-style-outline"} -->
				<div class="wp-block-button is-style-outline"><a class="wp-block-button__link wp-element-button" href="/contact" style="color:#ffffff;border-color:#ffffff">Get a Free Quote</a></div>
				<!-- /wp:button -->
			</div>
			<!-- /wp:buttons -->
			<!-- wp:paragraph {"align":"center","style":{"typography":{"fontSize":"0.95rem"},"color":{"text":"#fdba74"}}} -->
			<p class="has-text-align-center has-text-color" style="color:#fdba74;font-size:0.95rem">★ 4.9/5 from 2,300+ verified reviews &nbsp;·&nbsp; Licensed &amp; insured &nbsp;·&nbsp; Upfront pricing</p>
			<!-- /wp:paragraph -->
		</div>
		<!-- /wp:group -->
	</div>
</div>
<!-- /wp:cover -->
