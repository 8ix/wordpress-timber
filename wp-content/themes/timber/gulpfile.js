const { watch, series } = require('gulp');
var gulp = require('gulp');
var sass = require('gulp-sass');

function clean(cb) {
  // body omitted
  cb();
}

function javascript(cb) {
  // body omitted
  cb();
}

function scss(cb) {
  gulp.src(['theme.scss'])
        .pipe(sass({outputStyle: 'compressed'}))
        .pipe(gulp.dest('dist'));
  cb();
}

exports.default = function() {
  // You can use a single task
  watch(['*.scss','**/*.scss','**/**/*.scss'], scss);
  // Or a composed task
  watch('src/*.js', series(clean, javascript));
};