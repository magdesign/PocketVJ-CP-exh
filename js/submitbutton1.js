
function SubmitBTNFormData() {

      var cheibeding = $('input[name=cpbutton1]:checked').val(); 

      $.post("submit_cpbutton1.php", { cheibeding: cheibeding },
         function(data) {
               $('#actions_output').html(data);
               $('#cpbutton1form')[0].reset();
         });
}




