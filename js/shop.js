$(document).on("click", ".item#sign-in", function () {
	$("#login-modal").modal("show");
});

$(document).on("click", ".item#register", function () {
	$("#register-modal").modal("show");
});

$(document).on("click", ".btn-def-modal", function () {
	$(".item-def-modal").modal("show");
});

$(document).on("click", ".btn-buy-modal", function () {
	$(".item-buy-modal").modal("show");
});

$(document).ready(function () {
	$('.special.four.cards .image').dimmer({
		on: 'hover'
	});

	$('.ui.dropdown').dropdown({
		on: 'click'
	})
});
