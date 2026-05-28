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
    '/pages/404.php' => '404',
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