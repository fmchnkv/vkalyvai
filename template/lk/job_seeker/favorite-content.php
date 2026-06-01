<?
$vacancies = isset($_GET['vacancies']) ? $_GET['vacancies'] : ''; 
$resume = isset($_GET['resume']) ? $_GET['resume'] : ''; 
$companies = isset($_GET['companies']) ? $_GET['companies'] : ''; 
?>
<h1 class="favorite__title page-title">Избранное</h1>
<ul class="favorite__tabs tabs">
    <li class="tabs__item">
        <a href="javascript:void(0);" class="tabs__link tab active">Вакансии</a>
    </li>
    <li class="tabs__item">
        <a href="javascript:void(0);" class="tabs__link tab">Компании</a>
    </li>
    <li class="tabs__item">
        <a href="javascript:void(0);" class="tabs__link tab">Резюме</a>
    </li>
</ul>
<div class="favorite__sorting sorting">
    <div class="sorting__item">
        <button class="sorting__button accordion-button btn-link js-sort-btn">
            <span>По новизне</span>
            <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                <g clip-path="url(#clip0_4580_8402)">
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
            </ul>
        </div>
    </div>
    <div class="sorting__item">
        <button class="sorting__button accordion-button btn-link js-sort-btn">
            <span>Показывать по 4</span>
            <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                <g clip-path="url(#clip0_4580_8402)">
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
        <div class="sorting__dropdown" data-id="elements">
            <ul class="sorting__dropdown-list">
                <li class="sorting__option active" data-value="Показывать по 4">Показывать по 4</li>
                <li class="sorting__option" data-value="Показывать по 8">Показывать по 8</li>
                <li class="sorting__option" data-value="Показывать по 16">Показывать по 16</li>
            </ul>
        </div>
    </div>
</div>
<? if ($vacancies == 'Y') : ?>
    <? require($_SERVER["DOCUMENT_ROOT"] . "/template/lk/favorites/vacancies_list.php"); ?>
<? elseif ($companies == 'Y') : ?>
    <? require($_SERVER["DOCUMENT_ROOT"] . "/template/lk/favorites/companies_list.php"); ?>
<? else : ?>
    <? require($_SERVER["DOCUMENT_ROOT"] . "/template/lk/favorites/resume_list.php"); ?>
<? endif; ?>

<div class="favorites__pagination pagination">
    <a href="#" class="pagination__arrow pagination__arrow_prev" style="display: none;">
        <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
            <g clip-path="url(#clip0_4580_14223)">
                <path
                    d="M10.3057 3.63764C10.5986 3.34475 11.0733 3.34475 11.3662 3.63764L17.1992 9.47065C17.4921 9.76354 17.4921 10.2383 17.1992 10.5312L11.3662 16.3652C11.0733 16.6575 10.5984 16.6577 10.3057 16.3652C10.0129 16.0724 10.0133 15.5976 10.3057 15.3046L14.8584 10.7509H3.33594C2.92198 10.7507 2.58611 10.4149 2.58594 10.0009C2.58611 9.58696 2.92198 9.2511 3.33594 9.25092H14.8584L10.3057 4.69819C10.0129 4.4054 10.0131 3.93056 10.3057 3.63764Z"
                    fill="#999999"></path>
            </g>
            <defs>
                <clipPath id="clip0_4580_14223">
                    <rect width="20" height="20" fill="white"></rect>
                </clipPath>
            </defs>
        </svg>
    </a>
    <ul class="pagination__list">
        <li class="pagination__item">
            <a href="#" class="pagination__link active">1</a>
        </li>
        <li class="pagination__item">
            <a href="#" class="pagination__link">2</a>
        </li>
        <li class="pagination__item">
            <a href="#" class="pagination__link">3</a>
        </li>
        <li class="pagination__item">
            <a href="#" class="pagination__link">4</a>
        </li>
        <li class="pagination__item">
            <a href="#" class="pagination__link">5</a>
        </li>
        <li class="pagination__item">
            <a href="#" class="pagination__link">6</a>
        </li>
        <li class="pagination__item">
            <a href="#" class="pagination__link">7</a>
        </li>
        <li class="pagination__item">
            <a href="#" class="pagination__link">8</a>
        </li>
        <li class="pagination__item">
            <a href="#" class="pagination__link">9</a>
        </li>
        <li class="pagination__item pagination__item_dots">
            <a href="#" class="pagination__link pagination__link_dots">...</a>
        </li>
        <li class="pagination__item">
            <a href="#" class="pagination__link">23</a>
        </li>
    </ul>
    <a href="#" class="pagination__arrow pagination__arrow_next">
        <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
            <g clip-path="url(#clip0_4580_14223)">
                <path
                    d="M10.3057 3.63764C10.5986 3.34475 11.0733 3.34475 11.3662 3.63764L17.1992 9.47065C17.4921 9.76354 17.4921 10.2383 17.1992 10.5312L11.3662 16.3652C11.0733 16.6575 10.5984 16.6577 10.3057 16.3652C10.0129 16.0724 10.0133 15.5976 10.3057 15.3046L14.8584 10.7509H3.33594C2.92198 10.7507 2.58611 10.4149 2.58594 10.0009C2.58611 9.58696 2.92198 9.2511 3.33594 9.25092H14.8584L10.3057 4.69819C10.0129 4.4054 10.0131 3.93056 10.3057 3.63764Z"
                    fill="#999999"></path>
            </g>
            <defs>
                <clipPath id="clip0_4580_14223">
                    <rect width="20" height="20" fill="white"></rect>
                </clipPath>
            </defs>
        </svg>
    </a>
</div>