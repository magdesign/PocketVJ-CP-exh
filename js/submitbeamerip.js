function SubmitbeameripFormData() {
	var submitme = $("#beamerip").val();

	$.post("submit_beamerip.php", { submitme: submitme },
	   function(data) {
		 $('#actions_output').html(data);
		 $('#beamerip')[0].reset();
	   });
}

