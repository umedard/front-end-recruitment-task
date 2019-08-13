var gulp = require('gulp');
var php = require('gulp-connect-php');
var browserSync = require('browser-sync').create();
var log = require('fancy-log');

// Make sure that v10.16.0 is used
if (process.version !== 'v10.16.0') {
    log.error('Wrong version of node! v10.16.0 is needed, current version: ' + process.version);
    process.exit();
}

// Start PHP local server (TWIG)
gulp.task('php', function() {
    php.server({base:'./', port:8010, keepalive:true});
});

// browserSync - this is our helper, improving development
gulp.task('browserSync',['php'], function() {
    browserSync.init({
        proxy:"localhost:8010",
        baseDir: "./",
        open:true,
        notify:false
    });
});

// Main task
gulp.task('serve', [ 'browserSync'], function() {    
    gulp.watch('./*.php', browserSync.reload);
});