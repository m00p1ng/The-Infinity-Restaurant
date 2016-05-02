function Click_add_promo() {
    $('#add-new-promo-button').click(function () {
        $('#add-promo-modal').modal({
            closable: false,
            onApprove: function () {
                var name = $('#promo-name').val();
                var cutprice = $('#promo-cutprice').val();
                var promo_day = $('#promo-day').val();
                var promo_month = $('#promo-month').val();
                var promo_year = $('#promo-year').val();

                $.ajax({
                    type: 'POST',
                    url: 'include/query/add_save_promotion.php',
                    data: {
                        name: name,
                        cutprice: cutprice,
                        promo_day: promo_day,
                        promo_month: promo_month,
                        promo_year: promo_year
                    },
                    cache: false,
                    success: function (value) {
                        $('.errorMsg').html(value);
                        add_promo_complete();
                    }
                });
                return false;
            }
        }).modal('show');
    });
}

function add_promo_complete() {
    $('#add-promo-modal').modal('hide');
    $('#new-promo-complete').modal('show');
    setTimeout(function () {
        location.reload();
    }, 1500);
}

$(document).ready(function () {
    Click_add_promo();
});