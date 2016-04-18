$(document).ready(function () {
    $(".item#login").click(function () {
        $("#login-modal").modal("show");
    });

    $('.ui.toggle.checkbox').checkbox();
});

$(document).ready(function () {
    $("#log-submit").click(function (e) {
        e.preventDefault();

        var username = $("#log-username").val();
        var password = $("#log-password").val();
        var remember = $("#remember").val();

        $.ajax({
            type: 'POST',
            url: 'include/login.php',
            data: {
                username: username,
                password: password
            },
            cache: false,
            success: function (value) {
                var data = value.split(".,.");
                $("#errorLogin").html(data[0]);
                if (data[1] == 1) {
                    location.reload();
                }
            }
        });
    });
});