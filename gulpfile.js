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
import browsersync from 'browser-sync';

export const clean = () => del([ 'wp-content/themes/valkyriehq/' ]);
export const cleanComponents = () => del([ 'wp-content/themes/valkyriehq/template-parts/' ]);

export function fonts() {
  gulp.src('src/fonts/*')
    .pipe(gulp.dest('wp-content/themes/valkyriehq/static/fonts/'))
    .pipe(browsersync.stream());
  return gulp.src('src/fonts/*')
    .pipe(gulp.dest('wp-content/themes/valkyriehq/fonts/'))
    .pipe(browsersync.stream());
}

export function scripts() {
  gulp.src('src/js/script.js')
    .pipe(webpack({}, compiler, function(err, stats) {}))
    .pipe(uglify())
    .pipe(concat('script.js'))
    .pipe(gulp.dest('wp-content/themes/valkyriehq/static/js'))
    .pipe(browsersync.stream());
  return gulp.src('src/js/script.js')
    .pipe(webpack({}, compiler, function(err, stats) {}))
    .pipe(uglify())
    .pipe(concat('script.js'))
    .pipe(gulp.dest('wp-content/themes/valkyriehq/'))
    .pipe(browsersync.stream());
}

export function styles() {
  gulp.src('src/scss/style.scss')
    .pipe(sass({outputStyle: 'compressed'}))
    .pipe(cleanCSS())
    .pipe(gulp.dest('wp-content/themes/valkyriehq/static/'))
    .pipe(browsersync.stream());
  return gulp.src('src/scss/style.scss')
    .pipe(sass({outputStyle: 'compressed'}))
    .pipe(cleanCSS())
    .pipe(gulp.dest('wp-content/themes/valkyriehq/'))
    .pipe(browsersync.stream());
}

export function sprite() {
  gulp.src('src/sprite/**/**/*.svg')
    .pipe(svgsprite({
      shape: { spacing: { padding: 5 } },
      mode: { symbol: true },
      svg: { xmlDeclaration: false, doctypeDeclaration: false, namespaceIDs: false, namespaceClassnames: false }
    }))
    .pipe(concat('sprite.hbs'))
    .pipe(gulp.dest('src/html/static/partials/global/'))
    .pipe(browsersync.stream());
  return gulp.src('src/sprite/**/**/*.svg')
    .pipe(svgsprite({
      shape: { spacing: { padding: 5 } },
      mode: { symbol: true },
      svg: { xmlDeclaration: false, doctypeDeclaration: false, namespaceIDs: false, namespaceClassnames: false }
    }))
    .pipe(concat('sprite.hbs'))
    .pipe(gulp.dest('src/html/partials/global/'))
    .pipe(browsersync.stream());
}

export function images() {
  gulp.src('src/img/**/**/*')
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
    .pipe(gulp.dest('wp-content/themes/valkyriehq/static/img/'))
    .pipe(browsersync.stream());
  return gulp.src('src/img/**/**/*')
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
    .pipe(gulp.dest('wp-content/themes/valkyriehq/img/'))
    .pipe(browsersync.stream());
}

export function html() {
  gulp.src('src/html/static/*.hbs')
    .pipe(hb().partials('src/html/static/partials/**/*.hbs'))
    .pipe(ext('.html'))
    .pipe(gulp.dest('wp-content/themes/valkyriehq/static/'))
    .pipe(browsersync.stream());
  return gulp.src('src/html/*.hbs')
    .pipe(hb().partials('src/html/partials/**/*.hbs'))
    .pipe(ext('.php'))
    .pipe(gulp.dest('wp-content/themes/valkyriehq/'))
    .pipe(browsersync.stream());
}

export function getFolders(dir) {
  return fs.readdirSync(dir)
    .filter(function(file) {
      return fs.statSync(path.join(dir, file)).isDirectory();
    });
}

export function components() {
  const componentsList = getFolders('src/html/template-parts/blocks/');

  return componentsList.map(function (component) {
    const componentsSrc = 'src/html/template-parts/blocks/' + component;
    const componentsSrcNot = '!src/html/template-parts/blocks/' + component;
    const componentsDest = 'wp-content/themes/valkyriehq/template-parts/blocks/' + component;

    return gulp.series(
      function componentsCss () {
        return gulp.src(componentsSrc + '/style.scss', { allowEmpty: true })
          .pipe(sass({outputStyle: 'compressed'}))
          .pipe(cleanCSS())
          .pipe(gulp.dest(componentsDest))
          .pipe(browsersync.stream());
      },

      function componentsHtml () {
        return gulp.src(componentsSrc + '/index.hbs', { allowEmpty: true })
          .pipe(ext('.html'))
          .pipe(gulp.dest(componentsDest))
          .pipe(browsersync.stream());
      },

      function componentsCopy (done) {
        return gulp
          .src([componentsSrc + '/*', componentsSrcNot + '/*.hbs', componentsSrcNot + '/*.scss'])
          .pipe(gulp.dest(componentsDest))
          .pipe(browsersync.stream());
      },

      function componentsDone (done) {
        done();
      }
    );
  });
}

export function browserSync(done) {
  browsersync.init({server: {baseDir: "wp-content/themes/valkyriehq/static/"}, port: 3000});
  done();
}

export function browserSyncReload(done) {
  browsersync.reload();
  done();
}

function watchFiles() {
  gulp.watch('src/js/**/*.js', scripts);
  gulp.watch('src/sprite/**/*.svg', sprite);
  gulp.watch(['src/html/**/*.hbs', '!src/html/template-parts/blocks/**/*.hbs'], html);
  gulp.watch('src/scss/**/*.scss', styles);
  gulp.watch('src/img/**/*', images);
  gulp.watch('src/html/template-parts/blocks/**/*', componentsWatch);
}

const componentsWatch = gulp.series(cleanComponents, gulp.parallel.apply(gulp.parallel, components()));
export const build = gulp.series(clean, gulp.parallel(fonts, sprite, images, scripts, styles), html, componentsWatch);
const watch = gulp.series(build, browserSync, watchFiles);

export default watch;
