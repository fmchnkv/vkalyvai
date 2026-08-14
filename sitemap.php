<? require($_SERVER["DOCUMENT_ROOT"]."/template/header.php"); ?>

<div class="breadcrumbs">
    <div class="container">
        <ul class="breadcrumbs__list">
            <li class="breadcrumbs__item breadcrumbs__item_home">
                <a href="/<?= isset($auth) && $auth == 'N' ? '?auth=N' : ''; ?>" class="link">Главная</a>
                <span>/</span>
            </li>
            <li class="breadcrumbs__item current">
                <span>Карта сайта</span>
            </li>
        </ul>
    </div>
</div>

<? 
$arMenu = [
    '/?client=Y&auth=Y' => 'Главная (Работодателю)',
    '/?auth=Y&client=N' => 'Главная (Соискателю)',
    '/?client=Y&auth=N' => 'Главная (Резюме для неавторизованных)',
    '/?client=N&auth=N' => 'Главная (Вакансии для неавторизованных)',
    '/pages/vacancies.php?auth=Y' => 'Каталог вакансий',
    '/pages/vacancies.php?auth=N' => 'Каталог вакансий (неавторизованный)',
    'pages/vacancy.php?auth=Y' => 'Вакансия',
    'pages/vacancy.php?auth=N' => 'Вакансия (неавторизованный)',
    '/pages/rezumes.php?client=Y&auth=Y' => 'Каталог резюме',
    '/pages/rezumes.php?client=Y&auth=N' => 'Каталог резюме (неавторизованный)',
    'pages/rezume.php?client=Y&auth=Y' => 'Резюме',
    '/pages/companies.php?auth=Y' => 'Каталог компаний',
    '/pages/companies.php?auth=N' => 'Каталог компаний (неавторизованный)',
    'pages/company.php?auth=Y' => 'Компания',
    'pages/company.php?auth=N' => 'Компания (неавторизованный)',
    '/pages/about.php?auth=Y' => 'О нас',
    '/pages/about.php?auth=N' => 'О нас (неавторизованный)',
    '/pages/faq.php?auth=Y' => 'Частые вопросы',
    '/pages/faq.php?auth=N' => 'Частые вопросы (неавторизованный)',
    '/pages/help.php?auth=Y' => 'Помощь',
    '/pages/help.php?auth=N' => 'Помощь (неавторизованный)',
    'pages/article.php?auth=Y' => 'Статья',
    'pages/article.php?auth=N' => 'Статья (неавторизованный)',
    '/pages/contacts.php?auth=Y' => 'Контакты',
    '/pages/contacts.php?auth=N' => 'Контакты (неавторизованный)',
    '/pages/privacy.php?auth=Y' => 'Политика конфиденциальности',
    '/pages/privacy.php?auth=N' => 'Политика конфиденциальности (неавторизованный)',
    '/pages/legal.php?auth=Y' => 'Пользовательское соглашение',
    '/pages/legal.php?auth=N' => 'Пользовательское соглашение (неавторизованный)',
    '/pages/oferta.php?auth=Y' => 'Публичная оферта',
    '/pages/oferta.php?auth=N' => 'Публичная оферта (неавторизованный)',
    '/pages/404.php?auth=Y' => '404',
    '/pages/404.php?auth=N' => '404 (неавторизованный)',
    '/lk/auth.php' => 'Авторизация (Входная страница)',
    '/lk/auth.php?role=1' => 'Авторизация (Соискатель)',
    '/lk/auth.php?role=2' => 'Авторизация (Работодатель)',
    '/lk/auth.php?reg=1' => 'Регистрация (Соискатель)',
    '/lk/auth.php?reg=2' => 'Регистрация (Работодатель)',
    '/lk/auth.php?pass=1' => 'Восстановление пароля',
    '/lk/auth.php?pass=2' => 'Смена пароля',
    '/lk/job_seeker/index.php' => 'ЛК - Профиль (Соискатель)',
    '/lk/job_seeker/responces.php' => 'ЛК - Отклики (Соискатель)',
    '/lk/job_seeker/favorite.php?companies=Y' => 'ЛК - Избранные компании (Соискатель)',
    '/lk/job_seeker/favorite.php?vacanies=Y' => 'ЛК - Избранные вакансии (Соискатель)',
    '/lk/job_seeker/notify.php' => 'ЛК - Уведомления (Соискатель)',
    '/lk/job_seeker/deals.php' => 'ЛК - Мои резюме (Соискатель)',
    '/lk/job_seeker/resume-form.php' => 'ЛК - Конструктор резюме (Соискатель)',
    '/lk/employer/index.php' => 'ЛК - Профиль (Работодатель)',
    '/lk/employer/prices.php' => 'ЛК - Тарифы (Работодатель)',
    '/lk/employer/notify.php' => 'ЛК - Уведомления (Работодатель)',
    '/lk/employer/responces.php' => 'ЛК - Отклики (Работодатель)',
    '/lk/employer/deals.php' => 'ЛК - Мои вакансии (Работодатель)',
    '/lk/employer/docs.php' => 'ЛК - Документы (Работодатель)',
    '/lk/employer/favorite.php' => 'ЛК - Избранное (Работодатель)',
    '/lk/employer/vacancy-form.php' => 'ЛК - Форма вакансии (Работодатель)',
    '/lk/moderator/appeals.php' => 'ЛК - Жалобы (Модератор)',
    '/lk/moderator/companies.php' => 'ЛК - Компании (Модератор)',
    '/lk/moderator/resume.php' => 'ЛК - Резюме (Модератор)',
    '/lk/moderator/vacancies.php' => 'ЛК - Вакансии (Модератор)',
    '/lk/moderator/job_seeker_profile_view.php' => 'ЛК - Просмотр профиля соискателя (Модератор)',
    '/chats/index.php' => 'Чаты (Соискатель)',
    '/chats/index.php?client=Y' => 'Чаты (Работodатель)',
    '/chats/index.php?moderator=Y' => 'Чаты (Модератор)',
];
?>

<div class="sitemap about-section">
    <div class="container">
        <div class="content">
            <h1 class="title">Карта сайта</h1>

            <ul>
                <? foreach ($arMenu as $url => $title) : ?>
                    <li>
                        <a href="<?=$url?>" target="_blank"><?=$title?></a>
                    </li>
                <? endforeach; ?>
            </ul>
        </div>
    </div>
</div>

<? require($_SERVER["DOCUMENT_ROOT"]."/template/footer.php"); ?>
