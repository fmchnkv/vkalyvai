<span class="auth-reg__title">ИНН</span>
<p class="auth-reg__description">Информация получена из открытых реестров ФНС РФ. <br>Убедитесь в правильности заполнения полей перед продолжением.
</p>

<form action="/lk/auth.php?reg=2&step=3" class="auth-reg__form" method="post">
    <div class="auth-reg__group">
        <div class="auth-reg__row auth-reg__row_2 auth-reg__row_inn">
            <div class="auth-reg__row-item auth-reg__row-item_full">
                <span class="auth-reg__caption">Полное название</span>
                <label class="auth-reg__input textarea">
                    <textarea class="textarea__field" data-auto-resize required>Общество с ограниченной ответственностью «Название компании»</textarea>
                </label>
            </div>
            <div class="auth-reg__row-item auth-reg__row-item_full">
                <span class="auth-reg__caption">Юридический адрес</span>
                <label class="auth-reg__input textarea">
                    <textarea class="textarea__field" data-auto-resize required>97022, г.Санкт-Петербург, ВНУТРИГОРОДСКАЯ ТЕРРИТОРИЯ ГОРОДА ФЕДЕРАЛЬНОГО ЗНАЧЕНИЯ МУНИЦИПАЛЬНЫй ОКРУГ АПТЕКАРСКИй ОСТРОВ, ПР-КТ МЕДИКОВ, Д. 5, ПОМЕЩ. 7Н, КОМ. 153</textarea>
                </label>
            </div>
            <div class="auth-reg__row-item auth-reg__row-item_full">
                <span class="auth-reg__caption">Фактический адрес</span>
                <label class="auth-reg__input textarea">
                    <textarea class="textarea__field" data-auto-resize required>97022, г.Санкт-Петербург, ВНУТРИГОРОДСКАЯ ТЕРРИТОРИЯ ГОРОДА ФЕДЕРАЛЬНОГО ЗНАЧЕНИЯ МУНИЦИПАЛЬНЫй ОКРУГ АПТЕКАРСКИй ОСТРОВ, ПР-КТ МЕДИКОВ, Д. 5, ПОМЕЩ. 7Н, КОМ. 153</textarea>
                </label>
            </div>
            <div class="auth-reg__row-item">
                <span class="auth-reg__caption">ИНН</span>
                <label class="auth-reg__input input">
                    <input type="text" value="1234567891" placeholder="-" class="input__field js-inn" required>
                </label>
            </div>
            <div class="auth-reg__row-item">
                <span class="auth-reg__caption">КПП</span>
                <label class="auth-reg__input input">
                    <input type="text" value="123456789" placeholder="-" class="input__field js-kpp" required>
                </label>
            </div>
            <div class="auth-reg__row-item">
                <span class="auth-reg__caption">ОГРН</span>
                <label class="auth-reg__input input">
                    <input type="text" value="1234567891234" placeholder="-" class="input__field js-ogrn" required>
                </label>
            </div>
            <div class="auth-reg__row-item">
                <span class="auth-reg__caption">Генеральный директор</span>
                <label class="auth-reg__input input">
                    <input type="text" value="Иванов Иван Иванович" placeholder="-" class="input__field" required>
                </label>
            </div>
        </div>
    </div>

    <button type="submit" class="auth-reg__submit btn btn_size-m btn_primary">Продолжить</button>
</form>

<script>
    document.addEventListener('DOMContentLoaded', function() {
        const innInput = document.querySelector('.js-inn');
        const kppInput = document.querySelector('.js-kpp');
        const ogrnInput = document.querySelector('.js-ogrn');

        // inputmask for INN, KPP, and OGRN
        if (innInput) {
            Inputmask("9999999999", {
                clearIncomplete: true
            }).mask(innInput);
        }
        if (kppInput) {
            Inputmask("999999999", {
                clearIncomplete: true
            }).mask(kppInput);
        }
        if (ogrnInput) {
            Inputmask("9999999999999", {
                clearIncomplete: true
            }).mask(ogrnInput);
        }
    });
</script>