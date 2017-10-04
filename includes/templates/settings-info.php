<h2><?php _e('Общая информация', DP_WPM_TEXT_DOMAIN); ?></h2>
<p><?php _e(
    'Для создания попапа необходимо предварительно оформить шаблон, который будет использоваться при создании.<br><br>

    Доступно несколько типов шаблонов:<br>
    1 - Шаблон попапа с формой<br>
    2 - Шаблон попапа c кнопкой<br><br>

    В зависимости от выбраного шаблона при создании попапа будут доступны разные поля для заполнения.
    Для попапа с формой будет доступно поле «Встроенная форма», а для попапа с кнопкой поле «URL целевого действия». <br><br>

    <span class="dp-wpm-bold-font">Сборка попапа с формой</span><br>
    Если в целевом шаблоне присутствует форма, то атрибуты встроенной формы заменят атрибуты формы в шаблоне. Скрытые input-элементы формы будут добавлены к существующим
    input-элементам. Если атрибут name у таких input-элементов совпадает, то элементы встроенной формы заменят input-элементы формы в шаблоне.<br><br>

    Если форма в шаблоне отсутствует, то необходимо указать место, куда нужно вставить встроенную форму с помощью макроса [wpm-form]. В этом случае встроенная форма
    вставится в шаблон без изменений.<br><br>

    <span class="dp-wpm-bold-font">Сборка попапа с кнопкой</span><br>
    Так как у попапа с кнопкой указывается только URL целевого действия, то в шаблоне должен присутствовать макрос [wpm-action-url], указывающий, где должен
    находится этот URL.<br><br>',
        DP_WPM_TEXT_DOMAIN); ?>
</p>
<h2><?php _e('Доступные макросы для шаблонов попапа', DP_WPM_TEXT_DOMAIN); ?></h2>
<p>
    <span class="dp-wpm-bold-font">[wpm-title]</span> - <?php _e('Макрос для вставки заголовка.', DP_WPM_TEXT_DOMAIN); ?><br>
    <span class="dp-wpm-bold-font">[wpm-desc]</span> - <?php _e('Макрос для вставки описания.', DP_WPM_TEXT_DOMAIN); ?><br>
    <span class="dp-wpm-bold-font">[wpm-img]</span> - <?php _e('Макрос для вставки изображения. Изображение вставляется из миниатюры записи попапа.', DP_WPM_TEXT_DOMAIN); ?><br>
    <span class="dp-wpm-bold-font">[wpm-action-url]</span> - <?php _e('Макрос для вставки URL целевого действия для попапов с кнопкой.', DP_WPM_TEXT_DOMAIN); ?><br>
    <span class="dp-wpm-bold-font">[wpm-button-name]</span> - <?php _e('Макрос для указания названия действия (подписаться, смотреть и т.д.).', DP_WPM_TEXT_DOMAIN); ?><br>
    <span class="dp-wpm-bold-font">[wpm-form]</span> - <?php _e('Макрос для вставки встроенной формы для попапов с формой.', DP_WPM_TEXT_DOMAIN); ?><br>
</p>