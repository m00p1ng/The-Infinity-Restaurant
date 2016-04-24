function new_employee() {
    $('#add-new-employee-button').click(function () {
        var chk;
        $('#new-employee-modal').modal({
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
                var position = $("#position").val();
                var status = $("#status").val();
                var note = $('#note').val();
                $.ajax({
                    type: 'POST',
                    url: 'include/query/add_save_employee.php',
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
                        position: position,
                        status: status,
                        note: note
                    },
                    cache: false,
                    success: function (value) {
                        var data = value.split(",");
                        chk = data[0];
                        $('#errorMsg-emp').html(data[0]);
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
    $('#new-employee-modal').modal('hide');
    $('#new-employee-complete').modal('show');
    setTimeout(function () {
        location.reload();
    }, 1500);
}

$(document).ready(function () {
    new_employee();
});