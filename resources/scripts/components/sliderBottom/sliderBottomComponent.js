angular
  .module('app')
  .component('sliderBottomComponent', {
    templateUrl: 'sliderBottom/sliderBottomView.html',
    bindings: {},
    controller: sliderBottomController
  })
;

function sliderBottomController($interval) {
  var vm = this;

  vm.leafUp = leafUp;
  vm.leafDown = leafDown;
  vm.$onInit = onInit;
  vm.intervalPromise = false;

  vm.slides = [
    {
      id: 0,
      title: "Посылки самолётом",
      content: " На 2017 год сервис MooraWay - это почта<br> пассажирами самолёта.  Теперь отправить<br> любую послыку очень легко, дешево и быстро.",
      image: "interface/img/cards.jpg"
    },
    {
      id: 1,
      title: "Посылки поездом, электричкой",
      content: "На январь 2018 года планируется обновление.<br> Через MooraWay можно будет отправлять посылки<br> и продукты на небольшие расстояния.",
      image: "interface/img/cards2.jpg"
    },
    {
      id: 2,
      title: "Посылки автобусом, маршр. такси",
      content: "Так же функция будет доступна с января 2018 года. Через MooraWay можно будет отправлять посылки меджу мелкими населенными пунктами внутри СНГ.",
      image: "interface/img/cards3.jpg"
    }
  ];

  vm.slide = vm.slides[0];

  function leafUp() {
    vm.slide = vm.slide.id + 1 > 2 ? vm.slides[0] : vm.slides[vm.slide.id + 1];
    _startInterval();
  }

  function leafDown() {
    vm.slide = vm.slide.id - 1 < 0 ? vm.slides[vm.slides.length - 1] : vm.slides[vm.slide.id - 1];
    _startInterval();
  }

  function _startInterval() {
    if (vm.intervalPromise != false) {
      $interval.cancel(vm.intervalPromise);
    }

    vm.intervalPromise = $interval(vm.leafUp, 6000);
  }

  function onInit() {
    _startInterval();
  }
}