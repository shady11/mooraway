angular
  .module('app')
  .component('flightStatusComponent', {
    templateUrl: 'flightStatus/flightStatusView.html',
    bindings: {
      id: '@',
      status: '@'
    },
    controller: flightStatusController
  })
;

function flightStatusController($rootScope) {
  var vm = this;

  vm.icons = [
    {status: 'meet', icon: 'icon-times'},
    {status: 'find', icon: 'icon-searching'},
    {status: 'flight', icon: 'icon-airfly'},
    {status: 'delivered', icon: 'icon-box'},
    {status: 'delete', icon: 'icon-cross'}
  ];

  vm.selected = {};

  vm.$onInit = onInit;

  function onInit() {
    vm.selected = _.findWhere(vm.icons, {status: vm.status});

    $rootScope.$on('changeFlightStatusSelect:change:' + vm.id, function (event, data) {
      vm.selected = _.findWhere(vm.icons, {status: data.status});
    })
  }
}