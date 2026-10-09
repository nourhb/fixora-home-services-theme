<?php
/**
 * Title: About story
 * Slug: fixora/about-story
 * Categories: fixora
 * Description: Company story with team photo and values.
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
			<!-- wp:image {"className":"is-style-soft-frame","sizeSlug":"large"} -->
			<figure class="wp-block-image size-large is-style-soft-frame"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/team-crew.jpg" alt="The Fixora technician crew"/></figure>
			<!-- /wp:image -->
		</div>
		<!-- /wp:column -->
		<!-- wp:column {"verticalAlignment":"center"} -->
		<div class="wp-block-column is-vertically-aligned-center">
			<!-- wp:paragraph {"style":{"typography":{"fontSize":"0.9rem","fontWeight":"700","letterSpacing":"0.22em","textTransform":"uppercase"},"color":{"text":"#f97316"}}} -->
			<p class="has-text-color" style="color:#f97316;font-size:0.9rem;font-weight:700;letter-spacing:0.22em;text-transform:uppercase">Our story</p>
			<!-- /wp:paragraph -->
			<!-- wp:heading {"level":2,"style":{"typography":{"fontFamily":"var:preset|font-family|display","fontSize":"var:preset|font-size|xx-large"},"color":{"text":"#0b2a4a"}}} -->
			<h2 class="wp-block-heading has-text-color" style="color:#0b2a4a">One van, one wrench, one promise</h2>
			<!-- /wp:heading -->
			<!-- wp:paragraph {"style":{"color":{"text":"#5b6b7d"}}} -->
			<p class="has-text-color" style="color:#5b6b7d">Fixora started in 2011 with a single van and a simple promise: show up on time, quote honestly, and fix it right the first time. Fifteen years later we run 24 stocked vans across the GTA — but the promise hasn't changed.</p>
			<!-- /wp:paragraph -->
			<!-- wp:list {"style":{"typography":{"fontSize":"1rem"},"color":{"text":"#16222e"}}} -->
			<ul style="color:#16222e;font-size:1rem" class="has-text-color"><!-- wp:list-item -->
			<li>✅ <strong>Licensed &amp; insured</strong> — every tech, every trade</li>
			<!-- /wp:list-item -->
			<!-- wp:list-item -->
			<li>✅ <strong>Upfront flat rates</strong> — approved before we start</li>
			<!-- /wp:list-item -->
			<!-- wp:list-item -->
			<li>✅ <strong>Clean-home guarantee</strong> — shoe covers &amp; full cleanup</li>
			<!-- /wp:list-item -->
			<!-- wp:list-item -->
			<li>✅ <strong>2-year labour warranty</strong> — we come back free</li>
			<!-- /wp:list-item --></ul>
			<!-- /wp:list -->
		</div>
		<!-- /wp:column -->
	</div>
	<!-- /wp:columns -->
</div>
<!-- /wp:group -->
