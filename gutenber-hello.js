var el = wp.element.createElement,
    registerBlockType = wp.blocks.registerBlockType,
    blockStyle = { backgroundColor: '#900', color: '#fff', padding: '20px' };

registerBlockType( 'gutenberg-hello-plugin/gutenberg-hello', {
    title: 'gutenberg-hello v0.1',

    icon: 'universal-access-alt',

    category: 'layout',

    edit: function() {
        return el( 'p', { style: blockStyle }, 'Hello editor.' );
    },

    save: function() {
        return el( 'p', { style: blockStyle }, 'Hello saved content.' );
    },
} );

console.log("This is working");