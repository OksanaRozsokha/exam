var gulp = require('gulp'),
    sass = require('gulp-sass'),
    autoprefixer = require('gulp-autoprefixer'),
    cssnano = require('gulp-cssnano'),
    rename = require("gulp-rename"),
    concat = require('gulp-concat'),
    clean = require('gulp-clean'),
    watch = require('gulp-watch'),
    browserSync = require("browser-sync").create(),
    reload = browserSync.reload;
    runSequence = require('run-sequence');


var config = {
    'php': {
        'src': './**/*.php'
    },
    'sass': {
        'src': './sass/**/*.scss',
        'dest': './css'

    },
    'js': {
        'src': [
            './node_modules/jquery/dist/jquery.min.js',
            './node_modules/tether/dist/js/tether.min.js',
            './node_modules/bootstrap/dist/js/bootstrap.min.js',
            './node_modules/owl.carousel/dist/owl.carousel.min.js',
            './js/js/*.js'
        ],
        'dest': './js'
    }
};



gulp.task('php-files', function() {
    return gulp.src(config.php.src)
        .pipe(browserSync.reload({
            stream: true
        }))
});


gulp.task('styles', function() {
    return gulp.src([config.sass.src])
        .pipe(sass().on('error', sass.logError))
        .pipe(rename({ suffix: '.min' }))
        .pipe(cssnano())
        .pipe(autoprefixer({
            browsers: '> 5%'
        }))
        .pipe(gulp.dest(config.sass.dest))
        .pipe(browserSync.reload({
            stream: true
        }))

});


gulp.task('js', function () {
    return gulp.src(config.js.src)
        .pipe(concat('all.min.js'))
        .pipe(gulp.dest(config.js.dest));
});

gulp.task('clean', function () {
    return gulp.src(config.sass.dest, {read: false})
        .pipe(clean());
});

gulp.task('build', function (callback) {
    runSequence('clean',[ 'styles', 'js'], callback)
});

gulp.task('browser-sync', ['styles'], function() {
    browserSync.init({
           notify: false,
           proxy: "http://exam/"
    });
});


gulp.task('watch',['browser-sync', 'styles', 'php-files', 'js'], function () {
    gulp.watch(config.sass.src, ['styles']);
    gulp.watch(config.php.src, ['php-files']);
    gulp.watch('./js/js/*.js',['js']);
});

gulp.task('default', function (callback) {
    runSequence(['styles','browser-sync', 'watch'],
        callback
    )
});