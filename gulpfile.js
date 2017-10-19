// Defining requirements
var gulp 	= require('gulp');
var browserSync 	= require('browser-sync').create();

// browser-sync watched files
// automatically reloads the page when files changed
var browserSyncWatchFiles = [
    './template-parts/*.php',
	'*.php',
	'*.css',
];

// browser-sync options
// see: https://www.browsersync.io/docs/options/
var browserSyncOptions = {
    proxy: "localhost/kuttappi/",
    notify: false
};

// Run:
// gulp browser-sync
// Starts browser-sync task for starting the server.
gulp.task('browser-sync', function() {
    browserSync.init(browserSyncWatchFiles, browserSyncOptions);
});