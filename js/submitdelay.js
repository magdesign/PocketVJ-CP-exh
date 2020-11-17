function SubmitdelayFormData() {
	var submitme = $("#delay").val();

	$.post("submit_delay.php", { submitme: submitme },
	   function(data) {
		 $('#actions_output').html(data);
		 $('#delay')[0].reset();
	   });
}

