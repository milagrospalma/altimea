// ==== CONFIGURATION ==== //

// Project paths
var project = 'altimea',
    src = './sources/',
    build = '../',
    dist = '../',
    dev = './node_modules/',
    modules = './node_modules/';

// Project settings
module.exports = {

    browsersync: {
        files: [ build + '/**', '!' + build + '/**.map' ],
        notify: true,
        open: true,
        port: 3001,
        proxy: 'local.altimea.com'
    },

    livereload: {
        port: 35729
    },

    scripts: {
        bundles: {
            core: [ 'core' ],
            plugins: [ 'plugins' ]
        },
        chunks: {
            core: [
				src + 'js/core.js',
				src + 'js/page-projects.js'
            ],
            plugins: [
				dev + 'jquery/dist/jquery.js',
				dev + 'bootstrap-sass/assets/javascripts/bootstrap.js',
				dev + 'fullpage.js/vendors/scrolloverflow.js',
				dev + 'fullpage.js/vendors/jquery.easings.min.js',
				dev + 'fullpage.js/dist/jquery.fullpage.js',
				dev + 'slick-carousel/slick/slick.min.js',
				dev + 'wowjs/dist/wow.js',
				dev + 'is-in-viewport/lib/isInViewport.js'
            ]
        },
        dest: build + 'js/',
        lint: {
            src: [ src + 'js/**/*.js' ]
        },
        minify: {
            src: build + 'js/**/*.js',
            uglify: {},
            uglify_dist: {
                compress: {
                    drop_console: true
                }
            },
            dest: build + 'js/'
        },
        namespace: project + '-'
    },

    styles: {
        build: {
            src: src + 'scss/**/*.scss',
            dest: build
        },
        compiler: 'libsass',
        autoprefixer: {grid: false, browsers: [ '> 3%', 'last 5 versions', 'ie 11', 'ios 6', 'android 4' ]},
        minify: {safe: true},
        rubySass: {
            loadPath: [ './src/scss', dev, modules ],
            precision: 6,
            sourcemap: true
        },
        libsass: {
            includePaths: [ './src/scss', dev, modules ],
            precision: 6,
            onError: function( err ) {
                return console.log( err );
            }
        }
    },

    theme: {
        lang: {
            src: src + 'languages/**/*',
            dest: build + 'languages/',
            srcgen: src + 'languages/'
        },
		php: {
			src: build+'**/*.php',
			dest: build
		}
    },

    utils: {
        clean: [ build + '**/.DS_Store' ],
        images: [ dist + 'img/' ],
        dist: {
            src: [ build + '**/*', '!' + build + '**/*.map' ],
            dest: dist
        },
        normalize: {
            src: modules + 'normalize.css/normalize.css',
            dest: src + 'scss/vendor/normalize',
            rename: '_normalize.scss'
        }
    },

    watch: {
        src: {
            styles: src + 'scss/**/*.scss',
            scripts: src + 'js/**/*.js',
            theme: src + '**/*.php'
        },
        watcher: 'browsersync'
    }
};
