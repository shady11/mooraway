angular
  .module('app')
  .directive('autoCompleteCountryDirective', function () {
    return {
      restrict: 'A',
      link: autoCompleteCountry
    };
  });

function autoCompleteCountry(scope, elem, attr, ctrl) {
  elem.autocomplete({
    source: '/autocomplete/country',
    minLength: 0,
    select: function (event, ui) {
      this.value = ui.item.value;
      $('#countryId').val(ui.item.id);
      return false;
    }
  });
}