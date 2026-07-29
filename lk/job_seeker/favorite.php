<?php
if (isset($_GET['resume']) && $_GET['resume'] === 'Y') {
    header('Location: /lk/job_seeker/favorite.php?vacancies=Y', true, 302);
    exit;
}

require($_SERVER["DOCUMENT_ROOT"] . "/template/header.php");
?>

<section class="lk">
    <div class="container">
        <div class="lk__wrapper">
            <? require($_SERVER["DOCUMENT_ROOT"] . "/template/lk/job_seeker/lk_sidebar.php"); ?>
            <div class="lk__wrapper-content">
                <? require($_SERVER["DOCUMENT_ROOT"] . "/template/lk/job_seeker/favorite-content.php"); ?>
            </div>
        </div>
    </div>
</section>

<? require($_SERVER["DOCUMENT_ROOT"] . "/template/footer.php"); ?>
