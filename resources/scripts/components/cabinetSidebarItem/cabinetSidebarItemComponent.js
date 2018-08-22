angular
  .module('app')
  .component('cabinetSidebarItemComponent', {
    templateUrl: 'cabinetSidebarItem/cabinetSidebarItemView.html',
    bindings: {
      item: "@",
      type: "@"
    },
    controller: cabinetSidebarItemController
  })
;

function cabinetSidebarItemController($http) {
  var vm = this;
  vm.showEdit = false;
  vm.url = '';

  vm.toggleEdit = toggleEdit;
  vm.doneEdit = doneEdit;
  vm.cancelEdit = cancelEdit;
  vm.$onInit = onInit;

  function toggleEdit() {
    vm.showEdit = !vm.showEdit;
  }

  function doneEdit() {
    var data = {};

    data[vm.type] = vm.item;

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

  function onInit() {
    vm.url = '/profile/update/' + vm.type;
    vm.tmpItem = vm.item;
  }
}