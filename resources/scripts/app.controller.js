angular
  .module('app')
  .controller('AppController', AppController)
;

function AppController($scope, ngDialog) {
  var vm = $scope;

  vm.login = login;
  vm.toRoute = toRoute;
  vm.updateAvatar = updateAvatar;

  function login() {
    ngDialog.open({
      template: '<sign-in-component></sign-in-component>',
      showClose: false,
      plain: true
    });
  }

  function updateAvatar(avatar) {
    ngDialog.open({
      template: '<update-avatar-component avatar="ngDialogData.avatar"></update-avatar-component>',
      showClose: false,
      plain: true,
      data: {
        avatar: avatar
      }
    });
  }

  function toRoute(route) {
    location.href = route;
  }
}