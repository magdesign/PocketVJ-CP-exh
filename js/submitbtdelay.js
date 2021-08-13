function SubmitbtdelayFormData() {
	var submitme = $("#btdelay").val();

	$.post("submit_btdelay.php", { submitme: submitme },
	   function(data) {
		 $('#actions_output').html(data);
		 $('#btdelay')[0].reset();
	   });
}

