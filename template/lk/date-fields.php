<div class="lk__input-grid lk__main-form__date-wrapper">
    <div class="lk__input-wrapper">
        <div class="lk__custom-select">
            <input type="hidden" id="day" name="">
            <div class="lk__custom-select-choise">День</div>
        </div>
        <div class="lk__custom-select-list">
            <div class="lk__custom-select-list-container">
                <?php for ($i = 1; $i <= 31; $i++): ?>
                    <div class="lk__custom-select-item">
                        <?= $i ?>
                    </div>
                <?php endfor; ?>
            </div>
        </div>
    </div>
    <? require($_SERVER["DOCUMENT_ROOT"] . "/template/lk/fields/month-field.php"); ?>
    <? require($_SERVER["DOCUMENT_ROOT"] . "/template/lk/fields/year-field.php"); ?>
</div>