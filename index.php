    <!-- navbar -->
    <?
    require "./shablon/header.php";
    ?>


    <!-- Слайдер -->
    <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-indicators">
            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
        </div>
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="./image/index/slider/slider_1.jpg" class="d-block w-100" alt="...">
                <div class="carousel-caption d-none d-md-block">
                    <h2 class="shadowtext">Добро пожаловать в ОкоМед</h2>
                    <h4 class="shadowtext">Лучшие услуги для вашего зрения.</h4>
                </div>
            </div>
            <div class="carousel-item">
                <img src="./image/index/slider/slider_2.jpg" class="d-block w-300" alt="...">
                <div class="carousel-caption d-none d-md-block">
                    <h2 class="shadowtext">Современное оборудование</h2>
                    <h4 class="shadowtext">Используем только передовые технологии.</h4>
                </div>
            </div>
            <div class="carousel-item">
                <img src="./image/index/slider/slider_3.jpg" class="d-block w-100" alt="...">
                <div class="carousel-caption d-none d-md-block">
                    <h2 class="shadowtext">Опытные врачи</h2>
                    <h4 class="shadowtext">Наши специалисты – настоящие профессионалы.</h4>
                </div>
            </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>

    <!-- Краткое описание клиники -->
    <section id="about" class="py-4">
        <div class="container">
            <div class="row">
                <div class="col-md-8">
                    <h2>О клинике</h2>
                    <p class="fs-5"><b>ОкоМед</b> — современная офтальмологическая клиника, предоставляющая полный
                        спектр услуг по
                        диагностике и лечению заболеваний глаз. Наши опытные врачи и передовое оборудование гарантируют
                        высокое качество медицинской помощи. Мы стремимся обеспечить наилучший уход за вашим зрением и
                        сделать ваше посещение максимально комфортным.</p>
                </div>
                <div class="col-md-4 text-center align-content-between">
                    <!-- Button trigger modal -->
                    <a href="/appointment.php"><button type="button" class="btn btn-primary btn-lg">
                            Записаться на прием
                        </button></a>

                </div>

                <!-- Modal -->

            </div>
        </div>
    </section>

    <!-- Секция Услуги -->
    <section id="services" class="py-4 bg-light">
        <div class="container">
            <h2 class="text-center  pb-4">Наши услуги</h2>
            <div class="row">
                <div class="col-md-4">
                    <div class="card mb-4">
                        <img src="/image/index/services/services_1.jpg" class="card-img-top" alt="Услуги">
                        <div class="card-body">
                            <h5 class="card-title">Диагностика зрения</h5>
                            <p class="card-text">Тщательная диагностика для выявления проблем со зрением и определения
                                эффективного лечения.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card mb-4">
                        <img src="/image/index/services/services_2.jpg" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">Лазерная коррекция</h5>
                            <p class="card-text">Современные методы лазерной коррекции для улучшения вашего зрения.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card mb-4">
                        <img src="/image/index/services/services_3.jpg" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">Лечение катаракты</h5>
                            <p class="card-text">Эффективное лечение катаракты с использованием передовых технологий.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Секция Врачи  -->
    <section id="doctors" class="py-4">
        <div class="container">
            <h2 class="text-center pb-4">Наши врачи</h2>
            <div class="row">
                <div class="col-md-4 text-center">
                    <img src="./image/index/doctor/Шимко_1.jpg" class="rounded-circle mb-3" alt="..." width="150" height="150">
                    <h5>Шимко Александр Дмитриевич</h5>
                    <p>Врач-офтальмолог</p>
                </div>
                <div class="col-md-4 text-center">
                    <img src="image/index/doctor/Жабкина_2.jpg" class="rounded-circle mb-3" alt="..." width="150" height="150">
                    <h5>Жабкина Анна Сергеевна</h5>
                    <p>Офтальмохирург</p>
                </div>
                <div class="col-md-4 text-center">
                    <img src="image/index/doctor/Смирнова_3.jpg" class="rounded-circle mb-3" alt="..." width="150" height="150">
                    <h5>Смирнова Владиславовна Веста</h5>
                    <p>Врач-офтальмолог</p>
                </div>
            </div>
        </div>
    </section>

    <!-- footer -->
    <?
    require "./shablon/footer.php";
    ?>