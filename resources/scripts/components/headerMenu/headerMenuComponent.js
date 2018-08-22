angular
  .module('app')
  .component('headerMenuComponent', {
    templateUrl: 'headerMenu/headerMenuView.html',
    bindings: {
      isAuth: '=',
      name: '@',
      group: '@',
      avatar: '@',
      login: '&'
    },
    controller: headerMenuController
  })
;

function headerMenuController($location) {
  var vm = this;
  vm.showMenu = false;
  vm.toggleMenu = toggleMenu;
  vm.redirect = redirect;

  function toggleMenu() {
    vm.showMenu = !vm.showMenu;
  }

  function redirect() {
    window.location = $location.protocol() + "://" + $location.host();
  }
}