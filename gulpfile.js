const gulp = require('gulp');
const sass = require('gulp-sass')(require('node-sass'));
const uglifycss = require('gulp-uglifycss');
const phpindex = require('gulp-connect-php');
const browserSync = require('browser-sync').create();

//compile scss into css
function styleDefault() {
    return gulp.src([
            'assets/scss/styles.scss',
        ])
        .pipe(sass().on('error', sass.logError))
        .pipe(uglifycss({
            "maxLineLean": 80,
            "uglyComments": true
        }))
        .pipe(gulp.dest('assets/css/'))
        .pipe(browserSync.stream());
}
function styleDefaultMobile() {
    return gulp.src([
            'assets/scss/styles-mobile.scss',
        ])
        .pipe(sass().on('error', sass.logError))
        .pipe(uglifycss({
            "maxLineLean": 80,
            "uglyComments": true
        }))
        .pipe(gulp.dest('assets/css/'))
        .pipe(browserSync.stream());
}

function watch() {
    phpindex.server({
        port: 8888
    }, function () {
        browserSync.init({
            proxy: {
                target: "localhost/lp-hft",
            }
        });
    })

    gulp.watch([
        'assets/scss/*.scss',
    ], styleDefault);
    gulp.watch([
        'assets/scss/*.scss',
    ], styleDefaultMobile);
    gulp.watch([
        '*.php',
        '*.html',
        'assets/js/*.js',
        'assets/scss/*.scss'
    ]).on('change', browserSync.reload);
}
exports.watch = watch;