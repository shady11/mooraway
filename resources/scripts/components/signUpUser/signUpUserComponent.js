angular
  .module('app')
  .component('signUpUserComponent', {
    templateUrl: 'signUpUser/signUpUserView.html',
    bindings: {
      flightPhone: '<',
      flightName: '<'
    },
    controller: signUpUserComponentController
  })
;

function signUpUserComponentController($http, ngDialog) {
  var vm = this;

  vm.loading = false;
  vm.fields = {
    email: '',
    password: '',
    conditions: true
  };
  vm.errors = {};

  vm.submit = submit;
  vm.close = close;

  function close() {
    ngDialog.closeAll();
  }

  function submit() {
    vm.loading = true;
    $http({
      method: 'POST',
      url: '/sign-up',
      data: vm.fields
    }).then(function () {
      vm.loading = false;
      ngDialog.closeAll();
      ngDialog.open({
        template: '<sign-up-share-component ' +
        'flight-phone="ngDialogData.flightPhone" ' +
        'flight-name="ngDialogData.flightName">' +
        '</sign-up-share-component>',
        plain: true,
        data: {
          flightPhone: vm.flightPhone,
          flightName: vm.flightName
        },
        showClose: false
      });
    }).catch(function (response) {
      vm.loading = false;
      vm.errors = response.data.errors;
    });
  }
}
