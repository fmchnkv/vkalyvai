<span class="auth-reg__title">Основная информация</span>

<form action="/lk/auth.php?reg=1&step=2" class="auth-reg__form" method="post">
    <div class="auth-reg__group">
        <span class="auth-reg__caption">ФИО</span>
        <label class="auth-reg__input input">
            <input type="text" placeholder="Иванов Иван Иванович" class="input__field">
        </label>
    </div>
    <div class="auth-reg__group">
        <span class="auth-reg__caption">Гражданство</span>
        <div class="select" data-id="country">
            <label class="auth-reg__input select__input input input_has-icon">
                <input class="input__field" type="text" data-id="country" placeholder="Гражданство РФ">
                <span class="input__icon">
                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <g >
                            <path fill-rule="evenodd" clip-rule="evenodd" d="M17.4736 8.97065C17.7665 8.67775 18.2412 8.67775 18.5341 8.97065C18.827 9.26354 18.827 9.73832 18.5341 10.0312L12.5341 16.0312C12.2595 16.3058 11.8248 16.3232 11.5302 16.083L11.4736 16.0312L5.47358 10.0312C5.18068 9.7383 5.18068 9.26354 5.47358 8.97065C5.76647 8.67775 6.24123 8.67775 6.53412 8.97065L12.0038 14.4404L17.4736 8.97065Z" fill="#232323" />
                        </g>
                        <defs>
                            <clipPath>
                                <rect width="24" height="24" fill="white" />
                            </clipPath>
                        </defs>
                    </svg>
                </span>
            </label>

            <div class="select__dropdown">
                <ul class="select__dropdown-list" data-id="country">
                    <li class="select__option" data-value="Гражданство РФ">Гражданство РФ</li>
                    <li class="select__option" data-value="Беларусь">Беларусь</li>
                    <li class="select__option" data-value="Казахстан">Казахстан</li>
                </ul>
            </div>
        </div>
    </div>

    <div class="auth-reg__group">
        <span class="auth-reg__caption">Дата рождения</span>
        <div class="auth-reg__row auth-reg__row_3 auth-reg__row_birth">
            <div class="auth-reg__row-item">
                <label class="auth-reg__input input">
                    <input type="text" placeholder="День" class="input__field">
                </label>
            </div>
            <div class="auth-reg__row-item">
                <label class="auth-reg__input input">
                    <input type="text" placeholder="Месяц" class="input__field">
                </label>
            </div>
            <div class="auth-reg__row-item">
                <label class="auth-reg__input input">
                    <input type="text" placeholder="Год" class="input__field">
                </label>
            </div>
        </div>
    </div>

    <div class="auth-reg__group">
        <span class="auth-reg__caption">Пол</span>
        <div class="auth-reg__row auth-reg__row_2">
            <label class="auth-reg__input radio">
                <input class="radio__input" type="radio" name="gender" value="male" checked>
                <span class="radio__label">Мужской</span>
            </label>
            <label class="auth-reg__input radio">
                <input class="radio__input" type="radio" name="gender" value="female">
                <span class="radio__label">Женский</span>
            </label>
        </div>
    </div>

    <button type="submit" class="auth-reg__submit btn btn_size-m btn_secondary">Продолжить</button>
    <p class="auth-reg__accept">Продолжая, вы принимаете <a href="/pages/privacy.php">политику конфиденциальности</a> и <a href="/pages/legal.php">правила сервиса</a></p>
</form>