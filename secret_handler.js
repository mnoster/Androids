$(document).on('click',".secret",function(){
    check_secret();
});
function check_secret(){
    var secret = $('#secret').val();
    console.log("secret: " , secret);
    $.ajax({
        url:'secret-handler.php',
        method: 'POST',
        data:{
            code:secret
        },
        dataType: 'json',
        success: function(response){
            console.log("response is success: " , response);
            if(response.success == true){
                window.location.replace('register_user.php');
            }
            else{
                $('.login-inner').append($('<div>').addClass("text-danger").text("Invalid code"));

            }
        },
        error: function(response){
            console.log("there was an error: " , response);
        }
    })
}

