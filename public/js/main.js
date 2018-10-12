$(function() {

    /* Переменная - флаг для определения выполнеяется ли в данный момент AJAX запрос */
    var AJAXinProgress = false;

    /* С какой статьи надо делать выборку из базы при ajax-запросе */
    var startFrom = 1;

    $('#goodsList').scroll(function() {

        if ($('#goodsList').scrollTop() + $('#goodsList').height() >= $('#goodsList').height() + 10 && !AJAXinProgress) {
            $.ajax({
                /* адрес файла-обработчика запроса */
                url: '/',
                /* метод отправки данных */
                method: 'POST',
                /* данные, которые мы передаем в файл-обработчик */
                data: { "startFrom": startFrom },
                /* что нужно сделать до отправки запрса */
                beforeSend: function() {
                        /* меняем значение флага на true, т.е. запрос сейчас в процессе выполнения */
                        AJAXinProgress = true;
                    }
                    /* что нужно сделать по факту выполнения запроса */
            }).done(function(data) {

                /* Добавим к списку товаров готовый рендер, пришедший от обработчика*/

                $('#goodsList').append(data);

                AJAXinProgress = false;
                // Увеличиваем на 1 порядковый номер товара, с которого надо начинать выборку из базы
                startFrom += 1;

            });
        }
    })

});