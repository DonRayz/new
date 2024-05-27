    <?
    require "./shablon/header.php";
    ?>


    <script src="https://api-maps.yandex.ru/2.1/?lang=ru_RU" type="text/javascript"></script>
    <script type="text/javascript">
        ymaps.ready(init);

        function init() {
            var myMap = new ymaps.Map("map", {
                center: [56.027982, 92.917744], // Координаты центра карты (Красноярск)
                zoom: 16
            });

            var myPlacemark = new ymaps.Placemark([56.027982, 92.917744], {
                balloonContent: ''
            }, {
                preset: 'islands#icon',
                iconColor: '#3c5099'
            });

            myMap.geoObjects.add(myPlacemark);
        }
    </script>




    <section id="contacts" class="py-4">
        <div class="container">
            <h2 class="text-center mb-4">Наши контакты</h2>
            <div class="row">
                <div class="col-md-6">
                    <h4>Адрес:</h4>
                    <p class="fs-5">660022, г. Красноярск, ул. Никитина, 1В</p>
                    <h4>Телефон:</h4>
                    <p class="fs-5">+7 (999) 123-45-67</p>
                    <h4>Email:</h4>
                    <p class="fs-5"> priem_kkokb@ocularc.ru</p>
                    <h4>Режим работы:</h4>
                    <p class="fs-5">Понедельник - Пятница: 9:00 - 18:00<br>Суббота - Воскресенье: выходной</p>
                </div>
                <div class="col-md-6">
                    <div class="d-flex align-items-center mt-4">
                        <div id="map" style="width: 800px; height: 400px">
                        </div>
                    </div>
                </div>
            </div>
            <div class="row mt-5">
                <div class="col-md-12">
                    <h4>Как добраться:</h4>
                    <p class="fs-5">Мы находимся по адресу: г. Красноярск, ул. Никитина, 1В. Вы можете доехать до нас на общественном транспорте или такси. Остановка «Глазной центр» находится в 5 минутах ходьбы от клиники.</p>
                    <h4>Автобусы:</h4>
                    <ul>
                        <li class="fs-5">21, 27, 30, 60, 65, 77, 83, 85, 87, 98, 173.</li>
                    </ul>
                    <h4>Троллейбусы:</h4>
                    <ul>
                        <li class="fs-5">5, 7, 15.</li>
                    </ul>
                    <h4>Парковка:</h4>
                    <p class="fs-5">Для удобства наших пациентов рядом с клиникой имеется бесплатная парковка. Места
                        ограничены, поэтому рекомендуем приезжать заблаговременно.</p>
                    <h4>Связаться с нами:</h4>
                    <p class="fs-5">Если у вас есть вопросы, вы можете связаться с нами по телефону или отправить письмо
                        на нашу электронную почту. Мы всегда рады помочь вам!</p>
                    <h4>Обратная связь:</h4>
                    <p class="fs-5">Оставьте свой отзыв о нашей клинике или предложите идеи по улучшению качества наших
                        услуг. Ваше мнение важно для нас!</p>
                </div>
            </div>
        </div>
    </section>

    <?
    require "./shablon/footer.php";
    ?>