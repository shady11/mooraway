angular
  .module('app')
  .component('changeFlightStatusSelectComponent', {
    templateUrl: 'changeFlightStatusSelect/changeFlightStatusSelectView.html',
    bindings: {
      id: '@',
      status: '@'
    },
    controller: changeFlightStatusSelectController
  })
;

function changeFlightStatusSelectController($http, $rootScope) {

  var vm = this;

  /**
   * Инициализация
   * @type {onInit}
   */
  vm.$onInit = onInit;

  /**
   * Выбрать элемент
   * @type {choose}
   */
  vm.choose = choose;

  /**
   * Показать окно подтверждения удаления
   * @type {showConfirmDelete}
   */
  vm.showConfirmDelete = showConfirmDelete;

  /**
   * Спрятать окно подтверждения удаления
   * @type {showConfirmDelete}
   */
  vm.closeConfirmDelete = closeConfirmDelete;

  /**
   * Показать окно подтверждения удаления
   * @type {showConfirmDelete}
   */
  vm.showSelectList = showSelectList;

  /**
   * Спрятать окно с списком элементов селекта
   * @type {closeSelectList}
   */
  vm.closeSelectList = closeSelectList;

  /**
   * Показать / Спрятать окно с списком элементов селекта
   * @type {toggleSelectList}
   */
  vm.toggleSelectList = toggleSelectList;

  /**
   * Отправить запрос на сервер
   * @type {submit}
   */
  vm.submit = submit;
  vm.preview = preview;

  /**
   * Показать или спрятать окно подтверждения удаления
   * @type {boolean}
   */
  vm.isShowConfirmDelete = false;

  /**
   * Показать или спрятать окно с списком элементов селекта
   * @type {boolean}
   */
  vm.isShowSelectList = false;

  vm.selected = {};

  /**
   * Возможные действия над карточкой
   * @type {*[]}
   */
  vm.items = [
    {status: 'meet', name: 'Встреча'},
    {status: 'find', name: 'Поиск посылки'},
    {status: 'flight', name: 'Перелёт'},
    {status: 'delivered', name: 'Доставлено'},
    {status: 'delete', name: 'Удалить'}
  ];

  function preview(item) {
    $rootScope.$broadcast('changeFlightStatusSelect:change:' + vm.id, {status: item.status});
  }

  /**
   * Показать окно подтверждения удаления
   */
  function showConfirmDelete() {
    vm.isShowConfirmDelete = true;
  }

  /**
   * Спрятать окно подтверждения удаления
   */
  function closeConfirmDelete() {
    vm.isShowConfirmDelete = false;
  }

  /**
   * Показать окно с списком элементов селекта
   */
  function showSelectList() {
    vm.isShowSelectList = true;
  }

  /**
   * Показать / спрятать окно с списком элементов селекта
   */
  function toggleSelectList() {
    vm.isShowSelectList = !vm.isShowSelectList;
  }

  /**
   * Спрятать окно с списком элементов селекта
   */
  function closeSelectList() {
    vm.isShowSelectList = false;
  }

  /**
   * Инициализация компонента
   */
  function onInit() {
    vm.selected = _.findWhere(vm.items, {status: vm.status});
  }

  /**
   * Выбрать элемент
   * @param item
   * @returns {boolean}
   */
  function choose(item) {
    // Присваиваем выбранный item
    vm.selected = item;
    $rootScope.$broadcast('changeFlightStatusSelect:change:' + vm.id, {status: item.status});

    // Закрыть список
    vm.closeSelectList();
    // Если удалениеи показываем окно подтверждения
    if (item.status === 'delete') {
      vm.showConfirmDelete();
      return false;
    }

    // Вызываем событие отправки запроса на сервер
    vm.submit();
  }

  function submit(isDelete) {
    vm.closeSelectList();

    var method = 'POST';

    if (isDelete) {
      method = 'DELETE';
    }

    $http({
      method: method,
      url: '/carrier/cabinet/flight/change-status/' + vm.id,
      data: {
        status: vm.selected.status
      }
    }).then(function () {
      if (method == 'DELETE') {
        location.reload();
      }
    });
  }
}