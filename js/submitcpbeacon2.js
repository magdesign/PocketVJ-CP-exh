
function SubmitCPBeacon2FormData() {

      var cheibeding = $('input[name=cpbeacon2]:checked').val(); 

      $.post("submit_cpbeacon2.php", { cheibeding: cheibeding },
         function(data) {
               $('#actions_output').html(data);
               $('#cpbeacon2form-1')[0].reset();
               $('#cpbeacon2form-2')[0].reset();
               $('#cpbeacon2form-3')[0].reset();
               $('#cpbeacon2form-4')[0].reset();
               $('#cpbeacon2form-5')[0].reset();
               $('#cpbeacon2form-6')[0].reset();
               $('#cpbeacon2form-7')[0].reset();
               $('#cpbeacon2form-8')[0].reset();
               
         });
}




