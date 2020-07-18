const { src, dest, watch, series, parallel } = require('gulp')
const sourcemaps = require('gulp-sourcemaps')
const sass = require('gulp-sass')
const concat = require('gulp-concat')
const uglify = require('gulp-uglify')
const postcss = require('gulp-postcss')
const autoprefixer = require('autoprefixer')
const cssnano = require('cssnano')
const imagemin = require('gulp-imagemin')
const rename = require('gulp-rename')
const babel = require('gulp-babel');
const browsersync = require("browser-sync").create();


// File paths
const files = { 
    scssPath: 'src/scss/**/*.scss',
    jsPath: [ // set the js files in order of dependence
        'src/js/vendors/jquery.min.js',
        'src/js/vendors/bootstrap.bundle.min.js',
        'src/js/vendors/swiper.min.js',
        'src/js/vendors/wNumb.min.js',
        'src/js/vendors/nouislider.min.js',
        'src/js/**/*.js'
    ],
    imgPath: 'src/img',
    layoutPath: 'layouts/**/*.htm',
    pagesPath: 'pages/**/*.htm',
    partialsPath: 'partials/**/*.htm'
}

// Sass task: compiles the style.scss file into style.css, not minified, with sourcemaps
function scssTask(){    
    return src(files.scssPath)
        .pipe(sourcemaps.init())
        .pipe(sass())
        .pipe(rename({suffix: ".min"}))
        .pipe(sourcemaps.write('.'))
        .pipe(dest('assets/css')
    )
}

// Sass task: compiles the style.scss file into style.css, minified, no sourcemaps
function scssBuildTask(){    
    return src(files.scssPath)
        .pipe(sass())
        .pipe(postcss([ autoprefixer(), cssnano({
            preset: ['default', {
                    reduceTransforms: false
                }]
            }) 
        ]))
        .pipe(rename({suffix: ".min"}))
        .pipe(dest('assets/css')
    )
}

// JS task: concatenates and uglifies JS files to script.js
// JS task: concatenates and uglifies JS files to script.js
function jsTask(){
    return src(files.jsPath)
        .pipe(babel({presets: ["@babel/env"]}))
        .pipe(concat('main.min.js'))
        .pipe(uglify())
        .pipe(dest('assets/js')
    )
}

function optimizeImg(){
    return src('src/img/**/*')
        .pipe(imagemin([
            imagemin.gifsicle({interlaced: true}),
            imagemin.mozjpeg({quality: 75, progressive: true}),
            imagemin.optipng({optimizationLevel: 5})
        ]))
        .pipe(dest('assets/img'))
}

// BrowserSync
function browserSync(done) {
    browsersync.init({
        proxy: {
            target: "http://localhost:8000",
        },
        port: 3000
    });
    done();
}
  
// BrowserSync Reload
function browserSyncReload(done) {
    browsersync.reload();
    done();
}

function watchTask(){
    watch([files.scssPath, files.jsPath.slice(-1)[0]],
        {interval: 1000, usePolling: true},
        series(parallel(scssTask, jsTask), browserSyncReload)
    )
    watch([files.layoutPath, files.pagesPath, files.partialsPath],
        series(browserSyncReload)
    ) 
}

//build static assets
const build = series(parallel(scssBuildTask, jsTask, optimizeImg))

//Default tast for development use
exports.default = series(
    parallel(scssTask, jsTask),
    browserSync,
    watchTask
)

exports.build = build