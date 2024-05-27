<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="../image/icon/icon.svg" type="image/x-icon">
    <link rel="stylesheet" href="/assets/css/style.css">
    <script src="/assets/js/bootstrap.bundle.min.js"></script>
    <title>ОкоМед</title>
</head>

<body>
    <style>
    .navbar-nav .nav-link {
            position: relative;
            color: #fff;
            transition: color 0.3s;
        }

        .navbar-nav .nav-link::after {
            content: '';
            position: absolute;
            width: 100%;
            height: 2px;
            bottom: 0px;
            left: 0;
            background-color: #fff;
            visibility: hidden;
            transform: scaleX(0);
            transition: all 0.3s ease-in-out;
        }

        .navbar-nav .nav-link:hover::after {
            visibility: visible;
            transform: scaleX(1);
        }

        .navbar {
            background-color: #3c5099;
        }
    </style>
    <!-- Навигация -->
    <header>
        <nav class="navbar navbar-expand-lg" style="background-color:#3C5099;">
            <div class="container text-white">
                <a class="navbar-brand" href="./index.php"><img src="./image/icon/icon.svg" alt="" srcset=""></a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarText">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0 ">
                        <li class="nav-item">
                            <a class="nav-link text-white" aria-current="page" href="./index.php">Главная</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-white" href="./doctors.php">Врачи</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-white" href="./services.php">Услуги</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-white" href="./contacts.php">Контакты</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-white" href="./work_schedule.php">График работы врачей</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-white" href="./appointment.php">Записаться на прием</a>
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
        </nav>
    </header>