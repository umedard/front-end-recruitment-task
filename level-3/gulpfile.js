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
gulp.task('php', function () {
    php.server({ base: './', port: 1337, keepalive: true });
});

// browserSync - this is our helper, improving development
gulp.task('browserSync', ['php'], function () {
    browserSync.init({
        port: 2137,
        proxy: "localhost:1337",
        baseDir: "./",
        open: true,
        notify: true
    });
});

// Main task
gulp.task('serve', ['browserSync'], function () {
    gulp.watch(['./*.php', './views/**/*.html'], browserSync.reload);
});