function Submitbeacon3FormData() {
	var submitme = $("#beacon3").val();

	$.post("submit_beacon3.php", { submitme: submitme },
	   function(data) {
		 $('#actions_output').html(data);
		 $('#beacon3')[0].reset();
	   });
}

