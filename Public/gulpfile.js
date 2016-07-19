var gulp = require('gulp');
var watch = require('gulp-watch');
var sass = require('gulp-sass');
var autoprefixer = require('gulp-autoprefixer');
var uglify = require('gulp-uglify');
var browserSync = require('browser-sync').create();
var reload      = browserSync.reload;



gulp.task('sass', function () {

    return gulp.src("./sass/*.scss")
        .pipe(watch('./sass/*.scss'))
        .pipe(sass({outputStyle:'compressed'}).on('error', sass.logError))
        .pipe(gulp.dest('./dist/css'))
        .pipe(reload({stream: true}));
});

gulp.task('autoprefixer', function () {
    return gulp.src('./dist/css/*.css')
        .pipe(watch('./dist/css/*.css'))
        .pipe(autoprefixer({
            browsers: ['last 2 versions'],
            cascade: false
        }))
        .pipe(gulp.dest('./dist/css'));
});

gulp.task('browser-sync', function() {

    browserSync.init({
        server: "./"
    });

    gulp.watch("sass/*.scss", ['sass','autoprefixer']);
    gulp.watch(["*.html","./view/*.html"]).on('change', reload);

});


gulp.task('default', ['browser-sync','sass','autoprefixer']);