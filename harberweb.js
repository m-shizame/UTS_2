$(document).ready(function () {
    $ ("#btnsearch").click(function(e){
        var txtInput = $ ("#srcInv").val();
        $("#infoinvaccr").html("Nama Anda : " + txtInput);
        $.ajax({

        type: "POST",
        url: "/assets/scripts/ajax/getcurl.php",
        data:"",
        success: function (Response) {
            $("#infoinvaccr").html
        }
        })
    });
    
});