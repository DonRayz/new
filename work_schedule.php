<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./assets/css/bootstrap.min.css">
    <script src="./assets/js/bootstrap.bundle.min.js"></script>
    <link rel="shortcut icon" href="./image/icon/icon.svg" type="image/x-icon">
    <title>Главная</title>
</head>

<body>
    <!-- Навигация -->
    <header>
        <?
            require "./shablon/header.php";
        ?>
        <!-- <nav class="navbar navbar-expand-lg" style="background-color:#3C5099;">
            <div class="container text-white">
                <a class="navbar-brand" href="./index.php"><img src="./image/icon/icon.svg" alt="" srcset=""></a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarText"
                    aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarText">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0 ">
                        <li class="nav-item">
                            <a class="nav-link text-white" aria-current="page" href="index.html">Главная</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-white" href="doctors.html">Врачи</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-white" href="services.html">Услуги</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-white" href="contacts.html">Контакты</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-white" href="#">График работы врачей</a>
                        </li>
                    </ul>
                    <ul class="navbar-nav">
                        <li class="nav-item">
                            <a class="nav-link text-white" href="#">Войти</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-white" href="#">Зарегистрироваться</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav> -->
    </header>


    <section id="schedule" class="py-4">
        <div class="container">
            <h2 class="text-center mb-4">График работы врачей</h2>
            <div class="table-responsive">
                <table class="table table-striped table-bordered">
                    <thead class="thead-dark">
                        <tr>
                            <th scope="col">Врач</th>
                            <th scope="col">Специализация</th>
                            <th scope="col">Понедельник</th>
                            <th scope="col">Вторник</th>
                            <th scope="col">Среда</th>
                            <th scope="col">Четверг</th>
                            <th scope="col">Пятница</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>Иванов И.И.</td>
                            <td>Офтальмохирург</td>
                            <td>09:00 - 15:00</td>
                            <td>09:00 - 15:00</td>
                            <td>09:00 - 15:00</td>
                            <td>09:00 - 15:00</td>
                            <td>09:00 - 15:00</td>
                        </tr>
                        <tr>
                            <td>Петрова А.С.</td>
                            <td>Диагност</td>
                            <td>10:00 - 16:00</td>
                            <td>10:00 - 16:00</td>
                            <td>10:00 - 16:00</td>
                            <td>10:00 - 16:00</td>
                            <td>10:00 - 16:00</td>
                        </tr>
                        <tr>
                            <td>Сидоров К.К.</td>
                            <td>Терапевт</td>
                            <td>08:00 - 14:00</td>
                            <td>08:00 - 14:00</td>
                            <td>08:00 - 14:00</td>
                            <td>08:00 - 14:00</td>
                            <td>08:00 - 14:00</td>
                        </tr>
                        <tr>
                            <td>Васильева Е.Н.</td>
                            <td>Офтальмолог</td>
                            <td>12:00 - 18:00</td>
                            <td>12:00 - 18:00</td>
                            <td>12:00 - 18:00</td>
                            <td>12:00 - 18:00</td>
                            <td>12:00 - 18:00</td>
                        </tr>
                        <tr>
                            <td>Михайлов С.А.</td>
                            <td>Лазерный хирург</td>
                            <td>11:00 - 17:00</td>
                            <td>11:00 - 17:00</td>
                            <td>11:00 - 17:00</td>
                            <td>11:00 - 17:00</td>
                            <td>11:00 - 17:00</td>
                        </tr>
                        <tr>
                            <td>Новикова О.В.</td>
                            <td>Окулист</td>
                            <td>13:00 - 19:00</td>
                            <td>13:00 - 19:00</td>
                            <td>13:00 - 19:00</td>
                            <td>13:00 - 19:00</td>
                            <td>13:00 - 19:00</td>
                        </tr>
                        <tr>
                            <td>Новикова О.В.</td>
                            <td>Окулист</td>
                            <td>13:00 - 19:00</td>
                            <td>13:00 - 19:00</td>
                            <td>13:00 - 19:00</td>
                            <td>13:00 - 19:00</td>
                            <td>13:00 - 19:00</td>
                        </tr>
                        <tr>
                            <td>Новикова О.В.</td>
                            <td>Окулист</td>
                            <td>13:00 - 19:00</td>
                            <td>13:00 - 19:00</td>
                            <td>13:00 - 19:00</td>
                            <td>13:00 - 19:00</td>
                            <td>13:00 - 19:00</td>
                        </tr>
                    </tbody>
                </table>
            </div>
            <p class="mt-4 fs-5">Пожалуйста, обратите внимание, что расписание врачей может меняться в зависимости от
                различных факторов, таких как отпуск или внеплановые события. Рекомендуем заранее уточнять время приема
                у наших администраторов по телефону или электронной почте. Мы всегда рады помочь вам и ответить на все
                ваши вопросы.</p>
            <p class="mt-4 fs-5">Кроме того, для вашего удобства вы можете воспользоваться онлайн-записью на прием через наш
                сайт. Просто выберите нужного специалиста, удобное время и оставьте свои контактные данные. Наши
                администраторы свяжутся с вами для подтверждения записи.</p>
        </div>
    </section>

    <!-- Стили для footer-->
    <style>
        footer {
            background-color: #3C5099;
            color: #ffffff;
            padding: 40px 0;
        }

        .footer-column h4 {
            margin-bottom: 15px;
        }

        .footer-column ul {
            list-style: none;
            padding: 0;
        }

        .footer-column ul li {
            margin-bottom: 10px;
        }

        .footer-column ul li a {
            color: #ffffff;
            text-decoration: none;
        }

        .footer-column ul li a:hover {
            text-decoration: underline;
        }

        .social-media a {
            display: block;
        }

        .footer-bottom {
            text-align: center;
            margin-top: 20px;
            font-size: 0.8em;
        }
    </style>
    <!-- Footer  https://mdbootstrap.com/docs/standard/navigation/footer/-->
    <footer>
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-md-6 footer-column">
                    <h4>О клинике</h4>
                    <p>ОкоМед — современная офтальмологическая клиника, предоставляющая полный спектр услуг по
                        диагностике и лечению заболеваний глаз. Наши опытные врачи и передовое оборудование гарантируют
                        высокое качество медицинской помощи.</p>
                </div>
                <div class="col-lg-3 col-md-6 footer-column">
                    <h4>Услуги</h4>
                    <ul>
                        <li><a href="#services">Диагностика зрения</a></li>
                        <li><a href="#services">Лазерная коррекция</a></li>
                        <li><a href="#services">Лечение катаракты</a></li>
                        <li><a href="#services">Проверка зрения</a></li>
                    </ul>
                </div>
                <div class="col-lg-3 col-md-6 footer-column">
                    <h4>Навигация</h4>
                    <ul>
                        <li><a>Главная</a></li>
                        <li><a>О нас</a></li>
                        <li><a>фывфыв</a></li>
                        <li><a>фывфыв фыв фы</a></li>
                    </ul>
                </div>
                <div class="col-lg-3 col-md-6 footer-column">
                    <h4>Следите за нами</h4>
                    <ul class="social-media">
                        <li><a href="#facebook">Facebook</a></li>
                        <li><a href="#instagram">Instagram</a></li>
                        <li><a href="#twitter">Twitter</a></li>
                        <li><a href="#linkedin">LinkedIn</a></li>
                    </ul>
                </div>
            </div>
            <div class="footer-bottom">
                <h5>&copy; 2024 ОкоМед. Все права защищены.</h5>
            </div>
        </div>
    </footer>

    <!-- Footer -->

</body>

</html>