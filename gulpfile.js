import { createRequire } from "module";
const require = createRequire(import.meta.url);

import gulp from 'gulp';
import del from 'del';
import dartSass from 'sass';
import gulpSass from 'gulp-sass';
const sass = gulpSass( dartSass );
import cleanCSS from 'gulp-clean-css';
import compiler from 'webpack';
import webpack from 'webpack-stream';
import concat from 'gulp-concat';
import uglify from 'gulp-uglify';
import svgsprite from 'gulp-svg-sprite';
import imagemin, {gifsicle, mozjpeg, optipng, svgo} from 'gulp-imagemin';
import hb from 'gulp-hb';
import ext from 'gulp-ext-replace'
import fs from 'fs';
import path from 'path';

export const clean = () => del([ 'wp-content/themes/valkyriehq/' ]);
export const cleanComponents = () => del([ 'wp-content/themes/valkyriehq/template-parts/' ]);

export function fonts() {
  return gulp.src('src/fonts/*')
    .pipe(gulp.dest('wp-content/themes/valkyriehq/fonts/'));
}

export function scripts() {
  return gulp.src('src/js/script.js')
    .pipe(webpack({}, compiler, function(err, stats) {}))
    .pipe(uglify())
    .pipe(concat('script.js'))
    .pipe(gulp.dest('wp-content/themes/valkyriehq/'));
}

export function styles() {
  return gulp.src('src/scss/style.scss')
    .pipe(sass({outputStyle: 'compressed'}))
    .pipe(cleanCSS())
    .pipe(gulp.dest('wp-content/themes/valkyriehq/'));
}

export function sprite() {
  return gulp.src('src/sprite/**/**/*.svg')
    .pipe(svgsprite({
      shape: { spacing: { padding: 5 } },
      mode: { symbol: true },
      svg: { xmlDeclaration: false, doctypeDeclaration: false, namespaceIDs: false, namespaceClassnames: false }
    }))
    .pipe(concat('sprite.hbs'))
    .pipe(gulp.dest('src/html/partials/global/'));
}

export function images() {
  gulp.src('src/img/screenshot.png')
    .pipe(gulp.dest('wp-content/themes/valkyriehq/'))
  return gulp.src(['src/img/**/**/*', '!src/img/screenshot.png'])
    .pipe(imagemin([
      gifsicle({interlaced: true}),
      mozjpeg({quality: 75, progressive: true}),
      optipng({optimizationLevel: 5}),
      svgo({
        plugins: [
          {
            name: 'removeViewBox',
            active: true
          },
          {
            name: 'cleanupIDs',
            active: true
          },
          {
            name: 'collapseGroups',
            active: true
          }
        ]
      })
    ]))
    .pipe(gulp.dest('wp-content/themes/valkyriehq/img/'));
}

export function html() {
  return gulp.src('src/html/*.hbs')
    .pipe(hb().partials('src/html/partials/**/*.hbs'))
    .pipe(ext('.php'))
    .pipe(gulp.dest('wp-content/themes/valkyriehq/'));
}

export function getFolders(dir) {
  return fs.readdirSync(dir)
    .filter(function(file) {
      return fs.statSync(path.join(dir, file)).isDirectory();
    });
}

export function components() {
  const componentsList = getFolders('src/html/blocks/');

  return componentsList.map(function (component) {
    const componentsSrc = 'src/html/blocks/' + component;
    const componentsSrcNot = '!src/html/blocks/' + component;
    const componentsDest = 'wp-content/themes/valkyriehq/blocks/' + component;

    return gulp.series(
      function componentsCss () {
        return gulp.src(componentsSrc + '/style.scss', { allowEmpty: true })
          .pipe(sass({outputStyle: 'compressed'}))
          .pipe(cleanCSS())
          .pipe(gulp.dest(componentsDest));
      },

      function componentsHtml () {
        return gulp.src(componentsSrc + '/index.hbs', { allowEmpty: true })
          .pipe(ext('.php'))
          .pipe(gulp.dest(componentsDest));
      },

      function componentsCopy (done) {
        return gulp
          .src([componentsSrc + '/*', componentsSrcNot + '/*.hbs', componentsSrcNot + '/*.scss'])
          .pipe(gulp.dest(componentsDest));
      },

      function componentsDone (done) {
        done();
      }
    );
  });
}

function watchFiles() {
  gulp.watch('src/js/**/*.js', scripts);
  gulp.watch('src/sprite/**/*.svg', sprite);
  gulp.watch(['src/html/**/*.hbs', '!src/html/blocks/**/*.hbs'], html);
  gulp.watch('src/scss/**/*.scss', styles);
  gulp.watch('src/img/**/*', images);
  gulp.watch('src/html/blocks/**/**/**/*', componentsWatch);
}

const componentsWatch = gulp.series(cleanComponents, gulp.parallel.apply(gulp.parallel, components()));
export const build = gulp.series(clean, gulp.parallel(fonts, sprite, images, scripts, styles), html, componentsWatch);
const watch = gulp.series(build, watchFiles);

export default watch;
