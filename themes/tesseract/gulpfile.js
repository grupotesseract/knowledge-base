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
  rename       = require('gulp-rename'),
  browserSync  = require('browser-sync'),
  reload       = browserSync.reload;

  styles = {
    base:    './assets/less',
    src:     './assets/less/theme.less',
    dest:    './assets/css',
    options: { outputStyle: 'compressed' }
  },

  bsFiles = [
    './assets/css/**/*.css',
    './layouts/**/*.htm',
    './pages/**/*.htm',
    './partials/**/*.htm',
  ];

// Styles
gulp.task('styles', function () {
  return gulp.src(styles.src, { base: styles.base })
    .pipe(less(styles.options))
    .pipe(autoprefixer('last 2 version'))
    .pipe(gulp.dest(styles.dest))
    .pipe(reload({ stream: true }));
});

// BrowserSync
gulp.task('browser-sync', function () {
  browserSync.init({
    logPrefix:  'Grupo Tesseract | Knowledge Base',
    host:       'local.kb.grupotesseract.com.br',
    files:      bsFiles,
    port:       3000,
    open:       false,
    notify:     false,
    ui:         false,
    logSnippet: false
  });
});

// Default
gulp.task('default', ['styles'], function () {
  gulp.start('browser-sync');
  gulp.watch(styles.src, ['styles']);
});
