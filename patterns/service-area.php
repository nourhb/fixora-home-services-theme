<?php
/**
 * Title: Service area
 * Slug: fixora/service-area
 * Categories: fixora
 * Description: Coverage map-style section listing served areas.
 *
 * @package Fixora
 */
?>
<!-- wp:group {"align":"full","style":{"color":{"background":"#f3f5f7"},"spacing":{"padding":{"top":"var:preset|spacing|60","bottom":"var:preset|spacing|60"}}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull has-background" style="background-color:#f3f5f7;padding-top:var(--wp--preset--spacing--60);padding-bottom:var(--wp--preset--spacing--60)">
	<!-- wp:columns {"verticalAlignment":"center"} -->
	<div class="wp-block-columns are-vertically-aligned-center">
		<!-- wp:column {"verticalAlignment":"center"} -->
		<div class="wp-block-column is-vertically-aligned-center">
			<!-- wp:paragraph {"style":{"typography":{"fontSize":"0.9rem","fontWeight":"700","letterSpacing":"0.22em","textTransform":"uppercase"},"color":{"text":"#f97316"}}} -->
			<p class="has-text-color" style="color:#f97316;font-size:0.9rem;font-weight:700;letter-spacing:0.22em;text-transform:uppercase">Service area</p>
			<!-- /wp:paragraph -->
			<!-- wp:heading {"level":2,"style":{"typography":{"fontFamily":"var:preset|font-family|display","fontSize":"var:preset|font-size|xx-large"},"color":{"text":"#0b2a4a"}}} -->
			<h2 class="wp-block-heading has-text-color" style="color:#0b2a4a">Proudly serving the GTA</h2>
			<!-- /wp:heading -->
			<!-- wp:paragraph {"style":{"color":{"text":"#5b6b7d"}}} -->
			<p class="has-text-color" style="color:#5b6b7d">Stocked vans stationed across the region mean faster arrivals and same-day service, wherever you are.</p>
			<!-- /wp:paragraph -->
			<!-- wp:columns -->
			<div class="wp-block-columns">
				<!-- wp:column -->
				<div class="wp-block-column">
					<!-- wp:list {"style":{"typography":{"fontSize":"0.95rem"},"color":{"text":"#16222e"}}} -->
					<ul style="color:#16222e;font-size:0.95rem" class="has-text-color"><!-- wp:list-item -->
					<li>📍 Toronto</li>
					<!-- /wp:list-item -->
					<!-- wp:list-item -->
					<li>📍 Mississauga</li>
					<!-- /wp:list-item -->
					<!-- wp:list-item -->
					<li>📍 Scarborough</li>
					<!-- /wp:list-item -->
					<!-- wp:list-item -->
					<li>📍 North York</li>
					<!-- /wp:list-item --></ul>
					<!-- /wp:list -->
				</div>
				<!-- /wp:column -->
				<!-- wp:column -->
				<div class="wp-block-column">
					<!-- wp:list {"style":{"typography":{"fontSize":"0.95rem"},"color":{"text":"#16222e"}}} -->
					<ul style="color:#16222e;font-size:0.95rem" class="has-text-color"><!-- wp:list-item -->
					<li>📍 Etobicoke</li>
					<!-- /wp:list-item -->
					<!-- wp:list-item -->
					<li>📍 Markham</li>
					<!-- /wp:list-item -->
					<!-- wp:list-item -->
					<li>📍 Vaughan</li>
					<!-- /wp:list-item -->
					<!-- wp:list-item -->
					<li>📍 Richmond Hill</li>
					<!-- /wp:list-item --></ul>
					<!-- /wp:list -->
				</div>
				<!-- /wp:column -->
			</div>
			<!-- /wp:columns -->
			<!-- wp:buttons -->
			<div class="wp-block-buttons"><!-- wp:button -->
			<div class="wp-block-button"><a class="wp-block-button__link wp-element-button" href="/contact">Check My Area</a></div>
			<!-- /wp:button --></div>
			<!-- /wp:buttons -->
		</div>
		<!-- /wp:column -->
		<!-- wp:column {"verticalAlignment":"center"} -->
		<div class="wp-block-column is-vertically-aligned-center">
			<!-- wp:image {"className":"is-style-soft-frame","sizeSlug":"large"} -->
			<figure class="wp-block-image size-large is-style-soft-frame"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/house-exterior.jpg" alt="Home in the Greater Toronto Area served by Fixora"/></figure>
			<!-- /wp:image -->
		</div>
		<!-- /wp:column -->
	</div>
	<!-- /wp:columns -->
</div>
<!-- /wp:group -->
