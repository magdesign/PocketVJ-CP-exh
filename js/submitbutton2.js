
function SubmitBTN2FormData2() {

      var cheibeding = $('input[name=cpbutton2]:checked').val(); 

      $.post("submit_cpbutton2.php", { cheibeding: cheibeding },
         function(data) {
               $('#actions_output').html(data);
               $('#cpbutton2form')[0].reset();
         });
}




