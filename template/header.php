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
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100..900;1,100..900&display=swap"
        rel="stylesheet">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/noUiSlider/8.5.0/nouislider.min.css"
        integrity="sha512-DxxMgDfuKY3y5s1d/5eBPg2VJXQUGpRp4QIDYexfoZA88/1WqDRiOUZ0KHSPe9ogWtaeYkZ4E0TFTyPwzqIsIQ=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@12/swiper-bundle.min.css" />

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fancyapps/ui@6.1/dist/fancybox/fancybox.css" />
    <link rel="stylesheet" href="/assets/css/slick-theme.css">
    <link rel="stylesheet" href="/assets/css/slick.css">

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
    <link rel="stylesheet" href="/assets/css/lk.css?v=<?= time() ?>">
    <link rel="stylesheet" href="/assets/css/chats.css?v=<?= time() ?>">
</head>

<?
$uri = $_SERVER['REQUEST_URI'];
$auth = isset($_GET['auth']) ? $_GET['auth'] : '';
$client = isset($_GET['client']) ? $_GET['client'] : '';

if (strpos($uri, '/lk/job_seeker/') !== false) {
    $auth = 'Y';
}

if (strpos($uri, '/lk/employer/') !== false) {
    $auth = 'Y';
    $client = 'Y';
}

if (strpos($uri, '/lk/moderator/') !== false) {
    $auth = 'Y';
}

if (strpos($uri, '/chats/') !== false) {
    $auth = 'Y';
}

$authMobileMenuItems = str_contains($uri, 'moderator')
    ? [
        [
            'href' => '/lk/moderator/vacancies.php',
                'label' => 'Вакансии',
                'classes' => '',
                'icon' => '<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"><g><path d="M12.373 5.70117H20.0996C20.3383 5.70117 20.5675 5.79606 20.7363 5.96484C20.905 6.13353 20.9999 6.36208 21 6.60059V19.2012C20.9999 19.4397 20.9049 19.6682 20.7363 19.8369C20.5675 20.0057 20.3383 20.1006 20.0996 20.1006H3.90039C3.6617 20.1006 3.43245 20.0057 3.26367 19.8369C3.09506 19.6682 3.00005 19.4397 3 19.2012V4.80078C3.00005 4.56225 3.09506 4.33376 3.26367 4.16504C3.43245 3.99626 3.6617 3.90137 3.90039 3.90137H10.5723L12.373 5.70117ZM12 13.8008C11.0452 13.8008 10.1292 14.1803 9.4541 14.8555C8.77909 15.5306 8.40039 16.4467 8.40039 17.4014H15.5996C15.5996 16.4467 15.2209 15.5306 14.5459 14.8555C13.8708 14.1803 12.9548 13.8008 12 13.8008ZM12 8.40137C11.4034 8.40137 10.8311 8.6378 10.4092 9.05957C9.98722 9.48153 9.75 10.0546 9.75 10.6514C9.7501 11.248 9.98732 11.8203 10.4092 12.2422C10.8311 12.664 11.4034 12.9014 12 12.9014C12.5966 12.9014 13.1689 12.664 13.5908 12.2422C14.0127 11.8203 14.2499 11.248 14.25 10.6514C14.25 10.0546 14.0128 9.48153 13.5908 9.05957C13.1689 8.6378 12.5966 8.40137 12 8.40137Z" fill="#C2C2C2"/></g><defs><clipPath id="clip0_8009_5704"><rect width="24" height="24" fill="white"/></clipPath></defs></svg>'
        ],
        [
            'href' => '/lk/moderator/resume.php',
                'label' => 'Резюме',
                'classes' => '',
                'icon' => '<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"><g><path d="M20.1055 7.50098V20.1084C20.1052 20.3451 20.0112 20.5719 19.8438 20.7393C19.6762 20.9067 19.4488 21.001 19.2119 21.001H4.7998C4.56345 20.9993 4.33714 20.9044 4.16992 20.7373C4.00283 20.5703 3.90819 20.3446 3.90625 20.1084V3.89355C3.90637 3.40046 4.30668 3.00098 4.7998 3.00098H15.6055L20.1055 7.50098ZM12.0059 12.8936C11.0085 12.8936 10.0465 13.2623 9.30371 13.9277C8.56086 14.5933 8.08957 15.5095 7.98047 16.501H16.0312C15.9221 15.5095 15.4509 14.5933 14.708 13.9277C13.9652 13.2623 13.0032 12.8936 12.0059 12.8936ZM12.0059 7.05078C11.4092 7.05078 10.837 7.28807 10.415 7.70996C9.99313 8.13187 9.75591 8.70411 9.75586 9.30078C9.75586 9.89747 9.99314 10.4697 10.415 10.8916C10.837 11.3136 11.4091 11.5508 12.0059 11.5508C12.6026 11.5508 13.1747 11.3136 13.5967 10.8916C14.0186 10.4697 14.2559 9.89747 14.2559 9.30078C14.2558 8.70411 14.0186 8.13187 13.5967 7.70996C13.1747 7.28807 12.6026 7.05078 12.0059 7.05078Z" fill="#C2C2C2"/></g><defs><clipPath id="clip0_8009_2656"><rect width="24" height="24" fill="white"/></clipPath></defs></svg>'
        ],
        [
            'href' => '/lk/moderator/companies.php',
                'label' => 'Компании',
                'classes' => '',
                'icon' => '<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"><g><path d="M14.7002 3.90137C15.1968 3.90147 15.5995 4.30414 15.5996 4.80078V6.60059H20.0996C20.5964 6.60059 21 7.00418 21 7.50098V19.2012C20.9999 19.6979 20.5963 20.1006 20.0996 20.1006H3.90039C3.40366 20.1006 3.00011 19.6979 3 19.2012V7.50098C3 7.00418 3.40359 6.60059 3.90039 6.60059H8.40039V4.80078C8.4005 4.30414 8.80316 3.90147 9.2998 3.90137H14.7002ZM6.59961 18.3008H8.40039V8.40137H6.59961V18.3008ZM15.5996 18.3008H17.4004V8.40137H15.5996V18.3008ZM10.2002 6.60059H13.7998V5.70117H10.2002V6.60059Z" fill="#C2C2C2"/></g><clipPath id="clip0_8009_5952"><rect width="24" height="24" fill="white"/></clipPath></defs></svg>'
        ],
        [
            'href' => '/lk/moderator/appeals.php',
                'label' => 'Обращения',
                'classes' => '',
                'icon' => '<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"><g><path d="M14.25 20.1006C14.25 20.6973 14.0128 21.2704 13.5908 21.6924C13.1689 22.1142 12.5966 22.3506 12 22.3506C11.4034 22.3506 10.8311 22.1142 10.4092 21.6924C9.98722 21.2704 9.75 20.6973 9.75 20.1006H14.25ZM12 3.00098C16.473 3.00098 20.0996 6.63971 20.0996 11.1289V17.4014H21V19.2012H3V17.4014H3.90039V11.1289C3.90039 6.63971 7.527 3.00098 12 3.00098Z" fill="#C2C2C2"/></g><defs><clipPath id="clip0_8009_5712"><rect width="24" height="24" fill="white"/></clipPath></defs></svg>'
        ],
    ]
    : (str_contains($uri, 'employer')
        ? [
            [
                'href' => '/lk/employer/index.php',
                'label' => 'Профиль',
                'classes' => '',
                'icon' => '<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"><g><path d="M14.7051 14.7002C15.8984 14.7003 17.0429 15.1747 17.8867 16.0186C18.7305 16.8624 19.205 18.0069 19.2051 19.2002V21.001H4.80469V19.2002C4.80479 18.0069 5.27923 16.8624 6.12305 16.0186C6.96694 15.1748 8.11131 14.7002 9.30469 14.7002H14.7051ZM12.0049 2.10059C13.437 2.10064 14.8106 2.66997 15.8232 3.68262C16.8358 4.69529 17.4043 6.06895 17.4043 7.50098C17.4042 8.933 16.8358 10.3067 15.8232 11.3193C14.8106 12.3319 13.4369 12.9003 12.0049 12.9004C11.2958 12.9004 10.5936 12.7606 9.93848 12.4893C9.28345 12.2179 8.6879 11.8206 8.18652 11.3193C7.68514 10.818 7.287 10.2225 7.01562 9.56738C6.7443 8.91235 6.60454 8.20998 6.60449 7.50098C6.60449 6.792 6.74437 6.0896 7.01562 5.43457C7.28698 4.77945 7.68513 4.18403 8.18652 3.68262C8.68796 3.18118 9.28332 2.78309 9.93848 2.51172C10.5936 2.2404 11.2958 2.10059 12.0049 2.10059Z" fill="#C2C2C2"/></g><defs><clipPath id="clip0_8009_778"><rect width="24" height="24" fill="white"/></clipPath></defs></svg>'
            ],
            [
                'href' => '/lk/employer/deals.php',
                'label' => 'Вакансии',
                'classes' => '',
                'icon' => '<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"><g><path d="M12.373 5.70117H20.0996C20.3383 5.70117 20.5675 5.79606 20.7363 5.96484C20.905 6.13353 20.9999 6.36208 21 6.60059V19.2012C20.9999 19.4397 20.9049 19.6682 20.7363 19.8369C20.5675 20.0057 20.3383 20.1006 20.0996 20.1006H3.90039C3.6617 20.1006 3.43245 20.0057 3.26367 19.8369C3.09506 19.6682 3.00005 19.4397 3 19.2012V4.80078C3.00005 4.56225 3.09506 4.33376 3.26367 4.16504C3.43245 3.99626 3.6617 3.90137 3.90039 3.90137H10.5723L12.373 5.70117ZM12 13.8008C11.0452 13.8008 10.1292 14.1803 9.4541 14.8555C8.77909 15.5306 8.40039 16.4467 8.40039 17.4014H15.5996C15.5996 16.4467 15.2209 15.5306 14.5459 14.8555C13.8708 14.1803 12.9548 13.8008 12 13.8008ZM12 8.40137C11.4034 8.40137 10.8311 8.6378 10.4092 9.05957C9.98722 9.48153 9.75 10.0546 9.75 10.6514C9.7501 11.248 9.98732 11.8203 10.4092 12.2422C10.8311 12.664 11.4034 12.9014 12 12.9014C12.5966 12.9014 13.1689 12.664 13.5908 12.2422C14.0127 11.8203 14.2499 11.248 14.25 10.6514C14.25 10.0546 14.0128 9.48153 13.5908 9.05957C13.1689 8.6378 12.5966 8.40137 12 8.40137Z" fill="#C2C2C2"/></g><defs><clipPath id="clip0_8009_5704"><rect width="24" height="24" fill="white"/></clipPath></defs></svg>'
            ],
            [
                'href' => '/lk/employer/notify.php',
                'label' => 'Уведомления',
                'classes' => 'notify',
                'icon' => '<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"><g><path d="M14.25 20.1006C14.25 20.6973 14.0128 21.2704 13.5908 21.6924C13.1689 22.1142 12.5966 22.3506 12 22.3506C11.4034 22.3506 10.8311 22.1142 10.4092 21.6924C9.98722 21.2704 9.75 20.6973 9.75 20.1006H14.25ZM12 3.00098C16.473 3.00098 20.0996 6.63971 20.0996 11.1289V17.4014H21V19.2012H3V17.4014H3.90039V11.1289C3.90039 6.63971 7.527 3.00098 12 3.00098Z" fill="#C2C2C2"/></g><defs><clipPath id="clip0_8009_5712"><rect width="24" height="24" fill="white"/></clipPath></defs></svg>'
            ],
            [
                'href' => '/lk/employer/responces.php',
                'label' => 'Отклики',
                'classes' => '',
                'icon' => '<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"><g><path d="M15.5996 3.90137C18.5813 3.90137 21 6.32681 21 9.29591V20.1006H8.40039C5.41869 20.1006 3 17.6752 3 14.7061V9.29591C2.99953 8.58694 3.13892 7.88453 3.41016 7.2295C3.6814 6.5745 4.07953 5.97959 4.58106 5.47852C5.08254 4.97754 5.67785 4.58019 6.33301 4.30958C6.98835 4.03896 7.69138 3.90019 8.40039 3.90137H15.5996ZM8.40039 12.9014H10.2002V11.1006H8.40039V12.9014ZM13.7998 12.9014H15.5996V11.1006H13.7998V12.9014Z" fill="#C2C2C2"/></g><defs><clipPath id="clip0_8009_5696"><rect width="24" height="24" fill="white"/></clipPath></defs></svg>'
            ],
            [
                'href' => '/lk/employer/favorite.php',
                'label' => 'Избранное',
                'classes' => '',
                'icon' => '<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"><g><path d="M16.0576 4.00098C18.7918 4.00098 21.0078 6.25137 21.0078 9.40137C21.0075 15.7011 14.2578 19.3014 12.0078 20.6514C9.75786 19.3014 3.00809 15.7011 3.00781 9.40137C3.00781 6.25137 5.25801 4.00098 7.95801 4.00098C9.63187 4.00105 11.1078 4.90085 12.0078 5.80078C12.9078 4.90085 14.3838 4.00105 16.0576 4.00098Z" fill="#C2C2C2"/></g><defs><clipPath id="clip0_8009_2048"><rect width="24" height="24" fill="white"/></clipPath></defs></svg>'
            ],
            [
                'href' => '/lk/employer/docs.php',
                'label' => 'Документы',
                'classes' => '',
                'icon' => '<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"><g><path d="M19.3018 3.00098C19.7976 3.00098 20.2001 3.41035 20.2002 3.89355V20.1084C20.1999 20.3452 20.105 20.5719 19.9375 20.7393C19.77 20.9065 19.5434 21.0009 19.3067 21.001H4.89358C4.77544 21.0001 4.65865 20.9757 4.54983 20.9297C4.44102 20.8837 4.34176 20.8175 4.25881 20.7334C4.17582 20.6492 4.11089 20.549 4.06643 20.4395C4.02197 20.33 3.9992 20.2129 4.00002 20.0947V9.30078H9.40041C9.63897 9.30068 9.86746 9.2058 10.0362 9.03711C10.2048 8.86842 10.2997 8.63992 10.2998 8.40137V3.00098H19.3018ZM8.50002 7.50098H4.00002L8.50002 3.00391V7.50098Z" fill="#C2C2C2"/></g><defs><clipPath id="clip0_8009_5630"><rect width="24" height="24" fill="white"/></clipPath></defs></svg>'
            ],
        ]
        : [
            [
                'href' => '/lk/job_seeker/index.php',
                'label' => 'Профиль',
                'classes' => '',
                'icon' => '<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"><g><path d="M14.7051 14.7002C15.8984 14.7003 17.0429 15.1747 17.8867 16.0186C18.7305 16.8624 19.205 18.0069 19.2051 19.2002V21.001H4.80469V19.2002C4.80479 18.0069 5.27923 16.8624 6.12305 16.0186C6.96694 15.1748 8.11131 14.7002 9.30469 14.7002H14.7051ZM12.0049 2.10059C13.437 2.10064 14.8106 2.66997 15.8232 3.68262C16.8358 4.69529 17.4043 6.06895 17.4043 7.50098C17.4042 8.933 16.8358 10.3067 15.8232 11.3193C14.8106 12.3319 13.4369 12.9003 12.0049 12.9004C11.2958 12.9004 10.5936 12.7606 9.93848 12.4893C9.28345 12.2179 8.6879 11.8206 8.18652 11.3193C7.68514 10.818 7.287 10.2225 7.01562 9.56738C6.7443 8.91235 6.60454 8.20998 6.60449 7.50098C6.60449 6.792 6.74437 6.0896 7.01562 5.43457C7.28698 4.77945 7.68513 4.18403 8.18652 3.68262C8.68796 3.18118 9.28332 2.78309 9.93848 2.51172C10.5936 2.2404 11.2958 2.10059 12.0049 2.10059Z" fill="#C2C2C2"/></g><defs><clipPath id="clip0_8009_778"><rect width="24" height="24" fill="white"/></clipPath></defs></svg>'
            ],
            [
                'href' => '/lk/job_seeker/deals.php',
                'label' => 'Резюме',
                'classes' => '',
                'icon' => '<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"><g><path d="M20.1055 7.50098V20.1084C20.1052 20.3451 20.0112 20.5719 19.8438 20.7393C19.6762 20.9067 19.4488 21.001 19.2119 21.001H4.7998C4.56345 20.9993 4.33714 20.9044 4.16992 20.7373C4.00283 20.5703 3.90819 20.3446 3.90625 20.1084V3.89355C3.90637 3.40046 4.30668 3.00098 4.7998 3.00098H15.6055L20.1055 7.50098ZM12.0059 12.8936C11.0085 12.8936 10.0465 13.2623 9.30371 13.9277C8.56086 14.5933 8.08957 15.5095 7.98047 16.501H16.0312C15.9221 15.5095 15.4509 14.5933 14.708 13.9277C13.9652 13.2623 13.0032 12.8936 12.0059 12.8936ZM12.0059 7.05078C11.4092 7.05078 10.837 7.28807 10.415 7.70996C9.99313 8.13187 9.75591 8.70411 9.75586 9.30078C9.75586 9.89747 9.99314 10.4697 10.415 10.8916C10.837 11.3136 11.4091 11.5508 12.0059 11.5508C12.6026 11.5508 13.1747 11.3136 13.5967 10.8916C14.0186 10.4697 14.2559 9.89747 14.2559 9.30078C14.2558 8.70411 14.0186 8.13187 13.5967 7.70996C13.1747 7.28807 12.6026 7.05078 12.0059 7.05078Z" fill="#C2C2C2"/></g><defs><clipPath id="clip0_8009_2656"><rect width="24" height="24" fill="white"/></clipPath></defs></svg>'
            ],
            [
                'href' => '/lk/job_seeker/notify.php',
                'label' => 'Уведомления',
                'classes' => 'notify',
                'icon' => '<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"><g><path d="M14.25 20.1006C14.25 20.6973 14.0128 21.2704 13.5908 21.6924C13.1689 22.1142 12.5966 22.3506 12 22.3506C11.4034 22.3506 10.8311 22.1142 10.4092 21.6924C9.98722 21.2704 9.75 20.6973 9.75 20.1006H14.25ZM12 3.00098C16.473 3.00098 20.0996 6.63971 20.0996 11.1289V17.4014H21V19.2012H3V17.4014H3.90039V11.1289C3.90039 6.63971 7.527 3.00098 12 3.00098Z" fill="#C2C2C2"/></g><defs><clipPath id="clip0_8009_5712"><rect width="24" height="24" fill="white"/></clipPath></defs></svg>'
            ],
            [
                'href' => '/lk/job_seeker/responces.php',
                'label' => 'Отклики',
                'classes' => '',
                'icon' => '<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"><g><path d="M15.5996 3.90137C18.5813 3.90137 21 6.32681 21 9.29591V20.1006H8.40039C5.41869 20.1006 3 17.6752 3 14.7061V9.29591C2.99953 8.58694 3.13892 7.88453 3.41016 7.2295C3.6814 6.5745 4.07953 5.97959 4.58106 5.47852C5.08254 4.97754 5.67785 4.58019 6.33301 4.30958C6.98835 4.03896 7.69138 3.90019 8.40039 3.90137H15.5996ZM8.40039 12.9014H10.2002V11.1006H8.40039V12.9014ZM13.7998 12.9014H15.5996V11.1006H13.7998V12.9014Z" fill="#C2C2C2"/></g><defs><clipPath id="clip0_8009_5696"><rect width="24" height="24" fill="white"/></clipPath></defs></svg>'
            ],
            [
                'href' => '/lk/job_seeker/favorite.php',
                'label' => 'Избранное',
                'classes' => '',
                'icon' => '<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"><g><path d="M16.0576 4.00098C18.7918 4.00098 21.0078 6.25137 21.0078 9.40137C21.0075 15.7011 14.2578 19.3014 12.0078 20.6514C9.75786 19.3014 3.00809 15.7011 3.00781 9.40137C3.00781 6.25137 5.25801 4.00098 7.95801 4.00098C9.63187 4.00105 11.1078 4.90085 12.0078 5.80078C12.9078 4.90085 14.3838 4.00105 16.0576 4.00098Z" fill="#C2C2C2"/></g><defs><clipPath id="clip0_8009_2048"><rect width="24" height="24" fill="white"/></clipPath></defs></svg>'
            ],
        ]);
?>

<body>

    <div class="body-wrapper">

        <header class="header <?= ($auth && $auth == 'Y') ? 'is-auth' : '' ?>">
            <div class="container">
                <div class="header__row">
                    <? if ($_SERVER['PHP_SELF'] != '/index.php'): ?>
                        <a href="/" class="header__logo">
                            <svg width="50" height="50" viewBox="0 0 50 50" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <rect width="50" height="50" rx="25" fill="#FC7827" />
                                <path
                                    d="M16 36V14H25.9615C28.4651 14 30.4171 14.4924 31.8174 15.4771C33.2178 16.441 33.9179 17.8343 33.9179 19.6571C33.9179 21.459 33.2496 22.8524 31.9129 23.8371C30.5762 24.801 28.8152 25.2829 26.6298 25.2829L27.2027 24.1514C29.6851 24.1514 31.6052 24.6438 32.9632 25.6286C34.3211 26.6133 35 28.0381 35 29.9029C35 31.8095 34.2892 33.3076 32.8677 34.3971C31.4461 35.4657 29.3456 36 26.5662 36H16ZM20.0737 32.8571H26.4389C27.8816 32.8571 28.9743 32.5952 29.7169 32.0714C30.4595 31.5267 30.8308 30.699 30.8308 29.5886C30.8308 28.4781 30.4595 27.6714 29.7169 27.1686C28.9743 26.6448 27.8816 26.3829 26.4389 26.3829H20.0737V32.8571ZM20.0737 23.3971H25.6114C26.9481 23.3971 27.9665 23.1352 28.6667 22.6114C29.3668 22.0667 29.7169 21.2914 29.7169 20.2857C29.7169 19.2381 29.3668 18.4524 28.6667 17.9286C27.9665 17.4048 26.9481 17.1429 25.6114 17.1429H20.0737V23.3971Z"
                                    fill="white" />
                            </svg>
                            <span>калывай</span>
                        </a>
                    <? else: ?>
                        <span class="header__logo">
                            <svg width="50" height="50" viewBox="0 0 50 50" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <rect width="50" height="50" rx="25" fill="#FC7827" />
                                <path
                                    d="M16 36V14H25.9615C28.4651 14 30.4171 14.4924 31.8174 15.4771C33.2178 16.441 33.9179 17.8343 33.9179 19.6571C33.9179 21.459 33.2496 22.8524 31.9129 23.8371C30.5762 24.801 28.8152 25.2829 26.6298 25.2829L27.2027 24.1514C29.6851 24.1514 31.6052 24.6438 32.9632 25.6286C34.3211 26.6133 35 28.0381 35 29.9029C35 31.8095 34.2892 33.3076 32.8677 34.3971C31.4461 35.4657 29.3456 36 26.5662 36H16ZM20.0737 32.8571H26.4389C27.8816 32.8571 28.9743 32.5952 29.7169 32.0714C30.4595 31.5267 30.8308 30.699 30.8308 29.5886C30.8308 28.4781 30.4595 27.6714 29.7169 27.1686C28.9743 26.6448 27.8816 26.3829 26.4389 26.3829H20.0737V32.8571ZM20.0737 23.3971H25.6114C26.9481 23.3971 27.9665 23.1352 28.6667 22.6114C29.3668 22.0667 29.7169 21.2914 29.7169 20.2857C29.7169 19.2381 29.3668 18.4524 28.6667 17.9286C27.9665 17.4048 26.9481 17.1429 25.6114 17.1429H20.0737V23.3971Z"
                                    fill="white" />
                            </svg>
                            <span>калывай</span>
                        </span>
                    <? endif; ?>
                    <? if ($auth && $auth == 'Y'): ?>
                        <? if(!str_contains($uri, 'moderator')): ?>
                            <nav class="header__nav nav tablet-none">
                                <ul class="nav__list">
                                    <? if ($client && $client == 'Y'): ?>
                                        <li class="nav__item">
                                            <a href="/pages/rezumes.php" class="nav__link link">Поиск резюме</a>
                                        </li>
                                    <? else: ?>
                                        <li class="nav__item">
                                            <a href="/pages/vacancies.php" class="nav__link link">Поиск вакансий</a>
                                        </li>
                                    <? endif; ?>

                                    <li class="nav__item">
                                        <a href="/lk/employer/responces.php" class="nav__link link">Отклики</a>
                                    </li>

                                    <li class="nav__item">
                                        <a href="/pages/help.php" class="nav__link link">Помощь</a>
                                    </li>
                                </ul>
                            </nav>
                            
                            <div class="header__toolbar">
                                <a href="#" class="header__search-icon">
                                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <g>
                                            <path fill-rule="evenodd" clip-rule="evenodd"
                                                d="M11.1035 3.00098C15.5746 3.00098 19.2039 6.62957 19.2041 11.1006C19.2067 12.9384 18.5811 14.7223 17.4316 16.1562L21.2861 20.0098L20.0127 21.2832L16.1592 17.4287C14.7252 18.5782 12.9413 19.2038 11.1035 19.2012C6.63249 19.201 3.00391 15.5717 3.00391 11.1006C3.00412 6.6297 6.63263 3.00119 11.1035 3.00098ZM11.1035 4.80078C7.62263 4.80099 4.80392 7.6197 4.80371 11.1006C4.80371 14.5808 7.6225 17.4012 11.1035 17.4014C12.7419 17.4039 14.3166 16.7652 15.4912 15.623L15.626 15.4883C16.7682 14.3137 17.4069 12.739 17.4043 11.1006C17.4041 7.61957 14.5837 4.80078 11.1035 4.80078Z"
                                                fill="#999999" />
                                        </g>
                                        <defs>
                                            <clipPath id="clip0_4784_13479">
                                                <rect width="24" height="24" fill="white" />
                                            </clipPath>
                                        </defs>
                                    </svg>
                                    <span>Поиск <?= $client && $client == 'Y' ? 'резюме' : 'вакансий'; ?></span>
                                </a>
                                <a href="#" class="btn btn_light btn_has-icon lk-chat">
                                    <svg width="16" height="16" viewBox="0 0 16 16" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <g>
                                            <path
                                                d="M8.00391 2.00098C11.3177 2.00098 14.0039 4.68718 14.0039 8.00098C14.0039 11.3148 11.3177 14.001 8.00391 14.001C7.01833 14.0025 6.04789 13.7596 5.17872 13.2949L2.00391 14.001L2.70997 10.8262C2.24529 9.957 2.00243 8.98656 2.00391 8.00098C2.00391 4.68718 4.69011 2.00098 8.00391 2.00098Z"
                                                fill="#FC7827" />
                                        </g>
                                        <defs>
                                            <clipPath id="clip0_4466_3980">
                                                <rect width="16" height="16" fill="white" />
                                            </clipPath>
                                        </defs>
                                    </svg>
                                </a>
                                <a href="/lk/<?= $client && $client == 'Y' ? 'employer' : 'job_seeker'; ?>/index.php" class="btn btn_size-m btn_neutral btn_has-icon lk-btn">
                                    <svg width="16" height="16" viewBox="0 0 16 16" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <g>
                                            <path
                                                d="M9.80273 9.80078C10.5984 9.80078 11.3612 10.1171 11.9238 10.6797C12.4864 11.2423 12.8027 12.0051 12.8027 12.8008V14.001H3.20312V12.8008C3.20312 12.0053 3.51867 11.2423 4.08105 10.6797C4.64366 10.1171 5.40748 9.80078 6.20312 9.80078H9.80273ZM8.00293 1.40039C8.95766 1.40043 9.87373 1.77998 10.5488 2.45508C11.2238 3.13019 11.6025 4.04629 11.6025 5.00098C11.6025 5.95546 11.2236 6.87087 10.5488 7.5459C9.87373 8.221 8.95766 8.60055 8.00293 8.60059C7.53019 8.60059 7.06176 8.50805 6.625 8.32715C6.18823 8.14623 5.79132 7.88019 5.45703 7.5459C5.12288 7.21167 4.85762 6.81457 4.67676 6.37793C4.49599 5.94135 4.40238 5.4735 4.40234 5.00098C4.40234 4.52822 4.49585 4.05981 4.67676 3.62305C4.85766 3.1863 5.12277 2.78936 5.45703 2.45508C5.79129 2.12082 6.18828 1.85572 6.625 1.6748C7.06177 1.49389 7.53017 1.40039 8.00293 1.40039Z"
                                                fill="white" />
                                        </g>
                                        <defs>
                                            <clipPath id="clip0_4466_3096">
                                                <rect width="16" height="16" fill="white" />
                                            </clipPath>
                                        </defs>
                                    </svg>
                                    <span>Профиль</span>
                                </a>
                                <? if ($client && $client == 'Y'): ?>
                                    <a href="/lk/employer/vacancy-form.php"
                                        class="btn btn_size-m btn_secondary m-none lk-create-link">Создать вакансию</a>
                                <? else: ?>
                                    <a href="/lk/job_seeker/resume-form.php"
                                        class="btn btn_size-m btn_secondary m-none lk-create-link">Создать резюме</a>
                                <? endif; ?>

                                <button class="btn btn_secondary btn_icon btn_icon-s burger">
                                    <svg class="open" width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <g>
                                        <path d="M13.4053 12.8008H2.60547V11.6006H13.4053V12.8008ZM13.4053 8.60059H2.60547V7.40039H13.4053V8.60059ZM13.4053 4.40039H2.60547V3.20117H13.4053V4.40039Z" fill="white"/>
                                        </g>
                                        <defs>
                                        <clipPath id="clip0_8006_4204">
                                        <rect width="16" height="16" fill="white"/>
                                        </clipPath>
                                        </defs>
                                    </svg>
                                    <svg class="close" width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <g>
                                        <path d="M11.8242 5.03125L8.85352 8.00098L11.8242 10.9707L10.9756 11.8193L8.00586 8.84961L5.03516 11.8193L4.1875 10.9707L7.15723 8.00098L4.1875 5.03125L5.03516 4.18262L8.00586 7.15234L10.9756 4.18262L11.8242 5.03125Z" fill="white"/>
                                        </g>
                                        <defs>
                                        <clipPath id="clip0_8006_4353">
                                        <rect width="16" height="16" fill="white"/>
                                        </clipPath>
                                        </defs>
                                    </svg>
                                </button>
                            </div>
                        <? else: ?>
                            <div class="header__toolbar">
                                <a href="javascript:void(0)" class="btn btn_size-m btn_primary btn_has-icon admin-login">
                                    <svg width="16" height="16" viewBox="0 0 16 16" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <g>
                                            <path
                                                d="M9.80273 9.80078C10.5984 9.80078 11.3612 10.1171 11.9238 10.6797C12.4864 11.2423 12.8027 12.0051 12.8027 12.8008V14.001H3.20312V12.8008C3.20312 12.0053 3.51867 11.2423 4.08105 10.6797C4.64366 10.1171 5.40748 9.80078 6.20312 9.80078H9.80273ZM8.00293 1.40039C8.95766 1.40043 9.87373 1.77998 10.5488 2.45508C11.2238 3.13019 11.6025 4.04629 11.6025 5.00098C11.6025 5.95546 11.2236 6.87087 10.5488 7.5459C9.87373 8.221 8.95766 8.60055 8.00293 8.60059C7.53019 8.60059 7.06176 8.50805 6.625 8.32715C6.18823 8.14623 5.79132 7.88019 5.45703 7.5459C5.12288 7.21167 4.85762 6.81457 4.67676 6.37793C4.49599 5.94135 4.40238 5.4735 4.40234 5.00098C4.40234 4.52822 4.49585 4.05981 4.67676 3.62305C4.85766 3.1863 5.12277 2.78936 5.45703 2.45508C5.79129 2.12082 6.18828 1.85572 6.625 1.6748C7.06177 1.49389 7.53017 1.40039 8.00293 1.40039Z"
                                                fill="white" />
                                        </g>
                                        <defs>
                                            <clipPath id="clip0_4466_3096">
                                                <rect width="16" height="16" fill="white" />
                                            </clipPath>
                                        </defs>
                                    </svg>
                                    <span>login</span>
                                </a>
                                <button class="btn btn_light admin-logout">
                                    <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <g>
                                        <path d="M10.0039 2.50098C11.1684 2.5001 12.3168 2.77122 13.3584 3.29199C14.4 3.81277 15.3059 4.56886 16.0039 5.50098H13.9717C13.1056 4.73732 12.0373 4.2401 10.8955 4.06836C9.75366 3.89664 8.58656 4.05804 7.53418 4.53321C6.48183 5.00837 5.58919 5.77704 4.96289 6.74707C4.33658 7.71714 4.00283 8.84727 4.00293 10.002C4.00305 11.1566 4.33645 12.2869 4.96289 13.2568C5.58936 14.2267 6.48274 14.9948 7.53516 15.4697C8.58762 15.9447 9.75467 16.1065 10.8965 15.9346C12.0382 15.7627 13.1058 15.2647 13.9717 14.501H16.0049C15.3068 15.4332 14.401 16.1902 13.3594 16.7109C12.3177 17.2317 11.1685 17.502 10.0039 17.501C5.86166 17.501 2.50391 14.1432 2.50391 10.001C2.50391 5.85873 5.86166 2.50098 10.0039 2.50098ZM19.0039 10.001L15.2539 13.001V10.751H9.25391V9.25098H15.2539V7.00098L19.0039 10.001Z" fill="#FC7827"/>
                                        </g>
                                        <defs>
                                        <clipPath id="clip0_8006_3076">
                                        <rect width="20" height="20" fill="white"/>
                                        </clipPath>
                                        </defs>
                                    </svg>
                                </button>
                            </div>
                        <? endif; ?>
                    <? else: ?>


                        <nav class="header__nav nav">
                            <button class="nav__select js-btn-nav">
                                <span><?= ($client && $client == 'Y') ? 'Работодателю' : 'Соискателю'; ?></span>
                                <svg width="20" height="20" viewBox="0 0 20 20" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <g>
                                        <path fill-rule="evenodd" clip-rule="evenodd"
                                            d="M14.4735 7.38764C14.7664 7.09475 15.2412 7.09475 15.5341 7.38764C15.8267 7.68055 15.8269 8.15538 15.5341 8.44819L10.5341 13.4482C10.2595 13.7226 9.82469 13.74 9.53016 13.4999L9.47352 13.4482L4.47352 8.44819C4.18066 8.15533 4.18074 7.68054 4.47352 7.38764C4.76641 7.09475 5.24117 7.09475 5.53406 7.38764L10.0038 11.8574L14.4735 7.38764Z"
                                            fill="#FC7827" />
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
                                    <a href="/"
                                        class="nav__link link <?= ($client && $client == 'Y') ? '' : 'active' ?>">Соискателю</a>
                                </li>

                                <li class="nav__item">
                                    <a href="/?client=Y"
                                        class="nav__link link <?= ($client && $client == 'Y') ? 'active' : '' ?>">Работодателю</a>
                                </li>
                            </ul>
                        </nav>

                        <div class="header__toolbar">
                            <a href="/lk/auth.php" class="btn btn_size-s btn_neutral btn_has-icon lk-btn">
                                <svg width="16" height="16" viewBox="0 0 16 16" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <g>
                                        <path
                                            d="M9.80273 9.80078C10.5984 9.80078 11.3612 10.1171 11.9238 10.6797C12.4864 11.2423 12.8027 12.0051 12.8027 12.8008V14.001H3.20312V12.8008C3.20312 12.0053 3.51867 11.2423 4.08105 10.6797C4.64366 10.1171 5.40748 9.80078 6.20312 9.80078H9.80273ZM8.00293 1.40039C8.95766 1.40043 9.87373 1.77998 10.5488 2.45508C11.2238 3.13019 11.6025 4.04629 11.6025 5.00098C11.6025 5.95546 11.2236 6.87087 10.5488 7.5459C9.87373 8.221 8.95766 8.60055 8.00293 8.60059C7.53019 8.60059 7.06176 8.50805 6.625 8.32715C6.18823 8.14623 5.79132 7.88019 5.45703 7.5459C5.12288 7.21167 4.85762 6.81457 4.67676 6.37793C4.49599 5.94135 4.40238 5.4735 4.40234 5.00098C4.40234 4.52822 4.49585 4.05981 4.67676 3.62305C4.85766 3.1863 5.12277 2.78936 5.45703 2.45508C5.79129 2.12082 6.18828 1.85572 6.625 1.6748C7.06177 1.49389 7.53017 1.40039 8.00293 1.40039Z"
                                            fill="white" />
                                    </g>
                                    <defs>
                                        <clipPath id="clip0_4466_3096">
                                            <rect width="16" height="16" fill="white" />
                                        </clipPath>
                                    </defs>
                                </svg>
                                <span>Войти</span>
                            </a>
                            <? if ($client && $client == 'Y'): ?>
                                <a href="/lk/employer/vacancy-form.php" class="btn btn_size-s btn_secondary m-none">Создать
                                    вакансию</a>
                            <? else: ?>
                                <a href="/lk/job_seeker/resume-form.php" class="btn btn_size-s btn_secondary m-none">Создать
                                    резюме</a>
                            <? endif; ?>


                            <button class="btn btn_secondary btn_icon btn_icon-s burger">
                                <svg width="20" height="20" viewBox="0 0 20 20" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <g>
                                        <path
                                            d="M16.7539 16.001H3.25391V14.501H16.7539V16.001ZM16.7539 10.751H3.25391V9.25098H16.7539V10.751ZM16.7539 5.50098H3.25391V4.00098H16.7539V5.50098Z"
                                            fill="white" />
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
                        <a href="/pages/vacancies.php" class="link">Каталог <?= $client && $client == 'Y' ? 'резюме' : 'вакансий'; ?></a>
                    </li>
                    <li class="burger-menu__item">
                        <a href="/pages/companies.php" class="link">Каталог компаний</a>
                    </li>
                    <li class="burger-menu__item">
                        <a href="/pages/article.php" class="link">Правила <?= $client && $client == 'Y' ? 'размещения вакансии' : 'составления резюме'; ?></a>
                    </li>
                    <? if ($client && $client == 'Y'): ?>
                        <li class="burger-menu__item">
                            <a href="/lk/employer/vacancy-form.php" class="btn btn_size-m btn_primary">Создать
                                вакансию</a>
                        </li>
                    <? else: ?>
                        <li class="burger-menu__item">
                            <a href="/lk/job_seeker/resume-form.php" class="btn btn_size-m btn_primary">Создать резюме</a>
                        </li>
                    <? endif; ?>
                </ul>
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
                    <? if ($auth && $auth == 'Y'): ?>
                        <li class="burger-menu__item">
                            <a href="javascript:void(0)" class="btn btn_size-m btn_light">Выйти из профиля</a>
                        </li>
                    <? endif; ?>
                </ul>
            </div>
        </header>

        <? if ($auth && $auth == 'Y'): ?>
            <div class="auth-mobile-menu">
                <ul class="auth-mobile-menu__row">
                    <?php foreach ($authMobileMenuItems as $item): ?>
                        <li class="auth-mobile-menu__item <?= str_contains($uri, $item['href']) ? 'active' : ''; ?> <?= $item['classes'] ?>">
                            <a href="<?= $item['href'] ?>" class="btn">
                                <?= $item['icon'] ?>
                            </a>
                            <span><?= $item['label'] ?></span>
                        </li>
                    <?php endforeach; ?>
                </ul>
            </div>
        <? endif; ?>