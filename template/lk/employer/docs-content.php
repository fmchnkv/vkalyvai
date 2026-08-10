<div class="docs__section lk__content detail__section">
    <h1 class="docs__title page-title lk__page-title">Мои документы</h1>
    <div class="grid-bubbles grid-list docs-bubbles">
        <? for ($i = 0; $i < 5; $i++) : ?>
            <div class="lk-bubble tight-bubble with-icon gray-bubble" data-doc="/pravki_04_08.docx">
                <div class="lk-bubble__content">
                    <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" viewBox="0 0 32 32" fill="none">
                        <path
                            d="M25.6026 4.00098C26.2647 4.00124 26.8047 4.54716 26.8047 5.19141V26.8105C26.8044 27.1263 26.6785 27.4291 26.4551 27.6523C26.2318 27.8755 25.929 28.0009 25.6133 28.001H6.39651C6.23892 27.9999 6.0827 27.9676 5.93753 27.9062C5.79237 27.8449 5.66047 27.7558 5.54983 27.6436C5.43937 27.5315 5.35226 27.3987 5.29299 27.2529C5.23376 27.107 5.20307 26.9504 5.20413 26.793V11.2012L12.4082 4.00098H25.6026ZM13.6045 12.4014H7.60452V25.6006H24.4043V6.40137H13.6045V12.4014Z"
                            fill="#FC7827" />
                    </svg>
                    <div class="lk-bubble__text-wrapper">
                        <a href="javascript:void(0)" >Название документа.word</a>
                    </div>
                </div>
                <div class="lk-bubble__buttons-wrapper">
                    <a href="/pravki_04_08.docx" download="download" class="btn--download btn">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                            <g>
                                <path
                                    d="M20.1045 20.1006H3.9043V18.3008H20.1045V20.1006ZM12.9043 13.0557L18.3682 7.59082L19.6406 8.86328L12.0039 16.501L4.36816 8.86426L5.64062 7.59082L11.1045 13.0537V3.00098H12.9043V13.0557Z"
                                    fill="#999999" />
                            </g>
                            <defs>
                                <clipPath>
                                    <rect width="24" height="24" fill="white" />
                                </clipPath>
                            </defs>
                        </svg>
                    </a>
                    <button class="btn btn--delete js-delete-btn" data-call-modal="action-remove">
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
            </div>
        <? endfor; ?>
    </div>
    <button class="btn btn_light btn_size-l lk__btn_has-icon" data-call-modal="add-document">
        <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
            <g clip-path="url(#clip0_7454_35306)">
            <path d="M10.7529 9.25098H15.2529V10.751H10.7529V15.251H9.25293V10.751H4.75293V9.25098H9.25293V4.75098H10.7529V9.25098Z" fill="#FC7827"/>
            </g>
            <defs>
            <clipPath>
            <rect width="20" height="20" fill="white"/>
            </clipPath>
            </defs>
        </svg>
        <span>Добавить документ</span>
    </button>
</div>
