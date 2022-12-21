/**
 * This is a main entrypoint for Webpack config.
 *
 * @since 1.0.0
 */
 const path = require( 'path' );

 // Paths to find our files and provide BrowserSync functionality.
 const projectPaths = {
     projectDir:        __dirname, // Current project directory absolute path.
     projectJsPath:     path.resolve( __dirname, 'assets/src/js' ),
     projectScssPath:   path.resolve( __dirname, 'assets/src/scss' ),
     projectImagesPath: path.resolve( __dirname, 'assets/src/images' ),
     projectOutput:     path.resolve( __dirname, 'assets/public' ),
     projectWebpack:    path.resolve( __dirname, 'webpack' ),
 };
 
 const projectFiles = {
     browserSync: {
         enable: true,
         host:   'localhost',
         port:   3000,
         mode:   'proxy',
         server: { baseDir: [ 'public' ] },
         proxy:  'http://sanna.local/',
         files:  '**/**/**.php',
         reload: true, 
     },
     projectJs: {
         eslint:   true,
         filename: 'js/[name].js',
         entry:    {
             main: projectPaths.projectJsPath + '/main.js',
         },
         rules:    {
             test: /\.m?js$/,
         }
     },
     projectCss: {
         postCss:   projectPaths.projectWebpack + '/postcss.config.js',
         stylelint: true, 
         filename:  'css/[name].css',
         use:       'sass', 
         rules:    {
             sass:    {
                 test: /\.s[ac]ss$/i
             },
             postcss: {
                 test: /\.pcss$/i
             }
         },
         purgeCss: { 
             paths: [ 
                 __dirname + '/assets/src/js/**/*',
                 __dirname + '/templates/**/**/*',
                 __dirname + '/template-parts/**/**/*',
                 __dirname + '/blocks/**/**/*',
                 __dirname + '/*.php',
             ]
         }
     },
     projectSourceMaps: {
         enable: false,
         env:    'dev', 
         devtool: 'source-map' 
     },
     projectImages: {
         rules: {
             test: /\.(jpe?g|png|gif|svg)$/i,
         },
         minimizerOptions: {
             plugins: [
                 [ 'gifsicle', { interlaced: true } ],
                 [ 'jpegtran', { progressive: true } ],
                 [ 'optipng', { optimizationLevel: 5 } ],
                 [ 'svgo', {
                     plugins: [
                         { removeViewBox: false, },
                     ],
                 }, ],
             ],
         }
     }
 }
 
 const projectOptions = {
     ...projectPaths, ...projectFiles,
     projectConfig: {
     }
 }
 
 module.exports = env => {
     if ( env.NODE_ENV === 'production' ) {
         return require( './webpack/config.production' )( projectOptions );
     } else {
         return require( './webpack/config.development' )( projectOptions );
     }
 };