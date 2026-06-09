<?
$vacancies = isset($_GET['vacancies']) ? $_GET['vacancies'] : ''; 
$resume = isset($_GET['resume']) ? $_GET['resume'] : ''; 
$companies = isset($_GET['companies']) ? $_GET['companies'] : ''; 
?>
<h1 class="favorite__title page-title lk__page-title">Избранное</h1>
<ul class="favorite__tabs lk__tabs tabs">
    <li class="tabs__item">
        <a href="javascript:void(0);" class="tabs__link tab active">Вакансии</a>
    </li>
    <li class="tabs__item">
        <a href="javascript:void(0);" class="tabs__link tab">Компании</a>
    </li>
    <li class="tabs__item">
        <a href="javascript:void(0);" class="tabs__link tab">Резюме</a>
    </li>
</ul>
<? require($_SERVER["DOCUMENT_ROOT"] . "/template/lk/sort.php"); ?>
<? if ($vacancies == 'Y') : ?>
    <? require($_SERVER["DOCUMENT_ROOT"] . "/template/lk/favorites/vacancies_list.php"); ?>
<? elseif ($companies == 'Y') : ?>
    <? require($_SERVER["DOCUMENT_ROOT"] . "/template/lk/favorites/companies_list.php"); ?>
<? else : ?>
    <? require($_SERVER["DOCUMENT_ROOT"] . "/template/lk/favorites/resume_list.php"); ?>
<? endif; ?>

<? include $_SERVER["DOCUMENT_ROOT"] . '/include/pagination.php'; ?>