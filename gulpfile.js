// Defining requirements
var gulp 	= require('gulp');
var browserSync 	= require('browser-sync').create();

// browser-sync watched files
// automatically reloads the page when files changed
var browserSyncWatchFiles = [
    './template-parts/*.php',
	'*.php',
	'*.css',
	'./assets/js/*.js',
];

// browser-sync options
// see: https://www.browsersync.io/docs/options/
var browserSyncOptions = {
    proxy: "localhost/mysite/", //<-- Edit me
    notify: false
};

// Run:
// gulp browser-sync
// Starts browser-sync task for starting the server.
gulp.task('bs', function() {
    browserSync.init(browserSyncWatchFiles, browserSyncOptions);
});