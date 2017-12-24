
   $(document).ready(function(){
         
        PopUpHide();
    });

    //Функция отображения PopUp
    function PopUpShow(){
        $("#popup1").show();
        $("#blindLayer").css("display","block");

    }
    //Функция скрытия PopUp1
    function PopUpHide(){
        $("#popup1").hide();
        $("#blindLayer").css("display","none");
    }

function PopUpShow2() {
    $('#popup2').show();
    $("#blindLayer").css("display","block");
}

function PopUpHide2() {
    $('#popup2').hide();
    $("#blindLayer").css("display","none");
}



