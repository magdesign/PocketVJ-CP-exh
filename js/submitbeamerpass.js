function SubmitbeamerpassFormData() {
	var submitme = $("#beamerpass").val();

	$.post("submit_beamerpass.php", { submitme: submitme },
	   function(data) {
		 $('#actions_output').html(data);
		 $('#beamerpass')[0].reset();
	   });
}

