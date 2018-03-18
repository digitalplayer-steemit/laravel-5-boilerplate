'use strict';

var gulp = require('gulp'),
    watch = require('gulp-watch'),
    prefixer = require('gulp-autoprefixer'),
    uglify = require('gulp-uglify'),
    sass = require('gulp-sass'),
    sourcemaps = require('gulp-sourcemaps'),
    rigger = require('gulp-rigger'),
    imagemin = require('gulp-imagemin'),
    pngquant = require('imagemin-pngquant');

var path = {
    build: {
        js: 'assets/js/',
        css: 'assets/css/',
        images: 'assets/images/',
        fonts: 'assets/fonts/'
    },
    src: {
        js: 'assets/src/js/main.js',
        sass: 'assets/src/sass/main.scss',
        images: 'assets/src/images/**/*.*',
        fonts: 'assets/src/fonts/**/*.*'
    },
    watch: {
        js: 'assets/src/js/**/*.js',
        sass: 'assets/src/sass/**/*.scss',
        images: 'assets/src/images/**/*.*',
        fonts: 'assets/src/fonts/**/*.*'
    },
    clean: './assets'
};

gulp.task('js:build', function () {
    gulp.src(path.src.js)
        .pipe(rigger())
        .pipe(sourcemaps.init())
        .pipe(uglify())
        .pipe(sourcemaps.write())
        .pipe(gulp.dest(path.build.js));
});

gulp.task('sass:build', function () {
    gulp.src(path.src.sass)
        .pipe(sourcemaps.init())
        .pipe(sass({
            sourceMap: true,
            errLogToConsole: true
        }))
        .pipe(prefixer())
        .pipe(sourcemaps.write())
        .pipe(gulp.dest(path.build.css));
});

gulp.task('images:build', function () {
    gulp.src(path.src.images)
        .pipe(imagemin({
            progressive: true,
            svgoPlugins: [{removeViewBox: false}],
            use: [pngquant()],
            interlaced: true
        }))
        .pipe(gulp.dest(path.build.images));
});

gulp.task('fonts:build', function() {
    gulp.src(path.src.fonts)
        .pipe(gulp.dest(path.build.fonts))
});

gulp.task('build', [
    'js:build',
    'sass:build',
    'fonts:build',
    'images:build'
]);


gulp.task('watch', function(){
    gulp.task('watch', function() {
        gulp.watch(path.watch.sass, ['sass:build']);
        gulp.watch(path.watch.js, ['js:build']);
        gulp.watch(path.watch.images, ['images:build']);
        gulp.watch(path.watch.fonts, ['fonts:build']);
    });
});


gulp.task('default', ['build', 'watch']);