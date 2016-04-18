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
        $('.confirm-delete-modal').modal({
            closable: false,
        }).modal('show');
    });
}

$(document).ready(function () {
    clickPreview();
    clickDelete();
});