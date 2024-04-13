module.exports = {
	globDirectory: '.',
	globPatterns: [
		'**/*.{php,js,rar,apk,txt,css,scss,config,jpg,png,eot,eot_,svg,ttf,woff,woff2,html,json}'
	],
	swDest: 'sw.js',
	ignoreURLParametersMatching: [
		/^utm_/,
		/^fbclid$/
	]
};