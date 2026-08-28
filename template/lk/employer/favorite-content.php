<?
$autosearch = isset($_GET['autoSearch']) ? $_GET['autoSearch'] : ''; 
$resume = isset($_GET['resume']) ? $_GET['resume'] : ''; 
$currentPage = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
?>

<h1 class="favorite__title page-title lk__page-title">Избранное</h1>
<div class="lk__filters-wrapper">
    <? require($_SERVER["DOCUMENT_ROOT"] . "/template/lk/sort.php"); ?>
</div>
<div class="lk__filters-wrapper">
    <ul class="favorite__tabs lk__tabs tabs">
        <li class="tabs__item">
            <a href="<?= $currentPage ?>?autoSearch=Y&auth=Y" class="tabs__link tab<?= $autosearch == 'Y' ? ' active' : '' ?>">Автопоиск</a>
        </li>
        <li class="tabs__item">
            <a href="<?= $currentPage ?>?resume=Y&auth=Y" class="tabs__link tab<?= $resume == 'Y' ? ' active' : '' ?>">Резюме</a>
        </li>
    </ul>
    <? require($_SERVER["DOCUMENT_ROOT"] . "/template/lk/sort.php"); ?>
</div>
<? if ($autosearch == 'Y') : ?>
    <? require($_SERVER["DOCUMENT_ROOT"] . "/template/lk/favorites/autosearch.php"); ?>
<? elseif ($resume == 'Y') : ?>
    <? require($_SERVER["DOCUMENT_ROOT"] . "/template/lk/favorites/resume_list.php"); ?>
<? endif; ?>
<? include $_SERVER["DOCUMENT_ROOT"] . '/include/pagination.php'; ?>
