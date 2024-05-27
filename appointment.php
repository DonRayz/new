    <!-- navbar -->
    <?
    require "./shablon/header.php";
    ?>

    <div class="container">
        <section id="appointment" class="py-4">
            <div class="container">
                <h2 class="text-center mb-4">Запись на прием</h2>
                <p class="text-center mb-4 fs-5">Заполните форму ниже, чтобы записаться на прием к нашим специалистам. Мы
                    свяжемся с вами для подтверждения записи и уточнения деталей.</p>
                <form>
                    <div class="row mb-3 fs-5">
                        <div class="col-md-6">
                            <label for="name" class="form-label">Имя и Фамилия<i>*</i></label>
                            <input type="text" class="form-control" id="name" placeholder="Введите ваше имя и фамилию" required>
                        </div>
                        <div class="col-md-6">
                            <label for="phone" class="form-label">Телефон<i>*</i></label>
                            <input type="tel" class="form-control" id="phone" placeholder="Введите ваш номер телефона" required>
                        </div>
                    </div>
                    <div class="row mb-3 fs-5">
                        <div class="col-md-6">
                            <label for="email" class="form-label">Email</label>
                            <input type="email" class="form-control" id="email" placeholder="Введите ваш email" required>
                        </div>
                        <div class="col-md-6">
                            <label for="date" class="form-label">Дата приема<i>*</i></label>
                            <input type="date" class="form-control" min="2024-05-27" id="date" required>
                        </div>
                    </div>
                    <div class="row mb-3 fs-5">
                        <div class="col-md-12">
                            <label for="doctor" class="form-label">Выберите врача<i>*</i></label>
                            <select class="form-select" id="doctor" required>
                                <option selected disabled value="">Выберите врача</option>
                                <option value="Иванов И.И.">Иванов И.И. — Офтальмохирург</option>
                                <option value="Петрова А.С.">Петрова А.С. — Диагност</option>
                                <option value="Сидоров К.К.">Сидоров К.К. — Терапевт</option>
                                <option value="Васильева Е.Н.">Васильева Е.Н. — Офтальмолог</option>
                                <option value="Михайлов С.А.">Михайлов С.А. — Лазерный хирург</option>
                                <option value="Новикова О.В.">Новикова О.В. — Окулист</option>
                            </select>
                        </div>
                    </div>
                    <div class="row mb-3 fs-5">
                        <div class="col-md-12">
                            <label for="message" class="form-label">Комментарий</label>
                            <textarea class="form-control" id="message" rows="3" placeholder="Напишите ваш комментарий или вопрос (необязательно)"></textarea>
                        </div>
                    </div>
                    <p class="mb-4 fs-5"><i>*</i> Обязательные для заполнения поля</p>
                    <div class="text-center mb-4">
                        <button type="submit" class="btn btn-primary btn-lg">Записаться</button>
                    </div>
                </form>
            </div>
        </section>
    </div>

    <!-- footer -->
    <?
    require "./shablon/footer.php";
    ?>