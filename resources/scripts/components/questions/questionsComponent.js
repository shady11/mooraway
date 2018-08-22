angular
    .module('app')
    .component('questionsComponent', {
      templateUrl: 'questions/questionsView.html',
      bindings: {},
      controller: questionsController
    })
;

function questionsController() {
  var vm = this;

  vm.questions = [
    {
      id: 0,
      title: "Почему это безопасно?",
      content: "<p class=\"text\">\n" +
                  "Во время передачи посылки, отправитель показывает Вам свой билет со всеми данными. Весь процесс описан правилами. подробнее читать тут:\n" +
                "</p>\n" +
                "<p class=\"text\">\n" +
                  "<a href=\"#\" class=\"text_blue\">правила</a>, <a href=\"#\" class=\"text_blue\">помощь</a> (перед отправкой необходимо обязательно ознакомится)\n" +
                " </p>"
    },
    {
      id: 1,
      title: "Сколько стоит отправка посылки?",
      content: "<p class=\"text\">\n" +
                  "О стоимости передачи посылки Вы договариваетесь с отправителем. На сервисе необходимо оплатить <span class=\"text_blue\">всего 1 $ (~60 руб.).</span> за получение контакта исполнителя. Эти деньги идут исключительно на повышение функционала и безопасности отправок!\n" +
                "</p>"
    },
    {
      id: 2,
      title: "Как происходит весь процесс?",
      content: "<p class=\"text\">\n" +
                  "<span class=\"text_blue\">1.</span> Вы вводите “откуда” - “куда” нужно отправить посылку\n" +
                  ". <span class=\"text_blue\">2.</span> Открывается список отправителей. <span class=\"text_blue\">3.</span> Выбираете отправителя. <span class=\"text_blue\">4.</span> Созваниваетесь, договариваетесь о встрече и цене. <span class=\"text_blue\">5.</span> Встречаетесь, проверяете билет и передаёте посылку.<br>\n" +
                  "<span class=\"text_blue\">6.</span> Отправителя встречают в аэропорту и оплачивают доставку\n" +
                "</p>"
    },
    {
      id: 3,
      title: "Чем сервис MooraWay лучше обычной почты?",
      content: "<p class=\"text\">\n" +
                  "<span class=\"text_blue\">1.</span> Быстрее в 50-100 раз. (среднее время 10-14 дней) <span class=\"text_blue\">2.</span> Дешевле, чем почта самолётом от почтовых служб (средняя цена у них ~ 150-200 $) <span class=\"text_blue\">3.</span> Не нужно стоять в очередях, чтобы оформить посылку <span class=\"text_blue\">4.</span> Новые знакомства с людьми из разных стран!\n" +
              "</p>"
    }
  ];

}