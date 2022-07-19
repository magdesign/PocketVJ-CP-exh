
function SubmitBTNFormData() {

      var cheibeding = $('input[name=cpbutton1]:checked').val(); 

      $.post("submit_cpbutton1.php", { cheibeding: cheibeding },
         function(data) {
               $('#actions_output').html(data);
               $('#cpbutton1form')[0].reset();
               $('#cpbutton1form-1')[0].reset();
               $('#cpbutton1form-2')[0].reset();
               $('#cpbutton1form-3')[0].reset();
               $('#cpbutton1form-4')[0].reset();
               $('#cpbutton1form-5')[0].reset();
               $('#cpbutton1form-6')[0].reset();
               $('#cpbutton1form-7')[0].reset();
               $('#cpbutton1form-8')[0].reset();
               $('#cpbutton1form-9')[0].reset();    
               $('#cpbutton1form-10')[0].reset();          
               $('#cpbutton1form-11')[0].reset(); 
               $('#cpbutton1form-12')[0].reset();
               $('#cpbutton1form-13')[0].reset();
               $('#cpbutton1form-14')[0].reset();
               
         });
}




