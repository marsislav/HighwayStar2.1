import gulp from "gulp";
import yargs from "yargs";
import cleanCSS from "gulp-clean-css";
import gulpif from "gulp-if";
import sourcemaps from "gulp-sourcemaps";
import imagemin from "gulp-imagemin";
//import del from "del";
//import sass from "gulp-sass";
const sass = require("gulp-sass")(require("sass"));
const PRODUCTION = yargs.argv.prod;
const paths = {
  images: {
    src: "src/assets/images/**/*.{jpg,jpeg,gif, png}",
    dest: "dist/assets/images",
  },
  other: {
    src: [
      "src/assets/**/*",
      "!src/assets/{images,js,scss}",
      "!src/assets/{images,js,scss}/**/*}",
    ],
    dest: "dist/assets",
  },
};
//export const clean = () => del(["dist"]);
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

export const images = () => {
  return gulp
    .src(paths.images.src)
    .pipe(gulpif(PRODUCTION, imagemin()))
    .pipe(gulp.dest(paths.images.dest));
};
export const watch = () => {
  gulp.watch("src/assets/scss/**/*.scss", styles);
  gulp.watch(paths.images.src, images);
  gulp.watch(paths.other.src, copy);
};

export const copy = () => {
  return gulp.src(paths.other.src).pipe(gulp.dest(paths.other.dest));
};

export const build = (done) => {
  gulp.series(gulp.parallel(styles, images, copy))(done);
};
export const dev = (done) => {
  gulp.series(gulp.parallel(styles, images, copy), watch)(done);
};
export default dev;
