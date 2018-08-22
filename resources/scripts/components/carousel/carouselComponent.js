angular
  .module('app')
  .component('carouselComponent', {
    templateUrl: 'carousel/carouselView.html',
    bindings: {},
    controller: carouselController
  })
;

function carouselController() {
  var vm = this;

  /**
   * initialization
   * @type {onInit}
   */
  vm.$onInit = onInit;

  /**
   * activate selectedSlide
   * @type {selectSlide}
   */
  vm.selectSlide = selectSlide;

  function onInit() {
    vm.showSlide = 0;
  }

  function selectSlide(slide) {
    vm.showSlide = slide;
  }
}