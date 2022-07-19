
function SubmitBTN3FormData3() {

      var cheibeding = $('input[name=cpbutton3]:checked').val(); 

      $.post("submit_cpbutton3.php", { cheibeding: cheibeding },
         function(data) {
               $('#actions_output').html(data);
               $('#cpbutton3form')[0].reset();
               $('#cpbutton3form-1')[0].reset();
               $('#cpbutton3form-2')[0].reset();
               $('#cpbutton3form-3')[0].reset();
               $('#cpbutton3form-4')[0].reset();
               $('#cpbutton3form-5')[0].reset();
               $('#cpbutton3form-6')[0].reset();
               $('#cpbutton3form-7')[0].reset();
               $('#cpbutton3form-8')[0].reset();
               $('#cpbutton3form-9')[0].reset();
               $('#cpbutton3form-10')[0].reset();
               $('#cpbutton3form-11')[0].reset();
	       $('#cpbutton3form-12')[0].reset();
	       $('#cpbutton3form-13')[0].reset();
	       $('#cpbutton3form-14')[0].reset();
	       

         });
}




