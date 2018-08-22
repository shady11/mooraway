angular
    .module('app')
    .directive('ngEsc', ngEsc);

function ngEsc() {
  return function (scope, element, attrs) {
    element.bind("keydown keypress keyup", function (event) {
      if(event.which === 27) {
        scope.$apply(function (){
          scope.$eval(attrs.ngEsc);
        });

        event.preventDefault();
      }
    });
  };
}