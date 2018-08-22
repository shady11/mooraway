angular
  .module('app')
  .component('paymentComponent', {
    templateUrl: 'payment/paymentView.html',
    bindings: {
      csrfToken: '@'
    },
    controller: paymentComponentController
  })
;

function paymentComponentController($http, ngDialog) {
  var vm = this;
  vm.paymentType = 'MC';
  vm.close = close;

  function close() {
    ngDialog.closeAll();
  }
}
