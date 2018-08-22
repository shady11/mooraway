angular
  .module('app')
  .component('signInComponent', {
    templateUrl: 'signIn/signInView.html',
    bindings: {},
    controller: signInComponentController
  })
;

function signInComponentController($http, ngDialog) {
  var vm = this;
  vm.loading = false;
  vm.fields = {
    email: '',
    password: ''
  };

  vm.errors = {};

  vm.submit = submit;
  vm.close = close;

  function close() {
    ngDialog.closeAll();
  }

  function submit() {
    vm.loading = true;
    vm.errors = {};
    $http({
      method: 'POST',
      url: '/login',
      data: vm.fields
    }).then(function () {
      location.reload();
    }).catch(function (response) {
      vm.loading = false;
      vm.errors = response.data.errors;
    });
  }
}
