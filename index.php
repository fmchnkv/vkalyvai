<? require($_SERVER["DOCUMENT_ROOT"]."/template/header.php"); ?>

<?
$client = isset($_GET['client']) ? $_GET['client'] : '';
$auth = isset($_GET['auth']) ? $_GET['auth'] : '';
?>

<? if (($client && $client == 'Y') || ($auth && $auth == 'Y')) : ?>
    <? require($_SERVER["DOCUMENT_ROOT"]."/pages/main-rez.php"); ?>
<? else : ?>
    <? require($_SERVER["DOCUMENT_ROOT"]."/pages/main-vac.php"); ?>
<? endif; ?>

<? require($_SERVER["DOCUMENT_ROOT"]."/template/footer.php"); ?>