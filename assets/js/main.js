document.addEventListener('DOMContentLoaded', () => {

    const navSelect = document.querySelector('.js-btn-nav');

    if (navSelect) {
        navSelect.addEventListener('click', () => {
            const navList = document.querySelector('.nav__list');
            navList.classList.toggle('active');
        });
    }

    const selectElems = document.querySelectorAll('.js-select-btn');
    const selectItems = document.querySelectorAll('.js-select-item');
    const selectInputs = document.querySelectorAll('.js-select-input');
    const autoCompleteInputs = document.querySelectorAll('.js-autocomplete-input');

    if (autoCompleteInputs.length) {
        autoCompleteInputs.forEach(autoCompleteInput => {
            autoCompleteInput.addEventListener('input', () => {
                let parent = autoCompleteInput.closest('.field');
                let id = parent.dataset.id;
                let dropdown = document.querySelector(`.field__dropdown[data-id="${id}"]`);
                let options = dropdown.querySelectorAll('.field__option');
                let showDropdown = false;

                if (autoCompleteInput.value && autoCompleteInput.value.length > 1) {
                    options.forEach(option => {
                        option.classList.add('hidden');

                        if (option.dataset.value.toLowerCase().includes(autoCompleteInput.value.toLowerCase())) {
                            option.classList.remove('hidden');
                            showDropdown = true;
                        }
                    });

                    if (showDropdown) {
                        dropdown.classList.add('active');
                    } else {
                        dropdown.classList.remove('active');
                    }
                } else {
                    dropdown.classList.remove('active');
                }
            });
        });
    }

    if (selectElems.length) {
        selectElems.forEach(selectElem => {
            selectElem.addEventListener('click', (e) => {
                e.preventDefault();

                switchSelect(e);
            });
        });
    }

    if (selectItems.length) {
        selectItems.forEach(selectItem => {
            selectItem.addEventListener('click', (e) => {
                e.preventDefault();
                setValueSelect(e);

                let isComplete = selectItem.closest('.field__dropdown').classList.contains('js-without-choice');

                if (!isComplete) {
                    let curOptions = selectItem.closest('.field__dropdown').querySelectorAll('.field__option');
                    curOptions.forEach(curOption => {
                        curOption.classList.remove('active');
                    });

                    selectItem.classList.add('active');
                }
            });
        });
    }

    if (selectInputs.length) {
        selectInputs.forEach(selectInput => {
            let parent = selectInput.closest('.field');
            let id = parent.dataset.id;
            let dropdown = document.querySelector(`.field__dropdown[data-id="${id}"]`);

            selectInput.addEventListener('input', (e) => {
                console.log('input');
                let curValue = e.currentTarget.value;

                if (curValue) {
                    let option = document.querySelector(`.field__option[data-value="${curValue}"]`);

                    console.log(option);

                    if (option) {
                        option.classList.add('active');
                    } else {
                        dropdown.querySelectorAll('.field__option').forEach(el => {
                            el.classList.remove('active');
                        });
                    }
                }
            });

            selectInput.addEventListener('blur', (e) => {
                parent.classList.remove('active');
                dropdown.classList.remove('active');
            });
        });
    }

    function switchSelect(e) {
        const id = e.currentTarget.dataset.id;
        const input = document.querySelector(`.field[data-id="${id}"] input`);

        if (!input.readOnly) {
            input.focus();
        }

        if (id) {
            const list = document.querySelector(`.field__dropdown[data-id="${id}"]`);

            if (list) {
                list.classList.toggle('active');
                e.currentTarget.classList.toggle('active');
            }
        }
    }

    function setValueSelect(e) {
        const value = e.currentTarget.dataset.value;
        const parent = e.currentTarget.closest('.field__dropdown');
        const id = parent.dataset.id;
        const input = document.querySelector(`.field[data-id="${id}"] input`);

        if (input) {
            input.value = value;
        }

        document.querySelector(`.field[data-id="${id}"]`).classList.remove('active');
        parent.classList.remove('active');
    }

    const header = document.querySelector('.header');

    window.addEventListener('scroll', () => {
        if (window.scrollY > 0) {
            header.classList.add('scrolled');
        } else {
            header.classList.remove('scrolled');
        }
    });

    const modalCloseBtns = document.querySelectorAll('.js-modal-close');

    if (modalCloseBtns.length) {
        modalCloseBtns.forEach(modalCloseBtn => {
            modalCloseBtn.addEventListener('click', (e) => {
                e.preventDefault();
                const modal = modalCloseBtn.closest('.modal');
                modal.classList.remove('active');
                document.body.classList.remove('no-scroll');
            });
        });
    }

    const navCatalogBtn = document.querySelector('.catalog-nav__nav-btn');

    if (navCatalogBtn) {
        navCatalogBtn.addEventListener('click', (e) => {
            e.preventDefault();
            if (window.matchMedia('(max-width: 767px)').matches) {
                navCatalogBtn.classList.toggle('active');
                const catalogNav = document.querySelector('.catalog-nav__tabs');
                if (catalogNav) {
                    catalogNav.classList.toggle('active');
                }
            }
        });
    }

    const filterBtnModal = document.querySelectorAll('.js-filter-btn');

    if (filterBtnModal.length) {
        filterBtnModal.forEach(filterBtn => {
            filterBtn.addEventListener('click', (e) => {
                e.preventDefault();
                const modal = document.querySelector('.filter');

                if (modal) {
                    modal.classList.add('active');
                    document.body.classList.add('no-scroll');
                }
            });
        });
    }

    const sortingBtns = document.querySelectorAll('.js-sort-btn');

    if (sortingBtns.length) {
        sortingBtns.forEach(sortingBtn => {
            sortingBtn.addEventListener('click', (e) => {
                e.preventDefault();
                const parent = sortingBtn.closest('.sorting__item');
                const list = parent.querySelector('.sorting__dropdown');
                list.classList.toggle('active');
                parent.classList.toggle('active');
            });
        });
    }

    const sortingOptions = document.querySelectorAll('.sorting__option');

    if (sortingOptions.length) {
        sortingOptions.forEach(option => {
            option.addEventListener('click', (e) => {
                e.preventDefault();
                const parent = option.closest('.sorting__dropdown');
                const id = parent.dataset.id;
                const parentItem = option.closest('.sorting__item');
                curOptions = parent.querySelectorAll('.sorting__option');

                if (id === 'multiple-select') {
                    option.classList.toggle('active');
                } else {
                    curOptions.forEach(curOption => {
                        curOption.classList.remove('active');
                    });

                    if (id === 'sort') {
                        parentItem.querySelector('.js-sort-btn span').textContent = option.dataset.value;
                    }

                    if (id === 'count') {
                        parentItem.querySelector('.js-sort-btn span').textContent = 'Показывать по ' + option.dataset.value;
                    }

                    option.classList.add('active');
                    parent.classList.remove('active');
                    parentItem.classList.remove('active');
                }
            });
        });
    }

    const rangeInput = document.querySelector('.range-slider');

    if (rangeInput) {
        let min = Number(rangeInput.dataset.min);
        let max = Number(rangeInput.dataset.max);
        if (rangeInput.classList.contains('js-single-range')) {
            noUiSlider.create(rangeInput, {
                range: {
                    'min': min,
                    'max': max
                },
                start: [0],
                step: 1
            });
    
            rangeInput.noUiSlider.on('update', function (values, handle) {
                const inputMin = document.querySelector('[name="salary_from"]');
    
                inputMin.value = parseInt(values[0]);
            });
        } else {
            noUiSlider.create(rangeInput, {
                connect: true,
                range: {
                    'min': min,
                    'max': max
                },
                start: [min, max],
                step: 1
            });
    
            rangeInput.noUiSlider.on('update', function (values, handle) {
                const inputMin = document.querySelector('[name="salary_from"]');
                const inputMax = document.querySelector('[name="salary_to"]');
    
                inputMin.value = parseInt(values[0]);
                inputMax.value = parseInt(values[1]);
            });
        }
    }

    const selects = document.querySelectorAll('.select__input');
    const selectOptions = document.querySelectorAll('.select__option');

    if (selects.length) {
        selects.forEach(select => {
            select.addEventListener('click', (e) => {
                e.preventDefault();
                select.closest('.select').classList.toggle('active');
            });
        });
    }

    if (selectOptions.length) {
        selectOptions.forEach(selectOption => {
            selectOption.addEventListener('click', (e) => {
                e.preventDefault();

                let curOptions = selectOption.closest('.select').querySelectorAll('.select__option');

                curOptions.forEach(curOption => {
                    curOption.classList.remove('active');
                });

                selectOption.classList.add('active');
                selectOption.closest('.select').classList.remove('active');
                selectOption.closest('.select').querySelector('.select__input input').value = selectOption.dataset.value;

                let parent = selectOption.closest('.select');
                let id = parent.dataset.id;

                if (id === 'currency') {
                    let icons = parent.closest('.js-prices-wrapper').querySelectorAll('.js-currency-icon');

                    if (icons.length) {
                        icons.forEach(icon => {
                            icon.textContent = selectOption.dataset.value;
                        });
                    }

                    if (rangeInput) {
                        rangeInput.noUiSlider.updateOptions({
                            range: {
                                'min': Number(selectOption.dataset.min),
                                'max': Number(selectOption.dataset.max)
                            }
                        }, true);

                        rangeInput.noUiSlider.set([Number(selectOption.dataset.min), Number(selectOption.dataset.max)]);
                    }
                }
            });
        });
    }

    const multipleSelects = document.querySelectorAll('.multiple-select__field');
    const multipleSelectsIcons = document.querySelectorAll('.multiple-select__icon');
    const multipleSelectOptions = document.querySelectorAll('.multiple-select__option');

    if (multipleSelects.length) {
        multipleSelects.forEach(multipleSelect => {
            multipleSelect.addEventListener('click', (e) => {
                e.preventDefault();
                multipleSelect.closest('.multiple-select').classList.toggle('active');
            });
        });
    }

    if (multipleSelectsIcons.length) {
        multipleSelectsIcons.forEach(multipleSelect => {
            multipleSelect.addEventListener('click', (e) => {
                e.preventDefault();
                multipleSelect.closest('.multiple-select').classList.toggle('active');
            });
        });
    }

    if (multipleSelectOptions.length) {
        multipleSelectOptions.forEach(multipleSelectOption => {
            multipleSelectOption.addEventListener('click', (e) => {
                e.preventDefault();
                multipleSelectOption.classList.toggle('active');

                let curChoices = multipleSelectOption.closest('.multiple-select').querySelectorAll('.multiple-select__option.active');
                let curChoiceBlock = multipleSelectOption.closest('.multiple-select').querySelector('.multiple-select__choices');

                curChoiceBlock.innerHTML = '';

                curChoices.forEach(curChoice => {
                    setChoice(curChoice.dataset.value, curChoiceBlock);
                });

                if (curChoices.length) {
                    curChoiceBlock.classList.add('active');
                } else {
                    curChoiceBlock.classList.remove('active');
                }

                let parent = multipleSelectOption.closest('.multiple-select');
                let id = parent.dataset.id;
                let tag = document.querySelectorAll(`.select__tag[data-id="${id}"]`);

                if (tag.length) {
                    console.log(tag);
                    tag.forEach(t => {
                        if (t.dataset.value === multipleSelectOption.dataset.value) {
                           if (multipleSelectOption.classList.contains('active')) {
                                t.classList.add('hidden');
                           } else {
                                t.classList.remove('hidden');
                           }
                        }
                    });
                }
            });
        });
    }

    function setChoice(value, choiceBlock) {
        let choice = document.createElement('div');
        let choiceText = document.createElement('span');
        let choiceClose = '<svg width="12" height="12" viewBox="0 0 12 12" fill="none" xmlns="http://www.w3.org/2000/svg"><g clip-path="url(#clip0_4779_24414)"><path d="M7.90913 3.45377C8.08477 3.27843 8.36923 3.27843 8.54487 3.45377C8.72058 3.62948 8.72058 3.91478 8.54487 4.09049L7.34272 5.29264C6.95235 5.68312 6.95237 6.3162 7.34272 6.7067L8.54487 7.90885C8.72058 8.08456 8.72058 8.36986 8.54487 8.54557C8.36922 8.72095 8.08477 8.72094 7.90913 8.54557L6.70698 7.34342C6.31645 6.95289 5.68246 6.95289 5.29194 7.34342L4.08979 8.54557C3.91413 8.72092 3.62968 8.72097 3.45405 8.54557C3.27834 8.36986 3.27834 8.08456 3.45405 7.90885L4.6562 6.7067C5.04658 6.31619 5.0466 5.68313 4.6562 5.29264L3.45405 4.09049C3.27834 3.91478 3.27834 3.62948 3.45405 3.45377C3.62967 3.27841 3.91414 3.27845 4.08979 3.45377L5.29194 4.65592C5.68246 5.04644 6.31645 5.04644 6.70698 4.65592L7.90913 3.45377Z" fill="#232323"/></g><defs><clipPath id="clip0_4779_24414"><rect width="12" height="12" fill="white"/></clipPath></defs></svg>';
        choice.classList.add('multiple-select__choice');
        choiceText.textContent = value;
        choice.dataset.value = value;
        choice.appendChild(choiceText);
        choice.innerHTML += choiceClose;

        choiceBlock.appendChild(choice);

        choice.addEventListener('click', (e) => {
            e.preventDefault();
            removeChoice(value, choiceBlock);
        });
    }

    function removeChoice(value, choiceBlock) {
        let parent = choiceBlock.closest('.multiple-select');
        let id = parent.dataset.id;
        let tag = document.querySelectorAll(`.select__tag[data-id="${id}"]`);
        let choice = parent.querySelector(`.multiple-select__choice[data-value="${value}"]`);
        choice.remove();
        let option = parent.querySelector(`.multiple-select__option[data-value="${value}"]`);
        option.classList.remove('active');

        if (parent.querySelectorAll('.multiple-select__option.active').length) {
            parent.querySelector('.multiple-select__choices').classList.add('active');
        } else {
            parent.querySelector('.multiple-select__choices').classList.remove('active');
        }

        if (tag.length) {
            tag.forEach(t => {
                if (t.dataset.value === value) {
                    t.classList.remove('hidden');
                }
            });
        }
    }

    const filterApply = document.querySelector('.js-filter-apply');

    if (filterApply) {
        filterApply.addEventListener('click', (e) => {
            window.location.reload();
        })
    }

    const porfolioSliderElement = document.querySelector(".js-portfolio-slider");

    if (porfolioSliderElement) {
      const portfolioSlider = new Swiper(porfolioSliderElement, {
        loop: false,
        navigation: {
          nextEl: porfolioSliderElement.querySelector(".slider-button_next"),
          prevEl: porfolioSliderElement.querySelector(".slider-button_prev"),
        },
        slidesPerView: "auto",
        spaceBetween: 8,
        observer: true,
        breakpoints: {
            768: {
                spaceBetween: 12
            }
        }
      });
    }

    const sertificatesSliderElement = document.querySelector(".js-sertificates-slider");

    if (sertificatesSliderElement) {
      const sertificatesSlider = new Swiper(sertificatesSliderElement, {
        loop: false,
        navigation: {
          nextEl: sertificatesSliderElement.querySelector(".slider-button_next"),
          prevEl: sertificatesSliderElement.querySelector(".slider-button_prev"),
        },
        slidesPerView: "auto",
        spaceBetween: 8,
        observer: true,
        breakpoints: {
            768: {
                spaceBetween: 12
            }
        }
      });
    }

    const jsTabs = document.querySelectorAll('.js-tab');
    const jsTabContents = document.querySelectorAll('.js-tab-content');

    if (jsTabs.length) {
        jsTabs.forEach(jsTab => {
            jsTab.addEventListener('click', (e) => {
                e.preventDefault();
                jsTabContents.forEach(el => {
                    el.classList.remove('active');
                });

                jsTabs.forEach(el => {
                    el.classList.remove('active');
                });

                jsTab.classList.add('active');

                const tab = jsTab.dataset.tab;
                const content = document.querySelector(`.js-tab-content[data-tab="${tab}"]`);
                const isCatalog = jsTab.classList.contains('is-catalog');
                const tabSelect = document.querySelector('.js-tab-select');
                const parentTabs = jsTab.closest('.tabs');

                if (isCatalog) {
                    tabSelect.classList.remove('active');
                    tabSelect.querySelector('span').textContent = jsTab.textContent;
                    parentTabs.classList.remove('active');
                }

                if (content) {
                    content.classList.add('active');
                }
            });
        });
    }

    const burger = document.querySelector('.burger');
    const burgerMenu = document.querySelector('.burger-menu');

    if (burger && burgerMenu) {
        burger.addEventListener('click', (e) => {
            e.preventDefault();
            burgerMenu.classList.toggle('active');
        });
    }

    const pricesCheckbox = document.querySelector('.js-prices-checkbox');

    if (pricesCheckbox) {
        pricesCheckbox.addEventListener('change', (e) => {
            e.preventDefault();
            let wrapper = document.querySelector('.js-prices-wrapper');
            if (pricesCheckbox.checked) {
                wrapper.classList.add('active');
            } else {
                wrapper.classList.remove('active');
            }
        });
    }

    const pricesReset = document.querySelector('.js-prices-reset');

    if (pricesReset) {
        pricesReset.addEventListener('click', (e) => {
            e.preventDefault();
            
            if (rangeInput) {
                console.log(rangeInput.dataset.min, rangeInput.dataset.max);
                rangeInput.noUiSlider.updateOptions({
                    range: {
                        min: Number(rangeInput.dataset.min),
                        max: Number(rangeInput.dataset.max)
                    }
                });

                rangeInput.noUiSlider.set([Number(rangeInput.dataset.min), Number(rangeInput.dataset.max)]);
            }

            let periods = document.querySelector('.select[data-id="periods"]');

            if (periods) {
                periods.querySelector('.input__field').value = '';
                let options = periods.querySelectorAll('.select__option');
                options.forEach(option => {
                    option.classList.remove('active');
                });
            }

            let currency = document.querySelector('.select[data-id="currency"]');

            if (currency) {
                let options = currency.querySelectorAll('.select__option');
                options.forEach(option => {
                    option.classList.remove('active');
                });

                firstOption = currency.querySelector('.select__option');
                firstOption.classList.add('active');
                currency.querySelector('.input__field').value = firstOption.dataset.value;

                let icons = pricesReset.closest('.js-prices-wrapper').querySelectorAll('.js-currency-icon');

                if (icons.length) {
                    icons.forEach(icon => {
                        icon.textContent = firstOption.dataset.value;
                    });
                }
            }
        });
    }

    const jsShowCheckoxes = document.querySelectorAll('.js-show-checkboxes');

    if (jsShowCheckoxes.length) {
        jsShowCheckoxes.forEach(jsShowCheckbox => {
            jsShowCheckbox.addEventListener('click', (e) => {
                e.preventDefault();
                let wrapper = jsShowCheckbox.closest('.filter-group');
                wrapper.classList.toggle('opened');
            });
        });
    }

    const filterReset = document.querySelector('.js-filter-reset');

    if (filterReset) {
        filterReset.addEventListener('click', (e) => {
            e.preventDefault();
            location.reload();
        });
    }

    const jsResetMultiple = document.querySelectorAll('.js-reset-multiple');

    if (jsResetMultiple.length) {
        jsResetMultiple.forEach(jsResetMultiple => {
            jsResetMultiple.addEventListener('click', (e) => {
                e.preventDefault();
                let parent = jsResetMultiple.closest('.filter-group');
                parent.querySelector('.multiple-select__choices').classList.remove('active');
                parent.querySelector('.multiple-select__choices').innerHTML = '';
                parent.querySelector('.multiple-select').classList.remove('active');

                parent.querySelectorAll('.multiple-select__option').forEach(option => {
                    option.classList.remove('active');
                });

                parent.querySelectorAll('.select__tag').forEach(tag => {
                    tag.classList.add('hidden');
                });
            });
        });
    }

    const multipleTags = document.querySelectorAll('.js-multiple-tag');

    if (multipleTags.length) {
        multipleTags.forEach(multipleTag => {
            multipleTag.addEventListener('click', (e) => {
                e.preventDefault();
                multipleTag.classList.toggle('hidden');
                let parent = multipleTag.closest('.filter-group');
                parent.querySelector('.multiple-select__choices').classList.add('active');
                parent.querySelector('.multiple-select__option[data-value="' + multipleTag.dataset.value + '"]').classList.add('active');
                setChoice(multipleTag.dataset.value, parent.querySelector('.multiple-select__choices'));
            });
        });
    }

    const philosophySliderElement = document.querySelector(".about-philosophy__list");
    const breakpoint = window.matchMedia('(min-width: 768px)');
    let philosophySlider;


    const breakpointChecker = function () {
        if (breakpoint.matches === false) {
            // Если слайдер уже был создан — уничтожаем его
            if (philosophySlider !== undefined) {
                // true, true означает очистить инлайн-стили Swiper
                philosophySlider.destroy(true, true); 
            }
            return;
        } else if (breakpoint.matches === true) {
            // Запускаем инициализацию заново
            return enableSwiper();
        }
    };

    const enableSwiper = function () {
        philosophySlider = new Swiper(philosophySliderElement, {
            loop: false,
            observer: true,
            spaceBetween: 16,
            slidesPerView: 'auto',
        });
    };

    // Навешиваем слушатель на изменения экрана
    breakpoint.addEventListener('change', breakpointChecker);

    // Запускаем проверку при первой загрузке страницы
    breakpointChecker();


    const accordionBtns = document.querySelectorAll('.accordion__header');

    if (accordionBtns.length) {
        accordionBtns.forEach(accordionBtn => {
            accordionBtn.addEventListener('click', (e) => {
                e.preventDefault();
                accordionBtn.closest('.accordion__item').classList.toggle('active');
            });
        });
    }

    const loadMoreBtn = document.querySelector('.js-load');

    if (loadMoreBtn) {
        loadMoreBtn.addEventListener('click', (e) => {
            e.preventDefault();
            let id = loadMoreBtn.dataset.id;
            let list = document.querySelector(`.js-list[data-id="${id}"]`);

            if (list) {
                list.classList.add('loading');

                // fetch
                let url = '';

                if (id == 'vacancies') {
                    url = '/ajax/vacancies.php';
                } else if (id == 'rezumes') {
                    url = '/ajax/rezumes.php';
                }

                sendAjaxRequest(url, 2, 4, id);
            }
        });
    }

    async function sendAjaxRequest(url, page, perPage, id) {
        
        const data = {
            page: page,
            perPage: perPage
        };

        const list = document.querySelector(`.js-list[data-id="${id}"]`);

        try {
            const response = await fetch(url, {
                method: 'POST',
                headers: {
                    'Content-Type': 'application/json', // Передаем JSON
                    'X-Requested-With': 'XMLHttpRequest' // Традиционный заголовок AJAX (необязательно)
                },
                body: JSON.stringify(data) 
            });

            if (!response.ok) {
                throw new Error(`Ошибка сервера: ${response.status}`);
            }

            const responseData = await response.text();
            
            setTimeout(() => {
                list.insertAdjacentHTML('beforeend', responseData);
                list.classList.remove('loading');
            }, 500);

        } catch (error) {
            console.error('AJAX запрос завершился ошибкой:', error);
           
        }
    }

    const trigger = document.querySelector('.scroll-trigger');
    let currentPage = 1;
    let isFetching = false;
    let hasMoreData = true;
    const jsList = document.querySelector('.js-list');
    
    async function loadMoreContent(list, page) {
        // Блокируем запрос, если идет загрузка или данные закончились
        if (isFetching || !hasMoreData) return; 

        isFetching = true;

        
        try {
            let id = list.dataset.id;
            let urlAjax = '';

            if (id == 'vacancies') {
                urlAjax = '/ajax/vacancies.php';
            } else if (id == 'rezumes') {
                urlAjax = '/ajax/rezumes.php';
            } else if (id == 'faq-rezumes' || id == 'faq-vacancies') {
                urlAjax = '/ajax/faq.php';
            } else if (id == 'help-vacancies' || id == 'help-rezumes') {
                urlAjax = '/ajax/help.php';
            }

            const response = await fetch(urlAjax, {
                method: 'POST',
                headers: {
                    'Content-Type': 'application/json', // Передаем JSON
                    'X-Requested-With': 'XMLHttpRequest' // Традиционный заголовок AJAX (необязательно)
                },
                body: JSON.stringify({
                    page: page,
                    perPage: 4
                })
            });
            
            if (!response.ok) {
                throw new Error(`Ошибка сервера: ${response.status}`);
            }

            const items = await response.text();

            // Если сервер вернул пустой массив — данные закончились
            if (currentPage === 3 || !items || items.length === 0) {
                hasMoreData = false;
                observer.unobserve(trigger); // Отключаем слежку, так как загружать больше нечего
                return;
            }

            
            currentPage++;
            console.log('Текущая страница: ' + currentPage);

            list.insertAdjacentHTML('beforeend', items);   
            
            await new Promise(resolve => requestAnimationFrame(resolve));

            const triggerBounds = trigger.getBoundingClientRect();
            const isTriggerStillVisible = triggerBounds.top < window.innerHeight + 200;

            if (isTriggerStillVisible) {
                isFetching = false;
                loadMoreContent(jsList, currentPage);
            }

        } catch (error) {
            console.error('Ошибка при загрузке данных:', error);
        } finally {
            isFetching = false;
        }
    }

    // Настройка IntersectionObserver
    const observerOptions = {
        root: null,
        rootMargin: '0px 0px 100px 0px', 
        threshold: 0
    };

    let isFirstRender = true;

    const observer = new IntersectionObserver((entries) => {
        entries.forEach(entry => {

            if (entry.isIntersecting && !isFetching && hasMoreData) {
                
                const triggerBounds = trigger.getBoundingClientRect();
                const isTriggerStillVisible = triggerBounds.top < window.innerHeight + 200;

                if (isFirstRender && !isTriggerStillVisible) {
                    isFirstRender = false;
                    return;
                }

                loadMoreContent(jsList, currentPage);
            }
        });
    }, observerOptions);

    if (trigger) {
        // Запуск наблюдения
        
        observer.observe(trigger);
    }

    const mapBtn = document.querySelector('.js-map-open');

    if (mapBtn) {
        mapBtn.addEventListener('click', () => {
            document.querySelector('.map__overlay').classList.add('closed');
        });
    }

    const textareaChoices = document.querySelectorAll('.js-textarea-choice');

    if (textareaChoices.length) {
        textareaChoices.forEach(choice => {
            choice.addEventListener('click', () => {
                let parent = choice.closest('.textarea');
                parent.querySelector('textarea').value = choice.dataset.value;
            });
        });
    }

    const feedbackForms = document.querySelectorAll('.feedback__form');

    if (feedbackForms.length) {
        feedbackForms.forEach(form => {
            form.addEventListener('submit', (e) => {
                e.preventDefault();
                document.querySelector('.js-modal-success').classList.add('active');
            });
        });
    }

    const anchorBtns = document.querySelectorAll('.js-anchor-feedback');

    if (anchorBtns.length) {
        anchorBtns.forEach(anchor => {
            anchor.addEventListener('click', (e) => {
                e.preventDefault();

                let id = e.currentTarget.dataset.id;
                let form = document.querySelector(`#${id}`);

                if (form) {
                    form.scrollIntoView({
                        behavior: 'smooth',
                        block: 'start'
                    });
                }
            });
        });
    }
});