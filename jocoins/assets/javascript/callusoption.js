$(document).ready(function(){


    $(".field").hide();
    $(function(){
        $("select[name='contactOption']").change(function() {


            if(this.selectedIndex ===1){

                $("#phoneCall").show();
            }





            else   if (this.selectedIndex === 2){
                $("#textMessage").show();
            }




            else if(this.selectedIndex === 3){

                $("#whatsappMessage").show();
            }





        });




    });

});
