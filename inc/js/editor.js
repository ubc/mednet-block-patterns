wp.blocks.registerBlockStyle('core/quote', {
    name: 'fancy-quote',
    label: 'Fancy Quote',
});

wp.domReady(function() {
    alert("loaded");
    wp.blocks.unregisterBlockStyle('core/quote', 'large');
});