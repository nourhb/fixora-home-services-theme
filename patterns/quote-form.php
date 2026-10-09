<?php
/**
 * Title: Quote request form
 * Slug: fixora/quote-form
 * Categories: fixora
 * Description: Quote request form layout with service picker.
 *
 * @package Fixora
 */
?>
<!-- wp:group {"align":"full","style":{"spacing":{"padding":{"top":"var:preset|spacing|60","bottom":"var:preset|spacing|60"}}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull" style="padding-top:var(--wp--preset--spacing--60);padding-bottom:var(--wp--preset--spacing--60)">
	<!-- wp:columns -->
	<div class="wp-block-columns">
		<!-- wp:column {"width":"60%"} -->
		<div class="wp-block-column" style="flex-basis:60%">
			<!-- wp:heading {"level":2,"style":{"typography":{"fontFamily":"var:preset|font-family|display","fontSize":"var:preset|font-size|xx-large"},"color":{"text":"#0b2a4a"}}} -->
			<h2 class="wp-block-heading has-text-color" style="color:#0b2a4a">Request your free quote</h2>
			<!-- /wp:heading -->
			<!-- wp:paragraph {"style":{"color":{"text":"#5b6b7d"},"spacing":{"margin":{"bottom":"var:preset|spacing|40"}}}} -->
			<p class="has-text-color" style="color:#5b6b7d;margin-bottom:var(--wp--preset--spacing--40)">Tell us what's going on — we'll call back within 15 minutes during business hours.</p>
			<!-- /wp:paragraph -->
			<!-- wp:group {"style":{"border":{"radius":"12px","width":"1px","color":"#dfe6ec"},"spacing":{"padding":{"top":"var:preset|spacing|40","right":"var:preset|spacing|40","bottom":"var:preset|spacing|40","left":"var:preset|spacing|40"},"blockGap":"var:preset|spacing|30"},"color":{"background":"#f3f5f7"}}} -->
			<div class="wp-block-group has-background" style="background-color:#f3f5f7;border-width:1px;border-color:#dfe6ec;border-radius:12px;padding-top:var(--wp--preset--spacing--40);padding-right:var(--wp--preset--spacing--40);padding-bottom:var(--wp--preset--spacing--40);padding-left:var(--wp--preset--spacing--40)">
				<!-- wp:columns -->
				<div class="wp-block-columns">
					<!-- wp:column -->
					<div class="wp-block-column">
						<!-- wp:paragraph {"style":{"typography":{"fontSize":"0.85rem","fontWeight":"700"},"color":{"text":"#0b2a4a"}}} -->
						<p class="has-text-color" style="color:#0b2a4a;font-size:0.85rem;font-weight:700">YOUR NAME</p>
						<!-- /wp:paragraph -->
						<!-- wp:paragraph {"style":{"border":{"radius":"8px","width":"1px","color":"#dfe6ec"},"color":{"background":"#ffffff","text":"#8a99a8"},"spacing":{"padding":{"top":"0.7rem","bottom":"0.7rem","left":"1rem","right":"1rem"}},"typography":{"fontSize":"0.95rem"}}} -->
						<p class="has-text-color has-background" style="background-color:#ffffff;color:#8a99a8;border-width:1px;border-color:#dfe6ec;border-radius:8px;font-size:0.95rem;padding-top:0.7rem;padding-right:1rem;padding-bottom:0.7rem;padding-left:1rem">Jane Doe</p>
						<!-- /wp:paragraph -->
					</div>
					<!-- /wp:column -->
					<!-- wp:column -->
					<div class="wp-block-column">
						<!-- wp:paragraph {"style":{"typography":{"fontSize":"0.85rem","fontWeight":"700"},"color":{"text":"#0b2a4a"}}} -->
						<p class="has-text-color" style="color:#0b2a4a;font-size:0.85rem;font-weight:700">PHONE</p>
						<!-- /wp:paragraph -->
						<!-- wp:paragraph {"style":{"border":{"radius":"8px","width":"1px","color":"#dfe6ec"},"color":{"background":"#ffffff","text":"#8a99a8"},"spacing":{"padding":{"top":"0.7rem","bottom":"0.7rem","left":"1rem","right":"1rem"}},"typography":{"fontSize":"0.95rem"}}} -->
						<p class="has-text-color has-background" style="background-color:#ffffff;color:#8a99a8;border-width:1px;border-color:#dfe6ec;border-radius:8px;font-size:0.95rem;padding-top:0.7rem;padding-right:1rem;padding-bottom:0.7rem;padding-left:1rem">(416) 555-0000</p>
						<!-- /wp:paragraph -->
					</div>
					<!-- /wp:column -->
				</div>
				<!-- /wp:columns -->
				<!-- wp:paragraph {"style":{"typography":{"fontSize":"0.85rem","fontWeight":"700"},"color":{"text":"#0b2a4a"}}} -->
				<p class="has-text-color" style="color:#0b2a4a;font-size:0.85rem;font-weight:700">WHAT DO YOU NEED?</p>
				<!-- /wp:paragraph -->
				<!-- wp:buttons -->
				<div class="wp-block-buttons"><!-- wp:button {"className":"is-style-ember-outline"} -->
				<div class="wp-block-button is-style-ember-outline"><a class="wp-block-button__link wp-element-button">🔧 Plumbing</a></div>
				<!-- /wp:button -->
				<!-- wp:button {"className":"is-style-ember-outline"} -->
				<div class="wp-block-button is-style-ember-outline"><a class="wp-block-button__link wp-element-button">❄️ Heating / Cooling</a></div>
				<!-- /wp:button -->
				<!-- wp:button {"className":"is-style-ember-outline"} -->
				<div class="wp-block-button is-style-ember-outline"><a class="wp-block-button__link wp-element-button">⚡ Electrical</a></div>
				<!-- /wp:button --></div>
				<!-- /wp:buttons -->
				<!-- wp:paragraph {"style":{"typography":{"fontSize":"0.85rem","fontWeight":"700"},"color":{"text":"#0b2a4a"}}} -->
				<p class="has-text-color" style="color:#0b2a4a;font-size:0.85rem;font-weight:700">DESCRIBE THE ISSUE</p>
				<!-- /wp:paragraph -->
				<!-- wp:paragraph {"style":{"border":{"radius":"8px","width":"1px","color":"#dfe6ec"},"color":{"background":"#ffffff","text":"#8a99a8"},"spacing":{"padding":{"top":"0.7rem","bottom":"2.5rem","left":"1rem","right":"1rem"}},"typography":{"fontSize":"0.95rem"}}} -->
				<p class="has-text-color has-background" style="background-color:#ffffff;color:#8a99a8;border-width:1px;border-color:#dfe6ec;border-radius:8px;font-size:0.95rem;padding-top:0.7rem;padding-right:1rem;padding-bottom:2.5rem;padding-left:1rem">Tell us what's happening…</p>
				<!-- /wp:paragraph -->
				<!-- wp:buttons -->
				<div class="wp-block-buttons"><!-- wp:button {"width":100} -->
				<div class="wp-block-button has-custom-width wp-block-button__width-100"><a class="wp-block-button__link wp-element-button" href="tel:+14165550199">Send Request →</a></div>
				<!-- /wp:button --></div>
				<!-- /wp:buttons -->
				<!-- wp:paragraph {"align":"center","style":{"typography":{"fontSize":"0.85rem"},"color":{"text":"#5b6b7d"}}} -->
				<p class="has-text-align-center has-text-color" style="color:#5b6b7d;font-size:0.85rem">Connect your favourite form plugin to make this form live.</p>
				<!-- /wp:paragraph -->
			</div>
			<!-- /wp:group -->
		</div>
		<!-- /wp:column -->
		<!-- wp:column {"width":"40%"} -->
		<div class="wp-block-column" style="flex-basis:40%">
			<!-- wp:group {"style":{"border":{"radius":"12px"},"color":{"background":"#0b2a4a","text":"#ffffff"},"spacing":{"padding":{"top":"var:preset|spacing|40","right":"var:preset|spacing|40","bottom":"var:preset|spacing|40","left":"var:preset|spacing|40"}}}} -->
			<div class="wp-block-group has-background has-text-color" style="background-color:#0b2a4a;color:#ffffff;border-radius:12px;padding-top:var(--wp--preset--spacing--40);padding-right:var(--wp--preset--spacing--40);padding-bottom:var(--wp--preset--spacing--40);padding-left:var(--wp--preset--spacing--40)">
				<!-- wp:heading {"level":3,"style":{"typography":{"fontSize":"1.25rem"},"color":{"text":"#fdba74"}}} -->
				<h3 class="wp-block-heading has-text-color" style="color:#fdba74;font-size:1.25rem">Prefer to talk?</h3>
				<!-- /wp:heading -->
				<!-- wp:paragraph {"style":{"typography":{"fontSize":"1.75rem","fontWeight":"800"},"color":{"text":"#ffffff"}}} -->
				<p class="has-text-color" style="color:#ffffff;font-size:1.75rem;font-weight:800"><a href="tel:+14165550199" style="color:#ffffff">(416) 555-0199</a></p>
				<!-- /wp:paragraph -->
				<!-- wp:paragraph {"style":{"typography":{"fontSize":"0.95rem"},"color":{"text":"#b8c4d0"}}} -->
				<p class="has-text-color" style="color:#b8c4d0;font-size:0.95rem">Emergencies: answered 24/7<br>Quotes: Mon–Sat, 7 AM – 7 PM<br>Average callback: 15 minutes</p>
				<!-- /wp:paragraph -->
			</div>
			<!-- /wp:group -->
		</div>
		<!-- /wp:column -->
	</div>
	<!-- /wp:columns -->
</div>
<!-- /wp:group -->
