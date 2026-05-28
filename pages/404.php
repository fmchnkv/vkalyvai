<? require($_SERVER["DOCUMENT_ROOT"] . "/template/header.php"); ?>

<section class="page-404">
    <div class="container">
        <img class="page-404__img page-404__img_left" src="/images/404-left.png" alt="">
        <img class="page-404__img page-404__img_right" src="/images/404-right.png" alt="">
        <div class="page-404__inner">
            <div class="page-404__content">
                <h1 class="page-404__title">404</h1>
                <span class="page-404__subtitle">Страница не найдена</span>
                <p class="page-404__description">Что то пошло не так, возможно страница с таким адресом <br>удалена или не существует!</p>
                <div class="page-404__actions">
                    <a href="/pages/vacancies.php" class="page-404__btn btn btn_primary btn_size-m">Каталог вакансий</a>
                    <a href="/" class="page-404__btn btn btn_secondary btn_size-m">На главную</a>
                </div>
            </div>
        </div>
    </div>
</section>

<? require($_SERVER["DOCUMENT_ROOT"] . "/template/footer.php"); ?>