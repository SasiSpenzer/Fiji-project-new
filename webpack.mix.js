let mix = require('laravel-mix');

/*
 |--------------------------------------------------------------------------
 | Mix Asset Management
 |--------------------------------------------------------------------------
 |
 | Mix provides a clean, fluent API for defining some Webpack build steps
 | for your Laravel application. By default, we are compiling the Sass
 | file for the application as well as bundling up all the JS files.
 |
 */

mix.js('resources/assets/js/app.js', 'public/js')
   .sass('resources/assets/sass/app.scss', 'public/css')
    .styles([
        'public/vendors/css/vendor.bundle.base.css',

        'node_modules/bootstrap/dist/css/bootstrap.min.css',
        'node_modules/jqvmap/dist/jqvmap.min.css',
        'node_modules/daterangepicker/daterangepicker.css',
        'node_modules/flag-icon-css/css/flag-icon.min.css',
        'node_modules/jquery-ui/themes/base/all.css',
        'node_modules/font-awesome/css/font-awesome.min.css',
        'node_modules/datatables.net-bs4/css/dataTables.bootstrap4.min.css',
        'node_modules/select2/dist/css/select2.min.css',
        'node_modules/timepicker/jquery.timepicker.min.css',
        'node_modules/bootstrap-datepicker/dist/css/bootstrap-datepicker.standalone.min.css',
        'node_modules/bootstrap-select/dist/css/bootstrap-select.min.css',
        'public/css/style.css',
        // 'public/vendors/mdi/css/materialdesignicons.min.css',
        'node_modules/mdi/css/materialdesignicons.min.css',
    ], 'public/css/all.css')
    .scripts([
        'node_modules/jquery/dist/jquery.min.js',
        'node_modules/bootstrap/dist/js/bootstrap.min.js',
        'node_modules/timepicker/jquery.timepicker.min.js',
        'node_modules/datatables.net/jquery.dataTables.min.js',
        'node_modules/datatables.net/jquery.dataTables.min.js',
        'node_modules/daterangepicker/daterangepicker.js',
        'node_modules/daterangepicker/moment.min.js',
        'node_modules/select2/dist/js/select2.min.js',
        'node_modules/jqvmap/dist/jqvmap.min.js',
        'node_modules/popper.js/dist/popper.min.js',
        'node_modules/bootstrap-datepicker/dist/js/bootstrap-datepicker.min.js',
        'node_modules/bootstrap-select/dist/js/bootstrap-select.min.js',
        'node_modules/bootstrap-select/dist/js/i18n/defaults-en*.min.js',
        'public/vendors/js/vendor.bundle.base.js',
        'public/js/off-canvas.js',
        'public/js/hoverable-collapse.js',
        'public/js/template.js',
        'public/js/settings.js',
        'public/js/todolist.js',
        'node_modules/jszip/dist/jszip.min.js',
        'node_modules/pdfmake/build/pdfmake.min.js',
        'node_modules/pdfmake/build/vfs_fonts.js',
        'node_modules/pdfmake/build/pdfmake.min.js',
        'node_modules/pdfmake/build/vfs_fonts.js',
        'node_modules/jszip/dist/jszip.min.js',
    ], 'public/js/all.js')
   .version();
