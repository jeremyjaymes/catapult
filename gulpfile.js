var gulp = require('gulp');
var gulpif = require('gulp-if');

var filesToMove = [
        'vendor/webdevstudios/cmb2/**/*',
        '!vendor/webdevstudios/cmb2/{tests,tests/**}',
        '!vendor/webdevstudios/cmb2/Dockunit.json',
        '!vendor/webdevstudios/cmb2/package.json',
        '!vendor/webdevstudios/cmb2/.scrutinizer.yml',
        '!vendor/webdevstudios/cmb2/.travis.yml',
        '!vendor/webdevstudios/cmb2/coverage.clover',
        '!vendor/webdevstudios/cmb2/phpunit.xml.dist',
        '!vendor/webdevstudios/cmb2/Gruntfile.js',
        '!vendor/webdevstudios/cmb2/composer.json'
    ];

gulp.task('copycmb', function() {
   gulp.src(filesToMove)
   .pipe(gulp.dest('library/test/cmb2'));
});
