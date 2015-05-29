var gulp = require("gulp");
var config = require("../config");
var watch = require("gulp-watch");

gulp.task("watch", ["watchify"], function(callback) {
  watch(config.sass.src, function() {
    gulp.start("sass");
  });

  watch(config.images.src, function() {
    gulp.start("images");
  });
});