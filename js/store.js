function clickDescription() {
    $(".btn-def-modal").click(function () {
        $.ajax({
            type: 'GET',
            url: 'include/query/prod_description.php',
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
        var id = $(this).attr("value");
        $('#errorMsg-addtocart').html("");
        $.ajax({
            type: 'GET',
            url: 'include/query/prod_buy.php',
            data: 'prod_id=' + id,
            cache: false,
            success: function (value) {
                var data = value.split(".,.");
                $('#BuyName').html(data[0]);
                $('#BuyPic').attr('src', data[1]);
                $('#BuyAmount').html(data[2]);
                $('#Instock').attr('value', data[2]);
                $('#UnitPrice').attr('value', data[3]);
                $('.total_price').html(data[3]);
                $('.add-to-cart').attr('value', id);
                $(".item-buy-modal").modal("show");
            }
        });
    });
}

function AddtoCart() {
    $(".add-to-cart").click(function () {
        var id = $(this).val();
        var amount = $('#BuyTotal').val();
        $.ajax({
            type: 'GET',
            url: 'include/query/add_to_cart.php',
            data: {
                prod_id: id,
                prod_amount: amount
            },
            cache: false,
            success: function (value) {
                var data = value.split(".,.");
                $('#errorMsg-addtocart').html(data[0]);
                if (data[1] == 1) {
                    $(".item-buy-modal").modal("hide");
                    $('#show-prod-cart').append(data[2]);
                    CloseMsg();
                }
            }
        });
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
            url: 'include/query/search_prod.php',
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
        var unitprice = parseInt($('#UnitPrice').val());
        $max = parseInt($max);
        var currentVal = parseInt($qty.val());
        if (!isNaN(currentVal) && currentVal < $max) {
            $qty.val(currentVal + 1);
            var total = (currentVal + 1) * unitprice;
            $('.total_price').html(total);
        }
    });
    $('#minus-value').on('click', function () {
        var $qty = $(this).closest('div').find('#BuyTotal');
        var currentVal = parseInt($qty.val());
        var unitprice = parseInt($('#UnitPrice').val());
        if (!isNaN(currentVal) && currentVal > 1) {
            $qty.val(currentVal - 1);
            var total = (currentVal - 1) * unitprice;
            $('.total_price').html(total);
        }
    });
}

function CloseMsg() {
    $('.message .close').on('click', function () {
        $(this).closest('.message').transition('fade');
    });
}

function checkout_login() {
    $('#checkout_login').click(function () {
        login();
    });
}

$(document).ready(function () {
    clickDescription();
    clickBuy();
    AddtoCart();
    mouseHover();
    activeTabMenu();
    searchProduct();
    Add_Minus();
    CloseMsg();
    checkout_login();
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