
function SubmitBTN2FormData2() {

      var cheibeding = $('input[name=cpbutton2]:checked').val(); 

      $.post("submit_cpbutton2.php", { cheibeding: cheibeding },
         function(data) {
               $('#actions_output').html(data);
               $('#cpbutton2form')[0].reset();
               $('#cpbutton2form-1')[0].reset();
               $('#cpbutton2form-2')[0].reset();
               $('#cpbutton2form-3')[0].reset();
               $('#cpbutton2form-4')[0].reset();
               $('#cpbutton2form-5')[0].reset();
               $('#cpbutton2form-6')[0].reset();
               $('#cpbutton2form-7')[0].reset();
               $('#cpbutton2form-8')[0].reset();
               $('#cpbutton2form-9')[0].reset();
               $('#cpbutton2form-10')[0].reset();
               $('#cpbutton2form-11')[0].reset();
               

         });
}




