var app = angular.module('app', [
  'ngDialog',
  '720kb.datepicker',
  '720kb.socialshare',
  'angular-click-outside',
  'ngAnimate',
  'angularFileUpload',
  'slick'
]).run(function ($http) {
  $http.defaults.headers.common['X-CSRF-TOKEN'] = token;
}).config(['$provide', function ($provide) {
  $provide.decorator('$browser', ['$delegate', function ($delegate) {
    $delegate.onUrlChange = function () {
    };
    $delegate.url = function () {
      return ""
    };
    return $delegate;
  }]);
}]);
