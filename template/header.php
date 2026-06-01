<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="format-detection" content="phone=no">
    <title>Вкалывай</title>

    <meta http-equiv="Cache-Control" content="no-cache, no-store, must-revalidate">
    <meta http-equiv="Pragma" content="no-cache">
    <meta http-equiv="Expires" content="0">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/noUiSlider/8.5.0/nouislider.min.css" integrity="sha512-DxxMgDfuKY3y5s1d/5eBPg2VJXQUGpRp4QIDYexfoZA88/1WqDRiOUZ0KHSPe9ogWtaeYkZ4E0TFTyPwzqIsIQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link
        rel="stylesheet"
        href="https://cdn.jsdelivr.net/npm/swiper@12/swiper-bundle.min.css" />

    <link
        rel="stylesheet"
        href="https://cdn.jsdelivr.net/npm/@fancyapps/ui@6.1/dist/fancybox/fancybox.css"
    />

    <link rel="stylesheet" href="/assets/css/main.css?v=<?= time() ?>">
    <link rel="stylesheet" href="/assets/css/filter.css?v=<?= time() ?>">
    <link rel="stylesheet" href="/assets/css/vacancies.css?v=<?= time() ?>">
    <link rel="stylesheet" href="/assets/css/vacancy.css?v=<?= time() ?>">
    <link rel="stylesheet" href="/assets/css/companies.css?v=<?= time() ?>">
    <link rel="stylesheet" href="/assets/css/company.css?v=<?= time() ?>">
    <link rel="stylesheet" href="/assets/css/rezumes.css?v=<?= time() ?>">
    <link rel="stylesheet" href="/assets/css/rezume.css?v=<?= time() ?>">
    <link rel="stylesheet" href="/assets/css/about.css?v=<?= time() ?>">
    <link rel="stylesheet" href="/assets/css/faq.css?v=<?= time() ?>">
    <link rel="stylesheet" href="/assets/css/help.css?v=<?= time() ?>">
    <link rel="stylesheet" href="/assets/css/cards.css?v=<?= time() ?>">
    <link rel="stylesheet" href="/assets/css/article.css?v=<?= time() ?>">
    <link rel="stylesheet" href="/assets/css/contacts.css?v=<?= time() ?>">
    <link rel="stylesheet" href="/assets/css/custom.css?v=<?= time() ?>">
</head>

<?
$auth = isset($_GET['auth']) ? $_GET['auth'] : '';
$client = isset($_GET['client']) ? $_GET['client'] : '';
?>

<body>

    <div class="body-wrapper">

        <header class="header <?= ($auth && $auth == 'Y') ? 'is-auth' : '' ?>">
            <div class="container">
                <div class="header__row">
                    <? if ($_SERVER['PHP_SELF'] != '/index.php') : ?>
                        <a href="/" class="header__logo">
                            <svg width="50" height="50" viewBox="0 0 50 50" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <rect width="50" height="50" rx="25" fill="#FC7827" />
                                <path d="M16 36V14H25.9615C28.4651 14 30.4171 14.4924 31.8174 15.4771C33.2178 16.441 33.9179 17.8343 33.9179 19.6571C33.9179 21.459 33.2496 22.8524 31.9129 23.8371C30.5762 24.801 28.8152 25.2829 26.6298 25.2829L27.2027 24.1514C29.6851 24.1514 31.6052 24.6438 32.9632 25.6286C34.3211 26.6133 35 28.0381 35 29.9029C35 31.8095 34.2892 33.3076 32.8677 34.3971C31.4461 35.4657 29.3456 36 26.5662 36H16ZM20.0737 32.8571H26.4389C27.8816 32.8571 28.9743 32.5952 29.7169 32.0714C30.4595 31.5267 30.8308 30.699 30.8308 29.5886C30.8308 28.4781 30.4595 27.6714 29.7169 27.1686C28.9743 26.6448 27.8816 26.3829 26.4389 26.3829H20.0737V32.8571ZM20.0737 23.3971H25.6114C26.9481 23.3971 27.9665 23.1352 28.6667 22.6114C29.3668 22.0667 29.7169 21.2914 29.7169 20.2857C29.7169 19.2381 29.3668 18.4524 28.6667 17.9286C27.9665 17.4048 26.9481 17.1429 25.6114 17.1429H20.0737V23.3971Z" fill="white" />
                            </svg>
                            <span>калывай</span>
                        </a>
                    <? else: ?>
                        <span class="header__logo">
                            <svg width="50" height="50" viewBox="0 0 50 50" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <rect width="50" height="50" rx="25" fill="#FC7827" />
                                <path d="M16 36V14H25.9615C28.4651 14 30.4171 14.4924 31.8174 15.4771C33.2178 16.441 33.9179 17.8343 33.9179 19.6571C33.9179 21.459 33.2496 22.8524 31.9129 23.8371C30.5762 24.801 28.8152 25.2829 26.6298 25.2829L27.2027 24.1514C29.6851 24.1514 31.6052 24.6438 32.9632 25.6286C34.3211 26.6133 35 28.0381 35 29.9029C35 31.8095 34.2892 33.3076 32.8677 34.3971C31.4461 35.4657 29.3456 36 26.5662 36H16ZM20.0737 32.8571H26.4389C27.8816 32.8571 28.9743 32.5952 29.7169 32.0714C30.4595 31.5267 30.8308 30.699 30.8308 29.5886C30.8308 28.4781 30.4595 27.6714 29.7169 27.1686C28.9743 26.6448 27.8816 26.3829 26.4389 26.3829H20.0737V32.8571ZM20.0737 23.3971H25.6114C26.9481 23.3971 27.9665 23.1352 28.6667 22.6114C29.3668 22.0667 29.7169 21.2914 29.7169 20.2857C29.7169 19.2381 29.3668 18.4524 28.6667 17.9286C27.9665 17.4048 26.9481 17.1429 25.6114 17.1429H20.0737V23.3971Z" fill="white" />
                            </svg>
                            <span>калывай</span>
                        </span>
                    <? endif; ?>
                    <? if ($auth && $auth == 'Y') : ?>
                        <nav class="header__nav nav tablet-none">
                            <ul class="nav__list">
                                <? if ($client && $client == 'Y') : ?>
                                    <li class="nav__item">
                                        <a href="#" class="nav__link link">Поиск вакансий</a>
                                    </li>
                                <? else : ?>
                                    <li class="nav__item">
                                        <a href="#" class="nav__link link">Поиск резюме</a>
                                    </li>
                                <? endif; ?>

                                <li class="nav__item">
                                    <a href="#" class="nav__link link">Отклики</a>
                                </li>

                                <li class="nav__item">
                                    <a href="#" class="nav__link link">Помощь</a>
                                </li>
                            </ul>
                        </nav>

                        <div class="header__toolbar">
                            <a href="#" class="header__search-icon">
                                <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <g clip-path="url(#clip0_4784_13479)">
                                        <path fill-rule="evenodd" clip-rule="evenodd" d="M11.1035 3.00098C15.5746 3.00098 19.2039 6.62957 19.2041 11.1006C19.2067 12.9384 18.5811 14.7223 17.4316 16.1562L21.2861 20.0098L20.0127 21.2832L16.1592 17.4287C14.7252 18.5782 12.9413 19.2038 11.1035 19.2012C6.63249 19.201 3.00391 15.5717 3.00391 11.1006C3.00412 6.6297 6.63263 3.00119 11.1035 3.00098ZM11.1035 4.80078C7.62263 4.80099 4.80392 7.6197 4.80371 11.1006C4.80371 14.5808 7.6225 17.4012 11.1035 17.4014C12.7419 17.4039 14.3166 16.7652 15.4912 15.623L15.626 15.4883C16.7682 14.3137 17.4069 12.739 17.4043 11.1006C17.4041 7.61957 14.5837 4.80078 11.1035 4.80078Z" fill="#999999" />
                                    </g>
                                    <defs>
                                        <clipPath id="clip0_4784_13479">
                                            <rect width="24" height="24" fill="white" />
                                        </clipPath>
                                    </defs>
                                </svg>
                                <span>Поиск вакансий</span>
                            </a>
                            <a href="#" class="btn btn_size-s btn_light btn_has-icon lk-chat">
                                <svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <g clip-path="url(#clip0_4466_3980)">
                                        <path d="M8.00391 2.00098C11.3177 2.00098 14.0039 4.68718 14.0039 8.00098C14.0039 11.3148 11.3177 14.001 8.00391 14.001C7.01833 14.0025 6.04789 13.7596 5.17872 13.2949L2.00391 14.001L2.70997 10.8262C2.24529 9.957 2.00243 8.98656 2.00391 8.00098C2.00391 4.68718 4.69011 2.00098 8.00391 2.00098Z" fill="#FC7827" />
                                    </g>
                                    <defs>
                                        <clipPath id="clip0_4466_3980">
                                            <rect width="16" height="16" fill="white" />
                                        </clipPath>
                                    </defs>
                                </svg>
                                <span>Чаты</span>
                            </a>
                            <a href="#" class="btn btn_size-s btn_neutral btn_has-icon lk-btn">
                                <svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <g clip-path="url(#clip0_4466_3096)">
                                        <path d="M9.80273 9.80078C10.5984 9.80078 11.3612 10.1171 11.9238 10.6797C12.4864 11.2423 12.8027 12.0051 12.8027 12.8008V14.001H3.20312V12.8008C3.20312 12.0053 3.51867 11.2423 4.08105 10.6797C4.64366 10.1171 5.40748 9.80078 6.20312 9.80078H9.80273ZM8.00293 1.40039C8.95766 1.40043 9.87373 1.77998 10.5488 2.45508C11.2238 3.13019 11.6025 4.04629 11.6025 5.00098C11.6025 5.95546 11.2236 6.87087 10.5488 7.5459C9.87373 8.221 8.95766 8.60055 8.00293 8.60059C7.53019 8.60059 7.06176 8.50805 6.625 8.32715C6.18823 8.14623 5.79132 7.88019 5.45703 7.5459C5.12288 7.21167 4.85762 6.81457 4.67676 6.37793C4.49599 5.94135 4.40238 5.4735 4.40234 5.00098C4.40234 4.52822 4.49585 4.05981 4.67676 3.62305C4.85766 3.1863 5.12277 2.78936 5.45703 2.45508C5.79129 2.12082 6.18828 1.85572 6.625 1.6748C7.06177 1.49389 7.53017 1.40039 8.00293 1.40039Z" fill="white" />
                                    </g>
                                    <defs>
                                        <clipPath id="clip0_4466_3096">
                                            <rect width="16" height="16" fill="white" />
                                        </clipPath>
                                    </defs>
                                </svg>
                                <span>Профиль</span>
                            </a>
                            <? if ($client && $client == 'Y') : ?>
                                <a href="#" class="btn btn_size-s btn_secondary m-none lk-create-link">Создать резюме</a>
                            <? else : ?>
                                <a href="#" class="btn btn_size-s btn_secondary m-none lk-create-link">Создать вакансию</a>
                            <? endif; ?>

                            <button class="btn btn_secondary btn_icon btn_icon-s burger">
                                <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <g clip-path="url(#clip0_4466_785)">
                                        <path d="M16.7539 16.001H3.25391V14.501H16.7539V16.001ZM16.7539 10.751H3.25391V9.25098H16.7539V10.751ZM16.7539 5.50098H3.25391V4.00098H16.7539V5.50098Z" fill="white" />
                                    </g>
                                    <defs>
                                        <clipPath id="clip0_4466_785">
                                            <rect width="20" height="20" fill="white" />
                                        </clipPath>
                                    </defs>
                                </svg>
                            </button>
                        </div>
                    <? else : ?>


                        <nav class="header__nav nav">
                            <button class="nav__select js-btn-nav">
                                <span><?= ($client && $client == 'Y') ? 'Работодателю' : 'Соискателю'; ?></span>
                                <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <g clip-path="url(#clip0_4466_1969)">
                                        <path fill-rule="evenodd" clip-rule="evenodd" d="M14.4735 7.38764C14.7664 7.09475 15.2412 7.09475 15.5341 7.38764C15.8267 7.68055 15.8269 8.15538 15.5341 8.44819L10.5341 13.4482C10.2595 13.7226 9.82469 13.74 9.53016 13.4999L9.47352 13.4482L4.47352 8.44819C4.18066 8.15533 4.18074 7.68054 4.47352 7.38764C4.76641 7.09475 5.24117 7.09475 5.53406 7.38764L10.0038 11.8574L14.4735 7.38764Z" fill="#FC7827" />
                                    </g>
                                    <defs>
                                        <clipPath id="clip0_4466_1969">
                                            <rect width="20" height="20" fill="white" />
                                        </clipPath>
                                    </defs>
                                </svg>
                            </button>
                            <ul class="nav__list">
                                <li class="nav__item">
                                    <a href="/" class="nav__link link <?= ($client && $client == 'Y') ? '' : 'active' ?>">Соискателю</a>
                                </li>

                                <li class="nav__item">
                                    <a href="/?client=Y" class="nav__link link <?= ($client && $client == 'Y') ? 'active' : '' ?>">Работодателю</a>
                                </li>
                            </ul>
                        </nav>

                        <div class="header__toolbar">
                            <a href="#" class="btn btn_size-s btn_neutral btn_has-icon lk-btn">
                                <svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <g clip-path="url(#clip0_4466_3096)">
                                        <path d="M9.80273 9.80078C10.5984 9.80078 11.3612 10.1171 11.9238 10.6797C12.4864 11.2423 12.8027 12.0051 12.8027 12.8008V14.001H3.20312V12.8008C3.20312 12.0053 3.51867 11.2423 4.08105 10.6797C4.64366 10.1171 5.40748 9.80078 6.20312 9.80078H9.80273ZM8.00293 1.40039C8.95766 1.40043 9.87373 1.77998 10.5488 2.45508C11.2238 3.13019 11.6025 4.04629 11.6025 5.00098C11.6025 5.95546 11.2236 6.87087 10.5488 7.5459C9.87373 8.221 8.95766 8.60055 8.00293 8.60059C7.53019 8.60059 7.06176 8.50805 6.625 8.32715C6.18823 8.14623 5.79132 7.88019 5.45703 7.5459C5.12288 7.21167 4.85762 6.81457 4.67676 6.37793C4.49599 5.94135 4.40238 5.4735 4.40234 5.00098C4.40234 4.52822 4.49585 4.05981 4.67676 3.62305C4.85766 3.1863 5.12277 2.78936 5.45703 2.45508C5.79129 2.12082 6.18828 1.85572 6.625 1.6748C7.06177 1.49389 7.53017 1.40039 8.00293 1.40039Z" fill="white" />
                                    </g>
                                    <defs>
                                        <clipPath id="clip0_4466_3096">
                                            <rect width="16" height="16" fill="white" />
                                        </clipPath>
                                    </defs>
                                </svg>
                                <span>Войти</span>
                            </a>
                            <? if ($client && $client == 'Y') : ?>
                                <a href="#" class="btn btn_size-s btn_secondary m-none">Создать вакансию</a>
                            <? else : ?>
                                <a href="#" class="btn btn_size-s btn_secondary m-none">Создать резюме</a>
                            <? endif; ?>


                            <button class="btn btn_secondary btn_icon btn_icon-s burger">
                                <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <g clip-path="url(#clip0_4466_785)">
                                        <path d="M16.7539 16.001H3.25391V14.501H16.7539V16.001ZM16.7539 10.751H3.25391V9.25098H16.7539V10.751ZM16.7539 5.50098H3.25391V4.00098H16.7539V5.50098Z" fill="white" />
                                    </g>
                                    <defs>
                                        <clipPath id="clip0_4466_785">
                                            <rect width="20" height="20" fill="white" />
                                        </clipPath>
                                    </defs>
                                </svg>
                            </button>
                        </div>
                    <? endif; ?>
                </div>
            </div>
            <div class="burger-menu">
                <ul class="burger-menu__list">
                    <li class="burger-menu__item">
                        <a href="#" class="link">Правила составления резюме</a>
                    </li>
                    <li class="burger-menu__item">
                        <a href="/pages/vacancies.php" class="link">Каталог вакансий</a>
                    </li>
                    <li class="burger-menu__item">
                        <a href="/pages/companies.php" class="link">Каталог компаний</a>
                    </li>
                    <? if ($client && $client == 'Y') : ?>
                        <li class="burger-menu__item">
                            <a href="#" class="btn btn_size-s btn_secondary">Создать вакансию</a>
                        </li>
                    <? else : ?>
                        <li class="burger-menu__item">
                            <a href="#" class="btn btn_size-s btn_secondary">Создать резюме</a>
                        </li>
                    <? endif; ?>
                </ul>
                <div class="burger-menu__hr"></div>
                <ul class="burger-menu__list">
                    <li class="burger-menu__item">
                        <a href="/pages/about.php" class="link">О компании</a>
                    </li>
                    <li class="burger-menu__item">
                        <a href="/pages/help.php" class="link">Помощь</a>
                    </li>
                    <li class="burger-menu__item">
                        <a href="/pages/faq.php" class="link">Вопрос ответ</a>
                    </li>
                    <li class="burger-menu__item">
                        <a href="/pages/contacts.php" class="link">Контакты</a>
                    </li>
                </ul>
            </div>
        </header>

        <? if ($auth && $auth == 'Y') : ?>
            <div class="auth-mobile-menu">
                <div class="container">
                    <ul class="auth-mobile-menu__row">
                        <li class="auth-mobile-menu__item">
                            <a href="/lk/index.php" class="btn btn_icon btn_secondary">
                                <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <g clip-path="url(#clip0_4892_6762)">
                                        <path d="M12.2539 12.251C13.2483 12.251 14.2021 12.6456 14.9053 13.3486C15.6085 14.0519 16.0039 15.0064 16.0039 16.001V17.501H4.00391V16.001C4.00391 15.0064 4.39928 14.0519 5.10254 13.3486C5.80576 12.6456 6.75954 12.251 7.75391 12.251H12.2539ZM10.0039 1.75098C11.1972 1.75102 12.3417 2.22464 13.1855 3.06836C14.0295 3.91227 14.5039 5.0575 14.5039 6.25098C14.5038 7.44433 14.0294 8.58878 13.1855 9.43262C12.3417 10.2764 11.1973 10.7509 10.0039 10.751C9.41296 10.751 8.82722 10.6343 8.28125 10.4082C7.73541 10.1821 7.23907 9.8504 6.82129 9.43262C6.40356 9.01482 6.07278 8.51848 5.84668 7.97266C5.62058 7.42679 5.50395 6.84181 5.50391 6.25098C5.50391 5.66003 5.62053 5.07429 5.84668 4.52832C6.07281 3.98253 6.40355 3.48611 6.82129 3.06836C7.2391 2.65055 7.73537 2.31892 8.28125 2.09277C8.82722 1.86663 9.41296 1.75098 10.0039 1.75098Z" fill="white" />
                                    </g>
                                    <defs>
                                        <clipPath id="clip0_4892_6762">
                                            <rect width="20" height="20" fill="white" />
                                        </clipPath>
                                    </defs>
                                </svg>
                            </a>
                            <span>Профиль</span>
                        </li>
                        <li class="auth-mobile-menu__item">
                            <a href="#" class="btn btn_icon btn_secondary">
                                <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <g clip-path="url(#clip0_4892_6093)">
                                        <path d="M12.2539 3.25098C12.6679 3.25098 13.0039 3.58698 13.0039 4.00098V5.50098H16.7539C17.1679 5.50098 17.5039 5.83698 17.5039 6.25098V16.001C17.5039 16.415 17.1679 16.751 16.7539 16.751H3.25391C2.83991 16.751 2.50391 16.415 2.50391 16.001V6.25098C2.50391 5.83698 2.83991 5.50098 3.25391 5.50098H7.00391V4.00098C7.00391 3.58698 7.33991 3.25098 7.75391 3.25098H12.2539ZM5.50391 15.251H7.00391V7.00098H5.50391V15.251ZM13.0039 15.251H14.5039V7.00098H13.0039V15.251ZM8.50391 5.50098H11.5039V4.75098H8.50391V5.50098Z" fill="white" />
                                    </g>
                                    <defs>
                                        <clipPath id="clip0_4892_6093">
                                            <rect width="20" height="20" fill="white" />
                                        </clipPath>
                                    </defs>
                                </svg>
                            </a>
                            <span>Резюме</span>
                        </li>
                        <li class="auth-mobile-menu__item">
                            <a href="#" class="btn btn_icon btn_secondary">
                                <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <g clip-path="url(#clip0_4892_6544)">
                                        <path d="M11.8789 16.751C11.8789 17.2483 11.6817 17.7255 11.3301 18.0771C10.9784 18.4288 10.5012 18.626 10.0039 18.626C9.50663 18.626 9.02936 18.4288 8.67773 18.0771C8.3261 17.7255 8.12891 17.2483 8.12891 16.751H11.8789ZM10.0039 2.50098C13.7314 2.50098 16.7539 5.53341 16.7539 9.27441V16.001H3.25391V9.27441C3.25391 5.53341 6.27641 2.50098 10.0039 2.50098ZM10.0039 4.00098C7.10441 4.00098 4.75391 6.36216 4.75391 9.27441V14.501H15.2539V9.27441C15.2539 6.36216 12.9034 4.00098 10.0039 4.00098Z" fill="white" />
                                    </g>
                                    <defs>
                                        <clipPath id="clip0_4892_6544">
                                            <rect width="20" height="20" fill="white" />
                                        </clipPath>
                                    </defs>
                                </svg>
                            </a>
                            <span>Уведомления</span>
                        </li>
                        <li class="auth-mobile-menu__item">
                            <a href="/lk/responses.php" class="btn btn_icon btn_secondary">
                                <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <g clip-path="url(#clip0_4892_8906)">
                                        <path d="M16.7539 3.75098C16.9528 3.75098 17.1435 3.83005 17.2842 3.9707C17.4248 4.11136 17.5039 4.30206 17.5039 4.50098V15.501C17.5039 15.6999 17.4248 15.8906 17.2842 16.0312C17.1435 16.1719 16.9528 16.251 16.7539 16.251H3.25391C3.05499 16.251 2.86429 16.1719 2.72363 16.0312C2.58298 15.8906 2.50391 15.6999 2.50391 15.501V4.50098C2.50391 4.30206 2.58298 4.11136 2.72363 3.9707C2.86429 3.83005 3.05499 3.75098 3.25391 3.75098H16.7539ZM4.00391 14.751H16.0039V6.92969L10.0576 12.2549L4.00391 6.91309V14.751ZM10.0498 10.2471L15.6309 5.25098H4.38672L10.0498 10.2471Z" fill="white" />
                                    </g>
                                    <defs>
                                        <clipPath id="clip0_4892_8906">
                                            <rect width="20" height="20" fill="white" />
                                        </clipPath>
                                    </defs>
                                </svg>
                            </a>
                            <span>Отлики</span>
                        </li>
                        <li class="auth-mobile-menu__item">
                            <a href="/lk/favorites.php" class="btn btn_icon btn_secondary">
                                <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <g clip-path="url(#clip0_4892_5602)">
                                        <path d="M13.3789 3.25098C15.6573 3.25098 17.5038 5.12615 17.5039 7.75098C17.5039 13.0008 11.879 16.0009 10.0039 17.126C8.12876 16.0009 2.50391 13.0008 2.50391 7.75098C2.50406 5.12615 4.379 3.25098 6.62891 3.25098C8.02381 3.25098 9.25389 4.00103 10.0039 4.75098C10.7539 4.00103 11.984 3.25098 13.3789 3.25098ZM13.3789 4.75098C12.572 4.75098 11.6989 5.17861 11.0645 5.81152L10.0039 6.87207L8.94336 5.81152C8.30887 5.17861 7.43584 4.75098 6.62891 4.75098C5.174 4.75098 4.00405 5.99315 4.00391 7.75098C4.00391 9.95893 5.25314 11.9012 7.4873 13.6787C8.04605 14.1227 8.64296 14.5369 9.30371 14.9531C9.52795 15.0949 9.74967 15.2313 10.0039 15.3828C10.2581 15.2313 10.4799 15.0951 10.7041 14.9541C11.3649 14.5371 11.9615 14.1227 12.5195 13.6787C14.7553 11.9012 16.0039 9.95823 16.0039 7.75098C16.0038 5.98115 14.8511 4.75098 13.3789 4.75098Z" fill="white" />
                                    </g>
                                    <defs>
                                        <clipPath id="clip0_4892_5602">
                                            <rect width="20" height="20" fill="white" />
                                        </clipPath>
                                    </defs>
                                </svg>
                            </a>
                            <span>Избранное</span>
                        </li>
                    </ul>
                </div>
            </div>
        <? endif; ?>