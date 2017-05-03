/* global require:true, module:true */
module.exports = {
	plugins: [
		require( 'postcss-import' )(),
		require( 'postcss-cssnext' )( { warnForDuplicates: false } ),
		require( 'cssnano' )()
	]
};
