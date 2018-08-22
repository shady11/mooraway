angular
  .module('app')
  .component('becomeSenderComponent', {
    templateUrl: 'becomeSender/becomeSenderView.html',
    bindings: {
      csrfToken: '@'
    },
    controller: becomeSenderComponentController
  })
;

function becomeSenderComponentController($element, $http) {
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
      location.href = '/flight/step1/' + fromId + '/' + toId;
    }
  }
}
