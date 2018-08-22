angular
  .module('app')
  .directive('autoFocus', autoFocus)
;

function autoFocus($timeout) {
  return {
    restrict: 'AC',
    link: function (_scope, _element) {
      $timeout(function () {
        _element[0].focus();
      }, 0);
    }
  }
}