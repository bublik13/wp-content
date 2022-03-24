const {src, dest, series, watch} = require('gulp');
const del = require('del');
const sass = require('gulp-dart-sass');
const squoosh = require('gulp-squoosh');
const uglify = require('gulp-uglify-es').default;
const cleanCSS = require('gulp-clean-css');
const svgmin = require('gulp-svgmin');
const sync = require('browser-sync').create();
const webpackStream = require('webpack-stream');

const sourceFolder = 'assets';
const buildFolder = 'dist';

function svg() {
  return src([sourceFolder + '/img/**/*.svg'])
    .pipe(svgmin())
    .pipe(dest(buildFolder + '/img'))
};

function scss() {
  return src(sourceFolder + '/scss/style.scss')
    .pipe(sass())
    .pipe(cleanCSS({level: 2}))
    .pipe(dest(buildFolder + '/css'))
    .pipe(sass().on('error', sass.logError))
};

function js() {
  return src(sourceFolder + '/js/script.js')
    .pipe(webpackStream({
      mode: 'none',
      output: {
        filename: 'script.js',
      },
      module: {
        rules: [
          {
            test: /\.m?js$/,
            exclude: /node_modules/,
            use: {
              loader: 'babel-loader',
              options: {
                presets: [
                  ['@babel/preset-env', {targets: "defaults"}]
                ]
              }
            }
          }
        ]
      }
    }))

    .pipe(uglify())
    .pipe(dest(buildFolder + '/js'))
};

function img() {
  return src([
    sourceFolder + "/img/**/*.jpg",
    sourceFolder + "/img/**/*.png"
  ])
    .pipe(
      squoosh(() => ({
        encodeOptions: {
          mozjpeg: {},
          webp: {},
          avif: {},
          oxipng: {}
        },
      }))
    )
    .pipe(dest(buildFolder + "/img"));
};

// function fonts() {
//   return src(sourceFolder + '/fonts/**/*')
//     .pipe(dest(buildFolder + '/fonts'))
// };

function clear() {
  return del(buildFolder)
};

function serve() {
  sync.init({
    proxy: "http://kitties", // change
  });

  watch('**/*.php').on('change', sync.reload)
  watch(sourceFolder + '/scss/**/*.scss', series(scss)).on('change', sync.reload)
  watch(sourceFolder + '/js/**/*.js', series(js)).on('change', sync.reload)
  watch(sourceFolder + '/img/**/*', series(img)).on('change', sync.reload)
  watch(sourceFolder + '/img/**/*', series(svg)).on('change', sync.reload)
  // watch(sourceFolder + '/fonts/**/*', series(fonts)).on('change', sync.reload)
};


exports.build = series(clear, scss, js, img);
exports.watch = series(clear, scss, js, img, svg, serve);
exports.clear = clear;