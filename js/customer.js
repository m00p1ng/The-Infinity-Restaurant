function click_delete_customer() {
    $('.Delete_customer').click(function () {
        var data = $(this).attr("value");
        data = data.split('&');
        var cust_id = data[0];
        var user_id = data[1];
        $('.confirm-delete-modal').modal({
            closable: false,
            onApprove: function () {
                confirm_delete_customer(cust_id, user_id);
            }
        }).modal('show');
    });
}


function confirm_delete_customer(cust_id, user_id) {
    $.ajax({
        type: 'POST',
        url: 'include/query/delete_customer.php',
        data: {
            cust_id: cust_id,
            user_id: user_id
        },
        cache: false,
        success: function () {
            $('.delete-complete').modal('show');
            setTimeout(function () {
                $('.delete-complete').modal('hide');
                location.reload();
            }, 1500);
        }
    });
}

function click_edit_customer() {
    $('.Edit_customer').click(function () {
        var id = $(this).attr("value");
        $.ajax({
            type: 'GET',
            url: 'include/query/edit_customer.php',
            data: 'edit_id=' + id,
            cache: false,
            success: function (value) {
                var data = value.split(".,.");
                $('#edit-firstname').attr('value', data[0]);
                $('#edit-lastname').attr('value', data[1]);
                $('#edit-gender').attr('value', data[2]);
                $('#show-gender').html(data[2]);
                var date = data[3].split('-');
                $('#edit-dob-year').attr('value', date[0]);
                $('#edit-dob-month').attr('value', date[1]);
                $('#edit-dob-day').attr('value', date[2]);
                $('#show-dob-year').html(date[0]);
                $('#show-dob-month').html(date[1]);
                $('#show-dob-day').html(date[2]);
                $('#edit-username').attr('value', data[4]);
                $('#edit-address').attr('value', data[5]);
                $('#edit-phone').attr('value', data[6]);
                $('#edit-email').attr('value', data[7]);
            }
        });

        $('.edit-customer-modal').modal({
            closable: false,
            onApprove: function () {
                var firstname = $("#edit-firstname").val();
                var lastname = $("#edit-lastname").val();
                var gender = $("#edit-gender").val();
                var dob_day = $("#edit-dob-day").val();
                var dob_month = $("#edit-dob-month").val();
                var dob_year = $("#edit-dob-year").val();
                var address = $("#edit-address").val();
                var email = $("#edit-email").val();
                var phone = $("#edit-phone").val();
                var card_type = $("#edit-card-type").val();
                var card_number = $("#edit-card-number").val();
                var card_cvc = $("#edit-card-cvc").val();
                var exp_month = $('#edit-exp-month').val();
                var exp_year = $('#edit-exp-year').val();
                $.ajax({
                    type: 'POST',
                    url: 'include/query/edit_save_customer.php',
                    data: {
                        firstname: firstname,
                        lastname: lastname,
                        gender: gender,
                        dob_day: dob_day,
                        dob_month: dob_month,
                        dob_year: dob_year,
                        address: address,
                        email: email,
                        phone: phone,
                        card_type: card_type,
                        card_number: card_number,
                        card_cvc: card_cvc,
                        exp_month: exp_month,
                        exp_year: exp_year,
                        id: id
                    },
                    cache: false,
                    success: function (value) {
                        var data = value.split(",");
                        chk = data[0];
                        $('#errorMsg-edit-cust').html(data[0]);
                        if (data[0] == "Registration complete") {
                            edit_complete();
                        }
                    }
                });
                if (chk != "Registration complete") {
                    return false;
                }
            }
        }).modal('show');
    });
}

function new_customer() {
    $('#add-new-customer-button').click(function () {
        var chk;
        $('#new-customer-modal').modal({
            closable: false,
            onApprove: function () {
                var username = $("#username").val();
                var password = $("#password").val();
                var con_password = $("#con_password").val();
                var firstname = $("#firstname").val();
                var lastname = $("#lastname").val();
                var gender = $("#gender").val();
                var dob_day = $("#dob-day").val();
                var dob_month = $("#dob-month").val();
                var dob_year = $("#dob-year").val();
                var address = $("#address").val();
                var email = $("#email").val();
                var phone = $("#phone").val();
                var card_type = $("#card-type").val();
                var card_number = $("#card-number").val();
                var card_cvc = $("#card-cvc").val();
                var exp_month = $("#exp-month").val();
                var exp_year = $("#exp-year").val();

                $.ajax({
                    type: 'POST',
                    url: 'include/register.php',
                    data: {
                        username: username,
                        password: password,
                        con_password: con_password,
                        firstname: firstname,
                        lastname: lastname,
                        gender: gender,
                        dob_day: dob_day,
                        dob_month: dob_month,
                        dob_year: dob_year,
                        address: address,
                        email: email,
                        phone: phone,
                        card_type: card_type,
                        card_number: card_number,
                        card_cvc: card_cvc,
                        exp_month: exp_month,
                        exp_year: exp_year
                    },
                    cache: false,
                    success: function (value) {
                        var data = value.split(",");
                        chk = data[0];
                        $('#errorMsg-cust').html(data[0]);
                        if (data[0] == "Registration complete") {
                            regis_complete();
                        }
                    }
                });
                if (chk != "Registration complete") {
                    return false;
                }
            }
        }).modal('show');
    });
}

function regis_complete() {
    $('#new-customer-modal').modal('hide');
    $('#new-customer-complete').modal('show');
    setTimeout(function () {
        location.reload();
    }, 1500);
}

function edit_complete() {
    $('#edit-customer-modal').modal('hide');
    $('#edit-customer-complete').modal('show');
    setTimeout(function () {
        location.reload();
    }, 1500);
}

$(document).ready(function () {
    new_customer();
    click_delete_customer();
    click_edit_customer();
});