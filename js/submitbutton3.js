
function SubmitBTN3FormData3() {

      var cheibeding = $('input[name=cpbutton3]:checked').val(); 

      $.post("submit_cpbutton3.php", { cheibeding: cheibeding },
         function(data) {
               $('#actions_output').html(data);
               $('#cpbutton3form')[0].reset();
         });
}




