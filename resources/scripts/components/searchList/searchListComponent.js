angular
  .module('app')
  .component('searchListComponent', {
    templateUrl: 'searchList/searchListView.html',
    bindings: {
      fromId: "@",
      toId: "@",
      activeId: '='
    },
    controller: searchListController
  })
;

function searchListController($http, $document) {
  var vm = this;

  vm.sendRequest = sendRequest;
  vm.loadMore = loadMore;
  vm.goView = goView;
  vm.offset = 0;
  vm.items = [];
  vm.denyRequests = false;

  function goView(item) {
    location.href = '/search/view/' + item.id;
  }

  function sendRequest() {
    if (!vm.loading && !vm.denyRequests) {
      vm.loading = true;

      $http
        .get('/search/json/' + vm.fromId + "/" + vm.toId + "/" + vm.offset, {})
        .then(success)
        .catch(fail);

      vm.offset = vm.offset + 10;

      function success(response) {
        if (response.data.length) {
          vm.items = vm.items.concat(response.data);
        } else {
          vm.denyRequests = true;
        }
        vm.loading = false;
      }


      function fail(response) {
        vm.loading = false;
      }
    }


  }

  function loadMore() {
    angular.element($document).bind("scroll", function () {
      if (((window.innerHeight + window.scrollY) >= document.body.offsetHeight - 50) && vm.items.length) {
        vm.sendRequest();
      }
    });
  }

  vm.$onInit = function () {
    vm.sendRequest();
    vm.loadMore()
  }
}