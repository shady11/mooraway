angular
    .module('app')
    .component('questionItemComponent', {
      templateUrl: 'questionItem/questionItemView.html',
      bindings: {
        title: '<',
        content: '<'
      },
      controller: questionItemController
    })
;

function questionItemController() {
  var vm = this;

  vm.close = close;
  vm.showDrop = showDrop;

  vm.showDropdown = false;

  function close() {
    vm.showDropdown = false;
  }

  function showDrop() {
    vm.showDropdown = true;
  }

}