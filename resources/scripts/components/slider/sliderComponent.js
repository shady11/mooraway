angular
  .module('app')
  .component('sliderComponent', {
    templateUrl: 'slider/sliderView.html',
    bindings: {},
    controller: sliderController
  })
;

function sliderController($interval) {
  var vm = this;

  vm.leafUp = leafUp;
  vm.leafDown = leafDown;
  vm.$onInit = onInit;
  vm.intervalPromise = false;

  vm.slides = [
    {
      id: 0,
      imageSrc: "interface/1.jpg",
      title: "Муравей<br> это -",
      content: "площадка, которая объеденяет людей<br> которым нужно отправить посылку и людей<br> которые хотят заработать на отправке"
    },
    {
      id: 1,
      imageSrc: "interface/2.jpg",
      title: "Когда необходим<br> сервис -",
      content: " 1.  Когда нужно отправить любую вещь до 10 кг<br> 2.  Когда хотите отправить очень быстро (3-6 часов)"
    },
    {
      id: 2,
      imageSrc: "interface/2.jpg",
      title: "Когда необходим <br> сервис -",
      content: "Это революция на почтовом рынке!!!<br> Теперь Вы можете отправлять то, что и не<br> планировали. Например     недавно испечённый пирог."
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