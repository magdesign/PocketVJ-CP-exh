function Submitbeacon2FormData() {
	var submitme = $("#beacon2").val();

	$.post("submit_beacon2.php", { submitme: submitme },
	   function(data) {
		 $('#actions_output').html(data);
		 $('#beacon2')[0].reset();
	   });
}

