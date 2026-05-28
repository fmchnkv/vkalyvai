<? 
$reg = isset($_GET['reg']) ? $_GET['reg'] : 0;
?>
<div class="auth-section__hero auth-hero">
    <div class="auth-hero__links">
        <a href="/lk/auth.php" class="auth-hero__link <?= $reg ? '' : 'active'; ?>">Вход</a>
        <a href="/lk/auth.php?reg=1" class="auth-hero__link <?= $reg ? 'active' : ''; ?>">Регистрация</a>
    </div>

    <div class="auth-hero__choices">
        <? if ($reg) : ?>
            <a href="/lk/auth.php?reg=1&role=1" class="auth-hero__btn tab tab_size-l">Соискатель</a>
            <a href="/lk/auth.php?reg=1&role=2" class="auth-hero__btn tab tab_size-l">Работодатель</a>
        <? else : ?>
            <a href="/lk/auth.php?role=1" class="auth-hero__btn tab tab_size-l">Соискатель</a>
            <a href="/lk/auth.php?role=2" class="auth-hero__btn tab tab_size-l">Работодатель</a>
        <? endif; ?>
    </div>
</div>