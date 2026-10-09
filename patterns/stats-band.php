<?php
/**
 * Title: Stats band
 * Slug: fixora/stats-band
 * Categories: fixora
 * Description: Animated counters — jobs done, rating, years, availability.
 *
 * @package Fixora
 */
?>
<!-- wp:group {"align":"full","style":{"color":{"background":"#071c33","text":"#ffffff"},"spacing":{"padding":{"top":"var:preset|spacing|50","bottom":"var:preset|spacing|50"}}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull has-background has-text-color" style="background-color:#071c33;color:#ffffff;padding-top:var(--wp--preset--spacing--50);padding-bottom:var(--wp--preset--spacing--50)">
	<!-- wp:columns -->
	<div class="wp-block-columns">
		<!-- wp:column -->
		<div class="wp-block-column">
			<!-- wp:paragraph {"align":"center","className":"fixora-count","style":{"typography":{"fontSize":"2.75rem","fontWeight":"800"},"color":{"text":"#f97316"}}} -->
			<p class="has-text-align-center fixora-count has-text-color" style="color:#f97316;font-size:2.75rem;font-weight:800" data-count="12400" data-suffix="+">0</p>
			<!-- /wp:paragraph -->
			<!-- wp:paragraph {"align":"center","style":{"typography":{"fontSize":"0.95rem"},"color":{"text":"#b8c4d0"}}} -->
			<p class="has-text-align-center has-text-color" style="color:#b8c4d0;font-size:0.95rem">Jobs completed</p>
			<!-- /wp:paragraph -->
		</div>
		<!-- /wp:column -->
		<!-- wp:column -->
		<div class="wp-block-column">
			<!-- wp:paragraph {"align":"center","className":"fixora-count","style":{"typography":{"fontSize":"2.75rem","fontWeight":"800"},"color":{"text":"#f97316"}}} -->
			<p class="has-text-align-center fixora-count has-text-color" style="color:#f97316;font-size:2.75rem;font-weight:800" data-count="15" data-suffix=" yrs">0</p>
			<!-- /wp:paragraph -->
			<!-- wp:paragraph {"align":"center","style":{"typography":{"fontSize":"0.95rem"},"color":{"text":"#b8c4d0"}}} -->
			<p class="has-text-align-center has-text-color" style="color:#b8c4d0;font-size:0.95rem">Serving the GTA</p>
			<!-- /wp:paragraph -->
		</div>
		<!-- /wp:column -->
		<!-- wp:column -->
		<div class="wp-block-column">
			<!-- wp:paragraph {"align":"center","className":"fixora-count","style":{"typography":{"fontSize":"2.75rem","fontWeight":"800"},"color":{"text":"#f97316"}}} -->
			<p class="has-text-align-center fixora-count has-text-color" style="color:#f97316;font-size:2.75rem;font-weight:800" data-count="98" data-suffix="%">0</p>
			<!-- /wp:paragraph -->
			<!-- wp:paragraph {"align":"center","style":{"typography":{"fontSize":"0.95rem"},"color":{"text":"#b8c4d0"}}} -->
			<p class="has-text-align-center has-text-color" style="color:#b8c4d0;font-size:0.95rem">Would hire us again</p>
			<!-- /wp:paragraph -->
		</div>
		<!-- /wp:column -->
		<!-- wp:column -->
		<div class="wp-block-column">
			<!-- wp:paragraph {"align":"center","style":{"typography":{"fontSize":"2.75rem","fontWeight":"800"},"color":{"text":"#f97316"}}} -->
			<p class="has-text-align-center has-text-color" style="color:#f97316;font-size:2.75rem;font-weight:800">24/7</p>
			<!-- /wp:paragraph -->
			<!-- wp:paragraph {"align":"center","style":{"typography":{"fontSize":"0.95rem"},"color":{"text":"#b8c4d0"}}} -->
			<p class="has-text-align-center has-text-color" style="color:#b8c4d0;font-size:0.95rem">Emergency dispatch</p>
			<!-- /wp:paragraph -->
		</div>
		<!-- /wp:column -->
	</div>
	<!-- /wp:columns -->
</div>
<!-- /wp:group -->
