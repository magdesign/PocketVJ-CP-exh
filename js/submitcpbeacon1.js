
function SubmitCPBeacon1FormData() {

      var cheibeding = $('input[name=cpbeacon1]:checked').val(); 

      $.post("submit_cpbeacon1.php", { cheibeding: cheibeding },
         function(data) {
               $('#actions_output').html(data);
               $('#cpbeacon1form')[0].reset();
               $('#cpbeacon1form-2')[0].reset();
               $('#cpbeacon1form-3')[0].reset();
               $('#cpbeacon1form-4')[0].reset();
               $('#cpbeacon1form-5')[0].reset();
               $('#cpbeacon1form-6')[0].reset();
               $('#cpbeacon1form-7')[0].reset();
               $('#cpbeacon1form-8')[0].reset();


         });
}




