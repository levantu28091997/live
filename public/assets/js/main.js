$(document).ready(function(){
    $("#inpusername").keyup(function(){
        var user = $(this).val();
        $.post("./Ajax/checkUsername", {un: user}, function(data){
            if (data == 'false') {
                var mg = "Ten hop le"
            }else{
                var mg = "Khong hop le"
            }
            $("#message").html(mg);
        });
    });
});