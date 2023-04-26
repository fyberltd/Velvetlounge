var gulp = require('gulp');
var sass = require('gulp-sass');
var cleanCss = require('gulp-clean-css');
var rename = require('gulp-rename');
var terser = require('gulp-terser');
var gulpSequence = require('gulp-sequence');
var autoPrefixer = require('gulp-autoprefixer');
var concat = require('gulp-concat');
var plumber = require('gulp-plumber');
var sourcemaps = require('gulp-sourcemaps');
var errorHandler = require('gulp-error-handle');
var imagemin = require('gulp-image');

//plumber error 
var onError = function(err) {
    console.log(err);
};

//create sourcemaps, convert scss to css, minify and prefix, include bootstrap and jquery
gulp.task('css', function() {
    return gulp.src('app/scss/**/*.scss')
        .pipe(plumber({
            errorHandler: onError
        }))
        .pipe(sourcemaps.init())
        .pipe(sass())
        .pipe(cleanCss())
        .pipe(rename({
            suffix: '.min'
        }))
        .pipe(autoPrefixer({
            overrideBrowserslist: ['last 3 versions'],
            cascade: false
        }))
        .pipe(sourcemaps.write('.'))
        .pipe(gulp.dest('velvet theme/css'));
});

//create sourcemaps, compile into one file, minify
gulp.task('js', function() {
    return gulp.src(['node_modules/bootstrap/dist/js/bootstrap.js', 'app/js/**/*.js'])
        .pipe(sourcemaps.init())
        .pipe(concat('all.js'))
        .pipe(terser())
        .pipe(rename({
            suffix: '.min'
        }))
        .pipe(sourcemaps.write('.'))
        .pipe(gulp.dest('velvet theme/js'));
});

//copy php files to app
gulp.task('phpPush', function() {
    return gulp.src('app/*.php')
        .pipe(plumber({
            errorHandler: onError
        }))
        .pipe(gulp.dest('velvet theme'));
});

gulp.task('imageMin', function() {
    return gulp.src('app/images/**/*')
        .pipe(imagemin())
        .pipe(gulp.dest('velvet theme/images'));
});

gulp.task('imagePush', function() {
    return gulp.src('app/images/*')
        .pipe(gulp.dest('velvet theme/images'));
});

//run functions on file save
gulp.task('watch', function() {
    gulp.watch('app/scss/**/*.scss', gulp.series('css'));
    gulp.watch('app/*.php', gulp.series('phpPush'));
    gulp.watch('app/js/**/*.js', gulp.series('js'));
    gulp.watch('app/images/**/*', gulp.series('imagePush'));
    return;
});

//run all functions
gulp.task('default', gulp.parallel('css', 'js', 'phpPush', 'imagePush'));