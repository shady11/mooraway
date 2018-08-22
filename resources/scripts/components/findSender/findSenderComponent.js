angular
  .module('app')
  .component('findSenderComponent', {
    templateUrl: 'findSender/findSenderView.html',
    bindings: {
      csrfToken: '@'
    },
    controller: findSenderComponentController
  })
;

function findSenderComponentController($element, $http) {
  var vm = this;

  vm.fields = {
    from: '',
    to: ''
  };

  vm.submit = submit;

  function submit() {
    var fromId = $element.find('#homeFormFrom').attr('data-selected-id');
    var toId = $element.find('#homeFormTo').attr('data-selected-id');

    if (fromId && toId) {
      location.href = '/search/' + fromId + '/' + toId;
    }
  }
}
