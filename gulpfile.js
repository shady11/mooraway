var
  gulp = require('gulp'),
  elixir = require('laravel-elixir'),
  templateCache = require('gulp-angular-templatecache'),
  ngAnnotate = require('laravel-elixir-ng-annotate'),
  plumber = require('gulp-plumber'),
  remove = require('laravel-elixir-remove'),
  insert = require('gulp-insert');
var Task = elixir.Task;

elixir.extend("templateCache", function (options, from, to, wrap) {
  new Task('templateCache', function () {
    if (wrap) {
      return gulp.src(from)
        .pipe(templateCache(options))
        .pipe(insert.wrap('(function(angular) {', '})(angular);'))
        .pipe(gulp.dest(to));
    }
    else {
      return gulp.src(from)
        .pipe(templateCache(options))
        .pipe(gulp.dest(to));
    }
  })
    .watch(from);

});

elixir(function (mix) {

  var appScripts = [
    '../../../resources/scripts/app.js',
    '../../../public/js/templates.js',
    '../../../resources/scripts/app.controller.js',
    '../../../resources/scripts/directives/*.js',
    '../../../resources/scripts/filters/*.js',
    '../../../resources/scripts/components/**/*.js'
  ];

  mix
    .templateCache({module: 'app'},
      'resources/scripts/components/**/*.html',
      'public/js'
    )
    .templateCache({module: 'app'},
      'resources/scripts/components/**/*.html',
      'public/js'
    )
    .less('/main.less', 'public/css')
    .annotate(appScripts)
    .scripts([
      // Library
      '../../../node_modules/moment/min/moment.min.js',
      '../../../node_modules/underscore/underscore-min.js',
      '../../../node_modules/jquery/dist/jquery.min.js',
      '../../../resources/scripts/phoneMask/intl-tel-input-master/build/js/utils.js',
      '../../../resources/scripts/phoneMask/intl-tel-input-master/build/js/intlTelInput.min.js',
      '../../../node_modules/jquery-ui-dist/jquery-ui.min.js',
      '../../../node_modules/angular/angular.js',
      '../../../node_modules/ng-dialog/js/ngDialog.min.js',
      '../../../node_modules/angular-locale/dist/angular-locale.min.js',
      '../../../node_modules/angular-i18n/angular-locale_ru.js',
      '../../../node_modules/slick-carousel/slick/slick.min.js',
      '../../../node_modules/angular-socialshare/dist/angular-socialshare.min.js',
      '../../../node_modules/@iamadamjowett/angular-click-outside/clickoutside.directive.js',
      '../../../node_modules/angular-animate/angular-animate.min.js',
      '../../../node_modules/slick-carousel/slick/slick.js',
      '../../../node_modules/angular-slick/dist/slick.js',
      '../../../node_modules/angular-file-upload/dist/angular-file-upload.min.js',
      // Application
      '../../../public/js/annotated.js'
    ], 'public/js/app.js')
    .styles([
      '../../../resources/assets/css/main.css',
      '../../../resources/assets/css/jquery-ui.min.css',
      '../../../resources/assets/css/angular-datepicker.css',
      '../../../resources/assets/css/ngDialog.css',
      '../../../resources/assets/css/ngDialog-theme-default.css',
      '../../../resources/assets/css/intlTelInput.css'
    ], 'public/css/app.css');
});