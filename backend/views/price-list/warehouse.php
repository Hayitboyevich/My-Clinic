<div class="stock_container">
    <div class="stock_header">
        <h1>Склад</h1>
    </div>
    <div class="stock_content">
        <div class="stock_tabs">
            <div>
                <button id="tab1" class="active">Наличие на складе</button>
                <button id="tab2">Приход</button>
                <button id="tab3">Расход</button>
            </div>
        </div>
        <div id="content1" class="tab-content">
            <div>
                <button class="add-button" id="openModalBtnTab1" onclick="openModalForTab('myModalTab1')">Добавить +
                </button>
            </div>
            <div class="stock_filter">
                <div class="filter-container">
                    <div class="select-container">
                        <img src="/img/warehouse/s-Filter.svg" alt="Filter Icon" class="filter-icon">
                        <select class="category-select">
                            <option value="" disabled selected hidden>Категория товара</option>
                            <option value="category1">Category 1</option>
                            <option value="category2">Category 2</option>
                            <option value="category3">Category 3</option>
                        </select>
                    </div>
                </div>
                <div class="input-container">
                    <img src="/img/warehouse/s-IconCalendar.svg" alt="Calendar Icon" class="calendar-icon">
                    <input type="text" placeholder="Выберите период">
                </div>
            </div>
            <div class="inventory-table">
                <table>
                    <thead>
                    <tr>
                        <th>№</th>
                        <th>Наименование товара
                            <img src="/img/warehouse/s-sorting.svg" alt="" class="sort-icon">
                        </th>
                        <th>Остаток
                            <img src="/img/warehouse/s-sorting.svg" alt="" class="sort-icon">
                        </th>
                        <th>Единица измерения
                            <img src="/img/warehouse/s-sorting.svg" alt="" class="sort-icon">
                        </th>
                        <th>Цена за единицу
                            <img src="/img/warehouse/s-sorting.svg" alt="" class="sort-icon">
                        </th>
                        <th>Минимальное значение
                            <img src="/img/warehouse/s-sorting.svg" alt="" class="sort-icon">
                        </th>
                        <th>Действия
                            <img src="/img/warehouse/s-sorting.svg" alt="" class="sort-icon">
                        </th>
                    </tr>
                    </thead>
                    <tbody>
                    <tr>
                        <td>1</td>
                        <td>Шампунь</td>
                        <td>-200</td>
                        <td>мл</td>
                        <td>02.05.2024</td>
                        <td>100 мл</td>
                        <td>
                            <button class="edit-button">
                                <img src="/img/warehouse/s-IconEdit.svg" alt="Edit Icon" class="edit-icon">
                            </button>
                            <button class="delete-button">
                                <img src="/img/warehouse/s-delete.svg" alt="Delete Icon" class="delete-icon">
                            </button>
                        </td>
                    </tr>
                    <tr>
                        <td>2</td>
                        <td>Шампунь</td>
                        <td>-200</td>
                        <td>мл</td>
                        <td>02.05.2024</td>
                        <td>100 мл</td>
                        <td>
                            <button class="edit-button">
                                <img src="/img/warehouse/s-IconEdit.svg" alt="Edit Icon" class="edit-icon">
                            </button>
                            <button class="delete-button">
                                <img src="/img/warehouse/s-delete.svg" alt="Delete Icon" class="delete-icon">
                            </button>
                        </td>
                    </tr>
                    <tr>
                        <td>2</td>
                        <td>Шампунь</td>
                        <td>-200</td>
                        <td>мл</td>
                        <td>02.05.2024</td>
                        <td>100 мл</td>
                        <td>
                            <button class="edit-button">
                                <img src="/img/warehouse/s-IconEdit.svg" alt="Edit Icon" class="edit-icon">
                            </button>
                            <button class="delete-button">
                                <img src="/img/warehouse/s-delete.svg" alt="Delete Icon" class="delete-icon">
                            </button>
                        </td>
                    </tr>
                    <tr>
                        <td>1</td>
                        <td>Шампунь</td>
                        <td>-200</td>
                        <td>мл</td>
                        <td>02.05.2024</td>
                        <td>100 мл</td>
                        <td>
                            <button class="edit-button">
                                <img src="/img/warehouse/s-IconEdit.svg" alt="Edit Icon" class="edit-icon">
                            </button>
                            <button class="delete-button">
                                <img src="/img/warehouse/s-delete.svg" alt="Delete Icon" class="delete-icon">
                            </button>
                        </td>
                    </tr>
                    <tr>
                        <td>2</td>
                        <td>Шампунь</td>
                        <td>-200</td>
                        <td>мл</td>
                        <td>02.05.2024</td>
                        <td>100 мл</td>
                        <td>
                            <button class="edit-button">
                                <img src="/img/warehouse/s-IconEdit.svg" alt="Edit Icon" class="edit-icon">
                            </button>
                            <button class="delete-button">
                                <img src="/img/warehouse/s-delete.svg" alt="Delete Icon" class="delete-icon">
                            </button>
                        </td>
                    </tr>
                    <tr>
                        <td>2</td>
                        <td>Шампунь</td>
                        <td>-200</td>
                        <td>мл</td>
                        <td>02.05.2024</td>
                        <td>100 мл</td>
                        <td>
                            <button class="edit-button">
                                <img src="/img/warehouse/s-IconEdit.svg" alt="Edit Icon" class="edit-icon">
                            </button>
                            <button class="delete-button">
                                <img src="/img/warehouse/s-delete.svg" alt="Delete Icon" class="delete-icon">
                            </button>
                        </td>
                    </tr>
                    </tbody>
                </table>
            </div>
        </div>
        <div id="content2" class="tab-content" style="display:none;">
            <div>
                <button class="add-button" id="openModalBtnTab2" onclick="openModalForTab('myModalTab2')">Добавить +
                </button>
            </div>
            <div class="stock_filter">
                <div class="filter-container">
                    <div class="select-container">
                        <img src="/img/warehouse/s-Filter.svg" alt="Filter Icon" class="filter-icon">
                        <select class="category-select">
                            <option value="" disabled selected hidden>Категория товара</option>
                            <option value="category1">Category 1</option>
                            <option value="category2">Category 2</option>
                            <option value="category3">Category 3</option>
                        </select>
                    </div>
                </div>
                <div class="input-container">
                    <img src="/img/warehouse/s-IconCalendar.svg" alt="Calendar Icon" class="calendar-icon">
                    <input type="text" placeholder="Выберите период">
                </div>
            </div>
            <div class="inventory-table">
                <table>
                    <thead>
                    <tr>
                        <th>№</th>
                        <th>Наименование товара
                            <img src="/img/warehouse/s-sorting.svg" alt="" class="sort-icon">
                        </th>
                        <th>количество
                            <img src="/img/warehouse/s-sorting.svg" alt="" class="sort-icon">
                        </th>
                        <th>Единица измерения
                            <img src="/img/warehouse/s-sorting.svg" alt="" class="sort-icon">
                        </th>
                        <th>цена за единицу (сум)
                            <img src="/img/warehouse/s-sorting.svg" alt="" class="sort-icon">
                        </th>
                        <th>создано
                            <img src="/img/warehouse/s-sorting.svg" alt="" class="sort-icon">
                        </th>
                        <th>Действия
                            <img src="/img/warehouse/s-sorting.svg" alt="" class="sort-icon">
                        </th>
                    </tr>
                    </thead>
                    <tbody>
                    <tr>
                        <td>1</td>
                        <td>Химикаты</td>
                        <td>3000</td>
                        <td>шт</td>
                        <td>20 000 сум</td>
                        <td>02.07.2024</td>
                        <td>
                            <button class="edit-button">
                                <img src="/img/warehouse/s-IconEdit.svg" alt="Edit Icon" class="edit-icon">
                            </button>
                            <button class="delete-button">
                                <img src="/img/warehouse/s-delete.svg" alt="Delete Icon" class="delete-icon">
                            </button>
                        </td>
                    </tr>
                    <tr>
                        <td>1</td>
                        <td>Химикаты</td>
                        <td>3000</td>
                        <td>шт</td>
                        <td>20 000 сум</td>
                        <td>02.07.2024</td>
                        <td>
                            <button class="edit-button">
                                <img src="/img/warehouse/s-IconEdit.svg" alt="Edit Icon" class="edit-icon">
                            </button>
                            <button class="delete-button">
                                <img src="/img/warehouse/s-delete.svg" alt="Delete Icon" class="delete-icon">
                            </button>
                        </td>
                    </tr>
                    </tbody>
                </table>
            </div>
        </div>
        <div id="content3" class="tab-content" style="display:none;">
            <div>
                <button class="add-button" id="openModalBtnTab3" onclick="openModalForTab('myModalTab3')">Добавить +
                </button>
            </div>
            <div class="stock_filter">
                <div class="filter-container">
                    <div class="select-container">
                        <img src="/img/warehouse/s-Filter.svg" alt="Filter Icon" class="filter-icon">
                        <select class="category-select">
                            <option value="" disabled selected hidden>Категория товара</option>
                            <option value="category1">Category 1</option>
                            <option value="category2">Category 2</option>
                            <option value="category3">Category 3</option>
                        </select>
                    </div>
                </div>
                <div class="filter-container">
                    <div class="select-container">
                        <img src="/img/warehouse/s-Filter.svg" alt="Filter Icon" class="filter-icon">
                        <select class="category-select">
                            <option value="" disabled selected hidden>Все услуги</option>
                            <option value="category1">Category 1</option>
                            <option value="category2">Category 2</option>
                            <option value="category3">Category 3</option>
                        </select>
                    </div>
                </div>
                <div class="input-container">
                    <img src="/img/warehouse/s-IconCalendar.svg" alt="Calendar Icon" class="calendar-icon">
                    <input type="text" placeholder="Выберите период">
                </div>
            </div>
            <div class="inventory-table">
                <table>
                    <thead>
                    <tr>
                        <th>№</th>
                        <th>название товара
                            <img src="/img/warehouse/s-sorting.svg" alt="" class="sort-icon">
                        </th>
                        <th>Количество
                            <img src="/img/warehouse/s-sorting.svg" alt="" class="sort-icon">
                        </th>
                        <th>Единица измерения
                            <img src="/img/warehouse/s-sorting.svg" alt="" class="sort-icon">
                        </th>
                        <th>создано
                            <img src="/img/warehouse/s-sorting.svg" alt="" class="sort-icon">
                        </th>
                        <th>
                            Причина
                        </th>
                        <th>Действия
                            <img src="/img/warehouse/s-sorting.svg" alt="" class="sort-icon">
                        </th>
                    </tr>
                    </thead>
                    <tbody>
                    <tr>
                        <td>1</td>
                        <td>Химикаты</td>
                        <td>3000</td>
                        <td>шт</td>
                        <td>20 000 сум</td>
                        <td>
                            <div style="display: flex; align-items: center; justify-content: space-between">
                                <p>Лечение осложнение с помощью Biodentine, Proroot</p>
                                <div class="tooltip">
                                <span>
                                   <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 16 16"
                                   >
<path d="M7.18935 7.16357C7.18935 6.86877 7.52631 6.66858 8.00018 6.66858C8.453 6.66858 8.82153 6.86877 8.82153 7.16357V11.1757C8.82153 11.4285 8.453 11.6812 8.00018 11.6812C7.52631 11.6812 7.18935 11.4285 7.18935 11.1757V7.16357Z"
      fill="#C3C7D1"/>
<path d="M7.13672 4.94165C7.13672 4.5415 7.51578 4.19397 8.00018 4.19397C8.47403 4.19397 8.85318 4.5415 8.85318 4.94165C8.85318 5.3418 8.47406 5.69983 8.00018 5.69983C7.51581 5.69983 7.13672 5.3418 7.13672 4.94165Z"
      fill="#C3C7D1"/>
<path fill-rule="evenodd" clip-rule="evenodd"
      d="M0 8C0 3.578 3.5784 0 8 0C12.422 0 16 3.57849 16 8C16 12.422 12.4216 16 8 16C3.578 16 0 12.4215 0 8ZM1.11629 8C1.11629 11.7958 4.20432 14.8837 8 14.8837C11.7957 14.8837 14.8837 11.7958 14.8837 8C14.8837 4.20422 11.7957 1.11633 8 1.11633C4.20432 1.11633 1.11629 4.20422 1.11629 8Z"
/>
</svg>
                                </span>
                                    <span class="tooltiptext">Кардиография КардиографияКардиографияКардиографияКардиографияКардиографияКардиографияКардиография КардиографияКардиографияКардиографияКардиографияКардиографияКардиографияКардиография КардиографияКардиографияКардиографияКардиографияКардиографияКардиографияКардиография КардиографияКардиографияКардиографияКардиографияКардиографияКардиография</span>
                                </div>
                            </div>
                        </td>
                        <td>
                            <button class="edit-button">
                                <img src="/img/warehouse/s-IconEdit.svg" alt="Edit Icon" class="edit-icon">
                            </button>
                            <button class="delete-button">
                                <img src="/img/warehouse/s-delete.svg" alt="Delete Icon" class="delete-icon">
                            </button>
                        </td>
                    </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>

<!-- Модальное окно для таба 1 -->
<div id="myModalTab1" class="modal modal_center" style="display:none;">
    <div class="modal-content">
        <div class="modal-content-header">
            <h2 class="modal-content-title">ДОБАВИТЬ РАСХОДНИК</h2>
            <span class="close">
                     <img src="/img/warehouse/s-IconClose.svg" alt="Close Icon" class="close-icon">
               </span>
        </div>
        <!--     добавить расходник        -->
        <form>
            <label for="itemName" class="modal_label">Наименование товара</label>
            <input class="modal_input" type="text" id="itemName" name="itemName" placeholder="Введите название">

            <label for="unit" class="modal_label">Единица измерения</label>
            <select id="unit" name="unit" class="modal_input">
                <option value="" disabled selected hidden>Выберите категорию</option>
                <option value="category1">Category 1</option>
                <option value="category2">Category 2</option>
                <option value="category3">Category 3</option>
            </select>

            <label for="minValue" class="modal_label">Минимальное значение</label>
            <input class="modal_input" type="text" id="minValue" name="minValue" placeholder="Введите значение">

        </form>
        <!--     Изменить расходник        -->
        <form>
            <label for="itemName" class="modal_label">Наименование товара</label>
            <input class="modal_input" type="text" id="itemName2" name="itemName" placeholder="Введите название">

            <div class="modal_flex_wrapper">
                <div class="modal_flex">
                    <label for="unit" class="modal_label">Единица измерения</label>
                    <select id="unit2" name="unit" class="modal_input">
                        <option value="" disabled selected hidden>Выберите категорию</option>
                        <option value="category1">Category 1</option>
                        <option value="category2">Category 2</option>
                        <option value="category3">Category 3</option>
                    </select>
                </div>
                <div class="modal_flex">
                    <label for="unit" class="modal_label">Цена за единицу</label>
                    <input class="modal_input" type="text" id="itemName3" name="itemName"
                           placeholder="Напишите сумму"/>
                    <span class="modal_flex-price">сум</span>
                </div>
            </div>

            <label for="minValue" class="modal_label">Минимальное значение</label>
            <input class="modal_input" type="text" id="minValue3" name="minValue" placeholder="Введите значение">

        </form>
        <!--            Удалить расход -->
        <div class="error_wrapper">
            <img src="/img/warehouse/s-delete-icon.svg"/>
            <p class="error">Вы уверены что хотите удалить расход?</p>
        </div>
        <div class="modal__footer">
            <button type="button" class="add-btn">ДОБАВИТЬ</button>
            <!--          Удалить расход  Modalkani knopkasi    -->
            <!--  <button type="button" class="add-btn red-btn">Да</button> -->
            <!--  <button type="button" class="add-btn red-btn2">Нет</button> -->
        </div>
    </div>
</div>

<!-- Модальное окно для таба 2 -->
<div id="myModalTab2" class="modal modal_center" style="display:none;">
    <!-- Содержимое модального окна -->
    <div class="modal-content">
        <div class="modal-content-header">
            <h2 class="modal-content-title">Добавить приход</h2>
            <span class="close">
                     <img src="/img/warehouse/s-IconClose.svg" alt="Close Icon" class="close-icon">
               </span>
        </div>
        <!--     добавить приход        -->
        <form>
            <div class="modal_flex">
                <label for="unit" class="modal_label">Название товара</label>
                <select id="unit5" name="unit" class="modal_input">
                    <option value="" disabled selected hidden>Выберите категорию</option>
                    <option value="category1">Category 1</option>
                    <option value="category2">Category 2</option>
                    <option value="category3">Category 3</option>
                </select>
            </div>
            <div class="modal_flex" style="margin-bottom: 1rem">
                <div class="modal_input pl-h"
                     style="background-color: #EEF0F3; padding: 0.75rem 1rem 0.75rem 0.5rem;" id="itemName22"
                     name="itemName">
                    <label for="unit" class="modal_label_small">Единица измерения</label>
                    <p class="modal_info">-</p>
                </div>
            </div>
            <div class="modal_flex">
                <label for="unit" class="modal_label">Количество</label>
                <input class="modal_input " type="text" id="itemName7" name="itemName"
                       placeholder="Напишите количеству"/>
            </div>
            <div class="modal_flex_wrapper">
                <div class="modal_flex">
                    <label for="unit" class="modal_label">Дата поступления</label>
                    <input class="modal_input pl-h" type="date" id="itemName6" name="itemName"
                           placeholder="Напишите количеству"/>
                </div>
                <div class="modal_flex">
                    <label for="unit" class="modal_label">Цена за единицу</label>
                    <input class="modal_input " type="text" id="itemName5" name="itemName"
                           placeholder="Напишите количеству"/>
                    <span class="modal_flex-price">сум</span>
                </div>
            </div>
        </form>
        <!--     Изменить приход        -->
        <form>
            <div class="modal_flex">
                <label for="unit" class="modal_label">Количество</label>
                <input class="modal_input " type="text" id="itemName8" name="itemName"
                       placeholder="Напишите количеству"/>
            </div>
            <div class="modal_flex_wrapper">
                <div class="modal_flex">
                    <label for="unit" class="modal_label">Дата поступления</label>
                    <input class="modal_input pl-h" type="date" id="itemName9" name="itemName"
                           placeholder="Напишите количеству"/>
                </div>
                <div class="modal_flex">
                    <label for="unit" class="modal_label">Количество</label>
                    <input class="modal_input " type="text" id="itemName10" name="itemName"
                           placeholder="Напишите количеству"/>
                    <span class="modal_flex-price">сум</span>
                </div>
            </div>
        </form>
        <!--            Удалить расход -->
        <div class="error_wrapper">
            <img src="/img/warehouse/s-delete-icon.svg"/>
            <p class="error">Вы уверены что хотите удалить расход?</p>
        </div>
        <div class="modal__footer">
            <button type="button" class="add-btn">ДОБАВИТЬ</button>
            <!--          Удалить расход  Modalkani knopkasi    -->
            <!--  <button type="button" class="add-btn red-btn">Да</button> -->
            <!--  <button type="button" class="add-btn red-btn2">Нет</button> -->
        </div>
    </div>
</div>

<!-- Модальное окно для таба 3 -->
<div id="myModalTab3" class="modal modal_center" style="display:none;">
    <div class="modal-content">
        <div class="modal-content-header">
            <h2 class="modal-content-title">добавить расход</h2>
            <span class="close">
                     <img src="/img/warehouse/s-IconClose.svg" alt="Close Icon" class="close-icon">
               </span>
        </div>
        <!--     добавить расход        -->
        <form>
            <div class="modal_flex">
                <label for="unit" class="modal_label">Название товара</label>
                <div class="modal_flex">
                    <select id="unit11" name="unit" class="modal_input">
                        <option value="" disabled selected hidden>Выберите категорию</option>
                        <option value="category1">Category 1</option>
                        <option value="category2">Category 2</option>
                        <option value="category3">Category 3</option>
                    </select>
                </div>
            </div>
            <div class="modal_flex" style="margin-bottom: 1rem">
                <div class="modal_input pl-h"
                     style="background-color: #EEF0F3; padding: 0.75rem 1rem 0.75rem 0.5rem;" id="itemName21"
                     name="itemName">
                    <label for="unit" class="modal_label_small">Единица измерения</label>
                    <p class="modal_info">Шт.</p>
                </div>
            </div>
            <div class="modal_flex_wrapper">
                <div class="modal_flex">
                    <label for="unit" class="modal_label">Количество</label>
                    <input class="modal_input" type="text" id="itemName13" name="itemName"
                           placeholder="Напишите количеству"/>
                </div>
                <div class="modal_flex">
                    <label for="unit" class="modal_label">Дата расхода</label>
                    <input class="modal_input pl-h" type="date" id="itemName12" name="itemName"
                           placeholder="Напишите количеству"/>
                </div>
            </div>
            <div class="modal_flex">
                <label for="unit" class="modal_label">Причина</label>
                <div class="modal_input pl-h" style="background-color: #EEF0F3" id="itemName14"
                     name="itemName"></div>
            </div>
        </form>
        <!--     Изменить расход       -->
        <form>
            <div class="modal_flex_wrapper">
                <div class="modal_flex">
                    <label for="unit" class="modal_label">Дата расхода</label>
                    <input class="modal_input pl-h" type="date" id="itemName18" name="itemName"
                           placeholder="Напишите количеству"/>
                </div>
                <div class="modal_flex">
                    <label for="unit" class="modal_label">Количество</label>
                    <input class="modal_input" type="text" id="itemName17" name="itemName"
                           placeholder="Напишите количеству"/>
                </div>
            </div>
            <div class="modal_flex">
                <label for="unit" class="modal_label">Причина</label>
                <div class="modal_input pl-h" id="itemName19" name="itemName" style="background-color: #EEF0F3"></div>
            </div>
        </form>
        <!--            Удалить расход -->
        <div class="error_wrapper">
            <img src="/img/warehouse/s-delete-icon.svg"/>
            <p class="error">Вы уверены что хотите удалить расход?</p>
        </div>
        <div class="modal__footer">
            <button type="button" class="add-btn">ДОБАВИТЬ</button>
            <!--          Удалить расход  Modalkani knopkasi    -->
            <!--  <button type="button" class="add-btn red-btn">Да</button> -->
            <!--  <button type="button" class="add-btn red-btn2">Нет</button> -->
        </div>
    </div>
</div>

<script>

    document.addEventListener('DOMContentLoaded', (event) => {
        const selectElement = document.getElementById('category-select');

        selectElement.addEventListener('change', (event) => {
            const selectedValue = event.target.value;
            console.log('Selected Category:', selectedValue);
        });
    });

    function openModalForTab(modalId) {
        const modal = document.getElementById(modalId);
        if (modal) {
            modal.style.display = 'block';
        }
    }

    window.addEventListener('click', (event) => {
        document.querySelectorAll('.modal').forEach((modal) => {
            if (event.target == modal) {
                modal.style.display = 'none';
            }
        });
    });

    document.addEventListener('DOMContentLoaded', (event) => {
        // Функция переключения табов
        function switchTab(tabId) {
            document.querySelectorAll('.tab-content').forEach((content) => {
                content.style.display = 'none';
            });

            document.querySelectorAll('button').forEach((button) => {
                button.classList.remove('active');
            });

            document.getElementById('content' + tabId).style.display = 'block';
            document.getElementById('tab' + tabId).classList.add('active');
        }

        // Установка обработчиков событий на табы
        document.getElementById('tab1').addEventListener('click', () => switchTab(1));
        document.getElementById('tab2').addEventListener('click', () => switchTab(2));
        document.getElementById('tab3').addEventListener('click', () => switchTab(3));

        // Установка обработчиков событий на кнопки "Добавить +"
        document.querySelectorAll('[id^="openModalBtnTab"]').forEach(button => {
            button.addEventListener('click', () => {
                const tabNumber = button.id.replace('openModalBtnTab', '');
                openModalForTab(`myModalTab${tabNumber}`);
            });
        });

        // Открытие первого таба по умолчанию
        switchTab(1);
    });

</script>