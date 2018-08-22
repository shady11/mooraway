angular
  .module('app')
  .component('sliderTopComponent', {
    templateUrl: 'sliderTop/sliderTopView.html',
    bindings: {
      page: '@'
    },
    controller: sliderTopController
  })
;

function sliderTopController($interval) {
  var vm = this;

  /**
   * Initialization
   */
  vm.$onInit = onInit;

  /**
   * slide Up
   * @type {leafUp}
   */

  vm.leafUp = leafUp;


  //set up slides to sender page
  vm.homeSlides = [
    {
      id: 0,
      content: "Найдите отправителя на MooraWay за 30 секунд, не нужно ездить в аэропорт"
    },
    {
      id: 1,
      content: "Быстро, безопасно передавайте вещи или документы между городами СНГ"

    },
    {
      id: 2,
      content: "За 3-6 часов люди доставят Вашу посылку по СНГ или РФ"
    }
  ];

  //set up slides to home page
  vm.senderSlides = [
    {
      id: 0,
      content: "Никаких лишних действий, Вас встретят в аэропорту и заберут посылку"
    },
    {
      id: 1,
      content: "Нужно только оставить свои контакты, чтобы с Вами связались"

    },
    {
      id: 2,
      content: "Покупаете билет на самолёт? Возьмите посылку и получите от 30 до 200 $ за рейс"
    }
  ];



  function onInit() {
    //if component in page sender then set up slides to sender page or to home page
    vm.slides = vm.page === 'sender' ? vm.senderSlides : vm.homeSlides;

    //set up first slide
    vm.slide = vm.slides[0];
    /**
     * automatically slide up by timeout 5s
     */
    $interval(vm.leafUp, 5000);
  }

  function leafUp() {
    //slide up before slide will be last and then setup current slide to zero
    vm.slide = vm.slide.id + 1 > vm.slides.length - 1 ? vm.slides[0] : vm.slides[vm.slide.id + 1];
  }
}