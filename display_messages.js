
$(document).ready(function(){
    populate_messages();
});

function populate_messages(){
    var message_obj = {};
    $.ajax({
        url: "display_messages_handler.php",
        dataType:'json',
        method: "post",
        success: function (response){
            for(var i = 0; i<response['content'].length; i++) {
                var src = response['profile_image_path'][i];
                var content = response['content'][i];
                var message_obj = {  //made user obj for possible later use
                    image: src,
                    content:content,
                };
                if (response.status == "success") {
                    $(".message-list").append("<li class='message-list-style'><img  class='user_messages' src='" + message_obj.image + "'/><br>" + message_obj.content + "</li>");
                }
            }
        },
        error: function(response){
            console.log("there was an error: ", response );
        }
    })
}
