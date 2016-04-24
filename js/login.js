function login() {
    var data;
    $("#login-modal").modal({
        onApprove: function () {
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
                    data = value.split(".,.");
                    $("#errorLogin").html(data[0]);
                    if (data[1] == 1) {
                        location.reload();
                    }
                }
            });
            if (data[1] == 0) {
                return false;
            }
        }
    }).modal("show");
}

$(document).ready(function () {
    $(".item#login").click(function () {
        login();
    });
});