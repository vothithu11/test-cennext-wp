const gulp = require('gulp');
const sass = require('gulp-sass')(require('sass'));
const cleanCSS = require('gulp-clean-css');
const concat = require('gulp-concat');
const uglify = require('gulp-uglify');

// =========================
// Styles
// =========================
function styles() {
  return gulp.src('./assets/scss/style.scss')
    .pipe(sass().on('error', sass.logError))
    .pipe(cleanCSS())
    .pipe(concat('style.min.css'))
    .pipe(gulp.dest('./assets/dist'));
}

// =========================
// Scripts
// =========================
function scripts() {
  return gulp.src('./assets/js/*.js')
    .pipe(concat('production.min.js'))
    .pipe(uglify())
    .pipe(gulp.dest('./assets/dist'));
}

// =========================
// Watch
// =========================
function watchFiles() {
  gulp.watch('./assets/scss/**/*.scss', styles);
  gulp.watch('./assets/js/**/*.js', scripts);
}

// =========================
// Tasks
// =========================
exports.styles = styles;
exports.scripts = scripts;
exports.watch = watchFiles;

// Default = build once + watch
exports.default = gulp.series(
  gulp.parallel(styles, scripts),
  watchFiles
);