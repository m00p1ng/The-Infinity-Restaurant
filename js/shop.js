function clickDescription() {
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
}

function clickBuy() {
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
                $('#BuyAmount').html(data[2]);
                $('#Instock').attr('value', data[2]);
                $('#UnitPrice').html(data[3]);
                $(".item-buy-modal").modal("show");
            }
        });
    });
}

function dropdownActive() {
    $('.ui.dropdown').dropdown({
        on: 'hover'
    });
}

function mouseHover() {
    $('.special.three.cards .image').dimmer({
        on: 'hover'
    });
}

function activeTabMenu() {
    $(".type.item").click(function () {
        $('.type.item').removeClass("active");
        $(this).addClass("active");
    });
}

function searchProduct() {
    $('#search-prod').keyup(function () {
        $('.show-prod').hide();
        $('#page-search').show();
        $('.type.item').removeClass("active");
        $('#show-all').addClass("active");
        $.ajax({
            type: 'GET',
            url: 'include/search.php',
            data: 'name=' + $('#search-prod').val(),
            cache: false,
            success: function (data) {
                $('#page-search').html(data);
                mouseHover();
                clickDescription();
                clickBuy();
            }
        });
    });
}

function Add_Minus() {
    $('#add-value').on('click', function () {
        var $qty = $(this).closest('div').find('#BuyTotal');
        var $max = $('#Instock').val();
        $max = parseInt($max);
        var currentVal = parseInt($qty.val());
        if (!isNaN(currentVal) && currentVal < $max) {
            $qty.val(currentVal + 1);
        }
    });
    $('#minus-value').on('click', function () {
        var $qty = $(this).closest('div').find('#BuyTotal');
        var currentVal = parseInt($qty.val());
        if (!isNaN(currentVal) && currentVal > 1) {
            $qty.val(currentVal - 1);
        }
    });
}

function CloseMsg() {
    $('.message .close').on('click', function () {
        $(this).closest('.message').transition('fade');
    });
}

$(document).ready(function () {
    clickDescription();
    clickBuy();
    mouseHover();
    dropdownActive();
    activeTabMenu();
    searchProduct();
    Add_Minus();
    CloseMsg();
});

// tab Type menu
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
});