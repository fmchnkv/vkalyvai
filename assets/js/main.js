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

                    if (id === 'sort' || id === 'time') {
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


                if (curChoiceBlock) {
                    curChoiceBlock.innerHTML = '';

                    curChoices.forEach(curChoice => {
                        setChoice(curChoice.dataset.value, curChoiceBlock);
                    });

                    if (curChoices.length) {
                        curChoiceBlock.classList.add('active');
                    } else {
                        curChoiceBlock.classList.remove('active');
                    }
                }

                let parent = multipleSelectOption.closest('.multiple-select');
                let id = parent.dataset.id;
                let tag = document.querySelectorAll(`.select__tag[data-id="${id}"]`);

                if (tag.length) {
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

                if (parent.classList.contains('multiple-select_chat')) {
                    if (curChoices.length > 1) {
                        parent.querySelector('.multiple-select__counter').textContent = '+' + (curChoices.length - 1);
                    } else {
                        if (curChoices.length === 1) {
                            parent.querySelector('.multiple-select__field').value = curChoices[0].querySelector('.multiple-select__title').textContent;
                        } else {
                            parent.querySelector('.multiple-select__field').value = '';
                        }
                        parent.querySelector('.multiple-select__counter').textContent = '';
                    }
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

                // ВВРЕМЕННОЕ
                if (['/pages/help.php', '/pages/faq.php'].includes(window.location.pathname)) {
                    const url = new URL(window.location.href);

                    if (tab === 'rezumes') {
                        url.searchParams.set('client', 'Y');
                    } else if (tab === 'vacancies') {
                        url.searchParams.delete('client');
                    }

                    window.location.href = url.toString();
                    return;
                }

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
    const overlay = document.querySelector('.overlay');

    if (burger && burgerMenu) {
        burger.addEventListener('click', (e) => {
            e.preventDefault();
            burgerMenu.classList.toggle('active');
            overlay.classList.toggle('active');
            burger.classList.toggle('active');
            document.body.classList.toggle('no-scroll');
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
    const breakpoint = window.matchMedia('(min-width: 1200px)');
    let philosophySlider;

    // if (philosophySliderElement) {
    //     philosophySlider = new Swiper(philosophySliderElement, {
    //         loop: false,
    //         observer: true,
    //         spaceBetween: 8,
    //         slidesPerView: 'auto',
    //         breakpoints: {
    //             1024: {
    //                 spaceBetween: 16,
    //             },
    //             1441: {
    //                 spaceBetween: 32,
    //             }
    //         }
    //     });
    // }


    const breakpointChecker = function () {
        if (breakpoint.matches === true) {
            // Если слайдер уже был создан — уничтожаем его
            if (philosophySlider !== undefined) {
                // true, true означает очистить инлайн-стили Swiper
                philosophySlider.destroy(true, true);
            }
            return;
        } else if (breakpoint.matches === false) {
            // Запускаем инициализацию заново
            return enableSwiper();
        }
    };

    const enableSwiper = function () {
        philosophySlider = new Swiper(philosophySliderElement, {
            loop: false,
            observer: true,
            spaceBetween: 8,
            slidesPerView: 'auto',
            breakpoints: {
                1024: {
                    spaceBetween: 16,
                },
                1441: {
                    spaceBetween: 32,
                }
            }
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
                } else if (id == 'rezumes_empty') {
                    url = '/ajax/rezumes-empty.php';
                } else if (id == 'vacancies_empty') {
                    url = '/ajax/vacancies-empty.php';
                }

                sendAjaxRequest(url, 2, 4, id);
            }
        });
    }

    async function sendAjaxRequest(url, page, perPage, id) {

        const data = {
            page: page,
            perPage: perPage,
            auth: new URLSearchParams(window.location.search).get('auth') || ''
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
            } else if(id == 'rezumes_empty') {
                urlAjax = '/ajax/rezumes-empty.php';
            } else if(id == 'vacancies_empty') {
                urlAjax = '/ajax/vacancies-empty.php';
            } else if(id == 'companies_empty') {
                urlAjax = '/ajax/companies-empty.php';
            }


            const response = await fetch(urlAjax, {
                method: 'POST',
                headers: {
                    'Content-Type': 'application/json', // Передаем JSON
                    'X-Requested-With': 'XMLHttpRequest' // Традиционный заголовок AJAX (необязательно)
                },
                body: JSON.stringify({
                    page: page,
                    perPage: 4,
                    auth: new URLSearchParams(window.location.search).get('auth') || ''
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
    //document.querySelectorAll('[data-call-modal]').forEach(button => {
        document.addEventListener('click', function (e) {
            const callModalBtn = e.target.closest('[data-call-modal]');
            if(!callModalBtn) return;
            e.preventDefault();

            let modal = document.querySelector(`.modal[data-modal="${callModalBtn.dataset.callModal}"]`);
            if (modal) {
                //ВРЕМЕННОЕ
                if (callModalBtn.dataset.callModal === 'favorite-comment') {
                    const favoriteMessage = modal.querySelector('[data-favorite-message]');
                    const favoriteCard = callModalBtn.closest(
                        '.lk-card, .detail, .offers-grid__item, .offers-list__item, .companies-grid__item'
                    );
                    const entityLink = favoriteCard?.querySelector(
                        'a[href*="company"], a[href*="rezume"], a[href*="resume"], a[href*="vacancy"]'
                    );
                    const currentPath = window.location.pathname;
                    const entitySource = /company|rezume|resume|vacancy/i.test(currentPath)
                        ? currentPath
                        : entityLink?.getAttribute('href') || '';
                    let entityMessage = 'Вакансия добавлена';

                    if (/company/i.test(entitySource)) {
                        entityMessage = 'Компания добавлена';
                    } else if (/rezume|resume/i.test(entitySource)) {
                        entityMessage = 'Резюме добавлено';
                    }

                    if (favoriteMessage) {
                        favoriteMessage.textContent = entityMessage;
                    }
                }

                modal.classList.add('active');
            }
        })
    //});

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
                currentMask = new Inputmask({ mask: '+7 (999) 999-99-99' });
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
                currentMask = new Inputmask({ mask: '999999999999' });
                currentMask.mask(contactInput);
                contactInput.type = 'text';
                contactInput.placeholder = '999999999999';
                break;

            case 'number':
                const numberMaskOptions = {
                    alias: 'numeric',
                    digits: 0,
                    allowMinus: false,
                    rightAlign: false,
                };

                if (contactInput.dataset.max) {
                    numberMaskOptions.max = Number(contactInput.dataset.max);
                }

                currentMask = new Inputmask(numberMaskOptions);
                currentMask.mask(contactInput);
                break;

            case 'password':
                currentMask = new Inputmask({ mask: '******************' });
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

    if (radios) {
        radios.forEach(r => r.addEventListener('change', (e) => {
            if (e.target.value) applyMaskFor(contactInput, e.target.value);
        }));
    }

    if (maskInputs) {
        maskInputs.forEach(input => {
            applyMaskFor(input, input.dataset.mask);
        });
    }

    //отображение и скрытие пароля
    if (passwordWrappers) {
        passwordWrappers.forEach(wrapper => {
            let input = wrapper.querySelector('input');
            let btnShow = wrapper.querySelector('button');

            if (input && btnShow) {
                //const originalType = input.type;

                btnShow.addEventListener('click', function (e) {
                    e.preventDefault();

                    if (input.type == 'text') {
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

    if (lkForms) {
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

                if (action === 'remove' && input.matches('[data-auto-resize]')) {
                    input.style.height = '';
                    input.style.overflowY = '';
                }
            }

            editBtn.addEventListener('click', function (e) {
                e.preventDefault();
                addClasses('add');

                if (input.matches('[data-auto-resize]')) {
                    resizeAutoHeightField(input);
                }
            })

            saveBtn.addEventListener('click', function (e) {
                e.preventDefault();

                if (input.value) {
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

    function getFlexItemWidth(wrapper, itemsCount) {
        const gap = parseFloat(getComputedStyle(wrapper).columnGap) || 0;
        const gapsWidth = gap * (itemsCount - 1);

        return `calc((100% - ${gapsWidth}px) / ${itemsCount})`;
    }

    //=========КОНСТРУКТОР=========//

    function initHintsSlider(context = document) {
        if (window.innerWidth >= 768) return;

        const sliders = context.querySelectorAll('.constructor__hints-wrapper');

        sliders.forEach(slider => {
            if (slider.swiper) return;

            new Swiper(slider, {
                slidesPerView: 1.2,
                spaceBetween: 4,
            });
        });
    }
    initHintsSlider();

    //форма-конструктор резюме
    const constructorSteps = document.querySelectorAll('[data-form]');
    const addBlockBtns = document.querySelectorAll('button[data-add-block]');
    const removeBlockBtns = document.querySelectorAll('button[data-remove-block]');
    const helperForms = document.querySelectorAll('[data-block]');
    const progressWrappers = document.querySelectorAll('.constructor__steps');

    function setProgressStepWidth() {
        progressWrappers.forEach(wrapper => {
            const steps = wrapper.querySelectorAll('.progress-step');
            if (!steps.length) return;

            const stepWidth = getFlexItemWidth(wrapper, steps.length);

            steps.forEach(step => {
                step.style.width = stepWidth;
            });
        });
    }

    setProgressStepWidth();
    window.addEventListener('resize', setProgressStepWidth);
    if (constructorSteps.length) {
        function changeStep(stepNumber) {
            const targetForm = document.querySelector(
                `[data-form="${stepNumber}"]`
            );
            const targetHelperForm = document.querySelector(
                `[data-block="${stepNumber}"]`
            );

            constructorSteps.forEach(form => {
                form.classList.remove('active');
            });
            if (helperForms.length) {
                helperForms.forEach(form => {
                    form.classList.remove('active');
                })
            }

            document.querySelector('h1').textContent = targetForm.dataset.title;
            if (targetHelperForm) {
                targetHelperForm.classList.add('active');
            }
            document.querySelectorAll('.progress-step').forEach(step => {
                step.classList.toggle(
                    'active',
                    Number(step.dataset.step) <= stepNumber
                );
            });


            let newStep = document.querySelector(`[data-form="${stepNumber}"]`);

            if (!newStep) return;

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

            if (btnNext) {
                btnNext.addEventListener('click', function (e) {
                    e.preventDefault();
                    const nextStep = Number(this.dataset.nextStep);
                    if (nextStep) {
                        changeStep(nextStep);
                    } else {
                        //stepForm.submit();
                    }
                });
            }

            if (stepPrev) {
                stepPrev.addEventListener('click', function (e) {
                    e.preventDefault();
                    const prevStep = Number(this.dataset.prevStep);
                    changeStep(prevStep);
                });
            }
        });

        //кнопка добавления блока полей
        if (addBlockBtns) {
            addBlockBtns.forEach(btn => {
                btn.addEventListener('click', function (e) {
                    e.preventDefault();
                    if (this.dataset.addBlock) {
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

        //кнопка удаления блока полей
        if (removeBlockBtns.length) {
            document.addEventListener('click', function (e) {
                const removeBtn = e.target.closest('button[data-remove-block]');

                if (removeBtn) {
                    e.preventDefault();
                    const addedBlock = removeBtn.closest('.template-element');
                    if (addedBlock) {
                        addedBlock.remove();
                    }
                }
            })
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
            document.addEventListener('click', function (e) {

                // Добавить навык
                const addSkill = e.target.closest('.add-skill');

                if (addSkill) {
                    const skillsBlock = addSkill.closest('.skills-block');
                    const selectedContainer =
                        skillsBlock.querySelector('.bright-bubbles');

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
                    const skillsBlock = skill.closest('.skills-block');

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

        //отслеживаем ввод в инпут поиска навыков
        const skillsInput = document.querySelector('input[name=vacancy-search-skill]');

        if (skillsInput) {
            skillsInput.addEventListener('input', function (e) {
                const value = e.target.value;
                addClassSkills(value);
            })
        }

        //ВРЕМЕННАЯ. БУДЕМ ПОЛУЧАТЬ ЧЕРЕЗ АЯКС
        function addClassSkills(text) {
            const skills = document.querySelectorAll('.add-skill');
            const search = text.trim().toLowerCase();

            if (skills.length <= 0 || !search) return;

            skills.forEach(skill => {
                const skillText = skill.textContent.trim().toLowerCase();

                skill.classList.toggle(
                    'unshow',
                    search.length > 3 && !skillText.includes(search)
                );
            });
        }

        function initHints() {
            document.addEventListener('click', function (e) {
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
    }

    //файлы
    const uploadedFiles = {
        portfolio: [],
        certificates: [],
        noname: []
    };
    const errorFiles = {
        portfolio: [],
        certificates: [],
        noname: []
    };
    const MAX_FILES_TOTAL_SIZE = 10 * 1024 * 1024; // 10 МБ
    const MAX_FILES_COUNT = 10;
    const approveImagesBtn = document.querySelector('.approve-images');
    const imagesForm = approveImagesBtn?.closest('form');
    const attachedImages = document.querySelector(
        '.chats__dialog-attached-images'
    );

    document?.querySelectorAll('.files-input-wrapper input[type="file"]')?.forEach(input => {

        input.addEventListener('change', function () {
            const selectedFiles = Array.from(this.files);
            this.value = '';

            addFiles(this, selectedFiles);
        });

        initFilesDropZone(input);
    });

    document.addEventListener('click', function (e) {
        const rejectImagesBtn = e.target.closest('.reject-images');
        if (!rejectImagesBtn) return;

        const imagesForm = rejectImagesBtn.closest('form');
        if (!imagesForm) return;

        const input = imagesForm.querySelector('input[type="file"]');
        if (!input) return;
        cleanFilesWrappers(input);
        renderAttachedFiles([]);
    })

    imagesForm?.addEventListener('submit', function (e) {
        e.preventDefault();

        const filesBlock = imagesForm.closest('.inputs-files-block');
        const modal = imagesForm.closest('[data-modal-content]');
        if (!filesBlock || !modal) return;

        const files = uploadedFiles[filesBlock.dataset.filesType];
        if (!files?.length) return;

        renderAttachedFiles(files);
        closeChatContentModal(modal);
    })

    function renderAttachedFiles(files) {
        if (!attachedImages) return;

        renderFilePreviews(files, attachedImages, {
            showFakeMoreButton: true,
            showRemoveButton: true,
            showFakeRemoveButton: true,
        });
    }

    function closeChatContentModal(modal) {
        if (!modal) return;

        modal.classList.remove('showed');
        document.querySelector('.chats__dialog-body')?.classList.remove('hidden');
        document.querySelector('.chats__dialog-bottom')?.classList.remove('hidden');
    }

    function cleanFilesWrappers(input) {
        const block = input.closest('.inputs-files-block');
        if (!block) return;

        const type = block.dataset.filesType;
        uploadedFiles[type] = [];
        errorFiles[type] = [];

        renderFiles(input, type);
    }

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

        const block = input.closest('.inputs-files-block');
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

            if (hasFreeSlot && fitsBySize) {
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
            renderNotices(input, type, block);
            return;
        }


        uploadedFiles[type].push(...acceptedFiles);
        renderFiles(input, type);
    }

    function initFilesDropZone(input) {
        const block = input.closest('.files-input-wrapper');
        if (!block) return;

        ['dragenter', 'dragover'].forEach(eventName => {
            block.addEventListener(eventName, function (e) {
                e.preventDefault();
                block.classList.add('drag-over');
            });
        });

        ['dragleave', 'drop'].forEach(eventName => {
            block.addEventListener(eventName, function (e) {
                e.preventDefault();
                block.classList.remove('drag-over');
            });
        });

        block.addEventListener('drop', function (e) {
            addFiles(input, e.dataTransfer.files);
        });
    }

    document.addEventListener('click', function (e) {
        const addMoreBtn = e.target.closest('.files-more');

        if (addMoreBtn) {
            const parent = addMoreBtn.closest('.inputs-files-block');
            const input = parent?.querySelector('input[type="file"]');

            input?.click();
            return;
        }

        const removeBtn = e.target.closest(
            '.files-remove'
        );

        if (!removeBtn) return;
        const isAttachedPreview = removeBtn.dataset.fake === 'true';
        const parent = isAttachedPreview
            ? imagesForm?.closest('.inputs-files-block')
            : removeBtn.closest('.inputs-files-block');

        if (!parent) return;

        const type = parent.dataset.filesType;
        const index = Number(removeBtn.dataset.index);

        uploadedFiles[type].splice(index, 1);

        if (!uploadedFiles[type].length) {
            errorFiles[type] = [];
        }

        const input = parent.querySelector('input[type="file"]');
        if (!input) return;

        renderFiles(input, type);

        if (isAttachedPreview) {
            renderAttachedFiles(uploadedFiles[type]);
        }
    });

    function renderFiles(input, type) {

        const block = input.closest('.inputs-files-block');

        const resultWrapper = block.querySelector(
            '.files-result-wrapper'
        );

        renderFilePreviews(uploadedFiles[type], resultWrapper, {
            showRemoveButton: true,
            showAddMoreButton: true
        });
        renderNotices(input, type, block);
        syncInputFiles(input, type);
    }

    function renderFilePreviews(files, wrapper, options = {}) {
        const {
            showRemoveButton = false,
            showAddMoreButton = false,
            showFakeMoreButton = false,
            showFakeRemoveButton = false
        } = options;

        wrapper.innerHTML = '';

        files.forEach((file, index) => {
            wrapper.append(createFilePreview(file, index, showRemoveButton, showFakeRemoveButton));
        });

        if (showAddMoreButton) {
            addMoreBtn(wrapper, ['files-preview', 'files-more', 'more-picture']);
        }

        if (showFakeMoreButton && files.length) {
            addMoreBtn(wrapper, ['files-preview', 'files-more-fake', 'more-picture'], 'add_files');
        }
    }

    function createFilePreview(file, index, showRemoveButton, showFakeRemoveButton) {
        const isImage = file.type.startsWith('image/');
        const isDocument = ['application/pdf', 'application/msword', 'application/vnd.openxmlformats-officedocument.wordprocessingml.document'].includes(file.type) || /\.(pdf|doc|docx)$/i.test(file.name);
        const preview = document.createElement('div');
        preview.className = 'files-preview';

        if (isImage) {
            const img = document.createElement('img');
            const previewUrl = URL.createObjectURL(file);

            const revokePreviewUrl = () => {
                URL.revokeObjectURL(previewUrl);
                img.removeEventListener('load', revokePreviewUrl);
                img.removeEventListener('error', revokePreviewUrl);
            };

            img.addEventListener('load', revokePreviewUrl);
            img.addEventListener('error', revokePreviewUrl);
            img.src = previewUrl;
            preview.append(img);
        } else if (isDocument) {
            const documentPreview = document.createElement('div');
            documentPreview.textContent = file.name.split('.').pop().toLowerCase();
            preview.append(documentPreview);
        }

        if (showRemoveButton) {
            const removeBtn = document.createElement('button');
            if (showFakeRemoveButton) {
                removeBtn.setAttribute('data-fake', 'true');
            }
            removeBtn.type = 'button';
            removeBtn.className = 'files-remove';
            removeBtn.dataset.index = index;
            removeBtn.innerHTML = `<svg width="6" height="6" viewBox="0 0 6 6" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M5.72754 0.636719L3.5 2.86426L5.72754 5.0918L5.09082 5.72754L2.86328 3.5L0.635742 5.72754L0 5.0918L2.22754 2.86426L0 0.636719L0.635742 0L2.86328 2.22754L5.09082 0L5.72754 0.636719Z" fill="#FC7827"/>
                                    </svg>`;
            preview.append(removeBtn);
        }

        return preview;
    }

    function renderNotices(input, type, block) {
        const noticeInfo = block.querySelector('.info');
        const noticeErrors = block.querySelector('.errors');

        if (!noticeInfo && !noticeErrors) return;

        if (noticeInfo) {
            noticeInfo.innerHTML = '';

            if (uploadedFiles[type].length) {
                const spanPhotos = document.createElement('span');
                spanPhotos.textContent = `${uploadedFiles[type].length}/${MAX_FILES_COUNT} фото`;

                const spanSizes = document.createElement('span');
                spanSizes.textContent = `${bytesToMb(getFilesTotalSize(uploadedFiles[type]))}/${bytesToMb(MAX_FILES_TOTAL_SIZE)} мб`;

                noticeInfo.append(spanPhotos, spanSizes);
            }
        }

        if (noticeErrors) {
            noticeErrors.innerHTML = '';

            errorFiles[type].forEach(file => {
                const spanError = document.createElement('span');
                spanError.textContent = file.name + ' ' + file.errors.join(', ');
                noticeErrors.append(spanError);
            });
        }
    }

    function addMoreBtn(resultWrapper, classes = [], data = false) {
        const button = document.createElement('div');
        if (classes.length > 0) {
            classes.forEach(classCss => {
                button.classList.add(classCss);
            });
        }
        if (data) {
            button.setAttribute('data-dialog-modal', data);
        }
        button.innerHTML = `<span><svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <g>
                                    <path d="M12.0039 4.25098C12.4181 4.25098 12.7539 4.58676 12.7539 5.00098V11.251H19.0039C19.4181 11.251 19.7539 11.5868 19.7539 12.001C19.7539 12.4152 19.4181 12.751 19.0039 12.751H12.7539V19.001C12.7539 19.4152 12.4181 19.751 12.0039 19.751C11.5897 19.751 11.2539 19.4152 11.2539 19.001V12.751H5.00391C4.58969 12.751 4.25391 12.4152 4.25391 12.001C4.25391 11.5868 4.58969 11.251 5.00391 11.251H11.2539V5.00098C11.2539 4.58676 11.5897 4.25098 12.0039 4.25098Z" fill="#FC7827"/>
                                    </g>
                                    </svg>
                                    </span>`;
        resultWrapper.append(button);
    }

    function syncInputFiles(input, type) {

        const dataTransfer = new DataTransfer();

        uploadedFiles[type].forEach(file => {
            dataTransfer.items.add(file);
        });

        input.files = dataTransfer.files;

        console.log('Файлы в input:', Array.from(input.files));

        toggleFilesBlockState(input);
    }

    function toggleFilesBlockState(input) {
        const block = input.closest('.inputs-files-block');
        if (!block) return;

        const hasFiles = input.files.length > 0;
        const resultWrapper = block.querySelector('.files-result-wrapper');
        const inputWrapper = block.querySelector('.files-input-wrapper');
        const noticeWrapper = block.querySelector('.files-result-noties');

        inputWrapper?.classList.toggle('hidden', hasFiles);

        if (!hasFiles && resultWrapper && noticeWrapper) {
            resultWrapper.innerHTML = '';
        }
    }

    //сортировка в ЛК (временное)
    const groupBtns = document.querySelectorAll('[data-group]');

    if (groupBtns.length) {
        groupBtns.forEach(btn => {
            btn.addEventListener('click', function (e) {
                e.preventDefault();
                showElements(Number(btn.dataset.group));
            })
        })

        function showElements(elementsCount) {
            const elements = document.querySelectorAll('.lk-card');

            elements.forEach((element, index) => {
                element.classList.toggle('hidden', index >= elementsCount);
            });
        }
    }


    // Переключение ховера на О Нас
    const featuresTabs = document.querySelectorAll('.about-features__tab');

    if (featuresTabs.length) {
        featuresTabs.forEach((tab) => {
            tab.addEventListener('mouseenter', () => {
                tab.closest('.about-features__tabs').querySelectorAll('.about-features__tab').forEach((el) => {
                    el.classList.remove('active');
                });

                tab.classList.add('active');
            });
        });
    }


    //ВРЕМЕННОЕ - подменяем карточку/статус при отмене выбора
    const responcesActionBtn = document.querySelectorAll('[data-dropdown-btn]');

    if (responcesActionBtn.length) {
        const RESPONSE_STATUS = {
            approve: {
                cardClass: 'card-approve',
                stateClass: 'publish',
                stateText: 'Приглашение',
                placeholder: 'Приглашение',
                nextAction: 'reject',
                nextActionText: 'Отказать',
            },
            reject: {
                cardClass: 'card-reject',
                stateClass: 'blocked',
                stateText: 'Отказ',
                placeholder: 'Отказ',
                nextAction: 'approve',
                nextActionText: 'Пригласить',
            },
        };

        document.addEventListener('click', function (e) {
            const actionBtn = e.target.closest('[data-dropdown-btn]');
            if (!actionBtn) return;

            const cardWrapper = actionBtn.closest('.employer__card-data-wrapper');
            if (!cardWrapper) return;

            e.preventDefault();

            const action = actionBtn.dataset.dropdownBtn;

            if (action === 'cancel') {
                resetResponseCard(cardWrapper);
                return;
            }

            if (RESPONSE_STATUS[action]) {
                setResponseCardStatus(cardWrapper, RESPONSE_STATUS[action]);
            }
        });

        function resetResponseCard(cardWrapper) {
            const template = document.getElementById('employer-responces-card-template');
            if (!template) return;

            const clone = template.content.firstElementChild.cloneNode(true);

            if (clone.classList.contains('employer__card-data-wrapper')) {
                cardWrapper.replaceWith(clone);
                return;
            }

            cardWrapper.innerHTML = '';
            cardWrapper.append(clone);
        }

        function setResponseCardStatus(cardWrapper, status) {
            const card = cardWrapper.querySelector('.employer__responces-item');
            const state = cardWrapper.querySelector('.state');

            if (!card || !state) return;

            card.classList.remove('card-approve', 'card-reject', 'card-viewed', 'card-viewed-not');
            card.classList.add(status.cardClass);

            state.textContent = status.stateText;
            state.classList.remove('publish', 'blocked', 'neutral', 'neutral_see');
            state.classList.add(status.stateClass);

            updateResponseActionControls(cardWrapper, status);
        }

        function updateResponseActionControls(cardWrapper, status) {
            cardWrapper.querySelectorAll('.approved-select_btns .input__field').forEach(input => {
                input.placeholder = status.placeholder;
            });

            cardWrapper.querySelectorAll('[data-dropdown-btn="approve"], [data-dropdown-btn="reject"]').forEach(actionBtn => {
                actionBtn.dataset.dropdownBtn = status.nextAction;

                const text = actionBtn.querySelector('span');
                if (text) text.textContent = status.nextActionText;
            });

            cardWrapper.querySelector('.approved-select_btns.active')?.classList.remove('active');
            cardWrapper.querySelector('.modal.active')?.classList.remove('active');
        }
    }

    //ширина пунктов мобильного сайдбара
    const points = document.querySelectorAll('.auth-mobile-menu__item');
    const pointsWrapper = document.querySelector('.auth-mobile-menu__row');

    if (points.length && pointsWrapper) {
        const pointWidth = getFlexItemWidth(pointsWrapper, points.length);

        points.forEach(point => {
            point.style.width = pointWidth;
        });
    }

    //чаты - клик на карточку (временное)

    document.querySelectorAll('.chats-card')?.forEach(card => {
        card?.addEventListener('click', function () {
            document.querySelectorAll('.chats-card')?.forEach(card => {
                card.classList.remove('active');
            });
            this.classList.add('active');
            document.querySelector('.chats')?.classList?.add('is-open');
        })
    })

    //клик на кнопку назад для возврата к чатам (временное)
    document.addEventListener('click', function (e) {
        const backBtn = e.target.closest('.chats__dialog-back');
        if (!backBtn) return;


        document.querySelector('.chats')?.classList?.remove('is-open');
    })

    // действия с сообщением по долгому нажатию на мобилке (временное)
    const messageActionsModal = document.querySelector('[data-modal="message-actions"]');
    const messageDeleteModal = document.querySelector('[data-modal="message-delete"]');
    const mobileChatMedia = window.matchMedia('(max-width: 1280px)');
    let activeMessageWrapper = null;

    if (messageActionsModal || messageDeleteModal) {
        let pressedMessageWrapper = null;
        let longPressTimer = null;
        let pointerStart = null;
        let longPressTriggered = false;
        const longPressDelay = 500;
        const moveTolerance = 10;

        const clearLongPress = () => {
            window.clearTimeout(longPressTimer);
            longPressTimer = null;
            pointerStart = null;
        };

        document.addEventListener('pointerdown', (e) => {
            const message = e.target.closest('.dialog__messages-item.myself-message, .dialog__messages-item.companion-message');

            if (!message || !mobileChatMedia.matches || e.pointerType === 'mouse') return;

            const targetModal = message.classList.contains('companion-message')
                ? messageDeleteModal
                : messageActionsModal;

            if (!targetModal) return;

            pressedMessageWrapper = message.closest('.dialog__messages-wrapper');
            pointerStart = { x: e.clientX, y: e.clientY, pointerId: e.pointerId };
            longPressTriggered = false;

            longPressTimer = window.setTimeout(() => {
                longPressTriggered = true;
                activeMessageWrapper = pressedMessageWrapper;
                targetModal.classList.add('active');
                targetModal.querySelector('[data-message-action]')?.focus();
            }, longPressDelay);
        });

        document.addEventListener('pointermove', (e) => {
            if (!pointerStart || e.pointerId !== pointerStart.pointerId) return;

            const movedX = Math.abs(e.clientX - pointerStart.x);
            const movedY = Math.abs(e.clientY - pointerStart.y);

            if (movedX > moveTolerance || movedY > moveTolerance) clearLongPress();
        });

        ['pointerup', 'pointercancel'].forEach(eventName => {
            document.addEventListener(eventName, () => {
                clearLongPress();

                if (longPressTriggered) {
                    window.setTimeout(() => {
                        longPressTriggered = false;
                    }, 0);
                }
            });
        });

        document.addEventListener('click', (e) => {
            if (longPressTriggered && !e.target.closest('.chats__message-actions-modal .modal__wrapper')) {
                e.preventDefault();
                e.stopImmediatePropagation();
                longPressTriggered = false;
            }
        }, true);
    }

    //специальные блоки в чатах
    document.addEventListener('click', function (e) {
        const chatBody = document.querySelector('.chats__dialog-body');
        const chatFooter = document.querySelector('.chats__dialog-bottom');
        if (!chatBody || !chatFooter) return;

        const chatsChangeBlockBtn = e.target.closest('[data-dialog-modal]');
        const closeModalBtn = e.target.closest('[data-close-modal]');

        if (chatsChangeBlockBtn) {
            e.preventDefault();

            const modal = document.querySelector(`[data-modal-content="${chatsChangeBlockBtn.dataset.dialogModal}"]`);
            if (!modal) return;

            if (chatsChangeBlockBtn.dataset.action) {
                document.querySelectorAll('[data-choise]')?.forEach(item => {
                    item.classList.remove('active');
                })
                let modalState = modal.querySelector(`[data-choise="${chatsChangeBlockBtn.dataset.action}"]`);
                let input = modal.querySelector('input');

                if (input && modalState) {
                    modalState.classList.add('active');
                    input.value = modalState.dataset.value;
                }
            }

            chatBody.classList.add('hidden');
            chatFooter.classList.add('hidden');
            modal.classList.add('showed');
        }

        if (closeModalBtn) {
            e.preventDefault();

            const modal = closeModalBtn.closest('[data-modal-content]');
            if (!modal) return;

            closeChatContentModal(modal);
        }
    })


    //смена статуса резюме из чата (ВРЕМЕННОЕ)
    const changeStateBtn = document.querySelector('[data-change-state]');
    if (changeStateBtn) {
        const changeStateForm = changeStateBtn.closest('form');

        if (changeStateForm) {
            changeStateForm.addEventListener('submit', function (e) {
                e.preventDefault();

                const btnsWrapper = document.querySelector('.dialog-btns');
                const input = changeStateForm.querySelector('input[name="choise"]');
                const modal = changeStateForm.closest('[data-modal-content]');

                if (!btnsWrapper || !input) return;

                const states = {
                    'Приглашение': {
                        text: 'Приглашение',
                        action: 'reject',
                        classCss: 'approve',
                        btnTxt: 'Отказать',
                    },
                    'Отказ': {
                        text: 'Отказ',
                        action: 'approve',
                        classCss: 'reject',
                        btnTxt: 'Пригласить',
                    },
                };
                const state = states[input.value];

                if (!state) return;

                const { text, action, classCss, btnTxt } = state;

                btnsWrapper.innerHTML = `<div class="select ${classCss} approved-select_btns desk-elem" data-id="approved_btns">
                        <label class="filter-group__input select__input input input_has-icon">
                            <input class="input__field" type="text" name="approved_state" data-id="approved_btns"
                                readonly="" placeholder="${text}">
                            <span class="input__icon">
                                <svg width="20" height="20" viewBox="0 0 24 24" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <g>
                                        <path fill-rule="evenodd" clip-rule="evenodd"
                                            d="M17.4736 8.97065C17.7665 8.67775 18.2412 8.67775 18.5341 8.97065C18.827 9.26354 18.827 9.73832 18.5341 10.0312L12.5341 16.0312C12.2595 16.3058 11.8248 16.3232 11.5302 16.083L11.4736 16.0312L5.47358 10.0312C5.18068 9.7383 5.18068 9.26354 5.47358 8.97065C5.76647 8.67775 6.24123 8.67775 6.53412 8.97065L12.0038 14.4404L17.4736 8.97065Z"
                                            fill="#232323"></path>
                                    </g>
                                    <defs>
                                        <clipPath>
                                            <rect width="24" height="24" fill="white"></rect>
                                        </clipPath>
                                    </defs>
                                </svg>
                            </span>
                        </label>

                        <div class="select__dropdown">
                            <ul class="select__dropdown-list" data-id="approved_btns">
                                <li data-dialog-modal="invite" data-action="${action}" class="btn btn_primary btn_size-s lk__btn_has-icon">
                                    <svg width="16" height="16" viewBox="0 0 16 16" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M11.8232 5.03125L8.85254 8.00098L11.8232 10.9707L10.9746 11.8193L8.00488 8.84961L5.03418 11.8193L4.18652 10.9707L7.15625 8.00098L4.18652 5.03125L5.03418 4.18262L8.00488 7.15234L10.9746 4.18262L11.8232 5.03125Z"
                                            fill="white" />
                                        <defs>
                                            <clipPath>
                                                <rect width="16" height="16" fill="white" />
                                            </clipPath>
                                        </defs>
                                    </svg>
                                    <span>${btnTxt}</span>
                                </li>
                                <li data-close-status-select class="btn btn_light btn_size-s">
                                    <span>Отменить</span>
                                </li>
                            </ul>
                        </div>
                    </div>`;

                const statusSelect = btnsWrapper.querySelector('.select');
                const statusSelectInput = statusSelect?.querySelector('.select__input');
                const closeStatusSelect = statusSelect?.querySelector('[data-close-status-select]');

                statusSelectInput?.addEventListener('click', function (event) {
                    event.preventDefault();
                    statusSelect.classList.toggle('active');
                });

                closeStatusSelect?.addEventListener('click', function () {
                    statusSelect.classList.remove('active');
                });

                closeChatContentModal(modal);
            })
        }
    }


    //редактировать сообщение (ВРЕМЕННОЕ)
    const messageForm = document.querySelector('.dialog__form');
    const messageInput = messageForm?.querySelector('[name="message"]');
    const messageSubmitBtn = messageForm?.querySelector('.inline-form__btn');
    const messageSubmitIcon = messageSubmitBtn?.innerHTML;
    let editingMessageWrapper = null;

    document.addEventListener('click', function (e) {
        const editMessageBtn = e.target.closest('.message-item__button--edit');

        if (!editMessageBtn || !messageInput || !messageSubmitBtn) return;

        const messageWrapper = editMessageBtn.closest('.dialog__messages-wrapper') || activeMessageWrapper;
        const messageText = messageWrapper?.querySelector('.dialog__messages-item .text');
        const text = messageText?.textContent.replace(/\s+/g, ' ').trim();

        if (!messageWrapper || !messageText || !text) return;

        editingMessageWrapper = messageWrapper;
        showEditedMessage(text);
        messageInput.value = text;
        resizeAutoHeightField(messageInput);
        messageSubmitBtn.innerHTML = `<svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path d="M14.8981 5.75747C15.2884 5.36709 15.9215 5.36751 16.3121 5.75747C16.7026 6.14786 16.7033 6.78094 16.3131 7.17153L9.24281 14.2428C9.05533 14.4303 8.80092 14.5357 8.53577 14.5358C8.27068 14.5357 8.0162 14.4303 7.82874 14.2428L4.29261 10.7077C3.90255 10.3172 3.90237 9.684 4.29261 9.2936C4.683 8.90324 5.31612 8.9035 5.70667 9.2936L8.5348 12.1217L14.8981 5.75747Z" fill="white"/>
        </svg>`;

        messageActionsModal?.classList.remove('active');
        document.body.classList.remove('no-scroll');
        messageInput.focus();
    })

    messageForm?.addEventListener('submit', function (e) {
        if (!editingMessageWrapper || !messageInput || !messageSubmitBtn) return;

        e.preventDefault();

        const messageText = editingMessageWrapper.querySelector('.dialog__messages-item .text');
        const text = messageInput.value.trim();

        if (!messageText || !text) return;

        messageText.textContent = text;
        messageInput.value = '';
        showEditedMessage();
        resizeAutoHeightField(messageInput);
        messageSubmitBtn.innerHTML = messageSubmitIcon;
        editingMessageWrapper = null;
        activeMessageWrapper = null;
    });

    document.addEventListener('click', function (e) {
        const cancelEditBtn = e.target.closest('.edit-cancel');

        if (cancelEditBtn) {
            messageInput.value = '';
            showEditedMessage();
            resizeAutoHeightField(messageInput);
            messageSubmitBtn.innerHTML = messageSubmitIcon;
        }

    })

    function showEditedMessage(text) {
        let editedMessage = document.querySelector('.chats__dialog-edited-message');
        if (!editedMessage) return;

        if (text == null || text.trim() === '') {
            editedMessage.innerHTML = '';
            return;
        }

        let messageWrapper = document.createElement('div');
        let textMessage = document.createElement('div');
        let messageTitle = document.createElement('span');
        let messageText = document.createElement('p');
        let messageBtn = document.createElement('button');

        messageWrapper.classList.add('edited-message__wrapper');
        textMessage.classList.add('edited-message__wrapper-text');
        messageTitle.textContent = 'Редактируемое сообщение';
        messageText.textContent = text;
        messageBtn.classList.add('edit-cancel');
        messageBtn.innerHTML = `<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"><g clip-path="url(#clip0_8002_19632)"><path d="M17.7363 7.5459L13.2812 12.001L17.7363 16.4561L16.4639 17.7285L12.0088 13.2734L7.55371 17.7285L6.28125 16.4561L10.7363 12.001L6.28125 7.5459L7.55371 6.27344L12.0088 10.7285L16.4639 6.27344L17.7363 7.5459Z" fill="#999999"/></g></svg>`;

        textMessage.append(messageTitle);
        textMessage.append(messageText);

        messageWrapper.append(textMessage);
        messageWrapper.append(messageBtn);

        editedMessage.append(messageWrapper);
    }

    // Автоматическая высота многострочных полей
    function resizeAutoHeightField(field) {
        if (!field) return;

        field.style.height = 'auto';

        const maxHeight = parseFloat(getComputedStyle(field).maxHeight);
        const hasMaxHeight = Number.isFinite(maxHeight);
        const height = hasMaxHeight
            ? Math.min(field.scrollHeight, maxHeight)
            : field.scrollHeight;

        field.style.height = `${height}px`;
        field.style.overflowY = hasMaxHeight && field.scrollHeight > maxHeight ? 'auto' : 'hidden';
    }

    document.addEventListener('input', function (e) {
        const field = e.target.closest('[data-auto-resize]');
        if (!field) return;

        resizeAutoHeightField(field);
    });

    window.addEventListener('resize', function () {
        if (!document.querySelectorAll('.auth-reg__input [data-auto-resize]').length) return;
        document.querySelectorAll('.auth-reg__input [data-auto-resize]').forEach(field => {
            resizeAutoHeightField(field);
        });
    });

    if (document.querySelectorAll('.auth-reg__input [data-auto-resize]').length) {
        document.querySelectorAll('.auth-reg__input [data-auto-resize]').forEach(field => {
            resizeAutoHeightField(field);
        });
    };

    //ВРЕМЕННАЯ ФИЛЬТРАЦИЯ ЧАТОВ
    let activeMessagesFilter = document.querySelector('[data-messages].active')?.dataset.messages || 'all';
    let activeStateFilter = document.querySelector('[data-filter].active')?.dataset.filter || 'all';

    document.addEventListener('click', function (e) {
        const chatsForMessages = e.target.closest('[data-messages]');
        const chatsForState = e.target.closest('[data-filter]');
        const filterItems = document.querySelectorAll('[data-viewed]');

        if (!chatsForMessages && !chatsForState) return;

        if (chatsForMessages) {
            const tabs = chatsForMessages.closest('.tabs');

            tabs?.querySelectorAll('.tab').forEach(tab => {
                tab.classList.remove('active');
            });
            chatsForMessages.classList.add('active');

            activeMessagesFilter = chatsForMessages.dataset.messages;
        }

        if (chatsForState) {
            const tabs = chatsForState.closest('.tabs');

            tabs?.querySelectorAll('.tab').forEach(tab => {
                tab.classList.remove('active');
            });
            chatsForState.classList.add('active');

            activeStateFilter = chatsForState.dataset.filter;
        }

        filterItems.forEach(item => {
            const matchesMessages = activeMessagesFilter === 'all'
                || item.dataset.viewed === activeMessagesFilter;
            const matchesState = activeStateFilter === 'all'
                || item.dataset.sorted === activeStateFilter;

            item.classList.toggle('unvisible', !matchesMessages || !matchesState);
        });
    })

    const moderationTooltipTriggers = document.querySelectorAll('[data-moderation-tooltip]');
    if (moderationTooltipTriggers.length && typeof tippy === 'function') {
        tippy(moderationTooltipTriggers, {
            content(reference) {
                const template = reference
                    .closest('.deals-item__status-wrapper')
                    ?.querySelector('.moderation-tooltip__template');

                return template?.content.firstElementChild?.cloneNode(true) || '';
            },
            interactive: true,
            placement: 'top',
            offset: [0, 6],
            maxWidth: 320,
            animation: 'scale',
            theme: 'moderation',
            hideOnClick: true,
        });
    }

    //переключение способа указания оплаты в форме вакансии
    const paymentTypeInputs = document.querySelectorAll('input[name="payment_amount_type"]');
    const paymentRangeField = document.querySelector('[data-payment-field="range"]');
    const paymentExactField = document.querySelector('[data-payment-field="exact"]');

    if (paymentTypeInputs.length && paymentRangeField && paymentExactField) {
        function togglePaymentFields(clearValues = false) {
            const selectedPaymentType = document.querySelector('input[name="payment_amount_type"]:checked');
            const isRange = selectedPaymentType && selectedPaymentType.value === 'range';
            const isExact = selectedPaymentType && selectedPaymentType.value === 'exact';

            paymentRangeField.classList.toggle('hidden', !isRange);
            paymentExactField.classList.toggle('hidden', !isExact);

            paymentRangeField.querySelectorAll('input').forEach(function (input) {
                input.disabled = !isRange;

                if (clearValues || !isRange) {
                    input.value = '';
                }
            });
            paymentExactField.querySelectorAll('input').forEach(function (input) {
                input.disabled = !isExact;

                if (clearValues || !isExact) {
                    input.value = '';
                }
            });
        }

        paymentTypeInputs.forEach(function (input) {
            input.addEventListener('change', function () {
                togglePaymentFields(true);
            });
        });

        togglePaymentFields();
    }

    //поле произвольного количества рабочих часов
    const workHoursInputs = document.querySelectorAll('input[name="work_hours"]');
    const customWorkHoursField = document.querySelector('[data-work-hours-field="other"]');

    if (workHoursInputs.length && customWorkHoursField) {
        function toggleCustomWorkHoursField() {
            const selectedWorkHours = document.querySelector('input[name="work_hours"]:checked');
            const isOther = selectedWorkHours && selectedWorkHours.value === 'other';
            const customWorkHoursInput = customWorkHoursField.querySelector('input');

            customWorkHoursField.classList.toggle('hidden', !isOther);

            if (customWorkHoursInput) {
                customWorkHoursInput.disabled = !isOther;

                if (!isOther) {
                    customWorkHoursInput.value = '';
                }
            }
        }

        workHoursInputs.forEach(function (input) {
            input.addEventListener('change', toggleCustomWorkHoursField);
        });

        toggleCustomWorkHoursField();
    }

    //специальное поле "количество смен" в форме вакансий
    const employmentInputs = document.querySelectorAll('input[name="employment_type"]');
    const shiftField = document.querySelector('[data-employment-field="shift"]');
    const otherField = document.querySelector('[data-employment-field="other"]');

    if (employmentInputs.length && shiftField && otherField) {
        function toggleEmploymentFields(clearValues = false) {
            const selectedEmployment = document.querySelector('input[name="employment_type"]:checked');
            const isShift = selectedEmployment && selectedEmployment.value === 'rotational';
            const isOther = selectedEmployment && selectedEmployment.value !== 'rotational';

            shiftField.hidden = !isShift;
            otherField.hidden = !isOther;

            shiftField.querySelectorAll('input').forEach(function (input) {
                input.disabled = !isShift;

                if (clearValues || !isShift) {
                    input.checked = false;
                }
            });
            otherField.querySelectorAll('input').forEach(function (input) {
                input.disabled = !isOther;

                if (clearValues || !isOther) {
                    input.value = '';
                }
            });
        }

        employmentInputs.forEach(function (input) {
            input.addEventListener('change', function () {
                toggleEmploymentFields(true);
            });
        });

        toggleEmploymentFields();
    }

    /* Документы в модалке */
    document.addEventListener("click", async (event) => {
        let button = event.target.closest("[data-doc]");
        let downloadButton = event.target.closest(".btn--download") || event.target.closest(".btn--delete");

        if (!button || downloadButton) {
            return;
        }

        event.preventDefault();


        const fileUrl = button.dataset.doc;
        const extension = fileUrl
            .split("?")[0]
            .split(".")
            .pop()
            .toLowerCase();

        const container = document.querySelector("#docx-container");

        if (!container) {
            return;
        }

        const modal = container.closest(".modal");

        container.replaceChildren();

        modal.classList.add("active");

        try {
            if (extension === "pdf1") {
                const pdfjsLib = await import("/assets/js/pdf.mjs");

                console.log(pdfjsLib);

                pdfjsLib.GlobalWorkerOptions.workerSrc =
                    "/assets/js/pdf.worker.mjs";

                const pdf = await pdfjsLib.getDocument({
                    url: fileUrl
                }).promise;

                const pagesContainer = document.createElement("div");
                pagesContainer.className = "pdf-pages";
                container.appendChild(pagesContainer);

                for (
                    let pageNumber = 1;
                    pageNumber <= pdf.numPages;
                    pageNumber++
                ) {
                    const page = await pdf.getPage(pageNumber);
                    const originalViewport = page.getViewport({ scale: 1 });

                    const availableWidth = pagesContainer.clientWidth;
                    const scale = availableWidth / originalViewport.width;
                    const pixelRatio = window.devicePixelRatio || 1;

                    const renderViewport = page.getViewport({
                        scale: scale * pixelRatio
                    });

                    const canvas = document.createElement("canvas");
                    const context = canvas.getContext("2d");

                    canvas.width = Math.ceil(renderViewport.width);
                    canvas.height = Math.ceil(renderViewport.height);

                    canvas.style.width =
                        `${Math.ceil(originalViewport.width * scale)}px`;

                    canvas.style.height =
                        `${Math.ceil(originalViewport.height * scale)}px`;

                    pagesContainer.appendChild(canvas);

                    await page.render({
                        canvasContext: context,
                        viewport: renderViewport
                    }).promise;
                }

                return;
            }

            if (extension === "pdf") {
                const iframeElement = document.createElement("iframe");
                iframeElement.src = fileUrl;
                container.appendChild(iframeElement);

                return;
            }

            if (extension === "docx") {
                const response = await fetch(fileUrl);

                if (!response.ok) {
                    throw new Error(`Ошибка загрузки: ${response.status}`);
                }

                const file = await response.blob();

                await docx.renderAsync(file, container, container, {
                    breakPages: true,
                    renderHeaders: true,
                    renderFooters: true,
                    renderFootnotes: true
                });

                return;
            }

            container.textContent = "Предпросмотр этого формата не поддерживается";
        } catch (error) {
            console.error("Ошибка предпросмотра документа:", error);
            container.textContent = "Не удалось открыть документ";
        }
    });

    const otherInput = document.querySelector('input[data-other]');

    if(otherInput) {
        otherInput.addEventListener('change', function() {
            let inpClass = this.dataset.other;
            if(inpClass && inpClass !== '') {
                let dopInput = document.querySelector(`.${inpClass}`);

                if(dopInput) {
                    dopInput.querySelector('input').value = '';
                    dopInput.classList.toggle('hidden');
                }
            }
        })
    }

    /*
    const noHoverCards = document.querySelectorAll('.no-hover.offers-list__item');

    if(noHoverCards.length) {
        noHoverCards.forEach(card => {
            card.style = 'pointer-events: all';
        })
    }*/

    const shareModalBtns = document.querySelectorAll('.js-share-btn');

    if (shareModalBtns.length) {
        shareModalBtns.forEach(shareModalBtn => {
            shareModalBtn.addEventListener('click', (e) => {
                e.preventDefault();
                // copy link
                const link = shareModalBtn.dataset.link;
                navigator.clipboard.writeText(link);
                document.querySelector('.share-modal').classList.add('active');
                setTimeout(() => {
                    document.querySelector('.share-modal').classList.remove('active');
                }, 2000);
            });
        });
    }

    if (document.querySelector('[data-tippy-content]')) {
        tippy('[data-tippy-content]', {
            content: '[data-tippy-content]',
            arrow: false,
        });
    }

    const removeActionBtn = document.querySelector('.js-action-remove');

    if(removeActionBtn) {
        removeActionBtn.addEventListener('click', (e) => {
            e.preventDefault();
            e.target.closest('.modal').classList.remove('active');
        });
    }

    const fileInput = document.querySelector('.js-file-input');

    if (fileInput) {
        fileInput.addEventListener('change', (e) => {
            e.target.closest('.modal').classList.remove('active');
        });
    }
});
