angular
  .module('app')
  .component('shareComponent', {
    templateUrl: 'share/shareView.html',
    bindings: {
      beforeClick: '&',
    },
    controller: shareComponentController
  })
;

function shareComponentController(Socialshare) {
  var vm = this;

  vm.facebook = facebook;
  vm.vk = vk;
  vm.ok = ok;

  var pathArray = location.href.split('/'),
    protocol = pathArray[0],
    host = pathArray[2],
    url = protocol + '//' + host;

  function facebook() {
    vm.beforeClick();
    Socialshare.share({
      provider: 'facebook',
      attrs: {
        socialshareUrl: url
      }
    });

  }

  function vk() {
    vm.beforeClick();
    Socialshare.share({
      provider: 'vk',
      attrs: {
        socialshareText: 'MooraWay - почта пассажирами самолёта! Улетаешь - сэкономь на билете до 70%, нужно что-то отправить 2-5 часов и посылка на месте!',
        socialshareMedia: url + '/img/shoes_small.jpg',
        socialshareUrl: url
      }
    });
  }

  function ok() {
    vm.beforeClick();
    Socialshare.share({
      provider: 'ok',
      attrs: {
        socialshareText: 'MooraWay - почта пассажирами самолёта! Улетаешь - сэкономь на билете до 70%, нужно что-то отправить 2-5 часов и посылка на месте!',
        socialshareMedia: url + '/img/shoes_small.jpg',
        socialshareUrl: url
      }
    });
  }
}