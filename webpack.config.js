const defaultConfig = require('@wordpress/scripts/config/webpack.config');

module.exports = {
	...defaultConfig,
	entry: {
		editor: '/src/editor.js',
		public: '/src/public.js',
	},
	module: {
		...defaultConfig.module,
		rules: [
			...defaultConfig.module.rules,
			{
				test: /\.svg$/,
				use: {
					loader: 'url-loader',
					options: {
						limit: 8192,
					},
				},
			},
		],
	},
};
