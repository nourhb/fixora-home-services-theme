<?php
/**
 * Title: Services grid
 * Slug: fixora/services-grid
 * Categories: fixora
 * Description: Six service cards with photos and pricing hints.
 *
 * @package Fixora
 */
?>
<!-- wp:group {"align":"full","style":{"spacing":{"padding":{"top":"var:preset|spacing|60","bottom":"var:preset|spacing|60"}}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull" style="padding-top:var(--wp--preset--spacing--60);padding-bottom:var(--wp--preset--spacing--60)">
	<!-- wp:paragraph {"align":"center","style":{"typography":{"fontSize":"0.9rem","fontWeight":"700","letterSpacing":"0.22em","textTransform":"uppercase"},"color":{"text":"#f97316"}}} -->
	<p class="has-text-align-center has-text-color" style="color:#f97316;font-size:0.9rem;font-weight:700;letter-spacing:0.22em;text-transform:uppercase">What we fix</p>
	<!-- /wp:paragraph -->
	<!-- wp:heading {"textAlign":"center","level":2,"style":{"typography":{"fontFamily":"var:preset|font-family|display","fontSize":"var:preset|font-size|xx-large"},"color":{"text":"#0b2a4a"}}} -->
	<h2 class="wp-block-heading has-text-align-center has-text-color" style="color:#0b2a4a">One call handles it all</h2>
	<!-- /wp:heading -->
	<!-- wp:paragraph {"align":"center","style":{"color":{"text":"#5b6b7d"},"spacing":{"margin":{"bottom":"var:preset|spacing|50"}}}} -->
	<p class="has-text-align-center has-text-color" style="color:#5b6b7d;margin-bottom:var(--wp--preset--spacing--50)">From burst pipes to dead furnaces — upfront flat-rate pricing on every job.</p>
	<!-- /wp:paragraph -->
	<!-- wp:columns -->
	<div class="wp-block-columns">
		<!-- wp:column -->
		<div class="wp-block-column">
			<!-- wp:group {"className":"fixora-card","style":{"border":{"radius":"12px"},"color":{"background":"#ffffff"},"shadow":"var:preset|shadow|card","spacing":{"padding":{"top":"0","bottom":"var:preset|spacing|40"}}}} -->
			<div class="wp-block-group fixora-card has-background has-shadow" style="background-color:#ffffff;border-radius:12px;box-shadow:var(--wp--preset--shadow--card);padding-top:0;padding-bottom:var(--wp--preset--spacing--40)">
				<!-- wp:image {"aspectRatio":"16/10","sizeSlug":"large","style":{"border":{"radius":"12px 12px 0 0"}}} -->
				<figure class="wp-block-image size-large" style="border-radius:12px 12px 0 0"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/hero-plumber.jpg" alt="Plumber repairing a sink"/></figure>
				<!-- /wp:image -->
				<!-- wp:group {"style":{"spacing":{"padding":{"right":"var:preset|spacing|40","left":"var:preset|spacing|40"}}}} -->
				<div class="wp-block-group" style="padding-right:var(--wp--preset--spacing--40);padding-left:var(--wp--preset--spacing--40)">
					<!-- wp:heading {"level":3,"style":{"typography":{"fontSize":"1.25rem"},"color":{"text":"#0b2a4a"}}} -->
					<h3 class="wp-block-heading has-text-color" style="color:#0b2a4a;font-size:1.25rem">🔧 Emergency Plumbing</h3>
					<!-- /wp:heading -->
					<!-- wp:paragraph {"style":{"typography":{"fontSize":"0.95rem"},"color":{"text":"#5b6b7d"}}} -->
					<p class="has-text-color" style="color:#5b6b7d;font-size:0.95rem">Burst pipes, leaks, clogs and water heaters — fixed fast, day or night.</p>
					<!-- /wp:paragraph -->
					<!-- wp:paragraph {"style":{"typography":{"fontSize":"0.95rem","fontWeight":"700"},"color":{"text":"#f97316"}}} -->
					<p class="has-text-color" style="color:#f97316;font-size:0.95rem;font-weight:700">From $89 · 24/7 dispatch</p>
					<!-- /wp:paragraph -->
				</div>
				<!-- /wp:group -->
			</div>
			<!-- /wp:group -->
		</div>
		<!-- /wp:column -->
		<!-- wp:column -->
		<div class="wp-block-column">
			<!-- wp:group {"className":"fixora-card","style":{"border":{"radius":"12px"},"color":{"background":"#ffffff"},"shadow":"var:preset|shadow|card","spacing":{"padding":{"top":"0","bottom":"var:preset|spacing|40"}}}} -->
			<div class="wp-block-group fixora-card has-background has-shadow" style="background-color:#ffffff;border-radius:12px;box-shadow:var(--wp--preset--shadow--card);padding-top:0;padding-bottom:var(--wp--preset--spacing--40)">
				<!-- wp:image {"aspectRatio":"16/10","sizeSlug":"large","style":{"border":{"radius":"12px 12px 0 0"}}} -->
				<figure class="wp-block-image size-large" style="border-radius:12px 12px 0 0"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/hvac-repair.jpg" alt="HVAC technician repairing an air conditioner"/></figure>
				<!-- /wp:image -->
				<!-- wp:group {"style":{"spacing":{"padding":{"right":"var:preset|spacing|40","left":"var:preset|spacing|40"}}}} -->
				<div class="wp-block-group" style="padding-right:var(--wp--preset--spacing--40);padding-left:var(--wp--preset--spacing--40)">
					<!-- wp:heading {"level":3,"style":{"typography":{"fontSize":"1.25rem"},"color":{"text":"#0b2a4a"}}} -->
					<h3 class="wp-block-heading has-text-color" style="color:#0b2a4a;font-size:1.25rem">❄️ Heating &amp; Cooling</h3>
					<!-- /wp:heading -->
					<!-- wp:paragraph {"style":{"typography":{"fontSize":"0.95rem"},"color":{"text":"#5b6b7d"}}} -->
					<p class="has-text-color" style="color:#5b6b7d;font-size:0.95rem">Furnace repair, AC install and seasonal tune-ups that cut energy bills.</p>
					<!-- /wp:paragraph -->
					<!-- wp:paragraph {"style":{"typography":{"fontSize":"0.95rem","fontWeight":"700"},"color":{"text":"#f97316"}}} -->
					<p class="has-text-color" style="color:#f97316;font-size:0.95rem;font-weight:700">Tune-up $129 · Free estimates</p>
					<!-- /wp:paragraph -->
				</div>
				<!-- /wp:group -->
			</div>
			<!-- /wp:group -->
		</div>
		<!-- /wp:column -->
		<!-- wp:column -->
		<div class="wp-block-column">
			<!-- wp:group {"className":"fixora-card","style":{"border":{"radius":"12px"},"color":{"background":"#ffffff"},"shadow":"var:preset|shadow|card","spacing":{"padding":{"top":"0","bottom":"var:preset|spacing|40"}}}} -->
			<div class="wp-block-group fixora-card has-background has-shadow" style="background-color:#ffffff;border-radius:12px;box-shadow:var(--wp--preset--shadow--card);padding-top:0;padding-bottom:var(--wp--preset--spacing--40)">
				<!-- wp:image {"aspectRatio":"16/10","sizeSlug":"large","style":{"border":{"radius":"12px 12px 0 0"}}} -->
				<figure class="wp-block-image size-large" style="border-radius:12px 12px 0 0"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/electrician-panel.jpg" alt="Electrician working on an electrical panel"/></figure>
				<!-- /wp:image -->
				<!-- wp:group {"style":{"spacing":{"padding":{"right":"var:preset|spacing|40","left":"var:preset|spacing|40"}}}} -->
				<div class="wp-block-group" style="padding-right:var(--wp--preset--spacing--40);padding-left:var(--wp--preset--spacing--40)">
					<!-- wp:heading {"level":3,"style":{"typography":{"fontSize":"1.25rem"},"color":{"text":"#0b2a4a"}}} -->
					<h3 class="wp-block-heading has-text-color" style="color:#0b2a4a;font-size:1.25rem">⚡ Electrical</h3>
					<!-- /wp:heading -->
					<!-- wp:paragraph {"style":{"typography":{"fontSize":"0.95rem"},"color":{"text":"#5b6b7d"}}} -->
					<p class="has-text-color" style="color:#5b6b7d;font-size:0.95rem">Panel upgrades, lighting, EV chargers and safety inspections.</p>
					<!-- /wp:paragraph -->
					<!-- wp:paragraph {"style":{"typography":{"fontSize":"0.95rem","fontWeight":"700"},"color":{"text":"#f97316"}}} -->
					<p class="has-text-color" style="color:#f97316;font-size:0.95rem;font-weight:700">From $120 · Licensed ESA pros</p>
					<!-- /wp:paragraph -->
				</div>
				<!-- /wp:group -->
			</div>
			<!-- /wp:group -->
		</div>
		<!-- /wp:column -->
	</div>
	<!-- /wp:columns -->
	<!-- wp:columns -->
	<div class="wp-block-columns">
		<!-- wp:column -->
		<div class="wp-block-column">
			<!-- wp:group {"className":"fixora-card","style":{"border":{"radius":"12px"},"color":{"background":"#ffffff"},"shadow":"var:preset|shadow|card","spacing":{"padding":{"top":"0","bottom":"var:preset|spacing|40"}}}} -->
			<div class="wp-block-group fixora-card has-background has-shadow" style="background-color:#ffffff;border-radius:12px;box-shadow:var(--wp--preset--shadow--card);padding-top:0;padding-bottom:var(--wp--preset--spacing--40)">
				<!-- wp:image {"aspectRatio":"16/10","sizeSlug":"large","style":{"border":{"radius":"12px 12px 0 0"}}} -->
				<figure class="wp-block-image size-large" style="border-radius:12px 12px 0 0"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/bathroom-sink.jpg" alt="Modern bathroom sink installation"/></figure>
				<!-- /wp:image -->
				<!-- wp:group {"style":{"spacing":{"padding":{"right":"var:preset|spacing|40","left":"var:preset|spacing|40"}}}} -->
				<div class="wp-block-group" style="padding-right:var(--wp--preset--spacing--40);padding-left:var(--wp--preset--spacing--40)">
					<!-- wp:heading {"level":3,"style":{"typography":{"fontSize":"1.25rem"},"color":{"text":"#0b2a4a"}}} -->
					<h3 class="wp-block-heading has-text-color" style="color:#0b2a4a;font-size:1.25rem">🚿 Drain &amp; Sewer</h3>
					<!-- /wp:heading -->
					<!-- wp:paragraph {"style":{"typography":{"fontSize":"0.95rem"},"color":{"text":"#5b6b7d"}}} -->
					<p class="has-text-color" style="color:#5b6b7d;font-size:0.95rem">Camera inspections, hydro-jetting and trenchless sewer repair.</p>
					<!-- /wp:paragraph -->
					<!-- wp:paragraph {"style":{"typography":{"fontSize":"0.95rem","fontWeight":"700"},"color":{"text":"#f97316"}}} -->
					<p class="has-text-color" style="color:#f97316;font-size:0.95rem;font-weight:700">Camera inspection $149</p>
					<!-- /wp:paragraph -->
				</div>
				<!-- /wp:group -->
			</div>
			<!-- /wp:group -->
		</div>
		<!-- /wp:column -->
		<!-- wp:column -->
		<div class="wp-block-column">
			<!-- wp:group {"className":"fixora-card","style":{"border":{"radius":"12px"},"color":{"background":"#ffffff"},"shadow":"var:preset|shadow|card","spacing":{"padding":{"top":"0","bottom":"var:preset|spacing|40"}}}} -->
			<div class="wp-block-group fixora-card has-background has-shadow" style="background-color:#ffffff;border-radius:12px;box-shadow:var(--wp--preset--shadow--card);padding-top:0;padding-bottom:var(--wp--preset--spacing--40)">
				<!-- wp:image {"aspectRatio":"16/10","sizeSlug":"large","style":{"border":{"radius":"12px 12px 0 0"}}} -->
				<figure class="wp-block-image size-large" style="border-radius:12px 12px 0 0"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/hvac-unit.jpg" alt="Outdoor air conditioning unit"/></figure>
				<!-- /wp:image -->
				<!-- wp:group {"style":{"spacing":{"padding":{"right":"var:preset|spacing|40","left":"var:preset|spacing|40"}}}} -->
				<div class="wp-block-group" style="padding-right:var(--wp--preset--spacing--40);padding-left:var(--wp--preset--spacing--40)">
					<!-- wp:heading {"level":3,"style":{"typography":{"fontSize":"1.25rem"},"color":{"text":"#0b2a4a"}}} -->
					<h3 class="wp-block-heading has-text-color" style="color:#0b2a4a;font-size:1.25rem">🌡️ AC Installation</h3>
					<!-- /wp:heading -->
					<!-- wp:paragraph {"style":{"typography":{"fontSize":"0.95rem"},"color":{"text":"#5b6b7d"}}} -->
					<p class="has-text-color" style="color:#5b6b7d;font-size:0.95rem">High-efficiency systems sized for your home, installed in one day.</p>
					<!-- /wp:paragraph -->
					<!-- wp:paragraph {"style":{"typography":{"fontSize":"0.95rem","fontWeight":"700"},"color":{"text":"#f97316"}}} -->
					<p class="has-text-color" style="color:#f97316;font-size:0.95rem;font-weight:700">10-yr warranty · 0% financing</p>
					<!-- /wp:paragraph -->
				</div>
				<!-- /wp:group -->
			</div>
			<!-- /wp:group -->
		</div>
		<!-- /wp:column -->
		<!-- wp:column -->
		<div class="wp-block-column">
			<!-- wp:group {"className":"fixora-card","style":{"border":{"radius":"12px"},"color":{"background":"#ffffff"},"shadow":"var:preset|shadow|card","spacing":{"padding":{"top":"0","bottom":"var:preset|spacing|40"}}}} -->
			<div class="wp-block-group fixora-card has-background has-shadow" style="background-color:#ffffff;border-radius:12px;box-shadow:var(--wp--preset--shadow--card);padding-top:0;padding-bottom:var(--wp--preset--spacing--40)">
				<!-- wp:image {"aspectRatio":"16/10","sizeSlug":"large","style":{"border":{"radius":"12px 12px 0 0"}}} -->
				<figure class="wp-block-image size-large" style="border-radius:12px 12px 0 0"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/tools-wrench.jpg" alt="Professional plumbing tools"/></figure>
				<!-- /wp:image -->
				<!-- wp:group {"style":{"spacing":{"padding":{"right":"var:preset|spacing|40","left":"var:preset|spacing|40"}}}} -->
				<div class="wp-block-group" style="padding-right:var(--wp--preset--spacing--40);padding-left:var(--wp--preset--spacing--40)">
					<!-- wp:heading {"level":3,"style":{"typography":{"fontSize":"1.25rem"},"color":{"text":"#0b2a4a"}}} -->
					<h3 class="wp-block-heading has-text-color" style="color:#0b2a4a;font-size:1.25rem">🔥 Water Heaters</h3>
					<!-- /wp:heading -->
					<!-- wp:paragraph {"style":{"typography":{"fontSize":"0.95rem"},"color":{"text":"#5b6b7d"}}} -->
					<p class="has-text-color" style="color:#5b6b7d;font-size:0.95rem">Tank and tankless installs, repairs and annual flushing service.</p>
					<!-- /wp:paragraph -->
					<!-- wp:paragraph {"style":{"typography":{"fontSize":"0.95rem","fontWeight":"700"},"color":{"text":"#f97316"}}} -->
					<p class="has-text-color" style="color:#f97316;font-size:0.95rem;font-weight:700">Same-day install available</p>
					<!-- /wp:paragraph -->
				</div>
				<!-- /wp:group -->
			</div>
			<!-- /wp:group -->
		</div>
		<!-- /wp:column -->
	</div>
	<!-- /wp:columns -->
</div>
<!-- /wp:group -->
