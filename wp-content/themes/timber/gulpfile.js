const { watch, series } = require('gulp');
var gulp = require('gulp');
var sass = require('gulp-sass');
var browserSync = require('browser-sync').create();
var ts = require("gulp-typescript");
var tsProject = ts.createProject("tsconfig.json");

function typescript(cb) {
  tsProject.src().pipe(tsProject()).js.pipe(gulp.dest("dist"));
  cb();
}

function scss(cb) {
  gulp.src(['theme.scss'])
        .pipe(sass({outputStyle: 'compressed'}))
        .pipe(gulp.dest('dist'));
  cb();
}

exports.default = function() {

  browserSync.init({
      proxy: "wordpress-timber.test"
  });

  // You can use a single task
  watch(['*.scss','**/*.scss','**/**/*.scss'], scss);
  // Or a composed task
  watch(['scripts/*.ts','scripts/**/*.ts','scripts/**/**/*.ts'], typescript);
  gulp.watch(['*.scss','**/*.scss','**/**/*.scss','scripts/*.ts','scripts/**/*.ts','scripts/**/**/*.ts']).on('change', browserSync.reload);
};