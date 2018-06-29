/* global require:true */

const gulp = require( 'gulp' );
const imagemin = require( 'gulp-imagemin' );
const postcss = require( 'gulp-postcss' );
const sourcemaps = require( 'gulp-sourcemaps' );

gulp.task( 'default', () => {
	gulp.src( 'css/style.css' )
		.pipe( sourcemaps.init() )
		.pipe( postcss() )
		.pipe( sourcemaps.write( '.' ) )
		.pipe( gulp.dest( '' ) );
} );

gulp.task( 'watch', () => {
	gulp.start( 'default' );
	gulp.watch( 'css/*.css', [ 'default' ] );
} );

gulp.task( 'imagemin', () => {
	gulp.src( 'img/src/**/*.*' )
		.pipe( imagemin() )
		.pipe( gulp.dest( 'img' ) );
} );

gulp.task( 'updatefontawesome', () => {
	gulp.src( '../../node_modules/font-awesome/fonts/*.*' )
		.pipe( gulp.dest( 'fonts' ) );
} );
