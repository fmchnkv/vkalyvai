<span class="auth-reg__title">Введите код из СМС</span>
<p class="auth-reg__description">На указанный вами номер, было отправлено смс с кодом для подтверждения регистрации.</p>
<form action="/lk/auth.php?reg=2&step=5" class="auth-reg__form" method="post">
    <div class="auth-reg__code code-input">
        <input class="code-input__field" type="text" maxlength="1" inputmode="numeric" pattern="[0-9]{1}" name="CODE">
        <input class="code-input__field" type="text" maxlength="1" inputmode="numeric" pattern="[0-9]{1}" name="CODE">
        <input class="code-input__field" type="text" maxlength="1" inputmode="numeric" pattern="[0-9]{1}" name="CODE">
        <input class="code-input__field" type="text" maxlength="1" inputmode="numeric" pattern="[0-9]{1}" name="CODE">
    </div>
    <p class="auth-reg__extra">Получить повторно можно через: <span class="auth-reg__timer">60</span>c</p>
    <a href="#" class="auth-reg__resend">Получить повторно</a>
    <button type="submit" class="auth-reg__submit btn btn_size-m btn_primary">Продолжить</button>
</form>

<script>
    document.addEventListener('DOMContentLoaded', () => {
        const inputs = document.querySelectorAll('.code-input__field');

        inputs.forEach((input, index) => {
            // 1. Автоматический переход на следующий инпут при вводе
            input.addEventListener('input', (e) => {
                const value = e.target.value;

                // Оставляем только цифры
                e.target.value = value.replace(/[^0-9]/g, '');

                if (e.target.value && index < inputs.length - 1) {
                    inputs[index + 1].focus();
                }
            });

            // 2. Возврат на предыдущий инпут при нажатии Backspace
            input.addEventListener('keydown', (e) => {
                if (e.key === 'Backspace' && !input.value && index > 0) {
                    inputs[index - 1].focus();
                }
            });

            // 3. Обработка вставки скопированного 4-значного кода (Ctrl+V)
            input.addEventListener('paste', (e) => {
                e.preventDefault();
                const pasteData = e.clipboardData.getData('text').trim();

                // Проверяем, что вставлен именно цифровой код
                if (/^\d+$/.test(pasteData)) {
                    const numbers = pasteData.split('');

                    inputs.forEach((otpInput, i) => {
                        if (numbers[i]) {
                            otpInput.value = numbers[i];
                            // Фокусируем последний заполненный или самый крайний инпут
                            if (i < inputs.length - 1) inputs[i + 1].focus();
                        }
                    });
                }
            });
        });
    });
</script>