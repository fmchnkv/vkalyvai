<? require($_SERVER["DOCUMENT_ROOT"] . "/template/header.php"); ?>

<div class="breadcrumbs">
	<div class="container">
		<ul class="breadcrumbs__list">
			<li class="breadcrumbs__item breadcrumbs__item_home">
				<a href="/" class="breadcrumbs__item link">Главная</a>
				<span>/</span>
			</li>
			<li class="breadcrumbs__item">
				<span class="breadcrumbs__item current">Каталог резюме</span>
			</li>
		</ul>
	</div>
</div>

<div class="catalog-nav">
	<div class="container">
		<div class="catalog-nav__inner">
			<div class="catalog-nav__actions">
				<button class="catalog-nav__nav-btn btn btn_outline btn_size-s btn_has-icon">
					<span>Вакансии</span>
					<svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
						<g clip-path="url(#clip0_4580_8105)">
							<path d="M10.0048 2.58398C10.4188 2.58416 10.7547 2.92003 10.7548 3.33398V14.8564L15.3085 10.3037C15.6015 10.0113 16.0764 10.011 16.3691 10.3037C16.6617 10.5965 16.6614 11.0714 16.3691 11.3643L10.5351 17.1973C10.2422 17.4902 9.76745 17.4902 9.47455 17.1973L3.64154 11.3643C3.34865 11.0714 3.34865 10.5966 3.64154 10.3037C3.93446 10.0111 4.40931 10.0109 4.70209 10.3037L9.25483 14.8564V3.33398C9.255 2.92003 9.59087 2.58416 10.0048 2.58398Z" fill="#FC7827" />
						</g>
						<defs>
							<clipPath id="clip0_4580_8105">
								<rect width="20" height="20" fill="white" />
							</clipPath>
						</defs>
					</svg>
				</button>

				<ul class="catalog-nav__tabs tabs">
					<li class="tabs__item">
						<a href="/pages/vacancies.php" class="tabs__link tab">Вакансии</a>
					</li>
					<li class="tabs__item">
						<a href="/pages/resumes.php" class="tabs__link tab active">Резюме</a>
					</li>
					<li class="tabs__item">
						<a href="/pages/companies.php" class="tabs__link tab">Компании</a>
					</li>
				</ul>

				<button class="catalog-nav__filter-btn btn btn_secondary btn_icon js-filter-btn">
					<svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
						<g clip-path="url(#clip0_4580_14319)">
							<path d="M5.50391 16.376H3.25391V14.126H5.50391V16.376ZM16.7539 16.001H7.00391V14.501H16.7539V16.001ZM5.50391 11.126H3.25391V8.87598H5.50391V11.126ZM16.7539 10.751H7.00391V9.25098H16.7539V10.751ZM5.50391 5.87598H3.25391V3.62598H5.50391V5.87598ZM16.7539 5.50098H7.00391V4.00098H16.7539V5.50098Z" fill="white" />
						</g>
						<defs>
							<clipPath id="clip0_4580_14319">
								<rect width="20" height="20" fill="white" />
							</clipPath>
						</defs>
					</svg>
				</button>
			</div>

			<form class="catalog-nav__form inline-form">
				<div class="inline-form__row">
					<div class="inline-form__input-wrapper">
						<label class="inline-form__label field">
							<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
								<g clip-path="url(#clip0_4466_3472)">
									<path d="M11.1035 3.00098C15.5746 3.00098 19.2039 6.62957 19.2041 11.1006C19.2067 12.9384 18.5811 14.7223 17.4316 16.1562L21.2861 20.0098L20.0127 21.2832L16.1592 17.4287C14.7252 18.5782 12.9413 19.2038 11.1035 19.2012C6.6325 19.201 3.00391 15.5717 3.00391 11.1006C3.00412 6.6297 6.63263 3.00119 11.1035 3.00098ZM11.1035 4.80078C7.62263 4.80099 4.80392 7.6197 4.80371 11.1006C4.80371 14.5808 7.6225 17.4012 11.1035 17.4014C12.7419 17.4039 14.3166 16.7652 15.4912 15.623L15.626 15.4883C16.7682 14.3137 17.4069 12.739 17.4043 11.1006C17.4041 7.61957 14.5837 4.80078 11.1035 4.80078Z" fill="#FC7827" />
								</g>
								<defs>
									<clipPath id="clip0_4466_3472">
										<rect width="24" height="24" fill="white" />
									</clipPath>
								</defs>
							</svg>
							<input class="field__input" type="text" name="search" placeholder="Поиск по резюме и навыкам">
						</label>
					</div>
				</div>
				<button class="inline-form__btn btn btn_primary">
					<span>Найти вакансии</span>
					<svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
						<g clip-path="url(#clip0_4499_426)">
							<path d="M9.25391 2.50098C12.9799 2.50098 16.0039 5.52498 16.0039 9.25098C16.0061 10.7825 15.4853 12.2689 14.5273 13.4639L17.7393 16.6748L16.6777 17.7363L13.4668 14.5244C12.2719 15.4823 10.7854 16.0032 9.25391 16.001C5.52791 16.001 2.50391 12.977 2.50391 9.25098C2.50391 5.52498 5.52791 2.50098 9.25391 2.50098ZM9.25391 4.00098C6.35291 4.00098 4.00391 6.34998 4.00391 9.25098C4.00391 12.1512 6.35291 14.501 9.25391 14.501C10.6192 14.5031 11.9313 13.9714 12.9102 13.0195L13.0225 12.9072C13.9743 11.9284 14.5061 10.6163 14.5039 9.25098C14.5039 6.34998 12.1542 4.00098 9.25391 4.00098Z" fill="white" />
						</g>
						<defs>
							<clipPath id="clip0_4499_426">
								<rect width="20" height="20" fill="white" />
							</clipPath>
						</defs>
					</svg>
				</button>
			</form>
		</div>
	</div>
</div>

<section class="catalog catalog--vacancies">
	<div class="container">
		<div class="catalog__top catalog-header">
			<button class="catalog-header__filter-btn btn btn_secondary btn_has-icon js-filter-btn">
				<svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
					<g clip-path="url(#clip0_4580_14319)">
						<path d="M5.50391 16.376H3.25391V14.126H5.50391V16.376ZM16.7539 16.001H7.00391V14.501H16.7539V16.001ZM5.50391 11.126H3.25391V8.87598H5.50391V11.126ZM16.7539 10.751H7.00391V9.25098H16.7539V10.751ZM5.50391 5.87598H3.25391V3.62598H5.50391V5.87598ZM16.7539 5.50098H7.00391V4.00098H16.7539V5.50098Z" fill="white" />
					</g>
					<defs>
						<clipPath id="clip0_4580_14319">
							<rect width="20" height="20" fill="white" />
						</clipPath>
					</defs>
				</svg>
				<span>Показать фильтры</span>
			</button>

			<div class="catalog-header__row">
				<span class="catalog-header__counter">Найдено 16 177 вакансий</span>

				<div class="catalog-header__sorting sorting">
					<div class="sorting__item">
						<button class="sorting__button accordion-button btn-link js-sort-btn" data-id="sort-1">
							<span>По соответствию</span>
							<svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
								<g clip-path="url(#clip0_4580_8402)">
									<path d="M10.0009 2.58301C10.4149 2.58318 10.7507 2.91905 10.7509 3.33301V14.8555L15.3046 10.3027C15.5976 10.0103 16.0724 10.01 16.3652 10.3027C16.6577 10.5955 16.6575 11.0704 16.3652 11.3633L10.5312 17.1963C10.2383 17.4892 9.76354 17.4892 9.47065 17.1963L3.63764 11.3633C3.34475 11.0704 3.34475 10.5956 3.63764 10.3027C3.93056 10.0102 4.4054 10.0099 4.69819 10.3027L9.25092 14.8555V3.33301C9.2511 2.91905 9.58696 2.58318 10.0009 2.58301Z" fill="#FC7827" />
								</g>
								<defs>
									<clipPath id="clip0_4580_8402">
										<rect width="20" height="20" fill="white" />
									</clipPath>
								</defs>
							</svg>
						</button>
						<!-- TODO: add dropdown  -->
						<ul class="sorting__list" data-id="sort-1">
							<li class="sorting__link active">1</li>
							<li class="sorting__link">2</li>
							<li class="sorting__link">3</li>
						</ul>
					</div>
					<div class="sorting__item">
						<button class="sorting__button accordion-button btn-link js-sort-btn" data-id="sort-2">
							<span>За все время</span>
							<svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
								<g clip-path="url(#clip0_4580_8402)">
									<path d="M10.0009 2.58301C10.4149 2.58318 10.7507 2.91905 10.7509 3.33301V14.8555L15.3046 10.3027C15.5976 10.0103 16.0724 10.01 16.3652 10.3027C16.6577 10.5955 16.6575 11.0704 16.3652 11.3633L10.5312 17.1963C10.2383 17.4892 9.76354 17.4892 9.47065 17.1963L3.63764 11.3633C3.34475 11.0704 3.34475 10.5956 3.63764 10.3027C3.93056 10.0102 4.4054 10.0099 4.69819 10.3027L9.25092 14.8555V3.33301C9.2511 2.91905 9.58696 2.58318 10.0009 2.58301Z" fill="#FC7827" />
								</g>
								<defs>
									<clipPath id="clip0_4580_8402">
										<rect width="20" height="20" fill="white" />
									</clipPath>
								</defs>
							</svg>
						</button>
						<!-- TODO: add dropdown  -->
						<ul class="sorting__list" data-id="sort-2">
							<li class="sorting__link active">1</li>
							<li class="sorting__link">2</li>
							<li class="sorting__link">3</li>
						</ul>
					</div>
					<div class="sorting__item">
						<button class="sorting__button accordion-button btn-link js-sort-btn" data-id="sort-3">
							<span>Показывать по 8</span>
							<svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
								<g clip-path="url(#clip0_4580_8402)">
									<path d="M10.0009 2.58301C10.4149 2.58318 10.7507 2.91905 10.7509 3.33301V14.8555L15.3046 10.3027C15.5976 10.0103 16.0724 10.01 16.3652 10.3027C16.6577 10.5955 16.6575 11.0704 16.3652 11.3633L10.5312 17.1963C10.2383 17.4892 9.76354 17.4892 9.47065 17.1963L3.63764 11.3633C3.34475 11.0704 3.34475 10.5956 3.63764 10.3027C3.93056 10.0102 4.4054 10.0099 4.69819 10.3027L9.25092 14.8555V3.33301C9.2511 2.91905 9.58696 2.58318 10.0009 2.58301Z" fill="#FC7827" />
								</g>
								<defs>
									<clipPath id="clip0_4580_8402">
										<rect width="20" height="20" fill="white" />
									</clipPath>
								</defs>
							</svg>
						</button>
						<!-- TODO: add dropdown  -->
						<ul class="sorting__list" data-id="sort-3">
							<li class="sorting__link active">1</li>
							<li class="sorting__link">2</li>
							<li class="sorting__link">3</li>
						</ul>
					</div>
				</div>
			</div>
		</div>

		<ul class="catalog__list offers-list js-list" data-id="resumes">
			<? for ($i = 0; $i < 6; $i++) { include $_SERVER["DOCUMENT_ROOT"] . '/include/rezume-item.php'; } ?>
		</ul>

		<? include $_SERVER["DOCUMENT_ROOT"] . '/include/pagination.php'; ?>
	</div>
</section>

<? require($_SERVER["DOCUMENT_ROOT"] . "/include/searching-save.php"); ?>

<? require($_SERVER["DOCUMENT_ROOT"] . "/include/filter.php"); ?>

<? require($_SERVER["DOCUMENT_ROOT"] . "/template/footer.php"); ?>