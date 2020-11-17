function SubmitwifipassFormData() {
	var submitme2 = $("#wifipass").val();

	$.post("submit_wifipass.php", { submitme2: submitme2 },
	   function(data) {
		 $('#actions_output').html(data);
		 $('#wifipass')[0].reset();
	   });
}

