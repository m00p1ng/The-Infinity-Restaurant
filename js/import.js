function Click_add_import() {
    $('#add-new-import-button').click(function () {
        $('#add-import-modal').modal({
            closable: false,
            onApprove: function () {
                var import_day = $('#import-day').val();
                var import_month = $('#import-month').val();
                var import_year = $('#import-year').val();
                var import_hour = $('#import-hour').val();
                var import_minute = $('#import-minute').val();
                var import_cost = $('#import-cost').val();
                var import_note = $('#import_note').val();

                var import_product = [];
                var import_amount = [];
                var import_manu = [];


                for (i = 0; i < 10; i++) {
                    import_product[i] = $('#import_product_' + i).val();
                    import_amount[i] = $('#import_amount_' + i).val();
                    import_manu[i] = $('#import_manu_' + i).val();
                }


                $.ajax({
                    type: "POST",
                    url: "include/query/add_save_import.php",
                    data: {
                        import_day: import_day,
                        import_month: import_month,
                        import_year: import_year,
                        import_hour: import_hour,
                        import_minute: import_minute,
                        import_cost: import_cost,
                        import_note: import_note,
                        import_product: import_product,
                        import_amount: import_amount,
                        import_manu: import_manu
                    },
                    cache: false,
                    success: function (value) {
                        add_import_complete();
                    }
                });
            }
        }).modal('show');
    });
}

function add_import_complete() {
    $('#add-import-modal').modal('hide');
    $('#new-import-complete').modal('show');
    setTimeout(function () {
        location.reload();
    }, 1500);
}

$(document).ready(function () {
    Click_add_import();
    $('.ui.accordion').accordion();
});