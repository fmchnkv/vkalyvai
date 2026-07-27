<?
$uri = $_SERVER['REQUEST_URI'];
?>
<div class="notify__sorting lk__sorting sorting">
    <? if (str_contains($uri, '/lk/job_seeker/favorite.php?companies=Y')): ?>
        <div class="sorting__item">
            <button class="sorting__button accordion-button btn-link js-sort-btn">
                <span>По алфавиту</span>
                <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <g>
                        <path
                            d="M10.0009 2.58301C10.4149 2.58318 10.7507 2.91905 10.7509 3.33301V14.8555L15.3046 10.3027C15.5976 10.0103 16.0724 10.01 16.3652 10.3027C16.6577 10.5955 16.6575 11.0704 16.3652 11.3633L10.5312 17.1963C10.2383 17.4892 9.76354 17.4892 9.47065 17.1963L3.63764 11.3633C3.34475 11.0704 3.34475 10.5956 3.63764 10.3027C3.93056 10.0102 4.4054 10.0099 4.69819 10.3027L9.25092 14.8555V3.33301C9.2511 2.91905 9.58696 2.58318 10.0009 2.58301Z"
                            fill="#FC7827"></path>
                    </g>
                    <defs>
                        <clipPath id="clip0_4580_8402">
                            <rect width="20" height="20" fill="white"></rect>
                        </clipPath>
                    </defs>
                </svg>
            </button>
            <!-- TODO: add dropdown  -->
            <div class="sorting__dropdown" data-id="sort">
                <ul class="sorting__dropdown-list">
                    <li class="sorting__option active" data-value="«А–Я» / «A–Z»">«А–Я» / «A–Z»</li>
                    <li class="sorting__option" data-value="«Я–А» / «Z–А»">«Я–А» / «Z–A»</li>
                </ul>
            </div>
        </div>
    <? else: ?>
        <? if (!str_contains($uri, '/lk/job_seeker/responces.php')): ?>
            <div class="sorting__item">
                <button class="sorting__button accordion-button btn-link js-sort-btn">
                    <span>По новизне</span>
                    <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <g>
                            <path
                                d="M10.0009 2.58301C10.4149 2.58318 10.7507 2.91905 10.7509 3.33301V14.8555L15.3046 10.3027C15.5976 10.0103 16.0724 10.01 16.3652 10.3027C16.6577 10.5955 16.6575 11.0704 16.3652 11.3633L10.5312 17.1963C10.2383 17.4892 9.76354 17.4892 9.47065 17.1963L3.63764 11.3633C3.34475 11.0704 3.34475 10.5956 3.63764 10.3027C3.93056 10.0102 4.4054 10.0099 4.69819 10.3027L9.25092 14.8555V3.33301C9.2511 2.91905 9.58696 2.58318 10.0009 2.58301Z"
                                fill="#FC7827"></path>
                        </g>
                        <defs>
                            <clipPath id="clip0_4580_8402">
                                <rect width="20" height="20" fill="white"></rect>
                            </clipPath>
                        </defs>
                    </svg>
                </button>
                <!-- TODO: add dropdown  -->
                <div class="sorting__dropdown" data-id="sort">
                    <ul class="sorting__dropdown-list">
                        <li class="sorting__option active" data-value="По новизне">По новизне</li>
                        <li class="sorting__option" data-value="По активности">По активности</li>
                        <li class="sorting__option" data-value="По зарплатным ожиданиям">По зарплатным ожиданиям</li>
                        <li class="sorting__option" data-value="По удаленности от вас">По удаленности от вас</li>
                    </ul>
                </div>
            </div>
        <? endif; ?>

        <div class="sorting__item">
            <button class="sorting__button accordion-button btn-link js-sort-btn">
                <span>За все время</span>
                <svg width="16" height="16" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <g>
                        <path
                            d="M10.0009 2.58301C10.4149 2.58318 10.7507 2.91905 10.7509 3.33301V14.8555L15.3046 10.3027C15.5976 10.0103 16.0724 10.01 16.3652 10.3027C16.6577 10.5955 16.6575 11.0704 16.3652 11.3633L10.5312 17.1963C10.2383 17.4892 9.76354 17.4892 9.47065 17.1963L3.63764 11.3633C3.34475 11.0704 3.34475 10.5956 3.63764 10.3027C3.93056 10.0102 4.4054 10.0099 4.69819 10.3027L9.25092 14.8555V3.33301C9.2511 2.91905 9.58696 2.58318 10.0009 2.58301Z"
                            fill="#FC7827" />
                    </g>
                    <defs>
                        <clipPath id="clip0_4580_8402">
                            <rect width="16" height="16" fill="white" />
                        </clipPath>
                    </defs>
                </svg>
            </button>
            <!-- TODO: add dropdown  -->
            <div class="sorting__dropdown" data-id="time">
                <ul class="sorting__dropdown-list">
                    <li class="sorting__option active" data-value="За все время">За все время</li>
                    <li class="sorting__option" data-value="За 24 часа">За 24 часа</li>
                    <li class="sorting__option" data-value="За неделю">За неделю</li>
                </ul>
            </div>
        </div>

        <? if(str_contains($uri, '/lk/employer/responces.php')): ?>
            <a href="javascript:void(0);" class="show-all-btn transp-btn lk__btn_has-icon icons-block">
                <span>Архив</span>
                <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <g>
                        <path
                            d="M7.38666 4.46985C7.67957 4.17708 8.15436 4.177 8.44721 4.46985L13.4472 9.46985C13.7398 9.76273 13.7399 10.2376 13.4472 10.5304L8.44721 15.5304C8.1544 15.8232 7.67958 15.823 7.38666 15.5304C7.09377 15.2375 7.09377 14.7627 7.38666 14.4699L11.8564 10.0001L7.38666 5.5304C7.09377 5.23751 7.09377 4.76275 7.38666 4.46985Z"
                            fill="#FC7827" />
                    </g>
                    <defs>
                        <clipPath id="clip0_archive">
                            <rect width="20" height="20" fill="white" />
                        </clipPath>
                    </defs>
                </svg>
            </a>
        <? endif; ?>
    <? endif; ?>
</div>
