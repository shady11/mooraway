@extends('layouts.app')

@section('content')
    <div class="header">
        <a href="#" class="header__logo icon-logo"></a>
        <div class="nav">
            <a href="#" class="nav__link nav__link_active">
                Найти отправителя
            </a>
            <a href="#" class="nav__switch">
                <span class="nav__switch-circle nav__switch-circle_left"></span>
            </a>
            <a href="#" class="nav__link ">
                Стать отправителем
            </a>
        </div>
        <div class="header-side">
            @if (Auth::check())
            <a href="#" class="link">Выход</a>
            @else
            <a href="#" class="link">Вход2</a>
            @endif
            <span class="icon-menu">
        <span class="icon-sprite"></span>
      </span>
            <div class="tooltip" style="display:none;">
        <span class="icon-close">
          <span class="icon-sprite"></span>
        </span>
                <div class="content tooltip__content tooltip__content_default">
                    <div class="avatar ">
                        <div class="avatar__cover avatar__cover_small"> <img class="pic" src="http://img1.rnkr-static.com/user_node_img/3143/62850064/C100/gossip-girl-tv-characters-photo-u1.jpg " alt=" " height="70 " width="70"> </div>
                    </div>
                    <ul class="list">
                        <li class="list__item"><a href="#" class="text">Правила отправки</a></li>
                        <li class="list__item"><a href="#" class="text">Ответы на вопросы</a></li>
                        <li class="list__item"><a href="#" class="text">Как работает сервис</a></li>
                    </ul>
                    <ul class="list">
                        <li class="list__item list__item_sub"><a href="#" class="text"><span class="icon-air"><span class="icon-sprite"></span></span></a></li>
                        <li class="list__item"><a href="#" class="text text_green">Стать отправителем</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <div class="banner" style="background-image: url('interface/img/slide.jpg')">
        <div class="banner__opacity"></div>
        <div class="banner__content">
            <h2 class="banner__title">Почта пассажирами самолёта</h2>
            <div class="banner__slider">
                <div class="slider__dots">
                    <span class="slider__dot"></span>
                    <span class="slider__dot slider__dot_active"></span>
                    <span class="slider__dot"></span>
                </div>
                <span class="text">Покупаете билет на самолёт? Возьмите посылку и получите от 30 до 200 $ за рейс</span>
            </div>
            <div class="category category_not-bg">
                <form>
                    <div class="category__item category__item_icon">
                        <div class="category__input category__input_figure-right">
                            <input class="input" type="text" placeholder="Фамилия" value="Откуда">
                            <span class="icon-figure"></span>
                        </div>
                        <span class="icon-location">
              <span class="icon-sprite"></span>
            </span>
                    </div>
                    <div class="category__item category__item_icon">
                        <div class="category__input category__input_figure-left">
                            <input class="input" type="text" placeholder="Фамилия" value="Куда">
                            <span class="icon-figure"></span>
                        </div>
                        <span class="icon-location">
              <span class="icon-sprite"></span>
            </span>
                    </div>
                    <div class="category__item">
                        <button class="button button_send button_send-pink"><span class="icon-search"></span>Найти отправителя</button>
                    </div>
                </form>
            </div>
            <div class="video">
                <span class="icon-play"><span class="icon-sprite"></span></span>
                <a href="#" class="link">Как это работает?</a>
            </div>
        </div>
    </div>
    <div class="main">
        <div class="content">
            <h2 class="content__title">Посылки, которые отправляют</h2>
            <div class="taber">
                <label class="taber__tab taber__tab_active">Популярные посылки</label>
                <label class="taber__tab">Редкие посылки</label>
                <label class="taber__tab">Дорогие посылки</label>
            </div>
            <div class="responsive slider slider_animate">
                <div class="slider__card">
                    <div class="flags">
            <span class="icon-flag icon-rus">
              <span class="icon-sprite"></span>
            </span>
                        <span class="icon-arrows">
              <span class="icon-sprite"></span>
            </span>
                        <span class="icon-flag icon-kirg">
              <span class="icon-sprite"></span>
            </span>
                    </div>
                    <div class="pic">
                        <span class=" icon-clothes"></span>
                    </div>
                    <div class="content">
                        <h3 class="slider__title">Одежда</h3>
                        <p class="slider__description">Популярное направление: Новосибирск - Бишкек</p>
                    </div>
                </div>
                <div class="slider__card slider__card_active">
                    <div class="flags">
            <span class="icon-flag icon-uk">
              <span class="icon-sprite"></span>
            </span>
                        <span class="icon-arrows">
              <span class="icon-sprite"></span>
            </span>
                        <span class="icon-flag icon-rus">
              <span class="icon-sprite"></span>
            </span>
                    </div>
                    <div class="pic">
                        <span class="icon-doc"></span>
                    </div>
                    <div class="content">
                        <h3 class="slider__title">Документы</h3>
                        <p class="slider__description">Популярное направление: Киев- Москва</p>
                    </div>
                </div>
                <div class="slider__card">
                    <div class="flags">
            <span class="icon-flag icon-rb">
              <span class="icon-sprite"></span>
            </span>
                        <span class="icon-arrows">
              <span class="icon-sprite"></span>
            </span>
                        <span class="icon-flag icon-tj">
              <span class="icon-sprite"></span>
            </span>
                    </div>
                    <div class="pic">
                        <span class=" icon-shoes"></span>
                    </div>
                    <div class="content">
                        <h3 class="slider__title">Обувь</h3>
                        <p class="slider__description">Популярное направление: Минск - Душамбе</p>
                    </div>
                </div>
                <div class="slider__card">
                    <div class="flags">
            <span class="icon-flag icon-rus">
              <span class="icon-sprite"></span>
            </span>
                        <span class="icon-arrows">
              <span class="icon-sprite"></span>
            </span>
                        <span class="icon-flag icon-kz">
              <span class="icon-sprite"></span>
            </span>
                    </div>
                    <div class="pic">
                        <span class=" icon-medicines"></span>
                    </div>
                    <div class="content">
                        <h3 class="slider__title">Лекарства</h3>
                        <p class="slider__description">Популярное направление: Новосибирск- Астана </p>
                    </div>
                </div>
                <div class="slider__card">
                    <div class="flags">
            <span class="icon-flag icon-uk">
              <span class="icon-sprite"></span>
            </span>
                        <span class="icon-arrows">
              <span class="icon-sprite"></span>
            </span>
                        <span class="icon-flag icon-rb">
              <span class="icon-sprite"></span>
            </span>
                    </div>
                    <div class="pic">
                        <span class=" icon-fruit"></span>
                    </div>
                    <div class="content">
                        <h3 class="slider__title">Сухофрукты</h3>
                        <p class="slider__description">Популярное направление: Киев- Минск</p>
                    </div>
                </div>
                <div class="slider__card">
                    <div class="flags">
            <span class="icon-flag icon-rus">
              <span class="icon-sprite"></span>
            </span>
                        <span class="icon-arrows">
              <span class="icon-sprite"></span>
            </span>
                        <span class="icon-flag icon-rus">
              <span class="icon-sprite"></span>
            </span>
                    </div>
                    <div class="pic">
                        <span class=" icon-surprise"></span>
                    </div>
                    <div class="content">
                        <h3 class="slider__title">Подарки</h3>
                        <p class="slider__description">Популярное направление:
                            Москва - Санкт-Петербург</p>
                    </div>
                </div>
                <div class="slider__card">
                    <div class="flags">
            <span class="icon-flag icon-uz">
              <span class="icon-sprite"></span>
            </span>
                        <span class="icon-arrows">
              <span class="icon-sprite"></span>
            </span>
                        <span class="icon-flag icon-kirg">
              <span class="icon-sprite"></span>
            </span>
                    </div>
                    <div class="pic">
                        <span class=" icon-cosmetics"></span>
                    </div>
                    <div class="content">
                        <h3 class="slider__title">Косметика</h3>
                        <p class="slider__description">
                            Популярное направление:
                            Ташкент- Бишкек
                        </p>
                    </div>
                </div>
                <div class="slider__card">
                    <div class="flags">
            <span class="icon-flag icon-kirg">
              <span class="icon-sprite"></span>
            </span>
                        <span class="icon-arrows">
              <span class="icon-sprite"></span>
            </span>
                        <span class="icon-flag icon-kz">
              <span class="icon-sprite"></span>
            </span>
                    </div>
                    <div class="pic">
                        <span class=" icon-dishes"></span>
                    </div>
                    <div class="content">
                        <h3 class="slider__title">Посуда</h3>
                        <p class="slider__description">
                            Популярное направление:
                            Ош- Астана
                        </p>
                    </div>
                </div>
                <div class="slider__card">
                    <div class="flags">
            <span class="icon-flag icon-rus">
              <span class="icon-sprite"></span>
            </span>
                        <span class="icon-arrows">
              <span class="icon-sprite"></span>
            </span>
                        <span class="icon-flag icon-rus">
              <span class="icon-sprite"></span>
            </span>
                    </div>
                    <div class="pic">
                        <span class=" icon-libs"></span>
                    </div>
                    <div class="content">
                        <h3 class="slider__title">Книги</h3>
                        <p class="slider__description">
                            Популярное направление:
                            Москва - Н. Новгород
                        </p>
                    </div>
                </div>
                <div class="slider__card">
                    <div class="flags">
            <span class="icon-flag icon-rus">
              <span class="icon-sprite"></span>
            </span>
                        <span class="icon-arrows">
              <span class="icon-sprite"></span>
            </span>
                        <span class="icon-flag icon-kirg">
              <span class="icon-sprite"></span>
            </span>
                    </div>
                    <div class="pic">
                        <span class=" icon-technique"></span>
                    </div>
                    <div class="content">
                        <h3 class="slider__title">Быт.техника</h3>
                        <p class="slider__description">
                            Популярное направление:
                            Киев- Минск
                        </p>
                    </div>
                </div>
                <div class="slider__card">
                    <div class="flags">
            <span class="icon-flag icon-uk">
              <span class="icon-sprite"></span>
            </span>
                        <span class="icon-arrows">
              <span class="icon-sprite"></span>
            </span>
                        <span class="icon-flag icon-rus">
              <span class="icon-sprite"></span>
            </span>
                    </div>
                    <div class="pic">
                        <span class=" icon-animal"></span>
                    </div>
                    <div class="content">
                        <h3 class="slider__title">Животные</h3>
                        <p class="slider__description">
                            Популярное направление:
                            Киев - Москва
                        </p>
                    </div>
                </div>
                <div class="slider__card">
                    <div class="flags">
            <span class="icon-flag icon-rus">
              <span class="icon-sprite"></span>
            </span>
                        <span class="icon-arrows">
              <span class="icon-sprite"></span>
            </span>
                        <span class="icon-flag icon-rb">
              <span class="icon-sprite"></span>
            </span>
                    </div>
                    <div class="pic">
                        <span class=" icon-paint"></span>
                    </div>
                    <div class="content">
                        <h3 class="slider__title">Картины</h3>
                        <p class="slider__description">
                            Популярное направление:
                            Санкт-Петербург- Минск
                        </p>
                    </div>
                </div>
                <div class="slider__card">
                    <div class="flags">
            <span class="icon-flag icon-uz">
              <span class="icon-sprite"></span>
            </span>
                        <span class="icon-arrows">
              <span class="icon-sprite"></span>
            </span>
                        <span class="icon-flag icon-tj">
              <span class="icon-sprite"></span>
            </span>
                    </div>
                    <div class="pic">
                        <span class=" icon-eat"></span>
                    </div>
                    <div class="content">
                        <h3 class="slider__title">Еда</h3>
                        <p class="slider__description">
                            Популярное направление:
                            Ташкент- Душамбе
                        </p>
                    </div>
                </div>
                <div class="slider__card">
                    <div class="flags">
            <span class="icon-flag icon-rus">
              <span class="icon-sprite"></span>
            </span>
                        <span class="icon-arrows">
              <span class="icon-sprite"></span>
            </span>
                        <span class="icon-flag icon-kz">
              <span class="icon-sprite"></span>
            </span>
                    </div>
                    <div class="pic">
                        <span class=" icon-linen"></span>
                    </div>
                    <div class="content">
                        <h3 class="slider__title">Нижнее бельё</h3>
                        <p class="slider__description">
                            Популярное направление:
                            Омск- Астана
                        </p>
                    </div>
                </div>
                <div class="slider__card">
                    <div class="flags">
            <span class="icon-flag icon-uk">
              <span class="icon-sprite"></span>
            </span>
                        <span class="icon-arrows">
              <span class="icon-sprite"></span>
            </span>
                        <span class="icon-flag icon-rb">
              <span class="icon-sprite"></span>
            </span>
                    </div>
                    <div class="pic">
                        <span class=" icon-broom"></span>
                    </div>
                    <div class="content">
                        <h3 class="slider__title">Метла</h3>
                        <p class="slider__description">
                            Популярное направление:
                            Киев- Минск
                        </p>
                    </div>
                </div>
                <div class="slider__card">
                    <div class="flags">
            <span class="icon-flag icon-uz">
              <span class="icon-sprite"></span>
            </span>
                        <span class="icon-arrows">
              <span class="icon-sprite"></span>
            </span>
                        <span class="icon-flag icon-kirg">
              <span class="icon-sprite"></span>
            </span>
                    </div>
                    <div class="pic">
                        <span class=" icon-armchair"></span>
                    </div>
                    <div class="content">
                        <h3 class="slider__title">Кресло</h3>
                        <p class="slider__description">
                            Популярное направление:
                            Ташкент - Бишкек
                        </p>
                    </div>
                </div>
                <div class="slider__card">
                    <div class="flags">
            <span class="icon-flag icon-rus">
              <span class="icon-sprite"></span>
            </span>
                        <span class="icon-arrows">
              <span class="icon-sprite"></span>
            </span>
                        <span class="icon-flag icon-rus">
              <span class="icon-sprite"></span>
            </span>
                    </div>
                    <div class="pic">
                        <span class=" icon-sound"></span>
                    </div>
                    <div class="content">
                        <h3 class="slider__title">Наушники</h3>
                        <p class="slider__description">
                            опулярное направление:
                            Иркутск - Новосибирск
                        </p>
                    </div>
                </div>
                <div class="slider__card">
                    <div class="pic">
                        <span class=" icon-phone"></span>
                    </div>
                    <div class="content">
                        <h3 class="slider__title">Смартфон</h3>
                        <p class="slider__description">
                            Популярное направление:
                            Москва - Н. Новгород
                        </p>
                    </div>
                </div>
                <div class="slider__card">
                    <div class="pic">
                        <span class="icon-doc"></span>
                    </div>
                    <div class="content">
                        <h3 class="slider__title">Ценные док-ты</h3>
                        <p class="slider__description">
                            Популярное направление:
                            Спб - Москва
                        </p>
                    </div>
                </div>
                <div class="slider__card">
                    <div class="pic">
                        <span class="icon-porcelain"></span>
                    </div>
                    <div class="content">
                        <h3 class="slider__title">Фарфор</h3>
                        <p class="slider__description">
                            Популярное направление:
                            Хабаровск - Иркутск
                        </p>
                    </div>
                </div>
                <div class="slider__card">
                    <div class="pic">
                        <span class="icon-auto-parts"></span>
                    </div>
                    <div class="content">
                        <h3 class="slider__title">Автозапчасти</h3>
                        <p class="slider__description">
                            Популярное направление:
                            Минск - Киев
                        </p>
                    </div>
                </div>
                <div class="slider__card">
                    <div class="pic">
                        <span class="icon-decorating"></span>
                    </div>
                    <div class="content">
                        <h3 class="slider__title">Украшения</h3>
                        <p class="slider__description">
                            Популярное направление:
                            Москва - Спб
                        </p>
                    </div>
                </div>
            </div>
            <div class="slider slider_gray slider_info">
                <div class="slider__item">
                    <div class="img">
                        <img src="interface/img/slider.jpg" alt="">
                    </div>
                </div>
                <div class="slider__item">
                    <div class="slider__dots">
                        <span class="slider__dot slider__dot_active"></span>
                        <span class="slider__dot"></span>
                        <span class="slider__dot"></span>
                    </div>
                    <div class="content">
            <span class="icon-mooraway-little">
              <span class="icon-sprite"></span>
            </span>
                        <h3 class="content__title">Когда необходим <br> сервис -</h3>
                        <p class="content__text-medium">
                            Это революция на почтовом рынке!!!
                            Теперь Вы можете отправлять то, что и не планировали. Например недавно испечённый пирог.
                        </p>
                    </div>
                    <div class="slider__arrows">
            <span class="slider__arrow slider__arrow_left">
              <span class="icon-arrow-left">
                <span class="icon-sprite"></span>
              </span>
            </span>
                        <span class="slider__arrow slider__arrow_right">
              <span class="icon-arrow-right">
                <span class="icon-sprite"></span>
              </span>
            </span>
                    </div>
                </div>

            </div>
            <h2 class="content__title">Популярные вопросы о сервисе</h2>
            <div class="acardion">
                <div class="acardion__item">
                    <div class="acardion__inner acardion__inner_active">
            <span class="icon-circle">
               <span class="icon-question-big">
                  <span class="icon-sprite"></span>
                </span>
            </span>
                        <span class="text">Почему это безопасно?</span>
                        <span class="icon-arrow-big-right">
              <span class="icon-sprite"></span>
            </span>
                        <div class="acardion__drop-down">
              <span class="icon-close">
                <span class="icon-sprite"></span>
              </span>
                            <p class="text">
                                Во время передачи посылки, отправитель показывает Вам свой билет со всеми данными. Весь процесс описан правилами. подробнее читать тут:
                            </p>
                            <p class="text">
                                <a href="#">правила</a>, <a href="#">помощь</a> (перед отправкой необходимо обязательно ознакомится)
                            </p>
                        </div>
                    </div>

                </div>
                <div class="acardion__item">
                    <div class="acardion__inner">
            <span class="icon-circle">
               <span class="icon-question-big">
                  <span class="icon-sprite"></span>
                </span>
            </span>
                        <span class="text">Сколько стоит отправка посылки?</span>
                        <span class="icon-arrow-big-right">
              <span class="icon-sprite"></span>
            </span>
                    </div>
                </div>
                <div class="acardion__item">
                    <div class="acardion__inner">
            <span class="icon-circle">
               <span class="icon-question-big">
                  <span class="icon-sprite"></span>
                </span>
            </span>
                        <span class="text">Как происходит весь процесс?</span>
                        <span class="icon-arrow-big-right">
              <span class="icon-sprite"></span>
            </span>
                    </div>
                </div>
                <div class="acardion__item">
                    <div class="acardion__inner">
            <span class="icon-circle">
               <span class="icon-question-big">
                  <span class="icon-sprite"></span>
                </span>
            </span>

                        <span class="text">Чем сервис MooraWay лучше обычной почты?</span>
                        <span class="icon-arrow-big-right">
              <span class="icon-sprite"></span>
            </span>
                    </div>
                </div>
            </div>
            <div class="slider slider_gray slider_cards">
                <div class="slider__solid"></div>
                <div class="slider__item">

                    <div class="content">
            <span class="icon-circle">
              <span class="icon-fly"></span>
            </span>
                        <h3 class="content__title">Посылки самолётом</h3>
                        <p class="content__text-medium">
                            На 2017 год сервис MooraWay - это почта пассажирами самолёта.  Теперь отправить
                            любую послыку очень легко, дешево и быстро.
                        </p>
                    </div>
                    <div class="settings">
                        <div class="slider__dots">
                            <span class="slider__dot"></span>
                            <span class="slider__dot slider__dot_active"></span>
                            <span class="slider__dot"></span>
                        </div>
                        <div class="slider__arrows">
              <span class="slider__arrow slider__arrow_left">
                <span class="icon-arrow-left">
                  <span class="icon-sprite"></span>
                </span>
              </span>
                            <span class="slider__arrow slider__arrow_right">
                <span class="icon-arrow-right">
                  <span class="icon-sprite"></span>
                </span>
              </span>
                        </div>
                    </div>
                </div>
                <div class="slider__item">
                    <div class="img">
                        <img src="interface/img/cards.jpg" alt="">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="footer">
        <div class="footer__side">
            <ul class="list">
                <li class="list__item">
                    <a href="#" class="footer__logo icon-footer-logo">
                        <svg viewBox="0 0 1450 272" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" fill="#cbcbcb;">
                            <g id="Page-1" stroke="none" stroke-width="1" fill="#cbcbcb;" fill-rule="evenodd">
                                <g id="Logoname" fill-rule="nonzero" fill="#cbcbcb">
                                    <path d="M748.48,12.67 C744.68,6.54 752.28,-0.98 758.57,1.09 C765.31,2.82 768.33,9.63 772.25,14.67 C773.61,16.15 774.74,18.56 777.04,18.58 C783.03,18.74 789.03,18.64 795.04,18.65 C794.18,17.49 793.33,16.34 792.5,15.18 C792.55,13.15 792.63,11.12 792.75,9.09 C795.57,6.61 799.11,4.36 803.04,4.75 C805.72,5.41 807.74,7.48 809.83,9.19 C812.72,11.77 816.21,13.53 819.27,15.91 C820.99,17.12 822.67,18.85 824.97,18.65 C833.98,18.84 842.99,18.55 852,18.72 C855.95,18.89 859.84,20.02 863.43,21.67 C867.5,23.82 870.14,29.98 866.92,33.87 C864.75,36.46 861.13,36.99 857.94,36.92 C829.3,36.54 800.65,36.84 772.01,36.72 C767.96,36.79 763.72,35.09 761.8,31.34 C757.89,24.74 752.48,19.18 748.48,12.67 Z" id="Shape"></path>
                                    <path d="M1093.26,9.41 C1101.35,8.94 1109.45,9.04 1117.54,9.45 L1117.37,10.55 C1135.04,13.55 1151.3,23.57 1162.12,37.84 C1173.63,52.87 1178.6,72.59 1176.07,91.29 C1174.29,102.45 1170.41,113.37 1163.77,122.6 C1140.87,155.02 1117.86,187.38 1094.93,219.79 C1082.58,236.99 1070.61,254.47 1058.05,271.52 C1052.75,265.9 1048.29,259.63 1043.92,253.28 C1030.62,234.71 1017.75,215.83 1004.47,197.24 C1000.54,192.21 997.69,186.46 993.8,181.42 C984.05,167.85 975.17,153.63 964.56,140.71 C936,100.13 907.34,59.61 878.77,19.04 C876.98,16.59 875.13,14.17 873.77,11.45 C881.79,11.3 889.82,11.38 897.85,11.41 C903.24,19.12 908.65,26.81 913.96,34.58 C915.99,34.63 918,34.64 920.06,34.63 C915.23,26.62 909.49,19.15 904.09,11.51 C911,11.36 917.93,11.13 924.83,11.66 C928.63,18.51 933.71,24.56 938.05,31.08 C955.42,55.68 972.76,80.29 990.14,104.88 C995.74,114.19 1002.47,122.75 1008.52,131.77 C1013.58,138.87 1018.24,146.27 1023.95,152.88 C1034.88,168.41 1046,183.82 1056.69,199.51 C1057.15,199.55 1058.07,199.62 1058.52,199.65 C1081.38,166.81 1104.73,134.31 1127.82,101.64 C1133.12,95.06 1136.06,86.58 1135.3,78.1 C1133.93,67.31 1126.67,57.57 1116.67,53.3 C1111.17,50.67 1104.89,51.21 1099,51.54 C1091.13,52.89 1083.99,57.8 1079.59,64.43 C1066.73,82.56 1053.89,100.7 1041.03,118.83 C1037.1,124.58 1032.77,130.06 1029.13,136 C1027.39,135.89 1026.09,135.03 1025.32,133.53 C1023.2,130.28 1020.74,127.28 1018.56,124.08 C1017.61,122.29 1019.2,120.75 1020.09,119.36 C1024.52,113.33 1028.68,107.11 1033.17,101.12 C1034.84,99.01 1032.18,97.3 1030.98,95.87 C1027.95,98.71 1025.88,102.34 1023.47,105.67 C1020.75,109.61 1017.73,113.37 1015.46,117.6 C1014.63,117.49 1013.83,117.39 1013.05,117.28 C1010.44,112.62 1006.83,108.64 1003.55,104.46 C1002.25,103.4 1002.04,101.48 1003.24,100.24 C1018.24,79.46 1032.86,58.4 1047.81,37.58 C1054.62,29.13 1062.92,21.54 1072.93,17.09 C1079.3,13.91 1086.14,10.98 1093.4,11.15 C1093.37,10.71 1093.3,9.84 1093.26,9.41 L1093.26,9.41 Z M1078.86,34.82 C1079.78,36.37 1080.59,39.23 1083.03,38.39 C1089.7,34.91 1096.95,31.74 1104.66,32.45 C1104.69,30.7 1104.72,28.94 1104.76,27.2 C1095.61,27.26 1086.63,30.05 1078.86,34.82 L1078.86,34.82 Z M1111.27,27.13 C1111.33,28.85 1111.41,30.56 1111.52,32.28 C1116.92,32.66 1122.12,34.35 1127.2,36.16 C1129.35,36.72 1131.89,38.55 1134,36.92 C1134.41,35.38 1135.5,33.01 1133.1,32.71 C1126.05,30.08 1118.8,27.77 1111.27,27.13 L1111.27,27.13 Z M1138.61,42.39 C1141.15,45.4 1144.48,47.76 1146.54,51.18 C1148.55,54.55 1150.01,58.22 1151.72,61.75 C1153.43,61.68 1155.15,61.6 1156.9,61.51 C1155.41,57.13 1153.5,52.89 1151.26,48.85 C1148.33,44.56 1144.69,40.79 1140.91,37.25 C1139.81,38.73 1137.5,40.3 1138.61,42.39 L1138.61,42.39 Z M1072.91,39.26 C1066.21,46.35 1059.79,53.77 1054.45,61.94 C1053.5,64.5 1056.17,65.48 1058.12,65.9 C1063.42,57.99 1069.01,50 1076.42,43.91 C1076.46,43.04 1076.52,42.17 1076.61,41.3 C1075.36,40.62 1074.13,39.95 1072.91,39.26 L1072.91,39.26 Z M919.75,41.6 C919.63,42.18 919.41,43.35 919.3,43.93 C919.6,43.58 920.2,42.87 920.51,42.52 C922.04,42.45 923.61,42.37 925.18,42.27 C923.37,42.58 921.59,42.93 919.84,43.33 C925.8,50.77 930.62,59.05 936.46,66.57 C937.87,68.82 940.65,68.48 942.96,68.71 C942.65,66.99 942.14,65.34 940.99,64.01 C935.45,56.69 930.66,48.81 924.95,41.62 C923.19,41.61 921.47,41.61 919.75,41.6 L919.75,41.6 Z M1153.54,68.66 C1153.27,76.4 1154.84,84.54 1151.88,91.93 C1152.59,92.7 1153.32,93.47 1154.07,94.24 C1155.1,94.33 1156.17,94.42 1157.26,94.51 C1157.6,90.28 1159.39,86.29 1159.42,82.03 C1159.45,77.15 1159.88,72.14 1158.22,67.46 C1156.64,67.87 1155.1,68.27 1153.54,68.66 L1153.54,68.66 Z M1048.9,69.44 C1044.16,76.46 1039.37,83.45 1034.19,90.15 C1035.49,91.33 1036.61,93.19 1038.54,93.33 C1043.64,86.27 1048.51,79.03 1053.71,72.04 C1053.3,71.39 1052.48,70.1 1052.07,69.46 C1050.99,69.45 1049.94,69.44 1048.9,69.44 L1048.9,69.44 Z M942.78,75.15 C947.27,83.05 952.99,90.21 958.06,97.76 C959.37,100.46 962.69,99.3 965.07,99.6 C960.86,91.57 954.82,84.64 949.95,77 C948.57,74.31 945.13,75.45 942.78,75.15 L942.78,75.15 Z M1149.91,100.3 C1146.88,107.58 1141.89,113.87 1137.23,120.18 C1138.42,121.56 1139.68,122.87 1141.02,124.15 C1146,116.52 1152.86,109.56 1154.93,100.46 C1153.24,100.39 1151.56,100.34 1149.91,100.3 L1149.91,100.3 Z M964.05,105.66 C968.63,113.99 974.93,121.29 979.98,129.37 C982,129.94 983.99,130.44 986.07,130.86 C985.7,129.08 985.29,127.31 984.1,125.9 C979.05,119.15 974.6,111.97 969.43,105.31 C967.62,105.42 965.83,105.54 964.05,105.66 L964.05,105.66 Z M1131.42,128.46 C1126.29,135.3 1121.67,142.53 1116.23,149.14 C1117.42,150.44 1118.36,152.11 1120.06,152.86 C1125.26,146.34 1129.8,139.31 1134.85,132.67 C1136.21,131.22 1135.51,129.18 1135.45,127.44 C1134.03,127.54 1132.17,126.81 1131.42,128.46 L1131.42,128.46 Z M985.71,137.35 C991.01,145.09 996.28,152.85 1001.91,160.37 C1003.92,160.44 1005.94,160.49 1007.98,160.51 C1002.67,152.28 996.81,144.37 991.16,136.35 C989.32,136.65 987.51,136.99 985.71,137.35 L985.71,137.35 Z M1111.91,155.13 C1107.1,162.48 1101.87,169.57 1096.55,176.56 C1096.54,177.03 1096.51,177.97 1096.5,178.45 C1097.14,179.18 1097.81,179.91 1098.49,180.65 C1099.29,180.52 1100.11,180.39 1100.95,180.25 C1105.16,172.78 1110.97,166.35 1115.6,159.14 C1116.12,156.53 1114.24,155.26 1111.91,155.13 L1111.91,155.13 Z M1006.89,167.4 C1012.47,176.28 1018.66,184.83 1024.9,193.28 C1026.53,193.39 1028.17,193.52 1029.84,193.65 C1029.56,192.49 1029.71,191.17 1028.94,190.2 C1023.55,182.72 1018.26,175.16 1013.09,167.52 C1011.02,167.45 1008.93,167.4 1006.89,167.4 L1006.89,167.4 Z M1090.91,184.2 C1086.28,191.68 1080.64,198.48 1075.73,205.75 C1076.58,207.23 1078.81,211.32 1080.2,208.38 C1084.87,201.9 1089.58,195.44 1094.22,188.94 C1095.98,186.43 1093.81,183.47 1090.91,184.2 L1090.91,184.2 Z M1029.91,200.4 C1034.73,208.36 1040.45,215.78 1045.75,223.43 C1047.34,223.46 1048.96,223.49 1050.59,223.52 C1050.55,222.28 1050.52,221.04 1050.52,219.8 C1050.1,220.7 1049.7,221.6 1049.32,222.5 C1048.15,222.58 1047.02,222.67 1045.9,222.77 C1047.35,222.39 1050.6,222.57 1049.59,220.07 C1045.23,213.45 1040.42,207.12 1036.07,200.49 C1034.01,200.42 1031.93,200.39 1029.91,200.4 L1029.91,200.4 Z M1069.93,213.37 C1066.24,219.41 1061.6,224.79 1057.86,230.8 C1057.46,230.43 1056.65,229.69 1056.25,229.32 C1054.44,229.35 1052.65,229.39 1050.88,229.45 C1051.04,230.13 1051.35,231.49 1051.51,232.17 C1053.65,234.51 1054.88,238.34 1058.45,238.77 C1063.71,231.07 1069.24,223.58 1074.7,216.03 C1074.32,215.35 1073.56,214 1073.19,213.32 C1072.08,213.32 1070.99,213.34 1069.93,213.37 Z" id="Shape"></path>
                                    <path d="M217.24,34.86 C220.59,34.08 224.05,34.2 227.47,34.47 C227.64,38.32 227.6,42.18 227.07,46 C226.4,49.69 227.78,53.32 227.67,57.01 C227.68,69.08 227.75,81.15 227.47,93.22 C226.23,104.79 227.01,116.46 226.38,128.06 C224.94,138.33 226.39,148.76 224.88,159.03 C224.55,168.67 224.56,178.33 224.28,187.98 C223.07,197.61 223.69,207.34 223.2,217.01 C222.12,222.61 222.67,228.35 221.83,233.97 C221.38,239.96 221.59,245.98 221.4,251.99 C221.52,257.4 220.3,262.72 220.26,268.13 C214.98,270.13 209.28,268.95 203.81,269.72 C197.12,270.72 190.26,269.8 183.64,271.46 C183.56,258.64 183.78,245.81 183.74,232.98 C185.09,222.05 184.5,211.01 184.68,200.02 C184.75,180.65 184.39,161.29 184.75,141.92 C186.09,127.63 185.57,113.22 185.55,98.88 C182.8,99.74 181.03,102.07 179.03,103.98 C174.54,108.5 169.92,112.88 165.13,117.09 C153.32,128.72 140.66,139.47 127.44,149.47 C124.24,151.71 121.19,155.6 116.83,154.64 C114.89,153.12 113.25,151.25 111.18,149.93 C103.1,144.75 95.62,138.71 88.23,132.61 C73.33,120.78 58.48,108.81 44.89,95.5 C44.51,96.04 44.13,96.59 43.77,97.14 C43.45,110.09 44.5,123.15 42.69,136.02 C42.5,152.69 42.49,169.37 42.61,186.04 C44.43,201.96 43.2,218.05 43.82,234.04 C44.89,242.71 43.98,251.47 44.48,260.17 C43.13,260.91 41.54,260.94 40.05,260.83 C31.72,260.3 23.36,260.64 15.03,260.74 C11.37,260.01 7.68,259.48 3.94,259.46 C8.64,259.22 13.29,259.94 17.95,260.42 C25.86,260.58 33.79,260.09 41.69,260.75 C42.37,260.06 43.06,259.37 43.74,258.68 C38.28,260.07 32.61,259.3 27.05,259.5 C22.37,259.28 17.59,260.01 13.01,258.81 C8.9,258.52 4.79,258.55 0.7,258.28 C2.28,251.63 1.15,244.75 1.85,238.02 C3.14,230.09 2.02,222.03 3.32,214.1 C3.88,172.07 3.05,130.03 3.65,88 C4.98,79.66 4.05,71.19 5.38,62.85 C5.23,55.46 6.86,48.19 6.62,40.79 C7.06,40.23 7.95,39.11 8.4,38.55 C14.24,38.26 20.16,37.94 25.94,39.1 C32.51,39.92 39.35,38.81 45.77,40.78 C53.22,47.78 60.84,54.62 67.99,61.95 C74.44,66.77 79.54,73.07 85.76,78.17 C97.15,88.8 109.5,98.41 120.44,109.51 C120.92,109.5 121.89,109.48 122.38,109.47 C131.6,100.31 141.91,92.24 150.07,82.05 C160.82,69.03 171.01,55.52 180.98,41.89 C182.58,40.19 185.16,40.33 187.28,39.73 C197.24,37.96 207.3,36.83 217.24,34.86 Z" id="Shape"></path>
                                    <path d="M789.2,59.64 C796.12,59.57 803.05,59.54 809.99,59.6 C811.63,59.36 812.77,60.65 814,61.53 C815.61,61.65 817.25,61.76 818.9,61.87 C818.85,61.31 818.76,60.21 818.72,59.65 C825.83,59.54 832.94,59.55 840.06,59.64 C872.15,104.41 903.55,149.7 935.5,194.56 C935.76,194.54 936.27,194.5 936.53,194.48 C944.99,182.61 953.42,170.7 961.81,158.78 C962.14,158.7 962.8,158.54 963.13,158.45 C966.7,163.82 970.87,168.76 974.36,174.17 C974.61,176.23 972.32,177.45 971.3,178.95 C971.1,181.51 971.74,184.43 975.06,183.78 C975.75,182.2 976.33,180.34 977.99,179.49 C979.35,179.91 979.72,181.5 980.56,182.53 C982.64,186.14 985.52,189.22 987.55,192.87 C987.96,194.41 986.57,195.48 985.91,196.69 C978.6,206.83 971.43,217.08 964.17,227.27 C955.5,241.14 945.12,253.84 936.13,267.49 C935.42,267.38 934.74,267.28 934.08,267.19 C928.77,257.18 922.12,247.95 915.5,238.79 C911.59,234.05 908.87,228.52 905.15,223.66 C881.77,190.5 858.37,157.37 835,124.21 C819.68,102.73 804.78,80.93 789.2,59.64 L789.2,59.64 Z M820.89,70.37 C821.04,71.08 821.34,72.48 821.49,73.19 C826.7,79.53 830.68,86.78 835.9,93.1 C837.44,95.41 840.1,93.92 842.19,93.47 C836.97,85.68 831.42,78.12 826.12,70.39 C824.36,70.37 822.62,70.36 820.89,70.37 L820.89,70.37 Z M843.97,103.45 C844.25,105.36 845.16,107.07 846.38,108.56 C850.48,113.95 854.02,119.76 858.15,125.13 C859.93,126.06 862.11,125.48 864.08,125.73 C863.08,122.68 860.97,120.23 859.17,117.65 C855.81,112.97 852.66,108.14 849.14,103.57 C847.4,103.52 845.68,103.48 843.97,103.45 L843.97,103.45 Z M864.96,134.27 C866.06,137.19 868.1,139.56 869.89,142.06 C873.14,146.59 876.17,151.28 879.57,155.71 C881.43,155.7 883.31,155.69 885.2,155.67 C881.21,148.11 875.44,141.67 870.98,134.39 C868.97,134.31 866.94,134.26 864.96,134.27 L864.96,134.27 Z M885.93,163.39 C886.34,166.35 888.38,168.6 890.05,170.95 C893.75,176.11 897.32,181.36 901.02,186.52 C903.13,186.62 905.23,186.65 907.36,186.61 C901.98,178.85 896.48,171.19 891.19,163.38 C889.42,163.37 887.66,163.37 885.93,163.39 L885.93,163.39 Z M954.84,202.63 C953.96,204.09 952.31,205.3 952.43,207.15 C953.26,208.47 954.56,210.52 956.41,209.53 C960.93,203.4 965.04,196.97 969.7,190.94 C968.77,189.34 967.84,187.74 966.94,186.14 C962.46,191.3 959.02,197.24 954.84,202.63 L954.84,202.63 Z M906.91,194.41 C911.96,203.19 918.53,211.03 923.99,219.57 C926.01,219.31 929.52,220.33 928.62,217.01 C923.48,209.45 917.93,202.15 913.04,194.42 C910.99,194.37 908.93,194.36 906.91,194.41 L906.91,194.41 Z M937.95,227.24 C937.19,227.38 936.44,227.53 935.72,227.68 C935.4,227.09 934.78,225.89 934.46,225.29 C932.64,225.38 930.82,225.49 929.03,225.61 C930.54,229.76 933.32,233.51 937.04,235.95 C942.54,230.14 946.52,223.1 951.37,216.77 C950.63,214.99 949.2,213.65 948,212.22 C944.83,217.35 940.8,221.91 937.95,227.24 Z" id="Shape"></path>
                                    <path d="M1306.69,124.71 C1318.7,125.38 1330.35,122.15 1342.23,121.15 C1347.8,128.57 1351.46,137.31 1357.8,144.17 C1364.21,152.09 1369.46,160.87 1374.2,169.88 C1375.49,171.83 1376.1,174.97 1379.02,174.84 C1384.68,162.14 1395.43,152.65 1402.49,140.77 C1407.32,134.26 1412.29,127.84 1416.74,121.03 C1421.76,121.01 1426.35,123.18 1431.04,124.67 C1437.32,126.81 1443.57,129.11 1449.67,131.74 C1449.85,133.18 1449.46,134.4 1448.49,135.4 C1444.26,140.19 1439.37,144.37 1435.22,149.23 C1431.96,152.87 1430.45,157.71 1427.07,161.27 C1414.91,175.15 1404.72,190.72 1396.78,207.38 C1396.28,208.5 1395.7,209.64 1395.71,210.91 C1395.48,229.83 1395.25,248.75 1395.78,267.67 C1384.69,267.7 1373.6,267.99 1362.52,267.62 C1362.64,252.07 1362.25,236.53 1362.57,220.99 C1362.5,217.38 1362.91,213.73 1362.36,210.15 C1350.74,194.87 1342.19,177.55 1331.35,161.73 C1326.27,154.74 1321.58,147.48 1316.38,140.58 C1312.63,135.64 1308.91,130.56 1306.69,124.71 Z" id="Shape"></path>
                                    <path d="M732.82,130.62 C739.46,129.03 746.51,130.35 752.97,127.77 C756.62,134.36 758.72,141.71 762.72,148.13 C765.27,152.01 767.66,155.99 769.73,160.16 C777.77,176.48 785.72,192.85 793.49,209.31 C801.46,226.61 807.74,244.77 817.36,261.27 C817.36,262.25 817.38,263.24 817.43,264.24 C809.77,264.59 802.27,266.34 794.83,268.04 C792.14,268.5 789.48,269.01 786.82,269.57 C784.31,264.91 781.27,260.45 779.8,255.31 C778.3,250.74 775.58,246.7 773.88,242.21 C772.68,239.14 771.33,236.12 769.44,233.42 C751.57,233.48 733.7,233.44 715.84,233.39 C711.78,244.76 709.11,256.52 706.32,268.23 C704.31,268.89 702.25,270.12 700.11,269.27 C695.93,268.12 691.57,268.53 687.32,267.96 C683.72,267.07 678.53,268.03 676.85,263.82 C678.81,254.6 680.76,245.37 683.23,236.28 C691.23,203.64 701.71,171.68 712.12,139.74 C713.02,137.08 712.49,132.81 715.93,131.91 C721.55,131.35 727.29,132.07 732.82,130.62 L732.82,130.62 Z M736.8,168.57 C736.36,170.94 735.75,173.28 734.94,175.54 C731.38,185.78 728.61,196.29 724.43,206.3 C734.66,206.73 744.75,203.63 755.04,204.59 C751.34,192 743.95,180.9 739.07,168.78 C738.29,168.7 737.54,168.63 736.8,168.57 Z" id="Shape"></path>
                                    <path d="M1235.99,131.22 C1240.76,130.21 1245.71,130.45 1250.48,129.25 C1254.27,135.83 1256.17,143.35 1260.4,149.71 C1264.05,155.1 1267.01,160.91 1269.85,166.77 C1279.32,186.42 1289.26,205.87 1297.64,226.03 C1301.54,235.07 1305.23,244.21 1309.68,253.01 C1311.54,257.11 1313.99,260.93 1315.59,265.16 C1304.84,265.67 1294.46,268.85 1283.87,270.52 C1281.78,265.65 1278.42,261.37 1277.06,256.19 C1275.76,251.84 1273.11,248.08 1271.49,243.86 C1270.26,240.66 1268.78,237.57 1267.15,234.56 C1254.42,234.28 1241.69,234.53 1228.97,234.44 C1223.9,234.32 1218.72,234.96 1213.81,233.46 C1209.25,244.92 1206.18,256.95 1204.1,269.09 C1199.97,271.6 1195.33,269.63 1190.96,269.15 C1186.29,268.32 1181.59,267.54 1176.84,267.63 C1176.22,267.23 1174.97,266.42 1174.35,266.02 C1175.2,258.56 1177.45,251.35 1178.8,243.98 C1183.32,226.65 1187.76,209.29 1193.17,192.21 C1194.86,186.08 1196.84,180.04 1198.73,173.97 C1199.83,170.71 1200.84,167.42 1201.87,164.14 C1202.96,160.87 1203.96,157.58 1205.11,154.33 C1207.2,147.37 1209.8,140.56 1211.63,133.52 C1219.79,133.43 1227.87,131.99 1235.99,131.22 L1235.99,131.22 Z M1233.41,172.89 C1231.18,180.25 1228.71,187.54 1226.36,194.87 C1225.12,198.81 1223.36,202.62 1222.91,206.78 C1232.66,207.14 1242.29,204.96 1252.06,205.59 C1251.71,202.89 1250.78,200.35 1249.6,197.93 C1245.55,188.37 1240.43,179.31 1236.21,169.83 C1234.58,170.26 1233.65,171.28 1233.41,172.89 Z" id="Shape"></path>
                                    <path d="M295.7,136.97 C307.75,131.32 321.7,131.34 334.5,134.12 C346.35,137.33 357.95,142.58 366.99,151.05 C373.13,156.97 379.16,163.09 384.06,170.1 C390.29,179.12 393.13,190.13 393.54,201 C393.76,205.35 392.08,209.49 391.82,213.81 C391.56,217.98 390.31,222.03 388.34,225.7 C384.46,233.07 380.49,240.6 374.5,246.51 C367.95,253.3 360.63,259.74 351.67,263.09 C346.14,265.79 340.18,267.51 334.11,268.47 C328.41,268.87 322.7,268.63 317,268.57 C301.59,267.35 287.99,259.28 274.9,251.69 C262.35,243.94 253.06,231.64 247.74,217.99 C247,213.64 245.26,209.47 245.26,205.01 C245.06,198.9 245.03,192.78 245.58,186.69 C247.5,178.99 249.66,171.13 254.17,164.48 C260.02,156.51 268.01,150.34 276.79,145.88 C282.78,142.28 289.21,139.54 295.7,136.97 L295.7,136.97 Z M312.05,166.41 C307.14,167.43 301.95,168.61 298.17,172.12 C293.6,176.26 288.59,180.33 285.98,186.07 C282.8,192.4 282.69,199.89 284.11,206.68 C287.51,218.64 299.56,224.43 309.93,229.29 C310.5,229.52 311.64,229.98 312.21,230.21 C318.22,232.34 324.8,232.12 331.04,231.31 C341.76,228.36 348.96,218.74 353.23,208.98 C354.68,199.74 353.17,189.77 347.93,181.88 C344.59,176.72 339.22,173.48 334.3,170.02 C327.63,166.33 319.55,164.72 312.05,166.41 Z" id="Shape"></path>
                                    <path d="M585.07,135.29 C602.01,134.8 619.31,140.5 631.73,152.26 C640,159.01 644.47,169.12 647.38,179.15 C647.97,182.42 647.66,185.85 646.68,189.02 C643.61,199.52 637.7,209.24 629.46,216.48 C628.16,217.62 626.55,218.36 625.06,219.17 C625.94,221.52 628.44,222.35 630.37,223.64 C640.1,229.74 649.58,236.27 658.47,243.56 C659.47,244.49 661.12,245.41 660.69,247.09 C656.24,252.17 651.58,257.08 647.51,262.48 C647.05,262.48 646.15,262.5 645.7,262.51 C638.55,257.13 630.71,252.76 623.58,247.35 C615.81,241.77 607.44,237.1 599.66,231.54 C597.19,229.34 593.87,230.92 591.05,231.31 C583.9,231.9 576.76,232.58 569.59,232.44 C569.68,245.04 569.38,257.66 570.13,270.25 C570.32,267.39 570.17,264.44 571.19,261.72 C571.35,264.63 571.31,267.56 571.35,270.48 C566.16,270.47 560.98,270.35 555.8,270.4 C559.53,269.84 563.31,269.7 567.07,269.43 C558.14,270.23 549.35,268.27 540.43,268.68 C540.37,232.11 540.42,195.55 540.41,158.98 C539.23,151.2 539.2,143.31 538.42,135.47 C541.87,134.41 545.45,135.55 548.99,135.41 C555.99,135.41 563.02,135.73 569.98,134.72 C575.03,134.13 580.01,135.54 585.07,135.29 L585.07,135.29 Z M570.61,161.64 C570.9,175.86 570.33,190.09 570.65,204.32 C574.82,204.28 578.94,203.58 583.08,203.13 C588.02,202.28 593.14,202.89 597.99,201.42 C605.88,199.63 612.94,193.97 615.47,186.16 C615.76,182.39 615.87,178.59 615.12,174.87 C612.15,169.28 605.77,167.39 600.4,164.94 C590.65,162.52 580.54,162.61 570.61,161.64 Z" id="Shape"></path>
                                    <path d="M434.91,162.79 C441.32,160.3 448.25,160.18 454.99,159.36 C463.01,159.43 471.24,158.47 479.05,160.79 C488.3,163.44 496.55,168.97 503.13,175.92 C507.59,180.23 511.36,185.27 513.85,190.97 C518.85,201.95 523.5,214.02 521.01,226.27 C519.67,231.23 518.78,236.53 515.62,240.75 C513.37,243.86 512.13,247.63 509.48,250.45 C502.5,257.23 494.3,262.74 485.16,266.15 C473.7,270.38 460.73,270.64 449.29,266.2 C443.71,263.96 438.18,261.36 433.53,257.49 C427.22,252.18 421.91,245.82 416.88,239.33 C408.54,228.56 404.28,214.53 405.79,200.96 C407.15,195.21 408.2,189.22 411.37,184.12 C416.78,174.9 424.36,166.05 434.91,162.79 L434.91,162.79 Z M456.97,185.75 C450.03,187.64 443.03,191.01 439.26,197.44 C435.56,202.53 435.92,209.15 436.68,215.07 C439.19,221.66 443.92,227.16 448.86,232.08 C453.07,236.44 458.88,239.44 465,239.57 C473.57,239.68 481.51,234.78 487.11,228.57 C490.94,222.08 491.28,214.23 490.31,206.93 C487.52,198.88 482.32,190.95 474.17,187.58 C468.86,185.02 462.68,184.81 456.97,185.75 Z" id="Shape"></path>
                                </g>
                            </g>
                        </svg>
                    </a>
                </li>
                <li class="list__item">
         <span class="text">
            Сервис работает на
         </span>
                </li>
                <li class="list__item">
          <span class="text">
            территории всего СНГ
          </span>
                </li>
                <li class="list__item">
          <span class="text">
            © 2017&nbsp&nbsp|&nbsp&nbspMW inc.
          </span>
                </li>
            </ul>
        </div>
        <div class="footer__side">
            <div class="footer__flex">
                <ul class="list">
                    <li class="list__item"><span class="text">Продукт</span></li>
                    <li class="list__item"><a href="#" class="text">Правила</a></li>
                    <li class="list__item"><a href="#" class="text">Помощь</a></li>
                    <li class="list__item"><a href="#" class="text">Польз.соглашение</a></li>
                </ul>
                <ul class="list">
                    <li class="list__item"><span class="text">Компания</span></li>
                    <li class="list__item"><a href="#" class="text">О MooraWay</a></li>
                    <li class="list__item"><a href="#" class="text">Партнёрам</a></li>
                    <li class="list__item"><a href="#" class="text">Тех. поддержка</a></li>
                </ul>
                <ul class="list">
                    <li class="list__item"><span class="text">Контакты</span></li>
                    <li class="list__item"><a href="#" class="text">Hello@mooraway.com</a></li>
                    <li class="list__item">
                        <a href="#" class="social">
            <span class="icon-vk">
             <span class="icon-sprite"></span>
            </span>
                        </a>
                        <a href="#" class="social">
            <span class="icon-inst">
              <span class="icon-sprite"></span>
            </span>
                        </a>
                        <a href="#" class="social">
            <span class="icon-yb">
              <span class="icon-sprite"></span>
            </span>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
@endsection