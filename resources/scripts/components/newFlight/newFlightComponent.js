angular
  .module('app')
  .component('newFlightComponent', {
    templateUrl: 'newFlight/newFlightView.html',
    bindings: {},
    controller: newFlightComponentController
  })
;

function newFlightComponentController($http, $element, ngDialog) {
  var
    vm = this,
    date = new Date();

  vm.loading = false;
  vm.errors = {};
  vm.fields = {
    fromId: '',
    toId: '',
    flightAt: moment().format('DD.MM.YYYY'),
    timeAt: new Date(1970, 0, 1, date.getHours(), date.getMinutes(), 0)
  };

  console.log(vm.fields.timeAt);

  vm.submit = submit;
  vm.close = close;

  function close() {
    ngDialog.closeAll();
  }

  function submit() {
    vm.loading = true;
    var
      data = angular.copy(vm.fields),
      fromId = parseInt($element.find('#flightFormFrom').attr('data-selected-id')),
      toId = parseInt($element.find('#flightFormTo').attr('data-selected-id'));

    data.timeAt = moment(data.timeAt).format('HH:mm:ss');
    data.fromId = fromId;
    data.toId = toId;

    $http({
      method: 'POST',
      url: '/carrier/cabinet/flight/create-ajax',
      data: data
    }).then(function () {
      location.reload();
    }).catch(function () {
      vm.loading = false;
    });
  }
}
