const defaultConfig = require('@wordpress/scripts/config/webpack.config');

module.exports = {
	...defaultConfig,
	entry: {
		editor: '/src/editor.js',
	},
	module: {
		...defaultConfig.module,
		rules: [
			...defaultConfig.module.rules
		],
	},
};
