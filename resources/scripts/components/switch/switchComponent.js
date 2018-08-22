angular
  .module('app')
  .component('switchComponent', {
    templateUrl: 'switch/switchView.html',
    bindings: {},
    controller: switchController
  })
;

function switchController($location) {
  var vm = this;

  vm.switchSide = switchSide;
  vm.$onInit = onInit;

  function onInit() {
    vm.host = $location.host();
    vm.currentUrl = window.location.href;
    vm.isSender = /passazhiram/.test(vm.currentUrl);
    vm.side = vm.isSender? 'right': 'left';
  }

  function switchSide() {
    vm.side = vm.side === 'right'? 'left': 'right';
    if(vm.isSender) {
      window.location = $location.protocol() + "://" + vm.host + $location.path();
    } else {
      window.location = $location.protocol() + "://" + vm.host + "/passazhiram" + $location.path();
    }
  }

}