angular
  .module('app')
  .component('popupMenu2Component', {
    templateUrl: 'popupMenu2/popupMenu2View.html',
    bindings: {
      type: "@",
      popupClass: "@",
      showLinkMain: '<',
      showLinkToSender: '='
    },
    controller: popupMenu2Controller
  })
;

function popupMenu2Controller($location, $scope, $templateRequest, $compile, $animate) {
  var vm = this;

  vm.toggleMenu = toggleMenu;
  vm.close = close;
  vm.setIcon = setIcon;
  vm.$onInit = onInit;

  vm.showMenu = false;
  vm.overlay = false;
  vm.popupElement = false;
  vm.currentUrl = $location.absUrl();
  vm.isSender = /passazhiram/.test(vm.currentUrl);

  function setIcon(icon) {
    vm.icon = '/interface/img/' + icon + '.png';
  }

  function toggleMenu() {
    vm.showMenu = !vm.showMenu;

    if (vm.showMenu) {
      vm.overlay = document.createElement('div');
      vm.overlay.className = 'opacity';
      document.body.appendChild(vm.overlay);

      $templateRequest("popupMenu2/popupMenu2ContentView.html").then(function (html) {
        vm.popupElement = angular.element(html);
        $animate.enter($compile(vm.popupElement)($scope), angular.element('body'));
      });
    } else {
      vm.close();
    }
  }

  function close() {
    vm.showMenu = false;
    if (vm.overlay) {
      vm.overlay.remove();
    }
    if (vm.popupElement) {
      $animate.leave(vm.popupElement);
    }
  }

  function onInit() {
    vm.icon = '/interface/img/' + (vm.showLinkMain ? '5' : '4') + '.png';
  }
}