function clickPreview() {
    $('.Preview-Product').click(function () {
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

function clickDelete() {
    $('.Delete-Product').click(function () {
        var delete_id = $(this).attr('value');
        $('.confirm-delete-modal').modal({
            closable: false,
            onApprove: function () {
                confirmDelete(delete_id);
            }
        }).modal('show');
    });
}

function confirmDelete(delete_id) {
    var $prod_id = delete_id;
    $.ajax({
        type: 'POST',
        url: 'include/delete.php',
        data: {
            prod_id: $prod_id
        },
        cache: false,
        success: function (value) {
            $('.delete-complete').modal('show');
            setTimeout(function () {
                $('.delete-complete').modal('hide');
                location.reload();
            }, 1500);
        }
    });
}

function clickEdit() {
    $('.Edit-Product').click(function () {
        var id = $(this).attr("value");
        $.ajax({
            type: 'GET',
            url: 'include/edit_query.php',
            data: 'edit_id=' + id,
            chche: false,
            success: function (value) {
                var data = value.split(".,.");
                $('#edit-prod-name').attr('value', data[0]);
                $('#edit-prod-picture').attr('value', data[1]);
                $('#edit-prod-price').attr('value', data[2]);
                $('#edit-prod-amount').attr('value', data[3]);
                $('#edit-prod-desc').html(data[5]);

                $('#edit-prod-type').attr('value', data[4]);
                $('#show-type').html(data[4]);
            }
        });

        $('.edit-modal').modal({
            closable: false,
            onApprove: function () {
                var name = $('#edit-prod-name').val();
                var picture = $('#edit-prod-picture').val();
                var price = $('#edit-prod-price').val();
                var amount = $('#edit-prod-amount').val();
                var type = $('#edit-prod-type').val();
                var text = $('#edit-prod-desc').val();

                $.ajax({
                    type: 'POST',
                    url: 'include/edit_save_query.php',
                    data: {
                        id: id,
                        name: name,
                        picture: picture,
                        amount: amount,
                        price: price,
                        type: type,
                        text: text
                    },
                    chche: false,
                    success: function (value) {}
                });
                $('.edit-modal').modal('hide');
                $('.edit-complete').modal('show');
                setTimeout(function () {
                    location.reload();
                }, 1500);
            }
        }).modal('show');
    });
}

function check_length() {
    $('#edit-prod-desc').keyup(function () {
        var len = $(this).val().length;
        var remain = 500 - len;
        $('.chk_length').html(remain);
    });

    $('#add-prod-desc').keyup(function () {
        var len = $(this).val().length;
        var remain = 500 - len;
        $('.chk_length').html(remain);
    });
}

function new_product() {
    $('.add-new-product-button').click(function () {
        $('.new-product-modal').modal({
            closable: false,
            onApprove: function () {
                var name = $('#add-prod-name').val();
                var picture = $('#add-prod-picture').val();
                var price = $('#add-prod-price').val();
                var amount = $('#add-prod-amount').val();
                var type = $('#add-prod-type').val();
                var text = $('#add-prod-desc').val();

                $.ajax({
                    type: 'POST',
                    url: 'include/add_save_query.php',
                    data: {
                        name: name,
                        picture: picture,
                        price: price,
                        amount: amount,
                        type: type,
                        text: text
                    },
                    chche: false,
                    success: function (value) {}
                });
                $('.new-product-modal').modal('hide');
                $('.new-product-complete').modal('show');
                setTimeout(function () {
                    location.reload();
                }, 1500);
            }
        }).modal('show');
    });
}

$(document).ready(function () {
    clickPreview();
    clickDelete();
    clickEdit();
    check_length();
    new_product();
});