angular
  .module('app')
  .component('addFlightBtnComponent', {
    templateUrl: 'addFlightBtn/addFlightBtnView.html',
    bindings: {},
    controller: addFlightBtnComponentController
  })
;

function addFlightBtnComponentController(ngDialog) {
  var vm = this;
  vm.addFlight = addFlight;

  function addFlight() {
    ngDialog.open({
      template: '<new-flight-component></new-flight-component>',
      showClose: false,
      plain: true
    });
  }
}
