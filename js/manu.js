function Click_add_manu() {
    $('#add-new-manu-button').click(function () {
        $('#add-manu-modal').modal({
            closable: false,
            onApprove: function () {
                var name = $('#manu-name').val();
                var address = $('#manu-address').val();
                var email = $('#manu-email').val();
                var phone = $('#manu-phone').val();

                $.ajax({
                    type: 'POST',
                    url: 'include/query/add_save_manu.php',
                    data: {
                        name: name,
                        address: address,
                        email: email,
                        phone: phone
                    },
                    cache: false,
                    success: function (value) {
                        $('.errorMsg').html(value);
                        add_manu_complete();
                    }
                });
            }
        }).modal('show');
    });
}

function add_manu_complete() {
    $('#add-manu-modal').modal('hide');
    $('#new-manu-complete').modal('show');
    setTimeout(function () {
        location.reload();
    }, 1500);
}

$(document).ready(function () {
    Click_add_manu();
});