const { select, subscribe } = wp.data;

const closeListener = subscribe(() => {
	const isReady = select('core/editor').__unstableIsEditorReady();
	if (!isReady) {
		// Editor not ready.
		return;
	}
	// Close the listener as soon as we know we are ready to avoid an infinite loop.
	closeListener();
	// Your code is placed after this comment, once the editor is ready.
	registerQueryVariation();
});

function getCurrentPostId() {
	const post_id = wp.data.select('core/editor').getCurrentPostId();
	console.log('post is ', wp.data.select('core/editor').getCurrentPostId());
	return post_id;
}

function registerQueryVariation() {
	wp.blocks.registerBlockVariation('core/query', {
		name: 'query-content',
		title: 'new query',
		attributes: {
			query: {
				exclude: getCurrentPostId(),
			},
		},
		innerBlocks: [
			['core/post-template', [['core/post-title'], ['core/post-date']]],
			['core/query-pagination'],
			['core/query-no-results'],
		],
		isDefault: true,
	});
}

wp.blocks.registerBlockVariation('core/group', {
	name: 'full-width-group',
	title: 'Full width group',
	attributes: {
		align: 'full',
	},
	isDefault: true,
});
