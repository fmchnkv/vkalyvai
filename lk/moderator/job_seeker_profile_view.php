<? require($_SERVER["DOCUMENT_ROOT"] . "/template/header.php"); ?>

<section class="lk">
    <div class="container">
        <div class="lk__wrapper moderator__profile-editor">
            <div class="lk__wrapper-content">
                <? require($_SERVER["DOCUMENT_ROOT"] . "/template/lk/job_seeker/profile.php"); ?>
            </div>
            <div class="detail__sidebar moderator__sidebar">
                <div class="detail__actions">
                    <button class="detail__btn btn btn_primary btn_size-m btn_has-icon">
                        <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M10.0039 2.50098C14.1462 2.50098 17.5039 5.85873 17.5039 10.001C17.5039 14.1432 14.1462 17.501 10.0039 17.501C8.77193 17.5028 7.55815 17.2 6.47169 16.6191L2.50391 17.501L3.38575 13.5332C2.8049 12.4467 2.50206 11.233 2.50391 10.001C2.50391 5.85873 5.86167 2.50098 10.0039 2.50098Z" fill="white"/>
                            <defs>
                            <clipPath id="clip0_7052_2207">
                            <rect width="20" height="20" fill="white"/>
                            </clipPath>
                            </defs>
                        </svg>
                        <span>Написать</span>
                    </button>
                    <button class="detail__share btn btn_light btn_size-m btn_has-icon">
                        <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M13.7539 4.00098H17.5039V5.50098H16.0039V16.751C16.0039 16.9499 15.9248 17.1406 15.7842 17.2812C15.6435 17.4219 15.4528 17.501 15.2539 17.501H4.75391C4.55499 17.501 4.36429 17.4219 4.22363 17.2812C4.08298 17.1406 4.00391 16.9499 4.00391 16.751V5.50098H2.50391V4.00098H6.25391V2.50098H13.7539V4.00098ZM5.50391 16.001H14.5039V5.50098H5.50391V16.001ZM9.25391 13.751H7.75391V7.75098H9.25391V13.751ZM12.2539 13.751H10.7539V7.75098H12.2539V13.751Z" fill="#F14C4C"/>
                            <defs>
                            <clipPath id="clip0_7052_2220">
                            <rect width="20" height="20" fill="white"/>
                            </clipPath>
                            </defs>
                        </svg>
                        <span>Заблокировать</span>
                    </button>
                </div>
            </div>
        </div>
    </div>
</section>

<? require($_SERVER["DOCUMENT_ROOT"] . "/template/footer.php"); ?>