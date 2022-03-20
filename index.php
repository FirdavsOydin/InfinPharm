<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/all.min.css">
    <link rel="stylesheet" href="css/media.css">
    <link rel="stylesheet" href="css/main.css">
    <title>INFINPHARM</title>
</head>

<body>
    <?php if(isset($_SESSION['send'])): ?>
    <div class="alert">
    <img class="footer__content-img" src="./images/headerLogo.png" alt="">
    <p class="alert__thank">Спасибо!</p>
    <p class="alert__desc">
    Ваша заявка успешно отправлена наш менеджер свяжется с вами в ближайшее время.
    </p>
    </div>
    <script>
        setTimeout(() => {
           document.querySelector('.alert').style.top = '100px'; 
           setTimeout(() => {
             document.querySelector('.alert').style.top = '-100%'; 
            }, 3000);
        }, 1000);
    </script>
    <?php endif; unset($_SESSION['send']) ?>
    <header class="header">
        <nav class="nav container d-flex justify-content-around">

            <a href="index.php" class="logo"><img src="./images/headerLogo.png" alt="" class="nav__logo"></a>
            <ul class="nav__list d-flex">
                <li><a href="index.php" class="nav__list-link">ГЛАВНАЯ</a></li>
                <li><a href="#titleInfo" class="nav__list-link">О НАС</a></li>
                <li><a href="#service" class="nav__list-link">УСЛУГИ</a></li>
                <li><a href="#contact" class="nav__list-link">КОНТАКТЫ</a></li>
                <li><a href="tel:.+998909985625" class="nav__list-link link2">+998-90-998-56-25</a></li>
            </ul>
        </nav>

        <div class="container header__content d-flex align-items-center justify-content-between">
            <div class="header__card">
                <h1 class="header__content-title">ООО «INFINPHARM» - ваше представительство по регистрации лекарств на
                    территории Узбекистана.</h1>
                <a href="tel:.+99890998tel:.+99890998562525" class="header__content-link">Связаться</a>
            </div>
            <img src="./images/headerImages.png" alt="" class="header__img">
        </div>
    </header>
    <main class="main">
        <div class="container main__card d-flex align-items-center justify-content-between">
            <div class="card__content">
                <h2 id="titleInfo" class="main__card-title">О НАС</h2>
                <p class="main__card-desc">Высокий профессионализм наших сотрудников и большой опыт работы компании в
                    сфере регистрации медицинской продукции позволяют быстро найти решение при возникновении спорных
                    вопросов или сложных ситуаций, а также снизить затраты на проведение процесса путем оптимизации
                    прохождения необходимых процедур. К каждому клиенту у нас индивидуальный подход.</p>
            </div>
            <img src="./images/mainImg1.png" alt="" class="main__card-img">
        </div>

        <div class="container main-section">
            <div class="section__card">
                <img src="./images/card1.png" alt="" class="section__card-img">
                <p class="section__card-desc">Качество предоставляемых услуг</p>
            </div>
            <div class="section__card">
                <img src="./images/card2.png" alt="" class="section__card-img">
                <p class="section__card-desc">Индивидуальный подход к каждому клиенту</p>
            </div>
            <div class="section__card">
                <img src="./images/card3.png" alt="" class="section__card-img">
                <p class="section__card-desc">Оперативность выполнения заказов</p>
            </div>
        </div>
        <h2 id="service" class="section__title">УСЛУГИ</h2>
        <p class="section__desc">Предоставляем комплексные услуги заказчикам и служим <br> для них поддерживающей
            средой.</p>
        <section class="section">
            <div class="section__box d-flex justify-content-around">
                <img src="./images/box.png" alt="" class="section__box-img">
                <div class="services-box">
                    <div class="services__content">
                        <img src="./images/img1.png" alt="" class="services__content-img">
                        <p class="services__content-desc">Помощь и Консультация по регистрации лекарственных средств</p>
                        <a href="tel:.+998909985625" class="services__content-link">Связаться</a>
                    </div>
                    <div class="services__content">
                        <img src="./images/img2.png" alt="" class="services__content-img">
                        <p class="services__content-desc">Регистрация биологически активных <br> добавок и косметики</p>
                        <a href="tel:.+998909985625" class="services__content-link">Связаться</a>
                    </div>
                </div>
            </div>
            <div class="section__func">
                <div class="services__content func__card">
                    <img src="./images/1.png" alt="" class="services__content-img">
                    <p class="services__content-desc">Регистрация изделий медицинского назначения и Медицинской Техники
                    </p>
                    <a href="tel:.+998909985625" class="services__content-link">Связаться</a>
                </div>
                <div class="services__content func__card">
                    <img src="./images/2.png" alt="" class="services__content-img">
                    <p class="services__content-desc">Подготовка и сбор регистрационного досье, согласно требованиям РУз
                    </p>
                    <a href="tel:.+998909985625" class="services__content-link">Связаться</a>
                </div>
                <div class="services__content func__card">
                    <img src="./images/3.png" alt="" class="services__content-img">
                    <p class="services__content-desc">Внесение изменений в регистрационное досье (макеты, инструкции и
                        т.д.)</p>
                    <a href="tel:.+998909985625" class="services__content-link">Связаться</a>
                </div>
                <div class="services__content func__card">
                    <img src="./images/4.png" alt="" class="services__content-img">
                    <p class="services__content-desc">Внесение изменений в регистрационное удостоверение</p>
                    <a href="tel:.+998909985625" class="services__content-link">Связаться</a>
                </div>
                <div class="services__content func__card">
                    <img src="./images/5.png" alt="" class="services__content-img">
                    <p class="services__content-desc">Сотрудничество с испытательными центрами</p>
                    <a href="tel:.+998909985625" class="services__content-link">Связаться</a>
                </div>
                <div class="services__content func__card">
                    <img src="./images/6.png" alt="" class="services__content-img">
                    <p class="services__content-desc">Сопровождение в проведении испытаний</p>
                    <a href="tel:.+998909985625" class="services__content-link">Связаться</a>
                </div>
                <div class="services__content func__card">
                    <img src="./images/7.png" alt="" class="services__content-img">
                    <p class="services__content-desc">Взаимодействие с регистрирующими органами</p>
                    <a href="tel:.+998909985625" class="services__content-link">Связаться</a>
                </div>
                <div class="services__content func__card">
                    <img src="./images/8.png" alt="" class="services__content-img">
                    <p class="services__content-desc">Консультационные услуги в максимально короткие сроки.</p>
                    <a href="tel:.+998909985625" class="services__content-link">Связаться</a>
                </div>
            </div>
        </section>

        <div class="form" id="form">
            <div class="container form__container d-flex justify-content-around align-items-center">

                <form method="POST" action="./totelegramphp/totelegram.php" id="form" class="d-flex f-column align-items-center">
                    <h2 class="form__title">Напишите нам</h2>
                    <input type="text" placeholder="ФИО" class="input_name" required name="name">
                    <label for="" class="form__label">
                        <input type="tel" name="tel" placeholder="Телефон" class="input_mail " required>
                        <input type="email" name="email" placeholder="Email" class="input_mail" required>
                    </label>
                    <input type="text" name="msg" placeholder="Текст сообщения" class="input_name" required>
                    <input type="submit" placeholder="Отправить" class="btn-send">
                </form>

                <div class="form__card"id="contact">
                    <img src="./images/headerLogo.png" alt="" class="logo-main">
                    <h4 class="form__card-title">ООО «INFINPHARM»
                    </h4>
                    <p class="form__card-desc"><span class="form__card-span">Адрес</span>: Узбекистан, г.Ташкент,
                        Мирзо-Улугбекский р-н, ул.С.Азимова
                    </p>

                    <div class="form__card-contact d-flex align-items-center margin-bottom">
                        <span class="form__card-span">Тел<span class="contact__dots">:</span></span>
                        <a href="tel:.+998909985625" class="form__card-link"> +998-90-998-56-25</a>
                    </div>
                    <div class="form__card-contact d-flex align-items-center">
                        <span class="form__card-span">e-mail<span class="contact__dots">:</span></span>
                        <a href="#!" class="form__card-link"> infinpharm@gmail.com</a>
                    </div>
                </div>
            </div>
        </div>
    </main>
    
    <footer class="footer">
        <div class="footer__content d-flex justify-content-center f-column align-items-center">
            <img class="footer__content-img" src="./images/headerLogo.png" alt="">
            <p class="footer__content-desc">INFINPHARM© 2022 All Rights Reserved</p>
        </div>
    </footer>
 <script src="js/form.js"></script>
</body>

</html>