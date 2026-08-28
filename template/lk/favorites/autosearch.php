<?php
$uri = $_SERVER['REQUEST_URI'];
$targetUri = str_contains($uri, 'employer') ? '/pages/rezumes.php?client=Y&auth=Y' : '/pages/vacancies.php?auth=Y';
$targetItems = str_contains($uri, 'employer') ? 'резюме' : 'вакансий';
?>

<div class="autosearch-list grid-list favorite-list">
    <div class="lk-card offers-list__item autosearch-item">
        <div class="autosearch-item__content">
            <div class="autosearch-item__header">
                <span class="title">Название поискового запроса</span>
                <button type="button" class="btn btn--delete" data-call-modal="action-remove">
                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <g >
                            <path
                                d="M16.5039 4.80078H21.0039V6.60059H19.2041V20.1006C19.2041 20.3392 19.1092 20.5685 18.9404 20.7373C18.7716 20.9061 18.5424 21.001 18.3037 21.001H5.7041C5.46541 21.001 5.23617 20.9061 5.06738 20.7373C4.89866 20.5685 4.80371 20.3392 4.80371 20.1006V6.60059H3.00391V4.80078H7.50391V3.00098H16.5039V4.80078ZM6.60352 19.2012H17.4043V6.60059H6.60352V19.2012ZM11.1035 16.501H9.30371V9.30078H11.1035V16.501ZM14.7041 16.501H12.9043V9.30078H14.7041V16.501Z"
                                fill="#999999" />
                        </g>
                        <defs>
                            <clipPath>
                                <rect width="24" height="24" fill="white" />
                            </clipPath>
                        </defs>
                    </svg>
                </button>
            </div>
            <div class="offer-info__item autosearch-item__address">
                <img src="/images/geo-icon.svg" alt="geo icon">
                <span>Москва, Московская область</span>
            </div>
            <ul class="autosearch-item__filters">
                <li>Наименование и значение фильтра</li>
                <li>Наименование и значение фильтра</li>
                <li>Наименование и значение фильтра</li>
                <li>Наименование и значение фильтра</li>
            </ul>
            <div class="autosearch-item__bottom">
                <a href="<?= $targetUri; ?>" class="btn btn_light btn_size-m btn_has-icon">
                    <span>999 <?= $targetItems; ?></span>
                    <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <g>
                            <path d="M7.38666 4.46985C7.67957 4.17708 8.15436 4.177 8.44721 4.46985L13.4472 9.46985C13.7398 9.76273 13.7399 10.2376 13.4472 10.5304L8.44721 15.5304C8.1544 15.8232 7.67958 15.823 7.38666 15.5304C7.09377 15.2375 7.09377 14.7627 7.38666 14.4699L11.8564 10.0001L7.38666 5.5304C7.09377 5.23751 7.09377 4.76275 7.38666 4.46985Z" fill="#FC7827"></path>
                        </g>
                        <defs>
                            <clipPath>
                                <rect width="20" height="20" fill="white"></rect>
                            </clipPath>
                        </defs>
                    </svg>
                </a>
                <a href="<?= $targetUri; ?>" class="autosearch-item__btn-new transp-btn lk__btn_has-icon icons-block">
                    <span>35 новых <?= $targetItems; ?></span>
                    <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <g>
                            <path d="M7.38666 4.46985C7.67957 4.17708 8.15436 4.177 8.44721 4.46985L13.4472 9.46985C13.7398 9.76273 13.7399 10.2376 13.4472 10.5304L8.44721 15.5304C8.1544 15.8232 7.67958 15.823 7.38666 15.5304C7.09377 15.2375 7.09377 14.7627 7.38666 14.4699L11.8564 10.0001L7.38666 5.5304C7.09377 5.23751 7.09377 4.76275 7.38666 4.46985Z" fill="#5db634"></path>
                        </g>
                        <defs>
                            <clipPath>
                                <rect width="20" height="20" fill="white"></rect>
                            </clipPath>
                        </defs>
                    </svg>
                </a>
            </div>
        </div>
    </div>
    <div class="lk-card offers-list__item autosearch-item">
        <div class="autosearch-item__content">
            <div class="autosearch-item__header">
                <span class="title">Название поискового запроса</span>
                <button type="button" class="btn btn--delete" data-call-modal="action-remove">
                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <g >
                            <path
                                d="M16.5039 4.80078H21.0039V6.60059H19.2041V20.1006C19.2041 20.3392 19.1092 20.5685 18.9404 20.7373C18.7716 20.9061 18.5424 21.001 18.3037 21.001H5.7041C5.46541 21.001 5.23617 20.9061 5.06738 20.7373C4.89866 20.5685 4.80371 20.3392 4.80371 20.1006V6.60059H3.00391V4.80078H7.50391V3.00098H16.5039V4.80078ZM6.60352 19.2012H17.4043V6.60059H6.60352V19.2012ZM11.1035 16.501H9.30371V9.30078H11.1035V16.501ZM14.7041 16.501H12.9043V9.30078H14.7041V16.501Z"
                                fill="#999999" />
                        </g>
                        <defs>
                            <clipPath>
                                <rect width="24" height="24" fill="white" />
                            </clipPath>
                        </defs>
                    </svg>
                </button>
            </div>
            <div class="offer-info__item autosearch-item__address">
                <img src="/images/geo-icon.svg" alt="geo icon">
                <span>Москва, Московская область</span>
            </div>
            <ul class="autosearch-item__filters">
                <li>Наименование и значение фильтра</li>
                <li>Наименование и значение фильтра</li>
                <li>Наименование и значение фильтра</li>
                <li>Наименование и значение фильтра</li>
            </ul>
            <div class="autosearch-item__bottom">
                <a href="<?= $targetUri; ?>" class="btn btn_light btn_size-m btn_has-icon">
                    <span>999 <?= $targetItems; ?></span>
                    <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <g>
                            <path d="M7.38666 4.46985C7.67957 4.17708 8.15436 4.177 8.44721 4.46985L13.4472 9.46985C13.7398 9.76273 13.7399 10.2376 13.4472 10.5304L8.44721 15.5304C8.1544 15.8232 7.67958 15.823 7.38666 15.5304C7.09377 15.2375 7.09377 14.7627 7.38666 14.4699L11.8564 10.0001L7.38666 5.5304C7.09377 5.23751 7.09377 4.76275 7.38666 4.46985Z" fill="#FC7827"></path>
                        </g>
                        <defs>
                            <clipPath>
                                <rect width="20" height="20" fill="white"></rect>
                            </clipPath>
                        </defs>
                    </svg>
                </a>
                <a href="<?= $targetUri; ?>" class="autosearch-item__btn-new transp-btn lk__btn_has-icon icons-block">
                    <span>35 новых <?= $targetItems; ?></span>
                    <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <g>
                            <path d="M7.38666 4.46985C7.67957 4.17708 8.15436 4.177 8.44721 4.46985L13.4472 9.46985C13.7398 9.76273 13.7399 10.2376 13.4472 10.5304L8.44721 15.5304C8.1544 15.8232 7.67958 15.823 7.38666 15.5304C7.09377 15.2375 7.09377 14.7627 7.38666 14.4699L11.8564 10.0001L7.38666 5.5304C7.09377 5.23751 7.09377 4.76275 7.38666 4.46985Z" fill="#5db634"></path>
                        </g>
                        <defs>
                            <clipPath>
                                <rect width="20" height="20" fill="white"></rect>
                            </clipPath>
                        </defs>
                    </svg>
                </a>
            </div>
        </div>
    </div>
    <div class="lk-card offers-list__item autosearch-item">
        <div class="autosearch-item__content">
            <div class="autosearch-item__header">
                <span class="title">Название поискового запроса</span>
                <button type="button" class="btn btn--delete" data-call-modal="action-remove">
                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <g >
                            <path
                                d="M16.5039 4.80078H21.0039V6.60059H19.2041V20.1006C19.2041 20.3392 19.1092 20.5685 18.9404 20.7373C18.7716 20.9061 18.5424 21.001 18.3037 21.001H5.7041C5.46541 21.001 5.23617 20.9061 5.06738 20.7373C4.89866 20.5685 4.80371 20.3392 4.80371 20.1006V6.60059H3.00391V4.80078H7.50391V3.00098H16.5039V4.80078ZM6.60352 19.2012H17.4043V6.60059H6.60352V19.2012ZM11.1035 16.501H9.30371V9.30078H11.1035V16.501ZM14.7041 16.501H12.9043V9.30078H14.7041V16.501Z"
                                fill="#999999" />
                        </g>
                        <defs>
                            <clipPath>
                                <rect width="24" height="24" fill="white" />
                            </clipPath>
                        </defs>
                    </svg>
                </button>
            </div>
            <div class="offer-info__item autosearch-item__address">
                <img src="/images/geo-icon.svg" alt="geo icon">
                <span>Москва, Московская область</span>
            </div>
            <ul class="autosearch-item__filters">
                <li>Наименование и значение фильтра</li>
                <li>Наименование и значение фильтра</li>
                <li>Наименование и значение фильтра</li>
                <li>Наименование и значение фильтра</li>
            </ul>
            <div class="autosearch-item__bottom">
                <a href="<?= $targetUri; ?>" class="btn btn_light btn_size-m btn_has-icon">
                    <span>999 <?= $targetItems; ?></span>
                    <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <g>
                            <path d="M7.38666 4.46985C7.67957 4.17708 8.15436 4.177 8.44721 4.46985L13.4472 9.46985C13.7398 9.76273 13.7399 10.2376 13.4472 10.5304L8.44721 15.5304C8.1544 15.8232 7.67958 15.823 7.38666 15.5304C7.09377 15.2375 7.09377 14.7627 7.38666 14.4699L11.8564 10.0001L7.38666 5.5304C7.09377 5.23751 7.09377 4.76275 7.38666 4.46985Z" fill="#FC7827"></path>
                        </g>
                        <defs>
                            <clipPath>
                                <rect width="20" height="20" fill="white"></rect>
                            </clipPath>
                        </defs>
                    </svg>
                </a>
                <a href="<?= $targetUri; ?>" class="autosearch-item__btn-new transp-btn lk__btn_has-icon icons-block">
                    <span>35 новых <?= $targetItems; ?></span>
                    <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <g>
                            <path d="M7.38666 4.46985C7.67957 4.17708 8.15436 4.177 8.44721 4.46985L13.4472 9.46985C13.7398 9.76273 13.7399 10.2376 13.4472 10.5304L8.44721 15.5304C8.1544 15.8232 7.67958 15.823 7.38666 15.5304C7.09377 15.2375 7.09377 14.7627 7.38666 14.4699L11.8564 10.0001L7.38666 5.5304C7.09377 5.23751 7.09377 4.76275 7.38666 4.46985Z" fill="#5db634"></path>
                        </g>
                        <defs>
                            <clipPath>
                                <rect width="20" height="20" fill="white"></rect>
                            </clipPath>
                        </defs>
                    </svg>
                </a>
            </div>
        </div>
    </div>
    <div class="lk-card offers-list__item autosearch-item">
        <div class="autosearch-item__content">
            <div class="autosearch-item__header">
                <span class="title">Название поискового запроса</span>
                <button type="button" class="btn btn--delete" data-call-modal="action-remove">
                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <g >
                            <path
                                d="M16.5039 4.80078H21.0039V6.60059H19.2041V20.1006C19.2041 20.3392 19.1092 20.5685 18.9404 20.7373C18.7716 20.9061 18.5424 21.001 18.3037 21.001H5.7041C5.46541 21.001 5.23617 20.9061 5.06738 20.7373C4.89866 20.5685 4.80371 20.3392 4.80371 20.1006V6.60059H3.00391V4.80078H7.50391V3.00098H16.5039V4.80078ZM6.60352 19.2012H17.4043V6.60059H6.60352V19.2012ZM11.1035 16.501H9.30371V9.30078H11.1035V16.501ZM14.7041 16.501H12.9043V9.30078H14.7041V16.501Z"
                                fill="#999999" />
                        </g>
                        <defs>
                            <clipPath>
                                <rect width="24" height="24" fill="white" />
                            </clipPath>
                        </defs>
                    </svg>
                </button>
            </div>
            <div class="offer-info__item autosearch-item__address">
                <img src="/images/geo-icon.svg" alt="geo icon">
                <span>Москва, Московская область</span>
            </div>
            <ul class="autosearch-item__filters">
                <li>Наименование и значение фильтра</li>
                <li>Наименование и значение фильтра</li>
                <li>Наименование и значение фильтра</li>
                <li>Наименование и значение фильтра</li>
            </ul>
            <div class="autosearch-item__bottom">
                <a href="<?= $targetUri; ?>" class="btn btn_light btn_size-m btn_has-icon">
                    <span>999 <?= $targetItems; ?></span>
                    <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <g>
                            <path d="M7.38666 4.46985C7.67957 4.17708 8.15436 4.177 8.44721 4.46985L13.4472 9.46985C13.7398 9.76273 13.7399 10.2376 13.4472 10.5304L8.44721 15.5304C8.1544 15.8232 7.67958 15.823 7.38666 15.5304C7.09377 15.2375 7.09377 14.7627 7.38666 14.4699L11.8564 10.0001L7.38666 5.5304C7.09377 5.23751 7.09377 4.76275 7.38666 4.46985Z" fill="#FC7827"></path>
                        </g>
                        <defs>
                            <clipPath>
                                <rect width="20" height="20" fill="white"></rect>
                            </clipPath>
                        </defs>
                    </svg>
                </a>
                <a href="<?= $targetUri; ?>" class="autosearch-item__btn-new transp-btn lk__btn_has-icon icons-block">
                    <span>35 новых <?= $targetItems; ?></span>
                    <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <g>
                            <path d="M7.38666 4.46985C7.67957 4.17708 8.15436 4.177 8.44721 4.46985L13.4472 9.46985C13.7398 9.76273 13.7399 10.2376 13.4472 10.5304L8.44721 15.5304C8.1544 15.8232 7.67958 15.823 7.38666 15.5304C7.09377 15.2375 7.09377 14.7627 7.38666 14.4699L11.8564 10.0001L7.38666 5.5304C7.09377 5.23751 7.09377 4.76275 7.38666 4.46985Z" fill="#5db634"></path>
                        </g>
                        <defs>
                            <clipPath>
                                <rect width="20" height="20" fill="white"></rect>
                            </clipPath>
                        </defs>
                    </svg>
                </a>
            </div>
        </div>
    </div>
</div>