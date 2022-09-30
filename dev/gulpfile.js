const gulp    = require('gulp');
const notify  = require("gulp-notify");
const plumber = require("gulp-plumber");
// const sass    = require('gulp-sass');
// const pug     = require('gulp-pug');// ーーーpugは監視しない
const sass = require('gulp-sass')(require('sass'));
const autoprefixer = require('gulp-autoprefixer');
const uglify  = require('gulp-uglify');
const browserSync = require('browser-sync');
const packageImporter = require('node-sass-package-importer');


//setting : paths
const paths = {
    'php'    : '../*.php', //すべてのphpファイルをみる
  // 'root'    : './dist/',
    // 'pug'     : './src/pug/**/*.pug',ーーーpugは監視しない為コメントアウト
    'html'    : '../kana-portfolio/',
    // 'html'    : './dist/',
    'cssSrc'  : './src/scss/**/*.scss',
    'cssDist'   : '../',
    // 'cssDist'   : './dist/css/',
    'jsSrc' : './src/js/**/*.js',
    'jsDist': '../'
}

//gulpコマンドの省略
const { watch, series, task, src, dest, parallel } = require('gulp');



//Sass
task('sass', function () {
  return (
    src(paths.cssSrc)
      .pipe(plumber({ errorHandler: notify.onError("Error: <%= error.message %>") }))
      .pipe(sass({
        outputStyle: 'compressed',// Minifyするなら'compressed'
        importer: packageImporter({
          extensions: ['.scss', '.css']
        })
      }))
      .pipe(autoprefixer({
        cascade: false,
        grid: true
        }))
      // .pipe(dest('../'))
      .pipe(dest(paths.cssDist))
  );
});

//JS Compress
task('js', function () {
  return (
    src(paths.jsSrc)
      .pipe(plumber())
      .pipe(uglify())
      .pipe(dest(paths.jsDist))
  );
});


//Pugーーーpugは監視しないためコメントアウト
// task('pug', function () {
//   return (
//     src([paths.pug, '!./src/pug/**/_*.pug'])
//       .pipe(plumber({ errorHandler: notify.onError("Error: <%= error.message %>") }))
//       .pipe(pug({
//         pretty: true,
//         // basedir: "./src/pug"
//         basedir: ["./src/pug", "./src/pug/**/*.pug"]
//       }))
//       .pipe(dest(paths.html))
//   );
// });



// browser-syn
task('browser-sync', () => {
  return browserSync.init({
      server: {
          baseDir: paths.root
      },
      port: 8080,
      reloadOnRestart: true,
  });
});

// browser-sync reload
task('reload', (done) => {
  browserSync.reload();
  done();
});



// browser-sync立ち上げ時
const browserSyncOptions = {
  proxy: 'kanaportfolio.local',  // ← "サイト名.local",
  open: true,
  watchOptions: {
      debounceDelay: 1000
  }
};
// 上記の変数の内容を実行する
function browserSyncFunc(done) {
  browserSync.init(browserSyncOptions);
  done();
}


//watch
task('watch', (done) => {
  watch([paths.cssSrc], series('sass', 'reload')); //sassが変更されたら、cssSrcpathを見る
  watch([paths.jsSrc], series('js', 'reload'));   //jsが変更されたら、jsSrcを見る
  watch([paths.php], series('reload'));   //phpが変更されたら、phpを見る
  // watch([paths.pug], series('pug', 'reload'));ーーーpugは監視しないためコメントアウト
  done();
});

// defaultタスク
task('default', parallel('sass','js', browserSyncFunc, 'watch'));
// task('default', parallel('watch','sass','js','pug' ,'browser-sync')); ーーーpugは監視しない


