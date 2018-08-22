angular
  .module('app')
  .component('signUpShareComponent', {
    templateUrl: 'signUpShare/signUpShareView.html',
    bindings: {
      flightPhone: '<',
      flightName: '<'
    },
    controller: signUpShareComponentController
  })
;

function signUpShareComponentController($timeout, ngDialog) {
  var vm = this;

  vm.showContact = showContact;
  vm.beforeSocialClick = beforeSocialClick;
  vm.close = close;

  vm.isClickSocialShare = false;
  vm.loading = false;

  function close() {
    ngDialog.closeAll();
  }

  function beforeSocialClick() {
    vm.isClickSocialShare = true;
  }

  function showContact() {
    vm.loading = true;

    $timeout(function () {
      ngDialog.closeAll();
      ngDialog.open({
        template: '<show-contact-component ' +
        'flight-phone="ngDialogData.flightPhone" ' +
        'flight-name="ngDialogData.flightName">' +
        '</show-contact-component>',
        data: {
          flightPhone: vm.flightPhone,
          flightName: vm.flightName
        },
        showClose: false,
        plain: true
      });
    }, 5000)
  }
}