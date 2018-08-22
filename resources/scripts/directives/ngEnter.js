angular
    .module('app')
    .directive('ngEnter', ngEnter)
;

function ngEnter() {
  return {
    restrict: 'A',
    link: function (scope, elem, attrs) {

      elem.bind('keydown', function (event) {
        var code = event.keyCode || event.which;
        if (code === 13) {
          event.preventDefault();
          scope.$apply(attrs.ngEnter);
        }
      });

      scope.$on('$destroy', function () {
        elem.unbind('keydown');
      });
    }
  }
}