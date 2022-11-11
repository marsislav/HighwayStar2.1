import gulp from "gulp";
import yargs from "yargs";
import cleanCSS from "gulp-clean-css";
import gulpif from "gulp-if";
import sourcemaps from "gulp-sourcemaps";
//import sass from "gulp-sass";
const sass = require("gulp-sass")(require("sass"));
const PRODUCTION = yargs.argv.prod;

export const styles = () => {
  console.log(PRODUCTION);
  return gulp
    .src("src/assets/scss/bundle.scss")
    .pipe(gulpif(!PRODUCTION, sourcemaps.init()))
    .pipe(sass().on("error", sass.logError))
    .pipe(gulpif(PRODUCTION, cleanCSS({ compatibility: "ie8" })))
    .pipe(gulpif(!PRODUCTION, sourcemaps.write()))
    .pipe(gulp.dest("dist/assets/css"));
};

export const watch = () => {
  gulp.watch("src/assets/scss/**/*.scss", styles);
};

//export default hello;
