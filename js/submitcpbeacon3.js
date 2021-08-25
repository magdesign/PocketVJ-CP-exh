
function SubmitCPBeacon3FormData() {

      var cheibeding = $('input[name=cpbeacon3]:checked').val(); 

      $.post("submit_cpbeacon3.php", { cheibeding: cheibeding },
         function(data) {
               $('#actions_output').html(data);
               $('#cpbeacon3form-1')[0].reset();
               $('#cpbeacon3form-2')[0].reset();
               $('#cpbeacon3form-3')[0].reset();
               $('#cpbeacon3form-4')[0].reset();
               $('#cpbeacon3form-5')[0].reset();
               $('#cpbeacon3form-6')[0].reset();
               $('#cpbeacon3form-7')[0].reset();
               $('#cpbeacon3form-8')[0].reset();
               
         });
}




