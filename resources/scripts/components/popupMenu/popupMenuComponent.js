angular
  .module('app')
  .component('popupMenuComponent', {
    templateUrl: 'popupMenu/popupMenuView.html',
    bindings: {
      type: "@"
    },
    controller: popupMenuController
  })
;

function popupMenuController($location) {
  var vm = this;

  vm.toggleMenu = toggleMenu;
  vm.close = close;
  vm.setIcon = setIcon;
  vm.$onInit = onInit;

  vm.showMenu = false;
  vm.overlay = false;
  vm.currentUrl = $location.absUrl();
  vm.isSender = /passazhiram/.test(vm.currentUrl);

  function setIcon(icon) {
    vm.icon = '/interface/img/' + icon + '.png';
  }

  function toggleMenu() {
    vm.showMenu = !vm.showMenu;
  }

  function close() {
    vm.showMenu = false;
  }

  function onInit() {
    vm.icon = '/interface/img/' + (vm.showLinkMain ? '5' : '4') + '.png';
  }
}