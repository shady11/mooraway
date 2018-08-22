angular
  .module('app')
  .directive('autoCompleteCityDirective', function () {
    return {
      restrict: 'A',
      link: autoCompleteLink
    };
  });

function autoCompleteLink(scope, elem, attr, ctrl) {
  console.log('test');
  elem.autocomplete({
    source: '/autocomplete',
    minLength: 0,
    select: function (event, ui) {
      this.value = ui.item.value;
      this.setAttribute('data-selected-id', ui.item.id);
      return false;
    }
  });
}