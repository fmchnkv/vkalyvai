<div class="chats__dialog-top user-online">
    <div class="user-info">
        <button class="chats__dialog-back transp-btn lk__btn_has-icon" type="button">
            <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                <g>
                <path d="M11.9775 3.47162C12.2704 3.17873 12.7451 3.17873 13.038 3.47162C13.3309 3.76452 13.3309 4.2393 13.038 4.53217L7.5683 10.0019L13.038 15.4716C13.3309 15.7645 13.3309 16.2393 13.038 16.5322C12.7452 16.825 12.2704 16.825 11.9775 16.5322L5.97748 10.5322C5.68459 10.2393 5.68459 9.76452 5.97748 9.47162L11.9775 3.47162Z" fill="#232323"/>
                </g>
                <defs>
                <clipPath id="clip0_8003_39">
                <rect width="24" height="24" fill="white" transform="translate(-2 -2)"/>
                </clipPath>
                </defs>
            </svg>
        </button>
        <div class="avatar">
            <img src="/images/avatar_rezume.png" alt="">
        </div>
        <div class="title">
            <h3>Иванов Иван Иванович</h3>
            <p>Сейчас онлайн</p>
        </div>
    </div>
    <div class="dialog-btns">
        <? if($whoIs == 'employer'): ?>
            <div class="buttons-wrapper">
                <button data-dialog-modal="job-seeker_invite" class="accept__btn btn btn_light btn_size-m lk__btn_has-icon">
                    <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <g>
                            <path fill-rule="evenodd" clip-rule="evenodd" d="M10.7529 9.25098H15.2529V10.751H10.7529V15.251H9.25293V10.751H4.75293V9.25098H9.25293V4.75098H10.7529V9.25098Z" fill="#5DB634"></path>
                        </g>
                        <defs>
                            <clipPath id="clip0_7407_21646">
                                <rect width="20" height="20" fill="white"></rect>
                            </clipPath>
                        </defs>
                    </svg>
                    <span class="desk-elem tab-elem">Пригласить</span>
                </button>
                <button data-dialog-modal="job-seeker_invite" class="accept__btn btn btn_light btn_size-m lk__btn_has-icon">
                    <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M14.7773 6.28845L11.0654 10.0013L14.7773 13.7133L13.7168 14.7738L10.0049 11.0619L6.29199 14.7738L5.23145 13.7133L8.94434 10.0013L5.23145 6.28845L6.29199 5.22791L10.0049 8.9408L13.7168 5.22791L14.7773 6.28845Z" fill="#F14C4C"></path>
                    </svg>
                    <span class="desk-elem tab-elem">Отказать</span>
                </button>
            </div>
        <? else: ?>
            <a href="javascript:void(0)" class="show-all-btn transp-btn lk__btn_has-icon icons-block">
                <span>Подробнее</span>
                <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <g>
                        <path d="M7.38666 4.46985C7.67957 4.17708 8.15436 4.177 8.44721 4.46985L13.4472 9.46985C13.7398 9.76273 13.7399 10.2376 13.4472 10.5304L8.44721 15.5304C8.1544 15.8232 7.67958 15.823 7.38666 15.5304C7.09377 15.2375 7.09377 14.7627 7.38666 14.4699L11.8564 10.0001L7.38666 5.5304C7.09377 5.23751 7.09377 4.76275 7.38666 4.46985Z" fill="#FC7827"></path>
                    </g>
                    <defs>
                        <clipPath id="clip0_7142_9460">
                            <rect width="20" height="20" fill="white"></rect>
                        </clipPath>
                    </defs>
                </svg>
            </a>
        <? endif; ?>
    </div>
</div>

<? if($whoIs !== 'moderator'): ?>
    <div class="chats__dialog-vacancy">
        <div class="vacancy-info">
            <span>Вакансия</span>
            <h5>Название вакансии</h5>
        </div>
        <a href="javascript:void(0)" class="show-all-btn transp-btn lk__btn_has-icon icons-block">
            <span>Перейти</span>
            <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                <g>
                    <path d="M7.38666 4.46985C7.67957 4.17708 8.15436 4.177 8.44721 4.46985L13.4472 9.46985C13.7398 9.76273 13.7399 10.2376 13.4472 10.5304L8.44721 15.5304C8.1544 15.8232 7.67958 15.823 7.38666 15.5304C7.09377 15.2375 7.09377 14.7627 7.38666 14.4699L11.8564 10.0001L7.38666 5.5304C7.09377 5.23751 7.09377 4.76275 7.38666 4.46985Z" fill="#FC7827"></path>
                </g>
                <defs>
                    <clipPath id="clip0_7142_9460">
                        <rect width="20" height="20" fill="white"></rect>
                    </clipPath>
                </defs>
            </svg>
        </a>
    </div>
<? endif; ?>
