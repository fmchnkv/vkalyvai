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

    <link rel="stylesheet" href="/assets/css/main.css?v=<?= time() ?>">
    <link rel="stylesheet" href="/assets/css/auth.css?v=<?= time() ?>">
    <link rel="stylesheet" href="/assets/css/custom.css?v=<?= time() ?>">
</head>

<?
$auth = isset($_GET['auth']) ? $_GET['auth'] : '';
$client = isset($_GET['client']) ? $_GET['client'] : '';
?>

<body>

    <div class="body-wrapper">

        