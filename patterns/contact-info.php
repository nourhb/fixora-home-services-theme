<?php
/**
 * Title: Contact info
 * Slug: fixora/contact-info
 * Categories: fixora
 * Description: Contact details, hours and a technician photo.
 *
 * @package Fixora
 */
?>
<!-- wp:group {"align":"full","style":{"spacing":{"padding":{"top":"var:preset|spacing|60","bottom":"var:preset|spacing|60"}}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull" style="padding-top:var(--wp--preset--spacing--60);padding-bottom:var(--wp--preset--spacing--60)">
	<!-- wp:columns {"verticalAlignment":"center"} -->
	<div class="wp-block-columns are-vertically-aligned-center">
		<!-- wp:column {"verticalAlignment":"center"} -->
		<div class="wp-block-column is-vertically-aligned-center">
			<!-- wp:paragraph {"style":{"typography":{"fontSize":"0.9rem","fontWeight":"700","letterSpacing":"0.22em","textTransform":"uppercase"},"color":{"text":"#f97316"}}} -->
			<p class="has-text-color" style="color:#f97316;font-size:0.9rem;font-weight:700;letter-spacing:0.22em;text-transform:uppercase">Get in touch</p>
			<!-- /wp:paragraph -->
			<!-- wp:heading {"level":2,"style":{"typography":{"fontFamily":"var:preset|font-family|display","fontSize":"var:preset|font-size|xx-large"},"color":{"text":"#0b2a4a"}}} -->
			<h2 class="wp-block-heading has-text-color" style="color:#0b2a4a">Talk to a real human, fast</h2>
			<!-- /wp:heading -->
			<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|30","margin":{"top":"var:preset|spacing|40"}}}} -->
			<div class="wp-block-group" style="margin-top:var(--wp--preset--spacing--40)">
				<!-- wp:paragraph {"style":{"typography":{"fontSize":"1.05rem"},"color":{"text":"#16222e"}}} -->
				<p class="has-text-color" style="color:#16222e;font-size:1.05rem">📞 <strong>24/7 line:</strong> <a href="tel:+14165550199">+1 (416) 555-0199</a></p>
				<!-- /wp:paragraph -->
				<!-- wp:paragraph {"style":{"typography":{"fontSize":"1.05rem"},"color":{"text":"#16222e"}}} -->
				<p class="has-text-color" style="color:#16222e;font-size:1.05rem">✉️ <strong>Email:</strong> <a href="mailto:hello@fixora.ca">hello@fixora.ca</a></p>
				<!-- /wp:paragraph -->
				<!-- wp:paragraph {"style":{"typography":{"fontSize":"1.05rem"},"color":{"text":"#16222e"}}} -->
				<p class="has-text-color" style="color:#16222e;font-size:1.05rem">📍 <strong>Shop:</strong> 2140 Danforth Avenue, Toronto, ON M4C 1J8</p>
				<!-- /wp:paragraph -->
				<!-- wp:paragraph {"style":{"typography":{"fontSize":"1.05rem"},"color":{"text":"#16222e"}}} -->
				<p class="has-text-color" style="color:#16222e;font-size:1.05rem">🕖 <strong>Hours:</strong> Mon–Fri 7 AM–7 PM · Sat 8 AM–5 PM · Emergencies 24/7</p>
				<!-- /wp:paragraph -->
			</div>
			<!-- /wp:group -->
		</div>
		<!-- /wp:column -->
		<!-- wp:column {"verticalAlignment":"center"} -->
		<div class="wp-block-column is-vertically-aligned-center">
			<!-- wp:image {"className":"is-style-soft-frame","sizeSlug":"large"} -->
			<figure class="wp-block-image size-large is-style-soft-frame"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/electrician-work.jpg" alt="Fixora electrician at work"/></figure>
			<!-- /wp:image -->
		</div>
		<!-- /wp:column -->
	</div>
	<!-- /wp:columns -->
</div>
<!-- /wp:group -->
