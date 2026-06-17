<? 
$reg = isset($_GET['reg']) ? $_GET['reg'] : 0;
$step = isset($_GET['step']) ? $_GET['step'] : 1;
?>

<div class="auth-reg js-reg-container">
    <? 
    switch ($step) {
        case 2:
            if ($reg == 1) {
                include $_SERVER["DOCUMENT_ROOT"] . '/include/reg-seeker/reg-contacts.php';
            } else {
                include $_SERVER["DOCUMENT_ROOT"] . '/include/reg-employer/reg-inn.php';
            }
            break;
        case 3:
            if ($reg == 1) {
                include $_SERVER["DOCUMENT_ROOT"] . '/include/reg-seeker/reg-confirm.php';
            } else {
                include $_SERVER["DOCUMENT_ROOT"] . '/include/reg-employer/reg-main.php';
            }
            break;
        case 4:
            if ($reg == 1) {
                include $_SERVER["DOCUMENT_ROOT"] . '/include/reg-seeker/reg-pass.php';
            } else {
                include $_SERVER["DOCUMENT_ROOT"] . '/include/reg-employer/reg-confirm.php';
            }
            break;
        case 5:
            include $_SERVER["DOCUMENT_ROOT"] . '/include/reg-employer/reg-pass.php';
            break;
        default:
            if ($reg == 1) {
                include $_SERVER["DOCUMENT_ROOT"] . '/include/reg-seeker/reg-main.php';
            } else {
                include $_SERVER["DOCUMENT_ROOT"] . '/include/reg-employer/reg-first.php';
            }
            break;
    }
    ?>
</div>