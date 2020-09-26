Featconst { watch, series } = require('gulp');

function clean(cb) {
  // body omitted
  cb();
}

function javascript(cb) {
  // body omitted
  cb();
}

function scss(cb) {
  // body omitted
  cb();
}

exports.default = function() {
  watch('src/*.css', scss);
  watch('src/*.js', series(clean, javascript));
};