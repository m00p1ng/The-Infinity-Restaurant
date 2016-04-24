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

$(document).ready(function () {
    click_delete_customer();
    click_delete_employee();
})