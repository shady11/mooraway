angular
  .module('app')
  .component('selectUserTypeComponent', {
    templateUrl: 'selectUserType/selectUserTypeView.html',
    bindings: {},
    controller: selectUserTypeComponentController
  })
;

function selectUserTypeComponentController() {
  var vm = this;

  vm.isOpen = false;

  vm.open = open;
  vm.close = close;
  vm.toggle = toggle;

  function open() {
    vm.isOpen = true;
  }

  function close() {
    vm.isOpen = false;
  }

  function toggle() {
    vm.isOpen = !vm.isOpen;
  }

  vm.select = select;
  vm.items = [
    {type: '', name: '--------'},
    {type: 'user', name: 'Я пассажир'},
    {type: 'steward', name: 'Я стюарт'},
    {type: 'stewardess', name: 'Я стюардесса'}
  ];
  vm.selected = vm.items[0];

  function select(item) {
    vm.selected = item;
    vm.close();
  }
}
