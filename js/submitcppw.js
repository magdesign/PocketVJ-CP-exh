function SubmitcpFormData() {
	var cppassword = $("#cppassword").val();


	$.post("submit_cppw.php", { cppassword: cppassword },
	   function(data) {
		 $('#actions_output').html(data);
		 $('#cppasswordform')[0].reset();
	   });
}

