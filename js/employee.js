function click_delete_employee() {
    $('.Delete_employee').click(function () {
        var data = $(this).attr("value");
        data = data.split('&');
        var emp_id = data[0];
        var user_id = data[1];
        $('.confirm-delete-modal').modal({
            closable: false,
            onApprove: function () {
                confirm_delete_employee(emp_id, user_id);
            }
        }).modal('show');
    });
}


function confirm_delete_employee(emp_id, user_id) {
    $.ajax({
        type: 'POST',
        url: 'include/query/delete_employee.php',
        data: {
            emp_id: emp_id,
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

function click_edit_employee() {
    $('.Edit_employee').click(function () {
        var id = $(this).attr("value");
        $.ajax({
            type: 'GET',
            url: 'include/query/edit_employee.php',
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
                $('#edit-phone').attr('value', data[5]);
                $('#edit-position').attr('value', data[6]);
                $('#show-position').html(data[6]);
                $('#edit-status').attr('value', data[7]);
                $('#show-status').html(data[7]);
                $('#edit-note').html(data[8]);
                $('#edit-email').attr('value', data[9]);
                $('#edit-street').attr('value', data[10]);
                $('#edit-city').attr('value', data[11]);
                $('#edit-state').attr('value', data[12]);
                $('#edit-zip').attr('value', data[13]);
            }
        });

        $('.edit-employee-modal').modal({
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
                var position = $("#edit-position").val();
                var status = $("#edit-status").val();
                var note = $('#edit-note').val();
                var street = $('#edit-street').val();
                var city = $('#edit-city').val();
                var state = $('#edit-state').val();
                var zip = $('#edit-zip').val();
                $.ajax({
                    type: 'POST',
                    url: 'include/query/edit_save_employee.php',
                    data: {
                        firstname: firstname,
                        lastname: lastname,
                        gender: gender,
                        dob_day: dob_day,
                        dob_month: dob_month,
                        dob_year: dob_year,
                        email: email,
                        phone: phone,
                        position: position,
                        status: status,
                        note: note,
                        id: id,
                        street: street,
                        city: city,
                        state: state,
                        zip: zip
                    },
                    cache: false,
                    success: function (value) {
                        var data = value.split(",");
                        chk = data[0];
                        $('#errorMsg-edit-emp').html(data[0]);
                        if (data[0] == "Registration complete") {
                            edit_complete();
                        }
                    }
                });
                if (chk != "Registration complete") {
                    return false;
                }
            }
        }).modal('show');;
    });
}

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
                var email = $("#email").val();
                var phone = $("#phone").val();
                var position = $("#position").val();
                var status = $("#status").val();
                var note = $('#note').val();
                var street = $('#street').val();
                var city = $('#city').val();
                var state = $('#state').val();
                var zip = $('#zip').val();
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
                        email: email,
                        phone: phone,
                        position: position,
                        status: status,
                        note: note,
                        street: street,
                        city: city,
                        state: state,
                        zip: zip
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

function edit_complete() {
    $('.edit-employee-modal').modal('hide');
    $('#edit-employee-complete').modal('show');
    setTimeout(function () {
        location.reload();
    }, 1500);
}

$(document).ready(function () {
    new_employee();
    click_delete_employee();
    click_edit_employee();
});