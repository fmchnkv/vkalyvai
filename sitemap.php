<? require($_SERVER["DOCUMENT_ROOT"]."/template/header.php"); ?>

<div class="breadcrumbs">
    <div class="container">
        <ul class="breadcrumbs__list">
            <li class="breadcrumbs__item breadcrumbs__item_home">
                <a href="/" class="link">Главная</a>
                <span>/</span>
            </li>
            <li class="breadcrumbs__item current">
                <span>Карта сайта</span>
            </li>
        </ul>
    </div>
</div>

<? 
$arMenu = [
    '/' => 'Главная (Соискателю)',
    '/?client=Y' => 'Главная (Работодателю)',
    '/?auth=Y' => 'Главная (Авторизованный пользователь)',
    '/?client=Y&auth=N' => 'Главная (Резюме для неавторизованных)',
    '/pages/vacancies.php' => 'Каталог вакансий',
    'pages/vacancy.php' => 'Вакансия',
    '/pages/rezumes.php' => 'Каталог резюме',
    'pages/rezume.php' => 'Резюме',
    '/pages/companies.php' => 'Каталог компаний',
    'pages/company.php' => 'Компания',
    '/pages/about.php' => 'О нас',
    '/pages/faq.php' => 'Частые вопросы',
    '/pages/help.php' => 'Помощь',
    'pages/article.php' => 'Статья',
    '/pages/contacts.php' => 'Контакты',
    '/pages/privacy.php' => 'Политика конфиденциальности',
    '/pages/legal.php' => 'Пользовательское соглашение',
    '/pages/oferta.php' => 'Публичная оферта',
    '/pages/404.php' => '404',
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
    '/lk/job_seeker/favorite.php?deals=Y' => 'ЛК - Избранные резюме (Соискатель)',
    '/lk/job_seeker/notify.php' => 'ЛК - Уведомления (Соискатель)',
    '/lk/job_seeker/resume-form.php' => 'ЛК - Конструктор резюме (Соискатель)',
    '/lk/employer/index.php' => 'ЛК - Профиль (Работодатель)',
    '/lk/employer/notify.php' => 'ЛК - Уведомления (Работодатель)',
    '/lk/employer/responces.php' => 'ЛК - Отклики (Работодатель)',
    '/lk/employer/deals.php' => 'ЛК - Мои вакансии (Работодатель)',
    '/lk/employer/docs.php' => 'ЛК - Документы (Работодатель)',
    '/lk/employer/favorite.php' => 'ЛК - Избранное (Работодатель)',
    '/lk/moderator/appeals.php' => 'ЛК - Жалобы (Модератор)',
    '/lk/moderator/companies.php' => 'ЛК - Компании (Модератор)',
    '/lk/moderator/resume.php' => 'ЛК - Резюме (Модератор)',
    '/lk/moderator/vacancies.php' => 'ЛК - Вакансии (Модератор)',
];
?>

<div class="sitemap about-section">
    <div class="container">
        <div class="content">
            <h1 class="title">Карта сайта</h1>

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