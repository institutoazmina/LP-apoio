const gulp = require("gulp");
const sass = require("gulp-sass");
const concat = require("gulp-concat");
const babel = require("gulp-babel");
const uglify = require("gulp-uglify");
const uglifycss = require("gulp-uglifycss");
const autoprefixer = require("gulp-autoprefixer");

// Função SASS + minify
function compilaSASS() {
  return gulp
    .src("assets/css/scss/*.scss")
    .pipe(autoprefixer('last 20 versions'))
    .pipe(
      sass({
        outputStyle: "compressed",
      })
    )
    .pipe(gulp.dest("assets/css/"));
}
// Task SASS
gulp.task("sass", compilaSASS);

// Concatena libs css
function libCSS() {
  return gulp
    .src([
      "node_modules/slick-carousel/slick/slick.css",
      "node_modules/normalize.css/normalize.css"
    ])
    .pipe(concat("app.min.css"))
    .pipe(
      uglifycss({
        uglyComments: true,
      })
    )
    .pipe(gulp.dest("assets/css/"));
}
gulp.task("libcss", libCSS);

// Função JS com concatenação de arquivos, babel para navegadores antigos e minify
function compilaJS() {
  return gulp
    .src([
      "assets/js/main/global.js",
      "assets/js/main/cookie.min.js",
    ])
    .pipe(concat("main.min.js"))
    .pipe(
      babel({
        presets: ["@babel/env"],
      })
    )
    .pipe(uglify())
    .pipe(gulp.dest("assets/js/"));
}
// Task compila JS
gulp.task("js", compilaJS);

function libs() {
  return gulp
    .src([
      "node_modules/jquery/dist/jquery.min.js",
      "node_modules/slick-carousel/slick/slick.min.js",
    ])
    .pipe(concat("app.min.js"))
    .pipe(gulp.dest("assets/js"));
}
gulp.task("libs", libs);

// Função Watch
function watch() {
  gulp.watch("assets/css/scss/*.scss", compilaSASS);
  gulp.watch("assets/js/main/*.js", compilaJS);
}
// Taks Watch
gulp.task("watch", watch);

// Task Default
gulp.task("default", gulp.parallel("watch", "sass", "js", "libcss", "libs"));
