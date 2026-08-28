<div class="searching-save">
    <div class="container">
        <div class="searching-save__inner">
            <img src="/images/searching-save.png" alt="">
            <div class="searching-save__row">
                <span class="searching-save__title">Сохранить поиск?</span>
                <div class="searching-save__content">
                    <p class="searching-save__text">На Вкалывай регулярно появляются новые вакансии по вашему запросу. Сохраните поиск, чтобы сразу получать уведомления о свежих предложениях в личном кабинете и на почту.</p>
                    <button <?= $auth && $auth == 'Y' ? 'data-call-modal="saveSearch"' : 'data-call-modal="searchNoAutorized"'; ?> class="searching-save__btn btn btn_secondary btn_size-m">Сохранить</button>
                </div>
            </div>
        </div>
    </div>
</div>