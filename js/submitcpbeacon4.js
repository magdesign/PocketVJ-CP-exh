
function SubmitCPBeacon4FormData() {

      var cheibeding = $('input[name=cpbeacon4]:checked').val(); 

      $.post("submit_cpbeacon4.php", { cheibeding: cheibeding },
         function(data) {
               $('#actions_output').html(data);
               $('#cpbeacon4form-1')[0].reset();
               $('#cpbeacon4form-2')[0].reset();
               $('#cpbeacon4form-3')[0].reset();
               $('#cpbeacon4form-4')[0].reset();
               $('#cpbeacon4form-5')[0].reset();
               $('#cpbeacon4form-6')[0].reset();
               $('#cpbeacon4form-7')[0].reset();
               $('#cpbeacon4form-8')[0].reset();
               
         });
}




