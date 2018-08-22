angular
  .module('app')
  .component('showContactsBtnComponent', {
    templateUrl: 'showContactsBtn/showContactsBtnView.html',
    bindings: {
      flightPhone: '@',
      flightName: '@',
      flightId: '=',
      isAuth: '='
    },
    controller: showContactsBtnComponentController
  })
;

function showContactsBtnComponentController(ngDialog) {
  var vm = this;

  vm.open = open;
  vm.$onInit = onInit;

  function onInit() {
    vm.hiddenPhoneNumber = vm.flightPhone.slice(0, -5) + ' **-**';
  }

  function open() {
    var template = '<sign-up-user-component ' +
      'flight-phone="ngDialogData.flightPhone" ' +
      'flight-name="ngDialogData.flightName">' +
      '</sign-up-user-component>';

    if (vm.isAuth) {
      template = '<sign-up-share-component ' +
        'flight-phone="ngDialogData.flightPhone" ' +
        'flight-name="ngDialogData.flightName">' +
        '</sign-up-share-component>';
    }

    ngDialog.open({
      template: template,
      data: {
        flightPhone: vm.flightPhone,
        flightName: vm.flightName
      },
      showClose: false,
      plain: true
    });
  }
}
