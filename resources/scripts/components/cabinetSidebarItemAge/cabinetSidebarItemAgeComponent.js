angular
  .module('app')
  .component('cabinetSidebarItemAgeComponent', {
    templateUrl: 'cabinetSidebarItemAge/cabinetSidebarItemAgeView.html',
    bindings: {
      item: "<"
    },
    controller: cabinetSidebarItemAgeController
  })
;

function cabinetSidebarItemAgeController($http) {
  var vm = this;
  vm.showEdit = false;
  vm.url = '/profile/update/age';

  vm.toggleEdit = toggleEdit;
  vm.doneEdit = doneEdit;
  vm.cancelEdit = cancelEdit;
  vm.checkLength = checkLength;
  vm.$onInit = onInit;

  function toggleEdit() {
    vm.tmpItem = vm.item;
    vm.showEdit = !vm.showEdit;
  }

  function doneEdit() {
    console.log(vm.item);
    if (vm.item <= 0) {
      return;
    }
    var data = {
      age: vm.item
    };

    $http({
      method: 'POST',
      url: vm.url,
      data: data
    }).then(function () {
      vm.showEdit = false;
      vm.tmpItem = vm.item;
    });
  }

  function cancelEdit() {
    vm.showEdit = false;
    vm.item = vm.tmpItem;
  }

  function checkLength() {
    if (vm.item > 100) {
      vm.item = Math.trunc(vm.item / 10);
    }
  }

  function onInit() {
    vm.item = vm.item === 0? '': vm.item;
  }
}