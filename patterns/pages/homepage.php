<!-- wp:group {"className":"homepage"} -->
<div class="wp-block-group homepage">
	<?php require MBP_PATTERNS_FOLDER . 'components/alert_banner.php'; ?>
<!-- wp:group -->
<div class="wp-block-group"><!-- wp:heading {"level":1,"style":{"typography":{"fontSize":"54px","letterSpacing":"-0.54px"},"color":{"text":"#002145"}}} -->
<h1 class="has-text-color" style="color:#002145;font-size:54px;letter-spacing:-0.54px">
			Welcome to MedNet
		</h1>
<!-- /wp:heading -->

<!-- wp:paragraph {"style":{"typography":{"fontSize":"18px"}}} -->
<p style="font-size:18px">
		Updates and resources for faculty and staff at UBC&rsquo;s Faculty of Medicine
	</p>
<!-- /wp:paragraph -->

<!-- wp:spacer {"height":"55px"} -->
<div style="height:55px" aria-hidden="true" class="wp-block-spacer"></div>
<!-- /wp:spacer --></div>
<!-- /wp:group -->
	<!-- wp:columns -->
	<div class="wp-block-columns">
		<!-- wp:column {"width":"100%", "className":"fill-container"} -->
		<div class="wp-block-column fill-container" style="flex-basis: 100%">
			<?php require MBP_PATTERNS_FOLDER . 'components/announcements_block.php'; ?>
		</div>
		<!-- /wp:column -->

		<!-- wp:column {"width":"260px"} -->
		<div class="wp-block-column" style="flex-basis: 260px">
			<!-- wp:group -->
			<div class="wp-block-group">
				<!-- wp:heading {"level":3,"className":"quicklinks"} -->
				<h3 class="quicklinks">Quicklinks</h3>
				<!-- /wp:heading -->

				<!-- wp:list {"className":"quicklinks_list"} -->
				<ul class="quicklinks_list">
					<li>
						<a rel="noreferrer noopener" href="/" target="_blank"
							>Entrada</a
						>
					</li>
					<li>
						<a rel="noreferrer noopener" href="/" target="_blank"
							>Workday</a
						>
					</li>
					<li>
						<a rel="noreferrer noopener" href="/" target="_blank"
							>TTPS</a
						>
					</li>
					<li>
						<a rel="noreferrer noopener" href="/" target="_blank"
							>Book a Room</a
						>
					</li>
					<li>
						<a rel="noreferrer noopener" href="/" target="_blank"
							>Contact List</a
						>
					</li>
					<li>
						<a rel="noreferrer noopener" href="/" target="_blank"
							>Communications Office</a
						>
					</li>
					<li>
						<a rel="noreferrer noopener" href="/" target="_blank"
							>IT Helpdesk</a
						>
					</li>
				</ul>
				<!-- /wp:list -->

				<!-- wp:spacer {"height":"48px"} -->
				<div
					style="height: 48px"
					aria-hidden="true"
					class="wp-block-spacer"
				></div>
				<!-- /wp:spacer -->
			</div>
			<!-- /wp:group -->

			<!-- wp:group {"style":{"color":{"background":"#f2f2f2"}},"className":"featured_resource"} -->
			<div
				class="wp-block-group featured_resource has-background"
				style="background-color: #f2f2f2"
			>
				<!-- wp:group -->
				<div class="wp-block-group">
					<!-- wp:image {"id":484,"width":125,"height":178,"sizeSlug":"full","linkDestination":"none"} -->
					<figure class="wp-block-image size-full is-resized">
						<img
							src="/wp-content/plugins/mednet-block-patterns/includes/assets/images/Icon_Home-FeaturedResource@2x.png"
							alt=""
							class="wp-image-484"
							width="125"
							height="178"
						/>
					</figure>
					<!-- /wp:image -->

					<!-- wp:heading {"level":3,"style":{"color":{"text":"#002145"},"typography":{"fontSize":"0.875rem"}}} -->
					<h3
						class="has-text-color"
						style="color: #002145; font-size: 0.875rem"
					>
						FEATURED RESOURCE
					</h3>
					<!-- /wp:heading -->
				</div>
				<!-- /wp:group -->

				<!-- wp:paragraph {"style":{"typography":{"fontSize":"14px"},"color":{"text":"#002145"}}} -->
				<p
					class="has-text-color"
					style="color: #002145; font-size: 14px"
				>
					Lorem ipsum dolor sit amet, adipisicing elit, sed do eiusmod
					tempor incididunt.
				</p>
				<!-- /wp:paragraph -->

				<!-- wp:paragraph {"style":{"typography":{"fontSize":"16px"}}} -->
				<p style="font-size: 16px">Frequently Asked Questions</p>
				<!-- /wp:paragraph -->

				<!-- wp:paragraph {"style":{"typography":{"fontSize":"16px"},"color":{"text":"#002145"}}} -->
				<p
					class="has-text-color"
					style="color: #002145; font-size: 16px"
				>
					<a
						href="/resource"
						data-type="URL"
						data-id="/resource"
						target="_blank"
						rel="noreferrer noopener"
						>Resource Link</a
					>
				</p>
				<!-- /wp:paragraph -->

				<!-- wp:paragraph {"style":{"typography":{"fontSize":"16px"},"color":{"text":"#002145"}}} -->
				<p
					class="has-text-color"
					style="color: #002145; font-size: 16px"
				>
					Resource Link
				</p>
				<!-- /wp:paragraph -->
			</div>
			<!-- /wp:group -->
		</div>
		<!-- /wp:column -->
	</div>
	<!-- /wp:columns -->
	
	<?php require MBP_PATTERNS_FOLDER . 'components/events_list.php'; ?>
	<?php require MBP_PATTERNS_FOLDER . 'components/spotlight_cards.php'; ?>

	<!-- wp:columns -->
	<div class="wp-block-columns">
		<!-- wp:column -->
		<div class="wp-block-column">
			<?php require MBP_PATTERNS_FOLDER . 'components/content_card.php'; ?>
		</div>
		<!-- /wp:column -->

		<!-- wp:column -->
		<div class="wp-block-column">
			<?php require MBP_PATTERNS_FOLDER . 'components/content_card.php'; ?>
		</div>
		<!-- /wp:column -->
	</div>
	<!-- /wp:columns -->

	<!-- wp:separator {"style":{"color":{"background":"#e6e6e6"}},"className":"is-style-wide"} -->
	<hr
		class="wp-block-separator has-text-color has-alpha-channel-opacity has-background is-style-wide"
		style="background-color: #e6e6e6; color: #e6e6e6"
	/>
	<!-- /wp:separator -->

	<?php require MBP_PATTERNS_FOLDER . 'pages/news-and-honours-section.php'; ?>
</div>
<!-- /wp:group -->
