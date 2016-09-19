/**
 * Created by nporter on 9/7/16.
 */
$(document).on('click','#submit',function(){
    mailer();
});
function mailer(){
    $('#submit').text('').append("<img src='images/loader.gif' width='64' height='64' />");
    var name = $("#name").val();
    console.log("name: " , name);
    var email = $("#email").val();
    console.log("email: " ,email);
    var subject = $('#subject').val();
    console.log("subject: " , subject);
    var content = $('#textarea').val();
    console.log("content: " ,content);
    $.ajax({
        url: 'contact_handler.php',
        method: 'post',
        dataType:'text',
        data: {
            name:name,
            email:email,
            subject:subject,
            content:content
        },
        success: function(response){
            $("#name").val(" ");
            $("#email").val(" ");
            $('#subject').val(" ");
            $('#textarea').val(" ");
            window.location.replace('index.php');
        },
        error: function(response){
            console.log("there was an error: " ,response);
        }
    })
}
