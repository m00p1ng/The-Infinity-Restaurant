// button from card in store
$(document).ready(function () {
    $(".btn-def-modal").click(function () {
        $.ajax({
            type: 'GET',
            url: 'include/prodDesc_query.php',
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

    $(".btn-buy-modal").click(function () {
        $.ajax({
            type: 'GET',
            url: 'include/prodBuy_query.php',
            data: 'prod_id=' + $(this).attr("value"),
            cache: false,
            success: function (value) {
                var data = value.split(".,.");
                $('#BuyName').html(data[0]);
                $('#BuyPic').attr('src', data[1]);
                $(".item-buy-modal").modal("show");
            }
        });
    });
});

// active dropdown and blur
$(document).ready(function () {
    $('.special.three.cards .image').dimmer({
        on: 'hover'
    });

    $('.ui.dropdown').dropdown({
        on: 'hover'
    });
});

// active menu product
$(document).ready(function () {
    $(".type.item").click(function () {
        $('.type.item').removeClass("active");
        $(this).addClass("active");
    });
});

$(document).ready(function () {
    $(".show-prod").hide();
    $("#page-all").show();
    return false;
});

$(document).ready(function () {
    $("#show-all").click(function () {
        $('.show-prod').hide();
        $('#page-all').show();
    });
    $("#show-raw_material").click(function () {
        $('.show-prod').hide();
        $('#page-raw_material').show();
    });
    $("#show-fruit").click(function () {
        $('.show-prod').hide();
        $('#page-fruit').show();
    });
    $("#show-drinking").click(function () {
        $('.show-prod').hide();
        $('#page-drinking').show();
    });
    $("#show-vegetable").click(function () {
        $('.show-prod').hide();
        $('#page-vegetable').show();
    });
    $("#show-test").click(function () {
        $('.show-prod').hide();
        $('#page-test').show();
    });
});