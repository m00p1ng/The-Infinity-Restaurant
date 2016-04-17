//login and register modal
$(document).ready(function () {
    $(".item#login").click(function () {
        $("#login-modal").modal("show");
    });

    $(".item#register").click(function () {
        $("#register-modal").modal("show");
    });
});

$(document).ready(function () {
    $(".btn-def-modal").click(function () {
        $.ajax({
            type: 'GET',
            url: 'include/prodBuy_query.php',
            data: 'prod_id=' + $(this).attr("value"),
            cache: false,
            success: function (value) {
                var data = value.split(".,.");
                $('#headProd').html(data[0]);
                $('#imgProd').attr('src', data[1]);
                $('#descProd').html(data[2]);
                $(".item-def-modal").modal("show");
            }
        });
    });
});

$(document).on("click", ".btn-buy-modal", function () {
    $(".item-buy-modal").modal("show");
});

$(document).ready(function () {
    $('.special.three.cards .image').dimmer({
        on: 'hover'
    });

    $('.ui.dropdown').dropdown({
        on: 'click'
    })
});

$(document).ready(function () {
    $(".type.item").click(function () {
        $('.type.item').removeClass("active");
        $(this).addClass("active");
    });
});