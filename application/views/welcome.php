<header class="header">
    <section class="header-top">
        <div class="container">
            <h1 class="header-top-title">Онлайн-сервис <strong>“Успешное собеседование”</strong></h1>
            <a href="#" class="btn btn-large" ng-click="showCallMe()"><i class="icon icon-phone"></i> Заказать звонок</a>
            <ul class="benefits">
                <li class="benefits-moneyback"><strong>Полный возврат средств</strong> если вы остались недовольны оказанной услугой.</li>
                <li class="benefits-warranty"><strong>Гарантия результата</strong> через нас прошло более 300 людей, получивших в итоге желаемую работу.</li>
                <li class="benefits-experts"><strong>Наши эксперты</strong> - уважаемые сотрудники крупных компаний.</li>
            </ul>
            <form class="free-consult-form free-consult-form-top" ng-submit="sendConsult()">
                <h3>Бесплатная консультация</h3>
                <div class="message" ng-show="consulted">
                    Ваша заявка отправлена. Мы свяжемся с вами в ближайшее время.
                </div>
                <div ng-hide="consulted">
                <input ng-model="name" type="text" placeholder="Ваше имя" class="form-control form-control-block" required>
                <input ng-model="skype" type="text" placeholder="Skype" class="form-control form-control-block">
                <input ng-model="email" type="email" placeholder="E-mail" class="form-control form-control-block" required>
                <input type="submit" value="Записаться" class="btn btn-medium btn-block">
                </div>
                <div class="shadow shadow-consult"></div>
            </form>
        </div>
    </section>
    <section class="header-bottom">
        <div class="container">
            <h1 class="content-title"><span>Для кого наша услуга?</span></h1>
            <h2 class="content-subtitle">Наша услуга предназначена <strong>только</strong> для людей, которые:</h2>
            <ul class="for-men">
                <li class="lens-icon">
                    Ищут работу
                </li>
                <li class="man-bubble-icon">
                    Были приглашены на собеседование
                </li>
                <li class="man-diagram-icon">
                    Хотят научиться проходить собеседования
                </li>
                <li class="man-money-icon">
                    Хотят получить желаемую работу
                </li>
            </ul>
        </div>
    </section>
</header>
<section class="block orange-block">
    <div class="container">
        <h1 class="content-title content-title-invert"><span>Что  я получу?</span></h1>
        <ul class="what-i-get">
            <li class="man-icon">Квалифицированную помощь в подготовке к собеседованию</li>
            <li class="hand-icon">Уверенность в себе и своих силах</li>
            <li class="people-bubble-icon">Улучшите ваши коммуникативные навыки</li>
            <li class="books-icon">Знания, о которых не пишут в книгах</li>
            <li class="hands-icon">Получите желаемую работу и зарплату</li>
        </ul>
    </div>
</section>
<section class="block">
    <div class="container">
        <h1 class="content-title"><span>И что вы предлагаете?</span></h1>
        <h2 class="content-subtitle">Мы предлагаем вам воспользоваться <strong>платной</strong> услугой, которая поможет получить желаемую работу.</h2>
        <section class="helps">
            <div class="helps-block helps-block-red">
                <h4 class="helps-block-title">БЕЗ нашей помощи</h4>
                <ul class="helps-block-list">
                    <li>&mdash; самостоятельно ищите любую работу</li>
                    <li>&mdash; возможно, вас приглашают на собеседование</li>
                    <li>&mdash; пришли на собеседование</li>
                    <li>&mdash; прошли собеседование или получили отказ</li>
                    <li>&mdash; получили предложение о работе<br><strong>за 30 000 <span class="rouble">c</span> в мес.</strong></li>
                </ul>
                <hr class="hr-red">
                <div class="helps-block-earn">
                    В год вы заработаете <strong>360 000  <span class="rouble">d</span></strong>
                    <i class="money-icon money-icon-red"></i>
                    <i class="money-icon money-icon-red"></i>
                    <i class="money-icon money-icon-red"></i>
                </div>
                <div class="shadow shadow-pink"></div>
            </div>
            <div class="helps-block helps-block-green">
                <h4 class="helps-block-title">С нашей помощью</h4>
                <ul class="helps-block-list">
                    <li>&mdash; самостоятельно ищите <strong>хорошую</strong> работу</li>
                    <li>&mdash; вас приглашают на <strong>много</strong> собеседований</li>
                    <li>&mdash; ходите по собеседованиям</li>
                    <li>&mdash; <strong>успешно</strong> проходите собеседования и получаете <strong>много</strong> предложений</li>
                    <li>&mdash; получаете предложения о работе<br><strong>от 60 000 <span class="rouble">c</span> \ мес.</strong></li>
                </ul>
                <hr class="hr-green">
                <div class="helps-block-earn">
                    В год вы заработаете <strong>720 000 <span class="rouble">d</span></strong>
                    <i class="money-icon money-icon-green"></i>
                    <i class="money-icon money-icon-green"></i>
                    <i class="money-icon money-icon-green"></i>
                    <i class="money-icon money-icon-green"></i>
                    <i class="money-icon money-icon-green"></i>
                    <i class="money-icon money-icon-green"></i>
                    <i class="money-icon money-icon-green"></i>
                </div>
                <div class="shadow shadow-green"></div>
            </div>
        </section>
        <form class="free-consult-form2" ng-submit="sendConsult()">
            <h3 class="free-consult-form2-title">Бесплатная консультация</h3>
            <div class="message" ng-show="consulted">
                Ваша заявка отправлена. Мы свяжемся с вами в ближайшее время.
            </div>
            <div ng-hide="consulted">
            <input required ng-model="name" type="text" placeholder="Ваше имя" class="form-control">
            <input ng-model="skype" type="text" placeholder="Skype" class="form-control">
            <input required ng-model="email" type="email" placeholder="E-mail" class="form-control">
            <input type="submit" value="Записаться" class="btn btn-medium">
            </div>
            <div class="shadow shadow-big-consult"></div>
        </form>
    </div>
</section>
<section class="block green-block">
    <div class="container">
        <h1 class="content-title-small">Итак, в чем суть нашего предложения:</h1>
        <div class="conds">
            <div class="conds-block conds-block-pig">
                Первичная консультация <strong>бесплатно</strong>
            </div>
            <div class="conds-block conds-block-gift">
                Пакет 90 минут обучения <strong>30 минут в подарок</strong>
            </div>
            <div class="conds-block conds-block-money">
                Остались недовольны услугой? <strong>полный возврат средств</strong>
            </div>
            <div class="conds-block conds-block-list">
                <strong>ПОДАРОК!</strong> анализ и корректировка резюме
            </div>
            <div class="conds-block conds-block-center">
                <div class="conds-block-time">
                    30 минут обучения
                </div>
                <div class="conds-block-old-price">
                    1900 <span class="rouble">b</span>
                </div>
                <div class="conds-block-new-price">
                    1140 <span class="rouble">c</span>
                </div>
                <div class="conds-block-discount">
                    40% скидка действует до среды
                </div>
            </div>
            <div class="conds-line conds-line-left conds-line-tl"></div>
            <div class="conds-line conds-line-right conds-line-tr"></div>
            <div class="conds-line conds-line-right conds-line-bl"></div>
            <div class="conds-line conds-line-left conds-line-br"></div>
        </div>
    </div>
</section>
<section class="block">
    <div class="container">
        <h1 class="content-title">
            <span>Почему я должен вам доверять?</span>
        </h1>
        <h2 class="content-subtitle">Сейчас в интернете столько обмана, что мы<br> понимаем все ваши сомнения и опасения. Однако, мы гарантируем следующее:</h2>
        <ul class="why">
            <li class="why-money">
                <strong>Полный возврат средств</strong>
                если вы остались недовольны оказанной услугой.
            </li><li class="why-guarantee">
                <strong>Гарантия результата</strong>
                через нас прошло<br> более 300 людей, получивших в итоге желаемую работу.
            </li><li class="why-experts">
                <strong>Наши эксперты</strong>
                - уважаемые сотрудники крупных компаний.
            </li>
        </ul>
    </div>
</section>
<section class="block orange-block">
    <div class="container">
        <h1 class="content-title content-title-invert"><span>Как мы работаем:</span></h1>
        <ul class="how-list">
            <li class="how-list-warn"><span>Выясняем проблему</span></li>
            <li class="how-list-spec"><span>Назначаем специалиста</span></li>
            <li class="how-list-edu"><span>Проводим обучение</span></li>
            <li class="how-list-work"><span>Вы получаете работу</span></li>
        </ul>
    </div>
</section>
<section class="block">
    <div class="container">
        <h1 class="content-title"><span>Несколько причин обратиться к нам</span></h1>
        <ul class="reasons">
            <li class="reasons-exp">
                <strong>Большой опыт работы</strong>
                Все сотрудники имеют большой<br> опыт работы в наборе персонала
            </li>
            <li class="reasons-work">
                <strong>Работаем быстро</strong>
                Вам не потребуется много времени, чтобы овладеть всеми навыками
            </li>
            <li class="reasons-every">
                <strong>Внимание к каждому</strong>
                К каждому клиенту инидвидуальный<br> подход в зависимости от его требований
            </li>
            <li class="reasons-price">
                <strong>Хорошая цена</strong>
                Мы обойдемся вам значительно дешевле потерянного на собеседованиях времени
            </li>
            <li class="reasons-troubles">
                <strong>Решение проблем</strong>
                Мы не отпустим вас, пока не научим<br> профессионально проходить собеседования
            </li>
            <li class="reasons-result">
                <strong>Гарантируем результат</strong>
                Если вы останетесь недовольны услугой мы вернем вам всем ваши деньги
            </li>
        </ul>
        <section class="replies">
            <div class="replies-slider">
                <div class="slider-larr"></div>
                <div class="slider-rarr"></div>
                <div class="replies-slider-container">
                    <div class="replies-slider-slides">
                        <div class="replies-slider-slide">
                            <img class="reply-avatar" src="images/avatar.jpg">
                            <div class="reply-text">
                                <div class="lquote"></div>
                                Здесь отличный выбор айфонов! Радует то, что товар можно обменять при обнаружении брака и оплата при доставке. Покупала iPhone 4S 64Gb. Мне понравилось! Буду рекомендовать этот магазин всем моим знакомым.
                            </div>
                            <div class="reply-author">
                                <strong>Рязанцева Светлана</strong>
                                Визажист
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <a href="#" class="btn btn-review" ng-click="showReview()">Написать отзыв</a>
            <form class="free-consult-form free-consult-form-replies" ng-submit="sendConsult()">
                <h3>Бесплатная консультация</h3>
                <div class="message" ng-show="consulted">
                    Ваша заявка отправлена. Мы свяжемся с вами в ближайшее время.
                </div>
                <div ng-hide="consulted">
                <input required ng-model="name" type="text" placeholder="Ваше имя" class="form-control form-control-block">
                <input type="text" placeholder="Skype" class="form-control form-control-block">
                <input required ng-model="email" type="email" placeholder="E-mail" class="form-control form-control-block">
                <input type="submit" value="Записаться" class="btn btn-medium btn-block">
                </div>
                <div class="shadow shadow-consult"></div>
            </form>
        </section>
        <h1 class="content-title">&nbsp;</h1>
        <footer>
            Онлайн-Сервис “УСПЕШНОЕ СОБЕСЕДОВАНИЕ”<br>
            <a href="#">www.rabotahelp.ru</a>
        </footer>
    </div>
</section>