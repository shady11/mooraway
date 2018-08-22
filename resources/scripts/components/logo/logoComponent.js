angular
  .module('app')
  .component('logoComponent', {
    templateUrl: 'logo/logoView.html',
    bindings: {
      type: "@"
    },
    controller: logoController
  })
;

function logoController($location) {
  var vm = this;

  vm.redirect = redirect;

  vm.host = $location.host();
  vm.currentUrl = $location.absUrl();
  vm.isSender = /passazhiram/.test(vm.currentUrl);

  function redirect() {
    if(vm.isSender) {
      window.location = $location.protocol() + "://" + vm.host + "/passazhiram";
    } else {
      window.location = $location.protocol() + "://" + vm.host;
    }
  }

}