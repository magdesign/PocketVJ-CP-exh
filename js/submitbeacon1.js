function Submitbeacon1FormData() {
	var submitme = $("#beacon1").val();

	$.post("submit_beacon1.php", { submitme: submitme },
	   function(data) {
		 $('#actions_output').html(data);
		 $('#beacon1')[0].reset();
	   });
}

