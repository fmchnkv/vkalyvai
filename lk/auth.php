<? require($_SERVER["DOCUMENT_ROOT"] . "/template/header_auth.php"); ?>

<section class="auth-section">
    <div class="container">
        <div class="auth-section__inner">
            <a href="/" class="auth-section__back">
                <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <g clip-path="url(#clip0_5125_41776)">
                        <path d="M13.9736 5.47071C14.2665 5.17781 14.7413 5.17781 15.0342 5.47071C15.3271 5.7636 15.3271 6.23836 15.0342 6.53125L9.56446 12.001L15.0342 17.4707C15.3271 17.7636 15.3271 18.2384 15.0342 18.5313C14.7413 18.8241 14.2665 18.8241 13.9736 18.5313L7.97364 12.5313C7.68074 12.2384 7.68074 11.7636 7.97364 11.4707L13.9736 5.47071Z" fill="#999999" />
                    </g>
                    <defs>
                        <clipPath id="clip0_5125_41776">
                            <rect width="24" height="24" fill="white" />
                        </clipPath>
                    </defs>
                </svg>
            </a>
            <div class="auth-section__header">
                <a href="/" class="auth-section__logo">
                    <svg width="50" height="50" viewBox="0 0 50 50" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <rect width="50" height="50" rx="25" fill="#FC7827" />
                        <path d="M16 36V14H25.9615C28.4651 14 30.4171 14.4924 31.8174 15.4771C33.2178 16.441 33.9179 17.8343 33.9179 19.6571C33.9179 21.459 33.2496 22.8524 31.9129 23.8371C30.5762 24.801 28.8152 25.2829 26.6298 25.2829L27.2027 24.1514C29.6851 24.1514 31.6052 24.6438 32.9632 25.6286C34.3211 26.6133 35 28.0381 35 29.9029C35 31.8095 34.2892 33.3076 32.8677 34.3971C31.4461 35.4657 29.3456 36 26.5662 36H16ZM20.0737 32.8571H26.4389C27.8816 32.8571 28.9743 32.5952 29.7169 32.0714C30.4595 31.5267 30.8308 30.699 30.8308 29.5886C30.8308 28.4781 30.4595 27.6714 29.7169 27.1686C28.9743 26.6448 27.8816 26.3829 26.4389 26.3829H20.0737V32.8571ZM20.0737 23.3971H25.6114C26.9481 23.3971 27.9665 23.1352 28.6667 22.6114C29.3668 22.0667 29.7169 21.2914 29.7169 20.2857C29.7169 19.2381 29.3668 18.4524 28.6667 17.9286C27.9665 17.4048 26.9481 17.1429 25.6114 17.1429H20.0737V23.3971Z" fill="white" />
                    </svg>
                    <span>калывай</span>
                </a>
            </div>

            <div class="auth-section__container" id="auth-container">
                <? include $_SERVER["DOCUMENT_ROOT"] . '/include/auth-first.php'; ?>
            </div>

            <div class="auth-section__footer">
                <p class="auth-section__copyright">2026 © Все права защищены.</p>
            </div>
        </div>
    </div>
</section>

<? require($_SERVER["DOCUMENT_ROOT"] . "/template/footer_auth.php"); ?>