/**
 * Grupo Tesseract | Knowledge Base - Gulpfile
 *
 * Installation:
 *
 *   npm i -g gulp-cli
 *   npm i
 *   gulp
 */

const gulp     = require('gulp'),
  less         = require('gulp-less'),
  autoprefixer = require('gulp-autoprefixer'),
  sourcemaps   = require('gulp-sourcemaps'),
  browserSync  = require('browser-sync'),
  reload       = browserSync.reload;

// Styles
gulp.task('styles', function () {
  return gulp.src(['./assets/less/theme.less', './assets/less/vendor.less'])
    .pipe(sourcemaps.init())
    .pipe(less({ outputStyle: 'compressed' }))
    .pipe(autoprefixer('last 2 version'))
    .pipe(sourcemaps.write('.'))
    .pipe(gulp.dest('./assets/css'))
    .pipe(reload({ stream: true }));
});

// BrowserSync
gulp.task('browser-sync', function () {
  browserSync.init({
    logPrefix:  'Grupo Tesseract | Knowledge Base',
    host:       'local.kb.grupotesseract.com.br',
    port:       3000,
    open:       false,
    notify:     false,
    ui:         false,
    logSnippet: false,
    files:      [
      './assets/css/theme.css',
      '../../plugins/**/*.htm',
      '../../plugins/**/*.php',
      '!../../data'
    ]
  });
});

// Default
gulp.task('default', ['styles'], function () {
  gulp.start('browser-sync');
  gulp.watch('./assets/less/**/*.less', ['styles']);
});

// Production
gulp.task('production', ['styles']);
