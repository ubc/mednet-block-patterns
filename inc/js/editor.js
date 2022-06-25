wp.blocks.registerBlockStyle('core/group', {
    name: 'hide-group',
    label: 'Hide',
});
wp.blocks.registerBlockStyle('core/read-more', {
    name: 'hide-read-more',
    label: 'Hide',
});

wp.domReady(function () {
    wp.blocks.unregisterBlockStyle('core/quote', 'large');
});