const gulp = require('gulp');
const sass = require('gulp-sass');
const header = require('gulp-header');
const autoprefixer = require('gulp-autoprefixer');

const isChanged = require('gulp-changed');
const minifyImg = require('gulp-imagemin');
const minifyImg_JPG = require('imagemin-jpeg-recompress');
const minifyImg_PNG = require('imagemin-pngquant');
const minifyImg_GIF = require('imagemin-gifsicle');

const cleanCSS = require("gulp-clean-css");
const rename = require("gulp-rename");
const uglify = require("gulp-uglify");

gulp.task('minify-img', function(done) {
  gulp.src("../build/katana/common/src/img/**/*.+(jpg|jpeg|png|gif)") //src部分は適宜環境に合わせて修正
    .pipe(isChanged("../build/katana/common/img"))
    .pipe(minifyImg([minifyImg_JPG(),minifyImg_PNG(),minifyImg_GIF()]))
    .pipe(gulp.dest("../build/katana/common/img"));
  done();
});
gulp.task('default', gulp.series('minify-img'));

gulp.task("sass", function () {
  return gulp.src('../build/katana/common/src/sass/**/*.scss')
    .pipe(sass({outputStyle: 'expanded'})
    .on('error', sass.logError))
    .pipe(autoprefixer())
    .pipe(cleanCSS())
    .pipe(header('@charset "UTF-8";\n\n'))
    .pipe(gulp.dest('../build/katana/common/css')
  );
});

gulp.task('min-js', function(done) {
  gulp.src('../build/katana/common/src/js/*.js') // src/js/ 配下の全ファイルを対象に圧縮する
    .pipe(uglify({
      compress: true, // 圧縮する
      mangle: true, // 変数の難読化を行う
      output: {
        comments: 'some' //Licenseコメントの頭にある「*!」を残す
      }
    }))
    .pipe(gulp.dest('../build/katana/common/js/')) // js 配下に出力する
  done()
});

gulp.task("default", function () {
  gulp.watch(['../build/katana/common/src/img/**/*.*'], gulp.task('minify-img')); //src部分は適宜環境に合わせて修正

  gulp.watch('../build/katana/common/src/sass/**/*.scss', gulp.series('sass'));

  gulp.watch('../build/katana/common/src/js/*.js', gulp.task('min-js'));
});