$(document).ready(function () {

    //Фильтр данных по чекбоксам

    let products = [];


    $('input.products-input').on('change', function (e) {

        e.preventDefault();
        let products = []; // reset

        $(':checkbox:checked').each(function(i) {
            products.push($(this).val());
        });


        $.ajax({
            url: 'filter.php',
            type: 'post',
            data: {request: products},
            cache: false,
            success: function (data) {
                $('.ajax-table').html(data);
            }
        });

    });

});

