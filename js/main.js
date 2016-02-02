
 $(document).ready(function(){

     $('#nav_menu').change(function(event){
         if($(event.target).val != ""){
             window.location.href=$(event.target).val();
         }

     });

   document.getElementById('phone').innerHTML= 'Phone Num: 07031244392'
});
