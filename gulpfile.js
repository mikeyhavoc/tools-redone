const gulp   = require("gulp");
const sass   =require("gulp-sass");
const gutil  = require("gulp-util");
const image   = require("gulp-image");
const newer   = require("gulp-newer");
const debug   = require("gulp-debug");
const series   = require("gulp-series");
const rigger   = require("gulp-rigger");
const notify   = require("gulp-notify");
const browserSync   = require("browser-sync");
const sourcemaps   = require("gulp-sourcemaps");
const {phpMinify}   = require("@cedx/gulp-php-minify");
const imageOptim   = require("gulp-imageoptim");
const htmlclean   = require("gulp-htmlclean");

const paths = {
    src: 'src/**/*',
    srcPhp: 'src/**/*.php',
    srcSass: 'src/public/sass/**/*.sass',
    srcCss: 'src/public/css/**/*.css',
    srcJs: 'src/public/js/**/*.js',
    srcImg: 'src/public/img/**/*.jpg',


    dist: 'dist/',
    distIndex: 'dist/Index.php',
    distPhp: 'dist/',
    distCss: 'dist/public/css/',
    distJs: 'dist/public/js/',
    distImg: 'dist/public/img/',

};


// SASS
// gulp.task('sass', function () {
//     return gulp.src(paths.srcSass)
//         .pipe(newer(paths.distCss))
//        // .pipe(sourcemaps.init())
//         .pipe(sass({
//             outputStyle: 'compressed',
//             }).on('error', sass.logError))
//        // .pipe(sourcemaps.write())
//         .pipe(gulp.dest(paths.distCss))
//         .pipe(debug({ title: 'sass:' }))
// });


gulp.task('scss', function () {
    return gulp.src('public/sass/main.scss')
        .pipe(sass().on('error', sass.logError))
        .pipe(gulp.dest('public/css'));
});





// rigger
gulp.task('js', function() {
    return gulp.src(paths.srcJs)
        .pipe(newer(paths.distJs))
        .pipe(rigger())
        .pipe(gulp.dest(paths.distJs))
        .pipe(debug({ title: 'JS:' }))
});

gulp.task('image', function() {
    return gulp.src(paths.srcImg)
        .pipe(imageOptim.optimize())
        .pipe(gulp.dest(paths.distImg));
});

// PHP

gulp.task('php-copy', function() {
    return gulp.src(paths.srcPhp)
        .pipe(newer(paths.dist))
        .pipe(gulp.dest(paths.dist));
});

gulp.task('browser-sync', function () {
    browserSync.init({
        server: {
            baseDir: paths.dist
        }
    })
});


// watch
gulp.task('watch', ['php-copy','sass', 'js', 'browser-sync'], function() {
    gulp.watch(paths.srcSass, ['sass']);
    gulp.watch(paths.distCss, browserSync.reload);


    gulp.watch(paths.srcJs, ['js'], );
    gulp.watch(paths.distJs, browserSync.reload)
    gulp.watch(paths.srcImg, ['image']);
    gulp.watch(paths.distImg, browserSync.reload);
    gulp.watch(paths.srcPhp, ['php-copy']);
    gulp.watch(paths.distPhp, browserSync.reload);

});

// build
gulp.task('default', ['watch'])