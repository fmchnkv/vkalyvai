document.addEventListener('DOMContentLoaded', () => {
    let prevTarget = null;

    document.addEventListener('click', (e) => {

        // Закрытие модальных окон при клике вне области и не по кнопке
        const target = e.target;
        const activeModal = document.querySelector('.modal.active');
        
        if (activeModal && !target.closest('.modal__wrapper')) {
            const isModalBtn = checkModalBtn(target);
            const isFilterChoice = target.classList.contains('multiple-select__choice') || target.closest('.multiple-select__choice');

            if (!isModalBtn && !isFilterChoice) {
                activeModal.classList.remove('active');
                document.body.classList.remove('no-scroll');
                return;
            }
        }

        // Закрытие одиночного селекта в форме при клике вне области или смене фокуса
        const activeField = document.querySelector('.field__dropdown.active');
        const activeFieldBtn = document.querySelector('.js-select-btn.active');

        if (activeField && activeFieldBtn && !target.closest('.field__dropdown') && !target.closest('.js-select-btn')) {
            activeField.classList.remove('active');
            return;
        }

        // Закрытие одиночного селекта в форме при клике вне области или смене фокуса
        const activeSelect = document.querySelector('.select.active');
        
        if (activeSelect && !target.closest('.select')) {
            activeSelect.classList.remove('active');
            return;
        }

        // Закрытие множественного селекта в форме при клике вне области или смене фокуса
        const activeMultipleSelect = document.querySelector('.multiple-select.active');
        if (activeMultipleSelect && !target.closest('.multiple-select') && !target.classList.contains('js-multiple-tag')) {
            activeMultipleSelect.classList.remove('active');
            return;
        }

        // Закрытие кнопки сортировки при клике вне области
        const activeSort = document.querySelector('.sorting__item.active');
        const activeSortList = document.querySelector('.sorting__dropdown.active');
        if (activeSort && !target.closest('.js-sort-btn') && !target.closest('.sorting__dropdown')) {
            activeSort.classList.remove('active');
            activeSortList.classList.remove('active');
            return;
        }
    });

    // Функция проверяет, является ли элемент кнопкой модального окна
    function checkModalBtn(target) {
        if (target.closest('.js-filter-btn') || target.classList.contains('js-filter-btn')) {
            return true;
        }

        if (target.closest('[data-call-modal]')) {
            return true;
        }
    }

    const navSelect = document.querySelector('.js-btn-nav');
    const offset = 100; // высота шапки

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
                let curValue = e.currentTarget.value;

                if (curValue) {
                    let option = document.querySelector(`.field__option[data-value="${curValue}"]`);

                    if (option) {
                        option.classList.add('active');
                    } else {
                        dropdown.querySelectorAll('.field__option').forEach(el => {
                            el.classList.remove('active');
                        });
                    }
                }
            });

            // selectInput.addEventListener('blur', (e) => {
            //     parent.classList.remove('active');
            //     dropdown.classList.remove('active');
            // });
        });
    }

    function switchSelect(e) {
        const id = e.currentTarget.dataset.id;
        const input = document.querySelector(`.field[data-id="${id}"] input`);

        if (id) {
            const list = document.querySelector(`.field__dropdown[data-id="${id}"]`);

            if (list) {
                if (list.classList.contains('active')) {
                    e.currentTarget.classList.remove('active');
                    list.classList.remove('active');
                } else {
                    document.querySelectorAll('.js-select-btn').forEach(el => {
                        el.classList.remove('active');
                    });
                    document.querySelectorAll('.field__dropdown').forEach(el => {
                        el.classList.remove('active');
                    });
                    e.currentTarget.classList.add('active');
                    list.classList.add('active');
                }

                if (!input.readOnly) {
                    if (list.classList.contains('active')) {
                        input.focus();
                    } else {
                        input.blur();
                    }
                }
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

    const modalCloseBtns = document.querySelectorAll('.js-modal-close');

    if (modalCloseBtns.length) {
        modalCloseBtns.forEach(modalCloseBtn => {
            modalCloseBtn.addEventListener('click', (e) => {
                e.preventDefault();
                const modal = modalCloseBtn.closest('.modal');
                console.log('modal close via button', modal ? modal.dataset.modal : null, new Date().toISOString());
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
                if (parent.classList.contains('active')) {
                    parent.classList.remove('active');
                    list.classList.remove('active');
                } else {
                    document.querySelectorAll('.sorting__item').forEach(el => {
                        el.classList.remove('active');
                    });
                    document.querySelectorAll('.sorting__dropdown').forEach(el => {
                        el.classList.remove('active');
                    });
                    parent.classList.add('active');
                    list.classList.add('active');
                }
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
                if (select.closest('.select').classList.contains('active')) {
                    select.closest('.select').classList.remove('active');
                } else {
                    selects.forEach(el => {
                        el.closest('.select').classList.remove('active');
                    });
                    select.closest('.select').classList.add('active');
                }
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
                if (multipleSelect.closest('.multiple-select').classList.contains('active')) {
                    multipleSelect.closest('.multiple-select').classList.remove('active');
                } else {
                    multipleSelects.forEach(el => {
                        el.closest('.multiple-select').classList.remove('active');
                    });
                    multipleSelect.closest('.multiple-select').classList.add('active');
                }
            });
        });
    }

    if (multipleSelectsIcons.length) {
        multipleSelectsIcons.forEach(multipleSelect => {
            multipleSelect.addEventListener('click', (e) => {
                e.preventDefault();
                if (multipleSelect.closest('.multiple-select').classList.contains('active')) {
                    multipleSelect.closest('.multiple-select').classList.remove('active');
                } else {
                    multipleSelects.forEach(el => {
                        el.closest('.multiple-select').classList.remove('active');
                    });
                    multipleSelect.closest('.multiple-select').classList.add('active');
                }
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
        let choiceClose = '<svg width="12" height="12" viewBox="0 0 12 12" fill="none" xmlns="http://www.w3.org/2000/svg"><g><path d="M7.90913 3.45377C8.08477 3.27843 8.36923 3.27843 8.54487 3.45377C8.72058 3.62948 8.72058 3.91478 8.54487 4.09049L7.34272 5.29264C6.95235 5.68312 6.95237 6.3162 7.34272 6.7067L8.54487 7.90885C8.72058 8.08456 8.72058 8.36986 8.54487 8.54557C8.36922 8.72095 8.08477 8.72094 7.90913 8.54557L6.70698 7.34342C6.31645 6.95289 5.68246 6.95289 5.29194 7.34342L4.08979 8.54557C3.91413 8.72092 3.62968 8.72097 3.45405 8.54557C3.27834 8.36986 3.27834 8.08456 3.45405 7.90885L4.6562 6.7067C5.04658 6.31619 5.0466 5.68313 4.6562 5.29264L3.45405 4.09049C3.27834 3.91478 3.27834 3.62948 3.45405 3.45377C3.62967 3.27841 3.91414 3.27845 4.08979 3.45377L5.29194 4.65592C5.68246 5.04644 6.31645 5.04644 6.70698 4.65592L7.90913 3.45377Z" fill="#232323"/></g></svg>';
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

                if (accordionBtn.closest('.accordion__item').classList.contains('active')) {
                    accordionBtn.closest('.accordion__item').classList.remove('active');
                } else {
                    accordionBtns.forEach(el => {
                        el.closest('.accordion__item').classList.remove('active');
                    });
                    accordionBtn.closest('.accordion__item').classList.add('active');
                }
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
            } else if (id == 'companies') {
                urlAjax = '/ajax/companies.php';
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

    Fancybox.bind("[data-fancybox]", {
        
    });

    //вызов модалок с кнопок
    document.querySelectorAll('[data-call-modal]').forEach(button => {
        button.addEventListener('click', function(e) {
            e.preventDefault();

            let modal = document.querySelector(`.modal[data-modal="${button.dataset.callModal}"]`);
            if(modal) {
                modal.classList.add('active');
            }
        })
    });

    //маски контактов
    const contactInput = document.getElementById('contact_data');
    const radios = document.querySelectorAll('input[name="contact_type"]');
    const maskInputs = document.querySelectorAll('input[data-mask]');
    const passwordWrappers = document.querySelectorAll('.password-wrapper');
    let currentMask = null;

    function applyMaskFor(contactInput, type) {
        if (!contactInput || !type) return;

        if (currentMask) {
            currentMask.remove();
            currentMask = null;
        }

        switch (type) {
            case 'tel':
                currentMask = new Inputmask({ mask: '+7 (999) 999-99-99'});
                currentMask.mask(contactInput);
                contactInput.type = 'tel';
                contactInput.placeholder = '+7 (___) ___-__-__';
            break;

            case 'email':
                currentMask = new Inputmask({ alias: 'email' });
                currentMask.mask(contactInput);
                contactInput.type = 'text';
                contactInput.placeholder = 'name@example.com';
            break;

            case 'inn':
                currentMask = new Inputmask({ mask: '999999999999'});
                currentMask.mask(contactInput);
                contactInput.type = 'text';
                contactInput.placeholder = '999999999999';
            break;

            case 'number':
                currentMask = new Inputmask({ alias: 'numeric', digits: 0, allowMinus: false, rightAlign: false });
                currentMask.mask(contactInput);
                contactInput.type = 'text';
                contactInput.placeholder = '0';
            break;

            case 'password':
                currentMask = new Inputmask({ mask: '******************'});
                currentMask.mask(contactInput);
                contactInput.type = 'password';
                contactInput.placeholder = 'admin';
            break;

            case 'soc':
                currentMask = new Inputmask({ regex: '^[A-Za-z0-9_.@-]{3,64}$' });
                currentMask.mask(contactInput);
                contactInput.type = 'text';
                contactInput.placeholder = 'id221396498';
            break;

            default:
                currentMask = new Inputmask({ regex: '^[А-Яа-яЁёA-Za-z0-9_.@-\\s]{3,64}$' });
                currentMask.mask(contactInput);
                contactInput.type = 'text';
                contactInput.placeholder = 'Введите текст';
            break;
        }
        contactInput.value = '';
    }

    function removeMask(input) {
        if (input && input.inputmask) {
            input.inputmask.remove();
            input.inputmask = null;
        }
    }

    if(radios) {
        radios.forEach(r => r.addEventListener('change', (e) => {
            if(e.target.value) applyMaskFor(contactInput, e.target.value);
        }));
    }

    if(maskInputs) {
        maskInputs.forEach(input => {
            applyMaskFor(input, input.dataset.mask);
        });
    }

    //отображение и скрытие пароля
    if(passwordWrappers) {
        passwordWrappers.forEach(wrapper => {
            let input = wrapper.querySelector('input');
            let btnShow = wrapper.querySelector('button');

            if(input && btnShow) {
                //const originalType = input.type;
                
                btnShow.addEventListener('click', function(e) {
                    e.preventDefault();

                    if(input.type == 'text') {
                        input.type = 'password';
                    } else {
                        input.type = 'text';
                    }
                });
            }
        });
    }

    // применить при загрузке
    const checked = Array.from(radios).find(r => r.checked);
    if (checked) {
        //contactType = checked.value;
        applyMaskFor(contactInput, checked.value);
    }

    //открытие поля для редактирования
    const lkForms = document.querySelectorAll('.input-edit-form');

    if(lkForms) {
        lkForms.forEach(form => {
            let input = form.querySelector('.lk-bubble__hidden-input');
            let userValue = form.querySelector('p');
            let editBtn = form.querySelector('.btn--edit');
            let deleteBtn = form.querySelector('.btn--delete');
            let saveBtn = form.querySelector('.btn--ok');

            function addClasses(action) {
                input.classList[action]('showed');
                saveBtn.classList[action]('showed');
                userValue.classList[action]('hidden');
                editBtn.classList[action]('lk__hidden');
                deleteBtn.classList[action]('lk__hidden');
            }

            editBtn.addEventListener('click', function(e) {
                e.preventDefault();
                addClasses('add');
            })

            saveBtn.addEventListener('click', function(e) {
                e.preventDefault();

                if(input.value) {
                    form.classList.remove('error');
                    userValue.textContent = input.value;
                   // form.submit();
                   addClasses('remove');
                } else {
                    form.classList.add('error');
                }
            })
        });
    }

    //=========КОНСТРУКТОР=========//

    function initHintsSlider(context = document) {
        if (window.innerWidth >= 768) return;

        const sliders = context.querySelectorAll('.constructor__hints-wrapper');

        sliders.forEach(slider => {
            if (slider.swiper) return;

            new Swiper(slider, {
                slidesPerView: 1.2,
                spaceBetween: 8,
            });
        });
    }
    initHintsSlider();

    //форма-конструктор резюме
    const constructorSteps = document.querySelectorAll('form[data-form]');
    const addBlockBtns = document.querySelectorAll('button[data-add-block]');
    if(constructorSteps.length) {
        function changeStep(stepNumber) {
            const targetForm = document.querySelector(
                `[data-form="${stepNumber}"]`
            );

            document.querySelector('h1').textContent = targetForm.dataset.title;

            document.querySelectorAll('.progress-step').forEach(step => {
                step.classList.toggle(
                    'active',
                    Number(step.dataset.step) <= stepNumber
                );
            });
            constructorSteps.forEach(form => {
                form.classList.remove('active');
            });
            let newStep = document.querySelector(`form[data-form="${stepNumber}"]`);

            if(!newStep) return;

            newStep.classList.add('active');

            //прокрутка
            const top = document.querySelector('.page-title').getBoundingClientRect().top + window.pageYOffset - offset;
            window.scrollTo({
                top,
                behavior: 'smooth'
            });
        }
        constructorSteps.forEach(stepForm => {
            let btnNext = stepForm.querySelector('.btn-next');
            let stepPrev = stepForm.querySelector('.prev-step');

            if(btnNext) {
                btnNext.addEventListener('click', function(e) {
                    e.preventDefault();
                    const nextStep = Number(this.dataset.nextStep);
                    if(nextStep) {
                        changeStep(nextStep);
                    } else {
                        //stepForm.submit();
                    }
                });
            }

            if(stepPrev) {
                stepPrev.addEventListener('click', function(e) {
                    e.preventDefault();
                    const prevStep = Number(this.dataset.prevStep);
                    changeStep(prevStep);
                });
            }
        });

        //кнопка добавления блока полей
        if(addBlockBtns) {
            addBlockBtns.forEach(btn => {
                btn.addEventListener('click', function(e) {
                    e.preventDefault();
                    if(this.dataset.addBlock) {
                        let template = document.getElementById(`${this.dataset.addBlock}`);
                        if (!template) return;

                        let blockId = template.id;
                        const clone = template.content.firstElementChild.cloneNode(true);

                        
                        //присваиваем id
                        let index = 1;
                        while (document.getElementById(`${blockId}-${index}`)) {
                            index++;
                        }
                        clone.id = `${blockId}-${index}`;

                       let blocksContainer = template.parentNode;
                       blocksContainer.appendChild(clone);
                       initHintsSlider(clone);

                        //прокрутка
                        const top =
                        clone.getBoundingClientRect().top +
                        window.pageYOffset -
                        offset;
                        window.scrollTo({
                            top,
                            behavior: 'smooth'
                        });
                    }
                })
            });
        }

        function createSkillBubble(text, removable = false) {
            const bubble = document.createElement('div');

            bubble.classList.add('constructor__bubbles-item');

            if (removable) {
                bubble.classList.add('remove-skill');

                bubble.innerHTML = `
                    <span>${text}</span>
                    <button class="btn transp-btn" type="button">
                        <svg width="12" height="12" viewBox="0 0 12 12" fill="none">
                            <path d="M8.86426 3.77246L6.63672 6L8.86426 8.22754L8.22754 8.86426L6.00098 6.63672L3.77344 8.86426L3.13672 8.22754L5.36426 6L3.13672 3.77246L3.77344 3.13672L6.00098 5.36328L8.22754 3.13672L8.86426 3.77246Z" fill="#232323"></path>
                        </svg>
                    </button>
                `;
            } else {
                bubble.classList.add('add-skill');
                bubble.textContent = text;
            }

            return bubble;
        }


        function initSkills() {
            document.addEventListener('click', function(e) {

                // Добавить навык
                const addSkill = e.target.closest('.add-skill');

                if (addSkill) {
                    const skillsBlock = addSkill.closest('.constructor__skills');

                    const selectedContainer =
                        skillsBlock.querySelector('.top-skills .bright-bubbles');

                    const text = addSkill.textContent.trim();

                    selectedContainer.append(
                        createSkillBubble(text, true)
                    );

                    addSkill.remove();

                    return;
                }

                // Удалить навык
                const removeBtn = e.target.closest('.remove-skill button');

                if (removeBtn) {
                    e.preventDefault();

                    const skill = removeBtn.closest('.remove-skill');
                    const skillsBlock = skill.closest('.constructor__skills');

                    const availableContainer =
                        skillsBlock.querySelector('.gray-bubbles');

                    const text = skill.querySelector('span').textContent.trim();

                    availableContainer.append(
                        createSkillBubble(text, false)
                    );

                    skill.remove();
                }
            });
        }
        initSkills();

        function initHints() {
            document.addEventListener('click', function(e) {
                const useHint = e.target.closest('.hint');

                if (!useHint) return;
                document.querySelectorAll('.hint').forEach(hint => {
                    hint.classList.remove('active');
                });

                useHint.classList.add('active');

                const dutiesBlock = useHint.closest('.duties');
                const textarea = dutiesBlock?.querySelector('textarea');

                if (textarea) {
                    textarea.value = useHint.textContent.trim();
                }
            });
        }
        initHints();

        //файлы
        const uploadedFiles = {
            portfolio: [],
            certificates: []
        };
        const errorFiles = {
            portfolio: [],
            certificates: []
        };
        const MAX_FILES_TOTAL_SIZE = 10 * 1024 * 1024; // 10 МБ
        const MAX_FILES_COUNT = 10;

        document?.querySelectorAll('.constructor__files-input-wrapper input[type="file"]')?.forEach(input => {

            input.addEventListener('change', function() {
                const block = input.closest('.constructor__files-input-wrapper');
                addFiles(this, this.files);

                this.value = '';
            });

            initFilesDropZone(input);
        });

        function getFilesTotalSize(files) {
            return files.reduce((sum, file) => sum + file.size, 0);
        }

        function bytesToMb(bytes, digits = 0) {
            return (bytes / 1024 / 1024).toFixed(digits);
        }

        function addFileError(type, file, errorText) {
            let errorFile = errorFiles[type].find(item => item.name === file.name);

            if (!errorFile) {
                errorFile = {
                    name: file.name,
                    errors: []
                };

                errorFiles[type].push(errorFile);
            }

            errorFile.errors.push(errorText);
        }

        function addFiles(input, files) {
            if (!files.length) return;

            const block = input.closest('.construstor__inputs-files-block');
            const type = block.dataset.filesType;
            errorFiles[type] = [];

            if (!uploadedFiles[type]) {
                uploadedFiles[type] = [];
            }

            const acceptedFiles = [];
            let totalSize = getFilesTotalSize(uploadedFiles[type]);

            Array.from(files).forEach(file => {
                const hasFreeSlot = uploadedFiles[type].length + acceptedFiles.length < MAX_FILES_COUNT;
                const fitsBySize = totalSize + file.size <= MAX_FILES_TOTAL_SIZE;

                if(hasFreeSlot && fitsBySize) {
                    acceptedFiles.push(file);
                    totalSize += file.size;
                } else {
                    if (!hasFreeSlot) {
                        addFileError(type, file, 'Изображение не соответствует требованиям: максимум 10 файлов');
                    }

                    if (!fitsBySize) {
                        addFileError(type, file, 'Изображение не соответствует требованиям: вес не более 10 Мб');
                    }
                }
            });

            if (!acceptedFiles.length) {
                return;
            }

            
            uploadedFiles[type].push(...acceptedFiles);
            renderFiles(input, type);
        }

        function initFilesDropZone(input) {
            const block = input.closest('.constructor__files-input-wrapper');
            if (!block) return;

            ['dragenter', 'dragover'].forEach(eventName => {
                block.addEventListener(eventName, function(e) {
                    e.preventDefault();
                    block.classList.add('drag-over');
                });
            });

            ['dragleave', 'drop'].forEach(eventName => {
                block.addEventListener(eventName, function(e) {
                    e.preventDefault();
                    block.classList.remove('drag-over');
                });
            });

            block.addEventListener('drop', function(e) {
                addFiles(input, e.dataTransfer.files);
            });
        }

        document.addEventListener('click', function(e) {
            const addMoreBtn = e.target.closest('.constructor__files-more');

            if (addMoreBtn) {
                const parent = addMoreBtn.closest('.construstor__inputs-files-block');
                const input = parent?.querySelector('input[type="file"]');

                input?.click();
                return;
            }

            const removeBtn = e.target.closest(
                '.constructor__files-remove'
            );

            if (!removeBtn) return;
            const parent = removeBtn.closest('.construstor__inputs-files-block');
            const type = parent.dataset.filesType;
            const index = Number(removeBtn.dataset.index);

            uploadedFiles[type].splice(index, 1);

            const input = parent.querySelector('input[type="file"]');
            renderFiles(input, type);
        });

        function renderFiles(input, type) {

            const block = input.closest('.construstor__inputs-files-block');

            const resultWrapper = block.querySelector(
                '.constructor__files-result-wrapper'
            );

            resultWrapper.innerHTML = '';

            uploadedFiles[type].forEach((file, index) => {

                const preview = document.createElement('div');
                preview.className = 'constructor__files-preview';

                const img = document.createElement('img');
                img.src = URL.createObjectURL(file);

                const removeBtn = document.createElement('button');
                removeBtn.type = 'button';
                removeBtn.className = 'constructor__files-remove';
                removeBtn.innerHTML = `<svg width="6" height="6" viewBox="0 0 6 6" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M5.72754 0.636719L3.5 2.86426L5.72754 5.0918L5.09082 5.72754L2.86328 3.5L0.635742 5.72754L0 5.0918L2.22754 2.86426L0 0.636719L0.635742 0L2.86328 2.22754L5.09082 0L5.72754 0.636719Z" fill="#FC7827"/>
                                        </svg>
                                        `;
                removeBtn.dataset.index = index;

                preview.append(img, removeBtn);

                resultWrapper.append(preview);
            });
            
            addMoreBtnAdd(resultWrapper);
            renderNotices(input, type, block);
            syncInputFiles(input, type);
        }

        function renderNotices(input, type, block) {
            const noticeInfo = block.querySelector('.info');
            const noticeErrors = block.querySelector('.errors');

            if(!noticeInfo && !noticeErrors) return;
            
            //очищаем все каждый раз 
            noticeInfo.innerHTML = '';
            noticeErrors.innerHTML = '';

            if(!uploadedFiles[type].length) return;

            //создаем записку
            let spanPhotos = document.createElement('span');
            spanPhotos.textContent = `${uploadedFiles[type].length}/${MAX_FILES_COUNT} фото`;
            let spanSizes = document.createElement('span');
            spanSizes.textContent = `${bytesToMb(getFilesTotalSize(uploadedFiles[type]))}/${bytesToMb(MAX_FILES_TOTAL_SIZE)} мб`;
            noticeInfo.append(spanPhotos, spanSizes);

            //создаем ошибки
            if(errorFiles[type].length) {
                Array.from(errorFiles[type]).forEach(file => {
                    let spanError = document.createElement('span');
                    spanError.textContent = file.name + ' ' + file.errors.join(', ');
                    noticeErrors.append(spanError);
                })
            }
        }

        function addMoreBtnAdd(resultWrapper) {
            const addMoreBtn = document.createElement('div');
            addMoreBtn.classList.add('constructor__files-preview', 'constructor__files-more');
            addMoreBtn.innerHTML = `<span><svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <g>
                                    <path d="M12.0039 4.25098C12.4181 4.25098 12.7539 4.58676 12.7539 5.00098V11.251H19.0039C19.4181 11.251 19.7539 11.5868 19.7539 12.001C19.7539 12.4152 19.4181 12.751 19.0039 12.751H12.7539V19.001C12.7539 19.4152 12.4181 19.751 12.0039 19.751C11.5897 19.751 11.2539 19.4152 11.2539 19.001V12.751H5.00391C4.58969 12.751 4.25391 12.4152 4.25391 12.001C4.25391 11.5868 4.58969 11.251 5.00391 11.251H11.2539V5.00098C11.2539 4.58676 11.5897 4.25098 12.0039 4.25098Z" fill="#FC7827"/>
                                    </g>
                                    </svg>
                                    </span>`;
            resultWrapper.append(addMoreBtn);
        }

        function syncInputFiles(input, type) {

            const dataTransfer = new DataTransfer();

            uploadedFiles[type].forEach(file => {
                dataTransfer.items.add(file);
            });

            input.files = dataTransfer.files;

            toggleFilesBlockState(input);
        }

        function toggleFilesBlockState(input) {
            const block = input.closest('.construstor__inputs-files-block');
            if (!block) return;

            const hasFiles = input.files.length > 0;
            const resultWrapper = block.querySelector('.constructor__files-result-wrapper');
            const inputWrapper = block.querySelector('.constructor__files-input-wrapper');
            const noticeWrapper = block.querySelector('.constructor__files-result-noties');

            inputWrapper?.classList.toggle('hidden', hasFiles);

            if (!hasFiles && resultWrapper && noticeWrapper) {
                resultWrapper.innerHTML = '';
            }
        }
    }
});
