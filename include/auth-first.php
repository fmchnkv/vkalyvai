<? 
$regAuth = isset($_GET['reg-auth']) ? $_GET['reg-auth'] : 0;
?>
<div class="auth-section__hero auth-hero">
    <div class="auth-hero__links">
        <a href="/lk/auth.php" class="auth-hero__link link <?= $regAuth ? '' : 'active'; ?>">Вход</a>
        <a href="/lk/auth.php?reg-auth=1" class="auth-hero__link link <?= $regAuth ? 'active' : ''; ?>">Регистрация</a>
    </div>

    <div class="auth-hero__choices">
        <? if ($regAuth) : ?>
            <a href="/lk/auth.php?reg=1" class="auth-hero__btn tab tab_size-l active">Соискатель</a>
            <a href="/lk/auth.php?reg=2" class="auth-hero__btn tab tab_size-l">Работодатель</a>
        <? else : ?>
            <a href="/lk/auth.php?role=1" class="auth-hero__btn tab tab_size-l active">Соискатель</a>
            <a href="/lk/auth.php?role=2" class="auth-hero__btn tab tab_size-l">Работодатель</a>
        <? endif; ?>
    </div>
</div>