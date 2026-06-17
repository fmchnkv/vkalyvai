<span class="auth-reg__title">Основные данные</span>

<form action="/lk/auth.php?reg=2&step=4" class="auth-reg__form" method="post">
    <div class="auth-reg__group">
        <label class="auth-reg__input input">
            <input type="text" placeholder="Название компании" class="input__field">
        </label>
    </div>

    <div class="auth-reg__group">
        <label class="auth-reg__input input">
            <input type="text" placeholder="ФИО*" class="input__field">
        </label>
        <span class="auth-reg__comment">*Имя пользователя, который будет пользоваться сервисом.</span>
    </div>

    <div class="auth-reg__group">
        <label class="auth-reg__input input">
            <input type="tel" placeholder="Телефон" class="input__field">
        </label>
    </div>

    <div class="auth-reg__group">
        <label class="auth-reg__input input">
            <input type="email" placeholder="Электронная почта" class="input__field">
        </label>
    </div>

    <button type="submit" class="auth-reg__submit btn btn_size-m btn_primary">Продолжить</button>
</form>