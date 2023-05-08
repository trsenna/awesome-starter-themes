<?php
/*
 * Title: Default footer
 * Slug: twentytwentytwo-starter/footer-default
 * Categories: footer
 * Block Types: core/template-part/footer
 */
?>

<!-- wp:group {"align":"full","layout":{"inherit":true}} -->
<div class="wp-block-group alignfull">
	<!-- wp:group {"align":"wide","style":{"spacing":{"padding":{"top":"4rem","bottom":"4rem"}}},"layout":{"type":"flex","justifyContent":"space-between"}} -->
	<div class="wp-block-group alignwide" style="padding-top:4rem;padding-bottom:4rem">
		<!-- wp:site-title {"level":0} /-->
		<!-- wp:paragraph {"align":"right"} -->
		<p class="has-text-align-right">
			<?php
			printf(
				esc_html__('Proudly powered by %s', 'twentytwentytwo-starter'),
				'<a href="' . esc_url(__('https://wordpress.org', 'twentytwentytwo-starter')) . '" rel="nofollow">WordPress</a>'
			)
			?>
		</p>
		<!-- /wp:paragraph -->
	</div>
	<!-- /wp:group -->
</div>
<!-- /wp:group -->