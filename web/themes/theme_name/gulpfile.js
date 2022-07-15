const gulp = require('gulp');
const autoprefixer = require('autoprefixer');
const notify = require('gulp-notify');
const plumber = require('gulp-plumber');
const sass = require('gulp-sass')(require('sass'));
const sourcemaps = require('gulp-sourcemaps');
const postcss = require('gulp-postcss');
const imagemin = require('gulp-imagemin');
const imageminMozjpeg = require('imagemin-mozjpeg'); // Need to run 'brew install libpng'
const babel = require('gulp-babel');

// const config = require('./gulpconf');


// Title used for system notifications
const notifyInfo = {
    title: 'Gulp',
};

// Error notification settings for plumber
const plumberErrorHandler = {
    errorHandler: notify.onError({
        title: notifyInfo.title,
        icon: notifyInfo.icon,
        message: 'Error: <%= error.message %>',
    }),
};

// Optimize Images
function images() {
    return gulp
        .src(['./assets/**/*.{gif,png,jpg,jpeg,svg}'])
        .pipe(
            imagemin([
                imagemin.gifsicle({ interlaced: true }),
                imagemin.jpegtran({ progressive: true }),
                imagemin.optipng({ optimizationLevel: 5 }),
                imageminMozjpeg({ quality: 90 }),
                imagemin.svgo({
                    plugins: [{
                        removeViewBox: false,
                        collapseGroups: true,
                        removeComments: true,
                    }, ],
                }),
            ]),
        )
        .pipe(
            gulp.dest(function setFile(file) {
                return file.base;
            }),
        );
}

// CSS development task
function css() {
    return gulp
        .src('./scss/main.scss', { sourcemaps: true })
        .pipe(plumber(plumberErrorHandler))
        .pipe(sourcemaps.init())
        .pipe(sass({ outputStyle: 'expanded' }))
        .pipe(
            postcss([
                autoprefixer({
                    overrideBrowserslist: ['> 1%', 'last 3 versions', 'Firefox >= 20', 'iOS >=7'],
                    grid: 'autoplace',
                }),
            ]),
        )
        .pipe(sourcemaps.write('./maps'))
        .pipe(gulp.dest('./css/'))
}

function js() {
    return gulp
        .src(['./js/**/*.js', '!./js/_compiled/**/*.js'])
        .pipe(plumber())
        .pipe(babel())
        .pipe(gulp.dest('./js/_compiled/'))
}

// Watch files
function watchFiles() {
    gulp.watch('./scss/**/*', css);
    gulp.watch(['./js/**/*.js', '!./js/_compiled/**/*.js'], js);
}

// Watch files during development
const watch = gulp.parallel(watchFiles);

// Export tasks
exports.images = images;
exports.css = css;
exports.js = js;
exports.watch = watch;
exports.default = watch;