<?
$vacancies = isset($_GET['vacancies']) ? $_GET['vacancies'] : ''; 
$resume = isset($_GET['resume']) ? $_GET['resume'] : ''; 
$companies = isset($_GET['companies']) ? $_GET['companies'] : ''; 
$currentPage = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
?>
<h1 class="favorite__title page-title lk__page-title">Избранное</h1>
<div class="lk__filters-wrapper">
    <ul class="favorite__tabs lk__tabs tabs">
        <li class="tabs__item">
            <a href="<?= $currentPage ?>?vacancies=Y" class="tabs__link tab<?= $vacancies == 'Y' ? ' active' : '' ?>">Вакансии</a>
        </li>
        <li class="tabs__item">
            <a href="<?= $currentPage ?>?companies=Y" class="tabs__link tab<?= $companies == 'Y' ? ' active' : '' ?>">Компании</a>
        </li>
        <li class="tabs__item">
            <a href="<?= $currentPage ?>?resume=Y" class="tabs__link tab<?= ($resume == 'Y' || ($vacancies != 'Y' && $companies != 'Y')) ? ' active' : '' ?>">Резюме</a>
        </li>
    </ul>
    <? require($_SERVER["DOCUMENT_ROOT"] . "/template/lk/sort.php"); ?>
</div>
<? if ($vacancies == 'Y') : ?>
    <? require($_SERVER["DOCUMENT_ROOT"] . "/template/lk/favorites/vacancies_list.php"); ?>
<? elseif ($companies == 'Y') : ?>
    <? require($_SERVER["DOCUMENT_ROOT"] . "/template/lk/favorites/companies_list.php"); ?>
<? else : ?>
    <? require($_SERVER["DOCUMENT_ROOT"] . "/template/lk/favorites/resume_list.php"); ?>
<? endif; ?>

<? include $_SERVER["DOCUMENT_ROOT"] . '/include/pagination.php'; ?>
