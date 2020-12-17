function SubmitcountdownFormData() {
	var submitme = $("#countdown").val();

	$.post("submit_countdown.php", { submitme: submitme },
	   function(data) {
		 $('#actions_output').html(data);
		 $('#countdown')[0].reset();
	   });
}

