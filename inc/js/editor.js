wp.blocks.registerBlockStyle('core/quote', {
    name: 'fancy-quote',
    label: 'Fancy Quote',
});

wp.domReady(function() {
    wp.blocks.unregisterBlockStyle('core/quote', 'large');
});