<?php
$uri = $_SERVER['REQUEST_URI'];
$isResumeDeals = str_contains($uri, 'job_seeker');
$dealsDetailUrl = $isResumeDeals ? '/pages/rezume.php' : '/pages/vacancy.php';
$revisionTooltipText = $isResumeDeals
    ? 'Резюме не прошло модерацию. Пожалуйста, отредактируйте текст и отправьте снова.'
    : 'Вакансия не прошла модерацию. Пожалуйста, отредактируйте текст и отправьте снова.';
$blockedTooltipText = $isResumeDeals
    ? 'Доступ к резюме ограничен из-за нарушения правил платформы.'
    : 'Доступ к вакансии ограничен из-за нарушения правил платформы.';
?>
<div class="deals-list grid-list">
    <div class="deals-item lk-card ">
        <div class="deals-item__header card-header">
            <div class="deals-item__status-wrapper state-wrapper">
                <span class="deals-item__status state publish">Опубликовано</span>
            </div>
            <?php if(!str_contains($uri, 'moderator')): ?>
            <div class="buttons-wrapper">
                <button class="deals-item__button deals-item__button--edit">
                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <g>
                            <path
                                d="M20.1035 21.001H3.9043V19.2012H20.1035V21.001ZM14.832 3.02734C15.0706 3.02743 15.2991 3.12237 15.4678 3.29102L18.0137 5.83691C18.1824 6.00569 18.2773 6.23499 18.2773 6.47363C18.2772 6.71212 18.1823 6.94071 18.0137 7.10938L7.72266 17.4014H3.9043V13.582L14.1953 3.29102C14.3641 3.12229 14.5934 3.02734 14.832 3.02734ZM5.7041 14.3281V15.6006H6.97656L16.1045 6.47363L14.832 5.2002L5.7041 14.3281Z"
                                fill="#C2C2C2" />
                        </g>
                        <defs>
                            <clipPath>
                                <rect width="24" height="24" fill="white" />
                            </clipPath>
                        </defs>
                    </svg>
                </button>
                <button class="deals-item__button deals-item__button--delete">
                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <g>
                            <path
                                d="M16.5039 4.80078H21.0039V6.60059H19.2041V20.1006C19.2041 20.3392 19.1092 20.5685 18.9404 20.7373C18.7716 20.9061 18.5424 21.001 18.3037 21.001H5.7041C5.46541 21.001 5.23617 20.9061 5.06738 20.7373C4.89866 20.5685 4.80371 20.3392 4.80371 20.1006V6.60059H3.00391V4.80078H7.50391V3.00098H16.5039V4.80078ZM6.60352 19.2012H17.4043V6.60059H6.60352V19.2012ZM11.1035 16.501H9.30371V9.30078H11.1035V16.501ZM14.7041 16.501H12.9043V9.30078H14.7041V16.501Z"
                                fill="#C2C2C2" />
                        </g>
                        <defs>
                            <clipPath>
                                <rect width="24" height="24" fill="white" />
                            </clipPath>
                        </defs>
                    </svg>
                </button>
            </div>
            <?php endif; ?>
        </div>
        <div class="deals-item__body">
            <div class="deals__title-block">
                <span>Полная занятость</span>
                <a href="<?= $dealsDetailUrl ?>">Начальник отдела</a>
                <ul class="tags">
                    <li>100 000 ₽</li>
                    <li>Полный рабочий день</li>
                    <li>Удаленно</li>
                </ul>
            </div>
            <?php if(!str_contains($uri, 'moderator')): ?>
            <div class="deals__info-block">
                <div class="deals__item">
                    <span>Просмотры</span>
                    <p>123</p>
                </div>
                <div class="deals__item">
                    <span>Приглашения</span>
                    <p><a href="https://vkalivay-new.blueberry-digital.ru/lk/<?= $isResumeDeals ? 'job_seeker' : 'employer'; ?>/responces.php" class="link link_underline">64</a></p>
                </div>
            </div>
            <?php endif; ?>
        </div>
    </div>
    <div class="deals-item lk-card ">
        <div class="deals-item__header card-header">
            <div class="deals-item__status-wrapper state-wrapper">
                <span class="deals-item__status state working">На доработке</span>
                <button type="button" class="deals-item__status-help" data-moderation-tooltip
                    aria-label="Пояснение к статусу «На доработке»">
                    <svg xmlns="http://www.w3.org/2000/svg" width="15" height="15" viewBox="0 0 24 24"><title>circle-question</title><path fill="none" stroke="#999999" stroke-width="2" d="M12 22c5.523 0 10-4.477 10-10S17.523 2 12 2S2 6.477 2 12s4.477 10 10 10Zm0-7v-1c0-1 0-1.5 1-2s2-1 2-2.5c0-1-1-2.5-3-2.5s-3 1.264-3 3m3 6v2"/></svg>
                </button>
                <template class="moderation-tooltip__template">
                    <div class="moderation-tooltip"><?= $revisionTooltipText ?></div>
                </template>
            </div>
            <?php if(!str_contains($uri, 'moderator')): ?>
            <div class="buttons-wrapper">
                <button class="deals-item__button deals-item__button--edit">
                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <g>
                            <path
                                d="M20.1035 21.001H3.9043V19.2012H20.1035V21.001ZM14.832 3.02734C15.0706 3.02743 15.2991 3.12237 15.4678 3.29102L18.0137 5.83691C18.1824 6.00569 18.2773 6.23499 18.2773 6.47363C18.2772 6.71212 18.1823 6.94071 18.0137 7.10938L7.72266 17.4014H3.9043V13.582L14.1953 3.29102C14.3641 3.12229 14.5934 3.02734 14.832 3.02734ZM5.7041 14.3281V15.6006H6.97656L16.1045 6.47363L14.832 5.2002L5.7041 14.3281Z"
                                fill="#C2C2C2" />
                        </g>
                        <defs>
                            <clipPath>
                                <rect width="24" height="24" fill="white" />
                            </clipPath>
                        </defs>
                    </svg>
                </button>
                <button class="deals-item__button deals-item__button--delete">
                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <g>
                            <path
                                d="M16.5039 4.80078H21.0039V6.60059H19.2041V20.1006C19.2041 20.3392 19.1092 20.5685 18.9404 20.7373C18.7716 20.9061 18.5424 21.001 18.3037 21.001H5.7041C5.46541 21.001 5.23617 20.9061 5.06738 20.7373C4.89866 20.5685 4.80371 20.3392 4.80371 20.1006V6.60059H3.00391V4.80078H7.50391V3.00098H16.5039V4.80078ZM6.60352 19.2012H17.4043V6.60059H6.60352V19.2012ZM11.1035 16.501H9.30371V9.30078H11.1035V16.501ZM14.7041 16.501H12.9043V9.30078H14.7041V16.501Z"
                                fill="#C2C2C2" />
                        </g>
                        <defs>
                            <clipPath>
                                <rect width="24" height="24" fill="white" />
                            </clipPath>
                        </defs>
                    </svg>
                </button>
            </div>
            <?php endif; ?>
        </div>
        <div class="deals-item__body">
            <div class="deals__title-block">
                <span>Полная занятость</span>
                <a href="<?= $dealsDetailUrl ?>">Начальник отдела</a>
                <ul class="tags">
                    <li>100 000 ₽</li>
                    <li>Полный рабочий день</li>
                    <li>Удаленно</li>
                </ul>
            </div>
            <?php if(!str_contains($uri, 'moderator')): ?>
            <div class="deals__info-block">
                <div class="deals__item">
                    <span>Просмотры</span>
                    <p>-</p>
                </div>
                <div class="deals__item">
                    <span>Приглашения</span>
                    <p>-</p>
                </div>
            </div>
            <?php endif; ?>
        </div>
    </div>
    <div class="deals-item lk-card ">
        <div class="deals-item__header card-header">
            <div class="deals-item__status-wrapper state-wrapper">
                <span class="deals-item__status state blocked">Заблокировано</span>
                <button type="button" class="deals-item__status-help" data-moderation-tooltip
                    aria-label="Пояснение к статусу «Заблокировано»">
                    <svg xmlns="http://www.w3.org/2000/svg" width="15" height="15" viewBox="0 0 24 24"><title>circle-question</title><path fill="none" stroke="#999999" stroke-width="2" d="M12 22c5.523 0 10-4.477 10-10S17.523 2 12 2S2 6.477 2 12s4.477 10 10 10Zm0-7v-1c0-1 0-1.5 1-2s2-1 2-2.5c0-1-1-2.5-3-2.5s-3 1.264-3 3m3 6v2"/></svg>
                </button>
                <template class="moderation-tooltip__template">
                    <div class="moderation-tooltip">
                        <?= $blockedTooltipText ?>
                        <a href="/pages/legal.php">Правила сайта</a>
                        <span aria-hidden="true"> / </span>
                        <a href="/pages/help.php">Написать в поддержку</a>
                    </div>
                </template>
            </div>
            <?php if(!str_contains($uri, 'moderator')): ?>
            <div class="buttons-wrapper">
                <button class="deals-item__button deals-item__button--edit">
                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <g>
                            <path
                                d="M20.1035 21.001H3.9043V19.2012H20.1035V21.001ZM14.832 3.02734C15.0706 3.02743 15.2991 3.12237 15.4678 3.29102L18.0137 5.83691C18.1824 6.00569 18.2773 6.23499 18.2773 6.47363C18.2772 6.71212 18.1823 6.94071 18.0137 7.10938L7.72266 17.4014H3.9043V13.582L14.1953 3.29102C14.3641 3.12229 14.5934 3.02734 14.832 3.02734ZM5.7041 14.3281V15.6006H6.97656L16.1045 6.47363L14.832 5.2002L5.7041 14.3281Z"
                                fill="#C2C2C2" />
                        </g>
                        <defs>
                            <clipPath>
                                <rect width="24" height="24" fill="white" />
                            </clipPath>
                        </defs>
                    </svg>
                </button>
                <button class="deals-item__button deals-item__button--delete">
                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <g>
                            <path
                                d="M16.5039 4.80078H21.0039V6.60059H19.2041V20.1006C19.2041 20.3392 19.1092 20.5685 18.9404 20.7373C18.7716 20.9061 18.5424 21.001 18.3037 21.001H5.7041C5.46541 21.001 5.23617 20.9061 5.06738 20.7373C4.89866 20.5685 4.80371 20.3392 4.80371 20.1006V6.60059H3.00391V4.80078H7.50391V3.00098H16.5039V4.80078ZM6.60352 19.2012H17.4043V6.60059H6.60352V19.2012ZM11.1035 16.501H9.30371V9.30078H11.1035V16.501ZM14.7041 16.501H12.9043V9.30078H14.7041V16.501Z"
                                fill="#C2C2C2" />
                        </g>
                        <defs>
                            <clipPath>
                                <rect width="24" height="24" fill="white" />
                            </clipPath>
                        </defs>
                    </svg>
                </button>
            </div>
            <?php endif; ?>
        </div>
        <div class="deals-item__body">
            <div class="deals__title-block">
                <span>Полная занятость</span>
                <a href="<?= $dealsDetailUrl ?>">Начальник отдела</a>
                <ul class="tags">
                    <li>100 000 ₽</li>
                    <li>Полный рабочий день</li>
                    <li>Удаленно</li>
                </ul>
            </div>
            <?php if(!str_contains($uri, 'moderator')): ?>
            <div class="deals__info-block">
                <div class="deals__item">
                    <span>Просмотры</span>
                    <p>-</p>
                </div>
                <div class="deals__item">
                    <span>Приглашения</span>
                    <p>-</p>
                </div>
            </div>
            <?php endif; ?>
        </div>
    </div>
    <div class="deals-item lk-card ">
        <div class="deals-item__header card-header">
            <div class="deals-item__status-wrapper state-wrapper">
                <span class="deals-item__status state neutral">На модерации</span>
            </div>
            <?php if(!str_contains($uri, 'moderator')): ?>
            <div class="buttons-wrapper">
                <button class="deals-item__button deals-item__button--edit">
                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <g>
                            <path
                                d="M20.1035 21.001H3.9043V19.2012H20.1035V21.001ZM14.832 3.02734C15.0706 3.02743 15.2991 3.12237 15.4678 3.29102L18.0137 5.83691C18.1824 6.00569 18.2773 6.23499 18.2773 6.47363C18.2772 6.71212 18.1823 6.94071 18.0137 7.10938L7.72266 17.4014H3.9043V13.582L14.1953 3.29102C14.3641 3.12229 14.5934 3.02734 14.832 3.02734ZM5.7041 14.3281V15.6006H6.97656L16.1045 6.47363L14.832 5.2002L5.7041 14.3281Z"
                                fill="#C2C2C2" />
                        </g>
                        <defs>
                            <clipPath>
                                <rect width="24" height="24" fill="white" />
                            </clipPath>
                        </defs>
                    </svg>
                </button>
                <button class="deals-item__button deals-item__button--delete">
                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <g>
                            <path
                                d="M16.5039 4.80078H21.0039V6.60059H19.2041V20.1006C19.2041 20.3392 19.1092 20.5685 18.9404 20.7373C18.7716 20.9061 18.5424 21.001 18.3037 21.001H5.7041C5.46541 21.001 5.23617 20.9061 5.06738 20.7373C4.89866 20.5685 4.80371 20.3392 4.80371 20.1006V6.60059H3.00391V4.80078H7.50391V3.00098H16.5039V4.80078ZM6.60352 19.2012H17.4043V6.60059H6.60352V19.2012ZM11.1035 16.501H9.30371V9.30078H11.1035V16.501ZM14.7041 16.501H12.9043V9.30078H14.7041V16.501Z"
                                fill="#C2C2C2" />
                        </g>
                        <defs>
                            <clipPath>
                                <rect width="24" height="24" fill="white" />
                            </clipPath>
                        </defs>
                    </svg>
                </button>
            </div>
            <?php endif; ?>
        </div>
        <div class="deals-item__body">
            <div class="deals__title-block">
                <span>Полная занятость</span>
                <a href="<?= $dealsDetailUrl ?>">Начальник отдела</a>
                <ul class="tags">
                    <li>100 000 ₽</li>
                    <li>Полный рабочий день</li>
                    <li>Удаленно</li>
                </ul>
            </div>
            <?php if(!str_contains($uri, 'moderator')): ?>
            <div class="deals__info-block">
                <div class="deals__item">
                    <span>Просмотры</span>
                    <p>-</p>
                </div>
                <div class="deals__item">
                    <span>Приглашения</span>
                    <p>-</p>
                </div>
            </div>
            <?php endif; ?>
        </div>
    </div>
    <div class="deals-item lk-card ">
        <div class="deals-item__header card-header">
            <div class="deals-item__status-wrapper state-wrapper">
                <span class="deals-item__status state publish">Опубликовано</span>
            </div>
            <?php if(!str_contains($uri, 'moderator')): ?>
            <div class="buttons-wrapper">
                <button class="deals-item__button deals-item__button--edit">
                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <g>
                            <path
                                d="M20.1035 21.001H3.9043V19.2012H20.1035V21.001ZM14.832 3.02734C15.0706 3.02743 15.2991 3.12237 15.4678 3.29102L18.0137 5.83691C18.1824 6.00569 18.2773 6.23499 18.2773 6.47363C18.2772 6.71212 18.1823 6.94071 18.0137 7.10938L7.72266 17.4014H3.9043V13.582L14.1953 3.29102C14.3641 3.12229 14.5934 3.02734 14.832 3.02734ZM5.7041 14.3281V15.6006H6.97656L16.1045 6.47363L14.832 5.2002L5.7041 14.3281Z"
                                fill="#C2C2C2" />
                        </g>
                        <defs>
                            <clipPath>
                                <rect width="24" height="24" fill="white" />
                            </clipPath>
                        </defs>
                    </svg>
                </button>
                <button class="deals-item__button deals-item__button--delete">
                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <g>
                            <path
                                d="M16.5039 4.80078H21.0039V6.60059H19.2041V20.1006C19.2041 20.3392 19.1092 20.5685 18.9404 20.7373C18.7716 20.9061 18.5424 21.001 18.3037 21.001H5.7041C5.46541 21.001 5.23617 20.9061 5.06738 20.7373C4.89866 20.5685 4.80371 20.3392 4.80371 20.1006V6.60059H3.00391V4.80078H7.50391V3.00098H16.5039V4.80078ZM6.60352 19.2012H17.4043V6.60059H6.60352V19.2012ZM11.1035 16.501H9.30371V9.30078H11.1035V16.501ZM14.7041 16.501H12.9043V9.30078H14.7041V16.501Z"
                                fill="#C2C2C2" />
                        </g>
                        <defs>
                            <clipPath>
                                <rect width="24" height="24" fill="white" />
                            </clipPath>
                        </defs>
                    </svg>
                </button>
            </div>
            <?php endif; ?>
        </div>
        <div class="deals-item__body">
            <div class="deals__title-block">
                <span>Полная занятость</span>
                <a href="<?= $dealsDetailUrl ?>">Начальник отдела</a>
                <ul class="tags">
                    <li>100 000 ₽</li>
                    <li>Полный рабочий день</li>
                    <li>Удаленно</li>
                </ul>
            </div>
            <?php if(!str_contains($uri, 'moderator')): ?>
            <div class="deals__info-block">
                <div class="deals__item">
                    <span>Просмотры</span>
                    <p>123</p>
                </div>
                <div class="deals__item">
                    <span>Приглашения</span>
                    <p>64</p>
                </div>
            </div>
            <?php endif; ?>
        </div>
    </div>
    <div class="deals-item lk-card ">
        <div class="deals-item__header card-header">
            <div class="deals-item__status-wrapper state-wrapper">
                <span class="deals-item__status state working">На доработке</span>
                <button type="button" class="deals-item__status-help" data-moderation-tooltip
                    aria-label="Пояснение к статусу «На доработке»">
                    <svg xmlns="http://www.w3.org/2000/svg" width="15" height="15" viewBox="0 0 24 24"><title>circle-question</title><path fill="none" stroke="#999999" stroke-width="2" d="M12 22c5.523 0 10-4.477 10-10S17.523 2 12 2S2 6.477 2 12s4.477 10 10 10Zm0-7v-1c0-1 0-1.5 1-2s2-1 2-2.5c0-1-1-2.5-3-2.5s-3 1.264-3 3m3 6v2"/></svg>
                </button>
                <template class="moderation-tooltip__template">
                    <div class="moderation-tooltip"><?= $revisionTooltipText ?></div>
                </template>
            </div>
            <?php if(!str_contains($uri, 'moderator')): ?>
            <div class="buttons-wrapper">
                <button class="deals-item__button deals-item__button--edit">
                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <g>
                            <path
                                d="M20.1035 21.001H3.9043V19.2012H20.1035V21.001ZM14.832 3.02734C15.0706 3.02743 15.2991 3.12237 15.4678 3.29102L18.0137 5.83691C18.1824 6.00569 18.2773 6.23499 18.2773 6.47363C18.2772 6.71212 18.1823 6.94071 18.0137 7.10938L7.72266 17.4014H3.9043V13.582L14.1953 3.29102C14.3641 3.12229 14.5934 3.02734 14.832 3.02734ZM5.7041 14.3281V15.6006H6.97656L16.1045 6.47363L14.832 5.2002L5.7041 14.3281Z"
                                fill="#C2C2C2" />
                        </g>
                        <defs>
                            <clipPath>
                                <rect width="24" height="24" fill="white" />
                            </clipPath>
                        </defs>
                    </svg>
                </button>
                <button class="deals-item__button deals-item__button--delete">
                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <g>
                            <path
                                d="M16.5039 4.80078H21.0039V6.60059H19.2041V20.1006C19.2041 20.3392 19.1092 20.5685 18.9404 20.7373C18.7716 20.9061 18.5424 21.001 18.3037 21.001H5.7041C5.46541 21.001 5.23617 20.9061 5.06738 20.7373C4.89866 20.5685 4.80371 20.3392 4.80371 20.1006V6.60059H3.00391V4.80078H7.50391V3.00098H16.5039V4.80078ZM6.60352 19.2012H17.4043V6.60059H6.60352V19.2012ZM11.1035 16.501H9.30371V9.30078H11.1035V16.501ZM14.7041 16.501H12.9043V9.30078H14.7041V16.501Z"
                                fill="#C2C2C2" />
                        </g>
                        <defs>
                            <clipPath>
                                <rect width="24" height="24" fill="white" />
                            </clipPath>
                        </defs>
                    </svg>
                </button>
            </div>
            <?php endif; ?>
        </div>
        <div class="deals-item__body">
            <div class="deals__title-block">
                <span>Полная занятость</span>
                <a href="<?= $dealsDetailUrl ?>">Начальник отдела</a>
                <ul class="tags">
                    <li>100 000 ₽</li>
                    <li>Полный рабочий день</li>
                    <li>Удаленно</li>
                </ul>
            </div>
            <?php if(!str_contains($uri, 'moderator')): ?>
            <div class="deals__info-block">
                <div class="deals__item">
                    <span>Просмотры</span>
                    <p>-</p>
                </div>
                <div class="deals__item">
                    <span>Приглашения</span>
                    <p>-</p>
                </div>
            </div>
            <?php endif; ?>
        </div>
    </div>
</div>
