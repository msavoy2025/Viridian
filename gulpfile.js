var gulp = require('gulp'),
    sass = require('gulp-dart-sass'),
    autoprefixer = require('gulp-autoprefixer'),
    uglify = require('gulp-uglify'),
    rename = require('gulp-rename'),
    concat = require('gulp-concat'),
    notify = require('gulp-notify'),
    browserSync = require('browser-sync').create(),
    cleanCSS = require('gulp-clean-css'),
    postcss = require('gulp-postcss'),
    assets = require('postcss-assets');
    
gulp.task('scripts', function () {
    return gulp.src([''])
        .pipe(concat('./assets/js/bundle.js'))
        .pipe(gulp.dest('.'))
        .pipe(rename({ suffix: '.min' }))
        .pipe(uglify())
        .pipe(gulp.dest('.'))
        .pipe(notify({ message: 'Scripts task complete' }));
});  

gulp.task('styles', function () {
    return gulp.src('./assets/scss/bundle.scss')
        .pipe(sass({ outputStyle: 'expanded' }).on('error', sass.logError))
        .pipe(autoprefixer('last 2 versions'))
        .pipe(gulp.dest('./dist/css'))
        .pipe(rename({ suffix: '.min' }))
        .pipe(cleanCSS('level: 2'))
        .pipe(gulp.dest('./dist/css'))
        .pipe(browserSync.stream())
        .pipe(notify({ message: 'Styles task complete' }));
});

gulp.task('serve', function () {

    browserSync.init({
        proxy: "viridian.local"
    });

    gulp.watch(['./**/*.scss', '!./node_modules/', '!./.git/'], gulp.series('styles'));

    gulp.watch(['./**/*.*', '!./node_modules/', '!./.git/', '!./**/*.scss', '!./theme.css', '!./theme.min.css']).on('change', browserSync.reload);

});

gulp.task('watch', function () {
    gulp.watch(['./**/*.scss', '!./node_modules/', '!./.git/'], gulp.series('styles'));
});

