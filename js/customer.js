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

$(document).ready(function () {
    new_customer();
});