function Submitbeacon4FormData() {
	var submitme = $("#beacon4").val();

	$.post("submit_beacon4.php", { submitme: submitme },
	   function(data) {
		 $('#actions_output').html(data);
		 $('#beacon4')[0].reset();
	   });
}

