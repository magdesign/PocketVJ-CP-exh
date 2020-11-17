function SubmitwifiFormData() {
	var submitme = $("#wifiname").val();
    //var submitme2 = $("#wifipass").val();

	$.post("submit_wifi.php", { submitme: submitme },
	   function(data) {
		 $('#actions_output').html(data);
		 $('#wifiname')[0].reset();
	   });
}

