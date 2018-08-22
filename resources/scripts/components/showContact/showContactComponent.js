angular
  .module('app')
  .component('showContactComponent', {
    templateUrl: 'showContact/showContactView.html',
    bindings: {
      flightPhone: '<',
      flightName: '<'
    },
    controller: showContactComponentController
  })
;

function showContactComponentController(ngDialog) {
  var vm = this;

  vm.agreed = agreed;
  vm.notAgree = notAgree;
  vm.close = close;

  function close() {
    ngDialog.closeAll();
  }

  function agreed() {
    ngDialog.closeAll();
    ngDialog.open({
      template: '<payment-component></payment-component>',
      showClose: false,
      plain: true
    });
  }

  function notAgree() {
    ngDialog.closeAll();
  }
}
