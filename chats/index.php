<? require($_SERVER["DOCUMENT_ROOT"] . "/template/header.php"); ?>
<?
if (isset($_GET['client']) && $_GET['client'] == 'Y') {
    $whoIs = 'employer';
} elseif (isset($_GET['moderator']) && $_GET['moderator'] == 'Y') {
    $whoIs = 'moderator';
} else {
    $whoIs = 'job_seeker';
}

?>
<section class="chats">
    <div class="container">
        <h1 style="display: none">Чаты</h1>
        <div class="chats__wrapper-outer">
            <div class="chats__menu-sidebar">
                <? if ($whoIs == 'job_seeker') require($_SERVER["DOCUMENT_ROOT"] . "/template/lk/job_seeker/lk_sidebar.php"); ?>
                <? if ($whoIs == 'employer') require($_SERVER["DOCUMENT_ROOT"] . "/template/lk/employer/lk_sidebar.php"); ?>
                <? if ($whoIs == 'moderator') require($_SERVER["DOCUMENT_ROOT"] . "/template/lk/moderator/lk_sidebar.php"); ?>
            </div>
            <div class="chats__wrapper">
                <div class="chats__sidebar">
                    <div class="chats__sidebar-header">
                        <div class="chats__select select" data-id="chats">
                            <label class="filter-group__input select__input input input_has-icon">
                                <span class="txt">
                                    <span><?= $whoIs == 'moderator' ? 'Обращения' : 'Чаты'; ?></span>
                                    <input class="input__field" type="text" name="chats" placeholder="Все" readonly>
                                </span>
                                <span class="input__icon">
                                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <g>
                                            <path fill-rule="evenodd" clip-rule="evenodd"
                                                d="M17.4736 8.97065C17.7665 8.67775 18.2412 8.67775 18.5341 8.97065C18.827 9.26354 18.827 9.73832 18.5341 10.0312L12.5341 16.0312C12.2595 16.3058 11.8248 16.3232 11.5302 16.083L11.4736 16.0312L5.47358 10.0312C5.18068 9.7383 5.18068 9.26354 5.47358 8.97065C5.76647 8.67775 6.24123 8.67775 6.53412 8.97065L12.0038 14.4404L17.4736 8.97065Z"
                                                fill="#232323"></path>
                                        </g>
                                        <defs>
                                            <clipPath>
                                                <rect width="24" height="24" fill="white"></rect>
                                            </clipPath>
                                        </defs>
                                    </svg>
                                </span>
                            </label>
                            <div class="select__dropdown">
                                <ul class="select__dropdown-list">
                                    <li class="select__option active" data-messages="all" data-value="Все">Все чаты</li>
                                    <li class="select__option" data-messages="no-viewed" data-value="Непрочитанные">Непрочитанные</li>
                                    <li class="select__option" data-messages="viewed" data-value="Прочитанные">Прочитанные</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="chats__sidebar-filter">
                        <?
                        if (isset($whoIs) && $whoIs !== 'moderator') {
                            require($_SERVER["DOCUMENT_ROOT"] . "/template/chats/$whoIs/sidebar-filter.php");
                        }
                        ?>
                    </div>
                    <div class="chats__items">
                        <? require($_SERVER["DOCUMENT_ROOT"] . "/template/chats/chats-list.php"); ?>
                    </div>
                </div>
                <div class="chats__dialog">
                    <? require($_SERVER["DOCUMENT_ROOT"] . "/template/chats/dialog_top-panel.php"); ?>
                    <? require($_SERVER["DOCUMENT_ROOT"] . "/template/chats/dialog_body.php"); ?>
                    <? require($_SERVER["DOCUMENT_ROOT"] . "/template/chats/dialog_bottom.php"); ?>
                </div>
            </div>
        </div>
    </div>
</section>
<script src="https://code.jquery.com/jquery-3.7.1.min.js" integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/noUiSlider/8.5.0/nouislider.min.js"
    integrity="sha512-kWasPJUdIWdHCp9A/0ZnfLRtfuo0EK9y66aSaSY5VekeNlsbud3ks3WuJX3chrkzAV+0yJKXDDh9wYojd+O0pA=="
    crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script src="https://cdn.jsdelivr.net/npm/swiper@12/swiper-bundle.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@fancyapps/ui@6.1/dist/fancybox/fancybox.umd.js"></script>
<script src="/assets/js/inputmask.min.js"></script>
<script defer src="/assets/js/slick.min.js"></script>
<script defer src="/assets/js/main.js?v=<?= time() ?>"></script>
<div class="overlay"></div>
</div>
</body>

</html>
